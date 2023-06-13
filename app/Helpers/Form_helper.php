<?php

function display_error($validation, $field)
{
    if ($validation->hasError($field)) {
        return $validation->geterror($field);
    } else {
        return false;
    }
}
