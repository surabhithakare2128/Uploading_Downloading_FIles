<?php include 'header.php'; ?>

<h1 style="font-family: 'cursive'" align="center"><b><u>ALL ACCOUNTS</u></b></h1>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="index.php"><font>GO BACK</font></a>

<br><br>

<?php
    print utility\htmlTable::genarateTableFromMultiArra($data);
?>

<?php include 'footer.php'; ?>