<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Products</h1>
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <div class="col-sm-4">
              <label for="name">Name:</label>
                <input name="name" class="form-control" id="name" type="text" required/>
            </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <label for="price">Price:</label>
            <input name="price" class="form-control" id="price" type="text" required/>
          </div>
        </div>
        <div class="form-group">
      <div class="col-sm-4">
        <input class="btn btn-primary form-control" value="Submit" type="submit"/>
      </div>
        </div>
    </form>
    <table id="" class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $listedProduct): ?>
            <tr>
                <th><?php echo $listedProduct['id']; ?></th>
                <th><?php echo $listedProduct['name']; ?></th>
                <th><?php echo $listedProduct['description']; ?></th>
                <th><?php echo $listedProduct['price']; ?></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
