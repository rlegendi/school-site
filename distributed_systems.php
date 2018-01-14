<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Osztott rendszerek</h2>
			<p>A tárggyal kapcsolatos általános, <b>előzetes</b> információk. <b>Fontos</b>, hogy
				az adott félév során ezek az általános pontok módosulhatnak, ilyenkor ezt mindenképp jelzem a
				gyakorlatokon, valamint a tárgyhoz tartozó aloldalon.</p>

			<h3>Gyakorlat tematika</h3>
			<p> A gyakorlat tematikája nagyjából a következő felépítést követi. Sajnos az elején kicsit rohanós, tömény
				lehet az anyag, de inkább a ZH időszak előtt terhellek titeket, mint az alatt. </p>
			
			<ol>
			<li>Bevezető óra. Általános ismeretek a Java nyelvről, <code>"Hello World!"</code> program, fordítás, futtatás.</li>
			<li>Alapok. Primitív típusok, tömbök, karakterláncok, referenciák, felhasználói interakció (konzolos).</li>
			<li>Függvények, kivételek, csomagok.</li>
			<li>A gyűjtemény keretrendszer</li>
			<li>Csatornák fogalma, fájlkezelés</li>
			<li>Networking</li>
			<li>Szerializáció, RMI</li>
			<li>Reflection, JDBC</li>
			</ol>
			
			<h3>Linkek</h3>
			<ul>
			<li><a href="http://people.inf.elte.hu/toth_m/or/">A tárgy honlapja</a> (<a href="http://people.inf.elte.hu/toth_m/">Tóth Melinda</a> oldala)</li>
			
			<li>Gyakvezek oldalai:
			<ul>
			<!-- Nem publikus, de ha megtaláltad, viheted :-) -->
			<!-- <li><a href="http://people.inf.elte.hu/bonnie/or/">Mészáros Móni</a></li> -->
			<li><a href="http://kitlei.web.elte.hu/">Kitlei Robi</a> (ld. előző félévek anyagai,
					<a href="http://kitlei.web.elte.hu/segedanyagok/elozo_felevek_anyagai/2009-2010-tavasz/osztott-h14/">2009-2010</a>,
					<a href="http://kitlei.web.elte.hu/segedanyagok/elozo_felevek_anyagai/2010-2011-tavasz/osztott/">2010-2011</a>, etc.)</li>
			<li><a href="http://artyom.web.elte.hu/">Antyipin Artyom</a> (ld. <i>Oktatás &rarr; Osztott Rendszerek</i>)</li>
			</ul>
			</ul>
						
			<h3>Ajánlott irodalom</h3>
			<ul>
			<li>A. S. Tanenbaum, M. V. Steen: Distributed Systems: Principles and Paradigms (<i>2nd ed.</i>), Prentice Hall, 2007
				(<i>hivatalos tananyag</i>)</li>
			<li>A. S. Tanenbaum, M. V. Steen: <b>Elosztott rendszerek - Alapelvek és paradigmák</b>, Panem, 2004</li>
			<li>J. M. Crichlow: <b>Elosztott rendszerek</b>, Kiskapu, 2003</li>
			<li>W. Jia, W. Zhou: <b>Distributed Network Systems - From concepts to Implementations</b>, Springer, 2005</li>
			<li>G. Coulouris, J. Dollimore, T. Kindberg: <b>Distributed Systems - Concepts and design</b>, Addison Wesley, 2005</li>
			<li>J. Bacon, T. Harris: <b>Operating Systems - Concurrent and distributed software design</b>, Addison Wesley, 2003</li>
			<li>M. Crovella, B. Krishnamurthy: <b>Internet measurement - Infrastructure, traffic, and applications</b>, John Whiley &amp; Sons, 2006</li>
			</ul>
			
<?php
}
?>

<?php
function getSidebar() {
	return getLecturesSidebar();
}

require( 'template.php' );
?>
