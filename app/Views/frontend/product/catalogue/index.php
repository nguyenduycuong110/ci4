<div class="product-page">
    <div class="uk-container uk-container-center">
        <div class="product-page-head mb30 uk-flex uk-flex-middle uk-flex-space-between">
            <div class="breacum">
                <ul class="uk-list uk-clearfix uk-flex">
                    <li><a href="" title="">Trang chủ</a></li>
                    <?php foreach($breadcrumb as $key => $val){ ?>
                    <li><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></li>
                  <?php } ?>
                </ul>
            </div>
            <div class="selective uk-flex uk-flex-middle ">
               <!-- <div class="selective-text mr10">Showing <span class="number">1-24</span> of <span class="count">192</span> result</div>-->
                <form class="ordering" method="get">
                    <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                        <option value="menu_order" selected="selected">Thứ tự mặc định</option>
                        <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                        <option value="rating">Thứ tự theo điểm đánh giá</option>
                        <option value="date">Mới nhất</option>
                        <option value="price">Thứ tự theo giá: thấp đến cao</option>
                        <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                    </select>
                    <input type="hidden" name="paged" value="1">
                </form>
            </div>
        </div>
        <div class="uk-grid uk-grid-medium">
            <div class="uk-width-small-1-1 uk-width-medium-1-4">
                <div class="aside-article">
                    <div class="aside-box mb20">
                        <h4 class="title"><span>Bộ lọc</span></h4>
                        <?php
                           $model = new App\Models\AutoloadModel();
                           $category = $model->_get_where([
                              'select' => 'tb1.id, tb2.title, tb1.image, tb2.canonical',
                              'table' => 'product_catalogue as tb1',
                              'join' => [
                                 ['product_translate as tb2','tb1.id = tb2.objectid','inner']
                              ],
                              'where' => [
                                 'tb1.deleted_at' => 0,
                                 'tb1.level' => 1,
                                 'tb2.module' => 'product_catalogue',
                                 'tb1.level' => 2,
                              ]
                           ], TRUE);
                        ?>
                        <ul class="uk-list uk-clearfix aside-menu">
                           <?php foreach($category as $key => $val){ ?>
                            <li><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></li>
                         <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-small-1-1 uk-width-medium-3-4">
               <?php if(isset($productList) && is_array($productList) && count($productList)){ ?>
                <div class="product-contaier">
                    <div class="uk-grid uk-grid-medium mb20">
                       <?php foreach($productList as $key => $val){ ?>
                        <div class="uk-width-1-2 uk-width-medium-1-4 mb25">
                            <div class="product-item">
                                <div class="thumb"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>" class="image img-cover"><img src="<?php echo $val['image'] ?>" alt="<?php echo $val['title'] ?>"></a></div>
                                <div class="info">
                                    <h3 class="title"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></h3>
                                    <div class="btn-contact" style="color:red;font-weight:600;">Giá Bán: <a style="color:red;font-weight:600;" href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo ($val['price'] == 0) ? 'Liên Hệ' : number_format($val['price']).' đ'; ?></a></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php echo (isset($pagination)) ? $pagination : ''; ?>
                </div>
             <?php } ?>
            </div>
        </div>
    </div>
</div>
