
  <div class="container" style="margin-top: 20px; margin-bottom: 20px; box-shadow: 1px 1px 10px #888888;">
            <div id="entryForm">
                <center>

                    <h3>
                        New Employee Registration
                    </h3>
                </center>
                <hr>
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Employee Details">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-folder-open"></i> -->
                                <strong>Employee Details</strong>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Employment  Details">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-pencil"></i> -->
                                <strong>Employment  Details</strong>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Bank Details">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-picture"></i> -->
                                 <strong>Bank Details</strong>

                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Education Qualification Details">
                            <span class="round-tab">
                                <!-- <i class="glyphicon glyphicon-ok"></i> -->
                                 <strong>Education Qualification Details</strong> 
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form method="post" action="#" id="employee_form" enctype="multipart/form-data">
                <div class="container tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                       <!--  <h3>Step 1</h3>
                        <p>This is step 1</p> -->
                        <ul class="list-inline"> 
                             <?php $this->load->view('admin/form/employee_details');?>
                             <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                            
                        <div class="tab-pane" role="tabpanel" id="step2">
                       
                        <ul class="list-inline">

                            <?php $this->load->view('admin/form/employment_details');?>
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        
                        <ul class="list-inline">

                        	<?php $this->load->view('admin/form/bank_details');?>
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <!-- <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p> -->
                        <ul class="list-inline">

                        <?php $this->load->view('admin/form/education_qualification');?>

                        <li><button type="submit" class="btn btn-primary next-step">Submit</button></li> 
                        </ul>           
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>









