<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if( isset($_GET) && $_GET['get']){
  $data = false;
  
  switch($_GET['get']){
    case 'list':
      $data = getList($_GET['count']);
      break;
    case 'single':
      $data = getSingleCard(); // get view page
      break;
  };
  
  if($data)
    print json_encode($data);
  else
    return false;
  
} else {
  throw new Exception('Excuse me ?!');
}
  
  
function getSingleCard(){
  return [
    'id' => rand(99,99999),
    'title' => '#'.rand(1,99).' The wolf of wall street',
    'image_uri' => 'poster.jpg',
    'release_date' => 'Nov 201' . rand(1,7),
    'total_subtitles' => rand(10,99),
    'total_languages' => rand(2,30)
  ];
}

function getList($count){
  $d = [];
  
  for( $i = 0; $i < $count; $i++ ) {
    $d[] = getSingleCard();
  }
  
  return $d;
}