<?php include 'header.php'; ?>

<form action="index.php?page=accounts&action=login" method="POST">

<h1><a href="index.php?page=accounts&action=all">All Accounts</a></h1>

<h1><a href="index.php?page=tasks&action=all">All Tasks</a></h1>

<h1><a href="index.php?page=tasks&action=create">Create Tasks</a></h1>



<?php

    print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<?php include 'footer.php'; ?>