<html>
<head>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  
.center {
    margin-left: auto;
    margin-right: auto;
    width: 100%%;
    
}
.middle {
    background-color: lightgrey;
    width: 300px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
body {
    background: url("http://3.bp.blogspot.com/-qS_jLfj4i34/T6HqDVqbWjI/AAAAAAAAAHs/tMRsGDfhP3A/s1600/car.gif");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
</head>
<body background=http://3.bp.blogspot.com/-qS_jLfj4i34/T6HqDVqbWjI/AAAAAAAAAHs/tMRsGDfhP3A/s1600/car.gif"">
<div class="middle">
<button type="button" class="btn btn-primary" button onclick="window.location='aval.html'">Home!</button>
<div class="center">
<center>
<form action="data.php" method="post">
<strong><h3><font color="blue">Fill out to find the nearest car spa!! </font></h3></strong>
     <p> 
        <label>Model</label>
        <input name="Model" required="required" placeholder="Model" type="text">
    </p>
    <p> 
        <label>Service:</label>
        <input name="last_name" required="required" placeholder="service" type="text">
    </p>
    
    <p> 
        <label> Area</label>
        <input name="Area" required="required" placeholder="Area" type="text"> 
    </p>
    <p> 
        <label></label>
        <input name="Date" required="required" placeholder="Date" type="Date">
    </p>
    <p> 
        <input value="Submit" type="submit"> 
    </p>
</form>
<div class="container">
        <h2>You can also pre book here!!! </h2>
  <button type="button" class="btn btn-primary" button onclick="window.location='aval.html'">Pre book!</button>
<center>
</div>
</div>
</body>
</html>
