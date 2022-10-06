<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <style>
        fieldset{
            width: 15%;
        }
        h5{
            color: red;
        }
        p{
            font-size:12px;
        }    
    </style>
        
</head>
<body>
    <center>
        <fieldset>
            <legend class="mt-5">Login</legend>
                

            <form class="mt-5" action="login.php" method="POST">
                <table border="0">
                    <tr>
                        <td>
                            <label>Username : </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password : </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center">
                            <input type="submit" value="Login" class="btn btn-primary mt-3">
                        </td>
                    </tr>
                    
                </table>
            </form>
        </fieldset>
    </center>
   
</body>
</html>

