<?php
$hook_array['before_save'][] = array(
    '1',
    'Validates the record.',
    'custom/modules/Accounts/logichooks/beforeSaveValidations.php',
    'BeforeSaveValidationAccount',
    'ValidateAccountRecord',
);