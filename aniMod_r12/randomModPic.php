<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,10);
//拼接图片地址
// $picpath = "https://raw.githubusercontent.com/QiuYeDx/MyPicAPI/main/ani_r12/".$num.".jpeg";
// $picpath = "https://cdn.staticaly.com/gh/QiuYeDx/MyPicAPI@main/aniMod_r12/".$num.".jpeg";
$picpath = "https://cdn.jsdelivr.net/gh/QiuYeDx/MyPicAPI@main/aniMod_r12/".$num.".jpeg";
//重定位到图片
die(header("Location: $picpath"));
?>