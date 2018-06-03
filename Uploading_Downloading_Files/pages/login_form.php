<h1 style="font-family: cursive" align="center"><b><u>WELCOME TO MY WEBSITE!!!</u></b></h1>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1"><b>Email address</b></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1"><b>Password</b></label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">LOGIN</button>
</form>

<br><br>

<h1 align="center">NEW USER? <a href="index.php?page=accounts&action=register">CLICK HERE TO REGISTER</a></h1>

<p align="center">WANT TO VIEW ALL ACCOUNTS? <a href="index.php?page=accounts&action=all_1">CLICK HERE</a></p>
