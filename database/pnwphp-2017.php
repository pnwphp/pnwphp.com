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
        'platinum'  => [],
        'gold'      => [],
        'silver'    => [],
        'bronze'    => ['ispot-tv', 'get-mercutio'],
        'copper'    => ['cool-blue-web'],
        'community' => ['nomad-php'],

	    'sample' => [
		    'name' => 'Sample',
		    'code' => 'sample',
		    'url' => 'http://example.com/',
		    'logo' => 'https://dummyimage.com/300x300/f2f2f2/3a3a3a.png&text=Sample',
		    'about' => <<<DESC
This could be your company. Get in touch with the organizers to become a sponsor.
DESC
        ],
        'nomad-php'     => [
            'name'  => 'Nomad PHP',
            'code'  => 'nomad-php',
            'level' => 'community',
            'url'   => 'http://nomadphp.com/',
            'logo'  => '/img/logos/2017/community-nomadphp.png',
            'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
        ],
        'ispot-tv'      => [
            'name'  => 'ISpot TV',
            'code'  => 'ispot-tv',
            'level' => 'bronze',
            'url'   => 'https://www.ispot.tv/',
            'logo'  => 'https://dummyimage.com/300x300/f2f2f2/3a3a3a.png&text=iSpot.tv',
            'about' => <<<DESC
This is a description about the sponsoring company. Who they are, and what they do.
DESC
        ],
        'mysql'         => [
            'name'  => 'MySQL',
            'code'  => 'mysql',
            'level' => 'silver',
            'url'   => 'http://mysql.com/',
            'logo'  => 'https://dummyimage.com/300x300/f2f2f2/3a3a3a.png&text=MySQL',
            'about' => <<<DESC
MySQL is the most popular open source RDBMS today!
DESC
        ],
        'cool-blue-web' => [
            'name'  => 'Cool Blue Web',
            'code'  => 'cool-blue-web',
            'level' => 'copper',
            'url'   => 'http://coolblueweb.com/',
            'logo'  => '/img/logos/2017/cool-blue-web.png',
            'about' => <<<DESC
Cool Blue Web is a software consulting services company that specializes in PHP.
DESC
        ],
        'get-mercutio'  => [
            'name'  => 'Get Mercutio',
            'code'  => 'get-mercutio',
            'level' => 'bronze',
            'url'   => 'http://getmercutio.com/',
            'logo'  => 'https://dummyimage.com/300x300/f2f2f2/3a3a3a.png&text=Get+Mercutio',
            'about' => <<<DESC
Get Mercutio is a web consulting services company that specializes in PHP.
DESC
        ],
    ],

    'hotels' => [],

];
