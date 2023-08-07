<?php
					$uri2 = $this->uri->segment(2);
					$uri3 = $this->uri->segment(3);
					$uri4 = $this->uri->segment(4);
          $uri5 = $this->uri->segment(5);
					$uri6 = $this->uri->segment(6);
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
  <h4>Remainder</h4>
  <span>Kaizen Form > Bulk Remainder</span>
  <p class="responsemessage"></p>
  </div>
  </div>
  </div>
  <!--END Page Title-->

<p>&nbsp;</p>




<div class="row page-titles mx-0">


  <div class="media mb-2">
    <h5 class="my-1 text-primary">Kaizen Pending List :</h5>
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
                <th>Utilities</th>
                <th>Action</th>
                 <!--<th class="text-center">Action</th>-->

            </tr>
        </thead>
        <tbody>


            <tr class="">
                <td class="text-center">1</td>
                <td>
                  <p><b>Kaizen Form - DRI Pending </b>
                    <span class="pull-right">
                      Total Pending :
                      <span class="badge bgmildgray"><?php
                    	$tsts = '1';
                    	$count_listmyideas = $this->mapi->count_listmyideasbystatus('',$tsts);
                    	echo $count_listmyideas;
                    	?></span>
                       </b></span>
                   </p>
                 </td>


                <td class="text-center">
                  <div class="d-flex align-center84">
                  <a href="<?php echo site_url(''); ?>" class="btn btn-warning shadow" >Send Remainder Emails</a>

                  </div>
                </td>
             </tr>



							<?php /*

             <tr class="">
                 <td class="text-center">2</td>
                 <td>
                   <p>Total Kaizen Form Submitted <b>: Approved by HOD</b>
                     <span class="pull-right">
                       Total Rows :
                       <span class="badge bgmildgray"><?php
                     	  $tstsapp = '2';
                      	$count_listmyideas = $this->mapi->count_listmyideasbystatus($tstsapp);
                      	echo $count_listmyideas;
                      	?></span>
                        </b></span>
                    </p>
                  </td>


                 <td class="text-center">
                   <div class="d-flex align-center84">
                   <a href="<?php echo site_url('admin/downloadkaizenreportexcel/hodapproved'); ?>" class="btn btn-warning shadow" >Download</a>

                   </div>
                 </td>
              </tr>

              <tr class="">
                  <td class="text-center">2</td>
                  <td>
                    <p>Total Kaizen Form Submitted <b>: Rejected by HOD</b>
                      <span class="pull-right">
                        Total Rows :
                        <span class="badge bgmildgray"><?php
                      	$tstsrej = '3';
                       	$count_listmyideas = $this->mapi->count_listmyideasbystatus($tstsrej);
                       	echo $count_listmyideas;
                       	?></span>
                         </b></span>
                     </p>
                   </td>


                  <td class="text-center">
                    <div class="d-flex align-center84">
                    <a href="<?php echo site_url('admin/downloadkaizenreportexcel/hodrejected'); ?>" class="btn btn-warning shadow" >Download</a>

                    </div>
                  </td>
               </tr>

							 */ ?>





        </tbody>
    </table>
</div>


  <!--END Table List-->

</div>




</div>


<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
