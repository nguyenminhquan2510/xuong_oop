<?php 

const PATH_ASSET =__DIR__.'/assets/';
if (!function_exists('show_upload')) {
    function show_upload($path) {
        return $_ENV['BASE_URL'].'assets/' . $path;
    }
}
if (!function_exists('asset')) {
    function asset($path) {
        return $_ENV['BASE_URL'] . $path;
    }
}
if (!function_exists('client_style')) {
    function client_style($path) {
        return $_ENV['BASE_URL'].'assets/client/quanticalabs.com/Pressroom/Template/' . $path;
    }
}
if (!function_exists('client_js')) {
    function client_js($path) {
        return $_ENV['BASE_URL'].'assets/client/quanticalabs.com/Pressroom/Template/' . $path;
    }
}

if (!function_exists('url')) {
    function url($uri = null) {
        return $_ENV['BASE_URL'] . $uri;
    }
}
if(!function_exists('id_logged')){ //check da dang nhap
    function is_logged() {
        return  isset($_SESSION['user']);
    }
}
if(!function_exists('id_admin')){// check admin
    function is_admin() {
        return  isset($_SESSION['user']) && $_SESSION['user']['type']=='admin';
    }
}
if(!function_exists('avoid_login')){//check bo qua login khi da dang nhap
    function avoid_login() {
        if(is_logged()){
            if( $_SESSION['user']['type']=='admin'){
                header('Location:'.url('admin/'));
                exit;
            }else{
                header('Location:'.url('client/'));
                exit;
            }
        }
    }
}