<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/Home.css">
  <title>Register Product</title>
</head>

<body>
  <div class="container-fluid">
    <form action="./db/ClassPoo.php" method="post" class="mb-3 me-3 position-absolute bottom-0 end-0">
      <button type="submit" name="submit_logout" class="btn btn-warning">Logout</button>
    </form>
    <div class="container mt-5 border rounded-3">
      <h1 class="text-dark text-center mt-5">Register a new Phone</h1>
      <form action="./db/ClassPoo.php" class="row g-3 needs-validation justify-content-center align-items-center mx-auto mb-4 mt-2 me-3 ms-3" novalidate>
        <div class="col-md-3">
          <label class="form-label">Model (ID)</label>
          <input type="text" name="id"class="form-control" required>
        </div>
        <div class="col-md-3">
          <label class="form-label">Name</label>
          <input type="text"  name="name" class="form-control" required>
        </div>
        <div class="col-md-3">
          <label class="form-label">Brand</label>
          <input type="text" name="brand" class="form-control" required>
        </div>
        <div class="col-md-3">
          <label class="form-label">Price</label>
          <div class="input-group has-validation">
            <input type="text" name="price"class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Type of Product</label>
          <div class="input-group has-validation">
            <input type="text" name="type_product" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Serial Number</label>
          <div class="input-group has-validation">
            <input type="text" name="serial_number" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Release Date</label>
          <div class="input-group has-validation">
            <input type="text" name="release_date" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Arrive Date to Cnter</label>
          <div class="input-group has-validation">
            <input type="text" name="arrive_date" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Size</label>
          <div class="input-group has-validation">
            <input type="text" name="size" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label text-light">Color</label>
          <div class="input-group has-validation">
            <input type="text" name="color" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Number of Cameras</label>
          <div class="input-group has-validation">
            <input type="text" name="n_cameras" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Storage Capacity</label>
          <div class="input-group has-validation">
            <input type="text" name="storage" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">Refresh Rate (Hz)</label>
          <div class="input-group has-validation">
            <input type="text" name="refresh_rate" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label text-light">Ram Memory</label>
          <div class="input-group has-validation">
            <input type="text" name="ram" class="form-control" value=" Ram" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label text-dark">Android Version</label>
          <div class="input-group has-validation">
            <input type="text" name="adnroid" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-md-3">
          <label class="form-label">CPU</label>
          <div class="input-group has-validation">
            <input type="text" name="cpu" class="form-control" aria-describedby="inputGroupPrepend" required>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-secondary" name="send_data" type="submit">Register product</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>