{function executeFunctionParam _block = null}
    {$_count = 0}
    {if isset($_block->l)}
        {foreach from = $_block->l item = _param}
            {if $_count > 0}
                ,
            {/if}
            {$_count = $_count + 1}
            {$codeBlock->getAlternateFunctionParamName($_param)}
        {/foreach}
    {/if}
{/function}

{function executeAgeStatement _block = null}
    {$codeBlock->getAlternateValue($_block->s)}[{executeFunctionParam _block = $_block}]
{/function}

{function executeFunctionStatement _block = null}
    {if $_block->s == "Age"}
        {executeAgeStatement _block = $_block}
    {else}
        {$codeBlock->getAlternateValue($_block->s)}({executeFunctionParam _block = $_block})
    {/if}
    
{/function}
{function executeCondition _block = null}
    {if $codeBlock->isOperator($_block->s) || $codeBlock->isArithmeticOperator($_block->s)}
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
            {$left_block}{$codeBlock->getAlternateValue($_block->s)}{$right_block}
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
                {if $codeBlock->isFunction($left_block->s)}
                    {executeFunctionStatement _block = $left_block}
                {else}
                    {call executeCondition _block = $left_block}
                {/if}
            {else}
                {$left_block}
            {/if}


            {$codeBlock->getAlternateValue($_block->s)}

            {if $is_right_part_terminal != true }
                {if $codeBlock->isFunction($right_block->s)}
                    {executeFunctionStatement _block = $right_block}
                {else}
                    {call executeCondition _block = $right_block}
                {/if}
            {else}
                {$right_block}
            {/if}
        {/if}
    {if $codeBlock->isOperator($_block->s) || $codeBlock->isArithmeticOperator($_block->s)}
        )
    {/if}
{/function}
{executeCondition _block = $codeBlock->block}