<div class="row">
	<div class="col-md-12">
		
			<section class="panel">
				<header class="panel-heading">
					<h4 class="panel-title">
						<i class="fab fa-envira"></i> <?=translate('logo_list');?>
						
						
					</h4>
				</header>
				<div class="panel-body">
	                <div class="table-responsive mt-md mb-md">
						<table class="table table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th>#</th>
									<th><?=translate('branch')?></th>
									<th><?=translate('school_name')?></th>
									<th><?=translate('logo')?></th>
									<th><?=translate('logo')?></th>
									<!-- <th width="85"><?=translate('stats')?></th>-->
									
									<!--<th><?=translate('updated_at')?></th> -->
									<th><?=translate('action')?></th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$count = 1;
								$branchs = $this->db->get('branch')->result();
								foreach($branchs as $row):
							?>
							<tr>
								<td><?php echo $count++; ?></td>
								<td><?php echo $row->name;?></td>
								<td><?php echo $row->school_name;?></td>
								<td> <img src="<?=base_url('uploads/app_image/'.$row->id.'logo-small.png')?>"> </td>
								<td><?php

					echo form_open_multipart($this->uri->uri_string(), array('class' 	=> 'validate'));
				?>

	

							<input type="file" name="text_logo" class="dropify" data-allowed-file-extensions="png" data-default-file="<?=base_url('uploads/app_image/logo-small.png')?>" />
							<input type="hidden" name="branchid" value="<?php echo $row->id;?>">
				
				</td>
								
								<td class="min-w-c">
									
					
					
							<button type="submit" class="btn btn btn-default " name="submit" value="logo">
								<i class="fas fa-upload"></i> <?=translate('upload')?>
							</button>
						
					
				</footer>
				<?php echo form_close(); ?>
									<!--update link-->
									<!-- <a href="<?=base_url('branch/edit/'.$row->id)?>" class="btn btn-default btn-circle icon">
										<i class="fas fa-pen-nib"></i>
									</a> -->
									<!-- delete link -->
									<?php //echo btn_delete('branch/delete_data/' . $row->id);?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>

	