<?php

        // lang/en.php
        // Default Language File (English)
        //
        // This application is prohibited by the GPL (GNU Public License)
        // Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>

// Language Data Options :)

$langThisISO = "en";
$langThisFull = "english";

// Orginal translation by 
$langAuthorName = "Tobias Mathes";
$langAuthorEmail = "tobi@ideenpark.de";
$langAuthorDate = "2002/04/24-19:47+0200";
// Yes, I know some regions 've an other date format, but please use "YYYY/MM/DD-hh:mm+<timezone>".
// "+0200" is CEST by example :) base for that is GMT (Greenwich Mean Time) :D

// Last translation editor
$langEditorName = "Tobias Mathes";
$langEditorEmail = "tobi@ideenpark.de";
$langEditorDate = "2002/04/24-19:47+0200";


// Here we go. :)

// Main
$mTextBTM = "[back to main]";


// Database error messages

$dbTextConnect = "Database connection to server \"$gDBHost\" failed.";
$dbTextSelect = "Cannot select database \"$gDatabase\".";
$dbTextInsert = "Cannot INSERT selected values into \"$gDatabase\".";
$dbTextUpdate = "Cannot UPDATE selected values in \"$gDatabase\".";

// UserEditor

$uTextAlready = "Sorry, this username is already registered.";
$uTextCreate = "Userprofile created and registration email send.";
$uTextThanks = "Thank you for your registration at";
$uTextUser = "Your Username is";
$uTextPassword = "And your password is";
$uTextEditNotFound = "User to edit was not found.";
$uTextWrong = "May your Username/Password is wrong or editing this User is forbidden.";
$uTextBooBoo = "ooopss ... something goes wrong. ;(";
$uTextEditYes = "Yes, normally you can edit this.";
$uTextForm = "form"; // strange entry, I've look what it is :)


// User Signup

$sTextNameFull = "Full Name";
$sTextNameUser = "Username";
$sTextBirthday = "Birthday";
$sTextY = "YYYY";
$sTextM = "MM";
$sTextD = "DD";
$sTextEmail = "Email";
$sTextHomepage = "Homepage";
$sTextHobbies = "Hobbies";
$sTextPassword = "Password";
$sTextCity = "City";
$sTextState = "State";
$sTextCountry = "Country";
$sTextButtonRegister = "Register me!";

// Admin Interface (patient)

$gConfTitle = "phpWebPlan - Configuration Interface";
$gConfLocalPath = "<B>Local Path (config)</B>";
$gConfLocalPath2 = "<B>Local Path (real)</B>";
$gConfHomePath = "<B>HomePath</B>";
$gConfFilename = "<B>Profile filename</B>";
$gConfAuthUser = "<B>Admin username</B>";
$gConfAuthPass = "<B>Admin password</B>";
$gConfIncPath = "<B>Include Path</B>";
$gConfIncAbout = "<B>Include About</B>";
$gConfIncHelp = "<B>Include Help</B>";
$gConfTempPath = "<B>Template Path</B>";
$gConfTempSearch = "<B>Template Searchbox</B>";
$gConfTempAdmin = "<B>Template Adminlogin</B>";
$gConfTempProfile = "<B>Template Profile</B>";
$gConfTempSignup = "<B>Template User Signup</B>";
$gConfScriptAdmin =	"<B>Main Script Name</B>";
$gConfScriptMain = "<B>Admin Script Name</B>";
$gConfScriptUserSignup = "<B>UserSignup Script</B>";
$gConfScriptUserEditor = "<B>UserEditor Script</B>";
$gConfLanguage = "<B>Language</B>";
$gTextUserSignup = "User Signup";
$gConfChangedMSG = "changed to";


// User Editor

$gUserConfTitle = "phpWebPlan - User Editor";
$gUserConfUsername = "<B>Username</B>";
$gUserConfFullname = "<B>Fullname</B>";
$gUserConfEmail = "<B>Email Adress</B>";
$gUserConfHome = "<B>Homepage</B>";
$gUserConfHobbies = "<B>Hobbies</B>";
$gUserConfImage = "<B>User Picture</B>";
$gUserConfActive = "<B>Profile Active?</B>";
$gUserConfEditActive = "<B>Profile Edit?</B>";
$gUserConfPassword = "<B>Password</B>";
$gUserConfCity = "City";
$gUserConfState = "State";
$gUserConfCountry = "Country";


// Error message (Missing File)

$mTextFailureAbout = "Failure: Missing file \"$incAbout\" .";
$mTextFailureHelp = "Failure: Missing file \"$incHelp\" .";
$mTextFailureSearchbox = "Failure: Missing file \"$gSearchBox\" .";
$mTextFailureSignup = "Failure: Missing file \"$gUserSignup\" .";
$mTextFailureUserExist = "Sorry, a user with the name \"$pUser\" was not found.";

// EOF

?>
