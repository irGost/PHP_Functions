<?php
function iLog($data=[],$urgent=0,$type='default'){
  //date_default_timezone_set('Asia/Tehran'); // Set TimeZone First :))
  $data['DateTime']=date('D, d-m-Y-H:i:s');
  $data['REQUEST_URI']='https://website.ext'.$_SERVER["REQUEST_URI"];
  //$data['User_IP']=ip(); // Needs ip() to be defined
  if($type == 'default'){
    file_put_contents('logs/loggerbook.log', json_encode($data).",\n", FILE_APPEND);
  } else   if($type == 'Stats'){
    file_put_contents('logs/stats.log', json_encode($data).",\n", FILE_APPEND);
  }
  if($urgent != 0){ // Notify manager
    
  }
}
function printLog($logfile='loggerbook'){
  return '["'.$logfile.'",'.substr(file_get_contents ('logs/'.$logfile.'.log'), 0, -2).']';
}
?>
