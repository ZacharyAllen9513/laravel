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
  <div class="row">
    <div style="margin:auto" class="col-lg-16">
      <h2>Pizza Topping DB</h2>
      <!-- form that adds the topping -->
      <form method="post" action="{{route('addTopping')}}">
        @csrf
        <input type="text" name="topping" placeholder="Topping">
        <input type="text" name="category" placeholder="Category">
        <button type="submit">Add Topping</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>


