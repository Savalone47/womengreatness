

<div class="content-wrapper clearfix">
	<!-- Main content -->
	<div class="col-md-12 form f-label">
		<?php if($this->session->flashdata("messagePr")){?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata("messagePr")?>
			</div>
		<?php } ?>
		<!-- Profile Image -->
		<div class="box box-success pad-profile">
			
		<div class="box-header with-border">
              	<h3 class="box-title">Groupe User Add</h3>
            </div>
            <?php echo form_open('groupe_user/add'); ?>
          	<div class="box-body">
			  <?php if($this->session->success):?>
						<div class="alert alert-success">
							Super! your groupe is created with success
						</div>
					<?php endif?>
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">User</label>
						<div class="form-group">
							<select name="id_user" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_user as $user)
								{
									$selected = ($user['users_id'] == $this->input->post('id_user')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['users_id'].'" '.$selected.'>'.$user['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_group" class="control-label">Goupe</label>
						<div class="form-group">
							<select name="id_group" class="form-control">
								<option value="">select goupe</option>
								<?php 
								foreach($all_goupe as $goupe)
								{
									$selected = ($goupe['id'] == $this->input->post('id_group')) ? ' selected="selected"' : "";

									echo '<option value="'.$goupe['id'].'" '.$selected.'>'.$goupe['nom_groupe'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
		</div>
		<!-- /.content -->
	</div>
</div>






