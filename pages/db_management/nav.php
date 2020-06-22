<div class="wcLayoutPane" style="border:0px red solid;  width: 100%; top: 0px; height: 40px;">
    <div class="wcFrame wcWide wcTall">
        <div class="wcFrameTitleBar wcTabTop" style="width: 100%;">
            <div class="wcTabScroller" style="left: 10px; border-left: 1px gainsboro solid;">

                <div v-for="(title, fname) in panelSettingsMenu" class="wcPanelTab" >
                    <div style="max-width:200px; text-align: center;" >
                         <a @click="commonAction(fname, $event)" :id="'nav-menu-' + fname"
                            style="max-width:100%; cursor:pointer; font-weight: bold; color:black; font-size: 15px; "
                            class="panel-link-heading" >{{title}}</a>
                    </div>
                </div>

            </div>
            <div class="wcFrameButtonBar" style="min-width: 48px; width: 48px; right: 24px;"></div>
        </div>
    </div>
</div>