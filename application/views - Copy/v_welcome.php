<div class="container">
    <div class="row">
<?php foreach($titik->result() as $row) { ?>
        <div class="panel col-md-4">
<?php echo $row->nama ?>
        </div>
<?php } ?>
    </div>
</div>
