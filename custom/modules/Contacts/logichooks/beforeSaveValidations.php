<?php
require_once('modules/Teams/Team.php');
require_once('modules/Teams/TeamSet.php');
class BeforeSaveValidationContact
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * @throws SugarApiExceptionInvalidParameter
     */
    public function ValidateContactRecord($bean, $event, $arguments)
    {
        global $current_user;
        $this->bean = $bean;

        $not_admin = $this->checkSuperUser($current_user);

        if($this->bean->fetched_row['assigned_user_id'] != $this->bean->assigned_user_id && $not_admin){
            if($current_user->id != $this->bean->assigned_user_id){
                $team_list = $this->retrieveStaffID($current_user->team_set_id);
                $this->checkIfSameCluster($this->bean->assigned_user_id, $team_list);
            }
        }
    }

    public function retrieveStaffID($teamset_id) {
        $staff = array();

        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($teamset_id);

        foreach ($teams as $value){
            switch ($value->id){
                case 'b816e97a-22b8-c32b-92b2-577226b33831': //cluster 1
                    $staff['27c186f7-b99c-b253-3de1-57722fbbbda9'] = '27c186f7-b99c-b253-3de1-57722fbbbda9'; //staff
                    $staff['b816e97a-22b8-c32b-92b2-577226b33831'] = 'b816e97a-22b8-c32b-92b2-577226b33831'; //head
                    break;
                case '20a5f7ac-769f-eed6-b364-57722995f01f': //cluster 2
                    $staff['c9a6c3e4-e200-7c54-8a29-57723036b0a8'] = 'c9a6c3e4-e200-7c54-8a29-57723036b0a8'; //staff
                    $staff['20a5f7ac-769f-eed6-b364-57722995f01f'] = '20a5f7ac-769f-eed6-b364-57722995f01f'; //head
                    break;
                case '56b39561-e612-6c79-c228-577229e46f1b': //cluster 3
                    $staff['56594fa6-2a94-2e76-2578-577230b196c8'] = '56594fa6-2a94-2e76-2578-577230b196c8'; //staff
                    $staff['56b39561-e612-6c79-c228-577229e46f1b'] = '56b39561-e612-6c79-c228-577229e46f1b'; //head
                    break;
                case 'bda28519-30ef-0add-4493-577229f70234': //cluster 4
                    $staff['57c68489-4826-6f88-fe64-5772309edd92'] = '57c68489-4826-6f88-fe64-5772309edd92'; //staff
                    $staff['bda28519-30ef-0add-4493-577229f70234'] = 'bda28519-30ef-0add-4493-577229f70234'; //head
                    break;
                case 'ee097a10-3324-fbc3-7c3f-577229f1ebf1': //cluster 5
                    $staff['eb406586-f73d-bf8c-967a-5772306ac5a2'] = 'eb406586-f73d-bf8c-967a-5772306ac5a2'; //staff
                    $staff['ee097a10-3324-fbc3-7c3f-577229f1ebf1'] = 'ee097a10-3324-fbc3-7c3f-577229f1ebf1'; //head
                    break;
            }
        }
        return $staff;
    }

    public function checkIfSameCluster($user_id, $team_list) {
        $AM_user = BeanFactory::retrieveBean('Users', $user_id);
        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($AM_user->team_set_id);

        foreach ($teams as $value){
            if($value->id == $team_list[$value->id]){
                return;
            }
        }
        throw new SugarApiExceptionInvalidParameter("Account Manager is not assigned to your cluster. Please check and try again.");
    }

    public function checkSuperUser($current_user) {
        $teamSetBean = new TeamSet();
        $teams = $teamSetBean->getTeams($current_user->team_set_id);

        foreach ($teams as $value){
            if($value->name =='Super User' || $current_user->is_admin){
                return false;
            }
        }

        return true;
    }
}