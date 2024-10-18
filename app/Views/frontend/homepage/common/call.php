<a class="ring-alo-phone " href="tel: <?php echo $general['contact_hotline'] ?>" title="Hotline">
	<div class="animated infinite zoomIn ring-alo-ph-circle"></div>
    <div class="animated infinite pulse ring-alo-ph-circle-fill"></div>
    <div class="animated infinite tada ring-alo-ph-img-circle"></div>
</a>
<div class="hotline-fixed">
	<a href="tel:  <?php echo $general['contact_hotline'] ?>" title="Hotline">
        <span class="phone">  <i class="fa fa-phone"></i></span>
		<span class="label">Hotline: </span>
		<span class="value"> <?php echo $general['contact_hotline'] ?></span>
	</a>
</div>
<style>#cfacebook{position:fixed;bottom:0px;right:8px;z-index:999999999999999;width:250px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>
  <script>
      jQuery(document).ready(function () {
          jQuery(".chat_fb").click(function () {
              jQuery('.fchat').toggle('slow');
          });
      });
  </script>
  <div id="cfacebook" >
  <a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Hỗ trợ trực tuyến</a>
  <div class="fchat">
  <div class="fb-page" data-tabs="messages" data-href="<?php echo $general['social_facebook']; ?>" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </div>
  </div>
