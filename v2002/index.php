<?php
        require ("phpWebPlanConfig.php");
        require ("phpWebPlanFunction.php");
        require ("lang/$gLanguage.$gScriptExt");
 
        // phpWebPlan.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>


//      $planfile = "$HomePath$pUser/$DefaultUserPlan";                 // for local use only
        $planfile = "$gProfilesDirectory/$DefaultUserPlan.$pUser.$gScriptExt";      // for "web" use only



// Script starts here ;)

if (!$Content)
  {

// if (!$pUser)
if (empty ($pUser))
       {
                 print "$gHeader";
                 print "$gBody<BR><BR>";
                        if (file_exists("$gSearchBox") == TRUE)
                                {
                                        include ("$gSearchBox");
                                }
                        else
                                {
					print ("$mTextFailureSearchbox");
                                }
                 print "$gFooter";
		}

// List All
elseif (!empty ($pUser) && $pUser == "%")
        {
			print '<table border="0" cellpadding="0" cellspacing="4" align="center">';
            		print '<tr><td>username</td><td>real name</td><td>email adress</td><td colspan="2">options</td></tr>';

			$handle=opendir("$gProfilesDirectory"); 
			while ($file = readdir ($handle)) 
			{ 
			  if ($file != "." && $file != "..") 
				{ 

                 include_once ("$gProfilesDirectory/$file");
   			        $file3 = explode( ".", $file );
					if (!empty ($file3[1]))
						{
							print "\n\t<tr>\n\t\t<td>$ProfileUsername</td>\n\t\t<td>$ProfileName</td>\n\t\t<td>$ProfileEmail</td>\n\t\t<td>\n\t\t\t<a href=\"$gScriptMain?pUser=$ProfileUsername\" target=\"_parent\"><SMALL>show</SMALL></a>\n\t\t</td>\n\t\t<td>\n\t\t\t<A HREF=\"$gScriptUserEditor\"><SMALL>edit</SMALL></A>\n\t\t</td>\n\t</tr>\n";
							print "<tr><td colspan=\"3\">$entrybck</td></tr>";
						}
    				} 
			}
			closedir($handle); 
                 print "</table>\n";
        }

elseif (!empty ($pUser))
        {

          if (file_exists("$planfile") == TRUE)
		{
                 require_once ("$planfile");
                 require_once ("$gProfile");
		}
	else
		{
                 print "$gHeader";
                 print "$gStyle";
                 print "$gBody<BR><BR>";
		 print "$gUserNotFound";
                        if (file_exists("$gSearchBox") == TRUE)
                                {
                                        include_once ("$gSearchBox");
                                }
                        else
                                {
					print ("$mTextFailureSearchbox");
                                }
                 print "$gFooter";
		}
        }
  }

if ($Content == About)
        {
		if (file_exists("$incAbout") == TRUE)
			{
		                include_once ("$incAbout");
			}
		else
			{
				print ("$mTextFailureAbout");
			}
        }

if ($Content == Help)
        {
		if (file_exists("$incHelp") == TRUE)
			{
				include_once ("$incHelp");
			}
		else
			{
				print ("$mTextFailureHelp");
			}

        }

if ($Content == License)
        {
		if (file_exists("$pLicense") == TRUE)
			{
                  		 print "$gHeader";
		                 print "$gSTYLE";
		                 print "$gBody";
		                 print "<BR><A HREF=\"$gScriptMain\">$mTextBTM</A><BR>";
		                 include_once ("$pLicense");
		                 print "</PRE>$gFooter";
			}
		// Get license online, if local not available
		else
			{
                         	print "$gHeader";
				print "$gSTYLE";
				print "$gBody";
				print "<BR><A HREF=\"$gScriptMain\">$mTextBTM</A><BR>";
				print "<BR>Getting $pLicense (<A HREF=\"$pLicenseOnline\" TARGET=\"_blank\">$pLicenseOnline</A>) from it's home at <A HREF=\"$pLicenseHome\" TARGET=\"_blank\">$pLicenseHome</A>";
				print "<BR><HR WIDTH=\"100%\">";
				print "<BR><PRE>\n";
				include_once ("$pLicenseOnline");
				print "</PRE>$gFooter";
				print "$gFooter";
			}
        }		

if ($Content == ChangeLog)
        {
                 print "$gHeader";
                 print "$gSTYLE";
                 print "$gBody";
                 print "<BR><A HREF=\"$gScriptMain\">$mTextBTM</A><BR>";
                 print "<BR><PRE>";
                 include ("ChangeLog");
                 print "</PRE></FONT>$gFooter";
        }

if ($Content == Signup)
	{
                 print "$gHeader";
                 print "$gStyle";
                 print "$gBody<BR><BR>";
                        if (file_exists("$gUserSignup") == TRUE)
                                {
                                        include ("$gUserSignup");
                                }
                        else
                                {
					print ("$mTextFailureSignup");
                                }
                 print "$gFooter";
	}

if ($Content == ListAllUser)
		{
           print "$gHeader";
           print "$gStyle";
           print "$gBody<BR>";
                        if (file_exists("$gSearchBox") == TRUE)
                                {
                                        include ("$gSearchBox");
                                }
                        else
                                {
					print ("$mTextFailureSearchbox");
                                }
			print '<table border="0" cellpadding="0" cellspacing="4">';
			$d = dir("profiles/");
			$dir = getcwd();

			while($entry=$d->read()) 
				{
			$entry3 = explode( ".", $entry );
					if (!empty ($entry3[1]))
						{
							echo "\n\t<tr>\n\t\t<td>".$entry3[1]."</td>\n\t\t<td>\n\t\t\t<a href=\"$gScriptMain?pUser=$entry3[1]\""." target=\"_parent\"><SMALL>show</SMALL></a>\n\t\t</td>\n\t\t<td>\n\t\t\t<A HREF=\"$gScriptUserEditor\"><SMALL>edit</SMALL></A>\n\t\t</td>\n\t</tr>\n";
						}
				}
			$d->close(); 
                 print "</table>\n$gFooter";
		}
if ($Content == ListAllUserInclude)
		{
			print '<table border="0" cellpadding="0" cellspacing="4">';
			$d = dir("profiles/");
			$dir = getcwd();

			while($entry=$d->read()) 
				{
            $entrybck = $entry;
			$entry3 = explode( ".", $entry );
					if (!empty ($entry3[1]))
						{
							echo "\n\t<tr>\n\t\t<td>".$entry3[1]."</td>\n\t\t<td>\n\t\t\t<a href=\"$gScriptMain?pUser=$entry3[1]\""." target=\"_parent\"><SMALL>show</SMALL></a>\n\t\t</td>\n\t\t<td>\n\t\t\t<A HREF=\"$gScriptUserEditor\"><SMALL>edit</SMALL></A>\n\t\t</td>\n\t</tr>\n";
                            print "<tr><td colspan=\"3\">$entrybck</td></tr>";
						}
				}
			$d->close(); 
                 print "</table>\n";
                 print "$entrybck";
		}
?>
