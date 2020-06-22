<?php // include DATA_PAGE . '/nav.php'; ?>
<?php // include DATA_PAGE . '/sql_editor.php'; ?>

<!--- Панель над таблицей ----->
<div style="position:relative; border:0px red solid; cursor:default;">

    <div class="wcFrameTitleBar wcTabTop"
         style="height:34px; position: relative; z-index:50; width: 100%; cursor:default; border:0px red solid; background: none">
        <div class="wcTabScroller" style="cursor:default;">
            <template v-for="(item, tabName) in tableList">
                <div @click="cssClassToggle($event, '.wcPanelTab', 'wcPanelTabActive')"
                     class="wcPanelTab"  style="cursor:pointer;">
                     <div v-if="tabName != 'products'"
                          @click="getTableFields(tabName)" class="data-table-list-menu"  >
                          <a class="panel-link-heading">{{tabName}}</a>
                     </div>
                </div>
            </template>
        </div>
        <div class="wcFrameButtonBar" style="cursor:default;">

            <my-btn icon="playlist_add" :args="{}" >
                Открыть SQL редактор
            </my-btn>
        </div>
    </div>

</div>
<!------- End -------->

<template v-if="tableName"  >
    <div style="position: relative; margin:10px 0px 10px 0px" >

        <div class="control-label" style="font-size: 14px; font-style: italic">
            <h5>Таблица : <span style="font-weight: bold; color:green" >{{tableName}}</span></h5>
        </div>

        <button  @click="addItem()"
                class="btn btn-primary no-radius"  style="margin:0px 20px 0px 20px !important;">
            Добавить новую запись
        </button>

        <button  @click="dataTableSizeChange()"
                class="btn btn-primary no-radius"  style="">
            Изменение размера таблицы
        </button>

    </div>
</template>

<!------ TABLE ------->
<div v-if="tableName" class="pgadmin-control-group form-group row pg-el-12 columns" style="position:relative">
    <div class="pgadmin-control-group form-group pg-el-12 object subnode" style="" >
        <table class="table presentation table-bordered table-noouter-border table-hover" >
            <thead><tr>

                <th v-if="tableName" class="edit-cell"
                    style="min-width:10px !important; vertical-align: middle; border: 1px gainsboro solid; padding:0px; margin:0px;" >
                    <span></span>
                </th>

                <th v-for="(valies, fieldName) in tableInfo" class="edit-cell"
                    style="min-width:10px !important; vertical-align: middle; border: 1px gainsboro solid; padding:0px; margin:0px;" >
                    <span>{{fieldName}}</span>
                </th>

            </tr></thead>
            <tbody>

                <tr v-for="(item, i) in tableData"
                    :id="'rowDataList' + i" class="rowDataList"
                    @click="tdDataBoxClick('rowDataList', i, ['#285274'])"
                    @dblclick="tdDataBoxDbClick(item)" >

                    <td class="edit-cell editable sortable renderable"
                        style="min-width:5px !important; padding:0px; margin:0px; background: white;">
                        <div style="width: 100%; padding:3px; border: 1px red solid" >
                            <i @click="deleteItem(item)" class="material-icons"
                               style="font-size: 15px; color:red; vertical-align: middle; font-weight: bold"
                               >clear</i>
                        </div>
                    </td>

                    <template v-for="(info, fieldName) in tableInfo">
                        <template v-if="isInt(item[fieldName])">
                            <td class="edit-cell editable sortable renderable" style="min-width:10px !important; padding:0px; margin:0px; background: white; border: 2px red solid ">
                                <div style="width: 100%; padding:3px; border: 1px gainsboro solid" :title="item[fieldName]">
                                    <input v-if="!info.auto_increment" @input="editItem(fieldName, item)"
                                           v-model="item[fieldName]" type="text" class="form-control-input" style="width: 100%;" >
                                    <span v-else style="color:green">{{item[fieldName]}}</span>
                                </div>
                            </td>
                        </template>
                        <template v-else >
                            <td class="edit-cell editable sortable renderable" style="min-width:80px !important; padding:0px; margin:0px; background: white; border: 0px ">
                                <div style="width: 100%; padding:3px; border: 1px gainsboro solid" :title="item[fieldName]">
                                    <input v-if="!info.auto_increment" @input="editItem(fieldName, item)"
                                           v-model="item[fieldName]" type="text" class="form-control-input">
                                    <span v-else style="color:green">{{item[fieldName]}}</span>
                                </div>
                            </td>
                        </template>
                    </template>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!----- / TABLE EDIT ----->

<div v-if="formDialog" class="pg-prop-content col-12 has-pg-prop-btn-group"
     style="position: fixed; z-index: 9999; width:40%; top:40px; left:60% !important; border:0px red solid; background: white ">
     <div class="accordian-group pg-el-12">

        <div @click="formDialog = false" class="wcPanelTab" style="cursor: pointer;">
             <div class="data-table-list-menu">
                 <a class="panel-link-heading">Закрыть</a></div></div>

        <div class="accordian-content pg-el-12 collapse show" >

            <template v-for="(value, fieldName) in rowItem" >
                <div class="pgadmin-control-group form-group row pg-el-12 name">
                    <label class="control-label pg-el-sm-3 pg-el-12" style="max-width: 200px;">
                           {{fieldName}}
                    </label>
                    <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 320px;" >
                        <input  @input="editItem(fieldName, rowItem)"
                                v-model="rowItem[fieldName]" class="form-control uneditable-input"
                                style="background-color: #f3f5f9;" >
                    </div>
                </div>
            </template>

</div></div></div>




