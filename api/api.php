<?php
require("webcui_lib.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Origin, X-Requested-With');
header('Access-Control-Allow-Methods: POST, GET');
header('Content-Type: text/plain; charset=UTF-8');

// Change depending on the locale of your server
putenv("LANG=C.UTF-8");
setlocale(LC_CTYPE, "C.UTF-8");

$cmd = $_POST['command'];
$cmd = ltrim($cmd);
$cmdary = explode(' ', $cmd);

$cmdlist = ['ls', 'cat'];

if(in_array($cmdary[0], $cmdlist)){
    echo "<font color=\"red\">&gt; " . $cmd . "</font><br>"; //コマンドを色付きで表示
    exec($cmd, $output); //実行
    //表示
    printOutput($output);
    echo '<br>';
}
else{
    echo "Invalid command<br>";
}

?>
