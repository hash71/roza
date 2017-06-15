<?php

	//session_start();
	require_once('../../../wp-load.php');	
	require_once('functions.php');
	//if('http://'.$_SERVER['SERVER_NAME']==get_bloginfo('url'))
	{
		if($_POST['cmd']=='company-profile')
		{
			company_profile();
			die();
		}
		else if($_POST['cmd']=='board-of-director')
		{
			board_of_director();
			die();
		}
		else if($_POST['cmd']=='mission-and-vision')
		{
			mission_and_vision();
			die();
		}
		else if($_POST['cmd']=='chairmans-message')
		{
			chairmans_message();
			die();
		}
		else if($_POST['cmd']=='idlc')
		{
			idlc();
			die();
		}
		else if($_POST['cmd']=='dbh')
		{
			dbh();
			die();
		}
		else if($_POST['cmd']=='residential')
		{
			residential();
			die();
		}
		else if($_POST['cmd']=='commercial')
		{
			commercial();
			die();
		}
		else if($_POST['cmd']=='career-opportunity')
		{
			career_opportunity();
			die();
		}
		else if($_POST['cmd']=='available-jobs')
		{
			available_jobs();
			die();
		}
		else if($_POST['cmd']=='contact')
		{
			contact();
			die();
		}
		else if($_POST['cmd']=='site-map')
		{
			site_map();
			die();
		}
		else if($_POST['cmd']=='legal-terms')
		{
			legal_terms();
			die();
		}
		else if($_POST['cmd']=='event')
		{
			event();
			die();
		}
		
		
		
	}
	die();

?>