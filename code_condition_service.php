<?php
    include './libs/smarty/Smarty.class.php';
    include './CodeBlock.php';

    $smarty = new Smarty;
    $xml = $_POST['project_xml'];
    $mapping = $_POST['mapping'];
    $xml= json_decode (json_encode ($xml), FALSE);
    $smarty->assign('codeBlock', new CodeBlock($xml, $mapping));
    $smarty->display('c_code_condition.tpl');
?>