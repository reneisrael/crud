<?php

function session_checker(){

	if(!isset($_SESSION['usuario_id'])){

		header ("Location:form_login.php");

		exit(); 
	}
}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}
function time_difference($future_date, $actual_date){
	$end_time = $future_date - $actual_date;
    $days= (date("j",$endtime)-1);
    $months =(date("n",$endtime)-1);
    $years =(date("Y",$endtime)-1970);
    $hours =date("G",$endtime);
    $mins =date("i",$endtime);
    $secs =date("s",$endtime);
    $diff="'day': ".$days.",'month': ".$months.",'year': ".$years.",'hour': ".$hours.",'min': ".$mins.",'sec': ".$secs;
    return $diff;
} 
//$actual_date =  time();
//$difference = time_difference($future_date, $actual_date);
//echo $difference;

//sample output
//'day': 2,'month': 1,'year': 0,'hour': 2,'min': 05,'sec': 41

?>
