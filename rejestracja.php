<?php

    session_start();

    require_once "connect.php";


    mysqli_report(MYSQLI_REPORT_STRICT);
    try
    {
        $connect = new mysqli($host, $db_user, $db_password, $db_name);
        if ($connect->connect_errno != 0)
        {
            throw new Exception(mysqli_connect_errno());
        }
    }
    catch(Exception $e)
    {
        echo "Błąd serwera!!";
        //echo '<br /> Error: '.$e;
        exit();
    }

    $login = $_POST['Login'];
    $password = $_POST['Password']; 
    $password_repeat = $_POST['Password_Repeat'];
    if($password != $password_repeat)
    {
        $_SESSION['blad_reg'] = '<span style="color:red">Hasła nie są identyczne!</span>';
            header('Location: register.php');
        exit();
    }

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    //$password = htmlentities($password, ENT_QUOTES, "UTF-8");



    if( $result = @$connect->query( sprintf("SELECT id FROM dane_logowania WHERE login='%s'",
        mysqli_real_escape_string($connect, $login)) ) 
        && ( !empty($login) && !empty($password) ) )
    {

        $users = $result->num_rows;
        if($users == 0)
        {
            
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);

            $connect->query("INSERT INTO dane_logowania VALUES (NULL, '$login', '$password_hashed', 'brak', '0')");

            $_SESSION['zar_pomyslnie'] = '<span style="color:green">Zarejestrowano pomyślnie<br />
                                            Możesz teraz się zalogować</span>';
            header("Location: log.php");

        }
        else
        {
            $_SESSION['blad_reg'] = '<span style="color:red">Użytownik o podanym loginie istnieje!</span>';
            header('Location: register.php');
        }

    }
    else
    {
        $_SESSION['blad_reg'] = '<span style="color:red">Nie wprowadzono loginu lub hasła!</span>';
        header('Location: register.php');
    }

    $connect->close();

?>