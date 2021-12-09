<?php
include ('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St_stephen</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body> 
    <section class="container bg-light">
        <div class="row">
            <div class="col-sm-12 col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h2 class="text-white">
                                Welcome to St_stephen School
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>password</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>

                                <?php
                                    // Getting all users from db
                                    $users = 'SELECT * from register';

                                    // Executing the query
                                    $query_run = mysqli_query($conn, $register);

                                    // Checking if result set is greater than 0
                                    if (mysqli_num_rows($query_run) > 0)
                                    {
                                        // Looping through the data
                                        while ($user = mysqli_fetch_assoc($query_run))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$user['id']."</td>"; //Getting the id
                                            echo "<td>".$user['name']."</td>"; // Getting the name
                                            echo "<td>".$user['email']."</td>"; // Getting the emails
                                            echo "<td>".$user['password']."</td>"; // Getting the password
                                            // echo "<td>".$user['description']."</td>"; // Getting the description
                                            // echo "<td>".$user['duration']."</td>"; // Getting the duration
                                            // echo "<td>".$user['fee']."</td>"; // Getting the fee
                                            echo "<button>Edit</button>";
                                            echo "<button>Delete</button>";                                            
                                            echo "</tr>";
                                        } 
                                    }
                                    else
                                    {
                                        echo "<tr>";
                                        echo "<td colspan='5'>No Data Availble</td>";
                                        echo "</tr>";
                                    }

                                ?>

                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>