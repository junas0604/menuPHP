<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Menu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<script>
                function validateMenuAndDescription() {
                const menuElement = document.getElementById("menu_name");
                const descriptionElement = document.getElementById("menu_desc");

                const menuLength = menuElement.value.length;
                const descriptionLength = descriptionElement.value.length;

                if (menuLength < 100 || descriptionLength < 1000) {
                    alert("The menu name and menu description must be less than 1000 characters.");
                    return false;
                }
                return true;
                }
                </script>
<body>
  <style>
    body {
      font-family: sans-serif;
    }

    h1 {
      font-size: 2rem;
      font-weight: bold;
    }

    form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 10px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary {
      margin-left: 600px;
    }

    .error-message {
      color: red;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Wako Enterprise</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Create Menu</h1>

        <form action="add_menu.php" method="post" onsubmit="return validateForm()">
          <div class="form-group">
            <label for="menu_name">Menu Name</label>
            <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter menu name" maxlength="100">
          
            <span class="error-message" id="menu_name_error" ></span>
          </div>
          

          <div class="form-group">
            <label for="menu_desc">Menu Description</label>
            <textarea class="form-control" id="menu_desc" name="menu_desc" placeholder="Enter menu description" maxlength="1000"></textarea>
            <span class="error-message" id="menu_desc_error"></span>
          </div>

          <button type="submit" class="btn btn-primary" style="marginl" onclick="return validateMenuAndDescription()">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.5/dist/sweetalert2.all.min.js"></script>
</body>
</html>