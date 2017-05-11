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
		'platinum' => [
			'title' => 'Platinum Sponsor',
			'level' => 'platinum'
		],
		'gold' => [
			'title' => 'Gold Sponsors',
			'level' => 'gold'
		],
		'silver' => [
			'title' => 'Silver Sponsors',
			'level' => 'silver'
		],
		'bronze' => [
			'title' => 'Bronze Sponsors',
			'level' => 'bronze'
		],
		'copper' => [
			'title' => 'Copper Sponsors',
			'level' => 'copper'
		],
		'community' => [
			'title' => 'Community Sponsors',
			'level' => 'community'
		],
	],

    'sponsors' => [
	    'platinum'  => ['sample'],
	    'gold'      => ['sample', 'sample', 'sample'],
	    'silver'    => ['sample', 'sample', 'sample'],
	    'bronze'    => ['sample', 'sample', 'sample'],
	    'copper'    => ['sample', 'sample', 'sample'],
	    'community' => ['sample', 'sample', 'sample'],

	    'sample' => [
		    'name' => 'Sample',
		    'code' => 'sample',
		    'url' => 'http://example.com/',
		    'logo' => 'https://dummyimage.com/300x300/f2f2f2/3a3a3a.png&text=Sample',
		    'about' => <<<DESC
This could be your company. Get in touch with the organizers to become a sponsor.
DESC
	    ],
	    'nomad-php' => [
		    'name' => 'Nomad PHP',
		    'code' => 'nomad-php',
		    'level' => 'community',
		    'url' => 'http://nomadphp.com/',
		    'logo' => 'https://dummyimage.com/300x300/f0f0c0/3a3a3a.png&text=Nomad+PHP',
		    'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
	    ],
	    'cisco' => [
		    'name' => 'Cisco',
		    'code' => 'cisco',
		    'level' => 'silver',
		    'url' => 'http://cisco.com/',
		    'logo' => 'https://dummyimage.com/300x300/c2f2c2/3a3a3a.png&text=Cisco',
		    'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
	    ],
    ],

    'hotels' => [],

];
