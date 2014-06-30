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

{function executeFunctionStatement _block = null}
    {$codeBlock->getAlternateValue($_block->s)}({executeFunctionParam _block = $_block})    
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
        {$left_block}{$codeBlock->getAlternateValue($_block->s)}{$right_block}
    {/if}    
{/function}

{function executeStatement _block = null}
    {if $codeBlock->isOperator($_block->s)}
        {executeAssignmentAction _block = $_block}
    {else}
        {executeFunctionStatement _block = $_block}
    {/if}
{/function}

{executeStatement _block = $codeBlock->block}