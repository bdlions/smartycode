{function executeCondition level = 0}
    {$_block = $codeBlocks->getBlockById($blockId)}
    {foreach from = $_block->Sockets->BlockConnector item = blockConnector}
        {call executeBlocks _block = $codeBlocks->getBlockById($blockConnector['con-block-id'])}
    {/foreach}
{/function}

{function executeBlocks level = 0}
    {if $_block['genus-name'] == 'if' || $_block['genus-name'] == 'elseif'}
        {foreach from = $_block->Sockets->BlockConnector item = blockConnector}
            {$connector_block_id = $blockConnector['con-block-id']}
            {if $blockConnector['label'] == 'condition'}
                {$condition_block = $codeBlocks->getBlockById($connector_block_id)}
                if({$condition_block->Label}{executeCondition blockId = $connector_block_id})
            {/if}
            {if $blockConnector['label'] == 'then'}
                {
                {$then_block = $codeBlocks->getBlockById($connector_block_id)}
                {$then_block->Label}{executeCondition blockId = $connector_block_id}
                }
            {/if}
        {/foreach}
    {else}
        {$_block->Label}
        {foreach from = $_block->Sockets->BlockConnector item = blockConnector}
            {call executeBlocks _block = $codeBlocks->getBlockById($blockConnector['con-block-id'])}
        {/foreach}
    {/if}
{/function}
{call executeBlocks _block = $codeBlocks->firstBlock}
      
