/////////////////////////////////////////////////////////////
//
// pgAdmin 4 - PostgreSQL Tools
//
// Copyright (C) 2013 - 2020, The pgAdmin Development Team
// This software is released under the PostgreSQL Licence
//
//////////////////////////////////////////////////////////////

define(
  'pgadmin.browser.endpoints', [],
  function() {
    return {
            'static': '/pgadmin4/static/<path:filename>',

      'about.index': '/pgadmin4/about/',

      'authenticate.login': '/pgadmin4/authenticate/login',

      'browser.index': '/pgadmin4/browser/',

      'browser.nodes': '/pgadmin4/browser/nodes/',

      'browser.check_master_password': '/pgadmin4/browser/master_password',

      'browser.set_master_password': '/pgadmin4/browser/master_password',

      'browser.reset_master_password': '/pgadmin4/browser/master_password',

      'browser.lock_layout': '/pgadmin4/browser/lock_layout',

      'NODE-server.connect_id': '/pgadmin4/browser/server/connect/<int:gid>/<int:sid>',

      'NODE-server.connect_id': '/pgadmin4/browser/server/connect/<int:gid>/<int:sid>',

      'NODE-server.connect_id': '/pgadmin4/browser/server/connect/<int:gid>/<int:sid>',

      'dashboard.index': '/pgadmin4/dashboard/',

      'dashboard.get_by_sever_id': '/pgadmin4/dashboard/<int:sid>',

      'dashboard.get_by_database_id': '/pgadmin4/dashboard/<int:sid>/<int:did>',

      'dashboard.dashboard_stats': '/pgadmin4/dashboard/dashboard_stats',

      'dashboard.dashboard_stats_sid': '/pgadmin4/dashboard/dashboard_stats/<int:sid>',

      'dashboard.dashboard_stats_did': '/pgadmin4/dashboard/dashboard_stats/<int:sid>/<int:did>',

      'dashboard.activity': '/pgadmin4/dashboard/activity/',

      'dashboard.get_activity_by_server_id': '/pgadmin4/dashboard/activity/<int:sid>',

      'dashboard.get_activity_by_database_id': '/pgadmin4/dashboard/activity/<int:sid>/<int:did>',

      'dashboard.locks': '/pgadmin4/dashboard/locks/',

      'dashboard.get_locks_by_server_id': '/pgadmin4/dashboard/locks/<int:sid>',

      'dashboard.get_locks_by_database_id': '/pgadmin4/dashboard/locks/<int:sid>/<int:did>',

      'dashboard.prepared': '/pgadmin4/dashboard/prepared/',

      'dashboard.get_prepared_by_server_id': '/pgadmin4/dashboard/prepared/<int:sid>',

      'dashboard.get_prepared_by_database_id': '/pgadmin4/dashboard/prepared/<int:sid>/<int:did>',

      'dashboard.config': '/pgadmin4/dashboard/config/',

      'dashboard.get_config_by_server_id': '/pgadmin4/dashboard/config/<int:sid>',

      'help.static': '/pgadmin4/help/help/<path:filename>',

      'misc.ping': '/pgadmin4/misc/ping',

      'misc.index': '/pgadmin4/misc/',

      'misc.cleanup': '/pgadmin4/misc/cleanup',

      'bgprocess.status': '/pgadmin4/misc/bgprocess/<pid>',

      'bgprocess.detailed_status': '/pgadmin4/misc/bgprocess/<pid>/<int:out>/<int:err>/',

      'bgprocess.acknowledge': '/pgadmin4/misc/bgprocess/<pid>',

      'bgprocess.list': '/pgadmin4/misc/bgprocess/',

      'bgprocess.stop_process': '/pgadmin4/misc/bgprocess/stop/<pid>',

      'file_manager.filemanager': '/pgadmin4/file_manager/filemanager/<int:trans_id>/',

      'file_manager.index': '/pgadmin4/file_manager/',

      'file_manager.get_trans_id': '/pgadmin4/file_manager/get_trans_id',

      'file_manager.delete_trans_id': '/pgadmin4/file_manager/del_trans_id/<int:trans_id>',

      'file_manager.save_last_dir': '/pgadmin4/file_manager/save_last_dir/<int:trans_id>',

      'file_manager.save_file_dialog_view': '/pgadmin4/file_manager/save_file_dialog_view/<int:trans_id>',

      'file_manager.save_show_hidden_file_option': '/pgadmin4/file_manager/save_show_hidden_file_option/<int:trans_id>',

      'bgprocess.status': '/pgadmin4/misc/bgprocess/<pid>',

      'bgprocess.detailed_status': '/pgadmin4/misc/bgprocess/<pid>/<int:out>/<int:err>/',

      'bgprocess.acknowledge': '/pgadmin4/misc/bgprocess/<pid>',

      'bgprocess.list': '/pgadmin4/misc/bgprocess/',

      'bgprocess.stop_process': '/pgadmin4/misc/bgprocess/stop/<pid>',

      'file_manager.filemanager': '/pgadmin4/file_manager/filemanager/<int:trans_id>/',

      'file_manager.index': '/pgadmin4/file_manager/',

      'file_manager.get_trans_id': '/pgadmin4/file_manager/get_trans_id',

      'file_manager.delete_trans_id': '/pgadmin4/file_manager/del_trans_id/<int:trans_id>',

      'file_manager.save_last_dir': '/pgadmin4/file_manager/save_last_dir/<int:trans_id>',

      'file_manager.save_file_dialog_view': '/pgadmin4/file_manager/save_file_dialog_view/<int:trans_id>',

      'file_manager.save_show_hidden_file_option': '/pgadmin4/file_manager/save_show_hidden_file_option/<int:trans_id>',

      'preferences.index': '/pgadmin4/preferences/',

      'preferences.get_by_name': '/pgadmin4/preferences/<module>/<preference>',

      'preferences.get_all': '/pgadmin4/preferences/get_all',

      'settings.store': '/pgadmin4/settings/store/<setting>/<value>',

      'settings.store_bulk': '/pgadmin4/settings/store',

      'settings.reset_layout': '/pgadmin4/settings/layout',

      'settings.save_tree_state': '/pgadmin4/settings/save_tree_state/',

      'settings.get_tree_state': '/pgadmin4/settings/get_tree_state/',

      'settings.reset_tree_state': '/pgadmin4/settings/reset_tree_state',

      'backup.create_server_job': '/pgadmin4/backup/job/<int:sid>',

      'backup.create_object_job': '/pgadmin4/backup/job/<int:sid>/object',

      'backup.utility_exists': '/pgadmin4/backup/utility_exists/<int:sid>/<backup_obj_type>',

      'datagrid.initialize_datagrid': '/pgadmin4/datagrid/initialize/datagrid/<int:trans_id>/<int:cmd_type>/<obj_type>/<int:sgid>/<int:sid>/<int:did>/<int:obj_id>',

      'datagrid.initialize_query_tool': '/pgadmin4/datagrid/initialize/query_tool/<int:trans_id>/<int:sgid>/<int:sid>',

      'datagrid.initialize_query_tool_with_did': '/pgadmin4/datagrid/initialize/query_tool/<int:trans_id>/<int:sgid>/<int:sid>/<int:did>',

      'datagrid.filter_validate': '/pgadmin4/datagrid/filter/validate/<int:sid>/<int:did>/<int:obj_id>',

      'datagrid.filter': '/pgadmin4/datagrid/filter',

      'datagrid.panel': '/pgadmin4/datagrid/panel/<int:trans_id>',

      'datagrid.close': '/pgadmin4/datagrid/close/<int:trans_id>',

      'debugger.index': '/pgadmin4/debugger/',

      'debugger.init_for_function': '/pgadmin4/debugger/init/<node_type>/<int:sid>/<int:did>/<int:scid>/<int:fid>',

      'debugger.init_for_trigger': '/pgadmin4/debugger/init/<node_type>/<int:sid>/<int:did>/<int:scid>/<int:fid>/<int:trid>',

      'debugger.direct': '/pgadmin4/debugger/direct/<int:trans_id>',

      'debugger.initialize_target_for_function': '/pgadmin4/debugger/initialize_target/<debug_type>/<int:trans_id>/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.initialize_target_for_trigger': '/pgadmin4/debugger/initialize_target/<debug_type>/<int:trans_id>/<int:sid>/<int:did>/<int:scid>/<int:func_id>/<int:tri_id>',

      'debugger.close': '/pgadmin4/debugger/close/<int:trans_id>',

      'debugger.restart': '/pgadmin4/debugger/restart/<int:trans_id>',

      'debugger.start_listener': '/pgadmin4/debugger/start_listener/<int:trans_id>',

      'debugger.execute_query': '/pgadmin4/debugger/execute_query/<int:trans_id>/<query_type>',

      'debugger.messages': '/pgadmin4/debugger/messages/<int:trans_id>/',

      'debugger.start_execution': '/pgadmin4/debugger/start_execution/<int:trans_id>/<int:port_num>',

      'debugger.set_breakpoint': '/pgadmin4/debugger/set_breakpoint/<int:trans_id>/<int:line_no>/<int:set_type>',

      'debugger.clear_all_breakpoint': '/pgadmin4/debugger/clear_all_breakpoint/<int:trans_id>',

      'debugger.deposit_value': '/pgadmin4/debugger/deposit_value/<int:trans_id>',

      'debugger.select_frame': '/pgadmin4/debugger/select_frame/<int:trans_id>/<int:frame_id>',

      'debugger.get_arguments': '/pgadmin4/debugger/get_arguments/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.set_arguments': '/pgadmin4/debugger/set_arguments/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.clear_arguments': '/pgadmin4/debugger/clear_arguments/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.poll_end_execution_result': '/pgadmin4/debugger/poll_end_execution_result/<int:trans_id>/',

      'debugger.poll_result': '/pgadmin4/debugger/poll_result/<int:trans_id>/',

      'grant_wizard.acl': '/pgadmin4/grant_wizard/acl/<int:sid>/<int:did>/',

      'grant_wizard.objects': '/pgadmin4/grant_wizard/<int:sid>/<int:did>/<int:node_id>/<node_type>/',

      'grant_wizard.apply': '/pgadmin4/grant_wizard/<int:sid>/<int:did>/',

      'grant_wizard.modified_sql': '/pgadmin4/grant_wizard/sql/<int:sid>/<int:did>/',

      'import_export.create_job': '/pgadmin4/import_export/job/<int:sid>',

      'import_export.utility_exists': '/pgadmin4/import_export/utility_exists/<int:sid>',

      'maintenance.create_job': '/pgadmin4/maintenance/job/<int:sid>/<int:did>',

      'maintenance.utility_exists': '/pgadmin4/maintenance/utility_exists/<int:sid>',

      'restore.create_job': '/pgadmin4/restore/job/<int:sid>',

      'restore.utility_exists': '/pgadmin4/restore/utility_exists/<int:sid>',

      'schema_diff.initialize': '/pgadmin4/schema_diff/initialize',

      'schema_diff.panel': '/pgadmin4/schema_diff/panel/<int:trans_id>/<path:editor_title>',

      'schema_diff.servers': '/pgadmin4/schema_diff/servers',

      'schema_diff.databases': '/pgadmin4/schema_diff/databases/<int:sid>',

      'schema_diff.schemas': '/pgadmin4/schema_diff/schemas/<int:sid>/<int:did>',

      'schema_diff.compare': '/pgadmin4/schema_diff/compare/<int:trans_id>/<int:source_sid>/<int:source_did>/<int:source_scid>/<int:target_sid>/<int:target_did>/<int:target_scid>',

      'schema_diff.poll': '/pgadmin4/schema_diff/poll/<int:trans_id>',

      'schema_diff.ddl_compare': '/pgadmin4/schema_diff/ddl_compare/<int:trans_id>/<int:source_sid>/<int:source_did>/<int:source_scid>/<int:target_sid>/<int:target_did>/<int:target_scid>/<int:source_oid>/<int:target_oid>/<node_type>/<comp_status>/',

      'schema_diff.connect_server': '/pgadmin4/schema_diff/server/connect/<int:sid>',

      'schema_diff.connect_database': '/pgadmin4/schema_diff/database/connect/<int:sid>/<int:did>',

      'schema_diff.get_server': '/pgadmin4/schema_diff/get_server/<int:sid>/<int:did>',

      'schema_diff.close': '/pgadmin4/schema_diff/close/<int:trans_id>',

      'search_objects.search': '/pgadmin4/search_objects/search/<int:sid>/<int:did>',

      'search_objects.types': '/pgadmin4/search_objects/types/<int:sid>/<int:did>',

      'sqleditor.view_data_start': '/pgadmin4/sqleditor/view_data/start/<int:trans_id>',

      'sqleditor.query_tool_start': '/pgadmin4/sqleditor/query_tool/start/<int:trans_id>',

      'sqleditor.poll': '/pgadmin4/sqleditor/poll/<int:trans_id>',

      'sqleditor.fetch': '/pgadmin4/sqleditor/fetch/<int:trans_id>',

      'sqleditor.fetch_all': '/pgadmin4/sqleditor/fetch/<int:trans_id>/<int:fetch_all>',

      'sqleditor.save': '/pgadmin4/sqleditor/save/<int:trans_id>',

      'sqleditor.inclusive_filter': '/pgadmin4/sqleditor/filter/inclusive/<int:trans_id>',

      'sqleditor.exclusive_filter': '/pgadmin4/sqleditor/filter/exclusive/<int:trans_id>',

      'sqleditor.remove_filter': '/pgadmin4/sqleditor/filter/remove/<int:trans_id>',

      'sqleditor.set_limit': '/pgadmin4/sqleditor/limit/<int:trans_id>',

      'sqleditor.cancel_transaction': '/pgadmin4/sqleditor/cancel/<int:trans_id>',

      'sqleditor.get_object_name': '/pgadmin4/sqleditor/object/get/<int:trans_id>',

      'sqleditor.auto_commit': '/pgadmin4/sqleditor/auto_commit/<int:trans_id>',

      'sqleditor.auto_rollback': '/pgadmin4/sqleditor/auto_rollback/<int:trans_id>',

      'sqleditor.autocomplete': '/pgadmin4/sqleditor/autocomplete/<int:trans_id>',

      'sqleditor.load_file': '/pgadmin4/sqleditor/load_file/',

      'sqleditor.save_file': '/pgadmin4/sqleditor/save_file/',

      'sqleditor.query_tool_download': '/pgadmin4/sqleditor/query_tool/download/<int:trans_id>',

      'sqleditor.connection_status': '/pgadmin4/sqleditor/status/<int:trans_id>',

      'sqleditor.get_filter_data': '/pgadmin4/sqleditor/filter_dialog/<int:trans_id>',

      'sqleditor.set_filter_data': '/pgadmin4/sqleditor/filter_dialog/<int:trans_id>',

      'sqleditor.get_query_history': '/pgadmin4/sqleditor/query_history/<int:trans_id>',

      'sqleditor.add_query_history': '/pgadmin4/sqleditor/query_history/<int:trans_id>',

      'sqleditor.clear_query_history': '/pgadmin4/sqleditor/query_history/<int:trans_id>',

      'user_management.roles': '/pgadmin4/user_management/role/',

      'user_management.role': '/pgadmin4/user_management/role/<int:rid>',

      'user_management.update_user': '/pgadmin4/user_management/user/<int:uid>',

      'user_management.delete_user': '/pgadmin4/user_management/user/<int:uid>',

      'user_management.create_user': '/pgadmin4/user_management/user/',

      'user_management.users': '/pgadmin4/user_management/user/',

      'user_management.user': '/pgadmin4/user_management/user/<int:uid>',

      'security.login': '/pgadmin4/login',

      'user_management.auth_sources': '/pgadmin4/user_management/auth_sources/',

      'user_management.auth_sources': '/pgadmin4/user_management/auth_sources/',

      'backup.create_server_job': '/pgadmin4/backup/job/<int:sid>',

      'backup.create_object_job': '/pgadmin4/backup/job/<int:sid>/object',

      'backup.utility_exists': '/pgadmin4/backup/utility_exists/<int:sid>/<backup_obj_type>',

      'datagrid.initialize_datagrid': '/pgadmin4/datagrid/initialize/datagrid/<int:trans_id>/<int:cmd_type>/<obj_type>/<int:sgid>/<int:sid>/<int:did>/<int:obj_id>',

      'datagrid.initialize_query_tool': '/pgadmin4/datagrid/initialize/query_tool/<int:trans_id>/<int:sgid>/<int:sid>',

      'datagrid.initialize_query_tool_with_did': '/pgadmin4/datagrid/initialize/query_tool/<int:trans_id>/<int:sgid>/<int:sid>/<int:did>',

      'datagrid.filter_validate': '/pgadmin4/datagrid/filter/validate/<int:sid>/<int:did>/<int:obj_id>',

      'datagrid.filter': '/pgadmin4/datagrid/filter',

      'datagrid.panel': '/pgadmin4/datagrid/panel/<int:trans_id>',

      'datagrid.close': '/pgadmin4/datagrid/close/<int:trans_id>',

      'debugger.index': '/pgadmin4/debugger/',

      'debugger.init_for_function': '/pgadmin4/debugger/init/<node_type>/<int:sid>/<int:did>/<int:scid>/<int:fid>',

      'debugger.init_for_trigger': '/pgadmin4/debugger/init/<node_type>/<int:sid>/<int:did>/<int:scid>/<int:fid>/<int:trid>',

      'debugger.direct': '/pgadmin4/debugger/direct/<int:trans_id>',

      'debugger.initialize_target_for_function': '/pgadmin4/debugger/initialize_target/<debug_type>/<int:trans_id>/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.initialize_target_for_trigger': '/pgadmin4/debugger/initialize_target/<debug_type>/<int:trans_id>/<int:sid>/<int:did>/<int:scid>/<int:func_id>/<int:tri_id>',

      'debugger.close': '/pgadmin4/debugger/close/<int:trans_id>',

      'debugger.restart': '/pgadmin4/debugger/restart/<int:trans_id>',

      'debugger.start_listener': '/pgadmin4/debugger/start_listener/<int:trans_id>',

      'debugger.execute_query': '/pgadmin4/debugger/execute_query/<int:trans_id>/<query_type>',

      'debugger.messages': '/pgadmin4/debugger/messages/<int:trans_id>/',

      'debugger.start_execution': '/pgadmin4/debugger/start_execution/<int:trans_id>/<int:port_num>',

      'debugger.set_breakpoint': '/pgadmin4/debugger/set_breakpoint/<int:trans_id>/<int:line_no>/<int:set_type>',

      'debugger.clear_all_breakpoint': '/pgadmin4/debugger/clear_all_breakpoint/<int:trans_id>',

      'debugger.deposit_value': '/pgadmin4/debugger/deposit_value/<int:trans_id>',

      'debugger.select_frame': '/pgadmin4/debugger/select_frame/<int:trans_id>/<int:frame_id>',

      'debugger.get_arguments': '/pgadmin4/debugger/get_arguments/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.set_arguments': '/pgadmin4/debugger/set_arguments/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.clear_arguments': '/pgadmin4/debugger/clear_arguments/<int:sid>/<int:did>/<int:scid>/<int:func_id>',

      'debugger.poll_end_execution_result': '/pgadmin4/debugger/poll_end_execution_result/<int:trans_id>/',

      'debugger.poll_result': '/pgadmin4/debugger/poll_result/<int:trans_id>/',

      'grant_wizard.acl': '/pgadmin4/grant_wizard/acl/<int:sid>/<int:did>/',

      'grant_wizard.objects': '/pgadmin4/grant_wizard/<int:sid>/<int:did>/<int:node_id>/<node_type>/',

      'grant_wizard.apply': '/pgadmin4/grant_wizard/<int:sid>/<int:did>/',

      'grant_wizard.modified_sql': '/pgadmin4/grant_wizard/sql/<int:sid>/<int:did>/',

      'import_export.create_job': '/pgadmin4/import_export/job/<int:sid>',

      'import_export.utility_exists': '/pgadmin4/import_export/utility_exists/<int:sid>',

      'maintenance.create_job': '/pgadmin4/maintenance/job/<int:sid>/<int:did>',

      'maintenance.utility_exists': '/pgadmin4/maintenance/utility_exists/<int:sid>',

      'restore.create_job': '/pgadmin4/restore/job/<int:sid>',

      'restore.utility_exists': '/pgadmin4/restore/utility_exists/<int:sid>',

      'schema_diff.initialize': '/pgadmin4/schema_diff/initialize',

      'schema_diff.panel': '/pgadmin4/schema_diff/panel/<int:trans_id>/<path:editor_title>',

      'schema_diff.servers': '/pgadmin4/schema_diff/servers',

      'schema_diff.databases': '/pgadmin4/schema_diff/databases/<int:sid>',

      'schema_diff.schemas': '/pgadmin4/schema_diff/schemas/<int:sid>/<int:did>',

      'schema_diff.compare': '/pgadmin4/schema_diff/compare/<int:trans_id>/<int:source_sid>/<int:source_did>/<int:source_scid>/<int:target_sid>/<int:target_did>/<int:target_scid>',

      'schema_diff.poll': '/pgadmin4/schema_diff/poll/<int:trans_id>',

      'schema_diff.ddl_compare': '/pgadmin4/schema_diff/ddl_compare/<int:trans_id>/<int:source_sid>/<int:source_did>/<int:source_scid>/<int:target_sid>/<int:target_did>/<int:target_scid>/<int:source_oid>/<int:target_oid>/<node_type>/<comp_status>/',

      'schema_diff.connect_server': '/pgadmin4/schema_diff/server/connect/<int:sid>',

      'schema_diff.connect_database': '/pgadmin4/schema_diff/database/connect/<int:sid>/<int:did>',

      'schema_diff.get_server': '/pgadmin4/schema_diff/get_server/<int:sid>/<int:did>',

      'schema_diff.close': '/pgadmin4/schema_diff/close/<int:trans_id>',

      'search_objects.search': '/pgadmin4/search_objects/search/<int:sid>/<int:did>',

      'search_objects.types': '/pgadmin4/search_objects/types/<int:sid>/<int:did>',

      'sqleditor.view_data_start': '/pgadmin4/sqleditor/view_data/start/<int:trans_id>',

      'sqleditor.query_tool_start': '/pgadmin4/sqleditor/query_tool/start/<int:trans_id>',

      'sqleditor.poll': '/pgadmin4/sqleditor/poll/<int:trans_id>',

      'sqleditor.fetch': '/pgadmin4/sqleditor/fetch/<int:trans_id>',

      'sqleditor.fetch_all': '/pgadmin4/sqleditor/fetch/<int:trans_id>/<int:fetch_all>',

      'sqleditor.save': '/pgadmin4/sqleditor/save/<int:trans_id>',

      'sqleditor.inclusive_filter': '/pgadmin4/sqleditor/filter/inclusive/<int:trans_id>',

      'sqleditor.exclusive_filter': '/pgadmin4/sqleditor/filter/exclusive/<int:trans_id>',

      'sqleditor.remove_filter': '/pgadmin4/sqleditor/filter/remove/<int:trans_id>',

      'sqleditor.set_limit': '/pgadmin4/sqleditor/limit/<int:trans_id>',

      'sqleditor.cancel_transaction': '/pgadmin4/sqleditor/cancel/<int:trans_id>',

      'sqleditor.get_object_name': '/pgadmin4/sqleditor/object/get/<int:trans_id>',

      'sqleditor.auto_commit': '/pgadmin4/sqleditor/auto_commit/<int:trans_id>',

      'sqleditor.auto_rollback': '/pgadmin4/sqleditor/auto_rollback/<int:trans_id>',

      'sqleditor.autocomplete': '/pgadmin4/sqleditor/autocomplete/<int:trans_id>',

      'sqleditor.load_file': '/pgadmin4/sqleditor/load_file/',

      'sqleditor.save_file': '/pgadmin4/sqleditor/save_file/',

      'sqleditor.query_tool_download': '/pgadmin4/sqleditor/query_tool/download/<int:trans_id>',

      'sqleditor.connection_status': '/pgadmin4/sqleditor/status/<int:trans_id>',

      'sqleditor.get_filter_data': '/pgadmin4/sqleditor/filter_dialog/<int:trans_id>',

      'sqleditor.set_filter_data': '/pgadmin4/sqleditor/filter_dialog/<int:trans_id>',

      'sqleditor.get_query_history': '/pgadmin4/sqleditor/query_history/<int:trans_id>',

      'sqleditor.add_query_history': '/pgadmin4/sqleditor/query_history/<int:trans_id>',

      'sqleditor.clear_query_history': '/pgadmin4/sqleditor/query_history/<int:trans_id>',

      'user_management.roles': '/pgadmin4/user_management/role/',

      'user_management.role': '/pgadmin4/user_management/role/<int:rid>',

      'user_management.update_user': '/pgadmin4/user_management/user/<int:uid>',

      'user_management.delete_user': '/pgadmin4/user_management/user/<int:uid>',

      'user_management.create_user': '/pgadmin4/user_management/user/',

      'user_management.users': '/pgadmin4/user_management/user/',

      'user_management.user': '/pgadmin4/user_management/user/<int:uid>',

      'security.login': '/pgadmin4/login',

      'user_management.auth_sources': '/pgadmin4/user_management/auth_sources/',

      'user_management.auth_sources': '/pgadmin4/user_management/auth_sources/'
    };
  });