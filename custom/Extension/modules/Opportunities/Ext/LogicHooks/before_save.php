<?php
$hook_array['before_save'][] = array(
    '1',
    'Validates the record.',
    'custom/modules/Opportunities/logichooks/beforeSaveValidations.php',
    'BeforeSaveValidationOpp',
    'ValidateOppRecord',
);