<html>
<head><title>Thank You</title>
<link rel="stylesheet" href="sheetz.css" type text/css">
<!-- links stylesheet.-->
</head>

<body>
<center>
<b>Thank you for your order!</b>
<br>
<br>
<?php
	if($_POST['state']=='AL')
	{
		$stateV="AL";
	}
	else if($_POST['state']=='AK')
	{
		$stateV="AK";
	}
	else if($_POST['state']=='AZ')
	{
		$stateV="AZ";
	}
	else if($_POST['state']=='AR')
	{
		$stateV="AR";
	}
	else if($_POST['state']=='CA')
	{
		$stateV="CA";
	}
	else if($_POST['state']=='CO')
	{
		$stateV="CO";
	}
	else if($_POST['state']=='CT')
	{
		$stateV="CT";
	}
	else if($_POST['state']=='DE')
	{
		$stateV="DE";
	}
	else if($_POST['state']=='DC')
	{
		$stateV="DC";
	}
	else if($_POST['state']=='FL')
	{
		$stateV="FL";
	}
	else if($_POST['state']=='GA')
	{
		$stateV="GA";
	}
	else if($_POST['state']=='HI')
	{
		$stateV="HI";
	}
	else if($_POST['state']=='ID')
	{
		$stateV="ID";
	}
	else if($_POST['state']=='IL')
	{
		$stateV="IL";
	}
	else if($_POST['state']=='IN')
	{
		$stateV="IN";
	}
	else if($_POST['state']=='LA')
	{
		$stateV="LA";
	}
	else if($_POST['state']=='KS')
	{
		$stateV="KS";
	}
	else if($_POST['state']=='KY')
	{
		$stateV="KY";
	}
	else if($_POST['state']=='ME')
	{
		$stateV="ME";
	}
	else if($_POST['state']=='MD')
	{
		$stateV="MD";
	}
	else if($_POST['state']=='MA')
	{
		$stateV="MA";
	}
	else if($_POST['state']=='MI')
	{
		$stateV="MI";
	}
	else if($_POST['state']=='MN')
	{
		$stateV="MN";
	}
	else if($_POST['state']=='MS')
	{
		$stateV="MS";
	}
	else if($_POST['state']=='MO')
	{
		$stateV="MO";
	}
	else if($_POST['state']=='MT')
	{
		$stateV="MT";
	}
	else if($_POST['state']=='NE')
	{
		$stateV="NE";
	}
	else if($_POST['state']=='NV')
	{
		$stateV="NV";
	}
	else if($_POST['state']=='NH')
	{
		$stateV="NH";
	}
	else if($_POST['state']=='NJ')
	{
		$stateV="NJ";
	}
	else if($_POST['state']=='NM')
	{
		$stateV="NM";
	}
	else if($_POST['state']=='NY')
	{
		$stateV="NY";
	}
	else if($_POST['state']=='NC')
	{
		$stateV="NC";
	}
	else if($_POST['state']=='ND')
	{
		$stateV="ND";
	}
	else if($_POST['state']=='OH')
	{
		$stateV="OH";
	}
	else if($_POST['state']=='OK')
	{
		$stateV="OK";
	}
	else if($_POST['state']=='OR')
	{
		$stateV="OR";
	}
	else if($_POST['state']=='PA')
	{
		$stateV="PA";
	}
	else if($_POST['state']=='RI')
	{
		$stateV="RI";
	}
	else if($_POST['state']=='SC')
	{
		$stateV="SC";
	}
	else if($_POST['state']=='SD')
	{
		$stateV="SD";
	}
	else if($_POST['state']=='TN')
	{
		$stateV="TN";
	}
	else if($_POST['state']=='TX')
	{
		$stateV="TX";
	}
	else if($_POST['state']=='UT')
	{
		$stateV="UT";
	}
	else if($_POST['state']=='VT')
	{
		$stateV="VT";
	}
	else if($_POST['state']=='VA')
	{
		$stateV="VA";
	}
	else if($_POST['state']=='WA')
	{
		$stateV="WA";
	}
	else if($_POST['state']=='WV')
	{
		$stateV="WV";
	}
	else if($_POST['state']=='WI')
	{
		$stateV="WI";
	}
	else if($_POST['state']=='WY')
	{
		$stateV="WY";
	}
?>
Customer Name: <?php
$first = $_POST['fname'];
$last = $_POST['lname'];

fix_names();

echo $first." ".$last."<br />";

function fix_names()
{
	global $first; $first = ucfirst(strtolower($first));
	global $last; $last = ucfirst(strtolower($last));
}
?>
<br>
Street Address: <?php 
echo $_POST["sadd"]." ".$_POST["sadd2"]." ".$stateV.", ".$_POST["zip"]."<br />"; 
?>
<br>
<?php
	if($_POST['makeitrain']=='Visa')
	{
		$cardV="Visa";
	}
	else if($_POST['makeitrain']=='American')
	{
		$cardV="American Express";
	}
	else if($_POST['makeitrain']=='Discover')
	{
		$cardV="Discover";
	}
	else if($_POST['makeitrain']=='Master')
	{
		$cardV="MasterCard";
	}
?>
<?php
	if($_POST['month']=='01')
	{
		$monV="01";
	}
	else if($_POST['month']=='02')
	{
		$monV="02";
	}
	else if($_POST['month']=='03')
	{
		$monV="03";
	}
	else if($_POST['month']=="04")
	{
		$monV="04";
	}
	else if($_POST['month']=='05')
	{
		$monV="05";
	}
	else if($_POST['month']=='06')
	{
		$monV="06";
	}
	else if($_POST['month']=='07')
	{
		$monV="07";
	}
	else if($_POST['month']=='08')
	{
		$monV="08";
	}
	else if($_POST['month']=='09')
	{
		$monV="09";
	}
	else if($_POST['month']=='10')
	{
		$monV="10";
	}
	else if($_POST['month']=='11')
	{
		$monV="10";
	}
	else if($_POST['month']=='12')
	{
		$monV="12";
	}
?>
<?php
	if($_POST['year']=='13')
	{
		$yearV="2013";
	}
	else if($_POST['year']=='14')
	{
		$yearV="2014";
	}
	else if($_POST['year']=='15')
	{
		$yearV="2015";
	}
	else if($_POST['year']=='16')
	{
		$yearV="2016";
	}
	else if($_POST['year']=='17')
	{
		$yearV="2017";
	}
	else if($_POST['year']=='18')
	{
		$yearV="2018";
	}
	else if($_POST['year']=='19')
	{
		$yearV="2019";
	}
	else if($_POST['year']=='20')
	{
		$yearV="2020";
	}
?>
Bank Card: <?php
$newCnum = $_POST['cnum'];

cc_masking($newCnum);

echo $cardV." | ".$newCnum." | ".$_POST['snum']."<br />";
?>


<?php
function cc_masking($newCnum) {
    return substr($newCnum, 0, 4).str_repeat("X", strlen($newCnum) - 8).substr($newCnum, -4);
}
?>
Expiration Date: <?php
echo $monV." / ".$yearV."</br>";
?>
<br>

<b>Your Order</b><br><br>
<?php
	if($_POST['hdtype']=='Plain Hot Dog')
	{
		$hd1="Plain Hot Dog" ;
		$cost1 = 2;
	}
	if($_POST['hdtype']=='Hotdog w/ Ketchup')
	{
		$hd2=", Hotdog w/ Ketchup";
		$cost2 = 2;
	}
	if($_POST['hdtype']=='Hotdog w/ Mustard')
	{
		$hd3=", Hotdog w/ Mustard";
		$cost3 = 2;
	}
	if($_POST['burger']=='Southwest Burger')
	{
		$burger1=", Southwest Burger";
		$cost4 = 4;
	}
	if($_POST['burger']=='Smokehouse Burger')
	{
		$burger2=", Smokehouse Burger";
		$cost5 = 4;
	}
	if($_POST['burger']=='Jr Burger')
	{
		$burger3=", Jr Burger";
		$cost6 = 4;
	}	
	if($_POST['burger']=='Jr Cheeseburger')
	{
		$burger4=", Jr Burger";
		$cost7 = 5;
	}	
	if($_POST['typesub']=='Cheese sub')
	{
		$sub1=", Cheese sub";
		$cost8 = 4;
	}
	if($_POST['typesub']=='Turkey sub')
	{
		$sub2=", Turkey sub";
		$cost9 = 5;
	}
	if($_POST['typesub']=='Ham sub')
	{
		$sub3=", Ham sub";
		$cost10 = 5;
	}
	if($_POST['typesub']=='Meatball sub')
	{
		$sub4=", Meatball sub";
		$cost11 = 5;
	}
	if($_POST['wrap']=='Roasted Turkey Wrap')
	{
		$wrap1=", Roasted Turkey Wrap";
		$cost12 = 4;
	}
	if($_POST['wrap']=='Roasted Turkey and Cheese Wrap')
	{
		$wrap2=", Roasted Turkey and Cheese Wrap";
		$cost13 = 5;
	}	
	if($_POST['wrap']=='Chicken Salad Wrap')
	{
		$wrap3=", Chicken Salad Wrap";
		$cost14 = 5;
	}	
	if($_POST['wrap']=='Veggie Wrap')
	{
		$wrap4=", Veggie Wrap";
		$cost15 = 3;
	}		
	if($_POST['sandwich']=='Ham Pretzel Melt')
	{
		$sd1=", Ham Pretzel Melt";
		$cost16 = 4;
	}	
	if($_POST['sandwich']=='Cordon Bleu Chicken Breast')
	{
		$sd2=", Cordon Bleu Chicken Breast";
		$cost17 = 4;
	}	
	if($_POST['app']=='Mac and Cheese')
	{
		$app1=", Mac and Cheese";
		$cost18 = 3;
	}	
	if($_POST['app']=='French Fries')
	{
		$app2=", French Fries";
		$cost19 = 2;
	}	
	if($_POST['app']=='Mozzarella Sticks')
	{
		$app3=", Mozzarella Sticks";
		$cost20 = 3;
	}	
?>

<?php
echo $hd1.$hd2.$hd3.$burger1.$burger2.$burger3.$burger4.$sub1.$sub2.$sub3.$sub4.$wrap1.$wrap2.$wrap3.$wrap4.$sd1.$sd2.$app1.$app2.$app3."<br />";
?>
<br>


Total Cost: <?php
$totCost = ($cost1 + $cost2 + $cost3 + $cost4 + $cost5 + $cost6 + $cost7 + $cost8 + $cost9 + $cost10 + $cost11 + $cost12 + $cost13 + $cost14 + $cost16 + 
$cost17 + $cost18 + $cost19 + $cost20);
echo "$".$totCost."<br />";
?>
<br>
<hr width="10%" align="left">
<br>


 
 </center>


 </body>
 </html>