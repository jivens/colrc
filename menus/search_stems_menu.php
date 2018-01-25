<script type="text/javascript">
    function typeLetter(area){
txtBox = document.getElementById("tosearch");
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
<form action="../scripts/search_all.php" name="searchForm" id="searchForm" method="POST">
    
<input type="checkbox" name="nicodemus_cb" value="nicodemus" checked="true"/>Nicodemus
<input type="checkbox" name="sailish_cb" value="sailish" checked="true"/>Salish <br>
<input type="checkbox" name="reichard_cb" value="reichard" checked="true"/>Reichard
<input type="checkbox" name="english_cb" value="english" checked="true"/>English Glosses <br>
<input type="text" name="tosearch" id = "tosearch"  />
<input type="submit" value = "Search"  /><br>

<a onclick="typeLetter(this)" name="&scaron;" class="letter">&scaron;</a>
<a onclick="typeLetter(this)" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" name="&#269;" class="letter">&#269;</a>
<a onclick="typeLetter(this)" name="&#660;" class="letter">&#660;</a>
<a onclick="typeLetter(this)" name="x&#803;" class="letter">x&#803;</a>
<a onclick="typeLetter(this)" name="ɫ" class="letter">ɫ</a>
<a onclick="typeLetter(this)" name="&middot;" class="letter">&middot;</a>
<a onclick="typeLetter(this)" name="ɛ" class="letter">ɛ</a>
<a onclick="typeLetter(this)" name="ə" class="letter">ə</a>
<a onclick="typeLetter(this)" name="á" class="letter">á</a>
<a onclick="typeLetter(this)" name="é" class="letter">é</a>
<a onclick="typeLetter(this)" name="í" class="letter">í</a>
<a onclick="typeLetter(this)" name="ó" class="letter">ó</a>
<a onclick="typeLetter(this)" name="ú" class="letter">ú</a>
<a onclick="typeLetter(this)" name="ɛ́" class="letter">ɛ́</a>
<a onclick="typeLetter(this)" name="&#695;" class="letter">&#695;</a>
<a onclick="typeLetter(this)" name="‿" class="letter">‿</a>
  <br>
<input type="checkbox" name="boundaries_cb" value="boundaries" /> Include Morpheme Boundaries?
</form>



