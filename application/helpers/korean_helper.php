<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo "in korean-helper ??"
if ( ! function_exists('kdate')){
    function kdate($stamp){
        return date('o년 n월 j일, G시 i분 s초', $stamp);
    }
}