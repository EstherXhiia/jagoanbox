<?php

    session_start();
    // include_once 'assets/conf/dbconnect.php';
    // require_once 'Google/GoogleAuthenticator.php';
    // require_once('umild.php');
    // $agricoin = new Coinrpc('rikimn','mnrpc','127.0.0.1','21213');




    if(!isset($_SESSION['user_id']))
    {
    	header("Location: login.php");
    }


    include('header.php');

		if(empty($_GET['mod'])) {
			include_once "mod/home.php";
		}
		else
		{
			$file = $_GET["cmd"];
			$includeFile = "mod/".$_GET['mod']. "/" . $file.'.php';
			if (file_exists($includeFile))
				{
					include_once($includeFile);
				}
			else
				{ echo("Script Not Found");	}
		}

    include('footer.php');
?>
