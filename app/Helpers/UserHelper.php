<?php
//
function userSlug(string $name){
    //
    return str_replace(' ', '-', strtolower($name));
}