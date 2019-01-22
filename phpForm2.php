<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<div class="container">

<h2>Create a New User Account</h2>
<form method='post' action='databasePhp/createNewUser.php' name='newUserForm'>
	<label>First Name:</label>
	<input type='text' name='firstName' size='30'>
	<label>Family Name:</label>
	<input type='text' name='familyName' size='30'>
	<p><input type='submit' value='Create New User'></p>
</form>
</div>
</body>
</html>