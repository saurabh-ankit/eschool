<div class="row">
	<div class="col-md-2">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="panel-title"><i class="far fa-edit"></i> <?php echo translate('add') . " " . translate('students'); ?></h4>
			</header>

			<div class="panel-body">
				<ul class="nav nav-main">
					<li class="nav-active">
						<a  style=" white-space: break-spaces" href="#info" data-toggle="tab"><span>Besic Information</span></a>
					</li>
					<li class=" ">
						<a  style=" white-space: break-spaces" href="#A" data-toggle="tab"><span><b>A. </b></span> Student’s Information</a>
					</li>

					<li class="">
						<a  style=" white-space: break-spaces" href="#B" data-toggle="tab"><span><b>B. </b></span>Siblings’ Information</a>
					</li>
					<li class="">
						<a  style=" white-space: break-spaces" href="#C" data-toggle="tab"><span><b>C. </b></span>Father’s Information</a>
					</li>
					<li class="">
						<a  style=" white-space: break-spaces" href="#D" data-toggle="tab"><span><b>D. </b></span>Mother’s Information</a>
					</li>
					<li class="">
						<a  style=" white-space: break-spaces" href="#E" data-toggle="tab"><span><b>E. </b></span>Guardian’s Information</a>
					</li>
					<li class="">
						<a style=" white-space: break-spaces" href="#F" data-toggle="tab"><span><b>F. </b></span>Point of contact in the order of preference</a>
					</li>
					<li class="">
						<a style=" white-space: break-spaces" href="#G" data-toggle="tab"><span><b>G. </b></span>Refund</a>
					</li>
					<li class="">
						<a style=" white-space: break-spaces" href="#H" data-toggle="tab"><span><b>H. </b></span>Emergency Contact Information</a>
					</li>
					<li class="">
						<a style=" white-space: break-spaces" href="#I" data-toggle="tab"><span><b>I. </b></span>Medical Record</a>
					</li>
					<li class="">
						<a style=" white-space: break-spaces" href="#J" data-toggle="tab"><span><b>J. </b></span>Declaration by Parents / Guardians</a>
					</li>
					<li class="">
						<a style=" white-space: break-spaces" href="#K" data-toggle="tab"><span><b>K. </b></span>To Be Filled in by the Admission Authority at the School</a>
					</li>
				</ul>
	<!-- <div class="panel-footer">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-default pull-right" type="submit"><i class="fas fa-plus-circle"></i> <?php echo translate('save'); ?></button>
			</div>	
		</div>
	</div> -->

</section>
</div>

<div class="col-md-10">
	<section class="panel">
		<header class="panel-heading">
			<h4 class="panel-title"><i class="fas fa-list-ul"></i> <?php echo translate('details'); ?></h4>
		</header>
		<div class="panel-body">
			<div class="tab-content">

				<!-------- Ofice Datails Start here --->

				<div style="overflow-y: scroll; height:600px!important;" id="info" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
					<div class="headers-line mt-md">
						<i class="fas fa-user-check"></i> <?=translate('besic_information')?>
					</div>

					<div class="row">
						<div class="col-md-8 mb-sm">
							<div class="form-group">
								<label class="control-label"><?=translate('academic_year')?> <span class="required">*</span></label>
								<?php
								$arrayYear = array("" => translate('select'));
								$years = $this->db->get('schoolyear')->result();
								foreach ($years as $year){
									$arrayYear[$year->id] = $year->school_year;
								}
								echo form_dropdown("year_id", $arrayYear, set_value('year_id', $academic_year), "class='form-control' id='academic_year_id'
									data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
									?>
									<span class="error"><?=form_error('year_id')?></span>
								</div>
							</div>
							<div class="col-md-4 mb-sm">
								<div class="form-group">
									<label class="control-label"> <?=translate('board')?> </label>
									<?php
									$arrayGender = array(
										'' => 'Select',
										'CBSE' => 'CBSE',
										'CISCE' => 'CISCE',
										'CAIE' => 'CAIE'
									);
									echo form_dropdown("board", $arrayGender, set_value('board'), "class='form-control' data-plugin-selectTwo
										data-width='100%' data-minimum-results-for-search='Infinity' ");
										?>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-4 mb-sm">
									<div class="form-group">
										<label class="control-label">Grade</label>
										<?php
										$arrayGender = array(
											'' => 'Select',
											'01' => '01',
											'02' => '02',
											'03' => '03',
											'04' => '04',
											'05' => '05',
											'06' => '06'
										);
										echo form_dropdown("board", $arrayGender, set_value('grade'), "class='form-control' data-plugin-selectTwo
											data-width='100%' data-minimum-results-for-search='Infinity' ");
											?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-sm">
										<div class="form-group">
											<label class="control-label"><?=translate('school_loacation')?></label>
											<?php
											$arrayLocation = array(
												'' => 'Select',
												'Uchgaon' => 'Uchgaon',
												'Bannerghatta' => 'Bannerghatta',
												'BTM Layout' => 'BTM Layout',
												'Chokkanahalli' => 'Chokkanahalli',
												'Electronic City' => 'Electronic City',
												'Haralur' => 'Haralur'
											);
											echo form_dropdown("board", $arrayLocation, set_value('school_loacation'), "class='form-control' data-plugin-selectTwo
												data-width='100%' data-minimum-results-for-search='Infinity' ");
												?>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="alert alert-subl">
												<strong>Instructions :</strong><br/>
												1. Only one form per child shall be accepted.<br>
												2. All the data to be entered in BLOCK CAPITAL LETTERS ONLY with one alphabet per box. Please leave a blank box between
												two words.<br>
												3. Overwriting should be avoided.<br>
												4. The application form must be filled completely and correctly.<br>
												5. For fields that are not applicable, write NA.<br>
												6. The application must be submitted to the admission authority on or before the due date for accepting forms.<br>
												7. Affix 1.4” x 1.4” size coloured photographs with white background of Student, Father, Mother and Guardian.<br>
												8. Submit documents as per the checklist given in ‘Section K’ with the completed form.
												Only one form per child shall be accepted.<br>

												9. Original of Birth Certificate, Aadhaar Card, Passport and PAN card to be shown at the time of Admission.<br>
												10. Legal Disclaimer: We reserve all rights to admission of student, which will always be deemed as PROVISIONAL unless all
												the documents are provided with voluntary and true disclosure of Parent/Parents seeking admission for their child.<br>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="alert alert-subl">

												To,
												The Trustee/Principal,
												We request you to kindly consider our application for admission of our son/daughter to the above mentioned grade
												in your school. We submit herewith all the necessary details.
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label"><?=translate('Student’s_Photograph');?></label>
												<input type="file" name="logo_file" class="dropify" data-allowed-file-extensions="png" data-default-file="" />
												<!-- <?=base_url('uploads/app_image/logo.png')?> -->
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label"><?=translate('Father’sPhotograph');?></label>
												<input type="file" name="text_logo" class="dropify" data-allowed-file-extensions="png" data-default-file="" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label"><?=translate('Mother’sPhotograph');?></label>
												<input type="file" name="print_file" class="dropify" data-allowed-file-extensions="png" data-default-file="" />
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="control-label"><?=translate('Guardian’sPhotograph');?></label>
												<input type="file" name="report_card" class="dropify" data-allowed-file-extensions="png" data-default-file="" />
											</div>
										</div>


									</div>
									<div class="row"></div>
									<div class="row"></div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-md-offset-10 col-md-2">
												<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
													<i class="fas fa-plus-circle"></i> <?=translate('save')?>
												</button>
											</div>
										</div>
									</footer>
									<div class="row"></div>
								</div>









								<!-- Student's Details Start here-->
								<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="A">


									<div class="headers-line mt-md">
										<b>A.</b> <?=translate('student_details')?>
									</div>

									<div class="row">
										<div class="col-md-6 mb-sm">
											<div class="form-group">
												<label class="control-label"> <?=translate('first_name')?> <span class="required">*</span></label>
												<div class="input-group">
													<span class="input-group-addon"><i class="fas fa-user-graduate"></i></span>
													<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name')?>"/>
												</div>
												<span class="error"><?=form_error('first_name')?></span>
											</div>
										</div>
										<div class="col-md-6 mb-sm">
											<div class="form-group">
												<label class="control-label"> <?=translate('last_name')?> <span class="required">*</span></label>
												<div class="input-group">
													<span class="input-group-addon"><i class="fas fa-user-graduate"></i></span>
													<input type="text" class="form-control" name="last_name" value="<?=set_value('last_name')?>" />
												</div>
											</div>
											<span class="error"><?=form_error('last_name')?></span>
										</div>

									</div>

									<div class="row">
										<div class="col-md-6 mb-sm">
											<div class="form-group">
												<label class="control-label"> <?=translate('gender')?> </label>
												<?php
												$arrayGender = array(
													'male' => translate('male'),
													'female' => translate('female'),
													'others' => translate('others')
												);
												echo form_dropdown("gender", $arrayGender, set_value('gender'), "class='form-control' data-plugin-selectTwo
													data-width='100%' data-minimum-results-for-search='Infinity' ");
													?>
												</div>
											</div>
											<div class="col-md-6 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('birthday')?></label>
													<div class="input-group">
														<span class="input-group-addon"><i class="fas fa-birthday-cake"></i></span>
														<input type="text" autocomplete="off" class="form-control" name="birthday" value="<?=set_value('birthday')?>" data-plugin-datepicker
														data-plugin-options='{ "startView": 2 }' />
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('bith_place')?></label>
													<input type="text" class="form-control" name="bith_place" value="<?=set_value('bith_place')?>" />
												</div>
											</div>
											<div class="col-md-4 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('religion')?></label>
													<input type="text" class="form-control" name="religion" value="<?=set_value('religion')?>" />
												</div>
											</div>
											<div class="col-md-4 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('nationality')?></label>
													<input type="text" class="form-control" name="nationality" value="<?=set_value('nationality')?>" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('caste')?></label>
													<input type="text" class="form-control" name="caste" value="<?=set_value('caste')?>" />
												</div>
											</div>

											<div class="col-md-4 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('sub_caste')?></label>
													<input type="text" class="form-control" name="sub_caste" value="<?=set_value('sub_caste')?>" />
												</div>
											</div>
											<div class="col-md-4 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('adhar_no')?></label>
													<input type="num" class="form-control" name="adhar_no" value="<?=set_value('adhar_no')?>" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('mother_tongue')?></label>
													<input type="text" class="form-control" name="mother_tongue" value="<?=set_value('mother_tongue')?>" />
												</div>
											</div>
											<div class="col-md-6 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('present_residential_Address')?></label>
													<input type="text" class="form-control" name="present_residential_Address" value="<?=set_value('present_residential_Address')?>" />
												</div>
											</div>
		
	</div>

	<div class="row">
		<div class="col-md-4 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('area')?> </label>
				<div class="form-group">
					
					<input type="area" class="form-control" name="area" value="<?=set_value('area')?>" />
				</div>
				<span class="error"><?=form_error('area')?></span>
			</div>
		</div>
		<div class="col-md-4 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('city')?></label>
				<input type="text" class="form-control" name="city" value="<?=set_value('city')?>" />
			</div>
		</div>
		<div class="col-md-4 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('pin_code')?></label>
				<input type="text" class="form-control" name="pin_code" value="<?=set_value('pin_code')?>" />
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('state')?></label>
				<input name="state"  class="form-control" aria-required="true"><?=set_value('state')?></input>
			</div>
		</div>
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('country')?></label>
				<input name="country"  class="form-control" aria-required="true"><?=set_value('country')?></input>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('permanent_residential_address')?></label>
				<input type="text" class="form-control" name="permanent_residential_address" value="<?=set_value('permanent_residential_address')?>" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('lamdmark')?></label>
				<input type="text" class="form-control" name="lamdmark" value="<?=set_value('lamdmark')?>" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('area')?> </label>
				<div class="form-group">
					
					<input type="area" class="form-control" name="area" value="<?=set_value('area')?>" />
				</div>
				<span class="error"><?=form_error('area')?></span>
			</div>
		</div>
		<div class="col-md-4 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('city')?></label>
				<input type="text" class="form-control" name="city" value="<?=set_value('city')?>" />
			</div>
		</div>
		<div class="col-md-4 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('pin_code')?></label>
				<input type="text" class="form-control" name="pin_code" value="<?=set_value('pin_code')?>" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('state')?></label>
				<input name="state"  class="form-control" aria-required="true"><?=set_value('state')?></input>
			</div>
		</div>
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('country')?></label>
				<input name="country"  class="form-control" aria-required="true"><?=set_value('country')?></input>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('previous_school_name:')?></label>
				<input name="previous_school_name"  class="form-control" aria-required="true"><?=set_value('previous_school_name')?></input>
			</div>
		</div>
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('grade')?></label>
				<input name="grade"  class="form-control" aria-required="true"><?=set_value('grade')?></input>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?=translate('city')?></label>
				<input name="city"  class="form-control" aria-required="true"><?=set_value('city')?></input>
			</div>
		</div>
		<div class="col-md-6 mb-sm">
			<div class="form-group">
				<label class="control-label"><?='Student UDISE No.'?></label>
				<input name="student_udise_no"  class="form-control" aria-required="true"><?=set_value('student_udise_no')?></input>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div style="text-align: center;" class="alert alert-subl">

				<b>	Note: All communication from school will be sent to student’s present residential address only. </b><br>
				(Any changes in this address to be intimated to school along with the address proof)

			</div>
		</div>
	</div>
	<div class="row"></div>
	<div class="row"></div>
	<footer class="panel-footer">
		<div class="row">
			<div class="col-md-offset-10 col-md-2">
				<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
					<i class="fas fa-plus-circle"></i> <?=translate('save')?>
				</button>
			</div>
		</div>
	</footer>
	<div class="row"></div>
	
	
</div>
<!-- Student's Details End here-->


<!-- Siblings’'s Details Start here-->

<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="B">
	<div class="headers-line">
		<b>B.</b><?=translate('Siblings’ Information')?>
	</div>
	<div class="row">
		<div class="col-md-9 mb-sm">
			<div class="form-group">
				<label class="control-label"> <?='Full Name: (Sibling 1)'?> </label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-user-graduate"></i></span>
					<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name')?>"/>
				</div>
				<span class="error"><?=form_error('first_name')?></span>
			</div>
		</div>
		
		<div class="col-md-3 mb-sm">
			<div class="form-group">
				<label class="control-label"> <?=translate('gender')?> </label>
				<?php
				$arrayGender = array(
					'male' => translate('male'),
					'female' => translate('female')
				);
				echo form_dropdown("gender", $arrayGender, set_value('gender'), "class='form-control' data-plugin-selectTwo
					data-width='100%' data-minimum-results-for-search='Infinity' ");
					?>
				</div>
			</div>
		</div>
		

		<div class="row">
			<div class="col-md-12 mb-sm">
				<div class="form-group">
					<label class="control-label"><?=translate('school_name')?></label>
					<input type="text" class="form-control" name="school_name" value="<?=set_value('school_name')?>" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mb-sm">
				<div class="form-group">
					<label class="control-label"><?=translate('birthday')?></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-birthday-cake"></i></span>
						<input type="text" autocomplete="off" class="form-control" name="birthday" value="<?=set_value('birthday')?>" data-plugin-datepicker
						data-plugin-options='{ "startView": 2 }' />
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-sm">
				<div class="form-group">
					<label class="control-label"><?=translate('grade')?></label>
					<input type="text" class="form-control" name="grade" value="<?=set_value('grade')?>" />
				</div>
			</div>
			<div class="col-md-3 mb-sm">
				<div class="form-group">
					<label class="control-label"><?=translate('board')?></label>
					<input type="text" class="form-control" name="board" value="<?=set_value('board')?>" />
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-8 mb-sm">
				<div class="form-group">
					<label class="control-label"><?=translate('Enrolment No.: (for VIBGYORite)')?></label>
					<input type="text" class="form-control" name="board" value="<?=set_value('board')?>" />
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-9 mb-sm">
				<div class="form-group">
					<label class="control-label"> <?='Full Name: (Sibling 2)'?> </label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fas fa-user-graduate"></i></span>
						<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name')?>"/>
					</div>
					<span class="error"><?=form_error('first_name')?></span>
				</div>
			</div>

			<div class="col-md-3 mb-sm">
				<div class="form-group">
					<label class="control-label"> <?=translate('gender')?> </label>
					<?php
					$arrayGender = array(
						'male' => translate('male'),
						'female' => translate('female')
					);
					echo form_dropdown("gender", $arrayGender, set_value('gender'), "class='form-control' data-plugin-selectTwo
						data-width='100%' data-minimum-results-for-search='Infinity' ");
						?>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12 mb-sm">
					<div class="form-group">
						<label class="control-label"><?=translate('school_name')?></label>
						<input type="text" class="form-control" name="school_name" value="<?=set_value('school_name')?>" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-sm">
					<div class="form-group">
						<label class="control-label"><?=translate('birthday')?></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-birthday-cake"></i></span>
							<input type="text" autocomplete="off" class="form-control" name="birthday" value="<?=set_value('birthday')?>" data-plugin-datepicker
							data-plugin-options='{ "startView": 2 }' />
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-sm">
					<div class="form-group">
						<label class="control-label"><?=translate('grade')?></label>
						<input type="text" class="form-control" name="grade" value="<?=set_value('grade')?>" />
					</div>
				</div>
				<div class="col-md-3 mb-sm">
					<div class="form-group">
						<label class="control-label"><?=translate('board')?></label>
						<input type="text" class="form-control" name="board" value="<?=set_value('board')?>" />
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-8 mb-sm">
					<div class="form-group">
						<label class="control-label"><?=translate('Enrolment No.: (for VIBGYORite)')?></label>
						<input type="text" class="form-control" name="board" value="<?=set_value('board')?>" />
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-9 mb-sm">
					<div class="form-group">
						<label class="control-label"> <?='Full Name: (Sibling 2)'?></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user-graduate"></i></span>
							<input type="text" class="form-control" name="first_name" value="<?=set_value('first_name')?>"/>
						</div>
						<span class="error"><?=form_error('first_name')?></span>
					</div>
				</div>

				<div class="col-md-3 mb-sm">
					<div class="form-group">
						<label class="control-label"> <?=translate('gender')?> </label>
						<?php
						$arrayGender = array(
							'male' => translate('male'),
							'female' => translate('female')
						);
						echo form_dropdown("gender", $arrayGender, set_value('gender'), "class='form-control' data-plugin-selectTwo
							data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('school_name')?></label>
							<input type="text" class="form-control" name="school_name" value="<?=set_value('school_name')?>" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('birthday')?></label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fas fa-birthday-cake"></i></span>
								<input type="text" autocomplete="off" class="form-control" name="birthday" value="<?=set_value('birthday')?>" data-plugin-datepicker
								data-plugin-options='{ "startView": 2 }' />
							</div>
						</div>
					</div>
					<div class="col-md-3 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('grade')?></label>
							<input type="text" class="form-control" name="grade" value="<?=set_value('grade')?>" />
						</div>
					</div>
					<div class="col-md-3 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('board')?></label>
							<input type="text" class="form-control" name="board" value="<?=set_value('board')?>" />
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Enrolment No.: (for VIBGYORite)')?></label>
							<input type="text" class="form-control" name="board" value="<?=set_value('board')?>" />
						</div>
					</div>

				</div>
				<div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>

			</div>
			<!--- Siblings details end here -->








			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="C">
				<div class="headers-line mt-md">
					<b>C.</b> <?=translate('father’s_informattion')?>
				</div>
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('full_name')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 
				<div class="row" >
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('adhar_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('PAN No')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('occupation')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('qualification')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Organisation')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Designation')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>  
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Office Address')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 

				<div class="row" >
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('area')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('city')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('pin_code')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('state')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('country')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>

				</div>  
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('email_id')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 
				<div class="row" >
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('monile_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('land_line_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>

				</div> 
				<div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>


			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="D">
				<div class="headers-line mt-md">
					<b>D.</b><?=translate(' Mother’s Information')?>
				</div>
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('full_name')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 
				<div class="row" >
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('adhar_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('PAN No')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('occupation')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('qualification')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-8 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Organisation')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Designation')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>  
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Office Address')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 

				<div class="row" >
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('area')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('city')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('pin_code')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('state')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('country')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>

				</div>  
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('email_id')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 
				<div class="row" >
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('monile_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('land_line_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>

				</div> <div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>

			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="E">
				<div class="headers-line mt-md">
					<b>E.</b></i> <?=translate('Guardian’s Information')?>
				</div>
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('full_name')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Relationship with Child')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Present Residential Address')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>
				
				
				
				
				<div class="row" >
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('area')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('city')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-4 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('pin_code')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>   
				<div class="row" >
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('state')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('country')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>

				</div>  
				<div class="row" >
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('email_id')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div> 
				<div class="row" >
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('monile_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('land_line_no')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>

				</div> 
				<div class="row">
					<div class="col-md-12 ">
					<div class="alert alert-subl">
							Note: This Guardian is also a
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="Guardian" value="1">
		                        <label for="pending"><?php echo translate('Custodian Guardian'); ?></label>
		                    </div>
							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="Guardian" value="1">
		                        <label for="pending"><?php echo translate('Legal Guardian'); ?></label>
		                    </div>
							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="Guardian" value="1">
		                        <label for="pending"><?php echo translate('Not Applicable'); ?></label>
		                    </div>
							
								</div>
					
				</div>

				</div>
				<div style="text-align: center;" class="row">
				<div class="col-md-12">
											<div class="alert alert-subl">

												Kindly submit all the relevant documents as mentioned in ‘Section K - Point No. 12 and Point No.16(c) & (d)’
											</div>
										</div>
							</div>

								<div class="row">
					<div class="col-md-6 ">
					<div class="alert alert-subl">
							Are parents separated? 
								<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="status" value="1">
		                        <label for="pending"><?php echo translate('Y'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="status" value="2" >
		                        <label for="paid"><?php echo translate('N'); ?></label>
		                    </div>
		                  </div>
				</div>  

					<div class="col-md-6 ">
					<div class="alert alert-subl">

							Who has custody of the child?
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="custody" value="1">
		                        <label for="pending"><?php echo translate('mother'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="custody" value="2" >
		                        <label for="paid"><?php echo translate('father'); ?></label>
		                    </div>
						

					</div>
				</div>

				</div>

								<div  style="text-align: center;" class="row">
							<div class="col-md-12">
											<div class="alert alert-subl">

												If Yes, kindly submit copies of the documents as mentioned in ‘Section K - Point No. 16(a)’ in support
of the separation of parents and custody of child
											</div>
										</div>
										</div>
							
				<div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>
			</div>







			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="F">
				<div class="headers-line mt-md">
					<b>F.</b> <?=translate(' Point of contact in the order of preference')?>
				</div>
				<div class="row">
					<div class="col-md-6 mb-sm">
							<div class="alert alert-subl">

												Mobile:

(Put 1,2,3 in the preference order)
											</div>
					</div>
				<div class="col-md-1 mb-sm">

						<div class="form-group">
							<label class="control-label"><?=translate('mother')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-1 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('father')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-1 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('guardian')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-6 mb-sm">
							<div class="alert alert-subl">

												Email: 

(Put 1,2,3 in the preference order)
											</div>
					</div>
				<div class="col-md-1 mb-sm">

						<div class="form-group">
							<label class="control-label"><?=translate('mother')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-1 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('father')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-1 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('guardian')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>
					<div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>
			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="G">
				<div class="headers-line mt-md">
					<b>G.</b> <?=translate('Refund')?>
				</div>

				<div style="text-align: center;" class="row">
					<div class="col-md-12 mb-sm">
							<div class="alert alert-subl">

											In the event of refund, cheque to be made in favour of
											</div>
					</div>
				</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							(Tick on any one)
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="refund" value="1">
		                        <label for="pending"><?php echo translate('mother'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="refund" value="2" >
		                        <label for="paid"><?php echo translate('father'); ?></label>
		                    </div>
						
						<div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="refund" value="2" >
		                        <label for="paid"><?php echo translate('guardian'); ?></label>
		                    </div>

					</div>
				</div>
					</div>
				<div style="text-align: center;" class="row">
					<div class="col-md-12 mb-sm">
							<div class="alert alert-subl">

											Kindly provide a copy of PAN Card of the person selected above
											</div>
					</div>
				</div>
				<div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>
			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="H">
				<div class="headers-line mt-md">
					<b>H.</b> <?=translate(' Emergency Contact Information')?>
				</div>
				<div style="text-align: center;" class="row">
					<div class="col-md-12 mb-sm">
							<div class="alert alert-subl">

											If Parents are not immediately available, contact:

											</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Friend’s or Relative`s Name')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Contact (Mobile)')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Landline No.')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Name of the Child’s Doctor')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Contact (Mobile)')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-6 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Landline No')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
			</div>
				<div class="row"></div>
				<div class="row"></div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-offset-10 col-md-2">
							<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
								<i class="fas fa-plus-circle"></i> <?=translate('save')?>
							</button>
						</div>
					</div>
				</footer>
				<div class="row"></div>
			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="I">
				<div class="headers-line mt-md">
					<b>I.</b> <?=translate(' Medical Record ')?>
				</div>
				<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							Has the child ever been hospitalised:
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="medical" value="1">
		                        <label for="pending"><?php echo translate('Yes'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="medical" value="2" >
		                        <label for="paid"><?php echo translate('No'); ?></label>
		                    </div>
						(If yes, please tick the appropriate box)

					
					</div>
				</div>
					</div>
					<div class="row">
					<div class="col-md-12 mb-sm">
												<div class="form-group">
													<label class="control-label"><?=translate('Year of last hospitalisation')?></label>
													<div class="form-group">
														
														<input type="text" autocomplete="off" class="form-control" name="birthday" value="<?=set_value('birthday')?>" data-plugin-datepicker
														data-plugin-options='{ "startView": 2 }' />
													</div>
												</div>
											</div>
										</div>

				<div class="row">
					<div class="col-md-12 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Please specify the reason for hospitalisation:')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
				</div>
				<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							Physical Disabilities:
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="physical" value="1">
		                        <label for="pending"><?php echo translate('Yes'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="physical" value="2" >
		                        <label for="paid"><?php echo translate('No'); ?></label>
		                    </div>
						(If yes, please tick the appropriate box)

					
					</div>
				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="virtual" value="1">
		                        <label for="pending"><?php echo translate('Visual Impairment'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="Hearing" value="2" >
		                        <label for="paid"><?php echo translate('Hearing Impairment'); ?></label>
		                    </div>
						(If yes, please tick the appropriate box)

					
					</div>
				</div>
					</div>
						<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('any_other'); ?></label>
		                    </div>
		                   
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">
Medical History: (Please tick the appropriate box)
					
					</div>
				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Polio'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('German measles'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Juvenile Diabetes'); ?></label>
		                    </div>
		                   
							

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Hepatitis'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Red Measles'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Developmental Delay'); ?></label>
		                    </div>
		                   
							

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Mumps'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Rheumatic Fever'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Asthma'); ?></label>
		                    </div>
		                   
							

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Whooping Cough'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Epilepsy'); ?></label>
		                    </div>
		                   
		                   
							

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('any_other'); ?></label>
		                    </div>
		                   
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />

					</div>

				</div>
					</div>
					<div class="row" >
					<div class="col-md-9 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('Allergies: (If any)')?></label>
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />
						</div>
					</div>
					<div class="col-md-3 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('blood_group')?></label>
							<?php
								$bloodArray = $this->app_lib->getBloodgroup();
								echo form_dropdown("blood_group", $bloodArray, set_value("blood_group"), "class='form-control populate' data-plugin-selectTwo 
								data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
						</div>
					</div>
				</div> 
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							Personalised Learning Needs: 
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="pending" name="medical" value="1">
		                        <label for="pending"><?php echo translate('Yes'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="paid" name="medical" value="2" >
		                        <label for="paid"><?php echo translate('No'); ?></label>
		                    </div>
						(If yes, please tick the appropriate box)

					
					</div>
				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Learning Disability'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Autism'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('ADHD(Attention Deficit Hyperactive Disorder)'); ?></label>
		                    </div>
		                   
							

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('ADD(Attention Deficit Disorder)'); ?></label>
		                    </div>
		                    <div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('Slow Learner'); ?></label>
		                    </div>
		                   
		                   
							

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">

							
									<div class="radio-custom radio-inline">
		                        <input type="radio" id="virtual" name="any_other" value="1">
		                        <label for="pending"><?php echo translate('any_other'); ?></label>
		                    </div>
		                   
							<input type="text" class="form-control" name="father_name" value="<?=set_value('father_name')?>" />

					</div>

				</div>
					</div>
					<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">
Kindly provide all the relevant documents as mentioned in ‘Section-K - Point No. 15’
					
					</div>
				</div>
					</div>
					<div class="row"></div>
									<div class="row"></div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-md-offset-10 col-md-2">
												<button type="submit" name="save" value="1" class="btn btn btn-default btn-block">
													<i class="fas fa-plus-circle"></i> <?=translate('save')?>
												</button>
											</div>
										</div>
									</footer>
									<div class="row"></div>
			</div>
			
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="J">
				<div class="headers-line mt-md">
					<b>J.</b><?=translate('Declaration by Parents / Guardians')?>
				</div>
				<div  class="row">
						<div class="col-md-12 ">
					<div class="alert alert-subl">
We are seeking admission for our son/daughter/ward _______________________________________________ ('child')
in VIBGYOR High ('VIBGYOR') after having carefully and thoroughly read and after having clearly understood the terms,
conditions, covenants, rules, regulations, policies, guidelines, circulars, disciplines, declarations and undertakings
pertaining to admission and schooling to be followed at VIBGYOR stated herein below as also those stipulated in the
Parents' Manual / Handbook on VIBGYOR's website (www.vibgyorhigh.com) which have also been thoroughly and duly
explained to us. We do hereby voluntarily and willfully without any kind of force, pressure, coercion or undue influence of
any nature or to any extent under any circumstance whatsoever from the management of VIBGYOR or any other authority
or person or entity assure, declare, confirm, agree, acknowledge, state and undertake that these are acceptable to us
including any substitutions for or modifications, amendments to them, which may be made by VIBGYOR from time to time
at their sole, exclusive and absolute discretion and we unconditionally and unequivocally assure, confirm, agree,
acknowledge and undertake to comply with and abide by the same at all times <br>
1. We hereby solemnly declare and confirm that we have made this application seeking admission for our child after having
read and understood all the rules of admission.<br>
2. We declare and confirm that our child has not been debarred from studying in any school or appearing in any
examination in the previous school.<br>
3. We declare and confirm that the information furnished by us in this application is true to the best of our knowledge and
belief.


					
					</div>
				</div>
					</div>
			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="K">
				<div class="headers-line mt-md">
					<b>K.</b> <?=translate('To Be Filled in by the Admission Authority at the School')?>
				</div>

			</div>
		</div>
	</div>
</section>
</div>


<script>
	$(".nav li").on("click", function() {
		$(".nav li").removeClass("nav-active");
		$(this).addClass("nav-active");
	});
	var objDiv = document.getElementById("info");
	objDiv.scrollTop = objDiv.scrollHeight;
</script>