<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$url = 'https://' . $_SERVER['HTTP_HOST'] . '/search/ting/' . $_POST['search_block_form'];
$params = array();
if (isset($_POST['size']) && !empty($_POST['size'])) { 
   $params[] = 'size=' . $_POST['size'];
}
if (isset($_POST['sort']) && !empty($_POST['sort'])){
   $params[] = 'sort=' . $_POST['sort'];
}
if (count($params) > 0) {
  $url = $url . '?' . implode($params, '&');
}  
  
redirect($url , 302);

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}



