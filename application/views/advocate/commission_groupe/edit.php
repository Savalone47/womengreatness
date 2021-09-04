<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Commission Groupe Edit</h3>
            </div>
			<?php echo form_open('commission_groupe/edit/'.$commission_groupe['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_commission" class="control-label">Commission Tech</label>
						<div class="form-group">
							<select name="id_commission" class="form-control">
								<option value="">select commission_tech</option>
								<?php 
								foreach($all_commission_tech as $commission_tech)
								{
									$selected = ($commission_tech['id'] == $commission_groupe['id_commission']) ? ' selected="selected"' : "";

									echo '<option value="'.$commission_tech['id'].'" '.$selected.'>'.$commission_tech['nom_commission'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_user" class="control-label">User</label>
						<div class="form-group">
							<select name="id_user" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_user as $user)
								{
									$selected = ($user['id'] == $commission_groupe['id_user']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['nom'].'</option>';
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