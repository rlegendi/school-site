<?php
define('CURRENT_MENU_INDEX', 4);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Contact</h2>
			
			<p>
			Please find my contact information below.
			</p>
			
			<h3>E-mail</h3>
			<p>
				<script language="JavaScript">mailAddress('legendi', 'inf.elte.hu')</script>
			</p>
			
			<h3>Mailing Address</h3>
			<p>
				Department of Programming Languages and Compilers<br/>
				Faculty of Informatics<br/>
				Eötvös Loránd University
			</p>
			
			<p>	
				Budapest, Pázmány Péter sétány I/C.<br/>
				H-1117, Hungary<br/>
			</p>
			
			<h3>Phone Numbers</h3>
			<ul>
				<li>Office: 00 36 1 372 25 00 / 8498</li>
				<li>Fax: 00 36 1 381 21 40, +36 1 381 21 85</li>
			</ul>
			
			<h3>Office</h3>
			<p>Southern Building, 00.503</p>
			
			<h3>Office Hours</h3>
			<ul>
				<li>Monday: 16:00-17:00</li>
				<li>Thursday: 9:00-10:00</li>
				
			</ul>
			<p> To request a personal appointment out of the specified office hours, an
				<script language="JavaScript">customMailAddress('e-mail', 'leriaat', 'elte.hu')</script>
				usually leads to a meeting within the next three days (except during holidays and business trips).</p>
			
			<!--
			<h3>Lessons Schedule</h3>
			<p>I can be found at the university most likely each Thursday and Friday. My current schedule may be found here.</p>
			-->
<?php
}
?>

<?php
function getSidebar() {
?>
			<h2>Photo</h2>
			<img src="images/meh.png" alt="Richard O. Legendi" />
			<p id="info"> Picture taken at Lisbon, on the trip to the 14th Portuguese Conference on Artificial Intelligence, <a href="http://epia2009.web.ua.pt/">EPIA'2009</a>.</p>
		
			<!--
			<h2>Bio</h2>
			<ul>
				<li><a href="index.php">Short bio</a></li>
				<li><a href="resume.html">Resumé</a></li>
			</ul>
			-->
<?php
}
require( 'template.php' );
?>
