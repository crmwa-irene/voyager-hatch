<?php
$viewdefs['Contacts'] = 
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
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'full_name',
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
                'link' => true,
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'title',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'phone_mobile',
                'label' => 'LBL_MOBILE_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
