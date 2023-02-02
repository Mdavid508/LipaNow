<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

<div class="container-f mx-auto">
    <h2>Ticket Checkout</h2>
    <div class="step">
          <p class="step-text">1</p>
    </div> 
    
    <!-- <p>step 1</p> -->
   
<form action="" class="">
<section class="text-t text-center mt-2 mb-2">Tickets Selection</section>
            <img src="../images/TcketD.png" alt="eventimage" class="img-fluid mx-auto d-block" >

            <p class="text-center m-2" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus dicta veniam enim quisquam voluptas quo ratione! Mollitia, laudantium voluptatibus 
                dolorem deserunt veritatis voluptates itaque hic facilis, quos excepturi voluptas sint?</p>

        <section class="text-center text"> Select your Tickets</section>
            <table class="table-primary table-borderless">
                <thead>
                    <tr class="table-primary">
                        <th scope="col"> Price</th>
                        <th scope="col"> Quantity</th>
                        <th scope="col"> Total</th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text b-o">KSH</span>
                            <input type="number" name="ticketPrice" id="ticketPrice" class="form-control b-o p-0" value="" aria-label="Disabled input example" disabled readonly>
                        </div>
                        </td>
                    <td>
                        <input type="number" name="ticketsNumber" id="ticketsNumber" class="form-control" value="">
                        
                    </td>
                    <td><input type="number" name="totalAmount" id="totalAmount" class="form-control b-o p-2" value="" aria-label="Disabled input example" disabled readonly></td> <br>
                    
                    
                </tr>
                <div class="input-error" id="quantityError">Ticket quantity must be greater than 1</div>
            </table>
            <div class="text-center m-2">
                <!-- <button type="submit" class="btn btn-primary"> Proceed to Checkout  </button> -->
                
                <div role="submit" id= "checkoutbtn" class="btn btn-primary">Proceed to Checkout</div><br>
                <div class="input-error" id="checkoutError" >Enter the Number of Tickets required</div>
            </div>
</form>
</div>




<script src="../javascript/checkout.js"></script>
<?php
include 'includes/footer.php';

?>

