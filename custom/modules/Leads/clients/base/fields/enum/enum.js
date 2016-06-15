({
    extendsFrom: 'EnumField',
    _options: {},
    is_super_user: false,
    initialize: function (options) {
        var is_super_user = false;
        this._super('initialize', [options]);
        var user_url = app.api.buildURL('Users', app.user.get('id'));

        if (this.name == 'cluster') {
            app.api.call('GET', user_url, '', {
                success: function (user_data) {
                    var teams = user_data.team_name;
                    for (var index in teams) {
                        var attr = teams[index];
                        var sname = attr.name;
                        var sid = attr.id;
                        if (sname == 'Super User' || sname == 'Super Admin' || user_data.is_admin) {
                            is_super_user = true;
                        }
                    }
                },
                error: function () {
                    self._super('initialize', [options]);
                }
            }, {
                async: false
            });
        }

        this.is_super_user = is_super_user;

        if (this.name == 'cluster' && this.is_super_user) {
            var lead_cluster_list = app.lang.getAppListStrings('lead_cluster_list');
            this.items = lead_cluster_list;
        }

        this._options = app.lang.getAppListStrings('lead_cluster_list');
        this.model.on('change:industry', _.bind(this.render, this), this);
    },
    render: function () {
        if (this.name == 'cluster' && this.is_super_user) {
            var lead_cluster_list = app.lang.getAppListStrings('lead_cluster_list');
            this.items = lead_cluster_list;
        }

        this._super('render');
    },
})
