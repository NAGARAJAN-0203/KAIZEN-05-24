
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
                                      <h4 class="text-center mb-4">Update your new password</h4>

                                     <p class="responsemessage"><?php /*
                                      $mssg = $this->uri->segment(3);
                      		            $msg = $this->messages->msg_text($mssg);
                                      $resul = $msg[1];
                      								if($resul=='1') { echo "<g1>".$msg[0]."</g1>"; }
                      								elseif($resul=='0') { echo "<r1>".$msg[0]."</r1>"; } */
                                      $mssg = $this->uri->segment(3);
                                      if($mssg=='mgs')	{
                                        echo '<g1>Registered Successfully, Please Login...</g1>';
                                      }?>

                                    </p>


                                      <form class="m-t" id="formID-1" role="form"    method="post" autocomplete="off" action="<?php echo site_url('admin/updateuserpassword_user') ?>">
                                          <div class="form-group">
                                              <label class="mb-1"><strong>New Password</strong></label>
                                              <input type="password" id="password" name="password" class="form-control mb10 validate[required]"  >
                                          </div>
                                          <div class="form-group">
                                              <label class="mb-1"><strong>Confirm Password</strong></label>
                                              <input type="password" id="confirm_password" name="emppassword" class="form-control mb10 validate[required,equals[password]]" value=""  >
                                          </div>
                                          <div class="form-row d-flex justify-content-between  mb-2">
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
                                              <input type="hidden" name="profileid" value="<?php
                                              $viv_profile_id = $this->session->userdata('viv_profile_id');
                                              echo $viv_profile_id;
                                               ?>" />
                                              <button type="submit" class="btn btn-primary btn-block ">Update Password</button>
                                          </div>
                                      </form>

                                      <?php /*
                                      <div class="new-account mt-3">
                                          <p>Don't have an account? <a class="text-primary" href="<?php  echo site_url('admin/register'); ?>">Register Here</a></p>
                                      </div>
                                      */ ?>


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
      <input type="hidden" name="domain" value="" class="sdomain" />
    </form>



	 </div><!--App-->
     <?php
       $this->load->view('include/master-js');
       $this->load->view('include/html-bottom');
     ?>




  </body>
</html>
