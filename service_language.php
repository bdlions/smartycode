<?php
    include './libs/smarty/Smarty.class.php';
    include './ByobBlock.php';

    $smarty = new Smarty;
    $xml = $_POST['project_xml'];
    $mapping = $_POST['mapping'];
    $xml= json_decode (json_encode ($xml), FALSE);
    //print_r($mapping['reportAnd']);
    //print_r($mapping);
    $smarty->assign('byobBlock', new ByobBlock($xml, $mapping));
    $smarty->display($_POST['language'].'_template.tpl');
?>