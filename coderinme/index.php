<html>
<head>
<title> Simple project</title>
</head>

<body>
<h1>Project </h1 >
<h2>HTML and SQL </h2> 
<p> Hi this is Arun Sundar from Madurai </p>

<img src="prp.png"height="300px" width="300px">
<br></br>
<a href="https://github.com/ArunSundar-471">Github</a>




<form action="#" method="post">
    <input type="text" name="val">
    <input type="number" name="val1">
    <input type="date" name="val2">
    <br> </br>
    <input type="checkbox" name="val3">not physically abled
    <br></br>
    <input type="radio" name="val">
    <select name=" ">
        <option value="male">Male</option>
        <option value="female">Female </option>
        <option value="others">Others </option>


     </select>
    <input type="submit">
</form>
</body>

<?php
if(!empty($_GET['id']))
 echo $_GET['id'];
else
 echo 'get value not present';
if(!empty($_POST['val1']))
echo "<br/>".$_POST['val1'];
else
echo "<br/>write value in 2 nd field";
?>
</html>