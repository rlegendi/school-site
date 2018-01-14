<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Programozási nyelvek II. (Java), 2011 - 2012 / 1. félév</h2>
			<p> IP-08ctPNY2EG/1 (BSc,08,C), Csütörtök 10:00-12:00, D 00-411 (PC7) <br>
				IP-08ctPNY2EG/2 (BSc,08,C), Csütörtök 8:00-10:00, D 2-124 (Microsoft Labor) </p>
			
			<h3>Gyakorlati órák anyagai</h3>
			<p>A gyakorlatok során az alábbi anyagokból dolgozunk.</p>
			
			<h4>1. ZH anyaga</h4>
			
			<ul>
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/01-bevezetes/01-bevezetes.md">1. gyak</a> 
			     [<a href="resources/java/src/gyak1_src.zip">Forráskódok</a>]
			Forrásfájl szerkesztés. Java letöltés, telepítés, konfigurálás (path).
			Fordítás, futtatás. API dokumentáció. Hello world. vezérlési
			szerkezetek. Csomag fogalma, több csomagól álló program fordítása és
			futtatása. </li>
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/03-alapozas/03-alapozas.md">2. gyak / 1</a>,
			     <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/02-fuggvenyek-csomagok/02-fuggvenyek-csomagok.md">2. gyak / 2</a>
			     [<a href="resources/java/src/gyak2_src.zip">Forráskódok 1</a>] [<a href="resources/java/src/gyak3_src.zip">Forráskódok 2</a>]
			További egyszerű programok primitív típusokkal. Deklarációk,
			utasítások. Függvények, paraméterek. Tömbök használata alapszinten.
			Parancssori argumentumok használata. Integer.parseInt. </li>
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/04-oo-alapok/04-oo-alapok.md">3. gyak</a>
			     [<a href="resources/java/src/gyak4_src.zip">Forráskódok</a>]
			Objektumok létrehozása, metódusok hívása. Swing-es példák. (JFrame,
			setSize, setVisible, GUI komponensek létrehozása.) Tömbök létrehozása.
			String és StringBuilder. </li>
			
			<li> Osztályok definiálása. Attribútumok, metódusok. Public-private. Stack
			adatszerkezet megvalósítása tömbbel (double elemekkel). Referenciák,
			dinamikus memória, gc. </li>
			
			<li> Konstruktorok. Statikus tagok. A java.io.Console használata.
			Dokumentációs megjegyzések, javadoc használata. </li>
			
			<li> További 1-2 óra gyakorlásra
				<ol>
				<li> <a href="resources/java/beadandok/2011_2012_1/bead1/index.html">I. beadandó</a> :-) </li>
				<li> <a href="http://balulap.hu/elte/gyak/mintazh.html ">Balu által készített minta-ZH feladat</a> </li>
				<li> <a href="http://pastebin.com/xEDZ1fXj">Láncolt lista megvalósítása</a> </li>
				<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/06-oo-gyakorlas/06-oo-gyakorlas.md">Gyakorló feladatok</a></li>
				<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/05-oo-adt/05-oo-adt.md">Absztrakt adattípus</a> (<i>csak a mátrixos feladat, a többi csak a bátrabbaknak</i>) </li>
				<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/H-felkeszito-feladatok/zh_gyak.md">Tavalyi 2. ZH</a> (<i>Collections, perzisztencia nélkül</i>) </li>
				</ol>

			</li>
			</ul>
			
			<h4> 2. ZH anyaga </h4>
			
			<ul>
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/05-oo-adt/05-oo-adt.md">8. gyak</a>
			     [<a href="resources/java/src/gyak5_src.zip">Forráskódok</a>]
				 Öröklődés, felüldefiniálás.
				 Altípusosság. Altípusos polimorfizmus. Bázisosztályra definiált kódok használata alosztállyal. Heterogén tömb.
				 Interfészek. Swinges eseménykezelés. </li>
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/07-io/07-io.md">10. gyak / 1</a>,
			     <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/08-io-gyak/08-io-gyak.md">10. gyak / 2</a>
			     <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/E-assert/E-assert.md">10. gyak / 3</a>
				Kivételkezelés. A java.io és a fájlok. DataStream-ek. Assert utasítás.
				 Előfeltételek ellenőrzése, IllegalArgumentException. </li>
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/09-collections/09-collections.md">9. gyak</a> Generic. Collections használata. Generikus adatszerkezet megvalósítása. </li>
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/D-enum/D-enum.md">11. gyak / 1</a>,
				 <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/D-enum/enum-tutorial-full-hun.md">11. gyak / 2</a> Az equals(), clone(), hashCode() használata. Felsorolási típusok. Láncolt adatszerkezet
			definiálása (pl. bináris fa). </li>
			
			<li> További 1-2 óra gyakorlásra </li>
			</ul>
			
			
			<h3>Beadandó Feladatok</h3>
			<p>Beadandó feladatból 2 lesz a félév során. <!-- A feladatkiírások megtalálhatók majd <a href="http://aszt.inf.elte.hu/~kto/teaching/java/">Kozsik Tamás oldalán</a>. -->
			Az elkészült beadandókat nekem küldjétek el, e-mailben a <script language="JavaScript">mailAddress('leriaat', 'elte.hu')</script> címre!</p>
			
			<ol>
			<li> <b>Kiírás:</b> október 14., <b>Beadási határidő:</b> október 21.<br/>
				 Az <a href="resources/java/beadandok/2011_2012_1/bead1/index.html">első feladat kiírása</a>.
				 [<a href="resources/java/beadandok/2011_2012_1/elte-java-mandex-2011-2012-I-1.zip">Megoldás</a>]</li>
			<li> <b>Kiírás:</b> december 10., <b>Beadási hatáidő:</b> január 1.<br/>
				 A <a href="http://people.inf.elte.hu/tmark/java/bead2.txt">második feladat kiírása</a>
				 [<a href="resources/java/beadandok/2011_2012_1/bead2/bead2.txt">archivált feladatkiírás</a>].</li>
			</ol>
			
			<h3>ZH Időpontok</h3>
			Ezek <i>előzetes</i> időpontok, esetlegessen még változhatnak! <b>Gyülekező:</b> a lovi előtt! A zárthelyi dolgozatokat két részletben,
			egyenként 3 óra alatt írjuk (némi csúszást is megengednek a foglalt időpontok).
			
			<ul>
			<li> <b>1. ZH:</b> 2011. október 28. (péntek) 12:00-20:00
			[<a href="resources/java/zh/elte-javazh-2011-2012-I-1-AB.zip">Feladatok</a> - A, B csoport, megoldással]
			</li>
			<li> <b>2. ZH:</b> 2012. január 5. (csütörtök) 12:00-20:00
			[<a href="resources/java/zh/elte-javazh-2011-2012-I-2-AB.zip">Feladatok</a> - A, B csoport]
			</li>
			<li> <b>Pót ZH:</b> 2012. január 12. (csütörtök) 12:00-20:00
			[<a href="resources/java/zh/elte-javazh-2011-2012-I-3-AB.zip">Feladatok</a> - A, B csoport, megoldással]
			</li>
			</ul>
			
			<h3>Eredmények</h3>
			<p>
			A +/-, beadandó és zárthelyi eredmények:
			</p>
			
			<ul>
			<li>[<a href="resources/java/eredmenyek/2011_2012_1/res_1.txt">1. csoport</a>] Csütörtök 10:00-12:00</li>
			<li>[<a href="resources/java/eredmenyek/2011_2012_1/res_2.txt">2. csoport</a>] Csütörtök 8:00-10:00</li>
			</ul>
			
			<p> 
			<em>Akinek bármi kérdése, észrevétele lenne a jegyekkel kapcsolatban, jelezze!</em>
			</p>
<?php
}
?>

<?php
function getSidebar() {
	return getLecturesSidebar();
}

require( 'template.php' );
?>
