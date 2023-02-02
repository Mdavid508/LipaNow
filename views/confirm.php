<?php
include 'includes/head.php';
include 'includes/navbar.php';

?>

    <!-- Confirmation Container -->
<div class="container-f mx-auto">
<h2>Ticket Checkout</h2>
    <div class="step">
          <p class="step-text">3</p>
    </div> 
    <div class="row d-flex justify-content-center mt-2">
            
                <Section class="text-center text-t"> 
                    <b>Authorise Payment</b> 
                </Section>
                <hr class="hr-line">
                <section class="text-center text-n">
                    <b>+25469798443 </b> will receive a Prompt. 
                    Please input the <b>M-Pesa Pin</b> to complete the transaction.
                </section>
                <div class="text-center">
                    <img src="../images/confirm 3D.png" alt="confirm image">
                </div>
                <section class="text-n text-center">
                    Ensure the M-Pesa number is correct so as to complete the transaction.
                    Click the <b>Proceed</b> button when ready
                </section>
                <hr class="hr-line">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <a href="checkout.php">
                            <button type="button" class="btn bg-danger">
                                Cancel
                            </button>
                        </a>
                        
                    </div>
                    <div class="col d-flex justify-content-center">
                        
                        <button type="button" class="btn btn-primary">
                            Proceed
                        </button>
                    </div>
                    </div>
            
    </div>
</div>
    
    

<?php
include 'includes/footer.php';    