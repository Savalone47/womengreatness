<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Groupe User Edit</h3>
            </div>
			<?php echo form_open('groupe_user/edit/'.$groupe_user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label">User</label>
						<div class="form-group">
							<select name="id_user" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_user as $user)
								{
									$selected = ($user['id'] == $groupe_user['id_user']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['nom'].'</option>';
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
									$selected = ($goupe['id'] == $groupe_user['id_group']) ? ' selected="selected"' : "";

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
    </div>
</div>