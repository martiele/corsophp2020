<!DOCTYPE html>
<html>
<head>
	<title>Esempio di form</title>
</head>
<body>

<h3>Esempio di form</h3>

<form accept-charset="UTF-8" action="action_page.php" autocomplete="off" method="GET">
	<fieldset>
	<legend>Gruppo:</legend>
	<label for="name">Nome</label> 
	<input name="name" type="text" value="" /> <br /> 
	<br />
	<label for="sex">Sesso</label> 
	<input checked="checked" name="sex" type="radio" value="maschio" /> Male  
	<input name="sex" type="radio" value="femmina" /> Female <br />  
	<br />  
	<textarea cols="30" rows="5" placeholder="Messaggio" name="messaggio"></textarea><br /> 
	<br />  	
	<label for="destinatario">Scrivi a:</label> 
	<select name="destinatario" id="dest" onchange="setSelectedValue(this.id, 'dest_hidden')">
		<option selected="selected" value="0">Generale</option>
		<option value="1">Commerciale</option>
		<option value="2">Tecnico</option>
	</select>
<input type="hidden" name="dest_value" id="dest_hidden" value="Generale">

<script>

function setSelectedValue(id, hfdId){
	var ddl = document.getElementById(id);
	document.getElementById(hfdId).value = ddl.options[ddl.selectedIndex].text;
}

</script>

	<br /> 
	<br /> 
	<label for="interessi">Interessato a:</label> <br />
	<input name="interessi[]" type="checkbox" value="sport" /> Sport<br /> 
	<input name="interessi[]" type="checkbox" value="cinema" /> Cinema<br /> 
	<input name="interessi[]" type="checkbox" value="musica" /> Musica<br /> 
	<input name="interessi[]" type="checkbox" value="altro" /> Altro<br /> 
	<br /> 	
	<button type="reset" value="Annulla">Annulla</button>
	<button type="submit" value="Submit">Invia</button>
	</fieldset>
</form>

</body>
</html>
