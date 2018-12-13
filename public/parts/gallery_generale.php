<?php
$gallery = $this->getModulo("Gallery");

    if(count($gallery['categorie'])>0){
      echo "<ul class=\"listaCatGallery clearfix\"><li class=\"filter active\" data-filter=\"*\">All</li>";
        for($i=0; $i<count($gallery['categorie']); $i++){
          echo "<li class=\"filter\" data-filter=\"cat_".$gallery['categorie'][$i]['id_categoria']."\">".$gallery['categorie'][$i]['categoria']."</li>";
        }
      echo "</ul>";
    }

    if(count($gallery['immagini'])>0){
      echo "<ul class=\"gallery_minigallery gallery_isotope clearfix\">";
        for($i=0; $i<count($gallery['immagini']); $i++){

          echo "<li class=\"cat_".$gallery['immagini'][$i]['id_categoria']."\">
          <a class=\"photobox\" href=\"".$this->getPath("img").$gallery['immagini'][$i]['files']."\" rel=\"gallery\" title=\"".$gallery['immagini'][$i]['titolo']."\">
          <picture>
             <source media=\"\" srcset=\"\">
              <img class=\"img\" src=\"".$this->getPath("img").$gallery['immagini'][$i]['files']."\" alt=\"\">
          </picture>
          </a></li>";
        }
      echo "</ul>";
    }

?>
