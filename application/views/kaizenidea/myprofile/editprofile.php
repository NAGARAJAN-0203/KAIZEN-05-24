<?php
					$uri2 = $this->uri->segment(2);
					$uri3 = $this->uri->segment(3);
					$uri4 = $this->uri->segment(4);
          $uri5 = $this->uri->segment(5);
					$uri6 = $this->uri->segment(6);
				?>

	<?php
	$viv_user_type = $this->session->userdata('viv_user_type');
	$viv_profile_id = $this->session->userdata('viv_profile_id');
	$viv_email = $this->session->userdata('viv_email');
	 ?>

<div class="content-body">
<div class="container-fluid">

<!--Page Title-->
<div class="row page-titles mx-0">
<div class="col-sm-6 p-md-0">
<div class="welcome-text">
<h4>My Profile</h4>
<span>Kaizen > My Profile > Edit My Profile</span>
<p class="responsemessage"></p>
</div>
</div>
</div>
<!--END Page Title-->



 <!-- Inner Page-->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">



                     <div class="row">
                        <div class="col-12">
                            <div class="right-box-padding">



     <div class="read-content">

  <form  action="<?php echo site_url('admin/updatemyprofile') ?>"  method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
          <!--Div-->
                  <div class="card-header">
                    <h4 class="card-title">Edit My Profile</h4>

                    <div class="pull-right">
                      <?php
                     $uri5 = $this->uri->segment(5);
                     $msg_text = $this->messages->msg_text($uri5);

                     if(!empty($msg_text)) {
                       $msgval = $msg_text[0];
                       $msgsts = $msg_text[1];

                       if($msgsts=='0') { echo '<span class="r1 font12">'.$msgval.'</span>'; }
                       elseif($msgsts=='1') { echo '<span class="g1 font12">'.$msgval.'</span>'; }
                     }
                       ?>
                    </div>
                 </div>
                 <div class="card-body">

  <?php
   $listuserbypid = $this->mapi->listuserbypid($viv_profile_id);
  foreach ($listuserbypid as $rowArray) {
      $profile_id = $rowArray->profile_id;
  ?>





                   <!-- Add Form-->
                   <div class="row">
     <div class="form-group col-sm-4">
       <label for="email1">Name</label>
       <input type="text" class="form-control mb-10" id="empname" name="empname" placeholder="" value="<?php echo $rowArray->fname; ?>">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Gender</label>
       <div class="row">
       <div class="col-md-6 text-left">
         <input type="radio" name="empgender" class="form-control1 inpradio" value="M" id="empgender" <?php
         $gender = $rowArray->gender;
         if($gender=='M') { echo 'checked'; }?>> <label for="personal"> Male</label>
       </div>
       <div class="col-md-6 text-left">
         <input type="radio" name="empgender" class="form-control1 inpradio" value="F" id="empgender" <?php
         $gender = $rowArray->gender;
         if($gender=='F') { echo 'checked'; }?>> <label for="social" >  Female</label>
       </div>
       </div>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Emp ID</label> <br/>
       <!--
       <input type="text" class="form-control mb-10" id="empemail" name="empemail" aria-describedby="emailHelp" placeholder="" readonly value="">
        -->
        <h2><?php echo $rowArray->email; ?></h2>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>







     </div>

     <div class="row">

       <div class="form-group col-sm-4">
         <label for="email1">Domain</label></br/>
				 <h2><?php echo $rowArray->domain; ?><h2>
				 <?php /*
         <input type="text" class="form-control mb-10" id="empdomain" name="empdomain" placeholder="" value="<?php echo $rowArray->domain; ?>">
				 */ ?>
         <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
       </div>


     <div class="form-group col-sm-4">
       <label for="email1">Department</label></br/>
			 <h2><?php echo $rowArray->depart; ?></h2>
			 <?php /*
       <input type="text" class="form-control mb-10" id="empdepart" name="empdepart" placeholder="" value="<?php echo $rowArray->depart; ?>">
			 */ ?>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>



     <div class="form-group col-sm-4">
       <label for="email1">Email</label>
       <input type="text" class="form-control mb-10" id="email2" name="empemail2" aria-describedby="emailHelp" placeholder="" value="<?php echo $rowArray->email2; ?>">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>


     </div>




   <?php } ?>


                   <!--END Form-->

                   <p>&nbsp;</p>
                <div class="form-group col-md-6 row">
                 <button type="submit" class="btn btn-primary">Update my Profile</button>
                 </div>
            </form>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>



<!-- END Inner Page-->




</div>
</div>
