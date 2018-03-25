<?php session_start();

require ("connection.php");

$firstName = $lastName = $phoneNumber = $emailAddress = $userName = $refer = "";
$firstError = $lastError = $phoneError = $emailError = $userError = $referError = "";
$foo = true;
$error = " ";

if (isset($_POST['submit'])) {
	if (empty($_POST["firstName"])) {
		$firstError = "Reuqired";
		$foo = false;
	} else {
		$firstName = fix_input($_POST["firstName"]);

	}

	if (empty($_POST["lastName"])) {
		$lastError = "Required";
		$foo = false;
	} else {
		$lastName = fix_input($_POST["lastName"]);
	}

	if (empty($_POST["phoneNumber"])) {
		$phoneError = "Required";
		$foo = false;
	} else {
		$phoneNumber = fix_input($_POST["phoneNumber"]);
	}

	if (empty($_POST["emailAddress"])) {
		$emailError = "Required";
		$foo = false;
	} else {
		$emailAddress = fix_input($_POST["emailAddress"]);
	}

	if (empty($_POST["userName"])) {
		$userError = "Required";
		$foo = false;
	} else {
		$userName = fix_input($_POST["userName"]);
	}

}

function fix_input($entry) {
	$entry = strip_tags($entry);
	$entry = stripcslashes($entry);
	$entry = mysql_real_escape_string($entry);
	$entry = trim($entry);
	return $entry;
}

$dbConnection = mysql_connect($host, $username, $password);

if (!$dbConnection) {
	die("Could not connect to database....try again");
}
mysql_select_db($database);

/**only checking for existing email address*/

$emailAddress = $_POST["emailAddress"];
$query = mysql_query("SELECT * FROM mailingList WHERE emailAddress='" . $emailAddress . "'");
$result = mysql_query($query);

if (mysql_num_rows($result) > 0) {
	print"duplicate email";
	$foo = false;
	
} else {
	if ($foo == true) {
		$sqlQuery = "INSERT INTO mailingList (emailAddress,firstName,lastName,phoneNumber,refer,userName) 
			     VALUES('" . $_POST["emailAddress"] . "','" . $_POST["firstName"] . "','" . $_POST["lastName"] . "
			     ','" . $_POST["phoneNumber"] . "',' " . $_POST["refer"] . " ','" . $_POST["userName"] . "')";
	}

}
if (mysql_query($sqlQuery)) {
	$error = "Person Successfully Added";
} else {
	$error = 2;
	$error = "Error adding";
	// echo $sqlQuery;
	mysql_close($dbConnection);

	
	
}
?>

<?php
include ("header.php");
?>
<html>
	<div id="content" class="clearfix">
		<aside>
			<h2>Mailing Address</h2>
			<h3>1385 Woodroffe Ave
			<br>
			Ottawa, ON K4C1A4</h3>
			<h2>Phone Number</h2>
			<h3>(613)727-4723</h3>
			<h2>Fax Number</h2>
			<h3>(613)555-1212</h3>
			<h2>emailAddress</h2>
			<h3>info@wpeatery.com</h3>
		</aside>
		<div class="main">
			<h1>Sign up for our newsletter</h1>
			<p>
				Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!
			</p>
			<form action="contact.php"  name="frmNewsletter" id="frmNewsletter" method="post">
				<table>
					<tr>
						<td>First Name:</td>
						<td>
						<input type="text" name="firstName" id="firstName" size='40'><span class="error">*<?php echo $firstError; ?></span>
						</td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td>
						<input type="text" name="lastName" id="lastName" size='40'><span class="error">*<?php echo $lastError; ?></span>
						</td>
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td>
						<input type="text" name="phoneNumber" id="phoneNumber" size='40'>
						<span class="error">*<?php echo $phoneError; ?></span>
						</td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td>
						<input type="text" name="emailAddress" id="emailAddress" size='40'><span class="error">*<?php echo $emailError; ?></span>
					</tr>
					<tr>
						<td>Username:</td>
						<td>
						<input type="text" name="userName" id="userName" size='20'><span class="error">*<?php echo $userError; ?></span>
					</tr>
					<tr>
					
						<td>How did you hear
						<br>
						about us?</td>
						<td>
						<select name="refer" size="1">
							<option>Select referer</option>
							<option value="newspaper">Newspaper</option>
							<option value="radio">Radio</option>
							<option value="tv">Television</option>
							<option value="other">Other</option>
						</select></td>
					</tr>
					<tr>
						<td colspan='2'>
						<input type='submit' name='submit' id="submit' value='Sign up!'><span class="error">*<?php echo $referError; ?></span>
						&nbsp;&nbsp;
						<input type='reset' name="reset" id="reset" value="Reset Form">
						
						
						</td>
					</tr>
				</table>
			</form>
		</div><!-- End Main -->
	</div><!-- End Content -->

	<?php
	//echo $error;
	include ("footer.php");
	?>
</html>
