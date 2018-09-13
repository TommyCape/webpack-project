<form id="qr" action="https://www.blastnessbooking.com/reservations/risultato.html" method="get" target="_self">
			<ul class="qr">
				<li class="arrivo">
					<input type="text"  id="datepicker" readonly />
					<span class="gg"></span><span class="mm"></span><span class="aa"></span>
					<img class="fqr" src="<?=$this->getPath()?>/public/images/fqr.png">
				</li>
				<li class="partenza">
					<input type="text"  id="datepicker_partenza" readonly />
					<span class="gg"></span><span class="mm"></span><span class="aa"></span>
				</li>
				<li>
					<input type="submit" value=""/>
					<div class="preno">Verifica</br>disponibilità</div>
				</li>
			</ul>
			<input type="hidden" name="id_albergo" value="<?=$this->getInfoStruttura("id_albergo")?>"/>
				<input type="hidden" name="dc" value="<?=$this->getInfoStruttura("dc")?>"/>
					<input type="hidden" name="id_stile" value="<?=$this->getInfoStruttura("id_stile")?>"/>
						<input type="hidden" name="lingua_int" value="<?=$this->sigla_lingua?>"/>
							<input type="hidden" name="gg" value=""/>
								<input type="hidden" name="mm" value=""/>
									<input type="hidden" name="aa" value=""/>
										<input type="hidden" name="notti_1" value=""/>
										 <input type="hidden" name="tot_camere" value="1"/>
											<input type="hidden" name="tot_adulti" value="2"/>
											 <input type="hidden" name="tot_bambini" value="0"/>
				</form>
