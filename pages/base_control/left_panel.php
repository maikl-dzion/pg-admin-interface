
<template v-if="commonActionName == 'users'" >

    <li v-for="(item, i) in usersList" @click="leftPanelBtnClick($event)"
        class="aciTreeLi" style="width:100%; height: 38px;" >
        <div class="aciTreeLine"
             style="display:flex; width:100%; margin-bottom:4px !important; border-bottom:1px gainsboro solid !important; "  >

               <div @click="commonForm(item)" style="width: 10%;">
                  <img src="<?=ASSETS;?>/images/svg/role.svg" style="width:100%;" >
               </div>
               <div @click="commonForm(item)"
                     style="width:80%; padding:3px 1px 0px 4px;">
                     <span class="aciTreeText"
                           style="font-size: 14px !important; color: #326690; font-weight: 600;"
                     > {{item.usename}} </span>
               </div>

                <template v-if="item.usename != 'postgres' &&
                                item.usename != 'w1user'" >
                       <div style="width:10%; padding-top:5px; text-align:center; border:1px red solid;" >
                            <i @click="deleteDbUser(item.usename)" class="material-icons"
                                style="font-size: 20px; color:red; margin:0px; font-weight: bold" >clear</i>
                       </div>
                </template>

    </div></li>

</template>
<template v-if="commonActionName == 'databases'" >

    <li v-for="(item, i) in databaseList" @click="leftPanelBtnClick($event)"
        class="aciTreeLi" style="width:100%; height: 38px; " >
        <div class="aciTreeLine"
             style="display:flex; width:100%; margin-bottom:4px !important; border-bottom:1px gainsboro solid !important; "  >

                <div @click="commonForm(item)" class="" style="width: 10%;">
                    <img src="<?=ASSETS;?>/images/svg/coll-database.svg" style="width: 100%;" >
                </div>
                <div @click="commonForm(item)"
                     style="width:80%; padding:3px 1px 0px 4px;  border:0px orange solid; ">
                         <span class="aciTreeText"
                               style="font-size: 14px !important; color: #326690; font-weight: 600;"
                         >{{item.datname}} </span>
                </div>
                <template v-if="item.datname != 'template1' &&
                                item.datname != 'template0' &&
                                item.datname != 'maikldb'   &&
                                item.datname != 'postgres'" >
                     <div style="width:10%; padding-top:5px; border:1px red solid;  text-align:center;">
                        <i @click="deleteDb(item.datname)" title="Хотете удалить базу?"
                           class="material-icons" style="font-size: 20px; color:red; margin:0px; font-weight: bold" >clear</i>
                     </div>
                </template>

    </div></li>

</template>
<template v-if="commonActionName == 'tables'" >
    <li v-for="(item, tabName) in tableList" @click="leftPanelBtnClick($event)"
        class="aciTreeLi" style="width:100%; height: 38px;" >
        <div class="aciTreeLine"
             style="display:flex; width:100%; margin-bottom:4px !important; border-bottom:1px gainsboro solid !important;  "  >

                    <div @click="commonForm(item)" class="" style="width: 10%;">
                         <img src="<?=ASSETS;?>/images/svg/table.svg" style="width: 100%;" >
                    </div>

                    <div @click="commonForm(item)" class=""
                         style="width:80%; padding:3px 1px 0px 4px;  border:0px orange solid; ">
                         <span class="aciTreeText"
                               style="font-size: 14px !important; color: #326690; font-weight: 600;"
                         >{{tabName}} </span>
                    </div>

                    <template >
                          <div style="width:10%; padding-top:5px; border:1px red solid;  text-align:center;" >
                               <i @click="commonDeleteTable(tabName)" class="material-icons"
                                  style="font-size: 20px; color:red; margin:0px; font-weight: bold" >clear</i>
                          </div>
                    </template>

    </div></li>
</template>

