<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=utf-8');

define('ASSETS', 'assets');
define('APP_VUE', 'app');
define('INCLUDES_PATH', __DIR__ . '/includes');
define('PAGES_PATH', __DIR__ . '/pages');

define('BASE_CONTROL', PAGES_PATH . '/base_control');
define('DATA_CONTROL', PAGES_PATH . '/data_control');
define('SQL_EDITOR'  , PAGES_PATH . '/sql_editor');

?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <?php require INCLUDES_PATH . '/page_head.php'; ?>
    <script>
        const apiUrl = 'http://bolderfest.ru/API_DB_CONTROL_PANEL/api.php';
    </script>
    <style></style>
</head>
<body class="wcDesktop">
<div id="app-page">
    <div class="pg-docker" style="border:0px red solid; padding:2px;">

        <?php require INCLUDES_PATH . '/site_menu.php'; ?>

        <div style="background: white; margin:3px 0px 3px 0px; padding:3px; ">
            <current-info
                    :data_info="curUserInfo"
            ></current-info>
        </div>

        <?php require INCLUDES_PATH . '/pages_nav.php'; ?>

        <template v-if="pageName == 'base_control'">

            <?php require BASE_CONTROL . '/main.php'; ?>

        </template>
        <template v-else-if="pageName == 'data_control'">

            <div class="wcDocker">
                <div class="wcLayoutPane" style="width: 100%; left: 0px; top: 0px; bottom: 0px;">
                    <div class="wcPanelTabContent">
                        <table class="wcLayout wcWide wcTall">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="pg-panel-content pg-no-overflow pg-el-container">
                                        <div class="obj_properties container-fluid">
                                            <div class="wcIFrame"
                                                 style="top: 32px; left: 20px; width: 98%; height: 808px;">
                                                <?php require DATA_CONTROL . '/main.php'; ?>
                                            </div>
                                            <div class="wcIFrameFocus"></div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </template>
        <template v-else-if="pageName == 'sql_editor'">

            <?php require SQL_EDITOR . '/main.php'; ?>

        </template>

    </div>
</div>

</body>
<?php require INCLUDES_PATH . '/page_footer.php'; ?>
</html>


<!-- иконка
     <ico name="how_to_vote" color="red" ></ico>
----->

<!--
<my-btn icon="playlist_add" :args="{}" >
   Текст кнопки
/my-btn>
-->

<!--<div class="wcDocker" style="border:1px red solid;">-->
<!--    <div class="wcLayoutPane"-->
<!--         style="width:100%; height: 100%;  position: relative; border:0px blue solid; z-index:99">-->
<!--         <div class="wcFrame wcWide wcTall" style="cursor:default; overflow: auto">-->
<!---->
<!---->
<!--</div></div></div>-->