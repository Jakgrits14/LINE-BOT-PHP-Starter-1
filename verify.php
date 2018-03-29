<?php
$access_token = 'fMcjIQwxtTaSpnukO+x2A9tWXzq5pYWL73lfItfkrYSd2G0+i04XbiHa7wdlBuOG3BwctdLUEIjge+Labpcohi+gb8YaHbJFuAx2Jc2XTajdUHOzg01TCZDko8TPrVZ6mBiV06JlmbYaWD2dsptItAdB04t89/1O/w1cDnyilFU=';
$url = "https://api.line.me/v2/bot/message/reply";
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
