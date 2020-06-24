
<div class="wcDocker" style="position: relative; display: flex; padding:3px; ">

    <!--- Левая часть (меню) ------>
    <div class="wcLayoutPane" style="min-width: 250px; width:20%; position: relative !important;">
        <div class="wcFrame wcWide wcTall" style="position: relative !important; border: 1px solid #dde0e6;" >

            <div class="wcFrameTitleBar wcTabTop" style="width:100%; position: relative !important; cursor:default">
                <div class="wcFrameTitle" style="cursor:default ">Title</div>
            </div>

            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                 style="position: relative !important;">
                 <div class="wcPanelTabContent" >
                    <table class="wcLayout wcWide wcTall">
                        <tbody><tr><td>
                                <div class="pg-panel-content" style="position: relative !important; width: 100%; border:1px red solid" >
                                    <div class="aciTree aciTree0 aciTreeFullRow">
                                        <ul  class="aciTreeUl" style="">
                                            <?php require BASE_CONTROL . '/left_panel.php'; ?>


<!--                                            <li class="aciTreeLi aciTreeInode aciTreeLevel0 aciTreeFirst aciTreeLast aciTreeVisible aciTreeOdd">-->
<!--                                                <div class="aciTreeLine" >-->
<!--                                                     <div class="aciTreeEntry">-->
<!--                                                         <span class="aciTreeButton">-->
<!--                                                             <span class="aciTreePush"><span></span></span>-->
<!--                                                         </span>-->
<!--                                                         <span class="aciTreeItem">-->
<!--                                                             <span class="aciTreeIcon icon-server_group"></span>-->
<!--                                                             <span class="aciTreeText">Servers</span>-->
<!--                                                         </span>-->
<!--                                                     </div>-->
<!--                                                </div>-->
<!--                                            </li>-->
                                        </ul>
                                    </div>
                                </div>
                        </td></tr></tbody>
                    </table>
                 </div>
            </div>

        </div>
    </div>
    <!---  / Левая часть (меню) ------>

    <!--- Правая часть (основной контент) ------>
    <div class="wcLayoutPane" style="min-width: 400px; width: 80%; position: relative !important; ">
        <div class="wcFrame wcWide wcTall" style="postion:relative !important;" >

            <!------ Main Header ------>
            <div class="wcFrameTitleBar wcTabTop" style="width:100%; postion:relative ">
                <div class="wcTabScroller" style="postion:relative">
                    <div class="wcPanelTab" >
                        <div><a href="#"  class="panel-link-heading" >Панель информации</a></div>
                    </div>
                    <div class="wcPanelTab" >
                        <div><a href="#"  class="panel-link-heading" >Свойства</a></div>
                    </div>
                    <div class="wcPanelTab" >
                        <div><a href="#" class="panel-link-heading" >SQL</a></div>
                    </div>
                </div>
            </div>
            <!------ / Main Header ------>

            <!------ Main Content ------>
            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                 style="postion:relative !important;">

                <div class="wcPanelTabContent" >
                    <table class="wcLayout wcWide wcTall"><tbody><tr><td>

                        <div class="pg-panel-content">
                            <div class="negative-space p-2">
                                <div role="status" class="pg-panel-message pg-panel-statistics-message">
                                    зДесь будет контент
                                </div>
                            </div>

                        </div>

                    </td></tr></tbody></table>
                </div>

            </div>
            <!------ / Main Content ------>

        </div>
    </div>
    <!--- / Правая часть (основной контент) ------>

</div><!---- wcDocker --->
