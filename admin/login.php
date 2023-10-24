<?php 
    include '../classes/adminlogin.php';
?>
<?php 
    $class = new adminlogin();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $adminUser = $_POST['adminUser'];
        $adminPass = md5($_POST['adminPass']);

        $login_check = $class->login_admin($adminUser, $adminPass);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="https://kit.fontawesome.com/50ac8ce2bb.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
        <!--Begin: Header-->
        <nav class="header">
            <div class="grid">
                <div class="navbar">
                    <a href="index.php" class="header__logo-link">
                        <img src="../assets/img/logo_regis.png" alt="" width="120px" height="80px" class="header__logo-img">
                    </a>
                    <div class="navbar-item">
                            Kênh Người Bán
                    </div>
                </div>
                    <a class="help" href="">Bạn cần giúp đỡ?</a>
            </div>
        </nav>
        <!--End: Header-->

        <!--Begin: Login-->
        <div class="login">
            <div class="login__body">
                <div class="form__body">
                    <div class="form__background"></div>
                    <form action = "login.php" method = "post">
                        <div class="login__form">
                            <div class="header__login">
                                <div class="heading__login">
                                    <div class="name__heading__login">Đăng nhập</div>
                                    <span><?php 

                                        if(isset($login_check)) {
                                            echo $login_check;
                                        }

                                    ?></span>
                                    <div class="login__qr">
                                        <div class="qr">Đăng nhập với mã QR</div>
                                        <a href="" class="qr_code">
                                            <img src="../assets/img/qrcode_shopee.vn.png" alt="" class="logo_qr" width="40px" height="40px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="body__login">
                                <div class=""></div>
                                <div class="login__email">
                                    <div class="login__input">
                                        <input type="text" class="text" placeholder="Email/Số điện thoại/Tên đăng nhập" name="adminUser">
                                    </div>
                                    <div class="distance"></div>
                                </div>
                                <div class="login__password">
                                    <div class="login__input">
                                        <input type="password" class="text" placeholder="Mật khẩu" name="adminPass">
                                    </div>
                                    <div class="distance"></div>
                                </div>
                                <button type = "submit" class="login__button">Đăng nhập</button>
                                <div class="under__button">
                                    <a href="" class="text__under__button">Quên mật khẩu</a>
                                    <a href="" class="text__under__button">Đăng nhập với SMS</a>
                                </div>
                                <div class="cnt-social">
                                    <div class="connect">
                                        <div class="line"></div>
                                        <span class="or">HOẶC</span>
                                        <div class="line"></div>
                                    </div>
                                    <div class="auth-form">
                                        <div class="auth-form__socials">
                                            <button class="btn-icon"><i class="fa-brands fa-google socials__icon"></i>
                                                <span class="social__text">Google</span>
                                            </button>
                                            <button class="btn-icon"><i class="fa-brands fa-facebook socials__icon"></i>
                                                <span class="social__text">Facebook</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__login">
                                <div class="body__footer__login">
                                    <span class="new">Bạn mới biết đến Shopee? </span>
                                    <a href="register.php" class="register">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End: Login-->

        <!--Begin: Footer-->
        <footer class="footer">
            <div class="information">
                <div class="infor__detail">
                    <div class="block">
                        <div class="title__block">CHĂM SÓC KHÁCH HÀNG</div>
                        <ul class="detail__block">
                            <li class="line__block">
                                <span class="name__line">Trung Tâm Trợ Giúp</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Shopee Blog</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Shopee Mall</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Hướng Dẫn Mua Hàng</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Hướng Dẫn Bán Hàng</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Thanh Toán</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Shopee Xu</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Vận Chuyển</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Tra Hàng & Hoàn Tiền</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Chăm Sóc Khách Hàng</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Chính Sách Bảo Hành</span>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <div class="title__block">VỀ SHOPEE</div>
                        <ul class="detail__block">
                            <li class="line__block">
                                <span class="name__line">Giới Thiệu Về Shopee Việt Nam</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Tuyển Dụng</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Điều Khoản Shopee</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Chính Sách Bảo Mật</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Chính Hãng</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Kênh Người Bán</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Flash Sales</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Chương Trình Tiếp Thị Liên Kết Shopee</span>
                            </li>
                            <li class="line__block">
                                <span class="name__line">Liên Hệ Với Truyền Thông</span>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <div class="title__block">THANH TOÁN</div>
                        <ul class="donors_containrt">
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/visa.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/mastercard.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/jcb.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/express.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/coo.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/tragop.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/shopeepay.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/spay.png" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="title__block">ĐƠN VỊ VẬN CHUYỂN</div>
                        <ul class="donors_containrt">
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/xpress.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/ghtk.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/ghn.jpg" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/viettel.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/vnpost.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/jt.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/grab.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/nịna.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/best.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/be.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="../assets/img/ahamove.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <div class="title__block">THEO DÕI CHÚNG TÔI TRÊN</div>
                        <ul class="socials">
                            <li class="sociail__link">
                                <a href="" class="link">
                                    <img src="../assets/img/fb.png" alt="" class="logo">
                                    <span class="name__social">Facebook</span>
                                </a>
                            </li>
                            <li class="sociail__link">
                                <a href="" class="link">
                                    <img src="../assets/img/insta.png" alt="" class="logo">
                                    <span class="name__social">Instagram</span>
                                </a>
                            </li>
                            <li class="sociail__link">
                                <a href="" class="link">
                                    <img src="../assets/img/linkle.png" alt="" class="logo">
                                    <span class="name__social">Linkedln</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <div class="title__block">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</div>
                        <div class="app_block">
                            <a href="">
                                <img src="../assets/img/qr.png" alt="" class="qr__code">
                            </a>
                            <div class="app_container">
                                <a href="" class="app_footer">
                                    <img src="../assets/img/appstore_footer.png" alt="app">
                                </a>
                                <a href="" class="app_footer">
                                    <img src="../assets/img/ggplay_footer.png" alt="app">
                                </a>
                                <a href="" class="app_footer">
                                    <img src="../assets/img/appgallery_footer.png" alt="app">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="national">
                    <div class="rules">© 2023 Shopee. Tất cả các quyền được bảo lưu.
                    </div>
                    <div class="list_countries">
                        <div class="country__area">Quốc gia & Khu vực:</div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Singapore</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Indonexia</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Đài Loan</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Thái Lan</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Malaysia</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Việt Nam</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Philippines</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Brazil</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">México</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Colombia</a>
                        </div>
                        <div class="countries_detail">
                            <a href="" class="name_contry">Chile</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="location">
                <div class="location_body">
                    <div class="list__policy">
                        <div class="policy_detail">
                            <a href="" class="policy_name">CHÍNH SÁCH BẢO MẬT</a>
                        </div>
                        <div class="policy_detail">
                            <a href="" class="policy_name">QUY CHẾ HOẠT ĐỘNG</a>
                        </div>
                        <div class="policy_detail">
                            <a href="" class="policy_name">CHÍNH SÁCH VẬN CHUYỂN</a>
                        </div>
                        <div class="policy_detail">
                            <a href="" class="policy_name">CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</a>
                        </div>
                    </div>
                    <div class="list__certicifate">
                        <a href="" class="certicifate">
                            <img src="../assets/img/bocongthuong.png" alt="" class="photo_certicifate">
                        </a>
                        <a href="" class="certicifate">
                            <img src="../assets/img/bocongthuong.png" alt="" class="photo_certicifate">
                        </a>
                    </div>
                    <div class="company">Công ty TNHH Shopee</div>
                    <div class="address">Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn</div>
                    <div class="manager">Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí - Điện thoại liên hệ: 024 73081221 (ext 4678)</div>
                    <div class="code">Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015</div>
                    <div class="shopee">© 2015 - Bản quyền thuộc về Công ty TNHH Shopee</div>
                </div>
            </div>
        </footer>
        <!--End: Footer-->
    </div>
</body>
</html>