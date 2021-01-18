<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			
<?php if (get_permission('event', 'is_add')): ?>
			
			<li class="active">
                <a href="#edit" data-toggle="tab">
                    <i class="far fa-edit"></i> <?=translate('edit_list')?>
                </a>
			</li>
<?php endif; ?>
		

		</ul>
		<div class="tab-content">
			<div class="tab-pane box active mb-md" id="list">
					<?php echo form_open('event', array('class' => 'form-bordered form-horizontal frm-submit'));?>
					<?php if (is_superadmin_loggedin()): ?>
						<div class="form-group">
							<label class="control-label col-md-3"><?=translate('branch')?> <span class="required">*</span></label>
							<div class="col-md-6">
								<?php

									$arrayBranch = $this->app_lib->getSelectList('branch');
									$this->db->order_by('id', 'desc');
									$this->db->where('id', $event_id);
						            $events = $this->db->get('event')->result();
									
									//print_r($events[0]);

									echo form_dropdown("branch_id", $arrayBranch, set_value('branch_id',$events[0]->branch_id), "class='form-control' data-width='100%' id='branch_id'
									data-plugin-selectTwo  data-minimum-results-for-search='Infinity'");
								?>
								<span class="error"></span>
							</div>
						</div>
					<?php endif; ?>
					<input type="hidden" name="event_id" value="<?=$events[0]->id?>">
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('title')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="title" value="<?=$events[0]->title?>" />
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-3">
							<div class="ml-md checkbox-replace">
								<label class="i-checks"><input type="checkbox" name="holiday" id="chk_holiday"><i></i> Holiday</label>
							</div>
						</div>
						<div id="typeDiv">
							<div class="mt-md">
								<label class="col-md-3 control-label"><?=translate('type')?> <span class="required">*</span></label>
								<div class="col-md-6">
									<?php
										$array = $this->app_lib->getSelectByBranch('event_types', $events[0]->branch_id);
										echo form_dropdown("type_id", $array, set_value('type_id',$events[0]->type), "class='form-control' id='type_id'
										data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
									?>
									<span class="error"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('audience')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<?php
								$arrayAudition = array(
									"" => translate('select'),
									"1" => translate('everybody'),
									"2" => translate('selected_class'),
									"3" => translate('selected_section'),
								);
								echo form_dropdown("audition", $arrayAudition, set_value('audition',$events[0]->audition), "class='form-control' id='audition'
								data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group" id="selected_user" style="display: none;">
						<label class="col-md-3 control-label" id="selected_label"> <?=translate('audience')?> <span class="required">*</span> </label>
						<div class="col-md-6">
							<?php
								$placeholder = '{"placeholder": "' . translate('select') . '"}';
								echo form_dropdown("selected_audience[]", $array, set_value('selected_audience'), "class='form-control' data-plugin-selectTwo multiple
								data-plugin-options='$placeholder' data-plugin-selectTwo data-width='100%' id='selected_audience' ");
							?>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('date')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
								<input type="text" class="form-control" name="daterange" id="daterange" 
								value="<?=set_value('daterange', date("Y/m/d",strtotime($events[0]->start_date)) . ' - ' . date("Y/m/d", strtotime($events[0]->start_date)))?>" />
							</div>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('description')?></label>
						<div class="col-md-6">
							<textarea name="remarks"  class="summernote"><?=$events[0]->remark?></textarea>
						</div>
					</div>
				
					<footer class="panel-footer">
						<div class="row">
							<div class="col-md-offset-3 col-md-2">
								<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
									<i class="fas fa-plus-circle"></i> <?=translate('save')?>
								</button>
							</div>
						</div>
					</footer>
				<?php echo form_close(); ?>
			</div>

			</div>

		
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function () {
		$('#daterange').daterangepicker({
			opens: 'left',
		    locale: {format: 'YYYY/MM/DD'}
		});

		$('#branch_id').on('change', function() {
			var branchID = $(this).val();
			$.ajax({
				url: "<?=base_url('ajax/getDataByBranch')?>",
				type: 'POST',
				data: {
					branch_id: branchID,
					table : 'event_types'
				},
				success: function (data) {
					$('#type_id').html(data);
				}
			});
			$("#selected_audience").empty();
		});
		
		$('#audition').on('change', function() {
			var audition = $(this).val();
			var branchID = ($('#branch_id').length ? $('#branch_id').val() : "");
			if(audition == "1" || audition == null)
			{
				$("#selected_user").hide("slow");
			}
			if(audition == "2") {
			    $.ajax({
			        url: base_url + 'ajax/getClassByBranch',
			        type: 'POST',
			        data:{ branch_id: branchID },
			        success: function (data){
			            $('#selected_audience').html(data);
			        }
			    });
				$("#selected_user").show('slow');
				$("#selected_label").html("<?=translate('class')?> <span class='required'>*</span>");
			}
			if(audition == "3"){
				$.ajax({
					url: "<?=base_url('event/getSectionByBranch')?>",
					type: 'POST',
					data: {branch_id: branchID},
					success: function (data) {
						$('#selected_audience').html(data);
					}
				});
				$("#selected_user").show('slow');
				$("#selected_label").html("<?=translate('section')?> <span class='required'>*</span>");
			}
		});
	});
</script>