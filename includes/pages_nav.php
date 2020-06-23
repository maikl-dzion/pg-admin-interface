<div class="navigation-panel" style="position:relative; margin-bottom:10px;" >
    <div class="wcFrameTitleBar wcTabTop"
         style="height:34px; position: relative; z-index:50; width: 100%; cursor:default; border:0px red solid; padding-top: 3px; background: none">
        <div class="wcTabScroller" style="cursor:default;">

        <template v-if="pageName == 'base_control'">

            <!--- Панель для конфигурирования базы --->
            <template v-for="(title, fname) in panelSettingsMenu" >
                <div @click="cssClassToggle($event, '.wcPanelTab', 'wcPanelTabActive')"
                     class="wcPanelTab"  style="cursor:pointer;" >
                    <div @click="commonAction(fname, $event)"  class="data-table-list-menu" >
                        <a class="panel-link-heading" >{{title}}</a>
                    </div>
                </div>
            </template>
            <!------------      End     -------------->

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

