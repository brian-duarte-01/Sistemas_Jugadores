<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <div class="card1">
            <form action="login.php"  method="post">

             <div class="container">
             <div class="col-md-12">
                    <label for="validationDefaultUsername" class="form-label">Usuario</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" name="usuario" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationDefaultUsername" class="form-label">password</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="password" name="password" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationDefault04" class="form-label">State</label>
                    <select class="form-select" name="rol" id="validationDefault04" required>
                        <option selected disabled value="">Elegir opcion...</option>
                        <option value="1">Usuario</option>
                    </select>
                </div>


                <div class="col-12">
                    <input type="submit" class="btn btn-dark" value="Validar">
                </div>
             </div>


            </form>
        </div>
    </div>

</body>

</html>