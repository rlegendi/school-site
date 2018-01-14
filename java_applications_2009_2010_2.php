<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Java alkalmazások, 2009 - 2010 / 2. félév</h2>
			<p> IP-bJAG/1, Kedd 08:00-10:00, 2-123 (PC1) <br/>
				IP-bJAG/5, Kedd 10:00-12:00, 2-202 (PC3) </p>
			
			<h3>Gyakorlati órák anyagai</h3>
			<p>A gyakorlatok során az alábbi anyagokból dolgozunk.</p>
			
			<h4>1. ZH anyaga</h4>
			...
			
			<h4> 2. ZH anyaga </h4>
			...
						
			<h3>Beadandó Feladatok</h3>
			...
			
			<h3>ZH Időpontok</h3>
			...
			
			<h3>Eredmények</h3>
			...
<?php
}
?>

<?php
function getSidebar() {
	return getLecturesSidebar();
}

require( 'template.php' );
?>
