<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pizza Topping DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- navbar to navigate the page -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="/home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/viewToppings">View Toppings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addToppings">Add Toppings</a>
      </li>  
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <h2>Toppings</h2>      
  <!-- table to hold all of the toppins -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Topping</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
      <!-- loop through and display toppings that are passed in from 
           either the viewTopping function in ToppingController or web.php -->
      @foreach($toppings as $topping)
      <tr>
        <td>{{$topping->topping}}</td>
        <td>{{$topping->category}}</td>
        <td>
        <!-- link to update the topping -->
        <a class="nav-link" href="/viewTopping/{{$topping->id}}">Update Toppings</a>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- use some pagnation -->
  {{$toppings->links()}}
</div>

</body>
</html>

<script>
  function showUserInput(id) {
    $('#updateBox').show();
    $('#toppingId').val(id);
  }
</script>