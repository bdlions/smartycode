<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include './libs/smarty/Smarty.class.php';
            include 'ByobBlock.php';
            
            $smarty = new Smarty;

            $xml = file_get_contents("codeblocks.xml");
            $smarty->assign('codeBlocks', new CodeBlocks($xml));
            $smarty->display('test.tpl');
            
        ?>
    </body>
</html>
