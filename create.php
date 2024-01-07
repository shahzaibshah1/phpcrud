<?php include "includes/header.php";
?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header text-center">
                    <h2 class="fw-bold">Insert Your Data</h2>
                </div>
                <div class="card-body">

                <form action="engine.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                        
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Phone No</label>
                        <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone No">
                        
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Your Address">
                        
                    </div>

                
    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
            </div>
        </div>
    </div>
</section>