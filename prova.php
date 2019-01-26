<!doctype html>
<head>
<title>Sum of all TextBox values using jQuery</title>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
<?php
echo "odificado fichero";
?>


$(document).ready(function() {
    var re;
    var valor = 0
    $('form').find('.post').each(function(){
        re = $(this).val();
        valor += parseFloat(re)
    });
    $('#Total').val(valor.toFixed(2));
});
</script>
</head>
<body>
<form>
	<table align="center">
		<tr>
			<td><label>Campo 1:</label></td>
			<td><input type="Text" id="campo1" size="6" value="" maxlength="6"  class="post" /></td>
		</tr>
		<tr>
			<td><label>Campo 2:</label></td>
			<td><input type="Text" id="campo2" size="6" value="" maxlength="6" class="post" /></td>
		</tr>
		<tr>
			<td><label>Campo 3:</label></td>
			<td><input type="Text" id="campo3" size="6" value="" maxlength="6" class="post" /></td>
		</tr>
		<tr>
			<td><label>Total:</label></td>
			<td><input type="Text" id="total" size="6" value="" maxlength="6" /></td>
		</tr>
	</table>
	<div>
		<button >Guardar</button>
	</div>
</form>
</body>
</htnl>