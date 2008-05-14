<?php
/**
 * Internationalisation file for extension Maintenance.
 *
 * @addtogroup Extensions
 */

$messages = array();

/** English
 *@author Ryan Schmidt
 */
$messages["en"] = array(
	'maintenance'                       => "Run maintenance scripts",
	'maintenance-desc'                  => '[[Special:Maintenance|Web interface]] for various maintenance scripts',
	'maintenance-backlink'              => "Back to script selection",
	'maintenance-header'                => "Please select a script below to execute.
Descriptions are next to each script",
	'maintenance-changePassword-desc'   => "Change a user's password",
	'maintenance-createAndPromote-desc' => "Create a user and promote to sysop status",
	'maintenance-deleteBatch-desc'      => "Mass-delete pages",
	'maintenance-deleteRevision-desc'   => "Remove revisions from the database",
	'maintenance-initEditCount-desc'    => "Recalculate the edit counts of users",
	'maintenance-initStats-desc'        => "Recalculate site statistics",
	'maintenance-moveBatch-desc'        => "Mass-move pages",
	'maintenance-runJobs-desc'          => "Run jobs in the job queue",
	'maintenance-showJobs-desc'         => "Show a list of jobs pending in the job queue",
	'maintenance-stats-desc'            => "Show Memcached statistics",
	'maintenance-changePassword'        => "Use this form to change a user's password",
	'maintenance-createAndPromote'      => "Use this form to create a new user and promote it to sysop.
Check the bureaucrat box if you wish to promote to Bureaucrat as well",
	'maintenance-deleteBatch'           => "Use this form to mass-delete pages.
Put only one page per line",
	'maintenance-deleteRevision'        => "Use this form to mass-delete revisions.
Put only one revision number per line",
	'maintenance-initEditCount'         => "",
	'maintenance-initStats'             => "Use this form to recalculate site statistics, specifiying if you want to recalculate page views as well",
	'maintenance-moveBatch'             => "Use this form to mass-move pages.
Each line should specify target page and destination page separated by a pipe",
	'maintenance-runJobs'               => "",
	'maintenance-showJobs'              => "",
	'maintenance-stats'                 => "",
	'maintenance-invalidtype'           => "Invalid type!",
	'maintenance-name'                  => "Username",
	'maintenance-password'              => "Password",
	'maintenance-bureaucrat'            => "Promote user to bureaucrat status",
	'maintenance-reason'                => "Reason",
	'maintenance-update'                => "Use UPDATE when updating a table? Unchecked uses DELETE/INSERT instead.",
	'maintenance-noviews'               => "Check this to prevent updating the number of pageviews",
	'maintenance-confirm'               => "Confirm",
	'maintenance-invalidname'           => "Invalid username!",
	'maintenance-success'               => "$1 ran successfully!",
	'maintenance-userexists'            => "User already exists!",
	'maintenance-invalidtitle'          => "Invalid title \"$1\"!",
	'maintenance-titlenoexist'          => "Title specified (\"$1\") does not exist!",
	'maintenance-failed'                => "FAILED",
	'maintenance-deleted'               => "DELETED",
	'maintenance-revdelete'             => "Deleting revisions $1 from wiki $2",
	'maintenance-revnotfound'           => "Revision $1 not found!",
	'maintenance-stats-edits'           => "Number of edits: $1",
	'maintenance-stats-articles'        => "Number of pages in the main namespace: $1",
	'maintenance-stats-pages'           => "Number of pages: $1",
	'maintenance-stats-users'           => "Number of users: $1",
	'maintenance-stats-admins'          => "Number of admins: $1",
	'maintenance-stats-images'          => "Number of files: $1",
	'maintenance-stats-views'           => "Number of pageviews: $1",
	'maintenance-stats-update'          => "Updating database...",
	'maintenance-move'                  => "Moving $1 to $2...",
	'maintenance-movefail'              => "Error encountered while moving: $1.
Aborting move",
	'maintenance-error'                 => "Error: $1",
	'maintenance-memc-fake'             => "You are running FakeMemCachedClient. No statistics can be provided",
	'maintenance-memc-requests'         => "Requests",
	'maintenance-memc-withsession'      => "with session:",
	'maintenance-memc-withoutsession'   => "without session:",
	'maintenance-memc-total'            => "total:",
	'maintenance-memc-parsercache'      => "Parser Cache",
	'maintenance-memc-hits'             => "hits:",
	'maintenance-memc-invalid'          => "invalid:",
	'maintenance-memc-expired'          => "expired:",
	'maintenance-memc-absent'           => "absent:",
	'maintenance-memc-stub'             => "stub threshold:",
	'maintenance-memc-imagecache'       => "Image Cache",
	'maintenance-memc-misses'           => "misses:",
	'maintenance-memc-updates'          => "updates:",
	'maintenance-memc-uncacheable'      => "uncacheable:",
	'maintenance-memc-diffcache'        => "Diff Cache",
);