<?php
$dictionary['Lead']['fields']['crm_group'] = array(
    'required' => true,
    'name' => 'crm_group',
    'vname' => 'LBL_CRM_GROUP',
    'type' => 'enum',
    'massupdate' => false,
    'default' => '',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '30',
    'options' => 'crm_group_list',
    'studio' => 'visible',
    'dependency' => false,
    'readonly' => false,
);
