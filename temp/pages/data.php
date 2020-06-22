<link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">

<div v-if="formDialog" style="position:fixed; z-index:9999; left:60%; top:-5.2%; width: 40%" >
    <form action="" class="air" style="max-width:100%; overflow: auto" ><div class="form-inner" >
            <div @click="formDialog = false" class="stripes-block" style="cursor:pointer" ></div>
            <div v-for="(value, fieldName) in rowItem" class="form-row-icon" style="display: flex;" >
                <div style="width:30%; border-right: 1px grey solid; padding:7px " >{{fieldName}}</div>
                <input v-model="rowItem[fieldName]" @input="editItem(fieldName, rowItem)" type="text" >
            </div>
    </div></form>
</div>

<div class="container-fluid" >

    <div class="col-md-2-2" style="padding:0px 2px 2px 2px; border:0px gainsboro solid;">
        <div class="col-md-2-2" style="border:0px gainsboro solid; border-bottom: 4px solid #f7639a; "><h4>Список таблиц</h4></div>
        <ul class="portfolio" style="padding:0px; margin:0px; display: inline-flex; ">
            <template v-for="(value, tableName) in tableList">
                <li v-if="tableName != 'products'" @click="getTableFields(tableName)"
                    class="filter" style="display: block; text-align: left">{{tableName}}
                </li>
            </template>
        </ul>
    </div>

    <div style="display: flex; margin-left:3px;">
        <div class="contact-us-detail"
             style="cursor:pointer; text-align:center;position: relative; top:0px; left:0px; margin:2px 0px 4px 0px; border-radius: 0px; width: 30%">
            <a @click="addItem()" style="text-align:center; display: block">Добавить новую запись в базу</a>
        </div>

<!--        <div class="contact-us-detail"-->
<!--             style="cursor:pointer; text-align:center;position: relative; top:0px; left:0px; margin:2px 0px 4px 5px; border-radius: 0px; width: 20%">-->
<!--            <a @click="dataShowType = 'row'" style="text-align:center; display: block">В линию</a></div>-->
<!---->
<!--        <div class="contact-us-detail"-->
<!--             style="cursor:pointer; text-align:center;position: relative; top:0px; left:0px; margin:2px 0px 4px 5px; border-radius: 0px; width: 20%">-->
<!--            <a @click="dataShowType = 'line'" style="text-align:center; display: block">В ряд</a></div>-->

    </div>

    <div class="v-sheet theme--light rounded-0" flat="" style="transform-origin: center top 0px;">
        <div class="v-card__text"> <div data-app="true">

                <div class="v-data-table elevation-1 v-data-table--dense theme--light">
                    <div class="v-data-table__wrapper">
                        <table>

                            <tr>
                                <th  role="columnheader" scope="col" class="text-start sortable"
                                    style="border:1px grey solid; border-radius: 0px;" >
                                    <span>X</span>
                                    <i aria-hidden="true"
                                       class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light"
                                       style="font-size: 18px;"></i>
                                </th>

                                <th v-for="(values, fieldName) in tableInfo"

                                    style="border:1px grey solid; border-radius: 0px; width:10px; margin:0px; padding:3px; text-align:center" >
                                    <span >{{fieldName}}</span>
<!--                                    <i aria-hidden="true"-->
<!--                                       class="v-icon notranslate v-data-table-header__icon mdi mdi-arrow-up theme--light"-->
<!--                                       style="font-size: 18px;"></i>-->
                                </th>

                            </tr>

                            <tr v-for="(item, i) in tableData"

                               class="tr-data-class" :id="'tr-data-class' + i"
                               @click="tdDataBoxClick('tr-data-class', i)"
                               @dblclick="tdDataBoxDbClick(item)" >

                                <td class="text-start" style="width:15px !important; padding:0px 0px 0px 3px; height:100%;">
                                    <div @click="deleteItem(item)" title="Удалить запись"
                                         style="text-align:center; cursor:pointer; height:100%; border:0px grey solid;"> X
                                    </div>
                                </td>

                                <template v-for="(info, fieldName) in tableInfo">
                                    <template v-if="isInt(item[fieldName])">
                                        <td class="text-start" style="width:10px !important; padding:0px; margin:0px; background: white; border: 2px red solid ">
                                            <div style="width: 100%; padding:3px; border: 1px gainsboro solid" :title="item[fieldName]">
                                                <input v-if="!info.auto_increment" @input="editItem(fieldName, item)"
                                                       v-model="item[fieldName]" type="text" class="form-control1" style="width: 100%;" >
                                                <span v-else style="color:green">{{item[fieldName]}}</span>
                                            </div>
                                        </td>
                                    </template>
                                    <template v-else >
                                        <td class="text-start" style="padding:0px; margin:0px; background: white; border: 0px ">
                                            <div style="width: 100%; padding:3px; border: 1px gainsboro solid" :title="item[fieldName]">
                                                <input v-if="!info.auto_increment" @input="editItem(fieldName, item)"
                                                       v-model="item[fieldName]" type="text" class="form-control1">
                                                <span v-else style="color:green">{{item[fieldName]}}</span>
                                            </div>
                                        </td>
                                    </template>
                                </template>
                            </tr>

                        </table>
                    </div>

                </div>

    </div></div></div>

</div>

