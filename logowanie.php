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

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");

    if( $result = @$connect->query(
        sprintf( "SELECT * FROM dane_logowania WHERE login='%s'", 
                    mysqli_real_escape_string($connect, $login) )
    ) )
    {

        $users = $result->num_rows;
        if($users > 0)
        {
            $user = $result->fetch_assoc();
            if( password_verify($password, $user['password']) )
            {
                $_SESSION['logged'] = true;
            
            

                $_SESSION['nazwa_usera'] = $user['login'];
                $_SESSION['id_usera'] = $user['id'];

                unset($_SESSION['blad']);

                $result->free_result();

                header("Location: index.php");
            }
            else
            {
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: log.php');
            }

        }
        else
        {
            $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location: log.php');
        }

    }

    $connect->close();

?>