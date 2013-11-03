{function executeCondition _block = null}
    {if $byobBlock->isOperator($_block->s)}
        (
    {/if}
        {if isset( $_block->block[0]) && $_block->block[0] != null}
            {call executeCondition _block = $_block->block[0]}
        {/if}
        
        {$byobBlock->getAlternateValue($_block->s)}
        
        {if isset($_block->block[1]) && $_block->block[1] != null}
            {call executeCondition _block = $_block->block[1]}
        {/if}
    {if $byobBlock->isOperator($_block->s)}
        )
    {/if}
{/function}

{function executeIfStatement _block = null}
    if({executeCondition _block = $_block->block})
    {
        {*Execute if statement*}
        {executeListStatement _list = $_block->script->block}
    }
{/function}

{function executeIfElseStatement _block = null}
    if({executeCondition _block = $_block->block})
    {
        {*Execute if statement*}
        {executeListStatement _list = $_block->script[0]->block}
    }
    else
    {
        {*Execute else statement*}
        {executeListStatement _list = $_block->script[1]->block}
    }
{/function}

{function executeFunctionParam _block = null}
    {$_count = 0}
    {if isset($_block->l)}
        {foreach from = $_block->l item = _param}
            {if $_count > 0}
                ,
            {/if}
            {$_count = $_count + 1}
            {$_param}
        {/foreach}
    {/if}
{/function}

{function executeRepeatStatement _block = null}
    repeat({$_block->l})
    {
        {*Execute repeat statement*}
        {executeListStatement _list = $_block->script->block}
    }
{/function}

{function executeStatement _block = null}
    {if $_block->s == 'doIf'}
        {executeIfStatement _block = $_block}
    {elseif $_block->s == 'doIfElse'}
        {executeIfElseStatement _block = $_block}
    {elseif $_block->s == 'doRepeat'}
        {executeRepeatStatement _block = $_block}
    {else}
        {$byobBlock->getAlternateValue($_block->s)}({executeFunctionParam _block = $_block});
    {/if}
{/function}

{function executeListStatement _list = null}
    {if is_array($_list)}
        {foreach from = $_list item = _block}
            {executeStatement _block = $_block}
        {/foreach}
    {else}
        {executeStatement _block = $_list}
    {/if}
{/function}

{executeListStatement _list = $byobBlock->blocks}