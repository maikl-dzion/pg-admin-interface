
<!-------------- ТАБЛИЦЫ  ------------------->
<template v-if="commonActionName == 'tables'" >

    <!---- Добавление новой таблицы ---->
    <div class="pgadmin-control-group form-group"
         style="width: 290px !important; position: relative; border:1px gainsboro solid; padding:4px" >
        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
            <input class="form-control" type="text" style="border-radius: 0px"
                   v-model="newTable.name"
                   placeholder="Имя таблицы" >

            <div style="display: flex;" >
                <input class="form-control no-radius" style="width:80%;" type="text"
                       v-model="newTable.idName"
                       placeholder="id" >

                <button @click="pushFieldToArray()"
                        class="btn btn-primary m-1 no-radius"
                        style="width: 20%; margin:1px 2px 3px 3px !important; ">
                        <ico name="playlist_add" style="margin:0px; font-size: 22px"></ico>
                </button>
            </div>

            <template v-for="(list, i) in newFieldsList" >
                <div  style="display: flex" :key="i" >
                    <input class="form-control no-radius"  style="" type="text"
                           v-model="list.name" placeholder="Имя поля" >

                    <select v-model="list.type" class="form-control no-radius"
                            placeholder="Тип поля" style="cursor:pointer;">
                        <option v-for="(item, i) in tableFieldTypes" :value="item.name" class="form-control">
                            {{item.name}}
                        </option>
                    </select>
                </div>
            </template>

        </div>
        <button @click="createTableAndFields()" class="btn btn-primary m-1 no-radius"
                style="width: 98%; margin-left:1px !important; ">
            Добавить новую таблицу
        </button>
    </div>

<!--    <div class="pgadmin-control-group form-group"-->
<!--         style="width: 250px !important; position: relative; border:1px gainsboro solid; padding:4px" >-->
<!--        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">-->
<!--            <input class="form-control" type="text" style="border-radius: 0px"-->
<!--                   v-model="newTable.name"-->
<!--                   placeholder="Имя таблицы" >-->
<!---->
<!--            <input class="form-control" type="text" style="border-radius: 0px"-->
<!--                   v-model="newTable.idName"-->
<!--                   placeholder="id" >-->
<!--        </div>-->
<!--        <button @click="createTable()" class="btn btn-primary m-1 no-radius"-->
<!--                style="width: 98%; margin-left:1px !important; ">-->
<!--            Добавить новую таблицу-->
<!--        </button>-->
<!--    </div>-->
    <!---- // Добавление новой таблицы ---->

    <!---- Добавление нового поля  -------->
    <div v-if="tableName" class="pgadmin-control-group form-group"
         style="width: 250px !important; position: relative; border:1px gainsboro solid; padding:4px" >
        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
            <input class="form-control" type="text" style="border-radius: 0px"
                   v-model="newField.name"
                   placeholder="Имя поля" >

            <select v-model="newField.type" class="form-control"
                    placeholder="Тип поля" style="cursor:pointer; border-radius: 0px;">
                    <option v-for="(item, i) in tableFieldTypes" :value="item.name" class="form-control">
                       {{item.name}}
                    </option>
            </select>

        </div>
        <button @click="addField()" class="btn btn-primary m-1 no-radius"
                style="width: 98%; margin-left:1px !important; ">
                Добавить новое поле
        </button>
    </div>
    <!---- // Добавление нового поля ----->

</template>
<!-------------- ПОЛЬЗОВАТЕЛИ ------------------->
<template v-else-if="commonActionName == 'users'" >

    <!---- Добавление нового пользователя ---->
    <div class="pgadmin-control-group form-group"
         style="width: 250px !important; position: relative; border:1px gainsboro solid; padding:4px" >
        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
            <input class="form-control" type="text" style="border-radius: 0px"
                   v-model="newUser.name"
                   placeholder="Имя пользователя" >

            <input class="form-control" type="text" style="border-radius: 0px"
                   v-model="newUser.password"
                   placeholder="Пароль" >
        </div>
        <button @click="createDbUser()" class="btn btn-primary m-1 no-radius"
                style="width: 98%; margin-left:1px !important; ">
            Добавить нового пользователя
        </button>
    </div>
    <!---- // Добавление нового пользователя ---->

</template>
<!-------------- БАЗЫ ДАННЫХ ------------------->
<template v-else-if="commonActionName == 'databases'" >

        <!---- Создаем новую базу ---->
        <div class="pgadmin-control-group form-group"
             style="width: 200px !important; position: relative; border:1px gainsboro solid; padding:4px" >
            <!-- <label class="control-label pg-el-sm-3 pg-el-12">Имя</label> -->
            <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
                <input class="form-control" type="text" style="border-radius: 0px"
                       v-model="newDbName"
                       placeholder="Имя базы" >
            </div>
            <button @click="addNewDb()" class="btn btn-primary m-1 no-radius"
                    style="width: 98%; margin-left:1px !important; ">
                Создать новую базу
            </button>
        </div>
        <!---- // Создаем новую базу ---->

        <!---- Прикрепление / открепление  пользователя к базе ---->
        <template v-if="selectDbName" >

            <!---- Скопировать базу ---->
            <div class="pgadmin-control-group form-group"
                 style="width: 200px !important; position: relative; border:1px gainsboro solid; padding:4px" >
                <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
                    <input class="form-control" type="text" style="border-radius: 0px"
                           v-model="copyDbItem.newDbName"
                           placeholder="Имя новой базы" >
                    <input class="form-control" type="text" style="border-radius: 0px"
                           :value="copyDbItem.dbName = selectDbName" disabled="true">
                </div>
                <button @click="copyDb()" class="btn btn-primary m-1 no-radius"
                        style="width: 98%; margin-left:1px !important; ">
                    Скопировать базу
                </button>
            </div>
            <!---- Скопировать  базу ---->

            <div class="pgadmin-control-group form-group"
                 style="width: 220px !important; position: relative; border:1px gainsboro solid; padding:4px;" >
                 <label class="control-label pg-el-sm-3 pg-el-12">
                     Прикрепить пользователя <br> к  базе : {{selectDbName}}
                 </label>
                <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
                    <select v-model="userPriv.setName"
                            @change="setUserPrivileges(userPriv.setName, selectDbName)"
                            class="form-control" style="cursor:pointer" >
                        <option v-for="(item) in this.usersList"
                                :value="item.usename">{{item.usename}}</option>
                    </select>
                </div>
            </div>


            <div class="pgadmin-control-group form-group"
                 style="width: 220px !important; position: relative; border:1px gainsboro solid; padding:4px;" >
                <label class="control-label pg-el-sm-3 pg-el-12">
                    Открепить пользователя <br> от  базы : {{selectDbName}}
                </label>
                <div class="pgadmin-controls pg-el-sm-9 pg-el-12" style="width: 100%;">
                    <select v-model="userPriv.delName"
                            @change="delUserPrivileges(userPriv.delName, selectDbName)"
                            class="form-control" style="cursor:pointer" >
                        <option v-for="(item) in this.usersList"
                                :value="item.usename">{{item.usename}}</option>
                    </select>
                </div>
            </div>

        </template>
        <!---- Прикрепление / открепление  пользователя к базе ---->

</template>



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