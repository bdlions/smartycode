<?php /* Smarty version Smarty-3.1.14, created on 2014-06-30 00:05:54
         compiled from "c_code_condition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454353b0761c2ccd47-24848852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bfbceba92ece8a9a9a0013ebf9aea2ec4098ffe' => 
    array (
      0 => 'c_code_condition.tpl',
      1 => 1404079521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454353b0761c2ccd47-24848852',
  'function' => 
  array (
    'executeFunctionParam' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeAgeStatement' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeFunctionStatement' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeCondition' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53b0761c50b145_78005806',
  'variables' => 
  array (
    '_block' => 0,
    '_count' => 0,
    '_param' => 0,
    'codeBlock' => 0,
    'left_block' => 0,
    'right_block' => 0,
    'block_arr' => 0,
    'keys' => 0,
    'is_left_part_terminal' => 0,
    'is_right_part_terminal' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b0761c50b145_78005806')) {function content_53b0761c50b145_78005806($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_executeFunctionParam')) {
    function smarty_template_function_executeFunctionParam($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeFunctionParam']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(0, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['_block']->value->l)){?>
        <?php  $_smarty_tpl->tpl_vars['_param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_block']->value->l; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_param']->key => $_smarty_tpl->tpl_vars['_param']->value){
$_smarty_tpl->tpl_vars['_param']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['_count']->value>0){?>
                ,
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_count']->value+1, null, 0);?>
            <?php echo $_smarty_tpl->tpl_vars['codeBlock']->value->getAlternateFunctionParamName($_smarty_tpl->tpl_vars['_param']->value);?>

        <?php } ?>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeAgeStatement')) {
    function smarty_template_function_executeAgeStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeAgeStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php echo $_smarty_tpl->tpl_vars['codeBlock']->value->getAlternateValue($_smarty_tpl->tpl_vars['_block']->value->s);?>
[<?php smarty_template_function_executeFunctionParam($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>
]
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeFunctionStatement')) {
    function smarty_template_function_executeFunctionStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeFunctionStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['_block']->value->s=="Age"){?>
        <?php smarty_template_function_executeAgeStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>

    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['codeBlock']->value->getAlternateValue($_smarty_tpl->tpl_vars['_block']->value->s);?>
(<?php smarty_template_function_executeFunctionParam($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>
)
    <?php }?>
    
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php if (!function_exists('smarty_template_function_executeCondition')) {
    function smarty_template_function_executeCondition($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeCondition']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['codeBlock']->value->isOperator($_smarty_tpl->tpl_vars['_block']->value->s)||$_smarty_tpl->tpl_vars['codeBlock']->value->isArithmeticOperator($_smarty_tpl->tpl_vars['_block']->value->s)){?>
        (
    <?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['_block']->value->block)){?>
            
            <?php $_smarty_tpl->tpl_vars['right_block'] = new Smarty_variable('', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['left_block'] = new Smarty_variable('', null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['_block']->value->l)&&is_array($_smarty_tpl->tpl_vars['_block']->value->l)){?>
                <?php $_smarty_tpl->tpl_vars['left_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->l[0], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['right_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->l[1], null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['left_block']->value;?>
<?php echo $_smarty_tpl->tpl_vars['codeBlock']->value->getAlternateValue($_smarty_tpl->tpl_vars['_block']->value->s);?>
<?php echo $_smarty_tpl->tpl_vars['right_block']->value;?>

        <?php }else{ ?>
            
            <?php $_smarty_tpl->tpl_vars['block_arr'] = new Smarty_variable(get_object_vars($_smarty_tpl->tpl_vars['_block']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['keys'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['block_arr']->value), null, 0);?>
            
            <?php $_smarty_tpl->tpl_vars['is_left_part_terminal'] = new Smarty_variable(false, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['is_right_part_terminal'] = new Smarty_variable(false, null, 0);?>
            
            <?php if ($_smarty_tpl->tpl_vars['keys']->value[0]=="block"&&$_smarty_tpl->tpl_vars['keys']->value[1]=="l"){?>
                <?php $_smarty_tpl->tpl_vars['left_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->block, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['right_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->l, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['is_right_part_terminal'] = new Smarty_variable(true, null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['keys']->value[0]=="l"&&$_smarty_tpl->tpl_vars['keys']->value[1]=="block"){?>
                <?php $_smarty_tpl->tpl_vars['left_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->l, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['right_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->block, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['is_left_part_terminal'] = new Smarty_variable(true, null, 0);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars['left_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->block[0], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['right_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['_block']->value->block[1], null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['is_left_part_terminal']->value!=true){?>
                <?php if ($_smarty_tpl->tpl_vars['codeBlock']->value->isFunction($_smarty_tpl->tpl_vars['left_block']->value->s)){?>
                    <?php smarty_template_function_executeFunctionStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['left_block']->value));?>

                <?php }else{ ?>
                    <?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['left_block']->value));?>

                <?php }?>
            <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['left_block']->value;?>

            <?php }?>


            <?php echo $_smarty_tpl->tpl_vars['codeBlock']->value->getAlternateValue($_smarty_tpl->tpl_vars['_block']->value->s);?>


            <?php if ($_smarty_tpl->tpl_vars['is_right_part_terminal']->value!=true){?>
                <?php if ($_smarty_tpl->tpl_vars['codeBlock']->value->isFunction($_smarty_tpl->tpl_vars['right_block']->value->s)){?>
                    <?php smarty_template_function_executeFunctionStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['right_block']->value));?>

                <?php }else{ ?>
                    <?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['right_block']->value));?>

                <?php }?>
            <?php }else{ ?>
                <?php echo $_smarty_tpl->tpl_vars['right_block']->value;?>

            <?php }?>
        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['codeBlock']->value->isOperator($_smarty_tpl->tpl_vars['_block']->value->s)||$_smarty_tpl->tpl_vars['codeBlock']->value->isArithmeticOperator($_smarty_tpl->tpl_vars['_block']->value->s)){?>
        )
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['codeBlock']->value->block));?>
<?php }} ?>