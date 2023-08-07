<?php
					$uri2 = $this->uri->segment(2);
					$uri3 = $this->uri->segment(3);
					$uri4 = $this->uri->segment(4);
          $uri5 = $this->uri->segment(5);
					$uri6 = $this->uri->segment(6);
				?>


				<?php
				$viv_profile_id = $this->session->userdata('viv_profile_id');
				$viv_empid = $this->session->userdata('viv_empid');
				$viv_profile_pic = $this->session->userdata('viv_profile_pic');
				$viv_fname = $this->session->userdata('viv_fname');
				$viv_designation = $this->session->userdata('viv_designation');
				$viv_user_type = $this->session->userdata('viv_user_type');
				$viv_email = $this->session->userdata('viv_email');

				?>
<html>
<head>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <style>

</style>
</head>
 <body>
  <input type="button" class="btn-convert" value="Generate PDF">


<div class="single-html-block">
<!-- DOWNLOAD PDF-->
<!--Sample Form-->
<!--END Sample Form-->





	<?php
	$listmyideasbyiid = $this->mapi->listmyideasbyiid($uri3);
	 foreach ($listmyideasbyiid as $rowArray) {
		$idea_id = $rowArray->idea_id;
		$activity = $rowArray->activity;
		$activity_desc = $rowArray->activity_desc;
		$activity_ex = explode(",",$activity);

		$version_no = $rowArray->version_no;
		$proj_code = $rowArray->proj_code;
		$doc_no = $rowArray->doc_no;
		$benifit_area = $rowArray->benifit_area;
		$benifit_area_ex = explode(",",$benifit_area);
		$ref_no = $rowArray->ref_no;
		$tepl_plant = $rowArray->tepl_plant;
		$ktheme = $rowArray->ktheme;
		$idea = $rowArray->idea;
		$status = $rowArray->status;
		$subdatetime = $rowArray->subdatetime;
		$root_cause = $rowArray->root_cause;
		$status = $rowArray->status;

	?>

  <div class="row">
     <div class="col-12">
         <div class="right-box-padding">


     <div class="read-content fun_reload_div">


  <form id="formID-1"  action="<?php

	if($status=='0') { echo site_url('admin/updateidea'); }
	else { echo ''; }

	?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
          <!--Div-->
                  <div class="card-header">
                    <h4 class="card-title">Post My Idea</h4>
                 </div>
                 <div class="card-body">
                    <div class="basic-form">



											<div class="row">


												<!--Form1-->
											<div class="col-lg-3">
													<div class="carddashed">
															<div class="card-body">

													<div class="right-box-padding">
															<div class="read-content">
																<!--
														 <div class="card-header">
																<h4 class="card-title">Booking Details</h4>
														 </div>
															-->
														 <div class="card-body">
															 <center><img src="<?php echo base_url(); ?>assets/images/tatalogo.png" class="kaizenlogo" />
															 <br/><b>TEPL KAIZEN IDEA</b></center>
															 <p>&nbsp;</p>
 														 </div>
													 </div>
												 </div>

											</div>
											</div>
											</div>
											 <!--END Form1-->


											 <!--Form1-->
										 <div class="col-lg-4">
												 <div class="carddashed">
														 <div class="card-body">

												 <div class="right-box-padding">
														 <div class="read-content">
															 <!--
														<div class="card-header">
															 <h4 class="card-title">Booking Details</h4>
														</div>
														 -->
														<div class="card-body">

															<div class="form-group mb10 radiotick">
																<label>ACTIVITY<r1>*</r1></label>
																<label title="MURA" class="mlmin12"><input type="checkbox" class="hideradio" name="activity[]" <?php if(in_array("MURA", $activity_ex)) { echo 'checked'; } ?> value="MURA" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /> <img class="higwei20" />MURA</label>

																<label title="MURI" class="mlmin12"><input type="checkbox" class="hideradio" name="activity[]" <?php if(in_array("MURI", $activity_ex))  { echo 'checked'; } ?> value="MURI" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /> <img class="higwei20" />MURI</label>

																<label title="MUDA" class="mlmin12"><input type="checkbox" class="hideradio" name="activity[]" <?php if(in_array("MUDA", $activity_ex)) { echo 'checked'; } ?> value="MUDA" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /> <img class="higwei20" />MUDA</label>
														 </div>

														 <div class="form-group">
															 <textarea class="form-control mb10" name="activity_desc" <?php if($status=='0') { } else { echo 'readonly'; }  ?> id="activity_desc"><?php echo $activity_desc; ?></textarea>
														 </div>

														 <div class="form-group">
															 <label class=""> <span class="pullleft">Benefit Area <r1>*</r1></span>
															 </br>
																 <label class="tab tabcheckbox">
	                                 <input type="checkbox" name="benifit_area[]" value="P" class="tab-input" <?php if(in_array("P", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
	                                 <div class="tab-box">P</div>
	                               </label>

																 <label class="tab tabcheckbox">
	                                 <input type="checkbox" name="benifit_area[]" value="Q" class="tab-input" <?php if(in_array("Q", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
	                                 <div class="tab-box">Q</div>
	                               </label>

																 <label class="tab tabcheckbox">
																	 <input type="checkbox" name="benifit_area[]" value="D" class="tab-input" <?php if(in_array("C", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
																	 <div class="tab-box">C</div>
																 </label>

																 <label class="tab tabcheckbox">
	                                 <input type="checkbox" name="benifit_area[]" value="D" class="tab-input" <?php if(in_array("D", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
	                                 <div class="tab-box">D</div>
	                               </label>

																 <label class="tab tabcheckbox">
	                                 <input type="checkbox" name="benifit_area[]" value="S" class="tab-input" <?php if(in_array("S", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
	                                 <div class="tab-box">S</div>
	                               </label>

																 <label class="tab tabcheckbox">
	                                 <input type="checkbox" name="benifit_area[]" value="M" class="tab-input" <?php if(in_array("M", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
	                                 <div class="tab-box">M</div>
	                               </label>

																 <label class="tab tabcheckbox">
	                                 <input type="checkbox" name="benifit_area[]" value="E" class="tab-input" <?php if(in_array("E", $benifit_area_ex)) { echo 'checked'; } ?> <?php if($status=='0') { } else { echo 'readonly'; }  ?>>
	                                 <div class="tab-box">E</div>
	                               </label>
															 </label>
														</div>

														</div>
													</div>
												</div>

										 </div>
										 </div>
										 </div>
											<!--END Form1-->


											<!--Form1-->
 										<div class="col-lg-5">
												<div class="carddashed">
														<div class="card-body">

												<div class="right-box-padding">
														<div class="read-content">
															<!--
													 <div class="card-header">
															<h4 class="card-title">Booking Details</h4>
													 </div>
												 		-->
													 <div class="card-body">

														 <div class="row">
														 <div class="col-sm-6">
														 <div class="form-group">
																<label>Doc No <r1>*</r1></label>
																<input type="text" name="doc_no" class="form-control mb10" value="<?php  if(empty($doc_no)) { echo "TEPL-IE-C-FR-0005"; } else { echo $doc_no; } ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
														 </div>
													 	</div>

														<div class="col-sm-6">
														 <div class="form-group">
																<label>Version No/Date<r1>*</r1></label>
																<input type="text" name="version_no" class="form-control mb10" value="<?php   if(empty($version_no)) { echo "01/".date("d.m.Y").""; } else { echo $version_no; } ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
														 </div>
													 </div>

													 <div class="col-sm-6">
														 <div class="form-group">
																<label><!--Project Code-->Cost Centre<r1>*</r1></label>
																<input type="text" required name="proj_code" id="proj_code" class="form-control mb10 " value="<?php echo $proj_code; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
														 </div>
													 </div>

													 <div class="col-sm-6">
														 <div class="form-group">
																<label>KAIZEN Ref.No<r1>*</r1></label>
																<input type="text" required name="ref_no" id="ref_no" class="form-control " value="<?php echo $ref_no; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
														 </div>
													 </div>
												 </div> <!--row-->

													 </div>
												 </div>
											 </div>

										</div>
										</div>
										</div>
 										 <!--END Form1-->


										 <!--Form1-->
										<div class="col-lg-12">
												<div class="carddashed">
														<div class="card-body">

												<div class="right-box-padding">
														<div class="read-content">
															<!--
													 <div class="card-header">
															<h4 class="card-title">Booking Details</h4>
													 </div>
														-->
													 <div class="card-body">
														 <div class="row">
														 <div class="col-sm-6">
														 <div class="form-group">
															 <label>Plant Name<r1>*</r1></label> <br/>
															 <select class="form-control " name="plantname" id="plantname">

																 <?php if($status=='0') {    ?>
																								<option value="">Select</option>
																								<?php $plantname = $rowArray->plantname; ?>
																 								<option value="Pilot Plant" <?php if($plantname=='Pilot Plant') { echo 'selected'; } ?>>Pilot Plant</option>
																								<option value="Main Plant" <?php if($plantname=='Main Plant') { echo 'selected'; } ?>>Main Plant</option>
																                <option value="Both" <?php if($plantname=='Both') { echo 'selected'; } ?>>Both</option>
																	<?php }  else { ?>

 																		<?php $plantname = $rowArray->plantname; ?>
																		<option value="<?php echo $plantname; ?>"  ><?php echo $plantname; ?></option>
 																	<?php  }	?>


																</select>
														</div>
														</div>


														<div class="col-sm-6">
														<div class="form-group">
															<label>Kaizen Theme <r1>*</r1></label>
															<input type="text" name="ktheme" id="ktheme" required class="form-control" value="<?php echo $ktheme; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													   </div>
													 	</div>


														<div class="col-sm-6">
														<div class="form-group">
															<label><!--Area/Line/Machine-->Block/Line/Machine/Others <r1>*</r1></label>
															<input type="text" name="tepl_plant" id="tepl_plant" required class="form-control" value="<?php echo $tepl_plant; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													   </div>
													 	</div>




														<div class="col-sm-6">
														<div class="form-group">
															<label><!--Idea-->Suggested Kaizen ( Logical Correlation with root cause) <r1>*</r1></label>
															<input type="text" required name="idea" id="idea" class="form-control" value="<?php echo $idea; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													   </div>
													 	</div>
													</div><!--row-->

													 </div>
												 </div>
											 </div>

										</div>
										</div>
										</div>
										 <!--END Form1-->



										 <!--Form1-->
									 <div class="col-lg-12">
											 <div class="carddashed">
													 <div class="card-body">

											 <div class="right-box-padding">
													 <div class="read-content">
														 <!--
													<div class="card-header">
														 <h4 class="card-title">Booking Details</h4>
													</div>
													 -->
													<div class="card-body">

														<div class="row">
														<div class="col-sm-6">
														<div class="form-group">
															<label>Problem Statement<r1>*</r1></label> <br/>
															<textarea class="textarea50" <?php if($status=='0') { } else { echo 'readonly'; }  ?> name="prob_stmt"><?php echo $rowArray->prob_stmt; ?></textarea>
													 	</div>
												 		</div>

														<div class="col-sm-6">
														<div class="form-group">
															<label>Counter measure( Engineering solution)<r1>*</r1></label> <br/>
															<textarea class="textarea50" name="count_measur" <?php if($status=='0') { } else { echo 'readonly'; }  ?>><?php echo $rowArray->count_measur; ?></textarea>
													 	</div>
												 		</div>
													</div><!--row-->

												 </div>

													</div>
												</div>
											</div>

									 </div>
									 </div>
 										<!--END Form1-->



										<!--Form1-->
									<div class="col-lg-12">
											<div class="carddashed">
													<div class="card-body">

											<div class="right-box-padding">
													<div class="read-content">
														<!--
												 <div class="card-header">
														<h4 class="card-title">Booking Details</h4>
												 </div>
													-->
												 <div class="card-body">

													 <div class="row">
													 <div class="col-sm-6">
													 <div class="form-group">
														 <label>BEFORE<r1>*</r1></label> <br/>
														 <!--Before Image-->
														 <div class="referesh_att_before_image">

														 <?php
														 $before_img = $rowArray->before_img;
														 if(empty($before_img)) { $before_img = 0;  }
														 //echo $before_img;
														 $filepath = 'assets/images/kaizenattachments/'.$before_img;
														 if(file_exists($filepath)) { ?>
															 <a href="<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $before_img; ?>" target="_blank">
															 <img src='<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $before_img; ?>' class="imgbeforedisplay" />
															 </a>

															 <?php if($status=='0') {    ?>
															 <span onclick="return confirm('Are you sure you want to delete this image?');" class="cursorpointer badge bgmildreddark mt10 deletekaizenimg" data-iid="<?php echo $idea_id; ?>" data-itype="before">Delete</span>
														 <?php } ?>
														 <?php }	 else {
														 ?>
														 <!--
														 <input type="file" id="attach_file" name="files" />
														 -->
														 <!--AttachFile-->
														 <div class="inpfilelabel addattachfile">
														 <input id="attach_file" type="file" name="files"  style="display: none;" />
														 <label for="attach_file" id="file-drag" class="">
															 <div id="start">
																	<div class="row">

																 <div class="col-sm-12">
																		 <img id="file-image" src="<?php echo base_url(); ?>assets/images/uploadicon.svg" alt="Preview" class="hidden">
																		 <div class="attachtitle">Click here to attach files</div>
																		 <div id="notimage" class="hidden">Supportive formats:
																							 JPG / PNG / JPEG
																							 Upload up to 10 MB</div>
																 </div>


																 </div>

																</div>
														 </div>
														 <?php } ?>
														 <span id="uploaded_image"></span> <br/>
														 <span class="responsemessage_img_before"></span>

														 <!--END AttachFile-->
													 </div>
														 <!--END Before Image -->
													 </div>
													 </div>

													 <div class="col-sm-6">
													 <div class="form-group">
														 <label>AFTER<r1>*</r1></label> <br/>
														 <div class="referesh_att_after_image">
														 <?php
														 $after_img = $rowArray->after_img;
														 //echo $before_img;
														 if(empty($after_img)) { $after_img = 0;  }
														 $filepath_a = 'assets/images/kaizenattachments/'.$after_img;
														 if(file_exists($filepath_a)) { ?>
															 <a href="<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $after_img; ?>" target="_blank">
															 <img src='<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $after_img; ?>' class="imgbeforedisplay" />
															 </a>

															 <?php if($status=='0') {    ?>
															 <span onclick="return confirm('Are you sure you want to delete this image?');" class="cursorpointer badge bgmildreddark mt10 deletekaizenimg" data-iid="<?php echo $idea_id; ?>" data-itype="after">Delete</span>
														 <?php } ?>
														 <?php }	 else {
														 ?>
														 <!--
														 <input type="file" id="attach_file" name="files" />
														 -->
														 <!--AttachFile-->
														 <div class="inpfilelabel addattachfile_a">
														 <input id="attach_file_after" type="file" name="files_a"  style="display: none;" />
														 <label for="attach_file_after" id="file-drag" class="">
															 <div id="start">
																	<div class="row">

																 <div class="col-sm-12">
																		 <img id="file-image" src="<?php echo base_url(); ?>assets/images/uploadicon.svg" alt="Preview" class="hidden">
																		 <div class="attachtitle">Click here to attach files</div>
																		 <div id="notimage" class="hidden">Supportive formats:
																							 JPG / PNG / JPEG
																							 Upload up to 10 MB</div>
																 </div>


																 </div>

																</div>
														 </div>
														 <?php } ?>
														 <span id="uploaded_image_after"></span> <br/>
														 <span class="responsemessage_img_after"></span>

														 <!--END AttachFile-->

													 </div>
													 </div>
													 </div>
												 </div><!--row-->

												</div>

												 </div>
											 </div>
										 </div>

									</div>
									</div>
 									 <!--END Form1-->




									 <!--Form1-->
									 <div class="col-lg-12">
									 	<div class="carddashed">
									 			<div class="card-body">

									 	<div class="right-box-padding">
									 			<div class="read-content">
									 				<!--
									 		 <div class="card-header">
									 				<h4 class="card-title">Booking Details</h4>
									 		 </div>
									 			-->
									 		 <div class="card-body">
									 			 <div class="referesh_att_multi_image">
									 			 <div class="row">

									  			<?php
									 			$listideasmultiimgbyiid_count = $this->mapi->listideasmultiimgbyiid_count($uri5);

									 			if($listideasmultiimgbyiid_count>0) {
									 			$listideasmultiimgbyiid = $this->mapi->listideasmultiimgbyiid($uri5);
									 			 foreach ($listideasmultiimgbyiid as $listideasmultiimgbyiidArray) {
									 				 $multi_idea_id = $listideasmultiimgbyiidArray->idea_id;
									 				 $multi_imgid = $listideasmultiimgbyiidArray->imgid;
									 				 $multi_img_name = $listideasmultiimgbyiidArray->img_name;

									 				?>
									 			 <div class="col-sm-3">
									 			 <div class="form-group">
									 				 <label>&nbsp;</label> <br/>
									 				 <!--Before Image-->
									 				 <div class="">

									 				 <div class="inpfilelabel_attm addattachfile">
									  					 <div id="start">
									 							<div class="row">

									 						 <div class="col-sm-12">
									 							 <img src="<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $multi_img_name; ?>" height="113" width="170" />


									 							 <?php if($status=='0') {    ?>
									 							 <span onclick="return confirm('Are you sure you want to delete this image?');" class="cursorpointer badge bgmildreddark mt10 deletekaizenimg_multi delbutt" data-iid="<?php echo $multi_idea_id; ?>" data-imgid="<?php echo $multi_imgid; ?>"  >Delete</span>
									 						 	<?php } ?>


									 						 </div>




									 						 </div>

									 						</div>
									 				 </div>


									 				 <!--END AttachFile-->
									 			 </div>
									 				 <!--END Before Image -->
									 			 </div>
									 			 </div>
									 		 <?php }

									 	 			}
									 		 ?>





									 			 <div class="col-sm-3 addimg_positiontop">
									 			 <div class="form-group">
									 				 <label>Add Additional Attachments</label> <br/>
									 				 <div class="">

									 				 <div class="inpfilelabel_attm addattachfile_a">
									 				 <?php if($status=='0') {    ?>
									 				 <input id="attach_file_multi" type="file" name="files_multi"  style="display: none;" />
									 			   <?php } ?>
									 				 <label for="attach_file_multi" id="file-drag" class="">
									 					 <div id="start">
									 							<div class="row">

									 						 <div class="col-sm-12">
									 								 <img id="file-image" src="<?php echo base_url(); ?>assets/images/uploadicon.svg" alt="Preview" class="hidden">
									 								 <div class="attachtitle">Click here to attach more files</div>
									  						 </div>


									 						 </div>

									 						</div>
									 				 </div>

									 				 <span id="uploaded_image_multi"></span> <br/>
									 				 <span class="responsemessage_img_multi"></span>

									 				 <!--END AttachFile-->

									 			 </div>
									 			 </div>
									 			 </div>

									 			 </div>
									 		 </div><!--row-->

									 		</div>

									 		 </div>
									 	 </div>
									  </div>

									 </div>
									 </div>
									 <!--END Form1-->






									 <!--Form1-->
								 <div class="col-lg-6">
										 <div class="carddashed">
												 <div class="card-body">

										 <div class="right-box-padding">
												 <div class="read-content">
													 <!--
												<div class="card-header">
													 <h4 class="card-title">Booking Details</h4>
												</div>
												 -->
												<div class="card-body">

													<div class="row">
														<span class="col-sm-12">SAVINGS <!--COST SAVINGS--></span>

													<?php /*
													<div class="col-sm-4">
													<div class="form-group">
 														<label>Quality<r1>*</r1></label> <br/>
														<input type="text" name="cs_quality" class="form-control mb10" value="<?php echo $rowArray->cs_quality; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>
													*/ ?>

													<div class="col-sm-4">
													<div class="form-group">
 														<label>Yield<r1>*</r1></label> <br/>
														<input type="text" name="cs_yield" class="form-control mb10" value="<?php echo $rowArray->cs_yield; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<div class="col-sm-4">
													<div class="form-group">
 														<label>Cycle Time<r1>*</r1></label> <br/>
														<input type="text" name="cs_cycletime" class="form-control mb10 inpchangecls cs_cycletime" value="<?php $cs_cycletime =  $rowArray->cs_cycletime; echo $cs_cycletime; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<div class="col-sm-4">
													<div class="form-group">
 														<label>Cost<r1>*</r1></label> <br/>
														<input type="text" name="cs_cost" class="form-control mb10 cs_costenter validate[custom[integer]]" value="<?php $cs_cost = $rowArray->cs_cost; echo $cs_cost; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<?php /*
													<div class="col-sm-4">
													<div class="form-group">
 														<label>Material<r1>*</r1></label> <br/>
														<input type="text" name="cs_material" class="form-control mb10" value="<?php echo $rowArray->cs_material; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>
													*/ ?>



													<div class="col-sm-4">
													<div class="form-group">
 														<label>Man power<r1>*</r1></label> <br/>
														<input type="text" name="cs_manpower" class="form-control mb10 inpchangecls cs_manpower" value="<?php $cs_manpower = $rowArray->cs_manpower; echo $cs_manpower; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<div class="col-sm-4">
													<div class="form-group">
 														<label>Consumables<r1>*</r1></label> <br/>
														<input type="text" name="cs_consumables" class="form-control mb10" value="<?php echo $rowArray->cs_consumables; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<div class="col-sm-4">
													<div class="form-group">
 														<label>Others<r1>*</r1></label> <br/>
														<input type="text" name="cs_others" class="form-control mb10" value="<?php echo $rowArray->cs_others; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<div class="col-sm-4">
													<div class="form-group">
 														<label>Total Savings<r1>*</r1></label> <br/>
														<input type="text" name="cs_totalsavings" class="form-control mb10" value="<?php echo $rowArray->cs_totalsavings; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>



													<div class="col-sm-8 hiddapprie">
													<div class="form-group">
 														<label>Approved by (IE)<r1>*</r1></label> <br/>
														<input type="text" name="cs_appr_ie" class="form-control mb10" value="<?php $cs_appr_ie = $rowArray->cs_appr_ie;
														if(empty($cs_appr_ie)) {
														//echo 'tajender.khurana@tataelectronics.co.in';
														echo $this->mapi->findieemail2bypid();


													} else {
														echo $cs_appr_ie;
													}
														 ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<div class="col-sm-8 ">
													<div class="form-group hiddappracc">
 														<label>Approved by (Accounts)<r1>*</r1></label> <br/>
														<input type="text" name="cs_appr_acco" class="form-control mb10" value="<?php $cs_appr_acco = $rowArray->cs_appr_acco;
														if(empty($cs_appr_acco)) {
														//echo 'tajender.khurana@tataelectronics.co.in';
														echo $this->mapi->findfinanceemail2bypid();
													} else {
														echo $cs_appr_acco;
													}
														 ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

													<?php /*
													<div class="col-sm-6">
													<div class="form-group">
 														<label>Approved by (Standardization)<r1>*</r1></label> <br/>
														<input type="text" name="cs_standardization" class="form-control mb10" value="<?php echo $rowArray->cs_standardization; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>


													<div class="col-sm-6">
													<div class="form-group">
 														<label>SOP/SP<r1>*</r1></label> <br/>
														<input type="text" name="cs_sopsp" class="form-control mb10" value="<?php echo $rowArray->cs_sopsp; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>



													<div class="col-sm-6">
													<div class="form-group">
 														<label>Drawing<r1>*</r1></label> <br/>
														<input type="text" name="cs_drawing" class="form-control mb10" value="<?php echo $rowArray->cs_drawing; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													</div>
													</div>

														*/ ?>

												</div><!--row-->

											 </div>

												</div>
											</div>
										</div>

								 </div>
								 </div>
										<!--END Form1-->




									 <!--Form1-->
								 <div class="col-lg-6">
										 <div class="carddashed">
												 <div class="card-body">

										 <div class="right-box-padding">
												 <div class="read-content">
													 <!--
												<div class="card-header">
													 <h4 class="card-title">Booking Details</h4>
												</div>
												 -->
												<div class="card-body">

													<div class="row">

														<table class="tablerefresh_teammemb width100per">
															<tr>
																<th>EMP.ID</th>
																<th>Team member name</th>
																<th>Function</th>

																<th>Action</th>
														 </tr>
															<tr>
																<td width="10%">
																	<input type="text" name="eempid" placeholder="" class="eempid typeempid" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />

																</td>
																	<td width="30%">
																		<input type="text" name="teamname" placeholder="" class="eteamname etypefname" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
																	<td width="30%"><input type="text" name="function" placeholder="" class="efunction etypedepart" class="efunction" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
																	 <input type="hidden" class="eideaid width53" name="eideaid" value="<?php echo $uri5; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />

																	<td width="10%">
																		<?php
																		$count_listteammembersbyiid = $this->mapi->count_listteammembersbyiid($idea_id);
																		if($count_listteammembersbyiid<6) {
																		?>
																		<button type="button" class="btn btn-primary addteammembnames">Add</button>
																	<?php }  else {  ?>
																		<button type="button" class="btn btn-primary blurdiv">Add</button>
																 <?php 	} ?>
																	</td>
															</tr>


															<?php
															 $listteammembersbyiid = $this->mapi->listteammembersbyiid($idea_id);
															 foreach ($listteammembersbyiid as $rowArrayTeam) {
																	$teamid = $rowArrayTeam->teamid;
															?>
															<tr class="borderedtd">
																<td><?php echo $rowArrayTeam->empid; ?></td>
																<td><?php echo $rowArrayTeam->teamname; ?></td>
																<td><?php echo $rowArrayTeam->function; ?></td>

																<td><center><span class="deleteteammember cursorpointer" data-iid="<?php echo $idea_id; ?>" data-mid="<?php echo $teamid; ?>"><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
															</tr>

															<?php } ?>

															<?php for($i=6;$i>$count_listteammembersbyiid;$i--) { ?>
															<tr class="borderedtd">
																<td>&nbsp;</td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
														<?php } ?>


														</table>


												</div><!--row-->

											 </div>

												</div>
											</div>
										</div>

								 </div>
								 </div>
										<!--END Form1-->

										<!--Form1-->
			 					 <div class="col-lg-12">
			 							 <div class="carddashed">
			 									 <div class="card-body">

			 							 <div class="right-box-padding">
			 									 <div class="read-content">
			 										 <!--
			 									<div class="card-header">
			 										 <h4 class="card-title">Booking Details</h4>
			 									</div>
			 									 -->
			 									<div class="card-body">

			 										<div class="row">
			 										<div class="col-sm-4">
			 										<div class="form-group">
			 											<label>Root Cause ( Problem Phenomena)<r1>*</r1></label> <br/>
														Type  :</br>
														<?php
														$root_cause_ex = explode(",",$root_cause);

														?>
														<select name="root_cause[]" class="form-control mb10" <?php if($status=='0') { } else { echo 'readonly'; }  ?> multiple>
																						<option value="">Select</option>
																						<option value="Pareto Chart" <?php if (in_array('Pareto Chart', $root_cause_ex)) { echo 'selected'; } ?>>Pareto Chart</option>
																						<option value="5 whys" <?php if (in_array('5 whys', $root_cause_ex)) { echo 'selected'; } ?>>5 whys</option>
																						<option value="Fishbone Diag" <?php if (in_array('Fishbone Diag', $root_cause_ex)) { echo 'selected'; } ?>>Fishbone Diag</option>
																						<option value="Scatter Plot Diag" <?php if (in_array('Scatter Plot Diag', $root_cause_ex)) { echo 'selected'; } ?>>Scatter Plot Diag</option>
																						<option value="FMEA" <?php if (in_array('FMEA', $root_cause_ex)) { echo 'selected'; } ?>>FMEA</option>
																						<option value="Other" <?php if (in_array('Other', $root_cause_ex)) { echo 'selected'; } ?>>Other</option>

														 </select>
 														<br/>
														Attachment <br/>
														<?php /*
														<textarea class="textarea50" name="root_cause_exp" <?php if($status=='0') { } else { echo 'readonly'; }  ?>><?php
														echo $rowArray->root_cause_exp; ?></textarea>
														*/ ?>

														<!--- ATACH File-->
														<div class="">
 													 <div class="form-group">
 														 <!--Before Image-->
 														 <div class="referesh_att_rootcause_image">

 														 <?php
 														 $rootcause_img = $rowArray->rootcause_img;
 														 if(empty($rootcause_img)) { $rootcause_img = 0;  }
 														 //echo $rootcause_img;
 														 $filepath = 'assets/images/kaizenattachments/'.$rootcause_img;
 														 if(file_exists($filepath)) { ?>
 															 <a href="<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $rootcause_img; ?>" target="_blank">
 															 <img src='<?php echo base_url(); ?>assets/images/kaizenattachments/<?php echo $rootcause_img; ?>' class="imgrootcausedisplay" />
 															 </a>

 															 <?php if($status=='0') {    ?>
 															 <span onclick="return confirm('Are you sure you want to delete this image?');" class="cursorpointer badge bgmildreddark mt10 deletekaizenimg" data-iid="<?php echo $idea_id; ?>" data-itype="rootcause">Delete</span>
 														 <?php } ?>
 														 <?php }	 else {
 														 ?>
 														 <!--
 														 <input type="file" id="attach_file" name="files" />
 														 -->
 														 <!--AttachFile-->
 														 <div class="inpfilelabel addattachfile">
 														 <input id="attach_file_rootcause" type="file" name="files"  style="display: none;" />
 														 <label for="attach_file_rootcause" id="file-drag" class="">
 															 <div id="start">
 																	<div class="row">

 																 <div class="col-sm-12">
 																		 <img id="file-image" src="<?php echo base_url(); ?>assets/images/uploadicon.svg" alt="Preview" class="hidden">
 																		 <div class="attachtitle">Click here to attach files</div>
 																		 <div id="notimage" class="hidden">Supportive formats:
 																							 JPG / PNG / JPEG
 																							 Upload up to 10 MB</div>
 																 </div>


 																 </div>

 																</div>
 														 </div>
 														 <?php } ?>
 														 <span id="uploaded_image_rootcause"></span> <br/>
 														 <span class="responsemessage_img_rootcause"></span>

 														 <!--END AttachFile-->
 													 </div>
 														 <!--END Before Image -->
 													 </div>
 													 </div>
													 <!--END Attach File-->

														Root Cause Explanation <br/>
														<textarea class="textarea50" name="root_cause_block" <?php if($status=='0') { } else { echo 'readonly'; }  ?>><?php
														echo $rowArray->root_cause_block; ?></textarea>

 			 										</div>
			 										</div>

			 										<div class="col-sm-4">
			 										<div class="form-group">
			 											<label>Brief explanation of present conditions<r1>*</r1></label> <br/>
			 											<textarea class="textarea331" name="brf_exp_precond" <?php if($status=='0') { } else { echo 'readonly'; }  ?>><?php echo $rowArray->brf_exp_precond; ?></textarea>
			 										</div>
			 										</div>

													<div class="col-sm-4">
			 										<div class="form-group">
			 											<label>Brief explanation of Improvements done<r1>*</r1></label> <br/>
			 											<textarea class="textarea331" name="brf_exp_impdone" <?php if($status=='0') { } else { echo 'readonly'; }  ?>><?php echo $rowArray->brf_exp_impdone; ?></textarea>
			 										</div>
			 										</div>
			 									</div><!--row-->

			 								 </div>

			 									</div>
			 								</div>
			 							</div>

			 					 </div>
			 					 </div>
			 						<!--END Form1-->


									<!--Form1-->
								<div class="col-lg-4">
										<div class="carddashed">
												<div class="card-body">

										<div class="right-box-padding">
												<div class="read-content">
													<!--
											 <div class="card-header">
													<h4 class="card-title">Booking Details</h4>
											 </div>
												-->
											 <div class="card-body">
												 Horizontal Deployment:
												 <?php $horizradio = $rowArray->horizradio;
												 				if(empty($horizradio)) { $horizradio = 'NO'; }
												 ?>
												 <table class="pull-right"><tr>
													 <td><input type="radio" name="horizradio" value="YES" dataid="1" class="horizradio" <?php if($horizradio=='YES') { echo 'checked'; } ?> />Yes</td>
													 <td>&nbsp;</p>
													 <td><input type="radio" name="horizradio" value="NO" dataid="0" class="horizradio" <?php if($horizradio=='NO') { echo 'checked'; } ?> />No</td>
												 </tr></table>

											 </br></br>
											 <div id="enbdisblur" class="<?php if($horizradio=='NO') { echo 'blurdiv'; } ?>">
												 <div class="form-group">
														<label>In Other Machines within the cell </label>
														<input type="text" name="horizontal1" value="<?php echo $rowArray->horizontal1; ?>" class="form-control mb10" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
												 </div>

												 <div class="form-group">
														<label>Within the Department in all the machine groups </label>
														<input type="text" name="horizontal2" value="<?php echo $rowArray->horizontal2; ?>" class="form-control mb10" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
												 </div>

												 <div class="form-group">
														<label>In Other Dept/ Other Location </label>
														<input type="text" name="horizontal3" value="<?php echo $rowArray->horizontal3; ?>" class="form-control mb10" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
												 </div>

												 <div class="form-group">
														<label>Any other Relevant Points</label>
													 <input type="text" name="horizontal4" value="<?php echo $rowArray->horizontal4; ?>" class="form-control mb10" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
												 </div>

											 </div>



											 </div>
										 </div>
									 </div>

								</div>
								</div>
								</div>
								 <!--END Form1-->


								<!--Form1-->
							<div class="col-lg-8">
									<div class="carddashed">
											<div class="card-body">

									<div class="right-box-padding">
											<div class="read-content">
												<!--
										 <div class="card-header">
												<h4 class="card-title">Booking Details</h4>
										 </div>
											-->
										 <div class="card-body <?php if($horizradio=='NO') { echo 'blurdiv'; } ?>" id="enbdisblur2" >

											 <div class="row">
												 Scope and Plan for Horizontal Deployment <br/>
												 <table class="tablerefresh_sustenance">
													 <tr>
														 <th>SN</th>
														 <th>M/C</th>
														 <th>Target Date</th>
														 <th>Responsibility</th>
														 <th>Status</th>
														 <th>Action</th>
													 </tr>
													 <tr><td>
															 <?php $count_listsustenancebyiid = $this->mapi->count_listsustenancebyiid($idea_id);

															 $ssn = $count_listsustenancebyiid + 1;
															 ?>
														 <input readonly type="text" name="sn" class="form-control esn" value="<?php echo $ssn; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
														 <td><input type="text" name="mc" class="form-control emc" value="" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
														 <td><input type="text" name="targetdate" class="form-control etargetdate" value="" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
														 <td><input type="text" name="responsi" class="form-control eresponsi" value="" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
														 <td><input type="text" name="status" class="form-control estatus" value="" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
														 <input type="hidden" class="eideaid_s width53" name="eideaid_s" value="<?php echo $uri5; ?>" />
														 <td>
															 <?php

															 if($count_listsustenancebyiid<6) {
															 ?>
															 <button type="button" class="btn btn-primary addsustenance">Add</button>
														 <?php }  else {  ?>
															 <button type="button" class="btn btn-primary blurdiv">Add</button>
														<?php 	} ?>
														 </td>
													 </tr>


													 <?php
														$listsustenancebyiid = $this->mapi->listsustenancebyiid($idea_id);
														foreach ($listsustenancebyiid as $listsustenancebyiidArray) {
															 $sus_id = $listsustenancebyiidArray->sus_id;
													 ?>
													 <tr class="borderedtd">
														 <td><?php echo $listsustenancebyiidArray->sn; ?></td>
														 <td><?php echo $listsustenancebyiidArray->mc; ?></td>
														 <td><?php echo $listsustenancebyiidArray->targetdate; ?></td>
														 <td><?php echo $listsustenancebyiidArray->responsi; ?></td>
														 <td><?php echo $listsustenancebyiidArray->sus_status; ?></td>
														 <td><center><span class="deletesustenance cursorpointer" data-iid="<?php echo $idea_id; ?>" data-sid="<?php echo $sus_id; ?>"><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
													 </tr>

													 <?php } ?>


													 <?php for($i=6;$i>$count_listsustenancebyiid;$i--) { ?>
													 <tr class="borderedtd">
														 <td>&nbsp;</td>
														 <td></td>
														 <td></td>
														 <td></td>
														 <td></td>
														 <td></td>
													 </tr>
												 <?php } ?>


												 </table>

										 </div><!--row-->

										</div>

										 </div>
									 </div>
								 </div>

							</div>
							</div>
								 <!--END Form1-->


								 <!--Form1-->
							 <div class="col-lg-4">
							 	 <div class="carddashed">
							 			 <div class="card-body">

							 	 <div class="right-box-padding">
							 			 <div class="read-content">
							 				 <!--
							 			<div class="card-header">
							 				 <h4 class="card-title">Booking Details</h4>
							 			</div>
							 			 -->
							 			<div class="card-body">

							 				<div class="row">
							 				<div class="col-sm-12">
							 				<div class="form-group">
							 					<label>Benifits (P,Q,C,S,D,M,E)<r1>*</r1></label> <br/>

							 					<textarea class="textarea292" name="benifits" <?php if($status=='0') { } else { echo 'readonly'; }  ?>><?php echo $rowArray->benifits; ?></textarea>
							 				</div>
							 				</div>

							 			</div><!--row-->

							 		 </div>

							 			</div>
							 		</div>
							 	</div>

							 </div>
							 </div>
							 <!--END Form1-->







								<!--Form1-->
							<div class="col-lg-8">
									<div class="carddashed">
											<div class="card-body">

									<div class="right-box-padding">
											<div class="read-content">
												<!--
										 <div class="card-header">
												<h4 class="card-title">Booking Details</h4>
										 </div>
											-->
										 <div class="card-body">

											 <table class="width100per">
												 <tr>
													 <th> </th>
													 <th>KAIZEN Originated By</th>
													 <th>KAIZEN Approved By</th>
													 <th  class="blurdiv">KAIZEN Confirmed By</th>
												 </tr>

												 <tr class="borderedtd">
													<td>Name</td>
													<td><input type="text" <?php if($status=='0') { } else { echo 'readonly'; }  ?> name="origi_name" value="<?php
													$origi_name = $rowArray->origi_name;
													if(empty($origi_name)) {
														echo $viv_fname;
													} else {
														echo $origi_name;
													}

													?>" class="form-control" /></td>
													<td>

														<?php
 													 $origi_dept = $rowArray->origi_dept;
 													 if(empty($origi_dept)) {
 														 $emp_dept =  $this->mapi->findmydeptbypid($viv_profile_id);
 													 } else {
 														 $emp_dept =  $origi_dept;
 													 }

													 $origi_domain = $rowArray->origi_domain;
													 if(empty($origi_dept)) {
 														 $emp_domain =  $this->mapi->findmydomainbypid($viv_profile_id);
 													 } else {
 														 $emp_domain =  $origi_domain;
 													 }

 													 ?>

														<?php
														$findmanageremailbypid = $this->mapi->findmanageremailbypid($emp_dept);
														$findmanagernamebypid = $this->mapi->findmanagernamebypid($emp_dept);
														$findallmanagernamebypid = $this->mapi->findallmanagernamebypid($emp_dept);
														$findmanageremail2bypid = $this->mapi->findmanageremail2bypid($emp_dept);

														$findmanageremailbydid = $this->mapi->findmanageremailbydid($emp_domain);
														$findmanagernamebydid = $this->mapi->findmanagernamebydid($emp_domain);
														$findmanageremail2bydid = $this->mapi->findmanageremail2bydid($emp_domain);
														$findmanagerdepartmentbyeid = $this->mapi->findmanagerdepartmentbyeid($findmanageremailbydid);


														$findfinanceemailbypid = $this->mapi->findfinanceemailbypid();
														$findfinancenamebypid = $this->mapi->findfinancenamebypid();
														$findfinanceemail2bypid = $this->mapi->findfinanceemail2bypid();

														$findiedeptemailbypid = $this->mapi->findiedeptemailbypid();
														$findiedeptnamebypid = $this->mapi->findiedeptnamebypid();
														$findiedeptemail2bypid = $this->mapi->findiedeptemail2bypid();

														$approv_name =  $rowArray->approv_name;
														if($status=='0') { ?>

														<select required class=" mb-10 fil_approv_name" name="approv_name" id="approv_dept" >
														 <option value="">Select</option>
														 <?php
															//$listgroupbynamesbydept = $this->mapi->listgroupbynamesbydept();
															foreach ($findallmanagernamebypid as $findallmanagernamebypidArray) {
																$liemail = $findallmanagernamebypidArray->email;
																$lifname = $findallmanagernamebypidArray->fname;
														 ?>
															 <option value="<?php echo $liemail; ?> - <?php echo $lifname; ?>"><?php echo $liemail; ?> - <?php echo $lifname; ?></option>
														 <?php } ?>
															</select>


															<?php /*
															<input type="text" name="approv_name" value="<?php echo $findmanagernamebypid; ?>" class="form-control mb10" />
															*/ ?>

														<?php } else {  ?>


														 <input type="text" name="approv_name" <?php if($status=='0') { } else { echo 'readonly'; }  ?> value="<?php echo $approv_name; ?>" class="form-control mb10" />





														<?php }  ?>


														<input type="hidden" name="approv_email" value="" class="form-control mb10 hiddmang_email" />
														<input type="hidden" name="approv_email2" value="" class="form-control mb10 hiddmang_email2" />


													</td>
													<td  class="blurdiv"><input type="text" name="confirm_name" value="<?php echo $rowArray->confirm_name; ?>" class="form-control" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
													</tr>


												 <tr class="borderedtd">
													 <td>Dept</td>
													 <td><input type="text" <?php if($status=='0') { } else { echo 'readonly'; }  ?> name="origi_dept" value="<?php
													 $origi_dept = $rowArray->origi_dept;
													 if(empty($origi_dept)) {
														 echo $this->mapi->findmydeptbypid($viv_profile_id);
													 } else {
														 echo $origi_dept;
													 }

													 ?>" class="form-control" />

													 <input type="hidden" name="origi_domain" value="<?php
													 $origi_domain = $rowArray->origi_domain;
													 if(empty($origi_domain)) {
														 echo $this->mapi->findmydomainbypid($viv_profile_id);
													 } else {
														 echo $origi_domain;
													 }

													 ?>"   />
												 </td>
													 <td>
														 <?php
														 $findmanagerdepartbypid = $this->mapi->findmanagerdepartbypid($emp_dept); ?>
														 <?php $approv_dept =  $rowArray->approv_dept; ?>
												     <?php if($status=='0') { ?>
														 <?php /*
														 <div class="sel_fil_approv_name">
 														 <select class="form-control validate[required] mb-10 " name="approv_dept" id="approv_dept" >
							                <option value="">Select</option>
							                <?php /*
							                  $listgroupbydept = $this->mapi->listgroupbydept();
							                 foreach ($listgroupbydept as $listgroupbydeptArray) {
																 $lidepart = $listgroupbydeptArray->depart;
							                ?>
							                  <option <?php if($approv_dept==$lidepart) { echo 'selected'; } ?> value="<?php echo $lidepart; ?>"><?php echo $lidepart; ?></option>
							                <?php } * ?>
							                 </select>
														 </div>
														 */ ?>

														 <input type="text" name="approv_dept" <?php if($status=='0') { } else { echo 'readonly'; }  ?> value="<?php echo $findmanagerdepartbypid; ?>" class="form-control mb10" />

														 <?php } else {  ?>
															<input type="text" name="approv_dept" <?php if($status=='0') { } else { echo 'readonly'; }  ?> value="<?php echo $approv_dept; ?>" class="form-control mb10" />
														 <?php }  ?>
													 </td>
													 <td class="blurdiv"><input type="text" name="confirm_dept" value="<?php echo $rowArray->confirm_dept; ?>" class="form-control" <?php if($status=='0') { } else { echo 'readonly'; }  ?> /></td>
 												 </tr>


												 <tr class="borderedtd">
													 <td>Date</td>
													 <td><input type="date" min="{new Date().toISOString().split('T')[0]}" required id="origi_date"  name="origi_date" <?php if($status=='0') { } else { echo 'readonly'; }  ?> value="<?php
													 $origi_date = $rowArray->origi_date;
													 if(empty($origi_date)) {
														 echo date('d-m-Y');
													 } else {
														 echo $origi_date;
													 }
													 ?>" class="form-control" /></td>
													 <td><input type="date"  min="{new Date().toISOString().split('T')[0]}" id="approv_date" <?php if($status=='0') {  } else { echo 'readonly'; } ?> name="approv_date" value="<?php
													 $approv_date = $rowArray->approv_date;
													 if(empty($approv_date)) {
														 echo date('d-m-Y');
													 } else {
														 echo $approv_date;
													 }
													 ?>" class="form-control" /></td>
													 <td  class="blurdiv"><input <?php if($status=='0') {  } else { echo 'readonly'; } ?> type="text" name="confirm_date" value="<?php echo $rowArray->confirm_date; ?>" class="form-control"  /></td>
 												 </tr>
 											 </table>



										 </div>
									 </div>
								 </div>

							</div>
							</div>
							</div>
							 <!--END Form1-->




							 <!--Form1-->
						 <div class="col-lg-12">
								 <div class="carddashed">
										 <div class="card-body">

								 <div class="right-box-padding">
										 <div class="read-content">
											 <!--
										<div class="card-header">
											 <h4 class="card-title">Booking Details</h4>
										</div>
										 -->
										<div class="card-body">

											 FORMAT/ Ver,No : TEPL-IE-C-FR-0005/01 <br/>
											 Tata Electronics Private Limited


										</div>
									</div>
								</div>

						 </div>
						 </div>
						 </div>
							<!--END Form1-->


							<?php
							$imgapprov =  $rowArray->imgapprov;
							$imgapprov_by =  $rowArray->imgapprov_by;
							if($imgapprov=='2' || $imgapprov=='3') {

						$attachm = $this->mapi->findtotalimageofkaizen_attachm($uri5);
						if($attachm>0) {
							?>
								 <!--Form1-->
							 <div class="col-lg-12">
									 <div class="carddashed">
											 <div class="card-body">

									 <div class="right-box-padding">
											 <div class="read-content">
												 <!--
											<div class="card-header">
												 <h4 class="card-title">Booking Details</h4>
											</div>
											 -->
											<div class="card-body">
												 <?php
													if($imgapprov=='2') { $clsbdg = 'bgmildgreen'; $clsbdg_val = 'Approved'; }
													else if($imgapprov=='3') { $clsbdg = 'bgmildred'; $clsbdg_val = 'Rejected';  }

 													$findnamebyprofileid_fnamee = $this->mapi->findnamebyprofileid($imgapprov_by);
 												 ?>
												 <h4>Image Sanitization</h4><br/>

												 <?php
												 	if(!empty($findnamebyprofileid_fnamee)){
												 ?>
												 Name   : <?php echo $findnamebyprofileid_fnamee; ?> <br/>
 												 Status : <span class="badge <?php echo $clsbdg; ?>"><?php echo $clsbdg_val; ?></span>

											 <?php } else { ?>
												 Image Attached by DRI
 											 <?php } ?>

												 <br/>
 											</div>
										</div>
									</div>

							 </div>
							 </div>
							 </div>
								<!--END Form1-->
							<?php
						}
						} ?>



				<?php $hod_status =  $rowArray->hod_status;
				if($hod_status=='Approved' || $hod_status=='Rejected') {
				?>
					 <!--Form1-->
				 <div class="col-lg-12">
						 <div class="carddashed">
								 <div class="card-body">

						 <div class="right-box-padding">
								 <div class="read-content">
									 <!--
								<div class="card-header">
									 <h4 class="card-title">Booking Details</h4>
								</div>
								 -->
								<div class="card-body">
									 <?php
									 	if($hod_status=='Approved') { $clsbdg = 'bgmildgreen'; }
										else if($hod_status=='Rejected') { $clsbdg = 'bgmildred';  }
										$hod_email =  $rowArray->hod_email;
										$hod_datetime =  $rowArray->hod_datetime;
										$reject_reason =  $rowArray->reject_reason;

										$emailidd = $this->mapi->findemail2byemail($hod_email);
										$fnamee = $this->mapi->findnamebyemail($hod_email);
										$departt = $this->mapi->finddeptbyemail($hod_email);
									 ?>
									 <h4>DRI</h4><br/>
									 Name   : <?php echo $fnamee; ?> <br/>
 									 Email   : <?php echo $emailidd; ?> <br/>
									 Department   : <?php echo $departt; ?> <br/>
									 Status : <span class="badge <?php echo $clsbdg; ?>"><?php echo $hod_status; ?></span> <br/>
									 <?php
									 if(!empty($reject_reason)) { ?>
										 Rejected Reason   : <?php echo $reject_reason; ?> <br/>
									 <?php } ?>
									 <br/>
									 Date & Time   : <?php echo $hod_datetime; ?> <br/>
 								</div>
							</div>
						</div>

				 </div>
				 </div>
				 </div>
					<!--END Form1-->
				<?php } ?>




				<?php $iedept_status =  $rowArray->iedept_status;
				if($iedept_status=='2' || $iedept_status=='3') {
				?>
					 <!--Form1-->
				 <div class="col-lg-12">
						 <div class="carddashed">
								 <div class="card-body">

						 <div class="right-box-padding">
								 <div class="read-content">
									 <!--
								<div class="card-header">
									 <h4 class="card-title">Booking Details</h4>
								</div>
								 -->
								<div class="card-body">
									 <?php
									 	if($iedept_status=='2') { $clsbdg_iedept = 'bgmildgreen'; }
										else if($iedept_status=='3') { $clsbdg_iedept = 'bgmildred';  }
										$iedept_email =  $rowArray->iedept_email;
										$iedept_datetime =  $rowArray->iedept_datetime;
										$iedept_reject_reason =  $rowArray->iedept_reject_reason;

										$emailidd_iedept = $this->mapi->findemail2byemail($iedept_email);
										$fnamee_iedept = $this->mapi->findnamebyemail($iedept_email);
										$departt_iedept = $this->mapi->finddeptbyemail($iedept_email);
									 ?>
									 <h4>IE Dept</h4><br/>
									 Name   : <?php echo $fnamee_iedept; ?> <br/>
 									 Email   : <?php echo $emailidd_iedept; ?> <br/>
									 Department   : <?php echo $departt_iedept; ?> <br/>
									 Status : <span class="badge <?php echo $clsbdg_iedept; ?>"><?php
									 if($iedept_status=='2') { echo 'Approved'; }
									 elseif($iedept_status=='3') { echo 'Rejected'; }

									 ?></span> <br/>
									 <?php
									 if(!empty($iedept_reject_reason)) { ?>
									   <b>Rejected Reason   :</b> <?php echo $iedept_reject_reason; ?> <br/>
									 <?php } ?>
									 <br/>

									 Date & Time   : <?php echo $iedept_datetime; ?> <br/>
 								</div>
							</div>
						</div>

				 </div>
				 </div>
				 </div>
					<!--END Form1-->
				<?php } ?>


				<?php $finance_status =  $rowArray->finance_status;
				if($finance_status=='2' || $finance_status=='3') {
				?>
					 <!--Form1-->
				 <div class="col-lg-12">
						 <div class="carddashed">
								 <div class="card-body">

						 <div class="right-box-padding">
								 <div class="read-content">
									 <!--
								<div class="card-header">
									 <h4 class="card-title">Booking Details</h4>
								</div>
								 -->
								<div class="card-body">
									 <?php
									 	if($finance_status=='2') { $clsbdg_finance = 'bgmildgreen'; }
										else if($finance_status=='3') { $clsbdg_finance = 'bgmildred';  }
										$finance_email =  $rowArray->finance_email;
										$finance_datetime =  $rowArray->finance_datetime;
										$fin_reject_reason =  $rowArray->fin_reject_reason;

										$emailidd_finance = $this->mapi->findemail2byemail($finance_email);
										$fnamee_finance = $this->mapi->findnamebyemail($finance_email);
										$departt_finance = $this->mapi->finddeptbyemail($finance_email);
									 ?>
									 <h4>Finance Dept</h4><br/>
									 Name   : <?php echo $fnamee_finance; ?> <br/>
 									 Email   : <?php echo $emailidd_finance; ?> <br/>
									 Department   : <?php echo $departt_finance; ?> <br/>
									 Status : <span class="badge <?php echo $clsbdg_finance; ?>"><?php
									 if($finance_status=='2') { echo 'Approved'; }
									 elseif($finance_status=='3') { echo 'Rejected'; }



									 ?></span> <br/>

									 <?php
									if(!empty($fin_reject_reason)) { ?>
										<b>Rejected Reason   :</b> <?php echo $fin_reject_reason; ?> <br/>
									<?php } ?>
									<br/>


									 Date & Time   : <?php echo $finance_datetime; ?> <br/>
 								</div>
							</div>
						</div>

				 </div>
				 </div>
				 </div>
					<!--END Form1-->
				<?php } ?>






</div>





                     </div>
                 <!--END Div-->

                 <p>&nbsp;</p>
                 <div class="form-group col-md-6">
                   <input type="hidden" name="ideaid" value="<?php echo $uri5; ?>" />

									 <?php if($status=='0') { ?>


									 <button type="submit" id="submittodri" class="btn btn-warning" name="submit" value="saveit">Save It</button>
									 <span style="width:100px;">&nbsp;</span>
                   <button type="submit" id="submittodri" class="btn btn-primary" name="submit" value="submitit">Submit to DRI</button>
								 <?php }  ?>

                  </div>
            </form>
					<?php } ?>


					<?php
					$approv_email =  $rowArray->approv_email;
					$imgapprov =  $rowArray->imgapprov;
					//Emp Status : Waiting for HOD Approval
					if($status=='1' && $imgapprov=='1' && $approv_email!=$viv_email) {   ?>


						<button type="button" class="btn btn-success">Waiting for Image Sanitization</button>
						<br/>


						<p>&nbsp;</p>
 						<h4>Whould you like to Approve Kaizen Image and Move it to DRI Approval?</h4>
						<button type="button" name="imagestatus" ideaidurl="<?php echo $uri5; ?>" profile_id="<?php echo $viv_profile_id; ?>" value="yes" class="btn btn-info click_imgapprovalsts">Yes</button>
						<button type="button" name="imagestatus" ideaidurl="<?php echo $uri5; ?>" profile_id="<?php echo $viv_profile_id; ?>" value="no"  class="btn btn-danger click_imgapprovalsts" >No</button>






					<?php }

					if($status=='1' && $imgapprov=='2' && $approv_email!=$viv_email) {
					?>
 						<button type="button" class="btn btn-success">Waiting for DRI Approval</button>
				<?php } ?>





                                </div>

                            </div>
</div>
</div>
</div>



<!-- END DOWNLOAD PDF-->
</div>
  </body>
	<script src="<?php echo base_url(); ?>assets/lib/downloadpdf/jquery-2.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/downloadpdf/jspdf.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/downloadpdf/html2canvas.js"></script>

<script src="<?php echo base_url(); ?>assets/lib/downloadpdf/convert.js"></script>
  </html>
