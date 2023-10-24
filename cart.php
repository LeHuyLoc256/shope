<?php
ob_start();
include 'lib/session.php'; 
Session::init();
include_once 'lib/database.php';
include_once 'helpers/format.php';
spl_autoload_register(function($class){ 
include_once "classes/" .$class. ".php";
});
$db = new Database();
$fm = new Format();
$us = new user();
$ct = new cart();
$cat = new category();
$product = new product();
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/giohang.css">
    <link rel="stylesheet" href="assets/css/base_cart.css">
    <link href="admin/assets/css/basic.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="assets/css/base2.css" rel="stylesheet" />
    <link href="admin/assets/css/custom.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/50ac8ce2bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="grid">
            <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li class="header__navbar-item header__navbar-item--separate">Kênh Người Bán</li>
                <li class="header__navbar-item header__navbar-item--separate">Trở Thành Người Bán Shopee</li>
                

                    <!-- header qr code -->
                    
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                        Tải ứng dụng
                        <div class="header__qr">
                        <img src="./assets/img/qr_code.png" alt="QR code" class="header__qr-img">
                        <div class="header__qr-apps">
                            <a href="" class="header__qr-link">
                                <img src="./assets/img/ggplay.png" alt="Google Play" class="header__qr-download-img">
                            </a>
                            <a href="" class="header__qr-link">
                                <img src="./assets/img/appstore.png" alt="Appstore" class="header__qr-download-img">
                            </a>
                            <a href="" class="header__qr-link">
                                <img src="./assets/img/appgalery.png" alt="Appgalery" class="header__qr-download-img">
                            </a>
                        </div>
                    </div>
                    
                    
                </li>
                <li class="header__navbar-item">
                    <span class="header__navbar-item--no-pointer">Kết nối</span>
                    <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-brands fa-facebook"></i></a>
                    <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-brands fa-instagram"></i></a>
                </li>
            </ul>

            <ul class="header__navbar-list">
                <div class="header__navbar-item-wrap">
                    <li class="header__navbar-item header__navbar-item--has-noti">
                    <a href="" class="header__navbar-item-link">
                        <i class="header__navbar-icon fa-regular fa-bell"></i>
                        Thông báo
                    </a>
                    <div class="header__noti">
                        <header class="header__noti-header">
                            <img src="./assets/img/icon_noti.png" alt="" class="header__noti-img">
                            <h3>Đăng nhập để xem Thông báo</h3>
                        </header>
                        <footer class="header__noti-footer">
                            <a href="register.html" class="header__noti-footer-link">Đăng ký</a>
                            <a href="login.html" class="header__noti-footer-link">Đăng nhập</a>
                        </footer>
                    </div>
                </li>
                </div>
                
                <li class="header__navbar-item">
                    <a href="" class="header__navbar-item-link">
                        <i class="header__navbar-icon fa-regular fa-circle-question"></i>
                        Hỗ trợ
                    </a>
                </li>
                <li class="header__navbar-item">
                    <div class="header__navbar-item-wrap">
                        <div class="header__navbar-select header__navbar-select-has-select">
                        <i class="header__navbar-icon fa-solid fa-globe"></i>
                        Tiếng Việt
                    <i class="header__navbar-icon fa-solid fa-chevron-down"></i>

                    <ul class="header__navbar-option">
                        <li class="header__navbar-option-item">Tiếng Việt</li>
                        <li class="header__navbar-option-item">English</li>
                    </ul>
                        </div>
                    </div>
                </li>
                <a href="register.html" class="header_navbar-link">
                    <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate">Đăng ký</li>
                </a>
                <a href="login.html" class="header_navbar-link">
                    <li class="header__navbar-item header__navbar-item--bold">Đăng nhập</li>
                </a>
            </ul>
            </nav>
        </div>
    </header>

    <div class="cart">
        <div class="cart_header">
            <div class="cart_container">
                <div class="cart_page_header">
                    <a href="/" class="cart_logo">
                        <img src="assets/img/cart/logo_regis.png" alt="" width="120px" height="80px">
                        <div class="cart_page_name">Giỏ hàng</div>
                    </a>
                </div>
                <div class="header__search">
                    <div class="header__search-input-wrap">
                        <input type="text" class="header__search-input" placeholder="">
                    </div>
                    <button class="header__search-btn">
                        <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php 

    if (isset($_GET['cartId'])) {
        $cartid = $_GET['cartId'];
        $delcart = $ct->del_product_cart($cartid);  
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        if (isset($_POST['cartId'], $_POST['quantity'])) {
            $cartId = $_POST['cartId'];
            $quantity = $_POST['quantity'];
            $update_quantity_cart = $ct->update_quantity_cart($quantity, $cartId);
        } else {
            // Handle the case where cartId or quantity is not set in the form
            // You might want to display an error message or perform other error handling.
        }
    }


?>

    <div class="main">
            <h1 class="page-subhead-line">
            </h1>
                
                            <?php 
                            if(isset($update_quantity_cart)){
                                echo $update_quantity_cart;
                            }
                            ?>
                            <?php 
                            if(isset($delcart)){
                                echo $delcart;
                            }
                            ?>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th width="20%">Product Name</th>
                                    <th width="10%">Image</th>
                                    <th width="15%">Price</th>
                                    <th width="25%">Quantity</th>
                                    <th width="20%">Total Price</th>
                                    <th width="10%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $get_product_cart = $ct->get_product_cart();
                                            if ($get_product_cart) {
                                                $subtotal = 0;
                                                while($result = $get_product_cart->fetch_assoc()){
                                        ?>
                                        <tr>
                                        <td><?php echo $result['productName'] ?></td>
                                        <td><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" style="width: 60px; height:60px"/></td>
                                        <td>đ<?php echo $result['price'] ?></td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="cartId" value="<?php echo $result['cartId'] ?>"/>
                                                <input type="number" name="quantity" value="<?php echo $result['quantity'] ?>" min="1"/>
                                                <input type="submit" name="submit" value="Update"/>
                                            </form>
                                        </td>
                                        <td>đ<?php 
                                        $total = $result['price']*$result['quantity'];
                                        echo $total;
                                         ?></td>
                                        <td><a href="?cartId=<?php echo $result['cartId']?>">Xóa</a></td>
						            	</tr>
                                 
                                        <?php 
                                         $subtotal +=$total; 
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <table style="float:right;text-align:left;" width="30%">
                                    <tr>
                                        <th>Tổng thanh toán : </th>
                                        <td>đ<?php 
                                        echo $subtotal;
                                        Session::set('sum', $subtotal);
                                        ?></td>
                                    </tr>
							
					            </table>
                                <br><br><br>
                                <input  style="margin-right:5%; padding: 0 60px 0 60px; float: right"  type="submit" class="product-btn-buy-now"  name = "submit" value="Mua Hàng" >
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
             </div>
    </div>

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
                                <img src="assets/img/cart/visa.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/mastercard.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/jcb.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/express.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/coo.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/tragop.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/shopeepay.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/spay.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="title__block">ĐƠN VỊ VẬN CHUYỂN</div>
                    <ul class="donors_containrt">
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/xpress.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/ghtk.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/ghn.jpg" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/viettel.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/vnpost.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/jt.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/grab.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/nịna.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/best.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/be.png" alt="">
                            </a>
                        </li>
                        <li class="donor_detail">
                            <a href="" class="donor_name">
                                <img src="assets/img/cart/ahamove.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block">
                    <div class="title__block">THEO DÕI CHÚNG TÔI TRÊN</div>
                    <ul class="socials">
                        <li class="sociail__link">
                            <a href="" class="link">
                                <img src="assets/img/cart/fb.png" alt="" class="logo">
                                <span class="name__social">Facebook</span>
                            </a>
                        </li>
                        <li class="sociail__link">
                            <a href="" class="link">
                                <img src="assets/img/cart/insta.png" alt="" class="logo">
                                <span class="name__social">Instagram</span>
                            </a>
                        </li>
                        <li class="sociail__link">
                            <a href="" class="link">
                                <img src="assets/img/cart/linkle.png" alt="" class="logo">
                                <span class="name__social">Linkedln</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block">
                    <div class="title__block">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</div>
                    <div class="app_block">
                        <a href="">
                            <img src="assets/img/cart/qr.png" alt="" class="qr__code">
                        </a>
                        <div class="app_container">
                            <a href="" class="app">
                                <img src="assets/img/cart/appstore.png" alt="app">
                            </a>
                            <a href="" class="app">
                                <img src="assets/img/cart/ggplay.png" alt="app">
                            </a>
                            <a href="" class="app">
                                <img src="assets/img/cart/appgallery.png" alt="app">
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
                        <img src="assets/img/cart/bocongthuong.png" alt="" class="photo_certicifate">
                    </a>
                    <a href="" class="certicifate">
                        <img src="assets/img/cart/bocongthuong.png" alt="" class="photo_certicifate">
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
</body>
</html>