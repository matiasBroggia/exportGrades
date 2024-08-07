<?php

// Esta clase define strings para que en Moodle el plugin se pueda ver en distintos idiomas.

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Export Grades';
$string['modulenameplural'] = 'Export Grades';
$string['modulename_help'] = 'Use the Export Grades module for exporting course grades.';
$string['pluginname'] = 'export-grades-cloud';

$string['exportgrades'] = 'Export Grades';
$string['exportgradesname'] = 'Export Grades name';
$string['exportgradesname_help'] = 'This is the content of the help tooltip associated with the Export Grades name field. Markdown syntax is supported.';
$string['noexportgradesinstances'] = 'There are no export grades instances in this course.';
$string['fileexported'] = 'File has been successfully exported and uploaded to Google Drive.';
$string['exportgradestask'] = 'Export Grades Task';

$string['grade_export_task'] = 'Export Grades Task Automation';

$string['frequency'] = 'Export Frequency';
$string['frequency_desc'] = 'Select how often you want to export grades to Google Drive.';
$string['minutes'] = 'Minutes';
$string['daily'] = 'Daily';
$string['weekly'] = 'Weekly';
$string['monthly'] = 'Monthly';

$string['drivefolderid'] = 'Google Drive Folder ID';
$string['drivefolderid_desc'] = 'The ID of the Google Drive folder where the exported Excel files will be uploaded.';
$string['drivecredentials'] = 'Google Drive Service Account Credentials';
$string['drivecredentials_desc'] = 'The JSON credentials for the Google Drive service account. Paste the entire JSON content here.';
$string['exportdirectory'] = 'Local Directory';
$string['exportdirectory_desc'] = 'Set route of local directory to save CSV export.';

$string['no_grades_found'] = 'Problems';
$string['group'] = 'Groups';
$string['group_desc'] = 'Choose a download bundling type';
$string['all'] = 'All';
$string['finalgrades'] = 'Final Grades';
$string['belgranogrades'] = 'Grades of Belgrano';
$string['yataygrades'] = 'Grades of Yatay';
$string['users'] = 'Users';
$string['users_desc'] = 'Allows you to search for a particular user';

$string['dayofweek'] = 'Day of the week';
$string['dayofmonth'] = 'Day of month';
$string['time'] = 'Time';
$string['time_minute'] = 'Minutes';
$string['time_hour'] = 'Hour';
$string['monday'] = 'Monday';
$string['tuesday'] = 'Tuesday';
$string['wednesday'] = 'Wednesday';
$string['thursday'] = 'Thursday';
$string['friday'] = 'Friday';
$string['saturday'] = 'Saturday';
$string['sunday'] = 'Sunday';
$string['selectday'] = 'Select the day';
$string['selectdate'] = 'Select the date';
$string['selecttime'] = 'Select the time';

$string['dailysettings'] = 'Daily Settings';
$string['weeklysettings'] = 'Weekly Settings';
$string['monthlysettings'] = 'Monthly Settings';

$string['category'] = 'Category';
$string['selectcategory'] = 'Choose a category';
$string['pluginsettings'] = 'Export Grades Settings';
$string['selectcourse'] = 'Select course';
$string['selectgroup'] = 'Select a group';
$string['selectgroupdesc'] = 'Select a group to export grades from';
$string['savechanges'] = 'Save changes';

$string['error_empty_drivecredentials'] = 'The Google Drive service account credentials cannot be empty. Either upload a file or ensure that client_secret.json exists in the config folder.';
$string['error_wrong_filename'] = 'The uploaded file must be named client_secret.json.';
