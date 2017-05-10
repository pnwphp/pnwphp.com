<?php return [
    'conference' => [
        'title' => 'Pacific Northwest PHP',
        'abbr' => 'PNWPHP',
        'startDate' => new DateTime('2017-09-07T09:00:00+07:00'),
        'endDate' => new DateTime('2017-09-09T19:00:00+07:00'),
    ],
    'rooms' => [
        'kne-120' => [
            'name' => 'Kane Hall 120',
            'code' => 'kne-120',
            'location' => 'University of Washington',
            'floor' => '1st',
            'capacity' => 400,
        ],
        'jhn-110' => [
            'name' => 'Johnson 110',
            'code' => 'jhn-110',
            'location' => 'University of Washington',
            'floor' => '1st',
            'capacity' => 60,
        ],
        'jhn-170' => [
            'name' => 'Johnson 170',
            'code' => 'jhn-170',
            'location' => 'University of Washington',
            'floor' => '1st',
            'capacity' => 60,
        ],
    ],

    'speakers' => [],

    'talks' => [],

	'sponsor_levels' => [
		/*
		'platinum' => [
			'title' => 'Platinum Sponsors',
			'level' => 'platinum'
		],
		'gold' => [
			'title' => 'Gold Sponsors',
			'level' => 'gold'
		],
		*/
		'silver' => [
			'title' => 'Silver Sponsors',
			'level' => 'silver'
		],
		/*
		'bronze' => [
			'title' => 'Bronze Sponsors',
			'level' => 'bronze'
		],
		'copper' => [
			'title' => 'Copper Sponsors',
			'level' => 'copper'
		],
		*/
		'community' => [
			'title' => 'Community Sponsors',
			'level' => 'community'
		],
	],
    'sponsors' => [
	    'community' => ['nomad-php', 'dc4d'],
	    'silver' => ['cisco'],

	    'nomad-php' => [
		    'name' => 'Nomad PHP',
		    'code' => 'nomad-php',
		    'level' => 'community',
		    'url' => 'http://nomadphp.com/',
		    'logo' => 'img/logos/joule.jpg',
		    'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
	    ],
	    'dc4d' => [
		    'name' => 'Day Camp For Developers',
		    'code' => 'dc4f',
		    'level' => 'community',
		    'url' => 'http://nomadphp.com/',
		    'logo' => 'img/logos/joule.jpg',
		    'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
	    ],
	    'cisco' => [
		    'name' => 'Cisco',
		    'code' => 'cisco',
		    'level' => 'silver',
		    'url' => 'http://cisco.com/',
		    'logo' => 'img/logos/joule.jpg',
		    'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
	    ],
    ],

    'hotels' => [],

];
