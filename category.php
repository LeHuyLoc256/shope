<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Danh mục sản phẩm</title>
        <link rel="stylesheet" href="assets/css/base2.css">
        <link rel="stylesheet" href="../Font/fontawesome-free-6.4.0-web/css/all.min.css">
        <link rel="stylesheet" href="assets/css/category.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="./assets/css/base.css">
        <link rel="stylesheet" href="./assets/css/main.css">
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
                                <a href="register.php" class="header__noti-footer-link">Đăng ký</a>
                                <a href="login.php" class="header__noti-footer-link">Đăng nhập</a>
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
                    <a href="register.php" class="header_navbar-link">
                        <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate">Đăng ký</li>
                    </a>
                    <a href="login.php" class="header_navbar-link">
                        <li class="header__navbar-item header__navbar-item--bold">Đăng nhập</li>
                    </a>
                    

                    <!-- <li class="header__navbar-item header__navbar-user">
                        <img src="./assets/img/FB_IMG_1641292095227.jpg" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name">Quân Lê</span>

                        <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Địa chỉ của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đơn mua</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đăng xuất</a>
                                </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
            
            <!-- header with search -->
            <div class="header-with-search">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <svg viewBox="0 0 192 65" class="header__logo-img">
                            <g fill-rule="evenodd">
                                <path fill="#fff" d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="header__search">
                    <div class="header__search-input-wrap">
                        <input type="text" class="header__search-input" placeholder="Đăng ký và nhận voucher bạn mới đến 70k!">

                        <!-- search history -->
                        <div class="header__search-history">
                            <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                            <ul class="header__search-history-list">
                                <li class="header__search-history-item">
                                    <a href="">Đăng ký và nhận voucher bạn mới đến 70k!</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">Đăng ký và nhận voucher bạn mới đến 70k!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="header__search-btn">
                        <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                    <!-- <div class="header__search-list-wrap">
                        <ul class="header__search-list">
                            <li class="header__search-items">Lightstick Blackpink</li>
                            <li class="header__search-items">Điện Thoại 1k</li>
                            <li class="header__search-items">Dép</li>
                            <li class="header__search-items">Đồ 1k Free Ship Áo</li>
                            <li class="header__search-items">Đồ 1k Free Ship</li>
                            <li class="header__search-items">Iphone 14 Pro Max</li>
                            <li class="header__search-items">Tai Nghe</li>
                            <li class="header__search-items">Váy</li>
                            <li class="header__search-items">Set Đồ Nữ</li>
                            <li class="header__search-items">Áo Phông</li>
                            <li class="header__search-items">Giày</li>
                        </ul>
                    </div> -->
                </div>

                <!-- cart -->
                <div class="header__cart">
                    <div class="header__cart-wrap">
                        <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                        <!-- <span class="header__cart-notice">3</span> -->
                        <!-- No Cart: header__cart-list--no-cart -->
                        <div class="header__cart-list header__cart-list--no-cart">
                            <img src="./assets/img/nothing-cart.png" alt="" class="header__cart-no-cart-img">
                            <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>

                            <!-- <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-item"> -->
                                <!-- cart item -->
                                <!-- <li class="header__cart-item">
                                    <img src="https://down-vn.img.susercontent.com/file/48d957afe39444611bacc9c357a3d672" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Ly Uống Nước Thủy Tinh Hai Lớp</h5>
                                            <div class="header__cart-item-wrap">
                                                <span class="header__cart-item-price">2.000.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__cart-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-descrpition">
                                                Phân loại: Bạc
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a> -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </header>

        <div class="DM">
            <div class="grid">
                <div class="grid__row app-content" >

                <div class="grid-column-full"> 
                    <div class="home-fullbanner" style="margin-bottom: 30px">
                        <img src="./assets/img/Img-DM/Banner-top-7.png" alt="">
                    </div>

                <div class="home-product__bg">
                    <div class="home-product-brand-all__link">
                        <span class="home-product-brand-all__link-title">SHOPPE MALL</span>
                        <span class="home-product-brand-all__link-title">Xem tất cả</span>
                    </div>

                    
                    <div class="home-product">
                        <div class="grid__row">
                                <!-- Các brand lớn trong mall -->
                                <div class="grid__column-2">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-1__200x112.5.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-2.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-3.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-4.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-5.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-6.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-7.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-8.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-8.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2 grid-column-item-brand">
                                <a href="" class="home-product-item">
                                    <img src="./assets/img/Img-DM/Brands/Brand-10.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2">
                                <a href="" class="home-product-item grid-column-item-brand">
                                    <img src="./assets/img/Img-DM/Brands/Brand-11.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                                <div class="grid__column-2">
                                <a href="" class="home-product-item grid-column-item-brand">
                                    <img src="./assets/img/Img-DM/Brands/Brand-12.jpg" alt="" class="home-product-item-brands-mall__img">  
                                </a>
                                </div>
                               
                                
                                
                            </div>
                        </div>
                    
                
                    <div class="home-product-viral__link">
                        <span class="home-product-viral__link-title">SIÊU SHOP THỊNH HÀNH - BUNG DEAL SIÊU PHẨM</span>
                    </div>

                    
                        <div class="home-product">
                            <div class="grid__row grid-item-viral">
                                    <!-- Các brand lớn trong mall -->
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items home-product-item-mall ">
                                        <img src="./assets/img/Img-DM/Service/1__185x185.png" alt="" class="home-product-item-viral__img"> <br>
                                        <div class="home-product-item-category1">FREE SHIP & HOÀN XU...</div><br>
                                        <div class="home-product-item-category2"><span style="color: #F5F5F5; margin-right: 5px;">Từ</span>đ1500</div>
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items home-product-item-mall ">
                                        <img src="./assets/img/Img-DM/Service/1__185x185.png" alt="" class="home-product-item-viral__img">  <br>
                                        <div class="home-product-item-category1">SHOP XU HƯỚNG</div><br>
                                        <div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ12000</div>
                                    </a>
                                    </div> 
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items home-product-item-mall ">
                                        <img src="./assets/img/Img-DM/Service/1__185x185.png" alt="" class="home-product-item-viral__img"><br>
                                        <div class="home-product-item-category1">HÀNG QUỐC TẾ</div><br>
                                        <div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ5000</div>  
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items home-product-item-mall ">
                                        <img src="./assets/img/Img-DM/Service/1__185x185.png" alt="" class="home-product-item-viral__img"><br>  
                                        <div class="home-product-item-category1">SHOPEE MALL </div><br>
                                        <div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ3000</div>
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items home-product-item-mall ">
                                        <img src="./assets/img/Img-DM/Service/1__185x185.png" alt="" class="home-product-item-viral__img"> <br> 
                                        <div class="home-product-item-category1">SHOP XU HƯỚNG</div><br>
                                        <div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ4000</div>
                                    </a>
                                    </div>
 
                            </div>
                        </div>
                </div>               
                <div class="home-product__bg">
                    <div class="home-product-viral__link">
                        <span class="home-product-viral__link-title">SIÊU SHOP THỊNH HÀNH - BUNG DEAL SIÊU PHẨM</span>
                    </div>

                        <div class="home-product">
                            <div class="grid__row grid-item-viral">
                                    <!-- 5 sản phẩm hot -->
                                    <div class="grid__column-2-4 ">
                                    <a href="" class="home-product-items grid-column-item">
                                        <img src="./assets/img/Img-DM/Cloth/1__184x186.jpg" alt="" class="home-product-item-viral__img">
                                        <li><div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ50.000</div></li>
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items">
                                        <img src="./assets/img/Img-DM/Cloth/2.jpg" alt="" class="home-product-item-viral__img"> <br>
                                        <li><div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ40.000</div></li>
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items">
                                        <img src="./assets/img/Img-DM/Cloth/3.jpg" alt="" class="home-product-item-viral__img"><br>  
                                         <li><div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ60.000</div></li>
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items">
                                        <img src="./assets/img/Img-DM/Cloth/4.png" alt="" class="home-product-item-viral__img"><br>  
                                         <li><div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ20.000</div></li>
                                    </a>
                                    </div>
                                    <div class="grid__column-2-4 grid-column-item">
                                    <a href="" class="home-product-items">
                                        <img src="./assets/img/Img-DM/Cloth/5.jpg" alt="" class="home-product-item-viral__img"><br>  
                                         <li><div class="home-product-item-category2"><span style="color: #F5F5F5;margin-right: 5px;">Từ</span>đ35.000</div></li>
                                    </a>
                                    </div>
 
                            </div>
                        </div>
                </div>   
                </div>            

                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fas fa-list"></i>
                                Tất Cả Danh Mục
                            </h3>
                            
                            <ul class="category-list">
                                <li class="category-item category-item--active"><a href="#" class="category-item__link">Thời Trang Nam</a></li>
                                <li class="category-item"><a href="#" class="category-item__link">Áo Khoác</a></li>
                                <li class="category-item"><a href="#" class="category-item__link">Áo Vest và Blazer</a></li>
                                <li class="category-item"><a href="#" class="category-item__link">Áo Hoodie, Áo Len & Áo Nỉ</a></li>
                                <li class="category-item"><a href="#" class="category-item__link">Quần Jeans</a></li>
                                <li class="category-item"><a href="#" class="category-item__link">Quần Dài/ Quần Âu</a></li>
                                <li class="category-item"><a href="#" class="category-item__link-add">Thêm <i class="fas fa-angle-down"></i></a></li>
                            </ul>
                            <ul class="category-list fiter">
                                <h3 class="category__heading" style="border:none">
                                    <i class="category__heading-icon fa-solid fa-filter"></i>
                                    BỘ LỌC TÌM KIẾM
                                </h3>
                                <li class="category-item title">Theo Danh Mục</li>
                                <li class="category-item"><span class="category-item__link-bottom"> <input type="checkbox" id="">Áo Thun (782k+)</span></li>
                                <li class="category-item"><span class="category-item__link-bottom"> <input type="checkbox" id="">Áo sơ mi (177k+)</span></li>
                                <li class="category-item"><span class="category-item__link-bottom"> <input type="checkbox" id="">Áo khoác (171k+) </span></li>
                                <li class="category-item"><span class="category-item__link-bottom"> <input type="checkbox" id="">Phụ kiện thời trang (141k+)</span></li>
                                <li class="category-item"><a class="category-item__link-adds">Thêm <i class="fas fa-angle-down"></i></a></li>
                            </ul>

                            <ul class="category-list shop">
                                <li class="category-item title">Nơi Bán</li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox"  id=""> TP. Hồ Chí Minh</span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox"  id=""> Hà Nội</span</li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox"  id=""> Thái Nguyên</span</li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox"  id=""> Vĩnh Phúc</span></li>
                                <li class="category-item"><a href="#" class="category-item__link-adds">Thêm <i class="fas fa-angle-down"></i></a></li>
                            </ul>

                            <ul class="category-list ship">
                                <li class="category-item title">Đơn Vị Vận Chuyển</li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-ship" id=""> Hỏa Tốc</span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-ship" id=""> Nhanh </span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-ship" id=""> Tiết kiệm </span></li>
                            </ul>

                            <ul class="category-list brands">
                                <li class="category-item title">Thương Hiệu</li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-man-cloth-brand" id=""> THE BAD GOD</span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-man-cloth-brand" id=""> COOLMATE </span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-man-cloth-brand" id=""> SENIM</span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"> <input type="checkbox" name="category-item-man-cloth-brand" id=""> ROWAY </span></li>
                                <li class="category-item"><a href="#" class="category-item__link-adds">Thêm <i class="fas fa-angle-down"></i></a></li>
                            </ul>
                             
                            <li class="category-item title" style="list-style: none;">Khoảng giá</li>

                            <div class="category-list-price-range">
                               
                                <input type="text" maxlength="13" class="category-price-range-filter__input" placeholder="₫ TỪ" value="">
                                <div class="category-price-range-filter__range-line"></div>
                                <input type="text" maxlength="13" class="category-price-range-filter__input" placeholder="₫ ĐẾN" value="">
                            </div>
                            <div class="category-list-price-range">
                                <button class="category-list-price-range-submit">ÁP DỤNG</button>
                            </div>
                            
                                

                            <ul class="category-list shop-review">
                                <li class="category-item title">Loại Shop</li>
                                <li class="category-item"> <span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Shopee Mall </span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Shop Yêu thích </span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Shop Yêu Thích + </span></li>
                            </ul>
                            <ul class="category-list status">
                                <li class="category-item title">Tình Trạng</li>
                                <li class="category-item"> <span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Đã sử dụng </span></li>
                                <li class="category-item"> <span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Mới </span></li>
                            
                            <ul class="category-list pay">
                                <li class="category-item title">Các lựa chọn thanh toán</li>
                                <li class="category-item"> <span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> 0% TRẢ GÓP </span></li>
                            </ul>

                            <ul class="category-list rate" >
                                <li class="category-item title">Đánh Giá</li>
                                <span class="star-gold category-item__link-bottom" style="font-size: 1.1rem;">
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    
                                </span><br>
                                <span class="star-gold category-item__link-bottom">
                                    <i class="home-product-item__rating--gold fa-solid fa-star" ></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-regular fa-star"></i>
                                    <span style="margin-top: 0px; font-size: 1.3rem;">trở lên</span>
                                </span>  <br>
                                <span class="star-gold category-item__link-bottom">
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-regular fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-regular fa-star"></i>
                                    <span style="margin-top: 0px; font-size: 1.3rem;">trở lên</span>
                                </span> <br>
                                <span class="star-gold category-item__link-bottom">
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-regular fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-regular fa-star"></i>
                                    <i class="home-product-item__rating--gold fa-regular fa-star"></i>
                                    <span style="margin-top: 0px; font-size: 1.3rem;">trở lên</span>
                                </span><br>
                                <li class="category-item"><a class="category-item__link-adds" style="margin-left: -5px;">Thêm <i class="fas fa-angle-down"></i></a></li>
                            </ul>

                            <ul class="category-list service">
                                <li class="category-item title">Dịch Vụ & Khuyến Mãi</li>
                                <li class="category-item"><span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Vouvher Xtra </span></li>
                                <li class="category-item"><span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Đang giảm giá  </span></li>
                                <li class="category-item"><span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Gì cũng rẻ  </span></li>
                                <li class="category-item"><span class="category-item__link-bottom"><input type="checkbox" name="category-item" id=""> Hàng có sẵn </span></li>
                                <li class="category-item"><a href="#" class="category-item__link-adds">Thêm <i class="fas fa-angle-down"></i></a></li>
                         
                            </ul>

                            <div class="category-list delete-all-filter">
                                <button class="title">XÓA TẤT CẢ</button>
                            </div>
                        </nav>
                    </div>
                    <div class="grid__column-10">   
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn-dm btn--primary">Phổ biến</button>
                            <button class="home-filter__btn btn-dm ">Mới nhất</button>
                            <button class="home-filter__btn btn-dm">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-angle-down"></i> 
                                
                                <!-- List option-->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="#" class="select-input__link">Giá: Thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="#" class="select-input__link">Giá: Cao đến thấp</a>
                                    </li>
                                   
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/9
                                </span>

                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="grid__row">
                                <!-- ROW 1-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_1__188x188.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 1-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_2.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 1-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_3.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 1-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_4.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 1-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_5.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 2-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_6.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 2-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_7.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 2-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_8.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 2-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro_9.png);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 2-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_10.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 3-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_11.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 3-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_12.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 3-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_13.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 3-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_14.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 3-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_15.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 4-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_16.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 4-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_17.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 4-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro-18.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 4-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_19.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 4-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 1-20/Pro_20.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 5-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-21.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 5-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-22.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 5-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-23.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 5-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-24.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 5-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-25.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 6-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-26.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 6-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-27.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 6-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-28.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 6-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-29.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 6-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-30.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 7-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-31.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 7-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-32.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 7-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-33.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 7-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-34.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 7-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-35.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 8-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-36.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 8-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-37.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 8-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-38.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 8-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-39.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 8-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 21-40/Pro-40.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 9-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-41.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 9-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-42.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 9-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-43.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 9-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-44.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 9-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-45.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 10-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-46.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 10-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-47.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 10-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-48.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 10-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-49.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 10-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-50.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 11-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-51.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 11-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-52.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 11-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-53.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 11-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-54.png);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 11-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-55.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 12-1 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-56.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 12-2-->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-57.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 12-3 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-58.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 12-4 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-59.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                                <!-- ROW 12-5 -->
                                <div class="grid__column-2-4">
                                    <a href="" class="home-product-item-link">
                                        <div class="home-product-item" >
                                            <div class="home-product-item__img" style="background-image:url(./assets/img/Img-DM/Pro\ 41-\ 60/Pro-60.jpg);">
                                            <h4 class="home-product-item__name">Trời mùa đông em có mặc áo ấm mặc không ấm không lấy tiền</h4>
                                            <div class="home-product-item__tag">
                                                <span class="home-product-item__tag-red">#Shopdacbiet</span>
                                        <span class="home-product-item__tag-red">Mua Kèm Deal Sốc</span>
                                            </div> 
                                        <span class="home-product-item__price-old">1.200.000đ</span>   
                                        <span class="home-product-item__price-current">900.000đ</span>  
                                            </div>
                                        <div class="home-product-item__active">
                                            <div class="home-product-item___rating">
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-solid fa-star"></i>
                                                <i class="home-product-item__rating--gold fa-regular fa-star-half-stroke"></i>
                                            </div>
                                            <span class="home-product-item__sold">Đã bán 11,1k</span>
                                        </div>
                                      
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item-city">Hà Nội</span>
                                        </div>  
                                        <div class="home-product-item__favorite">
                                            <i class="fa-solid fa-check"></i>
                                            Yêu thích
                                        </div>  
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                            <span class="home-product-item-promote"><img src="./assets/img/Img-DM/7.7 Freeship Gì cx rẻ Đồng kiểm.png" alt=""></span>
                                        </div>
                                    </a>
                                    
                                   
                                </div>
                            </div>
                        </div>

                        <div class="home-product-organize">
                            <i class="home-organize__icon home-organize__number fas fa-angle-left"></i>
                            <span class="home-organize__number home-organize__number-color">1</span>
                            <span class="home-organize__number">2</span>
                            <span class="home-organize__number">3</span>
                            <span class="home-organize__number">4</span>
                            <span class="home-organize__number">5</span>
                            <span class="home-organize__number">...</span>
                            <i class="home-organize__icon home-organize__number fas fa-angle-right"></i>
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
    </body>
</html>