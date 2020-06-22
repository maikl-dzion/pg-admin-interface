
<left-panel-wrapper style="" >
<template v-slot:content >

    <template v-if="commonActionName == 'users'" >

        <li v-for="(item, i) in usersList" @click="leftPanelBtnClick($event)"
            class="aciTreeLi aciTreeInode aciTreeLast aciTreeVisible aciTreeOdd">
            <div class="aciTreeLine">
                <div class="aciTreeBranch aciTreeLevel6">
                    <div class="aciTreeEntry">
                       <div @click="commonForm(item)" class="aciTreeButton">
                          <img src="<?=ASSETS;?>/images/svg/role.svg" style="width: 20px;" >
                       </div>
                       <div @click="commonForm(item)" class="aciTreeItem" draggable="true">
                           <span class="aciTreeText"
                                 style="font-size: 14px !important; font-weight: bold; color:cadetblue;" > {{item.usename}} </span>
                       </div>

                        <template v-if="item.usename != 'postgres' &&
                                        item.usename != 'w1user'" >
                               <div class="aciTreeButton"
                                    style="float: right; margin-right:10px; border:0px red solid; width:35px; text-align:center;" >
                                    <i @click="deleteDbUser(item.usename)" class="material-icons"
                                        style="font-size: 20px; color:red; margin:0px; font-weight: bold" >clear</i>
                               </div>
                        </template>

                    </div><div style="crear:both" ></div>
                </div>
            </div>
        </li>

    </template>
    <template v-if="commonActionName == 'databases'" >

        <li v-for="(item, i) in databaseList" @click="leftPanelBtnClick($event)"
            class="aciTreeLi aciTreeInode aciTreeLast aciTreeVisible aciTreeOdd">
            <div class="aciTreeLine">
                <div class="aciTreeBranch aciTreeLevel6">
                    <div class="aciTreeEntry">
                        <div @click="commonForm(item)" class="aciTreeButton">
                            <img src="<?=ASSETS;?>/images/svg/coll-database.svg" style="width: 20px;" >
                        </div>
                        <div @click="commonForm(item)" class="aciTreeItem" draggable="true">
                               <span class="aciTreeText"
                                     style="font-size: 14px !important; font-weight: bold; color:cadetblue;"> {{item.datname}} </span>
                        </div>
                        <template v-if="item.datname != 'template1' &&
                                        item.datname != 'template0' &&
                                        item.datname != 'maikldb'   &&
                                        item.datname != 'postgres'" >
                             <div class="aciTreeButton"
                                  style="float: right; margin-right:10px; border:0px red solid; width:35px; text-align:center;">
                                <i @click="deleteDb(item.datname)" title="Хотете удалить базу?"
                                   class="material-icons" style="font-size: 20px; color:red; margin:0px; font-weight: bold" >clear</i>
                             </div>
                        </template>

                    </div><div style="crear:both" ></div>
                </div>
            </div>
        </li>

    </template>
    <template v-if="commonActionName == 'tables'" >

        <li v-for="(item, tabName) in tableList" @click="leftPanelBtnClick($event)"
            class="aciTreeLi aciTreeInode aciTreeLast aciTreeVisible aciTreeOdd">
            <div class="aciTreeLine">
                <div class="aciTreeBranch aciTreeLevel6">
                    <div class="aciTreeEntry">
                        <div @click="commonForm(item)" class="aciTreeButton">
                             <img src="<?=ASSETS;?>/images/svg/table.svg" style="width: 20px;" >
                        </div>
                        <div @click="commonForm(item)" class="aciTreeItem" draggable="true">
                             <span class="aciTreeText"
                                   style="font-size: 14px !important; font-weight: bold; color:cadetblue;"> {{tabName}} </span>
                        </div>
                        <template >
                              <div class="aciTreeButton"
                                   style="float: right; margin-right:10px; border:0px red solid; width:35px; text-align:center;" >
                                   <i @click="commonDeleteTable(tabName)" class="material-icons"
                                      style="font-size: 20px; color:red; margin:0px; font-weight: bold" >clear</i>
                              </div>
                        </template>
                    </div><div style="crear:both" ></div>
                </div>
            </div>
        </li>

    </template>

</template>
</left-panel-wrapper>
