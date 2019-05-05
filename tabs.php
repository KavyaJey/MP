<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
 
<div id="studentsTabs">
  <ul>
    <li><a href="#studentsTabs-1">Division #1</a></li>
    <li><a href="#studentsTabs-2">Division #2</a></li>
    <li><a href="#studentsTabs-3">Division #3</a></li>
    <li><a href="#studentsTabs-4">Division #4</a></li>
  </ul>
  <div id="studentsTabs-1">
    <p></p>
  </div>
  <div id="studentsTabs-2">
    <p></p>
  </div>
  <div id="studentsTabs-3">
    <p></p>
  </div>
  <div id="studentsTabs-4">
    <p></p>
  </div>
</div>

<div id="monitorsTabs">
  <ul>
    <li><a href="#monitorsTabs-1">Division #1</a></li>
    <li><a href="#monitorsTabs-2">Division #2</a></li>
    <li><a href="#monitorsTabs-3">Division #3</a></li>
    <li><a href="#monitorsTabs-4">Division #4</a></li>
  </ul>
  <div id="monitorsTabs-1">
    <p></p>
  </div>
  <div id="monitorsTabs-2">
    <p></p>
  </div>
  <div id="monitorsTabs-3">
    <p></p>
  </div>
  <div id="monitorsTabs-4">
    <p></p>
  </div>
</div>
</body>
</html>