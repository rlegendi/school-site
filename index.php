<?php
define('CURRENT_MENU_INDEX', 0);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Short Bio</h2>
			<p> Hi! My name is Richárd Olivér Legéndi, I am a Ph.D. student at <a href="http://www.elte.hu/">Eötvös Loránd University</a>,
			    Budapest, Hungary. My recent research interests include <b>agent-based modelling</b> and <b>dynamic networks</b>.</p>
			
			<p> I have a strong connection to the <a href="http://mass.aitia.ai/">Multi-Agent Simulation Group</a> of <a href="http://aitia.ai/">AITIA International, Inc.</a>,
				and to several university-related companies (<a href="http://www.elte.hu/eltesoft">ELTE-Soft</a>, <a href="http://www.inf.elte.hu/karunkrol/szervezet/tudásközpontok/Lapok/IKK.aspx">ELTE IKKK</a>).</p>
				
    		<p> This page is mainly dedicated to my teaching and research activities, especially to my work focusing on various
    			aspects and applications of <b>Agent-Based Simulations</b>. You can read some interesting news about the subject at the
    			<a href="http://www.agent.ai/">Agent Portal</a>.</p>
    		
    		<p> I am taking part in the development of the <a href="http://mass.aitia.ai/">Multi-Agent Simulation Suite</a> (MASS).
    		    I am one of the main developers of the <a href="http://mass.aitia.ai/fables/">Functional Agent-Based Language for
    		    Simulations</a> (FABLES), an easy-to-use programming language for agent-based simulations and its Eclipse-based
    		    integrated development environment. It requires minimal programming skills and lets modelers create concise
    		    definitions of their models in a declarative way, similar in style to model descriptions in scientific publications. </p>
    		    
    		<p> My Ph.D. research focuses on <b>dynamic information and social networks</b>. Problems I investigate are motivated by the
    		    need to understand the inherent properties brought by the evolution of networks and changes over time. </p>
<?php
}
?>

<?php
function getSidebar() {
?>
			<h2>Current research focus</h2>
			<ul>
				<li><a href="http://github.com/rlegendi/scala-ide/wiki">GSoC 2012</a></li>
				<li><a href="http://emergingcities.aitia.ai/">EmergingCities</a></li>
				<li>Book Chapter on Programming Languages: Parallel Language Constructs</li>
				<li>Temporal Networks</li>
				<li><a href="http://nyariegyetem.elte.hu/?category=ik&submenu=new">Summer School on Functional Languages: From Java to Scala</a></li>
				<li><a href="java_programming_languages_2_2012_2013_1.php">IK-fszwPNY2EG/1</a></li>
			</ul>
<?php
}
require( 'template.php' );
?>

