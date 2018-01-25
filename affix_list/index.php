<?php $thisPage="affix_list"; ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />	
	<meta name="author" content="John Ivens and Amy Fountain" />
	<meta name="description" content="Search Results in the Coeur d'Alene Online Language Resource Center"/>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="nofollow" />
	<meta name="robots" content="noarchive" />
	<title>Coeur d'Alene Online Language Resource Center - Search Results</title>

        <link rel="stylesheet" href="../scripts/cdl_style.css">
	
</head>


<div id="topMenu">

<header id="topMenu_search">

<?php include("../menus/topMenu_affixList.php"); ?>

</header>

</div>

<div id="leftMenu">

<aside id="leftMenu_affixes">

<?php include("../menus/leftMenu.php"); ?>

</aside>

</div>

<div id="container">

<div id="main_top">
    
<article id="affixList">
    
<p>
The the nearly 200 affixes included here come from <a href="http://www.archive.org/stream/rosettaproject_tqw_morsyn-2#page/n529/mode/2up" target="_blank">Reichard's 1938 grammar</a> (listed as 'Reichard 1938' on the left menu). Nearly all affixes are taken from Reichard 1938, these include a link to the relevant page of the original publication.  The sub-section which the affix appears is given in parentheses "( )". A very small number of entries come from Doak 1997, which is not accessible online. Affixes that Reichard identified as variants of other forms are indicated as such, with links to the main entry given by Reichard.
</p>
    <div id="tableContainer" class="table_container">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="scrollTable">
        <thead class="fixedHeaderAffix">

        <tr>
            <th><h4>Salish</h4></th>
            <th><h4>Nicodemus</h4></th>
            <th></th>
            <th><h4>Link</h4></th>
        </tr>
        </thead>
    <tbody class="scrollContentAffix">
        <tr><td colspan=2><a name="d"><b>Directional Prefixes</b></a></td><td></td></tr>
    <?php
    $affixes = file("../data_files/affixes.txt");
    $prev = "";
    foreach($affixes as $affix){
        list($sort, $sail, $nico, $english, $url, $anchor) = explode(":::", $affix);
        if ($url == "variant") {
            $url = $prev;
        } else {
            $prev = $url;
        }
        if ($sort == "d"){
        echo"<tr><td> $sail </td><td> $nico </td><td> $english </td><td><a href= $url target='_blank'> $anchor </a> </td></tr>";
    }
    }
    ?>
        <tr><td colspan=2><a name="l"><b>Locative Prefixes</b></a></td><td></td></tr>
    <?php
    $affixes = file("../data_files/affixes.txt");
    $prev = "";
    foreach($affixes as $affix){
        list($sort, $sail, $nico, $english, $url, $anchor) = explode(":::", $affix);
        if ($url == "variant") {
            $url = $prev;
        } else {
            $prev = $url;
        }
        if ($sort == "l"){
        echo"<tr><td> $sail </td><td> $nico </td><td> $english </td><td><a href= $url target='_blank'> $anchor </a> </td></tr>";
    }
    }
    ?>
    <tr><td colspan=2><a name="lp"><b>Lexical Prefixes</b></a></td><td></td></tr>
        <?php
    $affixes = file("../data_files/affixes.txt");
    $prev = "";
    foreach($affixes as $affix){
        list($sort, $sail, $nico, $english, $url, $anchor) = explode(":::", $affix);
        if ($url == "variant") {
            $url = $prev;
        } else {
            $prev = $url;
        }
        if ($sort == "lp"){
        echo"<tr><td> $sail </td><td> $nico </td><td> $english </td><td><a href= $url target='_blank'> $anchor </a> </td></tr>";
    }
    }
    ?>
    <tr><td colspan=2><a name="ls"><b>Lexical Suffixes</b></a></td><td></td></tr>
       <?php
    $prev = "";
    $affixes = file("../data_files/affixes.txt");
    foreach($affixes as $affix){
        list($sort, $sail, $nico, $english, $url, $anchor) = explode(":::", $affix);
        if ($url == "variant") {
            $url = $prev;
        } else {
            $prev = $url;
        }
        if ($sort == "ls"){
        echo"<tr><td> $sail </td><td> $nico </td><td> $english </td><td><a href= $url target='_blank'> $anchor </a> </td></tr>";
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