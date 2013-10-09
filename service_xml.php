<?php
    include './libs/smarty/Smarty.class.php';
    include './ByobBlock.php';

    $smarty = new Smarty;

    //$xml = file_get_contents("byob/project2.xml");
    $xml = $_POST['xml'];
    $smarty->assign('byobBlock', new ByobBlock($xml));
    $smarty->display('c_template.tpl');
    


?>