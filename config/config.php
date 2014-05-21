<?php

$GLOBALS['TL_HOOKS']['prepareFormData'][] = array('FormSenderHooks', 'prepareFormData');
$GLOBALS['TL_HOOKS']['processFormData'][] = array('FormSenderHooks', 'processFormData');