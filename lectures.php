<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Lectures</h2>
			<p> Sorry, there is no English version yet &#9785;</p>
			
			<h3>Java - Általános információk</h3>
			
			<p> A Javas tárgyak előadója az egyetemen <a href="http://kto.web.elte.hu/">Kozsik Tamás</a> tanár úr, az előadás fóliáit
				az ő oldalán tölthetitek le. </p>
			
			<p> A következőkben a Javas tárgyakkal kapcsolatos általános, <u>előzetes</u> információkat olvashattok.
				<u>Fontos</u>, hogy az adott félév során ezek az általános pontok módosulhatnak, ilyenkor ezt mindenképp
				jelzem a gyakorlatokon, valamint a tárgyhoz tartozó aloldalon. </p>
			
			<p> A teljes gyakorlati anyag tartalma elérhető az alábbi linken a <a href="https://github.com/">Githubon</a>.
				Vegyétek, vigyétek, töltsétek le, írjátok át, és ha találtok valamit, dobjatok egy pull requestet! </p>
			
			<ul>
			<li> <strong>Project URL</strong>: <a href="https://github.com/rlegendi/ELTE-javagyak">https://github.com/rlegendi/ELTE-javagyak</a></li>
			<li><a href="https://github.com/rlegendi/ELTE-javagyak">Readme</a></li>
			<li><a href="https://github.com/rlegendi/ELTE-javagyak/archives/master">Letöltés</a></li>
			<li><a href="https://github.com/rlegendi/ELTE-javagyak/wiki">Wiki</a></li>
			</ul>
			</p>
			
			<p id="info"> Amennyiben úgy ítéled, hogy nagyon <u>sok ráérő időd van</u>, <u>jól megy az angol</u>, és
				<u>szívesen dolgoznál szakszövegen</u>, keress meg <script language="JavaScript">customMailAddress('e-mailben', 'leriaat', 'elte.hu')</script>!
				
				A fenti anyagot folyamatosan igyekszem bővíteni, és ebben mindig jól jön a segítség. <u>Kompenzációnak + pontokat</u> tudok felajánlani,
				illetve a jóleső érzést, hogy segítéttél az utánad jövő generáció szakmai útját egyengetni &#9786; </p>
			
			<h4>Érdemjegy megszerzésének feltételei</h4>
			Az oktatott tárgyakból az érdemjegy megszerzésének általános feltételei a következők:
			<ul>
			<li> Az órákon <strong>jelenléti ívet</strong> vezetek, a Hallgatói Követelmény Rendszerben foglaltak szerint. </li>
			<li> Minden órán írunk +/- feladatokat, általában kettőt. Ezek rövid, straightforward feladatok az adott gyakorlat anyagából.
				 Órán bemutatásért +, még a gyakorlat napján e-mailben elküldéséért 0, minden egyéb esetben - jár. </li>
			<li> A félév végén <strong>legalább 0 legyen a kumulatív +/- összeg</strong>. </li>
			<li> Kiemelkedő +/- értéket csak az év végi érdemjegy kerekítésénél tudok figyelembe venni. </li>
			<li> A félév során több beadandó feladat is lesz, általában kettő. Ezek <i>megfelelt</i>, illetve <i>nem megfelelt</i>
				 minősítést kapnak. <strong>A beadandó feladatokat el kell készíteni.</strong> </li>
			<li> <strong>Két zárthelyi dolgozat legalább elégségesre teljesítése.</strong> Ezek általában 2-3 órás géptermi zárthelyik, ami vagy egy komplex
				 feladat (ahol annak kölünböző részeinek implementálásával szerezhető jobb jegy, amelyhez tesztfájlokat biztosítunk az
				 értékelés objektivitása végett), vagy több kisebb, lényegretörő feladat megoldásából áll. </li>
			<li> <strong>Elméleti számonkérés.</strong> A második ZH része egy elméleti teszt, ami az előadás anyagából építkezik. <em>Fontos,
				 hogy járjatok előadásra, különben borzalmasan nehéz elégségesre teljesíteni ezt a tesztet.</em> Amennyiben megoldható a hallgatói
				 létszám függvényében, elméleti vizsga is lehetséges teszt helyett. Ekkor a kiadott tételsor alapján külön vizsgák alkalmával
				 szerezhető elméleti érdemjegy.</li>
			</ul>
			
			<h4>Beadandó feladatokkal kapcsolatos <u>előzetes</u> információk</h4>
			<p> Beadandó feladatból általában 2 van a félév során. Az elkészült feladatokat nekem küldjétek el személyesen,
				e-mailben a <script language="JavaScript">mailAddress('leriaat', 'elte.hu')</script> címre! Ezeket én
				fogom személyesen értékelni, <em>megfelelt</em>, illetve <em>nem megfelelt</em> minősítést kaphattok rá.</p>
			
			<p> Beadási határidő a zárthelyi dolgozat előtti hét valamelyik napja, ezt mindig pontosan megtaláljátok az
				adott félévre kiírt feladat leírása mellett. Az adott hétre külön +/- feladat nem szokott lenni, hogy a
				beadandó feladatra koncentrálhassatok. </p>
			
			<h4>Zárthelyivel kapcsolatos <u>előzetes</u> információk</h4>
			<p> A zárthelyi dolgozattal kapcsolatban a következő általános, előzetes információk vannak.</p>
			<ul>
			<li> <strong>Gyülekező</strong> fél órával a ZH időpontja előtt <strong>a lovi bejáratánál</strong>.</li>
			<li> Laptop, egyéb (pl. írásos) <strong>segédeszköz nem használható</strong>.</li>
			<li> Elvileg <strong>korlátozott internet elérés lesz</strong>. A <em>Java referencia</em> mindenképp (ezért
				 erősen ajánlott a félévben ezt aktívan használni), de általában a <em>Java Tutorial</em>, valaminit a
				 <em>Java Language Specification</em> is elérhető szokott lenni.</li>
			<li> <strong>IDE</strong> (NetBeans, Eclipse) <strong>nem használható</strong> a ZH-n. Az <strong>elméleti
				 tesztnél fordító sem</strong>, ez <strong>automatikus jegymegtagadást von maga után</strong>!</li>
			<li> A <strong>2. ZH elméleti teszttel</strong> kezdődik, ahol a kérdések az előadás anyagából lesznek. </li>
			<li> Akinek nem sikerül esetleg az elméleti teszt, ne essen kétségbe, majd pót ZH-n nekifuthat még egyszer.
				 A feladatnak az elméleti teszt eredményétől függetlenül neki lehet ugrani. </li>
			<li> Ha sikerül megfelelni a féléves követelményeknek, 3 jegy alapján (<em>2 zárthelyi dolgozat és az elméleti teszt
				 azonos súlyokkal, +/- eredmények figyelembevételével</em>) meg is kapjátok a jegyet. <br/>
				 Ha nem vagy elégedett az általam meghatározott érdemjeggyel, keress meg személyesen, megbeszélhetjük a dolgot. </li>
			<li> Jegybeírás a vizsgaidőszakban a szorgalmi időszakra meghírdetett fogadóórák, illetve a gyakorlat időpontjában lehetséges. </li>
			</ul>
			
			<p>
			<em> Ezek mind előzetes infók, úgy kezeljétek őket plz. A zárthelyi dolgozatig még változhat a felállás, de
				 ez látszik általánosan biztosnak. Ha ZH-n mást állítanak, akkor azt tekintsétek érvényesnek; ha valami
				 kétség merül fel bennetek, inkább kérdezzetek rá valakinél!</em>
			</p>
			
			<h4>Ajánlott irodalom</h4>
			<ul>
			<li> Nyékiné Gaizler Judit (szerk.) et al.: <b>Java 2 Útikalauz Programozóknak 5.0, I-II. kötet</b>,
				 Budapest, ELTE TTK Hallgatói Alapítvány, ISBN: 9789630640923, 2009.</li>
			
			<li> Joshua Bloch: <b>Effective Java: Programming Language Guide</b>,
				 Prentice Hall PTR, 2nd edition, ISBN-10: 0321356683, ISBN-13: 978-0321356680, May 28, 2008.</li>
			
			<li> Brian Goetz et al.: <b>Java Concurrency in Practice</b>,
				 Addison-Wesley Professional, ISBN-10: 0321349601, ISBN-13: 978-0321349606, May 19, 2006.</li>
			
			<li> Nyékyné Gaizler Judit (szerk.) et al.: <b>Programozási nyelvek</b>,
				 Budapest, Kiskapu, ISBN: 9639301469, 2003.</li>
			
			<li> Online anyagok:
				<ul>
				<li>Angelika Langer: <a href="http://www.angelikalanger.com/GenericsFAQ/JavaGenericsFAQ.html">Java Generics FAQs</a></li>
				</ul>
			</li>
			</ul>
			
			<h4>Linkek</h4>
			
			<ul>
			<li><a href="http://aszt.inf.elte.hu/~kto/teaching/java/">A tárgy honlapja</a> (<a href="http://kto.web.elte.hu/">Kozsik Tamás</a> oldala)</li>
			
			<li>Gyakvezek oldalai:
			<ul>
			<li><a href="http://kacsi3.web.elte.hu/">Batha Dorián</a></li>
			<li><a href="http://fi.inf.elte.hu/~gobi/">Góbi Attila</a></li>
			<li><a href="http://people.inf.elte.hu/lesda/java/">Leskó Dani</a></li>
			<li><a href="http://people.inf.elte.hu/butus/">Nagy Zoltán</a></li>
			<li><a href="http://people.inf.elte.hu/kisuf/">Szabó Attila</a> (kisufo)</li>
			<li><a href="http://people.inf.elte.hu/maugli/">Szabó Attila</a> (maugli)</li>
			</ul>
			</ul>
			
			<ul>
			
			<li><a href="http://www.oracle.com/technetwork/java/index.html">A Oracle Java oldala</a></li>
			<li><a href="http://download.oracle.com/javase/6/docs/api/">Teljes Java 1.6 referencia</a></li>
			<li><a href="http://download.oracle.com/javase/tutorial/">The Java Tutorial</a>
				(<a href="http://download.oracle.com/javase/tutorial/reallybigindex.html">The Really Big Index</a>)
				</li>
			<li><a href="http://mindprod.com/jgloss/jgloss.html">Canadian Mind Products Java & Internet Glossary</a> Egy kiváló kanadai oldal, amely kinézete
			ellenére igen jó, tartalmas és részletes leírásokat, tutorialokat tartalmaz.</li>
			
			<li> Community
			<ul>
			<li><a href="http://lists.javaforum.hu/mailman/listinfo/javalist">Java levlista</a></li>
			<li><a href="http://javagrund.hu/web/java/index">Javagrund</a></li>
			<li><a href="http://www.javaforum.hu/javaforum">Javaforum</a></li>
			<li><a href="http://www.javaranch.com/">JavaRanch - a friendly place for Java greenhorns!</a> Java Fórum</li>
			<ul> IRC csatornák
			<li><a href="irc://irc.freenode.net/#java">Freenode#Java</a> Ezzel azért csak offtosan, sok az ember, a flame meg a szájtépés, és néha elég nagy hülyeségeket beszélnek
			a srácok... Szóval fenntartásokkal kezelni!</li>
			<li><a href="irc://irc.freenode.net/#eclipse">Freenode#Eclipse</a> Ez azért egy nagyságrendekkel jobb hely, elég segítőkészek az emberek. Azzal azért
			számoljatok, hogy főleg amerikaiak vannak, emiatt leginkább délután van komolyabb aktivitás.</li>
			</ul>
			</ul>
			</li>
			
			<li>Környezetek
			<ul>
			<li><a href="http://www.eclipse.org/downloads/">Eclipse</a> (Egy jó <a href="http://eclipsetutorial.sourceforge.net/">tutorial</a>, amely <a href="http://sourceforge.net/projects/eclipsetutorial/files/1.%20Total%20Beginners-Hungarian/Version%201.0/">magyarul is elérhető</a>)</li>
			<li><a href="http://netbeans.org/downloads/">NetBeans</a></li>
			</ul>
			</li>
			
			<li><a href="http://java.sun.com/docs/books/jls/">Java Language Specification</a> Harmadik kiadás, HTML, PDF formátumban.</li> 
			<li>Dr. Heinz Kabutz <a href="http://www.javaspecialists.eu/">Java Specialists'</a> hírlevele</li>
			<li>A <a href="http://leriaat.web.elte.hu/">régi Javas oldalam</a>. Felelősséget nem vállalok egyetlen itt található információért, kódért, linkért sem.
			Ezt az oldalt kb. 6 éve csináltam, akkor jó ötletnek tűnt (fiatal voltam, kellett a pénz :-)), de letörölni nincs szívem.
			Ugyanakkor talán hasznos lehet pár apróbb példakód.</li>
			<li><a href="http://rymden.nu/exceptions.html">Explanations of Common Java Exceptions</a>. Mielőtt komolyan vennétek, ez csak poén, de ha megragad
			1-2 Exception neve, akkor már megérte átröhögni :-) Thx to Björn Andersson!</li>
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
