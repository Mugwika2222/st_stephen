<?php
    include'db_connect.php';
    if(isset($_POST['registerButton']))
    {
        $name = $_POST['name'];
        $email =$_POST['email'];
        $password = $_POST['password'];
        $course = $_POST['course'];
        // $description =$_POST['description'];
        // $duration =$_POST['duration'];
        // $fee =$_POST['fee'];

        

        //Query to insert data to SQL DB
        $query ="INSERT INTO register(name,email,password,course_id)
                            VALUES('$name','$email','$password','$course')";
        
        //execute the quary
        $query_run =mysqli_query($conn,$query);

        //test the success of the quary
        if ($query_run)
        {
            echo "message successfully sent";
            header('Location: all_register.php');
        }
        else
        {
            echo"message not sent please try  again later";
            header('Location: all_register.php');
        }
    }

?>