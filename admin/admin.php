<?php 
	require_once('admin-header.php'); 
	require_once('../php/admin.php');
	list($qustion_number,$answers_number,$sheikh_number,$users_number,$specialize_number)=get_staistics();
?>

<div id="main" style="direction: rtl; text-align: right">

    <!--Milestones section-->
    <section id="milestones" class="milestones admin-section"
             style="background: linear-gradient(rgba(225,255,0,0.19), rgba(238,239,232,0)) center fixed">
        <div class="container">

            <div class="section-title">
                <h2>الإحــصــائــيــات</h2>
            </div>

            <div class="row">

                <!--Milestone1-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo at_public()."images/files.svg";?>" alt="questions">
                        </div>
                        <div class="milestone_counter" data-end-value="<?php echo $qustion_number ?>">0</div>
                        <div class="milestone_text">عدد الأسئلة</div>
                    </div>
                </div>

                <!--Milestone2-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo at_public()."images/notepad.svg";?>" alt="answers">
                        </div>
                        <div class="milestone_counter" data-end-value="<?php echo $answers_number ?>">0</div>
                        <div class="milestone_text">عدد الأجوبة</div>
                    </div>
                </div>

                <!--Milestone3-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo at_public()."images/man.svg";?>" alt="admins">
                        </div>
                        <div class="milestone_counter" data-end-value="<?php echo $sheikh_number ?>">0</div>
                        <div class="milestone_text">عدد الشيوخ (المديرين)</div>
                    </div>
                </div>

                <!--Milestone4-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo at_public()."images/user.svg";?>" alt="users">
                        </div>
                        <div class="milestone_counter" data-end-value="<?php echo $users_number ?>">0</div>
                        <div class="milestone_text">عدد المستخدمين</div>
                    </div>
                </div>
				
				<!--Milestone4-->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo at_public()."images/user.svg";?>" alt="users">
                        </div>
                        <div class="milestone_counter" data-end-value="<?php echo $specialize_number ?>">0</div>
                        <div class="milestone_text">عدد التخضاضات</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<?php require_once('admin-footer.php'); ?>