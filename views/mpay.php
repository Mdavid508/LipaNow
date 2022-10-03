<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

  <!-- M-pesa Checkout Page -->
  <form action="" class=" mt-2  rounded-2 p-2 form-mpay">
      <Section class="text-t text-center mt-2">
        M-Pesa Checkout
    </Section>
    <!-- center the image -->
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <img src="../images/M-pesa.png" alt="M-Pesa Logo"> 
      </div>
    </div>
      <div class="row">
        <div class="form-group col-12">
          <label for="totalAmount" class="form-label">Total Amount </label>
          <input type="number" name="totalAmount" id="totalAmount" value="1200" class="form-control b-c" aria-label="Disabled input example" disabled>
        </div>
        <div class="form-group col-12">
          <label for="mpesaNumber" class="form-label">Enter the M-Pesa Number</label>
          <input type="tel" name="mpesaNumber" id="mpesaNumber" class="form-control">
        </div>

        <div class="col-12 d-flex justify-content-center m-2">
          <!-- <button type="submit" class="btn btn-success">Confirm</button> -->
          <a href="confirm.php" role="button" class="btn btn-success"> Confirm </a>
        </div>
      </div>
    </form>

<?php
include 'includes/footer.php';

?>