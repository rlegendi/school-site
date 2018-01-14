<?php
header('Content-Type:text/html; charset=UTF-8'); // Ain't sure why its needed
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Richard Oliver Legendi @ Eötvös Loránd University</title>
	<link rel="stylesheet" href="includes/main.css" type="text/css" media="screen, projection" />
	
	<meta name="author" content="Richard O. Legendi" />
	<meta name="design" content="Luka Cvrk (solucija.com)" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="Personal website of Richard Oliver Legendi, usually for those interested in agent-based modeling, and for students, of course :-)." />
	<meta name="keywords" content="agent-based modeling, agent-based simulation, agent-based simulations, individual-based modeling, multi-agent systems, computational science, complex systems, dynamic networks, social network analysis" />
	
	<script type="text/javascript">
		function mailAddress(user, domain) {
				customMailAddress(user + '@' + domain, user, domain);
		}
		
		function customMailAddress(text, user, domain) {
				document.write('<a href=\"mailto:' + user + '@' + domain + '\">' + text + '</a>');
		}
	</script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23829997-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>

<body id="home">
	<div class="wrap">
		<div id="logo">
			<h1><a href="index.php" title="Home">Richard Oliver Legendi</a></h1>
			<p><a href="http://plcportal.inf.elte.hu/">Department of Programming Languages and Compilers</a></p>
			<p><a href="http://www.inf.elte.hu/">Faculty of Informatics</a>, <a href="http://www.elte.hu/">Eötvös Loránd University</a></p>
			<p>Ph.D. Student</p>
		</div>
		
		<?php headerMenu(); ?>
		
	</div>
	<div class="wrap">
		<div id="left">
			<?php echo getPageContent(); ?>
		</div>
		<div id="right">
			<?php echo getSidebar(); ?>
			
			<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a></p>
			<p><script type="text/javascript" src="http://widgets.amung.us/classic.js"></script><script type="text/javascript">WAU_classic('0o7c6nhfah68')</script></p>
			<p><a href="javascript:openInNew('http://www.catb.org/hacker-emblem/')"><img src="http://www.catb.org/hacker-emblem/glider-small.png" alt="Glidder" border="0"/></a></p>
			<p><a href="http://www.javablackbelt.com/UserView.wwa?userId=15616042"><img style="border: 0px;" src="http://www.javablackbelt.com/imgs/level/belt3_S.gif" /></a></p>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; 2009-<script type="text/javascript">document.write(new Date().getFullYear())</script> &middot; Richard Oliver Legendi &middot; <script language="JavaScript">mailAddress('leriaat', 'elte.hu')</script> </p>
			<p><strong>Site:</strong> <a href="index.php">Home</a> &middot; <a href="research.php">Research</a> &middot; <a href="lectures.php">Lectures</a> &middot; <a href="links.php">Links</a> &middot; <a href="contact.php">Contact</a> </p>
			<p><strong>Network:</strong>
				<a href="https://twitter.com/legendi_ELTE/">Twitter</a> &middot;
				<a href="http://xcafebabe.blogspot.com/">Blog</a> &middot;
				<a href="https://github.com/rlegendi/">Github</a> &middot;
				<a href="https://hu.linkedin.com/in/rlegendi/">LinkedIn</a> &middot;
				<a href="http://scholar.google.hu/citations?user=PSSfimYAAAAJ&hl=en">Google Scholar</a> &middot;
				<a href="https://www.researchgate.net/profile/Richard_Legendi/">ResearchGate</a> &middot;
				<a href="http://stackoverflow.com/users/981284/rlegendi">StackOverflow</a> &middot;
				<a href="http://www.slideshare.net/rlegendi/presentations">SlideShare</a>
			</p>
			<p><strong>Design:</strong> Luka Cvrk, <a title="Awsome Web Templates" href="http://www.solucija.com/">Solucija</a></p>
		</div>		
	</div>
</body>
</html>

