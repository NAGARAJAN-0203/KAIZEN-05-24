
<?php
$viv_user_type = $this->session->userdata('viv_user_type');
$viv_feeslist = $this->session->userdata('viv_feeslist');
 ?>

 <?php
   $uri4 = $this->uri->segment(4);
   $uri5 = $this->uri->segment(5); if(empty($uri5)) { $uri5 = 'tp'; }
   $uri6 = $this->uri->segment(6);
 ?>

<div class="content-body">
<div class="container-fluid">

  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-6 p-md-0">
  <div class="welcome-text">
  <h4>View My Ideas</h4>
  <span>Kaizen Idea > Idea Mang > View My Ideas</span>
  </div>
  </div>
  </div>
  <!--END Page Title-->



  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">

    <div class="">


      <?php

      /** CURL **/
      $url = site_url('api/viewallassigntask/1');
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TCP_FASTOPEN, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
      $output = curl_exec($ch);
      curl_close($ch);

      //print_r($output);
      $data = json_decode($output);
      /** END CURL **/


      foreach ($data as $rowArray) {
        $data_common = $rowArray->data_common;
        $data_list = $rowArray->data_list;
      }

      foreach ($data_common as $rowArray) {
        $count_totalpending = $rowArray->count_totalpending;
        $count_open = $rowArray->count_open;
        $count_reopen = $rowArray->count_reopen;
        $count_closed = $rowArray->count_closed;
        $count_escalated = $rowArray->count_escalated;
        $count_hold = $rowArray->count_hold;
        $count_cancelled = $rowArray->count_cancelled;
       }
      ?>


      <!--Div-->
      <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/6'); ?>">
     <div class="divcount pull-right">
      <div class="bgl-primary rounded p-2">
        <p class="mb-0 counttitle">Cancelled</p>
        <p class="mb-0 countnumb text-center"><?php echo $count_cancelled; ?></p>
      </div>
      </div>
      </a>
      <!--END Div-->


      <!--Div-->
      <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/5'); ?>">
     <div class="divcount pull-right">
      <div class="bgl-primary rounded p-2">
        <p class="mb-0 counttitle">Hold</p>
        <p class="mb-0 countnumb text-center"><?php echo $count_hold; ?></p>
      </div>
    </div>
    </a>
      <!--END Div-->


          <!--Div-->
          <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/4'); ?>">
         <div class="divcount pull-right">
          <div class="bgl-primary rounded p-2">
            <p class="mb-0 counttitle">Escalated</p>
            <p class="mb-0 countnumb text-center"><?php echo $count_escalated; ?></p>
          </div>
        </div>
        </a>
          <!--END Div-->



          <!--Div-->
          <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/3'); ?>">
         <div class="divcount pull-right">
          <div class="bgl-primary rounded p-2">
            <p class="mb-0 counttitle">Closed</p>
            <p class="mb-0 countnumb text-center"><?php echo $count_closed; ?></p>
          </div>
        </div>
        </a>
          <!--END Div-->


            <!--Div-->
            <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/2'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-primary rounded p-2">
              <p class="mb-0 counttitle">Re-Open</p>
              <p class="mb-0 countnumb text-center"><?php echo $count_reopen; ?></p>
            </div>
          </div>
          </a>
            <!--END Div-->

            <!--Div-->
            <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/1'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-primary rounded p-2">
              <p class="mb-0 counttitle">Open</p>
              <p class="mb-0 countnumb text-center"><?php echo $count_open; ?></p>
            </div>
          </div>
          </a>
            <!--END Div-->


            <!--Div-->
          <a href="<?php echo site_url('admin/tremmeandous/taskmang/viewtask/tp'); ?>">
           <div class="divcount pull-right">
            <div class="bgl-primary rounded p-2">
              <p class="mb-0 counttitle">Total Pendings</p>
              <p class="mb-0 countnumb text-center blink_me_brown"><b><?php echo $count_totalpending; ?></b></p>
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
                   <h5 class="my-1 text-primary">Ideas List - <small><i>Last Updated at :<span class="lastrefreshtime"></span></i> </small></h5>
                   <!--<p class="read-content-email">To: Me, info@example.com</p>-->
                   <p class="responsemessage"></p>
                </div>
                 <div class="media-body"><span class="pull-right">
                   <input type="text" id="searchreturnstatement" placeholder="Search"></input>



                 </div>


                 <!--Table LISt-->


               <div class="table-responsive">

                 <div class="ajaxload">
                   <img src="<?php echo base_url(); ?>assets/images/ajaxload.gif" class="imgajaxload" />
                 </div>

                   <table id="tabletoexcel" class="table table-bordered table-responsive-sm tablerefresh tablefixheadcolumn tasklistautorefresh">


                       <thead>


                           <tr class="tablesort">
                               <th class="text-center">#</th>
                               <th>Idea Details</th>
                               <th class="text-center">Action</th>
                                <!--<th class="text-center">Action</th>-->

                           </tr>
                       </thead>
                       <tbody>

                         <?php


                         if(empty($data_list)) {  ?>

                           <tr><td colspan="3">Sorry! No records added yet...</td></tr>

                         <?php } else {

                         $i=1;
                         foreach ($data_list as $rowArray) {
                           $task_id = $rowArray->task_id;
                           $client_id_p = $rowArray->client_id;
                           $client_name = $rowArray->client_name;


                           $profile_id = $rowArray->profile_id;
                           $empname = $rowArray->empname;

                           $startdate = $rowArray->startdate;
                           $deadline = $rowArray->deadline;
                           $tasktitle = $rowArray->tasktitle;
                           $taskdesc = $rowArray->taskdesc;
                           $status = $rowArray->status;
                           $sdate = $rowArray->sdate;
                           $sday = $rowArray->sday;
                           $smonth = $rowArray->smonth;
                           $syear = $rowArray->syear;
                           $subdatetime = $rowArray->subdatetime;
                           $updatedinfo = $rowArray->updatedinfo;

                           $sub_by = $rowArray->sub_by;
                           $sub_by_name = $rowArray->sub_by_name;


                           if($status==1) { $trow = ''; } //Open
                           elseif($status==2) { $trow = ''; } //Re-Open
                           elseif($status==3) { $trow = 'bgmildgreen'; } //Closed
                           elseif($status==4) { $trow = 'bgmildred'; } //Escalated
                           elseif($status==5) { $trow = 'bgmildgray'; } //Hold
                           elseif($status==6) { $trow = 'bgmildstrike'; } //Cancelled
                           else { $trow = ''; }

                           //$monthName = date('M', mktime(0, 0, 0, $fmonth, 10));
                          ?>


                           <tr class="<?php echo $trow; ?>">
                               <td class="text-center"><?php echo $i; ?></td>
                               <td>
                                 <p>Submitted To : <b>Supervisor</b>
                                   <span class="pull-right">Posted by : <b><?php echo $sub_by_name; ?></b></span>
                                   <br/>
                                    Client : <b><?php echo $client_name; ?></b>

                                 </p>
                                 <p><?php echo $tasktitle; ?></p>


                                 <span class="pull-left">
                                  Status :
                                 <?php
                                 if($status==1) { ?>
                                 <span class="badge bgmildgray">Open</span>
                               <?php } else if($status==2) { ?>
                                   <span class="badge bgmildgray">Re-Open</span>
                               <?php } else if($status==3) { ?>
                                     <span class="badge bgmildclos">Closed</span>
                               <?php } else if($status==4) { ?>
                                         <span class="badge bgmildesc">Escalated</span>

                               <?php } else if($status==5) { ?>
                                         <span class="badge bgmildgray">Hold</span>
                               <?php } else if($status==6) { ?>
                                         <span class="badge bgmildcanc">Cancelled</span>
                                 <?php } ?>
                                </span>


                                &nbsp; | &nbsp;
                                <span class="">Start Date : <b><?php echo $startdate; ?></b></span>
                                &nbsp; | &nbsp;
                                <span class="">DeadLine : <b><?php echo $deadline; ?></b></span>




                                 <?php //echo $sub_by_name; ?>
                                 <span class="pull-right">Posted on : <b><?php echo $subdatetime; ?></b></span>

                               </td>


                               <td class="text-center">
                                 <div class="d-flex align-center84">
                                 <a class="btn btn-warning shadow btn-xs sharp mr-1 view_taskdetail" data-toggle="modal" data-target="#view_taskdetail" task_id="<?php echo $task_id; ?>"><i class="fa fa-eye"></i></a>

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


      <!-- Modal -->
    <div class="modal fade" id="view_taskdetail" role="dialog">
      <div class="modal-dialog">


        <form  id="update_taskdetail_status" method="post" autocomplete="off">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">View Task Detail</h4>
          </div>



          <div class="modal-body">
            <!--Form-->
            <div class="basic-form">

                  <div class="form-row">


                    <div class="form-group col-md-12">
                       <b><p class="etasktitle fontsize16"></p></b>
                       <p class="etaskdetail fontsize12"></p>
                    </div>

                    <div class="form-group col-md-12">
                       <label>Task Status</label>
                       <select id="estatus" name="status" class="form-control estatus">
                         <option value="">select</option>
                         <option value="1">Open</option>
                         <option value="2">Re-Open</option>
                         <option value="3">Closed</option>
                         <option value="4">Escalated</option>
                         <option value="5">Hold</option>
                         <option value="6">Cancelled</option>
                       </select>
                    </div>

                    <?php if($viv_user_type=='TRMMADMIN') { ?>
                    <div class="form-group col-md-12">
                       <b><p>Status History :</p></b>
                       <p class="eupdatedinfo fontsize12"></p>
                    </div>
                    <?php } ?>


                   </div>


              </div>
            <!--END Form-->
          </div>

          <input type="hidden" name="task_id" class="etask_id" value="" />
          <input type="hidden" name="sub_by" value="<?php echo $this->session->userdata('viv_profile_id'); ?>" />


          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="enbbtn">Update</button>
          </div>
        </div>
      </form>

      </div>
    </div>
      <!-- END Modal -->
