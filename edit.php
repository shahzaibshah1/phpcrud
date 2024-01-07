<?php include "includes/header.php";
      include "connection.php";
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header text-center">
                    <h2 class="fw-bold">Update Your Data</h2>
                </div>
                <div class="card-body">

                <?php 
                
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM users WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $row)
                        {
                            ?>

                <form action="engine.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">  
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Your Name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" name="email"  value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Your Email">
                        
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Phone No</label>
                        <input type="number" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Your Phone No">
                        
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Enter Your Address">
                        
                    </div>

                
    
                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                    </form>


                   <?php
                        }
                    }
                    else
                    {
                        echo "No Data Found";
                    }
                }
                else
                {
                    echo "Something Went Wrong";
                }

                ?>

                </div>
            </div>
            </div>
        </div>
    </div>
</section>