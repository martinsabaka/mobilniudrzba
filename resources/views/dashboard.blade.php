@extends('layouts.subpageDefault')

@section('title')
	Dashboard
@endsection

@section('content')
		<!-- table style -->
		<style>
			table {
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}

			td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}
		</style>

		<h4>Users waiting for confirmation</h4>
		<table>
		  <tr>
		  	<th>Id</th>
		    <th>Name</th>
		    <th>E-mail</th> 
		    <th>Created at</th>
		    <th>Action</th>
		  </tr>
	      @foreach ($waitingUsers as $user)
	      <tr>
		    <td>{{ $user->id }}</td>
		    <td>{{ $user->name }}</td>
	        <td>{{ $user->email }}</td> 
	        <td>{{ $user->created_at }}</td>
	        <td>
	        	<button class="confirmbtn">Confirm</button>
	        	<button class="removebtn">Remove</button>
	        	<button id="editbtn">Edit</button>
	        </td>
		  </tr>	
		  @endforeach
		</table>
		<br>

		<h4>Confirmed Customers</h4>
		<table>
		  <tr>
		  	<th>Id</th>
		    <th>Name</th>
		    <th>E-mail</th> 
		    <th>Created at</th>
		    <th>Action</th>
		  </tr>
	      @foreach ($customerUsers as $user)
	      <tr>
		    <td>{{ $user->id }}</td>
		    <td>{{ $user->name }}</td>
	        <td>{{ $user->email }}</td> 
	        <td>{{ $user->created_at }}</td>
	        <td>
	        	<button class="removebtn">Remove</button>
		        <button class="removebtn">Edit</button>
		    </td>
		  </tr>	
		  @endforeach
		</table>
		<br>

		<h4>Admins</h4>
		<table>
		  <tr>
		  	<th>Id</th>
		    <th>Name</th>
		    <th>E-mail</th> 
		    <th>Created at</th>
		    <th>Action</th>
		  </tr>
	      @foreach ($adminUsers as $user)
	      <tr>
		    <td>{{ $user->id }}</td>
		    <td>{{ $user->name }}</td>
	        <td>{{ $user->email }}</td> 
	        <td>{{ $user->created_at }}</td>
	        <td>
	        	<button class="removebtn">Remove</button>
		        <button class="removebtn">Edit</button>
		    </td>
		  </tr>	
		  @endforeach
		</table>

		<script>
			$('#editbtn').click(function() {
				var item = $(this).closest("tr").html();

				console.log(item);
			});
		</script>

@endsection
