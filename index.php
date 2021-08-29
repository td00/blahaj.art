<?php

  $dir = 'images';
  // Initiate array which will contain the image name
  $imgs_arr = array();

  // Check if image directory exists
  if (file_exists($dir) && is_dir($dir) ) {
    
      // Get files from the directory
      $dir_arr = scandir($dir);
      $arr_files = array_diff($dir_arr, array('.','..') );

      foreach ($arr_files as $file) {
        //Get the file path
        $file_path = $dir."/".$file;
        // Get extension
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);

        if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG" || $ext=="jpeg" || $ext=="JPEG") {
          array_push($imgs_arr, $file);
        }
        
      }

      $count_img_index = count($imgs_arr) - 1;
      $random_img = $imgs_arr[rand( 0, $count_img_index )];

  }

?>
<html>
    <head>
        <title>Blåhaj</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A lot of cute Blåhaj's in the interwebz">
        <meta name="keywords" content="Blåhaj, blahaj, hai, images">
        <meta name="author" content="thies">

    </head>
    <body>
    <a href="/"><button>Refresh</button></a>     <a href="https://github.com/td00/blahaj.art"><button>Contribute</button></a><br />   <a>Every refresh a random Blåhaj.</a>
<img src="<?php echo $dir."/".$random_img ?>">

<br />
<br />
<a href="https://thiesmueller.de">Contact me</a>
<br />
<a href="https://github.com/td00/blahaj.art">GitHub Project</a>
    </body>
</html>
