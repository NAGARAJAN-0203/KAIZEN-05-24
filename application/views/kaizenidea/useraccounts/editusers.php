<?php
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);
  $uri5 = $this->uri->segment(5);
  $uri6 = $this->uri->segment(6);

?>
<div class="content-body">
<div class="container-fluid">

<!--Page Title-->
<div class="row page-titles mx-0">
<div class="col-sm-12 p-md-0">
<div class="welcome-text">
<h4>User Accounts
<a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusers'); ?>" class="btn btn-primary pull-right">Back to Users List </a>
</h4>
<span>Kaizen > User Accounts > Edit User</span>
<p class="responsemessage"></p>
<?php
if($uri6=='mgefge1234') {
  echo '<g1>Updated Successfully</g1>';
} elseif($uri6=='mgcd1c3922') {
  echo '<r1>Sorry! Please Try Again</r1>';
}
?>


</div>
</div>
</div>
<!--END Page Title-->



 <!-- Inner Page-->
 <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">



                     <div class="row">
                        <div class="col-12">
                            <div class="right-box-padding">



     <div class="read-content">
<?php
$listusersbyprofileid = $this->mapi->listusersbyprofileid($uri5);
foreach ($listusersbyprofileid as $rowArray) {
$profile_id = $rowArray->profile_id;
?>
  <form  action="<?php echo site_url('admin/edituser') ?>"  method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
          <!--Div-->
                  <div class="card-header">
                    <h4 class="card-title">Edit User</h4>

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

                   <!-- Add Form-->
                   <div class="row">
     <div class="form-group col-sm-4">
       <label for="email1">Emp ID</label>
       <h3><?php echo $rowArray->email; ?></h3>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>


     <div class="form-group col-sm-4">
       <label for="email1">Name</label>
       <input type="text" class="form-control mb-10" id="empname" name="empname" placeholder="" value="<?php echo $rowArray->fname; ?>">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Gender</label>
       <?php $gender = $rowArray->gender; ?>
       <div class="row">
       <div class="col-md-6 text-left">
         <input type="radio" name="empgender" class="form-control1 inpradio" value="M" id="empgender" <?php
         if($gender=='M') { echo 'checked'; } ?>
         > <label for="personal"> Male</label>
       </div>
       <div class="col-md-6 text-left">
         <input type="radio" name="empgender" class="form-control1 inpradio" value="F" id="empgender" <?php
         if($gender=='F') { echo 'checked'; } ?>> <label for="social"> Female</label>
       </div>
       </div>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>








     </div>

     <div class="row">


       <div class="form-group col-sm-4">
         <label for="email1">Domain</label>

         <input type="text" class="form-control mb-10" id="empdomain" name="empdomain" placeholder="" value="<?php echo $rowArray->domain; ?>">


          <?php /*
         <select class="form-control" name="empdomain" id="empdomain"  >
           <option value="">Select</option>
           <?php
           $db_domain = $rowArray->domain;

           $listdomains = $this->mapi->listdomains();
            foreach ($listdomains as $listdomainsrowArray) {
              $selectdomainname = $listdomainsrowArray->domain;
           ?>
           <option value="<?php echo $selectdomainname; ?>" <?php if($db_domain==$selectdomainname) { echo 'selected'; } ?>><?php echo $selectdomainname; ?></option>
         <?php }   ?>
          </select>
          */ ?>

         <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
       </div>

     <div class="form-group col-sm-4">
       <label for="email1">Department</label>

       <input type="text" class="form-control mb-10" id="empdepart" name="empdepart" placeholder="" value="<?php echo $rowArray->depart; ?>">


       <?php /*
       <select class="form-control" name="empdepart" id="empdepart"  >
         <option value="">Select</option>
         <?php
         $db_domain = $rowArray->domain;
         $db_depart = $rowArray->depart;
          $listdepartmentbydid = $this->mapi->listdepartmentbydid($db_domain);
          foreach ($listdepartmentbydid as $listdepartmentbydidrowArray) {
            $dep_deptid = $listdepartmentbydidrowArray->deptid;
            $dep_domainname = $listdepartmentbydidrowArray->domain;
            $dep_departmentname = $listdepartmentbydidrowArray->department;
            $dep_status = $listdepartmentbydidrowArray->status;
         ?>
         <option value="<?php echo $dep_departmentname; ?>" <?php if($db_depart==$dep_departmentname) { echo 'selected'; } ?>><?php echo $dep_departmentname; ?></option>
       <?php }   ?>
        </select>
        */ ?>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>



     <div class="form-group col-sm-4">
       <label for="email1">UserType</label>
       <?php $user_type = $rowArray->user_type; ?>
       <select class="form-control validate[required] mb-10" name="usertype" id="usertype">
           <option value="1" <?php  if($user_type=='TRMMADMIN') { echo 'selected';  } ?>>ADMIN</option>
           <!--<option value="2" <?php  if($user_type=='TRMMADMIN') { echo 'selected';  } ?>>ADMIN</option>-->
           <option value="3" <?php  if($user_type=='TRMMMANG') { echo 'selected';  } ?>>MANAGER</option>
           <option value="4" <?php  if($user_type=='TRMMEMP') { echo 'selected';  } ?>>EMPLOYEE</option>
           <option value="5" <?php  if($user_type=='TRMMFINANCE') { echo 'selected';  } ?>>FINANCE</option>
           <option value="6" <?php  if($user_type=='TRMMIEDEPT') { echo 'selected';  } ?>>IE Dept</option>
         </select>
     </div>


     </div>



     <div class="row">




     <div class="form-group col-sm-4">
       <label for="email1">Status</label>
       <?php $status = $rowArray->status; ?>
       <select class="form-control validate[required] mb-10" name="accstatus" id="accstatus">
           <option value="1" <?php  if($user_type=='1') { echo 'selected';  } ?>>Active</option>
           <option value="0" <?php  if($user_type=='0') { echo 'selected';  } ?>>InActive</option>
           <option value="3" <?php  if($user_type=='3') { echo 'selected';  } ?>>Block</option>
         </select>
     </div>


     <div class="form-group col-sm-4">
       <label for="email1">Email</label>
       <input type="text" class="form-control mb-10" id="empemail2" name="empemail2" placeholder="" value="<?php echo $rowArray->email2; ?>">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>


     <div class="form-group col-sm-4">
       <label for="Cadre">Cadre</label>
       <select class="form-control  mb-10" name="cadre" id="cadre">
         <?php $cadre = $rowArray->cadre; ?>
         <option value="" <?php if($cadre=='') { echo 'selected'; } ?>>Select</option>
           <option value="C1" <?php if($cadre=='C1') { echo 'selected'; } ?>>C1</option>
           <option value="C2" <?php if($cadre=='C2') { echo 'selected'; } ?>>C2</option>
           <option value="C3" <?php if($cadre=='C3') { echo 'selected'; } ?>>C3</option>
           <option value="C4" <?php if($cadre=='C4') { echo 'selected'; } ?>>C4</option>
         </select>
     </div>


     </div>


                   <!--END Form-->

                   <p>&nbsp;</p>
                <div class="form-group col-md-6">
                  <input type="hidden" name="profileid" value="<?php echo $profile_id; ?>" />
                 <button type="submit" class="btn btn-primary">Update </button>
                 </div>
            </form>

          <?php } ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>



<!-- END Inner Page-->














<!-- Inner Page-->
    <div class="col-lg-4">
       <div class="card">
           <div class="card-body">



                    <div class="row">
                       <div class="col-12">
                           <div class="right-box-padding">



    <div class="read-content">
<?php
$listusersbyprofileid = $this->mapi->listusersbyprofileid($uri5);
foreach ($listusersbyprofileid as $rowArray) {
$profile_id = $rowArray->profile_id;
?>
 <form  action="<?php echo site_url('admin/updateuserpassword') ?>"  method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
         <!--Div-->
                 <div class="card-header">
                   <h4 class="card-title">Reset Password</h4>

                   <div class="pull-right">
                     <?php
                     /*
                    $uri5 = $this->uri->segment(5);
                    $msg_text = $this->messages->msg_text($uri5);

                    if(!empty($msg_text)) {
                      $msgval = $msg_text[0];
                      $msgsts = $msg_text[1];

                      if($msgsts=='0') { echo '<span class="r1 font12">'.$msgval.'</span>'; }
                      elseif($msgsts=='1') { echo '<span class="g1 font12">'.$msgval.'</span>'; }
                    }
                    */


                    if($uri6=='mgefgerspass1') {
                      echo '<g1>Updated Successfully</g1>';
                    } elseif($uri6=='mgefgerspass0') {
                      echo '<r1>Sorry! Please Try Again</r1>';
                    }
                      ?>
                   </div>
                </div>
                <div class="card-body">

                  <!-- Add Form-->
                  <div class="row">


                    <div class="form-group col-sm-12">
                      <label for="email1">New Password</label>
                      <input type="password" class="form-control mb-10" id="emppassword" name="emppassword" placeholder="" value="">
                      <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
                    </div>



                  <!--END Form-->

                  <p>&nbsp;</p>
               <div class="form-group col-md-6">
                 <input type="hidden" name="profileid" value="<?php echo $profile_id; ?>" />
                 <br/>
                <button type="submit" class="btn btn-primary">Update </button>
                </div>
           </form>

         <?php } ?>

                               </div>

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
