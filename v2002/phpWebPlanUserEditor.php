<?php
        require ("phpWebPlanConfig.php");
        require ("phpWebPlanFunction.php");
        require ("lang/$gLanguage.$gScriptExt");

        // phpWebPlanUserEditor.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>

	// Config
        $EditPlan = "$gProfilesDirectory/$DefaultUserPlan.$EditUser.$gScriptExt";

// User CP login procedure
if ((!empty($EditUser)) && (!empty($EditPassword)))
        {
           // if file "$EditPlan" exists go ahead and check input strings
           if (file_exists("$EditPlan") == TRUE)
                {
			// user can view or edit their profile?
			if ($ProfileEditActive == 0)
				{
				  $noedit = " DISABLED";
				}
			elseif ($ProfileEditActive == 1)
				{
				  $noedit = " ENABLED";	
				}			

                        require_once ("$EditPlan");

                        // if User(true), password(true) and EditActive(yes) then print user edit form.
                        if (($EditUser == $ProfileUsername) && ($EditPassword == "$ProfileEditPassword"))
//                      if (($EditUser == $ProfileUsername) && ($EditPassword == "$ProfileEditPassword") && ($ProfileEditActive == "1"))
                                {
                                    print "$gSTYLE";
					                print "<form method=\"post\" action=\"$gScriptUserConfChange?configchange=1&ChangeUser=$ProfileUsername&EditPassword=$ProfileEditPassword&ProfileEditActive=$ProfileEditActive\">\n";
					                print "<table align=\"center\" border=\"0\" cellPadding=\"0\" cellSpacing=\"1\"><TR bgcolor=\"$gConfBorderInterface\"><TD>\n";
					                print "<table border=\"0\" cellPadding=\"0\" cellSpacing=\"1\">\n";
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td height=\"20\"colspan=\"2\" CLASS=\"logbox\"><b>&nbsp;$gUserConfTitle&nbsp;-&nbsp;<A CLASS=\"logbox\" HREF=\"$gScriptMain\">$mTextBTM</A></b></td>\n</tr>\n";
// ProfileActive
print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfActive&nbsp;</td>\n <td><select size=\"1\" name=\"ProfileActive1\"><option value=\"1\""; 

if ($ProfileActive == 1) {print " selected";} 
print " ".$noedit.">Yes</option><option value=\"0\""; 

if ($ProfileActive == 0) { print " selected";} 
print " ".$noedit.">No</option></select></td>\n</tr>";

// ProfileEditActive
print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfEditActive&nbsp;</td>\n <td><select size=\"1\" name=\"ProfileEditActive1\"><option value=\"1\""; 
if ($ProfileEditActive == 1) 
	{ 
		print " selected>Yes</option><option value=\"0\"";
	} 

elseif ($ProfileEditActive == 0) 
	{ 
		print " selected>No</option></select></td>\n</tr>";
	} 
//print ">Yes</option><option value=\"0\""; 
//print ">No</option></select></td>\n</tr>";
							print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfUsername&nbsp;</td>\n <td>&nbsp;$EditUser&nbsp;</td>\n</tr>\n";
							print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfFullname&nbsp;</td>\n <td><input name=\"ProfileFullName1\" size=\"50\" value=\"$ProfileFullName\"".$noedit."></td>\n</tr>\n";
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfEmail&nbsp;</td>\n <td><input type=\"text\" name=\"ProfileEmail1\" size=\"50\" value=\"$ProfileEmail\"".$noedit."></td>\n</tr>\n";
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfHome&nbsp;</td>\n <td><input type=\"text\" name=\"ProfileHomepage1\" size=\"50\" value=\"$ProfileHomepage\"".$noedit."></td>\n</tr>\n";
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfHobbies&nbsp;</td>\n <td><input type=\"text\" name=\"ProfileHobbies1\" size=\"80\" value=\"$ProfileHobbies\"".$noedit."></td>\n</tr>\n"; 
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfImage&nbsp;</td>\n <td><input type=\"text\" name=\"ProfileImage1\" size=\"50\" value=\"$ProfileImage\"".$noedit."></td>\n</tr>\n"; 
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gUserConfPassword&nbsp;</td>\n <td><input type=\"text\" name=\"ProfileEditPassword1\" size=\"30\" value=\"$ProfileEditPassword\" STYLE=\"bgcolor:$gConfBGInterface;\"".$noedit."></td>\n</tr>\n";
					                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\" align=\"center\" colspan=\"2\"><input type=\"image\" src=\"images/submit.gif\" BORDER=\"0\"></td>\n</tr>\n</table></TD></TR></TABLE></form>\n";

                                }

                       else
                            { 
     	                      print "$gHeader";
		                      print "$gBody<BR><BR>";
		                      print "$gSTYLE";
		                      require ("$gUserEditLogin");
		                      print "$gCopyFooter";
                            }
                }
           // if file "$EditPlan" not exists print error message
        }

// User CP Login
else
	{
		print "$gHeader";
		print "$gBody<BR><BR>";
		print "$gSTYLE";
		require ("$gUserEditLogin");
		print "$gCopyFooter";
 	}
	

?>
