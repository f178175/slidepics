<?php
    //Create an object from the ZipArchive class.
    $zipArchive = new ZipArchive();
     
    //The full path to where we want to save the zip file.
    $zipFilePath = 'image.zip';
    $file_folder="images/";
    //Call the open function.
    $status = $zipArchive->open($zipFilePath,  ZipArchive::CREATE);
     
     
    //An array of files that we want to add to our zip archive.
    //You should list the full path to each file.
    $filesToAdd = array();
    $i=1;
    while (file_exists($file_folder."$i.jpg")) {
        array_push($filesToAdd,$file_folder."$i.jpg");
    	$i++;
    }     
    //Add our files to the archive by using the addFile function.
    foreach($filesToAdd as $fileToAdd){
        //Add the file in question using the addFile function.
        $zipArchive->addFile($fileToAdd);
    }
     
    //Finally, close the active archive.
    $zipArchive->close();
     
    //Get the basename of the zip file.
    $zipBaseName = basename($zipFilePath);
     
    //Set the Content-Type, Content-Disposition and Content-Length headers.
    header("Content-Type: application/zip");
    header("Content-Disposition: attachment; filename=$zipBaseName");
    header("Content-Length: " . filesize($zipFilePath));
     
    //Read the file data and exit the script.
    readfile($zipFilePath);
    unlink($zipFilePath);
    exit;
?>