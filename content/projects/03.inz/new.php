<?php
function alert($text)
{
//	public $autoincrementing_id;
	 $text;
	$this -> text= $text;
}

function db_connect($db_user,$db_name,$db_pass,$db_host)
{
//	$db_user;
// 	$db_name;
//	$db_pass;
//	$db_host;
//
//	$this -> db_user = $db_user;
//	$this -> db_name = $db_name;
//	$this -> db_pass = $db_pass;
//	$this -> db_host = $db_host;
	$db_user = "konrad";
	$db_pass = "pass";
	$db_name = "test";
	$db_host = "localhost";

//	try {
//		$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
//		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//		echo "Connected successfully";
//		return $conn;
//	}
//	catch(PDOException $e)
//	{
//		echo "Connection failed: " . $e->getMessage();
//	}
	try {
		$dbh = new PDO('mysql:host=127.0.0.1;dbname=test', $db_user, $db_pass);
		foreach($dbh->query('SELECT * from FOO') as $row) {
			print_r($row);
		}
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}

}



class foodstr
{
	function list_points_without_weights()
	{
		//TO DO
	}
	function list_points_with_weights()
	{
		//TO DO
	}


}
class point
{
	public $name_of_the_point;
	public $estate_number_of_the_point;
	public $city_of_the_point;
	public $opening_hours_of_the_point;
	public $telephone_number_of_the_point;

	public $rating_of_taste;
	public $rating_of_design;
	public $rating_of_music;
	public $rating_of_variety;
	public $rating_of_price;

}



class unloged_user
{
	function create_alert($text)
	{
		//TO DO
	}
	protected function unlogged_browsing()
	{
		//TO DO
	}
	protected function register($login,$password,$rating_of_taste,$rating_of_design,$rating_of_music,$rating_of_variety,$rating_of_price)
	{
		//TO DO
	}

}
class logged_user extends unloged_user
{
	public $login;
	public $password;

	public $rating_of_taste;
	public $rating_of_design;
	public $rating_of_music;
	public $rating_of_variety;
	public $rating_of_price;

	function rate_point($name_of_the_point,$rating_of_taste,$rating_of_design,$rating_of_music,$rating_of_variety,$rating_of_price)
	{
		//TO DO
	}

	function logged_browsing($rating_of_taste,$rating_of_design,$rating_of_music,$rating_of_variety,$rating_of_price)
	{
		//TO DO
	}

}
class admin_user extends logged_user
{
	function add_point($name_of_the_point, $estate_number_of_the_point, $city_of_the_point, $opening_hours_of_the_point, $telephone_number_of_the_point)
	{
		//TO DO
	}
	function delete_point($name_of_the_point)
	{
		//TO DO
	}

}
