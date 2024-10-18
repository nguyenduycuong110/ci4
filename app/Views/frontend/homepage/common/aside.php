<?php
	helper(['mydatafrontend','mydata']);
	$baseController = new App\Controllers\FrontendController();
    $language = $baseController->currentLanguage();
    $panel = get_panel([
		'locate' => 'sidebar',
		'language' => $language
	]);
	$slide = get_slide([
        'keyword' => 'aside',
        'language' => $language,
        'output' => 'array'
    ]);
?>

<aside class="aside">
	<?php
     $model = new App\Models\AutoloadModel();
     $category = $model->_get_where([
        'select' => 'tb1.id, tb2.title, tb2.canonical, tb1.icon, tb1.parentid',
        'table' => 'product_catalogue as tb1',
        'join' => [
           ['product_translate as tb2','tb1.id = tb2.objectid','inner']
        ],
        'where' => [
           'tb1.publish' => 1,
           'tb1.deleted_at' => 0,
           'tb2.module' => 'product_catalogue',
           'tb1.level' => 2,
        ],
        'order_by' => 'order desc, id desc',
     ], TRUE);
     $category = recursive($category);
  ?>
  <?php if(isset($category) && is_array($category) && count($category)){ ?>
  <?php foreach($category as $key => $val){ ?>

  <div class="aside-category aside-panel mb30">
     <div class="aside-heading"><?php echo $val['title'] ?>
     </div>
     <?php if(isset($val['children']) && is_array($val['children']) && count($val['children'])){ ?>
     <ul class="uk-list uk-clearfix">
        <?php foreach($val['children'] as $keyItem => $valItem){ ?>
        <li class="uk-flex uk-flex-middle uk-position-relative">
           <span class="icon"><img src="<?php echo (!empty($valItem['icon'])) ? $valItem['icon'] : 'public/frontend/resources/img/vong.png'; ?>" alt=""></span>
           <a href="<?php echo write_url($valItem['canonical']); ?>" title="<?php echo $valItem['title'] ?>"><?php echo $valItem['title'] ?></a>
           <?php if(isset($valItem['children']) && is_array($valItem['children']) && count($valItem['children'])){ ?>

           <ul class="uk-list uk-clearfix sub-category">
            <?php foreach($valItem['children'] as $keyS => $valS){ ?>
               <li><a href="<?php echo write_url($valS['canonical']) ?>" title="<?php echo $valS['title'] ?>"><?php echo $valS['title'] ?></a></li>
               <?php } ?>

           </ul>
           <?php } ?>

        </li>
        <?php } ?>
     </ul>
     <?php } ?>
  </div>
  <?php }} ?>

  <div class="aside-banner aside-panel mb30">
     <img src="public/frontend/resources/img/aside-banner.png" alt="banner">
     <div class="support-content">
        <div class="text">Hotline 24/7:</div>
        <div class="phone"><?php echo $general['contact_hotline'] ?></div>
     </div>
  </div>
  <?php
     $panel = get_panel([
        'locate' => 'home',
        'language' => 'vi'
     ]);
       foreach ($panel as $key => $value) {
        $panel[$value['keyword']] = $value;
     }

     $bestseller = $panel['bestseller']['data'];
  ?>
  <div class="aside-bestseller aside-panel">
     <div class="aside-heading">Sản phẩm Hot</div>
     <?php if(isset($bestseller) && is_array($bestseller) && count($bestseller)){ ?>
     <ul class="uk-list uk-clearfix">
        <?php foreach($bestseller as $key => $val){ ?>
        <li class="mb15">
           <div class="bestseller-item uk-clearfix">
              <a href="<?php echo write_url($val['canonical']) ?>" class="image img-cover"><img src="<?php echo $val['image'] ?>" alt="<?php echo $val['title'] ?>"></a>
              <div class="info">
                 <div class="name"><a href="<?php echo write_url($val['canonical']) ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a></div>
                 <div class="star">
                    <span><img src="public/frontend/resources/img/star.png" alt=""></span>
                    <span><img src="public/frontend/resources/img/star.png" alt=""></span>
                    <span><img src="public/frontend/resources/img/star.png" alt=""></span>
                    <span><img src="public/frontend/resources/img/star.png" alt=""></span>
                    <span><img src="public/frontend/resources/img/star.png" alt=""></span>
                 </div>
                 <div class="price"><?php echo ($val['price'] == 0) ? 'Liên Hệ' : number_format($val['price'],0,',','.') ?></div>
              </div>
           </div>
        </li>
        <?php } ?>
     </ul>
     <?php } ?>
  </div>
</aside>
