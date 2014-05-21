<?php

$GLOBALS["TL_DCA"]["tl_form"]["subpalettes"]["sendViaEmail"] = "formsender," . $GLOBALS["TL_DCA"]["tl_form"]["subpalettes"]["sendViaEmail"];

$GLOBALS['TL_DCA']['tl_form']['fields']['formsender'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form']['formsender'],
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'clr','rgxp'=>"email","mandatory"=>true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

// am Anfang ist die Admin-Email noch nicht gesetzt. Um einen Fehler zu vermeiden, wird zunächst das Vorhandensein geprüft
if($GLOBALS["TL_CONFIG"]['adminEmail'] != "")
{
    $GLOBALS['TL_DCA']['tl_form']['fields']['formsender']["default"] = $GLOBALS["TL_CONFIG"]['adminEmail'];
}