<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <p id="code">code will appear here</p>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="BarcodeScanner.js"></script>
  <script src="app.js"></script>
  <script>
    var resultElement = document.getElementById('code')
    setupLiveReader(resultElement)
  </script>
</body>

</html>