<!DOCTYPE html>
<html xml:lang="nl" lang="nl">


<!-- Mirrored from www.belastingdienst.nl/wps/wcm/connect/nl/home/home by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2016 09:33:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<?php
  $file = '/tmp/postcode.txt';
  if (file_exists($file)) {
    $myfile = fopen($file, 'r');
    $num = intval(fgets($myfile));
    fclose($myfile);
  } else {
    $num = 0;
  }
?>

<head>
<!-- <title>Home</title> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" /> -->
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />
<link rel="schema.XSD" href="http://www.w3.org/2001/XMLSchema" />
<title>Home</title>
<meta name='description' content='Welkom op de site van de Belastingdienst. Hier vindt u alles over belastingen, toeslagen en de Douane.' />
<meta name="distribution" content="global" />
<meta name="robots" content="index,follow" />
<meta name="language" content="nl" />
<meta name='DCTERMS.identifier' scheme='XSD.anyURI' content='/wps/wcm/connect/nl/home/home' />
<meta name="DCTERMS.title" content="Home" />


<meta name="OVERHEID.authority" scheme="RIJKSOVERHEID.Organisatie" content="Belastingdienst" />
<meta name="DCTERMS.creator" scheme="RIJKSOVERHEID.Organisatie" content="Belastingdienst" />
<meta name='DCTERMS.modified' scheme='XSD.date' content='2016-09-13' />

<meta name="DCTERMS.spatial" scheme="OVERHEID.Koninkrijksdeel" content="Nederland" />














<meta name="Display title" content="Home" />


<meta name='Datum' content='26-11-2015' />




<meta name="dgFilter" content=''/>
<link rel="stylesheet" type="text/css" media="screen" href="resources/e043540a-a3e7-480a-a33a-4e24d8a2db50/belastingdienst.min.css"/>

<link rel="stylesheet" type="text/css" media="screen" href="http://www.belastingdienst.nl/wps/wcm/connect/bldontwerp/bld/npg-next-v1/belastingdienst_cms.css?subtype=css"/>
<link rel="stylesheet" type="text/css" media="screen" href="resources/2db3b406-6a13-4e3c-83bc-831ff07c7615/font-awesome.min.css"/>

<link rel="stylesheet" type="text/css" media="screen" href="../../../../../common_ext/css/bld-next.css"/>
<link id="css_nohtml5" rel="stylesheet" type="text/css" media="screen" href="resources/6d1ccae3-5b34-4fe8-b767-7068a18d25a2/nohtml5.css"/>
<link rel="stylesheet" type="text/css" media="print" href="resources/a2cfeed9-e8c6-4da6-b825-10eb10124f88/print.min.css" id="css_print"/>
<style id="acj">#bld-wrapper{display:none !important;}</style>
<link rel="shortcut icon" href="resources/db04c1d5-1b2e-499f-8387-a10e3b0ad4f2/favicon.ico" type="image/x-icon" />
    <script type="text/javascript">
if (self === top) {
        var acj = document.getElementById("acj");
        acj.parentNode.removeChild(acj)
      } else {
        top.location = self.location
      };
    </script>  



</head>
<body class="bld-dv bld-fp bld-home ">
  <div id="bld-wrapper">
    <header>
<section class="bld-logo">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-12">
        <a target="" title="" href="http://www.belastingdienst.nl/wps/wcm/connect/nl/home" >
          <img id="bld-img-logo" src="resources/0109b942-4d5a-409a-bbb6-9da8bde4a8f3/bld_logo_belastingdienst.png" alt="Logo Belastingdienst"/>
        </a>
      </div>
    </div>
  </div>
</section>
      <section class="navbar bld-sticky">
 <section class="bld-navigation">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <nav role="navigation" class="navbar-collapse collapse" id="bs-navbar">
              <ul class="nav navbar-nav">
                <li class="active"><a target="" title="" href="home.html" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li class="bld-menu-trigger"><a href="#"  class="jshref" data-targetid="#bld-megamenu"><span class="bld-mega-menu-open"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu</span>
				<span class="bld-mega-menu-close hide"><span class="glyphicon glyphicon-remove"></span> Sluiten</span>
				</a>
                  <div class="bld-mega-menu bld-load-menu" id="bld-megamenu" data-url="/wps/wcm/connect/nl/layouts/menu" data-targetid="#bld-target-menu">
                  </div>
                </li>
              </ul>
              
            </nav>

            <div class="navbar-header">
              <div class="dropdown nav navbar-nav navbar-right">
                <button class="bld-no-button dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="bld-login-text"> Inloggen</span></button>
                <div class="dropdown-menu bld-load-menu" data-url="/wps/wcm/connect/nl/layouts/menu" data-targetid="#bld-target-login">
                </div>
              </div>
              


              <form class="navbar-right" action="http://zoeken.belastingdienst.nl/search" method="get">
                <fieldset>
                  <legend class="hidden">Zoeken</legend>
                  <label for="zoekText" class="hidden">Zoeken</label>
                  <input type="text" tabindex="300" value="" maxlength="256" class="input-md bld-search" id="zoekText" name="q" placeholder="Zoeken">
                  <button title="Zoeken" type="submit" class="bld-btn-search" id="zoekBut" name="btnG">
                    <i class="fa fa-search"></i>
                    <span class="label hidden">Zoeken</span>
                  </button>
                  <input type="hidden" value="610_bd_all_nl" name="site">
                  <input type="hidden" value="610_bdienst_nl" name="client">
                  <input type="hidden" value="xml_no_dtd" name="output">
                  <input type="hidden" value="610_bdienst_nl" name="proxystylesheet">
                  <input type="hidden" value="p" name="filter">
                  <input type="hidden" value="*" name="getfields">
                  <input type="hidden" value="0" name="proxyreload">
                  <input type="hidden" value="nl" name="hl">
                </fieldset>
              </form>


              <button class="navbar-toggle collapsed" type="button" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
          </div>
        </div>
      </div>
    </section>







      </section>
    </header>

      <section id="uitgelicht_home"  class="bld-featured bld-section-arrow">
        <div class="container">
          <div class="row packery js-packery">
<div class="item">


<p class="bld-uitgelicht-hoofdzin"><center>HAK-A-TON 2016</center></p>
                


            
<center><img src="hack.jpg" alt="Mountain View" style="height:150px;"></center>
           
        
        </div>
      </section><section id="themalaag" class="bld-theme-items bld-section-arrow">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Belangrijke thema&#39;s</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-xs-12 bld-theme-items-icons">

          <div class="col-sm-4 col-xs-6">
            <div class="bld-theme-item">
              <a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/aangifte_doen/aangifte_doen">
                <img src="resources/39edfc3e-bea5-4e74-9838-1cc075601fb0/bd_icon_aangifte_doen.png" alt=""/>
                <p>Aangifte doen</p>
              </a>
            </div>
          </div>


          <div class="col-sm-4 col-xs-6">
            <div class="bld-theme-item">
              <a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/toeslagen/toeslagen">
                <img src="resources/26d74459-236f-4291-82c0-2bef59189e3f/bd_icon_toeslagen.png" alt=""/>
                <p>Toeslagen</p>
              </a>
            </div>
          </div>


          <div class="col-sm-4 col-xs-6">
            <div class="bld-theme-item">
              <a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/ondernemers/ondernemers">
                <img src="resources/fc0391cd-ca8e-4dfd-8083-5e9b08536152/bd_icon_ondernemers.png" alt=""/>
                <p>Ondernemers</p>
              </a>
            </div>
          </div>


          <div class="col-sm-4 col-xs-6">
            <div class="bld-theme-item">
              <a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/betalenenontvangen/betalen-en-ontvangen">
                <img src="resources/aa7b8438-c799-4fc3-bfbc-9846bff24033/bd_icon_betalen-ontvangen.png" alt=""/>
                <p>Betalen en ontvangen</p>
              </a>
            </div>
          </div>


          <div class="col-sm-4 col-xs-6">
            <div class="bld-theme-item">
              <a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/douane/douane">
                <img src="resources/0447c9f2-e5c1-4982-b253-c8590056a073/bd_icon_douane.png" alt=""/>
                <p>Douane</p>
              </a>
            </div>
          </div>


          <div class="col-sm-4 col-xs-6">
            <div class="bld-theme-item">
              <a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/intermediairs/intermediairs">
                <img src="resources/970dc945-5b2a-467d-b38d-5fc9d41c6f12/bd_icon_intermediairs.png" alt=""/>
                <p>Intermediairs</p>
              </a>
            </div>
          </div>

      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="bld-theme-item bld-theme-item-more">
<ul>
<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/nl/auto-en-vervoer/auto-en-vervoer" >Auto en vervoer</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/campagnes/landingspaginas/prive/digitale_post/digitale_post" >Alles over digitale post</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/belastingdienst/prive/werk_en_inkomen/werk_en_inkomen" >Werk en inkomen</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/belastingdienst/prive/woning/woning" >Woning</a></li>
</ul>

       </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="bld-theme-item bld-theme-item-more">
<ul>
<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/campagnes/landingspaginas/prive/schenken/schenken" >Schenken en schenkbelasting</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/campagnes/landingspaginas/prive/erfbelasting/erfbelasting" >Erven en erfbelasting</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/belastingdienst/prive/relatie_familie_en_gezondheid/relatie_familie_en_gezondheid" >Relatie en familie</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/campagnes/landingspaginas/prive/jongeren/jongeren" >Jongeren</a></li>
</ul>

        </div>
      </div>
    </div>
  </div>
</section><section id="actueel_home" class="bld-news-items bld-section-arrow" data-doelgroep="Particulier,Douane voor bedrijven,Werkgever,Ondernemer,Douane voor particulieren,Intermediair" data-aantalnieuwsberichtentonen="3" data-aantalverstoringentonen="3" data-aantalbelangrijkedatumstonen="3" data-json="/wps/wcm/connect/bldcontentnl/berichten/berichten_uitgebreid.json">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Actueel</h1> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bld-news-item bld-list-news">
          <h2></h2>
          <ul class="bld-hyperlink">
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bld-news-item bld-list-outages">
          <h2></h2>
          <ul class="bld-hyperlink">
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bld-news-item bld-list-dates">
          <h2></h2>
          <ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <section class="bld-footer-square">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 bld-footer-ribbon"></div>
      </div>
    </div>
  </section>
  <section class="bld-footer">
    <div class="container">
      <div class="row">
<div class="col-sm-3">
<h2>Over de Belastingdienst</h2>

<ul class="hyperlinks">
<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/standaard_functies/prive/contact/contact" >Contact</a></li>

<li><a href="https://belastingdienst-in-beeld.nl/" >Over de organisatie</a></li>

<li><a href="https://werken.belastingdienst.nl/" >Werken bij de Belastingdienst</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/standaard_functies/prive/help/help" >Help</a></li>
</ul>

</div>
<div class="col-sm-3 col-xs-12">

<h2>Inloggen</h2>

<ul class="bld-hyperlink">
<li><a href="https://mijn.belastingdienst.nl/mbd-pmb/"  data-cke-saved-href="https://mijn.belastingdienst.nl/mbd-pmb/">Inloggen op Mijn Belastingdienst</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/belastingdienst/prive/toeslagen/inloggen_op_mijn_toeslagen" >Inloggen op Mijn toeslagen</a></li>

<li><a href="https://mijn.belastingdienst.nl/ppa/"  data-cke-saved-href="https://mijn.belastingdienst.nl/Webdiensten/">Inloggen voor ondernemers</a></li>
</ul>

<p>&#160;</p>

<p>&#160;</p>

</div>
<div class="col-sm-3 col-xs-12">

<h2>Over deze site</h2>

<ul class="bld-hyperlink">
<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/niet_in_enig_menu/sitemap/sitemap" >Sitemap</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/niet_in_enig_menu/prive/copyright" >Copyright</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/niet_in_enig_menu/prive/privacy" >Privacy</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/niet_in_enig_menu/prive/cookies" >Cookies</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentnl/niet_in_enig_menu/prive/toegankelijkheid" >Toegankelijkheid</a></li>
</ul>

<p>&#160;</p>

</div>
<div class="col-sm-3 col-xs-12">

<h2>Language</h2>

<ul class="bld-hyperlink">
<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontenten/belastingdienst/individuals/individuals" >English site</a></li>

<li><a href="http://www.belastingdienst.nl/wps/wcm/connect/bldcontentde/belastingdienst/privatpersonen/privatpersonen" >Deutsche Seite</a></li>
</ul>

</div>

      </div>
    </div>
  </section>
</footer>
  </div>
    <div id="bld-nojs">
                          <div class="bld-logo bld-layer-content">
                        <a href="http://www.belastingdienst.nl/" title="Naar de startpagina van de Belastingdienst" ><img id="bld-img-logo" src="resources/0109b942-4d5a-409a-bbb6-9da8bde4a8f3/bld_logo_belastingdienst.png" alt="Belastingdienst" /></a>
                    </div> 
      <div id="bld-nojs-text"><p>Javascript staat uit in deze internetbrowser. U moet <a href="http://www.enable-javascript.com/nl/" >Javascript activeren</a> om onze internetsite te zien.</p>
</div>
    </div>
<script type="text/javascript" src="resources/00e18ee6-65a1-4261-8110-25cbc6bbf4e0/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="resources/956dfa02-43f1-4216-81aa-332cd789f551/belastingdienst.min.js"></script>
<script type="text/javascript" src="../../../../../../f1.eu.readspeaker.com/script/4329/ReadSpeakeraf15.js?pids=embhl&amp;skin=ReadSpeakerClassic"></script>
<script type="text/javascript" src="resources/4e190d45-68e7-475d-9cab-e25282d548e0/bld_js_netstat.js"></script>
<script type="text/javascript" src="../../../../../common_ext/js/bld_next.min.js"></script>
 
<script type="text/javascript" src="resources/abffc37d-e541-4b5d-8140-b110a45b92b1/packery.pkgd.min.js"></script>
<script type="text/javascript">
// <![CDATA[
var iAantalVerstoringenTonen = 3;
var iAantalNieuwsberichtenTonen = 3;
var berichten_json = "/wps/wcm/connect/bldcontentnl/berichten/berichten_uitgebreid.json";
var ovz_url_verstoringen = "";
// ]]>
</script>

<script type="text/javascript">
// <![CDATA[
var json_video="/wps/wcm/connect/bldontwerp/bld/npg-next-v1/video_data.json";
var ns_base = "home";
var ns_para = "";
// ]]>
</script> 
<noscript><p><img src="http://nl.sitestat.com/belastingdienst/belastingdienst/s?home.filterpage" alt="" /></p></noscript>
<noscript><p><img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=20480627" alt="" /></p></noscript> 
<noscript><p><img src="http://pwa001.belastingdienst.nl/piwik/piwik.php?idsite=3&amp;rec=1" alt="" /></p></noscript>





<div id="memo_6738" class="hide ifcookiesaccepted"></div>
<script insocialloader="true" src="../../../../../../survey.insocial.nl/loader/belastingdienst/survey.min8d02.js?case=npg" type="text/javascript"></script>
  </body>

<!-- Mirrored from www.belastingdienst.nl/wps/wcm/connect/nl/home/home by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2016 09:33:20 GMT -->
</html>
