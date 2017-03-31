<?php 
namespace App\Utility;
class Helper
{
	function printr($ar)
	{
		echo "<pre>";
		print_r($ar);
		echo "</pre>";
	}
	function GetMenus()
	{
		$menus=array(    
			"Employees"=>array("index"=>"","add"=>"","controller"=>""),
			"InsuranceInfos"=>array("index"=>"","add"=>"","controller"=>""),
			"Projects"=>array("index"=>"","add"=>"","controller"=>""),
			"Designations"=>array("index"=>"","add"=>"","controller"=>""),
			"Locations"=>array("index"=>"","add"=>"","controller"=>""),
			"Contracts"=>array("index"=>"","add"=>"","controller"=>""),
			"Payrolls"=>array("index"=>"","add"=>"","controller"=>""),
			"Projects"=>array("index"=>"","add"=>"","controller"=>""),
			"Vacations"=>array("index"=>"","add"=>"","controller"=>""),
			"UserRoles"=>array("index"=>"","add"=>"","controller"=>""),
			"Users"=>array("index"=>"","add"=>"","controller"=>""),
			"Passports"=>array("index"=>"","add"=>"","controller"=>""),
			""=>array("index"=>"","add"=>"","controller"=>"")
			
		);
		return $menus;
	}
}
?>