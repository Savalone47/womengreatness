<!-- Content Wrapper. Contains page content -->

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

				<h3 class="box-title"><?=$book[0]->bo_title?><small></small></h3>

			</div>

			<?=validation_errors()?>

			<?=form_open_multipart('Books/addPdf/'.$book[0]->bo_id)?>

				<div class="box-body box-profile">

					<div class="col-md-8">

						<div class="form-group has-feedback clear-both">

							<label for="exampleInputname">PDF File:</label>

							<input type="hidden" name="bo_id" value="<?=$book[0]->bo_id?>">

							<input type="file"  name="bo_file" required="required" class="form-control">

						</div>

						<div class="form-group has-feedback sub-btn-wdt pull-right" >

							<button name="submit1" type="button" id="profileSubmit" class="btn btn-success btn-md wdt-bg">Save PDF File</button>

							<!-- <div class=" pull-right">

							</div> -->

						</div>

					</div>

					<!-- /.box-body -->

				</div>

			</form>

			<!-- /.box -->

		</div>

		<!-- /.content -->

	</div>

</div>

<!-- /.content-wrapper -->

