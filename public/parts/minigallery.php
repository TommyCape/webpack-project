<?php
$minigallery = $this->getModulo('Minigallery');

if(count($minigallery)>0){
  echo "<ul class=\"minigallery clearfix\">";
    for($i=0; $i<count($minigallery); $i++){
      echo "<li>
      <a class=\"swipebox\" href=\"".$this->getImg($minigallery[$i]['files'])."\" rel=\"gallery\" title=\"".$minigallery['immagini'][$i]['titolo']."\">
      <picture>
      <source media=\"(max-width: 750px)\" srcset=\"".$this->getImg($minigallery[$i]['files'])."\">
      <source media=\"(max-width: 1024px)\" srcset=\"".$this->getImg($minigallery[$i]['files'])."\">
          <img class=\"img\" src=\"".$this->getImg($minigallery[$i]['files'])."\" alt=\"\">
      </picture>
      </a></li>";
    }
  echo "</ul>";
}
?>
