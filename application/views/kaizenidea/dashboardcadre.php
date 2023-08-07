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
  <h4 class="col-sm-12">Dashboard - Cadre</h4>
  </div>
  </div>
  </div>
  <!--END Page Title-->


<?php if($viv_user_type=='TRMMADMIN') { ?>


  <!--Page Title-->
  <div class="row page-titles mx-0">
  <div class="col-sm-12 p-md-0">
		<h6 class="text-right">Total Kaizens Submitted</h4>
  <div class="welcome-text">

    <?php
    $listcadreall = $this->mapi->listcadreall();
    foreach ($listcadreall as $listcadreallrowArray) {
      $cadre = $listcadreallrowArray->cadre;
      $uri4 = str_replace('%20', ' ', $uri4);
     ?>

    <div class="">
           <!--Div-->
					 <a href="<?php //echo site_url('admin/kaizenidea/dashboard/'.$cadre.''); ?>">
            <div class="divcount pull-right">
            <div class="<?php if($uri4==$cadre) { echo 'bgl-green'; } else { echo 'bgl-primary'; } ?> rounded p-2">
              <p class="mb-0 counttitle text-center"><?php echo $cadre; ?></p>
              <p class="mb-0 countnumb text-center"><b><?php
							//$count_totalkaizenbydomain = $this->mapi->count_totalkaizenbydomain($domain);
							//$count_totalkaizenusersdomain = $this->mapi->count_totalkaizenusersdomain($domain);
              //$count_empbydomain = $this->mapi->count_empbydomain($domain);

              //echo $count_totalkaizenbydomain." / ".$count_empbydomain." ";
              ?>Null</b></p>
            </div>

          </div>
					</a>
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
		 <label>Cadre </label> <br/>
		 <select class="fil_domain" name="domain" id="domain" >
			<option value="">All</option>
			<?php
	    $listcadreall = $this->mapi->listcadreall();
	    foreach ($listcadreall as $listcadreallrowArray) {
	      $cadre = $listcadreallrowArray->cadre;
 	     ?>
				<option <?php //if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $cadre; ?>"><?php echo $cadre; ?></option>
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

				<?php
				if(empty($uri4)) {  $uri4 = 'All'; }
				if(empty($year_sub)) {  $year_sub = 'All'; }
				?>
				<!--Yearly -->
			  <div class="col-xl-12 col-lg-12 col-sm-12">
			 		 <div class="card">
			 				 <div class="card-header">
			 						 <h4 class="card-title">Cadre Yearly Report : <small class="minifonth">(<?php echo "Cadre : ".$uri4.",&nbsp;&nbsp; |&nbsp;&nbsp;   Year : ".$year_sub; ?>)</small></h4>

			 	 </div>
			 	 <div class="card-body">

			 		 <!-- HTML -->
			 		 <div id="testDivcadre"></div>
			 	 </div>
			 	 </div>
			 	 </div>
			 		<!--Yearly -->
  </div>



								<p>&nbsp;</p>
								<p>&nbsp;</p>




<?php } ?>





</div>


<p>&nbsp;</p>
