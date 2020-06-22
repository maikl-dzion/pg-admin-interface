<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=utf-8');

define('ASSETS'        , 'assets');
define('APP_VUE'       , 'app');
define('INCLUDES_PATH' , __DIR__ . '/includes');
define('PAGES_PATH'    , __DIR__ . '/pages');

define('DB_PAGE'   , PAGES_PATH . '/db_management');
define('DATA_PAGE' , PAGES_PATH . '/data_management');


?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>pgAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require INCLUDES_PATH . '/page_head.php'; ?>

    <script>
        const apiUrl = 'http://bolderfest.ru/API_DB_CONTROL_PANEL/api.php';
    </script>

    <style>
         .aciTreeLi:hover  {
             background: #ebeef3 !important;
         }
         .btn-class {
             border-radius: 0px;
         }
         .no-radius {
             border-radius: 0px;
         }

         .panel-link-heading:hover{
             color:goldenrod !important;
             border-bottom:2px goldenrod solid;
         }

         .create-class-form {
             display: none;
         }

         .custon-icon {

         }

         .nav-link {
             font-weight: bold;
             font-size: 17px;
         }
         .nav-link:hover {
             border-bottom:1px white solid;
             color:goldenrod !important;
         }

         .aciTreeText {
             font-size: 15px !important; font-weight: bold; color:cadetblue;
         }

         .aciTreeItem {
             /*background: red;*/
             width:240px;
         }

         .aciTreeItem:hover {
             background: #1a354b;
         }

         .aciTreeButton:hover {
             background: lightcoral !important;
         }

         .wcLayoutPane {
             width: 380px;
             border:0px red solid;
         }

         .wcIFrame {
             top: 32px; left: 393px; width: 78.5%; height: 800px;
         }

         #nav-menu-tables {
             color:#326690;
             border-bottom:3px solid #326690;
         }

         .data-table-list-menu {
             text-align: center;
             border:1px gainsboro solid; width:100%; background: ghostwhite;
         }

         .data-table-list-menu a {
             cursor:pointer !important;
             padding:4px !important;
             font-weight: bold !important;
         }

         .wcPanelTab {
             min-width: 100px !important;
             /*border: 1px red solid;*/
             /*margin: 3px 10px 3px 3px !important;*/
             padding:3px !important;
         }

         .table input[type='text'] {
             background: ghostwhite;

             /*width: 100% !important;*/
             /*border: 0px red solid !important;*/
             /*text-align: left !important;*/
         }

         .table td:hover, .table input:hover {
             cursor:pointer;
         }

         .inputTextMinView {
             width: 100% !important;
             border: 0px red solid !important;
             text-align: left !important;
         }

         /* <i class="material-icons"
               style="font-size: 15px; color:gainsboro; vertical-align: middle; margin-right:10px;" >
               backspace</i> */

    </style>

</head>
<body class="wcDesktop" >

<div id="app-page" >
    <div class="pg-docker" style="border:0px red solid;">

        <?php require INCLUDES_PATH . '/site_menu.php'; ?>

        <template v-if="pageName == 'base_managament_page'" >

            <div class="wcDocker" style="background: #ebeef3;" >
                <?php require DB_PAGE . '/left_panel.php'; ?>
                <?php require DB_PAGE .'/nav.php'  ; ?>
                <div class="wcIFrame" style="" >
                    <?php require DB_PAGE . '/main.php'; ?>
                </div>
            </div>

        </template>
        <template v-else-if="pageName == 'data_managament_page'" >

            <div class="wcDocker">
                <div class="wcLayoutPane" style="width: 100%; left: 0px; top: 0px; bottom: 0px;">
                    <div class="wcPanelTabContent" >
                        <table class="wcLayout wcWide wcTall"><tbody><tr><td>
                            <div class="pg-panel-content pg-no-overflow pg-el-container" >
                                <div class="obj_properties container-fluid" >
                                    <div class="wcIFrame" style="top: 32px; left: 20px; width: 98%; height: 808px;">
                                        <?php include DATA_PAGE . '/main.php'; ?>
                                    </div>
                                    <div class="wcIFrameFocus"></div>

                        </div></div></td></tr></tbody></table>
            </div></div></div>

        </template>

    </div>
</div>

</body>
<?php require INCLUDES_PATH . '/page_footer.php'; ?>
</html>


<!--<div class="wcDocker" style="border:1px red solid;">-->
<!--    <div class="wcLayoutPane"-->
<!--         style="width:100%; height: 100%;  position: relative; border:0px blue solid; z-index:99">-->
<!--         <div class="wcFrame wcWide wcTall" style="cursor:default; overflow: auto">-->
<!---->
<!---->
<!--</div></div></div>-->