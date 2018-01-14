<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Java alkalmazások</h2>
			<p>A tárggyal kapcsolatos általános, <u>előzetes</u> információk. <u>Fontos</u>, hogy
				az adott félév során ezek az általános pontok módosulhatnak, ilyenkor ezt mindenképp jelzem a
				gyakorlatokon, valamint a tárgyhoz tartozó aloldalon. </p>
			
			<h3>Gyakorlat tematika</h3>
			<p> A gyakorlat tematikája nagyjából a következő felépítést követi. Sajnos az elején kicsit rohanós, tömény
				lehet az anyag, de inkább a ZH időszak előtt terhellek titeket, mint az alatt. </p>
			
			<ul>
			<li>Az első zárthelyi dolgozat anyaga
				<ol>
				<li>Bevezető óra. Általános ismeretek a Java nyelvről, <code>"Hello World!"</code> program, fordítás, futtatás.</li>
				<li>Alapok. Primitív típusok, tömbök, karakterláncok, referenciák, felhasználói interakció (konzolos).</li>
				<li>Függvények, kivételek, csomagok.</li>
				<li>Osztályok, objektumok, objektum-orientált alapok.</li>
				<li>Absztrakt adattípus.</li>
				<li>A gyűjtemény keretrendszer</li>
				<li>Generic típusok</li>
				</ol>
			</li>
			<li>A második zárthelyi dolgozat anyaga
				<ol>
				<li>Csatornák fogalma, fájlkezelés</li>
				<li>Networking</li>
				<li>Szerializáció, RMI</li>
				<li>Grafikus felhasználói felületek</li>
				<li>Reflection, JDBC</li>
				</ol>
			</li>
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
