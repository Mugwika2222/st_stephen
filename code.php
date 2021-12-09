<?php
    include'db_connect.php';
    if(isset($_POST['registerButton']))
    {
        //"nimefinywa";
        $name = $_POST['name'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $description =$_POST['description'];
        $duration =$_POST['duration'];
        $fee =$_POST['fee'];


        

        //Query to insert data to SQL DB
        $query ="INSERT INTO user(name,email,password,description,duration,fee)
                            VALUES('id','$name','$email','$password','$description','$duration','$fee')";
        
        //execute the quary
        $query_run =mysqli_query($conn,$query);

        //test the success of the quary
        if ($query_run)
        {
            echo "message successfully sent";
        }
        else
        {
            echo"message not sent please try  again later";
        }
    }

?>