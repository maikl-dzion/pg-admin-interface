
<!--- Button Panel  ----->
<div style="border:1px gainsboro solid;" class="editor-toolbar" >
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-load-file" type="button" class="btn btn-sm btn-secondary btn-load-file" title="Open File (accesskey + O)" accesskey="O" tabindex="0" aria-label="Open File (accesskey + O)" disabled="">
            <i class="fa fa-folder-open-o sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-save-file" type="button" class="btn btn-sm btn-secondary" title="Save File (accesskey + S)" accesskey="S" disabled="" aria-label="Save File (accesskey + S)">
            <i class="fa fa-floppy-o sql-icon-lg" aria-hidden="true" tabindex="0" role="img"></i>
        </button>
        <button id="btn-file-menu-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled="" tabindex="0">
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" id="btn-file-menu-save" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span>Сохранить</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-file-menu-save-as" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span>Сохранить как</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-save-data" type="button" class="btn btn-sm btn-secondary" title="Save Data Changes (F6)" accesskey="" tabindex="0" disabled="" aria-label="Save Data Changes (F6)">
            <i class="pg-font-icon icon-save-data-changes sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-find" type="button" class="btn btn-sm btn-secondary" aria-label="Найти" title="Найти (Ctrl/Cmd+F)" disabled="">
            <i class="fa fa-search sql-icon-lg" aria-hidden="true" tabindex="0" role="img"></i>
        </button>
        <button id="btn-find-menu-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Найти (accesskey + N)" accesskey="N" tabindex="0" aria-label="Найти (accesskey + N)" disabled="">
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" id="btn-find-menu-find" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Найти                                  (Ctrl+F)</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-find-menu-find-next" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Find Next                                  (Ctrl+G)</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-find-menu-find-previous" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Find Previous                                  (Ctrl+Shift+G)</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-find-menu-find-persistent" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span>Persistent Find</span>
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item" id="btn-find-menu-replace" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Замена                                  (Ctrl+Shift+F)</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-find-menu-replace-all" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span>Replace All</span>
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item" id="btn-find-menu-jump" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span>Перейти (Alt+G)</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-copy-row" type="button" class="btn btn-sm btn-secondary" title="Copy (accesskey + C)" accesskey="C" tabindex="0" aria-label="Copy (accesskey + C)">
            <i class="fa fa-files-o sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-copy-row-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" id="btn-copy-with-header" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="copy-with-header fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Copy with headers </span>
                </a>
            </li>
        </ul>
        <button id="btn-paste-row" type="button" class="btn btn-sm btn-secondary" title="Paste (accesskey + P)" accesskey="P" tabindex="0" disabled="" aria-label="Paste (accesskey + P)">
            <i class="fa fa-clipboard sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-delete-row" type="button" class="btn btn-sm btn-secondary" title="Delete (accesskey + D)" accesskey="D" tabindex="0" disabled="" aria-label="Delete (accesskey + D)">
            <i class="fa fa-trash sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-edit-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Редактирование" title="Редактирование" tabindex="0" disabled="">
            <i class="fa fa-pencil-square-o sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" id="btn-indent-code" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Добавить отступ выделенного (Tab) </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-unindent-code" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Убрать отступ выделенного (Shift+Tab) </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-comment-line" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Строчное комментирование выделенного                                  (Ctrl+/)</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-uncomment-line" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Строчное раскомментирование выделенного                                  (Ctrl+.)</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-toggle-comment-block" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Блочное комментирование/раскомментирование выделенного                                  (Shift+Ctrl+/)</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-filter" type="button" class="btn btn-primary" title="Filter (accesskey + F)" accesskey="F" tabindex="0" aria-label="Filter (accesskey + F)">
            <i class="fa fa-filter sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-filter-dropdown" type="button" class="btn btn-sm dropdown-toggle dropdown-toggle-split btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Filter options (accesskey + I)" accesskey="I" tabindex="0" aria-label="Filter options (accesskey + I)">
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li>
                <a id="btn-filter-menu" class="dropdown-item" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">Sort/Filter</a>
            </li>
            <li>
                <a id="btn-include-filter" class="dropdown-item" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">Filter by Selection</a>
            </li>
            <li>
                <a id="btn-exclude-filter" class="dropdown-item" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">Exclude by Selection</a>
            </li>
            <li>
                <a id="btn-remove-filter" class="dropdown-item" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">Remove Sort/Filter</a>
            </li>
        </ul>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <select id="btn-rows-limit" class="limit form-control form-control-sm limit-enabled" title="Rows limit (accesskey + R)" accesskey="R" tabindex="0" aria-label="Rows limit (accesskey + R)">
            <option value="-1">No limit</option>
            <option value="1000">1000 rows</option>
            <option value="500">500 rows</option>
            <option value="100">100 rows</option>
        </select>
    </div>

    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-cancel-query" type="button" class="btn btn-sm btn-secondary" title="Cancel query (accesskey + Q)" accesskey="Q" tabindex="0" disabled="" aria-label="Cancel query (accesskey + Q)">
            <i class="fa fa-stop sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-flash" data-test-selector="execute-refresh-button" type="button" class="btn btn-sm btn-secondary" style="width: 32px;" title="Execute/Refresh (F5)" tabindex="0" data-click-counter="0" aria-label="Execute/Refresh (F5)">
            <i class="fa fa-play sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-query-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" accesskey="X" title="Execute options (accesskey + X)" tabindex="0" aria-label="Execute options (accesskey + X)" disabled="">
        </button>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a class="dropdown-item" id="btn-auto-commit" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="auto-commit fa fa-check" aria-hidden="true" role="img"></i>
                    <span> Автофиксация? </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-auto-rollback" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="auto-rollback fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Автоотмена? </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-explain" type="button" class="btn btn-sm btn-secondary" title="План выполнения (F7)" accesskey="" tabindex="0" disabled="" aria-label="План выполнения (F7)">
            <i class="fa fa-hand-pointer-o sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-explain-analyze" type="button" class="btn btn-sm btn-secondary" title="Explain Analyze (Shift+F7)" accesskey="" disabled="" aria-label="Explain Analyze (Shift+F7)">
            <i class="fa fa-list-alt sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-explain-options-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0" disabled="">
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" id="btn-explain-verbose" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="explain-verbose fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Подробно </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-explain-costs" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="explain-costs fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Стоимость </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-explain-buffers" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="explain-buffers fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Буферы </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-explain-timing" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="explain-timing fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Время </span>
                </a>
            </li>
            <li data-min-ver="100000">
                <a class="dropdown-item" id="btn-explain-summary" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="explain-summary fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Summary </span>
                </a>
            </li>
            <li data-min-ver="120000">
                <a class="dropdown-item" id="btn-explain-settings" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <i class="explain-settings fa fa-check visibility-hidden" aria-hidden="true" role="img"></i>
                    <span> Settings </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-commit" type="button" class="btn btn-sm btn-secondary" title="Commit (Shift+Ctrl+M)" accesskey="" tabindex="0" disabled="" aria-label="Commit (Shift+Ctrl+M)">
            <i class="pg-font-icon icon-commit sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <button id="btn-rollback" type="button" class="btn btn-sm btn-secondary" title="Rollback (Shift+Ctrl+R)" tabindex="0" disabled="" aria-label="Rollback (Shift+Ctrl+R)">
            <i class="pg-font-icon icon-rollback sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
    </div>
    <div class="btn-group mr-1" role="group" aria-label="">
        <button id="btn-clear-dropdown" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Clear (accesskey + L)" accesskey="L" tabindex="0" aria-label="Clear (accesskey + L)">
            <i class="fa fa-eraser sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" id="btn-clear" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Очистить окно запроса </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" id="btn-clear-history" href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="0">
                    <span> Очистить историю </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="btn-group" role="group" aria-label="">
        <button id="btn-download" type="button" class="btn btn-sm btn-secondary" title="Download as CSV/TXT (F8)" tabindex="0" aria-label="Download as CSV/TXT (F8)">
            <i class="fa fa-download sql-icon-lg" aria-hidden="true" role="img"></i>
        </button>
    </div>
</div>

<!---- Message Panel ---->
<div style="border:1px red solid;"  class="connection_status_wrapper d-flex">
    <div id="btn-conn-status" role="status" class="connection_status d-flex justify-content-center align-items-center" data-container="body" data-toggle="popover" data-placement="bottom" data-content="The session is idle and there is no current transaction." data-panel-visible="visible" accesskey="T" tabindex="0" data-original-title="" title="">
        <i class="pg-font-icon icon-query-tool-connected" aria-hidden="true" title="Connection status (click for details) (accesskey + T)" role="img">
        </i>
    </div>
    <div class="editor-title" style="background-color: ; color: ;">public.city/pagila/postgres@PostgreSQL 12</div>
</div>