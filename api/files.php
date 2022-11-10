<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Origin, X-Requested-With');
header('Access-Control-Allow-Methods: POST, GET');
header('Content-Type: text/plain; charset=UTF-8');

putenv('LANG=C.UTF-8');

if ($_POST['path'] == null) {
  $dirs = array(
    array(
      'name' => 'contents',
      'display' => 'C',
      'dir' => './examples/c'
    ),
    array(
      'name' => 'contents',
      'display' => 'Java',
      'dir' => './examples/java'
    ),
    array(
      'name' => 'contents',
      'display' => 'Haskell',
      'dir' => './examples/haskell'
    )
  );

  function getFiles($arr) {
    $arr['files'] = glob($arr['dir'] . '/*');
    return $arr;
  }

  $files = array_map('getFiles', $dirs);
  $json = json_encode($files);
  echo $json;
  
} else {
  readfile($_POST['path']);
}

?>
