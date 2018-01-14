<?php
define('CURRENT_MENU_INDEX', 1);
require( 'includes/functions.php' );

function getPageContent() {
?>
			<h2>Theses</h2>
			<p>You can find some theses-related materials below.</p>
			
			<h3>Requirements</h3>
			<p> Unfortunately I am a bit overwhelmed with work in general. If you want me to supervise a thesis, you must fulfill these
				requirements in order to finish the thesis successfully (these are only soft constraints, but requires <i>a lot of extra effort</i>
				to replace any of them):</p>
			<ul>
			<li>English (IT jargon is sufficient)</li>
			<li>Proper knowledge of a programming language (obviously, I can help you most with Java)</li>
			<li>Ability to work on your own (because I have no capacity to have more than one meeting pro week)</li>
			<li>Experience or willingness to learn any version control system (preferably SVN or Git/Mercurial)</li>
			<li>Experience or willingness to learn any collaboration tool (like Sourceforge, Github, Google Code or Bitbucket)</li>
			<li>Continuous documentation in a Wiki-like environment. This way the thesis may be merged by the documents created previously in a week.</li>
			<li>I prefer guiding open source projects: this way you won't create a program for just yourself, but make it publicly available for anybody.
				There's also a chance that one of the next students like it and develop it further. </li>
			<li>Reading a few of <a href="links.php#academicPapersHowtos">these general reading materials</a> about how to write an academic paper
				(just to get a brief overview how to do it).</li>
			</ul>
			
			<h3> List of theses I was involved in (more or less)</h3>
			
			<ul>
			<li> Ognjen Bubalo: "Programozói könyvtárelemző szoftver készítése Java alkalmazásokhoz", Hungarian bachelor thesis,
				 Eötvös Loránd University, Budapest, Hungary, 2011.<br/>
				 [<a href="http://code.google.com/p/dependency-checker-for-java-applications/">project</a>]
				 [<a href="resources/theses/OgnjenBubalo_DepChecker.pdf">paper</a>] </li>
			<li> Árpád Zsolt Jakab: "Manpower Planning Reporting Monitoring Controlling Administration System",
				 Hungarian master thesis (<i>Classified</i>). Co-supervised with Márk Török, 2011.</li>
			<li> Balázs Keszthelyi: "Bejárás-optimalizációk a Fables fordítóprogramjához", Hungarian bachelor thesis,
				 Eötvös Loránd University, Budapest, Hungary, 2010.<br/>
				 [<a href="http://mass.aitia.ai/index.php?option=com_jombib&task=showbib&id=129">abstract</a>]
				 [<a href="http://mass.aitia.ai/images/publikaciok/2010_bsc_kb_fables.pdf">paper</a>]</li>
			<li> Gábor Szemes: "Template solutions for distributed agent based modelling", Hungarian master thesis,
				 Eötvös Loránd University, Budapest, Hungary, 2009.<br/>
				 [<a href="https://sourceforge.net/projects/gridabm/files/Publications/GridABM_gszemes_master_thesis_hun.pdf">paper</a>]
				 [<a href="https://sourceforge.net/projects/gridabm/files/Publications/GridABM_gszemes_master_thesis_slides_hun.pdf">presentation</a>] </li>
			<li> Richárd Legéndi: "Fables - A functional programming language for agent-based simulations", Hungarian master thesis,
				 Eötvös Loránd University, Budapest, Hungary, 2009.<br/>
				 [<a href="http://mass.aitia.ai/images/publikaciok/2009_msc_lro_fables.pdf">paper</a>]
				 [presentation] </li>
			</ul>
			
			<h3> Currently (Co-)Supervising </h3>
			<p>List of theses I am currently working on.</p>
			<ul>
			<li>Zsolt Jurányi: "Combined search engine for publication databases" (2012)<br/>
				[<a href="http://sourceforge.net/p/pubsearch/">project</a>]</li>
			<li>Száva Jenő Maczika: "Implementing Demeter : A Resource Management Tool used by Morgan Stanley’s Farm Engineering team"  (In English).
				Co-supervising with Leon Demetriou, Morgan Stanley International (2012).</li>
			<li>Noémi Tóth: "Munkafolyamat alapú hálózati centralitásfogalmak vizsgálata", at the Faculty of Science (2012)</li>
			<li>Dániel Szabó: "Közlekedési szimulációs platform kiegészítése a parkolás jelenségével" (2012)</li>
			<li>Ádám Nagy: "WYSIWYG HTML szerkesztő program" (2012)</li>
			</ul>
			
			<h3> Available research topics </h3>
			<p> You can find a list of topics below I find interesting enough to spare my (<i>oterwise
				non-existent</i>) time on supervising it &#9786;</p>
			
			<h4>Design by Contract paradigm for an agent-based DSL</h4>
  			<p>
  			Functional Agent-Based Language for Simulations (<a href="http://fables.aitia.ai">http://fables.aitia.ai</a>,
  			<a href="http://mass.aitia.ai/fables">http://mass.aitia.ai/fables</a>) is a domain-specific programming launguage 
  			and its integrated environment developed by AITIA International, Inc., specially designed for creating agent-based
  			simulations. It requires minimal programming skills, as its formalism is similar to the mathematical formalism
  			used in publications in the subject.
  			</p>
  			
  			<p>
  			The language mixes object-oriented, functional and imperative paradigmes to achive this goal. The task is to evaluate
  			how Design by Contract paradigms may be introduced in the language and implement a prototype extension.
  			</p>
  			
  			<h4>Tool for automatically converting Repast Simphony models to participatory simulations</h4>
  			<p>
  			Repast Simphony is one of the most popular frameworks for creating agent-based simulations. The task is to create
  			a tool that users may easily use to create participatory simulations from a specific set of models automatically.
  			</p>
  			
  			<p>Implementation details may vary from either creating a simple Maven/Jetty/GWT application or using a roboust
  			framework like the Participatory Extension (PET, <a href="http://pet.aitia.ai">http://pet.aitia.ai</a>).</p>
  			
  			<h4>SciML - Scientific Markup Language</h4>
  			<p>
  			Markup languages like <a href="http://daringfireball.net/projects/markdown/">Markdown</a> provide a lightweight and painless
  			solution for writing documentations. Additionally, they implicitly support collaborated work through varios version controlling software,
  			since the document basically plain-text instead of a binary format.
  			</p>
  			
  			<p>
  			Unfortunately, they are not capable of writing supporting scientific papers due to several limitations: cross-references,
  			lack of bibliographic references, tables, and so on. LaTeX is a great alternative, but its syntax is getting old and cumbersome.
  			</p>
  			
   			<p>
   			The task is about to create a simple to use custom markup language (or to extend an existing one) to provide a nice framework
   			for writing scientific publications. To dog-feed the project, the thesis should be also written in this language.
   			</p>
   			
   			<ul>
   			<li><b>Required skills:</b> Scala or Java</li>
   			<li><b>Category:</b> BSc</li>
   			</ul>
   			
   			<h4>Fables 2.0</h4>
  			<p>
  			Functional Agent-Based Language for Simulations (<a href="http://fables.aitia.ai">http://fables.aitia.ai</a>,
  			<a href="http://mass.aitia.ai/fables">http://mass.aitia.ai/fables</a>) is a domain-specific programming launguage 
  			and its integrated environment developed by AITIA International, Inc., specially designed for creating agent-based
  			simulations. It requires minimal programming skills, as its formalism is similar to the mathematical formalism
  			used in publications in the subject.
  			</p>
  			
  			<p>
  			The language mixes object-oriented, functional and imperative paradigmes to achive this goal. The task is to create
  			an either external or preferably an internal DSL in Scala that supports all features of Fables.
  			</p>
  			
   			<ul>
   			<li><b>Required skills:</b> Scala, Java, minimal Eclipse RCP</li>
   			<li><b>Category:</b> MSc</li>
   			</ul>
  			   			
  			<h4>Laszló Gulyás' research topics</h4>
  			<p>
  			You can also find a set of (almost up-to-date) <a href="resources/theses/gulya_bsc_msc_tdk.txt">available research topics</a> of my supervisor,
  			<a href="http://user.aitia.ai/~gulyas_laszlo/">László Gulyás</a>. Don't know him? Try listening his courses like
  			<a href="http://hps.elte.hu/~gulya/Teaching/TarsSzim/TarsSzimu2.htm">Simulation of Social Systems 1</a>,
  			<a href="http://hps.elte.hu/~gulya/Teaching/TarsSzim2/TarsSzim2.html">Simulation of Social Systems 2</a> or
  			<a href="http://hps.elte.hu/~gulya/Teaching/Halovilag/Halovilag.html">In The World of Networks</a>.
  			</p>
  			
  			<h4>Distributed ABM</h4>
  			<p> We manage a Software Technology Lab where we have quite a lot of interesting research topics available about distributing
  			agent-based simulations.</p>
  				
  			<p>For the details, please visit our website at <a href="http://distributedabm.elte.hu/">http://distributedabm.elte.hu/</a>.</p>
<?php
}
?>

<?php
function getSidebar() {
	return getResearchSidebar();
}

require( 'template.php' );
?>
