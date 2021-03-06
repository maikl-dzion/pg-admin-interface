<!DOCTYPE html>
<!-- saved from url=(0184)https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&cmd_type=3&obj_type=table&obj_id=16947&sgid=1&sid=1&did=13401&server_type=pg -->
<html class="no-js"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>public.dfg/postgres/postgres@PostgreSQL 12</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- To set pgAdmin4 shortcut icon in browser -->
    <link rel="shortcut icon"
          href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/favicon.ico?ver=42200">

    <!-- Base template stylesheets -->
    <link type="text/css" rel="stylesheet" href="./style.css">
    <link type="text/css" rel="stylesheet" href="./pgadmin.style.css">
    <link type="text/css" rel="stylesheet" href="./pgadmin.css">

    <!--View specified stylesheets-->

    <script>
        /* This is used to change publicPath of webpack at runtime */
        window.getChunkURL = function () {
            return "/pgadmin4/static/js/generated/";
        };
    </script>
    <!-- Base template scripts -->
    <script type="text/javascript" src="./require.min.js.Без названия"></script>
    <script type="text/javascript">
        require.config({
            baseUrl: '',
            urlArgs: 'ver=42200',
            waitSeconds: 0,
            shim: {},
            paths: {
                sources: "/pgadmin4/static/js",
                datagrid: "/pgadmin4/static/js/generated/datagrid",
                sqleditor: "/pgadmin4/static/js/generated/sqleditor",
                'pgadmin.browser.utils': "/pgadmin4/browser/" + "js/utils",
                'pgadmin.browser.endpoints': "/pgadmin4/browser/" + "js/endpoints",
                'pgadmin.browser.messages': "/pgadmin4/browser/" + "js/messages",
                'pgadmin.server.supported_servers': "/pgadmin4/browser/" + "server/supported_servers",
                'pgadmin.user_management.current_user': "/pgadmin4/user_management/" + "current_user",
                'translations': "/pgadmin4/tools/" + "translations"
            }
        });

    </script>

    <!-- View specified scripts -->
    <script type="text/javascript" src="./vendor.main.js.Без названия"></script>
    <script type="text/javascript" src="./vendor.others.js.Без названия"></script>
    <script type="text/javascript" src="./pgadmin_commons.js.Без названия"></script>

    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="sources/generated/browser_nodes" src="./browser_nodes.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="sources/generated/codemirror" src="./codemirror.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="sources/generated/slickgrid" src="./slickgrid.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="sources/generated/sqleditor" src="./sqleditor.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="translations"
            src="./translations.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="pgadmin.browser.endpoints" src="./endpoints.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="pgadmin.browser.utils" src="./utils.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="pgadmin.user_management.current_user" src="./current_user.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="pgadmin.browser.messages" src="./messages.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="pgadmin.server.supported_servers" src="./supported_servers.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="sources/gettext"
            src="./gettext.js.Без названия"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="sources/pgadmin"
            src="./pgadmin.js.Без названия"></script>
    <link id="wcTheme" rel="stylesheet" type="text/css" href="./webcabin.overrides(1).css">
    <style type="text/css" rel="stylesheet">.slickgrid_831631 .slick-header-column {
            left: 1000px;
        }

        .slickgrid_831631 .slick-top-panel {
            height: 25px;
        }

        .slickgrid_831631 .slick-preheader-panel {
            height: 25px;
        }

        .slickgrid_831631 .slick-headerrow-columns {
            height: 25px;
        }

        .slickgrid_831631 .slick-footerrow-columns {
            height: 25px;
        }

        .slickgrid_831631 .slick-cell {
            height: 25px;
        }

        .slickgrid_831631 .slick-row {
            height: 25px;
        }

        .slickgrid_831631 .l0 {
        }

        .slickgrid_831631 .r0 {
        }

        .slickgrid_831631 .l1 {
        }

        .slickgrid_831631 .r1 {
        }

        .slickgrid_831631 .l2 {
        }

        .slickgrid_831631 .r2 {
        }</style>
</head>
<body tabindex="0" class="wcDesktop">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<style>
    body {
        padding: 0px;
    }
</style>
<div id="main-editor_panel">
    <div class="sql-editor">
        <div id="btn-toolbar" class="editor-toolbar" role="toolbar" aria-label="">
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-load-file" type="button" class="btn btn-sm btn-secondary btn-load-file"
                        title="Open File (accesskey + O)" accesskey="O" tabindex="0"
                        aria-label="Open File (accesskey + O)" disabled="">
                    <i class="fa fa-folder-open-o sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-save-file" type="button" class="btn btn-sm btn-secondary"
                        title="Save File (accesskey + S)" accesskey="S" disabled=""
                        aria-label="Save File (accesskey + S)">
                    <i class="fa fa-floppy-o sql-icon-lg" aria-hidden="true" tabindex="0" role="img"></i>
                </button>
                <button id="btn-file-menu-dropdown" type="button"
                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" disabled="" tabindex="0">
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" id="btn-file-menu-save"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span>Сохранить</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-file-menu-save-as"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span>Сохранить как</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-save-data" type="button" class="btn btn-sm btn-secondary" title="Save Data Changes (F6)"
                        accesskey="" tabindex="0" aria-label="Save Data Changes (F6)">
                    <i class="pg-font-icon icon-save-data-changes sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-find" type="button" class="btn btn-sm btn-secondary" aria-label="Найти"
                        title="Найти (Ctrl/Cmd+F)" disabled="">
                    <i class="fa fa-search sql-icon-lg" aria-hidden="true" tabindex="0" role="img"></i>
                </button>
                <button id="btn-find-menu-dropdown" type="button"
                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" title="Найти (accesskey + N)" accesskey="N"
                        tabindex="0" aria-label="Найти (accesskey + N)" disabled="">
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-find"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Найти                                  (Ctrl+F)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-find-next"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Find Next                                  (Ctrl+G)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-find-previous"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Find Previous                                  (Ctrl+Shift+G)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-find-persistent"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span>Persistent Find</span>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-replace"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Замена                                  (Ctrl+Shift+F)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-replace-all"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span>Replace All</span>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" id="btn-find-menu-jump"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span>Перейти (Alt+G)</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-copy-row" type="button" class="btn btn-sm btn-secondary" title="Copy (accesskey + C)"
                        accesskey="C" tabindex="0" aria-label="Copy (accesskey + C)">
                    <i class="fa fa-files-o sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-copy-row-dropdown" type="button"
                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" tabindex="0">
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" id="btn-copy-with-header"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="copy-with-header fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Copy with headers </span>
                        </a>
                    </li>
                </ul>
                <button id="btn-paste-row" type="button" class="btn btn-sm btn-secondary" title="Paste (accesskey + P)"
                        accesskey="P" tabindex="0" disabled="" aria-label="Paste (accesskey + P)">
                    <i class="fa fa-clipboard sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-delete-row" type="button" class="btn btn-sm btn-secondary"
                        title="Delete (accesskey + D)" accesskey="D" tabindex="0" disabled=""
                        aria-label="Delete (accesskey + D)">
                    <i class="fa fa-trash sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-edit-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Редактирование"
                        title="Редактирование" tabindex="0" disabled="">
                    <i class="fa fa-pencil-square-o sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" id="btn-indent-code"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Добавить отступ выделенного (Tab) </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-unindent-code"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Убрать отступ выделенного (Shift+Tab) </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-comment-line"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Строчное комментирование выделенного                                  (Ctrl+/)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-uncomment-line"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Строчное раскомментирование выделенного                                  (Ctrl+.)</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-toggle-comment-block"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Блочное комментирование/раскомментирование выделенного                                  (Shift+Ctrl+/)</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-filter" type="button" class="btn btn-primary" title="Filter (accesskey + F)"
                        accesskey="F" tabindex="0" aria-label="Filter (accesskey + F)">
                    <i class="fa fa-filter sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-filter-dropdown" type="button"
                        class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" title="Filter options (accesskey + I)" accesskey="I"
                        tabindex="0" aria-label="Filter options (accesskey + I)">
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a id="btn-filter-menu" class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">Sort/Filter</a>
                    </li>
                    <li>
                        <a id="btn-include-filter" class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">Filter by Selection</a>
                    </li>
                    <li>
                        <a id="btn-exclude-filter" class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">Exclude by Selection</a>
                    </li>
                    <li>
                        <a id="btn-remove-filter" class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">Remove Sort/Filter</a>
                    </li>
                </ul>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <select id="btn-rows-limit" class="limit form-control form-control-sm limit-enabled"
                        title="Rows limit (accesskey + R)" accesskey="R" tabindex="0"
                        aria-label="Rows limit (accesskey + R)">
                    <option value="-1">No limit</option>
                    <option value="1000">1000 rows</option>
                    <option value="500">500 rows</option>
                    <option value="100">100 rows</option>
                </select>
            </div>

            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-cancel-query" type="button" class="btn btn-sm btn-secondary"
                        title="Cancel query (accesskey + Q)" accesskey="Q" tabindex="0" disabled=""
                        aria-label="Cancel query (accesskey + Q)">
                    <i class="fa fa-stop sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-flash" data-test-selector="execute-refresh-button" type="button"
                        class="btn btn-sm btn-secondary" style="width: 32px;" title="Execute/Refresh (F5)" tabindex="0"
                        data-click-counter="0" aria-label="Execute/Refresh (F5)">
                    <i class="fa fa-play sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-query-dropdown" type="button"
                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" accesskey="X" title="Execute options (accesskey + X)"
                        tabindex="0" aria-label="Execute options (accesskey + X)" disabled="">
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a class="dropdown-item" id="btn-auto-commit"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="auto-commit fa fa-check" aria-hidden="true" role="img"></i>
                            <span> Автофиксация? </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-auto-rollback"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="auto-rollback fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Автоотмена? </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-explain" type="button" class="btn btn-sm btn-secondary" title="План выполнения (F7)"
                        accesskey="" tabindex="0" disabled="" aria-label="План выполнения (F7)">
                    <i class="fa fa-hand-pointer-o sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-explain-analyze" type="button" class="btn btn-sm btn-secondary"
                        title="Explain Analyze (Shift+F7)" accesskey="" disabled=""
                        aria-label="Explain Analyze (Shift+F7)">
                    <i class="fa fa-list-alt sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-explain-options-dropdown" type="button"
                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" tabindex="0" disabled="">
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" id="btn-explain-verbose"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="explain-verbose fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Подробно </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-explain-costs"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="explain-costs fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Стоимость </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-explain-buffers"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="explain-buffers fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Буферы </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-explain-timing"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="explain-timing fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Время </span>
                        </a>
                    </li>
                    <li data-min-ver="100000">
                        <a class="dropdown-item" id="btn-explain-summary"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="explain-summary fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Summary </span>
                        </a>
                    </li>
                    <li data-min-ver="120000">
                        <a class="dropdown-item" id="btn-explain-settings"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <i class="explain-settings fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                            <span> Settings </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-commit" type="button" class="btn btn-sm btn-secondary" title="Commit (Shift+Ctrl+M)"
                        accesskey="" tabindex="0" disabled="" aria-label="Commit (Shift+Ctrl+M)">
                    <i class="pg-font-icon icon-commit sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <button id="btn-rollback" type="button" class="btn btn-sm btn-secondary" title="Rollback (Shift+Ctrl+R)"
                        tabindex="0" disabled="" aria-label="Rollback (Shift+Ctrl+R)">
                    <i class="pg-font-icon icon-rollback sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
            </div>
            <div class="btn-group mr-1" role="group" aria-label="">
                <button id="btn-clear-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Clear (accesskey + L)"
                        accesskey="L" tabindex="0" aria-label="Clear (accesskey + L)">
                    <i class="fa fa-eraser sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" id="btn-clear"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Очистить окно запроса </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="btn-clear-history"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                           tabindex="0">
                            <span> Очистить историю </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group" role="group" aria-label="">
                <button id="btn-download" type="button" class="btn btn-sm btn-secondary"
                        title="Download as CSV/TXT (F8)" tabindex="0" aria-label="Download as CSV/TXT (F8)">
                    <i class="fa fa-download sql-icon-lg" aria-hidden="true" role="img"></i>
                </button>
            </div>
        </div>

        <div class="connection_status_wrapper d-flex">
            <div id="btn-conn-status" role="status"
                 class="connection_status d-flex justify-content-center align-items-center" data-container="body"
                 data-toggle="popover" data-placement="bottom"
                 data-content="The session is idle and there is no current transaction." data-panel-visible="visible"
                 accesskey="T" tabindex="0" data-original-title="" title="">
                <i class="pg-font-icon icon-query-tool-connected" aria-hidden="true"
                   title="Connection status (click for details) (accesskey + T)" role="img">
                </i>
            </div>
            <div class="editor-title" style="background-color: ; color: ;">public.dfg/postgres/postgres@PostgreSQL 12
            </div>
        </div>
        <div id="editor-panel" tabindex="0">
            <div id="fetching_data" class="pg-sp-container sql-editor-busy-fetching d-none">
                <div class="pg-sp-content">
                    <div class="row">
                        <div class="col-12 pg-sp-icon sql-editor-busy-icon"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 pg-sp-text sql-editor-busy-text">Загрузка данных с сервера и подготовка к
                            выводу...
                        </div>
                    </div>
                </div>
            </div>
            <div class="wcDocker">
                <div class="wcDockerTransition"></div>
                <div class="wcLayoutPane" style="height: 384.75px; top: 0px; left: 0px; right: 0px;">
                    <div class="wcLayoutPane" style="width: 1100.25px; left: 0px; top: 0px; bottom: 0px;">
                        <div class="wcFrame wcWide wcTall">
                            <div class="wcFrameTitleBar wcTabTop" style="width: 1100.25px;">
                                <div class="wcTabScroller" style="left: 0px;">
                                    <div class="wcPanelTab wcPanelTabActive" id="0">
                                        <div>
                                            <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                               tabindex="-1" class="panel-link-heading">Query Editor</a></div>
                                    </div>
                                    <div class="wcPanelTab" id="1">
                                        <div>
                                            <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                               tabindex="-1" class="panel-link-heading">История запросов</a></div>
                                    </div>
                                </div>
                                <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; right: 0px;"></div>
                            </div>
                            <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px;">
                                <div class="wcFrameButton" title="Close the currently active panel tab"
                                     aria-label="Close panel" tabindex="0" style="display: none;">
                                    <div class="fa fa-close"></div>
                                </div>
                                <div class="wcFrameButton" title="Collapse the active panel" style="display: none;">
                                    <div class="fa fa-download"></div>
                                    C
                                </div>
                            </div>
                            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                                 style="left: 0px; right: 0px; bottom: 0px;">
                                <div class="wcPanelTabContent" id="0">
                                    <table class="wcLayout wcWide wcTall">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="pg-panel-content">
                                                    <div id="output-panel" tabindex="0"><textarea id="sql_query_tool"
                                                                                                  tabindex="-1"
                                                                                                  style="display: none;"></textarea>
                                                        <div class="CodeMirror cm-s-default CodeMirror-simplescroll bg-gray-lighter opacity-5 hide-cursor-workaround CodeMirror-focused"
                                                             style="font-size: 1em;">
                                                            <div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 25px; left: 180.453px;">
                                                                <textarea autocorrect="off" autocapitalize="off"
                                                                          spellcheck="false" tabindex="0"
                                                                          style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;"></textarea>
                                                            </div>
                                                            <div class="CodeMirror-simplescroll-horizontal"
                                                                 cm-not-content="true" style="display: none;">
                                                                <div></div>
                                                            </div>
                                                            <div class="CodeMirror-simplescroll-vertical"
                                                                 cm-not-content="true" style="display: none;">
                                                                <div></div>
                                                            </div>
                                                            <div class="CodeMirror-scrollbar-filler"
                                                                 cm-not-content="true"></div>
                                                            <div class="CodeMirror-gutter-filler"
                                                                 cm-not-content="true"></div>
                                                            <div class="CodeMirror-scroll" tabindex="-1">
                                                                <div class="CodeMirror-sizer"
                                                                     style="margin-left: 42px; margin-bottom: -16px; border-right-width: 14px; min-height: 50px; min-width: 208.656px; padding-right: 0px; padding-bottom: 0px;">
                                                                    <div style="position: relative; top: 0px;">
                                                                        <div class="CodeMirror-lines"
                                                                             role="presentation">
                                                                            <div role="presentation"
                                                                                 style="position: relative; outline: none;">
                                                                                <div class="CodeMirror-measure">
                                                                                    <div class="CodeMirror-linenumber CodeMirror-gutter-elt">
                                                                                        <div>2</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="CodeMirror-measure"></div>
                                                                                <div style="position: relative; z-index: 1;"></div>
                                                                                <div class="CodeMirror-cursors"
                                                                                     style="">
                                                                                    <div class="CodeMirror-cursor"
                                                                                         style="left: 138.453px; top: 21px; height: 21px;">
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="CodeMirror-code"
                                                                                     role="presentation">
                                                                                    <div style="position: relative;">
                                                                                        <div class="CodeMirror-gutter-wrapper"
                                                                                             style="left: -42px;">
                                                                                            <div class="CodeMirror-linenumber CodeMirror-gutter-elt"
                                                                                                 style="left: 0px; width: 21px;">
                                                                                                1
                                                                                            </div>
                                                                                        </div>
                                                                                        <pre class=" CodeMirror-line "
                                                                                             role="presentation"><span
                                                                                                    role="presentation"
                                                                                                    style="padding-right: 0.1px;"><span
                                                                                                        class="cm-keyword">SELECT</span> <span
                                                                                                        class="cm-operator">*</span> <span
                                                                                                        class="cm-keyword">FROM</span> <span
                                                                                                        class="cm-keyword">public</span><span
                                                                                                        class="cm-variable-2">.dfg</span></span></pre>
                                                                                    </div>
                                                                                    <div style="position: relative;">
                                                                                        <div class="CodeMirror-gutter-wrapper"
                                                                                             style="left: -42px;">
                                                                                            <div class="CodeMirror-linenumber CodeMirror-gutter-elt"
                                                                                                 style="left: 0px; width: 21px;">
                                                                                                2
                                                                                            </div>
                                                                                        </div>
                                                                                        <pre class=" CodeMirror-line "
                                                                                             role="presentation"><span
                                                                                                    role="presentation"
                                                                                                    style="padding-right: 0.1px;"><span
                                                                                                        class="cm-keyword">ORDER</span> <span
                                                                                                        class="cm-keyword">BY</span> <span
                                                                                                        class="cm-keyword">id</span> <span
                                                                                                        class="cm-keyword">ASC</span> </span></pre>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="position: absolute; height: 14px; width: 1px; border-bottom: 0px solid transparent; top: 50px;"></div>
                                                                <div class="CodeMirror-gutters"
                                                                     style="height: 64px; left: 0px;">
                                                                    <div class="CodeMirror-gutter CodeMirror-linenumbers"
                                                                         style="width: 29px;"></div>
                                                                    <div class="CodeMirror-gutter CodeMirror-foldgutter"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="wcPanelTabContent wcPanelTabContentHidden" id="1">
                                    <table class="wcLayout wcWide wcTall">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="pg-panel-content">
                                                    <div id="history_grid" class="sql-editor-history-container d-flex"
                                                         tabindex="0">
                                                        <div style="width: calc(50% - 0.5px);">
                                                            <div class="toggle-and-history-container">
                                                                <div class="query-history-toggle">
                                                                    <label class="control-label">
                                                                        Show queries generated internally by pgAdmin?
                                                                    </label>
                                                                    <div class="toggle btn btn-success btn-xs quick"
                                                                         data-toggle="toggle"
                                                                         style="width: 0px; height: 0px;"><input
                                                                                id="generated-queries-toggle"
                                                                                type="checkbox" class="pgadmin-controls"
                                                                                data-style="quick" data-size="mini"
                                                                                data-on="Да" data-off="Нет"
                                                                                data-onstyle="success"
                                                                                data-offstyle="ternary" checked="">
                                                                        <div class="toggle-group"><label
                                                                                    class="btn btn-success btn-xs toggle-on">Да</label><label
                                                                                    class="btn btn-ternary btn-xs toggle-off">Нет</label><span
                                                                                    class="toggle-handle btn btn-light btn-xs"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="query_list" class="query-history" tabindex="0">
                                                                    <div class="query-group" data-key="2020 06 18">
                                                                        <div class="date-label">Today - 18.06.2020</div>
                                                                        <ul class="query-entries">
                                                                            <li class="list-item pgadmin-query-history-entry selected"
                                                                                tabindex="0" data-key="13:54:09">
                                                                                <div class="entry ">
                                                                                    <div class="query">
                                                                                        <span id="query_source_icon"
                                                                                              class="query-history-icon sql-icon-lg icon-view-data"
                                                                                              role="img"></span>
                                                                                        SELECT * FROM public.dfg
                                                                                        ORDER BY id ASC
                                                                                    </div>
                                                                                    <div class="other-info">
                                                                                        <div class="timestamp">
                                                                                            13:54:09
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gutter gutter-horizontal" style="width: 1px;"></div>
                                                        <div style="width: calc(50% - 0.5px);">
                                                            <div id="query_detail" class="query-detail">
                                                                <div class="error-message-block d-none"></div>
                                                                <div class="info-message-block">
                                                                    <div class="history-info-text">
                                                                        This query was generated by pgAdmin as part of a
                                                                        "View/Edit Data" operation
                                                                    </div>
                                                                </div>
                                                                <div class="metadata-block">
                                                                    <div class="metadata">
                                                                        <div class="item">
                                                                            <span class="value">18.06.2020 13:54:09</span>
                                                                            <span class="description">Дата</span>
                                                                        </div>
                                                                        <div class="item">
                                                                            <span class="value">0</span>
                                                                            <span class="description">Rows Affected</span>
                                                                        </div>
                                                                        <div class="item">
                                                                            <span class="value">301 msec</span>
                                                                            <span class="description">Продолжительность</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="query-statement-block">
                                                                    <div id="history-detail-query">
                                                                        <button class="btn-copy copy-all" tabindex="0"
                                                                                accesskey="y">Copy
                                                                        </button>
                                                                        <button class="btn-copy-editor copy-to-editor d-none"
                                                                                tabindex="0" accesskey="y">Copy to Query
                                                                            Editor
                                                                        </button>
                                                                        <div>
                                                                            <div class="CodeMirror cm-s-default"
                                                                                 style="font-size: 1em;">
                                                                                <div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 0px; left: 0px;">
                                                                                    <textarea autocorrect="off"
                                                                                              autocapitalize="off"
                                                                                              spellcheck="false"
                                                                                              tabindex="-1"
                                                                                              style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;"></textarea>
                                                                                </div>
                                                                                <div class="CodeMirror-vscrollbar"
                                                                                     tabindex="-1" cm-not-content="true"
                                                                                     style="display: block; bottom: 0px;">
                                                                                    <div style="min-width: 1px; height: 32px;"></div>
                                                                                </div>
                                                                                <div class="CodeMirror-hscrollbar"
                                                                                     tabindex="-1" cm-not-content="true"
                                                                                     style="display: block; right: 0px; left: 0px;">
                                                                                    <div style="height: 100%; min-height: 1px; width: 33px;"></div>
                                                                                </div>
                                                                                <div class="CodeMirror-scrollbar-filler"
                                                                                     cm-not-content="true"></div>
                                                                                <div class="CodeMirror-gutter-filler"
                                                                                     cm-not-content="true"></div>
                                                                                <div class="CodeMirror-scroll"
                                                                                     tabindex="-1">
                                                                                    <div class="CodeMirror-sizer"
                                                                                         style="margin-left: 0px; min-width: 3px; padding-right: 0px; padding-bottom: 0px;">
                                                                                        <div style="position: relative;">
                                                                                            <div class="CodeMirror-lines"
                                                                                                 role="presentation">
                                                                                                <div role="presentation"
                                                                                                     style="position: relative; outline: none;">
                                                                                                    <div class="CodeMirror-measure"></div>
                                                                                                    <div class="CodeMirror-measure">
                                                                                                        <pre class="CodeMirror-line"
                                                                                                             role="presentation"><span
                                                                                                                    role="presentation"
                                                                                                                    style="padding-right: 0.1px;"><span
                                                                                                                        class="cm-keyword">SELECT</span> <span
                                                                                                                        class="cm-operator">*</span> <span
                                                                                                                        class="cm-keyword">FROM</span> <span
                                                                                                                        class="cm-keyword">public</span><span
                                                                                                                        class="cm-variable-2">.dfg</span></span></pre>
                                                                                                    </div>
                                                                                                    <div style="position: relative; z-index: 1;"></div>
                                                                                                    <div class="CodeMirror-cursors"></div>
                                                                                                    <div class="CodeMirror-code"
                                                                                                         role="presentation"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent;"></div>
                                                                                    <div class="CodeMirror-gutters"
                                                                                         style="display: none;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <hr class="block-divider">
                                                                </div>
                                                                <div class="message-block">
                                                                    <div class="message">
                                                                        <div class="message-header">Сообщения</div>
                                                                        <div class="content"><pre class="content-value">Запрос выполнен успешно. Общее время выполнения: 301 msec.
обработано строк: 0.</pre>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wcLayoutPane" style="right: 0px; width: 362.75px; top: 0px; bottom: 0px;">
                        <div class="wcFrame wcWide wcTall">
                            <div class="wcFrameTitleBar wcTabTop" style="width: 362.75px;">
                                <div class="wcFrameTitle"><a
                                            href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                            tabindex="-1" class="panel-link-heading">Scratch Pad</a></div>
                                <div class="wcTabScroller" style="left: 0px;"></div>
                                <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; right: 24px;"></div>
                            </div>
                            <div class="wcFrameButtonBar" style="min-width: 24px; width: 24px;">
                                <div class="wcFrameButton" title="Close the currently active panel tab"
                                     aria-label="Close panel" tabindex="0" style="">
                                    <div class="fa fa-close"></div>
                                </div>
                                <div class="wcFrameButton" title="Collapse the active panel" style="display: none;">
                                    <div class="fa fa-download"></div>
                                    C
                                </div>
                            </div>
                            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                                 style="left: 0px; right: 0px; bottom: 0px;">
                                <div class="wcPanelTabContent" id="0">
                                    <table class="wcLayout wcWide wcTall">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="pg-panel-content">
                                                    <div class="sql-scratch"><textarea wrap="off"
                                                                                       tabindex="0"></textarea></div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wcSplitterBar wcTall wcSplitterBarV"
                         style="left: 1097.25px; top: 0px; height: 384.75px;">
                        <div class="wcSplitterBarLine"></div>
                    </div>
                </div>
                <div class="wcLayoutPane" style="bottom: 0px; height: 378.75px; left: 0px; right: 0px;">
                    <div class="wcFrame wcWide wcTall">
                        <div class="wcFrameTitleBar wcTabTop" style="width: 1464px;">
                            <div class="wcTabScroller" style="left: 0px;">
                                <div class="wcPanelTab wcPanelTabActive" id="0">
                                    <div>
                                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                           tabindex="-1" class="panel-link-heading">Результат</a></div>
                                </div>
                                <div class="wcPanelTab" id="1">
                                    <div>
                                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                           tabindex="-1" class="panel-link-heading">План выполнения</a></div>
                                </div>
                                <div class="wcPanelTab" id="2">
                                    <div>
                                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                           tabindex="-1" class="panel-link-heading">Сообщения</a></div>
                                </div>
                                <div class="wcPanelTab" id="3">
                                    <div>
                                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/9020257?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16947&amp;sgid=1&amp;sid=1&amp;did=13401&amp;server_type=pg#"
                                           tabindex="-1" class="panel-link-heading">Notifications</a></div>
                                </div>
                            </div>
                            <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; right: 0px;"></div>
                        </div>
                        <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px;">
                            <div class="wcFrameButton" title="Close the currently active panel tab"
                                 aria-label="Close panel" tabindex="0" style="display: none;">
                                <div class="fa fa-close"></div>
                            </div>
                            <div class="wcFrameButton" title="Collapse the active panel" style="display: none;">
                                <div class="fa fa-download"></div>
                                C
                            </div>
                        </div>
                        <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                             style="left: 0px; right: 0px; bottom: 0px;">
                            <div class="wcPanelTabContent" id="0">
                                <table class="wcLayout wcWide wcTall">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="pg-panel-content hide-vertical-scrollbar">
                                                <div id="datagrid"
                                                     class="sql-editor-grid-container text-12 slickgrid_831631 ui-widget"
                                                     tabindex="0"
                                                     style="height: 343.75px; overflow: hidden; outline: 0px; position: relative;">
                                                    <div tabindex="0" hidefocus=""
                                                         style="position:fixed;width:0;height:0;top:0;left:0;outline:0;"></div>
                                                    <div class="slick-header ui-state-default">
                                                        <div class="slick-header-columns"
                                                             style="left: -1000px; width: 2464px;" unselectable="on">
                                                            <div class="ui-state-default slick-header-column"
                                                                 id="slickgrid_831631row-header-column" title=""
                                                                 style="width: 23px;"><span
                                                                        class="slick-column-name"><span data-id="select-all"
                                                                                                        title="Выделить всё/снять выделение"><br><img
                                                                                class="select-all-icon" src="./select-all-icon.png"></span></span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>
                                                            <div class="ui-state-default slick-header-column selected"
                                                                 id="slickgrid_831631id" title="Editable column"
                                                                 style="width: 91px;">
                                                                <div class="slick-header-button editable-column-header-icon">
                                                                    <i class="fa fa-pencil"></i></div>
                                                                <span class="slick-column-name"><span
                                                                            data-cell-type="column-header-row"
                                                                            data-test="output-column-header"
                                                                            data-column-id="id">  <span
                                                                                class="column-description">    <span
                                                                                    class="column-name">id</span>    <span
                                                                                    class="column-type">[PK] bigint</span>  </span></span></span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>
                                                            <div class="ui-state-default slick-header-column"
                                                                 id="slickgrid_831631dfg" title="Editable column"
                                                                 style="width: 172px;">
                                                                <div class="slick-header-button editable-column-header-icon">
                                                                    <i class="fa fa-pencil"></i></div>
                                                                <span class="slick-column-name"><span
                                                                            data-cell-type="column-header-row"
                                                                            data-test="output-column-header"
                                                                            data-column-id="dfg">  <span
                                                                                class="column-description">    <span
                                                                                    class="column-name">dfg</span>    <span
                                                                                    class="column-type">character varying (234)</span>  </span></span></span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slick-headerrow ui-state-default"
                                                         style="display: none;">
                                                        <div class="slick-headerrow-columns"
                                                             style="width: 307px;"></div>
                                                        <div style="display: block; height: 1px; position: absolute; top: 0px; left: 0px; width: 307px;"></div>
                                                    </div>
                                                    <div class="slick-top-panel-scroller ui-state-default"
                                                         style="display: none;">
                                                        <div class="slick-top-panel" style="width:10000px"></div>
                                                    </div>
                                                    <div class="slick-viewport"
                                                         style="width: 100%; overflow: auto; outline: 0px; position: relative; height: 303.75px;">
                                                        <div class="grid-canvas"
                                                             style="height: 287.75px; width: 307px;">
                                                            <div class="ui-widget-content slick-row even active"
                                                                 style="top:0px">
                                                                <div class="slick-cell l0 r0"><span data-row="0"
                                                                                                    data-cell-type="row-header-selector">1</span>
                                                                </div>
                                                                <div class="slick-cell l1 r1 highlighted_grid_cells active selected"
                                                                     title=""><span style="float:right">1</span></div>
                                                                <div class="slick-cell l2 r2 highlighted_grid_cells"
                                                                     title="">ertttt
                                                                </div>
                                                            </div>
                                                            <div class="ui-widget-content slick-row odd"
                                                                 style="top:25px">
                                                                <div class="slick-cell l0 r0" title=""><span
                                                                            data-row="1"
                                                                            data-cell-type="row-header-selector">2</span>
                                                                </div>
                                                                <div class="slick-cell l1 r1 highlighted_grid_cells selected"
                                                                     title=""><span style="float:right">2</span></div>
                                                                <div class="slick-cell l2 r2 highlighted_grid_cells"
                                                                     title="">vbnmkhhh
                                                                </div>
                                                            </div>
                                                            <div class="ui-widget-content slick-row even"
                                                                 style="top:50px">
                                                                <div class="slick-cell l0 r0"><span data-row="2"
                                                                                                    data-cell-type="row-header-selector">3</span>
                                                                </div>
                                                                <div class="slick-cell l1 r1 highlighted_grid_cells selected"
                                                                     title=""><span style="float:right">3</span></div>
                                                                <div class="slick-cell l2 r2 highlighted_grid_cells"
                                                                     title="">rty
                                                                </div>
                                                            </div>
                                                            <div class="ui-widget-content slick-row odd new-row"
                                                                 style="top:75px">
                                                                <div class="slick-cell l0 r0"></div>
                                                                <div class="slick-cell l1 r1"></div>
                                                                <div class="slick-cell l2 r2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0" hidefocus=""
                                                         style="position:fixed;width:0;height:0;top:0;left:0;outline:0;"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wcPanelTabContent wcPanelTabContentHidden" id="1">
                                <table class="wcLayout wcWide wcTall">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="pg-panel-content">
                                                <div class="sql-editor-explain" tabindex="0"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wcPanelTabContent wcPanelTabContentHidden" id="2">
                                <table class="wcLayout wcWide wcTall">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="pg-panel-content">
                                                <div role="status" class="sql-editor-message" tabindex="0">Запрос
                                                    выполнен успешно. Общее время выполнения: 301 msec.
                                                    обработано строк: 0.
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wcPanelTabContent wcPanelTabContentHidden" id="3">
                                <table class="wcLayout wcWide wcTall">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="pg-panel-content">
                                                <div id="notification_grid" class="sql-editor-notifications"
                                                     tabindex="0">
                                                    <table class="backgrid presentation table table-bordered table-hover table-noouter-border table-bottom-border"
                                                           role="table">
                                                        <thead>
                                                        <tr>
                                                            <th class="sortable renderable recorded_time"
                                                                role="columnheader">
                                                                <button>Recorded time<span class="sort-caret"
                                                                                           aria-hidden="true"></span>
                                                                </button>
                                                            </th>
                                                            <th class="sortable renderable channel" role="columnheader">
                                                                <button>Событие<span class="sort-caret"
                                                                                     aria-hidden="true"></span></button>
                                                            </th>
                                                            <th class="sortable renderable pid" role="columnheader">
                                                                <button>Process ID<span class="sort-caret"
                                                                                        aria-hidden="true"></span>
                                                                </button>
                                                            </th>
                                                            <th class="sortable renderable payload" role="columnheader">
                                                                <button>Payload<span class="sort-caret"
                                                                                     aria-hidden="true"></span></button>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="empty">
                                                            <td colspan="4"><span>No data found</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wcSplitterBar wcWide wcSplitterBarH" style="top: 381.75px; left: 0px;">
                    <div class="wcSplitterBarLine"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    require(['sources/generated/browser_nodes', 'sources/generated/codemirror', 'sources/generated/slickgrid'], function () {
        require(['sources/generated/sqleditor'], function (ctx) {
            var $ = pgAdmin.SqlEditor.jquery,
                S = pgAdmin.SqlEditor.S,
                editorPanel = $('.sql-editor'),
                loadingDiv = $('#fetching_data'),
                msgDiv = loadingDiv.find('.sql-editor-busy-text');

            // Register unload event on window close.
            /* If opened in new tab, close the connection only on tab/window close and
             * not on refresh attempt because the user may cancel the reload
             */
            if (window.opener) {
                $(window).on('unload', function (ev) {
                    $.ajax({
                        method: 'DELETE',
                        url: "/pgadmin4/datagrid/" + "close/" + 9020257
                    });
                });
            } else {
                $(window).on('beforeunload', function (ev) {
                    $.ajax({
                        method: 'DELETE',
                        url: "/pgadmin4/datagrid/" + "close/" + 9020257
                    });
                });
            }

            // Get the controller object from pgAdmin.SqlEditor
            var sqlEditorController = pgAdmin.SqlEditor.create(editorPanel);

            // Listen on events to show/hide loading-icon and change messages.
            sqlEditorController.on('pgadmin-sqleditor:loading-icon:message', function (msg) {
                msgDiv.text(msg);
            }).on('pgadmin-sqleditor:loading-icon:show', function (msg) {
                loadingDiv.removeClass('d-none');
                msgDiv.text(msg);
            }).on('pgadmin-sqleditor:loading-icon:hide', function () {
                loadingDiv.addClass('d-none');
            });
            var script_type_url = '';
            // Start the query tool.
            sqlEditorController.start(
                9020257,
                {
                    "is_query_tool": "false",
                    "cmd_type": "3",
                    "obj_type": "table",
                    "obj_id": "16947",
                    "sgid": "1",
                    "sid": "1",
                    "did": "13401",
                    "server_type": "pg",
                    "title": "public.dfg/postgres/postgres@PostgreSQL 12"
                },
                ''
            );

            // If opening from schema diff, set the generated script to the SQL Editor

            var schema_ddl_diff = (window.opener !== null) ? window.opener.pgAdmin.ddl_diff : (window.parent !== null) ? window.parent.pgAdmin.ddl_diff : window.top.pgAdmin.ddl_diff;
            sqlEditorController.set_value_to_editor(schema_ddl_diff);
            if (window.opener !== null) window.opener.pgAdmin.ddl_diff = '';
            else if (window.parent !== null) window.parent.pgAdmin.ddl_diff = '';
            else if (window.top !== null) window.top.pgAdmin.ddl_diff = '';

        });
    });

</script>


<div class="alertify ajs-hidden  ajs-movable ajs-pinnable ajs-zoom">
    <div class="ajs-dimmer"></div>
    <div class="ajs-modal" tabindex="0">
        <div class="ajs-dialog" tabindex="0">
            <button class="ajs-reset" aria-label="reset"></button>
            <div class="ajs-commands">
                <button class="ajs-pin" aria-label="Pin"></button>
                <button class="ajs-maximize" aria-label="Maximize" tabindex="0"></button>
                <button class="ajs-close" aria-label="Close"></button>
            </div>
            <div class="ajs-header">AlertifyJS</div>
            <div class="ajs-body">
                <div class="ajs-content"></div>
            </div>
            <div class="ajs-footer">
                <div class="ajs-auxiliary ajs-buttons"></div>
                <div class="ajs-primary ajs-buttons">
                    <button class="ajs-button btn btn-secondary fa fa-lg fa-times pg-alertify-button">Cancel</button>
                    <button class="ajs-button btn btn-primary fa fa-lg fa-check pg-alertify-button">OK</button>
                </div>
            </div>
            <div class="ajs-handle"></div>
            <button class="ajs-reset" aria-label="reset"></button>
        </div>
    </div>
</div>
<div class="alertify ajs-hidden  ajs-movable ajs-pinnable ajs-zoom">
    <div class="ajs-dimmer"></div>
    <div class="ajs-modal" tabindex="0">
        <div class="ajs-dialog" tabindex="0">
            <button class="ajs-reset" aria-label="reset"></button>
            <div class="ajs-commands">
                <button class="ajs-pin" aria-label="Pin"></button>
                <button class="ajs-maximize" aria-label="Maximize" tabindex="0"></button>
                <button class="ajs-close" aria-label="Close"></button>
            </div>
            <div class="ajs-header">AlertifyJS</div>
            <div class="ajs-body">
                <div class="ajs-content"><p></p><label for="alertify-prompt-0"
                                                       style="display: none;">HiddenLabel</label><input
                            class="form-control" type="text" id="alertify-prompt-0"></div>
            </div>
            <div class="ajs-footer">
                <div class="ajs-auxiliary ajs-buttons"></div>
                <div class="ajs-primary ajs-buttons">
                    <button class="ajs-button btn btn-secondary fa fa-lg fa-times pg-alertify-button">Cancel</button>
                    <button class="ajs-button btn btn-primary fa fa-lg fa-check pg-alertify-button">OK</button>
                </div>
            </div>
            <div class="ajs-handle"></div>
            <button class="ajs-reset" aria-label="reset"></button>
        </div>
    </div>
</div>
<div class="alertify ajs-hidden  ajs-movable ajs-pinnable ajs-zoom">
    <div class="ajs-dimmer"></div>
    <div class="ajs-modal" tabindex="0">
        <div class="ajs-dialog" tabindex="0">
            <button class="ajs-reset" aria-label="reset"></button>
            <div class="ajs-commands">
                <button class="ajs-pin" aria-label="Pin"></button>
                <button class="ajs-maximize" aria-label="Maximize" tabindex="0"></button>
                <button class="ajs-close" aria-label="Close"></button>
            </div>
            <div class="ajs-header">AlertifyJS</div>
            <div class="ajs-body">
                <div class="ajs-content"></div>
            </div>
            <div class="ajs-footer">
                <div class="ajs-auxiliary ajs-buttons"></div>
                <div class="ajs-primary ajs-buttons">
                    <button class="ajs-button btn btn-primary fa fa-lg fa-check pg-alertify-button">OK</button>
                </div>
            </div>
            <div class="ajs-handle"></div>
            <button class="ajs-reset" aria-label="reset"></button>
        </div>
    </div>
</div>
<div class="alertify-notifier ajs-bottom ajs-right"></div>
</body>
</html>