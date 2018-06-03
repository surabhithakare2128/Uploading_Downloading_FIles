
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"><font color=#87cefa about="">MYSITE&nbsp&nbsp</font></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" align="right">
        <div class="navbar-nav">
            
           <a class="nav-item nav-link " href="index.php?page=accounts&action=logout"><font color="#f5f5f5" align="right">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></a>
            
        </div>
    </div>
</nav>

<br><br>

<form action="index.php?page=uploads&action=uploadFile" method="post" enctype="multipart/form-data">
    Select file to upload:<input type="file" name="f" ></br>
    Name the File:<input type="text" name="t" ></br>
    <input type="submit" value="upload" name="submit" >
</form>
<br><br>
<?php

    if($data == false){
        echo '<h3 align="center"></><b>No Files Available to Download</b></u></h3>';
        echo '<h3 align="center"></><b>Upload a File to View Files Available to Downlaod</b></u></h3>';
    }else {

        echo '<h1 align="center"><b><u>Files Available to Download are as Follows:</u></b></h1><br>';
        print utility\htmlTable::genarateTableFromMultiArray($data);
        echo '<br><h5 align="center"><b></b></h5>';
    }

?>



