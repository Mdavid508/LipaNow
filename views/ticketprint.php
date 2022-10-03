<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/style.css">
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</head>
<body onload = "autoClick();">

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-light p-2">
       
          
        <a class="navbar-brand" href="#">LipaNow
          <img src="../images/final logo.svg" alt="" width="64" height="64">
        </a>
      
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0 ">
            <li class="nav-item active">
               <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#register-modal"> Register</a>
                                 
            </li>
            
                
                            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                    </a>
                    <ul class="dropdown-menu ">
                    <li>
                        <!-- <div class=" btn btn-link" data-bs-toggle="modal" data-bs-target="#admin-login">Admin</div> -->
                    <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#admin-login" role="button" aria-pressed="true" > Admin</a>
                    </li>
                    <li><a  href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#company-login">Event Companies</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  
                  <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#contactus"> Contact Us</a>                  
               </li>    
            
            
            
        
            </ul>     
  
        </div>
            
      
    </nav>
  
    <!-- Download Ticket code -->
    <div class="ticket  bg-light mt-2 rounded-2" id="ticket">
       
       <div class="row">
           <div class="col-12 d-block m-1">
            <section>Company Name</section>
            <section>Event Name</section>
           </div>
        <div class="col-12 d-flex justify-content-center">
            <img src="../images/ticketpicture.png" alt="ticket" srcset="" class="img-fluid mx-auto d-block">
        </div>
            
           
       </div>
       
       <div class="row p-1">
           <div class="col-6 d-block ">
                <div class="text-center">
                    <section>
                        3rd March 2017
                    </section>
                    <section>
                        <b>Nairobi</b>
                    </section>
                </div>
           </div>
           <div class="col-6 d-block ">
                <div class="text-center">
                    <section>
                        Ticket Price
                    </section>
                    <section>
                        <b>Ksh 1200</b>
                    </section>
                </div>
           </div>
       </div>
    <hr class="m-1">

    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            <img src="../images/barcode2.svg" alt="barcode" class="img-fluid" style="height: 100px; width: 100px;" >
        </div>
            
    </div>
    </div>
    
    <div class="text-center m-2">
        <a href="#" id="btnDownload" role="button" class="btn btn-primary"> Download </a>
    </div>
    
    
    

    <script>
        
        function autoClick(){
                $("#btnDownload").click();
            }

        $(document).ready(function(){
            
            
            var element = $("#ticket");

            $("#btnDownload").on('click', function(){
                html2canvas(element, {
                    onrendered: function(canvas){
                        var imageData = canvas.toDataURL("image/png");
                        var newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
                        $("#btnDownload").attr("download", "ticket.png").attr("href", newData);

                    }
                });
            });

        });
    </script>


                        <!-- Contact us Modal -->

      <div class="modal fade" tabindex="-1" id="contactus" aria-hidden="true" aria-labelledby="contactus">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <div class="modal-title">
                Contact Us
              </div>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="close" ></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="contactemail" class="form-label">Email</label>
                  <input type="email" name="contactemail" id="contactemail" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="description" class="form-label">Type your message here</label>
                  <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
                </div>
              </form>
            </div>
              
            
            <div class="modal-footer">
              <button class="btn btn-primary">Submit</button>
              <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
         

        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>



    