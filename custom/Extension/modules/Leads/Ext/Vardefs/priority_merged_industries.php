<?php
$dictionary['Lead']['fields']['priority_merged_industries'] = array(
    'required' => false,
    'name' => 'priority_merged_industries',
    'vname' => 'LBL_PRIORITY_MERGED_INDUSTRIES',
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
    'size' => '20',
    'options' => 'priority_merged_industries_list',
    'studio' => 'visible',
    'dependency' => false,
    'readonly' => true,
    'visibility_grid' => array(
        'trigger' => 'industry',
        'values' =>
            array (
                'Bank' =>
                    array (
                        0 => 'banking_and_finance',
                    ),
                'FinancialInstitution' =>
                    array (
                        0 => 'banking_and_finance',
                    ),
                'Remittance' =>
                    array (
                        0 => 'banking_and_finance',
                    ),
                'FinTech' =>
                    array (
                        0 => 'banking_and_finance',
                    ),
                'CallCenter' =>
                    array (
                        0 => 'bpo',
                    ),
                'OffshoreOutsourcing' =>
                    array (
                        0 => 'bpo',
                    ),
                'School' =>
                    array (
                        0 => 'education',
                    ),
                'Elearning' =>
                    array (
                        0 => 'education',
                    ),
                'FMCG' =>
                    array (
                        0 => 'fmcg',
                    ),
                'Pharmaceutical' =>
                    array (
                        0 => 'health_pharma',
                    ),
                'Hospital' =>
                    array (
                        0 => 'health_pharma',
                    ),
                'HMO' =>
                    array (
                        0 => 'health_pharma',
                    ),
                'FitnessAndWellness' =>
                    array (
                        0 => 'health_pharma',
                    ),
                'Insurance' =>
                    array (
                        0 => 'insurance',
                    ),
                'Internal' =>
                    array (
                        0 => 'Internal',
                    ),
                'ArchitecturePlanning' =>
                    array (
                        0 => 'others',
                    ),
                'Autodesk' =>
                    array (
                        0 => 'others',
                    ),
                'BrandsEventsPartnership' =>
                    array (
                        0 => 'others',
                    ),
                'Charity' =>
                    array (
                        0 => 'others',
                    ),
                'ComputerDevelopment' =>
                    array (
                        0 => 'others',
                    ),
                'ConstructionBusiness' =>
                    array (
                        0 => 'others',
                    ),
                'ConsultingBusinessManagement' =>
                    array (
                        0 => 'others',
                    ),
                'DigitalMarketing' =>
                    array (
                        0 => 'others',
                    ),
                'DigitalMediaAgency' =>
                    array (
                        0 => 'others',
                    ),
                'EnterpriseAndSolutionArchitecture' =>
                    array (
                        0 => 'others',
                    ),
                'Entertainment' =>
                    array (
                        0 => 'others',
                    ),
                'Equipment' =>
                    array (
                        0 => 'others',
                    ),
                'Foundation' =>
                    array (
                        0 => 'others',
                    ),
                'Government' =>
                    array (
                        0 => 'others',
                    ),
                'ManufacturingAndLogistics' =>
                    array (
                        0 => 'others',
                    ),
                'MiningCompany' =>
                    array (
                        0 => 'others',
                    ),
                'NewsMedia' =>
                    array (
                        0 => 'others',
                    ),
                'Others' =>
                    array (
                        0 => 'others',
                    ),
                'PartyAndEventsServices' =>
                    array (
                        0 => 'others',
                    ),
                'Printing' =>
                    array (
                        0 => 'others',
                    ),
                'professional_services' =>
                    array (
                        0 => 'others',
                    ),
                'PublicRelationsCommunications' =>
                    array (
                        0 => 'others',
                    ),
                'SafetyConsultantAndTrainings' =>
                    array (
                        0 => 'others',
                    ),
                'Salon' =>
                    array (
                        0 => 'others',
                    ),
                'Service' =>
                    array (
                        0 => 'others',
                    ),
                'ShippingServices' =>
                    array (
                        0 => 'others',
                    ),
                'SoftwareSolutions' =>
                    array (
                        0 => 'others',
                    ),
                'Solar' =>
                    array (
                        0 => 'others',
                    ),
                'TailoringServices' =>
                    array (
                        0 => 'others',
                    ),
                'telecommunications' =>
                    array (
                        0 => 'others',
                    ),
                'TicketSelling' =>
                    array (
                        0 => 'others',
                    ),
                'Tires' =>
                    array (
                        0 => 'others',
                    ),
                'trading' =>
                    array (
                        0 => 'others',
                    ),
                'Property and Real Estate' =>
                    array (
                        0 => 'property_and_real_estate',
                    ),
                'Petroleum' =>
                    array (
                        0 => 'retail',
                    ),
                'ElectronicsGadgetsTech' =>
                    array (
                        0 => 'retail',
                    ),
                'information_technology_services' =>
                    array (
                        0 => 'retail',
                    ),
                'malls' =>
                    array (
                        0 => 'property_and_real_estate',
                    ),
                'MobilePhone' =>
                    array (
                        0 => 'retail',
                    ),
                'OnlineRetail' =>
                    array (
                        0 => 'retail',
                    ),
                'Restaurant' =>
                    array (
                        0 => 'retail',
                    ),
                'Fashion' =>
                    array (
                        0 => 'retail',
                    ),
                'TechMobileApp' =>
                    array (
                        0 => 'retail',
                    ),
                'WholesaleAndRetail' =>
                    array (
                        0 => 'retail',
                    ),
                'airlines' =>
                    array (
                        0 => 'transpo_hospitality_travel',
                    ),
                'Hospitality' =>
                    array (
                        0 => 'transpo_hospitality_travel',
                    ),
                'Automotive' =>
                    array (
                        0 => 'transpo_hospitality_travel',
                    ),
                'Transportation' =>
                    array (
                        0 => 'transpo_hospitality_travel',
                    ),
                'OnlineTravelAgency' =>
                    array (
                        0 => 'transpo_hospitality_travel',
                    ),
                'TravelAndTours' =>
                    array (
                        0 => 'transpo_hospitality_travel',
                    ),
            ),
    ),
);
