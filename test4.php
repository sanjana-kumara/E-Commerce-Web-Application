<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enable/Disable Input Field</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" disabled>
    </div>
    <button type="button" class="btn btn-primary" onclick="enableInput()">Enable Input</button>
    <button type="button" class="btn btn-danger" onclick="disableInput()">Disable Input</button>
  </form>
</div>

<script>
  function enableInput() {
    document.getElementById("exampleInputEmail1").disabled = false;
  }

  function disableInput() {
    document.getElementById("exampleInputEmail1").disabled = true;
  }
</script>

</body>
</html>
