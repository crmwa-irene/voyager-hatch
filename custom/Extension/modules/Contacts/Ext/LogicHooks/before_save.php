<?php
$hook_array['before_save'][] = array(
    '1',
    'Validates the record.',
    'custom/modules/Contacts/logichooks/beforeSaveValidations.php',
    'BeforeSaveValidationContact',
    'ValidateContactRecord',
);