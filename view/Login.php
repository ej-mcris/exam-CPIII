<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <?php
        echo $res;
        ?>
        <div class="container">
                <form action="" method=”POST”>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username: </label>
                        <input id=”username” name=”username” type=”text” required=”required” />
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password: </label>
                        <input id=”password” name=”password” type=”password” required=”required” />
                    </div>
                    <div class="form-group row">
                        <button type=”submit” name=”submit” class="btn btn-primary"><span>Login</span></button> 
                        <button type=”reset” class="btn btn-secondary"><span>Cancel</span></button>
                        <!-- <button type=”button” name=”reg” class="btn btn-primary"><span>Register</span></button> -->
                    </div>
                </form>
        </div>
    </body>
</html>