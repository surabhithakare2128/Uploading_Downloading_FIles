<h1 align="center"><b><u>EDIT TASK</u></b></h1><br>

<form action="index.php?page=tasks&action=save&id=<?php  echo $data->id; ?>" method="post">

    <div>
        <label form="updatingTask"><b>Created Date:</b></label>
        <input type="date" class="form-control" id="duedate"  name="createddate" value="<?php echo $data->createddate;?>" disabled required >
    </div><br>

        <div>
            <label form="updatingTask"><b>Due Date:</b></label>
            <input type="date" class="form-control" id="duedate"  name="duedate" value="<?php echo $data->duedate;?>" disabled required >
        </div><br>

        <div>
            <label form="updatingTask"><b>Message:</b></label>
            <input type="text" class="form-control" id="message" name="message" value="<?php echo $data->message;?>" required >
        </div><br>

        <div>
            <label form="updatingTask"><b>Is Done?</b></label>
            <input type="number" class="form-control" id="isdone"  name="isdone" value="<?php echo $data->isdone;?>"  min="0"   max="1"  required >
        </div><br>

        <button type="submit" class="btn btn-primary">UPDATE TASK</button> <br><br>

</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary" form="form1" value="delete">DELETE TASK</button>
</form>