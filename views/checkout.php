<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>


<form action="" class="mt-3">
            <img src="../images/Tcket D.png" alt="eventimage" class="img-fluid mx-auto d-block" >

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
                            <input type="number" name="ticketPrice" id="ticketPrice" class="form-control b-o p-0" value="1200" aria-label="Disabled input example" disabled readonly>
                        </div>
                        </td>
                    <td><input type="number" name="ticketsNumber" id="ticketsNumber" class="form-control"></td>
                    <td><input type="number" name="totalAmount" id="totalAmount" class="form-control b-o p-2" value="2400" aria-label="Disabled input example" disabled readonly></td>
                    
                </tr>
            </table>
            <div class="text-center m-2">
                <!-- <button type="submit" class="btn btn-primary"> Proceed to Checkout  </button> -->
                <a href="mpay.html" role="button" class="btn btn-primary"> Proceed to Checkout</a>
            </div>
        </form>


<?php
include 'includes/footer.php';

?>