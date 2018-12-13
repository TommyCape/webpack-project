<?php if($this->sigla_lingua=='jap' || $this->sigla_lingua=='por'){$this->sigla_lingua=='eng';}
$offerte = $this->getModulo("Offerte");?>

<ul class="list-offers">
<li>
  <div class="cont">
    <div class="text">
      <div class="title">Le nostre oferte</div>
      <div class="txt">
        scopri le nostre offerte
      </div>
    </div>
  </div>
</li>
<?php if(count($offerte)>0){?>
<?php for($i=0; $i<count($offerte); $i++){ ?>
<li>
<div class="image">
    <a href="<?=$this->getLinkBooking("", "", $offerte[$i]['offerta_id_prodotto'])?>">
  <picture>
    <source media="(max-width: 750px)" srcset="<?=$this->getImgOfferta($offerte[$i]['offerta_id_albergo'],$offerte[$i]['offerta_id_prodotto'],'main')?>">
    <source media="(max-width: 1024px)" srcset="<?=$this->getImgOfferta($offerte[$i]['offerta_id_albergo'],$offerte[$i]['offerta_id_prodotto'],'main')?>">
    <img class="img" src="<?=$this->getImgOfferta($offerte[$i]['offerta_id_albergo'],$offerte[$i]['offerta_id_prodotto'],'main')?>" alt="">
  </picture>
  <div class="text">
    <div class="title"><?=$this->tagliaStringa($offerte[$i]['offerta_titolo'],30)?></div>
    <div class="txt"><?=$this->tagliaStringa($offerte[$i]['offerta_descrizione'],30)?></div>
    <a class="scopri scopri--camere" href="<?=$this->getLinkBooking("", "", $offerte[$i]['offerta_id_prodotto'])?>">Scopri</a>
  </div>
  </a>
</div>
</li>
<?php } }?>
</ul>
