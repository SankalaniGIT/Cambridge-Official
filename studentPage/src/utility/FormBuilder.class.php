<?php

class FormBuilder
{

    public static function buildFormElements($form)
    {
        $FORM = get_class_vars(get_class($form));
        foreach ($FORM as $name => $value) {
            $form->name = $name;
        }
        return $form;
    }

}

?>