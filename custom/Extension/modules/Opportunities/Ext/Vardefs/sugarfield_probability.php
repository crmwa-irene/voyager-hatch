<?php
 // created: 2016-05-30 00:57:34
$dictionary['Opportunity']['fields']['probability']['massupdate']=false;
$dictionary['Opportunity']['fields']['probability']['comments']='The probability of closure';
$dictionary['Opportunity']['fields']['probability']['importable']='false';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['probability']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['probability']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['probability']['calculated']='1';
$dictionary['Opportunity']['fields']['probability']['formula']='getDropdownValue("custom_probability_dom",$sales_stage)';
$dictionary['Opportunity']['fields']['probability']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['probability']['min']=0;
$dictionary['Opportunity']['fields']['probability']['max']=100;
$dictionary['Opportunity']['fields']['probability']['disable_num_format']='';

 ?>