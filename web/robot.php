<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="fr"
    lang="fr"
    dir="ltr">
<head>
<link rel="icon" href="./favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
    <body>
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
	    (1, 1, '".$o[2][$i]."', '".str_replace('"', '', $o[1][$i])."')<br>
";
    }
    
   echo $req;
   
   ?>
    </body>