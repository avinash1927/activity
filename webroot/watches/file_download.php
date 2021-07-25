<?php
if (($open = fopen("Book1.csv", "r")) !== FALSE) 
  {
  	$text = '';
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $id = $data[0];
      $fileUrl = str_replace(" ","",trim($data[1]," "));
      $file_name = basename($fileUrl);
      $prevUrl = str_replace(" ","",trim($data[2]," "));
      $prev_name = basename($prevUrl);
      file_put_contents( $file_name,file_get_contents($fileUrl));
      file_put_contents( $prev_name,file_get_contents($prevUrl));
      $text .= "(1,'".$prev_name."','".$file_name."'),";
    }
    echo $text;
    fclose($open);
  }
?>