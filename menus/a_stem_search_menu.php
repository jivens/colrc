
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

<form action="../scripts/search_all.php" name="search_a_stem" id="search_a_stem" method="POST">
<input type="checkbox" name="stem_reichard_cb" value="a_stem" checked="true"/>Reichard
<input type="checkbox" name="stem_sail_cb" value="a_stem" checked="true"/>Salish 
<input type="checkbox" name="stem_nico_cb" value="a_stem" checked="true"/>Nicodemus
<input type="checkbox" name="stem_english_cb" value="a_stem" checked="true"/>English<br>
<input type="text" name="tosearch_stem" id = "tosearch_stem"  />
<input type="submit" value = "Search"  /><br>

<a onclick="typeLetter(this)" id = "tosearch_stem" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ʕ" class="letter">ʕ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="&#269;" class="letter">&#269;</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ǰ" class="letter">ǰ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="&scaron;" class="letter">&scaron;</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ɬ" class="letter">ɬ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ɫ" class="letter">ɫ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ʀ" class="letter">ʀ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ə" class="letter">ə</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ɔ" class="letter">ɔ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ɩ" class="letter">ɩ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ᴇ" class="letter">ᴇ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="&middot;" class="letter">&middot;</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="á" class="letter">á</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="é" class="letter">é</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="í" class="letter">í</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ó" class="letter">ó</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ú" class="letter">ú</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ɛ́" class="letter">ɛ́</a><br>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ä" class="letter">ä</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="<sup>ä</sup>" class="letter"><sup>ä</sup></a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="<sup>ɩ</sup>" class="letter"><sup>ɩ</sup></a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ụ" class="letter">ụ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="c̕" class="letter">c̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="l̕" class="letter">l̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="m̕" class="letter">m̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="n̕" class="letter">n̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="p̕" class="letter">p̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="q̕" class="letter">q̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="r̕" class="letter">r̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ṛ" class="letter">ṛ</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="ʀ̕" class="letter">ʀ̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="s̕" class="letter">s̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="t̕" class="letter">t̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="w̕" class="letter">w̕</a>
<a onclick="typeLetter(this)" id = "tosearch_stem" name="y̕" class="letter">y̕</a><br>


<input type="checkbox" name="voweless_cb" value="voweless" /> Ignore Vowels in Salish?
</form>



