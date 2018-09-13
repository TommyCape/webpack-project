<?php
$mosaico = $this->getModulo("Mosaico");
?>

<?php if(count($mosaico)>0){?>
<ul class="horiz-box <?=($this->modello == "Camere")? "horiz-box--camere" : (($this->modello == "Interne")? "horiz-box--interna" : "")?>">
  <?php for($i=0; $i<count($mosaico); $i++){
    $image = $mosaico[$i]['immagine'];
    $link = $mosaico[$i]['link'];
    ?>
<li>
  <div class="cont">
    <div class="text">
      <div class="title"><?=$mosaico[$i]['titolo']?></div>
      <div class="txt"><?=($i==0 && $this->modello == "Interne")?   $this->getTesto() : $mosaico[$i]['descrizione']?></div>
      <?php
      if($this->modello == "Home Page"){
        if($link[0]['label'])  echo "<a class=\"scopri scopri--camere\" target=\"".$link[0]['target']."\" href=\"".$link[0]['link']."\">".$link[0]['label']."</a>";
    } else{
      if($link[1]['label'])  echo "<a class=\"scopri scopri--camere\" target=\"".$link[1]['target']."\" href=\"".$link[1]['link']."\">".$link[1]['label']."</a>";
    }

      ?>
    </div>
  </div>

    <?php for($j=0; $j<count($image); $j++){?>
    <div class="image">
      <picture>
        <source media="(max-width: 750px)" srcset="<?=$this->getImg($image[$j]['files'])?>">
        <source media="(max-width: 1024px)" srcset="<?=$this->getImg($image[$j]['files'])?>">
        <img class="img" src="<?=$this->getImg($image[$j]['files'])?>" alt="">
      </picture>
      <?php
    if($this->modello != "Home Page"){
      if($link[$j]['label']) echo "<a class=\"scopri scopri--camere\" target=\"".$link[$j]['target']."\" href=\"".$link[$j]['link']."\">".$link[$j]['label']."</a>";
    }
      ?>
    </div>
  <?php }?>
</li>
<?php }?>
</ul>
<?php }?>
