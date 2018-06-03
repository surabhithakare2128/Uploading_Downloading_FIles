<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{

    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        session_start();
        $record = accounts::findOne($_SESSION['userID']);
        self::getTemplate('show_account', $record);
    }

    //to call the show function the url is index.php?page=accounts&action=all

    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    //this is to register an account i.e. insert a new account
    public static function register()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt
        self::getTemplate('register');
    }

    //this is the function to save the user the new user for registration
    public static function store()

    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            //$user->password = $_POST['password'];
            //this creates the password
            //this is a mistake you can fix...
            //Turn the set password function into a static method on a utility class.
            $user->password = $user->setPassword($_POST['password']);
            $user->save();

            //you may want to send the person to a
            // login page or create a session and log them in
            // and then send them to the task list page and a link to create tasks



            header("Location: index.php");

        } else {
            //You can make a template for errors called error.php
            // and load the template here with the error you want to show.
           // echo 'already registered';
            $error = 'already registered';
            self::getTemplate('error', $error);

        }

    }

    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);

        self::getTemplate('edit_account', $record);

    }
//this is used to save the update form data
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();


        header("Location: index.php?page=accounts&action=show");

    }

    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        session_destroy();
        header("Location: https://web.njit.edu/~st638/project/mvc/index.php");
    }

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {

        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            echo '<br><h1><u><b>USER NOT FOUND</b></u></h1>';
            echo '<a href="index.php"><font>CLICK HERE TO GO BACK TO LOGIN PAGE</font></a>';
        } else {

            if($user->checkPassword($_POST['password']) == TRUE) {

                echo 'login';
                echo '<br>';
                session_start();
                $_SESSION["userID"] = $user->id;

                //forward the user to the show all todos page
                print_r($_SESSION);
                echo '<br>';

                header("Location: index.php?page=tasks&action=all");
                //header("Location: index.php?page=after_login&action=all");
               // header("Location: index.php?page=after_login&action=show");
            } else {
                echo '<br><h1><u><b>INCORRECT PASSWORD</b></u></h1>';
                echo '<a href="index.php"><font><u>CLICK HERE TO GO BACK TO LOGIN PAGE</u></font></a>';
            }

        }




    }

    public static function logout(){
        session_start();
        unset($_SESSION['userID']);
        header("Location: https://web.njit.edu/~st638/project/mvc/index.php");
        session_destroy();

    }


    public static function all_1()
    {
        $records = accounts::findAll();
        self::getTemplate('demo', $records);
    }


/*
    public static function showpage()
    {
        echo 'hi';
        echo 'USER';
        header("Location: index.php?page=tasks&action=all");

    }
*/
}
