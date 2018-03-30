<?php
function bot($method,$data=[]){
	$TOKEN = 'BOT TOKEN TAKEN FROM BOTFATHER';
    $url = "https://api.telegram.org/bot$TOKEN/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
} 
?>
