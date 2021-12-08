<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How to Insert Multiple Checkbox Values into Database in php</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">

                            <div class="form-group mb-3">
                                <input type="checkbox" name="brands[]" value="Red MI"> Red MI <br>
                                <input type="checkbox" name="brands[]" value="Samsung"> Samsung <br>
                                <input type="checkbox" name="brands[]" value="Nokia"> Nokia <br>
                                <input type="checkbox" name="brands[]" value="Vivo"> Vivo <br>
                                <input type="checkbox" name="brands[]" value="Karbon"> Karbon <br>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_multiple_checkbox" class="btn btn-primary">Save Multiple Checkbox</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>