<?php
require_once('modules/Teams/TeamSet.php');
class BeforeSaveValidation
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * @throws SugarApiExceptionInvalidParameter
     */
    public function ValidateRecord($bean, $event, $arguments)
    {
        $this->bean = $bean;

        $not_admin = $this->checkSuperUser();
//        if($is_admin && ($this->bean->fetched_row['assigned_user_id'] == $this->bean->assigned_user_id)){
        if(!$this->bean->fetched_row && $not_admin){
            $this->autoCompleteFields();
        }
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
        switch ($this->bean->priority_merged_industries){
            case 'banking_and_finance':
            case 'transpo_hospitality_travel':
                $this->bean->assigned_user_id = '72db51c9-72c0-e59a-274e-575a2409e5ab';
                $this->bean->assigned_user_name = 'Aldous Brigino';
                break;
            case 'bpo':
            case 'property_and_real_estate':
                $this->bean->assigned_user_id = 'b7176148-2862-469d-c321-575a2d9fa367';
                $this->bean->assigned_user_name = 'Sherill';
                break;
            case 'education':
            case 'fmcg':
                $this->bean->assigned_user_id = '4486c0cb-aa44-b9bd-706b-575a25b608f2';
                $this->bean->assigned_user_name = 'Rhea Matute';
                break;
            case 'health_pharma':
            case 'insurance':
                $this->bean->assigned_user_id = '92e29d0b-cdf7-ae43-bed9-575a242d0d90';
                $this->bean->assigned_user_name = 'Alie Ruelos';
                break;
            case 'others':
            case 'retail':
                $this->bean->assigned_user_id = 'dff03ee4-ec46-0533-0818-575a25db71ac';
                $this->bean->assigned_user_name = 'Kamyll Blanco';
                break;
        }
    }

}