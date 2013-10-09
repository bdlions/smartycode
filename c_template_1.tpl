{function executeCondition _block = null}
    {if $byobBlock->isOperator($_block['s'])}
        (
    {/if}
        {if $_block->block[0] != null}
            {call executeCondition _block = $_block->block[0]}
        {/if}
        
        {$byobBlock->getAlternateValue($_block['s'])}
        {if $_block->block[1] != null}
            {call executeCondition _block = $_block->block[1]}
        {/if}
    {if $byobBlock->isOperator($_block['s'])}
        )
    {/if}
{/function}

{function executeIfStatement _block = null}
    if({executeCondition _block = $_block->block})
    {
        {*Execute if statement*}
        {foreach from = $_block->script->block item = _nextBlock}
            {executeStatement _block = $_nextBlock}
        {/foreach}
    }
{/function}

{function executeIfStatement _block = null}
    {executeIfStatement _block = $_block}
    else
    {
        {*Execute else statement*}
        {foreach from = $_block->script->block item = _nextBlock}
            {executeStatement _block = $_nextBlock}
        {/foreach}
    }
{/function}

{function executeFunctionParam _block = null}
    {$_count = 0}
    {foreach from = $_block->l item = _param}
        {if $_count > 0}
            ,
        {/if}
        {$_count = $_count + 1}
            {$_param}
        
    {/foreach}
{/function}

{function executeRepeatStatement _block = null}
    repeat({$_block->l})
    {
        {*Execute repeat statement*}
        {foreach from = $_block->script->block item = _nextBlock}
            {executeStatement _block = $_nextBlock}
        {/foreach}
    }
{/function}

{function executeStatement _block = null}
    {if $_block['s'] == 'doIf'}
        {executeIfStatement _block = $_block}
    {elseif $_block['s'] == 'doIfElse'}
        {executeIfStatement _block = $_block}
    {elseif $_block['s'] == 'doRepeat'}
        {executeRepeatStatement _block = $_block}
    {else}
        {$_block['s']}({executeFunctionParam _block = $_block});
    {/if}
{/function}

{foreach from = $byobBlock->blocks item = _block}
    {*executeStatement _block = $_block*}
    {$_block['s']}
{/foreach}