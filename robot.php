
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>Robot Clean Floor</title>
</head>
<body>
<form name="robot" method="post">
<?php 
$floor='';
$area=0;

$floorErr='';
$areaErr='';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["floor"]) || $_POST["floor"]=='select' ) {
	$floorErr = "floor is required";
	} else {
	$floor = $_POST['floor'];
	}
	if (empty($_POST["area"])) {
	$areaErr = "Area is required";
	} else {
	$area = $_POST['area'];
	}
}
	
?>
<table>
<tr>
<td>Floor :</td>
<td>

<Select name="floor" id="floor">
<option value="select">Select Floor Type</option>
<option value="hard" <?php if($floor=="hard"){ ?> selected <?php }?>>Hard</option>
<option value="carpet" <?php if($floor=="carpet"){ ?> selected <?php }?>>Carpet</option>
</select>
<span class="error">* <?php echo $floorErr;?></span>
<br><br>
</td>
</tr>
<tr>
<td>Area :</td>
<td> <input type="text" name="area" id="area" value="<?php if($area>0){echo $area;}?>" autocomplete="off"><span class="error">* <?php echo $areaErr;?></span></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit" name="submit" /></td>
</tr>
</table>
</form>
<BR>
<BR>
 
<?php
if (isset($_POST['floor']) && isset($_POST['area'])) 
{
    
	$floor_time=0;
	$total_time=0;
	
	$battry_charge=30; 
	$battry_life=60; 
	
	if($floor=='hard')
	{
		$floor_time=$area*1;
		
	}else if($floor=='carpet')
	{
		$floor_time=$area*2;
	} 

	$total_time = (round($floor_time/$battry_life)*$battry_life)+(round($floor_time/$battry_life)*$battry_charge)+($floor_time%$battry_life);
		
	echo "Calculated period - ".$total_time;
}
?>
 
</body>
</html>
