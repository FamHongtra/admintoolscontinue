<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->

  <!-- Styles -->

</head>
<body>
  <div class="flex-center position-ref full-height">

    <div class="content" align="center">
      <div>
      <h1>  Hello World!</h1> <br>

      </div><br>

      <div class="links">

        <input type="text" id="text" style="height:30px; width:500px"> &nbsp
        <button onclick="myFunction()" style="height:30px">Try it</button>


      </div>
    </div>
  </div>

  <script>
  function myFunction() {
    var text = document.getElementById('text').value ;
    alert(text);
  }
  </script>
</body>
</html>
