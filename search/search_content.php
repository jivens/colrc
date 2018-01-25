<script type="text/javascript">
    function typeLetter(area){
txtBox = document.getElementById(area.id);
txtBox.value = txtBox.value + area.name;
}
function validateForm(form){
var txtbox = form.tosearch;
var radios = form.type;
	var result1 = validateTextBox(txtbox);
	
	return result1;
}

function validateTextBox(txtbox){
	if(txtbox.value.match(/^(\s)*$/)){
		alert("Enter text in the textbox");
		return false;
	}
	return true;
}
</script>

<div id="search_form">
    
<form action="../scripts/search_all.php" class="form-wrapper cf" name="searchForm" id="searchForm" method="POST">

<div id="search_reichard">
    
<p>Reichard</p>

<input type="text" placeholder="Search for..." name="tosearch1" id = "tosearch1"  /><br>
<a onclick="typeLetter(this)" id = "tosearch1" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ɬ" class="letter">ɬ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ʀ" class="letter">ʀ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ə" class="letter">ə</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ɔ" class="letter">ɔ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ɩ" class="letter">ɩ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ᴇ" class="letter">ᴇ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="&middot;" class="letter">&middot;</a><br>
<a onclick="typeLetter(this)" id = "tosearch1" name="á" class="letter">á</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="é" class="letter">é</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="í" class="letter">í</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ó" class="letter">ó</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ú" class="letter">ú</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ɛ́" class="letter">ɛ́</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ä" class="letter">ä</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="<sup>ä</sup>" class="letter"><sup>ä</sup></a>
<a onclick="typeLetter(this)" id = "tosearch1" name="<sup>ɩ</sup>" class="letter"><sup>ɩ</sup></a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ụ" class="letter">ụ</a><br>
<a onclick="typeLetter(this)" id = "tosearch1" name="c̕" class="letter">c̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="l̕" class="letter">l̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="m̕" class="letter">m̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="n̕" class="letter">n̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="p̕" class="letter">p̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="q̕" class="letter">q̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="r̕" class="letter">r̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ṛ" class="letter">ṛ</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="ʀ̕" class="letter">ʀ̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="s̕" class="letter">s̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="t̕" class="letter">t̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="w̕" class="letter">w̕</a>
<a onclick="typeLetter(this)" id = "tosearch1" name="y̕" class="letter">y̕</a>
<br>
<br>
<input type="checkbox" name="r_stem_list_cb1" value="r_stem_list" checked="true"/>Reichard's Stem List<br>
<input type="checkbox" name="stem_list_cb1" value="stem_list" checked="true"/>Annotated Stem List<br>
<input type="checkbox" name="diction_cb1" value="dictionary" checked="true"/>Root Dictionary<br>

</div>

<div id="search_salish">
    
<p>Salish</p>

<input type="text" placeholder="Search for..." name="tosearch2" id = "tosearch2"  /><br>
<a onclick="typeLetter(this)" id = "tosearch2" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ʕ" class="letter">ʕ</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="&#269;" class="letter">&#269;</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ǰ" class="letter">ǰ</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="&scaron;" class="letter">&scaron;</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ɬ" class="letter">ɬ</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ɫ" class="letter">ɫ</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="‿" class="letter">‿</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ə" class="letter">ə</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ɔ" class="letter">ɔ</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="&middot;" class="letter">&middot;</a><br>
<a onclick="typeLetter(this)" id = "tosearch2" name="á" class="letter">á</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="é" class="letter">é</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="í" class="letter">í</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ó" class="letter">ó</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ú" class="letter">ú</a>
<a onclick="typeLetter(this)" id = "tosearch2" name="ɛ́" class="letter">ɛ́</a><br>
<br>

<input type="checkbox" name="affix_list_cb2" value="affix_list" checked="true"/>Affix List<br>
<input type="checkbox" name="r_stem_list_cb2" value="r_stem_list" checked="true"/>Reichard's Stem List<br>
<input type="checkbox" name="stem_list_cb2" value="stem_list" checked="true"/>Annotated Stem List<br>
<input type="checkbox" name="diction_cb2" value="dictionary" checked="true"/>Root Dictionary<br>

</div>

<div id="search_nicodemus">
    
<p>Nicodemus</p>
<input type="text" placeholder="Search for..." name="tosearch3" id = "tosearch3"  /><br>
<br>
<br>
<br>
<input type="checkbox" name="affix_list_cb3" value="affix_list" checked="true"/>Affix List<br>
<input type="checkbox" name="r_stem_list_cb3" value="r_stem_list" checked="true"/>Reichard's Stem List<br>
<input type="checkbox" name="stem_list_cb3" value="stem_list" checked="true"/>Annotated Stem List<br>
<input type="checkbox" name="diction_cb3" value="dictionary" checked="true"/>Root Dictionary

</div>

<div id="search_english">
    
<p>English</p>
<input type="text" placeholder="Search for..." name="tosearch4" id = "tosearch4"  /><br>
<a onclick="typeLetter(this)" id = "tosearch4" name="&#8224;" class="letter">&#8224;</a>
<a onclick="typeLetter(this)" id = "tosearch4" name="&#8225;" class="letter">&#8225;</a>
<a onclick="typeLetter(this)" id = "tosearch4" name="&#167;" class="letter">&#167;</a><br>
<br>
<br>
<input type="checkbox" name="affix_list_cb4" value="affix_list" checked="true"/>Affix List<br>
<input type="checkbox" name="r_stem_list_cb4" value="r_stem_list" checked="true"/>Reichard's Stem List<br>
<input type="checkbox" name="stem_list_cb4" value="stem_list" checked="true"/>Annotated Stem List<br>
<input type="checkbox" name="diction_cb4" value="dictionary" checked="true"/>Root Dictionary<br>

</div>

     
<div id="search_options">
Options:
<input type="checkbox" name="boundaries_cb" value="boundaries" /> Ignore Morpheme Boundaries? <input type="checkbox" name="voweless_cb" value="voweless" /> Ignore Vowels?

<div id="search_button">
<button type="submit">SEARCH</button> <br>
</div>

</form>
</div>


<div id="search_help">
<p>You can search within any of the different writing systems for Couer d'Alene, or within the English translations, and find results in the Root Dictionary, Stem Lists, and/or Affix List available on this site. You can select one or more writing systems, and one or more resources to search, just by clicking the checkboxes.  You can search for one or more search strings as well, just type in the string you'd like to look for in each of the search boxes you'd like to use. If your searches contain special characters, you can click on the character you want to type in, and it will appear in your search string.  The search engine will find matches to any of the searches you have entered, and will display all of those matches for you.  The string or strings you searched for will be highlighted in yellow in your search results. You need to select at least one orthography and at least one resource in order to obtain results.</p>
<p>Select 'ignore morpheme boundaries' in order to be able to exclude the morpheme boundary markers '-', '+', '?', and '=' from your search. If you check 'ignore morpheme boundaries' and enter, for example, 'cegʷt' in the root dictionary search, the results would include the entry 'cegʷ+t' from the dictionary, ignoring the '+' symbol in the matching string. These markers only appear in the entries written in the Salish orthography, so this restriction will only apply to a search that includes a Salish search string. You can select 'ignore vowels' in order to find entries that match the consonantal pattern of the search word (and so may be derived from the same root as the search word).  Again, this feature is only relevant to the Salish orthography, in which the consonantal root patterns are derived by analysis from varying attested word forms in which only the vowels differ.</p>
</div>

</div>








