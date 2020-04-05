<?php
// echo str_repeat ( " " , 1024 ) ;
// for ( $i = 0 ; $i < 10 ; $i ++ ) {
//     echo $i ;
//     ob_flush ( ) ;
//     flush ( ) ;
//     sleep ( 1 ) ;
// }
?>
<?php
 header("Content-type: text/html; charset=utf-8");
 $command2 = escapeshellcmd('11.py');
 $output2 = shell_exec($command2);
 echo $output2;
?>

<?php
$params = "value"; #傳遞給python指令碼的入口引數
$path="python 11.py "; //需要注意的是：末尾要加一個空格
passthru($path.$params);//等同於命令`python python.py 引數`，並接收列印出來的資訊
?>