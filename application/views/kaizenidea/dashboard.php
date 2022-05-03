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
  <h4 class="col-sm-1">Dashboard</h4>
  </div>
  </div>
  </div>
  <!--END Page Title-->


<?php if($viv_user_type=='TRMMADMIN') { ?>


  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
		<h6 class="text-right">Total Kaizens Submitted  / Total Employees in Domain</h4>
  <div class="welcome-text">

    <?php
    $listgroupbydomain = $this->mapi->listgroupbydomain();
    foreach ($listgroupbydomain as $listgroupbydomainrowArray) {
      $domain = $listgroupbydomainrowArray->domain;
      $uri4 = str_replace('%20', ' ', $uri4);
     ?>

    <div class="">
           <!--Div-->
					 <a href="<?php echo site_url('admin/kaizenidea/dashboard/'.$domain.''); ?>">
            <div class="divcount pull-right">
            <div class="<?php if($uri4==$domain) { echo 'bgl-green'; } else { echo 'bgl-primary'; } ?> rounded p-2">
              <p class="mb-0 counttitle txt-center"><?php echo $domain; ?></p>
              <p class="mb-0 countnumb text-center"><b><?php
							$count_totalkaizenbydomain = $this->mapi->count_totalkaizenbydomain($domain);
							$count_totalkaizenusersdomain = $this->mapi->count_totalkaizenusersdomain($domain);
              $count_empbydomain = $this->mapi->count_empbydomain($domain);

              echo $count_totalkaizenbydomain." / ".$count_empbydomain." ";
              ?></b></p>
            </div>
						<center><?php
						$diff = ($count_totalkaizenbydomain / $count_empbydomain) * 100;
						//echo round($diff);
						echo number_format((float)$diff, 2, '.', '');
						?>%</center>
          </div>
					</a>
             <!--END Div-->
     </div>

   <?php } ?>

  </div>
  </div>
  </div>
  <!--END Page Title-->



	<?php if(!empty($uri4)) { ?>
	<!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
		<h6 class="text-right">Total Kaizens Submitted  / Total Employees in Department</h4>
  <div class="welcome-text">

    <?php
    $listgroupbydeptbydomain = $this->mapi->listgroupbydeptbydomain($uri4);
    foreach ($listgroupbydeptbydomain as $listgroupbydeptbydomainArray) {
			//$domain = $listgroupbydeptbydomainArray->domain;
      $depart = $listgroupbydeptbydomainArray->depart;
      ?>

    <div class="">
           <!--Div-->
             <div class="divcount pull-right">
            <div class="bgl-primary rounded p-2">
              <p class="mb-0 counttitle txt-center"><?php echo $depart; ?></p>
              <p class="mb-0 countnumb text-center"><b><?php
							$count_totalkaizenbydepart = $this->mapi->count_totalkaizenbydepart($uri4,$depart);
							//$count_totalkaizenusersdomain = $this->mapi->count_totalkaizenusersdomain($domain);
              $count_empbydepart = $this->mapi->count_empbydepart($uri4,$depart);

              echo $count_totalkaizenbydepart." / ".$count_empbydepart." ";
              ?></b></p>
            </div>
						<center><?php
						$diff_depart = ($count_totalkaizenbydepart / $count_empbydepart) * 100;
						//echo round($diff);
						echo number_format((float)$diff_depart, 2, '.', '');
						?>%</center>
          </div>
              <!--END Div-->
     </div>

   <?php } ?>

  </div>
  </div>
  </div>
  <!--END Page Title-->
<?php } ?>


<?php } ?>




<?php if($viv_user_type=='TRMMMANG') { ?>


  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
		<h6 class="text-right">Total Kaizens Submitted  / Total Employees in Domain</h4>
  <div class="welcome-text">

    <?php
 		$viv_domain = $this->session->userdata('viv_domain');
    $listgroupbydomain_byid = $this->mapi->listgroupbydomain_byid($viv_domain);
    foreach ($listgroupbydomain_byid as $listgroupbydomainrowArray) {
      $domain = $listgroupbydomainrowArray->domain;

      $uri4 = str_replace('%20', ' ', $uri4);
     ?>

    <div class="">
           <!--Div-->
             <div class="divcount pull-right">
            <div class="<?php if($uri4==$domain) { echo 'bgl-green'; } else { echo 'bgl-primary'; } ?> rounded p-2">
              <p class="mb-0 counttitle txt-center"><?php echo $domain; ?></p>
              <p class="mb-0 countnumb text-center"><b><?php
							$count_totalkaizenbydomain = $this->mapi->count_totalkaizenbydomain($domain);
							$count_totalkaizenusersdomain = $this->mapi->count_totalkaizenusersdomain($domain);
              $count_empbydomain = $this->mapi->count_empbydomain($domain);

              echo $count_totalkaizenbydomain." / ".$count_empbydomain." ";
              ?></b></p>
            </div>
						<center><?php
						$diff = ($count_totalkaizenbydomain / $count_empbydomain) * 100;
						//echo round($diff);
						echo number_format((float)$diff, 2, '.', '');
						?>%</center>
          </div>
              <!--END Div-->
     </div>

   <?php } ?>



	 <?php

	 $viv_email = $this->session->userdata('viv_email');
	 $finddepart = $this->mapi->finddepartbyemail($viv_email);
	 $listgroupbydeptbydomaindepart = $this->mapi->listgroupbydeptbydomaindepart($viv_domain,$finddepart);
	 foreach ($listgroupbydeptbydomaindepart as $listgroupbydeptbydomainArray) {
		 //$domain = $listgroupbydeptbydomainArray->domain;
		 $depart = $listgroupbydeptbydomainArray->depart;
		 ?>

	 <div class="">
					<!--Div-->
						<div class="divcount pull-right">
					 <div class="bgl-primary rounded p-2">
						 <p class="mb-0 counttitle txt-center"><?php echo $depart; ?></p>
						 <p class="mb-0 countnumb text-center"><b><?php
						 $count_totalkaizenbydepart = $this->mapi->count_totalkaizenbydepart($viv_domain,$depart);
						 //$count_totalkaizenusersdomain = $this->mapi->count_totalkaizenusersdomain($domain);
						 $count_empbydepart = $this->mapi->count_empbydepart($viv_domain,$depart);

						 echo $count_totalkaizenbydepart." / ".$count_empbydepart." ";
						 ?></b></p>
					 </div>
					 <center><?php
					 $diff_depart = ($count_totalkaizenbydepart / $count_empbydepart) * 100;
					 //echo round($diff);
					 echo number_format((float)$diff_depart, 2, '.', '');
					 ?>%</center>
				 </div>
						 <!--END Div-->
		</div>

	<?php } ?>





  </div>
  </div>
  </div>
  <!--END Page Title-->
<?php } ?>


 <form action="" method="POST">
  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
  <div class="welcome-text">
	<div class="row">



<?php if($viv_user_type=='TRMMADMIN') { ?>

	<div class="col-sm-11">

	<div class="pull-right">
		<label>&nbsp; </label>
	 <button type="submit" class="btn btn-primary width100per">Filter</button>
	</div>


	<div class="pull-right">
		<div class="form-group col-sm-6">
		 <label>Year </label> <br/>
		 <select class="" name="year" id="year" >
 		 <?php
			 $listgroupbykaizenyear = $this->mapi->listgroupbykaizenyear();
			foreach ($listgroupbykaizenyear as $listgroupbykaizenyearArray) {
				$kaizenyear = $listgroupbykaizenyearArray->syear;
				$todayyear = date('Y');
		 ?>
			 <option <?php if($kaizenyear==$todayyear) { echo 'selected'; } ?> value="<?php echo $kaizenyear; ?>"><?php echo $kaizenyear; ?></option>
		 <?php }   ?>
			</select>
		</div>
	</div>


	<div class="pull-right">
 		<div class="form-group">
		 <label>Department </label> <br/>
		 <div class="sel_fil_dept">

		 <select class="" name="dept" id="dept" >
			 <option value="">All</option>
			 <?php /*
			<option value="">All</option>
			<?php
				$listgroupbydept = $this->mapi->listgroupbydept();
			 foreach ($listgroupbydept as $listgroupbydeptArray) {
				 $lidepart = $listgroupbydeptArray->depart;
			?>
				<option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $lidepart; ?>"><?php echo $lidepart; ?></option>
			<?php }   ?>
			*/ ?>
			 </select>

		 </div>
		 </div>
 	</div>


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




</div>
<?php } ?>


<?php if($viv_user_type=='TRMMEMP') { ?>

	<div class="col-sm-11">

	<div class="pull-right">
		<label>&nbsp; </label>
	 <button type="submit" class="btn btn-primary width100per">Filter</button>
	</div>


	<div class="pull-right">
		<div class="form-group col-sm-6">
		 <label>Year </label> <br/>
		 <select class="" name="year" id="year" >
 		 <?php
			 $listgroupbykaizenyear = $this->mapi->listgroupbykaizenyear();
			foreach ($listgroupbykaizenyear as $listgroupbykaizenyearArray) {
				$kaizenyear = $listgroupbykaizenyearArray->syear;
				$todayyear = date('Y');
		 ?>
			 <option <?php if($kaizenyear==$todayyear) { echo 'selected'; } ?> value="<?php echo $kaizenyear; ?>"><?php echo $kaizenyear; ?></option>
		 <?php }   ?>
			</select>
		</div>
	</div>

</div>

<?php } ?>


<?php if($viv_user_type=='TRMMMANG') { ?>
	<div class="col-sm-11">

	<div class="pull-right">
		<label>&nbsp; </label>
	 <button type="submit" class="btn btn-primary width100per">Filter</button>
	</div>


	<div class="pull-right">
		<div class="form-group col-sm-6">
		 <label>Year </label> <br/>
		 <select class="" name="year" id="year" >
 		 <?php
			 $listgroupbykaizenyear = $this->mapi->listgroupbykaizenyear();
			foreach ($listgroupbykaizenyear as $listgroupbykaizenyearArray) {
				$kaizenyear = $listgroupbykaizenyearArray->syear;
				$todayyear = date('Y');
		 ?>
			 <option <?php if($kaizenyear==$todayyear) { echo 'selected'; } ?> value="<?php echo $kaizenyear; ?>"><?php echo $kaizenyear; ?></option>
		 <?php }   ?>
			</select>
		</div>
	</div>


	<div class="pull-right">
 		<div class="form-group">
		 <label>Department </label> <br/>

		 <?php $findmydomainbypid =  $this->mapi->findmydomainbypid($viv_profile_id); ?>

		 <select class="" name="dept" id="dept" >

			<option value="">All</option>
			<?php
				$listgroupbydeptbydomain = $this->mapi->listgroupbydeptbydomain($findmydomainbypid);
			 foreach ($listgroupbydeptbydomain as $listgroupbydeptbydomainArray) {
				 $lidepart = $listgroupbydeptbydomainArray->depart;
			?>
				<option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $lidepart; ?>"><?php echo $lidepart; ?></option>
			<?php }   ?>
		</select>


		 </div>
		 </div>



	<div class="pull-right">

 		<div class="form-group">
		 <label>Domain </label> <br/>
		 <select class="" name="domain" id="domain" >
 			<option value="<?php echo $findmydomainbypid; ?>"><?php echo $findmydomainbypid; ?></option>
		 </select>
		 </div>

 	</div>




</div>
<?php } ?>


<?php if($viv_user_type=='TRMMIEDEPT') { ?>

	<div class="col-sm-11">

	<div class="pull-right">
		<label>&nbsp; </label>
	 <button type="submit" class="btn btn-primary width100per">Filter</button>
	</div>


	<div class="pull-right">
		<div class="form-group col-sm-6">
		 <label>Year </label> <br/>
		 <select class="" name="year" id="year" >
 		 <?php
			 $listgroupbykaizenyear = $this->mapi->listgroupbykaizenyear();
			foreach ($listgroupbykaizenyear as $listgroupbykaizenyearArray) {
				$kaizenyear = $listgroupbykaizenyearArray->syear;
				$todayyear = date('Y');
		 ?>
			 <option <?php if($kaizenyear==$todayyear) { echo 'selected'; } ?> value="<?php echo $kaizenyear; ?>"><?php echo $kaizenyear; ?></option>
		 <?php }   ?>
			</select>
		</div>
	</div>


	<div class="pull-right">
 		<div class="form-group">
		 <label>Department </label> <br/>
		 <div class="sel_fil_dept">

		 <select class="" name="dept" id="dept" >
			 <option value="">All</option>
			 <?php /*
			<option value="">All</option>
			<?php
				$listgroupbydept = $this->mapi->listgroupbydept();
			 foreach ($listgroupbydept as $listgroupbydeptArray) {
				 $lidepart = $listgroupbydeptArray->depart;
			?>
				<option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $lidepart; ?>"><?php echo $lidepart; ?></option>
			<?php }   ?>
			*/ ?>
			 </select>

		 </div>
		 </div>
 	</div>


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




</div>
<?php } ?>


<?php if($viv_user_type=='TRMMFINANCE') { ?>

	<div class="col-sm-11">

	<div class="pull-right">
		<label>&nbsp; </label>
	 <button type="submit" class="btn btn-primary width100per">Filter</button>
	</div>


	<div class="pull-right">
		<div class="form-group col-sm-6">
		 <label>Year </label> <br/>
		 <select class="" name="year" id="year" >
 		 <?php
			 $listgroupbykaizenyear = $this->mapi->listgroupbykaizenyear();
			foreach ($listgroupbykaizenyear as $listgroupbykaizenyearArray) {
				$kaizenyear = $listgroupbykaizenyearArray->syear;
				$todayyear = date('Y');
		 ?>
			 <option <?php if($kaizenyear==$todayyear) { echo 'selected'; } ?> value="<?php echo $kaizenyear; ?>"><?php echo $kaizenyear; ?></option>
		 <?php }   ?>
			</select>
		</div>
	</div>


	<div class="pull-right">
 		<div class="form-group">
		 <label>Department </label> <br/>
		 <div class="sel_fil_dept">

		 <select class="" name="dept" id="dept" >
			 <option value="">All</option>
			 <?php /*
			<option value="">All</option>
			<?php
				$listgroupbydept = $this->mapi->listgroupbydept();
			 foreach ($listgroupbydept as $listgroupbydeptArray) {
				 $lidepart = $listgroupbydeptArray->depart;
			?>
				<option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $lidepart; ?>"><?php echo $lidepart; ?></option>
			<?php }   ?>
			*/ ?>
			 </select>

		 </div>
		 </div>
 	</div>


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




</div>
<?php } ?>


</div>


  </div>
  </div>
  </div>
  <!--END Page Title-->
</form>
<p>&nbsp;</p>



<div class="row">


	<?php if($viv_user_type=='TRMMEMP') { ?>

		<?php
 	     $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
   	 ?>
   <h3 class="col-sm-12"> Submitted Kaizen Forms <small class="minifonth">(<?php echo "Year : ".$year_sub; ?>)</small></h3>


	<!--Box-->
	<div class="col-xl-4 col-lg-4 col-sm-4">
		<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalsubmitted'); ?>">
	<div class="widget-stat card">
	<div class="card-body p-4">
	<h4 class="card-title">Total Kaizen Submitted</h4>
	<h3><?php
	$tsts = '1,2,3,4,5,6,7';
	$count_listmyideas = $this->mapi->count_listmyideasbystatus($year_sub,$tsts);
	echo $count_listmyideas;
	?></h3>
	<div class="progress mb-2">
	<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
	</div>
	<small>out of <?php echo $this->mapi->count_listmyideasoutoff();  ?></small>
	</div>
	</div>
</a>
	</div>
	 <!--END Box-->




	 				<!--Box-->
	 				<div class="col-xl-4 col-lg-4 col-sm-4">
						<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalapproved'); ?>">
	 								<div class="card overflow-hidden">
	 		                            <div class="card-body">
	 		                                <div class="text-center">
	 		                                    <div class="profile-photo">
	 												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
	 											</div>
	 		                                    <h4 class="card-title">Total Kaizen Approved</h4>
	 																				<h3><?php
																					$tstsapp = '2,4,6';
																				 	$count_listmyideas = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp);
																				 	echo $count_listmyideas;
																				 	?></h3>
	 																			 <div class="progress mb-2">
	 																			 <div class="progress-bar progress-animated bg-success" style="width: 80%"></div>
	 																			 </div>
	 		                                </div>
	 		                            </div>

	 		                            <div class="card-footer pt-0 pb-0 text-center">
	 		                                <div class="row">
	 											<div class="col-4 pt-3 pb-3 border-right">
	 												<h3 class="mb-1">
	 													<?php
	 											 $tstsapp_dri = '2';
	 											 $count_listmyideas_dri = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp_dri);
	 											 echo $count_listmyideas_dri;
	 											 ?>
	 										 </h3><span>DRI</span>
	 											</div>
	 											<div class="col-4 pt-3 pb-3 border-right">
	 												<h3 class="mb-1">
	 													<?php
	 											 $tstsapp_iedept = '4';
	 											 $count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp_iedept);
	 											 echo $count_listmyideas_iedept;
	 											 ?>
	 												</h3><span>IE Dept</span>
	 											</div>
	 											<div class="col-4 pt-3 pb-3">
	 												<h3 class="mb-1">
	 													<?php
	 											 $tstsapp_fin = '6';
	 											 $count_listmyideas_fin = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp_fin);
	 											 echo $count_listmyideas_fin;
	 											 ?>
	 												</h3><span>Finance</span>
	 		                                    </div>
	 		                                </div>
	 		                            </div>
	 		                        </div>
														</a>
	 							</div>
	 							<!--End Box-->

 <?php /* <small>out of <?php echo $this->mapi->count_listmyideasoutoff();  ?></small> */ ?>





 	 				<!--Box-->
 	 				<div class="col-xl-4 col-lg-4 col-sm-4">
						<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalrejected'); ?>">
 	 								<div class="card overflow-hidden">
 	 		                            <div class="card-body">
 	 		                                <div class="text-center">
 	 		                                    <div class="profile-photo">
 	 												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
 	 											</div>
 	 		                                    <h4 class="card-title">Total Kaizen Rejected</h4>
 	 																				<h3><?php
																					$tstsrej = '3,5,7';
																				 	$count_listmyideas = $this->mapi->count_listmyideasbystatus($year_sub,$tstsrej);
																				 	echo $count_listmyideas;
																				 	?></h3>
 	 																			 <div class="progress mb-2">
 	 																			 <div class="progress-bar progress-animated bg-danger" style="width: 80%"></div>
 	 																			 </div>
 	 		                                </div>
 	 		                            </div>

 	 		                            <div class="card-footer pt-0 pb-0 text-center">
 	 		                                <div class="row">
 	 											<div class="col-4 pt-3 pb-3 border-right">
 	 												<h3 class="mb-1">
 	 													<?php
 	 											 $tstsapp_dri = '3';
 	 											 $count_listmyideas_dri = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp_dri);
 	 											 echo $count_listmyideas_dri;
 	 											 ?>
 	 										 </h3><span>DRI</span>
 	 											</div>
 	 											<div class="col-4 pt-3 pb-3 border-right">
 	 												<h3 class="mb-1">
 	 													<?php
 	 											 $tstsapp_iedept = '5';
 	 											 $count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp_iedept);
 	 											 echo $count_listmyideas_iedept;
 	 											 ?>
 	 												</h3><span>IE Dept</span>
 	 											</div>
 	 											<div class="col-4 pt-3 pb-3">
 	 												<h3 class="mb-1">
 	 													<?php
 	 											 $tstsapp_fin = '7';
 	 											 $count_listmyideas_fin = $this->mapi->count_listmyideasbystatus($year_sub,$tstsapp_fin);
 	 											 echo $count_listmyideas_fin;
 	 											 ?>
 	 												</h3><span>Finance</span>
 	 		                                    </div>
 	 		                                </div>
 	 		                            </div>
 	 		                        </div>
														</a>
 	 							</div>
 	 							<!--End Box-->




	 <p>&nbsp;</p>

 <?php } ?>


 <?php if($viv_user_type=='TRMMMANG') { ?>

	 <?php $findmydomainbypid =  $this->mapi->findmydomainbypid($viv_profile_id); ?>
	 <?php
	 $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
	 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
	 $domain_sub =  $this->input->post('domain'); if(empty($domain_sub)) { $domain_sub = $findmydomainbypid; }
 	 ?>

	 <h3 class="col-sm-12"> Kaizen Forms - Approvals <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h3>


	 <!--Box-->
  	<div class="col-xl-3 col-lg-3 col-sm-6">
		<a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalsubmitted'); ?>">
			 	<div class="widget-stat card">
			 	<div class="card-body p-4">
			 	<h4 class="card-title">Total Kaizen Employee Submitted</h4>
			 	<h3><?php

			 	$count_listmyideas_verifiy = $this->mapi->count_listmyideas_verifiy_mang_dashb($year_sub,$domain_sub,$dept_sub);
			 	echo $count_listmyideas_verifiy;
			 	?></h3>
			 	<div class="progress mb-2">
			 	<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
			 	</div>
			 	<small>out of <?php echo $this->mapi->count_listmyideas_verifiy_mang_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
			 	</div>
			 	</div>
				</a>
 	</div>
  	 <!--END Box-->



	 <!--Box-->
 		<div class="col-xl-3 col-lg-3 col-sm-6">
			<a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalpending'); ?>">
		<div class="widget-stat card">
		<div class="card-body p-4">
		<h4 class="card-title">Total Kaizen Pending Approval</h4>
		<h3><?php
		$count_listmyideas_verifiy_sts_p = $this->mapi->count_listmyideas_verifiy_sts_mang_dashb('1',$year_sub,$domain_sub,$dept_sub);
		echo $count_listmyideas_verifiy_sts_p;
		?></h3>
		<div class="progress mb-2">
		<div class="progress-bar progress-animated bg-warning" style="width: 80%"></div>
		</div>
		<small>out of <?php echo $this->mapi->count_listmyideas_verifiy_mang_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
		</div>
		</div>
		</a>
		</div>

		 <!--END Box-->


 	 <!--Box-->

  	<div class="col-xl-3 col-lg-3 col-sm-6">
			<a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalapproved'); ?>">
  	<div class="widget-stat card">
  	<div class="card-body p-4">
  	<h4 class="card-title">Total Kaizen Approved</h4>
  	<h3><?php
		$count_listmyideas_verifiy_sts_a = $this->mapi->count_listmyideas_verifiy_sts_mang_dashb('2',$year_sub,$domain_sub,$dept_sub);
		echo $count_listmyideas_verifiy_sts_a;
  	?></h3>
  	<div class="progress mb-2">
  	<div class="progress-bar progress-animated bg-success" style="width: 80%"></div>
  	</div>
  	<small>out of <?php echo $this->mapi->count_listmyideas_verifiy_mang_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
  	</div>
  	</div>
		</a>
  	</div>

  	 <!--END Box-->


 	 <!--Box-->

  	<div class="col-xl-3 col-lg-3 col-sm-6">
			<a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalrejected'); ?>">
  	<div class="widget-stat card">
  	<div class="card-body p-4">
  	<h4 class="card-title">Total Kaizen Rejected</h4>
  	<h3><?php
		$count_listmyideas_verifiy_sts_r = $this->mapi->count_listmyideas_verifiy_sts_mang_dashb('3',$year_sub,$domain_sub,$dept_sub);
		echo $count_listmyideas_verifiy_sts_r;
  	?></h3>
  	<div class="progress mb-2">
  	<div class="progress-bar progress-animated bg-danger" style="width: 80%"></div>
  	</div>
  	<small>out of <?php echo $this->mapi->count_listmyideas_verifiy_mang_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
  	</div>
  	</div>
		</a>
  	</div>

  	 <!--END Box-->

	 <?php } ?>

	 <?php if($viv_user_type=='TRMMIEDEPT') { ?>

		 <?php
		 $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
		 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
		 $domain_sub =  $this->input->post('domain'); if(empty($domain_sub)) { $domain_sub = 'ALL'; }
 		 ?>


		<h3 class="col-sm-12"> Kaizen Forms - Approvals <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h3>
		<!--Box-->
		 <div class="col-xl-3 col-lg-3 col-sm-6">
		 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalsubmitted'); ?>">
		 <div class="widget-stat card">
		 <div class="card-body p-4">
		 <h4 class="card-title">Total Kaizen DRI Approved</h4>
		 <h3><?php
		 $count_listmyideas_verifiy_iedept = $this->mapi->count_listmyideas_verifiy_iedept_dashb($year_sub,$domain_sub,$dept_sub);
		 echo $count_listmyideas_verifiy_iedept;
		 ?></h3>
		 <div class="progress mb-2">
		 <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
		 </div>

		 </div>
		 </div>
	 </a>
		 </div>

			<!--END Box-->

		<!--Box-->
			 <div class="col-xl-3 col-lg-3 col-sm-6">
			 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalpending'); ?>">
		 <div class="widget-stat card">
		 <div class="card-body p-4">
		 <h4 class="card-title">Total Kaizen Approval Pending</h4>
		 <h3><?php
		 $count_listmyideas_verifiy_sts_iedept = $this->mapi->count_listmyideas_verifiy_sts_iedept_dashb('1',$year_sub,$domain_sub,$dept_sub);
		 echo $count_listmyideas_verifiy_sts_iedept;
		 ?></h3>
		 <div class="progress mb-2">
		 <div class="progress-bar progress-animated bg-warning" style="width: 80%"></div>
		 </div>
		 <small>out of <?php echo $this->mapi->count_listmyideas_verifiy_iedept_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
		 </div>
		 </div>
		 </a>
		 </div>

			<!--END Box-->


			<!--Box-->

		 <div class="col-xl-3 col-lg-3 col-sm-6">
			 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalapproved'); ?>">
		 <div class="widget-stat card">
		 <div class="card-body p-4">
		 <h4 class="card-title">Total Kaizen Approved</h4>
		 <h3><?php
		 $count_listmyideas_verifiy_sts_iedept = $this->mapi->count_listmyideas_verifiy_sts_iedept_dashb('2',$year_sub,$domain_sub,$dept_sub);
		 echo $count_listmyideas_verifiy_sts_iedept;
		 ?></h3>
		 <div class="progress mb-2">
		 <div class="progress-bar progress-animated bg-success" style="width: 80%"></div>
		 </div>
		 <small>out of <?php echo $this->mapi->count_listmyideas_verifiy_iedept_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
		 </div>
		 </div>
		 </a>
		 </div>

			<!--END Box-->


			<!--Box-->

		 <div class="col-xl-3 col-lg-3 col-sm-6">
			 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalrejected'); ?>">
		 <div class="widget-stat card">
		 <div class="card-body p-4">
		 <h4 class="card-title">Total Kaizen Rejected</h4>
		 <h3><?php
		 $count_listmyideas_verifiy_sts_iedept = $this->mapi->count_listmyideas_verifiy_sts_iedept_dashb('3',$year_sub,$domain_sub,$dept_sub);
		 echo $count_listmyideas_verifiy_sts_iedept;
		 ?></h3>
		 <div class="progress mb-2">
		 <div class="progress-bar progress-animated bg-danger" style="width: 80%"></div>
		 </div>
		 <small>out of <?php echo $this->mapi->count_listmyideas_verifiy_iedept_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
		 </div>
		 </div>
		 </a>
		 </div>

			<!--END Box-->

		<?php } ?>





		<?php if($viv_user_type=='TRMMFINANCE') { ?>

			<?php
 		 $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
 		 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
 		 $domain_sub =  $this->input->post('domain'); if(empty($domain_sub)) { $domain_sub = 'ALL'; }
  		 ?>


 		<h3 class="col-sm-12"> Kaizen Forms - Approvals <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h3>
 		<!--Box-->
 		 <div class="col-xl-3 col-lg-3 col-sm-6">
 		 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalsubmitted'); ?>">
 		 <div class="widget-stat card">
 		 <div class="card-body p-4">
 		 <h4 class="card-title">Total Kaizen DRI & IE Dept Approved</h4>
 		 <h3><?php
 		 $count_listmyideas_verifiy_finance = $this->mapi->count_listmyideas_verifiy_finance_dashb($year_sub,$domain_sub,$dept_sub);
 		 echo $count_listmyideas_verifiy_finance;
 		 ?></h3>
 		 <div class="progress mb-2">
 		 <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
 		 </div>

 		 </div>
 		 </div>
 	 </a>
 		 </div>

 			<!--END Box-->

 		<!--Box-->
 			 <div class="col-xl-3 col-lg-3 col-sm-6">
 			 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalpending'); ?>">
 		 <div class="widget-stat card">
 		 <div class="card-body p-4">
 		 <h4 class="card-title">Total Kaizen Approval Pending</h4>
 		 <h3><?php
 		 $count_listmyideas_verifiy_sts_finance = $this->mapi->count_listmyideas_verifiy_sts_finance_dasb('1',$year_sub,$domain_sub,$dept_sub);
 		 echo $count_listmyideas_verifiy_sts_finance;
 		 ?></h3>
 		 <div class="progress mb-2">
 		 <div class="progress-bar progress-animated bg-warning" style="width: 80%"></div>
 		 </div>
 		 <small>out of <?php echo $this->mapi->count_listmyideas_verifiy_finance_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
 		 </div>
 		 </div>
 		 </a>
 		 </div>

 			<!--END Box-->


 			<!--Box-->

 		 <div class="col-xl-3 col-lg-3 col-sm-6">
 			 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalapproved'); ?>">
 		 <div class="widget-stat card">
 		 <div class="card-body p-4">
 		 <h4 class="card-title">Total Kaizen Approved</h4>
 		 <h3><?php
 		 $count_listmyideas_verifiy_sts_finance = $this->mapi->count_listmyideas_verifiy_sts_finance_dasb('2',$year_sub,$domain_sub,$dept_sub);
 		 echo $count_listmyideas_verifiy_sts_finance;
 		 ?></h3>
 		 <div class="progress mb-2">
 		 <div class="progress-bar progress-animated bg-success" style="width: 80%"></div>
 		 </div>
 		 <small>out of <?php echo $this->mapi->count_listmyideas_verifiy_finance_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
 		 </div>
 		 </div>
 		 </a>
 		 </div>

 			<!--END Box-->


 			<!--Box-->

 		 <div class="col-xl-3 col-lg-3 col-sm-6">
 			 <a href="<?php echo site_url('admin/kaizenidea/ideamang/ideaverification/totalrejected'); ?>">
 		 <div class="widget-stat card">
 		 <div class="card-body p-4">
 		 <h4 class="card-title">Total Kaizen Rejected</h4>
 		 <h3><?php
 		 $count_listmyideas_verifiy_sts_finance = $this->mapi->count_listmyideas_verifiy_sts_finance_dasb('3',$year_sub,$domain_sub,$dept_sub);
 		 echo $count_listmyideas_verifiy_sts_finance;
 		 ?></h3>
 		 <div class="progress mb-2">
 		 <div class="progress-bar progress-animated bg-danger" style="width: 80%"></div>
 		 </div>
 		 <small>out of <?php echo $this->mapi->count_listmyideas_verifiy_finance_dashb($year_sub,$domain_sub,$dept_sub);  ?></small>
 		 </div>
 		 </div>
 		 </a>
 		 </div>

 			<!--END Box-->

 		<?php } ?>



	 <?php if($viv_user_type=='TRMMADMIN') { ?>

		 <?php
		 $year_sub =  $this->input->post('year'); if(empty($year_sub)) { $year_sub = date('Y'); }
		 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
		 $domain_sub =  $this->input->post('domain'); if(empty($domain_sub)) { $domain_sub = 'ALL'; }



		 ?>




	 <h3 class="col-sm-12"> Submitted Kaizen Forms <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h3>
	 <!--Box-->
	 <div class="col-xl-2 col-lg-2 col-sm-2">
		 <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalsubmitted/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.''); ?>">
	 <div class="widget-stat card">
	 <div class="card-body p-4">
	 <h4 class="card-title">Total Kaizen <br/>Submitted</h4>
	 <h3><?php
	 $tsts = '1,2,3,4,5,6,7';
	 $count_listmyideas = $this->mapi->count_listmyideasbystatus_filter($tsts,$year_sub,$domain_sub,$dept_sub);
	 echo $count_listmyideas;
	 ?></h3>
	 <div class="progress mb-2">
	 <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
	 </div>
	 <small>out of <?php echo $this->mapi->count_listmyideasoutoff_filter($year_sub,$domain_sub,$dept_sub);  ?></small>
	 </div>
	 </div>
	</a>
	 </div>
		<!--END Box-->




				<!--Box-->
				<div class="col-xl-4 col-lg-4 col-sm-4">
					 <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalapproved/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.''); ?>">
								<div class="card overflow-hidden">
		                            <div class="card-body">
		                                <div class="text-center">
		                                    <div class="profile-photo">
												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
											</div>
		                                    <h4 class="card-title">Total Kaizen Approved</h4>
																				<h3><?php
																	 	 	 $tstsapp = '2,4,6';
																	 		 $count_listmyideas = $this->mapi->count_listmyideasbystatus_filter($tstsapp,$year_sub,$domain_sub,$dept_sub);
																	 		 echo $count_listmyideas;
																	 		 ?></h3>
																			 <div class="progress mb-2">
																			 <div class="progress-bar progress-animated bg-success" style="width: 80%"></div>
																			 </div>
		                                </div>
		                            </div>

		                            <div class="card-footer pt-0 pb-0 text-center">
		                                <div class="row">
											<div class="col-4 pt-3 pb-3 border-right">
												<h3 class="mb-1">
													<?php
											 $tstsapp_dri = '2';
											 $count_listmyideas_dri = $this->mapi->count_listmyideasbystatus_filter($tstsapp_dri,$year_sub,$domain_sub,$dept_sub);
											 echo $count_listmyideas_dri;
											 ?>
										 </h3><span>DRI</span>
											</div>
											<div class="col-4 pt-3 pb-3 border-right">
												<h3 class="mb-1">
													<?php
											 $tstsapp_iedept = '4';
											 $count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus_filter($tstsapp_iedept,$year_sub,$domain_sub,$dept_sub);
											 echo $count_listmyideas_iedept;
											 ?>
												</h3><span>IE Dept</span>
											</div>
											<div class="col-4 pt-3 pb-3">
												<h3 class="mb-1">
													<?php
											 $tstsapp_fin = '6';
											 $count_listmyideas_fin = $this->mapi->count_listmyideasbystatus_filter($tstsapp_fin,$year_sub,$domain_sub,$dept_sub);
											 echo $count_listmyideas_fin;
											 ?>
												</h3><span>Finance</span>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
													</a>
							</div>
							<!--End Box-->

 <?php /*
 <small>out of <?php echo $this->mapi->count_listmyideasoutoff_filter($year_sub,$dept_sub);  ?></small>
 */ ?>




 <!--Box-->
 <div class="col-xl-4 col-lg-4 col-sm-4">
	  <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalrejected/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.''); ?>">
				 <div class="card overflow-hidden">
												 <div class="card-body">
														 <div class="text-center">
																 <div class="profile-photo">
								 <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
							 </div>
																 <h4 class="card-title">Total Kaizen Rejected</h4>
																 <h3><?php
															 $tstsrej = '3,5,7';
																 $count_listmyideas_rej = $this->mapi->count_listmyideasbystatus_filter($tstsrej,$year_sub,$domain_sub,$dept_sub);
																 echo $count_listmyideas_rej;
																 ?></h3>
																<div class="progress mb-2">
																<div class="progress-bar progress-animated bg-danger" style="width: 80%"></div>
																</div>
														 </div>
												 </div>

												 <div class="card-footer pt-0 pb-0 text-center">
														 <div class="row">
							 <div class="col-4 pt-3 pb-3 border-right">
								 <h3 class="mb-1">
									 <?php
								$tstsapp_dri = '3';
								$count_listmyideas_dri = $this->mapi->count_listmyideasbystatus_filter($tstsapp_dri,$year_sub,$domain_sub,$dept_sub);
								echo $count_listmyideas_dri;
								?>
							</h3><span>DRI</span>
							 </div>
							 <div class="col-4 pt-3 pb-3 border-right">
								 <h3 class="mb-1">
									 <?php
								$tstsapp_iedept = '5';
								$count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus_filter($tstsapp_iedept,$year_sub,$domain_sub,$dept_sub);
								echo $count_listmyideas_iedept;
								?>
								 </h3><span>IE Dept</span>
							 </div>
							 <div class="col-4 pt-3 pb-3">
								 <h3 class="mb-1">
									 <?php
								$tstsapp_fin = '7';
								$count_listmyideas_fin = $this->mapi->count_listmyideasbystatus_filter($tstsapp_fin,$year_sub,$domain_sub,$dept_sub);
								echo $count_listmyideas_fin;
								?>
								 </h3><span>Finance</span>
																 </div>
														 </div>
												 </div>
										 </div>
									 </a>
			 </div>
			 <!--End Box-->




			<!--Box-->
			 <div class="col-xl-2 col-lg-2 col-sm-2">
			  <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalpending/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.''); ?>">
			 <div class="widget-stat card">
			 <div class="card-body p-4">
			 <h4 class="card-title">Total Kaizen Approval Pending</h4>
			 <h3><?php
		   $tstsrej = '1';
			 $count_listmyideas = $this->mapi->count_listmyideasbystatus_filter($tstsrej,$year_sub,$domain_sub,$dept_sub);
			 echo $count_listmyideas;
			 ?></h3>
			 <div class="progress mb-2">
			 <div class="progress-bar progress-animated bg-default" style="width: 80%"></div>
			 </div>
			 <small>out of <?php echo $this->mapi->count_listmyideasoutoff_filter($year_sub,$domain_sub,$dept_sub);  ?></small>
			 </div>
			 </div>
		</a>
			 </div>
				<!--END Box-->

		<p>&nbsp;</p>

	 <?php } ?>

 </div>



<?php if($viv_user_type=='TRMMADMIN') { ?>
 <div class="row">
 	 	<?php /*
		 <!--Yearly -->
		 <div class="col-xl-12 col-lg-12 col-sm-12">
				 <div class="card">
						 <div class="card-header">
								 <h4 class="card-title">Kaizen (Yearly Report) : <?php $ffyear = date('Y'); echo $ffyear; ?></h4>

			 </div>
			 <div class="card-body">

				 <!-- HTML -->
				 <div id="chartdiv"></div>
			 </div>
			 </div>
			 </div>
			  <!--Yearly -->
				*/ ?>


				<!--Yearly -->
			  <div class="col-xl-12 col-lg-12 col-sm-12">
			 		 <div class="card">
			 				 <div class="card-header">
			 						 <h4 class="card-title">Kaizen (Yearly Report) : <?php $ffyear = date('Y'); echo $ffyear; ?></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDiv"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>
<?php } ?>




<?php if($viv_user_type=='TRMMEMP') { ?>
 <div class="row">
 				<!--Yearly -->
			  <div class="col-xl-12 col-lg-12 col-sm-12">
			 		 <div class="card">
			 				 <div class="card-header">
			 						 <h4 class="card-title">Kaizen Report : <?php $ffyear = date('Y'); echo $ffyear; ?></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDiv"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>
<?php } ?>



<?php if($viv_user_type=='TRMMMANG') { ?>
 <div class="row">
 				<!--Yearly -->
			  <div class="col-xl-12 col-lg-12 col-sm-12">
			 		 <div class="card">
			 				 <div class="card-header">
			 						 <h4 class="card-title">Kaizen Report : <?php $ffyear = date('Y'); echo $ffyear; ?></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDiv"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>
<?php } ?>



<?php if($viv_user_type=='TRMMIEDEPT') { ?>
 <div class="row">
 				<!--Yearly -->
			  <div class="col-xl-12 col-lg-12 col-sm-12">
			 		 <div class="card">
			 				 <div class="card-header">
			 						 <h4 class="card-title">Kaizen Report : <?php $ffyear = date('Y'); echo $ffyear; ?></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDiv"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>
<?php } ?>


<?php if($viv_user_type=='TRMMFINANCE') { ?>
 <div class="row">
 				<!--Yearly -->
			  <div class="col-xl-12 col-lg-12 col-sm-12">
			 		 <div class="card">
			 				 <div class="card-header">
			 						 <h4 class="card-title">Kaizen Report : <?php $ffyear = date('Y'); echo $ffyear; ?></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDiv"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>
<?php } ?>

</div>


<p>&nbsp;</p>
