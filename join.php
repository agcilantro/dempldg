<?php
$fname = $_POST['namefirst'];
$lname = $_POST['namelast'];
$email = $_POST['email1'];
$email2 = $_POST['email2'];
$zip = $_POST['zip'];
$party = $_POST['party'];
echo ('First name: ' . $fname . '</br> Last name: ' . $lname . '</br>  Email: ' . $email . '</br> confirmed email: ' . $email2 . ' </br> Zip: ' . $zip . ' </br> Party: ' . $party );
echo ('</br');
print_r ($_POST);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <title>JOIN DEMOCRACY PLEDGE</title>
    <link rel="stylesheet" type="text/css" href="css/style_common.css"/>
    <link rel="stylesheet" type="text/css" href="css/style5.css"/>
    
</head>


<body>

<table width="90%" align=center><tr><td>


<FORM action="" method="POST">
        <div class="row">
			<span class="field-required">*</span><span class="field-desc">Indicates a required field.</span><br>

		
			<span class="field-title">Name:</span><span class="field-required">*</span><br>
			<input type="text" class="input-medium" placeholder="First*"name="namefirst">&nbsp;&nbsp;<input type="text" class="input-large" placeholder="Last*"name="namelast"><br><br>
	</div>


	
   <div class="row">
			<span class="field-title">Email Address:</span><span class="field-required">*</span><br>

			<span class="field-desc">We will not share or sell your email address to anyone.  We will not send you email unless you select to receive updates below.</span><br>
		
			<input type="text" class="input-xlarge" name="email1">
		</div>


        <div class="row">		
			<span class="field-title">Confirm Email Address:</span><span class="field-required">*</span><br>
			<input type="text" class="input-xlarge" name="email2"><br><br>
		</div>


        <div class="row">		
			<span class="field-title">Zip  Code:</span><span class="field-required">*</span><br>
			<input type="text" class="input-xlarge" name="zip"><br><br>
		</div>

    


        <div class="row">

						<span class="field-title">Party Affiliation:</span><br>

			<span class="field-desc">OPTIONAL</span><br>
			<select name="party">
				<option value="Select Party">Select Party</option>
				<option value="Democrat">Democrat</option>
				<option value="Republican">Republican</option>
				<option value="Independent">Independent</option>
				<option value="Other">Other</option>
				<option value="N/A">N/A</option>
			</select><br><br>
		</div>

        <div class="row">

						<span class="field-title">Voting Frequency:</span><br>

			<span class="field-desc">OPTIONAL</span><br>
			<select name="voting">
				<option value="Select Party">Select One</option>
				<option value="Every Election">Every Election</option>
				<option value="Presidential Elections Only">Presidential Elections Only</option>
				<option value="Rarely or Never">Rarely or Never</option>
			</select><br><br>
		</div>

  <div class="row">

						<span class="field-title">I want to receive email updates from Democracy Pledge</span><br>
	
<input class="checkbox" type="checkbox" name="updates" value="Yes"><span class="checkbox">Yes</span><br>
<input class="checkbox" type="checkbox" name="topic" value="No"><span class="checkbox">No</span><br><br>

		</div>

  <div class="row">

						<span class="field-title">I want to coordinate the Democracy Pledge movement in my area.</span><br>
	
<input class="checkbox" type="checkbox" name="volunteer" value="Yes"><span class="checkbox">Yes</span><br>
<input class="checkbox" type="checkbox" name="volunteer" value="No"><span class="checkbox">No</span><br><br>

		</div>



<p>Steve: Please add 'I am not a robot' CAPTCHA HERE</p>

   <input type="submit" value="SUBMIT" name="submit"> <a href="LINK TO THANK YOU PAGE TO GO HERE"></a>
</div>
</form>

</td></tr></table>


</body></html>
