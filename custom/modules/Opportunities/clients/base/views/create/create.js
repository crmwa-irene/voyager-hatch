({
    extendsFrom: 'OpportunitiesCreateView',
    initialize: function (options) {
        this._super('initialize', [options]);
    },
    render: function () {
        var user_name = '';
        var user_id = '';
        var user_url = app.api.buildURL('Users', app.user.get('id'));
        app.api.call('GET', user_url, '', {
            success: function (user_data) {
                user_name = user_data.name;
                user_id = user_data.id;
            },
            error: function () {
                self._super('initialize', [options]);
            }
        }, {
            async: false
        });
        this.model.set('assigned_user_name', user_name);
        this.model.set('assigned_user_id', user_id);
        this._super('render');
    },
    _renderHtml: function(){
        var disable_am = false;
        var user_url = app.api.buildURL('Users', app.user.get('id'));
        app.api.call('GET', user_url, '', {
            success: function (user_data) {
                var admin_teams = [
                    "21e2a3a1-6295-009d-8f5b-577229d1698b",
                ];
                var teams = user_data.team_name;

                for(var index in teams) {
                    var attr = teams[index];
                    var s = attr.id;
                    if(admin_teams.indexOf(s) > -1 || user_data.is_admin){
                        disable_am = true;
                        return;
                    }
                }
            },
            error: function () {
                self._super('initialize', [options]);
            }
        }, {
            async: false
        });

        if(!disable_am){
            var self = this;
            self.noEditFields.push('assigned_user_name');
            self.noEditFields.push('business_cluster');
        }

        self._super('_renderHtml');

    },

    _dispose: function(){
        this._super('_dispose');
    }
    
})