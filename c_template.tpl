{function executeFunctionParam _block = null}
    {$_count = 0}
    {if isset($_block->l)}
        {foreach from = $_block->l item = _param}
            {if $_count > 0}
                ,
            {/if}
            {$_count = $_count + 1}
            {$byobBlock->getAlternateFunctionParamName($_param)}
        {/foreach}
    {/if}
{/function}

{function executeAgeStatement _block = null}
    {$byobBlock->getAlternateValue($_block->s)}[{executeFunctionParam _block = $_block}]
{/function}

{function executeFunctionStatement _block = null}
    {if $_block->s == "Age"}
        {executeAgeStatement _block = $_block}
    {else}
        {$byobBlock->getAlternateValue($_block->s)}({executeFunctionParam _block = $_block})
    {/if}
    
{/function}

{function executeCondition _block = null}
    {if $byobBlock->isOperator($_block->s)}
        (
    {/if}
        {if !isset($_block->block)}
            {* if both sides are constant in a condition*}
            {$right_block = "" }
            {$left_block = "" }
            {if isset($_block->l) && is_array($_block->l)}
                {$left_block = $_block->l[0]}
                {$right_block = $_block->l[1]}
            {/if}
            {$left_block}{$byobBlock->getAlternateValue($_block->s)}{$right_block}
        {else}
            
            {$block_arr = get_object_vars($_block)}
            {$keys = array_keys($block_arr)}
            
            {$is_left_part_terminal = false }
            {$is_right_part_terminal = false }
            
            {if $keys[ 0 ] == "block" && $keys[ 1 ] == "l" }
                {$left_block = $_block->block}
                {$right_block = $_block->l}
                {$is_right_part_terminal = true }
            {elseif $keys[ 0 ] == "l" && $keys[ 1 ] == "block" }
                {$left_block = $_block->l}
                {$right_block = $_block->block}
                {$is_left_part_terminal = true }
            {else}
                {$left_block = $_block->block[0]}
                {$right_block = $_block->block[1]}
            {/if}

            {if $is_left_part_terminal != true }
                {if $byobBlock->isFunction($left_block->s)}
                    {executeFunctionStatement _block = $left_block}
                {else}
                    {call executeCondition _block = $left_block}
                {/if}
            {else}
                {$left_block}
            {/if}


            {$byobBlock->getAlternateValue($_block->s)}

            {if $is_right_part_terminal != true }
                {if $byobBlock->isFunction($right_block->s)}
                    {executeFunctionStatement _block = $right_block}
                {else}
                    {call executeCondition _block = $right_block}
                {/if}
            {else}
                {$right_block}
            {/if}
        {/if}
    {if $byobBlock->isOperator($_block->s)}
        )
    {/if}
{/function}
{function executeAssignmentAction _block = null}
    {if !isset($_block->block)}
        {* if both sides are constant in a condition*}
        {$right_block = "" }
        {$left_block = "" }
        {if isset($_block->l) && is_array($_block->l)}
            {$left_block = $_block->l[0]}
            {$right_block = $_block->l[1]}
        {/if}
        {$left_block}{$byobBlock->getAlternateValue($_block->s)}{$right_block};
    {/if}    
{/function}

{function executeIfStatement _block = null}
    if{executeCondition _block = $_block->block}
    {
        {*Execute if statement*}
        {executeListStatement _list = $_block->script->block}
    }
{/function}

{function executeIfElseStatement _block = null}
    if{executeCondition _block = $_block->block}
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
    {elseif $byobBlock->isOperator($_block->s)}
        {executeAssignmentAction _block = $_block}
    {else}
        {executeFunctionStatement _block = $_block};
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
{if isset($byobBlock->variablesMap) && is_array($byobBlock->variablesMap)}
    {foreach from = $byobBlock->variablesMap item = _block}
        {$_block['variable_type']} {$_block['variable_name']} = {$_block['variable_value']};
    {/foreach}
{/if}
{* this statement execute first*}
{executeListStatement _list = $byobBlock->blocks}