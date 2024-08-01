<?php
$json  = file_get_contents("./data.json");
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-white">
  <div class="container">
    <div class="mt-4 mb-5 d-flex justify-content-between align-items-center">
      <h1 class="text-white">Get your Pokemon!</h1>
      <div>

           <div>
             
          <i class="fa fa-star" aria-hidden="true" style="color:gold; margin-right:3px;"></i>
          <i class="fa fa-heart" aria-hidden="true" style="color:red; margin-right:10px;"></i>
          <i class="fa fa-reply" aria-hidden="true" style="color:red; margin-right:5px"></i>
          </div>

        <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button>
      </div>
    </div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Species</th>
          <th scope="col">Description</th>
          <th scope="col">Weight</th>
          <th scope="col">Height</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $element): ?>
        <tr>
          <td><img src="<?= $element["image"]["thumbnail"] ?>" alt="Image"></td>
          <td><?= $element["name"]["english"] ?></td>
          <td><?= $element["species"] ?></td>
          <td><?= $element["description"] ?></td>
          <td><?= $element["profile"]["weight"] ?></td>
          <td><?= $element["profile"]["height"] ?></td>
          <td><button type="button" class="btn btn-success">Collect</button></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- DNT MAKE ANY CHANGES ON THE CODE BELOW -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>
