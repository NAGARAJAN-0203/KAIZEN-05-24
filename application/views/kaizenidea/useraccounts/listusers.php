



<?php
  $uri3 = $this->uri->segment(3);
  $uri4 = $this->uri->segment(4);
  $uri5 = $this->uri->segment(5);
  $uri6 = $this->uri->segment(6);
  $uri7 = $this->uri->segment(7);

?>
<div class="content-body">
<div class="container-fluid">






  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-6 p-md-0">
  <div class="welcome-text">
  <h4>User Accounts</h4>
  <span>Kaizen > User Accounts > View User</span>
  </div>
  </div>
  </div>
  <!--END Page Title-->

  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">

    <?php
    $uri5 = str_replace('%20', ' ', $uri5);
    $uri6 = str_replace('%20', ' ', $uri6);
    $listgroupbydomain = $this->mapi->listgroupbydomain();
    foreach ($listgroupbydomain as $listgroupbydomainrowArray) {
      $domain = $listgroupbydomainrowArray->domain;
      ?>

    <div class="">
           <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusers/'.$domain.''); ?>">
           <div class="divcount pull-right">
            <div class="<?php if($uri5==$domain) { echo 'bgl-green'; } else { echo 'bgl-primary'; } ?> rounded p-2">
              <p class="mb-0 counttitle"><?php echo $domain; ?></p>
              <p class="mb-0 countnumb text-center"><b><?php
              $count_empbydomain = $this->mapi->count_empbydomain($domain);
              echo $count_empbydomain;
              ?></b></p>
            </div>
          </div>
          </a>
            <!--END Div-->
     </div>

   <?php } ?>





  </div>
  </div>
  </div>
  <!--END Page Title-->


  <?php
  $name = $this->input->post('name');
  $emailid = $this->input->post('empemail');
  $emailid2 = $this->input->post('emailid2');
  $usertype = $this->input->post('usertype');
  //$domain = $this->input->post('domain');



    $dept = $this->input->post('dept');
    if(empty($dept)) {
      $dept = '';
    }


  ?>


<!-- Div-->
<div class="row page-titles mx-0">
<div class="col-sm-12 p-md-0">
  <form action="" role="form"    method="post" autocomplete="off" >
     <div class="form-row">


         <div class="form-group col-md-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="" name="name" />
           </div>

          <div class="form-group col-md-2">
             <label>Emp ID</label>
             <input type="text" class="form-control" placeholder="" name="empemail" />
            </div>

           <div class="form-group col-md-3">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="" name="emailid2" />
             </div>

            <div class="form-group col-md-2">
               <label>UserType</label>
               <select class="form-control validate[required] mb-10" name="usertype" id="usertype">
                   <option value="">All</option>
                   <option value="1">ADMIN</option>
                   <option value="3">MANAGER</option>
                   <option value="4">EMPLOYEE</option>
                   <option value="5">FINANCE</option>
                   <option value="6">IE Dept</option>
                 </select>
             </div>

             <?php /*
             <div class="pull-right">

            		<div class="form-group">
           		 <label>Domain </label> <br/>
           		 <select class="fil_domain" name="domain" id="domain" >
           			<option value="">All</option>
           			<?php
           				$listgroupbydomain = $this->mapi->listgroupbydomain();
           			 foreach ($listgroupbydomain as $listgroupbydomainArray) {
           				 $domain = $listgroupbydomainArray->domain;
           			?>
           				<option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $domain; ?>"><?php echo $domain; ?></option>
           			<?php }   ?>
           			 </select>
           		 </div>

            	</div>
              */ ?>


              <div class="pull-right">
                <div class="form-group">
                 <label>Department </label> <br/>
                 <div class="sel_fil_dept">

                 <select class="" name="dept" id="dept" >
                   <option value="">All</option>
                  <?php
                    $listgroupbydept = $this->mapi->listgroupbydeptbydomain_all($uri5);
                   foreach ($listgroupbydept as $listgroupbydeptArray) {
                     $lidepart = $listgroupbydeptArray->depart;
                  ?>
                    <option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $lidepart; ?>"><?php echo $lidepart; ?></option>
                  <?php }   ?>
                    </select>

                 </div>
                 </div>
              </div>



        <div class="form-group col-md-1">
          <label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
          <button type="submit" class="btn btn-primary">Filter</button>
        </div>
     </div>
   </form>
</div>
</div>
<!--END Div-->



<div class="row">


  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <div>



                <h4 class="card-title">Total Employees -
                <?php $countlistrsausers = $this->mapi->countlistusersbyids($uri5,$name,$emailid,$emailid2,$usertype,$dept);
                echo $countlistrsausers;
                ?>

                <div class="pull-right importtbutt ml-3">
                 <a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusersbykaizen/'); ?>" class="btn btn-block btn-outline-info active" >Kaizen Sorted</a>
                </div>

                <div class="pull-right importtbutt">
                 <a class="btn btn-block btn-outline-warning active" data-toggle="modal" data-target="#importExcelModel" >Import Users</a>
                </div>

              </h4>

              <p class="responsemessage"></p>


              </div>

              <?php /*
              <div class="pull-right importtbutt">
              <label for="validationTooltip02 "> &nbsp;</label><br/>
              <a class="btn btn-block btn-outline-warning active" data-toggle="modal" data-target="#importExcelModelTemp" >Import Temp Users</a>
              </div>
              */ ?>

          </div>



<!--Model Form-->
<div class="modal fade" id="importExcelModel" tabindex="-1" role="dialog" aria-labelledby="importexcelModal" >

  <!--aria-hidden="true"-->
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Import Users / Employees : <button type="button" class="btn btn-warning" onClick="window.location.href='<?php echo base_url(); ?>assets/sample_users_xls/sample_users_xls.xlsx'">Download Sample Excel</button></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formID-1" action="<?php echo site_url('admin/importuserexcel') ?>" method="POST"   autocomplete="off" enctype="multipart/form-data" >
        <div class="modal-body">

          <div class="row">
          <!-- Form -->
          <div class="form-group col-sm-2">
            <label for="email1">Status</label>
            <select class="form-control validate[required] mb-10" name="accstatus" id="accstatus">
                <option value="1" selected>Active</option>
                <option value="0">InActive</option>
                <option value="3">Block</option>
              </select>
          </div>


          <div class="form-group col-sm-2">
            <label for="email1">UserType</label>
            <select class="form-control validate[required] mb-10" name="usertype" id="usertype">
              <!--
                <option value="1">SUPERADMIN</option>
                <option value="2">ADMIN</option>
                <option value="4">HOD</option>
                <option value="5">IE Dept</option>
              -->
                <option value="3">USER</option>
              </select>
          </div>

          <div class="form-group col-sm-3">
                <label>Password to all</label>
                <input type="passowrd"  class="form-control" name="passowrd" id="passowrd" required />
          </div>
          <div class="form-group col-sm-5">
                <label>Upload : xls / xlsx / CSV sheet</label>
                <input type="file"  class="form-control" name="userfile" id="userfile" required  />
          </div>
          <div class="form-group col-sm-4">
              <label><p>&nbsp;</p><br/></label>
            <button type="submit" class="btn btn-success" name="importfile" id="importfile-id">Upload & Submit</button>
          </div>
          <!--END Form -->
          </div>
        </div>
        <?php /*
        <div class="modal-footer border-top-0 d-flex justify-content-center float-left">
          <button type="button" class="btn btn-warning" name="importfile" id="importfile-id">Download Sample Excel</button>
        </div>
        */ ?>
      </form>
    </div>
  </div>
</div>
<!--END Model Form-->



<?php
/*

<!--Model Form-->
<div class="modal fade" id="importExcelModelTemp" tabindex="-1" role="dialog" aria-labelledby="importExcelModelTemp" >

  <!--aria-hidden="true"-->
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <form id="formID-1" action="<?php echo site_url('admin/importuserexcel_temp') ?>" method="POST"   autocomplete="off" enctype="multipart/form-data" >
        <div class="modal-body">

          <div class="row">
          <!-- Form -->

          <div class="form-group col-sm-5">
                <label>Upload : xls / xlsx / CSV sheet</label>
                <input type="file"  class="form-control" name="userfile" id="userfile" required  />
          </div>
          <div class="form-group col-sm-4">
              <label><p>&nbsp;</p><br/></label>
            <button type="submit" class="btn btn-success" name="importfile" id="importfile-id">Upload & Submit</button>
          </div>
          <!--END Form -->
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
<!--END Model Form-->

*/ ?>

          <div class="card-body">


              <div class="table-responsive ">


                  <table class="table table-bordered table-responsive-sm tablerefresh" >


                      <thead>

                          <tr class="tablesort">

                              <th class="text-center">#</th>
                            <!--  <th>ProfilePic</th>-->
                              <th class="">Emp ID</th>
                               <th class="">Name, Email & Gender</th>

                               <th class="">Total Kaizen Posted</th>
                               <th class="">Domain & Department</th>
                               <th class="">Plant, Area & Carde</th>
                               <th class="">User <br/>Type</th>
                               <th class=""><center>IMG Approval</center></th>
                              <th class="">Status</th>
                              <th class="text-center">Action</th>
                          </tr>
                      </thead>
                      <tbody>

                         <?php

                        if(empty($uri5) || $uri5=='all') { $uri5 = ''; }
                        if(empty($name)) { $name = ''; }
                        if(empty($emailid)) { $emailid = ''; }
                        if(empty($emailid2)) { $emailid2 = ''; }
                        if(empty($usertype)) { $usertype = ''; }





        $listusersbyids = $this->mapi->listusersbyids($uri5,$name,$emailid,$emailid2,$usertype,$dept);

                         if(empty($uri6)) { $i=1; } else {  $i=$uri6+1; }
                         foreach ($listusersbyids as $rowArray) {

                            $profile_id = $rowArray->profile_id;
                            $profile_iddd = $rowArray->profile_id;
                            $imgapprov = $rowArray->imgapprov;


                         ?>

                          <tr>
                              <td class="text-center"><?php echo $i; ?></td>
                              <!--
                              <td>
                                <?php
                                  $profile_pic = $rowArray->profile_pic;
                                  $filepath = 'assets/images/profile/'.$profile_pic;

                                  if(file_exists($filepath)) {
                                      $returnprofilepic = base_url().$filepath;
                                  } else {
                                      $default = 'assets/images/defaultimg.jpg';
                                      $returnprofilepic = base_url().$default;;
                                  }

                                ?>
                                <img class="mr-2 rounded" width="50" alt="image" src="<?php echo $returnprofilepic; ?>">
                              </td>
                            -->
                              <td><?php echo $rowArray->email; ?></td>
                              <td><?php echo "<b1>".$rowArray->fname."</b1>"; ?> <br/>
                                <?php echo $rowArray->email2; ?> <br/>
                                <small></i>Gender : <?php
                                $gender = $rowArray->gender;
                                if($gender=='M') { echo 'Male'; }
                                elseif($gender=='F') { echo 'Female'; }
                                ?></i></small>
                              </td>

                              <td>
                              <center>
                                <a target="_blank" href="<?php echo site_url('admin/kaizenidea/useraccounts/listkaizensbyuser/'.$profile_id.''); ?>">
                                <span class=""><?php
                              echo $this->mapi->count_listmyideas_empbypid($profile_iddd);
                              ?></a></span></center>
                            </td>



                              <td><?php echo "<b1>".$rowArray->domain."</b1>"; ?> <br/>
                                <?php echo $rowArray->depart; ?>
                              </td>

                              <td>Plant : <?php echo $rowArray->plant; ?> <br/>
                                  Area : <?php echo $rowArray->area; ?> <br/>
                                  Carde : <?php echo $rowArray->cadre; ?>
                              </td>


                               <td class="text-center">
                                 <?php $user_type = $rowArray->user_type;
                                 if($user_type=='TRMMADMIN') { ?>
                                  Admin
                               <?php } else if($user_type=='TRMMEMP') { ?>
                                    User
                               <?php } else if($user_type=='TRMMMANG') { ?>
                                 Manager
                               <?php } else if($user_type=='TRMMFINANCE') { ?>
                                 Finance
                               <?php } else if($user_type=='TRMMIEDEPT') { ?>
                                 IT Dept
                               <?php } ?>

                               </td>

                               <td>
                                 <center>
                                <input type="checkbox" name="imgapprov" value="" class="checksubmit viewemp_imgapproval"  profile_id="<?php echo $profile_id; ?>" sub_by="<?php echo $this->session->userdata('viv_profile_id'); ?>" <?php if($imgapprov==1) { echo 'checked'; } ?> />
                            </center>
                               </td>



                        <td class="text-center">
                          <?php $status = $rowArray->status;
                          if($status==1) { ?>
                          <span class="badge-sm badge-success">Active</span>
                        <?php } else if($status==0) { ?>
                            <span class="badge badge-warning">Inactive</span>
                        <?php } else if($status==3) { ?>
                              <span class="badge badge-danger">Deleted</span>
                          <?php } ?>

                        </td>





                              <td>
                                  <div class="d-flex align-center84">
                                    <!--
                                  <a href="<?php echo site_url('admin/kaizenidea/useraccounts/viewusersdetail/'.$profile_id.''); ?>"  class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                -->
                                  <a href="<?php echo site_url('admin/kaizenidea/useraccounts/editusers/'.$profile_id.''); ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                  <a onclick="return confirm('Are you sure you want to delete this employee account?');" dataid="<?php echo $profile_id; ?>" class="btn btn-danger shadow btn-xs sharp deleteuser"><i class="fa fa-trash"></i></a>
                                  </div>
                              </td>
                          </tr>

                        <?php  $i++; } ?>

                      </tbody>
                  </table>



                  <p id="pagination">
                  <?php
                         $links = $this->pagination->create_links();
                         echo $links;
                  ?></p>
              </div>
          </div>
      </div>
  </div>




</div>



</div>
</div>
