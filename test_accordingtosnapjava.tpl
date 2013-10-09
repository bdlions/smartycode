{* 
    Execute blocks, this is the start function
    it executes all the blocks one by one
    and render output
    @input = start block
*}
{function executeBlocks _block = null}
    {* Check whether the statement is 'if' or 'elseif' statement *}
    {if $_block['genus-name'] == 'if' || $_block['genus-name'] == 'elseif'}
        {foreach from = $_block->Sockets->BlockConnector item = blockConnector}
            {$connector_block_id = $blockConnector['con-block-id']}
            {if $blockConnector['label'] == 'condition'}
                if{call executeCondition blockId = $connector_block_id}
            {/if}
            {if $blockConnector['label'] == 'then' || $blockConnector['label'] == 'else' }
                {
                {$then_block = $codeBlocks->getBlockById($connector_block_id)}
                {call executeBlocks _block = $then_block}
                }
            {/if}
        {/foreach}
    {elseif $codeBlocks->isFunctionBlock($_block['id'])}
        {$_block->Label}({call executeFunctionStatement _block = $_block})
    {else}
        {$_block->Label}
        {foreach from = $_block->Sockets->BlockConnector item = blockConnector}
            {call executeBlocks _block = $codeBlocks->getBlockById($blockConnector['con-block-id'])}
        {/foreach}
    {/if}
{/function}

{* 
    This function executes the condition
    I have used infix algorithm for solving 
    execution of condition statement
    @input = blockId
*}
{function executeCondition blockId = 0}
    {$_block = $codeBlocks->getBlockById($blockId)}
    {if $codeBlocks->isOperator($_block->Label)}
        (
    {/if}
        {call blockAheadDecision _block = $_block->Sockets->BlockConnector[0]}
        {$_block->Label}
        {call blockAheadDecision _block = $_block->Sockets->BlockConnector[1]}
    {if $codeBlocks->isOperator($_block->Label)}
        )
    {/if}
{/function}

{* 
    This function makes decision that 
    we will execute next block for condition or not
    @input = Block
*}
{function blockAheadDecision _block = null}
    {$blockId = $_block['con-block-id']}
    {if $blockId > 0}
        {if $codeBlocks->isFunctionBlock($blockId)}
            {$_block = $codeBlocks->getBlockById($blockId)}
            {$_block->Label}({call executeFunctionStatement _block = $_block})
        {else}
            {call executeCondition blockId = $blockId}
        {/if}
    {/if}
{/function}

{function executeFunctionStatement _block = null}
    {$count = 0}
    {foreach from = $_block->Sockets->BlockConnector item = blockConnector}
        {$_block = $codeBlocks->getBlockById($blockConnector['con-block-id'])}
        {if $count > 0}
            ,
        {/if}
        {$count = $count + 1}
        {$_block->Label}
    {/foreach}
{/function}

{* Start calling *}  
{call executeBlocks _block = $codeBlocks->firstBlock}
