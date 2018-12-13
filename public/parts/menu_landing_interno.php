<?php
if($this->sub_classe=="landing"){

  echo "<a class=\"btn_landing\" href=\"".$this->getLinkBooking()."\">
        <div>prenota ora</div>
      </a>";

  echo "<nav class=\"menu_landing\"><ul class=\"clearfix\">";
      $menu_landing = $this->getMenuLanding();
      if(count($menu_landing)>0){
        foreach($menu_landing as $i => $v){
          echo "<li>";
          echo "<a href=\"".$menu_landing[$i]['link']."\">";
          echo $menu_landing[$i]['testo_link'];
          echo "</a></li>";
        }
      }
  echo "</ul></nav>";
}
?>
