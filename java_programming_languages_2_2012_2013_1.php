<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Programozás nyelvek 2 GY. (C++, Java, C#) (Web-programozó), 2011 - 2012 / 1. félév</h2>
			<p> IK-fszwPNY2EG/1 (BSc,08,C), Péntek 8:00-10:00, D 2-107 (PC2) </p>
			
			<h3>Gyakorlati órák anyagai</h3>
			<p>A gyakorlatok során az alábbi anyagokból dolgozunk (a teljes oktatási anyag megtalálható
			   az <a href="https://github.com/rlegendi/ELTE-javagyak">ELTE-javagyak Github</a> repóban).</p>
			
			<h4>A gyakorlat anyagai</h4>
			
			<ul>
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/01-bevezetes/01-bevezetes.md">1. gyak</a> 
			     [<a href="resources/java/src/gyak1_src.zip">Forráskódok</a>]
			Forrásfájl szerkesztés. Java letöltés, telepítés, konfigurálás (path).
			Fordítás, futtatás. API dokumentáció. Hello world. vezérlési
			szerkezetek. Csomag fogalma, több csomagól álló program fordítása és
			futtatása. </li>
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/02-fuggvenyek-csomagok/02-fuggvenyek-csomagok.md">2. gyak</a>
			     [<a href="resources/java/src/gyak2_src.zip">Forráskódok 1</a>] [<a href="resources/java/src/gyak3_src.zip">Forráskódok 2</a>]
			További egyszerű programok primitív típusokkal. Deklarációk,
			utasítások. Függvények, paraméterek. </li>
			
			<li>
			    <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/03-alapozas/03-alapozas.md">3. gyak</a>
			    Felhasználói interakció, alapok átfutása (tömbök, többdimenziós tömbök, karakterláncok).
			    Parancssori argumentumok használata. <code>Integer.parseInt()</code>.
			</li>
			
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/04-oo-alapok/04-oo-alapok.md">4. gyak</a>
			     [<a href="resources/java/src/gyak4_src.zip">Forráskódok</a>]
				 Osztályok, objektumok létrehozása, objektum-orientált alapok, metódusok hívása.
				 Konstruktorok. Statikus tagok. A java.io.Console használata.
				 Dokumentációs megjegyzések, javadoc használata.
			</li>
			
			<li>
			     <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/05-oo-adt/05-oo-adt.md">5. gyak</a>
			     Absztrakt osztályok, interfészek, saját típusok definiálása, származtatás. Öröklődés, felüldefiniálás.
				 Altípusosság. Altípusos polimorfizmus. Bázisosztályra definiált kódok használata alosztállyal. Heterogén tömb.
				 Interfészek.
			</li>
			
			<li> <b>6. gyak</b> Gyakorló feladatok, <b>beadandó kiírás</b>
				<ol>
				<li> <a href="http://balulap.hu/elte/gyak/mintazh.html ">Balu által készített minta-ZH feladat</a> (tavalyi)</li>
				<li> <a href="http://pastebin.com/xEDZ1fXj">Láncolt lista megvalósítása</a> </li>
				<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/06-oo-gyakorlas/06-oo-gyakorlas.md">Gyakorló feladatok</a></li>
				<li> <a href="resources/java/beadandok/2011_2012_1/bead1/index.html">Egy tavalyi beadandó</a> </li>
				<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/H-felkeszito-feladatok/zh_gyak.md">Tavalyi 2. ZH</a> (<i>Collections, perzisztencia nélkül</i>) </li>
				</ol>
			</li>
			</ul>
			
			<li><b>7. gyak</b> Szünet</li>
			
			<ul>
			
			<li> <b>Beadandó értékelés</b> <br/>
					<a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/07-io/07-io.md">8. gyak</a>
					<a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/08-io-gyak/08-io-gyak.md">8. gyak / 2</a>
					<a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/E-assert/E-assert.md">8. gyak / 3</a>
					
					Csatornák fogalma, fájlkezelés, <tt>java.io.BufferedReader</tt>, <tt>java.io.PrintWriter</tt> osztályok. Kivételkezelés.
					Assert utasítás.
				    Előfeltételek ellenőrzése, IllegalArgumentException.
			</li>	
			
			<li> <a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/09-collections/09-collections.md">9. gyak</a> Generic. Collections használata. Generikus adatszerkezet megvalósítása. </li>
			
			<li>
				<a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/10-generics/10-generics.md">10. gyak</a>
				Generic típusok
			</li>
			
			<li>
				<b>11. gyak</b>
				Ismétlés.
			</li>
			<li>
				<a href="https://github.com/rlegendi/ELTE-javagyak/blob/master/ZH-felkeszito-feladatok/lotto/lotto.md">12. gyak</a>
				ZH felkészítő feladat
			</li>
			<li>
				<b>13. gyak</b>
				<b>ZH</b>
			</li>
			</ul>
			
			<h3>Beadandó Feladatok</h3>
			<p>Beadandó feladatból egy lesz a félév során. <!-- A feladatkiírások megtalálhatók majd <a href="http://aszt.inf.elte.hu/~kto/teaching/java/">Kozsik Tamás oldalán</a>. -->
			Az elkészült beadandókat nekem küldjétek el, e-mailben a <script language="JavaScript">mailAddress('leriaat', 'elte.hu')</script> címre!</p>
			
			<ul>
			<li> <b><a href="resources/java/beadandok/2012_2013_1/index.html">Az első beadandó feladat kiírása</a></b><br/>
				 <b>Beadási határidő:</b> 2011. november 8. (<i>a szünet utáni hét, ellenőrzés a gyakorlat alatt</i>)<br/>
				 <!--Az <a href="resources/java/beadandok/2011_2012_1/bead1/index.html">első feladat kiírása</a>.
				 [<a href="resources/java/beadandok/2011_2012_1/elte-java-mandex-2011-2012-I-1.zip">Megoldás</a>]--></li>
			</ul>
			
			<h3>ZH Időpontok</h3>
			
			<p>
			Utolsó gyakorlat alkalmával.
			</p>
			
			<!--
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
			-->
			
			<h3>Eredmények</h3>
			<p>
			A +/-, beadandó és zárthelyi eredmények:
			</p>
			
			<ul>
			<li>[<a href="resources/java/eredmenyek/2012_2013_1/res_1.txt">1. csoport</a>] Péntek 8:00-10:00</li>
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
