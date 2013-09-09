<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<h1>Contacts</h1>

<form action="" id="addContact">
	<div>
		<label for="first_name">First Name: </label>
		<input type="text" id="first_name" name="first_name">
	</div>
	<div>
		<label for="last_name">Last Name: </label>
		<input type="text" id="last_name" name="last_name">
	</div>
	<div>
		<label for="email_address">Email Address: </label>
		<input type="text" id="email_address" name="email_address">
	</div>
	<div>
		<label for="description">Description: </label>
		<textarea name="description" id="description" cols="30" rows="10"></textarea>
	</div>
	<div><input type="submit" value="Add Contact"></div>
</form>

<table id="allContacts">
	<thead>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email address</td>
			<td>Description</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	</thead>
</table>

<div id="editContact"></div>

<script id="allContactsTemplate" type="text/template">
	<td><%= first_name %></td>
	<td><%= last_name %></td>
	<td><%= email_address %></td>
	<td><%= description %></td>
	<td><a href="#contacts/<%= id %>" class="delete">Delete?</a></td>
	<td><a href="#contacts/<%= id %>" class="edit">Edit?</a></td>
</script>

<script id="editContactTemplate" type="text/template">
	<form action="" id="editContact">
	<div>
		<label for="edit_first_name">First Name: </label>
		<input type="text" id="edit_first_name" name="edit_first_name" value="<%= first_name %>">
	</div>
	<div>
		<label for="edit_last_name">Last Name: </label>
		<input type="text" id="edit_last_name" name="edit_last_name" value="<%= last_name %>">
	</div>
	<div>
		<label for="edit_email_address">Email Address: </label>
		<input type="text" id="edit_email_address" name="edit_email_address" value="<%= email_address %>">
	</div>
	<div>
		<label for="edit_description">Description: </label>
		<textarea name="description" id="edit_description" cols="30" rows="10"><%= description %></textarea>
	</div>
	<input type="submit" value="Edit Contact">
	<button type="button" class="cancel">Cancel</button>
</form>
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://documentcloud.github.com/underscore/underscore-min.js"></script>
<script src="http://documentcloud.github.com/backbone/backbone-min.js"></script>
<script src="js/main.js"></script>
<script src="js/models.js"></script>
<script src="js/collections.js"></script>
<script src="js/views.js"></script>
<script src="js/router.js"></script>

<script>
	new App.Router;
	Backbone.history.start();

	App.contacts = new App.Collections.Contacts;
	App.contacts.fetch().then(function() {
		new App.Views.App({ collection: App.contacts});
	});
	console.log('hi!');
</script>
</body>
</html>