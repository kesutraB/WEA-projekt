<?php
function add($info,$file, $tabulka, $db)
{
  
  if (isset($file["obr"])&&!empty($file["obr"]["name"])){
    if ($file["obr"]["error"]) {
      switch ($file["obr"]["error"]) {
          case 2:
              $status = "Soubor přehasuje max. velikost 1 MB.";
              return $status;
              exit;
             break;
      }
  }else{
    
    $typy = [
      ".jpg/.jpeg" => "image/jpeg",
      ".png" => "image/png",
      ".gif" => "image/gif"
  ];
  if(in_array($file["obr"]["type"], $typy)) {
    if ($file["obr"]["size"] <= 1000000) {
      move_uploaded_file(
      $file["obr"]["tmp_name"],
      "img/uploaded/" . $file["obr"]["name"] 
      );
      
      $stmt = $db->prepare("INSERT INTO movie_gallery(name,img) VALUES (?,?)");
      $stmt->bind_param("ss", $info["name"],$file["obr"]["name"]);
      $stmt->execute();
      $stmt->close();
      

      }else{
        $status = "Soubor presahuje velikost";
        return $status;
        exit;
      }
    
  }else{
    $status = "Spatný format(pripona)";
    return $status;
    exit;
   
  }

  }
  }
}
?>