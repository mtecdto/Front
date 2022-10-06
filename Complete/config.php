<?php
    //name of the server
    $server = "172.16.0.18";

    //username of server (default -> root)
    $user = "dtoadm";

    //password of server (default -> empty)
    $pass = "dtoAdmin2022lab";

    //name of the database (it will change according to your database name)
    $db = "dto_keys";

    //make connection

    $con = mysqli_connect($server, $user, $pass , $db);

    //if any error in connection

    if(!$con){
        die("Can't make a connection with Databes".mysqli_connect_error());
    }


?>