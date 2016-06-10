<?php
$dictionary['Lead']['fields']['cluster'] = array(
    'required' => false,
    'name' => 'cluster',
    'vname' => 'LBL_CLUSTER',
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
    'options' => 'lead_cluster_list',
    'studio' => 'visible',
    'dependency' => false,
    'readonly' => true,
    'visibility_grid' => array (
        'trigger' => 'priority_merged_industries',
        'values' =>
            array (
                '' =>
                    array (
                    ),
                'transpo_hospitality_travel' =>
                    array (
                        0 => '2',
                    ),
                'fmcg' =>
                    array (
                        0 => '3',
                    ),
                'education' =>
                    array (
                        0 => '3',
                    ),
                'property_and_real_estate' =>
                    array (
                        0 => '1',
                    ),
                'bpo' =>
                    array (
                        0 => '1',
                    ),
                'health_pharma' =>
                    array (
                        0 => '4',
                    ),
                'retail' =>
                    array (
                        0 => '5',
                    ),
                'banking_and_finance' =>
                    array (
                        0 => '2',
                    ),
                'insurance' =>
                    array (
                        0 => '4',
                    ),
                'Internal' =>
                    array (
                        0 => '',
                        1 => '1',
                        2 => '2',
                        3 => '3',
                        4 => '4',
                        5 => '5',
                    ),
                'others' =>
                    array (
                        0 => '5',
                    ),
            ),
    )
);
