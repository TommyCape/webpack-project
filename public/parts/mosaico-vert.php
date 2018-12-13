<?php
$mosaicopara = $this->getModulo("Mosaico para");
?>

<?php if(count($mosaicopara)>0){?>
  <ul class="vert-box">
  <?php for($i=0;$i<count($mosaicopara);$i++){ ?>
    <li <?php if($i%2==0){?> style="background-image:url(<?=$this->getImg($mosaicopara[$i]['files'])?>)" <?php }?>>
      <div class="cont">
        <?php if($i%2!=0){?>
          <div class="image">
            <picture>
              <source media="(max-width: 750px)" srcset="<?=$this->getImg($mosaicopara[$i]['files'])?>">
              <source media="(max-width: 1024px)" srcset="<?=$this->getImg($mosaicopara[$i]['files'])?>">
              <img class="img" src="<?=$this->getImg($mosaicopara[$i]['files'])?>" alt="">
            </picture>
          </div>
        <?php }?>
        <div class="text">
          <div class="title"><?=$mosaicopara[$i]['titolo']?></div>
          <div class="txt"><?=$mosaicopara[$i]['descrizione']?></div>
          <a class="scopri" href="<?=$mosaicopara[$i]['link']?>" target="<?=$mosaicopara[$i]['target']?>"><?=$mosaicopara[$i]['label']?></a>
        </div>
      </div>
    </li>
  <?php }?>
  </ul>

<?php
  }
?>
