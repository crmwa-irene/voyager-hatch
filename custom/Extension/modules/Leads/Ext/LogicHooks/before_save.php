<?php
$hook_array['before_save'][] = array(
    '1',
    'Validates the record.',
    'custom/modules/Leads/logichooks/beforeSaveValidations.php',
    'BeforeSaveValidation',
    'ValidateRecord',
);