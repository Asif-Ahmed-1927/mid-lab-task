<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="{{route('home.userlist')}}"> Back</a>

    
			<table>
				<tr>
					<td colspan="2">
						<img src="{{asset('/upload')}}/{{$user['profile_img']}}" width="100px" height="100px"> </td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>{{$user['name']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>Email</td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>{{ $user['country'] }}</td>
				</tr>

				<tr>
					<td>Phone</td>
					<td>{{ $user['phone'] }}</td>
				</tr>
				<tr>
					<td>City</td>
					<td>{{ $user['city'] }}</td>
				</tr>
				<tr>
					<td>Comapny Name</td>
					<td>{{ $user['company_name'] }}</td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>{{ $user['user_type'] }}</td>
				</tr>
				<tr>
					<td>Date Added</td>
					<td>{{ $user['date_added'] }}</td>
				</tr>
				
			</table>
</body>
</html>