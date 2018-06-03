<?php include 'header.php'; ?>

<?php

    print_r($data);

?>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>

<?php include 'footer.php'; ?>
