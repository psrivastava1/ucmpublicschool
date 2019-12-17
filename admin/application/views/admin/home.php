<?php
$notice=$this->db->get("notice")->num_rows();
$gallery=$this->db->get("gallery")->num_rows();
$contact=$this->db->get("contactus")->num_rows();
?>   

   <div class="row container" style="margin-left:5%;" >
    <div class="col-lg-3">
        <div class="panel panel-default panel-blue core-box">
            <div class="panel-body no-padding">
                <div class="partition-azure text-center core-icon">
                    <i class="fa fa-book fa-2x icon-big"></i>
                    <h4 class="title block no-margin">Total Notice Board</h4>
                    	<h2 class="title block no-margin"><?php echo $notice;?></h2>
                </div>
                </a>
            </div>
        </div>
    </div>

<div class="col-lg-3">
        <div class="panel panel-default panel-yellow core-box">
            <div class="panel-body no-padding">
                <div class="partition-azure text-center core-icon">
                    <i class="fa fa-image fa-2x icon-big"></i>
                    <h4 class="title block no-margin">Total Gallery</h4>
				<h2 class="title block no-margin"><?php echo $gallery;?></h2>
                </div>
                </a>
            </div>
        </div>
    </div>

<div class="col-lg-3">
        <div class="panel panel-default panel-green core-box">
            <div class="panel-body no-padding">
                <div class="partition-azure text-center core-icon">
                    <i class="fa fa-user fa-2x icon-big"></i>
                    <h4 class="title block no-margin">Total Contact</h4>
				<h2 class="title block no-margin"><?php echo $contact;?></h2>
                </div>
                </a>
            </div>
        </div>
    </div>


