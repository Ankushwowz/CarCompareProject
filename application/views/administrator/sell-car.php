#popup .modal-dialog {position: absolute;top: 40%;left: 30%;}

<style>
td {border: 0 !important;}
table.dataTable thead th, table.dataTable thead td {border-bottom: 0 !important;}
.btn-txt {
    text-align: center;
    margin: 20px;
}
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header inventsect">
      <h1 class="yourlistedd">Your Listed Inventory </h1>
      <?php if($this->session->userdata('role')==3){ ?>
      <a href="<?php echo base_url(); ?>post-ad" class="btn btn-primary btn-txt addvenderpri">Add Inventory</a>
      <?php } ?>
   </section>
   <section class="content">
      <?php if($this->session->flashdata('success')){  ?>
                        <?php echo '<div class="alert alert-success icons-alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           
                           <i class="icofont icofont-close-line-circled"></i>
                           
                           </button>
                           
                           <p class="text-message">'.$this->session->flashdata('success').'</p></div>'; ?>
                        <?php } ?>
      <div class="row">
         <div class="col-xs-12">
            <div class="box admin-box">
               <!-- /.box-header -->
               <div class="box-body table-responsive">
                  
                  <table id="example" class="display table table-hover table-downs" style="width:100%">
                     <thead>
                        <tr>
                           <th>Title</th>
                           <th>Advert Type</th>
                          
                           <th>Package</th>
                           <?php if($this->session->userdata('role')==3){ ?>
                           <th>Adverts Left</th>
                           <th>Valid upto</th>
                           
                           <th>Post Status</th>
                           <?php } ?>
                           <th>Action</th>
							
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if(!empty($Records)){
								foreach($Records as $record){ ?>
									<tr>
									   <td><?php echo $record->title; ?></td>
									   <td><?php echo ucfirst($record->advert_type); ?></td>
									   <td><?php echo ucfirst($record->package); ?></td>
                                        <?php if($this->session->userdata('role')==3){ ?>
                                        <?php
                                        $addleft = $record->adverts - $record->countads;
                                        if($addleft > 0){
                                        ?>
                                        <td><?php echo $addleft; ?></td>
                                        <?php } else{  ?>
                                        <td><a href="javascript:;" class="btn btn-warning" style="width:100%">No adverts left</a></td>
                                        <?php } ?>
                                        
                                        
                                        <?php 
									   
									    $future = $record->timeperiod;
									    
                                        $today = date('Y-m-d');
                                        
                                        $timeleft = strtotime($future) - strtotime($today);
                                        $daysleft = round((($timeleft/24)/60)/60);
									   
									   
									   //$today = date('Y-m-d');
		                                    if($today > $record->timeperiod){ ?>
                                        
                                        
									  
									   <td><a href="javascript:;"  class="btn btn-warning" style="width: 100%">Expired</a></td>
									   <?php }else{ ?>
									   <td><?php echo $record->timeperiod; ?> (<?php echo $daysleft; ?> days left)</td>
									   <?php } ?>
									   
									   <?php if($record->poststatus == 0){ ?>
									   <td><span class="pub-un">Unpublished</span></td>
									   <?php } else { ?>
									   <td><span class="pub-pub">Published</span></td>
									   <?php } ?>
									   
									   <?php } ?>
									   
									   <td class="avail-edit-delete-un">
									       <a class="amoreoptionbtn">
									           <div class="menu cross menu--2 set-circl-menuss">
                                                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="50" cy="50" r="30" />
                                                        <path class="line--1" d="M0 70l28-28c2-2 2-2 7-2h64" />
                                                        <path class="line--2" d="M0 50h99" />
                                                        <path class="line--3" d="M0 30l28 28c2 2 2 2 7 2h64" />
                                                    </svg>
                                                </div>
									       </a>
									       <div class="amoreoption">
									           <a href="<?php echo base_url();?>edit-vehicle/<?php echo base64_encode($record->postid);?>" class="btn btn-primary primarydan"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"> </i> Edit </a>
    									        <a href="javascript:;" rel="<?php echo $record->postid;?>" class="btn btn-danger delete-vehicle"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
    											<?php if($record->advert_type=='rent'){?>
    									        <a href="#" class="btn btn-warning unavailable" style="margin-top: 4px !important;" data-toggle="modal" data-target="#popup" rel="<?php echo $record->postid;?>" ><i class="fa fa-ban" aria-hidden="true"></i> Unavailable </a><?php } ?>
    											<?php if($record->advert_type=='rent'){?>
    											  <a href="javascript:;" rel="<?php echo $record->postid;?>" class="btn btn-success available-vehicle primarsucc"><i class="fa fa-check-circle" aria-hidden="true"></i> Available</a>
    											<?php } ?>
									       </div>
									   </td>
									  
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
   
   
									<div id="popup" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
											<div class="modal-header" style="background-color: #3259ca;color: #fff;">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Unavailable</h4>
											</div>
											<div class="modal-body">
											<div  id="unavailable-success" style="display:none;" class="alert alert-success" >Your Information has been added successfully.</div>
											<div class="form-group">
											<label for="f-unavailable">Unavailable Date:</label>
											<input min="<?php echo date('Y-m-d');?>"  type="date" class="form-control" id="unavailable" value="<?php echo date('Y-m-d');?>">
											<input type="hidden" class="form-control" id="postid" value="" >
											
											</div>
											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-success" id="saveunavailable" >Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
											</div>

											</div>
											</div>
</div>

<!-- Modal -->
