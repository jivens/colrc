<?php $thisPage="search_results"; ?>
<script type="text/javascript">
    function printSearch(){
        results = document.getElementById("tosearch1");
        document.getElementById("main_top").innerHTML = results;
    }
    function search_for_root(root)
    {
        $("#root").val(root);
        document.searchRoot.submit();
    }
</script>
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
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
</head>


<div id="topMenu">

<header id="topMenu_search">

<?php include("../menus/topMenu_search_results.php"); ?>

</header>

</div>

<div id="leftMenu">

<aside id="leftMenu_search">

<?php include("../menus/leftMenu.php"); ?>

</aside>

</div>

<div id="container">

<div id="main_top">
    
<article id="searchResult">
    
    <?php
        $vowels = array("ɛ", "ə", "ɔ", "ɩ", "ᴇ", "&middot;", "á", "é", "í", "ó", "ú", "ɛ", "ä", "<sup>ä</sup>", "<sup>ɩ</sup>", "ụ̣", "a", "e", "i", "o", "u");
        $mbs = array("+", "=", "-", "?");
        //$search_reichard = $_POST["reichard_cb"];

//avfs local searches
    //first the dictionary
        $dictionary_search_string = $_POST["tosearch_dict"];
        $search_local_dict_sail = $_POST["diction_sail_cb"];
        $search_local_dict_nico = $_POST["diction_nico_cb"];
        $search_local_dict_english = $_POST["diction_english_cb"];
    //then the reichard stem list
        $r_stem_search_string = $_POST["tosearch_r_stem"];
        $search_local_r_stem_sail = $_POST["r_stem_sail_cb"];
        $search_local_r_stem_nico = $_POST["r_stem_nico_cb"];
        $search_local_r_stem_english = $_POST["r_stem_english_cb"];
    //then the annotated stem list
        $stem_search_string = $_POST["tosearch_stem"];
        $search_local_stem_reichard = $_POST["stem_reichard_cb"];
        $search_local_stem_sail = $_POST["stem_sail_cb"];
        $search_local_stem_nico = $_POST["stem_nico_cb"];
        $search_local_stem_english = $_POST["stem_english_cb"];
    //then the affix list
        $affix_search_string = $_POST["tosearch_affix"];
        $search_local_affix_sail = $_POST["affix_sail_cb"];
        $search_local_affix_nico = $_POST["affix_nico_cb"];
        $search_local_affix_english = $_POST["affix_english_cb"];
        
//jwis advanced searches       
        $reichard_search_string = $_POST["tosearch1"];
        $search_reichard_affix = $_POST["affix_list_cb1"];
        $search_reichard_stem = $_POST["stem_list_cb1"];    
        
        //$search_sailish = $_POST["sailish_cb"];
        $sailish_search_string = $_POST["tosearch2"];
        $search_sailish_affix = $_POST["affix_list_cb2"];
        $search_sailish_r_stem = $_POST["r_stem_list_cb2"];
        $search_sailish_stem = $_POST["stem_list_cb2"];
        $search_sailish_diction = $_POST["diction_cb2"];
        $search_sailish_voweless = $_POST["voweless_cb"];
        $search_sailish_boundaries = $_POST["boundaries_cb"];
        if ($search_sailish_voweless == "voweless") {
            $save_sailish_search_string = $sailish_search_string;
            $sailish_search_string = str_replace($vowels, "", $sailish_search_string);
        }
        if ($search_sailish_boundaries == "boundaries") {
            $save_sailish_search_string = $sailish_search_string;
            $sailish_search_string = str_replace($mbs, "", $sailish_search_string);
        }
        
        //$search_nicodemus = $_POST["nicodemus_cb"];
        $nicodemus_search_string = $_POST["tosearch3"];
        $search_nicodemus_affix = $_POST["affix_list_cb3"];
        $search_nicodemus_stem = $_POST["stem_list_cb3"];
        $search_nicodemus_r_stem = $_POST["r_stem_list_cb3"];
        $search_nicodemus_diction = $_POST["diction_cb3"];
       
        //$search_english = $_POST["english_cb"];
        $english_search_string = $_POST["tosearch4"];
        $search_english_affix = $_POST["affix_list_cb4"];
        $search_english_stem = $_POST["stem_list_cb4"];
        $search_english_r_stem = $_POST["r_stem_list_cb4"];
        $search_english_diction = $_POST["diction_cb4"];        
        
        $found_affix = FALSE;
        $do_reichard_affix_search = FALSE;
        if ($search_reichard_affix == "affix_list" && strlen($reichard_search_string) > 0) {
            $do_reichard_affix_search = TRUE;
        }
        $do_sailish_affix_search = FALSE;
        if ($search_sailish_affix == "affix_list" && strlen($sailish_search_string) > 0) {
        $do_sailish_affix_search = TRUE;
        }
        $do_nicodemus_affix_search = FALSE;
        if ($search_nicodemus_affix == "affix_list" && strlen($nicodemus_search_string) > 0) {
            $do_nicodemus_affix_search = TRUE;
        }
        $do_english_affix_search = FALSE;
        if ($search_english_affix == "affix_list" && strlen($english_search_string) > 0) {
            $do_english_affix_search = TRUE;
        }
        
        $found_r_stem = FALSE;
        $do_sailish_r_stem_search = FALSE;
        if ($search_sailish_r_stem == "r_stem_list" && strlen($sailish_search_string) > 0) {
            $do_sailish_r_stem_search = TRUE;
        }        
        $do_nicodemus_r_stem_search = FALSE;
        if ($search_nicodemus_r_stem == "r_stem_list" && strlen($nicodemus_search_string) > 0) {
            $do_nicodemus_r_stem_search = TRUE;
        }
        $do_english_r_stem_search = FALSE;
        if ($search_english_r_stem == "r_stem_list" && strlen($english_search_string) > 0) {
            $do_english_r_stem_search = TRUE;
        }
        $found_stem = FALSE;
        $do_reichard_stem_search = FALSE;
        if ($search_reichard_stem == "stem_list" && strlen($reichard_search_string) > 0) {
            $do_reichard_stem_search = TRUE;
        }
        $do_sailish_stem_search = FALSE;
        if ($search_sailish_stem == "stem_list" && strlen($sailish_search_string) > 0) {
            $do_sailish_stem_search = TRUE;
        }        
        $do_nicodemus_stem_search = FALSE;
        if ($search_nicodemus_stem == "stem_list" && strlen($nicodemus_search_string) > 0) {
            $do_nicodemus_stem_search = TRUE;
        }
        $do_english_stem_search = FALSE;
        if ($search_english_stem == "stem_list" && strlen($english_search_string) > 0) {
            $do_english_stem_search = TRUE;
        }
        $found_diction = FALSE;
        $do_sailish_diction_search = FALSE;
        if ($search_sailish_diction == "dictionary" && strlen($sailish_search_string) > 0) {
            $do_sailish_diction_search = TRUE;
        }
        $do_nicodemus_diction_search = FALSE;
        if ($search_nicodemus_diction == "dictionary" && strlen($nicodemus_search_string) > 0) {
            $do_nicodemus_diction_search = TRUE;
        }
        $do_english_diction_search = FALSE;
        if ($search_english_diction == "dictionary" && strlen($english_search_string) > 0) {
            $do_english_diction_search = TRUE;
        }
//avfs little sections
    //first the dictionary
        $do_sailish_diction_local_search = FALSE;
        if ($search_local_dict_sail == "dictionary" && strlen($dictionary_search_string) > 0) {
            $do_sailish_diction_local_search = TRUE;
        } 
        $do_nico_diction_local_search = FALSE;
        if ($search_local_dict_nico == "dictionary" && strlen($dictionary_search_string) > 0) {
            $do_nico_diction_local_search = TRUE;
        }
        $do_english_diction_local_search = FALSE;
        if ($search_local_dict_english == "dictionary" && strlen($dictionary_search_string) > 0) {
            $do_english_diction_local_search = TRUE;
        }
    //next the reichard stem list
        $found_stem = FALSE;
        $do_sailish_r_stem_local_search = FALSE;
        if ($search_local_r_stem_sail == "r_stem" && strlen($r_stem_search_string) > 0) {
            $do_sailish_r_stem_local_search = TRUE;
        } 
        $do_nico_r_stem_local_search = FALSE;
        if ($search_local_r_stem_nico == "r_stem" && strlen($r_stem_search_string) > 0) {
            $do_nico_r_stem_local_search = TRUE;
        }
        $do_english_r_stem_local_search = FALSE;
        if ($search_local_r_stem_english == "r_stem" && strlen($r_stem_search_string) > 0) {
            $do_english_r_stem_local_search = TRUE;
        }
    //next the annotated stem list
        $do_reichard_stem_local_search = FALSE;
        if ($search_local_stem_reichard == "a_stem" && strlen($stem_search_string) > 0) {
            $do_reichard_stem_local_search = TRUE;
        } 
        $do_sailish_stem_local_search = FALSE;
        if ($search_local_stem_sail == "a_stem" && strlen($stem_search_string) > 0) {
            $do_sailish_stem_local_search = TRUE;
        } 
        $do_nico_stem_local_search = FALSE;
        if ($search_local_stem_nico == "a_stem" && strlen($stem_search_string) > 0) {
            $do_nico_stem_local_search = TRUE;
        }
        $do_english_stem_local_search = FALSE;
        if ($search_local_stem_english == "a_stem" && strlen($stem_search_string) > 0) {
            $do_english_stem_local_search = TRUE;
        }
    //next the affix list
        $do_sailish_affix_local_search = FALSE;
        if ($search_local_affix_sail == "affix" && strlen($affix_search_string) > 0) {
            $do_sailish_affix_local_search = TRUE;
        } 
        $do_nico_affix_local_search = FALSE;
        if ($search_local_affix_nico == "affix" && strlen($affix_search_string) > 0) {
            $do_nico_affix_local_search = TRUE;
        }
        $do_english_affix_local_search = FALSE;
        if ($search_local_affix_english == "affix" && strlen($affix_search_string) > 0) {
            $do_english_affix_local_search = TRUE;
        }
    
        

// jwis advanced search logic

        if ($do_reichard_affix_search == TRUE || $do_sailish_affix_search == TRUE || $do_nicodemus_affix_search == TRUE || $do_english_affix_search == TRUE) {
            $file = fopen("../data_files/affixes.txt", "r") or exit( "Unable to open affixes file!");
            echo "<table>";
            echo "<tr><td colspan=2><h4>Affix List</h4></td></tr>";
            echo "<tr><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td><td><h3>Link</h3></td></tr>";
            $found_any_affixes = FALSE;
            while(!feof($file))
            {
                $found_affix = FALSE;
                $affix_line = fgets($file);
                $affix_array = preg_split("/:::/",$affix_line);
                $save_vowels = $affix_array[1];
                if ($search_sailish_voweless == "voweless") {
                    $affix_array[1] = str_replace($vowels, "", $affix_array[1]);
                }
                if ($search_sailish_boundaries == "boundaries") {
                    $affix_array[1] = str_replace($mbs, "", $affix_array[1]);
                }
                //if ($affix_array[1] == $reichard_search_string) {
                if ($do_reichard_affix_search == TRUE) {
                    $pos = strpos($affix_array[1], $reichard_search_string);
                    $stuff = $affix_array[1];
                    $word = $reichard_search_string;
                    if ($pos !== FALSE) {
                        $affix_array[1] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($do_sailish_affix_search == TRUE) {
                    $pos = strpos($affix_array[1], $sailish_search_string);
                    $stuff = $affix_array[1];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                        if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $affix_array[1] = "<a class = word>" . $save_vowels . "</a>";
                        } else {
                            $affix_array[1] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($do_nicodemus_affix_search == TRUE) {
                    $pos = strpos($affix_array[2], $nicodemus_search_string);
                    $stuff = $affix_array[2];
                    $word = $nicodemus_search_string;
                    if ($pos !== FALSE) {
                        $affix_array[2] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($do_english_affix_search == TRUE) {
                    $pos = strpos($affix_array[3], $english_search_string);
                    $stuff = $affix_array[3];
                    $word = $english_search_string;
                    if ($pos !== FALSE) {
                        $affix_array[3] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($found_affix == TRUE) {
                    echo "<tr><td class = 'sail'>" .  $affix_array[1] . "</td><td class = 'nico'>" . $affix_array[2] . "</td><td class = 'english'>" . $affix_array[3] . "</td><td> <a href=\"" . $affix_array[4] . "\" target=\"_blank\">" . $affix_array[5] . "</a></td></tr>";
                }
            }
            if ($found_any_affixes == FALSE) {
                echo "<tr><td colspan=5><i>No Affixes Match</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
        
        if ($do_reichard_r_stem_search == TRUE || $do_sailish_r_stem_search == TRUE || $do_nicodemus_r_stem_search == TRUE || $do_english_r_stem_search == TRUE) {
            $file = fopen("../data_files/stems_both_lists.txt", "r") or exit( "Unable to open Reichard stem list file!");
            $found_any_stems = FALSE;
            echo "<br>";
            echo "<table>";
            echo "<tr><td colspan=4><h4>Reichard Stem List</h4></td></tr>";
            echo "<tr><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td></tr>"; 
            while(!feof($file))
            {
                $found_stem = FALSE;
                $stem_line = fgets($file);
                $stem_array = preg_split("/:::/",$stem_line);
                $save_vowels_doak = $stem_array[3];
                $save_vowels_sailish = $stem_array[4];
                $save_vowels_r_sailish = $stem_array[8];
                if ($search_sailish_voweless == "voweless") {
                    $stem_array[3] = str_replace($vowels, "", $stem_array[3]);
                    $stem_array[4] = str_replace($vowels, "", $stem_array[4]);
                    $stem_array[8] = str_replace($vowels, "", $stem_array[8]);
                }
                if ($search_sailish_boundaries == "boundaries") {
                    $stem_array[3] = str_replace($mbs, "", $stem_array[3]);
                    $stem_array[4] = str_replace($mbs, "", $stem_array[4]);
                    $stem_array[8] = str_replace($mbs, "", $stem_array[8]);
                }
                if ($do_reichard_stem_search == TRUE) { 
                    $pos = strpos($stem_array[2], $reichard_search_string);
                    $stuff = $stem_array[2];
                    $word = $reichard_search_string;
                    if ($pos !== FALSE) {
                        $stem_array[2] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                // Search sailish and the Doak sailish strings for a match
                if ($do_sailish_stem_search == TRUE) {
                    $pos = strpos($stem_array[3], $sailish_search_string);
                    $stuff = $stem_array[3];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                       if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels_doak;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[3] = "<a class = word>" . $save_vowels_doak . "</a>";
                        } else {
                            $stem_array[3] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                    $pos = strpos($stem_array[4], $sailish_search_string);
                    $stuff = $stem_array[4];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                       if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels_sailish;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[4] = "<a class = word>" . $save_vowels_sailish . "</a>";
                        } else {
                            $stem_array[4] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                    $pos = strpos($stem_array[8], $sailish_search_string);
                    $stuff = $stem_array[8];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                       if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels_sailish;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[8] = "<a class = word>" . $save_vowels_sailish . "</a>";
                        } else {
                            $stem_array[8] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($do_nicodemus_stem_search == TRUE) {
                    $pos = strpos($stem_array[5], $nicodemus_search_string);
                    $stuff = $stem_array[5];
                    $word = $nicodemus_search_string;
                    if ($pos !== FALSE) {
                        $stem_array[5] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($do_english_stem_search == TRUE) {
                    $pos = strpos($stem_array[6], $english_search_string);
                    $stuff = $stem_array[6];
                    $word = $english_search_string;
                    if ($pos !== FALSE) {
                        $stem_array[6] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($found_stem == TRUE) {
                    if ($stem_array[7] == "note") {
			$stem_array[7] = "";
                    }
                    if ($stem_array[6] == "english") {
			$stem_array[6] = "no gloss";
                    }
                    if ($save_vowels_doak == "doak") {
			$stem_array[3] = " -- ";
                    }
                    if ($stem_array[2] == "reichard") {
			$stem_array[2] = " -- "; 
                    }
                    if ($save_vowels_sailish == "sail") {
			$stem_array[4] = " -- "; 
                    }
                    if ($stem_array[5] == "nico") {
			$stem_array[5] = " -- "; 
                    }
                    echo "<tr><td class = 'sail'>" . $stem_array[8] . "</td><td class = 'nico'>" . $stem_array[5] . "</td><td class = 'english'>" . $stem_array[6] . "</td></tr>";
                }
            }
            if ($found_any_stems == FALSE) {
                echo "<tr><td colspan=4><i>No Reichard Stem List Matches</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
        
        if ($do_reichard_stem_search == TRUE || $do_sailish_stem_search == TRUE || $do_nicodemus_stem_search == TRUE || $do_english_stem_search == TRUE) {
            $file = fopen("../data_files/stems_both_lists.txt", "r") or exit( "Unable to open annotated stem list file!");
            $found_any_stems = FALSE;
            echo "<br>";
            echo "<table>";
            echo "<tr><td colspan=4><h4>Annotated Stem List</h4></td></tr>";
            echo "<tr><td><h3>Reichard</h3></td><td><h3>Doak</h3></td><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td><td><h3>Note</h3></td></tr>";
            while(!feof($file))
            {
                $found_stem = FALSE;
                $stem_line = fgets($file);
                $stem_array = preg_split("/:::/",$stem_line);
                $save_vowels_doak = $stem_array[3];
                $save_vowels_sailish = $stem_array[4];
                if ($search_sailish_voweless == "voweless") {
                    $stem_array[3] = str_replace($vowels, "", $stem_array[3]);
                    $stem_array[4] = str_replace($vowels, "", $stem_array[4]);
                }
                if ($search_sailish_boundaries == "boundaries") {
                    $stem_array[3] = str_replace($mbs, "", $stem_array[3]);
                    $stem_array[4] = str_replace($mbs, "", $stem_array[4]);
                }
                if ($do_reichard_stem_search == TRUE) {
                    $pos = strpos($stem_array[2], $reichard_search_string);
                    $stuff = $stem_array[2];
                    $word = $reichard_search_string;
                    if ($pos !== FALSE) {
                        $stem_array[2] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                // Search sailish and the Doak sailish strings for a match
                if ($do_sailish_stem_search == TRUE) {
                    $pos = strpos($stem_array[3], $sailish_search_string);
                    $stuff = $stem_array[3];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                       if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels_doak;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[3] = "<a class = word>" . $save_vowels_doak . "</a>";
                        } else {
                            $stem_array[3] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                    $pos = strpos($stem_array[4], $sailish_search_string);
                    $stuff = $stem_array[4];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                       if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels_sailish;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[4] = "<a class = word>" . $save_vowels_sailish . "</a>";
                        } else {
                            $stem_array[4] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($do_nicodemus_stem_search == TRUE) {
                    $pos = strpos($stem_array[5], $nicodemus_search_string);
                    $stuff = $stem_array[5];
                    $word = $nicodemus_search_string;
                    if ($pos !== FALSE) {
                        $stem_array[5] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($do_english_stem_search == TRUE) {
                    $pos = strpos($stem_array[6], $english_search_string);
                    $stuff = $stem_array[6];
                    $word = $english_search_string;
                    if ($pos !== FALSE) {
                        $stem_array[6] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($found_stem == TRUE) {
                    if ($stem_array[7] == "note") {
			$stem_array[7] = "";
                    }
                    if ($stem_array[6] == "english") {
			$stem_array[6] = "no gloss";
                    }
                    if ($save_vowels_doak == "doak") {
			$stem_array[3] = " -- ";
                    }
                    if ($stem_array[2] == "reichard") {
			$stem_array[2] = " -- "; 
                    }
                    if ($save_vowels_sailish == "sail") {
			$stem_array[4] = " -- "; 
                    }
                    if ($stem_array[5] == "nico") {
			$stem_array[5] = " -- "; 
                    }
                    echo "<tr><td class = 'reichard'>" . $stem_array[2] . "</td><td class = 'sail'>" . $stem_array[3] . "</td><td class = 'sail'>" . $stem_array[4] . "</td><td class = 'nico'>" . $stem_array[5] . "</td><td class = 'english'>" . $stem_array[6] . "</td><td class = 'notes'>" . $stem_array[7] . "</td></tr>";
                }
            }
            if ($found_any_stems == FALSE) {
                echo "<tr><td colspan=6><i>No Annotated Stems List Matches</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
        if ($do_sailish_diction_search == TRUE || $do_nicodemus_diction_search == TRUE || $do_english_diction_search == TRUE) {
            $file = fopen("../data_files/entries.txt", "r") or exit( "Unable to open dictionary file!");
            $found_any_entries = FALSE;
            echo "<br>";
            echo "<form action=\"../scripts/search_all.php\" class=\"form-wrapper cf\" name=\"searchRoot\" id=\"searchRoot\" method=\"POST\">";
            echo "<input type='hidden' id='root' name='root' value=''>";
            echo "<table>";
            echo "<tr><td colspan=4><h4>Root Dictionary</h4></td></tr>";
            echo "<tr><td><h3>Root</h3></td><td><h3>No.</h3></td><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td></tr>";
            while(!feof($file))
            {
                $found_diction = FALSE;
                $diction_line = fgets($file);
                $diction_array = preg_split("/:::/",$diction_line);
                $save_vowels = $diction_array[4];
                if ($search_sailish_voweless == "voweless") {
                    $diction_array[4] = str_replace($vowels, "", $diction_array[4]);
                }
                if ($search_sailish_boundaries == "boundaries") {
                    $diction_array[4] = str_replace($mbs, "", $diction_array[4]);
                }
                if ($do_sailish_diction_search == TRUE) {
                    $pos = strpos($diction_array[4], $sailish_search_string);
                    $stuff = $diction_array[4];
                    $word = $sailish_search_string;
                    if ($pos !== FALSE) {
                        if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            //$stuff = $save_vowels;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $diction_array[4] = "<a class = word>" . $save_vowels . "</a>";
                        } else {
                            $diction_array[4] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        }
                        $found_diction = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($do_nicodemus_diction_search == TRUE) {
                    $pos = strpos($diction_array[5], $nicodemus_search_string);
                    $stuff = $diction_array[5];
                    $word = $nicodemus_search_string;
                    if ($pos !== FALSE) {
                        $diction_array[5] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_diction = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($do_english_diction_search == TRUE) {
                    $pos = strpos($diction_array[6], $english_search_string);
                    $stuff = $diction_array[6];
                    $word = $english_search_string;
                    if ($pos !== FALSE) {
                        $diction_array[6] = substr($stuff, 0, $pos) . "<a class = word>" . $word . "</a>" . substr($stuff, $pos + strlen($word));
                        $found_diction = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($found_diction == TRUE) {
                    echo "<tr class = 'entry'><td class='root'>" . "<a href=javascript:search_for_root(\"" . $diction_array[2] .  "\")>" . $diction_array[2] . "</a>" . "</td><td> " . $diction_array[3] . " </td><td class = 'sail'> " . $diction_array[4] . "</td><td class = 'nico'>" . $diction_array[5] . "</td><td class = 'english'>" . $diction_array[6] . "</td></tr>";
                }
            }
            if ($found_any_entries == FALSE) {
                echo "<tr><td colspan=4><i>No Root Dictionary Entries Match</i></td></tr>";
            }
            echo "</table>";
            echo "</form>";
            fclose($file);
        }

        if ($_POST['root']) {
            $root = $_POST['root'];
            $file = fopen("../data_files/entries.txt", "r") or exit( "Unable to open dictionary file!");
            echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
            echo "<table>";
            while(!feof($file))
            {
                $root_line = fgets($file);
                $root_array = preg_split("/:::/",$root_line);
                if ($root_array[2] == $root) {
                    echo "<tr><td class='rootentry'>" . $root_array[2] . "</td><td>" . $root_array[3] . "</td><td>" . $root_array[4] . "</td><td>" . $root_array[5] . "</td><td>" . $root_array[6] . "</td></tr>";
                }
            }
            echo "</table>";
            echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
            fclose($file);
        }

//avf's local searches
    //first the dictionary

    if ($do_sailish_diction_local_search == TRUE || $do_nico_diction_local_search == TRUE || $do_english_diction_local_search == TRUE) {
            $file = fopen("../data_files/entries.txt", "r") or exit( "Unable to open dictionary file!");
            $found_any_entries = FALSE;
            echo "<br>";
            echo "<table>";
            echo "<tr><td colspan=4><h4>Root Dictionary</h4></td></tr>";
            echo "<tr><td><h3>Root</h3></td><td><h3>No.</h3></td><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td></tr>";
            while(!feof($file))
            {
                $found_diction = FALSE;
                $diction_line = fgets($file);
                $diction_array = preg_split("/:::/",$diction_line);
                $save_vowels = $diction_array[4];
                $sailish_search_string = $dictionary_search_string;
                if ($search_sailish_voweless == "voweless") {
                    $diction_array[4] = str_replace($vowels, "", $diction_array[4]);
                    $sailish_search_string = str_replace($vowels, "", $sailish_search_string);
                }
                if ($search_sailish_boundaries == "boundaries") {
                    $diction_array[4] = str_replace($mbs, "", $diction_array[4]);
                    $sailish_search_string = str_replace($mbs, "", $sailish_search_string);
                }
                if ($do_sailish_diction_local_search == TRUE) {
                    $pos1 = strpos($diction_array[4], $sailish_search_string);
                    $stuff1 = $diction_array[4];
                    $word = $sailish_search_string;
                    if ($pos1 !== FALSE) {
                        if ($search_sailish_voweless == "voweless" or $search_sailish_boundaries == "boundaries") {
                            $diction_array[4] = "<a class = word>" . $save_vowels . "</a>";
                        } else {
                            $diction_array[4] = substr($stuff1, 0, $pos1) . "<a class = word>" . $word . "</a>" . substr($stuff1, $pos1 + strlen($word));
                        }
                        $found_diction = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($do_nico_diction_local_search == TRUE) {
                    $pos2 = strpos($diction_array[5], $dictionary_search_string);
                    $stuff2 = $diction_array[5];
                    $word = $dictionary_search_string;
                    if ($pos2 !== FALSE) {
                        $diction_array[5] = substr($stuff2, 0, $pos2) . "<a class = word>" . $word . "</a>" . substr($stuff2, $pos2 + strlen($word));
                        $found_diction = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($do_english_diction_local_search == TRUE) {
                    $pos3 = strpos($diction_array[6], $dictionary_search_string);
                    $stuff3 = $diction_array[6];
                    $word = $dictionary_search_string;
                    if ($pos3 !== FALSE) {
                        $diction_array[6] = substr($stuff3, 0, $pos3) . "<a class = word>" . $word . "</a>" . substr($stuff3, $pos3 + strlen($word));
                        $found_diction = TRUE;
                        $found_any_entries = TRUE;
                    }
                }

                if ($found_diction == TRUE) {
                    echo "<tr class = 'entry'><td class='root'>" . $diction_array[2] . "</td><td> " . $diction_array[3] . " </td><td class = 'sail'> " . $diction_array[4] . "</td><td class = 'nico'>" . $diction_array[5] . "</td><td class = 'english'>" . $diction_array[6] . "</td></tr>";
                }
            }
            if ($found_any_entries == FALSE) {
                echo "<tr><td colspan=4><i>No Root Dictionary Entries Match</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
    //next the reichard stem list
    if ($do_sailish_r_stem_local_search == TRUE || $do_nico_r_stem_local_search == TRUE || $do_english_r_stem_local_search == TRUE) {
            $file = fopen("../data_files/stems_both_lists.txt", "r") or exit( "Unable to open stem list file!");
            $found_any_entries = FALSE;
            echo "<br>";
            echo "<table>";
            echo "<tr><td colspan=3><h4>Reichard Stem List</h4></td></tr>";
            echo "<tr><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td></tr>";
            while(!feof($file))
            {
                $found_stem = FALSE;
                $stem_line = fgets($file);
                $stem_array = preg_split("/:::/",$stem_line);
                $save_vowels = $stem_array[8];
                $sailish_search_string = $r_stem_search_string;
                if ($search_sailish_voweless == "voweless") {
                    $stem_array[8] = str_replace($vowels, "", $stem_array[8]);
                    $sailish_search_string = str_replace($vowels, "", $sailish_search_string);
                }
                if ($do_sailish_r_stem_local_search == TRUE) {
                    $pos1 = strpos($stem_array[8], $sailish_search_string);
                    $stuff1 = $stem_array[8];
                    $word = $sailish_search_string;
                    if ($pos1 !== FALSE) {
                        if ($search_sailish_voweless == "voweless") {
                            $stem_array[8] = "<a class = word>" . $save_vowels . "</a>";
                        } else {
                            $stem_array[8] = substr($stuff1, 0, $pos1) . "<a class = word>" . $word . "</a>" . substr($stuff1, $pos1 + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($do_nico_r_stem_local_search == TRUE) {
                    $pos2 = strpos($stem_array[5], $r_stem_search_string);
                    $stuff2 = $stem_array[5];
                    $word = $r_stem_search_string;
                    if ($pos2 !== FALSE) {
                        $stem_array[5] = substr($stuff2, 0, $pos2) . "<a class = word>" . $word . "</a>" . substr($stuff2, $pos2 + strlen($word));
                        $found_stem = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($do_english_r_stem_local_search == TRUE) {
                    $pos3 = strpos($stem_array[6], $r_stem_search_string);
                    $stuff3 = $stem_array[6];
                    $word = $r_stem_search_string;
                    if ($pos3 !== FALSE) {
                        $stem_array[6] = substr($stuff3, 0, $pos3) . "<a class = word>" . $word . "</a>" . substr($stuff3, $pos3 + strlen($word));
                        $found_stem = TRUE;
                        $found_any_entries = TRUE;
                    }
                }
                if ($found_stem == TRUE) {
                    echo "<tr class = 'entry'><td class='sail'>" . $stem_array[8] . "</td><td class = 'nico'> " . $stem_array[5] . " </td><td class = 'english'> " . $stem_array[6] . "</td></tr>";
                }
            }
            if ($found_any_entries == FALSE) {
                echo "<tr><td colspan=4><i>No Reichard Stem List Entries Match</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
    //next the annotated stem list
        if ($do_reichard_stem_local_search == TRUE || $do_sailish_stem_local_search == TRUE || $do_nico_stem_local_search == TRUE || $do_english_stem_local_search == TRUE) {
            $file = fopen("../data_files/stems_both_lists.txt", "r") or exit( "Unable to open annotated stem list file!");
            $found_any_stems = FALSE;
            echo "<br>";
            echo "<table>";
            echo "<tr><td colspan=4><h4>Annotated Stem List</h4></td></tr>";
            echo "<tr><td><h3>Reichard</h3></td><td><h3>Doak</h3></td><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td><td><h3>Note</h3></td></tr>";
            while(!feof($file))
            {
                $found_stem = FALSE;
                $stem_line = fgets($file);
                $stem_array = preg_split("/:::/",$stem_line);
                $save_vowels_doak = $stem_array[3];
                $save_vowels_sailish = $stem_array[4];
                if ($search_sailish_voweless == "voweless") {
                    $stem_array[3] = str_replace($vowels, "", $stem_array[3]);
                    $stem_array[4] = str_replace($vowels, "", $stem_array[4]);
                }
                if ($search_sailish_boundaries == "boundaries") {
                    $stem_array[3] = str_replace($mbs, "", $stem_array[3]);
                    $stem_array[4] = str_replace($mbs, "", $stem_array[4]);
                }
                if ($do_reichard_stem_local_search == TRUE) {
                    $pos1 = strpos($stem_array[2], $stem_search_string);
                    $stuff1 = $stem_array[2];
                    $word = $stem_search_string;
                    if ($pos1 !== FALSE) {
                        $stem_array[2] = substr($stuff1, 0, $pos1) . "<a class = word>" . $word . "</a>" . substr($stuff1, $pos1 + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                // Search sailish and the Doak sailish strings for a match
                if ($do_sailish_stem_local_search == TRUE) {
                    $pos2 = strpos($stem_array[3], $sailish_search_string);
                    $stuff2 = $stem_array[3];
                    $word = $stem_search_string;
                    if ($pos2 !== FALSE) {
                       if ($search_sailish_voweless == "voweless") {
                            //$stuff = $save_vowels_doak;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[3] = "<a class = word>" . $save_vowels_doak . "</a>";
                        } else {
                            $stem_array[3] = substr($stuff2, 0, $pos2) . "<a class = word>" . $word . "</a>" . substr($stuff2, $pos2 + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                    $pos3 = strpos($stem_array[4], $sailish_search_string);
                    $stuff3 = $stem_array[4];
                    $word = $stem_search_string;
                    if ($pos3 !== FALSE) {
                       if ($search_sailish_voweless == "voweless") {
                            //$stuff = $save_vowels_sailish;
                            //$pos = strpos($stuff, $sailish_search_string);
                            $stem_array[4] = "<a class = word>" . $save_vowels_sailish . "</a>";
                        } else {
                            $stem_array[4] = substr($stuff3, 0, $pos3) . "<a class = word>" . $word . "</a>" . substr($stuff3, $pos3 + strlen($word));
                        }
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($do_nico_stem_local_search == TRUE) {
                    $pos4 = strpos($stem_array[5], $stem_search_string);
                    $stuff4 = $stem_array[5];
                    $word = $stem_search_string;
                    if ($pos4 !== FALSE) {
                        $stem_array[5] = substr($stuff4, 0, $pos4) . "<a class = word>" . $word . "</a>" . substr($stuff4, $pos4 + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($do_english_stem_local_search == TRUE) {
                    $pos5 = strpos($stem_array[6], $stem_search_string);
                    $stuff5 = $stem_array[6];
                    $word = $stem_search_string;
                    if ($pos5 !== FALSE) {
                        $stem_array[6] = substr($stuff5, 0, $pos5) . "<a class = word>" . $word . "</a>" . substr($stuff5, $pos5 + strlen($word));
                        $found_stem = TRUE;
                        $found_any_stems = TRUE;
                    }
                }
                if ($found_stem == TRUE) {
                    if ($stem_array[7] == "note") {
			$stem_array[7] = "";
                    }
                    if ($stem_array[6] == "english") {
			$stem_array[6] = "no gloss";
                    }
                    if ($save_vowels_doak == "doak") {
			$stem_array[3] = " -- ";
                    }
                    if ($stem_array[2] == "reichard") {
			$stem_array[2] = " -- "; 
                    }
                    if ($save_vowels_sailish == "sail") {
			$stem_array[4] = " -- "; 
                    }
                    if ($stem_array[5] == "nico") {
			$stem_array[5] = " -- "; 
                    }
                    echo "<tr><td class = 'reichard'>" . $stem_array[2] . "</td><td class = 'sail'>" . $stem_array[3] . "</td><td class = 'sail'>" . $stem_array[4] . "</td><td class = 'nico'>" . $stem_array[5] . "</td><td class = 'english'>" . $stem_array[6] . "</td><td class = 'notes'>" . $stem_array[7] . "</td></tr>";
                }
            }
            if ($found_any_stems == FALSE) {
                echo "<tr><td colspan=6><i>No Annotated Stems List Matches</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
//then the affix list
    if ($do_sailish_affix_local_search == TRUE || $do_nico_affix_local_search == TRUE || $do_english_affix_local_search == TRUE) {
            $file = fopen("../data_files/affixes.txt", "r") or exit( "Unable to open affixes file!");
            echo "<table>";
            echo "<tr><td colspan=2><h4>Affix List</h4></td></tr>";
            echo "<tr><td><h3>Salish</h3></td><td><h3>Nicodemus</h3></td><td><h3>English</h3></td><td><h3>Link</h3></td></tr>";
            $found_any_affixes = FALSE;
            while(!feof($file))
            {
                $found_affix = FALSE;
                $affix_line = fgets($file);
                $affix_array = preg_split("/:::/",$affix_line);
                $save_vowels = $affix_array[1];
                $sailish_search_string = $affix_search_string;
                if ($search_sailish_voweless == "voweless") {
                    $affix_array[1] = str_replace($vowels, "", $affix_array[1]);
                    $sailish_search_string = str_replace($vowels, "", $affix_search_string);
                }
                if ($do_sailish_affix_local_search == TRUE) {
                    $pos1 = strpos($affix_array[1], $sailish_search_string);
                    $stuff1 = $affix_array[1];
                    $word = $sailish_search_string;
                    if ($pos1 !== FALSE) {
                        if ($search_sailish_voweless == "voweless") {
                            $affix_array[1] = "<a class = word>" . $save_vowels . "</a>";
                        } else {
                            $affix_array[1] = substr($stuff1, 0, $pos1) . "<a class = word>" . $word . "</a>" . substr($stuff1, $pos1 + strlen($word));
                        }
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($do_nico_affix_local_search == TRUE) {
                    $pos2 = strpos($affix_array[2], $affix_search_string);
                    $stuff2 = $affix_array[2];
                    $word = $affix_search_string;
                    if ($pos2 !== FALSE) {
                        $affix_array[2] = substr($stuff2, 0, $pos2) . "<a class = word>" . $word . "</a>" . substr($stuff2, $pos2 + strlen($word));
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($do_english_affix_local_search == TRUE) {
                    $pos3 = strpos($affix_array[3], $affix_search_string);
                    $stuff3 = $affix_array[3];
                    $word = $affix_search_string;
                    if ($pos3 !== FALSE) {
                        $affix_array[3] = substr($stuff3, 0, $pos3) . "<a class = word>" . $word . "</a>" . substr($stuff3, $pos3 + strlen($word));
                        $found_affix = TRUE;
                        $found_any_affixes = TRUE;
                    }
                }
                if ($found_affix == TRUE) {
                    echo "<tr><td class = 'sail'>" .  $affix_array[1] . "</td><td class = 'nico'>" . $affix_array[2] . "</td><td class = 'english'>" . $affix_array[3] . "</td><td> <a href=\"" . $affix_array[4] . "\" target=\"_blank\">" . $affix_array[5] . "</a></td></tr>";
                }
            }
            if ($found_any_affixes == FALSE) {
                echo "<tr><td colspan=5><i>No Affixes Match</i></td></tr>";
            }
            echo "</table>";
            fclose($file);
        }
    ?>
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
