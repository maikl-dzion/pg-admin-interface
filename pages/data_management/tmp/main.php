
<div id="main-editor_panel" >
        <div class="sql-editor" >

            <?php include DATA_PAGE . '/nav.php'; ?>

            <div id="editor-panel" >

                <div class="wcDocker" style="border:0px red solid;" >

                    <?php include DATA_PAGE . '/sql_editor.php'; ?>

                    <!-------####################-------->
                    <div class="wcLayoutPane" style="width:100%; height: 100%;  position: relative; border:0px blue solid; z-index:99">
                        <div class="wcFrame wcWide wcTall" style="cursor:default;" >

                            <!--- Панель над таблицей Список таблиц ----->
                            <div class="wcFrameTitleBar wcTabTop" style="width: 100%; cursor:default;">
                                <div class="wcTabScroller" style="left: 0px; cursor:default;">

                                    <template v-for="(item, tabName) in tableList">
                                        <div class="wcPanelTab" ><div>
                                            <a v-if="tabName != 'products'"
                                               @click="getTableFields(tabName)"
                                               style="cursor:pointer; padding:4px; font-weight: bold;"
                                               class="panel-link-heading" >{{tabName}}</a>
                                        </div></div>
                                    </template>

<!--                                    <div class="wcPanelTab wcPanelTabActive" >-->
<!--                                        <div><a href="#" >Результат</a></div>-->
<!--                                    </div>-->

                                </div>
                                <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; right: 0px; cursor:default;"></div>
                            </div>

                            <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; cursor:default;">
                                <div class="wcFrameButton"  style="display: block;"><div class="fa fa-close">1</div></div>
                                <div class="wcFrameButton"  style="display: block;"><div class="fa fa-download">2</div>C</div>
                            </div>
                            <!------- End ------------------------------>

                            <!--###################################----->
                            <!------ TABLE EDIT ------------------------>
                            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                                 style="left: 0px; right: 0px; bottom: 0px; border:1px red solid; cursor:default;">
                                <div class="wcPanelTabContent" style="cursor:default;">

                                    <table class="wcLayout wcWide wcTall" style="cursor:default;" >
                                        <tbody><tr><td>
                                            <div class="pg-panel-content hide-vertical-scrollbar">
                                                <div  class="sql-editor-grid-container text-12 slickgrid_934644 ui-widget"
                                                      style="height: 100%; overflow: auto; outline: 0px; position: relative;">

                                                      <!---- Table header ----->
                                                      <div class="slick-header ui-state-default">
                                                        <div class="slick-header-columns" style="left:10px; width:100%;" >
                                                            
                                                            <div class="ui-state-default slick-header-column"  style="width: 128px;">
                                                                <div class="slick-header-button editable-column-header-icon">
                                                                    <i class="fa fa-pencil"></i></div>
                                                                <span class="slick-column-name">
                                                                    <span><span class="column-description">
                                                                            <span class="column-name">city_id</span>
                                                                            <span class="column-type">[PK] integer</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>

                                                            <div class="ui-state-default slick-header-column selected" style="width: 393px;">
                                                                <div class="slick-header-button editable-column-header-icon">
                                                                    <i class="fa fa-pencil"></i></div>
                                                                <span class="slick-column-name">
                                                                    <span >
                                                                        <span class="column-description">
                                                                            <span class="column-name">city</span>
                                                                            <span class="column-type">text</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>

                                                            <div class="ui-state-default slick-header-column"  style="width: 427px;">
                                                                <div class="slick-header-button editable-column-header-icon">
                                                                    <i class="fa fa-pencil"></i>
                                                                </div>
                                                                <span class="slick-column-name">
                                                                    <span>
                                                                        <span class="column-description">
                                                                            <span class="column-name">country_id</span>
                                                                            <span class="column-type">smallint</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>

                                                            <div class="ui-state-default slick-header-column"   style="width: 451px;">
                                                                <div class="slick-header-button editable-column-header-icon">
                                                                    <i class="fa fa-pencil"></i>
                                                                </div>
                                                                <span class="slick-column-name">
                                                                    <span>
                                                                        <span class="column-description">
                                                                            <span class="column-name">last_update</span>
                                                                            <span class="column-type">timestamp with time zone</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <div class="slick-resizable-handle"></div>
                                                            </div>

                                                    </div></div>
                                                    <!---- / Table header ----->

                                                    <!---- Table Content ----->
                                                    <div class="slick-viewport"
                                                         style="width: 100%; overflow: auto; outline: 0px; position: relative; height: 400px;">
                                                        <div class="grid-canvas" style="height: 100%; width: 100%;">
                                                            <div class="ui-widget-content slick-row odd active" style="top:10px; display: flex; border:1px green solid; height: 60px;">
                                                                <div class="slick-cell l0 r0 selected" style="position:relative; width:20%; margin: 4px border:1px black solid;" ><span>6</span></div>
                                                                <div class="slick-cell l1 r1"          style="position:relative; width:20%; margin: 4px border:1px black solid;"><span style="float:right">6</span></div>
                                                                <div class="slick-cell l2 r2 active selected" style="position:relative; width:20%; margin: 4px border:1px black solid;" >Addis Abeba</div>
                                                                <div class="slick-cell l3 r3"          style="position:relative; width:20%; margin: 4px border:1px black solid;" ><span style="float:right">31</span></div>
                                                                <div class="slick-cell l4 r4"          style="position:relative; width:20%; margin: 4px border:1px black solid;" >2017-02-15 09:45:25+00</div>
                                                            </div>
                                                            <div class="ui-widget-content slick-row odd" style="top:30px">
                                                                <div class="slick-cell l0 r0"><span >14</span></div>
                                                                <div class="slick-cell l1 r1"><span style="float:right">14</span></div>
                                                                <div class="slick-cell l2 r2">al-Manama</div>
                                                                <div class="slick-cell l3 r3"><span style="float:right">11</span></div>
                                                                <div class="slick-cell l4 r4">2017-02-15 09:45:25+00</div>
                                                            </div>
                                                            <div class="ui-widget-content slick-row even" style="top:40px">
                                                                <div class="slick-cell l0 r0"><span>15</span></div>
                                                                <div class="slick-cell l1 r1"><span style="float:right">15</span></div>
                                                                <div class="slick-cell l2 r2" title="">al-Qadarif</div>
                                                                <div class="slick-cell l3 r3"><span style="float:right">89</span></div>
                                                                <div class="slick-cell l4 r4">2017-02-15 09:45:25+00</div>
                                                            </div>

                                                            <div class="ui-widget-content slick-row even" style="top:60px"><div class="slick-cell l0 r0"><span data-row="2" data-cell-type="row-header-selector">3</span></div><div class="slick-cell l1 r1" title=""><span style="float:right">3</span></div><div class="slick-cell l2 r2" title="">Abu Dhabi</div><div class="slick-cell l3 r3"><span style="float:right">101</span></div><div class="slick-cell l4 r4">2017-02-15 09:45:25+00</div></div>
                                                            <div class="ui-widget-content slick-row odd" style="top:75px"><div class="slick-cell l0 r0"><span data-row="3" data-cell-type="row-header-selector">4</span></div><div class="slick-cell l1 r1" title=""><span style="float:right">4</span></div><div class="slick-cell l2 r2" title="">Acua</div><div class="slick-cell l3 r3"><span style="float:right">60</span></div><div class="slick-cell l4 r4">2017-02-15 09:45:25+00</div></div>
                                                            <div class="ui-widget-content slick-row even" style="top:80px"><div class="slick-cell l0 r0" title=""><span data-row="0" data-cell-type="row-header-selector">1</span></div><div class="slick-cell l1 r1"><span style="float:right">1</span></div><div class="slick-cell l2 r2" title="">A Corua (La Corua)</div><div class="slick-cell l3 r3"><span style="float:right">87</span></div><div class="slick-cell l4 r4">2017-02-15 09:45:25+00</div></div>
                                                        </div>
                                                    </div>

                                                    <div  style="position:fixed;width:0;height:0;top:0;left:0;outline:0;"></div></div>
                                            </div>
                                        </td></tr></tbody>
                                    </table>

                                </div>
                            </div>
                            <!------ / TABLE EDIT ---------->
                            <!--####################-------->

                        </div>
                    </div>
                    <!-------####################-------->

                    <div class="wcSplitterBar wcWide wcSplitterBarH" style="top: 373.75px; left: 0px;">
                        <div class="wcSplitterBarLine"></div>
                    </div>

                </div>

            </div>


</div></div>

