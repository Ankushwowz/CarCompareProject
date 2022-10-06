<style>
td {border: 0 !important;}
table.dataTable thead th, table.dataTable thead td {border-bottom: 0 !important;}
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1 class="usermana">
         <i class="fa fa-users"></i> Users Management
         <small></small>
      </h1>
   </section>
   <section class="content">
      
      <div class="row">
         <div class="col-xs-12">
            <div class="box admin-box">
               <!-- /.box-header -->
               <div class="box-body table-responsive">
                  
                  <table id="example" class="display table table-hover table-downs" style="width:100%">
                     <thead>
                        <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Action</th>
							
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if(!empty($Records)){
								foreach($Records as $record){ ?>
									<tr>
									   <td><?php echo $record->first_name; ?></td>
									   <td><?php echo ucfirst($record->last_name); ?></td>
									   <td><?php echo ucfirst($record->user_email); ?></td>
									   <td><a href="javascript:;" rel="<?php echo $record->id;?>" class="btn btn-danger delete-user">Delete</a> </td>
									  
									 </tr><?php
								}
                           } ?>
                     </tbody>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
</div>