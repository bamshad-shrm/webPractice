<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$outp ='
{

	"admins":[
		{"firstName":"Bamshad", "lastName":"Shirmohamadi"}
	],

	"customers":[
		{"firstName":"John", "lastName":"Doe"},
		{"firstName":"Anna", "lastName":"Smith"},
		{"firstName":"Peter", "lastName":"Jones"}
	]

}

';


echo($outp);
?>
