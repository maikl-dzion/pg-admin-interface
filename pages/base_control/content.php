
<template v-if="commonActionName == 'tables'" >

    <div v-if="tableName" class="" style="position:relative; margin:10px 0px 30px 0px !important;">
        <div class="accordian-group pg-el-12">
            <div class="accordian-content pg-el-12 collapse show" >

                <template v-for="(item, fname) in commonItem" >
                    <div class="pgadmin-control-group form-group row pg-el-12 name">

                        <!------ Тип поля ----------------------->
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">
                            {{item['data_type']}}
                        </label>
                        <!------ Изменить имя поля --------------->
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 320px;" >
                            <input  @change="changeFieldName(fname, commonItem[fname]['column_name'])"
                                    v-model="commonItem[fname]['column_name']"
                                    :id="'inp-' + fname" class="form-control uneditable-input" style="background-color: #f3f5f9;" >
                        </div>

                        <!------ Изменять тип поля  -------------->
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="margin-left:4px; max-width: 100px;" >
                            <select v-model="commonItem[fname]['input_type']"
                                    @change="changeFieldType(fname, commonItem[fname]['input_type'])" class="form-control"
                                    style=" width:100%; height: 100%; cursor:pointer " >
                                <option v-for="(item, i) in tableFieldTypes" :value="item.name" >
                                    {{item.name}}
                                </option>
                            </select>
                        </div>

                        <button @click="commonDeleteField(fname)"
                                class="btn btn-primary m-1 no-radius"  >
                            <i class="material-icons custom-icon"
                               style="font-size: 18px; color:red; vertical-align: middle; margin-right:10px;"
                            >clear</i>
                            Удалить поле
                        </button>

                        <!--                                        @click="commonDeleteField(fname)"-->

                        <!------ Значение поля по умолчанию ------>
                        <div class="pgadmin-controls" style="margin-left:20px; max-width: 100px;" >
                            column_default:{{commonItem[fname]['column_default']}}
                        </div>

                    </div>
                </template>

            </div></div></div>

</template>
<template v-else-if="commonActionName == 'users'" >

    <div v-for="(item, fname) in commonItem" style="display: flex; padding:3px;">
        <label style="font-style: italic; width:30%; color:lightseagreen; padding-left:6px;" >{{fname}}</label>
        <input v-model="commonItem[fname]" style="font-style: italic; width:100%;"
               type="text" class="form-control" :placeholder="fname">
    </div>

</template>
<template v-else-if="commonActionName == 'databases'" >

    <div v-for="(item, fname) in commonItem" style="display: flex; padding:3px;">
        <label style="font-style: italic; width:30%; color:lightseagreen; padding-left:6px;" >{{fname}}</label>
        <input v-model="commonItem[fname]" style="font-style: italic; width:100%;"
               type="text" class="form-control" :placeholder="fname">
    </div>

</template>

<!----- Роли пользователей ---->
<template v-if="dbRoles.length" >
    <div class="pg-prop-content col-12 has-pg-prop-btn-group"
         style="margin-top:30px; margin-left:-10px; margin-bottom:40px !important; scroll:auto">
        <div v-for="(role, i) in dbRoles" class="accordian-group pg-el-12">
            <div v-for="(value, fname) in role" style="display: flex; padding:3px;">
                <label style="font-style: italic; width:30%; color:lightseagreen; padding-left:6px;" >{{fname}}</label>
                <input :value="value" style="font-style: italic; width:100%;"
                       type="text" class="form-control" :placeholder="fname">
            </div>
        </div></div>
</template>
