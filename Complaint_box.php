<html>
<head>
<title>COMPLAINT Box</title>

<script>
function validateForm() {
    var fnm = document.forms.frm1.name.value;
    var sub = document.forms.frm1.Subject.value;
       

if (fnm == "") {
        alert("Name must be filled out");
	document.frm1.name.focus();
        return false;
	}
	 
    if (sub == "") {
        alert("Please enter your subject");
	document.frm1.Subject.focus();
        return false;
	}

return true;

}
</script>
</head>
<body>
<center>

<form name="frm1" action="http://localhost/complaint_registed.php" method="post">
 
<b>Tell Your complaint We Are Here To Hear You!!! </b>
 
<table>
<tr>
<th>Name:</th>
<td><input type="text" name="name" size="30" value="" /></td>
</tr>

<tr><td><rows=5></td></tr>

<tr>
<th>Branch:</th>
<td>
<select name=brh>
<option value = "COMPS">Computer Engineering</option>
<option value = "MECH">Mechnical Engineering</option>
<option value = " EXTC"> Electronics and telecommunication Engineering</option>
<option value = "INFT">Information Technology</option>
<option value = "INst">Instrumentation</option>
</select>
</td>
</tr>
 
<tr>
<th>Year:</th>
<td>
<select name=yr>
<option value = "FE">FE</option>
<option value = "SE">SE</option>
<option value = "TE">TE</option>
<option value = "BE">BE</option>
</select></tr>


<tr>
<th>Complaint against</th>
<td><input type = radio name ="r1" value=Teacher>Teacher</input>
<input type = radio name ="r1" value=NON-teaching staff>NON-Teaching Staff</input>
<input type = radio name ="r1" value=Student>Student</input>
<input type = radio name ="r1" value=Committee>Committee</input>
<input type = radio name ="r1" value=Other checked>Other</input>

</td>
</tr>	

<tr>
<th>Subject:</th>
<td><input type="text" name="Subject" size="30" value="" /></td>
</tr>

<tr>
<th>Your complaint:</th>
<td><textarea name="issue" rows=5 cols=35></textarea></td>
</tr>

<tr><td colspan=2><center><input type="submit" name="submit" value="Submit" onClick=" return validateForm()" />
<input type="Reset" name="reset" value="Reset" /></center></td></tr>

 </table>
</form>
</center>
</body>
</html>