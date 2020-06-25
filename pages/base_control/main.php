<div class="wcDocker" style="position: relative; display: flex; padding:3px;">

    <!--- Левая часть (меню) ------>
    <div class="wcLayoutPane" style="width: 280px; position: relative !important;">
        <div class="wcFrame wcWide wcTall"
             style="position: relative !important; border: 1px solid #dde0e6; border-right: 0">

            <div class="wcFrameTitleBar wcTabTop" style="width:100%; position: relative !important; cursor:default">
                <div class="wcFrameTitle" style="cursor:default; display: flex">
                    <span style="text-align: left">{{commonTitle}}</span>
                    <span v-if="commonItemName" style="font-style: italic;color: darkblue"> :: {{commonItemName}}</span>
                </div>
            </div>

            <div class="wcPanelTabContent" style="position: relative !important;width: 100%; ">
                <div class="pg-panel-content" style="position: relative !important; width: 100%;">
                    <div class="aciTree" style="width: 100% !important;">
                        <ul class="aciTreeUl" style="width: 100% !important; border:0px red solid; ">
                            <?php require BASE_CONTROL . '/left_panel.php'; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---  / Левая часть (меню) ------>

    <!--- Правая часть (основной контент)   ------>
    <div class="wcLayoutPane"
         style="min-width: 400px; width: 100%; position: relative !important; border: 1px solid #dde0e6; ">
        <div class="wcFrame wcWide wcTall" style="postion:relative !important;">

            <!------ Main Header ------>
            <div class="wcFrameTitleBar wcTabTop" style="width:100%; postion:relative ">
                <div class="wcTabScroller" style="postion:relative; cursor:default">

                    <div class="wcPanelTab" style="cursor:default" >
                        <div style="cursor:default; overflow: inherit !important;" >
                            <a @click="panelDbPageShow = !panelDbPageShow" class="panel-link-heading"
                                style="text-align:center; cursor:pointer; display: block; width:190px; border-bottom: 1px gainsboro solid" >
                                Открыть / закрыть панель
                        </a></div>
                    </div>

<!--                    <div class="wcPanelTab" >-->
<!--                        <div><a class="panel-link-heading" >Свойства</a></div>-->
<!--                    </div>-->

<!--                    <ul class="nav nav-tabs" >-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" > Общие </a>-->
<!--                        </li><li class="nav-item">-->
<!--                            <a class="nav-link" > Соединение</a>-->
<!--                        </li>-->
<!--                    </ul>-->

                </div>
            </div>
            <!------ / Main Header ------>

            <!------ Main Content ------>
            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                 style="postion:relative !important;">
                <div class="wcPanelTabContent" style="postion:relative !important;">
                    <div class="pg-panel-content" style="position: relative !important; width: 100%;">
                        <div class="negative-space p-2">

                            <div v-if="panelDbPageShow"
                                 style="margin:5px 0px 10px 0px; border:0px gainsboro solid; position: relative !important; display: flex">
                                <?php require BASE_CONTROL .'/actions_panel.php'  ; ?>
                            </div><hr>

                            <?php require BASE_CONTROL . '/content.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!------ / Main Content ------>

        </div>
    </div>
    <!--- / Правая часть (основной контент) ------>

</div><!---- wcDocker --->
