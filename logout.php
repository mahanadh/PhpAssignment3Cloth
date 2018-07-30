<?php
/**
 * Created by PhpStorm.
 * User: Mahan
 * Date: 7/30/2018
 * Time: 9:15 AM
 */

session_start();
session_unset();
session_destroy();
echo " Log out success " ;
header('Location: '. 'MainPage.html');