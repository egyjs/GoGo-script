<?php
/**
 * Created by PhpStorm.
 * User: youss
 * Date: 12/03/2018
 * Time: 09:25 م
 */


// helpers functions

function gettitle($info){
    if(isset($info)):
        return $info->name ;
    else:
        return  config('app.name');
    endif;
}