<?php
/*
* Author   = kakatoji
* Tools    = https://github.com/kakatoji/Md5decode
* Facebook = https://www.facebook.com/kakatoji77
* Telegram = @kakatoji
* Youtube  = https://youtube.com/c/kakatoji
*/
system('clear');
set_time_limit(0);
ban();
$pass=file("pass.txt");
foreach($pass as $pwd){
    $start=time();
    $bs=decrypt(trim($pwd),"");
    $end=time();
    if($bs !== null){
    echo "\e[1;32m".$bs."\e[0m";
    echo " \e[1;37mkecepatan \e[1;31m".$end - $start." \e[1;37mdetik\n";
    }else{
        echo "\e[1;31mGagal decode,kurang akurat";
        echo " \e[1;37mkecepatan \e[1;31m".$end - $start." \e[1;37mdetik\n";
    }

}
function decrypt($pass , $tmp){
    $array=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','v','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
    $maxNum=3;
    if(strlen($tmp) > $maxNum){
        return;
    }
    for($i=0;$i < count($array);$i++){
        $as=$tmp.$array[$i];
        if(md5($as) == $pass){
            return $as;
        }
        $res=decrypt($pass,$as);
        if(strlen($res) > 0){
            return $res;
        }
    }
}
function ban(){
    $x="\e[1;37m".str_repeat('~',43)."\n";
    $a='
_  _ ___      ___  ____ ____ ____ ___  ____
|\/| |  \     |  \ |___ |    |  | |  \ |___
|  | |__/5    |__/ |___ |___ |__| |__/ |___
    ';
    echo $x;
    echo "\e[1;36m".$a."\e[0m\n";
    echo "\e[1;32mAuthor: \e[1;35mkakatoji\n";
    echo $x;
}
