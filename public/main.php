<div class="container">
  <div class="withe"></div>
  <?=menu("", "")?>
  <header class="header">
  <div class="header__top">
    <a class="logo" href="<?=$this->getLinkHome($this->id_lingua)?>">
      <img src="<?=$this->getPath()?>/public/images/logo.png" alt="logo" />
    </a>
    <ul class="lang-qr">
      <li>
        <?=select_lingue("lang", "lang")?>
        </li>
        <li>
          <div class="now">Prenota</br>Adesso</div>
        </li>
        <li>
          <!-- QR -->
           <?php $this->cube_parts('parts.qr'); ?>
          <!-- fine qr -->
        </li>
    </ul>
  </div>
  <!-- GALLERY TOP -->
    <?php $this->cube_parts('parts.gallery_top'); ?>
  <!-- FINE GALLERY TOP -->

  <!-- offerte slide -->
    <?php $this->cube_parts('parts.offerte_slide'); ?>
  <!-- FINE offerte slide -->

<div class="box-header">
  <h1><?=html_entity_decode($this->getTitolo())?></h1>
  <h2><?=html_entity_decode($this->getSottotitolo())?></h2>
</div>
</header>
<?php if($this->modello != "Home Page"){
    echo page_children("", "menu-sec");
  ?>
<?php } if($this->modello == "Home Page" || $this->modello == "Camere" ||$this->modello == "Interne"){?>
<!-- mosaico -->
  <?php $this->cube_parts('parts.mosaico'); ?>
<!-- fine mosaico -->
<?php if($this->modello == 'Home Page'){?>
  <!-- mosaico -->
  <?php $this->cube_parts('parts.mosaico-vert'); ?>
  <!-- fine mosaico -->
<?php   } } elseif($this->modello == 'Offerte'){?>
  <!-- elenco offerte -->
  <?php $this->cube_parts('parts.offerte_elenco'); ?>
  <!-- fine elenco offerte -->

<?php } elseif($this->modello == "Gallery"){?>
  <!-- GALLERY generale -->
    <?php $this->cube_parts('parts.gallery_generale'); ?>
  <!-- FINE GALLERY generale -->

<?php }?>
