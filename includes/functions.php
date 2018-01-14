<?php
function headerMenu() {
	static $menu = array(
		MENU_HOME		=> 'href="index.php" accesskey="h"',
		MENU_RESEARCH	=> 'href="research.php" accesskey="r"',
		MENU_LECTURES	=> 'href="lectures.php" accesskey="l"',
		MENU_LINKS		=> 'href="links.php" accesskey="h"',
		MENU_CONTACT	=> 'href="contact.php" accesskey="c"'
	);
	
	echo '<ul id="nav">'.PHP_EOL;
	
	$idx = 0;
	foreach ($menu as $name => $link) {
		echo "			<li><a " .
			( (CURRENT_MENU_INDEX == $idx++) ? 'class="current" ' : '' ) .
			"$link>$name</a></li>". PHP_EOL;
	}
	
	echo '		</ul>'. PHP_EOL;
}

function getResearchSidebar() {
?>
			<h2>Additional Information</h2>
			<ul>
				<li><a href="publications.php">Publications</a></li>
				<li><a href="theses.php">Theses</a> (for students)</li>
			</ul>
<?php
}
?>

<?php
function getLecturesSidebar() {
?>
			<h2>Oktatott tárgyak</h2>
			<ul>
				<li><a href="distributed_systems.php">Osztott rendszerek</a></li>
				<li>
					<ul>
						<li> <a href="distributed_systems_2011_2012_2.php">2011 - 2012 / 2. félév</a></li>
					</ul>
				</li>
			
				<li><a href="java_programming_languages_2.php">Programozási nyelvek II. (Java)</a></li>
				<li>
					<ul>
						<li> <a href="java_programming_languages_2_2012_2013_1.php">2012 - 2013 / 1. félév</a></li>
						<li> <a href="java_programming_languages_2_2011_2012_1.php">2011 - 2012 / 1. félév</a></li>
						<li> <a href="java_programming_languages_2_2010_2011_1.php">2010 - 2011 / 1. félév</a></li>
					</ul>
				</li>
				
				<li><a href="java_applications.php">Java alkalmazások</a></li>
				<li>
					<ul>
						<li><a href="java_applications_2011_2012_2.php">2011 - 2012 / 2. félév</a></li>
						<li><a href="java_applications_2010_2011_2.php">2010 - 2011 / 2. félév</a></li>
						<li><a href="java_applications_2009_2010_2.php">2009 - 2010 / 2. félév</a></li>
					</ul>
				</li>
			</ul>

			<h2>Egyéb</h2>
			<ul>
				<li><a href="mentoring.php">Mentorálás</a></li>
				<li><a href="omhv.php">Hallgatói vélemények</a></li>
			</ul>
			
			<p>
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'profile',
				  rpp: 6,
				  interval: 6000,
				  width: 'auto',
				  height: 300,
				  theme: {
				    shell: {
				      background: '#477193',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#000000',
				      links: '#007898'
				    }
				  },
				  features: {
				    scrollbar: false,
				    loop: false,
				    live: false,
				    hashtags: true,
				    timestamp: true,
				    avatars: false,
				    behavior: 'all'
				  }
				}).render().setUser('legendi_ELTE').start();
				</script>
			</p>

<?php
}
?>
