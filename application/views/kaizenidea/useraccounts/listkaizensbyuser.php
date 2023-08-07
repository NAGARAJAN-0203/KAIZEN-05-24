

 <?php
   $uri4 = $this->uri->segment(4);
   $uri5 = $this->uri->segment(5);
   $uri6 = $this->uri->segment(6); //year
   $uri7 = $this->uri->segment(7);
   $uri8 = $this->uri->segment(8);
   $uri9 = $this->uri->segment(9); //month
   $uri10 = $this->uri->segment(10); //Pagenumber
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
  <h4>View Submitted Kaizens</h4>
  <span>Kaizen Idea > Kaizen Mang > View Submitted Kaizens</span>
  </div>
  </div>
  </div>
  <!--END Page Title-->



  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">

    <div class="row">
      <?php
      $listusersbyprofileid = $this->mapi->listusersbyprofileid($uri5);
      foreach ($listusersbyprofileid as $listusersbyprofileidrowArray) {
      $profile_id = $listusersbyprofileidrowArray->profile_id;
      ?>
          <div class="col-sm-10">
            <h4>EMP ID : <?php echo $listusersbyprofileidrowArray->email; ?></h4>
            <h5>Name : <?php echo $listusersbyprofileidrowArray->fname; ?></h5>
            <h5>Email : <?php echo $listusersbyprofileidrowArray->email2; ?></h5>
          </div>
<?php } ?>

          <!--Div-->
          <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalsubmitted'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-primary rounded p-2">
              <p class="mb-0 counttitle">Total Submitted Kaizen</p>
              <p class="mb-0 countnumb text-center blink_me_brown"><b><?php
              $count_listmyideas_empbypid = $this->mapi->count_listmyideas_empbypid($uri5);
              echo $count_listmyideas_empbypid;
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
                   <h5 class="my-1 text-primary">Kaizen List :  </h5>
                   <!--<p class="read-content-email">To: Me, info@example.com</p>-->
                   <p class="responsemessage"></p>
                </div>
                 <div class="media-body">
                   <!--
                 <span class="pull-right">
                   <input type="text" id="searchreturnstatement" placeholder="Search"></input>
                 </span>
                  -->


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

                        $listmyideas = $this->mapi->listmyideasbypid($uri5);

                         if(empty($listmyideas)) {  ?>

                           <tr><td colspan="3">Sorry! No records added yet...</td></tr>

                         <?php } else {




                           if($viv_user_type=='TRMMADMIN') {
                                 if(empty($uri10)) { $uri10 = 0; }
                                 $i=$uri10+1;
                           } elseif($viv_user_type=='TRMMEMP')	 {
                             if(empty($uri6)) { $uri6 = 0; }
                             $i=$uri6+1;
                           }

                           foreach ($listmyideas as $rowArray) {

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

                             $shortlisted = $rowArray->shortlisted;
                             $shortlisteddesc = $rowArray->shortlisteddesc;



                          ?>


                           <tr class="">
                               <td class="text-center"><?php echo $i; ?></td>
                               <td>

                                 <span class="pull-right">
                                  <!--Activity : <b><?php echo $activity; ?>-->
                                  IE Dept Approval : <b><?php if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'Yes'; } else { echo 'No'; } ?></b> |
                                  Finance Dept Approval : <b><?php if($cs_cost>=50000) { echo 'Yes'; }
                                  else { echo 'No'; } ?></b> |
                                  Shortlisted : <b><?php if($shortlisted=='2') { echo 'Yes'; }
                                  elseif($shortlisted=='1') { echo 'No'; } else {  echo 'Nill';   } ?></b>
                                 </span>
                                 <br/>
                                 <br/>



                                 <p>Kaizen Theme : <b><?php echo $ktheme; ?></b>
                                   <span class="pull-right"><b>
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


                                 <?php /*
                                 <span class="pull-left">
                                  <!--Activity : <b><?php echo $activity; ?>-->
                                  IE Dept Approval : <b><?php if(!empty($cs_cycletime) || !empty($cs_manpower)) { echo 'Yes'; } else { echo 'No'; } ?></b> |
                                  Finance Dept Approval : <b><?php if($cs_cost>=50000) { echo 'Yes'; }
                                  else { echo 'No'; } ?></b>
                                </span>
                                */ ?>


                                <span class="pull-right">Posted on : <b><?php echo $subdatetime; ?></b></span>

                                <span class="pull-right">Posted by : <b><?php echo $this->mapi->findnamebyprofileid($profile_id); ?></b> &nbsp; | &nbsp;</span>





                                 <?php //echo $sub_by_name; ?>


                               </td>


                               <td class="text-center">
                                 <div class="d-flex align-center84">

                                   <?php
                                   if($emp_edit_status==0) { ?>
                                   <a href="<?php echo site_url('admin/kaizenidea/ideamang/postidea/'.$idea_id.''); ?>" class="btn btn-info shadow" >Edit</a>

                                   &nbsp;&nbsp;&nbsp;

                                   <a href="<?php echo site_url('admin/deletekaizenbyemp/'.$idea_id.''); ?>" class="btn btn-danger shadow" >Delete</a>


                                 <?php } else { ?>

                                 <a href="<?php echo site_url('admin/kaizenidea/ideamang/postidea/'.$idea_id.''); ?>" class="btn btn-warning shadow" >View</a>

                               <?php } ?>

                                 </div>
                               </td>

                               <?php
                               /*
                               if($viv_user_type=='TRMMADMIN') {
                                 ?>

                                 <td class="text-center">
                                   <div class="d-flex align-center84">
                                    <a target="_blank" href="<?php echo site_url('admin/downloadpdf_kaizenidea_byid/'.$idea_id.''); ?>" class="btn btn-danger shadow" >PDF</a>
                                    </div>
                                 </td>
                               <?php } */ ?>


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



                   <p id="pagination">
                   <?php
                          $links = $this->pagination->create_links();
                          echo $links;
                   ?></p>
               </div>


                 <!--END Table List-->

              </div>
          </div>
      </div>
      <!-- END Content Body Start-->
