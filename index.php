<html>
<body>

<p>Click the button to enter your favorite color.</p>
<body style='background-color:white'>
<button onclick="myFunction()">Change Color</button>

<p id="demo"></p>

<script>
function myFunction() {
  var color = prompt("Please enter your favorite color");
  if (color != null) {
    document.getElementById("demo").innerHTML =
    "Your favorite color is: " + color;
  }
}

</script>

</body>
</html>
