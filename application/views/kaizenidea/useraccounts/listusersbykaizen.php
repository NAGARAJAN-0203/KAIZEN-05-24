



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
  <h4>Employees List with Kaizen Submitted</h4>
  <span>Kaizen > Employees List > Kaizen Submitted</span>
  </div>
  </div>
  </div>
  <!--END Page Title-->

  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">


    <?php
    $all = $this->mapi->listusersbykaizentotal_oneq_totalemp('all');
    $submitted = $this->mapi->listusersbykaizentotal_oneq_totalemp('submitted');
    $notsubmitted = $this->mapi->listusersbykaizentotal_oneq_totalemp('notsubmitted');
    $notsubmitted_temp = $all - $submitted;
    ?>
    <div class="">
           <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusersbykaizen/'); ?>">
           <div class="divcount pull-right">
            <div class="<?php if($uri5=='TotalEmployees') { echo 'bgl-green'; } else { echo 'bgl-primary'; } ?> rounded p-2">
              <p class="mb-0 counttitle">Total Employees</p>
              <p class="mb-0 countnumb text-center"><b><?php
              echo $all;
              ?></b></p>
            </div>
          </div>
          </a>
            <!--END Div-->
     </div>


     <div class="">
            <!--Div-->
           <a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusersbykaizen/'); ?>">
            <div class="divcount pull-right">
             <div class="<?php   echo 'bgl-red';  ?> rounded p-2">
               <p class="mb-0 counttitle">Total Employees Kaizen Not Submitted</p>
               <p class="mb-0 countnumb text-center"><b><?php
               echo $notsubmitted_temp;
               ?></b></p>
             </div>
           </div>
           </a>
             <!--END Div-->
      </div>

      <div class="">
             <!--Div-->
            <a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusersbykaizen/'); ?>">
             <div class="divcount pull-right">
              <div class="<?php  echo 'bgl-green';   ?> rounded p-2">
                <p class="mb-0 counttitle">Total Employees Kaizen Submitted</p>
                <p class="mb-0 countnumb text-center"><b><?php
                echo $submitted;
                ?></b></p>
              </div>
            </div>
            </a>
              <!--END Div-->
       </div>






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


  if(empty($uri6)) {
    $dept = $this->input->post('dept');
  } else {
    $dept = $uri6;
  }


  ?>

<?php /*

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
              * ?>


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

*/ ?>

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
                 <a href="<?php echo site_url('admin/kaizenidea/useraccounts/listusers/all'); ?>" class="btn btn-block btn-outline-primary active" >Back to Employees List</a>
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


          <div class="card-body">


              <div class="table-responsive ">


                  <table class="table table-bordered table-responsive-sm tablerefresh" >


                      <thead>

                          <tr class="tablesort">

                              <th class="text-center">#</th>
                            <!--  <th>ProfilePic</th>-->
                              <th class="">Emp ID</th>
                              <th class="">Name</th>
                               <th class="">Email</th>
                               <th class="">Domain</th>
                                <th class="">Department</th>
                               <th  class="text-center">Total Kaizen Submitted</th>
                           </tr>
                      </thead>
                      <tbody>

                         <?php

                         $listusersbykaizentotal_oneq = $this->mapi->listusersbykaizentotal_oneq();

                         if(empty($uri5)) { $i=1; } else {  $i=$uri5+1; }
                         foreach ($listusersbykaizentotal_oneq as $rowArray) {
                             $profile_id = $rowArray->profile_id;
                          ?>

                          <tr>
                              <td class="text-center"><?php echo $i; ?></td>
                              <td><?php

                              $dbemail = $this->mapi->findemailbyprofileid($profile_id);
                              echo $dbemail;
                              ?></td>
                              <td><?php echo $this->mapi->findnamebyprofileid($profile_id); ?>

                              </td>
                              <td> <?php echo $this->mapi->findemail2byemail($dbemail); ?>
                              </td>
                              <td><?php echo "<b1>".$this->mapi->finddomainbyprofileid($profile_id).""; ?>
                              </td>
                              <td>
                                <?php echo $this->mapi->finddepartbyprofileid($profile_id); ?>
                              </td>

                              <td class="text-center">

                                <?php $total_ideas = $rowArray->total_ideas;
                                      if($total_ideas>0) {
                                ?>
                                <a target="_blank" href="<?php echo site_url('admin/kaizenidea/useraccounts/listkaizensbyuser/'.$profile_id.''); ?>">
                                <span class="badge-sm badge-success fontsize14 borderradius"><?php echo $total_ideas; ?></span>
                                </a>
                              <?php } else { ?>
                                 <span class="badge-sm badge-danger fontsize14 borderradius"><?php echo $total_ideas; ?></span>
                               <?php } ?>

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
