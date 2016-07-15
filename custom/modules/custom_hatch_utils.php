<?php
class customHatchUtils{

    // Business Cluster Head 'team id' => 'business cluster'
    var $business_cluster_head = array(
        'c582e83d-bc35-fe9c-3d45-57883edd9737' => '1',
        '2509f361-2616-8304-edf1-57883e605041' => '2',
        '4e02cd01-0adb-193f-12ee-57883eb9270f' => '3',
    );
    // Business Cluster Members 'team id' => 'business cluster'
    var $business_clusters = array(
        '3a5705c8-caa0-17e3-093b-57883ef48650' => '1',
        '539295a3-1cc8-f2e1-6055-57883eee21f3' => '2',
        'f1de6289-822a-466f-ee06-57883e4105eb' => '3',
    );

    public function checkBusinessCluster($assigned_user) {
        $AM_user = BeanFactory::retrieveBean('Users', $assigned_user);
        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($AM_user->team_set_id);

        foreach ($this->business_cluster_head as $key=>$value){
            if($teams[$key]){
                return $this->business_cluster_head[$key];
            }
        }

        foreach ($this->business_clusters as $key=>$value){
            if($teams[$key]){
                return $this->business_clusters[$key];
            }
        }

        return '';
    }

    /**
     * @return bool
     * Checks if user is a Super User or an Admin
     */
    public function checkSuperUser($user) {
        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($user->team_set_id);

        foreach ($teams as $value){
            if($value->name =='Super User' || $user->is_admin || $value->name =='Sales Manager'){
                return false;
            }
        }

        return true;
    }

}