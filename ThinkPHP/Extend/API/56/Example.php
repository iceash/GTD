<?php
//example:获得56网首页热门的视频,Open.php封装了目前56所有可用的接口

require_once dirname(__FILE__).'/demo/Open.php';
$params = array(
    'vid'=>'OTYxMzkzNjk',

);
print_r(Open::Video_GetVideoInfo($params));
?>
