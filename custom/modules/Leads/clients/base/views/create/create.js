({
    extendsFrom: 'LeadsCreateView',

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
        }

        this._super('_renderHtml');

    },

    _dispose: function(){
        this._super('_dispose');
    }
    
})