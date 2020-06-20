
<!DOCTYPE html>
<html>
<head>
<title>Robot Clean Floor</title>
</head>
<body>
<form name="robot" method="post">
<table>
<tr>
<td>Floor :</td>
<td>
<Select name="floor" id="floor">
<option value="hard">Hard</option>
<option value="carpet">Carpet</option>
</select>
</td>
</tr>
<tr>
<td>Area :</td>
<td><input type="text" name="area" id="area" onkeypress="return isNumber(event)"></td>
</tr>
<tr>
<td></td>
<td><input type="button" value="submit" name="submit" onclick="calculate_period();"/></td>
</tr>
</table>
</form>
<BR>
Calculated period <input id="result" type="text"> 
</body>
</html>

<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function calculate_period()
{
	var floor='';
	var area=0;
	var floor_time=0;
	var total_time=0;
	
	var battry_charge=30; 
	var battry_life=60; 
	
	floor =document.getElementById('floor').value;
	area =document.getElementById('area').value;
	if(area==0)
	{
		alert('Please enter area of floor');
	}		
	if(floor=='hard')
	{
		floor_time=area*1;
		
	}else if(floor=='carpet')
	{
		floor_time=area*2;
	} 
	total_time = (Math.round(floor_time/battry_life)*battry_life)+(Math.round(floor_time/battry_life)*battry_charge)+(floor_time%battry_life);
		
	document.getElementById('result').value=total_time;
}
</script>
