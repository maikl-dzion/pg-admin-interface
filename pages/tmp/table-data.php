<div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY" style="left: 0px; right: 0px; bottom: 0px;">
    <div class="wcPanelTabContent wcPanelTabContentHidden" id="0">
        <table class="wcLayout wcWide wcTall">
            <tbody>
            <tr>
                <td>
                    <div class="pg-panel-content">
                        <div class="container-fluid dashboard-container negative-space">
                            <div id="dashboard-graphs" class="">
                                <div class="row dashboard-row">
                                    <div class="col-md-6 col-12">
                                        <div class="card" role="object-document" tabindex="0"
                                             aria-labelledby="database-session-graph">
                                            <div class="card-header" id="database-session-graph">
                                                Database sessions
                                            </div>
                                            <div class="card-body dashboard-graph-body">
                                                <div id="graph-sessions" class="graph-container"
                                                     style="position: relative;">
                                                    <div class="pg-panel-info pg-panel-message" role="alert">Подключение
                                                        к серверу не устанавливалось или было закрыто.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="card" role="object-document" tabindex="0"
                                             aria-labelledby="transactions-per-second-graph">
                                            <div class="card-header" id="transactions-per-second-graph">
                                                Транзакций в секунду
                                            </div>
                                            <div class="card-body dashboard-graph-body">
                                                <div id="graph-tps" class="graph-container" style="position: relative;">
                                                    <div class="pg-panel-info pg-panel-message" role="alert">Подключение
                                                        к серверу не устанавливалось или было закрыто.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row dashboard-row">
                                    <div class="col-md-4 col-12">
                                        <div class="card" role="object-document" tabindex="0"
                                             aria-labelledby="tuples-in-graph">
                                            <div class="card-header" id="tuples-in-graph">
                                                Кортежей получено
                                            </div>
                                            <div class="card-body dashboard-graph-body">
                                                <div id="graph-ti" class="graph-container" style="position: relative;">
                                                    <div class="pg-panel-info pg-panel-message" role="alert">Подключение
                                                        к серверу не устанавливалось или было закрыто.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="card" role="object-document" tabindex="0"
                                             aria-labelledby="tuples-out-graph">
                                            <div class="card-header" id="tuples-out-graph">
                                                Кортежей выдано
                                            </div>
                                            <div class="card-body dashboard-graph-body">
                                                <div id="graph-to" class="graph-container" style="position: relative;">
                                                    <div class="pg-panel-info pg-panel-message" role="alert">Подключение
                                                        к серверу не устанавливалось или было закрыто.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="card" role="object-document" tabindex="0"
                                             aria-labelledby="block-io-graph">
                                            <div class="card-header" id="block-io-graph">
                                                Блочный ввод/вывод
                                            </div>
                                            <div class="card-body dashboard-graph-body">
                                                <div id="graph-bio" class="graph-container" style="position: relative;">
                                                    <div class="pg-panel-info pg-panel-message" role="alert">Подключение
                                                        к серверу не устанавливалось или было закрыто.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="dashboard-activity" class="card dashboard-row">
                                <div class="card-header">
                                    <span id="dashboard-activity-header">Активность на сервере</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9 col-12 pr-0">
                                            <ul class="nav nav-tabs" role="tablist"
                                                aria-labelledby="dashboard-activity-header">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="tab_panel_database_activity_tab"
                                                       href="#tab_panel_database_activity"
                                                       aria-controls="tab_database_activity" role="tab"
                                                       data-toggle="tab">Сеансы</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab_panel_database_locks_tab"
                                                       href="#tab_panel_database_locks"
                                                       aria-controls="tab_database_locks" role="tab" data-toggle="tab">Блокировки</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab_panel_database_prepared_tab"
                                                       href="#tab_panel_database_prepared"
                                                       aria-controls="tab_database_prepared" role="tab"
                                                       data-toggle="tab">Подготовленные транзакции</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-12 pl-0 text-right">
                                            <div class="navtab-inline-controls">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text fa fa-search" id="labelSearch"
                                                              aria-label="Search"></span>
                                                    </div>
                                                    <input type="search" class="form-control" id="txtGridSearch"
                                                           placeholder="Search" aria-describedby="labelSearch"
                                                           aria-labelledby="labelSearch">
                                                </div>
                                                <button id="btn_refresh" type="button"
                                                        class="btn btn-secondary btn-navtab-inline" title="Обновить"
                                                        aria-label="Обновить">
                                                    <span class="fa fa-refresh" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nav tabs -->


                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane negative-space p-2 active show"
                                             id="tab_panel_database_activity"
                                             aria-labelledby="tab_panel_database_activity_tab">
                                            <div id="database_activity" class="grid-container pg-el-container" el="sm">
                                                <table class="backgrid presentation table table-bordered table-noouter-border table-hover"
                                                       role="table">
                                                    <thead>
                                                    <tr>
                                                        <td class="pg-backform-delete renderable"></td>
                                                        <td class="pg-backform-delete renderable"></td>
                                                        <td class="pg-backform-expand renderable"></td>
                                                        <th class="sortable renderable pid" role="columnheader">
                                                            <button>PID<span class="sort-caret"
                                                                             aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable usename" role="columnheader">
                                                            <button>Пользователь<span class="sort-caret"
                                                                                      aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable application_name"
                                                            role="columnheader">
                                                            <button>Приложение<span class="sort-caret"
                                                                                    aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable client_addr" role="columnheader">
                                                            <button>Клиент<span class="sort-caret"
                                                                                aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable backend_start"
                                                            role="columnheader">
                                                            <button>Серверный процесс запущен<span class="sort-caret"
                                                                                                   aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable state" role="columnheader">
                                                            <button>Состояние<span class="sort-caret"
                                                                                   aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable wait_event" role="columnheader">
                                                            <button>Wait event<span class="sort-caret"
                                                                                    aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable blocking_pids"
                                                            role="columnheader">
                                                            <button>Блокирующие PID<span class="sort-caret"
                                                                                         aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="delete-cell sortable renderable" tabindex="0"><i
                                                                    class="fa fa-times-circle text-danger"
                                                                    data-toggle="tooltip" title="Завершить сеанс"
                                                                    aria-label="Завершить сеанс"></i></td>
                                                        <td class="delete-cell sortable renderable" tabindex="0"><i
                                                                    class="fa fa-stop" data-toggle="tooltip"
                                                                    title="Отменить активный запрос"
                                                                    aria-label="Отменить активный запрос"></i></td>
                                                        <td class="edit-cell editable sortable renderable" tabindex="0">
                                                            <i class="fa fa-caret-right" data-toggle="tooltip"
                                                               title="Просмотр информации об активном сеансе"
                                                               aria-label="Просмотр информации об активном сеансе"></i>
                                                        </td>
                                                        <td tabindex="0" class="string-cell sortable renderable pid">
                                                            3765
                                                        </td>
                                                        <td tabindex="0"
                                                            class="string-cell sortable renderable usename">postgres
                                                        </td>
                                                        <td tabindex="0"
                                                            class="string-cell sortable renderable application_name">
                                                            pgAdmin 4 - DB:pagila
                                                        </td>
                                                        <td tabindex="0"
                                                            class="string-cell sortable renderable client_addr">::1
                                                        </td>
                                                        <td tabindex="0"
                                                            class="string-cell sortable renderable backend_start">
                                                            2020-06-18 15:43:05 UTC
                                                        </td>
                                                        <td tabindex="0" class="string-cell sortable renderable state">
                                                            active
                                                        </td>
                                                        <td tabindex="0"
                                                            class="string-cell sortable renderable wait_event"></td>
                                                        <td tabindex="0"
                                                            class="string-cell sortable renderable blocking_pids"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane negative-space p-2"
                                             id="tab_panel_database_locks"
                                             aria-labelledby="tab_panel_database_locks_tab">
                                            <div id="database_locks" class="grid-container">
                                                <table class="backgrid presentation table table-bordered table-noouter-border table-hover"
                                                       role="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="sortable renderable pid" role="columnheader">
                                                            <button>PID<span class="sort-caret"
                                                                             aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable locktype" role="columnheader">
                                                            <button>Тип блокировки<span class="sort-caret"
                                                                                        aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable relation" role="columnheader">
                                                            <button>Целевое отношение<span class="sort-caret"
                                                                                           aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable page" role="columnheader">
                                                            <button>Страница<span class="sort-caret"
                                                                                  aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable tuple" role="columnheader">
                                                            <button>Кортеж<span class="sort-caret"
                                                                                aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable virtualxid" role="columnheader">
                                                            <button>vXID (целевой)<span class="sort-caret"
                                                                                        aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable transactionid"
                                                            role="columnheader">
                                                            <button>XID (целевой)<span class="sort-caret"
                                                                                       aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable classid" role="columnheader">
                                                            <button>Класс<span class="sort-caret"
                                                                               aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable objid" role="columnheader">
                                                            <button>ID объекта<span class="sort-caret"
                                                                                    aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable virtualtransaction"
                                                            role="columnheader">
                                                            <button>vXID (владельца)<span class="sort-caret"
                                                                                          aria-hidden="true"></span>
                                                            </button>
                                                        </th>
                                                        <th class="sortable renderable mode" role="columnheader">
                                                            <button>Режим<span class="sort-caret"
                                                                               aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable granted" role="columnheader">
                                                            <button>Получена?<span class="sort-caret"
                                                                                   aria-hidden="true"></span></button>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="empty">
                                                        <td colspan="12"><span>No data found</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane negative-space p-2"
                                             id="tab_panel_database_prepared"
                                             aria-labelledby="tab_panel_database_prepared_tab">
                                            <div id="database_prepared" class="grid-container">
                                                <table class="backgrid presentation table table-bordered table-noouter-border table-hover"
                                                       role="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="sortable renderable git" role="columnheader">
                                                            <button>Имя<span class="sort-caret"
                                                                             aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable Owner" role="columnheader">
                                                            <button>Владелец<span class="sort-caret"
                                                                                  aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable transaction" role="columnheader">
                                                            <button>XID<span class="sort-caret"
                                                                             aria-hidden="true"></span></button>
                                                        </th>
                                                        <th class="sortable renderable prepared" role="columnheader">
                                                            <button>Подготовлена в<span class="sort-caret"
                                                                                        aria-hidden="true"></span>
                                                            </button>
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
                                    </div>
                                </div>
                            </div>
                            <div id="dashboard-none-show" class="alert alert-info pg-panel-message dashboard-hidden"
                                 role="alert">
                                All Dashboard elements are currently disabled.
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
                    <div class="pg-panel-content pg-no-overflow pg-el-container">
                        <div class="obj_properties container-fluid">
                            <div role="status" class="pg-panel-message">Выберите объект в дереве.</div>
                        </div>
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
                    <div class="pg-panel-content"><label for="sql-textarea" class="sr-only">SQL Code</label>
                        <div class="sql_textarea"><textarea id="sql-textarea" name="sql-textarea" title="SQL Code"
                                                            style="display: none;"></textarea>
                            <div class="CodeMirror cm-s-default" style="font-size: 1em;">
                                <div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 0px; left: 0px;">
                                    <textarea autocorrect="off" autocapitalize="off" spellcheck="false" tabindex="0"
                                              style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;"></textarea>
                                </div>
                                <div class="CodeMirror-vscrollbar" tabindex="-1" cm-not-content="true">
                                    <div style="min-width: 1px;"></div>
                                </div>
                                <div class="CodeMirror-hscrollbar" tabindex="-1" cm-not-content="true">
                                    <div style="height: 100%; min-height: 1px;"></div>
                                </div>
                                <div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div>
                                <div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
                                <div class="CodeMirror-scroll" tabindex="-1">
                                    <div class="CodeMirror-sizer" style="margin-left: 0px; min-width: 3px;">
                                        <div style="position: relative;">
                                            <div class="CodeMirror-lines" role="presentation">
                                                <div role="presentation" style="position: relative; outline: none;">
                                                    <div class="CodeMirror-measure"></div>
                                                    <div class="CodeMirror-measure">
                                                        <pre class="CodeMirror-line" role="presentation"><span
                                                                    role="presentation"
                                                                    style="padding-right: 0.1px;"><span
                                                                        class="cm-comment">-- Выберите объект в дереве.</span></span></pre>
                                                    </div>
                                                    <div style="position: relative; z-index: 1;"></div>
                                                    <div class="CodeMirror-cursors"></div>
                                                    <div class="CodeMirror-code" role="presentation"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; height: 30px; width: 1px;"></div>
                                    <div class="CodeMirror-gutters" style="left: 0px;">
                                        <div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 1px;"></div>
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
    <div class="wcPanelTabContent wcPanelTabContentHidden" id="3">
        <table class="wcLayout wcWide wcTall">
            <tbody>
            <tr>
                <td>
                    <div class="pg-panel-content">
                        <div class="negative-space p-2">
                            <div role="status" class="pg-panel-message pg-panel-statistics-message">Выберите объект в
                                дереве.
                            </div>
                            <div class="pg-panel-statistics-container d-none"></div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="wcPanelTabContent wcPanelTabContentHidden" id="4">
        <table class="wcLayout wcWide wcTall">
            <tbody>
            <tr>
                <td>
                    <div class="pg-panel-content">
                        <div class="negative-space p-2">
                            <div role="status" class="pg-panel-message pg-panel-depends-message d-none">No dependency
                                information is available for the selected object.
                            </div>
                            <div class="pg-panel-dependencies-container">
                                <table class="backgrid table presentation table-bordered table-noouter-border table-hover"
                                       role="table">
                                    <thead>
                                    <tr>
                                        <th class="sortable renderable type" role="columnheader">
                                            <button>Тип<span class="sort-caret" aria-hidden="true"></span></button>
                                        </th>
                                        <th class="sortable renderable name" role="columnheader">
                                            <button>Имя<span class="sort-caret" aria-hidden="true"></span></button>
                                        </th>
                                        <td class="field renderable"></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-schema"></i>Schema
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">public</td>
                                        <td tabindex="0" class="string-cell sortable renderable field">normal</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="wcPanelTabContent wcPanelTabContentHidden" id="5">
        <table class="wcLayout wcWide wcTall">
            <tbody>
            <tr>
                <td>
                    <div class="pg-panel-content">
                        <div class="negative-space p-2">
                            <div role="status" class="pg-panel-message pg-panel-depends-message d-none">No dependent
                                information is available for the selected object.
                            </div>
                            <div class="pg-panel-dependents-container">
                                <table class="backgrid table presentation table-bordered table-noouter-border table-hover"
                                       role="table">
                                    <thead>
                                    <tr>
                                        <th class="sortable renderable type" role="columnheader">
                                            <button>Тип<span class="sort-caret" aria-hidden="true"></span></button>
                                        </th>
                                        <th class="sortable renderable name" role="columnheader">
                                            <button>Имя<span class="sort-caret" aria-hidden="true"></span></button>
                                        </th>
                                        <td class="field renderable"></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-function"></i>Function
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">now()</td>
                                        <td tabindex="0" class="string-cell sortable renderable field">auto</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-function"></i>Function
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">
                                            nextval('category_category_id_seq'::regclass)
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">auto</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-primary_key"></i>Primary
                                            Key
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">
                                            public.category_pkey
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">auto</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-foreign_key"></i>Foreign
                                            Key
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">
                                            public.film_category.film_category_category_id_fkey
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">normal</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-rule"></i>Rule
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">_RETURN ON
                                            public.actor_info
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">normal</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-rule"></i>Rule
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">_RETURN ON
                                            public.film_list
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">normal</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-rule"></i>Rule
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">_RETURN ON
                                            public.nicer_but_slower_film_list
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">normal</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-rule"></i>Rule
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">_RETURN ON
                                            public.sales_by_film_category
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">normal</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-trigger"></i>Trigger
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">last_updated</td>
                                        <td tabindex="0" class="string-cell sortable renderable field">auto</td>
                                    </tr>
                                    <tr>
                                        <td class="sortable renderable type"><i class="wcTabIcon icon-sequence"></i>Sequence
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable name">
                                            category_category_id_seq
                                        </td>
                                        <td tabindex="0" class="string-cell sortable renderable field">auto</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="wcPanelTabContent" id="6">
        <table class="wcLayout wcWide wcTall">
            <tbody>
            <tr>
                <td>
                    <div style="position:absolute;top:0 !important;width:100%;height:100%;display:table;z-index:0;"></div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>