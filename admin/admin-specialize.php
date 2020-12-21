<?php require_once('admin-header.php'); 
	require_once('../php/initialize.php');
	require_once('../php/specializes.php');
    $specializes = get_all();

?>

    <!--Add  specialize modal-->
    <div class="modal fade" id="Specialize" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
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
                        <form action="<?php echo at_root().'php/add_specialize.php' ?>" method="post"  enctype="multipart/form-data" class="row form-register"  style="direction: rtl; text-align: right">
                            <div class="col-12">
                                <label class="col-12">عربي  اسم التخصص
                                    <input type="text" class="form-control mb-3" id="specializeTitle" name="name_ar"
                                           required="required" data-error="برجاء كتابة اسم التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
								 <label class="col-12">اسم التخصص انجليزي
                                    <input type="text" class="form-control mb-3" id="specializeTitle" name="name_en"
                                           required="required" data-error="برجاء كتابة اسم التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control pb-5 col-12 mb-4" type="text" name="description_ar"
                                          placeholder="اكت بالعري ب وصف للتخصص هنا" required="required"
                                          data-error="الوصف مطلوب"  style="font-family: DroidArabicNaskh"></textarea>
                            </div>
							 <div class="col-12">
                                <textarea class="form-control pb-5 col-12 mb-4" type="text" name="description_en"
                                          placeholder="اكتب وصف للتخصص هنا بالانجليزي" required="required"
                                          data-error="الوصف مطلوب"  style="font-family: DroidArabicNaskh"></textarea>
                            </div>
                            <div class="col-3 btn btn-success mb-3" style="position: relative; overflow: hidden; right: 15px; font-size: 15px; padding: 14px 0 14px 0;">
                                اخــتــر صـــورة
                                <input type="file" name="image" >
                            </div>
							<div class="col-12">
                                <label class="col-12">الكلام الخاض بالضورة
                                    <input type="text" class="form-control mb-3" name="image_alt"
                                           required="required" data-error="برجاء كتابة اسم لكتب التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="col-12">اسم لكتب التخصص بالعربي
                                    <input type="text" class="form-control mb-3" id="booksTitle" name="booke_ar"
                                           required="required" data-error="برجاء كتابة اسم لكتب التخصص" style="font-family: DroidArabicNaskh; height: 2.5rem">
                                </label>
                            </div>
							<div class="col-12">
                                <label class="col-12">اسم لكتب التخصص بالانجليزي
                                    <input type="text" class="form-control mb-3" id="booksTitle" name="book_en"
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
    </div>
	
	<!--Edit  specialize modal-->
    <div class="modal fade" id="Specialize" tabindex="-1" role="dialog" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-4">
                <div class="modal-header border-0">
                    <h3 style="font-family: Cairo">تعديل تخصص</h3>
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
                                <button type="submit" class="btn btn-primary">تعديل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
						<?php $i=0; foreach($specializes as $specialize): ?>
                        <tr style="font-family: DroidArabicNaskh; line-height: 1.8rem">
                            <th scope="row"><?php echo ++$i; ?></th>
                            <td><?php echo $specialize['name_ar'] ?></td>
                            <td><?php echo $specialize['description_ar'] ?></td>
                            <td><img src="<?php echo at_public().$specialize['card_image'] ?>" alt="<?php echo $specialize['alt_image'] ?>" class="img-fluid"></td>
                            <td><?php echo $specialize['description_ar'] ?></td>
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
						<?php endforeach ?>
                        
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