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






<!--Page Title-->
<div class="row page-titles mx-0">
<div class="col-sm-12 p-md-0">
	<h6 class="text-right">Total Employees Submitted Kaizens / Total Employees in Domain</h4>
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

						echo $count_totalkaizenusersdomain." / ".$count_empbydomain." ";
						?></b></p>
					</div>
					<center><?php
					$diff2 = ($count_totalkaizenusersdomain / $count_empbydomain) * 100;
					//echo round($diff);
					echo number_format((float)$diff2, 2, '.', '');
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
		<h6 class="text-right">Total Employees Submitted Kaizens  / Total Employees in Department</h4>
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
							$count_totalkaizenusersdepart = $this->mapi->count_totalkaizenusersdepart($uri4,$depart);
              $count_empbydepart = $this->mapi->count_empbydepart($uri4,$depart);

              echo $count_totalkaizenusersdepart." / ".$count_empbydepart." ";
              ?></b></p>
            </div>
						<center><?php
						$diff_depart2 = ($count_totalkaizenusersdepart / $count_empbydepart) * 100;
						//echo round($diff);
						echo number_format((float)$diff_depart2, 2, '.', '');
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


 		<!-- Modal -->
   <div class="modal show" id="modelwinnerpopup" role="dialog">
     <div class="modal-dialog">

			 <?php
			 $listactivewinners = $this->mapi->listactivewinners();
			foreach ($listactivewinners as $listactivewinnersArray) {
				$g_empid = $listactivewinnersArray->g_empid;
				$g_name = $listactivewinnersArray->g_name;
				$g_domain = $listactivewinnersArray->g_domain;
				$g_depart = $listactivewinnersArray->g_depart;

				$s_empid = $listactivewinnersArray->s_empid;
				$s_name = $listactivewinnersArray->s_name;
				$s_domain = $listactivewinnersArray->s_domain;
				$s_depart = $listactivewinnersArray->s_depart;

				$b_empid = $listactivewinnersArray->b_empid;
				$b_name = $listactivewinnersArray->b_name;
				$b_domain = $listactivewinnersArray->b_domain;
				$b_depart = $listactivewinnersArray->b_depart;



			}

			 ?>

       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>

           <h4 class="modal-title">Winner List</h4>
         </div>
         <div class="modal-body">
					 <!--Theme-->
					 <div class='container_p'>
  <!-- Card 1 -->
  <div class='card_p'>
    <div class='card__info' style='background-image: url(<?php echo base_url(); ?>assets/images/gold.jpg)'>
      <!--<h2 class='card__name'>BASIC</h2>
      <p class='card__price' style='color: var(--color05)'>$19.99 <span class='card__priceSpan'>/month</span></p>-->
    </div>
    <div class='card__content' style='border-color: var(--color05)'>
      <div class='card__rows'>
        <p class='card__row'>
					<?php
					echo "<b>EmpID :</b> ".$g_empid."<br/>";
					echo "<b>Name :</b> ".$g_name."<br/>";
					echo "<b>Domain :</b> ".$g_domain."<br/>";
					echo "<b>Department :</b> ".$g_depart."<br/>";
					?>

				</p>

      </div>
     </div>
  </div>

  <!-- Card 2 -->
  <div class='card_p'>
    <div class='card__info' style='background-image: url(<?php echo base_url(); ?>assets/images/silver.jpg)'>
      <!--<h2 class='card__name'>STANDARD</h2>
      <p class='card__price' style='color: var(--color06)'>$29.99 <span class='card__priceSpan'>/month</span></p>-->
    </div>
    <div class='card__content' style='border-color: var(--color06)'>
      <div class='card__rows'>
        <p class='card__row'>
					<?php
					echo "<b>EmpID :</b> ".$s_empid."<br/>";
					echo "<b>Name :</b> ".$s_name."<br/>";
					echo "<b>Domain :</b> ".$s_domain."<br/>";
					echo "<b>Department :</b> ".$s_depart."<br/>";
					?>
				</p>

      </div>
     </div>
  </div>

  <!-- Card 3 -->
  <div class='card_p'>
    <div class='card__info' style='background-image: url(<?php echo base_url(); ?>assets/images/bronze.jpg)'>
      <!--<h2 class='card__name'>PREMIUM</h2>
      <p class='card__price' style='color: var(--color12)'>$49.99 <span class='card__priceSpan'>/month</span></p>-->
    </div>
    <div class='card__content' style='border-color: var(--color07)'>
      <div class='card__rows'>
        <p class='card__row'>
					<?php
					echo "<b>EmpID :</b> ".$b_empid."<br/>";
					echo "<b>Name :</b> ".$b_name."<br/>";
					echo "<b>Domain :</b> ".$b_domain."<br/>";
					echo "<b>Department :</b> ".$b_depart."<br/>";
					?>
				</p>

      </div>
     </div>
  </div>
</div>
					 <!--END Theme-->

         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>

     </div>
   </div>
	 <!-- END Modal -->

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
		 $month_sub =  $this->input->post('month'); if(empty($month_sub)) { $month_sub = 'ALL'; }
 		 $dept_sub =  $this->input->post('dept'); if(empty($dept_sub)) { $dept_sub = 'ALL'; }
		 $domain_sub =  $this->input->post('domain'); if(empty($domain_sub)) { $domain_sub = 'ALL'; }



		 ?>




	 <h3 class="col-sm-12"> Submitted Kaizen Forms <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h3>






				<!--Box-->
				<div class="col-xl-4 col-lg-4 col-sm-4">

								<div class="card overflow-hidden">
		                            <div class="card-body">
		                                <div class="text-center">
		                                    <div class="profile-photo">
												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
											</div>
											<a target="_blank" href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/dri/ALL'); ?>">
		                                    <h4 class="card-title">DRI</h4>
																				<h3><?php
																			 $tsts = '1,2,3,4,5,6,7';
																			 $typ_stsd = 'dri';
																			 $count_listmyideastypebystatus_filter_dri = $this->mapi->count_listmyideastypebystatus_filter($tsts,$typ_stsd,$year_sub,$domain_sub,$dept_sub);
																			 echo $count_listmyideastypebystatus_filter_dri;
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
												<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/dri/pending'); ?>">
												<h3 class="mb-1">
													<?php
												 $tstsrej_m = '1';
												 $typ_sts_d = 'dri';
												 $count_listmyideas_dri = $this->mapi->count_listmyideastypebystatus_filter($tstsrej_m,$typ_sts_d,$year_sub,$domain_sub,$dept_sub);
												 echo $count_listmyideas_dri;
												 ?>
										   </h3><span>Pending</span>
											 </a>
											</div>


 											<div class="col-4 pt-3 pb-3 border-right">
												<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/dri/approved'); ?>">
												<h3 class="mb-1">
													<?php
											 $tstsapp_dri = '2,4,5,6,7';
											 $count_listmyideas_dri = $this->mapi->count_listmyideasbystatus_filter($tstsapp_dri,$year_sub,$domain_sub,$dept_sub);
											 echo $count_listmyideas_dri;
											 ?>
										 </h3><span>Approved</span>
									 			</a>
											</div>


											<div class="col-4 pt-3 pb-3">
												<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/dri/rejected'); ?>">
												<h3 class="mb-1">
													<?php
			 								$tstsapp_dri = '3';
			 								$count_listmyideas_dri = $this->mapi->count_listmyideasbystatus_filter($tstsapp_dri,$year_sub,$domain_sub,$dept_sub);
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
														</div>						<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/iedept/ALL'); ?>">
					                                    <h4 class="card-title">IE Dept</h4>
																							<h3><?php
																						 $tsts = '2,4,5,6,7';
																						 $typ_stsi = 'iedept';
																						 $count_listmyideastypebystatus_filter_iedept = $this->mapi->count_listmyideastypebystatus_filter($tsts,$typ_stsi,$year_sub,$domain_sub,$dept_sub);
																						 echo $count_listmyideastypebystatus_filter_iedept;
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
															<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/iedept/pending'); ?>">
															<h3 class="mb-1">
																<?php
															 $tstsrej_m = '2';
															 $typ_sts_d = 'iedept';
															 $count_listmyideas_iedept = $this->mapi->count_listmyideastypebystatus_filter($tstsrej_m,$typ_sts_d,$year_sub,$domain_sub,$dept_sub);
															 echo $count_listmyideas_iedept;
															 ?>
													   </h3><span>Pending</span>
														 </a>
														</div>


			 											<div class="col-4 pt-3 pb-3 border-right">
															<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/iedept/approved'); ?>">
															<h3 class="mb-1">
																<?php
														 $tstsapp_iedept = '4,6,7';
														 $count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus_filter($tstsapp_iedept,$year_sub,$domain_sub,$dept_sub);
														 echo $count_listmyideas_iedept;
														 ?>
													 </h3><span>Approved</span>
												 			</a>
														</div>


														<div class="col-4 pt-3 pb-3">
															<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/iedept/rejected'); ?>">
															<h3 class="mb-1">
																<?php
						 								$tstsapp_iedept = '5';
						 								$count_listmyideas_iedept = $this->mapi->count_listmyideasbystatus_filter($tstsapp_iedept,$year_sub,$domain_sub,$dept_sub);
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
																						<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/finance/all'); ?>">
																										<h4 class="card-title">Finance</h4>
																										<h3><?php
																									 $tsts = '4,6,7';
																									 $typ_stsf = 'finance';
																									 $count_listmyideastypebystatus_filter_finance = $this->mapi->count_listmyideastypebystatus_filter($tsts,$typ_stsf,$year_sub,$domain_sub,$dept_sub);
																									 echo $count_listmyideastypebystatus_filter_finance;
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
																		<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/finance/pending'); ?>">
																		<h3 class="mb-1">
																			<?php
																		 $tstsrej_m = '4';
																		 $typ_sts_d = 'finance';
																		 $count_listmyideas_fin = $this->mapi->count_listmyideastypebystatus_filter($tstsrej_m,$typ_sts_d,$year_sub,$domain_sub,$dept_sub);
																		 echo $count_listmyideas_fin;
																		 ?>
																	 </h3><span>Pending</span>
																	 </a>
																	</div>


																	<div class="col-4 pt-3 pb-3 border-right">
																		<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/finance/approved'); ?>">
																		<h3 class="mb-1">
																			<?php
																	 $tstsapp_fin = '6';
																	 $count_listmyideas_fin = $this->mapi->count_listmyideasbystatus_filter($tstsapp_fin,$year_sub,$domain_sub,$dept_sub);
																	 echo $count_listmyideas_fin;
																	 ?>
																 </h3><span>Approved</span>
																		</a>
																	</div>


																	<div class="col-4 pt-3 pb-3">
																	<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$month_sub.'/'.$domain_sub.'/'.$dept_sub.'/finance/rejected'); ?>">
																		<h3 class="mb-1">
																			<?php
 																	$tstsapp_fin = '7';
 																	$count_listmyideas_fin = $this->mapi->count_listmyideasbystatus_filter($tstsapp_fin,$year_sub,$domain_sub,$dept_sub);
 																	echo $count_listmyideas_fin;
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
	 					 <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalsubmitted/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.'/ALL'); ?>">


	 								<div class="card overflow-hidden">
	 		                            <div class="card-body">
	 		                                <div class="text-center">
	 		                                    <div class="profile-photo">
	 												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
	 											</div>
	 		                                    <h4 class="card-title">Total Kaizen Submitted</h4>
	 																				<h3><?php
																			 	 $tsts = '1,2,3,4,5,6,7';
																			 	 $count_listmyideas = $this->mapi->count_listmyideasbystatus_filter($tsts,$year_sub,$domain_sub,$dept_sub);
																			 	 echo $count_listmyideas;
																			 	 ?></h3>
	 																			 <div class="progress mb-2">
	 																			 <div class="progress-bar progress-animated bg-info" style="width: 80%"></div>
	 																			 </div>
	 		                                </div>
	 		                            </div>

	 		                            <div class="card-footer pt-0 pb-0 text-center">
	 		                                <div class="row">
	 											<div class="col-4 pt-3 pb-3 border-right">
	 												<h3 class="mb-1">
														<?php
													 $tsts = '1,2,3,4,5,6,7';
													 $typ_stsd = 'dri';
													 $count_listmyideastypebystatus_filter_dri = $this->mapi->count_listmyideastypebystatus_filter($tsts,$typ_stsd,$year_sub,$domain_sub,$dept_sub);
													 echo $count_listmyideastypebystatus_filter_dri;
													 ?>
	 										 </h3><span>DRI</span>
	 											</div>
	 											<div class="col-4 pt-3 pb-3 border-right">
	 												<h3 class="mb-1">
														<?php
													 $tsts = '1,2,3,4,5,6,7';
													 $typ_stsi = 'iedept';
													 $count_listmyideastypebystatus_filter_iedept = $this->mapi->count_listmyideastypebystatus_filter($tsts,$typ_stsi,$year_sub,$domain_sub,$dept_sub);
													 echo $count_listmyideastypebystatus_filter_iedept;
													 ?>
	 												</h3><span>IE Dept</span>
	 											</div>
	 											<div class="col-4 pt-3 pb-3">
	 												<h3 class="mb-1">
														<?php
													 $tsts = '1,2,3,4,5,6,7';
													 $typ_stsf = 'finance';
													 $count_listmyideastypebystatus_filter_finance = $this->mapi->count_listmyideastypebystatus_filter($tsts,$typ_stsf,$year_sub,$domain_sub,$dept_sub);
													 echo $count_listmyideastypebystatus_filter_finance;
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
<div class="col-xl-4 col-lg-4 col-sm-4">
	 <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalpending/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.'/ALL'); ?>">
				<div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="profile-photo">
								<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
							</div>
                                <h4 class="card-title">Total Kaizen Approval Pending</h4>
																<h3><?php
													 		 $tstsrej = '1';
													 		 $count_listmyideas = $this->mapi->count_listmyideasbystatus_filter($tstsrej,$year_sub,$domain_sub,$dept_sub);
													 		 echo $count_listmyideas;
													 		 ?></h3>
															 <div class="progress mb-2">
															 <div class="progress-bar progress-animated bg-warning" style="width: 80%"></div>
															 </div>
                            </div>
                        </div>

                        <div class="card-footer pt-0 pb-0 text-center">
                            <div class="row">
							<div class="col-4 pt-3 pb-3 border-right">
								<h3 class="mb-1">
									<?php
								 $tstsrej_m = '1';
								 $typ_sts_d = 'dri';
								 $count_listmyideas_dri = $this->mapi->count_listmyideastypebystatus_filter($tstsrej_m,$typ_sts_d,$year_sub,$domain_sub,$dept_sub);
								 echo $count_listmyideas_dri;
								 ?>
						 </h3><span>DRI</span>
							</div>
							<div class="col-4 pt-3 pb-3 border-right">
								<h3 class="mb-1">
									<?php
								 $tstsrej_m = '2';
								 $typ_sts_d = 'iedept';
								 $count_listmyideas_iedept = $this->mapi->count_listmyideastypebystatus_filter($tstsrej_m,$typ_sts_d,$year_sub,$domain_sub,$dept_sub);
								 echo $count_listmyideas_iedept;
								 ?>
								</h3><span>IE Dept</span>
							</div>
							<div class="col-4 pt-3 pb-3">
								<h3 class="mb-1">
									<?php
								 $tstsrej_m = '4';
								 $typ_sts_d = 'finance';
								 $count_listmyideas_fin = $this->mapi->count_listmyideastypebystatus_filter($tstsrej_m,$typ_sts_d,$year_sub,$domain_sub,$dept_sub);
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
		<div class="col-xl-4 col-lg-4 col-sm-4">
			 <a>
						<div class="card overflow-hidden">
														<div class="card-body">
																<div class="text-center">
																		<div class="profile-photo">
										<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
									</div>
																		<h4 class="card-title">Image Sanitization</h4>
																		<!--
																	 <div class="progress mb-2">
																	 <div class="progress-bar progress-animated bg-warning" style="width: 80%"></div>
																	 </div>
																 -->
																 <p>&nbsp;</p>
 																</div>
														</div>

														<div class="card-footer pt-0 pb-0 text-center">
																<div class="row">


									<div class="col-6 pt-3 pb-3 border-right">
										<h3 class="mb-1">
											<?php
											//$tstsapp = '1,2,4,6';
											$stsimgapp_pen = '1';
											$count_listmyideas_imgapprov_filter_pen = $this->mapi->count_listmyideas_imgapprov_filter($stsimgapp_pen,$year_sub,$domain_sub,$dept_sub);
											echo $count_listmyideas_imgapprov_filter_pen;
											?>
								 </h3><span>Total Pending</span>
									</div>


									<div class="col-6 pt-3 pb-3">
										<h3 class="mb-1">
											<?php
 									 $stsimgapp_rej = '3';
									 $count_listmyideas_imgapprov_filter_rej = $this->mapi->count_listmyideas_imgapprov_filter($stsimgapp_rej,$year_sub,$domain_sub,$dept_sub);
									 echo $count_listmyideas_imgapprov_filter_rej;
									 ?>
								 </h3><span>Total Rejected</span>
									</div>

																</div>
														</div>
												</div>
											</a>
					</div>
					<!--End Box-->




				<!--Box-->
				<div class="col-xl-4 col-lg-4 col-sm-4">
					 <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalapproved/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.'/ALL'); ?>">
								<div class="card overflow-hidden">
		                            <div class="card-body">
		                                <div class="text-center">
		                                    <div class="profile-photo">
												<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="" width="100">
											</div>
		                                    <h4 class="card-title">Total Kaizen Approved</h4>
																				<h3><?php
																	 	 	 $tstsapp = '2,4,5,6,7';
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
											 $tstsapp_dri = '2,4,5,6,7';
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
	  <a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea/totalrejected/'.$year_sub.'/'.$domain_sub.'/'.$dept_sub.'/ALL'); ?>">
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
			 						 <h4 class="card-title">Kaizen Yearly Report : <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDiv"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>



								<p>&nbsp;</p>
								<p>&nbsp;</p>

				        <div class="row">
				        <!------ ONGOING PROJECTS----------->
				        <div class="col-lg-12">
				        <div class="ibox float-e-margins">
				        <div class="ibox-title">
				            <h5>Montly Table <small class="minifonth">(<?php echo "Domain : ".$domain_sub.",&nbsp;&nbsp; |&nbsp;&nbsp; Department : ".$dept_sub.", &nbsp;&nbsp; |&nbsp;&nbsp;  Year : ".$year_sub; ?>)</small></h5>
				         </div>
				        <div class="ibox-content">

				            <div class="table-responsive overflowscroll">
				                <table class="table table-striped tableborder" border="1">
				                    <thead>
				                    <tr>
 				                        <th rowspan="2" class="tblbg_gray">#</th>
				                        <th rowspan="2" class="tblbg_gray"><center>Month</center></th>
																<th colspan="3" class="tblbg_blue"><center>Total Kaizen Submitted</center></th>
																<th colspan="2"><center>Image Sanitization</center></th>
																<th colspan="3" class="tblbg_orange"><center>Pending Approval</center></th>
																<th colspan="3" class="tblbg_red"><center>Total Kaizen Rejected</center></th>
										 						<th colspan="3" class="tblbg_green"><center>Total Kaizen Approved </center></th>
 				                    </tr>

														<tr>

															<th><center>DRI</center></th>
															<th><center>IE Dept</center></th>
															<th><center>Finance</center></th>

 																<th><center>Pending</center></th>
																<th><center>Rejected</center></th>
																<!--<th><center>Approved</center></th>-->

																<th><center>DRI</center></th>
																<th><center>IE Dept</center></th>
																<th><center>Finance</center></th>

																<th><center>DRI</center></th>
																<th><center>IE Dept</center></th>
																<th><center>Finance</center></th>

																<th><center>DRI</center></th>
																<th><center>IE Dept</center></th>
																<th><center>Finance</center></th>



 				                    </tr>
				                    </thead>
				                    <tbody>

									<?php
														$i=1;
														$viewmonth = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
														foreach($viewmonth as $viewmonthrow) {
															$i_len = strlen($i);
															if($i_len==1) { $i_val = '0'.$i; } else { $i_val = $i; }

															$currentmonth = date('m');
 															?>
				                    <tr <?php if($i>$currentmonth) {
															//echo 'class="blurdiv"';
														} ?>>
				                        <td><center><?php echo $i_val; ?></center></td>
				                        <td><center><a><?php echo $viewmonthrow; ?></a></center></td>



					         <?php /*
										<td class="tblbg_lightblue"><center>
											<?php
									 	 $tsts = '1,2,3,4,5,6,7';
									 	 $count_listmyideasbystatus_filter_month = $this->mapi->count_listmyideasbystatus_filter_month($tsts,$year_sub,$i_val,$domain_sub,$dept_sub);
									 	 echo $count_listmyideasbystatus_filter_month;
									 	 ?>
										</center></td>
										*/ ?>



										<!--Total : DRI-->
										<td class="tblbg_lightblue"><center>



											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/dri/all'); ?>" class="atagpadd">
											<?php
										 $tsts = '1,2,3,4,5,6,7';
									 	 $typ_stsd = 'dri';
									 	 $count_listmyideastypebystatus_filter_month_dri = $this->mapi->count_listmyideastypebystatus_filter_month($tsts,$typ_stsd,$year_sub,$i_val,$domain_sub,$dept_sub);
									 	 echo $count_listmyideastypebystatus_filter_month_dri;
									 	 ?>
									 	</a>
										</center></td>

										<!--Total : IE Dept-->
										<td class="tblbg_lightblue">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/iedept/all'); ?>">
											<center>
											<?php
										 $tsts = '2,3,4,5,6,7';
									 	 $typ_stsi = 'iedept';
									 	 $count_listmyideastypebystatus_filter_month_iedept = $this->mapi->count_listmyideastypebystatus_filter_month($tsts,$typ_stsi,$year_sub,$i_val,$domain_sub,$dept_sub);
									 	 echo $count_listmyideastypebystatus_filter_month_iedept;
									 	 ?>
										</center>
									</a>
									</td>

										<!--Total : Finance-->
										<td class="tblbg_lightblue">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/finance/all'); ?>">
											<center>
											<?php
										 $tsts = '1,2,3,4,5,6,7';
									 	 $typ_stsf = 'finance';
									 	 $count_listmyideastypebystatus_filter_month_finance = $this->mapi->count_listmyideastypebystatus_filter_month($tsts,$typ_stsf,$year_sub,$i_val,$domain_sub,$dept_sub);
									 	 echo $count_listmyideastypebystatus_filter_month_finance;
									 	 ?>
										</center>
										</a>
									</td>



										<!--IMG Pending-->
										<td>
 											<center>
											<?php
											//$tstsapp = '1,2,4,6';
											$stsimgapp_pen = '1';
											$count_listmyideas_imgapprov_filter_month_pen = $this->mapi->count_listmyideas_imgapprov_filter_month($stsimgapp_pen,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideas_imgapprov_filter_month_pen;
											?>
										</center>
 								</td>

										<!--IMG - Rejected-->
										<td><center>
											<?php
											//$tstsapp = '1,2,4,6';
											$stsimgapp_pen = '3';
											$count_listmyideas_imgapprov_filter_month_pen = $this->mapi->count_listmyideas_imgapprov_filter_month($stsimgapp_pen,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideas_imgapprov_filter_month_pen;
											?>
										</center></td>


										<!--IMG - Approved-->
										<?php /*
										<td><center>
											<?php
											//$tstsapp = '1,2,4,6';
											$stsimgapp_pen = '2';
											$count_listmyideas_imgapprov_filter_month_pen = $this->mapi->count_listmyideas_imgapprov_filter_month($stsimgapp_pen,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideas_imgapprov_filter_month_pen;
											?>
										</center></td>
										*/ ?>


										<!--Pending Approval-->
										<?php /*
										<td class="tblbg_lightorange"><center>
											<?php
							 		   $tstsrej_m = '1';
							 			 $count_listmyideas = $this->mapi->count_listmyideasbystatus_filter_month($tstsrej_m,$year_sub,$i_val,$domain_sub,$dept_sub);
							 			 echo $count_listmyideas;
							 			 ?>
										</center></td>
										*/ ?>

										<!--Pending Approval : DRI-->
										<td class="tblbg_lightorange">


											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/dri/pending'); ?>">
											<center>
											<?php
										 $tstsrej_m = '1';
										 $typ_sts_d = 'dri';
										 $count_listmyideas_dri = $this->mapi->count_listmyideastypebystatus_filter_month($tstsrej_m,$typ_sts_d,$year_sub,$i_val,$domain_sub,$dept_sub);
										 echo $count_listmyideas_dri;
										 ?>
										</center>
										</a>
									</td>

										<!--Pending Approval : IE Dept-->
										<td class="tblbg_lightorange">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/iedept/pending'); ?>">
											<center>
											<?php
										 $tstsrej_m = '1';
										 $typ_sts_d = 'iedept';
										 $count_listmyideas_iedept = $this->mapi->count_listmyideastypebystatus_filter_month($tstsrej_m,$typ_sts_d,$year_sub,$i_val,$domain_sub,$dept_sub);
										 echo $count_listmyideas_iedept;
										 ?>
										</center>
									</a>
									</td>

										<!--Pending Approval : Finance-->
										<td class="tblbg_lightorange">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/finance/pending'); ?>">
											<center>
											<?php
										 $tstsrej_m = '1';
										 $typ_sts_d = 'finance';
										 $count_listmyideas_fin = $this->mapi->count_listmyideastypebystatus_filter_month($tstsrej_m,$typ_sts_d,$year_sub,$i_val,$domain_sub,$dept_sub);
										 echo $count_listmyideas_fin;
										 ?>
										</center>
									</a>
								</td>



										<td class="tblbg_lightred">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/dri/rejected'); ?>">
											<center>
											<?php
											$tstsapp_dri_m = '3';
											$count_listmyideasbystatus_filter_month_dri = $this->mapi->count_listmyideasbystatus_filter_month($tstsapp_dri_m,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideasbystatus_filter_month_dri;
											?>
										</center>
										</a>
									</td>


										<td class="tblbg_lightred">

											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/iedept/rejected'); ?>">
											<center>
											<?php
											$tstsapp_iedept_m = '5';
											$count_listmyideasbystatus_filter_month_iedept = $this->mapi->count_listmyideasbystatus_filter_month($tstsapp_iedept_m,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideasbystatus_filter_month_iedept;
											?>
										</center>
										</a>
									</td>


										<td class="tblbg_lightred">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/finance/rejected'); ?>">
											<center>
											<?php
											$tstsapp_fin_m = '7';
											$count_listmyideasbystatus_filter_month_fin = $this->mapi->count_listmyideasbystatus_filter_month($tstsapp_fin_m,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideasbystatus_filter_month_fin;
											?>
										</center>
										</a>
									</td>




										<td class="tblbg_lightgreen">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/dri/approved'); ?>">
											<center>
											<?php
											$tstsapp_dri_m_a = '2,4,5,6,7';
											$count_listmyideasbystatus_filter_month_dri_a = $this->mapi->count_listmyideasbystatus_filter_month($tstsapp_dri_m_a,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideasbystatus_filter_month_dri_a;
											?>
										</center>
										</a>
									</td>


										<td class="tblbg_lightgreen">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/iedept/approved'); ?>">
											<center>
											<?php
											$tstsapp_iedept_m_a = '4,6,7';
											$count_listmyideasbystatus_filter_month_iedept_a = $this->mapi->count_listmyideasbystatus_filter_month($tstsapp_iedept_m_a,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideasbystatus_filter_month_iedept_a;
											?>
										</center>
										</a>
										</td>


										<td class="tblbg_lightgreen">
											<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_monthfilter/'.$year_sub.'/'.$i_val.'/'.$domain_sub.'/'.$dept_sub.'/finance/approved'); ?>">
											<center>
											<?php
											$tstsapp_fin_m_a = '6';
											$count_listmyideasbystatus_filter_month_fin_a = $this->mapi->count_listmyideasbystatus_filter_month($tstsapp_fin_m_a,$year_sub,$i_val,$domain_sub,$dept_sub);
											echo $count_listmyideasbystatus_filter_month_fin_a;
											?>
										</center>
										</a>
									</td>



				                    </tr>

									<?php
									$i++; }
									?>

				                    </tbody>
				                </table>
				            </div>

				        </div>
				        </div>
				        </div>
				        <!------END ONGOING PROJECTS----------->
				        </div>






																<p>&nbsp;</p>
																<p>&nbsp;</p>

												        <div class="row">
												        <!------ ONGOING PROJECTS----------->
												        <div class="col-lg-12">
												        <div class="ibox float-e-margins">
												        <div class="ibox-title">
												            <h5>Montly Table <small class="minifonth">(<?php echo "Year : ".$year_sub; ?>)</small></h5>
												         </div>
												        <div class="ibox-content">

												            <div class="table-responsive overflowscroll">
        <table class="table table-striped tableborder" border="1">
            <thead>
            <tr>
                  <th rowspan="2" class="tblbg_gray"><center>#</center></th>
                <th rowspan="2" class="tblbg_gray"><center>Month</center></th>
								<th colspan="3" class="tblbg_blue"><center>Total Kaizen Submitted</center></th>
              </tr>


            </thead>
            <tbody>

					  <!-- 1-->
            <tr>
              <td><center>1</center></td>
              <td><center><a>16th-Dec-<?php echo $year_sub-1; ?>  to 15th-Jan-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$year_sub_1 = $year_sub-1;
								$date1_1 = '16-12-'.$year_sub_1;
								$date1_2 = '15-01-'.$year_sub;

								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date1_1.'/'.$date1_2.''); ?>" class="atagpadd">
								 <?php
								 echo $this->mapi->listkaizenbyhalfmonth($date1_1,$date1_2);
								 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->

						<!-- 1-->
            <tr>
              <td><center>2</center></td>
              <td><center><a>16th-Jan-<?php echo $year_sub; ?>  to 15th-Feb-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date2_1 = '16-01-'.$year_sub;
								$date2_2 = '15-02-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date2_1.'/'.$date2_2.''); ?>" class="atagpadd">
								 <?php
 								 echo $this->mapi->listkaizenbyhalfmonth($date2_1,$date2_2);
 								 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>3</center></td>
              <td><center><a>16th-Feb-<?php echo $year_sub; ?>  to 15th-Mar-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date3_1 = '16-02-'.$year_sub;
								$date3_2 = '15-03-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date3_1.'/'.$date3_2.''); ?>" class="atagpadd">
									<?php
  								 echo $this->mapi->listkaizenbyhalfmonth($date3_1,$date3_2);
  								 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->

						<!-- 1-->
            <tr>
              <td><center>4</center></td>
              <td><center><a>16th-Mar-<?php echo $year_sub; ?>  to 15th-Apr-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date4_1 = '16-03-'.$year_sub;
								$date4_2 = '15-04-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date4_1.'/'.$date4_2.''); ?>" class="atagpadd">
									<?php
  									echo $this->mapi->listkaizenbyhalfmonth($date4_1,$date4_2);
 									?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->

						<!-- 1-->
            <tr>
              <td><center>5</center></td>
              <td><center><a>16th-Apr-<?php echo $year_sub; ?>  to 15th-May-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date5_1 = '16-04-'.$year_sub;
								$date5_2 = '15-05-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date5_1.'/'.$date5_2.''); ?>" class="atagpadd">
									<?php
  								 echo $this->mapi->listkaizenbyhalfmonth($date5_1,$date5_2);
 								 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>6</center></td>
              <td><center><a>16th-May-<?php echo $year_sub; ?>  to 15th-Jun-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date6_1 = '16-05-'.$year_sub;
								$date6_2 = '15-06-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date6_1.'/'.$date6_2.''); ?>" class="atagpadd">
									<?php

 								echo $this->mapi->listkaizenbyhalfmonth($date6_1,$date6_2);
 								?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>7</center></td>
              <td><center><a>16th-Jun-<?php echo $year_sub; ?>  to 15th-Jul-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date7_1 = '16-06-'.$year_sub;
  							 $date7_2 = '15-07-'.$year_sub;
								 ?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date7_1.'/'.$date7_2.''); ?>" class="atagpadd">
									<?php

 							 echo $this->mapi->listkaizenbyhalfmonth($date7_1,$date7_2);
 							 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>8</center></td>
              <td><center><a>16th-Jul-<?php echo $year_sub; ?>  to 15th-Aug-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date8_1 = '16-07-'.$year_sub;
								$date8_2 = '15-08-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date8_1.'/'.$date8_2.''); ?>" class="atagpadd">
									<?php

  							 echo $this->mapi->listkaizenbyhalfmonth($date8_1,$date8_2);
  							 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>9</center></td>
              <td><center><a>16th-Aug-<?php echo $year_sub; ?>  to 15th-Sep-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date9_1 = '16-08-'.$year_sub;
								$date9_2 = '15-09-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date9_1.'/'.$date9_2.''); ?>" class="atagpadd">
									<?php

 								echo $this->mapi->listkaizenbyhalfmonth($date9_1,$date9_2);
 								?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>10</center></td>
              <td><center><a>16th-Sep-<?php echo $year_sub; ?>  to 15th-Oct-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date10_1 = '16-09-'.$year_sub;
								$date10_2 = '15-10-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date10_1.'/'.$date10_2.''); ?>" class="atagpadd">
									<?php

 							 echo $this->mapi->listkaizenbyhalfmonth($date10_1,$date10_2);
 							 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>11</center></td>
              <td><center><a>16th-Oct-<?php echo $year_sub; ?>  to 15th-Nov-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date11_1 = '16-10-'.$year_sub;
	 							$date11_2 = '15-11-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date11_1.'/'.$date11_2.''); ?>" class="atagpadd">
									<?php

 							echo $this->mapi->listkaizenbyhalfmonth($date11_1,$date11_2);
 							?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
            <tr>
              <td><center>12</center></td>
              <td><center><a>16th-Nov-<?php echo $year_sub; ?>  to 15th-Dec-<?php echo $year_sub; ?></a></center></td>
 							<td class="tblbg_lightblue"><center>
								<?php
								$date12_1 = '16-11-'.$year_sub;
								$date12_2 = '15-12-'.$year_sub;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date12_1.'/'.$date12_2.''); ?>" class="atagpadd">
									<?php

 						 echo $this->mapi->listkaizenbyhalfmonth($date12_1,$date12_2);
 						 ?>
						 	 </a>
							</center></td>
            </tr>
						<!-- 1-->


						<!-- 1-->
						<tr>
							<td><center>13</center></td>
							<td><center><a>16th-Dec-<?php echo $year_sub; ?>  to 15th-Jan-<?php echo $year_sub+1; ?></a></center></td>
							<td class="tblbg_lightblue"><center>
								<?php
								$year_sub_nxt = $year_sub + 1;
								$date13_1 = '16-12-'.$year_sub;
								$date13_2 = '15-01-'.$year_sub_nxt;
								?>
								<a href="<?php echo site_url('admin/kaizenidea/ideamang/myidea_half_monthfilter/'.$date13_1.'/'.$date13_2.''); ?>" class="atagpadd">
									<?php

 						echo $this->mapi->listkaizenbyhalfmonth($date13_1,$date13_2);
 						?>
							 </a>
							</center></td>
						</tr>
						<!-- 1-->




            </tbody>
        </table>
												            </div>

												        </div>
												        </div>
												        </div>
												        <!------END ONGOING PROJECTS----------->
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
