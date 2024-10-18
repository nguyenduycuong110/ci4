<?php
$menu = get_menu(['keyword' => 'main-menu','output' => 'array','language' => 'vi']);
?>
<div class="product-page">
    <div class="uk-container uk-container-center">
        <div class="product-detail-page-head mb30 ">
            <div class="breacum">
                <ul class="uk-list uk-clearfix uk-flex">
                    <li><a href="" title="">Trang chủ</a></li>
                    <?php foreach($breadcrumb as $key => $val){ ?>
                    <li><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></li>
                  <?php } ?>
                </ul>
            </div>
        </div>
        <div class="uk-grid uk-grid-medium">
            <div class="uk-width-small-1-1 uk-width-medium-3-4">
                <div class="product-detail-content">
                    <div class="uk-grid uk-grid-medium mb30">
                        <div class="uk-width-small-1-1 uk-width-medium-1-2">
                        <?php if(isset($object['album']) && is_array($object['album']) && count($object['album'])){ ?>
                            <div class="container-gallery">
                                <div class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                    <?php foreach($object['album'] as $key => $val){ ?>
                                        <div class="swiper-slide">
                                            <a class="img-cover img-zoomin" href="<?php echo $val; ?>" data-uk-lightbox="{group:'group-feedback'}" title="Title">
                                                <img src="<?php echo $val; ?>" />
                                            </a>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="swiper-button-next uk-text-center">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                    <div class="swiper-button-prev uk-text-center">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                </div>
                                <div thumbsSlider="" class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                    <?php foreach($object['album'] as $key => $val){ ?>
                                        <div class="swiper-slide">
                                            <div href="" class="img-cover img-zoomin">
                                                <img src="<?php echo $val; ?>" />
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="swiper-button-next uk-text-center">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                    <div class="swiper-button-prev uk-text-center">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="uk-width-small-1-1 uk-width-medium-1-2">
                            <div class="info">
                                <h2 class="title"><span><?php echo $object['title'] ?></span></h2>
                                <div class="product-price">
                                    <!-- Giá: <span class="number"><?php echo ($object['price'] == 0) ? 'Liên Hệ' : number_format($object['price']).' đ'; ?></span> -->
                                </div>
                                <ul class="uk-list prd-excerpt">
                                    <li><span class="label">Giá : </span> <span class="value"><span class="prd-price-new"><?php echo (number_format($object['price']).' đ') ?> </span> (Chưa bao gồm VAT)</span></li>
                                </ul>
                                <div class="uk-flex uk-flex-middle prd-buy">
                                    <span class="label mr10">Chọn số lượng: </span>
                                    <!-- <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input id="qtym" aria-label="quantity" class="input-qty" max="10" min="0" name="" type="number" value="1">
                                        <input class="plus is-form" type="button" value="+">
                                    </div> -->
                                    <input type="number" id="qtym" name="quantity" min="1" max="10">
                                    <span class="status ml10 mb0">Còn hàng</span>
                                </div>
                                <div class="btn-group mt10 mb20">
                                    <a href="tel:<?php echo $general['contact_hotline'] ?>" title="" class="btn-tv">Tư vấn</a>
                                    <!-- <a href="" title="" class="btn-tv add-cart" data-sku="SKU_<?php echo $object['id'] ?>"><i class="fa fa-facebook"></i> Đặt hàng</a> -->
                                    <a class="btn-tv add-cart" href="" title="" data-redirect="1" data-sku="SKU_<?php echo $object['id'] ?>">Đặt mua</a>
                                </div>
                                <div class="prd-branch">
                                    <div class="address">
                                        <span class="label"><i class="fa fa-home"></i> Lạng Sơn: </span>
                                        <?php echo $general['contact_address'] ?>	</div>
                                    <div class="hotline"><b><i class="fa fa-phone"></i> Hotline:</b> <a href="tel: <?php echo $general['contact_hotline'] ?>" title="Hotline"> <?php echo $general['contact_hotline'] ?></a></div>
                                    <div class="timework"><b><i class="fa fa-clock-o"></i> Thời gian:</b> Từ 8h - 22h tất cả các ngày trong tuần</div>
                                </div>
                                <div class="share-box uk-flex uk-flex-middle">
                                    <div class="facebook">
                                    <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2F<?php echo URL_FLUGINFB ?>%2F<?php echo write_url($object['canonical']) ?>&width=450&layout=standard&action=like&size=small&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recomment-product">
                        <ul class="recomment-switcher uk-flex uk-clearfix uk-list mb10" data-uk-switcher="{connect:'#recomment'}">
                            <li ><a href="">Thông tin sản phẩm</a></li>
                            <!-- <li ><a href="">Thông tin bổ sung</a></li> -->
                            <!-- <li ><a href="">Đánh giá (<span class="count">0</span>)</a></li> -->
                        </ul>
                        <ul id="recomment" class="uk-switcher">
                            <li >
                            <?php echo $object['content']; ?>
                            </li>
                            <li></li>
                            <li>
                                <h3 class="title"> Đánh giá</h3>
                                <p class="noreview">Không có đánh giá nào</p>
                                <div class="recomment-box">
                                    <h4 class="title"><span>Hãy là người đầu tiên nhận xét “<?php echo $object['title'] ?>” </span></h4>
                                    <form action="" class="form-recomment">
                                        <div class="form-field">
                                            <label for="">Đánh giá của bạn</label>
                                            <p class="stars"><span>	<a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>
                                            <select name="rating" id="rating" required="" style="display: none;">
                                                <option value="">Xếp hạng…</option>
                                                <option value="5">Rất tốt</option>
                                                <option value="4">Tốt</option>
                                                <option value="3">Trung bình</option>
                                                <option value="2">Không tệ</option>
                                                <option value="1">Rất tệ</option>
                                            </select>
                                        </div>
                                        <div class="form-field mb15">
                                            <label for="">Nhận xét của bạn *</label>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="uk-grid uk-grid-medium mb15">
                                            <div class="uk-widh-small-1-1 uk-width-medium-1-2">
                                                <div class="form-field">
                                                    <label for="">Tên *</label>
                                                    <input id="author" name="author" type="text" value="" size="30" required="">
                                                </div>
                                            </div>
                                            <div class="uk-widh-small-1-1 uk-width-medium-1-2">
                                                <div class="form-field">
                                                    <label for="">Email *</label>
                                                    <input id="email" name="email" type="email" value="" size="30" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="comment-form-cookies uk-flex uk-flex-middle"><input class="checkbox"name="comment-cookies" type="checkbox" value="yes"> <label class="mb0 ml10" for="-comment-cookies">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label></p>
                                        <div class="form-field">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Gửi đi">
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-1-4">
                <aside class="aside">
                    <section class="aside-panel aside-categories">
                        <header class="panel-head">
                            <h3 class="heading"><span>SẢN PHẨM Be Happy</span></h3>
                        </header>
                        <?php if(isset($menu['data'][1]) && is_array($menu['data'][1]) && count($menu['data'][1])){ ?>
                        <?php $menuProduct  =  $menu['data'][1]  ?  $menu['data'][1]  : ''  ?>
                        <?php if(isset($menuProduct['children']) && is_array($menuProduct['children']) && count($menuProduct['children'])){ ?>
                        <section class="panel-body">
                            <ul class="uk-list main-cat">
                                <?php foreach($menuProduct['children'] as $keyChild => $valChild){?>
                                <li><a href="<?php echo write_url($valChild['canonical']) ?>" title="<?php echo $valChild['title'] ?>"><?php echo $valChild['title'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <?php }} ?>
                        <!-- .panel-body -->
                    </section>
                    <section class="aside-panel">
                        <header class="panel-head">
                            <h3 class="heading"><span>Quảng cáo</span></h3>
                        </header>
                        <section class="panel-body">
                            <div class="banner aside-banner img-cover">
                                <a href="" title=""><img src="public/frontend/resources/img/38.jpg" alt="" /></a>
                            </div>
                        </section>
                        <!-- .panel-body -->
                    </section>
                    <section class="aside-panel">
                        <header class="panel-head">
                            <h3 class="heading"><span>Facebook</span></h3>
                        </header>
                        <section class="panel-body">
                            <div>
                                <?php echo $general['social_iframe_fanpage_fb'] ?>
                            </div>
                        </section>
                        <!-- .panel-body -->
                    </section>
                </aside>
            </div>
        </div>
        <?php if(isset($product_general) && is_array($product_general) && count($product_general)){ ?>
        <div class="panel-product">
            <div class="uk-container uk-container-center">
                <div class="panel-head uk-text-center mb30">
                    <h2 class="heading-2"><span>Bạn có thể thích</span></h2>
                </div>
            </div>
            <div class="panel-body">
                <div class="uk-grid uk-grid-medium">
                   <?php foreach($product_general as $key => $val){ ?>
                    <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-5 mb25">
                        <div class="product-item">
                            <div class="thumb"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>" class="image img-cover"><img src="<?php echo $val['image'] ?>" alt="<?php echo $val['title'] ?>"></a></div>
                            <div class="info ">
                                <h3 class="title"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></h3>
                                <div class="btn-contact uk-text-left"><a style="color:red;font-weight:600;" href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>">Giá Bán: <?php echo ($val['price'] == 0) ? 'Liên Hệ' : number_format($val['price']).' đ'; ?></a></div>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
</div>
