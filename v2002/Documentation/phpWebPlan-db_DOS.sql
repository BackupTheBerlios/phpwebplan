# This application is prohibited by the GPL (GNU General Public License)
#
# Copyright & Design 2001-2002 by Tobias Mathes, <tobi@ideenpark.de>
#
#
# phpMyAdmin MySQL-Dump
# version 2.3.1
# http://www.phpmyadmin.net/ (download page)
#
# Host: localhost
# Erstellungszeit: 15. Oktober 2002 um 21:44
# Server Version: 3.23.49
# PHP-Version: 4.2.3
# Datenbank: hpWebPlan# --------------------------------------------------------

#
# Tabellenstruktur fÅr Tabelle dminCP#

CREATE TABLE AdminCP (
  AdminUser text NOT NULL,
  AdminPassword text NOT NULL,
  AdminName text NOT NULL,
  AdminEmail text NOT NULL
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Tabellenstruktur fÅr Tabelle rofile#

CREATE TABLE Profile (
  Creation date NOT NULL default '0000-00-00',
  Active char(1) NOT NULL default '1',
  EditActive char(1) NOT NULL default '1',
  EditPassword text NOT NULL,
  UserName text NOT NULL,
  FullName text NOT NULL,
  Birth date NOT NULL default '0000-00-00',
  Email text NOT NULL,
  Homepage text NOT NULL,
  City text NOT NULL,
  State text NOT NULL,
  Country text NOT NULL,
  ImageLocal char(1) NOT NULL default '0',
  ImageUrl text NOT NULL,
  ImagePath text NOT NULL,
  PRIMARY KEY  (Creation)
) TYPE=MyISAM;
