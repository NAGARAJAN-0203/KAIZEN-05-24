<div class="content-body">
<div class="container-fluid">

<!--Page Title-->
<div class="row page-titles mx-0">
<div class="col-sm-6 p-md-0">
<div class="welcome-text">
<h4>User Accounts</h4>
<span>Kaizen > User Accounts > Add User</span>
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

  <form id="formID-1" action="<?php echo site_url('admin/createuser') ?>"  method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
          <!--Div-->
                  <div class="card-header">
                    <h4 class="card-title">Add User</h4>

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
       <label for="email1">Name</label>
       <input type="text" class="form-control mb-10 validate[required] text-input" id="empname" name="empname" placeholder="">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Gender</label>
       <div class="row">
       <div class="col-md-6 text-left">
         <input type="radio" name="empgender" class="form-control1 inpradio" value="M" id="empgender"> <label for="personal"> Male</label>
       </div>
       <div class="col-md-6 text-left">
         <input type="radio" name="empgender" class="form-control1 inpradio" value="F" id="empgender"> <label for="social"> Female</label>
       </div>
       </div>
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>


     <div class="form-group col-sm-4">
       <label for="email1">Domain</label>
       <input type="text" class="form-control mb-10 validate[required] text-input" id="empdomain" name="empdomain" placeholder="">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>




     </div>

     <div class="row">

     <div class="form-group col-sm-4">
       <label for="email1">Department</label>
       <input type="text" class="form-control mb-10 validate[required] text-input" id="empdepart" name="empdepart" placeholder="">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Emp ID</label>
       <input type="text" class="form-control mb-10 validate[required] text-input" id="empemail" name="empemail" aria-describedby="emailHelp" placeholder="">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Password</label>
       <input type="password" class="form-control mb-10 validate[required] text-input" id="password" name="password" aria-describedby="emailHelp" placeholder="">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>
     </div>



     <div class="row">


     <div class="form-group col-sm-4">
       <label for="email1">UserType</label>
       <select class="form-control  mb-10 validate[required] text-input" name="usertype" id="usertype">
           <option value="1">SUPERADMIN</option>
           <option value="2">ADMIN</option>
           <option value="3">MANAGER</option>
            <!--
           <option value="4">HOD</option>
           <option value="5">IE Dept</option>
         -->
           <option value="4">EMPLOYEE</option>
           <option value="5">FINANCE</option>
           <option value="6">IE Dept</option>
         </select>
     </div>

     <div class="form-group col-sm-4">
       <label for="email1">Status</label>
       <select class="form-control validate[required] mb-10" name="accstatus" id="accstatus">
           <option value="1">Active</option>
           <option value="0">InActive</option>
           <option value="3">Block</option>
         </select>
     </div>


     <div class="form-group col-sm-4">
       <label for="email1">Email</label>
       <input type="text" class="form-control mb-10 validate[required] text-input" id="empemail2" name="empemail2" placeholder="">
       <!--<small id="emailHelp" class="form-text text-muted">Sample error message display.</small>-->
     </div>

     </div>


                   <!--END Form-->

                   <p>&nbsp;</p>
                <div class="form-group col-md-6">
                 <button type="submit" class="btn btn-primary">Add</button>
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
