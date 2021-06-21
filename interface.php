<?php
require("takeipput.php");
?>
<!DOCTYPE html>
<html>
<html lang="en">

<head>
<meta charset="utf-8">

    <title>Control Page </title>
<style>
body {
  background-image: url("arm1.jpg");
  
  background-repeat: no-repeat;
  background-size: 100% 100%;
  }

h1 {
    background-color: rgb(219, 199, 17);
    color: rgb(8, 29, 97);
  }
  div {
    border: 1px solid rgb(94, 92, 92);
    background-color: rgba(211, 211, 211, 0.438);
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
  }
  h2{
    color: white;
    background-color: darkblue;
    font-size:xx-large;
    font-style: italic;
  }
  .slider.round {
    border-radius: 34px;
  }
</style>
</head>

<h2> control panel </h2>

<div>
<body>
    <form action="takeipput.php" method="POST" >
    <h1>Motor 1</h1>

    
        <input type="range" id="vol" name="vol" min="0" max="180">
  
    <h1>Motor 2</h1>

        <input type="range" id="vol2" name="vol2" min="0" max="180">
   
    <h1>Motor 3</h1>
  
        <input type="range" id="vol3" name="vol3" min="0" max="180">
    
    <h1>Motor 4</h1>
   
        <input type="range" id="vol4" name="vol4" min="0" max="180">
   
    <h1>Motor 5</h1>
  
        <input type="range" id="vol5" name="vol5" min="0" max="180">
 
    <h1>Motor 6</h1>
   
        <input type="range" id="vol6" name="vol6" min="0" max="180">
        <button type="submit" name="submit" class="btn btn-dark">Save </button>
        <button type="submit" name="run" value="5" class="btn btn-dark">run </button>


  
        </form>
    
   


</body>
</div>
</html>

