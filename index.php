<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Language Processing</title>      
        
        <link rel="stylesheet" type='text/css' href="http://localhost/smartycode/resources/css/bootstrap.min.css">
        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="http://localhost/smartycode/resources/js/jquery-2.1.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="http://localhost/smartycode/resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://localhost/smartycode/resources/js/jquery.xml2json.js"></script>
        
    </head>
    <body>
        <?php 
            include 'libs/smarty/Smarty.class.php';
            include './ByobBlock_xml.php';
            $smarty = new Smarty;
            $smarty->assign('byobBlock', new ByobBlock('json/sample.xml'));
            $smarty->display('java_template.tpl');
        ?>
        <script type="text/javascript">
            $(function(){
            $.get('json/blockMap.json', function(mapping){
            $.get('json/sample.xml', function(xml) {
            var jsonObj = $.xml2json(xml);

            $.ajax({
                type: "POST",
                url: 'service_language.php',
                dataType: "json",
                data: {project_xml : jsonObj, mapping:mapping, language:'java'},
                complete:function(data){
                                //var generated_code = data.responseText.replace(/(\r\n|\t|\r|\n)/gi, '').replace(/({)/gi,'\r\n{\r\n').replace(/(})/gi,'\r\n}\r\n').replace(/(;)/gi,';\r\n');


                                }
                            });

                        });
                    });
                });
        </script>
    </body>
</html>
