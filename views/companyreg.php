<?php
include 'includes/head.php';
include 'includes/navbar.php';

?>

     <!-- Company Registration Form -->
     <form action="" class="container-f mx-auto m-2 rounded" id="companyReg" method="$_POST">
        <div class="text-center text">
            
            <h2>Company Registration</h2>
        </div>
        <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-12">
                <label for="companyName">Company Name</label>
                <input type="text" name="companyName" id="companyName" class="form-control mt-2" required>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <label for="telephone">Telephone Number</label>
                    <input type="tel" onchange = "validatePhone()" name="telephone" id="telephone" class="form-control mt-2" required placeholder="0769798443" maxlength="10"><br>
                    <div class="input-error" id="telephoneError">Enter a valid Phone Number</div>
            </div>
            
        </div>
        <div class="row p-2">
            <div class="form-group col-lg-6 col-md-6 col-12">
                <label for="cemail">Company Email</label>
                <input type="email" name="cemail" id="cemail" class="form-control mt-2" required placeholder="companyname@gmail.com">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-12">
                <label for="cpassword">Password</label>
                <input type="password" name="cpassword" id="cpassword" class="form-control mt-2" required>
            </div>
            
        </div>
        <div class="form-group p-2 col-lg-6 col-md-6 col-12">
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

<script src="../javascript/reg.js"></script>    

<?php

include 'includes/footer.php';


?>