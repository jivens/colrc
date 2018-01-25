<?php $thisPage="annotated_stem_list"; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />	
	<meta name="author" content="Shannon Bischoff and Musa Yassin Fort" />
	<meta name="description" content="Annotated Stem List in the Coeur d'Alene Online Language Resource Center"/>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="nofollow" />
	<meta name="robots" content="noarchive" />
	<title>Coeur d'Alene Online Language Resource Center - Annotated Stem List</title>

        <link rel="stylesheet" href="../scripts/cdl_style.css">
	
</head>
	
<div id="topMenu">

<header id="topMenu_stemList">

<?php include("../menus/topMenu_stemList_doak.php"); ?>


</header>

</div>

<div id="leftMenu">

<aside id="leftMenu_stemList">

<?php include("../menus/leftMenu.php"); ?>

</aside>

</div>

<div id="container">

<div id="main_top">

<article id="stemList">
<h3>Annotated Stem List</h3>
<p>This version of the stem list contains notes and comments based on the analysis of Ivy Doak.  To access the list in a dictionary form, use the 'browse' or 'search' features above.  Each entry begins with the stem identified by Reichard.  The root identified by Doak is then presented, followed by a transliteration of the stem into the Salish and Nicodemus spelling systems. Notes are in the rightmost column. The stems are presented in several groups - first the 'verbs', then 'adverbs, interjections, and conjunctions', and finally the 'nouns'.  Note that this list is currently under construction.  Where we are missing information about a particular transcriptions of the Coeur d'Alene stem, you will find " -- "; forms for which we have no English translation are noted.</p>
<br>
    <div id="tableContainer" class="table_container">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
        <thead class="fixedHeaderStemsAnnotated">

        <tr>
		<th><h4>Reichard</h4></th>
		<th><h4>Doak</h4></th>
		<th><h4>Salish</h4></th>
		<th><h4>Nicodemus</h4></th>
		<th><h4> </h4></th>
        </tr>
        </thead>
    <tbody class="scrollContentStemsAnnotated">
        <tr><td><a name="v"><b>Verbs</b></a></td><td></td><td></td><td></td><td></td></tr>
    <?php
    $stems = file("../data_files/stems_both_lists.txt");
    $prev = "";
    foreach($stems as $stem){
        list($sort1, $sort2, $reichard, $doak, $sail, $nico, $english, $note, $orig) = explode(":::", $stem);
        if ($sort1 == "v"){
		if ($sort2 == $prev) {
			$sort2 = "";
		} else {
			$prev = $sort2;
			echo "<tr><td><h4> $sort2 </h4></td><td></td><td></td><td></td><td></td></tr>";
		}
		if ($note == "note") {
			$note = "";
		}
		if ($english == "english") {
			$english = "no gloss";
		}
		if ($doak == "doak") {
			$doak = " -- "; 
		}
		if ($reichard == "reichard") {
			$reichard = " -- "; 
		}
		if ($sail == "sail") {
			$sail = " -- "; 
		}
		if ($nico == "nico") {
			$nico = " -- "; 
		}
 
        echo"<tr><td> $reichard </td><td> $doak </td> <td> $sail </td> <td> $nico </td><td> $english </td> <td> $note </td></tr>";
    }
    }
    ?>
        <tr><td colspan=3><a name="aci"><b>Adverbs, Interjections, Conjunctions</b></a></td><td></td></td><td></td><td></td></tr>

    <?php
    $stems = file("../data_files/stems_both_lists.txt");
    $prev = "";
    foreach($stems as $stem){
        list($sort1, $sort2, $reichard, $doak, $sail, $nico, $english, $note, $orig) = explode(":::", $stem);
        if ($sort1 == "aci"){
		if ($sort2 == $prev) {
			$sort2 = "";
		} else {
			$prev = $sort2;
			echo "<tr><td><h4> $sort2 </h4></td><td></td><td></td><td></td><td></td></tr>";
		}
		if ($note == "note") {
			$note = "";
		}
		if ($english == "english") {
			$english = "no gloss";
		}
		if ($doak == "doak") {
			$doak = " -- ";
		}
		if ($reichard == "reichard") {
			$reichard = " -- "; 
		}
		if ($sail == "sail") {
			$sail = " -- "; 
		}
		if ($nico == "nico") {
			$nico = " -- "; 
		} 
        echo"<tr><td> $reichard </td><td> $doak </td> <td> $sail </td> <td> $nico </td><td> $english  </td><td> $note </td></tr>";
    }
    }
    ?>
	
    <tr><td><a name="n"><b>Nouns </b></a></td><td></td><td></td><td></td><td></td></tr>
    <tr></tr>
    <?php
    $stems = file("../data_files/stems_both_lists.txt");
    $prev = "";
    foreach($stems as $stem){
        list($sort1, $sort2, $reichard, $doak, $sail, $nico, $english, $note, $orig) = explode(":::", $stem);
        if ($sort1 == "n"){
		if ($sort2 == $prev) {
			$sort2 = "";
		} else {
			$prev = $sort2;
			echo "<tr><td><h4> $sort2 </h4></td><td></td><td></td><td></td><td></td></tr>";
		}
		if ($note == "note") {
			$note = "";
		}
		if ($english == "english") {
			$english = "no gloss";
		}
		if ($doak == "doak") {
			$doak = " -- ";
		}
		if ($reichard == "reichard") {
			$reichard = " -- "; 
		}
		if ($sail == "sail") {
			$sail = " -- "; 
		}
		if ($nico == "nico") {
			$nico = " -- "; 
		}
        echo"<tr><td> $reichard </td><td> $doak </td> <td> $sail </td> <td> $nico </td><td> $english </td><td> $note </td></tr>";
    }
    }
    ?>

    
    </tbody>
    </table>
</div>

</article>

</div>


<div id="footer">

<footer>

<?php include("../footer/copyright_crd.php"); ?>

</footer>

 </div>
 

</div>


</body>
</html>

