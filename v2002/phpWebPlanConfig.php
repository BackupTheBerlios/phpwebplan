<?php

        // phpWebPlanConfig.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>


// Application Options (please don't change)

$pAppName               =       "phpWebPlan";                   	// Application Name
$pVersion               =       "0.5.0";	                       	// Application Version
$pYear                  =       "2001-2002";                           	// Application Creation Year
$pHomepage              =       "http://phpWebPlan.aussenmission.org"; 	// Application Home ('WWW')
$pLicense               =       "GPL";                          	// Application License ('Name') 
$pLicenseHome           =       "http://www.gnu.org/copyleft/gpl.html"; // Application License ('Homepage')
$pLicenseOnline		=	"http://www.gnu.org/licenses/gpl.txt";	// Application License ('Online')
$pAuthorName            =       "Tobias Mathes";                	// Application Author('Name')
$pAuthorEmail           =       "tobias@mathes.biz";           		// Application Author('Email')
$pAuthorHome            =       "http://tobias.mathes.biz";     	// Application Author('Homepage')


// Enviroment Options (please change)

        // Administration Interface


$gAuthUser = "Admin";
$gAuthPass = "password";
$GLOGIN                  =       "$gAuthUser";
$GPASSWORD               =       "$gAuthPass";
$gConfBGInterface = "#004682";
$gConfBorderInterface = "#087BB5";


	// Database Options


$gUseDB = "0"; 						// 0 = No (Default), 1 = Yes (Optional) - Use MySQL DB

$gDBHost = "localhost";					// MySQL Host
$gDBUserName = "root";					// MySQL User
$gDBUserPass = "";				// MySQL Password

$gDatabase = "phpWebPlan";				// MySQL Database (Default: phpWebPlan)
$gAdminDB = "AdminCP";					// MySQL Table for Admin CP
$gProfileDB = "Profile";				// MySQL Table for Profiles

$gImageLocal = "0";

        // global Variables

$gRegisterActive = "1";					// 0 = No, 1 = Yes (Default)
$gEditActive = "1";					// 0 = No, 1 = Yes (Default)

$gScriptExt = "php";
$gLanguage = "en";                           		// global Language (not supported, yet.)
$gScriptMain = "index.$gScriptExt";
$gScriptAdmin = "admin/index.html";
$gScriptUserConfChange = "phpWebPlanUserConfChange.$gScriptExt";
$gScriptUserEditor = "phpWebPlanUserEditor.$gScriptExt";
$gScriptUserSignup = "phpWebPlanUserSignup.$gScriptExt";
$HomePath = "/usr/people/";                 		// path to home directories; default is "/home/"
$LocalPath = getcwd(); 					// the local path to phpWebPlan
$gProfilesDirectory = "profiles";                    	// path to profiles directory; default is "profiles/"
//      $DefaultUserPlan        =       ".phpWebPlan";  // private phpWebPlan file; default is "~/.phpWebPlan"
$DefaultUserPlan = "WebPlanProfile";               	// private phpWebPlan file (for web use); default is "WebPlanProfile"
$gWebAdress = "http://phpWebPlan.aussenmission.org";


// Registration
$uRegSubject = "phpWebPlan Registration";
$uRegFrom = "webmaster@aussenmission.org";
$uRegDomain = "http://phpWebPlan.aussenmission.org";
$uRegMessage = "\n$uTextThanks $uRegDomain.\n$uTextUser \"$NewUser\".\n$uTextPassword \"$uPassword\".\n";

// Themes
$gThemesPath = "themes";
$gThemesList = "Default"; 				// List Array, still not used =)
$gThemesNow = "Default";
$gThemesPathFull = "themes/$gThemesNow";

// Includes
$incPath = "include";
$incDataAbout = "include_About.html";
$incDataHelp = "include_Help.html";
$incAbout = "$gThemesPathFull/$incPath/$incDataAbout";
$incHelp = "$gThemesPathFull/$incPath/$incDataHelp";

// Templates
$gTemplatePath = "templates";
$gSearchBox = "$gThemesPathFull/$gTemplatePath/Searchbox-Default.template.php"; 	// SearchBox Template
$gProfile = "$gThemesPathFull/$gTemplatePath/Profile-Default.template.php";   		// Profile Template
$gLoginAdmin = "$gThemesPathFull/$gTemplatePath/AdminLogin-Default.template.php"; 	// Adminlogin Template
$gUserSignup = "$gThemesPathFull/$gTemplatePath/UserSignup-Default.template.php"; 	// User Signup Template
$gUserEditLogin = "$gThemesPathFull/$gTemplatePath/UserEditLogin-Default.template.php"; // User Edit Login Template
$gListAll = "$gThemesPathFull/$gTemplatePath/ListAll-Default.template.php";

// $NotFoundColor = "RED";

$gSTYLE = "<link rel=\"stylesheet\" href=\"$gThemesPath/Default/$gTemplatePath/Searchbox-Default.template.css\">";
$gStyle = "$gSTYLE";
$gHeader = "<HTML><HEAD><TITLE>$pAppName - $pVersion</TITLE>$gSYLE</HEAD>"; 	// global HTML Header
$gUserNotFound = "<BR><DIV ALIGN=\"CENTER\" CLASS=\"mTextFailureUserExist\">$mTextFailureUserExist</CENTER><BR>";
$gBody = "<BODY CLASS=\"logbox\">"; 					// global HTML Body
$gFooter = "</BODY></HTML>"; 						// global HTML Footer
$gCopyFooter = "<BR><BR><P ALIGN=\"CENTER\"><FONT CLASS=\"foot\"><A HREF=\"$pHomepage\" CLASS=\"foot\" TARGET=\"_blank\">$pAppName $pVersion</A> - &copy;Copyright $pYear by <A CLASS=\"foot\" HREF=\"$pAuthorHome\" TARGET=\"_blank\">$pAuthorName</A>, &lt;<A CLASS=\"foot\" HREF=\"mailto:$pAuthorEmail\">$pAuthorEmail</A>&gt;</FONT></P><BR><BR>";
$gBodyTitle = "<H2>$pAppName</H2><BR><BR>"; 				// global BodyTitle[0]


// Extracted Text (for 0.3.0-final)

?>


