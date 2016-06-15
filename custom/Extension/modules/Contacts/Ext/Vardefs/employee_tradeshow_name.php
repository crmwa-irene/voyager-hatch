<?php
$dictionary['Contact']['fields']['employee_tradeshow_name'] =  array(
    'required' => true,
    'name' => 'employee_tradeshow_name',
    'vname' => 'LBL_EMPL_TRADESHOW_NAME',
    'type' => 'varchar',
    'massupdate' => true,
    'no_default' => false,
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
    'size' => '20',
    'studio' => 'visible',
    'dependency' => 'or(equal($lead_source,"employee"),equal($lead_source,"trade_show"),equal($lead_source,"sales_channel"),equal($lead_source,"pldt_alpha"),equal($lead_source,"pldt_sme"),equal($lead_source,"other"))',
);

 ?>