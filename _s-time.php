 <?php      
 
 
 global $action_time; 
 
 add_shortcode( 'action_time_hours', function () {
        
        $action_time = (FrmProStatisticsController::stats_shortcode(array('id' => '497', 'type' => 'total', 'user_id' => 'current')));
        $action_time_hours = $action_time;
        echo ('<center><div class="time;">Time: '.$action_time_hours.' hours</div></center>');
        //echo ("<center>Time: ".$action_time_hours." hours!</center>");
		//the_content();
$remain = $diff - round($diff);
if ($remain < 1) $remain = 0; 


	$out = $action_time_hours;

	return $out;
} );

        ?>
