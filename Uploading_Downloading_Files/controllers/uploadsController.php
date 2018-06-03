<?php

    class uploadsController extends http\controller{


        public function uploadFile(){
            
            $upload= new upload();
            
            session_start();

            $upload->filename = $_POST['t'];

            $fnm = $_FILES["f"]["name"];

            $upload->name = $fnm;
            
            $dst = "./images/".$fnm;

            $imageData = file_get_contents($_FILES["f"]["tmp_name"]);
            $imageType = $_FILES["f"]["type"];

            $upload->fileBlob = $imageData;

            $fileType = $_FILES["f"]["type"];
            $fileSize = $_FILES["f"]["size"];

            $upload->type = $fileType;
            $upload->size = $fileSize;

            $upload->save();

            move_uploaded_file($_FILES["f"]["tmp_name"], $dst);
            header("Location: index.php?page=uploads&action=all");

        }
        public static function all()
        {

            session_start();

            $records = uploads::findAll();
            
            self::getTemplate('all_tasks', $records);

        }

        public static function show()
        {
            $upload = uploads::findAll();
            self::getTemplate('all_tasks', $upload);
        }

        public static function downloadFile(){
            if(isset($_GET['id']))
            {
                $id=intval($_GET['id']);
                
                $db = new PDO('mysql:host=sql2.njit.edu;dbname=st638', 'st638', 'adhere54');


                $query = 'SELECT id, filename, name, fileBlob, type, size FROM uploads WHERE id= ' . "$id";

                $results = $db->prepare($query);
                $results->execute();
                
                while ($row = $results->fetch()) {
                    $filename = $row['name'];
                    //print($filename);
                    $mimetype = $row['type'];
                    //print($mimetype);
                    $filedata = $row['fileBlob'];
                    //print($filedata);
                    header("Content-length: ".strlen($filedata));
                    header("Content-type: $mimetype");
                    header("Content-disposition: attachment; filename=$filename"); //disposition of download forces a download
                    
                    echo $filedata;
                }


            }

        }

   }   

?>