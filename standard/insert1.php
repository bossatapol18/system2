<?php require('inser_sql1.php');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card mt-4">
                <div class="card mt-4">
                    <div class="card-header">
                        <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="">วาระจากที่ประชุม สมอ. </label>
                                    <input type="text" name="standard_meet[]" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="">เลขที่ มอก.*</label>
                                    <input type="text" name="standard_number[]" class="form-control" >
                                </div>
                            </div>

                            <!-- <div class="grid">
                             <?php while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
                            <div><input type="checkbox" id="vehicle2" name="vehicle2 type_id" value="<?=$result['type_id']?>"> <label for="vehicle2"><?=$result['type_name']?></label></div>
                            <?php } ?>
                            </div> -->

                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="">ชื่อมาตรฐาน</label>
                                    <input type="text" name="standard_detail[]" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="">หมายเลข tracking</label>
                                    <input type="text" name="standard_tacking[]" class="form-control" >
                                </div>
                            </div>

                            
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <label for="">หมายเหตุ</label>
                                    <input type="text" name="standard_note[]" class="form-control" >
                                </div>
                            </div>

                            <!-- เพิ่มหลายฟรอ์ม -->
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">กลุ่มผลิตภัณฑ์.</label>
                                            <input type="text" name="group_name[]" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">หน่วยงานที่ทดสอบได้.</label>
                                            <input type="text" name="agency_name[]" class="form-control" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">หน่วยงานที่ขอ</label>
                                            <input type="text" name="department_name[]" class="form-control" >
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">ไฟล์แนบ</label>
                                            <input type="file" name="file" class="form-control" >
                                        </div>
                                    </div>

                            <div class="paste-new-forms"></div>

                            <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Multiple Data</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.main-form').remove();
            });

            $(document).on('click', '.add-more-form', function() {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">กลุ่มผลิตภัณฑ์.</label>\
                                            <input type="text" name="group_name[]" class="form-control" >\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">หน่วยงานที่ทดสอบได้.</label>\
                                            <input type="text" name="agency_name[]" class="form-control" >\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">หน่วยงานที่ขอ</label>\
                                            <input type="text" name="department_name[]" class="form-control" >\
                                        </div>\
                                    </div>\
                                </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>

    </body>

    </html>