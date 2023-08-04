<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html, body {
  align-items: center;
  background: #f2f4f8;
  background-image: url('24.jpg');
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  border: 0;
  display: flex;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 16px;
  height: 100%;
  justify-content: center;
  margin: 0;
  padding: 0;
  color: #62aab7;
  
}
.container {
    padding: 50px;
  background-color: rgb(0, 0, 0);
  opacity: 0.7;
  position: relative;
  
}

 
hr {
  border: 1px solid #000000;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #455547;
  color: white;
  font-size: medium;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.7;
}
.registerbtn:hover {
  opacity: 2;
}
.inputFields {
  margin: 15px 0;
  font-size: 16px;
  padding: 10px;
  width: 250px;
  border: 1px solid rgba(10, 180, 180, 1);
  border-top: none;
  border-left: none;
  border-right: none;
  background: rgba(20, 20, 20, .2);
  color: white;
  outline: none;
}

</style>
</head>
<body>
<form action="connect.php" method="post">
  
  <div class="container">

<center>  <h1>Employee Registration</h1> </center>
<hr>

<input type="text" name="name" placeholder= "Name" class="inputFields" size="15" required /> 
<br></br>
<input type="number" name="uniqueid" placeholder= "Unique ID" class="inputFields" min="1" max="1000" required /> 
<br></br>
<input type="text" name="qualification" placeholder= "Qualification" class="inputFields" size="15" required /> 
<br></br>
<input type="number" name="experience" placeholder= "Experience" class="inputFields" min="0" max="1000" required /> 
<br>



<label> 
  
<input type="tel" id="phone" name="phone" placeholder="Phone number" class="inputFields" pattern="[0-9]{10}">
<br></br>
 
<input type="email" placeholder="Email" name="email" class="inputFields" required>  
<br>
<br>
<label>Upload CV</label><br>
<input type="file" id="myFile" name="filename" class="inputFields" required>
  
</div>

<label> 
<button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  