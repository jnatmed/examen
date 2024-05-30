<?php 

function get_params($key){
    return $_POST[$key] ?? $_SERVER[$key] ?? null;
}   