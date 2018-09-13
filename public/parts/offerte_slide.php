<?php
$off = $this->array_offerte();
if(count($off)>0){?>
  <div class="off-slide">
    <div class="swiper-wrapper">
    <?php foreach($off as $i => $v){?>
      <div class="swiper-slide">
        <a href="<?=$this->getLinkBooking("", "", $off[$i]['offerta_id_prodotto'])?>">
          <picture>
            <source media="(max-width: 750px)" srcset="<?=$this->getImgOfferta($off[$i]['offerta_id_albergo'],$off[$i]['offerta_id_prodotto'],'main')?>">
            <source media="(max-width: 1024px)" srcset="<?=$this->getImgOfferta($off[$i]['offerta_id_albergo'],$off[$i]['offerta_id_prodotto'],'main')?>">
            <img class="img" src="<?=$this->getImgOfferta($off[$i]['offerta_id_albergo'],$off[$i]['offerta_id_prodotto'],'main')?>" alt="">
          </picture>
          <div class="cont">
            <div class="title"><?=$this->tagliaStringa($off[$i]['offerta_titolo'],30)?></div>
            <div class="txt"><?=$this->tagliaStringa($off[$i]['offerta_descrizione'],30)?></div>
          </div>
        </a>
        </div>
      <?php }?>
      </div>
    </div>
<?php }?>
