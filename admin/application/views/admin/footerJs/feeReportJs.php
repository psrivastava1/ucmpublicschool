		<!-- Javascripts -->
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/assets/js/pages/table-data.js"></script>
         <script>
	        jQuery(document).ready(function() {
		        //alert("rahul");
				$("#detailType").change(function(){
					var detailType = $("#detailType").val();
					var sdt = $("#sdt").val();
					var edt = $("#edt").val();
					//alert(testId);
					$.post("<?php echo site_url('apanelForms/getFeeDetails') ?>",{detailType : detailType,sdt :sdt,edt : edt},function(data){
						$("#section1").html(data);
					});
				});

				
	        });
        </script>