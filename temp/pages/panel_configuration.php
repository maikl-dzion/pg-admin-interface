<div class="wcPanelTabContent" >
    <table class="wcLayout wcWide wcTall"><tbody><tr><td>
        <div class="pg-panel-content pg-no-overflow pg-el-container" el="xl">
            <div class="obj_properties container-fluid">

                <div style="background: white; margin:3px 3px 3px 0px; padding:3px; ">
                    <current-info
                        :data_info="curUserInfo"
                    ></current-info>
                </div>

                <template v-if="commonActionName == 'tables'" >

                        <div class="pg-prop-header" style="z-index:999">
                            <div class="pg-prop-btn-group pg-prop-btn-group-above">
                                <button class="btn btn btn-primary pull-right m-1"
                                      title="Редактирование"><span class="fa fa-sm fa-pencil"></span> Редактирование
                                </button>
                                <button   class="btn btn-secondary btn-secondary m-1" title="" >
                                    <span class="fa fa-lg fa-info"></span>
                                </button>
                            </div>
                        </div>

<!--                        <pre>{{commonItem}}</pre>-->

                        <div class="pg-prop-footer"></div>

                        <!---- Content Start --->
                        <div class="pg-prop-content col-12 has-pg-prop-btn-group"
                             style="margin-top:30px; margin-left:-10px; margin-bottom:40px !important; scroll:auto">
                            <div class="accordian-group pg-el-12">
                                <div class="badge" ><span class="caret"></span> Заголовок </div>
                                <div class="accordian-content pg-el-12 collapse show" >

                                    <div v-for="(item, fname) in commonItem"
                                         class="pgadmin-control-group form-group row pg-el-12 name">

                                         <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">
                                             {{item['data_type']}}
                                         </label>

                                         <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 320px;" >
                                            <input  @change="changeFieldName(fname, commonItem[fname]['column_name'])"
                                                    v-model="commonItem[fname]['column_name']"
                                                   :id="'inp-' + fname" class="form-control uneditable-input" style="background-color: #f3f5f9;" >
                                         </div>

                                         <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="margin-left:4px; max-width: 100px;" >
                                            <select v-model="commonItem[fname]['input_type']"
                                                    @change="changeFieldType(fname, commonItem[fname]['input_type'])" class="form-control"
                                                    style=" width:100%; height: 100%; cursor:pointer " >
                                                    <option v-for="(item, i) in tableFieldTypes" :value="item.name" >
                                                        {{item.name}}
                                                    </option>
                                            </select>
                                         </div>

<!--                                        <div class="pgadmin-controls" style="margin-left:5px; max-width: 100px;" >-->
<!--                                            auto_increment:{{commonItem[fname]['auto_increment']}}-->
<!--                                        </div>-->

                                         <div class="pgadmin-controls" style="margin-left:10px; max-width: 100px;" >
                                             column_default:{{commonItem[fname]['column_default']}}
                                         </div>



                                    </div>

<!--                                    <div class="pgadmin-control-group form-group row pg-el-12 description">-->
<!--                                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1285">Комментарий</label>-->
<!--                                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12">-->
<!--                                            <textarea id="pgC_1285" class="form-control " name="description"-->
<!--                                                      placeholder="" readonly=""-->
<!--                                                      rows="5" ></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                </div>
                            </div>
                        </div>
                        <!---- / Content End --->
                </template>
                <template v-else-if="commonActionName == 'users'" >

                    <div class="pg-prop-header">
                        <div class="pg-prop-btn-group pg-prop-btn-group-above">
                            <button class="btn btn btn-primary pull-right m-1"
                                    title="Редактирование"><span class="fa fa-sm fa-pencil"></span> Редактирование
                            </button>
                            <button   class="btn btn-secondary btn-secondary m-1" title="" >
                                <span class="fa fa-lg fa-info"></span>
                            </button>
                        </div>
                    </div>

                    <div v-for="(item, fname) in commonItem" style="display: flex; padding:3px;">
                        <label style="font-style: italic; width:30%; color:lightseagreen; padding-left:6px;" >{{fname}}</label>
                        <input v-model="commonItem[fname]" style="font-style: italic; width:100%;"
                               type="text" class="form-control" :placeholder="fname">
                    </div>

                </template>
                <template v-else-if="commonActionName == 'databases'" >

                    <div class="pg-prop-header">
                        <div class="pg-prop-btn-group pg-prop-btn-group-above">
                            <button   class="btn btn-primary m-1 btn-class" title="Создать новую базу" >
                                <span class="fa fa-sm fa-pencil"> Создать новую базу
                            </button>
                        </div>
                    </div>

                    <!------- ФОРМА ------->
                    <div class="accordian-group pg-el-12" style="width: 450px;" >
                        <div class="badge" ><span class="caret"></span> Создание новой базы </div>
                        <div class="accordian-content pg-el-12 collapse show" >

                            <div class="pgadmin-control-group form-group row pg-el-12 name">
                                 <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">
                                    Имя базы
                                 </label>
                                 <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 320px;" >
                                    <input  v-model="newDbName" class="form-control uneditable-input" style="background-color: #f3f5f9;" >
                                 </div>
                            </div>

                            <div class="pg-prop-btn-group pg-prop-btn-group-above" style="border-bottom: 0px grey solid; text-align: right;" >
                                <button  @click="addNewDb()" class="btn btn-primary m-1 btn-class" style="width:200px;">
                                      <span class="fa fa-sm fa-pencil"> Сохранить
                                </button>
                            </div>

                    </div></div>
                    <!----- / ФОРМА ------>

                    <div v-for="(item, fname) in commonItem" style="display: flex; padding:3px;">
                        <label style="font-style: italic; width:30%; color:lightseagreen; padding-left:6px;" >{{fname}}</label>
                        <input v-model="commonItem[fname]" style="font-style: italic; width:100%;"
                               type="text" class="form-control" :placeholder="fname">
                    </div>

                </template>
                <template v-if="freeSqlCommandResult.length" >

                    {{freeSqlCommandResult}}

                </template>

            </div></div>
    </td></tr></tbody></table>
</div>