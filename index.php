<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <input id="name" type="text">  <br>  
      <input id="email" type="email"><br>
      <button id="btn">click me</button>
         
      <button onclick="OnSelect()">Select</button>
      <h3 id="NewData"></h3>
     <table border="1">
      <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Delete</th>

      <tbody id="select">


      </tbody>

     </table>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>