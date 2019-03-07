<?php
header("Access-Control-Allow-Origin: *");

$data = array(

'Utorak - 16.04.2014'=>array(

		0=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
		1=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
		2=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
	),
'Srijeda- 16.04.2014'=>array(

		0=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
		1=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
		2=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
	),
'Četvrtak - 16.04.2014'=>array(

		0=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
		1=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
		2=>array(
			'time_from' => '10:00',
			'time_to' => '11:00',
			'activity' => 'Sastanak',
			'activity_name' => 'sastanak u bla',
			'activity_detail' => 'detalji o aktivnosti',
		),
	)
);				
echo json_encode($data);
					
?>