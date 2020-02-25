
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo TITLE; ?></title>

    
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>css/custom.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?php echo base_url() ?>js/main/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/main/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugins/loaders/blockui.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugins/editors/ckeditor/ckeditor.js"></script> 
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <link href="<?php echo base_url()?>css/bootstrap-datetimepicker.css" rel="stylesheet">
<!--     <script src="<?php echo base_url()?>js/moment.min.js"></script> -->
    <script src="<?php echo base_url()?>js/bootstrap-datetimepicker.min.js"></script>
    
    <script src="<?php echo base_url() ?>js/plugins/forms/selects/select2.min.js"></script>

    <script src="<?php echo base_url() ?>js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="<?php echo base_url() ?>js/plugins/forms/selects/select2.full.min.js"></script>

    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/demo_pages/form_select2.js"></script>

</head>

<body>

    
    <?php $this->load->view('common/navbar'); ?>


    <!-- Page content -->
    <div class="page-content">

        <?php $this->load->view('common/sidebar'); ?>


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="<?php echo base_url()?>Admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                        <!-- Page content -->
                            <div class="page-content">
                                <!-- Main content -->
                                <div class="content-wrapper">
                                    <!-- Content area -->
                                    <div class="content">
                                    <!-- Colors -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="card-title">Rewards Points</h6><br>
                                                <p class="text-success"><?php 

                                                echo $m = isset($message) ?  $message : '' ;?></p>
                                            </div>

                                            <div class="card-body">
                                                <form action="<?php echo base_url()?>Rewards/redeemPoints" enctype="multipart/form-data" method="post">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Mobile</label>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Mobile" id="mobile" value="<?php echo set_value('mobile') ?>" name="mobile" minlength="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                                                <p class="error"><?php echo form_error('mobile'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Bill Id</label>
                                                            <div class="form-group">
                                                                <input type="type" class="form-control" placeholder="Bill Id" name="bill_id" value="<?php echo set_value('bill_id');?>">
                                                                <p class="error"><?php echo form_error('bill_id'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Bill Amount</label>
                                                            <div class="form-group">
                                                                <input type="type" class="form-control check_points" placeholder="Bill Amount" name="bill_amount" value="<?php echo set_value('bill_amount');?>">
                                                                <p class="error"><?php echo form_error('bill_amount'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Points</label>
                                                            <div class="form-group">
                                                                <input type="type" class="form-control show_discount" placeholder="Points" name="points" value="<?php echo set_value('points');?>">
                                                                <p class="error"><?php echo form_error('points'); ?></p>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                            
                                                    </div>


                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-primary submit_button" disabled>Submit <i class="icon-paperplane ml-2"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /colors -->
                                    </div>
                                </div>
                            </div>


                </div>
                <!-- /main charts -->




            </div>
            <!-- /content area -->


            <?php $this->load->view('common/footer'); ?>

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('.check_points').on('blur', function() {

            var mobile = $('#mobile').val();
            var base_url = $('#base_url').val();
            $.ajax({
                type: 'post',
                data: {mobile:mobile},
                url: base_url + 'Rewards/checkValidPoints',
                success: function(data) {
                    var obj = $.parseJSON(data);
                    if (obj.errCode == -1) {
                        $('.show_discount').val(obj.message);
                        $('.submit_button').removeAttr('disabled');
                    }else if(obj.errCode == 3){
                        $('.error').remove();
                        $.each(obj.message,function(key,value){
                            
                            var element = $('.'+key);
                            element.closest('.form-control').after(value);
                        });
                    }

                }

            });
        });
    });
</script>



