<!DOCTYPE html>
<html lang="vi">
    <head>
        <?php require('common/head.php') ?>
    </head>
    <body>
        <?php require('common/header.php') ?>
        <div class="homepage">
            <div class="panel-product">
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h2 class="heading-2"><span>Sản phẩm </span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="uk-grid uk-grid-large">
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/granola.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Bánh & Granola</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/spices.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Bột & Gia vị</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/cashew.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Hạt & Ngũ cốc</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/spaguetti.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Gạo & Bún, Phở</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/teapot.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Thiết bị & Đồ gia dụng</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/tea.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Trà & Trà cụ</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/ebook.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Sách & Ebook</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/giftbox.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Set quà tặng</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/cosmetics.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Mỹ phẩm Healthy</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="product-item">
                                    <div class="icon"><a href="" class="image img-cover"><img src="resources/img/more.png" alt=""></a></div>
                                    <div class="info">
                                        <h3 class="title"><a href="" title="">Sản phẩm khác</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-services">
                <?php
                    $owlInit = [
                        'nav' =>  true,
                        'dots' => false,
                        'loop' => true,
                        'margin' => 25,
                        'autoplay' => true,
                        'autoplayTimeout' => 5000,
                        'responsive' => array(
                            0 => array(
                                'items' => 2,
                            ),
                            480 => array(
                                'items' => 3,
                            ),
                            768 => array(
                                'items' => 4,
                            ),
                            960 => array(
                                'items' => 5,
                            ),
                        ),
                    ]; 
                ?>
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h2 class="heading-2"><span>Dịch vụ </span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="owl-slide">
                            <div class="owl-carousel owl-theme" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
                                <div class="services-item uk-text-center">
                                    <h3 class="title"><a href="" title="">Tour trải nghiệm</a></h3>
                                    <div class="btn-more"><a href="" title="">Xem thêm</a></div>
                                </div>
                                <div class="services-item uk-text-center">
                                    <h3 class="title"><a href="" title="">Tư vấn sức khỏe</a></h3>
                                    <div class="btn-more"><a href="" title="">Xem thêm</a></div>
                                </div>
                                <div class="services-item uk-text-center">
                                    <h3 class="title"><a href="" title="">Khóa học</a></h3>
                                    <div class="btn-more"><a href="" title="">Xem thêm</a></div>
                                </div>
                                <div class="services-item uk-text-center">
                                    <h3 class="title"><a href="" title="">Hội chợ</a></h3>
                                    <div class="btn-more"><a href="" title="">Xem thêm</a></div>
                                </div>
                                <div class="services-item uk-text-center">
                                    <h3 class="title"><a href="" title="">Tổ chức sự kiện</a></h3>
                                    <div class="btn-more"><a href="" title="">Xem thêm</a></div>
                                </div>
                                <div class="services-item uk-text-center">
                                    <h3 class="title"><a href="" title="">Tour trải nghiệm</a></h3>
                                    <div class="btn-more"><a href="" title="">Xem thêm</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-shop"  style="background: rgb(230, 247, 214);">
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h2 class="heading-2"><span>Cửa hàng </span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="uk-grid uk-grid-large uk-flex-middle">
                            <div class="uk-width-small-1-1 uk-width-medium-1-2">
                                <div class="info">
                                    <ul class="uk-clearfix uk-list address">
                                        <li>
                                            <h3><span>Miền Bắc</span></h3>
                                            <p>Số 5, Lô Ơ1, Linh Đàm, Quận Hoàng Mai, TP.Hà Nội<br>8:00 – 22:00 Tất cả các ngày trong tuần</p>
                                        </li>
                                        <li>
                                            <h3>Miền Trung</h3>
                                            <p>382 Trần Hưng Đạo, Q.Sơn Trà, TP. Đà Nẵng<br>8:00 – 22:00 Tất cả các ngày trong tuần</p></li>
                                        <li>
                                            <h3>Miền Nam</h3>
                                            <p>Số 15 Đường 7, Khu Dân Cư Cityland, Phường 7, Q. Gò Vấp, TP.HCM<br>8:00 – 22:00 Tất cả các ngày trong tuần</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2">
                                <div class="thumb">
                                    <a href="" title="" class="image img-cover"><img src="resources/img/banner-left.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-news">
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h2 class="heading-2"><span>Kiến thức </span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="uk-grid uk-grid-medium">
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 mb25">
                                <div class="news-item">
                                    <div class="uk-grid uk-grid-medium uk-flex-middle">
                                        <div class="uk-width-small-1-1 uk-width-medium-2-5">
                                            <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/1-1.jpg" alt=""></a></div>
                                        </div>
                                        <div class="uk-width-small-1-1 uk-width-medium-3-5">
                                            <div class="info">
                                                <h3 class="title"><a href="" title="">BEHAPY TRỞ THÀNH CÔNG TY PHÂN PHỐI ĐỘC QUYỀN SẢN PHẨM CANXI HỮU CƠ TỪ VỎ TRỨNG GÀ DDA</a></h3>
                                                <div class="description">Vào ngày 7/12/2022, Behapy đã chính thức ký hợp đồng hợp tác với nhà máy sản xuất để trở thành công ty phân phối độc</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 mb25">
                                <div class="news-item">
                                    <div class="uk-grid uk-grid-medium uk-flex-middle">
                                        <div class="uk-width-small-1-1 uk-width-medium-2-5">
                                            <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/1.jpg" alt=""></a></div>
                                        </div>
                                        <div class="uk-width-small-1-1 uk-width-medium-3-5">
                                            <div class="info">
                                                <h3 class="title"><a href="" title="">Đến với Behapy cùng nhau “kết bè” tạo Phúc</a></h3>
                                                <div class="description">Chào tuần mới Đại gia đình Behapy ạ! Hôm nay, chúng ta hãy cùng nhau chia sẻ câu chuyện cùng với chị Trinh Trần –</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 ">
                                <div class="news-item">
                                    <div class="uk-grid uk-grid-medium uk-flex-middle">
                                        <div class="uk-width-small-1-1 uk-width-medium-2-5">
                                            <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/f4aa2819906f4931107e.jpg" alt=""></a></div>
                                        </div>
                                        <div class="uk-width-small-1-1 uk-width-medium-3-5">
                                            <div class="info">
                                                <h3 class="title"><a href="" title="">Công dụng trà cà gai leo: Giải độc và hạ men gan</a></h3>
                                                <div class="description">Cây cà gai leo  Cà gai leo hay còn được gọi là cà gai dây, cà vạnh, cà lù, cà bò, có tên khoa học</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-small-1-1 uk-width-medium-1-2 ">
                                <div class="news-item">
                                    <div class="uk-grid uk-grid-medium uk-flex-middle">
                                        <div class="uk-width-small-1-1 uk-width-medium-2-5">
                                            <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/316826981_188996870313715_2593199169312184914_n.jpg" alt=""></a></div>
                                        </div>
                                        <div class="uk-width-small-1-1 uk-width-medium-3-5">
                                            <div class="info">
                                                <h3 class="title"><a href="" title="">Dẫn đầu xu hướng healthy food tại Bắc Ninh – 2 Trùm healthy phân phối vài tấn hàng mỗi tháng</a></h3>
                                                <div class="description">Chào tuần mới Đại gia đình Behapy ạ! Hôm nay, chúng ta hãy cùng nhau chia sẻ câu chuyện nhân duyên của chị 2 “Trùm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-partner">
                <?php
                    $owlInit = [
                        'nav' =>  true,
                        'dots' => false,
                        'loop' => true,
                        'margin' => 25,
                        'autoplay' => true,
                        'autoplayTimeout' => 5000,
                        'responsive' => array(
                            0 => array(
                                'items' => 2,
                            ),
                            480 => array(
                                'items' => 3,
                            ),
                            768 => array(
                                'items' => 4,
                            ),
                            960 => array(
                                'items' => 5,
                            ),
                        ),
                    ]; 
                ?>
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h2 class="heading-2"><span>Đối tác </span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="owl-slide">
                            <div class="owl-carousel owl-theme" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
                                <div class="partner-item">
                                    <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/dt-1.png" alt=""></a></div>
                                </div>
                                <div class="partner-item">
                                    <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/dt-2.png" alt=""></a></div>
                                </div>
                                <div class="partner-item">
                                    <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/dt-3.png" alt=""></a></div>
                                </div>
                                <div class="partner-item">
                                    <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/dt-4.png" alt=""></a></div>
                                </div>
                                <div class="partner-item">
                                    <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/dt-5.png" alt=""></a></div>
                                </div>
                                <div class="partner-item">
                                    <div class="thumb"><a href="" title="" class="image img-cover"><img src="resources/img/dt-1.png" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-social">
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h2 class="heading-2"><span>Mạng xã hội </span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="uk-grid uk-grid-medium">
                            <div class="uk-width-1-2 mb25">
                                <div class="social-item" style="background: #0072bc;">
                                    <img src="resources/img/facebook.png">
                                    Facebook
                                </div>
                            </div>
                            <div class="uk-width-1-2 mb25">
                                <div class="social-item" style="background: #c70000;">
                                    <img src="resources/img/youtube.png">
                                    youtube
                                </div>
                            </div>
                            <div class="uk-width-1-2">
                                <div class="social-item" style="background: linear-gradient(to right,#7502c2,#ff8a00);">
                                    <img src="resources/img/instagram.png">
                                    instagram
                                </div>
                            </div>
                            <div class="uk-width-1-2">
                                <div class="social-item" style="background: #000;">
                                    <img src="resources/img/tiktok.png">
                                    tiktok
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-advise" style="background: rgb(230, 247, 214);">
                <div class="uk-container uk-container-center">
                    <div class="panel-head uk-text-center mb30">
                        <h3 class="heading-3"><span>ĐĂNG KÝ TƯ VẤN </span></h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-advise" action="">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 mb15">
                                    <div class="form-field">
                                        <input type="text" name="full-name" value="" size="40"  aria-required="true" aria-invalid="false" placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 mb15">
                                    <div class="form-field">
                                        <input type="tel" name="full-phone" value="" size="40"  aria-required="true" aria-invalid="false" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 mb15">
                                    <div class="form-field">
                                        <input type="email" name="full-email" value="" size="40"  aria-required="true" aria-invalid="false" placeholder="Email của bạn">
                                    </div>
                                </div>
                                <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 mb15">
                                    <div class="form-field">
                                        <input type="submit" value="Đăng ký" class="input-submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php require('common/footer.php') ?>
        <?php require('common/script.php') ?>
    </body>

</html>
