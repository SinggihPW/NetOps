<div class="content-wrapper" style="min-height: 960px;">
   <section class="content" style="min-height: 960px;">
        <h1>Daftar table</h1>
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width:10px">No</th>
                    <th style="width:150px">Date</th>
                    <th style="width:50px">Hostname</th>
                    <th style="width:20px">Current</th>
                    <th style="width:20px">Average</th>
                    <th style="width:20px">Max</th>                
                </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach ($cpu_posts as $data_table){?>
                <tr>
                  <td><?php echo $data_table->No;?></td>
                  <td><?php echo $data_table->Date;?></td>
                  <td><?php echo $data_table->Hostname;?></td>
                  <td><?php echo $data_table->Current;?></td>
                  <td><?php echo $data_table->Average;?></td>
                  <td><?php echo $data_table->Max;?></td>
                </tr>
                <?php }; ?>

                </tbody>
           </table>
    </section>
    <!-- Content -->
</div>