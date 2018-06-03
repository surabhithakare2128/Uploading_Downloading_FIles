
<h1 align="center"><b><u>CREATE TASK</u></b></h1><br>

<form action="index.php?page=tasks&action=create" method="post">

    <div>
        <label form="creatingTask"><b>Owner Email:</b></label>
        <input type="email" class="form-control" id="owneremail"  name="owneremail" placeholder="Enter Owner Email" required >
    </div><br>

    <div>
        <label form="creatingTask"><b>Created Date:</b></label>
        <input type="date" class="form-control" id="createdate"  name="duedate" placeholder="Enter Created Date" required >
    </div><br>

    <div>
        <label form="creatingTask"><b>Due Date:</b></label>
        <input type="date" class="form-control" id="duedate"  name="duedate" placeholder="Enter Due Date" required >
    </div><br>

    <div>
        <label form="creatingTask"><b>Message:</b></label>
        <input type="text" class="form-control" id="message" name="message" placeholder="Enter Message" required >
    </div><br>

    <div>
        <label form="creatingTask"><b>Is Done?</b></label>
        <input type="number" class="form-control" id="isdone"  name="isdone" placeholder="Is it Done? Enter 0 for Not done and 1 for Done" min="0" max="1" required >
    </div><br>

    <button type="submit" class="btn btn-primary">CREATE TASK</button>

    &emsp;&emsp;

    <button type="reset" class="btn btn-primary">RESET</button>

</form>
