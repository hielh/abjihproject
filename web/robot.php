<?php 

$url = "http://www.tvquran.com/Abdulbasit.xml";

$c = file_get_contents($url);
$playOwnerName = "";

    preg_match_all('#<song path="(.*?) title="[\(0-9\) a-zA-Z\'-]*(.*?)[ "\/]*>#i', $c, $o);
    

    $nbr = count($o);
    
    
    $req = "";
    for($i=0; $i <= $nbr; $i++){
	$req .= "
	    insert into track(user_id ,	play_list_id ,	name ,	url)
	    values
	    (1, 1, '".$o[2][$i]."', '".str_replace('"', '', $o[1][$i])."')
";
    }
    
   echo $req;