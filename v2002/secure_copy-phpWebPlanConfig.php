<?php

        // phpWebPlanConfig.php
        //
        // This application is prohibited by the GPL (GNU General Public License)
        //
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>


// Application Options (please don't change)

$pAppName               =       "phpWebPlan";                   	// Application Name
$pVersion               =       "0.3.0-CVS";                       	// Application Version
$pYear                  =       "2001-2002";                           	// Application Creation Year
$pHomepage              =       "http://phpWebPlan.aussenmission.org"; 	// Application Home ('WWW')
$pLicense               =       "GPL";                          	// Application License ('Name') 
$pLicenseHome           =       "http://www.gnu.org/copyleft/gpl.html"; // Application License ('Homepage')
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

        // global Variables

$gScriptExt = "php";
$gLanguage = "en";                           // global Language (not supported, yet.)
$gScriptMain = "index.$gScriptExt";
$gScriptAdmin = "phpWebPlanAdmin.$gScriptExt";
$gScriptUserConfChange = "phpWebPlanUserConfChange.$gScriptExt";
$gScriptUserEditor = "phpWebPlanUserEditor.$gScriptExt";
$gScriptUserSignup = "phpWebPlanUserSignup.$gScriptExt";
$HomePath = "/usr/people/";                 // path to home directories; default is "/home/"
$LocalPath = getcwd(); // the local path to phpWebPlan
$gProfilesDirectory = "profiles/";                    // path to profiles directory; default is "profiles/"
//      $DefaultUserPlan        =       ".phpWebPlan";                  // private phpWebPlan file; default is "~/.phpWebPlan"
$DefaultUserPlan = "WebPlanProfile";               // private phpWebPlan file (for web use); default is "WebPlanProfile"
$gWebAdress = "http://phpWebPlan.aussenmission.org";

$gBGCOLOR = "#022746";                      // global background color (bgcolor)
$gTEXT = "#087BB5";                      // global text color (fgcolor)
$gLINK = "#087BB5";                      // global link color
$gALINK = "RED";
$gVLINK = "#087BB5";                      // global visted link color
$NotFoundColor = "RED";
// $gSTYLE = "<link rel=\"stylesheet\" href=\"$gThemesPathFull/$gTemplatePath/Searchbox-Default.template.css\">";                 // global Sylesheet option

        $gHeader                =       "<HTML><HEAD><TITLE>$pAppName - $pVersion</TITLE></HEAD>";        // global HTML Header
        $gUserNotFound          =       "<BR><CENTER><H1><FONT COLOR=\"$NotFoundColor\">Sorry, a user with the name \"$pUser\" was not found.</FONT></H1></CENTER><BR>";
        $gBody                  =       "<BODY BGCOLOR=\"$gBGCOLOR\" TEXT=\"$gTEXT\" LINK=\"$gLINK\" ALINK=\"$gALINK\" VLINK=\"$gVLINK\">";   // global HTML Body
        $gFooter                =       "</BODY></HTML>";                                                 // global HTML Footer
        $gCopyFooter            =       "<BR><BR><P ALIGN=\"CENTER\"><FONT CLASS=\"foot\"><A HREF=\"$gHomepage\" CLASS=\"foot\" TARGET=\"_blank\">$pAppName $pVersion</A> - &copy;Copyright $pYear by <A CLASS=\"foot\" HREF=\"$pAuthorHome\" TARGET=\"_blank\">$pAuthorName</A>, &lt;<A CLASS=\"foot\" HREF=\"mailto:$pAuthorEmail\">$pAuthorEmail</A>&gt;</FONT></P><BR><BR>";
        $gBodyTitle             =       "<H2>$pAppName</H2><BR><BR>";                                     // global BodyTitle[0]

// Registration
$uRegSubject = "phpWebPlan Registration";
$uRegFrom = "webmaster@aussenmission.org";
$uRegDomain = "http://phpWebPlan.aussenmission.org";
$uRegMessage = "\n$uTextThanks $uRegDomain.\n$uTextUser \"$NewUser\".\n$uTextPassword \"$uPassword\".\n";

// Themes
$gThemesPath = "themes";
$gThemesList = "Default";
$gThemesNow = "Default";
$gThemesPathFull = "themes/$gThemesNow";

// Includes
$incPath = "include";
$incAbout = "$gThemesPathFull/include/include_About.html";
$incHelp = "$gThemesPathFull/include/include_Help.html";

// Templates
$gTemplatePath = "templates";
$gSearchBox = "$gThemesPathFull/$gTemplatePath/Searchbox-Default.template.php"; // SearchBox Template
$gProfile = "$gThemesPathFull/$gTemplatePath/Profile-Default.template.php";   // Profile Template
$gLoginAdmin = "$gThemesPathFull/$gTemplatePath/AdminLogin-Default.template.php"; // Adminlogin Template
$gUserSignup = "$gThemesPathFull/$gTemplatePath/UserSignup-Default.template.php"; // User Signup Template
$gUserEditLogin = "$gThemesPathFull/$gTemplatePath/UserEditLogin-Default.template.php"; // User Edit Login Template
//$gLoginUser = "$gThemesPathFull/$gTemplatePath/UserLogin-Default.template"; 				// Not used, yet.

$gSTYLE = "<link rel=\"stylesheet\" href=\"$gThemesPath/Default/$gTemplatePath/Searchbox-Default.template.css\">";
?>


