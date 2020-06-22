Vue.component('left-panel-wrapper', {
    data: function () {
        return {}
    },
    template: `
    <div class="wcLayoutPane" style="left: 10px; top: 0px; bottom: 0px;">
            <div class="wcFrame wcWide wcTall"
                style="background-clip: border-box; border: 1px solid #dde0e6; margin-top:2px;">
                <!------------------>
                <!------ Start ----->
                <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY"
                     style="left: 0px; right: 0px; bottom: 0px;">
                    <div class="wcPanelTabContent">
                        <table class="wcLayout wcWide wcTall">
                            <tr><td>
                                    <div class="pg-panel-content">
                                        <div class="aciTree aciTree0 aciTreeFullRow">
                                            <ul role="group" class="aciTreeUl">
                                                <slot name="content"></slot>
                                            </ul>
                                        </div>
                                    </div>
                            </td></tr>
                        </table>
                    </div>
                </div>
                <!------ End ----->
                <!---------------->
            </div>
    </div>`,
});

////////////////////////////////
Vue.component('my-btn', {
    props : ['args', 'icon'],
    data: function () {
        let icon = '';
        if(this.icon)
            icon = this.icon;
        return {
           iconName : icon,
        }
    },

    methods: {
        emitBtnClick(){
            this.$emit('btn_click', this.args);
        }
    },

    template: `
     <div class="pg-prop-btn-group pg-prop-btn-group-above"
                 style="border-bottom: 0px solid grey !important; text-align: right;">
                 <button @click="emitBtnClick()" class="btn btn-primary m-1 no-radius"
                         style="min-width: 200px; width: 100%; font-weight: bold;">
                         <i v-if="iconName" class="material-icons custom-icon"
                             style="font-size: 18px; color: white; vertical-align: middle; margin-right: 10px;">{{iconName}}</i>
                     <slot></slot>
                </button>
     </div> `,
});

////////////////////////////////
Vue.component('ico', {
    props : ['name', 'color', 'param'],
    data: function () {
        let colouring = 'white';
        if(!this.color) colouring = this.color;
        return {
            colouring,
        }
    },
    computed : {},
    template: `
       <i  class="material-icons custom-icon"
          :style="'font-size: 18px; color: ' +colouring+ '; vertical-align: middle; margin-right: 10px;'" >{{name}}</i>
    `,
});

////////////////////////////////////////////
///////////////////////////////////////////

Vue.component('my-form', {
    props : ['set', 'item'],
    data: function () {
        let set  = this.set;
        let data = this.item;

        let iconName = '';
        let title    = '';
        let width    = 400;
        let btnTitle = 'Сохранить';
        let display  = 'block';
        let labelWith  = 100;
        let inputWith = 100;
        // debugger;

        if(set.width)   width    = set.width;
        if(set.title)   title    = set.title;
        if(set.btn)     btnTitle = set.btn;
        if(set.icon)    iconName = set.icon;
        if(set.display) display  = set.display;

        if(display == 'flex') {
            labelWith  = 30;
            inputWith  = 70;
        }

        return {
            data,
            width,
            title,
            btnTitle,
            iconName,
            display,
            labelWith,
            inputWith,
        }
    },
    computed : {},

    methods: {
        emitStart(){
            let item = this.data;
            this.$emit('get_item', { item: item, event : this.set.event });
        }
    },

    template: `
    <!-- Start -------------------->
    <div class="accordian-group pg-el-12 custom-form-class" style="width:97%;" >
        <div class="badge" > {{title}} </div>
        
        <div class="accordian-content pg-el-12 collapse show" >
        
            <template v-for="(item, fname) in data" >
                <div class ="pgadmin-control-group form-group row pg-el-12 name" 
                     :style="'border:0px orange solid; display:' + display" >
    
                        <div class="control-label pg-el-sm-3 pg-el-12"  
                            :style="'max-width: '+labelWith+'%; font-style: italic; border:0px red solid;'">
                            {{item.label}}
                        </div>
                        <div class="pgadmin-controls pg-el-sm-9 pg-el-12" 
                             :style="'max-width: '+inputWith+'%; border:0px green solid;'" >  
                             <input  v-model="item.value" class="form-control uneditable-input"
                                    style="background-color: #f3f5f9; width: 100%;" >
                        </div>
                </div>
            </template>
 
            <div class="pg-prop-btn-group pg-prop-btn-group-above" 
                 style="border-bottom: 0px grey solid !important; text-align: right;" >
                 <button  @click="emitStart()" class="btn btn-primary m-1 no-radius" 
                          style="min-width:200px; font-weight: bold ">
                          <i v-if="iconName" 
                             style="font-size: 18px; color:white; vertical-align: middle; margin-right:10px;"
                             class="material-icons custom-icon">{{iconName}}</i>
                          {{btnTitle}}
                 </button>
            </div>
            
         </div> <!---- / accordian-content --->
    </div> <!---- / accordian-group -->  
    <!-- End  --------------------->
    `,
});


////////////////////////////////////////////
///////////////////////////////////////////


Vue.component('modal-form', {
    props : ['modal_id', 'wrap_class'],
    data: function () {
        var wrapClass = 'col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8';
        if(this.wrap_class)
            wrapClass = this.wrap_class;

        return {
            wrapClass,
            title: 'Модальный компонент',
            modalDesc : 'Lorem ipsum dolor sit',
        }
    },
    template: `
    
       <div class="modal fade subscribe padding-top-120 in" :id="modal_id" role="dialog"
             style="display: none; padding-right: 17px;">
            <div class="modal-dialog">
        
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="section-title margin-top-30">
                                    <button type="button" class="btn pull-right" data-dismiss="modal">
                                         <i class="fa fa-close"></i>
                                    </button>
                                    <!--<h2>{{title}}</h2>-->
                                    <slot name="title"></slot> 
                                    <div class="divider dark">
                                        <slot name="icon">
                                            <i class="icon-envelope-letter"></i>
                                        </slot>
                                    </div>
                                    <!--<p>{{modalDesc}}</p>-->
                                    <slot name="desc"></slot> 
                                </div>
                            </div>
                        </div>
        
                        <div class="row" style="" >
                            <div :class="wrapClass" >
                            <!--<div class="col-8" style="padding:2%;" >-->
                                <div class="margin-bottom-10" style="padding:2%;"  >
                                    <form id="mc-form" novalidate="true"> 
                                        <div class="subscribe-form" style="text-align:center">
                                            <slot name="content"></slot>  
                                            <!--<input id="mc-email" type="email" placeholder="Email Address" class="text-input"-->
                                                   <!--name="EMAIL">-->
                                            <!--<button class="submit-btn" type="submit">Submit</button>-->
                                        </div>
                                        <label for="mc-email" class="mc-label"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    `,
});


Vue.component('current-info', {
    props : ['data_info'],
    data: function () {
        return { }
    },

    computed : {
        curUserInfo() {
            return this.data_info;
        }
    },

    template: `
    
       <div style="display: flex;" >
        
            <div class="table-responsive" style="width:25%" >
                <table class="table">
                    <tr>
                        <td style="border: 3px solid #ddd;" >Текущая база</td>
                        <td style="border: 3px solid #ddd;" >{{curUserInfo.datname}}</td>
                    </tr>
                </table>
            </div>
    
            <div class="table-responsive" style="width:25%" >
                <table class="table">
                    <tr>
                        <td style="width:200px; border: 3px solid #ddd;" >Текущий пользователь</td>
                        <td style="border: 3px solid #ddd;" >{{curUserInfo.usename}}</td>
                    </tr>
                </table>
            </div>
    
            <div class="table-responsive" style="width:25%" >
                <table class="table">
                    <tr>
                        <td style="border: 3px solid #ddd;" >Ip-адрес</td>
                        <td style="border: 3px solid #ddd;" >{{curUserInfo.client_addr}}</td>
                    </tr>
                </table>
            </div>
    
            <div class="table-responsive" style="width:25%" >
                <table class="table">
                    <tr>
                        <td style="border: 3px solid #ddd;" >Порт</td>
                        <td style="border: 3px solid #ddd;" >{{curUserInfo.client_port}}</td>
                    </tr>
                </table>
            </div>

        </div>
    `,
});


Vue.component('select-object-info', {
    props : ['info'],
    data: function () {
        return { }
    },

    computed : {
        curInfo() {
            return this.info;
        }
    },

    template: `
    
       <div style="display: flex;" >
        
            <table v-if="curInfo.db" class="table" style="width:33%" >
                <tr>
                    <td style="border: 2px solid #ddd; margin:0px !important;padding:5px !important; width:50%; text-align:right;"  
                       >Выбранная база</td>
                    <td style="border: 2px solid #ddd; margin:0px !important;padding:5px !important;" 
                       >{{curInfo.db}}</td>
                </tr>
            </table>
           
            <table v-if="curInfo.user" class="table" style="width:35%" >
                <tr>
                    <td style="border: 2px solid #ddd; margin:0px !important;padding:5px !important; width:50%; text-align:right;"  
                       >Выбранная user</td>
                    <td style="border: 2px solid #ddd; margin:0px !important;padding:5px !important;" 
                       >{{curInfo.user}}</td>
                </tr>
            </table>
 
            <table v-if="curInfo.table" class="table"  style="width:33%" >
                <tr>
                    <td style="border: 2px solid #ddd; margin:0px !important;padding:5px !important; width:50%; text-align:right;" 
                        >Выбранная таблица</td>
                        
                    <td style="border: 2px solid #ddd; margin:0px !important;padding:5px !important;" 
                        >{{curInfo.table}}</td>
                </tr>
            </table>
      
        </div>
    `,
});


//////////////////////////////////
Vue.component('sql-query-form', {
    props : ['table_name'],
    mixins: [Http, BaseMixin, dragMixin],
    data: function () {
        return { }
    },

    computed: {
        getTableName() {
            this.tableName = this.table_name;
            return this.tableName;
        }
    },

    methods: {

        queryExecute() {
            if(!this.sqlCommand) {
                alert('Пустая команда');
                return false;
            }
            this.execSqlCommand(null, this.emitResponse);
        },

        emitResponse(resp) {
           this.$emit('get_query_response', { result : resp });
        },

        // // Выполняем sql команды
        // execSqlCommand(paramName = '', callback = null) {
        //     var url = 'EXEC_SQL_COMMAND/' + this.sqlCommand + '/' + this.sqlCommandType;
        //     this.http(url).then(resp = > {
        //         if(paramName)this[paramName] = resp;
        //         if (callback) callback(resp);
        //     });
        // },

    },
    template: `
     <div> 
          <div class="col-sm-12" style="padding: 0px; display: flex; height:45px; z-index:99">
          
                <div style="display: none" >{{getTableName}}</div>
                
                <textarea 
                    v-model="sqlCommand" style="font-style: italic; width:70%; height: 100%;" 
                    type="text" class="form-control" placeholder="sql-запрос"
                ></textarea>
                
                <select v-model="sqlCommandType" class="form-control" 
                       style="margin:0px 5px 0px 5px;font-style: italic; width:20%; height: 100%" >
                       <option value="query" >Выборка (query)</option>
                       <option value="exec"  >Выполнение (exec)</option>
                       <option value="add_fields" >Добавить новые поля в таблицу</option>
                       <option value="add_table"  >Добавить новую таблицу</option>
                </select>
                
                <!--<input v-model="sqlCommandType" style="font-style: italic; width:20%; height: 34px;"-->
                       <!--type="text" class="form-control" placeholder="тип команды : query / exec">-->
                       
                <button @click="queryExecute()"
                        class="btn" style="width:20%; font-weight: bold;border-radius: 0px" >Выполнить sql-запрос</button>
          </div>
          
          <!--<div>{{freeSqlCommandResult}}  {{sqlCommandType}}</div> -->
     </div>
    `,
});



//////////////////////////////////
Vue.component('alert-message', {
    props : ['message', 'show'],
    data: function () {
        var alertMessage = this.message;
        if(!alertMessage) alertMessage = 'Успешное сохранение';
        return {
            alertMessage,
            showStatus : '',
        }
    },

    computed: {
        getStatus() {
            this.close();
            this.showStatus = this.show;
            return this.showStatus;
        }
    },

    created() {
        this.close();
    },

    methods: {
        close() {
            setTimeout(() => {
                 this.$emit('alert_message_close', true);
            }, 2000);
        },
    },

    template: ` 
          <div style="position: fixed; top:2%; border:0px red solid; width:50%; margin:0px auto 0px auto; z-index:999999" >
                 <div class="contact-us-detail"
                      style="color:white; text-align:center;  z-index:99999999; border:0px green solid; background: #1b9448; opacity: 0.7" >
                     {{alertMessage}}
                 </div>
          </div>
    `,
});


//////////////////////////////////
Vue.component('sql-query-form-extend', {
    props : ['table_name'],
    mixins: [Http, BaseMixin, dragMixin],
    data: function () {
        var addFieldsPlaceholder = `
             Cинтаксис запроса: имя поля [пробел] тип [пробел] размер [перенос строки]
             file_name_1   varchar   255 
             file_name_2   integer    
             file_name_3 
             обязательный параметр - только имя поля
             по умолчанию будет тип:varchar 255      
        `;

        var createTablePlaceholder = `
             имя таблицы  [пробел]  id   [перенос строки]
             имя поля  [пробел]   тип   [пробел]   размер [перенос строки] 
             table_name    id
             file_name_1   varchar   255 
             file_name_2   integer   
             file_name_3   
        `;

        return {
            queryTypes : {
               query : { title : 'Выборка'   , placeholder : '', note : ''},
               exec  : { title : 'Выполнение', placeholder : '', note : ''},
               add_fields    : { title : 'Добавить поля',
                                 note : 'Список полей',
                                 placeholder : addFieldsPlaceholder },

               create_table  : { title : 'Добавить таблицу',
                                 note  : 'Добавить таблицу с списком полей',
                                 placeholder : createTablePlaceholder },

               add_tables    : { title : 'Добавить таблицы',
                                 note  : 'Добавить список таблиц',
                                 placeholder : "имя таблицы | id"},
            },

            placeholder : '',
        }
    },

    computed: {
        getTableName() {
            this.tableName = this.table_name;
            return this.tableName;
        }
    },

    methods: {

        queryExecute() {
            if(!this.sqlCommand) {
                alert('Пустая команда');
                return false;
            }
            this.execSqlCommand(null, this.emitResponse);
        },

        emitResponse(resp) {
            this.$emit('get_query_response', { result : resp });
        },

        setQueryType(item, command) {
            this.placeholder = item.placeholder;
        },

        // // Выполняем sql команды
        // execSqlCommand(paramName = '', callback = null) {
        //     var url = 'EXEC_SQL_COMMAND/' + this.sqlCommand + '/' + this.sqlCommandType;
        //     this.http(url).then(resp = > {
        //         if(paramName)this[paramName] = resp;
        //         if (callback) callback(resp);
        //     });
        // },

    },
    template: `
     <div> 
          <div class="col-sm-12" style="padding: 0px;" >
          
               <!--<div style="display: flex;" >-->
                   <!--<div style="color:green;" >Таблица: {{getTableName}}</div>-->
                   <!--<div style="color:green; margin-left:10px;" >Тип команда:{{sqlCommandType}}</div>-->
               <!--</div>-->
                   
               <div style="display: flex;" >
               
                   <div style="border: 1px gainsboro solid; padding:0px; height: 59px; margin-right:5px;" >
                      <div style="color:red;padding:0px 3px 0px 3px;" >Таблица: {{getTableName}}</div>
                      <div style="color:red;padding:0px 3px 0px 3px;" >Команда: {{sqlCommandType}}</div>
                   </div>
               
                   <div v-for="(item, command) in queryTypes" 
                        style="margin:0px 2px 4px 0px; padding:4px; border: 1px gainsboro solid;" >
                        
                        <label @click="setQueryType(item, command)" 
                               class="mdl-radio mdl-js-radio mdl-js-ripple-effect" :for="'option-' + command" >
                               <input v-model="sqlCommandType" type="radio" class="mdl-radio__button" 
                                      :id="'option-' + command" :value="command" name="command_type" >
                               <span class="mdl-radio__label">{{item.title}}</span>
                        </label> 
                        
                        <div v-if="item.note" style="font-style:italic; text-align:center;font-size:10px;" >{{item.note}}</div> 
                            
                    </div>
               </div>
               
          </div>
          
          <div class="col-sm-9" style="padding: 0px; display: flex; height:200px; z-index:99">
          
                <textarea 
                    v-model="sqlCommand" style="font-style: italic; width:100%; height: 100%;" 
                    type="text" class="form-control" :placeholder="placeholder"
                ></textarea>
        
          </div>
          
          <div class="col-sm-3" >
               <button @click="queryExecute()"
                        class="btn" style="width:100%; font-weight: bold;border-radius: 0px" >Выполнить sql-запрос</button>
          </div>
          
          <!--<div>{{freeSqlCommandResult}}  {{sqlCommandType}}</div> -->
     </div>
    `,
});

