<?php
        require ("phpWebPlanConfig.php");
        require ("phpWebPlanFunction.php");
        require ("lang/$gLanguage.$gScriptExt");

        // phpWebPlanAdmin.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>

if (!$configchange)
        {

        // Configuration Interface (with restricted access)

	print "$gHeader";
	print "$gBody<BR><BR>";

				if (!$AUSER)
                {
                    include ("$gLoginAdmin");
				}

				if ($AUSER == $GLOGIN)
				if ($APASS == $GPASSWORD)

				{						
            	    print "$gSTYLE";
	                print "<form method=\"post\" action=\"$PHP_SELF?configchange=1&AUSER=$GLOGIN&APASS=$GPASSWORD\">\n";
	                print "<table align=\"center\" border=\"0\" cellPadding=\"0\" cellSpacing=\"1\"><TR bgcolor=\"$gConfBorderInterface\"><TD>\n";
	                print "<table border=\"0\" cellPadding=\"0\" cellSpacing=\"1\">\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td height=\"20\"colspan=\"2\" CLASS=\"logbox\"><b>&nbsp;$gConfTitle&nbsp;-&nbsp;<A CLASS=\"logbox\" HREF=\"$gScriptMain\">$mTextBTM</A></b></td>\n</tr>\n";
			print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfLocalPath&nbsp;</td>\n <td CLASS=\"logbox2\" HEIGHT=\"20\">&nbsp;$LocalPath&nbsp;</td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfHomePath&nbsp;</td>\n <td><input type=text name=gConfHomePath1 size=30 value=$HomePath></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfScriptAdmin&nbsp;</td>\n <td><input type=text name=gConfScriptMain1 size=30 value=$gScriptMain></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfScriptMain&nbsp;</td>\n <td><input type=text name=gConfScriptAdmin1 size=30 value=$gScriptAdmin></td>\n</tr>\n"; 
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfScriptUserSignup&nbsp;</td>\n <td><input type=text name=gConfScriptSignup1 size=30 value=$gScriptUserSignup></td>\n</tr>\n"; 
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfScriptUserEditor&nbsp;</td>\n <td><input type=text name=gConfScriptEditor1 size=30 value=$gScriptUserEditor></td>\n</tr>\n"; 
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfFilename&nbsp;</td>\n <td><input type=text name=gConfFilename1 size=30 value=$DefaultUserPlan></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfIncPath&nbsp;</td>\n <td><input type=text name=gincPath1 size=30 value=$incPath></td>\n</tr>\n";
    	            	print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfIncAbout&nbsp;</td>\n <td><input type=text name=gincAbout1 size=30 value=$incDataAbout></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfIncHelp&nbsp;</td>\n <td><input type=text name=gincHelp1 size=30 value=$incDataHelp></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfTempPath&nbsp;</td>\n <td><input type=text name=gTemplatePath1 size=30 value=$gTemplatePath></td>\n</tr>\n";
    	            	print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfTempSearch&nbsp;</td>\n <td><input type=text name=gSearchBox1 size=30 value=$gSearchBox></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfTempProfile&nbsp;</td>\n <td><input type=text name=gProfile1 size=30 value=$gProfile></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfTempAdmin&nbsp;</td>\n <td><input type=text name=gLoginAdmin1 size=30 value=$gLoginAdmin></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfTempSignup&nbsp;</td>\n <td><input type=text name=gUserSignup1 size=30 value=$gUserSignup></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfLanguage&nbsp;</td>\n <td><input type=text name=gConfLanguage1 size=30 value=$gLanguage></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfAuthUser&nbsp;</td>\n <td><input type=text name=gConfAuthUser1 size=30 value=$gAuthUser></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\">&nbsp;$gConfAuthPass&nbsp;</td>\n <td><input type=text name=gConfAuthPass1 size=30 value=$gAuthPass STYLE=\"bgcolor:$gConfBGInterface;\"></td>\n</tr>\n";
	                print "<tr bgcolor=\"$gConfBGInterface\">\n <td CLASS=\"logbox\" align=\"center\" colspan=\"2\"><input type=\"image\" src=\"images/submit.gif\" BORDER=\"0\"></td>\n</tr>\n</table></TD></TR></TABLE></form>\n";
	        	}

	print "$gFooter";

	}

elseif ($configchange == 1 && $AUSER == $GLOGIN && $APASS == $GPASSWORD)

        {
                print "$gHeader";
                print "$gBody<BR><BR>";
                print "$gSTYLE";

               if($gScriptMain != $gConfScriptMain1)
                        {
                                changefile("phpWebPlanConfig.php","\$gScriptMain",$gConfScriptMain1);
                                print "<BR>MainScript $gConfChangedMSG $gConfScriptMain1.";
                        }

               if($gScriptAdmin != $gConfScriptAdmin1)
                        {
                                changefile("phpWebPlanConfig.php","\$gScriptAdmin",$gConfScriptAdmin1);
                                print "<BR>AdminScript $gConfChangedMSG $gConfScriptAdmin1.";
                        }

               if($gScriptSignup != $gConfScriptSignup1)
                        {
                                changefile("phpWebPlanConfig.php","\$gScriptUserSignup",$gConfScriptSignup1);
                                print "<BR>UserScript $gConfChangedMSG $gConfScriptSignup1.";
                        }

               if($gScriptUserEditor != $gConfScriptUserEditor1)
                        {
                                changefile("phpWebPlanConfig.php","\$gScriptUserEditor",$gConfScriptEditor1);
                                print "<BR>UserEditorScript $gConfChangedMSG $gConfScriptUserEditor1.";
                        }

                if($HomePath != $gConfHomePath1)
                        {
                                changefile("phpWebPlanConfig.php","\$HomePath",$gConfHomePath1);
                                print "<BR>HomePath $gConfChangedMSG $gConfHomePath1.";
                        }

                if($DefaultUserPlan != $gConfFilename1)
                        {
                                changefile("phpWebPlanConfig.php","\$DefaultUserPlan",$gConfFilename1);
                                print "<BR>FileName $gConfChangedMSG $gConfFilename1.";
                        }

                if($gLanguage != $gConfLanguage1)
                        {
                                changefile("phpWebPlanConfig.php","\$gLanguage",$gConfLanguage1);
                                print "<BR>$gConfLanguage1 $gConfChangedMSG $gLanguage1.";
                        }


                if($gAuthUser != $gConfAuthUser1)
                        {
                                changefile("phpWebPlanConfig.php","\$gAuthUser",$gConfAuthUser1);
                                print "<BR>Screenname $gConfChangedMSG $gConfAuthUser1.";
                        }

                if($gAuthPass != $gConfAuthPass1)
                        {
                                changefile("phpWebPlanConfig.php","\$gAuthPass",$gConfAuthPass1);
                                print "<BR>Password $gConfChangedMSG $gConfAuthPass1.";
                        }

                if($incPath != $gincPath1)
                        {
                                changefile("phpWebPlanConfig.php","\$incPath",$gincPath1);
                                print "<BR>$gConfIncPath $gConfChangedMSG $gincPath1.";
                        }

                if($incAbout != $gincAbout1)
                        {
                                changefile("phpWebPlanConfig.php","\$incDataAbout",$gincAbout1);
                                print "<BR>$gConfIncAbout $gConfChangedMSG $gincAbout1.";
                        }

                if($incHelp != $gincHelp1)
                        {
                                changefile("phpWebPlanConfig.php","\$incDataHelp",$gincHelp1);
                                print "<BR>$gConfIncHelp $gConfChangedMSG $gincHelp1.";
                        }

                if($gTemplatePath != $gTemplatePath1)
                        {
                                changefile("phpWebPlanConfig.php","\$gTemplatePath",$gTemplatePath1);
                                print "<BR>$gConfTempPath $gConfChangedMSG $gTemplatePath1.";
                        }

                if($gSearchBox != $gSearchBox1)
                        {
                                changefile("phpWebPlanConfig.php","\$gSearchBox",$gSearchBox1);
                                print "<BR>$gConfTempSearch $gConfChangedMSG $gSearchBox1.";
                        }

                if($gProfile != $gProfile1)
                        {
                                changefile("phpWebPlanConfig.php","\$gProfile",$gProfile1);
                                print "<BR>$gConfTempProfile $gConfChangedMSG $gProfile1.";
                        }

                if($gLoginAdmin != $gLoginAdmin1)
                        {
                                changefile("phpWebPlanConfig.php","\$gLoginAdmin",$gLoginAdmin1);
                                print "<BR>$gConfTempAdmin $gConfChangedMSG $gLoginAdmin1.";
                        }

                if($gUserSignup != $gUserSignup1)
                        {
                                changefile("phpWebPlanConfig.php","\$gUserSignup",$gUserSignup1);
                                print "<BR>$gConfTempSignup $gConfChangedMSG $gUserSignup1.";
                        }

                print "<BR><BR><A HREF=\"$gScriptMain\">$mTextBTM</A><BR>";
                print "$gFooter";
        }
?>
