<?php

    $targetfolder =""; //same directory with index.php
    //$targetfolder ="./my_pdf/";
    
    
    if(empty($errors)==true)
    {
        $filename =  basename( $_FILES['myfile']['name']) ;
        
         
         
        $file_ext   = explode('.',$filename);
    	$file_ext   = strtolower(end($file_ext));
    	
    	
    	$nama_foto_baru = "$filename.$file_ext";			//file name same with original
        //$nama_foto_baru = "1.$file_ext";                    //for rename
        
        
        //MUST use 'tmp_name'
        move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfolder.$nama_foto_baru);  //if filename is same wil be replace
        
        
        //Different 'tmp_name' AND 'name'
        echo "The file ".$filename. " is uploaded in folder ".$targetfolder ;
        echo "<br>";
        echo "The file ".$filename. " is uploaded folder".$targetfolder ;
    }
    else 
    {
        echo "Problem uploading file";
    }

?>