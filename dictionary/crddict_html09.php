<?php $thisPage="dictionary"; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />	
	<meta name="author" content="Shannon Bischoff and Musa Yassin Fort" />
	<meta name="description" content="Root Dictionary in the Coeur d'Alene Online Language Resource Center"/>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="nofollow" />
	<meta name="robots" content="noarchive" />
	<title>Coeur d'Alene Online Language Resource Center - Root Dictionary</title>

        <link rel="stylesheet" href="../scripts/cdl_style.css">
	
</head>
       

<div id="topMenu">

<header id="topMenu_dictionary">

<?php include("../menus/topMenu_dictionary.php"); ?>

</header>

</div>

<div id="leftMenu">

<aside id="leftMenu_dictionary">

<?php include("../menus/leftMenu.php"); ?>

</aside>

</div>

<div id="container">

<div id="main_top">

<article id="dictionary">

<p>The root dictionary presented here was compiled by John Lyon and Rebecca Greene-Wood and contains nearly 1,400 roots and about 7690 "word" forms. The data come from  Lawrence Nicodemus's Coeur d'Alene dictionary. 
The original work was published by UMOPL and can be found at <a href="http://meltr.org/Publications/" target="_blank">Lyon and Greene-Wood 2007</a>. 
All material is copyrighted by the Coeur d'Alene Tribe and 
may not be copied in any format without written permission from the  Coeur d'Alene Tribe. 
</p>

<p>For reasons of searchability and clarity of presentation, the organization of the dictionary has been altered from its original form.  Within a root header, the entries are organized beginning with the least complex and move
towards more complex forms. Each entry is separated by a new line and numbered. The entries first appear in the Salishan orthography, then the Nicodemus, 
and finally an English translation. Nicodemus
sometimes identifies the simplest forms as (stem), but not in all cases. Intransitive and simple
nominalized forms directly follow, then reduplicated forms, complex forms (those with
lexical suffixes), and finally transitive forms and compounds. The following
symbols are used to separate the different types of entries: intransitive (&#8224;), transitive (&#8225;), complex
(//), and compound (&#167;) entries. Entries begin with a root skeleton followed by the transliterated Coeur d'Alene, followed by
Nicodemus's English translation, grammatical notations, and additional information.</p>

<h4>Lyon and Green-Wood's Root Dictionary</h4>

    <div id="tableContainer" class="table_container">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
        <thead class="fixedHeaderDictionary">

        <tr>
		<th><h4>Root</h4></th>
		<th> </th>
		<th><h4>Salish</h4></th>
		<th><h4>Nicodemus</h4></th>
		<th><h4></h4></th>
        </tr>
        </thead>
    <tbody class="scrollContentDictionary">
	
    <?php
    $entries = file("../data_files/entries.txt");
	$prev1 = "";
	$prev2 = "";
    foreach($entries as $entry){
        list($anchor, $sort1, $sort2, $number, $sail, $nico, $english) = explode(":::", $entry);
	if ($sort1 == $prev1) {
		$sort1 = "";
	} else {
		$prev1 = $sort1;
		echo "<tr><td><a name=\"$anchor\"><h4> $sort1 </h4></a></td><td></td><td></td><td></td><td></td></tr>";
		}
	if ($sort2 == $prev2) {
		$sort2 = "";
	} else {$prev2 = $sort2;
	}
echo "<tr><td> <b> $sort2 </b> </td><td> $number </td> <td> $sail </td> <td> $nico </td><td> $english </td> </tr>";
    }
    ?>
	
    </tbody>
    </table>
</article>

</div>



<div id="footer">
<footer id="footer_dictionary">

<?php include("../footer/copyright_dictionary.php"); ?>

</footer>

 </div>
 

</div>


</body>
</html>

