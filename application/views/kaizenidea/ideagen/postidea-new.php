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
<div class="content-body">
<div class="container-fluid">


	<?php
	$listmyideasbyiid_ideagen = $this->mapi->listmyideasbyiid_ideagen($uri5);
	 foreach ($listmyideasbyiid_ideagen as $rowArray) {
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

<!--Page Title-->
<div class="row page-titles mx-0">
<div class="col-sm-12 p-md-0">
<div class="welcome-text">
<h4>Post Idea

	<?php if($status=='0') {  ?>
	<button class="btn btn-primary pull-right" type="button" data-toggle="modal" data-target="#samplekaizenformmodel">Sample Idea Form</button>
	<?php } else { ?>



	<?php
	if($viv_user_type=='TRMMEMP') { ?>
		<a href="<?php echo site_url('admin/kaizenidea/ideagen/myidea'); ?>" class="btn btn-primary pull-right" type="button">Back to Kaizen List</a>

	<?php } elseif($viv_user_type=='TRMMMANG') { ?>
		<a href="<?php echo site_url('admin/kaizenidea/ideagen/ideaverification'); ?>" class="btn btn-primary pull-right" type="button">Back to Idea Verification List</a>

	<?php } elseif($viv_user_type=='TRMMIEDEPT') { ?>

		<a href="<?php echo site_url('admin/kaizenidea/ideagen/ideaverification'); ?>" class="btn btn-primary pull-right" type="button">Back to Idea Verification List</a>

	<?php } elseif($viv_user_type=='TRMMFINANCE') { ?>

		<a href="<?php echo site_url('admin/kaizenidea/ideagen/ideaverification'); ?>" class="btn btn-primary pull-right" type="button">Back to Idea Verification List</a>

	<?php } ?>





	<?php } ?>


</h4>
<span>Idea Generation > New Idea > Post</span>
<p class="responsemessage"></p>


</div>
</div>
</div>
<!--END Page Title-->


<!-- Modal -->
<div class="modal fade" id="samplekaizenformmodel" role="dialog">
  <div class="modal-dialog">



    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sample Idea Generation Form</h4>
      </div>
      <div class="modal-body">
				<!--Sample Form-->
				<table class="smttableform">
					<tr>

						<td rowspan="4">TEPL KAIZEN IDEA</td>

						<td>ACTIVITY</th>
						<td><label title="MURA"><input readonly type="checkbox" class="hideradio" name="activity[]" checked value="MURA" /> <img class="higwei20" />MURA</td>
						<td><label title="MURI"><input readonly type="checkbox" class="hideradio" name="activity[]" checked value="MURI" /> <img class="higwei20" />MURI</td>
						<td><label title="MUDA"><input readonly type="checkbox" class="hideradio" name="activity[]"  value="MUDA" /> <img class="higwei20" />MUDA</td>
						<td> Doc No</td>
						<td><input readonly type="text" name="doc_no" class="form-control" value="TEPL-IE-C-FR-0005" />
						</td>
					</tr>

					<tr>
						<td colspan="4" rowspan="2"><textarea></textarea></th>
						<td>Version No/Date</td>
						<td><input readonly type="text" name="version_no" class="form-control" value="01/18.11.21" /></td>
					</tr>

					<tr>
						<!--<td>Project Code</td>-->
						<td>Cost Centre</td>
						<td><input readonly type="text" name="proj_code" class="form-control" value="00C" /></td>
					</tr>

					<tr>
						<td colspan="4">
							<table class="width100per"><tr><td>Benefit Area :</td>


								<td class="text-center"><label class="tab">
									<input readonly type="checkbox" name="benifit_area[]" value="P" class="tab-input" >
									<div class="tab-box">P</div>
								</label></td>

								<td class="text-center"><label class="tab">
									<input readonly type="checkbox" name="benifit_area[]" value="Q" class="tab-input" checked>
									<div class="tab-box">Q</div>
								</label></td>

								<td class="text-center">
									<label class="tab">
										<input readonly type="checkbox" name="benifit_area[]" value="D" class="tab-input" >
										<div class="tab-box">C</div>
									</label>
								</td>
								<td class="text-center"><label class="tab">
									<input readonly type="checkbox" name="benifit_area[]" value="D" class="tab-input" >
									<div class="tab-box">D</div>
								</label></td>
								<td class="text-center"><label class="tab">
									<input readonly type="checkbox" name="benifit_area[]" value="S" class="tab-input" checked>
									<div class="tab-box">S</div>
								</label></td>
								<td class="text-center"><label class="tab">
									<input readonly type="checkbox" name="benifit_area[]" value="M" class="tab-input" checked>
									<div class="tab-box">M</div>
								</label></td>
								<td class="text-center"><label class="tab">
									<input readonly type="checkbox" name="benifit_area[]" value="E" class="tab-input" >
									<div class="tab-box">E</div>
								</label></td>
								<tr>
							</table>
						</td>
						<td>KAIZEN Ref.No</td>
						<td><input readonly type="text" name="ref_no" class="form-control" value="IM/PP/05" /></td>
					</tr>
				 </table>

				 <table class="smttableform">
					 <tr>
						 <td>Plant Name : <select readonly name="plantname">
															<option value="">Select</option>
															<option value="Pilot Plant" selected>Pilot Plant</option>
															<option value="Main Plant" >Main Plant</option>
															<option value="Both" >Both</option>
														</select></td>
						 <td>
							 <!--Area/Line/Machine:-->
							 Block/Line/Machine/Others <input readonly type="text" name="tepl_plant" class="form-control" value="IM 01 Process" /></td>
					</tr>

					<tr>
						<td>Idea Theme: <input type="text" name="ktheme" class="form-control"  readonly value="Poka yoke in Rail placing" /></td>
						<td><!--Idea--> Suggested Kaizen ( Logical Correlation with root cause):   <input type="text" name="idea" class="form-control" value="Provide stopper pin in Heating Fixture" readonly /></td>
					</tr>
					</table>


					<table class="smttableform">
						<tr>
							<td rowspan="2" VALIGN="top"> Problem Statement<br/><textarea readonly class="textarea850" name="prob_stmt">There is no POKA YOKE for Rail placing in Heating Fixture, due to this rail can place wrong direction and it possible for Mold damage and it affect part qualitity.</textarea>
							</td>

							<td colspan="3" VALIGN="top">
							Counter measure( Engineering solution): <textarea name="count_measur" readonly>Locating guide pin placed in fixture 3 places to avoid rail placing wrong orientation</textarea>
						</td></tr>

						<tr>
								<td VALIGN="top">BEFORE</br>
									<img src='<?php echo base_url(); ?>assets/images/kaizenimages/1.jpg' class="imgbeforedisplaymini" />
 						  	</td>

								<td VALIGN="top">AFTER</br>
 									<img src='<?php echo base_url(); ?>assets/images/kaizenimages/2.jpg' class="imgbeforedisplaymini" />
								</td>

								<td>SAVINGS <!--COST SAVINGS--> <br/>
									<table>
										<tr><td>Quality</td><td colspan="3"><input type="text" name="cs_quality" class="form-control" value="" readonly /></td></tr>
										<tr><td>Cost</td><td colspan="3"><input type="text" name="cs_cost" class="form-control" value="Rs 388186 / IM01 mold ( 13 IM1 molds for PP+BMB1 + BMB2)" readonly /></td></tr>
										<tr><td>Material</td><td colspan="3"><input type="text" name="cs_material" class="form-control" value="" readonly /></td></tr>
										<tr><td>Man power</td><td colspan="3"><input type="text" name="cs_manpower" class="form-control" value="" readonly /></td></tr>
										<tr><td>Consumables</td><td colspan="3"><input type="text" name="cs_consumables" class="form-control" value="" readonly /></td></tr>
										<tr><td>Others</td><td colspan="3"><input type="text" name="cs_others" class="form-control" value="" readonly /></td></tr>
										<tr><td>Total Savings</td><td colspan="3"><input type="text" name="cs_totalsavings" class="form-control" value="5046418" readonly /></td></tr>

										<tr><td rowspan="3">Approved by</td><td>IE</td><td colspan="2"><input type="text" name="cs_appr_ie" class="form-control" value="" readonly /></td></tr>
										<tr> <td>Accounts</td><td colspan="2"><input type="text" name="cs_appr_acco" class="form-control" value="" readonly /></td></tr>




										<tr><td>Standardization</td><td colspan="3"><input type="text" name="cs_standardization" class="form-control" value="Under Standardization" readonly /></td></tr>
										<tr><td>SOP/SP:</td><td colspan="3"><input type="text" name="cs_sopsp" class="form-control" value="Added in Work instruction" readonly /></td></tr>
										<tr><td>Drawing</td><td colspan="3"><input type="text" name="cs_drawing" class="form-control" value="Fixture Drawing updated" readonly /></td></tr>


										<tr><th>EMP.ID</th><th>Team member names</th> <th>Function</th> <th>Action</th></tr>
										<tr>
												<td>
													<td>
														<input type="text" readonly name="eempid" placeholder="Emp ID" class=" width43" />
													</td>
													<input type="text" readonly name="teamname" placeholder="Team member names" class="" /></td>
												<td><input type="text" readonly name="function" placeholder="function" class="" class="" /></td>


												<td>
 													<button type="button" class="btn btn-primary">Add</button>
 												</td>
										</tr>



										<tr>
											<td>	Silambarasan P</td>
											<td>TR- Moulding Engg</td>
											<td>204367</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>Afghan ismail khan</td>
											<td>TR- Moulding Engg</td>
											<td>203476</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>Senthil Kumar B</td>
											<td>TR- Moulding Engg</td>
											<td>202152</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>


										<tr>
											<td>Balaji R</td>
											<td>TR- Moulding Engg</td>
											<td>202443</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>Felixvenseslas S</td>
											<td>TR- Moulding Engg</td>
											<td>202918</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>Shijo MP</td>
											<td>TR- Design</td>
											<td>918780</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>Rajendran</td>
											<td>TR- Mfg</td>
											<td>203021</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>Karthik</td>
											<td>Maintenance	204054</td>
											<td>204054</td>
											<td><center><span class="cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>




									</table>
								</td>
						</tr>

						<tr>
							<td rowspan="2"  valign="top"><h4>Root Cause</h4>( Problem Phenomena)<br/>

								Type  :
								<select readonly name="root_cause">
																<option value="">Select</option>
																<option value="Pareto Chart" >Pareto Chart</option>
																<option value="5 whys" selected >5 whys</option>
																<option value="Fishbone Diag" >Fishbone Diag</option>
																<option value="Scatter Plot Diag" >Scatter Plot Diag</option>
																<option value="FMEA" >FMEA</option>
																<option value="Other" >Other</option>

															</select>


								<br/>
								<h4>Explanation :</h4>
								<textarea class="textarea300" readonly name="root_cause_exp">Why 1
To eliminate mold damages and mold repair down time

Why 2
Wrong insert orientation will cause mold damage

Why 3
No poka yoke/provision to prevent wrong orientation in heating fixture
					</textarea>


								</td>
							<td rowspan="2" valign="top">Brief explanation of present conditions<br/>
							<textarea readonly class="textarea450" name="brf_exp_precond">"There is no poka-yoke/ provision  avaiable in  Preheating Fixture.
So, even if the rail orientation is changed during the placement by operator, it can't be easily noticed and potentially the rails would be placed in a mold with wrong orientation whci shall cause mold damage as well as defect part."</textarea></td>

							<td rowspan="2" valign="top">Brief explanation of Improvements done<br/>
							<textarea readonly class="textarea450" name="brf_exp_impdone">"This Poka Yoke improvement (stopper pin) is used to improve the rail locating guidance to avoid wrong direction placing.                                                                              Locator pin has been placed in fixture for bottom rail, left rail & right rail toavoid direction wrong loading and Mold damage as well as correction time saved.                                                                      After implementing a poka yoke, operator can't able to place a rail in wrong orientation. This problem will be permanently eliminated.

POKA YOKE Pin made in Inhouse with tool room mfg support.</textarea></td>


							<td>Benifits (P,Q,C,S,D,M,E):
								<textarea readonly class="textarea150" name="benifits">
Q - This poka yoke will make sure the rail orientation is always right.              S -  This will ensure and prevent mold or part damage and improves mold
       safety.                                                                                                                           M- It will increase MTTR & MTBF (as of now no data).                                                Since IM1 is citical for further downstream process, this will have direct impact of unplanned downtime (reduction) in downstream process till final assembly.</textarea>
</td>
						</tr>


						<tr>
							<td valign="top"><h4>Eliminate wrong orientation of rails in Heating Fixture</h4><br/>
									<b>Sustenance: Under Sustenance</b><br/>
									Scope and Plan for Horizontal Deployment<br/>
									<table>
										<tr>
											<th>SN</th>
											<th>M/C</th>
											<th>Target Date</th>
											<th>Responsibility</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
										<tr><td>

											<input readonly type="text" name="sn" class="form-control " value="" /></td>
											<td><input readonly type="text" name="mc" class="form-control " value="" /></td>
											<td><input readonly type="text" name="targetdate" class="form-control " value="" /></td>
											<td><input readonly type="text" name="responsi" class="form-control " value="" /></td>
											<td><input readonly type="text" name="status" class="form-control " value="" /></td>

											<td>

												<button type="button" class="btn btn-primary">Add</button>

											</td>
										</tr>



										<tr>
											<td>1</td>
											<td>2</td>
											<td>29/11/21</td>
											<td>Alauddhin</td>
											<td>In progress</td>
											<td><center><span class=" cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>

										<tr>
											<td>2</td>
											<td>11</td>
											<td>TBD</td>
											<td>Sivananth M</td>
											<td>In progress</td>
											<td><center><span class=" cursorpointer" ><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
										</tr>





									</table>

							</td>
						</tr>

						<tr>
							<td colspan="3">Horizontal Deployment:</td>
							<td rowspan="2">
								<table class="width100per">
										<tr>
											<td><b>KAIZEN Originated By</b></td>
											<td><b>KAIZEN Approved By</b></td>
											<td><b>KAIZEN Confirmed By</b></td>
										</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>In Other Machines within the cell:</td>
							<td colspan="2"><input type="text" name="horizontal1" readonly value="All IM1 heating fixtures (manual ) + IM01 Automation Heating fixtures" class="form-control" /></td>

						</tr>
						<tr>
							<td>Within the Department in all the machine groups:</td>
							<td colspan="2"><input type="text" name="horizontal2" value="Yes" readonly class="form-control" /></td>
							<td rowspan="3">
								<table class="width100per bordernone">
										<tr>
											<td>Dept:<input type="text" name="origi_dept" value="" readonly class="form-control" /></td>
											<td><br/><input type="text" name="approv_dept" value="" readonly class="form-control" /></td>
											<td><br/><input type="text" name="confirm_dept" value="" readonly class="form-control" /></td>
										</tr>
										<tr>
											<td>Name:<input type="text" name="origi_name" value="Felixvenseslas S" class="form-control" readonly /></td>
											<td><br/><input type="text" name="approv_name" value="Balaji R" readonly class="form-control" /></td>
											<td><br/><input type="text" name="confirm_name" value="Senthil kumar B" readonly class="form-control" /></td>
										</tr>
										<tr>
											<td>Date:<input type="text" name="origi_date" value="21/10/21" readonly class="form-control" /></td>
											<td><br/><input type="text" name="approv_date" value="22/10/2021" readonly class="form-control" /></td>
											<td><br/><input type="text" name="confirm_date" value="22/10/2021" readonly class="form-control" /></td>
										</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>In Other Dept/ Other Location:</td>
							<td colspan="2"><input type="text" name="horizontal3" value=" Included BMB01 & BMB02 Location" readonly class="form-control" /></td>
						</tr>
						<tr>
							<td>Any other Relevant Points:</td>
							<td colspan="2"><input type="text" name="horizontal4" value="Nill" readonly class="form-control" /></td>
						</tr>


						<tr>
							<td colspan="4">FORMAT/ Ver,No : TEPL-IE-C-FR-0005/01</td>
						</tr>
						<tr>
							<td colspan="4">Tata Electronics Private Limited</td>
						</tr>
					</table>
				<!--Sample Form-->
      </div>
    </div>


  </div>
</div>
  <!-- END Modal -->







 <!-- Inner Page-->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">







                     <div class="row">
                        <div class="col-12">
                            <div class="right-box-padding">



     <div class="read-content fun_reload_div">


  <form id="formID-1"  action="<?php if($status=='0') { echo site_url('admin/updateidea_ideagen'); } else {
		echo '';
	} ?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
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
																<input type="text" name="proj_code" id="proj_code" required class="form-control mb10 " value="<?php echo $proj_code; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
														 </div>
													 </div>

													 <div class="col-sm-6">
														 <div class="form-group">
																<label>KAIZEN Ref.No<r1>*</r1></label>
																<input type="text" name="ref_no" id="ref_no" required class="form-control" value="<?php echo $ref_no; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
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
															<label>Idea Theme <r1>*</r1></label>
															<input type="text" name="ktheme" id="ktheme" required class="form-control" value="<?php echo $ktheme; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													   </div>
													 	</div>


														<div class="col-sm-6">
														<div class="form-group">
															<label><!--Area/Line/Machine-->Block/Line/Machine/Others <r1>*</r1></label>
															<input type="text" name="tepl_plant" required id="tepl_plant" class="form-control" value="<?php echo $tepl_plant; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
													   </div>
													 	</div>




														<div class="col-sm-6">
														<div class="form-group">
															<label><!--Idea-->Suggested Idea ( Logical Correlation with root cause) <r1>*</r1></label>
															<input type="text" name="idea" id="idea" class="form-control " value="<?php echo $idea; ?>" <?php if($status=='0') { } else { echo 'readonly'; }  ?> />
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
																		$count_listteammembersbyiid = $this->mapi->count_listteammembersbyiid_ideagen($idea_id);
																		if($count_listteammembersbyiid<6) {
																		?>
																		<button type="button" class="btn btn-primary addteammembnames">Add</button>
																	<?php }  else {  ?>
																		<button type="button" class="btn btn-primary blurdiv">Add</button>
																 <?php 	} ?>
																	</td>
															</tr>


															<?php
															 $listteammembersbyiid = $this->mapi->listteammembersbyiid_ideagen($idea_id);
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
															 <?php $count_listsustenancebyiid = $this->mapi->count_listsustenancebyiid_ideagen($idea_id);

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
														$listsustenancebyiid = $this->mapi->listsustenancebyiid_ideagen($idea_id);
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
													 <td><input type="date" required id="origi_date" name="origi_date" <?php if($status=='0') { } else { echo 'readonly'; }  ?> value="<?php
													 $origi_date = $rowArray->origi_date;
													 if(empty($origi_date)) {
														 echo date('d-m-Y');
													 } else {
														 echo $origi_date;
													 }
													 ?>" class="form-control" /></td>
													 <td><input type="date" id="approv_date" <?php if($status=='0') {  } else { echo 'readonly'; } ?> name="approv_date" value="<?php
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

						$attachm = $this->mapi->findtotalimageofkaizen_attachm_ideagen($uri5);
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
									 <b>Name   :</b> <?php echo $fnamee; ?> <br/>
 									 <b>Email   :</b> <?php echo $emailidd; ?> <br/>
									 <b>Department   :</b> <?php echo $departt; ?> <br/>
									 <b>Status :</b> <span class="badge <?php echo $clsbdg; ?>"><?php echo $hod_status; ?></span> <br/>
									 <?php
									 if(!empty($reject_reason)) { ?>
										 <b>Rejected Reason   :</b> <?php echo $reject_reason; ?> <br/>
									 <?php } ?>
									 <br/>
									 <b>Date & Time   :</b> <?php echo $hod_datetime; ?> <br/>
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
									 <b>Name   :</b> <?php echo $fnamee_iedept; ?> <br/>
 									 <b>Email   :</b> <?php echo $emailidd_iedept; ?> <br/>
									 <b>Department   :</b> <?php echo $departt_iedept; ?> <br/>
									 <b>Status :</b> <span class="badge <?php echo $clsbdg_iedept; ?>"><?php
									 if($iedept_status=='2') { echo 'Approved'; }
									 elseif($iedept_status=='3') { echo 'Rejected'; }

									 ?></span> <br/>

									 <?php
									 if(!empty($iedept_reject_reason)) { ?>
									   <b>Rejected Reason   :</b> <?php echo $iedept_reject_reason; ?> <br/>
									 <?php } ?>
									 <br/>

									 <b>Date & Time   :</b> <?php echo $iedept_datetime; ?> <br/>
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
									 <b>Name   :</b> <?php echo $fnamee_finance; ?> <br/>
 									 <b>Email   :</b> <?php echo $emailidd_finance; ?> <br/>
									 <b>Department   :</b> <?php echo $departt_finance; ?> <br/>
									 <b>Status :</b> <span class="badge <?php echo $clsbdg_finance; ?>"><?php
									 if($finance_status=='2') { echo 'Approved'; }
									 elseif($finance_status=='3') { echo 'Rejected'; }

									 ?></span> <br/>

									 <?php
									 if(!empty($fin_reject_reason)) { ?>
									   <b>Rejected Reason   :</b> <?php echo $fin_reject_reason; ?> <br/>
									 <?php } ?>
									 <br/>


									 <b>Date & Time   :</b> <?php echo $finance_datetime; ?> <br/>
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

					if($status=='1' && $imgapprov=='1') {
						?>

						<button type="button" class="btn btn-success">Waiting for Image Sanitization</button>
						<br/>
						<?php
 					}


					$checkimgapprov_auth = $this->mapi->checkimgapprov_auth($viv_profile_id);
					if($status=='1' && $imgapprov=='1' && $checkimgapprov_auth=='1') {   ?>





						<p>&nbsp;</p>
						<h4>Whould you like to Approve Kaizen Image and Move it to DRI Approval?</h4>
						<button type="button" name="imagestatus" ideaidurl="<?php echo $uri5; ?>" profile_id="<?php echo $viv_profile_id; ?>" value="yes" class="btn btn-info click_imgapprovalsts_ideagen">Yes</button>
						<button type="button" name="imagestatus" ideaidurl="<?php echo $uri5; ?>" profile_id="<?php echo $viv_profile_id; ?>" value="no"  class="btn btn-danger click_imgapprovalsts_ideagen" >No</button>

					<?php }


					//Emp Status : Waiting for HOD Approval
					if($status=='1' && $imgapprov=='2' && $approv_email!=$viv_email) {   ?>

						<button type="button" class="btn btn-success">Waiting for DRI Approval</button>

					<?php } ?>

				<?php

				if($viv_user_type=='TRMMMANG')	 {
					?>

					<?php if($status=='1') { ?>
					<h4>Whould you like to Edit Idea?</h4>
					<a href="<?php
					//echo site_url('admin/managereditstatuszero/'.$uri5.'');
					echo site_url('admin/kaizenidea/ideagen/postidea_mangedit/'.$uri5.'');

					?>"  class="btn btn-warning colorfff">Edit</a>

					<p>&nbsp;</p>

					<?php
				}


				//echo $approv_email."<br/>";
				//echo $viv_email;


				if($status=='1' && $approv_email==$viv_email) {   ?>
						<h4>Waiting for Your Feedback</h4>



									<?php //if($viv_user_type=='TRMMHOD' || $viv_user_type=='TRMMADMIN') {
										?>
										<form action="<?php echo site_url('admin/updateideastatus_ideagen'); ?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
										<input type="hidden" name="ideaid" value="<?php echo $uri5; ?>" />

										<?php
										if(empty($cs_cycletime) && empty($cs_manpower) && $cs_cost<50000) {
 										?>
										<input type="hidden" name="finance_status" value="" />
										<input type="hidden" name="iedept_status" value="" />
										<?php
									} else {

										if((!empty($cs_cycletime) && !empty($cs_manpower)) && $cs_cost>=50000) { ?>
											<input type="hidden" name="finance_status" value="1" />
											<input type="hidden" name="iedept_status" value="1" />
										<?php }

										elseif((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost>=50000) { ?>
											<input type="hidden" name="finance_status" value="1" />
											<input type="hidden" name="iedept_status" value="1" />
										<?php }

										elseif((!empty($cs_cycletime) || !empty($cs_manpower)) && $cs_cost<50000) { ?>
											<input type="hidden" name="finance_status" value="" />
											<input type="hidden" name="iedept_status" value="1" />
										<?php }

										elseif((!empty($cs_cycletime) && !empty($cs_manpower)) && $cs_cost<50000) { ?>
											<input type="hidden" name="finance_status" value="" />
											<input type="hidden" name="iedept_status" value="1" />
										<?php }

										elseif((empty($cs_cycletime) && empty($cs_manpower)) && $cs_cost>=50000) { ?>
											<input type="hidden" name="finance_status" value="1" />
											<input type="hidden" name="iedept_status" value="" />
										<?php } ?>



								<?php } ?>



								  	<button type="submit" name="status" value="approve" class="btn btn-info">Approve</button>
									 <button type="button"   class="btn btn-danger" data-toggle="modal" data-target="#drirejectkaizenform">Reject</button>


									 <!-- Modal -->
									 <div class="modal fade" id="drirejectkaizenform" role="dialog">
									   <div class="modal-dialog" style="width:400px;">
 									     <!-- Modal content-->
									     <div class="modal-content">
									       <div class="modal-header">
									         <button type="button" class="close" data-dismiss="modal">&times;</button>
									         <h4 class="modal-title">Please Enter Reason for Rejection</h4>

									       </div>
									       <div class="modal-body">
									 				<!--Sample Form-->
													<textarea class="textarea150" name="reject_reason" required>-</textarea>
													<button type="submit" name="status"  value="reject" class="btn btn-danger" >Reject</button>
													<!--Sample Form-->
									      </div>
									    </div>
 									  </div>
									</div>
									  <!-- END Modal -->


								 		</form>
									 <?php //} ?>


					<?php
					//findfinancenamebypid = $this->mapi->findfinancenamebypid();
					//$findfinanceemail2bypid = $this->mapi->findfinanceemail2bypid();
			}	}

				if($viv_user_type=='TRMMIEDEPT')	 {
				if($status=='2' && $findiedeptemailbypid==$viv_email) { ?>
					<button type="button" class="btn btn-success">Waiting for Your Approval</button>

					<p>&nbsp;</p>
								<?php //if($viv_user_type=='TRMMHOD' || $viv_user_type=='TRMMADMIN') {
									?>
									<form action="<?php echo site_url('admin/updateideastatus_iedept_ideagen'); ?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
									<input type="hidden" name="ideaid" value="<?php echo $uri5; ?>" />
									<button type="submit" name="status" value="approve" class="btn btn-info">Approve</button>
									<button type="button"    class="btn btn-danger" data-toggle="modal" data-target="#iedeptrejectkaizenform">Reject</button>

 							 <!-- Modal -->
 							 <div class="modal fade" id="iedeptrejectkaizenform" role="dialog">
 								 <div class="modal-dialog" style="width:400px;">
 									 <!-- Modal content-->
 									 <div class="modal-content">
 										 <div class="modal-header">
 											 <button type="button" class="close" data-dismiss="modal">&times;</button>
 											 <h4 class="modal-title">Please Enter Reason for Rejection</h4>

 										 </div>
 										 <div class="modal-body">
 											<!--Sample Form-->
 											<textarea class="textarea150" name="iedept_reject_reason" required>-</textarea>
 											<button type="submit" name="status"  value="reject" class="btn btn-danger" >Reject</button>
 											<!--Sample Form-->
 										</div>
 									</div>
 								</div>
 							</div>
 								<!-- END Modal -->
									</form>

				<?php } }



				if($viv_user_type=='TRMMFINANCE')	 {
				if(($status=='4' || $status=='2') && $findfinanceemailbypid==$viv_email) { ?>
					<button type="button" class="btn btn-success">Waiting for Your Approval</button>

					<p>&nbsp;</p>
								<?php //if($viv_user_type=='TRMMHOD' || $viv_user_type=='TRMMADMIN') {
									?>
									<form action="<?php echo site_url('admin/updateideastatus_finance_ideagen'); ?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
									<input type="hidden" name="ideaid" value="<?php echo $uri5; ?>" />
									<button type="submit" name="status" value="approve" class="btn btn-info">Approve</button>
									<button type="button"   class="btn btn-danger" data-toggle="modal" data-target="#financerejectkaizenform">Reject</button>

								<!-- Modal -->
								<div class="modal fade" id="financerejectkaizenform" role="dialog">
									<div class="modal-dialog" style="width:400px;">
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Please Enter Reason for Rejection</h4>

											</div>
											<div class="modal-body">
											 <!--Sample Form-->
											 <textarea class="textarea150" name="fin_reject_reason" required>-</textarea>
											 <button type="submit" name="status"  value="reject" class="btn btn-danger" >Reject</button>
											 <!--Sample Form-->
										 </div>
									 </div>
								 </div>
							 </div>
								 <!-- END Modal -->


									</form>

				<?php } }




					if($status=='3') { ?>
					<button type="button" class="btn btn-danger">DRI Rejected</button>
				<?php }  ?>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>



<!-- END Inner Page-->




</div>
</div>
