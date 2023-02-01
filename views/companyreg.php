<?php
include 'include/head.php';
include 'include/navbar.php';
?>

     <!-- Company Registration Form -->
     <form action="" class="bg-light m-2 rounded" method="$_POST">
        <div class="text-center text">
            <section><b>Company Registration</b></section>
        </div>
        <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-12">
                <label for="companyName">Company Name</label>
                <input type="text" name="companyName" id="companyName" class="form-control mt-2" required>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="telephone">Telephone Number</label>
                    <input type="tel" name="telephone" id="telephone" class="form-control mt-2" required>
            </div>
            
        </div>
        <div class="row p-2">
            <div class="form-group col-lg-6 col-md-6">
                <label for="cemail">Company Email</label>
                <input type="email" name="cemail" id="cemail" class="form-control mt-2" required>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-12">
                <label for="cpassword">Password</label>
                <input type="password" name="cpassword" id="cpassword" class="form-control mt-2" required>
            </div>
            
        </div>
        <div class="form-group p-2">
            <label for="rcpassword">Repeat Password</label>
            <input type="password" name="rcpassword" id="rcpassword" class="form-control mt-2" required>
        </div>
        <div class="row p-2">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-success">
                    Register
                </button>
            </div>
            
        </div>
    </form>

<?php
include 'include/footer.php';

?>