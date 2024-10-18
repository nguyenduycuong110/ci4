<section id="body">
    <div id="prdcatalogue-page" class="page-body pt50 pb50">
        <div class="uk-container uk-container-center">
           <div class="panel-product mb30">
             <div class="panel-head">
                <div class="heading-1"><span>Tìm kiếm theo từ khóa: <?php echo isset($keyword) ? $keyword : '' ?></span></div>
             </div>
             <?php  ?>
             <div class="medical-section-body">
             <?php 
               if(isset($item) && is_array($item) && count($item)){
                  foreach ($item as $val){
             ?>
                  <div class="title-type">Kết quả hiển thị tìm kiếm theo <?php echo $val['heading'] ?></div>
                  <div class="result-list">
                     <div class="uk-grid uk-grid-medium">
                     <?php
                        foreach($val['list'] as $valList){       
                      ?>
                           <div class="uk-width-large-1-4 uk-width-1-2 mb25">
                              <div class="product-item">
                                 <a href="<?php echo write_url($valList['canonical']) ?>" class="image img-cover">
                                    <img src="<?php echo $valList['image'] ?>" alt="<?php echo $valList['title'] ?>">
                                 </a>
                                 <div class="info">
                                    <h3 class="name"><a href="<?php echo write_url($valList['canonical']) ?>" title="<?php echo $valList['title'] ?>"><?php echo $valList['title'] ?></a></h3>
                                    <div class="btn-contact">
                                       <a href="" title=""> <?php  
                                    if(isset($valList['price'])){
                                       echo ($valList['price'] == 0) ? 'Liên Hệ' : number_format($valList['price'],0 ,',','.').' VNĐ'; 
                                    }
                                    
                                    ?>
                                    </div></a>
                                 </div>
                              </div>
                           </div>
                      <?php } ?>
                  </div>
                  </div>
                  
                  <?php }} ?>
                  <div id="pagination">
                  </div>
               </div>
           </div>
        </div>
    </div>
</section>
