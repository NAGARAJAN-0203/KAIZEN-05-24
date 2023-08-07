

 <?php
   //admin/kaizenidea/ideamang/myidea_monthfilter/dri/pending
   /*
   $uri4 = $this->uri->segment(4);
   $uri5 = $this->uri->segment(5); //role
   $uri6 = $this->uri->segment(6); //status
   $uri7 = $this->uri->segment(7); //year
   $uri8 = $this->uri->segment(8); //month
   $uri9 = $this->uri->segment(9); // pagenumber
   */


   $uri4 = $this->uri->segment(4);
   $uri5 = $this->uri->segment(5); //Year
   $uri6 = $this->uri->segment(6); //Mon
   $uri7 = $this->uri->segment(7); //Domain
   $uri8 = $this->uri->segment(8); //Depart
   $uri9 = $this->uri->segment(9); // role
   $uri10 = $this->uri->segment(10); // status
   $uri11 = $this->uri->segment(11); // pageno


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
  <!--Box-->
  <div class="row">
  <div class="col-xl-4 col-lg-4 col-sm-4">

          <div class="card overflow-hidden">
                          <div class="card-body">
                              <div class="text-center">
                                  <div class="profile-photo">
                  <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
                </div>    <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/dri/all/all/all'); ?>">
                                  <h4 class="card-title">DRI</h4>
                                  <h3><?php
                                 $tsts = '1,2,3,4,5,6,7';
                                 $typ_stsd = 'dri';
                                 $count_listmyideastypebystatus_filter_month2_dri = $this->mapi->count_listmyideastypebystatus_filter_month2($tsts,$typ_stsd,$uri5,$uri6,$uri7,$uri8);
                                 echo $count_listmyideastypebystatus_filter_month2_dri;
                                 ?></h3>
                               </a>
                                 <div class="progress mb-2">
                                 <div class="progress-bar progress-animated bg-default" style="width: 80%"></div>
                                 </div>
                              </div>
                          </div>

                          <div class="card-footer pt-0 pb-0 text-center">
                              <div class="row">

                <div class="col-4 pt-3 pb-3 border-right">
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/dri/pending/all/all'); ?>">
                  <h3 class="mb-1">
                    <?php
                   $tstsrej_m = '1';
                   $typ_sts_d = 'dri';
                   $count_listmyideas_dri = $this->mapi->count_listmyideastypebystatus_filter_month2($tstsrej_m,$typ_sts_d,$uri5,$uri6,$uri7,$uri8);
                   echo $count_listmyideas_dri;
                   ?>
                 </h3><span>Pending</span>
                 </a>
                </div>


                <div class="col-4 pt-3 pb-3 border-right">
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/dri/approved/all/all'); ?>">
                  <h3 class="mb-1">
                    <?php
                 $tstsapp_dri = '2,4,5,6,7';
                 $count_listmyideas_dri = $this->mapi->count_listmyideasbystatus_filter_month2($tstsapp_dri,$uri5,$uri6,$uri7,$uri8);
                 echo $count_listmyideas_dri;
                 ?>
               </h3><span>Approved</span>
                  </a>
                </div>


                <div class="col-4 pt-3 pb-3">
                  <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/dri/rejected/all/all'); ?>">
                  <h3 class="mb-1">
                    <?php
                $tstsapp_dri = '3';
                $count_listmyideas_dri = $this->mapi->count_listmyideasbystatus_filter_month2($tstsapp_dri,$uri5,$uri6,$uri7,$uri8);
                echo $count_listmyideas_dri;
                ?>
               </h3><span>Rejected</span>
                  </a>
                </div>



                              </div>
                          </div>
                      </div>

        </div>
        <!--End Box-->



        <!--Box-->
        <div class="col-xl-4 col-lg-4 col-sm-4">

                <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="profile-photo">
                        <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
                      </div>					<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/iedept/all/all/all'); ?>">
                                        <h4 class="card-title">IE Dept</h4>
                                        <h3><?php
                                       $tsts = '2,3,4,5,6,7';
                                       $typ_stsi = 'iedept';
                                       $count_listmyideastypebystatus_filter_month2_iedept = $this->mapi->count_listmyideastypebystatus_filter_month2($tsts,$typ_stsi,$uri5,$uri6,$uri7,$uri8);
                                       echo $count_listmyideastypebystatus_filter_month2_iedept;
                                       ?></h3>
                                        </a>

                                       <div class="progress mb-2">
                                       <div class="progress-bar progress-animated bg-default" style="width: 80%"></div>
                                       </div>
                                    </div>
                                </div>

                                <div class="card-footer pt-0 pb-0 text-center">
                                    <div class="row">

                      <div class="col-4 pt-3 pb-3 border-right">
                        <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/iedept/pending'); ?>">
                        <h3 class="mb-1">
                          <?php
                         $tstsrej_m = '2';
                         $typ_sts_d = 'iedept';
                         $count_listmyideas_iedept = $this->mapi->count_listmyideastypebystatus_filter_month2($tstsrej_m,$typ_sts_d,$uri5,$uri6,$uri7,$uri8);
                         echo $count_listmyideas_iedept;
                         ?>
                       </h3><span>Pending</span>
                       </a>
                      </div>


                      <div class="col-4 pt-3 pb-3 border-right">
                        <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/iedept/approved/all/all'); ?>">
                        <h3 class="mb-1">
                          <?php
                       $tstsapp_iedept = '4,6,7';
                       $count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus_filter_month2($tstsapp_iedept,$uri5,$uri6,$uri7,$uri8);
                       echo $count_listmyideas_iedept;
                       ?>
                     </h3><span>Approved</span>
                        </a>
                      </div>


                      <div class="col-4 pt-3 pb-3">
                        <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/iedept/rejected/all/all'); ?>">
                        <h3 class="mb-1">
                          <?php
                      $tstsapp_iedept = '5';
                      $count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus_filter_month2($tstsapp_iedept,$uri5,$uri6,$uri7,$uri8);
                      echo $count_listmyideas_iedept;
                      ?>
                     </h3><span>Rejected</span>
                        </a>
                      </div>



                                    </div>
                                </div>
                            </div>

              </div>
              <!--End Box-->



              <!--Box-->
              <div class="col-xl-4 col-lg-4 col-sm-4">

                      <div class="card overflow-hidden">
                                      <div class="card-body">
                                          <div class="text-center">
                                              <div class="profile-photo">
                              <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
                            </div>
                            <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/finance/all/all/all'); ?>">
                                              <h4 class="card-title">Finance</h4>
                                              <h3><?php
                                             $tsts = '4,6,7';
                                             $typ_stsf = 'finance';
                                             $count_listmyideastypebystatus_filter_month2_finance = $this->mapi->count_listmyideastypebystatus_filter_month2($tsts,$typ_stsf,$uri5,$uri6,$uri7,$uri8);
                                             echo $count_listmyideastypebystatus_filter_month2_finance;
                                             ?></h3>
                                           </a>
                                             <div class="progress mb-2">
                                             <div class="progress-bar progress-animated bg-default" style="width: 80%"></div>
                                             </div>
                                          </div>
                                      </div>

                                      <div class="card-footer pt-0 pb-0 text-center">
                                          <div class="row">

                            <div class="col-4 pt-3 pb-3 border-right">
                              <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/finance/pending/all/all'); ?>">
                              <h3 class="mb-1">
                                <?php
                               $tstsrej_m = '4';
                               $typ_sts_d = 'finance';
                               $count_listmyideas_fin = $this->mapi->count_listmyideastypebystatus_filter_month2($tstsrej_m,$typ_sts_d,$uri5,$uri6,$uri7,$uri8);
                               echo $count_listmyideas_fin;
                               ?>
                             </h3><span>Pending</span>
                             </a>
                            </div>


                            <div class="col-4 pt-3 pb-3 border-right">
                              <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/finance/approved/all/all'); ?>">
                              <h3 class="mb-1">
                                <?php
                             $tstsapp_fin = '6';
                             $count_listmyideas_fin = $this->mapi->count_listmyideasbystatus_filter_month2($tstsapp_fin,$uri5,$uri6,$uri7,$uri8);
                             echo $count_listmyideas_fin;
                             ?>
                           </h3><span>Approved</span>
                              </a>
                            </div>


                            <div class="col-4 pt-3 pb-3">
                              <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/finance/rejected/all/all'); ?>">
                              <h3 class="mb-1">
                                <?php
                            $tstsapp_fin = '7';
                            $count_listmyideas_fin = $this->mapi->count_listmyideasbystatus_filter_month2($tstsapp_fin,$uri5,$uri6,$uri7,$uri8);
                            echo $count_listmyideas_fin;
                            ?>
                           </h3><span>Rejected</span>
                              </a>
                            </div>



                                          </div>
                                      </div>
                                  </div>

                    </div>
                  </div>
                    <!--End Box-->


  <!--END Page Title-->

<?php
$viv_user_type = $this->session->userdata('viv_user_type');
$viv_profile_id = $this->session->userdata('viv_profile_id');
$viv_email = $this->session->userdata('viv_email');

?>


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

                         $listmyideas = $this->mapi->listmyideas_month();
                         if(empty($listmyideas)) {  ?>

                           <tr><td colspan="3">Sorry! No records added yet...</td></tr>

                         <?php } else {


                         if(empty($uri11)) { $uri11 = 0; }
                          $i=$uri11+1;


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





                          ?>


                           <tr class="">
                               <td class="text-center"><?php echo $i; ?></td>
                               <td>
                                 <p>Kaizen Theme : <b><?php echo $ktheme; ?></b>
                                   <span class="pull-right"><b>
                                     Status :
                                    <?php
                                    if($status==1 && $imgapprov==1) { ?>
                                    <span class="badge bgmildgray">Waiting for Image Sanitization</span>

                                  <?php } else if($status==1 && $imgapprov==3) { ?>
                                  <span class="badge bgmildred">Images Sanitization Rejected</span>

                                <?php } else if($status==1 && $imgapprov==2) { ?>
                                    <span class="badge bgmildgray">Waiting for DRI Approval</span>

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





                                 <?php //echo $sub_by_name; ?>


                               </td>


                               <td class="text-center">
                                 <div class="d-flex align-center84">

                                   <?php
                                   if($status==0) { ?>
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
