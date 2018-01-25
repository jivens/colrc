
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
<br>
<form action="../scripts/search_all.php" name="search_affix" id="search_affix" method="POST">
<input type="checkbox" name="affix_sail_cb" value="affix" checked="true"/>Salish 
<input type="checkbox" name="affix_nico_cb" value="affix" checked="true"/>Nicodemus
<input type="checkbox" name="affix_english_cb" value="affix" checked="true"/>English<br>
<input type="text" name="tosearch_affix" id = "tosearch_affix"  />
<input type="submit" value = "Search"  /><br>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="&#269;" class="letter">&#269;</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="&scaron;" class="letter">&scaron;</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="ɫ" class="letter">ɫ</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" id = "tosearch_affix" name="ə" class="letter">ə</a>
<br>
<input type="checkbox" name="voweless_cb" value="voweless" /> Ignore Vowels in Salish?
</form>



