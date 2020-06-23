
Vue.use(VueMaterial.default)

const App = new Vue({
    el: '#app-page',
    // router : router,
    mixins: [Http, BaseMixin, DataFormMixin, dragMixin],
    data: function () {

        var fieldModel = {
            name: '',
            type: 'varchar',
            size: '',
        };

        return {
            inputHasClass : false,
            pageName : 'data_control',
            showPanel: true,
            tableName: '',
            tableListSheme: [],
            tableList: [],
            tableInfo: [],
            tableData: [],
            newFieldsJson: [],
            // dbUser : {},

            newField: fieldModel,
            newFieldModel: fieldModel,

            renameName: {
                oldName: '',
                newName: '',
            },

            newTable: {
                name: '',
                idName: 'id',
            },

            showModalOne : false,
            showModalConf: false,
            addFieldFlag : false,
            addTableFlag : false,
            autoIncName  : '',
            rowItem    : {},
            formDialog : false,

            panelSettingsMenu : {
                databases : 'Базы данных',
                tables    : 'Таблицы',
                users     : 'Пользователи',
                get_roles : 'Роли',
            },

            sitePagesMenu : {
                base_control : 'Управление базой',
                data_control : 'Управление данными',
                sql_editor   : 'SQL-редактор',
            },

            sqlCommandListMenu : {
                select_data  : { title : 'Выборка данных'  , type : 'query'},
                create_table : { title : 'Создание таблицы', type : 'exec' },
                create_field : { title : 'Создание поля'  , type : 'exec' },
            },

            userPriv : {
                setName : '',
                delName : '',
            },

            queryResultItems : {},
        }
    },

    computed: {},

    created() {

        // this.getTableIdName('users');
        // this.getTableList(this.getTableFields);
        this.http('GET_TABLE_LIST').then(resp => {
            this.getTableListSheme();
            this.tableList = resp;
            for (var name in resp) {
                // this.commonForm(resp[name]);
                // this.getTableFields(name);
                return;
            }
        });

        // this.saveConfig();
        // this.showDatabaseList();
        // this.getCurrentDatabase();
        // this.getDbUsers();

    },

    mounted(){
        this.openFormBtnClick('createNewUserForm');
        this.openFormBtnClick('createNewTableForm');
        this.openFormBtnClick('createNewFieldForm');

        $(document).ready(function() {
            $(".nav-link").click(function() {
                $(".nav-link").css( "color", "white" );
                $(this).css( "color", "gainsboro" );
            });
        });
    },

    methods: {

        t1() {
            lg('tyuuu');
        },

        setSqlCommandType(sqlName, commandType) {
              this.sqlCommandType = commandType;
              let sql = `SELECT * FROM table_name`;
              switch (sqlName) {
                  case 'select_data'  : break;
                  case 'create_table' :
                        sql = `CREATE TABLE  tableName (
                                  id SERIAL,
                                  name VARCHAR(250) NULL,
                                  role INTEGER NULL, 
                                  note TEXT NULL,
                                  email VARCHAR (350) UNIQUE NOT NULL,
                                  created_at TIMESTAMP NOT NULL
                              )`;
                        break;
                  case 'create_field' :
                          sql = `ALTER TABLE  tableName (
                                 ADD new_field varchar(250)
                          )`;
                      break;

              }

              this.sqlCommand = sql;
        },

        queryExecute() {
            if(!this.sqlCommand) {
                alert('Пустая команда');
                return false;
            }
            if(!this.sqlCommandType)
                this.sqlCommandType = 'query';
            this.execSqlCommand('queryResultItems');
        },

        setPageName(pageName) {
            this.pageName = pageName;
            $('.wcPanelTab').removeClass('wcPanelTabActive');
        },

        formEmitDataRender(data) {

            let item  = data.item;
            let event = data.event;

            switch (event) {
                case 'add_user'    :
                case 'create_user' :
                     this.newUser.name     = item.name.value;
                     this.newUser.password = item.password.value;
                     this.createDbUser();
                     break;

                case 'add_table'    :
                case 'create_table' :
                     this.newTable.name    = item.name.value;
                     this.newTable.idName  = item.auto.value;
                     this.createTable();
                     break;
            }
        },

        warn(message, type = null) {
            alert(message);
        },

        tdDataBoxClick(className, index, param = null) {
            let defaultColor = 'white';
            let newColor     = 'gainsboro';
            let tagName      = 'td';

            if(param) {
                if(param[0]) newColor     = param[0];
                if(param[1]) tagName      = param[1];
                if(param[2]) defaultColor = param[2];
            }

            let elemId = className + index;
            $('.' + className + ' ' + tagName).css({'background-color' : defaultColor});
            $('#' + elemId + ' ' + tagName).css({'background-color'    : newColor});
        },

        tdDataBoxDbClick(item) {
            this.rowItem = item;
            this.formDialog = true;
        },

        dataTableSizeChange() {
            let currentClass = "input.form-control-input";
            let newClassName = 'inputTextMinView';

            if(this.inputHasClass) {
                $(currentClass).removeClass(newClassName);
                this.inputHasClass = false;
                return false;
            }

            this.inputHasClass = true;
            $(currentClass).addClass(newClassName);
        },

        openFormBtnClick(formId) {
            $("#" + formId).toggle();
        },

        leftPanelBtnClick(event) {
            let activeClass = 'aciTreeSelected';
            $("li.aciTreeLi").removeClass(activeClass);
            let el = event.currentTarget;
            el.classList.add(activeClass);
        },

        cssClassToggle(event, elemsClass, activeClass) {
            // debugger;
            $(elemsClass).removeClass(activeClass);
            let el = event.currentTarget;
            el.classList.add(activeClass);
        },

        addFieldOpen() {
            (this.addFieldFlag) ? this.addFieldFlag = false :
                this.addFieldFlag = true;
        },

        addTableOpen() {
            (this.addTableFlag) ? this.addTableFlag = false :
                this.addTableFlag = true;
        },

        editItem(fieldName, item) {
            var newValue = item[fieldName];
            var itemId = item['id'];
            var url = 'EDIT_ITEM/' + this.tableName + '/' + fieldName + '/' + itemId + '/' + newValue;
            this.http(url).then(resp => {
                //var r = resp;
                this.getTableListSheme();
                // this.getTableData(this.tableName);
            });
        },

        deleteItem(item) {

            var autoIncName = this.setAutoIncName();

            if (item[autoIncName]) {
                var itemId = item[autoIncName]
                var url = 'DELETE_ITEM/' + this.tableName + '/' + autoIncName + '/' + itemId;
                this.http(url).then(resp => {
                    this.getTableData(this.tableName);
                });
            } else {
                alert('Не найдено поле auto_increment');
            }
        },

        setAutoIncName() {
            var fields = this.tableInfo;
            for (var fName in fields) {
                if (fields[fName].auto_increment)
                    this.autoIncName = fName;
            }
            return this.autoIncName;
        },

        addItem() {
            var url = 'ADD_ITEM/' + this.tableName;
            this.http(url).then(resp => {
                //var r = resp;
                this.getTableData(this.tableName);
                this.getTableListSheme();
            });
        },

        clickOpenPanel() {
            if (this.showPanel) this.showPanel = false;
            else this.showPanel = true;
        },

        // Получить имя поля autoincrement
        getTableIdName(tableName) {
            if (!tableName) tableName = this.tableName;
            var url = 'GET_TABLE_ID_NAME/' + tableName;
            this.http(url).then(resp => {
                this.autoIncName = resp['column_name'];
            });
        },

        // Получить все таблицы
        getTableList() {
            var url = 'GET_TABLE_LIST';
            this.http(url).then(resp => {
                this.tableList = resp;
                this.getTableListSheme();
                // lg(resp)
            });
        },

        // Получить поля таблицы
        getTableFields(tableName, callback = null) {
            this.tableInfo = [];
            this.tableName = tableName;
            var url = 'GET_TABLE_FIELDS/' + this.tableName;
            this.http(url).then(resp => {
                if(callback) {
                    callback(resp);
                    return;
                }
                this.tableInfo = resp;
                this.getTableData(this.tableName);
            });
        },

        // Получить все таблицы с полями
        getTableListSheme() {
            var url = 'GET_TABLE_LIST_SHEME';
            this.http(url).then(resp => {
                var ch = 0;
                var _left = 0
                var _top = 0;
                for (var i in resp) {
                    if (ch > 5)
                        _left = _top = ch = 0;

                    if (ch > 0) {
                        _left = _left + 45;
                        _top = _top + 30;
                    }

                    resp[i]['top'] = _top;
                    resp[i]['left'] = _left;

                    ch++;
                }
                this.tableListSheme = resp;
            });
        },

        getTableData(tableName) {
            var url = 'GET_TABLE_DATA/' + tableName;
            this.http(url).then(resp => {
                this.tableData = resp;
            });
        },

        isInt(value) {
            let type = (value ^ 0) === value;
            return type;
        },

        addField() {
            var name = this.newField.name;
            var type = this.newField.type;
            if (!name) return false;

            var url = 'ADD_FIELD/' + this.tableName + '/' + name + '/' + type;
            this.http(url).then(resp => {
                this.getTableFields(this.tableName);
                this.addFieldFlag = false;
                this.alertSuccess('Новое поле успешно добавлено');
                this.getTableListSheme();
            });
        },

        multipleAddField() {
            for (var i in this.newFieldsJson) {
                var field = this.newFieldsJson[i];
                if (!field.name) continue;
                var url = 'ADD_FIELD/' + this.tableName + '/' + field.name + '/' + field.type;
                this.http(url).then(resp => {
                    // this.alertSuccess('Новое поле успешно добавлено');
                });
            }

            setTimeout(() => {
                this.getTableFields(this.tableName);
                this.alertSuccess('Новые поле успешно добавлены');
                this.showModalOpen();
            }, 1000);

            // this.getTableFields(this.tableName);
        },

        showModalOpen() {
            this.newFieldsJson = [];
            if (this.showModalOne) {
                this.showModalOne = false;
            } else {
                this.addModalField();
                this.showModalOne = true;
            }
        },

        confModalOpen() {
            if (this.showModalConf) {
                this.showModalConf = false;
            } else {
                this.showModalConf = true;
            }
        },

        addModalField() {
            this.newFieldsJson.push(Object.assign({}, this.newFieldModel));
        },

        deleteField(fieldName, ret = false) {
            var url = 'DELETE_FIELD/' + this.tableName + '/' + fieldName;
            if(ret) return this.http(url);

            this.http(url).then(resp => {
                this.getTableFields(this.tableName);
                this.getTableListSheme();
                // this.alertSuccess('Поле удалено');
            });
        },

        deleteTable() {
            var url = 'DELETE_TABLE/' + this.tableName;
            this.http(url).then(resp => {
                this.tableName = '';
                this.getTableListSheme();
                this.http('GET_TABLE_LIST').then(resp => {
                    this.tableList = resp;
                    for (var name in resp) {
                        this.getTableFields(name);
                        return;
                    }
                });
            });
        },

        createTable() {
            var tableName = this.newTable.name;
            var idName    = this.newTable.idName;
            if (!tableName) return false;

            var url = 'CREATE_TABLE/' + tableName + '/' + idName;
            this.http(url).then(resp => {
                this.tableName = tableName;
                this.getTableList();
                this.getTableFields(this.tableName);
                this.getTableListSheme();
                this.alertSuccess('Новая таблица успешно создана');
            });
        },

        initRenameField(fieldName) {
            var name = this.tableInfo[fieldName]['column_name'];
            this.renameName.oldName = fieldName;
        },

        renameField(fieldName) {
            var name = this.tableInfo[fieldName]['column_name'];
            this.renameName.newName = name;

            var newName = this.renameName.newName;
            var oldName = this.renameName.oldName;

            if (oldName == newName) return;

            var url = 'RENAME_FIELD/' + this.tableName + '/' + oldName + '/' + newName;
            this.http(url).then(resp => {
                this.getTableListSheme();
                this.getTableFields(this.tableName);
            });
        },

    },

});


function lg(arr) {

    var result = '---NOT ARRAY---';
    if (arr) result = _printf(arr); // --- формируем строку из массива
    _openWindow(result);            // --- показываем результат в новом окне

    // --- формируем строку из массива
    function _printf(arr) {
        var strResult = '', deLimiter = ' => ';
        var typeObj = typeof(arr);
        if (typeObj == 'object') {
            for (var i in arr) {

                var values = arr[i];
                var subValues = '';
                var li = deLimiter;
                if (typeof(values) == 'object') {
                    subValues = _printf(values);
                } else {
                    li += values;
                }

                strResult += '<li>[' + i + ']' + li + '</li>' + subValues;
            }
        }
        else strResult = '<li>' + arr + '</li>';

        return '<ul>' + strResult + '</ul>';
    }

    // --- показываем результат в новом окне
    function _openWindow(result, href) {
        var modal = window.open('', '', 'scrollbars=1');
        var style = 'button { padding:10px; margin:10px; border:0px grey solid; width:30%; cursor:ponter  }'
            + ' .lg-view-result { border:2px red solid; }';
        var html = '<!DOCTYPE html><head><style>' + style + '</style><head>'
            + '<p><button onclick="window.close();" >Close</button></p><hr>'
            + '<p class="lg-view-result" ><pre>' + result + '</pre></p>';
        modal.document.body.innerHTML = html;
    }
}