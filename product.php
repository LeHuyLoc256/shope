<?php
include 'inc/header.php';
?>
<?php 

    if (!isset($_GET['proid']) || $_GET['proid'] == NULL) {
        echo "<script>window.location = '404.php'</script>";
    } else {
        $id = $_GET['proid'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            $AddtoCart = $ct->add_to_cart($quantity, $id);
        } else {
            // Xử lý trường hợp không có quantity được gửi.
            // Có thể thông báo lỗi hoặc thực hiện các hành động khác theo ý của bạn.
        }
    }
?>
         <div class="container">
             <?php
             $get_product_detail = $product->get_details($id);
             if($get_product_detail){
                 while($result_details = $get_product_detail->fetch_assoc()){
             ?>
            <div class="page-product-breadcumb">
                <a href="index.php" class="breadcumb-link">Shopee</a>
                <i class="fa-sharp fa-solid fa-angle-right icon-angle-right-product"></i>
                <a href="" class="breadcumb-link">Thời Trang Nam</a>
                <i class="fa-sharp fa-solid fa-angle-right icon-angle-right-product"></i>
                <a href="" class="breadcumb-link">Đồ Bộ</a>
                <i class="fa-sharp fa-solid fa-angle-right icon-angle-right-product"></i>
                <span class="breadcumb-text">
                    <?php echo $result_details['productName']?>
                </span>
            </div>

            <div class="page-product-container">
                <div class="page-product-container-left">
                    <div class="flex flex-column">
                        <div class="page-product-container-left-up">
                            <div class="product-img-main-cover">
                                <div class="product-img-main" >
                                <img src="admin/uploads/<?php echo $result_details['image']?>" style="width: 450px; height:450px"  >
                                    <!-- <div class="product-img"></div> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="page-product-container-left-down">
                            <div class="page-product-container-left-down-item">
                                <div class="product-item-cover">
                                    <div class="product-img-sub">
                                        <div class="product-img-sub-background-img" style="background-image: url(./assets/img/product_1.jfif);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-product-container-left-down-item">
                                <div class="product-item-cover">
                                    <div class="product-img-sub">
                                        <div class="product-img-sub-background-img" style="background-image: url(./assets/img/product_2.jfif);"></div>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="page-product-container-left-down-item">
                                <div class="product-item-cover">
                                    <div class="product-img-sub">
                                        <div class="product-img-sub-background-img" style="background-image: url(./assets/img/product_3.jfif);"></div>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="page-product-container-left-down-item">
                                <div class="product-item-cover">
                                    <div class="product-img-sub">
                                        <div class="product-img-sub-background-img" style="background-image: url(./assets/img/product_4.jfif);"></div>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="page-product-container-left-down-item">
                                <div class="product-item-cover">
                                    <div class="product-img-sub">
                                        <div class="product-img-sub-background-img" style="background-image: url(./assets/img/product_5.jfif);"></div>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="flex justify-center items-center" style="margin-top: 15px;">
                        <div class="flex items-center product-share-icons">
                            <div class="product-share-text">
                                Chia sẻ:
                            </div>
                            <button class="product-sharing product-sharing-fm btn-sharing"></button>
                            <button class="product-sharing product-sharing-fb btn-sharing"></button>
                            <button class="product-sharing product-sharing-pinterest btn-sharing"></button>
                            <button class="product-sharing product-sharing-twitter btn-sharing"></button>
                        </div>
                        <div class="flex items-center product-liked">
                            <button class="product-like-btn">
                                <i class="fa-regular fa-heart product-heart"></i>
                                <div class="product-text-liked">Đã thích(12,5k)</div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="page-product-container-right flex flex-auto">
                    <div class="flex-auto flex-column page-product-container-right-box">
                        <div class="product-box-header">
                            <span><?php echo $result_details['productName']?></span>
                        </div>
                        <div class="product-box-rate flex">
                            <div class="product-box-rate-star flex">
                                <div class="product-box-rate-star-number">4.9</div>
                                <div class="product-box-rate-star-quantity">
                                    <div class="shopee-rating-stars">
                                        <div class="shopee-rating-stars__stars">
                                            <div class="shopee-rating-stars__stars-wrapper">
                                                <div class="shopee-rating-stars__lit"></div>
                                                <i class="fa-regular fa-star product-icon-rating"></i>
                                            </div>
                                            <div class="shopee-rating-stars__stars-wrapper">
                                                <div class="shopee-rating-stars__lit"></div>
                                                <i class="fa-regular fa-star product-icon-rating"></i>
                                            </div>
                                            <div class="shopee-rating-stars__stars-wrapper">
                                                <div class="shopee-rating-stars__lit"></div>
                                                <i class="fa-regular fa-star product-icon-rating"></i>
                                            </div>
                                            <div class="shopee-rating-stars__stars-wrapper">
                                                <div class="shopee-rating-stars__lit"></div>
                                                <i class="fa-regular fa-star product-icon-rating"></i>
                                            </div>
                                            <div class="shopee-rating-stars__stars-wrapper">
                                                <div class="shopee-rating-stars__lit"></div>
                                                <i class="fa-regular fa-star product-icon-rating"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-box-rate-judge flex">
                                <div class="product-box-rate-judge-number">28,6k</div>
                                <div class="product-box-rate-judge-text">đánh giá</div>
                            </div>
                            <div class="product-box-rate-sold flex">
                                <div class="product-box-rate-sold-number">84k</div>
                                <div class="product-box-rate-sold-text">đã bán</div>
                            </div>
                            <button class="accuse-btn">Tố cáo</button>
                        </div>
                        <div class="product-box-price">
                            <div class="flex flex-column">
                                <div class="flex flex-column product-price-content">
                                    <div class="flex items-center">
                                        <div class="flex items-center product-price-items">
                                            <div class="product-price-old">đ300.000</div>
                                            <div class="flex items-center">
                                                <div class="product-price-new">đ<?php echo $result_details['price']?></div>
                                                <div class="product-percent-sale">45% giảm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-box-classify">
                            <div class="flex flex-column">
                                <div class="product-box-classify-voucher">
                                    <div class="mini-vouchers">
                                        <div class="mini-vouchers__label">Mã giảm giá của shop</div>
                                        <div class="mini-vouchers__wrapper flex flex-auto flex-no-overflow">
                                            <div class="mini-vouchers_vouchers flex flex-auto flex-no-overflow">
                                                <div class="voucher-ticket">
                                                    <span class="voucher-promo-value--percent">10%</span>
                                                    <span class="voucher-promo-label--off">giảm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box-classify-items flex">
                                    <label class="product__label">Deal sốc</label>
                                    <div class="product-deal__label-desc">Mua Kèm Deal Sốc</div>
                                </div>
                                <div class="product-box-classify-items flex">
                                    <label for="" class="product__label">Bảo Hiểm</label>
                                    <div class="flex items-center">
                                        <span class="product-insurance">Bảo hiểm Thời trang</span>
                                        <div class="product__new">Mới</div>
                                        <a href="" class="product__learn-about">Tìm hiểu thêm</a>
                                    </div>
                                </div>
                                <div class="product-box-classify-items flex product-delivery">
                                    <label for="" class="product__label">Vận Chuyển</label>
                                    <div class="product-delivery__container">
                                        <div class="flex"></div>
                                        <div class="product-delivery__container-list">
                                            <img src="./assets/img/free-ship.png" alt="" class="product-delivery-img">
                                            <div class="product-delivery--cover-free-ship">
                                                <div class="product-delivery--text">Miễn phí vận chuyển</div>
                                            </div>
                                            <div class="product-delivery-icon-truck">
                                                <i class="fa-solid fa-truck icon-truck"></i>
                                            </div>
                                            <div class="product-delivery-address flex flex-column">
                                                <div class="product-delivery-address-to-cover flex items-center">
                                                    <div class="product-delivery-address-to-text">Vận chuyển tới</div>
                                                    <div class="product-delivery-address-to flex items-center">
                                                        <div class="flex items-center">
                                                            <span class="product-delivery-address">Phường Tràng Tiền, Quận Hoàng Kiếm</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-delivery-fee">
                                                    <div class="product-delivery-fee-text">phí vận chuyển</div>
                                                    <div class="product-delivery-fee-price">đ0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box-classify-items product-sample flex">
                                    <div class="flex flex-column">
                                        <div class="flex items-center" style="margin-bottom: 8px; align-items: baseline;">
                                            <label for="" class="product__label">Màu</label>
                                            <div class="flex items-center btn-select-container">
                                                <button class="product-variation">BTT17 TRẮNG ĐEN</button>
                                                <button class="product-variation">BTT18 XANH THAN</button>
                                                <button class="product-variation">BTT19 GHI XÁM</button>
                                                <button class="product-variation">BTT20 NÂU SỮA</button>
                                                <button class="product-variation">BTT82 XANH DƯƠNG</button>
                                                <button class="product-variation">BTT116 NÂU BÒ</button>
                                                <button class="product-variation">BTT117 XANH MINT</button>
                                            </div>
                                        </div>
                                        <div class="flex items-center" style="margin-bottom: 8px; align-items: baseline;">
                                            <label for="" class="product__label">Size</label>
                                            <div class="flex items-center btn-select-container">
                                                <button class="product-variation">M</button>
                                                <button class="product-variation">L</button>
                                                <button class="product-variation">XL</button>
                                                <button class="product-variation">XXL</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <label for="" class="product__label"></label>
                                            <div class="product__size-chart">bảng quy đổi kích cỡ</div>
                                        </div>
                                        <div class="flex items-center product__quantity">
                                            <label for="" class="product__label">Số lượng</label>
                                            <div class="flex items-center">
                                                <div style="margin-right: 15px;">
                                                    <div class="shopee-input-quantity">
                                                        <button class="product-sign">
                                                            <i class="fa-solid fa-plus"></i>
                                                            <form action="" method="post">
                                                        </button>
                                                        <input type="number" class="product-quantity-value-now product-sign" name="quantity" value="1" min="1">
                                                        <button class="product-sign">
                                                            <!-- </form> -->
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="available-product">223 sản phẩm có sẵn</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div style="margin-top: 15px;">
                            <div class="product-btn-buy-container">
                            <form action="" method="post">
                                <div class="product-btn-buy-items">
                                    
                                    <!-- <button class="product-btn-add-cart" name="">
                                        <i class="fa-sharp fa-solid fa-cart-plus product-icon-add-cart"></i>
                                        <span class="product-btn-add-cart-text">Thêm vào giỏ hàng</span>
                                    </button> -->
                                    <!-- <button class="product-btn-buy-now" name = "submit">Mua ngay</button> -->
                                    <input type="submit" class="product-btn-buy-now"  name = "submit" value="Mua ngay" >
                                </div>
                                </form>
                                <?php 
                                echo '<br>';
                                if(isset($AddtoCart)){
                                    echo '<span style="color:red; font-size:18px;">Đã thêm vào giỏ hàng</span>';
                                }
                                ?>
                            </div>
                        </div>
                        <div style="margin-top: 30px; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                            <div class="product-title-commit--cover">
                                <div class="product__title-commit">
                                    <img src="./assets/img/icon_trahang.png" alt="" class="product__title-commit-icon">
                                    7 Ngày Miễn Phí Trả Hàng
                                </div>
                                <div class="product__title-commit">
                                    <img src="./assets/img/icon_chinhhang.png" alt="" class="product__title-commit-icon">
                                    Hàng Chính Hãng 100%
                                </div>
                                <div class="product__title-commit">
                                    <img src="./assets/img/icon_vanchuyen.png" alt="" class="product__title-commit-icon">
                                    Miễn Phí Vận Chuyển
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-product-shop-container">
                <div class="page-product-shop">
                    <div class="product-info-shop">
                        <a href="" class="shopee-avatar">
                            <div class="shopee-avatar-cover">
                                <img src="./assets/img/shopee-avatar.jfif" alt="" class="shopee-avatar-img">
                            </div>
                            <div class="shopee-mall-cover">
                                <div class="official-shop-new-badge">
                                    <img src="./assets/img/product-shopee-mall.png" alt="" class="shopee-mall-img">
                                </div>
                            </div>
                        </a>
                        <div class="product-shop-contact-container">
                            <div class="shopee-name">sp.btw2</div>
                            <div class="shopee-online">50 phút trước</div>
                            <div class="contact-shop-btn-container">
                                <button class="shopee-chat-now">
                                    <i class="fa-regular fa-message shopee-chat-now-icon"></i>
                                    <span class="shopee-chat-now-text">Chat ngay</span>
                                </button>
                                <a href="" class="shopee-view-shop">
                                    <i class="fa-solid fa-shop shopee-view-shop-icon"></i>
                                    <span class="shopee-view-shop-text">Xem shop</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-reputation-shop">
                        <div class="product-reputation-shop-items">
                            <label class="product-reputation-shop-items-text">Đánh Giá</label>
                            <span class="product-reputation-shop-items-desc">416,3k</span>
                        </div>
                        <div class="product-reputation-shop-items">
                            <label class="product-reputation-shop-items-text">Tỉ Lệ Phản Hồi</label>
                            <span class="product-reputation-shop-items-desc">99%</span>
                        </div>
                        <div class="product-reputation-shop-items">
                            <label class="product-reputation-shop-items-text">tham gia</label>
                            <span class="product-reputation-shop-items-desc">6 năm trước</span>
                        </div>
                        <div class="product-reputation-shop-items">
                            <label class="product-reputation-shop-items-text">sản phẩm</label>
                            <span class="product-reputation-shop-items-desc">198</span>
                        </div>
                        <div class="product-reputation-shop-items">
                            <label class="product-reputation-shop-items-text">thời gian phản hồi</label>
                            <span class="product-reputation-shop-items-desc">trong vài giờ</span>
                        </div>
                        <div class="product-reputation-shop-items">
                            <label class="product-reputation-shop-items-text">người theo dõi</label>
                            <span class="product-reputation-shop-items-desc">1,1tr</span>
                        </div>
                    </div>
                </div>
                <div class="body__content">
                    <div class="product__content">
                        <div class="product__content_left">
                            <div class="product__detail">
                                <div class="product__detail__block">
                                    <div class="title__product">CHI TIẾT SẢN PHẨM</div>
                                    <div class="product__infomation">
                                        <div class="product__detailinfo">
                                            <label for="" class="name1">Danh mục</label>
                                            <div class="detail__name1">
                                                <a href="" class="link_name1">Shopee</a>
                                                <i class="fa-solid fa-angle-right icon"></i>
                                                <a href="" class="link_name1">Thời Trang Nam</a>
                                                <i class="fa-solid fa-angle-right icon"></i>
                                                <a href="" class="link_name1">Đồ Bộ</a>
                                            </div>
                                        </div>
                                        <div class="product__detailinfo">
                                            <label for="" class="name1">Thương hiệu</label>
                                            <a href="" class="link_name1">AVIANO</a>
                                        </div>
                                        <div class="product__detailinfo">
                                            <label for="" class="name2">Xuất xứ</label>
                                            <div class="name3">Việt Nam</div>
                                        </div>
                                        <div class="product__detailinfo">
                                            <label for="" class="name2">Mẫu</label>
                                            <div class="name3">Trơn</div>
                                        </div>
                                        <div class="product__detailinfo">
                                            <label for="" class="name2">Số lượng hàng khuyến mãi</label>
                                            <div class="name3">270</div>
                                        </div>
                                        <div class="product__detailinfo">
                                            <label for="" class="name2">Số sản phẩm còn lại</label>
                                            <div class="name3">265715</div>
                                        </div>
                                        <div class="product__detailinfo">
                                            <label for="" class="name2">Gửi từ</label>
                                            <div class="name3">Hà Nội</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__detail__block">
                                    <div class="describe__product">MÔ TẢ SẢN PHẨM</div>
                                    <div class="describe__container">
                                        <div class="body__container">
                                            <p class="describe__detail">Bộ Đồ Nam AVIANO Cổ Tròn Tay Ngắn, Bộ Thể Thao Nam Chất Liệu Poly Coolmax Thấm Hút Mồ Hôi</p>
                                            <p class="describe__detail">.</p>
                                            <p class="describe__detail">🔰 Thông tin sản phẩm Bộ Đồ Nam Cổ Tròn Tay Ngắn AVIANO, Bộ Thể Thao Nam Chất Liệu Poly Coolmax</p>
                                            <p class="describe__detail">.</p>
                                            <p class="describe__detail">🎗 Chất liệu: Poly Coolmax</p>
                                            <p class="describe__detail">🎗 Màu sắc: Đen - Xanh than - Xám - Be - Xanh dương</p>
                                            <p class="describe__detail">🎗 Thương hiệu: AVIANO</p>
                                            <p class="describe__detail">🎗 Xuất xứ: Việt Nam</p>
                                            <p class="describe__detail">🎗Size: M - L- XL - XXL.</p>
                                            <p class="describe__detail">.</p>
                                            <p class="describe__detail">🔰Mô tả chi tiết sản phẩm Bộ Đồ Nam Cổ Tròn Tay Ngắn AVIANO, Bộ Thể Thao Nam Chất Liệu Poly Coolmax</p>
                                            <p class="describe__detail">.</p>
                                            <p class="describe__detail">👉Bộ đồ nam được làm từ chất liệu vải Poly Coolmax sợi Poly kết hợp sợi Spandex giúp bạn thoải mái trong mọi hoạt động</p>
                                            <p class="describe__detail">👉Kết hợp được đa dạng phong cách có thể mặc nhà, dạo phố hay chơi thể thao</p>
                                            <p class="describe__detail">👉Màu sắc bộ đồ nam đa dạng, basic phù hợp với nhiều lứa tuổi</p>
                                            <p class="describe__detail">👉 Đường may tinh tế, tỉ mỉ trong từng chi tiết</p>
                                            <p class="describe__detail">.</p>
                                            <p class="describe__detail">🔰 Hướng dẫn cách đặt hàng Bộ Đồ Nam Cổ Tròn Tay Ngắn AVIANO, Bộ Thể Thao Nam Chất Liệu Poly Coolmax</p>
                                            <p class="describe__detail"><div class=""></div></p>
                                            <p class="describe__detail">⏩ Cách chọn size: Shop có bảng size mẫu. Bạn NÊN INBOX, cung cấp chiều cao, cân nặng để SHOP TƯ VẤN SIZE</p>
                                            <p class="describe__detail">⏩ Mã sản phẩm đã có trong ảnh</p>
                                            <p class="describe__detail">⏩ Cách đặt hàng: Nếu bạn muốn mua 2 sản phẩm khác nhau hoặc 2 size khác nhau, để được freeship</p>
                                            <p class="describe__detail">- Bạn chọn từng sản phẩm rồi thêm vào giỏ hàng</p>
                                            <p class="describe__detail">- Khi giỏ hàng đã có đầy đủ các sản phẩm cần mua, bạn mới tiến hành ấn nút “ Thanh toán”</p>
                                            <p class="describe__detail">⏩ Shop luôn sẵn sàng trả lời inbox để tư vấn</p>
                                            <div class="product__photo__container">
                                                <div class="anh1">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh1.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh2">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh2.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh2">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh3.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh2">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anbh4.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh2">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh5.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh2">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh6.jfif" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh2">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh7.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__photo__container">
                                                <div class="anh3">
                                                    <div class="photo_product">
                                                        <img src="./assets/img/anh8.jpg" alt="" class="photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="describe__detail">#bo #quan #ao #mua #he #nam #bo #the #thao #AVIANO #boquanao #bothethao #bodonam #donam #quanaobonam #thoitrangnam #thethaonam #boquanaonammuahe #setdonam #dothethao #boquanaonam #bothehaonam #setdoNam #dothethaonam #Quanaobonammuahe#aothethaonam #bonam #bodonamthethao #Bonammuahe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div style="display: contents;">
                                    <div class="ratings">
                                        <div class="rating__header">
                                            <div class="rating__heading">ĐÁNH GIÁ SẢN PHẨM</div>
                                        </div>
                                        <div class="rating__overview">
                                            <div class="rating__overview__general">
                                                <div class="rating__overview__score">
                                                    <span class="score__rating">5</span>
                                                    <span class="score__full">trên 5</span>
                                                </div>
                                                <div class="rating__overview__star">
                                                    <div class="star__full">
                                                        <div class="star__wrapper">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="star__wrapper">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="star__wrapper">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="star__wrapper">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <div class="star__wrapper">
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating__overview__container">
                                                <div class="rating__overview__block">Tất cả</div>
                                                <div class="rating__overview__block">5 Sao</div>
                                                <div class="rating__overview__block">4 Sao</div>
                                                <div class="rating__overview__block">3 Sao</div>
                                                <div class="rating__overview__block">2 Sao</div>
                                                <div class="rating__overview__block">1 Sao</div>
                                                <div class="rating__overview__block">Có Bình Luận</div>
                                                <div class="rating__overview__block">Có Hình Ảnh/Video</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__content_right">
                            <div class="" style="display: contents;"></div>
                            <div class="product__hot-sales">
                                <div class="product__hot-sales__header">Top sản phẩm bán chạy</div>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="card__product__hot-sales">
                                    <div class="items__card__product">
                                        <div class="items__card__img">
                                            <div class="items__card__img-photo">
                                                <div class="img"></div>
                                            </div>
                                        </div>
                                        <div class="items__card__info">
                                            <div class="items__card__name">Áo Thun Thể Thao Nam Công Nghệ Dri-Air Siêu Mát AVIANO, Thiết Kế Sọc Vai, Áo Thun Nam Thoáng Khí, Thoải Mái Vận Động</div>
                                            <div class="items__card__price">
                                                <div class="price">₫129.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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
                                    <img src="./assets/img/visa.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/mastercard.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/jcb.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/express.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/coo.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/tragop.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/shopeepay.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/spay.png" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="title__block">ĐƠN VỊ VẬN CHUYỂN</div>
                        <ul class="donors_containrt">
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/xpress.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/ghtk.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/ghn.jpg" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/viettel.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/vnpost.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/jt.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/grab.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/nịna.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/best.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/be.png" alt="">
                                </a>
                            </li>
                            <li class="donor_detail">
                                <a href="" class="donor_name">
                                    <img src="./assets/img/ahamove.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <div class="title__block">THEO DÕI CHÚNG TÔI TRÊN</div>
                        <ul class="socials">
                            <li class="sociail__link">
                                <a href="" class="link">
                                    <img src="./assets/img/fb.png" alt="" class="logo">
                                    <span class="name__social">Facebook</span>
                                </a>
                            </li>
                            <li class="sociail__link">
                                <a href="" class="link">
                                    <img src="./assets/img/insta.png" alt="" class="logo">
                                    <span class="name__social">Instagram</span>
                                </a>
                            </li>
                            <li class="sociail__link">
                                <a href="" class="link">
                                    <img src="./assets/img/linkle.png" alt="" class="logo">
                                    <span class="name__social">Linkedln</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="block">
                        <div class="title__block">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</div>
                        <div class="app_block">
                            <a href="">
                                <img src="./assets/img/qr.png" alt="" class="qr__code">
                            </a>
                            <div class="app_container">
                                <a href="" class="app_footer">
                                    <img src="./assets/img/appstore_footer.png" alt="app">
                                </a>
                                <a href="" class="app_footer">
                                    <img src="./assets/img/ggplay_footer.png" alt="app">
                                </a>
                                <a href="" class="app_footer">
                                    <img src="./assets/img/appgallery_footer.png" alt="app">
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
                            <img src="./assets/img/bocongthuong.png" alt="" class="photo_certicifate">
                        </a>
                        <a href="" class="certicifate">
                            <img src="./assets/img/bocongthuong.png" alt="" class="photo_certicifate">
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
    </div>
</body>
</html>
<?php
        }
    }
            ?>
 <?php 
        ob_end_flush();
        ?>