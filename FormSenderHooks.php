<?php

class FormSenderHooks
{


    // Ändert temporär die Admin-Email-Adresse auf den neuen Absender
    public function prepareFormData($arrPost, $arrForm, $arrFiles)
    {
        if($arrFiles->formsender != "")
        {
            $GLOBALS['TL_ADMIN_EMAIL_TMP'] = $GLOBALS['TL_CONFIG']['adminEmail'];
            $GLOBALS['TL_ADMIN_EMAIL'] = $arrFiles->formsender;
        }
    }

    // Setzt die Admin-Email-Adresse zurück auf das Original
    public function ProcessFormData($arrPost, $arrForm, $arrFiles)
    {
        if($arrFiles->formsender != "")
        {
            $GLOBALS['TL_ADMIN_EMAIL'] = $GLOBALS['TL_ADMIN_EMAIL_TMP'];
            $GLOBALS['TL_ADMIN_EMAIL_TMP'] = null;
        }
    }

}