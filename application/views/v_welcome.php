      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <!-- The time line -->
                <?php foreach($post->result() as $row) { ?>
                <ul class="timeline">
                <!-- timeline time label -->
                <li class="time-label">
                  <span class="bg-red">
                    <?php echo $row->user_id ?>
                  </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-tree bg-aqua"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row->timestamp ?></span>
                    <h3 class="timeline-header"><a href="#"><?php echo $row->judul ?></a></h3>
                    <div class="timeline-body">
                      <?php echo $row->alamat ?>
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-info btn-flat btn-xs">Lebih Lanjut...</a>
                    </div>
                  </div>
                </li>
                </ul>
                <?php } ?>
              </div>
            </div>
                <!-- END timeline item -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
