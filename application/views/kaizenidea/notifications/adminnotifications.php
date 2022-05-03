



<div class="content-body">
<div class="container-fluid">

  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-6 p-md-0">
  <div class="welcome-text">
  <h4>Admin Notifications</h4>
  <span>Tremmeandous > Dashboard > Notifications</span>
  </div>
  </div>
  </div>
  <!--END Page Title-->


               <div class="row page-titles mx-0">


                 <div class="media mb-2">
                   <!--<h5 class="my-1 text-primary">Notifications</h5>-->
                   <!--<p class="read-content-email">To: Me, info@example.com</p>-->
                 </div>
                 <div class="media-body">



                 </div>


                 <!--Table LISt-->
                 <?php
                   $uri4 = $this->uri->segment(4);
                   $uri5 = $this->uri->segment(5);
                   $uri6 = $this->uri->segment(6);
                 ?>

                 <div class="col-sm-12">

                 <div class="">
                     <div role="toolbar" class="toolbar ml-1 ml-sm-0">



                         <div class="btn-group mb-1">
                             <button class="btn btn-primary light px-3 clickdivreferesh" type="button"><i class="ti-reload"></i>
                             </button>
                         </div>
                         <div class="btn-group mb-1">
                             <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle" type="button">List <span
                                     class="caret"></span>
                             </button>
                             <div class="dropdown-menu">
                               <a href="#" class="dropdown-item">Unread</a>
                               <a href="#" class="dropdown-item">Today</a>
                               <a href="#" class="dropdown-item">This Month</a>
                               <a href="#" class="dropdown-item">All</a>
                             </div>
                         </div>
                     </div>
                     <div class="email-list mt-3 divreferesh">



                       <?php
                       $status = 'NULL';
                       $readstatus = 'NULL';
                       $url = site_url('api/viewadminnotifications/'.$status.'/'.$readstatus.'');
                       $json= file_get_contents($url);
                       $data = json_decode($json);
                       //print_r($json);

                       if(empty($data)) {  ?>

                         <tr><td colspan="8">Sorry! No Notifications yet...</td></tr>

                       <?php } else {

                       $i=1;
                       foreach ($data as $rowArray) {
                         $notificationid = $rowArray->notificationid;
                         $ncatg = $rowArray->ncatg;
                         $openstatus = $rowArray->openstatus;
                         $ntitle = $rowArray->ntitle;
                         $ndesc = $rowArray->ndesc;
                         $stime = $rowArray->stime;

                         $ndesc_deco = json_decode($ndesc);
                         foreach ($ndesc_deco as $ndesc_decoArray) {

                           if($ncatg=='RETURN_STATEMENT')  {
                                 $clientid = $ndesc_decoArray->clientid;
                                 $checkid = $ndesc_decoArray->checkid;
                                 $sub_by = $ndesc_decoArray->sub_by;
                                 $status = $ndesc_decoArray->status;

                                 $empnamebypid = site_url('api/empnamebypid/'.$sub_by.'');
                                 $empnamebypidjson= file_get_contents($empnamebypid);

                                 $companynamebypid = site_url('api/companynamebypid/'.$clientid.'');
                                 $companynamebypidjson= file_get_contents($companynamebypid);

                                 if(empty($status)) { $status_name = 'No'; }
                                 elseif($status=='1') { $status_name = 'Yes'; }
                           }



                         }

                         ?>
                        <!--List-->
                         <div class="message <?php if($openstatus=='1') { echo 'readmsg'; } else {  } ?> clicknotifyread" notifyid="<?php echo $notificationid; ?>">
                             <div>
                                 <div class="d-flex message-single">
                                     <div class="pl-1 align-self-center">
                              <!--
                               <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="checkbox2">
                                 <label class="custom-control-label" for="checkbox2"></label>
                               </div>
                             -->
                         </div>
                                     <div class="ml-2">
                                         <button class="border-0 bg-transparent align-middle p-0"><i
                                                 class="fa fa-star" aria-hidden="true"></i></button>
                                     </div>
                                 </div>
                                 <a class="col-mail col-mail-2">
                                     <div class="subject"><?php echo $ntitle; ?> as <?php echo "<b>".$status_name." (".$checkid.")</b>"; ?> for <?php echo $companynamebypidjson; ?> by <?php echo $empnamebypidjson; ?></div>
                                     <div class="date"><?php echo $stime; ?></div>
                                 </a>
                             </div>
                         </div>
                         <!--END List-->
                       <?php }  $i++;  } ?>




                     </div>
                     <!-- panel -->
                     <div class="row mt-4">
                         <div class="col-12 pl-3">
                             <nav>
         <ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
           <li class="page-item page-indicator"><a class="page-link" href="#"><i class="la la-angle-left"></i></a></li>
           <li class="page-item "><a class="page-link" href="#">1</a></li>
           <li class="page-item active"><a class="page-link" href="#">2</a></li>
           <li class="page-item"><a class="page-link" href="#">3</a></li>
           <li class="page-item"><a class="page-link" href="#">4</a></li>
           <li class="page-item page-indicator"><a class="page-link" href="#"><i class="la la-angle-right"></i></a></li>
         </ul>
       </nav>
                         </div>
                     </div>
                 </div>
               </div>

                 <!--END Table List-->

              </div>
          </div>
      </div>
      <!-- END Content Body Start-->
