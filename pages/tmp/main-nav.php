<div class="wcLayoutPane" style="border:0px red solid;  width: 100%; top: 0px; height: 34px;">
    <div class="wcFrame wcWide wcTall">

        <div class="wcFrameTitleBar wcTabTop" style="width: 100%;">
            <div class="wcTabScroller" style="left: 34px; border-left: 1px gainsboro solid;">

                <div v-for="(title, fname) in panelSettingsMenu" class="wcPanelTab" >
                    <div style="max-width:200px;" >
                         <a @click="commonAction(fname, $event)" style="max-width:100%; cursor:pointer;"
                            class="panel-link-heading" >{{title}}</a>
                    </div>
                </div>

                <div class="wcPanelTab" >
                    <div style="max-width:200px;" >
                        <a @click="sqlCommandRun('get_roles', $event)"  style="max-width:100%; cursor:pointer;"
                           class="panel-link-heading" >Роли</a>
                    </div>
                </div>

<!--                <div class="wcPanelTab" id="1">-->
<!--                    <div><a href="https://2886795277-80-kitek08.environments.katacoda.com/pgadmin4/browser/#"-->
<!--                            tabindex="-1" class="panel-link-heading">Свойства</a></div>-->
<!--                </div>-->
<!---->
<!--                <div class="wcPanelTab wcPanelTabActive" id="6">-->
<!--                    <div>-->
<!--                        <div class="wcTabIcon fa fa-table"></div>-->
<!--                        <span title="View/Edit Data - public.dfg/postgres/postgres@PostgreSQL 12">-->
<!--                            public.dfg/postgres/postgres@PostgreSQL 12</span>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
            <div class="wcFrameButtonBar" style="min-width: 48px; width: 48px; right: 24px;"></div>
        </div>

</div>