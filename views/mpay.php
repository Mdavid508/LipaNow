<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

<!-- M-pesa Checkout Page -->
<div class="container-f mx-auto">
<h2>Ticket Checkout</h2>
    <div class="step">
          <p class="step-text">2</p>
    </div>
  <form action="" class="rounded-2 p-2 form-mpay">
    <Section class="text-t text-center mt-1">
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
        <input type="tel" name="mpesaNumber" id="mpesaNumber" class="form-control" onchange = "checkNumber()" placeholder="0769798443" maxlength="10">
        <section class="text-danger mt-1 text-center input-error" id = "mpesaError">Please Enter A Valid Mpesa Number</section>
        <section class="text-danger mt-1 text-center input-error" id = "mpesaConfirmError">Please Enter A Valid Mpesa Number before Proceeding</section>
      </div>
            
    </div>
    
  </form>
  <div class="row mt-2">
      <div class="col-6 d-flex justify-content-center">
        <!-- <button type="submit" class="btn btn-success">Confirm</button> -->
        <a href="checkout.php" role="button" class="btn btn-danger"> Previous </a>
        
      </div>
      <div class="col-6 d-flex justify-content-center">
        <!-- <button type="submit" class="btn btn-success">Confirm</button> -->
        <div type="submit" class="btn btn-success" id="mpesaConfirm" >Confirm</div>
      </div>
      
      </div>
</div>

<script src="../javascript/reg.js"></script>
<?php
include 'includes/footer.php';

?>