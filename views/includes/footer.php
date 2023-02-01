    <!-- Admin login -->
<div class="modal fade " id="admin-login" tabindex="-1" 
        aria-labelledby="admin-loginLabel" aria-hidden="true"> 
            <div class="modal-dialog ">
                <div class="modal-content bg-light">
                    <div class="modal-header" >
                        <div class="modal-title"><b>Admin Login</b></div>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username">
                        <label for="adminPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="adminPassword" id="adminPassword">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Login Modal -->
        <div class="modal fade " id="company-login" tabindex="-1" 
        aria-labelledby="company-loginLabel" aria-hidden="true"> 
            <div class="modal-dialog ">
                <div class="modal-content bg-light">
                    <div class="modal-header" >
                        <div class="modal-title"><b>Company Login</b></div>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username">
                        <label for="adminPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="adminPassword" id="adminPassword">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

            <!-- Registration Modal -->
      <div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="register-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row d-flex justify-content-center">
                    <div class="modal-title">
                        <section><b>Register As</b></section>                  
                    </div>
                </div>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col d-flex justify-content-around">
                        <a href="companyreg.php" class="btn btn-primary" role="button" aria-pressed="true">Company</a>
                        <a href="company.html" class="btn btn-primary" role="button" aria-pressed="true">Admin</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
        </div>
      </div>

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