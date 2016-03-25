<?php

	include("connection.php");
	include("submit2.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reporting Bug Form</title>
<link rel="stylesheet" type="text/css" href="lookinggood.css">
</head>

<body>
	<form method="post" action="">
		<fieldset>
		<legend>Reporting Bug Form</legend>
			<table width="400" border="0" cellpadding="10" cellspacing="10">
				<tr>
					<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right"><label for="title">Title</label></div>
					</td>
					<td>
							<input name="title" type="text" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td style="font-weight: bold">
							<div align="right">
									<label for="desc">Description</label>
							</div>
					</td>
					<td>
							<input name="desc" type="text" class="input" size="100" maxlength="400" required />
					</td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold">
						<div align="right">
							<label for="postDate">PostedDate</label>
						</div>
					</td>
					<td>
						<input name="postDate" type="date" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23" style="font-weight: bold">
						<div align="right">
							<label for="fixDate">FixDate</label>
						</div>
					</td>
					<td>
						<input name="fixDate" type="date" class="input" size="25" required />
					</td>
				</tr>
				<tr>
					<td height="23"></td>
					<td>
						<div align="right">
				  		<input type="submit" name="submit" value="Report another Bug!" />
						</div>
					</td>
				</tr>
				<tr>
					<td height="23"></td>
					<td>
						<div align="right">
							<a href="url"><input type="submit" name="submit" value="Moving On 2!" /></a>
						</div>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>
