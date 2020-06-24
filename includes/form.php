<div class="pg-panel-content pg-no-overflow pg-el-container" el="sm">
    <div class="obj_properties container-fluid">
        <div class="backform-tab pg-el-12" role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link show active" data-toggle="tab" role="tab" tabindex="-1"
                                        data-tab-index="1" href="#pgC_19342" id="pgH_19343" aria-controls="pgC_19342"
                                        aria-selected="true"> Общие</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" tabindex="-1" data-tab-index="2"
                                        href="#pgC_19350" id="pgH_19351" aria-controls="pgC_19350"
                                        aria-selected="false"> Соединение</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" tabindex="-1" data-tab-index="3"
                                        href="#pgC_19358" id="pgH_19359" aria-controls="pgC_19358"
                                        aria-selected="false"> SSL</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" tabindex="-1" data-tab-index="4"
                                        href="#pgC_19366" id="pgH_19367" aria-controls="pgC_19366"
                                        aria-selected="false"> SSH Tunnel</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" tabindex="-1" data-tab-index="5"
                                        href="#pgC_19372" id="pgH_19373" aria-controls="pgC_19372"
                                        aria-selected="false"> Дополнительно</a></li>
            </ul>
            <div class="tab-content pg-el-sm-12 pg-el-md-12 pg-el-lg-12 pg-el-12">
                <div role="tabpanel" tabindex="-1"
                     class="tab-pane Общие pg-el-sm-12 pg-el-md-12 pg-el-lg-12 pg-el-12 fade collapse active show"
                     id="pgC_19342" aria-labelledby="pgH_19343">
                    <div class="pgadmin-control-group form-group row pg-el-12 name"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19378">Имя</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19378" class="form-control " name="name" maxlength="255"
                                   value="PostgreSQL 12" placeholder="">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 gid">
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_19381">Группа серверов</label>

                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <select title="gid" id="pgC_19381" class="form-control select2-hidden-accessible" name="gid"
                                    value="1" data-select2-id="pgC_19381" tabindex="-1" aria-hidden="true">
                                <option></option>


                                <option data-image="icon-server_group" value="1" selected="selected"
                                        data-select2-id="16">Servers
                                </option>

                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                           data-select2-id="15"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" title="gid" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-pgC_19381-container"><span
                                                class="select2-selection__rendered" id="select2-pgC_19381-container"
                                                role="textbox" aria-readonly="true" title="Servers"><span><span
                                                        class="wcTabIcon icon-server_group"></span><span>Servers</span></span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>


                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 bgcolor"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19384">Background</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input id="pgC_19384" class="form-control  d-none" name="bgcolor" value="" disabled="">
                            <div class="pickr">

                                <button type="button" class="pcr-button clear disabled" role="button"
                                        aria-label="toggle color picker dialog"
                                        style="color: rgba(0, 0, 0, 0.15);"></button>


                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 fgcolor"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19387">Foreground</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input id="pgC_19387" class="form-control  d-none" name="fgcolor" value="" disabled="">
                            <div class="pickr">

                                <button type="button" class="pcr-button clear disabled" role="button"
                                        aria-label="toggle color picker dialog"
                                        style="color: rgba(0, 0, 0, 0.15);"></button>


                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 comment"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19390">Комментарии</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
  <textarea id="pgC_19390" class="form-control " name="comment" placeholder="" rows="5">PostgreSQL 12 on localhost:5432.

Username: postgres
Password: SuperSecret</textarea>

                        </div>
                    </div>
                </div>
                <div role="tabpanel" tabindex="-1"
                     class="tab-pane Соединение pg-el-sm-12 pg-el-md-12 pg-el-lg-12 pg-el-12 fade collapse"
                     id="pgC_19350" aria-labelledby="pgH_19351">
                    <div class="pgadmin-control-group form-group row pg-el-12 host"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19393">Имя/адрес сервера</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19393" class="form-control " name="host" maxlength="255"
                                   value="localhost" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 port"><label for="pgC_19396"
                                                                                           class="control-label pg-el-sm-3 pg-el-12">Порт</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="int" id="pgC_19396" class="form-control " name="port" min="1" max="65535"
                                   maxlength="255" value="5432" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 db"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19399">Служебная база данных</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19399" class="form-control " name="db" maxlength="255"
                                   value="postgres" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 username"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19402">Имя пользователя</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19402" class="form-control " name="username" maxlength="255"
                                   value="postgres" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 role"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19405">Роль</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19405" class="form-control " name="role" maxlength="255" value=""
                                   placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 service"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19408">Service</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19408" class="form-control " name="service" maxlength="255"
                                   value="" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                </div>
                <div role="tabpanel" tabindex="-1"
                     class="tab-pane SSL pg-el-sm-12 pg-el-md-12 pg-el-lg-12 pg-el-12 fade collapse" id="pgC_19358"
                     aria-labelledby="pgH_19359">
                    <div class="pgadmin-control-group form-group row pg-el-12 sslmode">
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_19411">Режим SSL</label>

                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <select title="sslmode" id="pgC_19411" class="form-control select2-hidden-accessible"
                                    name="sslmode" value="prefer" disabled="" data-select2-id="pgC_19411" tabindex="-1"
                                    aria-hidden="true">
                                <option></option>


                                <option value="allow" disabled="">Допускается</option>


                                <option value="prefer" selected="selected" disabled="" data-select2-id="18">
                                    Предпочтителен
                                </option>


                                <option value="require" disabled="">Требуется</option>


                                <option value="disable" disabled="">Выключить</option>


                                <option value="verify-ca" disabled="">Проверка ЦС</option>


                                <option value="verify-full" disabled="">Полная проверка</option>

                            </select><span
                                    class="select2 select2-container select2-container--default select2-container--disabled"
                                    dir="ltr" data-select2-id="17"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" title="sslmode" tabindex="-1"
                                            aria-disabled="true" aria-labelledby="select2-pgC_19411-container"><span
                                                class="select2-selection__rendered" id="select2-pgC_19411-container"
                                                role="textbox" aria-readonly="true" title="Предпочтителен">Предпочтителен</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>


                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 sslcert pgadmin-file-has-error"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19414">Клиентский сертификат</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <div class="input-group">
                                <input type="text" id="pgC_19414" class="form-control " name="sslcert" min="" max=""
                                       maxlength="255" value="" placeholder="" readonly="" aria-readonly="true">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary fa fa-ellipsis-h select_item" disabled=""
                                            aria-hidden="true" aria-label="Select file" title="Select file"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 sslkey pgadmin-file-has-error"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19417">Ключ клиентского
                            сертификата</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <div class="input-group">
                                <input type="text" id="pgC_19417" class="form-control " name="sslkey" min="" max=""
                                       maxlength="255" value="" placeholder="" readonly="" aria-readonly="true">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary fa fa-ellipsis-h select_item" disabled=""
                                            aria-hidden="true" aria-label="Select file" title="Select file"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 sslrootcert pgadmin-file-has-error"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19420">Корневой сертификат</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <div class="input-group">
                                <input type="text" id="pgC_19420" class="form-control " name="sslrootcert" min="" max=""
                                       maxlength="255" value="" placeholder="" readonly="" aria-readonly="true">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary fa fa-ellipsis-h select_item" disabled=""
                                            aria-hidden="true" aria-label="Select file" title="Select file"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 sslcrl pgadmin-file-has-error"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19423">Список отзыва
                            сертификатов</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <div class="input-group">
                                <input type="text" id="pgC_19423" class="form-control " name="sslcrl" min="" max=""
                                       maxlength="255" value="" placeholder="" readonly="" aria-readonly="true">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary fa fa-ellipsis-h select_item" disabled=""
                                            aria-hidden="true" aria-label="Select file" title="Select file"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 sslcompression"><span
                                class="control-label pg-el-sm-3 pg-el-12">Сжатие SSL?</span>
                        <label class="sr-value sr-only" for="pgC_19426">
                            Сжатие SSL?, Нет, Toggle button
                        </label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12 ">
                            <div class="toggle btn btn-ternary off btn-xs quick" data-toggle="toggle"
                                 disabled="disabled" tabindex="0" id="pgC_19426" style="width: 0px; height: 0px;"><input
                                        tabindex="-1" type="checkbox" aria-hidden="true" aria-label="Toggle button"
                                        data-style="quick" data-toggle="toggle" data-size="mini" data-height=""
                                        data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="ternary"
                                        data-width="" name="sslcompression" disabled="">
                                <div class="toggle-group"><label class="btn btn-success btn-xs toggle-on"
                                                                 aria-hidden="true">Да</label><label
                                            class="btn btn-ternary btn-xs toggle-off"
                                            aria-hidden="true">Нет</label><span
                                            class="toggle-handle btn btn-light btn-xs" aria-hidden="true"></span></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div role="tabpanel" tabindex="-1"
                     class="tab-pane SSH Tunnel pg-el-sm-12 pg-el-md-12 pg-el-lg-12 pg-el-12 fade collapse"
                     id="pgC_19366" aria-labelledby="pgH_19367">
                    <div class="pgadmin-control-group form-group row pg-el-12 use_ssh_tunnel"><span
                                class="control-label pg-el-sm-3 pg-el-12">Use SSH tunneling</span>
                        <label class="sr-value sr-only" for="pgC_19429">
                            Use SSH tunneling, Нет, Toggle button
                        </label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12 ">
                            <div class="toggle btn btn-ternary off btn-xs quick" data-toggle="toggle"
                                 disabled="disabled" tabindex="0" id="pgC_19429" style="width: 0px; height: 0px;"><input
                                        tabindex="-1" type="checkbox" aria-hidden="true" aria-label="Toggle button"
                                        data-style="quick" data-toggle="toggle" data-size="mini" data-height=""
                                        data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="ternary"
                                        data-width="" name="use_ssh_tunnel" disabled="">
                                <div class="toggle-group"><label class="btn btn-success btn-xs toggle-on"
                                                                 aria-hidden="true">Да</label><label
                                            class="btn btn-ternary btn-xs toggle-off"
                                            aria-hidden="true">Нет</label><span
                                            class="toggle-handle btn btn-light btn-xs" aria-hidden="true"></span></div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 tunnel_host"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19432">Tunnel host</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19432" class="form-control " name="tunnel_host" maxlength="255"
                                   value="" placeholder="" disabled="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 tunnel_port"><label for="pgC_19435"
                                                                                                  class="control-label pg-el-sm-3 pg-el-12">Tunnel
                            port</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="int" id="pgC_19435" class="form-control " name="tunnel_port" min="" max="65535"
                                   maxlength="255" value="22" placeholder="" disabled="" readonly=""
                                   aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 tunnel_username"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19438">Имя пользователя</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19438" class="form-control " name="tunnel_username"
                                   maxlength="255" value="" placeholder="" disabled="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 tunnel_authentication"><span
                                class="control-label pg-el-sm-3 pg-el-12">Authentication</span>
                        <label class="sr-value sr-only" for="pgC_19441">
                            Authentication, Пароль, Toggle button
                        </label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12 ">
                            <div class="toggle btn btn-ternary off btn-xs quick" data-toggle="toggle"
                                 disabled="disabled" tabindex="-1" id="pgC_19441" style="width: 90px; height: 0px;">
                                <input tabindex="-1" type="checkbox" aria-hidden="true" aria-label="Toggle button"
                                       data-style="quick" data-toggle="toggle" data-size="mini" data-height=""
                                       data-on="Identity file" data-off="Пароль" data-onstyle="success"
                                       data-offstyle="ternary" data-width="90" name="tunnel_authentication" disabled="">
                                <div class="toggle-group"><label class="btn btn-success btn-xs toggle-on"
                                                                 aria-hidden="true">Identity file</label><label
                                            class="btn btn-ternary btn-xs toggle-off"
                                            aria-hidden="true">Пароль</label><span
                                            class="toggle-handle btn btn-light btn-xs" aria-hidden="true"></span></div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 tunnel_identity_file pgadmin-file-has-error">
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_19444">Identity file</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <div class="input-group">
                                <input type="text" id="pgC_19444" class="form-control " name="tunnel_identity_file"
                                       min="" max="" maxlength="255" value="" placeholder="" disabled="">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary fa fa-ellipsis-h select_item" disabled=""
                                            aria-hidden="true" aria-label="Select file" title="Select file"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div role="tabpanel" tabindex="-1"
                     class="tab-pane Дополнительно pg-el-sm-12 pg-el-md-12 pg-el-lg-12 pg-el-12 fade collapse"
                     id="pgC_19372" aria-labelledby="pgH_19373">
                    <div class="pgadmin-control-group form-group row pg-el-12 hostaddr"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19447">Адрес компьютера</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="text" id="pgC_19447" class="form-control " name="hostaddr" maxlength="255"
                                   value="" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 db_res">
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_19450">Ограничение баз данных</label>

                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <select title="db_res" id="pgC_19450" class="form-control select2-hidden-accessible"
                                    name="db_res" value="null" disabled="" multiple="" data-select2-id="pgC_19450"
                                    tabindex="-1" aria-hidden="true">


                            </select><span
                                    class="select2 select2-container select2-container--default select2-container--disabled"
                                    dir="ltr" data-select2-id="19"><span class="selection"><span
                                            class="select2-selection select2-selection--multiple" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" title="db_res" tabindex="0"
                                            aria-disabled="true"><ul class="select2-selection__rendered"><li
                                                    class="select2-search select2-search--inline"><input
                                                        class="select2-search__field" type="search" tabindex="0"
                                                        autocomplete="off" autocorrect="off" autocapitalize="none"
                                                        spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                        placeholder="" disabled=""
                                                        style="width: 0.75em;"></li></ul></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>


                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 passfile pgadmin-file-has-error"><label
                                class="control-label pg-el-sm-3 pg-el-12" for="pgC_19453">Password file</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <div class="input-group">
                                <input type="text" id="pgC_19453" class="form-control " name="passfile" min="" max=""
                                       maxlength="255" value="" placeholder="" readonly="" aria-readonly="true">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary fa fa-ellipsis-h select_item" disabled=""
                                            aria-hidden="true" aria-label="Select file" title="Select file"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pgadmin-control-group form-group row pg-el-12 connect_timeout"><label for="pgC_19456"
                                                                                                      class="control-label pg-el-sm-3 pg-el-12">Connection
                            timeout (seconds)</label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">
                            <input type="int" id="pgC_19456" class="form-control " name="connect_timeout" min="0" max=""
                                   maxlength="255" value="0" placeholder="" readonly="" aria-readonly="true">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pg-prop-header"></div>
        <div class="pg-prop-footer">
            <div role="status" class="pg-prop-status-bar" style="visibility: hidden;"></div>
            <div class="pg-prop-btn-group pg-prop-btn-group-below">
                <button tabindex="0" type="help" class="btn btn-secondary pull-left mx-1" disabled="disabled"
                        title="Справка SQL по этому типу объектов." aria-label="Справка SQL по этому типу объектов.">
                    <span class="fa fa-lg fa-info"></span></button>
                <button tabindex="0" type="help" class="btn btn-secondary pull-left mx-1"
                        title="Справка к этому диалогу." aria-label="Справка к этому диалогу."><span
                            class="fa fa-lg fa-question"></span></button>
                <button tabindex="0" type="cancel" class="btn btn-secondary mx-1"
                        title="Отменить изменения в этом объекте."><span class="fa fa-close pg-alertify-button"></span>&nbsp;Отмена
                </button>
                <button tabindex="0" type="reset" class="btn btn-secondary mx-1" disabled="disabled"
                        title="Сбросить поля в этом диалоге."><span class="fa fa-recycle pg-alertify-button"></span>&nbsp;Сбросить
                </button>
                <button tabindex="0" type="save" class="btn btn-primary mx-1" disabled="disabled"
                        title="Сохранить этот объект."><span class="fa fa-save pg-alertify-button"></span>&nbsp;Сохранить
                </button>
            </div>
        </div>
    </div>
</div>