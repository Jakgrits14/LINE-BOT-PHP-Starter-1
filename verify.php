<?php
$access_token = 'aRVe2ljy5XpffVHF+u5fjTmPOyYDDNca1/9ebxe+q8D5fJbn+kUgx/G6tYEn8p0h3BwctdLUEIjge+Labpcohi+gb8YaHbJFuAx2Jc2XTag3gXaIWSPgfD2Jk414h3blEjraXDTFvYmew4nWxCdIOQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result;
