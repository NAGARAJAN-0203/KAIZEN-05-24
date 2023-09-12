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
  <h4>Winners List - <?php echo $load_update_expiry = $this->mapi->load_update_expiry(); ?></h4>
  <span>Kaizen Idea > Kaizen Mang > View Winners List</span>

  <a href="<?php echo site_url('admin/kaizenidea/winners/createwinner'); ?>" class="btn btn-primary pull-right">Add Winner</a>
  </div>
  </div>
  </div>
  <!--END Page Title-->





<div class="row">
   <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <div>

                <?php
                $count_listwinners_gp = $this->mapi->count_listwinners_gp();
                ?>

                <h4 class="card-title">Winners List - <?php echo $count_listwinners_gp; ?>
                </h4>

              <p class="responsemessage"></p>


              </div>


          </div>

          <div class="card-body">


              <div class="table-responsive ">


                  <table class="table table-bordered table-responsive-sm tablerefresh" >


                      <thead>

                          <tr class="tablesort">

                              <th class="text-center">#</th>
                            <!--  <th>ProfilePic</th>-->
                              <th>Gold</th>
                              <th>Silver</th>
                              <th>Bronze</th>
                              <th class="text-center">Date</th>
                                <th class="text-center">Status</th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>

                        <?php
                        $listwinners_gp = $this->mapi->listwinners_gp();

                        $count_listwinners = $this->mapi->count_listwinners();
                        $findlastidofwinner = $this->mapi->findlastidofwinner();


                        if($count_listwinners_gp>0){
                         $i=1;
                         foreach ($listwinners_gp as $rowArray) {
                           $winnerid_post = $rowArray->winnerid;
                           $status = $rowArray->status;

                        ?>
                          <tr  class="<?php if($status=='1') { echo 'bgtdgreen'; } ?>">
                              <td class="text-center"><?php echo $i; ?></td>

                               <td valign="top">
                                 <table class="">
                                   <thead>
                                   <tr><td>#</td><td>EmpID Details</td> </tr>
                                   </thead>
                                   <tbody>
                                   <?php
                                   $listactivewinners = $this->mapi->listactivewinnersbyidcatg('Gold',$winnerid_post);
                                   $i=1;
                                  foreach ($listactivewinners as $listactivewinnersArray) {
                                    $winnerid = $listactivewinnersArray->winnerid;
                                    $g_catg = $listactivewinnersArray->g_catg;
                                    $g_empid = $listactivewinnersArray->g_empid;
                                    $g_name = $listactivewinnersArray->g_name;
                                    $g_domain = $listactivewinnersArray->g_domain;
                                    $g_depart = $listactivewinnersArray->g_depart;
                                     ?>
                                   <tr>
                                     <td><?php echo $i; ?></td>
                                     <td>
                                        <b><?php echo $g_empid; ?>-<?php echo $g_name; ?></b> <br/>
                                       <?php echo $g_domain; ?>, <?php echo $g_depart; ?>
                                     </td>



                                   </tr>
                                   <?php $i++; } ?>
                                 </tbody>
                                 </table>
                               </td>




                               <td valign="top">
                                 <table class="">
                                   <thead>
                                   <tr><td>#</td><td>EmpID Details</td> </tr>
                                   </thead>
                                   <tbody>
                                   <?php
                                   $listactivewinners = $this->mapi->listactivewinnersbyidcatg('Silver',$winnerid_post);
                                   $i=1;
                                  foreach ($listactivewinners as $listactivewinnersArray) {
                                    $winnerid = $listactivewinnersArray->winnerid;
                                    $g_catg = $listactivewinnersArray->g_catg;
                                    $g_empid = $listactivewinnersArray->g_empid;
                                    $g_name = $listactivewinnersArray->g_name;
                                    $g_domain = $listactivewinnersArray->g_domain;
                                    $g_depart = $listactivewinnersArray->g_depart;
                                     ?>
                                   <tr>
                                     <td><?php echo $i; ?></td>
                                     <td>
                                        <b><?php echo $g_empid; ?>-<?php echo $g_name; ?></b> <br/>
                                       <?php echo $g_domain; ?>, <?php echo $g_depart; ?>
                                     </td>



                                   </tr>
                                   <?php $i++; } ?>
                                 </tbody>
                                 </table>
                               </td>

                               <td valign="top">
                                 <table class="">
                                   <thead>
                                   <tr><td>#</td><td>EmpID Details</td> </tr>
                                   </thead>
                                   <tbody>
                                   <?php
                                   $listactivewinners = $this->mapi->listactivewinnersbyidcatg('Bronze',$winnerid_post);
                                   $i=1;
                                  foreach ($listactivewinners as $listactivewinnersArray) {
                                    $winnerid = $listactivewinnersArray->winnerid;
                                    $g_catg = $listactivewinnersArray->g_catg;
                                    $g_empid = $listactivewinnersArray->g_empid;
                                    $g_name = $listactivewinnersArray->g_name;
                                    $g_domain = $listactivewinnersArray->g_domain;
                                    $g_depart = $listactivewinnersArray->g_depart;
                                     ?>
                                   <tr>
                                     <td><?php echo $i; ?></td>
                                     <td>
                                        <b><?php echo $g_empid; ?>-<?php echo $g_name; ?></b> <br/>
                                       <?php echo $g_domain; ?>, <?php echo $g_depart; ?>
                                     </td>



                                   </tr>
                                   <?php $i++; } ?>
                                 </tbody>
                                 </table>
                               </td>

                               <?php

                                 $listactivewinnersbyid = $this->mapi->listactivewinnersbyidgdate($winnerid_post);
                                 if(!empty($listactivewinnersbyid)) {
                                 foreach ($listactivewinnersbyid as $listactivewinnersbyidArray) {
                                   $startdate_ls  = $listactivewinnersbyidArray->startdate;
                                   $enddate_ls  = $listactivewinnersbyidArray->enddate;
                                  }
                                }
                               ?>


                               <td class="text-center">
                                 <b>Start Date</b></br>
                                 <?php echo $startdate_ls; ?></br></br>
                                 <b>End Date</b></br>
                                 <?php echo $enddate_ls; ?>
                               </td>


                               <td class="text-center">
                                <?php $status = $rowArray->status;
                                if($status==1) { ?>
                                <a href="<?php echo site_url('admin/updwinnerstatus/'.$winnerid_post.'/0'); ?>"><span class="badge-sm badge-success">Active</span></a>
                              <?php } else if($status==0) { ?>
                                <a href="<?php echo site_url('admin/updwinnerstatus/'.$winnerid_post.'/1'); ?>"><span class="badge-sm badge-warning">Inactive</span></a>
                              <?php } else if($status==2) { ?>
                                <a><span class="badge-sm badge-danger">Expired</span></a>
                              <?php } ?>
                              </td>

                               <td>
                                  <div class="d-flex align-center84">

                                  <a href="<?php echo site_url('admin/kaizenidea/winners/createwinner/'.$winnerid_post.''); ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>


                                  <a  onclick="return confirm('Are you sure you want to delete this winner list page?');" href="<?php echo site_url('admin/deletewinner/'.$winnerid_post.''); ?>" dataid="" class="btn btn-danger shadow btn-xs sharp deleteuser"><i class="fa fa-trash"></i></a>
                                  </div>
                              </td>
                          </tr>

                        <?php $i++; }

                      } else {

                        ?>
                        <tr>
                      <td colspan="7">
                      No Records Found
                      </td>
                  </tr>
                      <?php } ?>


                      </tbody>
                  </table>




              </div>
          </div>
      </div>
  </div>
 </div>









</div>
</div>
