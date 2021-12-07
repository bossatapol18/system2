<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php include('./include/head.php');?>
<?php include('./css/css.php');?>
<?php include('./connection/connection.php');?>

<body class="font">
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

<?php include('./include/menu.php');?>

    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp " data-wow-delay=".3s">ค้นหาเอกสารที่นี่</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s"></p>
                        </div>
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <div class="search-form wow fadeInUp " data-wow-delay=".3s">
                            <div class="row s-ct">
                                <div class="col-lg-4 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color "></i></label>
                                        <input type="text" name="keyword" id="keyword" placeholder="Product keyword">
                                    </div>
                                </div>
                                
                               
                                <div class="col-lg-2 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Categories Area -->
    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row mg-l-menu2">
                    <div class="col-12 p-0">
                        <div class="category-slider">
                            <!-- Start Single Category -->
                            <a href="?page=dash" class="single-cat">
                                <div class="icon">
                                    <img src="https://th.seaicons.com/wp-content/uploads/2015/06/Home-icon.png" alt="#">
                                </div>
                                <h3>หน้าแรก</h3>

                            <a href="?page=index" class="single-cat">
                                <div class="icon">
                                    <img src="https://studyinter.com/wp-content/uploads/2019/08/3-icon-%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3.png" alt="#">
                                </div>
                                <h3>เอกสารทั้งหมด</h3>
                                

                            <a href="?page=insert" class="single-cat">
                                <div class="icon">
                                    <img src="https://th.seaicons.com/wp-content/uploads/2015/11/document-add-icon.png" alt="#">
                                </div>
                                <h3>เพิ่มเอกสาร</h3>
                                
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="?page=status" class="single-cat">
                                <div class="icon">
                                    <img src="https://cdn.icon-icons.com/icons2/2011/PNG/512/edit_document_file_icon_123491.png" alt="#">
                                </div>
                                <h3>แก้ไขสถานะ</h3>
                                
                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="?page=report" class="single-cat">
                                <div class="icon">
                                    <img src="https://cdn.iconscout.com/icon/free/png-256/report-file-2014973-1700581.png" alt="#">
                                </div>
                                <h3>รายงานเอกสาร</h3>
                                
                            </a>
                            <!-- End Single Category -->
                            
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <?php 
      if (!isset($_GET['page']) && empty($_GET['page'])) {
        include('standard/index.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'index') {
        include('standard/index.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'insert') {
        include('standard/insert.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'status') {
        include('standard/status.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'report') {
        include('standard/report.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'dash') {
        include('dashboard/index.php');
    }
    ?>


<?php include('./include/footer.php');?>

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

   <?php include('./include/script.php');?>
</body>

</html>