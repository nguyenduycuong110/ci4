<div class="services-page">
    <div class="uk-container uk-container-center">
      <div class="uk-grid uk-grid-medium">
           <div class="uk-width-small-1-1 uk-width-medium-3-4">
             <?php if(isset($articleList) && is_array($articleList) && count($articleList)){ ?>
                <div class="services-contaier">
                    <div class="uk-grid uk-grid-medium mb20">
                       <?php foreach($articleList as $key => $val){ ?>
                       <div class="uk-width-small-1-2 uk-width-medium-1-3">
                           <div class="services-news-item">
                                <div class="thumb"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>" class="image img-cover"><img src="<?php echo $val['image'] ?>" alt="<?php echo $val['title'] ?>"></a></div>
                                <div class="info">
                                    <h3 class="title"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></h3>
                                    <div class="description"><?php echo cutnchar( strip_tags(base64_decode($val['description'])) , 250); ?></div>
                                </div>
                           </div>
                       </div>
                        <?php } ?>
                    </div>
                   <?php echo (isset($pagination)) ? $pagination  : ' '; ?>
                </div>
                <?php } ?>
           </div>
           <div class="uk-width-small-1-1 uk-width-medium-1-4">
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
                      'tb1.level' => 2
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
