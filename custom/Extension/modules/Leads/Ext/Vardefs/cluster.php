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
        'trigger' => 'industry',
        'values' =>
            array (
                'Internal' =>
                    array (
                        0 => '1',
                        1 => '2',
                        2 => '3',
                        3 => '4',
                        4 => '5',
                    ),
                'Bank' =>
                    array (
                        0 => '2',
                    ),
                'FinancialInstitution' =>
                    array (
                        0 => '2',
                    ),
                'Remittance' =>
                    array (
                        0 => '2',
                    ),
                'FinTech' =>
                    array (
                        0 => '2',
                    ),
                'CallCenter' =>
                    array (
                        0 => '1',
                    ),
                'OffshoreOutsourcing' =>
                    array (
                        0 => '1',
                    ),
                'School' =>
                    array (
                        0 => '3',
                    ),
                'Elearning' =>
                    array (
                        0 => '3',
                    ),
                'FMCG' =>
                    array (
                        0 => '3',
                    ),
                'Pharmaceutical' =>
                    array (
                        0 => '4',
                    ),
                'Hospital' =>
                    array (
                        0 => '4',
                    ),
                'HMO' =>
                    array (
                        0 => '4',
                    ),
                'FitnessAndWellness' =>
                    array (
                        0 => '4',
                    ),
                'Insurance' =>
                    array (
                        0 => '4',
                    ),
                'ArchitecturePlanning' =>
                    array (
                        0 => '5',
                    ),
                'Autodesk' =>
                    array (
                        0 => '5',
                    ),
                'BrandsEventsPartnership' =>
                    array (
                        0 => '5',
                    ),
                'Charity' =>
                    array (
                        0 => '5',
                    ),
                'ComputerDevelopment' =>
                    array (
                        0 => '5',
                    ),
                'ConstructionBusiness' =>
                    array (
                        0 => '5',
                    ),
                'ConsultingBusinessManagement' =>
                    array (
                        0 => '5',
                    ),
                'DigitalMarketing' =>
                    array (
                        0 => '5',
                    ),
                'DigitalMediaAgency' =>
                    array (
                        0 => '5',
                    ),
                'EnterpriseAndSolutionArchitecture' =>
                    array (
                        0 => '5',
                    ),
                'Entertainment' =>
                    array (
                        0 => '5',
                    ),
                'Equipment' =>
                    array (
                        0 => '5',
                    ),
                'Foundation' =>
                    array (
                        0 => '5',
                    ),
                'Government' =>
                    array (
                        0 => '5',
                    ),
                'ManufacturingAndLogistics' =>
                    array (
                        0 => '5',
                    ),
                'MiningCompany' =>
                    array (
                        0 => '5',
                    ),
                'NewsMedia' =>
                    array (
                        0 => '5',
                    ),
                'Others' =>
                    array (
                        0 => '1',
                        1 => '2',
                        2 => '3',
                        3 => '4',
                        4 => '5',
                    ),
                'PartyAndEventsServices' =>
                    array (
                        0 => '5',
                    ),
                'Printing' =>
                    array (
                        0 => '5',
                    ),
                'professional_services' =>
                    array (
                        0 => '5',
                    ),
                'PublicRelationsCommunications' =>
                    array (
                        0 => '5',
                    ),
                'SafetyConsultantAndTrainings' =>
                    array (
                        0 => '5',
                    ),
                'Salon' =>
                    array (
                        0 => '5',
                    ),
                'Service' =>
                    array (
                        0 => '5',
                    ),
                'ShippingServices' =>
                    array (
                        0 => '5',
                    ),
                'SoftwareSolutions' =>
                    array (
                        0 => '5',
                    ),
                'Solar' =>
                    array (
                        0 => '5',
                    ),
                'TailoringServices' =>
                    array (
                        0 => '5',
                    ),
                'telecommunications' =>
                    array (
                        0 => '5',
                    ),
                'TicketSelling' =>
                    array (
                        0 => '5',
                    ),
                'Tires' =>
                    array (
                        0 => '5',
                    ),
                'trading' =>
                    array (
                        0 => '5',
                    ),
                'Property and Real Estate' =>
                    array (
                        0 => '1',
                    ),
                'Petroleum' =>
                    array (
                        0 => '5',
                    ),
                'ElectronicsGadgetsTech' =>
                    array (
                        0 => '5',
                    ),
                'information_technology_services' =>
                    array (
                        0 => '5',
                    ),
                'malls' =>
                    array (
                        0 => '5',
                    ),
                'MobilePhone' =>
                    array (
                        0 => '5',
                    ),
                'OnlineRetail' =>
                    array (
                        0 => '5',
                    ),
                'Restaurant' =>
                    array (
                        0 => '5',
                    ),
                'Fashion' =>
                    array (
                        0 => '5',
                    ),
                'TechMobileApp' =>
                    array (
                        0 => '5',
                    ),
                'WholesaleAndRetail' =>
                    array (
                        0 => '5',
                    ),
                'airlines' =>
                    array (
                        0 => '2',
                    ),
                'Hospitality' =>
                    array (
                        0 => '2',
                    ),
                'Automotive' =>
                    array (
                        0 => '2',
                    ),
                'Transportation' =>
                    array (
                        0 => '2',
                    ),
                'OnlineTravelAgency' =>
                    array (
                        0 => '2',
                    ),
                'TravelAndTours' =>
                    array (
                        0 => '2',
                    ),
            ),
    )
);
