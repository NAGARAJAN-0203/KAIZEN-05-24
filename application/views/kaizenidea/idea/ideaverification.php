

 <?php
   $uri4 = $this->uri->segment(4);
   $uri5 = $this->uri->segment(5);
   $uri6 = $this->uri->segment(6);
 ?>
 <?php
 $viv_user_type = $this->session->userdata('viv_user_type');
 $viv_profile_id = $this->session->userdata('viv_profile_id');
 $viv_email = $this->session->userdata('viv_email');
  ?>

<?php if($viv_user_type=='TRMMMANG' || $viv_user_type=='TRMMADMIN') { ?>

<div class="content-body">
<div class="container-fluid">

  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-6 p-md-0">
  <div class="welcome-text">
  <h4>View Submitted Kaizen for Verification</h4>
  <span>Kaizen Idea > Kaizen Mang > View Submitted Kaizen from Employee</span>
  </div>
  </div>
  </div>
  <!--END Page Title-->



  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">

    <div class="">




          <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalsubmitted'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-primary rounded p-2">
              <p class="mb-0 counttitle">Total Kaizens</p>
              <p class="mb-0 countnumb text-center"><b><?php
              $count_listmyideas_verifiy = $this->mapi->count_listmyideas_verifiy();
              echo $count_listmyideas_verifiy;
              ?></b></p>
            </div>
          </div>
          </a>
          <!--END Div-->

          <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalpending'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-warning dashborder rounded p-2">
              <p class="mb-0 counttitle">Kaizens Pending Approval</p>
              <p class="mb-0 countnumb text-center blink_me_brown"><b><?php
              $count_listmyideas_verifiy_sts_p = $this->mapi->count_listmyideas_verifiy_sts('1');
              echo $count_listmyideas_verifiy_sts_p;
              ?></b></p>
            </div>
          </div>
          </a>
          <!--END Div-->


          <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalapproved'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-success dashborder rounded p-2">
              <p class="mb-0 counttitle">Approved Kaizens</p>
              <p class="mb-0 countnumb text-center "><b><?php
              $count_listmyideas_verifiy_sts_a = $this->mapi->count_listmyideas_verifiy_sts('2');
              echo $count_listmyideas_verifiy_sts_a;
              ?></b></p>
            </div>
          </div>
          </a>
          <!--END Div-->


          <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalrejected'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-danger dashborder rounded p-2">
              <p class="mb-0 counttitle">Rejected Kaizens</p>
              <p class="mb-0 countnumb text-center "><b><?php
              $count_listmyideas_verifiy_sts_r = $this->mapi->count_listmyideas_verifiy_sts('3');
              echo $count_listmyideas_verifiy_sts_r;
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




               <div class="row page-titles mx-0">


                 <div class="media mb-2">
                   <h5 class="my-1 text-primary">Kaizen List :</h5>
                   <!--<p class="read-content-email">To: Me, info@example.com</p>-->
                   <p class="responsemessage"></p>
                </div>
                <!--
                 <div class="media-body"><span class="pull-right">
                   <input type="text" id="searchreturnstatement" placeholder="Search"></input>
                  </div>
                -->


                 <!--Table LISt-->


               <div class="table-responsive">

                 <?php /*
                 <div class="ajaxload">
                   <img src="<?php echo base_url(); ?>assets/images/ajaxload.gif" class="imgajaxload" />
                 </div>
                 */ ?>

                   <table id="tabletoexcel" class="table table-bordered table-responsive-sm tablerefresh tablefixheadcolumn tasklistautorefresh">


                       <thead>


                           <tr class="tablesort">
                               <th class="text-center">#</th>
                               <th>Kaizen Details</th>
                               <th class="text-center">Action</th>
                                <!--<th class="text-center">Action</th>-->

                           </tr>
                       </thead>
                       <tbody>

                         <?php

                         $listmyideas_verification = $this->mapi->listmyideas_verification();
                         if(empty($listmyideas_verification)) {  ?>

                           <tr><td colspan="3">Sorry! No records added yet...</td></tr>

                         <?php } else {


                           $i=1;
                           foreach ($listmyideas_verification as $rowArray) {

                             $idea_id = $rowArray->idea_id;
                             $activity = $rowArray->activity;
                             $version_no = $rowArray->version_no;
                             $proj_code = $rowArray->proj_code;
                             $doc_no = $rowArray->doc_no;
                             $benifit_area = $rowArray->benifit_area;
                             $ref_no = $rowArray->ref_no;
                             $tepl_plant = $rowArray->tepl_plant;
                             $ktheme = $rowArray->ktheme;
                             $idea = $rowArray->idea;
                             $status = $rowArray->status;
                             $subdatetime = $rowArray->subdatetime;
                             $profile_id = $rowArray->profile_id;
                             $cs_cost = $rowArray->cs_cost;
                             $cs_cycletime = $rowArray->cs_cycletime;
                             $cs_manpower = $rowArray->cs_manpower;

                             $iedept_status = $rowArray->iedept_status;
                             $finance_status = $rowArray->finance_status;

                             $horizradio = $rowArray->horizradio;
                             $imgapprov = $rowArray->imgapprov;

                             $emp_edit_status = $rowArray->emp_edit_status;
                             $hold_status = $rowArray->hold_status;



                          ?>


                           <tr class="">
                               <td class="text-center"><?php echo $i; ?></td>
                               <td>
                                 <p>Kaizen Theme : <b><?php echo $ktheme; ?></b>
                                   <span class="pull-right">
                                     Status :
                                     <?php
                                     if($status==1 && $imgapprov==1 && $hold_status==0) { ?>
                                     <span class="badge bgmildgray">Waiting for Image Sanitization</span>

                                   <?php } else if($status==1 && $imgapprov==3 && $hold_status==0) { ?>
                                   <span class="badge bgmildred">Images Sanitization Rejected</span>

                                 <?php } else if($status==1 && $imgapprov==2 && $hold_status==0) { ?>
                                     <span class="badge bgmildgray">Waiting for DRI Approval</span>

                                 <?php } else if($status==1 && $imgapprov==2 && $hold_status==1) { ?>
                                     <span class="badge bgmildred">Hold</span>

                                 <?php } else if($status==2) { ?>

                                     <span class="badge bgmildgreen"> DRI Approved
                                      <?php
                                     if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {

                                        echo '';
                                       } else {
                                     ?>& Waiting for <?php
                                     if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'IE Dept'; }
                                     if((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) { echo ', '; }
                                     if($cs_cost>=50000) { echo 'Finance'; }
                                     ?> Approval
                                    <?php } ?>
                                     </span>

                                   <?php } else if($status==3) { ?>
                                         <span class="badge bgmildred">DRI Rejected</span>
                                   <?php } else if($status==4) { ?>
                                     <span class="badge bgmildgray">IE Department Approved <?php
                                     if($cs_cost>=50000) { echo '& Waiting for Finance Approval'; }
                                     ?></span>

                                   <?php } else if($status==5) { ?>
                                             <span class="badge bgmildred">IE Department Rejected</span>

                                 <?php } else if($status==6) {  ?>
                                     <span class="badge bgmildgreen">Finance Approved</span>
                                   <?php } else if($status==7) {  ?>
                                       <span class="badge bgmildred">Finance Rejected</span>

                                   <?php }  else if($status==0) {  ?>
                                       <span class="badge bgmildgray">Not Submitted</span>

                                   <?php } ?>

                                     </b></span>
                                   <br/>
                                   Team Members : <b>
                                     <?php
                                      $listteammembersbyiid = $this->mapi->listteammembersbyiid($idea_id);
                                      foreach ($listteammembersbyiid as $rowArrayTeam) {
                                         $teamid = $rowArrayTeam->teamid;
                                         $empid = $rowArrayTeam->empid;
                                         $teamname = $rowArrayTeam->teamname;
                                         $function = $rowArrayTeam->function;

                                         echo $teamname.", ";
                                     ?>

                                   <?php } ?>
                                   </b><br/>
                                   Plant Name : <b><?php echo $tepl_plant; ?></b><br/>
                                   Horizontal Deployment  : <b><?php echo $horizradio; ?></b><br/>

                                </p>



                                <span class="pull-left">
                                 <!--Activity : <b><?php echo $activity; ?>-->
                                 IE Dept Approval : <b><?php if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'Yes'; } else { echo 'No'; } ?></b> |
                                 Finance Dept Approval : <b><?php if($cs_cost>=50000) { echo 'Yes'; }
                                 else { echo 'No'; } ?></b>
                               </span>


                               <span class="pull-right">Posted on : <b><?php echo $subdatetime; ?></b></span>

                               <span class="pull-right">Posted by : <b><?php echo $this->mapi->findnamebyprofileid($profile_id); ?></b> &nbsp; | &nbsp;</span>



                               </td>


                               <td class="text-center">
                                 <div class="d-flex align-center84">
                                 <a href="<?php echo site_url('admin/kaizenidea/ideamang/postidea/'.$idea_id.''); ?>" class="btn btn-warning shadow" >View</a>

                                 </div>
                               </td>


                               <!--
                               <td>
                                   <div class="d-flex align-center84">
                                   <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                   </div>
                               </td>
                               -->


                           </tr>



                         <?php  $i++; } } ?>

                       </tbody>
                   </table>
               </div>


                 <!--END Table List-->

              </div>
          </div>
      </div>
      <!-- END Content Body Start-->



    <?php } ?>







    <?php if($viv_user_type=='TRMMIEDEPT' || $viv_user_type=='TRMMADMIN') { ?>

    <div class="content-body">
    <div class="container-fluid">

      <!--Page Title-->
      <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
      <h4>View Submitted Kaizen for Verification</h4>
      <span>Kaizen Idea > Kaizen Mang > View Submitted Kaizen by DRI Approved</span>
      </div>
      </div>
      </div>
      <!--END Page Title-->



      <!--Page Title-->
      <div class="row page-titles mx-0">
      <div class="col-sm-12 p-md-0">
      <div class="welcome-text">

        <div class="">




              <!--Div-->
              <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalsubmitted'); ?>">
               <div class="divcount pull-right">
                <div class="bgl-primary rounded p-2">
                  <p class="mb-0 counttitle">Total Kaizens DRI Approved</p>
                  <p class="mb-0 countnumb text-center"><b><?php
                  $count_listmyideas_verifiy_iedept = $this->mapi->count_listmyideas_driapproved_iedept();
                  echo $count_listmyideas_verifiy_iedept;
                  ?></b></p>
                </div>
              </div>
              </a>
              <!--END Div-->

              <!--Div-->
              <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalpending'); ?>">
               <div class="divcount pull-right">
                <div class="bgl-warning dashborder rounded p-2">
                  <p class="mb-0 counttitle">Kaizens Approval Pending</p>
                  <p class="mb-0 countnumb text-center blink_me_brown"><b><?php
                  $count_listmyideas_verifiy_sts_iedept = $this->mapi->count_listmyideas_verifiy_sts_iedept('1');
                  echo $count_listmyideas_verifiy_sts_iedept;
                  ?></b></p>
                </div>
              </div>
              </a>
              <!--END Div-->


              <!--Div-->
              <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalapproved'); ?>">
               <div class="divcount pull-right">
                <div class="bgl-success dashborder rounded p-2">
                  <p class="mb-0 counttitle">Kaizens Approved </p>
                  <p class="mb-0 countnumb text-center "><b><?php
                  $count_listmyideas_verifiy_sts_iedept = $this->mapi->count_listmyideas_verifiy_sts_iedept('2');
                  echo $count_listmyideas_verifiy_sts_iedept;
                  ?></b></p>
                </div>
              </div>
              </a>
              <!--END Div-->


              <!--Div-->
              <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalrejected'); ?>">
               <div class="divcount pull-right">
                <div class="bgl-danger dashborder rounded p-2">
                  <p class="mb-0 counttitle">Kaizens Rejected </p>
                  <p class="mb-0 countnumb text-center "><b><?php
                  $count_listmyideas_verifiy_sts_iedept = $this->mapi->count_listmyideas_verifiy_sts_iedept('3');
                  echo $count_listmyideas_verifiy_sts_iedept;
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




                   <div class="row page-titles mx-0">


                     <div class="media mb-2">
                       <h5 class="my-1 text-primary">Kaizen List :</h5>
                       <!--<p class="read-content-email">To: Me, info@example.com</p>-->
                       <p class="responsemessage"></p>
                    </div>

                    <!--
                     <div class="media-body"><span class="pull-right">
                       <input type="text" id="searchreturnstatement" placeholder="Search"></input>



                     </div>
                   -->


                     <!--Table LISt-->


                   <div class="table-responsive">

                     <?php /*
                     <div class="ajaxload">
                       <img src="<?php echo base_url(); ?>assets/images/ajaxload.gif" class="imgajaxload" />
                     </div>
                     */ ?>

                       <table id="tabletoexcel" class="table table-bordered table-responsive-sm tablerefresh tablefixheadcolumn tasklistautorefresh">


                           <thead>


                               <tr class="tablesort">
                                   <th class="text-center">#</th>
                                   <th>Kaizen Details</th>
                                   <th class="text-center">Action</th>
                                    <!--<th class="text-center">Action</th>-->

                               </tr>
                           </thead>
                           <tbody>

                             <?php

                             $listmyideas_verifiy_iedept = $this->mapi->listmyideas_verifiy_iedept();
                             if(empty($listmyideas_verifiy_iedept)) {  ?>

                               <tr><td colspan="3">Sorry! No records added yet...</td></tr>

                             <?php } else {


                               $i=1;
                               foreach ($listmyideas_verifiy_iedept as $rowArray) {

                                 $idea_id = $rowArray->idea_id;
                                 $activity = $rowArray->activity;
                                 $version_no = $rowArray->version_no;
                                 $proj_code = $rowArray->proj_code;
                                 $doc_no = $rowArray->doc_no;
                                 $benifit_area = $rowArray->benifit_area;
                                 $ref_no = $rowArray->ref_no;
                                 $tepl_plant = $rowArray->tepl_plant;
                                 $ktheme = $rowArray->ktheme;
                                 $idea = $rowArray->idea;
                                 $status = $rowArray->status;
                                 $subdatetime = $rowArray->subdatetime;
                                 $profile_id = $rowArray->profile_id;
                                 $cs_cost = $rowArray->cs_cost;
                                 $cs_cycletime = $rowArray->cs_cycletime;
                                 $cs_manpower = $rowArray->cs_manpower;

                                 $iedept_status = $rowArray->iedept_status;
                                 $finance_status = $rowArray->finance_status;

                                 $horizradio = $rowArray->horizradio;
                                 $imgapprov = $rowArray->imgapprov;

                                 $emp_edit_status = $rowArray->emp_edit_status;
                                 $hold_status = $rowArray->hold_status;



                              ?>


                               <tr class="">
                                   <td class="text-center"><?php echo $i; ?></td>
                                   <td>
                                       <p>Kaizen Theme : <b><?php echo $ktheme; ?></b>
                                       <span class="pull-right">
                                         Status :
                                         <?php
                                         if($status==1 && $imgapprov==1 && $hold_status==0) { ?>
                                         <span class="badge bgmildgray">Waiting for Image Sanitization</span>

                                       <?php } else if($status==1 && $imgapprov==3 && $hold_status==0) { ?>
                                       <span class="badge bgmildred">Images Sanitization Rejected</span>

                                     <?php } else if($status==1 && $imgapprov==2 && $hold_status==0) { ?>
                                         <span class="badge bgmildgray">Waiting for DRI Approval</span>

                                     <?php } else if($status==1 && $imgapprov==2 && $hold_status==1) { ?>
                                         <span class="badge bgmildred">Hold</span>

                                     <?php } else if($status==2 && $hold_status==0) { ?>

                                         <span class="badge bgmildgreen"> DRI Approved
                                          <?php
                                         if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {

                                            echo '';
                                           } else {
                                         ?>& Waiting for <?php
                                         if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'IE Dept'; }
                                         if((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) { echo ', '; }
                                         if($cs_cost>=50000) { echo 'Finance'; }
                                         ?> Approval
                                        <?php } ?>
                                         </span>

                                       <?php } else if($status==2 && $hold_status==1) { ?>

                                            <span class="badge bgmildred">Hold</span>

                                         <?php } else if($status==3  && $hold_status==0) { ?>
                                             <span class="badge bgmildred">DRI Rejected</span>
                                       <?php } else if($status==4  && $hold_status==0) { ?>
                                         <span class="badge bgmildgray">IE Department Approved <?php
                                         if($cs_cost>=50000) { echo '& Waiting for Finance Approval'; }
                                         ?></span>

                                       <?php } else if($status==4  && $hold_status==1) { ?>
                                           <span class="badge bgmildred">Hold</span>

                                       <?php } else if($status==5) { ?>
                                                 <span class="badge bgmildred">IE Department Rejected</span>

                                     <?php } else if($status==6) {  ?>
                                         <span class="badge bgmildgreen">Finance Approved</span>
                                       <?php } else if($status==7) {  ?>
                                           <span class="badge bgmildred">Finance Rejected</span>

                                       <?php }  else if($status==0) {  ?>
                                           <span class="badge bgmildgray">Not Submitted</span>

                                       <?php } ?>

                                         </b></span>
                                       <br/>
                                       Team Members : <b>
                                         <?php
                                          $listteammembersbyiid = $this->mapi->listteammembersbyiid($idea_id);
                                          foreach ($listteammembersbyiid as $rowArrayTeam) {
                                             $teamid = $rowArrayTeam->teamid;
                                             $empid = $rowArrayTeam->empid;
                                             $teamname = $rowArrayTeam->teamname;
                                             $function = $rowArrayTeam->function;

                                             echo $teamname.", ";
                                         ?>

                                       <?php } ?>
                                       </b><br/>
                                       Plant Name : <b><?php echo $tepl_plant; ?></b><br/>
                                       Horizontal Deployment  : <b><?php echo $horizradio; ?></b><br/>

                                    </p>



                                    <span class="pull-left">
                                     <!--Activity : <b><?php echo $activity; ?>-->
                                     IE Dept Approval : <b><?php if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'Yes'; } else { echo 'No'; } ?></b> |
                                     Finance Dept Approval : <b><?php if($cs_cost>=50000) { echo 'Yes'; }
                                     else { echo 'No'; } ?></b>
                                   </span>


                                   <span class="pull-right">Posted on : <b><?php echo $subdatetime; ?></b></span>

                                   <span class="pull-right">Posted by : <b><?php echo $this->mapi->findnamebyprofileid($profile_id); ?></b> &nbsp; | &nbsp;</span>




                                   </td>


                                   <td class="text-center">
                                     <div class="d-flex align-center84">
                                     <a href="<?php echo site_url('admin/kaizenidea/ideamang/postidea/'.$idea_id.''); ?>" class="btn btn-warning shadow" >View</a>

                                     </div>
                                   </td>


                                   <!--
                                   <td>
                                       <div class="d-flex align-center84">
                                       <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                       </div>
                                   </td>
                                   -->


                               </tr>



                             <?php  $i++; } } ?>

                           </tbody>
                       </table>
                   </div>


                     <!--END Table List-->

                  </div>
              </div>
          </div>
          <!-- END Content Body Start-->



        <?php } ?>



        <?php if($viv_user_type=='TRMMFINANCE' || $viv_user_type=='TRMMADMIN') { ?>

        <div class="content-body">
        <div class="container-fluid">

          <!--Page Title-->
          <div class="row page-titles mx-0">
          <div class="col-sm-6 p-md-0">
          <div class="welcome-text">
          <h4>View Submitted Kaizen for Verification</h4>
          <span>Kaizen Idea > Kaizen Mang > View Submitted Kaizen by DRI Approved</span>
          </div>
          </div>
          </div>
          <!--END Page Title-->



          <!--Page Title-->
          <div class="row page-titles mx-0">
          <div class="col-sm-12 p-md-0">
          <div class="welcome-text">

            <div class="">




                  <!--Div-->
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalsubmitted'); ?>">
                   <div class="divcount pull-right">
                    <div class="bgl-primary rounded p-2">
                      <p class="mb-0 counttitle">Total Kaizens DRI Approved</p>
                      <p class="mb-0 countnumb text-center"><b><?php
                      $count_listmyideas_verifiy_finance = $this->mapi->count_listmyideas_verifiy_finance();
                      echo $count_listmyideas_verifiy_finance;
                      ?></b></p>
                    </div>
                  </div>
                  </a>
                  <!--END Div-->

                  <!--Div-->
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalpending'); ?>">
                   <div class="divcount pull-right">
                    <div class="bgl-warning dashborder rounded p-2">
                      <p class="mb-0 counttitle">Kaizens Approval Pending</p>
                      <p class="mb-0 countnumb text-center blink_me_brown"><b><?php
                      $count_listmyideas_verifiy_sts_finance = $this->mapi->count_listmyideas_verifiy_sts_finance('1');
                      echo $count_listmyideas_verifiy_sts_finance;
                      ?></b></p>
                    </div>
                  </div>
                  </a>
                  <!--END Div-->


                  <!--Div-->
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalapproved'); ?>">
                   <div class="divcount pull-right">
                    <div class="bgl-success dashborder rounded p-2">
                      <p class="mb-0 counttitle">Kaizens Approved </p>
                      <p class="mb-0 countnumb text-center "><b><?php
                      $count_listmyideas_verifiy_sts_finance = $this->mapi->count_listmyideas_verifiy_sts_finance('2');
                      echo $count_listmyideas_verifiy_sts_finance;
                      ?></b></p>
                    </div>
                  </div>
                  </a>
                  <!--END Div-->


                  <!--Div-->
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalrejected'); ?>">
                   <div class="divcount pull-right">
                    <div class="bgl-danger dashborder rounded p-2">
                      <p class="mb-0 counttitle">Kaizens Rejected </p>
                      <p class="mb-0 countnumb text-center "><b><?php
                      $count_listmyideas_verifiy_sts_finance = $this->mapi->count_listmyideas_verifiy_sts_finance('3');
                      echo $count_listmyideas_verifiy_sts_finance;
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




                       <div class="row page-titles mx-0">


                         <div class="media mb-2">
                           <h5 class="my-1 text-primary">Kaizen List :</h5>
                           <!--<p class="read-content-email">To: Me, info@example.com</p>-->
                           <p class="responsemessage"></p>
                        </div>
                         <div class="media-body"><span class="pull-right">
                           <input type="text" id="searchreturnstatement" placeholder="Search"></input>



                         </div>


                         <!--Table LISt-->


                       <div class="table-responsive">

                         <?php /*
                         <div class="ajaxload">
                           <img src="<?php echo base_url(); ?>assets/images/ajaxload.gif" class="imgajaxload" />
                         </div>
                         */ ?>

                           <table id="tabletoexcel" class="table table-bordered table-responsive-sm tablerefresh tablefixheadcolumn tasklistautorefresh">


                               <thead>


                                   <tr class="tablesort">
                                       <th class="text-center">#</th>
                                       <th>Kaizen Details</th>
                                       <th class="text-center">Action</th>
                                        <!--<th class="text-center">Action</th>-->

                                   </tr>
                               </thead>
                               <tbody>

                                 <?php

                                 $listmyideas_verifiy_finance = $this->mapi->listmyideas_verifiy_finance();
                                 if(empty($listmyideas_verifiy_finance)) {  ?>

                                   <tr><td colspan="3">Sorry! No records added yet...</td></tr>

                                 <?php } else {


                                   $i=1;
                                   foreach ($listmyideas_verifiy_finance as $rowArray) {

                                     $idea_id = $rowArray->idea_id;
                                     $activity = $rowArray->activity;
                                     $version_no = $rowArray->version_no;
                                     $proj_code = $rowArray->proj_code;
                                     $doc_no = $rowArray->doc_no;
                                     $benifit_area = $rowArray->benifit_area;
                                     $ref_no = $rowArray->ref_no;
                                     $tepl_plant = $rowArray->tepl_plant;
                                     $ktheme = $rowArray->ktheme;
                                     $idea = $rowArray->idea;
                                     $status = $rowArray->status;
                                     $subdatetime = $rowArray->subdatetime;
                                     $profile_id = $rowArray->profile_id;
                                     $cs_cost = $rowArray->cs_cost;
                                     $cs_cycletime = $rowArray->cs_cycletime;
                                     $cs_manpower = $rowArray->cs_manpower;

                                     $iedept_status = $rowArray->iedept_status;
                                     $finance_status = $rowArray->finance_status;

                                     $horizradio = $rowArray->horizradio;
                                     $imgapprov = $rowArray->imgapprov;

                                     $emp_edit_status = $rowArray->emp_edit_status;
                                     $hold_status = $rowArray->hold_status;


                                  ?>


                                   <tr class="">
                                       <td class="text-center"><?php echo $i; ?></td>
                                       <td>
                                         <p>Doc No : <b><?php echo $doc_no; ?></b>
                                           <span class="pull-right">
                                             Status :
                                             <?php
                                             if($status==1 && $imgapprov==1 && $hold_status==0) { ?>
                                             <span class="badge bgmildgray">Waiting for Image Sanitization</span>

                                           <?php } else if($status==1 && $imgapprov==3 && $hold_status==0) { ?>
                                           <span class="badge bgmildred">Images Sanitization Rejected</span>

                                         <?php } else if($status==1 && $imgapprov==2 && $hold_status==0) { ?>
                                             <span class="badge bgmildgray">Waiting for DRI Approval</span>

                                         <?php } else if($status==1 && $imgapprov==2 && $hold_status==1) { ?>
                                             <span class="badge bgmildred">Hold</span>

                                         <?php } else if($status==2  && $hold_status==0) { ?>

                                             <span class="badge bgmildgreen"> DRI Approved
                                              <?php
                                             if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {

                                                echo '';
                                               } else {
                                             ?>& Waiting for <?php
                                             if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'IE Dept'; }
                                             if((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) { echo ', '; }
                                             if($cs_cost>=50000) { echo 'Finance'; }
                                             ?> Approval
                                            <?php } ?>
                                             </span>

                                           <?php } else if($status==2 && $hold_status==1) { ?>

                                                <span class="badge bgmildred">Hold</span>

                                             <?php } else if($status==3  && $hold_status==0) { ?>
                                                 <span class="badge bgmildred">DRI Rejected</span>
                                           <?php } else if($status==4  && $hold_status==0) { ?>
                                             <span class="badge bgmildgray">IE Department Approved <?php
                                             if($cs_cost>=50000) { echo '& Waiting for Finance Approval'; }
                                             ?></span>

                                           <?php } else if($status==4  && $hold_status==1) { ?>
                                              <span class="badge bgmildred">Hold</span>

                                           <?php } else if($status==5) { ?>
                                                     <span class="badge bgmildred">IE Department Rejected</span>

                                         <?php } else if($status==6) {  ?>
                                             <span class="badge bgmildgreen">Finance Approved</span>
                                           <?php } else if($status==7) {  ?>
                                               <span class="badge bgmildred">Finance Rejected</span>

                                           <?php }  else if($status==0) {  ?>
                                               <span class="badge bgmildgray">Not Submitted</span>

                                           <?php } ?>

                                             </b></span>
                                           <br/>
                                            Version No/Date : <b><?php echo $version_no; ?></b><br/>
                                            Project Code : <b><?php echo $proj_code; ?></b><br/>
                                            KAIZEN Ref.No : <b><?php echo $ref_no; ?></b><br/>

                                         </p>
                                         <p><?php echo $idea; ?></p>


                                         <span class="pull-left">
                                        Activity : <b><?php echo $activity; ?>
                                        </span>


                                        &nbsp; | &nbsp;
                                        <span class="">Posted by : <b><?php echo $this->mapi->findnamebyprofileid($profile_id); ?></b></span>





                                         <?php //echo $sub_by_name; ?>
                                         <span class="pull-right">Posted on : <b><?php echo $subdatetime; ?></b></span>

                                       </td>


                                       <td class="text-center">
                                         <div class="d-flex align-center84">
                                         <a href="<?php echo site_url('admin/kaizenidea/ideamang/postidea/'.$idea_id.''); ?>" class="btn btn-warning shadow" >View</a>

                                         </div>
                                       </td>


                                       <!--
                                       <td>
                                           <div class="d-flex align-center84">
                                           <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                           </div>
                                       </td>
                                       -->


                                   </tr>



                                 <?php  $i++; } } ?>

                               </tbody>
                           </table>
                       </div>


                         <!--END Table List-->

                      </div>
                  </div>
              </div>
              <!-- END Content Body Start-->



            <?php } ?>
