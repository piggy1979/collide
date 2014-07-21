<?php
/*
Template Name: Lineup
Display the music lineup.
*/
?>


<div id="lineupsel" class="container">
	<ul id="lineup-filter">
		<li>Showing:</li>
		<li><span class="btn filter active" data-filter="all">All</span></li>
		<li><span class="btn filter" data-filter=".design">Design</span></li>
		<li><span class="btn filter" data-filter=".development">Development</span></li>
		<li><span class="btn filter" data-filter=".hardware">Hardware</span></li>
		<li><span class="btn filter" data-filter=".marketing">Marketing</span></li>
	</ul>

	<h2>Lineup: <span>All</span></h2>

	<?php

	echo fetchLineup();

	?>



</div><!-- end of lineup div ->