<header class="header uk-visible-large">
    
    
</header>

<header class="mobile-header uk-hidden-large">
	<section class="upper">
		<a class="moblie-menu-btn skin-1" href="#offcanvas" class="offcanvas" data-uk-offcanvas="{target:'#offcanvas'}">
			<span>Menu</span>
		</a>
		<div class="logo"><a href="" title="Logo"><img src="<?php echo $general['homepage_logo']; ?>" alt="Logo" /></a></div>
		<div class="mobile-hotline">
			<a class="value" href="tel:<?php echo $general['contact_hotline']; ?>" title="Tư vấn bán hàng"><?php echo $general['contact_hotline']; ?></a>
		</div>
	</section><!-- .upper -->
	<section class="lower">
		<div class="mobile-search">
			<form action="<?php echo site_url('tim-kiem'); ?>" method="" class="uk-form form">
				<input type="text" name="keyword" class="uk-width-1-1 input-text" placeholder="Bạn muốn tìm gì hôm nay?" />
				<button type="submit" name="" value="" class="btn-submit">Tìm kiếm</button>
			</form>
		</div>
	</section>
</header><!-- .mobile-header -->
<?php $slide = get_slide(['keyword' => 'main-slide','language' => 'vi']); ?>
<?php if(isset($slide) && is_array($slide) && count($slide)){ ?>
<?php foreach($slide as $key => $val){ ?>
<div class="panel-banner" style="background: url(<?php echo $val['image'] ?>);">
</div>
<?php }} ?>
