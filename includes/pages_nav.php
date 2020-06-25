<div class="navigation-panel" style="position:relative; margin-bottom:10px;" >
    <div class="wcFrameTitleBar wcTabTop"
         style="height:38px; position: relative; z-index:0; width: 100%; cursor:default; border:0px red solid; padding-top: 3px; background: none">
        <div class="wcTabScroller" style="cursor:default;">

        <template v-if="pageName == 'base_control'">

            <!--- Панель для конфигурирования базы --->
            <template v-for="(title, fname) in panelSettingsMenu" >
                <div @click="cssClassToggle($event, '.wcPanelTab', 'wcPanelTabActive')"
                     class="wcPanelTab"  style="cursor:pointer;" >
                    <div @click="commonAction(fname)"  class="data-table-list-menu" >
                        <a class="panel-link-heading" >{{title}}</a>
                    </div>
                </div>
            </template>
            <!------------      End     -------------->


            <div style="width:400px; float: right; display: flex;" >

                <button @click="confDbUpdateModalOpen = !confDbUpdateModalOpen" class="btn btn-primary m-1 no-radius"
                        style="width: 50%;">
                    Изменить конфиг базы
                </button>

                <button @click="setDefaultConfig()" class="btn btn-primary m-1 no-radius"
                        style="width: 50%;">
                    Базовые настройки
                </button>

            </div><div style="clear:both" ></div>

        </template>
        <template v-else-if="pageName == 'data_control'">

            <!--- Панель для данных ------------------>
            <template v-for="(item, tabName) in tableList">
                <div @click="cssClassToggle($event, '.wcPanelTab', 'wcPanelTabActive')"
                     class="wcPanelTab"  style="cursor:pointer;">
                    <div v-if="tabName != 'products'"
                         @click="getTableFields(tabName)" class="data-table-list-menu"  >
                        <a class="panel-link-heading">{{tabName}}</a>
                    </div>
                </div>
            </template>
            <!-------   End    ------------------------->

        </template>
        <template v-else-if="pageName == 'sql_editor'">

            <!--- Панель для редактора запросов --------->
            <template v-for="(item, fname) in sqlCommandListMenu" >
                <div @click="cssClassToggle($event, '.wcPanelTab', 'wcPanelTabActive')"
                     class="wcPanelTab" >
                     <div @click="setSqlCommandType(fname, item.type)"  class="data-table-list-menu" >
                        <a class="panel-link-heading">{{item.title}}</a>
                </div></div>
            </template>
            <!------------      End    ------------------->

        </template>
</div></div></div>


<div v-if="confDbUpdateModalOpen && pageName == 'base_control'"
     style="position: absolute; left:60%; width:40%;
            z-index: 9999; background: gainsboro;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
    <div class="col-md-33" style="width:100%; padding:4px; border:0px gainsboro solid">

        <!--  <pre>{{dbConf}}</pre>-->
        <div class="contact-us-detail"
             style="cursor:pointer; text-align:center;position: relative; top:0px; left:0px; margin:2px 0px 4px 0px; border-radius: 0px; width: 100%">
            <a style="text-align:center; display: block">Создать конф.</a></div>
            <div v-for="(val, name) in dbConf"
                 style="display: flex; transition: width 2s, height 2s, background-color 2s, transform 2s; ">
                <div style="width: 25%; border:0px grey solid; text-align:left; padding-left:5px;">{{name}}</div>

                <div v-if="name == 'user'" style="width:75%;">
                    <select v-model="dbConf[name]" @change="selectUserPassword(dbConf[name])" class="form-control">
                        <option v-for="(item) in usersList" :value="item.usename">{{item.usename}}</option>
                    </select>
                </div>

                <div v-else-if="name == 'dbname'" style="width:75%;">
                    <select v-model="dbConf[name]" class="form-control">
                        <option v-for="(item) in databaseList" :value="item.datname">{{item.datname}}</option>
                    </select>
                </div>
                <div v-else style="width:75%;">
                    <input v-model="dbConf[name]" type="text" class="form-control">
                </div>

            </div>

            <button @click="saveConfig()" class="btn btn-primary"
                    style="width:100%; border-radius: 0px; margin:10px 5px 5px 0px;">Сохранить
            </button>

    </div>
</div>

