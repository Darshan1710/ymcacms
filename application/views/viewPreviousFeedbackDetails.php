<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2019 06:40:16 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
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
      <script src="<?php echo base_url()?>js/plugins/forms/styling/uniform.min.js"></script>
      <script src="<?php echo base_url() ?>js/main/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url() ?>js/plugins/loaders/blockui.min.js"></script>
      <script src="<?php echo base_url() ?>js/demo_pages/form_checkboxes_radios.js"></script>
      <!-- /core JS files -->
      <!-- Theme JS files -->
      <script src="<?php echo base_url() ?>js/plugins/extensions/jquery_ui/interactions.min.js"></script>
      <script src="<?php echo base_url() ?>js/plugins/forms/selects/select2.min.js"></script>
      <script src="<?php echo base_url() ?>js/app.js"></script>
      <script src="<?php echo base_url() ?>js/demo_pages/form_select2.js"></script>
      <!-- /theme JS files -->
   </head>
   <body>
      <!-- Main navbar -->
      <?php $this->load->view('common/navbar'); ?>
      <!-- /main navbar -->
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
              <?php if(!empty($feedback)){ ?>
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
                              <div class="card-header ">
                                 <h6 class="card-title">Name :<code> <?php echo ucwords($feedback['name']);?></code></h6>
                                 <h6 class="card-title">Mobile : <code> <?php echo $feedback['mobile'];?></code> </h6>
                                 <h6 class="card-title">Email : <code> <?php echo $feedback['email'];?></code> </h6>
                                 <h6 class="card-title">Birth Date : <code> <?php echo $feedback['birthdate'] == '1970-01-01' ?  '00-00-0000' : date('d-m-Y',strtotime($feedback['birthdate']));?></code> </h6>
                                 <h6 class="card-title">Anniversary Date : <code> <?php echo $feedback['anniversary_date'] == '1970-01-01' ?  '00-00-0000' : date('d-m-Y',strtotime($feedback['anniversary_date']));?></code> </h6>
                                 <h6 class="card-title">Table : <code> <?php echo $feedback['table_id'];?></code> </h6>
                              </div>
                              <hr>
                              <div class="card-body">
          

                    <div class="row">
                      <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">1. Quality of food  ?</label>
                  <div class="row checkbox-row">
                      
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_1" class="form-check-input-styled-success" <?php if($feedback['question_1'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_1" class="form-check-input-styled-primary" <?php if($feedback['question_1'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_1" class="form-check-input-styled-danger" <?php if($feedback['question_1'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_1" class="form-check-input-styled-danger" <?php if($feedback['question_1'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>

                      
                    
                    
                  </div>
                </div>
              </div>

              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">2. Cleanliness of Restaurant / Rest Room ?</label>
                  <div class="row checkbox-row">
                      
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_2" class="form-check-input-styled-success" <?php if($feedback['question_2'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_2" class="form-check-input-styled-primary" <?php if($feedback['question_2'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_2" class="form-check-input-styled-danger" <?php if($feedback['question_2'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_2" class="form-check-input-styled-danger" <?php if($feedback['question_2'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>

                      
                    
                    
                  </div>
                </div>
              </div>


              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">3. Quality of Service ?</label>
                  <div class="row checkbox-row">
                      
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_3" class="form-check-input-styled-success" <?php if($feedback['question_3'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_3" class="form-check-input-styled-primary" <?php if($feedback['question_3'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_3" class="form-check-input-styled-danger" <?php if($feedback['question_3'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_3" class="form-check-input-styled-danger" <?php if($feedback['question_3'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>
  
                    
                  </div>
                </div>
              </div>


              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">4. Friendliness of Staff ?</label>
                  <div class="row checkbox-row">
                      
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_4" class="form-check-input-styled-success" <?php if($feedback['question_4'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_4" class="form-check-input-styled-primary" <?php if($feedback['question_4'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_4" class="form-check-input-styled-danger" <?php if($feedback['question_4'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_4" class="form-check-input-styled-danger" <?php if($feedback['question_4'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>
                    
                  </div>
                </div>
              </div>


              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">5. Appearance of Staff ?</label>
                  <div class="row checkbox-row">
                      

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_5" class="form-check-input-styled-success" <?php if($feedback['question_5'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_5" class="form-check-input-styled-primary" <?php if($feedback['question_5'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_5" class="form-check-input-styled-danger" <?php if($feedback['question_5'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_5" class="form-check-input-styled-danger" <?php if($feedback['question_5'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>

                    
                    
                  </div>
                </div>
              </div>


              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">6. Please rate your visit on value for the money.</label>
                  <div class="row checkbox-row">
                      
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_6" class="form-check-input-styled-success" <?php if($feedback['question_6'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_6" class="form-check-input-styled-primary" <?php if($feedback['question_6'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_6" class="form-check-input-styled-danger" <?php if($feedback['question_6'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_6" class="form-check-input-styled-danger" <?php if($feedback['question_6'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>

                      
                    
                    
                  </div>
                </div>
              </div>

              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">7. Value of Money ?</label>
                  <div class="row checkbox-row">
                      
                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_7" class="form-check-input-styled-success" <?php if($feedback['question_7'] == 4){ echo 'checked';}?> data-fouc>
                          Execellent
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_7" class="form-check-input-styled-primary" <?php if($feedback['question_7'] == 3){ echo 'checked';}?> data-fouc>
                          Good
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_7" class="form-check-input-styled-danger" <?php if($feedback['question_7'] == 2){ echo 'checked';}?> data-fouc>
                          Average
                        </label>
                      </div>

                      <div class="form-check col-md-3">
                        <label class="form-check-label">
                          <input type="radio" name="question_7" class="form-check-input-styled-danger" <?php if($feedback['question_7'] == 1){ echo 'checked';}?> data-fouc>
                          Poor
                        </label>
                      </div>

                      
                    
                    
                  </div>
                </div>
              </div>

              <div class="col-md-12 question-row">
                <div class="form-group mb-3 mb-md-2">
                  <label class="font-weight-semibold">Comment</label>
                  <div class="row checkbox-row">
                    <textarea class="form-control" readonly><?php echo $feedback['comment']; ?></textarea>
                  </div>
                </div>
              </div>

        
            </div>
            </div>
                           </div>
                           <!-- /colors -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /main charts -->
             <?php }else{ ?>
              <div><h3 class="text-center">No data available</h3></div>
             <?php } ?>
            </div>
            <!-- /content area -->
            <?php $this->load->view('common/footer'); ?>
         </div>
         <!-- /main content -->
      </div>
      <!-- /page content -->
   </body>
   <!-- Mirrored from demo.interface.club/limitless/demo/bs4/Template/layout_1/LTR/default/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2019 06:58:13 GMT -->
</html>
<input type="hidden" name="base_url" value="<?php echo base_url()?>" id="base_url">
<!-- /content area -->