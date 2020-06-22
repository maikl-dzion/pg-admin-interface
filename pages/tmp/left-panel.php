
<div class="wcLayoutPane" style="border:0px red solid; width: 400px; left: 10px; top: 0px; bottom: 0px;" >
    <div class="wcFrame wcWide wcTall" style="background-clip: border-box;
                                              border: 1px solid #dde0e6; margin-top:20px;">

        <!------ Start ----->
        <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
             style="left: 0px; right: 0px; bottom: 0px;">
            <div class="wcPanelTabContent" >
                <table class="wcLayout wcWide wcTall">
                    <tr><td>
                        <div class="pg-panel-content">
                            <div  class="aciTree aciTree0 aciTreeFullRow" >
                                <ul role="group" class="aciTreeUl" >

<!--                                    <li class="aciTreeLi aciTreeInode aciTreeFirst aciTreeVisible aciTreeEven aciTreeSelected aciTreeFocus">-->
<!--                                        <div class="aciTreeLine">-->
<!--                                            <div class="aciTreeBranch aciTreeLevel6">-->
<!--                                                <div class="aciTreeEntry">-->
<!--                                                       <span class="aciTreeButton">-->
<!--                                                          <img src="images/svg/table.svg" style="width: 20px;" >-->
<!--                                                       </span>-->
<!--                                                       <span class="aciTreeItem" draggable="true">-->
<!--                                                           <span class="aciTreeText"> Таблица </span>-->
<!--                                                       </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </li>-->

                                    <template v-if="commonActionName == 'users'" >

                                        <li v-for="(item, i) in usersList"
                                            class="aciTreeLi aciTreeInode aciTreeLast aciTreeVisible aciTreeOdd">
                                            <div class="aciTreeLine">
                                                <div class="aciTreeBranch aciTreeLevel6">
                                                    <div class="aciTreeEntry">
                                                           <span @click="commonForm(item)" class="aciTreeButton">
                                                              <img src="images/svg/role.svg" style="width: 20px;" >
                                                           </span>
                                                           <span @click="commonForm(item)" class="aciTreeItem" draggable="true">
                                                               <span class="aciTreeText"> {{item.usename}} </span>
                                                           </span>

                                                           <template v-if="item.usename != 'postgres' &&
                                                                           item.usename != 'w1user'" >
                                                               <span class="aciTreeButton" style="float: right; margin-right:10px;" >
                                                                  <i @click="deleteDbUser(item.usename)"
                                                                     class="material-icons" style="font-size: 17px; color:gainsboro" >backspace</i>
                                                               </span>
                                                           </template>

                                                    </div><div style="crear:both" ></div>
                                                </div>
                                            </div>
                                        </li>

                                    </template>
                                    <template v-if="commonActionName == 'databases'" >

                                        <li v-for="(item, i) in databaseList"
                                            class="aciTreeLi aciTreeInode aciTreeLast aciTreeVisible aciTreeOdd">
                                            <div class="aciTreeLine">
                                                <div class="aciTreeBranch aciTreeLevel6">
                                                    <div class="aciTreeEntry">
                                                        <span @click="commonForm(item)" class="aciTreeButton">
                                                          <img src="images/svg/coll-database.svg" style="width: 20px;" >
                                                        </span>
                                                        <span @click="commonForm(item)" class="aciTreeItem" draggable="true">
                                                               <span class="aciTreeText"> {{item.datname}} </span>
                                                        </span>
                                                        <template v-if="item.datname != 'template1' &&
                                                                        item.datname != 'template0' &&
                                                                        item.datname != 'maikldb'   &&
                                                                        item.datname != 'postgres'" >
                                                             <span class="aciTreeButton" style="float: right; margin-right:10px;" >
                                                                <i @click="deleteDbUser(item.usename)"
                                                                   class="material-icons" style="font-size: 17px; color:gainsboro" >backspace</i>
                                                             </span>
                                                        </template>

                                                    </div><div style="crear:both" ></div>
                                                </div>
                                            </div>
                                        </li>

                                    </template>
                                    <template v-if="commonActionName == 'tables'" >

                                        <li v-for="(item, tabName) in tableList"
                                            class="aciTreeLi aciTreeInode aciTreeLast aciTreeVisible aciTreeOdd">
                                            <div class="aciTreeLine">
                                                <div class="aciTreeBranch aciTreeLevel6">
                                                    <div class="aciTreeEntry">
                                                        <span @click="commonForm(item)" class="aciTreeButton">
                                                             <img src="images/svg/table.svg" style="width: 20px;" >
                                                        </span>
                                                        <span @click="commonForm(item)" class="aciTreeItem" draggable="true">
                                                             <span class="aciTreeText"> {{tabName}} </span>
                                                        </span>
                                                        <template >
                                                              <span class="aciTreeButton" style="float: right; margin-right:10px;" >
                                                                  <i @click="commonDeleteTable(tabName)"
                                                                     class="material-icons" style="font-size: 17px; color:gainsboro" >backspace</i>
                                                              </span>
                                                        </template>
                                                    </div><div style="crear:both" ></div>
                                                </div>
                                            </div>
                                        </li>

                                    </template>

                                </ul>
                            </div>
                        </div>
                    </td></tr>
                </table>
            </div>
        </div>
        <!------ End ----->

    </div>
</div>