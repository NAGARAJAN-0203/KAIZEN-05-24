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
                $count_listwinners = $this->mapi->count_listwinners();
                ?>

                <h4 class="card-title">Winners List - <?php echo $count_listwinners; ?>
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
                              <th class="text-center">Start Date</th>
                              <th class="text-center">End Date</th>
                               <th class="text-center">Status</th>
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>

                        <?php
                        $listwinners = $this->mapi->listwinners();
                        $count_listwinners = $this->mapi->count_listwinners();
                        $findlastidofwinner = $this->mapi->findlastidofwinner();


                        if($count_listwinners>0){
                         $i=1;
                         foreach ($listwinners as $rowArray) {
                           $winnerid = $rowArray->winnerid;
                           $idd = $rowArray->id;
                        ?>
                          <tr class="<?php if($findlastidofwinner==$idd) { echo 'bgtdgreen'; } ?>">
                              <td class="text-center"><?php echo $i; ?></td>

                               <td><?php
                               echo "EmpID : ".$rowArray->g_empid."<br/>";
                               echo "Name : ".$rowArray->g_name."<br/>";
                               echo "Domain : ".$rowArray->g_domain."<br/>";
                               echo "Department : ".$rowArray->g_depart."<br/>";
                                  ?>
                               </td>
                               <td><?php
                               echo "EmpID : ".$rowArray->s_empid."<br/>";
                               echo "Name : ".$rowArray->s_name."<br/>";
                               echo "Domain : ".$rowArray->s_domain."<br/>";
                               echo "Department : ".$rowArray->s_depart."<br/>";
                                  ?>
                               </td>

                               <td><?php
                               echo "EmpID : ".$rowArray->b_empid."<br/>";
                               echo "Name : ".$rowArray->b_name."<br/>";
                               echo "Domain : ".$rowArray->b_domain."<br/>";
                               echo "Department : ".$rowArray->b_depart."<br/>";
                                  ?>
                               </td>

                               <td class="text-center">
                                 <?php echo $rowArray->startdate; ?>
                               </td>
                               <td class="text-center">
                                 <?php echo $rowArray->enddate; ?>
                               </td>

                               <td class="text-center">
                                <?php $status = $rowArray->status;
                                if($status==1) { ?>
                                <a href="<?php echo site_url('admin/updwinnerstatus/'.$winnerid.'/0'); ?>"><span class="badge-sm badge-success">Active</span></a>
                              <?php } else if($status==0) { ?>
                                <a href="<?php echo site_url('admin/updwinnerstatus/'.$winnerid.'/1'); ?>"><span class="badge-sm badge-warning">Inactive</span></a>
                              <?php } else if($status==2) { ?>
                                <a><span class="badge-sm badge-danger">Expired</span></a>
                              <?php } ?>
                              </td>

                               <td>
                                  <div class="d-flex align-center84">
                                    <!--
                                  <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                -->

                                  <a  onclick="return confirm('Are you sure you want to delete this winner list page?');" href="<?php echo site_url('admin/deletewinner/'.$winnerid.''); ?>" dataid="" class="btn btn-danger shadow btn-xs sharp deleteuser"><i class="fa fa-trash"></i></a>
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
