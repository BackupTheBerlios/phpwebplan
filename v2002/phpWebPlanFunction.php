<?php 
 //       require ("phpWebPlanConfig.php");

        // phpWebPlanFunction.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>

        // this function is for the Administration Interface & the User Editor.

        function changefile($filename,$wert,$value)
                        {
                                $fcont = file ("$filename");
                                $anz = count ($fcont);
                                        for ($i = 0; $i <= $anz-1; $i++)
                                                {
                                                        $zeile = explode (" ", $fcont[$i]);
                                                        if($zeile[0] == $wert)
                                                        {
                                                                $fcont[$i] = "$wert = \"$value\";\n";
                                                                break;
                                                        }
                                                   }
                                $fp = fopen ("$filename", "w");
                                        for ($i = 0; $i <= $anz-1; $i++)
                                                        {
                                                                fputs ($fp, "$fcont[$i]");
                                                        }
                                          fclose ($fp);

                                                 }
	// convert german special chars

	function ConvertGSC ($var) 
			{
		                $s=$var;
		                $s=ereg_replace(196, "&Auml;",$s);
		                $s=ereg_replace(214, "&Ouml;",$s);
		                $s=ereg_replace(228, "&auml;",$s);
		                $s=ereg_replace(246, "&ouml;",$s);
			}


	// Write registration to profile

	function WriteProfile ($file,$var,$value)
			{
				fputs ($file, "\$Profile$var=\"$value\";\r\n");		
			}


	// MySQL functions

//	function WriteProfileDB ($var,$value,$user) 
//			{
//				mysql_query("INSERT ".$ProfileDB." SET ".$var."='".$value."' WHERE UserName='".trim($user)."'");
//			}

	function UserUpdateUser ($var,$value,$user) 
			{
				mysql_query("UPDATE ".$ProfileDB." SET ".$var."='".$value."' WHERE UserName='".trim($user)."'");
			}

	function AdminInsertAdmin ($var,$value,$user) 
			{
				mysql_query("INSERT ".$AdminDB." SET ".$var."='".$value."' WHERE UserName='".trim($user)."'");
			}

	function AdminInsertUser ($var,$value,$user) 
			{
				mysql_query("INSERT ".$ProfileDB." SET ".$var."='".$value."' WHERE UserName='".trim($user)."'");
			}

	function AdminUpdateAdmin ($var,$value,$user) 
			{
				mysql_query("UPDATE ".$AdminDB." SET ".$var."='".$value."' WHERE UserName='".trim($user)."'");
			}

	function AdminUpdateUser ($var,$value,$user) 
			{
				mysql_query("UPDATE ".$ProfileDB." SET ".$var."='".$value."' WHERE UserName='".trim($user)."'");
			}

	function AdminCreationDate($DateUser) 
			{
				AdminInsertUser("lasttime",date("Y-M-dkn",time()),$DateUser);
			}


?>
