
     <?php
      $this->load->view('include/html-top');
      $this->load->view('include/inline-header');
    ?>

		<style>


		</style>
   </head>
  <body>
   <div id="app">

     <?php
       $this->load->view('include/preloader');
     ?>


    <div id="main-wrapper">


      <div class="authincation h-100">
          <div class="container h-100">
              <div class="row justify-content-center h-100 align-items-center">
                  <div class="col-md-6">
                      <div class="authincation-content">
                          <div class="row no-gutters">
                              <div class="col-xl-12">
                                  <div class="auth-form">

                                      <center> <img src="<?php echo base_url(); ?>/assets/images/logo.png" height="120" /></center>
                                      <h4 class="text-center mb-4">Register with your details</h4>

                                     <p class="responsemessage"><?php /*
                                      $mssg = $this->uri->segment(3);
                      		            $msg = $this->messages->msg_text($mssg);
                                      $resul = $msg[1];
                      								if($resul=='1') { echo "<g1>".$msg[0]."</g1>"; }
                      								elseif($resul=='0') { echo "<r1>".$msg[0]."</r1>"; } */ 	?>

                                    </p>


                                      <form class="m-t" id="registerformsubmit" role="form"    method="post" autocomplete="off" class="">

                                        <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input name="name" type="text" class="form-control mb10 validate[required] text-input" placeholder="Please enter your name"  id="name" />
                                        </div>
                                        </div>

                                        <div class="col-sm-6">
                                          <div class="form-group">
                                            <label for="email1" class="mb10">Gender</label>
                                            <div class="row">
                                            <div class="col-md-6 text-left">
                                              <input type="radio" name="gender" class="form-control1 inpradio" value="M" id="gender"> <label for="personal"> Male</label>
                                            </div>
                                            <div class="col-md-6 text-left">
                                              <input type="radio" name="gender" class="form-control1 inpradio" value="F" id="gender"> <label for="social"> Female</label>
                                            </div>
                                            </div>
                                            <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
                                          </div>
                                        </div>


                                        <div class="col-sm-6">
                                          <div class="form-group">
                                              <label class="mb-1"><strong>Emp ID</strong></label>
                                              <input name="email" type="text" class="form-control mb10" placeholder="Please enter you EmpID">
                                          </div>
                                         </div>

                                         <div class="col-sm-6">
                                           <div class="form-group">
                                               <label class="mb-1"><strong>Password</strong></label>
                                               <input name="password" type="password" class="form-control mb10" value="" placeholder="Please enter your password">
                                           </div>
                                          </div>

                                          <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Domain</strong></label>
                                                <input name="domain" type="text" class="form-control mb10" placeholder="Please enter your Domain">
                                            </div>
                                           </div>

                                           <div class="col-sm-6">
                                             <div class="form-group">
                                                 <label class="mb-1"><strong>Department</strong></label>
                                                 <input name="depart" type="text" class="form-control mb10" placeholder="Please enter your Department">
                                             </div>
                                            </div>

                                            <div class="col-sm-12">
                                              <div class="form-group">
                                                  <label class="mb-1"><strong>Email (Optional)</strong></label>
                                                  <input name="email2" type="text" class="form-control mb10" placeholder="Please enter your Email">
                                              </div>
                                             </div>



                                        </div>


                                          <div class="form-row d-flex justify-content-between   mb-2">
                                              <div class="form-group">
                                                <?php /*
                                                 <div class="custom-control custom-checkbox ml-1">
                            <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                            <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                          </div> */ ?>
                                              </div>
                                              <?php /*
                                              <div class="form-group">
                                                  <a href="#">Forgot Password?</a>
                                              </div>
                                              */ ?>
                                          </div>
                                          <div class="text-center">
                                              <button type="submit" class="btn btn-primary btn-block ">Register Me In</button>
                                          </div>
                                      </form>


                                      <div class="new-account mt-3">
                                          <p>Back to Login? <a class="text-primary" href="<?php  echo site_url('admin/index'); ?>">Login</a></p>
                                      </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </div><!--main-wrapper-->


    <form action="<?php echo site_url('admin/addsession') ?>" method="post" id="addsession">
      <input type="hidden" name="email" value="" class="semail" />
      <input type="hidden" name="usertype" value="" class="susertype" />
      <input type="hidden" name="profileid" value="" class="sprofileid" />
      <input type="hidden" name="empid" value="" class="sempid" />
      <input type="hidden" name="profile_pic" value="" class="sprofile_pic" />
      <input type="hidden" name="fname" value="" class="sfname" />
      <input type="hidden" name="designation" value="" class="sdesignation" />
      <input type="hidden" name="feeslist" value="" class="sfeeslist" />
    </form>



	 </div><!--App-->
     <?php
       $this->load->view('include/master-js');
       $this->load->view('include/html-bottom');
     ?>




  </body>
</html>
