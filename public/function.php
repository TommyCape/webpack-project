<?php

/*
Stampo il menu top
*/
function menu($menu, $nav){
  global $cube;
  $menu = (($menu == '') ? $cube->menu_top : $menu);

  $nav = (($nav == '') ? 'menu-top' : $nav);

  if($menu){
      $menu_top = $cube->getMenu($menu);
      if(count($menu_top)>0){ ?>
          <nav class="<?=$nav?>">
            <ul class="clearfix">
    <?php
      foreach($menu_top as $i => $v){
        echo "<li ".(($menu_top[$i]['active']) ? "class=\"active\"" : "").">";
        if(count($menu_top[$i]['figli'])>0){
        echo"<div class=\"cont-fr\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></div>";
      }
        echo "<a href=\"".$menu_top[$i]['link']."\">";
        echo $menu_top[$i]['testo_link'];
        echo "</a>";
        if(count($menu_top[$i]['figli'])>0){
        echo "<ul class = \"clearfix\">";
           foreach($menu_top[$i]['figli'] as $x => $y){
            $secondo_livello = $menu_top[$i]['figli'][$x];
            $immagine_menu = $cube->getModulo("Immagine menu", $secondo_livello['id_pagina']);
             echo "<li ".(($secondo_livello['active']) ? "class=\"active\"" : "").">";
             echo "<a href=\"".$secondo_livello['link']."\">";
             echo"<picture>
                     <source media=\"(max-width: 750px)\" srcset=\"".$cube->getImg($immagine_menu[0]['files'])."\">
                     <source media=\"(max-width: 1024px)\" srcset=\"".$cube->getImg($immagine_menu[0]['files'])."\">
                     <img class=\"img\" src=\"".$cube->getImg($immagine_menu[0]['files'])."\" alt=\"\">
                   </picture>";
             echo "<div>".$secondo_livello['testo_link']."</div>";
             echo "</a></li>";
           }
          echo "</ul>";
        }
        echo "</li>";
      }
      echo "</ul></nav>";
      }
  }
}

/*
Stampo il menu bottom
*/
function menu_bottom($nav){
  global $cube;

  $menu_bottom = $cube->getMenu($cube->menu_bottom);
   if(count($menu_bottom)>0){
     echo "<nav class=\"".$nav."\">";
   echo "<ul class=\"clearfix\">";
   foreach($menu_bottom as $i => $v){
     echo "<li ".(($menu_bottom[$i]['active']) ? "class=\"active\"" : "").">";
     echo "<a title=\"".$menu_bottom[$i]['testo_link']."\" href=\"".$menu_bottom[$i]['link']."\">";
     echo $menu_bottom[$i]['testo_link'];
     echo "</a></li>";
   }
   if($cube->modello=="Home Page"){
     $menu_landing = $cube->getMenuLanding();
     if(count($menu_landing)>0){
       foreach($menu_landing as $i => $v){
         echo "<li>";
         echo "<a href=\"".$menu_landing[$i]['link']."\">";
         echo $menu_landing[$i]['testo_link'];
         echo "</a></li>";
       }
     }
   }
   echo "</ul></nav>";
   }
}



/*Menu secondario pagina corrente*/

function page_children($menu, $nav){
  global $cube;
  $menu = (($menu == '') ? $cube->menu_top : $menu);
  $getMenuSecondarioMenu = $cube->getMenuSecondario($menu);

  if(count($getMenuSecondarioMenu)>0){ ?>
      <nav class="<?=$nav?>">
        <ul>
  <?php
       foreach($getMenuSecondarioMenu as $val){
         echo "<li ".(($val['active']) ? "class=\"active\"" : "").">";
         echo "<a href=\"".$val['link']."\">";
         echo $val['testo_link'];
         echo "</a></li>";
       }

  echo "</ul></nav>";
  }
}

/*
 select lingue
*/
function select_lingue($class_label, $id_select){
  global $cube;

$lingue = $cube->getMenuLingue();

  if(count($lingue)>0){
    echo"<div class=\"language\">";
    echo"<span class=\"".$class_label."\"></span> <img src=\"".$cube->getPath()."/public/images/flang.png\">";
        echo"<select id=\"".$id_select."\" onchange=\"window.open(this.value , '_self')\">";
          for($i=0; $i<count($lingue); $i++){
              echo "<option value=\"".$lingue[$i]['link']."\" ".(($cube->id_lingua == $lingue[$i]['id_lingua']) ? "selected=\"selected\"" : "")."\">".$lingue[$i]['lingua']."</option>";
          }
        echo "</select></div>";
      }

}

/*hook per livello breadcrumb*/
$this->addHook("hook_impostaLivello_BreadCrumb",hook_livello_breadcrumb);
function hook_livello_breadcrumb($livello){
  global $cube;
    $livello = '0';
  return $livello;
}

/*hook per livello breadcrumb*/
$this->addHook("hook_aggiungiElementoPre_BreadCrumb",hook_home_breadcrumb);
function hook_home_breadcrumb($return){
  global $cube;
    $return .= '<li><a href="'.$cube->getLinkHome($cube->id_lingua).'">Home</a></li>';
  return $return;
}

?>
