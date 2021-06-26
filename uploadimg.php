<?php    

 # Upload Image . . .

 if(!empty($_FILES['image']['name'])){

    $fileTempPath  = $_FILES['image']['tmp_name'];
    $fileName      = $_FILES['image']['name'];
    // $fileSize      = $_FILES['uploadedFiles']['size'];
    // $filetype      = $_FILES['uploadedFiles']['type'];

 

    $fileExtension =   explode(".",$fileName);
    
    $newName = rand().time().'.'.strtolower($fileExtension[1]);

     $allowedExtensions = array('png','jpg');

     if(in_array($fileExtension[1],$allowedExtensions)){

      // code ....
      
      $uploaded_folder = "./uploads/";

      $desPath = $uploaded_folder.$newName;

     if(!move_uploaded_file($fileTempPath,$desPath)){
        $errorMessages['image'] = "Error in Uplading file";  
     }else{
         $image =  $newName;
         
                     // delete old image .... 
                     if(file_exists('./uploads/'.$oldImage)){
                        unlink('./uploads/'.$oldImage);
                    }
     }


     }else{

        $errorMessages['image'] =  'Not Allowed Extension';
     }
    }else{

        $errorMessages['image'] =  'please upload File';

    }

 
    ?>