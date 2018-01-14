<?php
define('CURRENT_MENU_INDEX', 3);
require( 'includes/functions.php' );

function getPageContent() {
?>

			<h2>ESSA Newsletter</h2>
			<p> The European Social Simulation Association has a regular newsletter sent 
				out every 2 weeks to its members. It contains news, new publications, 
				job offers, call for papers and participations relevant for the 
				researchers working in the field of social simulation. Previous issues 
				may be accessed at the <a href="http://www.essa.eu.org/">ESSA site</a>.</p>

			<p> I am one of the editors, and we created a few web forms that allow everyone to submit information for 
				one of the next issues and thus take control over its appearance in the 
				newsletter and help us saving time of editing. Do not forget to leave a 
				name and email address in the <i>"Other"</i> field when you submit content, so 
				we can acknowledge your contribution. </p>

			<p> These forms can be accessed at the following links: </p>
			<ul>
			    <li> <a href="https://spreadsheets.google.com/viewform?formkey=dEJRRkF1ZGJXWHVvSXlpQTg5QUoxQXc6MQ">Call for papers</a> </li>
			    <li> <a href="https://spreadsheets.google.com/viewform?hl=en&hl=en&formkey=dFdmLW9panBaTDN2MWdXR0RFQVhVM0E6MQ">Call for Participation</a> </li>
			    <li> <a href="https://spreadsheets.google.com/viewform?hl=en&formkey=dGh2Sk9EcW16eUxPU3gtQUtkWkhrY1E6MQ">Job Offers</a> </li>
			    <li> <a href="https://spreadsheets.google.com/viewform?formkey=dHY1Z1AyTFZWZFNSbmx5YThNNDltbXc6MQ">Publications</a> </li>
			    <li> <a href="https://spreadsheets.google.com/viewform?hl=en&formkey=dGFzdlcteHhOWGlqaXVKUEtOWkx0UVE6MQ">News</a> </li>
			</ul>

			<p>Thank you very much for your submissions in advance!</p>

			<h2>General</h2>
			<p> A little selection of links I believe anybody may find useful. </p>
			
			<ul>
			<li><a href="http://catb.org/~esr/faqs/smart-questions.html">How To Ask Questions The Smart Way</a></li>
			<li><a href="http://catb.org/~esr/faqs/hacker-howto.html">How To Become A Hacker</a></li>
			</ul>
			
			<h3>How to Write an Academic Paper<a name="academicPapersHowtos" /></h3>
			
			<ul>
				<li><a href="http://www.experiment-resources.com/write-a-research-paper.html">How to Write a Research Paper</a></li>
				<li><a href="http://www-e.uni-magdeburg.de/hkersten/WritingPapers/Writlink.htm">Academic Papers – A List of Internet Resources</a></li>
				<li><a href="http://www.dartmouth.edu/~writing/materials/student/ac_paper/what.shtml">What is an academic paper?</a></li>
				<li><a href="http://www.ambriana.com/C298_website/How_to_write_a_paper.pdf">How to Write a Paper - Using Method Instead of Madness</a></li>
				<li><a href="http://www.wikihow.com/Write-an-Academic-Essay">How to Write an Academic Essay</a></li>
				<li><a href="http://matt.might.net/articles/academic-presentation-tips/">10 tips for academic talks </a></li>
			</ul>
			
			<h3>How to Survive the PhD</h3>
			<p> PhD is about learning to how to do science. It is a long and hard journey, here are some thoughts that may help you to reach the end of the road
			   - to be able to start a more tougher one :-) </p>
			<ul>
				<li><a href="http://www.phdcomics.com/">Ph.D. Comics</a></li>
				<li><a href="http://matt.might.net/articles/phd-school-in-pictures/">The illustrated guide to a Ph.D.</a></li>
				<li><a href="http://matt.might.net/articles/successful-phd-students/">3 qualities of successful Ph.D. students: Perseverance, tenacity and cogency</a></li>
				<li><a href="http://matt.might.net/articles/ways-to-fail-a-phd/">10 easy ways to fail a Ph.D.</a></li>
				<li><a href="http://www.cs.unc.edu/~azuma/hitch4.html">A graduate school survival guide</a></li>
				<li><a href="http://www.cs.virginia.edu/~robins/YouAndYourResearch.html">Richard Hamming, "You and Your Research"</a></li>
				<li><a href="http://matt.might.net/articles/productivity-tips-hints-hacks-tricks-for-grad-students-academics/">Productivity tips, tricks and hacks for academics</a></li>
			</ul>
			
			<h2>Past &amp; Present Projects</h2>
			<p>A selection of projects I was involved in.</p>
			
			<p id="gsoc-2011"><a href="http://code.google.com/p/cscs-repast-demos/"><img src="images/logos/GSoC-2011.png" /></a></p>
			
			<p>I was accepted as a student for <a href="http://socghop.appspot.com/gsoc/homepage/google/gsoc2011">Google Summer of Code 2011</a> for a project mentored by the 
			   <a href="http://cscs.umich.edu/">Center for the Study of Complex Systems</a> at the <a href="http://www.umich.edu/">University of Michigan</a>
			   entitled <a href="http://www.cscs.umich.edu/~rlr/SoC/index.php?n=Main.SoC2011">Project #1: Create Agent Based Model "Demos" using Repast Symphony</a>.
			   My mentor was <a href="http://mypages.iit.edu/~tataeri/">Eric R. Tatara PhD, PE</a>.
			   See <a href="http://code.google.com/p/cscs-repast-demos/wiki/Richard">my project page</a> for the details how I was involved into the project. </p>
			
			<p> My main contribution was an implementation of the <a href="http://condor.depaul.edu/slytinen/abm/StupidModel/">StupidModel</a> which I believe is considered a relevant learning and comparison tool for Agent-Based Modelling,
				and tried my best to create an extensive tutorial about the model. Implementing this tool improved the comparability of Repast Simphony with other ABM platforms. </p>
			
			<ul>
			<li><b>URL:</b> <a href="http://code.google.com/p/cscs-repast-demos/">http://code.google.com/p/cscs-repast-demos/</a></li>
			<li><b>URL:</b> <a href="http://code.google.com/p/cscs-repast-demos/wiki/StupidModel">http://code.google.com/p/cscs-repast-demos/wiki/StupidModel</a></li>
			</ul>
			
			<p><a href="http://gridabm.sourceforge.net/"><img src="images/logos/GridABM.png" /></a></p>
			
			<p> GridABM is a set of opensource templates enabling researchers to do Agent-Based Modeling on multicore computers,
			computing clusters and computational grids. GridABM is based on Java, RePast and ProActive.</p>
			

			<p> Agent-based modeling is an approach to model complex systems by defining entities (agents) with certain properties
			and interactions among each other. This allows researchers to investigate how the macroscopic behavior of a system
			depends on the microscopic properties and rules. </p>
			
			<p> Simulations of agent-based models (ABM) are typically need to deal with huge amount of agents, and cannot be modeled
			within a single PC due to simple physical (e.g. memory) issues. Therefore, it is often necessary to run distributed
			simulations using a dedicated computing cluster or a GRID. In most of the cases it also reduces the time of the runs.
			However, this implies the need for specialized parallel programming. </p>
			
			<p> GridABM helps complex systems researchers (especially Repast modelers) to develop agent based models to run on multicore
			computers, clusters and grids; without the need for parallel programming. </p> 
			
			<ul>
			<li><b>URL:</b> <a href="http://gridabm.sourceforge.net/">http://gridabm.sourceforge.net/</a></li>
			</ul>
			
			<p><a href="http://distributedabm.elte.hu/"><img src="images/logos/DistributedABM.png" /></a></p>
			<p> We manage a Distributed ABM Software Technology Lab where we have quite a lot of interesting research topics available
				for students about distributing agent-based simulations.</p>
			
			<ul>
			<li><b>URL:</b> <a href="http://distributedabm.elte.hu/">http://distributedabm.elte.hu/</a></li>
			</ul>
			
			<p><a href="https://mass.aitia.ai/fables/"><img src="images/logos/Fables.png" /></a></p>
			
			<p> Functional Agent-Based language for Simulations (Fables) is a programming language and its integrated environment
			developed by  AITIA International, Inc., specially designed for creating agent-based simulations. It requires minimal
			programming skills, as its formalism is similar to the mathematical formalism used in publications in the subject. It
			is one of the components of the  Multi-Agent Simulation Suite. </p>
			

			<p> Fables has a whole range of functions intended to make the use of the language easier like the language assistant,
			syntax highlighting, bracket matching and the context sensitive help. An observation wizard is also provided with the
			language, which gives great ease to creating visualizations from the simulations. With the above-described IDE this
			constitutes what is called Integrated Modeling Environment. </p>
			
			<ul>
			<li><b>URL:</b> <a href="https://mass.aitia.ai/fables/">https://mass.aitia.ai/fables/</a></li>
			<li><b>URL:</b> <a href="https://fables.aitia.ai/">https://fables.aitia.ai/</a></li>
			</ul>
			
			<h2>Past &amp; Present Workplaces</h2>
			<p>Selection of my previous workplaces.</p>
			<a href="http://aitia.ai/"><img src="images/logos/AITIA.png" /></a>
			
<?php
}
?>

<?php
function getSidebar() {
?>
			<h2>Colleagues & Friends</h2>
			<ul>
				<li><a href="http://user.aitia.ai/~gulyas_laszlo/">László Gulyás, PhD</a></li>
				<li><a href="http://kto.web.elte.hu/">Tamás Kozsik, PhD</a></li>
				<li><a href="http://people.inf.elte.hu/kisuf/">Attila Szabó</a></li>
				<li><a href="http://uni-kassel.academia.edu/SaschaHolzhauer">Sascha Holzhauer</a></li>
			</ul>
			
			<h2>Smart Guys</h2>
			<ul>
				<li><a href="http://www-complexnetworks.lip6.fr/~heymann/">Sébastien Heymann</a><br/>(<a href="http://gephi.org/">Gephi</a> Developer)</li>
			</ul>
<?php
}
require( 'template.php' );
?>
