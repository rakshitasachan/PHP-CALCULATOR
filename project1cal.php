<html>
    <head><title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet">
</head>

<body >
  <form method="POST">
        
        <div class="card" style="width: 48rem; height:13rem; margin-left:390px; margin-top:150px">

  <div class="card-body">
    <h3 class="card-title">CALCULATOR</h3>
    <input type="text" class="card-text" placeholder="enter number" name="num1">
    <input type="text" class="card-text" placeholder="enter number" name="num2">

  <select class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" name="operation" >
    <option value="add"> ADD</OPTION>
    <option value="sub"> SUB</OPTION>
    <option value="mult"> MULT</OPTION>
    <option value="div"> DIV</OPTION>
</select>
<input type="submit" name="submit" value="submit" class="submit">
</div>
</form>
<div >
  <p style="font-size:25px; font-family:Arial, Helvetica, sans-serif; color:white">
    <?php

    if(isset($_POST["submit"])){
$num1=$_POST['num1'];
$num2=$_POST['num2'];

$operation=$_POST["operation"];
switch($operation)
{ 
  case"add": $sum=$num1 + $num2;
  echo"addition of two no. is $sum";
  break;
  case"sub": $sub=$num1 -$num2;
  echo"sub of two no. is $sub";
  break;
  case"mult": $mult=$num1 *$num2;
  echo"mult of two no. is $mult";
  break;
  case"div": $div=$num1 / $num2;
  echo"div of two no. is $div";
  break;
  default: echo "sorry, no. is not found";
}

  }

?>

  </p> 
  </div>
</div>
