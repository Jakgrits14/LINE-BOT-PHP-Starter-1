<?php
$access_token = 'XKWmuwJDepwPa8/zCNYTj2tNzLGFLpHpVTropgUv94AOMP9s6I7Uo4dL8L+96jMO3BwctdLUEIjge+Labpcohi+gb8YaHbJFuAx2Jc2XTahUmNjDbf+9VblQs5p/XwLocml0HS2Fj8MFCA9FN8kfgAdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result;
