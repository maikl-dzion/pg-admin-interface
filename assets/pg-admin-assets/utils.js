/////////////////////////////////////////////////////////////
//
// pgAdmin 4 - PostgreSQL Tools
//
// Copyright (C) 2013 - 2020, The pgAdmin Development Team
// This software is released under the PostgreSQL Licence
//
//////////////////////////////////////////////////////////////



define('pgadmin.browser.utils',
  ['sources/pgadmin'], function(pgAdmin) {

  var pgBrowser = pgAdmin.Browser = pgAdmin.Browser || {};

  /* Add hooked-in panels by extensions */
  pgBrowser['panels_items'] = '[{"canHide": true, "content": "", "data": null, "events": null, "height": 600, "icon": "", "isCloseable": true, "isIframe": false, "isPrivate": false, "limit": 1, "name": "dashboard", "priority": 1, "showTitle": true, "title": "\u041f\u0430\u043d\u0435\u043b\u044c \u0438\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u0438", "width": 500}]';

  pgAdmin['csrf_token_header'] = 'X-pgA-CSRFToken';
  pgAdmin['csrf_token'] = 'ImIyZjBiZGMzMTBhZGQwYWZlZWRmZGFjNzIyNjI2ZmNmNzI1ZTgwYjAi.XutH2g.LCy-c4RNihaZPmkW7D_NS-XxWjU';

  /* Get the inactivity related config */
  pgAdmin['user_inactivity_timeout'] = 0;
  pgAdmin['override_user_inactivity_timeout'] = 'True' == 'True';

  // Define list of nodes on which Query tool option doesn't appears
  var unsupported_nodes = pgAdmin.unsupported_nodes = [
     'server_group', 'server', 'coll-tablespace', 'tablespace',
     'coll-role', 'role', 'coll-resource_group', 'resource_group',
     'coll-database'
  ];

  pgBrowser.utils = {
    layout: '{"floating":[],"root":{"type":"wcSplitter","horizontal":true,"isDrawer":false,"pane0":{"type":"wcFrame","floating":false,"isFocus":false,"tabOrientation":"top","pos":{"x":0.5,"y":0.5},"size":{"x":300,"y":600},"tab":0,"panels":[{"type":"wcPanel","panelType":"browser","size":{"x":300,"y":600},"customData":{}}]},"pane1":{"type":"wcFrame","floating":false,"isFocus":false,"tabOrientation":"top","pos":{"x":0.5,"y":0.5},"size":{"x":500,"y":600},"tab":6,"panels":[{"type":"wcPanel","panelType":"dashboard","size":{"x":500,"y":600},"customData":{}},{"type":"wcPanel","panelType":"properties","size":{"x":500,"y":600},"customData":{}},{"type":"wcPanel","panelType":"sql","size":{"x":500,"y":600},"customData":{}},{"type":"wcPanel","panelType":"statistics","size":{"x":500,"y":600},"customData":{}},{"type":"wcPanel","panelType":"dependencies","size":{"x":500,"y":600},"customData":{}},{"type":"wcPanel","panelType":"dependents","size":{"x":500,"y":600},"customData":{}},{"type":"wcPanel","panelType":"frm_datagrid","size":{"x":300,"y":600},"customData":{}}]},"pos":0.23510971786833856}}',
    pg_help_path: 'https://www.postgresql.org/docs/$VERSION$/',
    edbas_help_path: 'https://www.enterprisedb.com/edb-docs/d/postgresql/reference/manual/$VERSION$/',
    tabSize: '4',
    wrapCode: 'False' == 'True',
    useSpaces: 'False',
    insertPairBrackets: 'True' == 'True',
    braceMatching: 'True' == 'True',
    is_indent_with_tabs: 'True' == 'True',
    app_name: 'pgAdmin 4',
    pg_libpq_version: 100012,
    support_ssh_tunnel: 'True' == 'True',
    logout_url: '/pgadmin4/logout?next=/pgadmin4/browser/',

    counter: {total: 0, loaded: 0},
    registerScripts: function (ctx) {
      // There are some scripts which needed to be loaded immediately,
      // but - not all. We will will need to generate all the menus only
      // after they all were loaded completely.
    },

    addMenus: function (obj) {
      // Generate the menu items only when all the initial scripts
      // were loaded completely.
      //
      // First - register the menus from the other
      // modules/extensions.
      var self = this;
      if (this.counter.total == this.counter.loaded) {
                obj.add_menus([
      {
  name: "mnu_preferences",
  module: pgAdmin.Preferences,
  callback: "show",
  icon: "fa fa-cog",
  label: "Настройки", applies: ["file"],
  priority: 997,
  enable: "",
    },     {
  name: "mnu_resetlayout",
  module: pgAdmin.Settings,
  callback: "show",
  icon: "fa fa-retweet",
  label: "Сброс интерфейса", applies: ["file"],
  priority: 998,
  enable: "",
    },     {
  name: "mnu_locklayout",
  module: pgAdmin.Browser,
  label: "Lock Layout", applies: ["file"],
  priority: 999,
  enable: "",
    menu_items: [
      {
  name: "mnu_lock_none",
  module: pgAdmin.Browser,
  callback: "mnu_lock_none",
  label: "None", applies: ["file"],
  priority: 0,
  enable: "",
  checked: true,
    },     {
  name: "mnu_lock_docking",
  module: pgAdmin.Browser,
  callback: "mnu_lock_docking",
  label: "Prevent Docking", applies: ["file"],
  priority: 1,
  enable: "",
  checked: false,
    },     {
  name: "mnu_lock_full",
  module: pgAdmin.Browser,
  callback: "mnu_lock_full",
  label: "Full Lock", applies: ["file"],
  priority: 2,
  enable: "",
  checked: false,
    }]
  }]);
                obj.add_menus([
  ]);
                obj.add_menus([
  ]);
                obj.add_menus([
  ]);
                obj.add_menus([
      {
  name: "mnu_online_help",
  url: "/pgadmin4/help/help/index.html?ver=42200",
  target: "pgadmin_help",
  icon: "fa fa-question",
  label: "Веб-справка", applies: ["help"],
  priority: 100,
  enable: "",
    },     {
  name: "mnu_pgadmin_website",
  url: "https://www.pgadmin.org/",
  target: "pgadmin_website",
  icon: "fa fa-external-link",
  label: "Сайт pgAdmin", applies: ["help"],
  priority: 200,
  enable: "",
    },     {
  name: "mnu_postgresql_website",
  url: "https://www.postgresql.org/",
  target: "postgres_website",
  icon: "fa fa-external-link",
  label: "Сайт PostgreSQL", applies: ["help"],
  priority: 300,
  enable: "",
    },     {
  name: "mnu_about",
  module: pgAdmin.About,
  callback: "about_show",
  icon: "fa fa-info-circle",
  label: "О pgAdmin 4", applies: ["help"],
  priority: 999,
  enable: "",
    }]);
                obj.create_menus();
      } else {
         //recall after some time
         setTimeout(function(){ self.addMenus(obj); }, 3000);
      }
    },

    // load the module right now
    load_module: function(name, path, c) {
      var obj = this;
      require([name],function(m) {
        try {
          // initialize the module (if 'init' function present).
          if (m.init && typeof(m.init) == 'function')
            m.init();
        } catch (e) {
          // Log this exception on console to understand the issue properly.
          console.log(e);
          obj.report_error(gettext('Error loading script - ') + path);
        }
        if (c)
        c.loaded += 1;
      }, function() {
        // Log the arguments on console to understand the issue properly.
        console.log(arguments);
        obj.report_error(gettext('Error loading script - ') + path);
      });
    }
  };
  return pgBrowser;
});