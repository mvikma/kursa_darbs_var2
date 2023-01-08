<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BalticBerry</title>
    <!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    @include('pages.header')
    <main class="py-4">
      @yield('content')
  </main>
    @include('pages.footer')
</body>
<style>
  .navbar-default{
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    color: black;
    font-weight: bold;
    background-color: rgb(220, 220, 220);
  } 
  
  body{
    margin-top: 50px;
    margin-bottom: 20px;
}
  .team_container{
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-left: 40px;
  }
  .row{
    display: block;
    text-align: center;
    align-items: center;
    justify-content: center;
  }
  .contact_us{
    margin-left: 40px;
  }
  div.container2,div.container4{
    background-color:orange;
  }
  div.container3,div.container1{
    background-color:green;
  }
  
  .index_button{
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 2rem;
    text-align: center;
    color: #fff;
    border-radius: 10px;
    background-color: rgb(0, 90, 220);
  }
  
  div.index-section p,h1{
    font-weight: bold; 
  }
  div.contact_us{
    background-color: #fff;
  }
  div.details-container h2,h3{
    font-weight: bold;
  }
  .blog-posts img{
    border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
  }
</style>
</html>