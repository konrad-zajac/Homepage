<?php

class foodstr
{
	public $login;
	public $password;
	public $db_user;
	public $db_name;
	public $db_pass;
	public $db_host;

	function set_login_and_password($login,$password)
	{
		$this -> login = $login;
		$this -> password = $password;
	}
	function set_db_credentials($db_user,  $db_name,$db_pass, $db_host)
	{

		$this -> db_user = $db_user;
		$this -> db_name = $db_name;
		$this -> db_pass = $db_pass;
		$this -> db_host = $db_host;
	}

	function db_connect()
	{

		$db_user = $this -> db_user;
		$db_pass = $this -> db_pass;
		$db_name = $this -> db_name;
		$db_host = $this -> db_host;
		$dbh = new PDO('mysql:$host='.$db_host.';dbname='.$db_name.'', $db_user, $db_pass);

//		$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

		return $dbh;
	}
	function logout()
	{
//		unset($_SESSION["flaga_zalogowania"]);
//		unset($_SESSION["sesyjne_id"]);
//		unset($_SESSION["sesyjny_login"]);
//		unset($_SESSION["flaga_admina"]);
//		unset($_SESSION["waga_wystroj"]);
//		unset($_SESSION["waga_muzyka"]);
//		unset($_SESSION["waga_jedzenia"]);
//		unset($_SESSION["waga_roznorodnosc"]);
//		unset($_SESSION["waga_cena"]);
		unset($_POST);
		unset($_SESSION);

	}

	function db_query_login()
	{
		$u_login = $this -> login;
		$u_password = $this -> password;
		$PDO = $this ->db_connect();
		$sth = $dbh->prepare('SELECT name, colour, calories
    FROM fruit
    WHERE calories < ? AND colour = ?');
//		$esc_login = $mysqli->real_escape_string($u_login);
//		$esc_pass = $mysqli->real_escape_string($u_password);
		$result = $mysqli->query("SELECT * FROM USERS WHERE LOGIN = '$esc_login' AND HASLO = '$esc_pass'");

		if ($result -> num_rows !== 0)
		{
			$_SESSION["sesyjny_login"] = $esc_login;
			$_SESSION["flaga_zalogowania"] = 1;
			if ($esc_login === 'ADMIN')
			{
				$_SESSION["flaga_admina"] = 1;
			}
		}
		else
		{
			printf("NIE\n");

		}


	}
	function db_query_brawse_not_logged()
	{
		$mysqli = $this ->db_connect();
		$result = $mysqli->query("
		SELECT PUNKTY.NAZWA,
    	   miasto,
            ulica,
          nr_domu,
          (AVG ( OCENA_WYSTROJ)),
          (AVG ( OCENA_MUZYKA)),
          (AVG ( OCENA_SMAK)),
          (AVG (OCENA_ROZNORODNOSC)),
          (AVG (OCENA_CENA)),
          (
			  (AVG ( OCENA_WYSTROJ) )+
			  (AVG ( OCENA_MUZYKA))+
			  (AVG ( OCENA_SMAK)    )+
			  (AVG (OCENA_ROZNORODNOSC))+
			  (AVG (OCENA_CENA))
           )
          /
          (5)
            FROM Oceny
            INNER JOIN PUNKTY
            ON Oceny.ID_PG = PUNKTY.ID
            GROUP BY ID_PG;);");
		return $result;
	}

}


