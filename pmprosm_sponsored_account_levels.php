/*
Define the global array below for your main accounts and sponsored levels.
Array keys should be the main account level.
*/
global $pmprosm_sponsored_account_levels;
$pmprosm_sponsored_account_levels = array(
	//set 5 seats at checkout
	1 => array(
		'main_level_id' => 1, //redundant but useful
		'sponsored_level_id' => array(1,2), //array or single id
		'seats' => 5
	),
	//seats based on field at checkout
	3 => array(
		'main_level_id' => 3, //redundant but useful
		'sponsored_level_id'  => 4,
		'seat_cost' => 250,
		'max_seats' => 10
	)
);