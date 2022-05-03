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

				?>
<div class="content-body">
<div class="container-fluid">

<!--Page Title-->
<div class="row page-titles mx-0">
<div class="col-sm-12 p-md-0">
<div class="welcome-text">
<h4>Post Idea <button class="btn btn-primary pull-right" type="button" data-toggle="modal" data-target="#samplekaizenformmodel">Sample Kaizen Form</button></h4>
<span>Kaizen Form > Idea Mang > Post</span>
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
        <h4 class="modal-title">Sample Kaizen Form</h4>
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
						<td>Project Code</td>
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
						 <td>Area/Line/Machine: <input readonly type="text" name="tepl_plant" class="form-control" value="IM 01 Process" /></td>
					</tr>

					<tr>
						<td>Kaizen Theme: <input type="text" name="ktheme" class="form-control"  readonly value="Poka yoke in Rail placing" /></td>
						<td>Idea ( Logical Correlation with root cause):   <input type="text" name="idea" class="form-control" value="Provide stopper pin in Heating Fixture" readonly /></td>
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
									<img src='<?php echo base_url(); ?>assets/images/kaizenimages/1.jpg' class="imgbeforedisplay" />
 						  	</td>

								<td VALIGN="top">AFTER</br>
 									<img src='<?php echo base_url(); ?>assets/images/kaizenimages/2.jpg' class="imgbeforedisplay" />
								</td>

								<td>COST SAVINGS <br/>
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


										<tr><th>Team member names</th> <th>Function</th><th>EMP.ID</th> <th>Action</th></tr>
										<tr>
												<td><input type="text" readonly name="teamname" placeholder="Team member names" class="" /></td>
												<td><input type="text" readonly name="function" placeholder="function" class="" class="" /></td>

												<td>
													<input type="text" readonly name="eempid" placeholder="Emp ID" class=" width43" />

												</td>
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

 <?php
 $listmyideasbyiid = $this->mapi->listmyideasbyiid($uri5);
  foreach ($listmyideasbyiid as $rowArray) {
		$idea_id = $rowArray->idea_id;
		$activity = $rowArray->activity;
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
  <form action="<?php if($status=='0') { echo site_url('admin/updateidea'); } else {
		echo '';
	} ?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
          <!--Div-->
                  <div class="card-header">
                    <h4 class="card-title">Post My Idea</h4>
                 </div>
                 <div class="card-body">
                    <div class="basic-form">

                      <table class="smttableform">
                        <tr>

                          <td rowspan="4">TEPL KAIZEN IDEA</td>

                          <td>ACTIVITY</th>
                          <td><label title="MURA"><input type="checkbox" class="hideradio" name="activity[]" <?php if(in_array("MURA", $activity_ex)) { echo 'checked'; } ?> value="MURA" /> <img class="higwei20" />MURA</td>
                          <td><label title="MURI"><input type="checkbox" class="hideradio" name="activity[]" <?php if(in_array("MURI", $activity_ex))  { echo 'checked'; } ?> value="MURI" /> <img class="higwei20" />MURI</td>
                          <td><label title="MUDA"><input type="checkbox" class="hideradio" name="activity[]" <?php if(in_array("MUDA", $activity_ex)) { echo 'checked'; } ?> value="MUDA" /> <img class="higwei20" />MUDA</td>
                          <td> Doc No</td>
                          <td><input type="text" name="doc_no" class="form-control" value="<?php echo $doc_no; ?>" />
                          </td>
                        </tr>

                        <tr>
                          <td colspan="4" rowspan="2"><textarea></textarea></th>
                          <td>Version No/Date</td>
                          <td><input type="text" name="version_no" class="form-control" value="<?php echo $version_no; ?>" /></td>
                        </tr>

                        <tr>
                          <td>Project Code</td>
                          <td><input type="text" name="proj_code" class="form-control" value="<?php echo $proj_code; ?>" /></td>
                        </tr>

                        <tr>
                          <td colspan="4">
                            <table class="width100per"><tr><td>Benefit Area :</td>


                              <td class="text-center"><label class="tab">
                                <input type="checkbox" name="benifit_area[]" value="P" class="tab-input" <?php if(in_array("P", $benifit_area_ex)) { echo 'checked'; } ?>>
                                <div class="tab-box">P</div>
                              </label></td>

                              <td class="text-center"><label class="tab">
                                <input type="checkbox" name="benifit_area[]" value="Q" class="tab-input" <?php if(in_array("Q", $benifit_area_ex)) { echo 'checked'; } ?>>
                                <div class="tab-box">Q</div>
                              </label></td>

                              <td class="text-center">
                                <label class="tab">
                                  <input type="checkbox" name="benifit_area[]" value="D" class="tab-input" <?php if(in_array("C", $benifit_area_ex)) { echo 'checked'; } ?>>
                                  <div class="tab-box">C</div>
                                </label>
                              </td>
                              <td class="text-center"><label class="tab">
                                <input type="checkbox" name="benifit_area[]" value="D" class="tab-input" <?php if(in_array("D", $benifit_area_ex)) { echo 'checked'; } ?>>
                                <div class="tab-box">D</div>
                              </label></td>
                              <td class="text-center"><label class="tab">
                                <input type="checkbox" name="benifit_area[]" value="S" class="tab-input" <?php if(in_array("S", $benifit_area_ex)) { echo 'checked'; } ?>>
                                <div class="tab-box">S</div>
                              </label></td>
                              <td class="text-center"><label class="tab">
                                <input type="checkbox" name="benifit_area[]" value="M" class="tab-input" <?php if(in_array("M", $benifit_area_ex)) { echo 'checked'; } ?>>
                                <div class="tab-box">M</div>
                              </label></td>
                              <td class="text-center"><label class="tab">
                                <input type="checkbox" name="benifit_area[]" value="E" class="tab-input" <?php if(in_array("E", $benifit_area_ex)) { echo 'checked'; } ?>>
                                <div class="tab-box">E</div>
                              </label></td>
                              <tr>
                            </table>
                          </td>
                          <td>KAIZEN Ref.No</td>
                          <td><input type="text" name="ref_no" class="form-control" value="<?php echo $ref_no; ?>" /></td>
                        </tr>
                       </table>

                       <table class="smttableform">
                         <tr> <?php $plantname = $rowArray->plantname; ?>
                           <td>Plant Name : <select name="plantname">
														 								<option value="">Select</option>
														 								<option value="Pilot Plant" <?php if($plantname=='Pilot Plant') { echo 'selected'; } ?>>Pilot Plant</option>
																						<option value="Main Plant" <?php if($plantname=='Main Plant') { echo 'selected'; } ?>>Main Plant</option>
														                <option value="Both" <?php if($plantname=='Both') { echo 'selected'; } ?>>Both</option>
																					</select></td>
                           <td>Area/Line/Machine:   <input type="text" name="tepl_plant" class="form-control" value="<?php echo $tepl_plant; ?>" /></td>
                        </tr>

                        <tr>
                          <td>Kaizen Theme: <input type="text" name="ktheme" class="form-control" value="<?php echo $ktheme; ?>" /></td>
                          <td>Idea ( Logical Correlation with root cause):   <input type="text" name="idea" class="form-control" value="<?php echo $idea; ?>" /></td>
                        </tr>
                        </table>


                        <table class="smttableform">
                          <tr>
                            <td rowspan="2" VALIGN="top"> Problem Statement<br/><textarea class="textarea850" name="prob_stmt"><?php echo $rowArray->prob_stmt; ?></textarea>
                            </td>

                            <td colspan="3" VALIGN="top">
                            Counter measure( Engineering solution): <textarea name="count_measur"><?php echo $rowArray->count_measur; ?></textarea>
                          </td></tr>

                          <tr>
                              <td VALIGN="top">BEFORE</br>

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
																<span onclick="return confirm('Are you sure you want to delete this image?');" class="cursorpointer badge bgmildreddark mt10 deletekaizenimg" data-iid="<?php echo $idea_id; ?>" data-itype="before">Delete</span>
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
														</td>

														  <td VALIGN="top">AFTER</br>
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
																	<span onclick="return confirm('Are you sure you want to delete this image?');" class="cursorpointer badge bgmildreddark mt10 deletekaizenimg" data-iid="<?php echo $idea_id; ?>" data-itype="after">Delete</span>
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
															</td>

															<td>COST SAVINGS <br/>
                                <table class="width100per">
                                  <tr><td>Quality</td><td colspan="3"><input type="text" name="cs_quality" class="form-control" value="<?php echo $rowArray->cs_quality; ?>" /></td></tr>
                                  <tr><td>Cost</td><td colspan="3"><input type="text" name="cs_cost" class="form-control" value="<?php echo $rowArray->cs_cost; ?>" /></td></tr>
                                  <tr><td>Material</td><td colspan="3"><input type="text" name="cs_material" class="form-control" value="<?php echo $rowArray->cs_material; ?>" /></td></tr>
                                  <tr><td>Man power</td><td colspan="3"><input type="text" name="cs_manpower" class="form-control" value="<?php echo $rowArray->cs_manpower; ?>" /></td></tr>
                                  <tr><td>Consumables</td><td colspan="3"><input type="text" name="cs_consumables" class="form-control" value="<?php echo $rowArray->cs_consumables; ?>" /></td></tr>
                                  <tr><td>Others</td><td colspan="3"><input type="text" name="cs_others" class="form-control" value="<?php echo $rowArray->cs_others; ?>" /></td></tr>
                                  <tr><td>Total Savings</td><td colspan="3"><input type="text" name="cs_totalsavings" class="form-control" value="<?php echo $rowArray->cs_totalsavings; ?>" /></td></tr>

                                  <tr><td rowspan="3">Approved by</td><td>IE</td><td colspan="2"><input type="text" name="cs_appr_ie" class="form-control" value="<?php echo $rowArray->cs_appr_ie; ?>" /></td></tr>
                                  <tr> <td>Accounts</td><td colspan="2"><input type="text" name="cs_appr_acco" class="form-control" value="<?php echo $rowArray->cs_appr_acco; ?>" /></td></tr>




                                  <tr><td>Standardization</td><td colspan="3"><input type="text" name="cs_standardization" class="form-control" value="<?php echo $rowArray->cs_standardization; ?>" /></td></tr>
                                  <tr><td>SOP/SP:</td><td colspan="3"><input type="text" name="cs_sopsp" class="form-control" value="<?php echo $rowArray->cs_sopsp; ?>" /></td></tr>
                                  <tr><td>Drawing</td><td colspan="3"><input type="text" name="cs_drawing" class="form-control" value="<?php echo $rowArray->cs_drawing; ?>" /></td></tr>
																</table>

																<table class="tablerefresh_teammemb">
                                  <tr><th>Team member names</th> <th>Function</th><th>EMP.ID</th> <th>Action</th></tr>
																	<tr>
																			<td><input type="text" name="teamname" placeholder="Team member names" class="eteamname" /></td>
																		  <td><input type="text" name="function" placeholder="function" class="efunction" class="efunction" /></td>
																			 <input type="hidden" class="eideaid width53" name="eideaid" value="<?php echo $uri5; ?>" />
																			<td>
																				<input type="text" name="eempid" placeholder="Emp ID" class="eempid width43" />

 																			</td>
																			<td>
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
                                  <tr>
																		<td><?php echo $rowArrayTeam->teamname; ?></td>
																		<td><?php echo $rowArrayTeam->function; ?></td>
																		<td><?php echo $rowArrayTeam->empid; ?></td>
																		<td><center><span class="deleteteammember cursorpointer" data-iid="<?php echo $idea_id; ?>" data-mid="<?php echo $teamid; ?>"><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
																  </tr>

																	<?php } ?>


                                </table>
                              </td>
                          </tr>

                          <tr>
                            <td rowspan="2"  valign="top"><h4>Root Cause</h4>( Problem Phenomena)<br/>

															Type  :
															<select name="root_cause">
	 														 								<option value="">Select</option>
	 														 								<option value="Pareto Chart" <?php if($root_cause=='Pareto Chart') { echo 'selected'; } ?>>Pareto Chart</option>
																							<option value="5 whys" <?php if($root_cause=='5 whys') { echo 'selected'; } ?>>5 whys</option>
																							<option value="Fishbone Diag" <?php if($root_cause=='Fishbone Diag') { echo 'selected'; } ?>>Fishbone Diag</option>
																							<option value="Scatter Plot Diag" <?php if($root_cause=='Scatter Plot Diag') { echo 'selected'; } ?>>Scatter Plot Diag</option>
																							<option value="FMEA" <?php if($root_cause=='FMEA') { echo 'selected'; } ?>>FMEA</option>
																							<option value="Other" <?php if($root_cause=='Other') { echo 'selected'; } ?>>Other</option>

	 																					</select>


															<br/>
															<h4>Explanation :</h4>
															<textarea class="textarea300" name="root_cause_exp"><?php
															echo $rowArray->root_cause_exp; ?></textarea>


                              </td>
                            <td rowspan="2" valign="top">Brief explanation of present conditions<br/>
                            <textarea class="textarea450" name="brf_exp_precond"><?php echo $rowArray->brf_exp_precond; ?></textarea></td>

                            <td rowspan="2" valign="top">Brief explanation of Improvements done<br/>
                            <textarea class="textarea450" name="brf_exp_impdone"><?php echo $rowArray->brf_exp_impdone; ?></textarea></td>


                            <td>Benifits (P,Q,C,S,D,M,E):
															<textarea class="textarea150" name="benifits"><?php echo $rowArray->benifits; ?></textarea>
		 </td>
                          </tr>


                          <tr>
                            <td valign="top">
                                Scope and Plan for Horizontal Deployment<br/>
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
																		<input readonly type="text" name="sn" class="form-control esn" value="<?php echo $ssn; ?>" /></td>
                                    <td><input type="text" name="mc" class="form-control emc" value="" /></td>
                                    <td><input type="text" name="targetdate" class="form-control etargetdate" value="" /></td>
																		<td><input type="text" name="responsi" class="form-control eresponsi" value="" /></td>
                                    <td><input type="text" name="status" class="form-control estatus" value="" /></td>
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
																	<tr>
																		<td><?php echo $listsustenancebyiidArray->sn; ?></td>
																		<td><?php echo $listsustenancebyiidArray->mc; ?></td>
																		<td><?php echo $listsustenancebyiidArray->targetdate; ?></td>
																		<td><?php echo $listsustenancebyiidArray->responsi; ?></td>
																		<td><?php echo $listsustenancebyiidArray->sus_status; ?></td>
																		<td><center><span class="deletesustenance cursorpointer" data-iid="<?php echo $idea_id; ?>" data-sid="<?php echo $sus_id; ?>"><img src="<?php echo base_url(); ?>assets/images/cross.png" width="15" alt=""/></span></center></td>
																	</tr>

																	<?php } ?>


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
														<td colspan="2"><input type="text" name="horizontal1" value="<?php echo $rowArray->horizontal1; ?>" class="form-control" /></td>

													</tr>
													<tr>
														<td>Within the Department in all the machine groups:</td>
														<td colspan="2"><input type="text" name="horizontal2" value="<?php echo $rowArray->horizontal2; ?>" class="form-control" /></td>
														<td rowspan="3">
															<table class="width100per bordernone">
																	<tr>
																		<td>Dept:<input type="text" name="origi_dept" value="<?php echo $rowArray->origi_dept; ?>" class="form-control" /></td>
																		<td><br/><input type="text" name="approv_dept" value="<?php echo $rowArray->approv_dept; ?>" class="form-control" /></td>
																		<td><br/><input type="text" name="confirm_dept" value="<?php echo $rowArray->confirm_dept; ?>" class="form-control" /></td>
																	</tr>
																	<tr>
																		<td>Name:<input type="text" name="origi_name" value="<?php echo $rowArray->origi_name; ?>" class="form-control" /></td>
																		<td><br/><input type="text" name="approv_name" value="<?php echo $rowArray->approv_name; ?>" class="form-control" /></td>
																		<td><br/><input type="text" name="confirm_name" value="<?php echo $rowArray->confirm_name; ?>" class="form-control" /></td>
																	</tr>
																	<tr>
																		<td>Date:<input type="text" name="origi_date" value="<?php echo $rowArray->origi_date; ?>" class="form-control" /></td>
																		<td><br/><input type="text" name="approv_date" value="<?php echo $rowArray->approv_date; ?>" class="form-control" /></td>
																		<td><br/><input type="text" name="confirm_date" value="<?php echo $rowArray->confirm_date; ?>" class="form-control" /></td>
																	</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td>In Other Dept/ Other Location:</td>
														<td colspan="2"><input type="text" name="horizontal3" value="<?php echo $rowArray->horizontal3; ?>" class="form-control" /></td>
													</tr>
													<tr>
														<td>Any other Relevant Points:</td>
														<td colspan="2"><input type="text" name="horizontal4" value="<?php echo $rowArray->horizontal4; ?>" class="form-control" /></td>
													</tr>


													<tr>
														<td colspan="4">FORMAT/ Ver,No : TEPL-IE-C-FR-0005/01</td>
													</tr>
													<tr>
														<td colspan="4">Tata Electronics Private Limited</td>
													</tr>
                        </table>

                     </div>
                 <!--END Div-->

                 <p>&nbsp;</p>
                 <div class="form-group col-md-6">
                   <input type="hidden" name="ideaid" value="<?php echo $uri5; ?>" />

									 <?php if($status=='0') { ?>
                   <button type="submit" class="btn btn-primary">Submit to HOD</button>
								 <?php }  ?>

                  </div>
            </form>
					<?php } ?>


					<?php if($status=='1') { ?>
						<button type="button" class="btn btn-success">Waiting for HOD Approval</button>


						<p>&nbsp;</p>
									<?php if($viv_user_type=='TRMMHOD' || $viv_user_type=='TRMMADMIN') {
										?>
										<form action="<?php echo site_url('admin/updateideastatus'); ?>"   method="post" autocomplete="off"   enctype="multipart/form-data" class="formID">
										<input type="hidden" name="ideaid" value="<?php echo $uri5; ?>" />
								  	<button type="submit" name="status" value="approve" class="btn btn-info">Approve</button>
									 <button type="submit" name="status" value="reject" class="btn btn-danger">Reject</button>
								 		</form>
									 <?php } ?>


					<?php } else if($status=='2') { ?>
					<button type="button" class="btn btn-success">Waiting for IT DEPT Approval</button>
					<?php } else if($status=='3') { ?>
					<button type="button" class="btn btn-danger">HOD Rejected</button>
					<?php } ?>


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
