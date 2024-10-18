<div class="contact-page">
    <div class="uk-container uk-container-center">
      <div class="uk-grid uk-grid-medium mb50">
           <div class="uk-width-small-1-1 uk-width-medium-1-2">
                <div class="info">
                    <h2 class="title"><span>Trụ sở chính</span></h2>
                    <div class="address mb20"><i class="fa fa-map-marker"></i> <?php echo $general['contact_address'] ?></div>
                    <div class="phone mb20"><?php echo $general['contact_phone'] ?></div>
                    <div class="email"><a href="" title=""><i class="fa fa-envelope"></i> <?php echo $general['contact_email'] ?></a></div>
                </div>
           </div>
           <div class="uk-width-small-1-1 uk-width-medium-1-2">
                <form action="" class="form-footer">
                    <div class="form-field mb15">
                       <input class="minh-fullname-contact" type="text" name="fullname" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Họ tên">
                    </div>
                    <div class="form-field mb15">
                       <input class="minh-phone-contact" type="tel" name="phone" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Số điện thoại">
                    </div>
                    <div class="form-field mb15">
                       <input class="minh-email-contact" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email của bạn">
                    </div>
                    <div class="form-field">
                       <input  class="submit-form-contact input-submit" type="submit" value="Đăng ký" >
                    </div>
                </form>
           </div>
      </div>
      <div class="map">
           <?php echo $general['contact_map'] ?>
      </div>
    </div>
</div>
