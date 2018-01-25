
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

<form action="../scripts/search_all.php" name="search_r_stem" id="search_r_stem" method="POST">
<input type="checkbox" name="r_stem_sail_cb" value="r_stem" checked="true"/>Salish 
<input type="checkbox" name="r_stem_nico_cb" value="r_stem" checked="true"/>Nicodemus
<input type="checkbox" name="r_stem_english_cb" value="r_stem" checked="true"/>English<br>
<input type="text" name="tosearch_r_stem" id = "tosearch_r_stem"  />
<input type="submit" value = "Search"  /><br>

<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ʕ" class="letter">ʕ</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="&#269;" class="letter">&#269;</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ǰ" class="letter">ǰ</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="&scaron;" class="letter">&scaron;</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ɫ" class="letter">ɫ</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="‿" class="letter">‿</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ə" class="letter">ə</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ɔ" class="letter">ɔ</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="&middot;" class="letter">&middot;</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="á" class="letter">á</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="é" class="letter">é</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="í" class="letter">í</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ó" class="letter">ó</a>
<a onclick="typeLetter(this)" id = "tosearch_r_stem" name="ú" class="letter">ú</a><br>

<input type="checkbox" name="voweless_cb" value="voweless" /> Ignore Vowels in Salish?
</form>



