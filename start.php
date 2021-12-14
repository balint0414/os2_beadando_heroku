<?php require_once './protected/config/config.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="<?=CHARSET;?>">
        <title><?=TITLE?></title>
        <?php if(!empty(CSS)){
            $css_item_count = count(CSS);
            
            for($i = 0; $i < $css_item_count; $i++){
                echo '<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSS[$i].'">';
            }       
        }?>
    </head>
    <body>
        <?php include VIEWS_DIR.'header.php';?>
        <?php require PROTECTED_DIR.'menu.php';?>
        <?php require PROTECTED_DIR.'content.php';?>
        <?php include VIEWS_DIR.'footer.php';?>    
    </body>
</html>
