<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script type="application/json-ld">
            <?php
      include_once './lib/webPage_SchemaOrg.php';
      $basicJson = new webPage_SchemaOrg();
      $vars = $basicJson ->setBasicWebPageVar('FooPage','http://www.everydayhealth.com', 'Testing description',"testPubType","TestPubName");
             
 $pubjson = $basicJson->getBasicWebPageSchema($vars);
    echo $pubjson;
        ?>
            </script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php phpinfo(); ?>
    </body>
</html>
