<h1 align="center"><u>REGISTER</u></h1>

<form action="index.php?page=accounts&action=register" method="post">
    <div>
        <label form="registration"><b>First Name:</b></label>
        <input type="text" class="form-control" id="fname"  name="fname" placeholder="Enter First name" required >
    </div><br>

    <div>
        <label form="registration"><b>Last Name:</b></label>
        <input type="text" class="form-control" id="lname"  name="lname" placeholder="Enter Last Name" required >
    </div><br>

    <div>
        <label form="registration"><b>Email Address:</b></label>
        <input type="email" class="form-control" id="ename"  name="email" placeholder="Enter Email Address" required >
    </div><br>

    <div>
        <label form="registration"><b>Phone Number:</b></label>
        <input type="number" class="form-control" id="phone"  name="phone" placeholder="Enter Phone Number" required >
    </div><br>

    <div>
        <label form="registration"><b>Birthday:</b></label>
        <input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Enter Last Name" required >
    </div><br>

    <div>
        <label form="registration"><b>Gender:</b></label>
        <input type="text" class="form-control" id="gender"  name="gender" placeholder="Enter Gender" required >
    </div><br>

    <div>
        <label form="registration"><b>Password:</b></label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Enter Password" minlength="6"
               maxlength="10" size="10" required >
    </div><br>

    <button type="submit" class="btn btn-primary">REGISTER</button>

    &emsp;&emsp;

    <button type="reset" class="btn btn-primary">RESET</button>

</form>