<?php
require_once('modules/Teams/Team.php');
require_once('modules/Teams/TeamSet.php');
class BeforeSaveValidationAccount
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * @throws SugarApiExceptionInvalidParameter
     */
    public function ValidateAccountRecord($bean, $event, $arguments)
    {
        global $current_user;
        $newrecord_samecluster = false;
        $autocompleted = false;
        $this->bean = $bean;

        $not_admin = $this->checkSuperUser();

        if(!$this->bean->fetched_row || $this->bean->fetched_row['cluster'] != $this->bean->cluster){
            if($this->checkIfSameCluster($current_user->id)){
                $this->bean->assigned_user_id = $current_user->id;
                $newrecord_samecluster = true;
            }
            if($not_admin && !$newrecord_samecluster){
                $autocompleted = true;
                $this->autoCompleteFields();
            }
        }

        if($this->bean->fetched_row['assigned_user_id'] != $this->bean->assigned_user_id && $not_admin){
            $user_samecluster = $this->checkClusterHead($current_user->team_set_id);
            $AM_sameCluster = $this->checkIfSameCluster($this->bean->assigned_user_id);
            if($user_samecluster){
                if(!$AM_sameCluster){
                    throw new SugarApiExceptionInvalidParameter("Account manager is not assigned to this cluster. Please check and try again.");
                }
            }else{
                if($this->bean->fetched_row['cluster'] == $this->bean->cluster && !$autocompleted){
                    throw new SugarApiExceptionInvalidParameter("Account Manager cannot be reassigned if you're not on this cluster.");
                }
            }
        }
    }

    /**
     * @param $user_id
     * @return bool
     * @throws SugarApiExceptionInvalidParameter
     * Checks if AM is on Current Cluster Team
     */
    public function checkIfSameCluster($user_id) {
        $AM_user = BeanFactory::retrieveBean('Users', $user_id);
        $cluster_head = $this->checkClusterHead($AM_user->team_set_id);

        $team = new Team();
        $team->retrieve($this->checkTeam());
        $team_members = $team->get_team_members(true);

        foreach ($team_members as $member){
            if($member->id == $user_id || $cluster_head){
                return true;
            }
        }
        return false;
    }

    /**
     * @param $teamset_id
     * @return bool
     * Checks if AM is Cluster Head for current cluster
     */
    public function checkClusterHead($teamset_id) {
        $clusterhead_team = array(
            '1' => 'b816e97a-22b8-c32b-92b2-577226b33831',
            '2' => '20a5f7ac-769f-eed6-b364-57722995f01f',
            '3' => '56b39561-e612-6c79-c228-577229e46f1b',
            '4' => 'bda28519-30ef-0add-4493-577229f70234',
            '5' => 'ee097a10-3324-fbc3-7c3f-577229f1ebf1',
        );

        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($teamset_id);

        foreach ($teams as $value){
            if($clusterhead_team[$this->bean->cluster] == $value->id){
                return true;
            }
        }

        return false;
    }

    public function checkSuperUser() {
        global $current_user;
        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($current_user->team_set_id);

        foreach ($teams as $value){
            if($value->name =='Super User' || $current_user->is_admin || $value->name =='Sales Manager'){
                return false;
            }
        }

        return true;
    }

    public function autoCompleteFields() {
        switch ($this->bean->cluster){
            case '1':
            case '2':
                $this->bean->assigned_user_id = '72db51c9-72c0-e59a-274e-575a2409e5ab';
                $this->bean->assigned_user_name = 'Aldous Brigino';
                break;
            case '3':
                $this->bean->assigned_user_id = '4486c0cb-aa44-b9bd-706b-575a25b608f2';
                $this->bean->assigned_user_name = 'Rhea Matute';
                break;
            case '4':
                $this->bean->assigned_user_id = '92e29d0b-cdf7-ae43-bed9-575a242d0d90';
                $this->bean->assigned_user_name = 'Alie Ruelos';
                break;
            case '5':
                $this->bean->assigned_user_id = 'dff03ee4-ec46-0533-0818-575a25db71ac';
                $this->bean->assigned_user_name = 'Kamyll Blanco';
                break;
        }
    }

    public function checkTeam() {
        $team_id = '';
        switch ($this->bean->cluster){
            case '1':
                $team_id = '27c186f7-b99c-b253-3de1-57722fbbbda9';
                break;
            case '2':
                $team_id = 'c9a6c3e4-e200-7c54-8a29-57723036b0a8';
                break;
            case '3':
                $team_id = '56594fa6-2a94-2e76-2578-577230b196c8';
                break;
            case '4':
                $team_id = '57c68489-4826-6f88-fe64-5772309edd92';
                break;
            case '5':
                $team_id = 'eb406586-f73d-bf8c-967a-5772306ac5a2';
                break;
        }
        return $team_id;
    }

}