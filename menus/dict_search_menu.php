
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

<form action="../scripts/search_all.php"  name="search_dict" id="search_dict" method="POST">
<input type="checkbox" name="diction_sail_cb" value="dictionary" checked="true"/>Salish 
<input type="checkbox" name="diction_nico_cb" value="dictionary" checked="true"/>Nicodemus
<input type="checkbox" name="diction_english_cb" value="dictionary" checked="true"/>English<br>
<input type="text" placeholder="Search for..." name="tosearch_dict" id = "tosearch_dict"  />
<input type="submit" value = "Search"  /><br>

<a onclick="typeLetter(this)" id = "tosearch_dict" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ʕ" class="letter">ʕ</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&#269;" class="letter">&#269;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ǰ" class="letter">ǰ</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&scaron;" class="letter">&scaron;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ɫ" class="letter">ɫ</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="‿" class="letter">‿</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ə" class="letter">ə</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ɔ" class="letter">ɔ</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&middot;" class="letter">&middot;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="á" class="letter">á</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="é" class="letter">é</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="í" class="letter">í</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ó" class="letter">ó</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ú" class="letter">ú</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="ɛ́" class="letter">ɛ́</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&#8224;" class="letter">&#8224;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&#8225;" class="letter">&#8225;</a>
<a onclick="typeLetter(this)" id = "tosearch_dict" name="&#167;" class="letter">&#167;</a><br>
<input type="checkbox" name="boundaries_cb" value="boundaries" /> Ignore Morpheme Boundaries?<br><input type="checkbox" name="voweless_cb" value="voweless" /> Ignore Vowels in Salish?
</form>



