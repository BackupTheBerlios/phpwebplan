<?php
        require ("phpWebPlanConfig.php");
        require ("phpWebPlanFunction.php");
        require ("lang/$gLanguage.$gScriptExt");

        // phpWebPlanUserSignup.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>

// strip whitespaces from username and password

//if ((!empty($NewUser)) && (!empty($uPassword)))
//	{
//		$NewUser = strtr($NewUser, " ", "_");
//		$uPassword = strtr($uPassword, " ", "_");
//	}

	// Config
        $planfile = "$gProfilesDirectory/$DefaultUserPlan.$NewUser.$gScriptExt";
        $EditPlan = "$gProfilesDirectory/$DefaultUserPlan.$EditUser.$gScriptExt";

if ($add == 1 && (!empty($NewUser)) && $gUseDB == 0)
	{

          if (file_exists("$planfile") == TRUE)
		{
		 print "<DIV ALIGN=\"CENTER\">$uTextAlready</DIV>";	
		}
	 else
		{
		// create user profile

		$today = date("Y-M-d");					// get current date
		$uBirthday = "$uBirthYear-$uBirthMonth-$uBirthDay";	// format birthday

		ConvertGSC ($uFullName);
		ConvertGSC ($uCity);
		ConvertGSC ($uState);
		ConvertGSC ($uHobbies);

		// put a "0" into this empty variables
		if (empty($uImageURL))
			{
			 $uImageURL = "0";
			}

		if (empty($uImagePath))
			{
			 $uImagePath = "0";
			}

		$fp = fopen("$planfile","w");

                fputs ($fp, "<?php\r\n");

		WriteProfile ($fp,Creation,$today);
		WriteProfile ($fp,Username,$NewUser);
		WriteProfile ($fp,Active,$gRegisterActive);
		WriteProfile ($fp,FullName,$uFullName);
		WriteProfile ($fp,Birth,$uBirthday);
		WriteProfile ($fp,Email,$uEmail);
		WriteProfile ($fp,Homepage,$uHomepage);
		WriteProfile ($fp,Hobbies,$uHobbies);
		WriteProfile ($fp,City,$uCity);
		WriteProfile ($fp,State,$uState);
		WriteProfile ($fp,Country,$uCountry);
		WriteProfile ($fp,ImageLocal,$gImageLocal);
		WriteProfile ($fp,ImageURL,$uImageURL);
		WriteProfile ($fp,ImagePath,$uImagePath);
		WriteProfile ($fp,EditActive,$gEditActive);
		WriteProfile ($fp,EditPassword,$uPassword);

                fputs ($fp, "?>\r\n");
		fclose ($fp);
		mail("$uEmail","$uRegSubject","$uRegMessage","From: $uRegFrom \nContent-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: 8bit");
                print "<DIV ALIGN=\"CENTER\">$uTextCreate</DIV>";
		}
	}

elseif ($add == 1 && (!empty($NewUser)) && $gUseDB == 1)
	{
	$today = date("Y-M-d");
	$sql = 'INSERT INTO Profile (Creation, Active, EditActive, EditPassword, UserName, FullName, Birth, Email, Homepage, Hobbies, City, State, Country, ImageLocal, ImageUrl, ImagePath) VALUES (\'$today\', \'$gRegisterActive\', \'$gEditActive\', \'$uPassword\', \'$NewUser\', \'$uFullName\', \'$uBirthday\', \'$uEmail\', \'$uHomepage\', \'$uHobbies\', \'$uCity\', \'$uState\', \'$uCountry\', \'$gImageLocal\', \'$uImageURL\', \'$uImagePath\');'; 

	$link = mysql_connect("$gDBHost", "$gDBUserName", "$gDBUserPass") or die("$dbTextConnect");
    	mysql_select_db("$gDatabase") or die("$dbTextSelect");

	$result = mysql_query($sql) or die("Anfrage fehlgeschlagen");

	mysql_free_result($result);
	mysql_close($link);

	}
else
	{
	// FORM_DATA
        print "$gHeader";
        print "$gSTYLE";
        print "$gBody<BR><BR>";
        require ("$gUserSignup");        
        print "$gCopyFooter";
        print "$gFooter";
	}
?>
