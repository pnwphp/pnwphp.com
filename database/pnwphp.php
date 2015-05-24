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
            'company' => 'Google',
			'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0cb510ca1df8750000002/avatar',
			'bio' => <<<BIO
Anthony Ferrara is a Developer Advocate for Google. He specializes in Object Oriented Design, Application Architecture,
Web Application Security and PHP Internals. He is a contributor to multiple Open Source projects, as well as the PHP
community as a whole. You can follow his blog at <a href="http://blog.ircmaxell.com"> or on Twitter at
<a href="http://twitter.com/ircmaxell">@ircmaxell</a>.
BIO
		],
        'margaret-staples' => [
            'code' => 'margaret-staples',
            'name' => 'Margaret Staples',
            'location' => 'Port Angeles, WA',
            'github' => 'mstaples',
            'twitter' => 'dead_lugosi',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54e8f26b53d328245f000007/avatar',
            'company' => 'Aesop Games',
            'bio' => <<<BIO
As part of the AesopGames team, Margaret writes the code that makes the game work! She takes design documents and
translates them into game functions, and then takes those and delivers them to players through the web client and to
the AesopGames Unity developer through the API.
BIO
        ],
        'beau-simensen' => [
            'code' => 'beau-simensen',
            'name' => 'Beau Simensen',
            'location' => 'Madison, WI',
            'github' => 'simensen',
            'twitter' => 'beausimensen',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54ea4657a782185269000008/avatar',
            'company' => 'dflydev',
            'bio' => <<<BIO
Beau Simensen (<a href="https://twitter.com/beausimensen">@beausimensen</a>, <a href="https://beau.io">beau.io</a>) has
been a professional polyglot programmer since 1998. He owns Dragonfly Development
(<a href="http://dflydev.com">dflydev.com</a>, a consulting company, and is co-host of That Podcast
(<a href="https://twitter.com/thatpodcast">@thatpodcast</a>, <a href="http://thatpodcast.io">thatpodcast.io</a>). An
active open-sourcer, he created Sculpin (<a href="https://sculpin.io">sculpin.io</a>) and helped create Stack PHP
(<a href="http://stackphp.com">stackphp.com</a>). He is also the Sculpin representative to the PHP Framework
Interoperability Group (PHP-FIG). Beau is a proponent of framework agnostic code. Unglue all the things!
BIO
        ],
        'chris-hartjes' => [
            'code' => 'chris-hartjes',
            'name' => 'Chris Hartjes',
            'location' => 'Milton, Ontario, Canada',
            'github' => 'chartjes',
            'twitter' => 'grmpyprogrammer',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb66c2db6429e6f4000022/avatar',
            'company' => 'Grumpy Learning Inc.',
            'bio' => 'Chris Hartjes has been building web applications of all shapes and sizes since 1998, ranging from catalogs of CD compilations for professional DJ\'s to portal pages for large US cable television providers. Chris gives back to the programming communities that have helped him by mentoring, speaking at conferences, and by co-organizing TrueNorth PHP. As the author of two books on writing testable PHP code and using testing tools, he believes that testing and automation are secret weapons that organizations can use to deliver high-quality applications quickly. He works from his basement office in the snowy wilds of Canada. He can also be heard semi-regularly on the /dev/hell podcast with Ed Finkler',
        ],
        'adam-culp' => [
            'code' => 'adam-culp',
            'name' => 'Adam Culp',
            'location' => 'Boca Raton, FL',
            'github' => 'adamculp',
            'twitter' => 'adamculp',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb71e1db6429d9ff000002/avatar',
            'company' => 'Zend Technologies',
            'bio' => 'Adam Culp (@AdamCulp) author of "Refactoring 101" and consultant at Zend Technologies is passionate about developing with PHP and contributes to many open source projects.    He organizes the SunshinePHP Developer Conference and South Florida PHP Users Group (SoFloPHP) where he enjoys helping others write good code, implement standards, refactor efficiently, and incorporate unit and functional testing into their projects.    He is a Zend Certified PHP 5.3 Engineer, and holds a seat on the Zend Framework Certification Advisory Board.    When he is not coding or contributing to various developer communities, he can be found hiking around the United States National Parks, teaching judo, or long(ultra) distance running.',
        ],
        'dave-stokes' => [
            'code' => 'dave-stokes',
            'name' => 'Dave Stokes',
            'location' => 'Trophy Club, Texas',
            'github' => '',
            'twitter' => 'stoker',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb758f4f630c0b68000012/avatar',
            'company' => 'Oracle',
            'bio' => 'Dave Stokes is a MySQL Community Manager for Oracle and has been using PHP & MySQL since they both became available.',
        ],
        'phil-sturgeon' => [
            'code' => 'phil-sturgeon',
            'name' => 'Phil Sturgeon',
            'location' => 'Brooklyn, NY',
            'github' => 'philsturgeon',
            'twitter' => 'philsturgeon',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54ee8e005fba45a55000000a/avatar',
            'company' => 'Ride.com',
            'bio' => 'Founder of PyroCMS, Senior Developer at Ride, Programming Polyglot, PHP-FIG member, and occasionally gets chased by bears.',
        ],
        'yitzchok-willroth' => [
            'code' => 'yitzchok-willroth',
            'name' => 'Yitzchok Willroth',
            'location' => 'Lakewood, New Jersey',
            'github' => 'coderabbi',
            'twitter' => 'coderabbi',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f095b9f88e3dd21b00000e/avatar',
            'company' => 'Wisdom as a Service',
            'bio' => 'Yitzchok Willroth is an independent application developer, consultant and coach living in Lakewood, NJ. A start-up vet, dev bootcamp instructor and popular conference speaker, Yitzchok is the organizer of the ShorePHP User Group, co organizer of the NY-PHP User Group, and an active participant in the PHPMentoring Initiative. Passionate about clean code and robust application architecture, he is also a strong proponent of remote teams as a way for organizations to thrive while affording developers a healthy work:life balance.',
        ],
        'michael-babker' => [
            'code' => 'michael-babker',
            'name' => 'Michael Babker',
            'location' => 'United States',
            'github' => 'mbabker',
            'twitter' => 'mbabker',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f09cb80ca1df0088000002/avatar',
            'company' => 'WebSpark, Inc.',
            'bio' => 'Michael Babker is a multi-talented IT geek working for WebSpark, Inc. He’s been developing in PHP since 2010 working primarily with Symfony and Joomla code. He’s known to be rather opinionated on all matters code and enjoys learning new platforms and taking in the many sights the world has to offer.',
        ],
        'larry-garfield' => [
            'code' => 'larry-garfield',
            'name' => 'Larry Garfield',
            'location' => 'United States',
            'github' => 'Crell',
            'twitter' => 'Crell',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0ae95f88e3d49b100001d/avatar',
            'company' => 'Palantir.net',
            'bio' => 'Larry Garfield has been building web sites since he was a sophomore in high school, which is longer ago than he\'d like to admit. At Palantir, Larry is a Senior Architect and Community Lead, developing solutions for medium to large cultural and educational institutions. He also works to represent both Palantir and Drupal in the broader developer community.

Larry is an active Drupal core contributor, including the principle architect of the Drupal 7 database system and the Drupal 8 Web Services Lead. He is also a member of the Advisory Board of the Drupal Association and the Drupal representative to the Framework Interoperability Group. Larry holds a Master’s degree in Computer Science from DePaul University.

Larry is a co-author of "Drupal 7 Module Development" from Packt Publishing. He blogs at both http://www.palantir.net/ and http://www.garfieldtech.com/.',
        ],
        'amber-matz' => [
            'code' => 'amber-matz',
            'name' => 'Amber Matz',
            'location' => 'Portland, OR',
            'github' => '',
            'twitter' => 'amberhimesmatz',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0e5666500a3a8e4000006/avatar',
            'company' => 'Lullabot/Drupalize.Me',
            'bio' => 'Amber Matz (neé Himes) is an educator with Drupalize.Me. With over a decade of experience as a Web developer, Amber has tackled the hardest problems the web offers, including data migrations and editorial workflows. In the past five years, Amber has focused her talents as a Drupal developer, and readily shares her experience with others. She was the creator and host of the weekly series, DevMunch--an online education Web show designed to help developers upgrade their skills.

Through her training as a massage therapist, volunteer community mediator, and project manager, Amber learned the importance of being a responsive communicator especially during times of stress. Her commitment to asking the right questions, and modifying her approach based on feedback, has made her effective at team process improvements, and learner-centered instruction. Amber has developed a reputation as an agile team member, ready to tackle any problem which is presented to her.

These days, when she\'s not in front of the computer at her home in Beaverton, Oregon, she\'s crocheting gifts for her nieces and nephew, tending her flowers and veggies at a local community garden, exploring the Pacific Northwest with her camera, and practicing rock-and-roll power chords on the accordion.',
        ],
        'robert-mcfrazier' => [
            'code' => 'robert-mcfrazier',
            'name' => 'Robert McFrazier',
            'location' => 'Snohomish, WA',
            'github' => 'rmcfrazier',
            'twitter' => 'rmcfrazier',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f2740e7ae7c78153000007/avatar',
            'company' => '',
            'bio' => 'I have been in the software industry in the Seattle area for over 15 years in many different roles including LAMP engineer, software developer, technical trainer, architect, technical support, and manager. I enjoy learning new things and working on strong teams. I spend my free time with my wife and my son, trying to stay dry in the pacific northwest. I spend all day with my head in the clouds and containers.',
        ],
        'joshua-warren' => [
            'code' => 'joshua-warren',
            'name' => 'Joshua Warren',
            'location' => 'Dallas, Texas',
            'github' => 'JoshuaSWarren',
            'twitter' => 'JoshuaSWarren',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/550f5ca604f84134dd00000c/avatar',
            'company' => 'Creatuity',
            'bio' => 'Joshua Warren has been developing web applications with PHP since 1999. He is the Founder & CEO of Creatuity in Dallas, Texas, where he works on eCommerce projects with Magento and the Yii framework. He founded Creatuity in 2008 as a development firm and has grown it to a team of over 25, including 14 developers working across 2 continents. When Joshua isn\'t developing, he enjoys traveling to new countries to try local food and beer while meeting developers at local meetups as well as connecting with developers around the world via Twitter.',
        ],
        'gemma-anible' => [
            'code' => 'gemma-anible',
            'name' => 'Gemma Anible',
            'location' => 'Albuquerque, NM',
            'github' => 'ellotheth',
            'twitter' => 'ellotheth',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55102d8a46ab610ef2000004/avatar',
            'company' => 'Giguebytes, LLC',
            'bio' => 'Gemma is a software engineer, video gamer and recovering classical violinist who has been developing PHP web applications since before PHP5 (and applications in C, .NET and Delphi since before then). She is passionate about using pragmatic processes and tooling to support developers of all types and skillsets, and her level of excitement over learning new dev technology tends to correlate strongly with her level of caffeination. Gemma and her husband live with their two dogs in New Mexico, where they climb volcanoes for fun.',
        ],
        'ben-lobaugh' => [
            'code' => 'ben-lobaugh',
            'name' => 'Ben Lobaugh',
            'location' => 'Seattle, WA',
            'github' => 'blobaugh',
            'twitter' => 'benlobaugh',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55171c8589bee6fb3d000005/avatar',
            'company' => 'WebDevStudios',
            'bio' => 'Ben Lobaugh has been an avid open source enthusiast for over 15 years. During that time he has work on all sort of projects from mom & pop shops to multinational corporations. In his downtime Ben can be found cruising Puget Sound with on his beautiful sailboat Zippey or play with his dog Bella in the park.',
        ],
        'luke-kysow' => [
            'code' => 'luke-kysow',
            'name' => 'Luke Kysow',
            'location' => 'Vancouver, Canada',
            'github' => 'lkysow',
            'twitter' => 'lkysow',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55173d5389bee61bf600001a/avatar',
            'company' => 'Hootsuite',
            'bio' => 'Luke is a Software Engineer on the Platform Team at Hootsuite in Vancouver. He\'s currently working on splitting Hootsuite\'s PHP monolith into a distributed microsystems architecture so they can scale even further. When he\'s not at his laptop you can probably find Luke hanging off a cliff rock climbing somewhere.',
        ],
        'ben-marks' => [
            'code' => 'ben-marks',
            'name' => 'Ben Marks',
            'location' => 'Isle of Palms, SC',
            'github' => 'benmarks',
            'twitter' => 'benmarks',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551acdfb4f0d7e8c2800001f/avatar',
            'company' => 'Magento',
            'bio' => 'Ben has been developing with, teaching, and talking about Magento for seven years. He enjoys helping merchants and developers solve the challenges of commerce as much as he enjoys helping to improve Magento for everyone\'s benefit.',
        ],
        'keith-casey' => [
            'code' => 'keith-casey',
            'name' => 'Keith Casey',
            'location' => 'United States',
            'github' => 'CaseySoftware',
            'twitter' => 'CaseySoftware',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551ae9504f0d7e8c28000048/avatar',
            'company' => 'Clarify, Inc',
            'bio' => 'Keith Casey currently serves as Director of Product for Clarify working to make APIs easier, more consistent, and help solve real world problems. Previously, as a developer evangelist at Twilio, he worked to get good technology into the hands of good people to do great things. In his spare time, he works to build and support the Austin technology community, blogs occasionally at CaseySoftware.com and is completely fascinated by monkeys. Keith is also the author of ["A Practical Approach to API Design" from Leanpub](https://leanpub.com/restful-api-design).',
        ],
//        'bradley-holt' => [
//            'code' => 'bradley-holt',
//            'name' => 'Bradley Holt',
//            'location' => 'Burlington, Vermont',
//            'github' => 'bradley-holt',
//            'twitter' => 'BradleyHolt',
//            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b0f1c4f0d7e8c28000099/avatar',
//            'company' => 'IBM Cloudant',
//            'bio' => 'Bradley Holt is a Developer Advocate with [IBM Cloudant](https://cloudant.com/], a globally distributed data layer for web and mobile applications. He is the author of several publications including [Building a Hypermedia API in CouchDB](http://www.phparch.com/magazine/2012-2/november/) (php[architect]], [PHP 5.4 Cheat Sheet](http://refcardz.dzone.com/refcardz/php-54-scalable) (DZone Refcardz], [Scaling CouchDB](http://shop.oreilly.com/product/0636920018407.do) (O\'Reilly Media) and [Writing and Querying MapReduce Views in CouchDB](http://shop.oreilly.com/product/0636920018247.do) (O\'Reilly Media). He has spoken at numerous conferences including ZendCon, OSCON and the jQuery Conference. Bradley is a Code for America Brigade Captain with [Code for BTV](http://codeforbtv.org/) in Burlington, Vermont and has been a co-organizer of [Vermont Code Camp](http://vtcodecamp.org/) and the [Northeast PHP Conference](http://www.northeastphp.org/).',
//        ],
        'jeremy-mikola' => [
            'code' => 'jeremy-mikola',
            'name' => 'Jeremy Mikola',
            'location' => 'Hoboken, NJ',
            'github' => 'jmikola',
            'twitter' => 'jmikola',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b3779ae44cd0dd300009a/avatar',
            'company' => 'MongoDB',
            'bio' => 'Jeremy Mikola is a software engineer at MongoDB\'s NYC office. As a member of the driver and evangelism team, he helps develop the PHP driver and contributes to various OSS projects, such as Doctrine ODM and React PHP. Jeremy lives in Hoboken, NJ and is known to enjoy a good sandwich.',
        ],
        'benji-schwartz-gilbert' => [
            'code' => 'benji-schwartz-gilbert',
            'name' => 'Benji Schwartz-Gilbert',
            'location' => 'Seattle, WA',
            'github' => '',
            'twitter' => '',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b94ff84e600d55500001f/avatar',
            'company' => 'Tableau Software Inc.',
            'bio' => 'Benji is currently a Dev Manager in Business Systems at Tableau Software Inc. He and his team build and maintain the online payment, eCommerce, and cloud integration systems for the company.',
        ],
        'sara-golemon' => [
            'code' => 'sara-golemon',
            'name' => 'Sara Golemon',
            'location' => '',
            'github' => '',
            'twitter' => 'SaraMG',
            'avatar' => 'img/avatars/sara-golemon.jpg',
            'company' => 'Facebook',
            'bio' => <<<BIO
Sara Golemon is a long standing contributor to the PHP runtime, the Open Source maintainer of
<a href="http://hhvm.com/" target="_blank">HHVM</a>, and the author of
<a href="http://www.amazon.com/Extending-Embedding-PHP-Sara-Golemon/dp/067232704X" target="_blank">Extending and
Embedding PHP</a>.
BIO
        ],
        'sara-golemon' => [
            'code' => 'sara-golemon',
            'name' => 'Sara Golemon',
            'location' => '',
            'github' => '',
            'twitter' => 'SaraMG',
            'avatar' => 'img/avatars/sara-golemon.jpg',
            'company' => 'Facebook',
            'bio' => <<<BIO
Sara Golemon is a long standing contributor to the PHP runtime, the Open Source maintainer of
<a href="http://hhvm.com/" target="_blank">HHVM</a>, and the author of
<a href="http://www.amazon.com/Extending-Embedding-PHP-Sara-Golemon/dp/067232704X" target="_blank">Extending and
Embedding PHP</a>.
BIO
        ],
        'davey-shafik' => [
            'code' => 'davey-shafik',
            'name' => 'Davey Shafik',
            'location' => '',
            'github' => '',
            'twitter' => 'dshafik',
            'avatar' => 'img/avatars/davey-shafik.jpg',
            'company' => 'Engine Yard',
            'bio' => <<<BIO
Davey Shafik is a full-time developer with over 14 years of experience in PHP and related technologies. He is a
Community Engineer at Engine Yard and has written three books, numerous articles, and spoken at conferences the world
over. He is best known for his books, the <a href="http://zceguide.com/" target="_blank">Zend PHP Certification Study
Guide</a> and <a href="https://learnable.com/books/php-master-write-cutting-edge-code" target="_blank">PHP Master:
Write Cutting Edge Code</a>, and as the creator of <a href="http://php.net/phar" target="_blank">PHP Archive (PHAR)</a>
for PHP 5.3.

Davey is passionate about improving the tech community. He co-organizes the <a href="http://mhprompt.org/"
target="_blank">Prompt</a> initiative (<a href="http://mhprompt.org" target="_blank">mhprompt.org</a>), dedicated to
lifting the stigma surrounding mental health discussions, and has worked with PHPWomen since its inception.
BIO
        ],
	],
	'talks' => [
		'anatomy-of-a-type-system' => [
			'title' => 'Anatomy Of A Type System',
			'code' => 'anatomy-of-a-type-system',
			'tags' => ['types', 'php7', 'theory'],
			'speaker' => 'anthony-ferrara',
			'type' => 'session',
            'room' => 'main',
            'time' => new DateTime('2015-09-12T14:30:00+07:00'),
            'length' => '50',
			'abstract' => <<<'PROPOSAL'
PHP 7 is coming quickly. One of the major features that it brings with it is the ability to use scalar typing. Are you
ready for it? Join me as we take a tour through PHP 7&rsquo;s type system from end to end. Don&rsquo;t know what a type
is? Come and find out! Are you a seasoned type user? Come learn how to leverage the new options! Confused about weak vs.
strict types? We&rsquo;ll cover concept, theory and practical details of the type system while exploring how PHP&rsquo;s
type system compares to other languages.
PROPOSAL
		],
        'open-source-love' => [
            'title' => 'Open Source, Love, and Social Responsibility',
            'code' => 'open-source-love',
            'tags' => ['open source', 'community'],
            'speaker' => 'davey-shafik',
            'type' => 'keynote',
            'room' => 'main',
            'time' => new DateTime('2015-09-11T17:45:00+07:00'),
            'length' => '45',
            'abstract' => <<<'PROPOSAL'
This talk looks at the responsibility, we, the Open Source community, have to make things better. How we can use our
skills to make fundamental, meaningful change to the world around us.

We will explore the motivations around why we do what we do, and look at what the community and others have done for
us &mdash; and why it's important to do something with it.
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
