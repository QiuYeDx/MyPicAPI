<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,10);
//拼接图片地址
$picpath = "https://qiuyedx-blog.oss-cn-beijing.aliyuncs.com/bg-img/bg_img_normal_".$num.".webp";
//重定位到图片
die(header("Location: $picpath"));
?>