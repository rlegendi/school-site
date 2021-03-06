<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Programozási nyelvek II. (Java)</h2>
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
				<li>Gyakorlás, zárthelyi dolgozatra való felkészülés</li>
				</ol>
			</li>
			<li>A második zárthelyi dolgozat anyaga
				<ol>
				<li>Csatornák fogalma, fájlkezelés</li>
				<li>A gyűjtemény keretrendszer</li>
				<li>Generic típusok</li>
				<li>Gyakorlás, zárthelyi dolgozatra való felkészülés</li>
				</ol>
			</li>
			</ul>

			<h3>Szóbeli vizsga</h3>
			<p> Akinek esetleg nem sikerült volna a pót elméleti tesztje, szóbeli vizsgán szerezhet gyakorlati jegyet.
				Ennek <a href="resources/java/programozasi_nyelvek_2_java_szobeli_tematika.txt">tematikája</a> az előadás anyagát követi. </p>
<?php
}
?>

<?php
function getSidebar() {
	return getLecturesSidebar();
}

require( 'template.php' );
?>
