<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'account_name',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              2 => 
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_LIST_SALES_STAGE',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'probability',
                'label' => 'LBL_PROBABILITY',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'next_step',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              7 => 
              array (
                'name' => 'date_closed',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'commit_stage',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'opportunity_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
                'sortable' => true,
              ),
              13 => 
              array (
                'name' => 'lead_source',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'team_name',
                'type' => 'teamset',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
