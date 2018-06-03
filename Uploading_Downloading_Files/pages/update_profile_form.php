<h1><u>Email:</u> <?php echo $data->email; ?></h1>
<h1><u>First Name:</u> <?php echo $data->fname; ?></h1>
<h1><u>Last Name:</u> <?php echo $data->lname; ?></h1>


<?php
print(utility\htmlTable::generateTableFromOneRecord($data));
?>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="index.php?page=tasks&action=all"><b><font>CLICK HERE TO GO BACK TO HOMEPAGE</font></b></a>

<hr>

<h1 align="center"><b><u>UPDATE YOUR PROFILE</u></b></h1><br>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    <div>
        <label form="updatingProfile"><b>First Name:</b></label>
        <input type="text" class="form-control" id="fname"  name="fname" value="<?php echo $data->fname; ?>" required >
    </div><br>

    <div>
        <label form="updatingProfile"><b>Last Name:</b></label>
        <input type="text" class="form-control" id="lname"  name="lname" value="<?php echo $data->lname; ?>" required >
    </div><br>

    <div>
        <input type="hidden" class="form-control" id="email"  name="email" value="<?php echo $data->email; ?>" required >
    </div>

    <div>
        <label form="updatingProfile"><b>Phone Number</b></label>
        <input type="number" class="form-control" id="phone"  name="phone" value="<?php echo $data->phone; ?>" required >
    </div><br>

    <div>
        <label form="updatingProfile"><b>Birthday:</b></label>
        <input type="date" class="form-control" id="birthday"  name="birthday" value="<?php echo $data->birthday; ?>" required >
    </div><br>

    <div>
        <label form="updatingProfile"><b>Gender:</b></label>
        <input type="text" class="form-control" id="gender"  name="gender" value="<?php echo $data->gender; ?>" required >
    </div><br>

    <button type="submit" class="btn btn-primary">UPDATE PROFILE</button> <br><br>

</form>

<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary" form="form1" form="form1" value="delete">DELETE PROFILE</button>
</form>
