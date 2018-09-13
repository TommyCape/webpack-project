<?php $galleryTop = $this->getModulo('Immagini header');

if($galleryTop[0]['video']!="") $video = true;

if($video){
  if(!$this->detect->isMobile()){
    echo "<div class=\"container_video\">";
      echo "<video autoplay loop muted>";
        echo "<source src=\"/video/".$galleryTop[0]['video']."\" type=\"video/mp4\">";
        echo "Il tuo browser non supporta il tag video";
      echo "</video>";
      echo "<div class=\"audio_control\">
      <i class=\"fa fa-volume-off\" aria-hidden=\"true\"></i>
      <i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i>
  </div>";
  echo "</div>";
} else{

  echo "<div class=\"play_video\" data-video=\"/video/Mob_".$galleryTop[0]['video']."\">
  <picture>
     <source media=\"\" srcset=\"\">
      <img class=\"img\" src=\"".$this->getImg($galleryTop[$i]['files'])."\" alt=\"\">
  </picture>
  <div class=\"cont_show\">
    <div class=\"icon show\">|</div>
      <div class=\"more\">scroll down</div>
  </div>
  </div>";

  }

} else{

?>
<input id="ancora" type="hidden" value="<?=$this->ancora?>"/>
<div class="gallery_top">
  <div class="swiper-wrapper">
    <?php for($i=0; $i<count($galleryTop); $i++){?>
  <div class="swiper-slide">
    <picture>
      <source media="(max-width: 750px)" srcset="<?=$this->getImg($galleryTop[$i]['files'], 'medium')?>">
      <source media="(max-width: 1024px)" srcset="<?=$this->getImg($galleryTop[$i]['files'], 'medium')?>">
      <img src="<?=$this->getImg($galleryTop[$i]['files'])?>" alt="">
    </picture>
  </div>
<?php }?>
  </div>
</div>

<?php } ?>
