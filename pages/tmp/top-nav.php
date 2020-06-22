<nav class="navbar fixed-top navbar-expand-lg navbar-dark pg-navbar" style="border:0px red solid;">

    <a class="navbar-brand pgadmin_header_logo"
       href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#" title="pgAdmin" >
        <i class="app-icon pg-icon" aria-hidden="true"></i>
    </a>
    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-menu"
            aria-controls="navbar-menu">
        <span class="sr-only">Включение навигации</span>
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbar-menu" role="navigation">

        <ul class="navbar-nav mr-auto">
            <li id="mnu_file" class="nav-item active dropdown">
                <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                   class="nav-link dropdown-toggle1" >Файл
                    <span class="caret" ></span>
                </a>

<!--                <ul class="dropdown-menu" role="menu">-->
<!--                    <li><a id="mnu_preferences"-->
<!--                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Настройки</span></a>-->
<!--                    </li>-->
<!--                    <li><a id="mnu_resetlayout"-->
<!--                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Сброс интерфейса</span></a>-->
<!--                    </li>-->
<!--                    <li class="dropdown-submenu" role="menuitem">-->
<!--                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                           class="dropdown-item">-->
<!---->
<!--                            <span>Lock Layout</span>-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a id="mnu_lock_none"-->
<!--                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><i-->
<!--                                            class="fa fa-check"></i><span data-test="menu-item-text">  None</span></a></li>-->
<!--                            <li><a id="mnu_lock_docking"-->
<!--                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><i-->
<!--                                            class="fa fa-check visibility-hidden"></i><span data-test="menu-item-text">  Prevent Docking</span></a>-->
<!--                            </li>-->
<!--                            <li><a id="mnu_lock_full"-->
<!--                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><i-->
<!--                                            class="fa fa-check visibility-hidden"></i><span data-test="menu-item-text">  Full Lock</span></a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->

            </li>
            <li id="mnu_obj" class="nav-item active dropdown">

                <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                   class="nav-link dropdown-toggle1" >Объект
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a id="refresh"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Обновить...</span></a>
                    </li>
                    <li class="dropdown-submenu" role="menuitem">
                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           class="dropdown-item">

                            <span>Создать</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="create_table"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Таблица...</span></a></li>
                            <li><a id="create_index_onTable"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Индекс...</span></a></li>
                            <li><a id="create_rule"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Правило...</span></a></li>
                            <li><a id="create_column_onTable"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Столбец...</span></a></li>
                            <li><a id="create_trigger_onTable"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Триггер...</span></a></li>
                            <li><a id="create_compound_trigger_onTable"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                            data-test="menu-item-text">  Compound Trigger...</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li><a id="count_table_rows"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Подсчитывать строки</span></a>
                    </li>
                    <li><a id="delete_object"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Удалить</span></a>
                    </li>
                    <li><a id="delete_object_cascade"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Удалить каскадно</span></a>
                    </li>
                    <li><a id="reset_table_stats"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Сбросить статистику</span></a>
                    </li>
                    <li class="dropdown-submenu" role="menuitem">
                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           class="dropdown-item">

                            <span>Опустошить</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="truncate_table"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Опустошить</span></a></li>
                            <li><a id="truncate_table_cascade"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Опустошить каскадно</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu" role="menuitem">
                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           class="dropdown-item">

                            <span>Scripts</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="show_script_create"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Скрипт CREATE</span></a></li>
                            <li><a id="show_script_delete"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Скрипт DELETE</span></a></li>
                            <li><a id="show_script_insert"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Скрипт INSERT</span></a></li>
                            <li><a id="show_script_select"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Скрипт SELECT</span></a></li>
                            <li><a id="show_script_update"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Скрипт UPDATE</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu" role="menuitem">
                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           class="dropdown-item">

                            <span>Trigger(s)</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="enable_all_triggers"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                            data-test="menu-item-text">  Включить все</span></a></li>
                            <li><a id="disable_all_triggers"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                            data-test="menu-item-text">  Отключить все</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu" role="menuitem">
                        <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           class="dropdown-item">

                            <span>Просмотр/редактирование данных</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a id="view_all_rows_context_table"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Все строки</span></a></li>
                            <li><a id="view_first_100_rows_context_table"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Первые 100 строк</span></a></li>
                            <li><a id="view_last_100_rows_context_table"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Последние 100 строк</span></a></li>
                            <li><a id="view_filtered_rows_context_table"
                                   href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                                   data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                            data-test="menu-item-text">  Отфильтрованные строки...</span></a></li>
                        </ul>
                    </li>
                    <li><a id="show_obj_properties"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Свойства...</span></a>
                    </li>
                </ul>
            </li>
            <li id="mnu_management" class="nav-item active dropdown d-none">
                <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                   class="nav-link dropdown-toggle1" data-toggle="dropdown" role="button" aria-expanded="false">Управление
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-hidden="true"></ul>
            </li>
            <li id="mnu_tools" class="nav-item active dropdown">
                <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                   class="nav-link dropdown-toggle1" data-toggle="dropdown" role="button" aria-expanded="false">Инструменты
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a id="query_tool"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Запросник</span></a>
                    </li>
                    <li><a id="schema_diff"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Schema Diff (Beta)</span></a>
                    </li>
                    <li><a id="search_objects"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Search objects</span></a>
                    </li>
                    <li><a id="reload_configuration"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Перечитать конфигурацию</span></a></li>
                    <li><a id="wal_replay_pause"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Приостановить воспроизведение WAL</span></a></li>
                    <li><a id="wal_replay_resume"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Продолжить воспроизведение WAL</span></a></li>
                    <li><a id="restore_point"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Добавить именованную точку восстановления...</span></a></li>
                    <li><a id="import" href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Импорт/экспорт...</span></a>
                    </li>
                    <li><a id="maintenance"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Обслуживание...</span></a>
                    </li>
                    <li><a id="backup_object"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Резервная копия...</span></a>
                    </li>
                    <li><a id="backup_global"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Резервная копия глобальных объектов...</span></a></li>
                    <li><a id="backup_server"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Резервная копия сервера...</span></a></li>
                    <li><a id="restore_object"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Восстановить...</span></a>
                    </li>
                    <li><a id="grant_wizard_schema"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item disabled"><span
                                    data-test="menu-item-text">  Мастер назначения прав...</span></a></li>
                </ul>
            </li>
            <li id="mnu_help" class="nav-item active dropdown">
                <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                   class="nav-link dropdown-toggle1" data-toggle="dropdown" role="button" aria-expanded="false">Справка
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a id="mnu_online_help"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/help/help/index.html?ver=42200"
                           target="pgadmin_help" data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span
                                    data-test="menu-item-text">  Веб-справка</span></a></li>
                    <li><a id="mnu_pgadmin_website" href="https://www.pgadmin.org/" target="pgadmin_website"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Сайт pgAdmin</span></a>
                    </li>
                    <li><a id="mnu_postgresql_website" href="https://www.postgresql.org/" target="postgres_website"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  Сайт PostgreSQL</span></a>
                    </li>
                    <li><a id="mnu_about"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                           data-toggle="pg-menu" role="menuitem" class="dropdown-item"><span data-test="menu-item-text">  О pgAdmin 4</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active dropdown">
                <a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"
                   class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                   id="navbar-user"><img src="./pgAdmin4_files/cd2bfcffe5fee4a1149d101994d0987f" width="18" height="18"
                                         alt="Gravatar image for user@domain.com"> user@domain.com (internal) <span
                            class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li>
                        <a class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#" >
                            Сменить пароль
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#" >Пользователи</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item"
                           href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/logout?next=/pgadmin4/browser/">Выход</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>