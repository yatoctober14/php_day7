<?php require_once('admin-header.php'); ?>

    <!--Add  specialize modal-->
    <div class="modal fade" id="Specialize" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
		<form action="" method="post">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content border-0 p-4">
					<div class="modal-header border-0">
						<h3 style="font-family: Cairo">إضافة تخصص</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"
								style="margin-left: -.5em;">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<hr class="w-25 mt-0">
					<div class="modal-body">
						<div class="login">
							<form action="#" class="row form-register" method="post" style="direction: rtl; text-align: right">
								<div class="col-12">
									<label class="col-12">اسم التخصص
										<input type="text" class="form-control mb-3" id="specializeTitle" name="specializeTitle"
											   required="required" data-error="برجاء كتابة اسم التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
									</label>
								</div>
								<div class="col-12">
									<textarea class="form-control pb-5 col-12 mb-4" type="text"
											  placeholder="اكتب وصف للتخصص هنا" required="required"
											  data-error="الوصف مطلوب"  style="font-family: DroidArabicNaskh"></textarea>
								</div>
								<div class="col-3 btn btn-success mb-3" style="position: relative; overflow: hidden; right: 15px; font-size: 15px; padding: 14px 0 14px 0;">
									اخــتــر صـــورة
									<input type="file" name="file" >
								</div>
								<div class="col-12">
									<label class="col-12">اسم لكتب التخصص
										<input type="text" class="form-control mb-3" id="booksTitle" name="booksTitle"
											   required="required" data-error="برجاء كتابة اسم لكتب التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
									</label>
								</div>
								<div class="col-12 mt-3">
									<button type="submit" class="btn btn-primary">إضافة</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<form>
    </div>
	
	<!--edit  specialize modal-->
    <div class="modal fade" id="Specialize" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
		<form action="" method="post">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content border-0 p-4">
					<div class="modal-header border-0">
						<h3 style="font-family: Cairo">إضافة تخصص</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"
								style="margin-left: -.5em;">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<hr class="w-25 mt-0">
					<div class="modal-body">
						<div class="login">
							<form action="#" class="row form-register" method="post" style="direction: rtl; text-align: right">
								<div class="col-12">
									<label class="col-12">اسم التخصص
										<input type="text" class="form-control mb-3" id="specializeTitle" name="specializeTitle"
											   required="required" data-error="برجاء كتابة اسم التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
									</label>
								</div>
								<div class="col-12">
									<textarea class="form-control pb-5 col-12 mb-4" type="text"
											  placeholder="اكتب وصف للتخصص هنا" required="required"
											  data-error="الوصف مطلوب"  style="font-family: DroidArabicNaskh"></textarea>
								</div>
								<div class="col-3 btn btn-success mb-3" style="position: relative; overflow: hidden; right: 15px; font-size: 15px; padding: 14px 0 14px 0;">
									اخــتــر صـــورة
									<input type="file" name="file" style="position: absolute; opacity: 0;">
								</div>
								<div class="col-12">
									<label class="col-12">اسم لكتب التخصص
										<input type="text" class="form-control mb-3" id="booksTitle" name="booksTitle"
											   required="required" data-error="برجاء كتابة اسم لكتب التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
									</label>
								</div>
								<div class="col-12 mt-3">
									<button type="submit" class="btn btn-primary"> تعديل</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<form>
    </div>



<div id="main" style="direction: rtl; text-align: right">

    <!--Specializes-->
    <section id="specializes" class="admin-section">
        <div class="container">

            <div class="section-title">
                <h2>التــخــصصــات</h2>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped w-100" >
                        <thead>
                        <tr class="text-center" style="color: #303030; font-family: NotoKufiArabic; font-weight: 700">
                            <th class="bg-light" scope="col" style="width: 4%">#</th>
                            <th class="bg-light" scope="col" style="width: 10%">اسم التخصص</th>
                            <th class="bg-light" scope="col" style="width: 23%">الوصف</th>
                            <th class="bg-light" scope="col" style="width: 14%">الصورة</th>
                            <th class="bg-light" scope="col" style="width: 16%">اسم لكتب التخصص</th>
                            <th class="bg-light" scope="col" style="width: 20%">لوحة التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">1</th>
                            <td>العقيدة</td>
                            <td>وصف العقيدة</td>
                            <td><img src="images/aqidah.jpg" alt="aqidah_image" class="img-fluid"></td>
                            <td>اسم لكتب العقيدة</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#Specialize">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">2</th>
                            <td>التفسير</td>
                            <td>وصف التفسير</td>
                            <td><img src="images/aqidah.jpg" alt="aqidah_image" class="img-fluid"></td>
                            <td>اسم لكتب التفسير</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#Specialize">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">3</th>
                            <td>الحديث الشريف</td>
                            <td>وصف الحديث</td>
                            <td><img src="images/aqidah.jpg" alt="aqidah_image" class="img-fluid"></td>
                            <td>اسم لكتب الحديث</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#Specialize">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="button btn btn-danger">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">4</th>
                            <td>الفقه</td>
                            <td>وصف الفقه</td>
                            <td><img src="images/aqidah.jpg" alt="aqidah_image" class="img-fluid"></td>
                            <td>اسم لكتب الفقه</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#Specialize">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">5</th>
                            <td>السيرة النبوية</td>
                            <td>وصف السيرة</td>
                            <td><img src="images/aqidah.jpg" alt="aqidah_image" class="img-fluid"></td>
                            <td>اسم لكتب السيرة</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#Specialize">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row">6</th>
                            <td>التربية الإسلامية</td>
                            <td>وصف التربية الإسلامية</td>
                            <td><img src="images/aqidah.jpg" alt="aqidah_image" class="img-fluid"></td>
                            <td>اسم لكتب التربية الإسلامية</td>
                            <td>
                                <div class="col-12 d-flex text-center border-bottom-0" style="padding-left: 0">
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-info" data-toggle="modal"
                                                data-target="#Specialize">تعديل
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="button btn btn-danger">حذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-primary float-left pl-5 pr-5 mt-3 ml-4" data-toggle="modal"
                    data-target="#Specialize">إضافــــة تخــصص
            </button>
        </div>
    </section>

</div>

<?php require_once('admin-footer.php'); ?>