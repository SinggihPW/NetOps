
<div class="content-wrapper" style="min-height: 960px;">
   <section class="content" style="min-height: 960px;">
        <h1>Daftar table</h1>
    </section>
    <!-- Content -->
    <section class="content">
        <!--<div class="box">
            <div class="box-header with-border">
            <div class="box-title">
                <button type="button"><a href="<?php echo base_url(); ?>admin/Dokter/tambahbaru">Tambah Data</a></button>
            </div>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>-->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width:100px">No</th>
                    <th style="width:130px">Date</th>
                    <th style="width:50px">Hostname</th>
                    <th style="width:70px">Current</th>
                    <th style="width:70px">Average</th>
                    <th style="width:70px">Max</th>                
                </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach ($data as $data_barchart)
                    ?>
                <tr>
                  <td><?php echo $data_table['No'];?></td>
                  <td><?php echo $data_table['Date'];?></td>
                  <td><?php echo $data_table['Hostname'];?></td>
                  <td><?php echo $data_table['Current'];?></td>
                  <td><?php echo $data_table['Average'];?></td>
                  <td><?php echo $data_table['Max'];?></td>
                </tr>
                <?php endforeach; ?>

                </tbody>
              </table>
        </div>
    </section>
    <!-- /.content -->
</div>