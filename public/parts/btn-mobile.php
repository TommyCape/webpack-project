<div class="buttons-mobile">
<ul class="clearfix">
	<li>
		<a target="_blank" href="<?=$this->getInfoStruttura("google_map")?>">
			<i class="fas fa-map-marker"></i>
	<div>gps</div>
			</a>
	</li>
	<li>
	<a href="<?=$this->getLinkBooking("benvenuto");?>">
		<i class="fas fa-calendar"></i>
		<div><?=$this->variabili_lingua('mobile_action_prenota')?></div>
	</a>
	</li>
		<li>
			<a  href="tel:<?=$this->getInfoStruttura("telefono")?>">
				<i class="fas fa-phone"></i>
		<div><?=$this->variabili_lingua('mobile_action_chiama')?></div>
	</a>
</li>
</ul>
</div>
