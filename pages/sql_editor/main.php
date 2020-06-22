
<div class="wcFrameTitleBar wcTabTop" style="width: 100%; position: relative; margin:10px 0px 10px 0px; padding:4px;">
    <div class="wcTabScroller" style="">
        <div class="wcPanelTab wcPanelTabActive" >
            <div><a @click="setSqlCommandType('query')" style="cursor:pointer"
                     class="panel-link-heading">Выборка данных</a></div>
        </div>
        <div  class="wcPanelTab" >
             <div><a @click="setSqlCommandType('exec', 'create_table')" style="cursor:pointer"
                     class="panel-link-heading">Создание таблицы</a></div>
        </div>
    </div>
    <div class="wcFrameButtonBar" style="" ></div>
</div>

<!--<div class="row" >-->
<!--    <sql-query-form-extend-->
<!--            :table_name="tableName"-->
<!--            @get_query_response="sqlQueryResult"-->
<!--    ></sql-query-form-extend>-->
<!--</div>-->

<div class="pg-panel-content" style="width:100%; position: relative; padding:4px; display:block; overflow: auto;" >

    <my-btn icon="" :args="{}" style="width:150px;"
            @btn_click="queryExecute()" >
            Выполнить sql-запрос
    </my-btn>

    <div style="display: flex; width:100%;">

        <div style="width:40%; padding:4px; border: 1px gainsboro solid;">
             <textarea v-model="sqlCommand"
                  style="width:100%; height:200px;
                         background-color: #f3f5f9;
                         padding:10px 10px 10px 20px;
                         font-style: normal; font-weight: bold; "></textarea>
        </div>

        <div style="width:60%; padding:4px; margin-left: 10px; border: 1px gainsboro solid;" >

            <template v-if="sqlCommandType == 'query'">

                <div v-for="(item, i) in queryResultItems" >
                    <div v-for="(value, fname) in item" >
                        <table class="table presentation table-bordered table-noouter-border table-hover" ><tr>
                             <td style="width:140px !important;" ><div style="width:100%; overflow: hidden" >{{fname}}</div></td>
                             <td style="width:140px !important;" ><div style="width:100%; overflow: hidden" >{{value}}</div></td>
                        </tr></table>
                    </div>
                </div>

            </template>
            <template v-else >
                <pre>{{queryResultItems}}</pre>
            </template>

        </div>

    </div>

</div>