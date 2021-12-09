<?php
include ('db_connect.php');
?> 
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
                                    <th>Password</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>

                                <?php
                                    // Getting all users from db
                                    $users = 'SELECT * from login';

                                    // Executing the query
                                    $query_run = mysqli_query($conn, $login);

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
                                            echo "<td>Edit</td>";
                                            echo "<td>Delete</td>";                                            
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