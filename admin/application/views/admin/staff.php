<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            		<div class="row">
                            			<div class="col-md-12">
                            				<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/saveStaff" method="post" enctype="multipart/form-data">
		                                        <?php $raj=$this->uri->segment(3);
		                                        if($raj==23)
		                                        {
		                                        echo "Successfully Uploaded Image";
		                                        	
		                                        }?>
		                                        
		                                        
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-3 control-label">Name</label>
		                                            <div class="col-sm-9">
		                                                <input type="text" class="form-control" id="input-Default" name="name">
		                                            </div>
		                                        </div>

                                                <div class="form-group">
		                                            <label for="input-Default" class="col-sm-3 control-label">Mobile Number</label>
		                                            <div class="col-sm-9">
		                                                <input type="text" class="form-control" id="input-Default" name="mble_nm">
		                                            </div>
		                                        </div>
                                                 <div class="form-group">
                                                    <label for="input-Default" class="col-sm-3 control-label">Qualification</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="input-Default" name="quali">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="input-Default" class="col-sm-3 control-label">Experience</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="input-Default" name="exp">
                                                    </div>
                                                </div>
		                                         <div class="col-sm-offset-3 col-sm-9">
		                                            <button type="submit" class="btn btn-success">Submit</button>
		                                         </div>
		                                    </form>
                            			</div>
                            		</div>
                            	<br/><hr/><br/>
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>name</th>
                                                <th>Qualification</th>
                                                <th>Experience</th>
                                                
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("staff")->result();?>
                                        	<?php foreach($res as $row):
                                               
                                                ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                 <td><?php echo $row->qualification; ?></td>

                                                  <td><?php echo $row->experience; ?></td>
                                                 
                                             
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteStaff/<?php echo $row->id;?>">
                                                		Delete
                                                	</a>
                                                </td>

                                            </tr>
                                           <?php $i++; ?>
                                            <?php endforeach;?>
                                           
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->