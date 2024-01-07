<?php include "includes/header.php";
      include "connection.php";
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="fw-bold">PHP CRUD APPLICATION
                            <div class="text-end">
                                <a href="create.php" class="btn btn-info">Add Data</a>
                            </div>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM users";
                                    $query_run = mysqli_query($con,$query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?> 
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                <td><?php echo $row['phone'] ?></td>
                                                <td><?php echo $row['address'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                                                    <a class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php 
                                        }
                                    } else {
                                        echo "No Data Found";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
