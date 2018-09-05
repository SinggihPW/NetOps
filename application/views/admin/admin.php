<div class="content-wrapper">
    <section class="content-header">
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
                    <th style="width:100px">no</th>
                    <th style="width:130px">product_id</th>
                    <th style="width:50px">barang</th>
                    <th style="width:70px">produk_name</th>                
                </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach ($data as $data_table) {
                    ?>
                <tr>
                  <td><?php echo $data_table['no'];?></td>
                  <td><?php echo $data_table['produkid'];?></td>
                  <td><?php echo $data_table['produkname'];?></td>
                  <td><?php echo $data_table['barang'];?></td>
                </tr>
                <?php 
                      } 
                ?>
                </tbody>
              </table>
        </div>
    </section>
    <!-- /.content -->
</div>