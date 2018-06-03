<?php include 'header.php'; ?>

<h1><u>ALL ACCOUNTS</u></h1>

<?php

    print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<?php include 'footer.php'; ?>