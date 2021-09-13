
<?php include_once("header.php"); ?>
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>New user Regstration</h4>
              <!-- <h2>let’s get in touch</h2> -->
            </div>
          </div>
        </div>
      </div>
    </div>


  

    
    <div class="send-message">
      <div class="container">
        <div class="row">
    
          <div class="col-md-2"></div>
         
          <div class="col-md-8">
            <div class="section-heading">
                <h2>New user Regstration</h2>
              </div> 
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control"  placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control"  placeholder="Father's Name" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control"  placeholder="Address" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control"  placeholder="Mobile No" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control"  placeholder="Alternate Mobile No" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control"  placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>Select Pick Up Point</lable>
                        <select class="form-control" id="sel1">
                         
                            <option>Airport</option>
                            <option>Railway Station</option>
                      
                          </select>
                    </fieldset>
                  </div>
              
<br>
<br><br><br>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>Pickup Date</lable>
                      <input  type="date" class="form-control"  placeholder="Pickup Date" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>Pickup Time</lable>
                      <input  type="time" class="form-control"  placeholder="Pickup Date" required="">
                    </fieldset>
                  </div>
               

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>Train/Flight No</lable>
                      <input type="text" class="form-control"  placeholder="Train/Flight No" required="">
                    </fieldset>
                  </div>

                  
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>Arrivig From</lable>
                      <input type="text" class="form-control"   required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>SSB Date</lable>
                      <input  type="date" class="form-control"  placeholder="Pickup Date" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>SSB Reporting Time</lable>
                      <input  type="time" class="form-control"  placeholder="Pickup Date" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                        <lable>Attach Payment Reciept</lable>
                      <input  type="file" class="form-control"  placeholder="Pickup Date" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>

<style>
lable{
    color:grey;
}
</style>
    <?php include_once("footer.php"); ?>