<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'incould/header.html';?>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <?php include 'incould/navbar.html';?>
        <!-- Utilize Mobile Menu Start -->
        <?php include 'incould/sidebar.html';?>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bg="img/bg/14.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">تواصل معنا</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.php"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span> الرئيسية</a></li>
                                    <li>تواصل معنا</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->
        <!-- CONTACT MESSAGE AREA START -->
        <div class="ltn__contact-message-area mb-120 mb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__form-box contact-form-box box-shadow white-bg">
                            <h4 class="title-2">إقتبس</h4>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="name" placeholder="ادخل اسم الاستخدم">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="email" placeholder="ادخل البريد الالكترونى">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>حدد نوع الخدمة</option>
                                                <option>خدمات ماقبل البناء</option>
                                                <option>إدارة الأنشاءات</option>
                                                <option>التصميم والبناء الاقتراضي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" placeholder="ادخل رقم الهاتف">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="message" placeholder="ادخل الرسالة"></textarea>
                                </div>
                                <p><label class="input-info-save mb-0"><input type="checkbox" name="agree">
                                        احفظ اسمي ، بريدي الإلكتروني ، والموقع الإلكتروني في هذا المتصفح لاستخدامها
                                        المرة المقبلة في تعليقي.</label></p>
                                <div class="btn-wrapper mt-0">
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">احصل على
                                        خدمة مجانية</button>
                                </div>
                                <p class="form-messege mb-0 mt-20"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT MESSAGE AREA END -->

        <!-- GOOGLE MAP AREA START -->
        <div class="google-map mb-120">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd"
                width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
        <!-- GOOGLE MAP AREA END -->

        <?php include 'incould/footer.html';?>
    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Contact Form -->
    <script src="js/contact.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>