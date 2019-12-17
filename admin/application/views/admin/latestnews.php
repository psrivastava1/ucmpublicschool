                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Enter News Containt</h4>
                                </div>
                            	<div class="panel-body">
                            	<?php if($this->uri->segment(3) == "edit"):?>
                            	<?php $this->db->where("id",$this->uri->segment(4));?>
                            	<?php $deta = $this->db->get("latestnews")->row();?>
                                   <form class="form-horizontal" action="<?php echo base_url()?>apanelForms/edit_news" method="post">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">News Content</label>
                                            <div class="col-sm-10">
                                            	<input type="hidden" name="id" value="<?php echo $this->uri->segment(4);?>" />
                                                <input type="text" class="form-control" id="input-Default" name="title" value="<?php echo $deta->news;?>">
                                            </div>
                                        </div>
                                      
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Edit News</button>
                                         </div>
                                    </form>
                                <?php else:?>
                                	<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/letestNews" method="post">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">News Content</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" required  id="input-Default" name="title">
                                            </div>
                                        </div>
                                        
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save News</button>
                                         </div>
                                    </form>
                                <?php endif;?>    
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>News</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("latestnews")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->news; ?></td>
                                                <td><?php echo $row->date; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanel/latestnews/edit/<?php echo $row->id;?>">Edit</a> | 
                                                	<a href="<?php echo base_url();?>apanelForms/delete_news/<?php echo $row->id;?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->