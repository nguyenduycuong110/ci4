<div class="article-detail-page">
    <div class="uk-container uk-container-center">
      <div class="uk-grid uk-grid-medium">
           <div class="uk-width-small-1-1 uk-width-medium-3-4">
                <div class="article-container">
                    <div class="article-box mb30">
                       <h1 class="heading-1"><?php echo $object['title'] ?></h1>
                       <article>
                           <?php echo $object['description'] ?>

                           <?php echo $object['content']; ?>

                       </article>
                    </div>
                    <div class="article-comment">
                       <h5 class="title"><span>Trả lời </span></h5>
                       <p class="description">Email của bạn sẽ không được hiển thị công khai. Các trường bắt buộc được đánh dấu *</p>
                       <form action="" class="form-comment">
                           <div class="form-field mb15">
                                <label for="">Bình luận</label>
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                           </div>
                           <div class="uk-grid uk-grid-medium mb15">
                                <div class="uk-width-small-1-1 uk-width-medium-1-3">
                                    <div class="form-field">
                                        <label for="">Tên *</label>
                                        <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                                    </div>
                                </div>
                                <div class="uk-width-small-1-1 uk-width-medium-1-3">
                                    <div class="form-field">
                                        <label for="">Email *</label>
                                        <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                                    </div>
                                </div>
                                <div class="uk-width-small-1-1 uk-width-medium-1-3">
                                    <div class="form-field">
                                        <label for="">Trang web</label>
                                        <input id="url" name="url" type="url" value="" size="30" maxlength="200">
                                    </div>
                                </div>
                           </div>
                           <div class="form-field mb15 uk-flex uk-flex-middle">
                                <input class="checkbox" name="cookies-checkbox" type="checkbox" value="yes">
                                <label class="mb0" for="">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label>
                           </div>
                           <div class="form-field">
                                <input name="submit" type="submit" id="submit" class="submit" value="Phản hồi">
                           </div>
                       </form>
                    </div>
                </div>
           </div>
           <div class="uk-width-small-1-1 uk-width-medium-1-4">
                <div class="aside-article">
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
                           'tb2.module' => 'product_catalogue'
                        ]
                    ], TRUE);
                 ?>
                    <div class="aside-article">
                        <div class="aside-box mb20">
                           <h4 class="title"><span>Bộ lọc</span></h4>
                           <ul class="uk-list uk-clearfix aside-menu">
                              <?php foreach($category as $key => $val){ ?>
                                <li><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></li>
                             <?php } ?>
                           </ul>
                        </div>
                    </div>
                </div>
           </div>
      </div>
    </div>
</div>
