<?php

// Lookup-Server Config

$CONFIG = [
	//DB
	'DB' => [
		'host' => 'localhost',
		'db' => 'lookup',
		'user' => 'lookup',
		'pass' => 'lookup',
	],

	// error verbose
	'ERROR_VERBOSE' => true,

	// logfile
	'LOG' => '/tmp/lookup.log',

	// replication logfile
	'REPLICATION_LOG' => '/tmp/lookup_replication.log',

	// max user search page. limit the maximum number of pages to avoid scraping.
	'MAX_SEARCH_PAGE' => 10,

	// max requests per IP and 10min.
	'MAX_REQUESTS' => 10000,

	// credential to read the replication log. IMPORTANT!! SET TO SOMETHING SECURE!!
	'REPLICATION_AUTH' => 'foobar',

	// credential to read the slave replication log. Replication slaves are read only and don't get the authkey. IMPORTANT!! SET TO SOMETHING SECURE!!
	'SLAVEREPLICATION_AUTH' => 'slavefoobar',

	// the list of remote replication servers that should be queried in the cronjob
	'REPLICATION_HOSTS' => [
		'https://lookup:slavefoobar@example.com'
	],

	// replication interval. The number of seconds into the past that should be used when fetching the replication log from a remote server. Should be a bit higher then the cronjob intervall
	'REPLICATION_INTERVAL' => 900, // 15min

	// ip black list. usefull to block spammers.
	'IP_BLACKLIST' => [
		'333.444.555.',
		'666.777.888.',
	],

	// spam black list. usefull to block spammers.
	'SPAM_BLACKLIST' => [
	],

	// Email sender address
	'EMAIL_SENDER' => 'admin@example.com',

	// Public Server Url
	'PUBLIC_URL' => 'http://dev/nextcloud/lookup-server',
];

