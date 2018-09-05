<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- <link rel="stylesheet" href="../node_modules/swiper/dist/css/swiper.css"> -->
    <script src="../bundle.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.js"></script> -->

    <title>Warm Hotel</title>
  </head>
    <?php
    $percorso = "http://localhost/SITI_CUBE/warm/";
    ?>
  <body>
    <!-- FINE HEAD ------------------------------->

    <!-- INIZIO BODY------------------------------->
    <div class="container">
      <div class="withe"></div>
      <nav class="menu-top">
        <ul>
          <li class="active">
            <a href="">home</a>
          </li>
          <li>
            <a href="">camere</a>
          </li>
          <li>
            <a href="">riunioni</a>
          </li>
          <li>
            <a href="">cucina</a>
          </li>
          <li>
            <a href="">servizi</a>
          </li>
          <li>
            <a href="">galleria</a>
          </li>
          <li>
            <a href="">posizione</a>
          </li>
          <li>
            <a href="">w team</a>
          </li>
          <li>
            <a href="">offerte</a>
          </li>
          <li>
            <a href="">prenota</a>
          </li>
        </ul>
      </nav>
      <header class="header">
      <div class="header__top">
        <a class="logo" href="">
          <img src="<?=$percorso?>/public/images/logo.png" alt="logo" />
        </a>
        <ul class="lang-qr">
          <li>
            <div class="language">
              <span class="lang"></span><img src="<?=$percorso?>/public/images/flang.png"/>
                <select id="lang" onchange="window.open(this.value , '_self')">
                    <option value="">italiano</option>
                      <option value="">inglese</option>
                  </select>
                </div>
            </li>
            <li>
              <div class="now">Prenota</br>Adesso</div>
            </li>
            <li>
              <form id="qr" action="https://www.blastnessbooking.com/reservations/risultato.html" method="get" target="_self">
              	<ul class="qr">
              		<li class="arrivo">
              			<input type="text"  id="datepicker" readonly />
              			<span class="gg"></span><span class="mm"></span><span class="aa"></span>
                    <img class="fqr" src="<?=$percorso?>/public/images/fqr.png">
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
              	<input type="hidden" name="id_albergo" value=""/>
              		<input type="hidden" name="dc" value=""/>
              			<input type="hidden" name="id_stile" value=""/>
              				<input type="hidden" name="lingua_int" value=""/>
              					<input type="hidden" name="gg" value=""/>
              						<input type="hidden" name="mm" value=""/>
              							<input type="hidden" name="aa" value=""/>
              								<input type="hidden" name="notti_1" value=""/>
              								 <input type="hidden" name="tot_camere" value="1"/>
              									<input type="hidden" name="tot_adulti" value="2"/>
              									 <input type="hidden" name="tot_bambini" value="0"/>
              		</form>
            </li>
        </ul>
      </div>
      <!-- GALLERY TOP -->
      <div class="gallery_top">
            <div class="swiper-wrapper">
                <?php
                  echo"
                  <div class=\"swiper-slide\">
                    <picture>
                      <source media=\"(max-width: 750px)\" srcset=\"".$percorso."public/images/top1.jpg\">
                      <source media=\"(max-width: 1024px)\" srcset=\"".$percorso."public/images/top1.jpg\">
                      <img class=\"img\" src=\"".$percorso."public/images/top1.jpg\" alt=\"\">
                    </picture>
                  </div>

                  <div class=\"swiper-slide\">
                    <picture>
                      <source media=\"(max-width: 750px)\" srcset=\"".$percorso."public/images/top2.jpg\">
                      <source media=\"(max-width: 1024px)\" srcset=\"".$percorso."public/images/top2.jpg\">
                      <img class=\"img\" src=\"".$percorso."public/images/top2.jpg\" alt=\"\">
                    </picture>
                  </div>";

                ?>
            </div>
                <div class="cont_show">
                  <div class="icon show">|</div>
                </div>
                <div class="swiper-pagination"></div>
      </div>
          <!-- FINE GALLERY TOP -->
    <div class="off-slide">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <picture>
              <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/top1.jpg">
              <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/top1.jpg">
              <img class="img" src="<?=$percorso?>public/images/top1.jpg" alt="">
            </picture>
            <div class="cont">
              <div class="title">speciale serata gourmet</div>
              <div class="txt">soggiorno con cena gourmet inclusa ad un prezzo speciale</div>
            </div>
        </div>
        <div class="swiper-slide">
            <picture>
              <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/top1.jpg">
              <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/top1.jpg">
              <img class="img" src="<?=$percorso?>public/images/top1.jpg" alt="">
            </picture>
            <div class="cont">
              <div class="title">speciale serata gourmet 2</div>
              <div class="txt">soggiorno con cena gourmet inclusa ad un prezzo speciale</div>
            </div>
        </div>
      </div>
    </div>
    <div class="box-header">
      <h1>a roma</h1>
      <h2>esperienza per il tuo business e per le tue vacanze</h2>
    </div>
    </header>
    <ul class="horiz-box">
    <li>
      <div class="cont">
        <div class="text">
          <div class="title">fuori dal caos</div>
          <div class="txt">
            Siamo partiti alla volta di un nuovo concetto di accoglienza che dedicasse la stessa attenzione al nostro ospite e al nostro team, per poter offrire un’ospitalità etica e vera. I nostri colori sono quelli della terra e della natura, ma il nostro spirito è quello metropolitano della città, perchè in fondo qui siamo vicino a tutto ma lontano dal caos.
              <br /><br />
            Questo è il viaggio che ci ha condotti al Warmthotel, se sei qui il tuo deve ancora cominciare nel posto perfetto per vivere la
          </div>
        </div>
      </div>
      <picture>
        <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <img class="img" src="<?=$percorso?>public/images/colosseo.jpg" alt="">
      </picture>
    </li>
    <li>
      <picture>
        <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <img class="img" src="<?=$percorso?>public/images/colosseo.jpg" alt="">
      </picture>
      <div class="cont">
        <div class="text">
          <div class="title">ambiente e spazi</div>
          <div class="txt">
            Siamo partiti alla volta di un nuovo concetto di accoglienza che dedicasse la stessa attenzione al nostro ospite e al nostro team, per poter offrire un’ospitalità etica e vera. I nostri colori sono quelli della terra e della natura, ma il nostro spirito è quello metropolitano della città, perchè in fondo qui siamo vicino a tutto ma lontano dal caos.<br /><br />

            Questo è il viaggio che ci ha condotti al Warmthotel, se sei qui il tuo deve ancora cominciare nel posto perfetto per vivere la Roma contemporanea degli affari e dei grandi eventi e raggiungere facilmente quella del passato per scoprirla e innamorarsene.
          </div>
          <a class="scopri" href="">Scopri</a>
        </div>
      </div>
      <picture>
        <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <img class="img" src="<?=$percorso?>public/images/colosseo.jpg" alt="">
      </picture>
    </li>
    <li>
      <div class="cont">
        <div class="text">
          <div class="title">fuori dal caos</div>
          <div class="txt">
            Siamo partiti alla volta di un nuovo concetto di accoglienza che dedicasse la stessa attenzione al nostro ospite e al nostro team, per poter offrire un’ospitalità etica e vera. I nostri colori sono quelli della terra e della natura, ma il nostro spirito è quello metropolitano della città, perchè in fondo qui siamo vicino a tutto ma lontano dal caos.
              <br /><br />
            Questo è il viaggio che ci ha condotti al Warmthotel, se sei qui il tuo deve ancora cominciare nel posto perfetto per vivere la
          </div>
          <a class="scopri" href="">Scopri</a>
        </div>
      </div>
      <picture>
        <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
        <img class="img" src="<?=$percorso?>public/images/colosseo.jpg" alt="">
      </picture>
    </li>
  </ul>
    <ul class="vert-box">
      <li style="background-image:url(<?=$percorso?>public/images/box.jpg)">
        <div class="cont">
          <div class="text">
            <div class="title">fuori dal caos</div>
            <div class="txt">
              Siamo partiti alla volta di un nuovo concetto di accoglienza che dedicasse la stessa attenzione al nostro ospite e al nostro team, per poter offrire un’ospitalità etica e vera. I nostri colori sono quelli della terra e della natura, ma il nostro spirito è quello metropolitano della città, perchè in fondo qui siamo vicino a tutto ma lontano dal caos.
                <br /><br />
              Questo è il viaggio che ci ha condotti al Warmthotel, se sei qui il tuo deve ancora cominciare nel posto perfetto per vivere la
            </div>
            <a class="scopri" href="">Scopri</a>
          </div>
        </div>
      </li>
      <li>
        <div class="cont">
          <picture>
            <source media="(max-width: 750px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
            <source media="(max-width: 1024px)" srcset="<?=$percorso?>public/images/colosseo.jpg">
            <img class="img" src="<?=$percorso?>public/images/colosseo.jpg" alt="">
          </picture>
          <div class="text">
            <div class="title">fuori dal caos</div>
            <div class="txt">
              Siamo partiti alla volta di un nuovo concetto di accoglienza che dedicasse la stessa attenzione al nostro ospite e al nostro team, per poter offrire un’ospitalità etica e vera. I nostri colori sono quelli della terra e della natura, ma il nostro spirito è quello metropolitano della città, perchè in fondo qui siamo vicino a tutto ma lontano dal caos.
                <br /><br />
              Questo è il viaggio che ci ha condotti al Warmthotel, se sei qui il tuo deve ancora cominciare nel posto perfetto per vivere la
            </div>
            <a class="scopri" href="">Scopri</a>
          </div>
        </div>
      </li>
      <li style="background-image:url(<?=$percorso?>public/images/box.jpg)">
        <div class="cont">
          <div class="text">
            <div class="title">fuori dal caos</div>
            <div class="txt">
              Siamo partiti alla volta di un nuovo concetto di accoglienza che dedicasse la stessa attenzione al nostro ospite e al nostro team, per poter offrire un’ospitalità etica e vera. I nostri colori sono quelli della terra e della natura, ma il nostro spirito è quello metropolitano della città, perchè in fondo qui siamo vicino a tutto ma lontano dal caos.
                <br /><br />
              Questo è il viaggio che ci ha condotti al Warmthotel, se sei qui il tuo deve ancora cominciare nel posto perfetto per vivere la
            </div>
            <a class="scopri" href="">Scopri</a>
          </div>
        </div>
      </li>
    </ul>
    <footer class="footer">
      <ul class="info">
        <li>
          <address>
              WARMTHOTEL ROMA <br />
              Via G. Prezzolini, 5 - 00144 Roma, Italia. <br />
              Tel. +39 06 5014599 Fax +39 06 4885270 <br />
              P.IVA 13483951003
          </address>
          <ul class="social">
            <li>
              <a href=""><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </li>
      </ul>
    </footer>
    </div>
  </body>
</html>
