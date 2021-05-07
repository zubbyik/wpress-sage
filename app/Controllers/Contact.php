<?php 
namespace App\Controllers;
use Sober\Controller\Controller;


class Contact extends Controller {
    public static function showPost(){
        $query = new \WP_Query();

        return $query;
    }
}

?>