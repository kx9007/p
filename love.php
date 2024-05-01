<?php
header('Content-Type:text/html;charset=utf-8');
// 定义一个函数getIP()
// function getIP()
// {
//     global $ip;
//     if (getenv("HTTP_CLIENT_IP"))
//         $ip = getenv("HTTP_CLIENT_IP");
//     else if (getenv("HTTP_X_FORWARDED_FOR"))
//         $ip = getenv("HTTP_X_FORWARDED_FOR");
//     else if (getenv("REMOTE_ADDR"))
//         $ip = getenv("REMOTE_ADDR");
//     else $ip = "Unknow";
//     return $ip;
// }
// function getcity($IP)
// {
//     $back_json=file_get_contents("http://whois.pconline.com.cn/ipJson.jsp?ip=".$IP."&json=true");
//     $back_json=trim(mb_convert_encoding($back_json, "UTF-8", "GBK"));
//     $addr_rt=json_decode($back_json,1);
//     return $addr_rt['pro'].$addr_rt['city'].$addr_rt['region'];
// }
$dir='config';
$id='love';
session_start();
if(isset($_SESSION['liked'.$id])){
    // 这里应该判断session中是否有指定的键，而不是只判断session状态
    // 你可以使用isset()函数来检查$_SESSION变量中是否有指定的键
    // 例如，你可以用一个键来存储用户是否点过赞的状态，如$_SESSION['liked']
    // 然后在这里判断isset($_SESSION['liked'])
    echo '你已经点过赞了，谢谢你！';
}else{
    $number=file_get_contents("{$dir}/love.txt");
    $new=$number+1;
    file_put_contents("{$dir}/love.txt","{$new}");
    echo "点赞成功";
    $_SESSION['liked'.$id] = true;
    // 这里应该设置session中的指定的键，以便下次判断用户是否点过赞
    // 例如，你可以设置$_SESSION['liked'] = true;
}
?>