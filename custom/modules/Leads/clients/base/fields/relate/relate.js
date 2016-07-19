({
    extendsFrom: 'RelateField',
    initialize: function (options) {
        this._super('initialize', [options]);
    },

    render: function () {
        var enable_am = false;
        var admin_teams = [
            "21e2a3a1-6295-009d-8f5b-577229d1698b",
        ];

        var is_admin = app.user.get('type') == 'admin';
        _.each(app.user.get('my_teams'), function (team, i) {
            if (admin_teams.indexOf(team.id) > -1 || is_admin) {
                enable_am = true;
            }
        })

        if (this.name == 'assigned_user_name' && !enable_am) {
            this.def.readonly = true;
        }
        this._super('render');
    }
})