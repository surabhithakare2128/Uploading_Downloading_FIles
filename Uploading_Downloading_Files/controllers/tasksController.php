<?php


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $todo = todos::findOne($_REQUEST['id']);
        self::getTemplate('after_login_edit', $todo);
    }


    public static function showpage()
    {
        $todo = new todo();
        self::getTemplate('after_login', $todo);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        //$records = todos::findAll();

        session_start();

        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        //print_r($records);
        /*echo 'User ID is: ';
        echo $userID;
        session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */
        self::getTemplate('all_tasks', $records);





    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        //print_r($_POST);
        $todo= new todo();
        session_start();
        date_default_timezone_set("Asia/Bangkok");
        $todo->ownerid = $_SESSION['userID'];
        $todo->createddate = date("Y/m/d");
        $todo->owneremail = $_POST['owneremail'];
        $todo->message = $_POST['message'];
        $todo->isdone = $_POST['isdone'];
        $todo->duedate = $_POST['duedate'];
        $todo->save();
        header("Location: index.php?page=tasks&action=all");
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

    public static function save()
    {
        /*session_start();
        */
        $record = new todo();

        $record = todos::findOne($_REQUEST['id']);
        $record->owneremail = $_POST['owneremail'];
        $record->ownerid = $_POST['ownerid'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->message = $_POST['message'];
        $record->isdone = $_POST['isdone'];
        $record->save();
        header("Location: index.php?page=tasks&action=all");
    }


    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        //print_r($_POST);
        header("Location: index.php?page=tasks&action=all");
    }


}