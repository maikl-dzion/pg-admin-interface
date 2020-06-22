
<!-------------- ТАБЛИЦЫ  ------------------->
<template v-if="commonActionName == 'tables'" >

    <div class="pg-prop-header" style="z-index:999" >

        <div class="pg-prop-btn-group pg-prop-btn-group-above">

            <button @click="openFormBtnClick('createNewTableForm')"
                    class="btn btn-primary m-1 no-radius"  >
                    <i class="material-icons custom-icon"
                        style="font-size: 18px; color:white; vertical-align: middle; margin-right:10px;"
                        >playlist_add</i>
                    Создать новую таблицу
            </button>

            <button v-if="tableName" @click="openFormBtnClick('createNewFieldForm')"
                    class="btn btn-primary m-1 no-radius"  >
                    <i class="material-icons custom-icon"
                       style="font-size: 18px; color:white; vertical-align: middle; margin-right:10px;"
                    >playlist_add</i>
                    Добавить новое поле
            </button>

        </div>

    </div>

    <div style="display: flex;" >

        <my-form id="createNewTableForm" style ="width:350px; z-index:9999"
                 :set="createTableForm.set"
                 :item="createTableForm.item"
                 @get_item="formEmitDataRender"
        ></my-form>

        <div id="createNewFieldForm" class="accordian-group pg-el-12" style="width: 350px; z-index:999" >
            <div class="badge" >
                Добавляем поле в таблицу : <span style="font-weight: bold; color:green">{{tableName}}</span>
            </div>
            <div v-if="tableName" class="accordian-content pg-el-12 collapse show" >
                <div class="pgadmin-control-group form-group row pg-el-12 name">
                    <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">
                        Имя поля
                    </label>
                    <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 320px;" >
                        <input  v-model="newField.name" class="form-control uneditable-input" style="background-color: #f3f5f9;" >
                    </div>
                    <label class="control-label pg-el-sm-3 pg-el-12" >Тип поля</label>
                    <select v-model="newField.type" class="form-control" placeholder="Тип поля" style="cursor:pointer;">
                        <option v-for="(item, i) in tableFieldTypes" :value="item.name" class="form-control">
                            {{item.name}}
                        </option>
                    </select>
                </div>
                <div class="pg-prop-btn-group pg-prop-btn-group-above" style="border-bottom: 0px grey solid !important; text-align: right;" >
                    <button @click="addField()" class="btn btn-primary m-1 btn-class" style="width:200px;">
                        Сохранить
                    </button>
                </div>
        </div></div>

    </div>

</template>
<!-------------- ПОЛЬЗОВАТЕЛИ ------------------->
<template v-else-if="commonActionName == 'users'" >

    <div class="pg-prop-header" style="display: flex" >
        <div class="pg-prop-btn-group pg-prop-btn-group-above"  >
            <button @click="openFormBtnClick('createNewUserForm')"
                    class="btn btn-primary m-1 btn-class"  >
                    <i class="material-icons custom-icon"
                        style="font-size: 18px; color:white; vertical-align: middle; margin-right:10px;"
                        >playlist_add</i>
                    Добавить нового пользователя
            </button>
        </div>
    </div>

    <my-form id="createNewUserForm" style ="width:350px;"
         :set="createUserForm.set"
         :item="createUserForm.item"
         @get_item="formEmitDataRender"
    ></my-form>

</template>
<template v-else-if="commonActionName == 'databases'" >

    <div class="pg-prop-header" style="display: flex" >
        <div class="pg-prop-btn-group pg-prop-btn-group-above"  >
<!--            <button @click="openFormBtnClick('createNewDbForm')"-->
<!--                    class="btn btn-primary m-1 btn-class" title="Создать новую базу" >-->
<!--                    <i class="material-icons custom-icon"-->
<!--                        style="font-size: 18px; color:white; vertical-align: middle; margin-right:10px;"-->
<!--                        >playlist_add</i>-->
<!--                    Создать новую базу-->
<!--            </button>-->
        </div>
    </div>

    <div style="display: flex;" >

        <div class="accordian-group pg-el-12 create-class-form1" style="width: 450px;" >
            <div class="badge" >Создание новой базы </div>
            <div class="accordian-content pg-el-12 collapse show" >
                <div class="pgadmin-control-group form-group row pg-el-12 name">
                    <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 130px">
                        Имя базы
                    </label>
                    <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 80%" >
                        <input  v-model="newDbName" class="form-control uneditable-input" style="background-color: #f3f5f9;" >
                    </div>
                </div>
                <div class="pg-prop-btn-group pg-prop-btn-group-above" style="border-bottom: 0px grey solid !important; text-align: right;" >
                    <button  @click="addNewDb()" class="btn btn-primary m-1 btn-class" style="width:200px;">
                        <i style="font-size: 18px; color:white; vertical-align: middle; margin-right:10px;"
                           class="material-icons custom-icon">playlist_add</i>
                           Создать новую базу
                    </button>
                </div>
        </div></div>

        <template v-if="selectDbName" >
            <div  class="accordian-group pg-el-12 create-class-form1" style="width: 300px;" >
                <div class="badge" >Прикрепить пользователя к базе: <span style="color:green; font-weight: bold">{{selectDbName}}</span></div>
                <div class="accordian-content pg-el-12 collapse show" >
                    <div class="pgadmin-control-group form-group row pg-el-12 name">
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">
                            {{selectDbName}}
                        </label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 100%" >
                            <select v-model="userPriv.setName"
                                    @change="setUserPrivileges(userPriv.setName, selectDbName)"
                                    class="form-control" style="cursor:pointer" >
                                    <option v-for="(item) in this.usersList"
                                        :value="item.usename">{{item.usename}}</option>
                            </select>
                        </div>
                    </div>
            </div></div>

            <div  class="accordian-group pg-el-12 create-class-form1" style="width: 300px;" >
                <div class="badge" >Открепить пользователя от базы: <span style="color:green; font-weight: bold">{{selectDbName}}</span></div>
                <div class="accordian-content pg-el-12 collapse show" >
                    <div class="pgadmin-control-group form-group row pg-el-12 name">
                        <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">
                            {{selectDbName}}
                        </label>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 100%" >
                            <select v-model="userPriv.delName"
                                    @change="delUserPrivileges(userPriv.delName, selectDbName)"
                                    class="form-control" style="cursor:pointer" >
                                <option v-for="(item) in this.usersList"
                                        :value="item.usename">{{item.usename}}</option>
                            </select>
                        </div>
                    </div>
            </div></div>
        </template>

    </div>

    <!------- ФОРМА ------->
<!--    <div id="createNewDbForm" class="accordian-group pg-el-12 create-class-form" style="width: 450px;" >-->
<!--        <div class="badge" >Создание новой базы </div>-->
<!--        <div class="accordian-content pg-el-12 collapse show" >-->
<!--            <div class="pgadmin-control-group form-group row pg-el-12 name">-->
<!--                <label class="control-label pg-el-sm-3 pg-el-12" for="pgC_1267" style="max-width: 240px;">-->
<!--                    Имя базы-->
<!--                </label>-->
<!--                <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="max-width: 320px;" >-->
<!--                    <input  v-model="newDbName" class="form-control uneditable-input" style="background-color: #f3f5f9;" >-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pg-prop-btn-group pg-prop-btn-group-above" style="border-bottom: 0px grey solid !important; text-align: right;" >-->
<!--                <button @click="addNewDb()" class="btn btn-primary m-1 btn-class" style="width:200px;">-->
<!--                      Сохранить-->
<!--                </button>-->
<!--            </div>-->
<!--    </div></div>-->
    <!----- / ФОРМА ------>

</template>