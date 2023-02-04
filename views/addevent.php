<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

   <!-- Event Registration -->
   <form action="" class="m-2 rounded-2 container-f mx-auto">
       <div class="text-center text">
         
         <h2>Event Details</h2>
       </div>
       <div class="row">
        <div class=" form-group col-lg-6 col-md-6 col-12">
          <label for="eventName">Event Name</label>
          <input type="text" name="eventName" id="eventName" class="form-control mt-2 mb-2" required>

        </div>
        <div class="form-group col-lg-6 col-md-6 col-12">
          <label for="eventDate"> Date of Event</label>
          <input type="date" name="eventDate" id="eventDate" class="form-control mt-2 mb-2" required>
        </div>
       </div>
       <div class="row">
         <div class="form-group col-lg-6 col-md-6 col-12">
           <label for="ticketPrice">Ticket Price</label>
           <input type="number" name="ticketPrice" id="ticketPrice" class="form-control mt-2 mb-2" required>
         </div>
         <div class="form-group col-lg-6 col-md-6 col-12">
          <label for="eventLocation">Location</label>
          <input type="text" name="eventLocation" id="eventLocation" class="form-control mt-2 mb-2" required>
         </div>
       </div>
       <div class="row">
       <div class="form-group col-12">
          <label for="eventDescription">Event Description</label>
          <textarea class="form-control mt-2 mb-2" id="eventDescription" rows="4" maxlength="200" placeholder="Describe your event in 200 words"></textarea>
         </div>
       </div>
       <div class="form-group">
         <Section><b>*Upload Image between 350px in width and 170px in height</b></Section>
         <label for="posterimage">Upload Poster</label> <br>
         <input type="file" name="posterimage" id="posterimage" class="form-control mt-2 mb-2">
       </div>
       <div class="row">
         <div class="col-12 d-flex justify-content-center">
           <button type="submit" class="btn btn-primary">
            Submit
           </button>
         </div>
       </div>
     </form>

<?php
include 'includes/footer.php';

?>