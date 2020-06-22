
<div class="wcLayoutPane" style="height: 350px; top: 0px; left: 0px; right: 0px; position: relative">
    <div class="wcLayoutPane" style="width: 1243.5px; left: 0px; top: 0px; bottom: 0px;">
        <div class="wcFrame wcWide wcTall">
            <div class="wcFrameTitleBar wcTabTop" style="width: 1243.5px;">
                <div class="wcTabScroller" style="left: 0px;">
                    <div class="wcPanelTab wcPanelTabActive" id="0">
                        <div >
                            <a href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="-1" class="panel-link-heading">Query Editor</a></div></div><div class="wcPanelTab" id="1"><div><a href="https://2886795282-80-kitek08.environments.katacoda.com/pgadmin4/datagrid/panel/8689578?is_query_tool=false&amp;cmd_type=3&amp;obj_type=table&amp;obj_id=16559&amp;sgid=1&amp;sid=1&amp;did=16458&amp;server_type=pg#" tabindex="-1" class="panel-link-heading">История запросов</a></div></div></div><div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; right: 0px;"></div></div><div class="wcFrameButtonBar" style="min-width: 0px; width: 0px;"><div class="wcFrameButton" title="Close the currently active panel tab" aria-label="Close panel" tabindex="0" style="display: none;"><div class="fa fa-close"></div></div><div class="wcFrameButton" title="Collapse the active panel" style="display: none;"><div class="fa fa-download"></div>C</div></div><div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY" style="left: 0px; right: 0px; bottom: 0px;"><div class="wcPanelTabContent" id="0"><table class="wcLayout wcWide wcTall"><tbody><tr><td><div class="pg-panel-content"><div id="output-panel" tabindex="0"><textarea id="sql_query_tool" tabindex="-1" style="display: none;"></textarea><div class="CodeMirror cm-s-default CodeMirror-simplescroll bg-gray-lighter opacity-5 hide-cursor-workaround CodeMirror-focused" style="font-size: 1em;"><div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 25px; left: 222.438px;"><textarea autocorrect="off" autocapitalize="off" spellcheck="false" tabindex="0" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;"></textarea></div><div class="CodeMirror-simplescroll-horizontal" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-simplescroll-vertical" cm-not-content="true" style="display: none;"><div></div></div><div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div><div class="CodeMirror-gutter-filler" cm-not-content="true"></div><div class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer" style="margin-left: 42px; margin-bottom: -16px; border-right-width: 14px; min-height: 50px; min-width: 217.047px; padding-right: 0px; padding-bottom: 0px;"><div style="position: relative; top: 0px;"><div class="CodeMirror-lines" role="presentation"><div role="presentation" style="position: relative; outline: none;"><div class="CodeMirror-measure"><pre class="CodeMirror-line-like"><span>xxxxxxxxxx</span></pre></div><div class="CodeMirror-measure"></div><div style="position: relative; z-index: 1;"></div><div class="CodeMirror-cursors" style=""><div class="CodeMirror-cursor" style="left: 180.438px; top: 21px; height: 21px;">&nbsp;</div></div><div class="CodeMirror-code" role="presentation"><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">1</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">SELECT</span> <span class="cm-operator">*</span> <span class="cm-keyword">FROM</span> <span class="cm-keyword">public</span><span class="cm-variable-2">.city</span></span></pre></div><div style="position: relative;"><div class="CodeMirror-gutter-wrapper" style="left: -42px;"><div class="CodeMirror-linenumber CodeMirror-gutter-elt" style="left: 0px; width: 21px;">2</div></div><pre class=" CodeMirror-line " role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">ORDER</span> <span class="cm-keyword">BY</span> city_id <span class="cm-keyword">ASC</span> </span></pre></div></div></div></div></div></div><div style="position: absolute; height: 14px; width: 1px; border-bottom: 0px solid transparent; top: 50px;"></div><div class="CodeMirror-gutters" style="height: 64px; left: 0px;"><div class="CodeMirror-gutter CodeMirror-linenumbers" style="width: 29px;"></div><div class="CodeMirror-gutter CodeMirror-foldgutter"></div></div></div></div></div></div></td></tr></tbody></table></div><div class="wcPanelTabContent wcPanelTabContentHidden" id="1"><table class="wcLayout wcWide wcTall"><tbody><tr><td><div class="pg-panel-content"><div id="history_grid" class="sql-editor-history-container d-flex" tabindex="0"><div style="width: calc(50% - 0.5px);"><div class="toggle-and-history-container">
                                                <div class="query-history-toggle">
                                                    <label class="control-label">
                                                        Show queries generated internally by pgAdmin?
                                                    </label>
                                                    <div class="toggle btn btn-success btn-xs quick" data-toggle="toggle" style="width: 0px; height: 0px;"><input id="generated-queries-toggle" type="checkbox" class="pgadmin-controls" data-style="quick" data-size="mini" data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="ternary" checked=""><div class="toggle-group"><label class="btn btn-success btn-xs toggle-on">Да</label><label class="btn btn-ternary btn-xs toggle-off">Нет</label><span class="toggle-handle btn btn-light btn-xs"></span></div></div>
                                                </div>
                                                <div id="query_list" class="query-history" tabindex="0"><div class="query-group" data-key="2020 06 21">
                                                        <div class="date-label">Today - 21.06.2020</div>
                                                        <ul class="query-entries"><li class="list-item pgadmin-query-history-entry selected" tabindex="0" data-key="11:13:13">
                                                                <div class="entry ">
                                                                    <div class="query">
                                                                        <span id="query_source_icon" class="query-history-icon sql-icon-lg icon-view-data" role="img"></span>
                                                                        SELECT * FROM public.city
                                                                        ORDER BY city_id ASC
                                                                    </div>
                                                                    <div class="other-info">
                                                                        <div class="timestamp">11:13:13</div>
                                                                    </div>
                                                                </div>
                                                            </li></ul>
                                                    </div></div>
                                            </div></div><div class="gutter gutter-horizontal" style="width: 1px;"></div><div style="width: calc(50% - 0.5px);"><div id="query_detail" class="query-detail">
                                                <div class="error-message-block d-none"></div>
                                                <div class="info-message-block"><div class="history-info-text">
                                                        This query was generated by pgAdmin as part of a "View/Edit Data" operation
                                                    </div></div>
                                                <div class="metadata-block"><div class="metadata"><div class="item">
                                                            <span class="value">21.06.2020 11:13:13</span>
                                                            <span class="description">Дата</span>
                                                        </div><div class="item">
                                                            <span class="value">600</span>
                                                            <span class="description">Rows Affected</span>
                                                        </div><div class="item">
                                                            <span class="value">316 msec</span>
                                                            <span class="description">Продолжительность</span>
                                                        </div></div></div>
                                                <div class="query-statement-block">
                                                    <div id="history-detail-query">
                                                        <button class="btn-copy copy-all" tabindex="0" accesskey="y">Copy</button>
                                                        <button class="btn-copy-editor copy-to-editor d-none" tabindex="0" accesskey="y">Copy to Query Editor</button>
                                                        <div><div class="CodeMirror cm-s-default" style="font-size: 1em;"><div style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 0px; left: 0px;"><textarea autocorrect="off" autocapitalize="off" spellcheck="false" tabindex="-1" style="position: absolute; bottom: -1em; padding: 0px; width: 1000px; height: 1em; outline: none;"></textarea></div><div class="CodeMirror-vscrollbar" tabindex="-1" cm-not-content="true" style="display: block; bottom: 0px;"><div style="min-width: 1px; height: 32px;"></div></div><div class="CodeMirror-hscrollbar" tabindex="-1" cm-not-content="true" style="display: block; right: 0px; left: 0px;"><div style="height: 100%; min-height: 1px; width: 33px;"></div></div><div class="CodeMirror-scrollbar-filler" cm-not-content="true"></div><div class="CodeMirror-gutter-filler" cm-not-content="true"></div><div class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer" style="margin-left: 0px; min-width: 3px; padding-right: 0px; padding-bottom: 0px;"><div style="position: relative;"><div class="CodeMirror-lines" role="presentation"><div role="presentation" style="position: relative; outline: none;"><div class="CodeMirror-measure"></div><div class="CodeMirror-measure"><pre class="CodeMirror-line" role="presentation"><span role="presentation" style="padding-right: 0.1px;"><span class="cm-keyword">SELECT</span> <span class="cm-operator">*</span> <span class="cm-keyword">FROM</span> <span class="cm-keyword">public</span><span class="cm-variable-2">.city</span></span></pre></div><div style="position: relative; z-index: 1;"></div><div class="CodeMirror-cursors"></div><div class="CodeMirror-code" role="presentation"></div></div></div></div></div><div style="position: absolute; height: 30px; width: 1px; border-bottom: 0px solid transparent;"></div><div class="CodeMirror-gutters" style="display: none;"></div></div></div></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <hr class="block-divider">
                                                </div>
                                                <div class="message-block">
                                                    <div class="message">
                                                        <div class="message-header">Сообщения</div>
                                                        <div class="content"><pre class="content-value">Запрос выполнен успешно. Общее время выполнения: 316 msec.
обработано строк: 600.</pre></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div></div>
        </div>
    </div>

    <div class="wcLayoutPane" style="right: 0px; width: 410.5px; top: 0px; bottom: 0px;">
        <div class="wcFrame wcWide wcTall">
            <div class="wcFrameTitleBar wcTabTop" style="width: 410.5px;">
                <div class="wcFrameTitle">
                    <a href="#" class="panel-link-heading">Scratch Pad</a>
                </div>
                <div class="wcTabScroller" style="left: 0px;"></div>
                <div class="wcFrameButtonBar" style="min-width: 0px; width: 0px; right: 24px;"></div>
            </div>
            <div class="wcFrameButtonBar" style="min-width: 24px; width: 24px;">
                <div class="wcFrameButton" ><div class="fa fa-close"></div></div>
                <div class="wcFrameButton"  style="display: none;">
                    <div class="fa fa-download"></div>C</div></div>
            <div class="wcFrameCenter wcPanelBackground wcScrollableX wcScrollableY" style="left: 0px; right: 0px; bottom: 0px;">
                <div class="wcPanelTabContent" >
                    <table class="wcLayout wcWide wcTall"><tbody><tr><td><div class="pg-panel-content">
                                    <div class="sql-scratch"><textarea></textarea></div></div></td></tr></tbody>
                    </table></div>
            </div>
        </div>
    </div>
    <div class="wcSplitterBar wcTall wcSplitterBarV" style="left: 1240.5px; top: 0px; height: 376.75px;">
        <div class="wcSplitterBarLine"></div>
    </div></div>