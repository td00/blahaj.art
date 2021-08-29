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

      // send necesarry header
      header('Content-Type: image/'.$ext);
           
      // dump image
      fpassthru(fopen($dir.'/'.$random_img, 'rb'));


  }