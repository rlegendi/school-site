<?php
define('CURRENT_MENU_INDEX', 2);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Mentorálás</h2>
			
			<p> Elindítottam egy MentorWiki oldalt, ahova a mentorálással, egyetemmel kapcsolatos információkat tettem fel (ez főleg a Gólyáinknak lehet hasznos). </p>
			<p> Az oldal a következő címen érhető el: <a href="http://mentorwiki.dyndns.org/">http://mentorwiki.dyndns.org/</a>. </p>
<?php
}
?>

<?php
function getSidebar() {
	return getLecturesSidebar();
}

require( 'template.php' );
?>
