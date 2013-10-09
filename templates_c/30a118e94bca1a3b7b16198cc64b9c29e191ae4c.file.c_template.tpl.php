<?php /* Smarty version Smarty-3.1.14, created on 2013-10-09 17:10:33
         compiled from "c_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28105524985a132ba50-83859410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a118e94bca1a3b7b16198cc64b9c29e191ae4c' => 
    array (
      0 => 'c_template.tpl',
      1 => 1381331430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28105524985a132ba50-83859410',
  'function' => 
  array (
    'executeStatement' => 
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
    'executeIfStatement' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeIfElseStatement' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeFunctionParam' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeRepeatStatement' => 
    array (
      'parameter' => 
      array (
        '_block' => NULL,
      ),
      'compiled' => '',
    ),
    'executeStatementOfList' => 
    array (
      'parameter' => 
      array (
        '_blocks' => NULL,
      ),
      'compiled' => '',
    ),
    'executeListStatement' => 
    array (
      'parameter' => 
      array (
        '_list' => NULL,
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524985a1565fd5_33582599',
  'variables' => 
  array (
    '_block' => 0,
    'byobBlock' => 0,
    '_count' => 0,
    '_param' => 0,
    '_list' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524985a1565fd5_33582599')) {function content_524985a1565fd5_33582599($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_executeCondition')) {
    function smarty_template_function_executeCondition($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeCondition']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['byobBlock']->value->isOperator($_smarty_tpl->tpl_vars['_block']->value->s)){?>
        (
    <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['_block']->value->block[0])&&$_smarty_tpl->tpl_vars['_block']->value->block[0]!=null){?>
            <?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value->block[0]));?>

        <?php }?>
        
        <?php echo $_smarty_tpl->tpl_vars['byobBlock']->value->getAlternateValue($_smarty_tpl->tpl_vars['_block']->value->s);?>

        <?php if (isset($_smarty_tpl->tpl_vars['_block']->value->block[1])&&$_smarty_tpl->tpl_vars['_block']->value->block[1]!=null){?>
            <?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value->block[1]));?>

        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['byobBlock']->value->isOperator($_smarty_tpl->tpl_vars['_block']->value->s)){?>
        )
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeIfStatement')) {
    function smarty_template_function_executeIfStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeIfStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    if(<?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value->block));?>
)
    {
        
        <?php smarty_template_function_executeListStatement($_smarty_tpl,array('_list'=>$_smarty_tpl->tpl_vars['_block']->value->script->block));?>

    }
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeIfElseStatement')) {
    function smarty_template_function_executeIfElseStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeIfElseStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    if(<?php smarty_template_function_executeCondition($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value->block));?>
)
    {
        
        <?php smarty_template_function_executeListStatement($_smarty_tpl,array('_list'=>$_smarty_tpl->tpl_vars['_block']->value->script[0]->block));?>

    }
    else
    {
        
        <?php smarty_template_function_executeListStatement($_smarty_tpl,array('_list'=>$_smarty_tpl->tpl_vars['_block']->value->script[1]->block));?>

    }
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeFunctionParam')) {
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
            <?php echo $_smarty_tpl->tpl_vars['_param']->value;?>

        <?php } ?>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeRepeatStatement')) {
    function smarty_template_function_executeRepeatStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeRepeatStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    repeat(<?php echo $_smarty_tpl->tpl_vars['_block']->value->l;?>
)
    {
        
        <?php smarty_template_function_executeListStatement($_smarty_tpl,array('_list'=>$_smarty_tpl->tpl_vars['_block']->value->script->block));?>

    }
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeStatement')) {
    function smarty_template_function_executeStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['_block']->value->s=='doIf'){?>
        <?php smarty_template_function_executeIfStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>

    <?php }elseif($_smarty_tpl->tpl_vars['_block']->value->s=='doIfElse'){?>
        <?php smarty_template_function_executeIfElseStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>

    <?php }elseif($_smarty_tpl->tpl_vars['_block']->value->s=='doRepeat'){?>
        <?php smarty_template_function_executeRepeatStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>

    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['_block']->value->s;?>
(<?php smarty_template_function_executeFunctionParam($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>
);
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_executeListStatement')) {
    function smarty_template_function_executeListStatement($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['executeListStatement']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (is_array($_smarty_tpl->tpl_vars['_list']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['_block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_block']->key => $_smarty_tpl->tpl_vars['_block']->value){
$_smarty_tpl->tpl_vars['_block']->_loop = true;
?>
            <?php smarty_template_function_executeStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_block']->value));?>

        <?php } ?>
    <?php }else{ ?>
        <?php smarty_template_function_executeStatement($_smarty_tpl,array('_block'=>$_smarty_tpl->tpl_vars['_list']->value));?>

    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php smarty_template_function_executeListStatement($_smarty_tpl,array('_list'=>$_smarty_tpl->tpl_vars['byobBlock']->value->blocks));?>
<?php }} ?>