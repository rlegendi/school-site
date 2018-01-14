<?php
define('CURRENT_MENU_INDEX', 1);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Research</h2>
			<p> You can find some information about my research activity below.</p>
			
			<h3>Grants and Awards</h3>
			<ul>
				<li>(2012) <a href="links.php#gsoc-2012">Google Scholarship</a> Accepted student for Google Summer of Code 2012 program. </li>
				<li>(2011) <a href="links.php#gsoc-2011">Google Scholarship</a> Accepted student for Google Summer of Code 2011 program. </li>
				<li>(2011) I was accepted as one of the delegates to participate at the <a href="http://www.simian.ac.uk/courses/essa-summer-school-2011">2nd ESSA Summer School</a> on Agent-Based Modelling</li>
				<li>(2011) John von Neumann Research Scholarship at Eötvös Loránd University to <i>Study Cumulative Properties of Elementary Dynamic Networks</i></li>
			</ul>
			
			<h3>Memberships</h3>
			<ul>
				<li> <i>(2010-)</i> European Social Simulation Association (ESSA), <a href="http://www.essa.eu.org/">http://www.essa.eu.org/</a><br/>
					 <i>(2011-)</i> I am one of the <a href="http://www.essa.eu.org/newsletter">ESSA Newsletter</a> Editor-in-Chiefs with <a href="http://uni-kassel.academia.edu/SaschaHolzhauer">Sascha Holzhauer</a>.</li>
				<li> <i>(2010-)</i> International Network for Social Network Analysis (INSNA), <a href="http://www.insna.org/">http://www.insna.org/</a></li>
				<li> <i>(2010-)</i> John von Neumann Computer Society (NJSZT), <a href="http://njszt.hu/">http://njszt.hu/</a></li>
			</ul>
			
			<h3> Special Interest Groups</h3>
			<ul>
				<li> <a href="http://www.socialnetwork.hu/indexe.html">HUNNET</a> Hungarian Network for Social Network Analysis</li>
			</ul>
			
			<h3> Past &amp; Present Projects </h3>
			<ul>
				<li><a href="http://www.crisis-economics.eu/">CRISIS</a> - FP7 Collaborative Project, Complexity Research Initiative for Systemic Instabilities, #288501 by the European Commission (2011-present)</li>
				<li><a href="http://www.mosaic-cloud.eu/">mOSAIC</a> - FP7 STREP project Open Source API and Platform for Multiple Clouds, FP7-ICT-2009-5 STREP #256910 by the European Commission (2010-present)</li>
				<li><a href="http://www.elte.hu/eltesoft">ELTE-Soft</a> - Development of the ELTE Informatics Cooperative Research and Education Center, KMOP-2008-1.1.2 by the Hungarian Government (2010-present)</li> 
				<li><a href="http://www.kp.elte.hu/">TÁMOP</a> - Software Technologies of Distributed and Multicore Systems, 3rd subproject of TÁMOP-4.2.1/B-09/1/KMR-2010-0003 by the Hungarian Government (2010-2012)</li>
				 
				<li><a href="http://emil.istc.cnr.it/">EMIL</a> - FP6 STREP project Emergence in the Loop, contract #033841 by the European Commission (2007-2009)</li>
				
				<li><a href="http://www.qoscosgrid.eu/">QosCosGrid</a> - FP6 STREP project Quasi-Opportunistic Supercomputing for Complex Systems Simulations on the Grid, contract #033883 by the European Commission (2006-2009)</li> 
				
				<li>ELTE IKKK - The ELTE Informatics Cooperative Research and Education Center, GVOP-3.2.2-2004.07-005/3.0 by the Hungarian Government (2006-2007)</li>
			</ul>
<?php
}
?>

<?php
function getSidebar() {
	return getResearchSidebar();
}

require( 'template.php' );
?>
