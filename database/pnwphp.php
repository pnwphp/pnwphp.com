<?php return [
	'conference' => [
		'title' => 'Pacific Northwest PHP',
		'abbr' => 'PNWPHP',
		'startDate' => new DateTime('2015-09-10T09:00:00+07:00'),
		'endDate' => new DateTime('2015-09-12T19:00:00+07:00'),
	],
	'rooms' => [
		'main' => [
			'name' => 'Main Event Room',
			'code' => 'main',
			'location' => 'Impact Hub Seattle',
			'floor' => '1st',
			'capacity' => 200,
		],
		'globe' => [
			'name' => 'Globe Room',
			'code' => 'globe',
			'location' => 'Impact Hub Seattle',
			'floor' => '2nd',
			'capacity' => 30,
		],
		'learning-1' => [
			'name' => 'Learning Studio 1',
			'code' => 'learning-1',
			'location' => 'Impact Hub Seattle',
			'floor' => '3rd',
			'capacity' => 50,
		],
		'learning-2' => [
			'name' => 'Learning Studio 2',
			'code' => 'learning-2',
			'location' => 'Impact Hub Seattle',
			'floor' => '4th',
			'capacity' => 50,
		],
		'puget-sound' => [
			'name' => 'Puget Sound Room',
			'code' => 'puget-sound',
			'location' => '1918 Eighth Avenue',
			'floor' => '3rd',
			'capacity' => 60,
		],
	],
	'speakers' => [
		'anthony-ferrara' => [
			'name' => 'Anthony Ferrara',
			'code' => 'anthony-ferrara',
			'location' => 'New York, NY',
			'twitter' => 'ircmaxell',
			'github' => 'ircmaxell',
			'avatar' => '...',
			'bio' => <<<'BIO'
Anthony Ferrara is a Developer Advocate for Google. He specializes in Object Oriented Design, Application Architecture,
Web Application Security and PHP Internals. He is a contributor to multiple Open Source projects, as well as the PHP
community as a whole. You can follow his blog at <a href="http://blog.ircmaxell.com"> or on Twitter at
<a href="http://twitter.com/ircmaxell">@ircmaxell</a>.
BIO
		],
	],
	'talks' => [
		'anatomy-of-a-type-system' => [
			'title' => 'Anatomy Of A Type System',
			'code' => 'anatomy-of-a-type-system',
			'tags' => ['php7', 'types', 'theory'],
			'speaker' => 'anthony-ferrara',
			'room' => 'impact-hub-main',
			'length' => 50,
			'abstract' => <<<'PROPOSAL'
PHP 7 is coming quickly. One of the major features that it brings with it is the ability to use scalar typing. Are you
ready for it? Join me as we take a tour through PHP 7&rsquo;s type system from end to end. Don&rsquo;t know what a type
is? Come and find out! Are you a seasoned type user? Come learn how to leverage the new options! Confused about weak vs.
strict types? We&rsquo;ll cover concept, theory and practical details of the type system while exploring how PHP&rsquo;s
type system compares to other languages.
PROPOSAL
		],
	],
	'sponsors' => [
		'nexcess' => [
			'name' => 'Nexcess',
			'code' => 'nexcess',
			'level' => 'platinum',
			'rank' => 100,
			'label' => 'Platinum',
			'description' => 'Platinum-level Sponsor',
			'url' => 'https://www.nexcess.net/',
			'logo' => 'img/logos/nexcess.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
		'tableau' => [
			'name' => 'Tableau',
			'code' => 'tableau',
			'level' => 'platinum',
			'rank' => 96,
			'label' => 'Platinum',
			'description' => 'Platinum-level Sponsor',
			'url' => 'http://www.tableau.com/',
			'logo' => 'img/logos/tableu.jpg',
			'about' => <<<DESC
Tableau is one of the fastest-growing technology companies in the world. Our mission is simple: we help people see and
understand their data. We currently serve everyone from the executive suites of Fortune 500 companies to the jungles of
Central America, from immunology research labs to high school robotics club meetings. Our software can be found anywhere
people have data and questions. Tableau's culture is casual and high-energy. We value work/life balance, efficiency,
simplicity, freakishly friendly customer service, and making a difference in the world.
DESC
		],
		'aws' => [
			'name' => 'Amazon Web Services',
			'code' => 'aws',
			'level' => 'gold',
			'rank' => 92,
			'label' => 'Hackathon',
			'description' => 'Hackathon Sponsor',
			'url' => 'http://aws.amazon.com/',
			'logo' => 'img/logos/aws.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
		'mysql' => [
			'name' => 'MySQL',
			'code' => 'mysql',
			'level' => 'gold',
			'rank' => 88,
			'label' => 'Gold',
			'description' => 'Gold-level Sponsor',
			'url' => 'http://www.mysql.com/',
			'logo' => 'img/logos/mysql.jpg',
			'about' => <<<DESC
MySQL is the world's most popular open source database. With its proven cost-effective delivery, ease-of-use,
performance, and scalability, MySQL has become the leading database choice for Web-based applications, used by high
profile web properties including Facebook, Twitter, YouTube, Yahoo!, and many more. Visit
<a href="http://www.mysql.com">http://www.mysql.com</a> today!
DESC
		],
		'joomla' => [
			'name' => 'Joomla',
			'code' => 'joomla',
			'level' => 'gold',
			'rank' => 84,
			'label' => 'Gold',
			'description' => 'Gold-level Sponsor',
			'url' => 'http://www.joomla.org/',
			'logo' => 'img/logos/joomla.jpg',
			'about' => <<<DESC
Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online
applications. Many aspects, including its ease-of-use and extensibility, have made Joomla the most popular website
software available. Best of all, Joomla is an open source solution that is freely available to everyone. Many companies
and organizations have requirements that go beyond what is available in the basic Joomla package. In those cases,
Joomla's powerful application framework makes it easy for developers to create sophisticated add-ons that extend the
power of Joomla into virtually unlimited directions.
DESC
		],
		'mandrill' => [
			'name' => 'Mandrill',
			'code' => 'mandrill',
			'level' => 'gold',
			'rank' => 80,
			'label' => 'Party',
			'description' => 'Party Sponsor',
			'url' => 'http://www.mandrill.com/',
			'logo' => 'img/logos/mandrill.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
		'ispottv' => [
			'name' => 'iSpot.tv',
			'code' => 'ispottv',
			'level' => 'silver',
			'rank' => 76,
			'label' => 'Silver',
			'description' => 'Silver-level Sponsor',
			'url' => 'http://www.ispot.tv/',
			'logo' => 'img/logos/ispottv.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
        'alegion' => [
            'name' => 'ALegion',
            'code' => 'alegion',
            'level' => 'silver',
            'rank' => 72,
            'label' => 'Silver',
            'description' => 'Silver-level Sponsor',
            'url' => 'http://alegion.com/',
            'logo' => 'img/logos/alegion.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'tune' => [
            'name' => 'TUNE',
            'code' => 'tune',
            'level' => 'silver',
            'rank' => 68,
            'label' => 'Lunch',
            'description' => 'Lunch Sponsor',
            'url' => 'http://www.tune.com',
            'logo' => 'img/logos/tune.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'engineyard' => [
            'name' => 'Engine Yard',
            'code' => 'engineyard',
            'level' => 'silver',
            'rank' => 64,
            'label' => 'Video',
            'description' => 'Video Sponsor',
            'url' => 'http://www.engineyard.com',
            'logo' => 'img/logos/engineyard.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'roberthalf' => [
            'name' => 'Robert Half',
            'code' => 'roberthalf',
            'level' => 'bronze',
            'rank' => 60,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.roberthalf.com/seattle-tacoma',
            'logo' => 'img/logos/roberthalf.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'in2it' => [
            'name' => 'In2it',
            'code' => 'in2it',
            'level' => 'bronze',
            'rank' => 56,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.in2it.be',
            'logo' => 'img/logos/in2it.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'digitalocean' => [
            'name' => 'Digital Ocean',
            'code' => 'digitalocean',
            'level' => 'bronze',
            'rank' => 47,
            'label' => 'Lanyard',
            'description' => 'Lanyard Sponsor',
            'url' => 'https://www.digitalocean.com/',
            'logo' => 'img/logos/digitalocean.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'roave' => [
            'name' => 'Roave',
            'code' => 'roave',
            'level' => 'bronze',
            'rank' => 48,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'https://roave.com/',
            'logo' => 'img/logos/roave.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'creatuity' => [
            'name' => 'Creatuity',
            'code' => 'creatuity',
            'level' => 'copper',
            'rank' => 44,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://www.creatuity.com',
            'logo' => 'img/logos/creatuity.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'coolblueweb' => [
            'name' => 'coolblueweb',
            'code' => 'coolblueweb',
            'level' => 'copper',
            'rank' => 40,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://www.coolblueweb.com/php',
            'logo' => 'img/logos/coolblueweb.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
	],
    'communitySponsors' => [
        'devhell' => [
            'name' => '/dev/hell',
            'code' => 'devhell',
            'rank' => 100,
            'url' => 'http://devhell.info/',
            'logo' => 'img/logos/devhell.jpg',
            'type' => 'podcast',
        ],
        'sunshinephp' => [
            'name' => 'Sunshine PHP Conference',
            'code' => 'sunshinephp',
            'rank' => 95,
            'url' => 'http://2015.sunshinephp.com/',
            'logo' => 'img/logos/sunshinephp.jpg',
            'type' => 'conference',
        ],
        'dallasphp' => [
            'name' => 'Dallas PHP Group',
            'code' => 'dallasphp',
            'rank' => 90,
            'url' => 'http://www.meetup.com/dallasphp/',
            'logo' => 'img/logos/dallasphp.jpg',
            'type' => 'group',
        ],
        'nomadphp' => [
            'name' => 'NomadPHP',
            'code' => 'nomadphp',
            'rank' => 85,
            'url' => 'http://nomadphp.com',
            'logo' => 'img/logos/nomadphp.jpg',
            'type' => 'group',
        ],
        'apibook' => [
            'name' => 'Practical Approach to API design',
            'code' => 'apibook',
            'rank' => 80,
            'url' => 'https://leanpub.com/restful-api-design',
            'logo' => 'img/logos/practicalapproachtoapidesign.jpg',
            'type' => 'book',
        ],
        'thatpodcast' => [
            'name' => 'That Podcast',
            'code' => 'thatpodcast',
            'rank' => 75,
            'url' => 'http://thatpodcast.io/pnwphp15/',
            'logo' => 'img/logos/thatpodcast.jpg',
            'type' => 'podcast',
        ],
        'looselycoupled' => [
            'name' => 'Loosely Coupled Podcast',
            'code' => 'looselycoupled',
            'rank' => 70,
            'url' => 'http://looselycoupled.info/',
            'logo' => 'img/logos/looselycoupled.jpg',
            'type' => 'podcast',
        ],
        'phpbard' => [
            'name' => '@phpbard',
            'code' => 'phpbard',
            'rank' => 65,
            'url' => 'http://phpbard.tumblr.com/',
            'logo' => 'img/logos/phpbard.jpg',
            'type' => '@phpbard',
        ],
        'madisonphp' => [
            'name' => 'Madison PHP Conference',
            'code' => 'madisonphp',
            'rank' => 60,
            'url' => 'http://2015.madisonphpconference.com/',
            'logo' => 'img/logos/madisonphp.jpg',
            'type' => 'conference',
        ],
        'bootsnipp' => [
            'name' => 'Bootsnipp',
            'code' => 'bootsnipp',
            'rank' => 55,
            'url' => 'http://bootsnipp.com',
            'logo' => 'img/logos/bootsnipp.jpg',
            'type' => 'website',
        ],
        'sculpin' => [
            'name' => '/dev/hell Podcast',
            'code' => 'sculpin',
            'rank' => 50,
            'url' => 'http://sculpin.io/',
            'logo' => 'img/logos/sculpin.jpg',
            'type' => 'project',
        ],
        'wurstcon' => [
            'name' => 'WurstCon',
            'code' => 'wurstcon',
            'rank' => 50,
            'url' => 'http://wurstcon.com',
            'logo' => 'img/logos/wurstcon.jpg',
            'type' => 'sausage',
        ],
    ],
];
