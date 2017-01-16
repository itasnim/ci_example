<?php
Class Test_model extends CI_model{

public function getNames(){
	$names=array(
		array("fname"=>'Jon', "lname"=>'Jones'),
		array("fname"=>'Lisa', "lname"=>'Simpson'),
		array("fname"=>'Ann', "lname"=>'Mayer')
		);
	return $names;
}

}