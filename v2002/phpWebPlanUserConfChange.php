<?php
        require ("phpWebPlanConfig.php");
        require ("phpWebPlanFunction.php");
        require ("lang/$gLanguage.$gScriptExt");

        // phpWebPlanUserConfChange.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>

	// Config
        $EditPlan = "$gProfilesDirectory/$DefaultUserPlan.$ChangeUser.$gScriptExt";

if ($gUseDB == "0")
{
	if ((file_exists("$EditPlan") == TRUE) && ($gEditActive == 1))
		{	
			require_once ("$EditPlan");

	                // if configchange(1), User(true), password(true) and EditActive(yes) then change user data.
			if (($configchange == "1") && ($ChangeUser == $ProfileUsername) && ($EditPassword == "$ProfileEditPassword") && ($ProfileEditActive == "1"))
				{
					                print "$gHeader";
					                print "$gBody<BR><BR>";
					                print "$gSTYLE";

				                if((!empty($ProfileActive1)) && ($ProfileActive != $ProfileActive1))
			                        {
		                                changefile("$EditPlan","\$ProfileActive",$ProfileActive1);
		                                print "<BR>$gUserConfActive $gConfChangedMSG $ProfileActive1.";
				                    }

				                if((!empty($gProfileFullName1)) && ($ProfileFullName != $gProfileFullName1))
			                        {
		                                changefile("$EditPlan","\$ProfileFullName",$ProfileFullName1);
		                                print "<BR>$gUserConfFullname $gConfChangedMSG $ProfileFullName1.";
				                    }

				                if((!empty($gProfileEmail1)) && ($ProfileEmail != $gProfileEmail1))
			                        {
		                                changefile("$EditPlan","\$ProfileEmail",$ProfileEmail1);
		                                print "<BR>$gUserConfEmail $gConfChangedMSG $ProfileEmail1.";
				                    }

				                if((!empty($gProfileHomepage1)) && ($ProfileHomepage != $gProfileHomepage1))
			                        {
		                                changefile("$EditPlan","\$ProfileHomepage",$ProfileHomepage1);
		                                print "<BR>$gUserConfHome $gConfChangedMSG $ProfileHomepage1.";
				                    }

				                if((!empty($ProfileHobbies1)) && ($ProfileHobbies != $gProfileHobbies1))
			                        {
		                                changefile("$EditPlan","\$ProfileHobbies",$ProfileHobbies1);
		                                print "<BR>$gUserConfHobbies $gConfChangedMSG $ProfileHobbies1.";
				                    }

				                if($ProfileImageLocal != $gImageLocal)
			                        {
		                                changefile("$EditPlan","\$ProfileImageLocal",$gImageLocal);
// do not print, global variable		print "<BR>$gUserConfImage $gConfChangedMSG $ProfileImageLocal1.";
				                    }

				                if((!empty($ProfileImagePath)) && ($ProfileImageURL != $ProfileImageURL1))
			                        {
		                                changefile("$EditPlan","\$ProfileImageURL",$ProfileImageURL1);
		                                print "<BR>$gUserConfImage $gConfChangedMSG $ProfileImageURL1.";
				                    }

				                if((!empty($gProfileImageURL)) && ($ProfileImagePath != $ProfileImagePath1))
			                        {
		                                changefile("$EditPlan","\$ProfileImagePath",$ProfileImagePath1);
		                                print "<BR>$gUserConfImage $gConfChangedMSG $ProfileImagePath1.";
				                    }

				                if((!empty($gProfileEditPassword)) && ($ProfileEditPassword != $gProfileEditPassword1))
			                        {
		                                changefile("$EditPlan","\$ProfileEditPassword",$ProfileEditPassword1);
		                                print "<BR>$gUserConfPassword $gConfChangedMSG $ProfileEditPassword1.";
				                    }

				                else
			                        {
		                                	print "<BR>unchanged";
				                }

					                print "<BR><BR><A HREF=\"$gScriptMain\">$mTextBTM</A><BR>";
					                print "$gFooter";
				}
		}
}
	else 
		{
			print "";
		}
?>
