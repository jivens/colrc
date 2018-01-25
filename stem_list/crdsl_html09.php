<?php $thisPage="reichard_stem_list"; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />	
	<meta name="author" content="Shannon Bischoff and Musa Yassin Fort" />
	<meta name="description" content="Stem List in the Coeur d'Alene Online Language Resource Center"/>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="nofollow" />
	<meta name="robots" content="noarchive" />
	<title>Coeur d'Alene Online Language Resource Center - Reichard Stem List</title>

        <link rel="stylesheet" href="../scripts/cdl_style.css">
	
</head>
	
<div id="topMenu">

<header id="topMenu_stemList">

<?php include("../menus/topMenu_stemList.php"); ?>

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
<h3>Reichard's Stem List</h3>
<p>The stem list presented here was built by Gladys Reichard, and first published in 1939.  The list is available in several forms.  To access the list in a dictionary form, use the 'browse' or 'search' features above.  Here you will see each stem as Reichard wrote it, and as it would be written using the 'Nicodemus' spelling system.  The stems are presented in several groups - first the 'verbs', then 'adverbs, interjections, and conjunctions', and finally the 'nouns'.  Within each group, stems are ordered alphabetically.</p>
<p>You can also view <a href="r_stemlist.pdf" target="_blank">Reichard 1939</a> in its original form (as a pdf), or as a 
<a href="original_stem_list.html" target="_blank">set of images</a> that you can view in your browser.</p>  
<br>
    <div id="tableContainer" class="table_container">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
        <thead class="fixedHeaderStemsOrig">

        <tr>
		<th><h4>Salish</h4></th>
		<th><h4>Nicodemus</h4></th>
		<th><h4> </h4></th>
        </tr>
        </thead>
    <tbody class="scrollContentStemsOrig">
        <tr><td><a name="v"><b>Verbs</b></a></td><td></td><td></td></tr>
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
			echo "<tr><td><h4> $sort2 </h4></td><td></td><td></td></tr>";
		}
		if ($nico == "nico" && $english == "english") {
			$nico = "";
			$english = "";
		}
		if ($english == "english") {
			$english = "";
		}
        echo"<tr><td> $orig </td><td> $nico </td><td> $english </td></tr>";
    }
    }
    ?>
        <tr><td colspan=3><a name="aci"><b>Adverbs, Interjections, Conjunctions</b></a></td></tr>

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
			echo "<tr><td><h4> $sort2 </h4></td><td></td><td></td></tr>";
		}
		if ($nico == "nico" && $english == "english") {
			$nico = "";
			$english = "";
		}
		if ($english == "english") {
			$english = "";
		}
        echo"<tr><td> $orig </td><td> $nico </td><td> $english </td></tr>";
    }
    }
    ?>
    <tr></tr>
    <tr><td><a name="n"><b>Nouns </b></a></td><td></td><td></td></tr>
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
			echo "<tr><td><h4> $sort2 </h4></td><td></td><td></td></tr>";
		}
		if ($nico == "nico" && $english == "english") {
			$nico = "";
			$english = "";
		}
		if ($english == "english") {
			$english = "";
		}
        echo"<tr><td> $orig </td><td> $nico </td><td> $english </td></tr>";
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

