      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Postingan
          </h1>
        </section>
            <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Post <small>( required )</small></h3>
                </div><!-- /.box-header -->
<!--
                <?php //if(validation_errors()){?>
                <div class="alert alert-danger">	
                    <?php echo validation_errors() ?>
                </div>
                  <?php //} ?>
-->
                <!-- form start -->
	<?php echo form_open_multipart('user/new_post'); ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" placeholder="Judul" name="judul" required>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" placeholder="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                      <label>Foto 1</label>
                      <input type="file">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Bagikan</button>
                  </div>
	<?php echo form_close(); ?>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      
          
</div>