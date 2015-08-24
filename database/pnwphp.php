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
            'company' => 'google',
			'avatar' => 'img/avatars/anthony-ferrara.jpg',
			'bio' => <<<BIO
Anthony Ferrara is the Director of Engineering at Grovo. He
specializes in Object Oriented Design, Application Architecture, Web
Application Security and PHP Internals. He is a contributor to
multiple Open Source projects, as well as the PHP community as a
whole. You can follow his blog at <a href="http://blog.ircmaxell.com">blog.ircmaxell.com</a> or on Twitter at
<a href="http://twitter.com/ircmaxell">@ircmaxell</a>.
BIO
		],
		'josh-holmes' => [
			'name' => 'Josh Holmes',
			'code' => 'josh-holmes',
			'location' => 'Seattle, WA',
			'twitter' => 'joshholmes',
            'company' => 'microsoft',
			'avatar' => 'img/avatars/josh-holmes.jpg',
			'bio' => <<<BIO
Passionate soul who gets his kicks solving problems with deep fried awesomeness. Currently employed by Microsoft.
BIO
		],
        'margaret-staples' => [
            'code' => 'margaret-staples',
            'name' => 'Margaret Staples',
            'location' => 'Port Angeles, WA',
            'twitter' => 'dead_lugosi',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54e8f26b53d328245f000007/avatar_square',
            'company' => null,
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
            'twitter' => 'beausimensen',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54ea4657a782185269000008/avatar_square',
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
            'twitter' => 'grmpyprogrammer',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb66c2db6429e6f4000022/avatar_square',
            'company' => 'roave',
            'bio' => 'Chris Hartjes has been building web applications of all shapes and sizes since 1998, ranging from catalogs of CD compilations for professional DJ\'s to portal pages for large US cable television providers. Chris gives back to the programming communities that have helped him by mentoring, speaking at conferences, and by co-organizing TrueNorth PHP. As the author of two books on writing testable PHP code and using testing tools, he believes that testing and automation are secret weapons that organizations can use to deliver high-quality applications quickly. He works from his basement office in the snowy wilds of Canada. He can also be heard semi-regularly on the /dev/hell podcast with Ed Finkler',
        ],
        'adam-culp' => [
            'code' => 'adam-culp',
            'name' => 'Adam Culp',
            'location' => 'Boca Raton, FL',
            'twitter' => 'adamculp',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb71e1db6429d9ff000002/avatar_square',
            'company' => null,
            'bio' => 'Adam Culp (@AdamCulp) author of "Refactoring 101" and consultant at Zend Technologies is passionate about developing with PHP and contributes to many open source projects.    He organizes the SunshinePHP Developer Conference and South Florida PHP Users Group (SoFloPHP) where he enjoys helping others write good code, implement standards, refactor efficiently, and incorporate unit and functional testing into their projects.    He is a Zend Certified PHP 5.3 Engineer, and holds a seat on the Zend Framework Certification Advisory Board.    When he is not coding or contributing to various developer communities, he can be found hiking around the United States National Parks, teaching judo, or long(ultra) distance running.',
        ],
        'dave-stokes' => [
            'code' => 'dave-stokes',
            'name' => 'Dave Stokes',
            'location' => 'Trophy Club, Texas',
            'twitter' => 'stoker',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb758f4f630c0b68000012/avatar_square',
            'company' => 'mysql',
            'bio' => 'Dave Stokes is a MySQL Community Manager for Oracle and has been using PHP & MySQL since they both became available.',
        ],
        'phil-sturgeon' => [
            'code' => 'phil-sturgeon',
            'name' => 'Phil Sturgeon',
            'location' => 'Brooklyn, NY',
            'twitter' => 'philsturgeon',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54ee8e005fba45a55000000a/avatar_square',
            'company' => null,
            'bio' => 'Founder of PyroCMS, Senior Developer at Ride, Programming Polyglot, PHP-FIG member, and occasionally gets chased by bears.',
        ],
        'yitzchok-willroth' => [
            'code' => 'yitzchok-willroth',
            'name' => 'Yitzchok Willroth',
            'location' => 'Lakewood, New Jersey',
            'twitter' => 'coderabbi',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f095b9f88e3dd21b00000e/avatar_square',
            'company' => null,
            'bio' => 'Yitzchok Willroth is an independent application developer, consultant and coach living in Lakewood, NJ. A start-up vet, dev bootcamp instructor and popular conference speaker, Yitzchok is the organizer of the ShorePHP User Group, co organizer of the NY-PHP User Group, and an active participant in the PHPMentoring Initiative. Passionate about clean code and robust application architecture, he is also a strong proponent of remote teams as a way for organizations to thrive while affording developers a healthy work:life balance.',
        ],
        'michael-babker' => [
            'code' => 'michael-babker',
            'name' => 'Michael Babker',
            'location' => 'United States',
            'twitter' => 'mbabker',
            'avatar' => 'img/avatars/michael-babker.jpg',
            'company' => null,
            'bio' => 'Michael Babker is a multi-talented IT geek working for WebSpark, Inc. He’s been developing in PHP since 2010 working primarily with Symfony and Joomla code. He’s known to be rather opinionated on all matters code and enjoys learning new platforms and taking in the many sights the world has to offer.',
        ],
        'larry-garfield' => [
            'code' => 'larry-garfield',
            'name' => 'Larry Garfield',
            'location' => 'United States',
            'twitter' => 'Crell',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0ae95f88e3d49b100001d/avatar_square',
            'company' => null,
            'bio' => <<<BIO
Larry Garfield has been building web sites since he was a sophomore in high school, which is longer ago than he\'d like
to admit. At Palantir, Larry is a Senior Architect and Community Lead, developing solutions for medium to large cultural
and educational institutions. He also works to represent both Palantir and Drupal in the broader developer community.

Larry is an active Drupal core contributor, including the principle architect of the Drupal 7 database system and the
Drupal 8 Web Services Lead. He is also a member of the Advisory Board of the Drupal Association and the Drupal
representative to the Framework Interoperability Group. Larry holds a Master’s degree in Computer Science from DePaul
University.

Larry is a co-author of "Drupal 7 Module Development" from Packt Publishing. He blogs at both
<a href="http://www.palantir.net/">http://www.palantir.net/</a> and
<a href="http://www.garfieldtech.com/">http://www.garfieldtech.com/</a>.
BIO
        ],
        'jeremy-lindblom' => [
            'code' => 'jeremy-lindblom',
            'name' => 'Jeremy Lindblom',
            'location' => 'Seattle, WA',
            'twitter' => 'jeremeamia',
            'avatar' => 'img/avatars/jeremy-lindblom.jpg',
            'company' => 'aws',
            'bio' => <<<BIO
Jeremy is a Software Engineer at <a href="http://www.mheducation.com">McGraw-Hill Education</a> (and formerly at
<a href="http://aws.amazon.com/">Amazon Web Services</a>), co-author of the <a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP</a>
(<a href="https://twitter.com/awsforphp">@awsforphp</a>), organizer of the <a href="http://pnwphp.com/">Pacific Northwest PHP (PNWPHP)</a> conference,
president of the <a href="http://www.meetup.com/seaphp/">Seattle PHP User Group</a> (<a href="https://twitter.com/seaphp">@seaphp</a>),
voting representative of the <a href="http://guzzlephp.org/">Guzzle</a> project for <a href="http://www.php-fig.org/">PHP-FIG</a>,
member of the Zend Certification Advisory Board for the PHP 5.5 exam, purveyor of <a href="http://phpbard.tumblr.com/">PHP poetry</a>
(<a href="https://twitter.com/phpbard">@phpbard</a>), and a maker of funny faces.
BIO
        ],
        'samantha-quinones' => [
            'code' => 'samantha-quinones',
            'name' => 'Samantha Qui&ntilde;ones',
            'location' => 'Washington D.C.',
            'twitter' => 'ieatkillerbees',
            'avatar' => 'img/avatars/samantha-quinones.jpg',
            'company' => 'aol',
            'bio' => <<<BIO
Samantha Quiñones is a polyglot hacker and systems architecture expert. Over the course of her 17-year career, she has
built software and led teams for some of the largest names in financial services and digital media and is currently a
Principal Software Engineer on the content platform team at AOL. Samantha is an accomplished writer and frequent speaker
at technology conferences, a participant in the White House Data Jam on STEM Workforce Quality, Flow, and Diversity and
has been recognized by the Huffington Post as one of the top Latinas in American Media.
BIO
        ],
        'cal-evans' => [
            'code' => 'cal-evans',
            'name' => 'Cal Evans',
            'location' => 'Nashville, TN',
            'twitter' => 'CalEvans',
            'avatar' => 'img/avatars/cal-evans.jpg',
            'company' => null,
            'bio' => <<<BIO
Many moons ago, at the tender age of 14, Cal touched his first computer. (We're using the term "computer" loosely here,
it was a TRS-80 Model 1) Since then his life has never been the same. He graduated from TRS-80s to Commodores and
eventually to IBM PC's.

For the past 15 years Cal has worked with PHP and MySQL on Linux, OSX, and Windows. He has built a variety of projects
ranging in size from simple web pages to multi-million dollar web applications. When not banging his head on his monitor,
attempting a blood sacrifice to get a particular piece of code working, he enjoys building and managing development teams
using his widely imitated but never patented management style of "management by wandering around".

These days, when not working with PHP, Cal can be found working on a variety of projects like Nomad PHP. He speaks at
conferences around the world on topics ranging from technical talks to motivational talks for developers. If you happen
to meet him at a conference, don't be afraid to buy him a shot of Bourbon.

Cal is based in Nashville, TN, where he is happily married to wife 1.31,
<a href="http://kathyevans.biz/" target="_blank">the lovely and talented Kathy</a>. Together they have 2 wonderful kids
who were both smart enough not to pursue a job in IT.</p>
BIO
        ],
        'amber-matz' => [
            'code' => 'amber-matz',
            'name' => 'Amber Matz',
            'location' => 'Portland, OR',
            'twitter' => 'amberhimesmatz',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0e5666500a3a8e4000006/avatar_square',
            'company' => null,
            'bio' => <<<BIO
Amber Matz creates and manages educational content for Drupalize.Me. Amber has over 14 years of experience as a full-stack web developer. She has built PHP/MySQL applications and Drupal sites for small businesses, educational institutions, and major corporations.

Amber enjoys sharing her knowledge with others and jumps at the opportunity to speak at local user groups and conferences on a variety of technical topics for beginning to advanced-level audiences. She is a regular speaker at the Portland Drupal User Group and recently presented at DrupalCon North America, Devsigner — a conference for designers and developers in Portland, and will present at PNWPHP in Seattle in the Fall of 2015. She also regularly participates in a code mentoring group here in Portland.

One of Amber's primary responsibilities is creating Drupal tutorials for Drupalize.Me. You can find her training materials on Webform, Mapping with Leaflet, Panels, Getting Started with Responsive Web Design and others in the Drupalize.Me Library. She also contributes regularly to the Drupalize.Me blog, writing on topics related to Drupal 8, Object-oriented PHP, the Drupal Community, and upcoming releases to Drupalize.Me's training library. She is also a regular hostess of the Drupalize.Me podcast, a bi-weekly show featuring guests from the Drupal community and beyond.

Amber lives out in the 'burbs of Portland, Oregon with her husband and kitty cat and enjoys a variety of hobbies including crocheting and gardening.
BIO
        ],
        'robert-mcfrazier' => [
            'code' => 'robert-mcfrazier',
            'name' => 'Robert McFrazier',
            'location' => 'Snohomish, WA',
            'twitter' => 'rmcfrazier',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f2740e7ae7c78153000007/avatar_square',
            'company' => null,
            'bio' => 'I have been in the software industry in the Seattle area for over 15 years in many different roles including LAMP engineer, software developer, technical trainer, architect, technical support, and manager. I enjoy learning new things and working on strong teams. I spend my free time with my wife and my son, trying to stay dry in the pacific northwest. I spend all day with my head in the clouds and containers.',
        ],
        'joshua-warren' => [
            'code' => 'joshua-warren',
            'name' => 'Joshua Warren',
            'location' => 'Dallas, Texas',
            'twitter' => 'JoshuaSWarren',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/550f5ca604f84134dd00000c/avatar_square',
            'company' => 'creatuity',
            'bio' => 'Joshua Warren has been developing web applications with PHP since 1999. He is the Founder & CEO of Creatuity in Dallas, Texas, where he works on eCommerce projects with Magento and the Yii framework. He founded Creatuity in 2008 as a development firm and has grown it to a team of over 25, including 14 developers working across 2 continents. When Joshua isn\'t developing, he enjoys traveling to new countries to try local food and beer while meeting developers at local meetups as well as connecting with developers around the world via Twitter.',
        ],
        'gemma-anible' => [
            'code' => 'gemma-anible',
            'name' => 'Gemma Anible',
            'location' => 'Albuquerque, NM',
            'twitter' => 'ellotheth',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55102d8a46ab610ef2000004/avatar_square',
            'company' => null,
            'bio' => 'Gemma is a software engineer, video gamer and recovering classical violinist who has been developing PHP web applications since before PHP5 (and applications in C, .NET and Delphi since before then). She is passionate about using pragmatic processes and tooling to support developers of all types and skillsets, and her level of excitement over learning new dev technology tends to correlate strongly with her level of caffeination. Gemma and her husband live with their two dogs in New Mexico, where they climb volcanoes for fun.',
        ],
        'ben-lobaugh' => [
            'code' => 'ben-lobaugh',
            'name' => 'Ben Lobaugh',
            'location' => 'Seattle, WA',
            'twitter' => 'benlobaugh',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55171c8589bee6fb3d000005/avatar_square',
            'company' => null,
            'bio' => 'Ben Lobaugh has been an avid open source enthusiast for over 15 years. During that time he has work on all sort of projects from mom & pop shops to multinational corporations. In his downtime Ben can be found cruising Puget Sound with on his beautiful sailboat Zippey or play with his dog Bella in the park.',
        ],
        'luke-kysow' => [
            'code' => 'luke-kysow',
            'name' => 'Luke Kysow',
            'location' => 'Vancouver, Canada',
            'twitter' => 'lkysow',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55173d5389bee61bf600001a/avatar_square',
            'company' => null,
            'bio' => 'Luke is a Software Engineer on the Platform Team at <a href="https://hootsuite.com/">Hootsuite</a> in Vancouver and co-organizer of Vancouver’s <a href="http://www.meetup.com/Vancouver-PHP/">PHP Meetup</a>. He\'s working on splitting Hootsuite\'s PHP monolith into distributed microservices so they can scale even further. When he\'s not at his laptop you can probably find Luke climbing up, or falling off, a cliff somewhere.',
        ],
        'ben-marks' => [
            'code' => 'ben-marks',
            'name' => 'Ben Marks',
            'location' => 'Isle of Palms, SC',
            'twitter' => 'benmarks',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551acdfb4f0d7e8c2800001f/avatar_square',
            'company' => 'magento',
            'bio' => 'Ben has been developing with, teaching, and talking about Magento for seven years. He enjoys helping merchants and developers solve the challenges of commerce as much as he enjoys helping to improve Magento for everyone\'s benefit.',
        ],
        'keith-casey' => [
            'code' => 'keith-casey',
            'name' => 'Keith Casey',
            'location' => 'United States',
            'twitter' => 'CaseySoftware',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551ae9504f0d7e8c28000048/avatar_square',
            'company' => 'clarify',
            'bio' => 'Keith Casey currently serves as Director of Product for Clarify working to make APIs easier, more consistent, and help solve real world problems. Previously, as a developer evangelist at Twilio, he worked to get good technology into the hands of good people to do great things. In his spare time, he works to build and support the Austin technology community, blogs occasionally at CaseySoftware.com and is completely fascinated by monkeys. Keith is also the author of <a href="https://leanpub.com/restful-api-design">A Practical Approach to API Design</a> from Leanpub.',
        ],
        'jeremy-mikola' => [
            'code' => 'jeremy-mikola',
            'name' => 'Jeremy Mikola',
            'location' => 'Hoboken, NJ',
            'twitter' => 'jmikola',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b3779ae44cd0dd300009a/avatar_square',
            'company' => 'mongodb',
            'bio' => 'Jeremy Mikola is a software engineer at MongoDB\'s NYC office. As a member of the driver and evangelism team, he helps develop the PHP driver and contributes to various OSS projects, such as Doctrine ODM and React PHP. Jeremy lives in Hoboken, NJ and is known to enjoy a good sandwich.',
        ],
        'benji-schwartz-gilbert' => [
            'code' => 'benji-schwartz-gilbert',
            'name' => 'Benji Schwartz-Gilbert',
            'location' => 'Seattle, WA',
            'twitter' => '',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b94ff84e600d55500001f/avatar_square',
            'company' => 'tableau',
            'bio' => 'Benji is currently a Dev Manager in Business Systems at Tableau Software Inc. He and his team build and maintain the online payment, eCommerce, and cloud integration systems for the company.',
        ],
        'sara-golemon' => [
            'code' => 'sara-golemon',
            'name' => 'Sara Golemon',
            'location' => '',
            'twitter' => 'SaraMG',
            'avatar' => 'img/avatars/sara-golemon.jpg',
            'company' => 'facebook',
            'bio' => <<<BIO
Sara Golemon is a Compiler Nerd and Open Source Fanatic. She's
made many contributions to both PHP and HHVM as well as a host of PECL
extensions and other projects. Sara is the author of "Extending and
Embedding PHP", large parts of the PHP documentation, numerous
tutorials on PHP and HHVM internals, and helped produce the official
PHP language specification.
<a href="https://twitter.com/search?q=%23ILookLikeAnEngineer&src=tyah" target="_blank">#iLookLikeAnEngineer</a>
BIO
        ],
        'eryn-oneil' => [
            'code' => 'eryn-oneil',
            'name' => 'Eryn O\'Neil',
            'location' => 'Minneapolis, MN',
            'twitter' => 'eryno',
            'avatar' => 'img/avatars/eryn-oneil.jpg',
            'company' => null,
            'bio' => <<<BIO
Eryn O&rsquo;Neil is a web developer and technical lead at Clockwork Active Media in Minneapolis, MN. As part of an
interactive agency, she has worked on everything from e-commerce to online promotions to creating and maintaining an
internal framework and CMS. Her philosophy is to build software by placing humans first: both the people who will use it
and the developers who will build it alongside you (and maintain it afterwards). Based in Minneapolis, MN, Eryn spends
most of her free time swing and blues dancing, rock climbing, and wishing it weren&rsquo;t snowing.
BIO
        ],
        'robert-purcell' => [
            'code' => 'robert-purcell',
            'name' => 'Robert Purcell',
            'location' => '',
            'twitter' => '',
            'avatar' => 'img/avatars/robert-purcell.png',
            'company' => 'nexcess',
            'bio' => <<<BIO
Programming from the age of eight (BASIC), Robert is now Sr. Software Engineer and head of the internal development
team at Nexcess.net working in PHP and javascript all day. Based in Michigan, husband, and father of three with the dad
jokes to prove it.
BIO
        ],
        'jeff-barr' => [
            'code' => 'jeff-barr',
            'name' => 'Jeff Barr',
            'location' => 'Seattle, WA',
            'twitter' => 'jeffbarr',
            'avatar' => 'img/avatars/jeff-barr.jpg',
            'company' => 'aws',
            'bio' => <<<BIO
Chief Evangelist for the Amazon Web Services (follow me for AWS updates and chatter). Father of 5, grandfather of 2.
Author. UW MCDM Graduate.
BIO
        ],
        'jonathan-weiss' => [
            'code' => 'jonathan-weiss',
            'name' => 'Jonathan Weiss',
            'location' => 'Berlin, Germany',
            'twitter' => 'jweiss',
            'avatar' => 'https://pnwphp2015.busyconf.com/speakers/54feb7ce43e08249c200001e/avatar_square?t=1425979342',
            'company' => 'aws',
            'bio' => <<<BIO
Jonathan Weiss is leading the AWS OpsWorks team in Berlin. Before building a company and ending up selling it to Amazon,
he was a Ruby consultant. Running an Amazon Web Service is the perfect opportunity for Jonathan to experience first hand
the perils of large distributed applications and learn every day.
BIO
        ],
        'michael-dowling' => [
            'code' => 'michael-dowling',
            'name' => 'Michael Dowling',
            'location' => 'Seattle, WA',
            'twitter' => 'mtdowling',
            'avatar' => 'img/avatars/michael-dowling.jpg',
            'company' => 'aws',
            'bio' => <<<BIO
Michael Dowling is a software development engineer at Amazon Web Services
and the creator of Guzzle, a PHP HTTP client. At AWS, Michael works on the
AWS SDK for PHP, the AWS CLI, and Boto (the AWS SDK for Python). In his
spare time, Michael enjoys fighting with the Rust compiler and playing
around with functional programming in Clojure.
BIO
        ],
        'joseph-fontes' => [
            'code' => 'joseph-fontes',
            'name' => 'Joseph Fontes',
            'location' => 'Seattle, WA',
            'twitter' => 'joedangerfontes',
            'avatar' => 'img/avatars/joseph-fontes.jpg',
            'company' => 'aws',
            'bio' => <<<BIO
Joe Fontes is a Solutions Architect with Amazon Web Services in Seattle. Joe has an extensive history working with
infrastructure as a Systems and Network Architect. An open source evangelist, educator, and technologist, Joe has
designed and implemented infrastructure across numerous industries.
BIO
        ],
        'davey-shafik' => [
            'code' => 'davey-shafik',
            'name' => 'Davey Shafik',
            'location' => '',
            'twitter' => 'dshafik',
            'avatar' => 'img/avatars/davey-shafik.jpg',
            'company' => 'engine-yard',
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
        'ed-finkler' => [
            'code' => 'ed-finkler',
            'name' => 'Ed Finkler',
            'location' => '',
            'twitter' => 'funkatron',
            'avatar' => 'img/avatars/ed-finkler.jpg',
            'company' => 'graph-story',
            'bio' => <<<BIO
Ed Finkler, also known as <a href="https://twitter.com/funkatron" target="_blank">Funkatron</a>, started making web
sites before browsers had frames. He does front-end and server-side work in Python, PHP, and JavaScript.

He served as web lead and security researcher at <a href="http://www.cerias.purdue.edu/" target="_blank">The Center for
Education and Research in Information Assurance and Security (CERIAS) at Purdue University</a> for 9 years, and he's an
partner emeritus of <a href="http://fictivekin.com/" target="_blank">Fictive Kin</a>. Along with Chris Hartjes, Ed is
co-host of the <a href="http://devhell.info/" target="_blank">Development Hell podcast</a>.

Ed's current passion is raising mental health awareness in the tech community with his
<a href="http://funkatron.com/osmi" target="_blank">Open Sourcing Mental Illness</a> speaking campaign. He is part of
<a href="http://prompt.engineyard.com/" target="_blank">Engine Yard's Prompt</a> campaign.</p><p>Ed writes at
<a href="http://funkatron.com" target="_blank">funkatron.com</a>.
BIO
        ],
	],
	'talks' => [
        'wax-on-wax-off-code-kata-dojo' => [
            'title' => 'Wax On, Wax Off: Code Kata Dojo',
            'reviewId' => '14998',
            'code' => 'wax-on-wax-off-code-kata-dojo',
            'tags' => ['kata', 'dojo'],
            'speaker' => 'yitzchok-willroth',
            'type' => 'workshop',
            'description' => <<<DESC
As software developers we tend to practice our craft in the way of doctors and lawyers rather than the way of athletes
and musicians, failing to recognize the impact the trade offs and half measures dictated by many projects have on our
growth as craftspeople. Code katas - deliberate practice, free of the pressures of "getting things done" - are an
excellent way to strengthen our mental "muscle memory" and grow our craft. In this three hour workshop, we will examine
the case for regular, deliberate practice and engage in guided, collaborative, hands-on learning designed to give you
the skills to incorporate code katas and deliberate practice into your training regimen.
DESC
        ],
		'anatomy-of-a-type-system' => [
			'title' => 'Anatomy Of A Type System',
			'code' => 'anatomy-of-a-type-system',
            'reviewId' => '14934',
			'tags' => ['types', 'php7', 'theory'],
			'speaker' => 'anthony-ferrara',
			'type' => 'session',
			'description' => <<<DESC
PHP 7 is coming quickly. One of the major features that it brings with it is the ability to use scalar typing. Are you
ready for it? Join me as we take a tour through PHP 7&rsquo;s type system from end to end. Don&rsquo;t know what a type
is? Come and find out! Are you a seasoned type user? Come learn how to leverage the new options! Confused about weak vs.
strict types? We&rsquo;ll cover concept, theory and practical details of the type system while exploring how PHP&rsquo;s
type system compares to other languages.
DESC
		],
		'down-the-rabbit-hole' => [
			'title' => 'Down the Rabbit Hole: Combining Career & Community',
			'code' => 'down-the-rabbit-hole',
            'reviewId' => '14943',
			'tags' => ['community', 'career-growth'],
			'speaker' => 'cal-evans',
			'type' => 'keynote',
			'description' => <<<DESC
The common mantra is "Community Works", but does it? How does burning vacation days to speak at a conference "work"?
How does staying up until the wee hours of the morning working on a project, just to turn around and go work your day
job "work"? Exactly how does community pay the bills each month? Let me show you how it works.

Let's jog through my career as a programmer. Along the way, we will take a look at how community has not only affected
my career in a positive manner; it has been a JATO strapped to my career. I'm just a programmer, not even a great one.
If community can help my career, it can help anyone's.
DESC
		],
		'stronger-than-fear' => [
			'title' => 'Stronger Than Fear: Mental Health in the Developer Community',
			'code' => 'stronger-than-fear',
            'reviewId' => '14924',
			'tags' => ['mental-health'],
			'speaker' => 'ed-finkler',
			'type' => 'keynote',
			'description' => <<<DESC
Mental disorders are the largest contributor to disease burden in North America, but the developer community and those
who employ us are afraid to face the problem head-on. In this keynote, we'll examine the state of mental health
awareness in the developer workplace, why most developers feel it isn't safe to talk about mental health, and what we
can do to change the culture and save lives.
DESC
		],
		'cloud-is-the-new-normal' => [
			'title' => 'Cloud is the New Normal',
			'code' => 'cloud-is-the-new-normal',
            'reviewId' => '14917',
			'tags' => ['cloud', 'aws', 'architecture'],
			'speaker' => 'jeff-barr',
			'type' => 'keynote',
			'description' => <<<DESC
Every PHP developer needs to know about cloud computing! With roots in simple yet powerful foundational services for
compute and storage, the cloud has grown to become one of the most dynamic and interesting technologies of our day.
Traditionally, infrastructure was that noisy, boring stuff in the dark room that someone else took care of for you.
With the cloud, infrastructure is front and center, and much easier to use. With a couple of clicks (or API calls) you
can spin up the resources you need, configure them in minutes, and use them to build, run, and scale your application.

This talk is designed to give you a whirlwind tour of the cloud that is simultaneously big-picture and detailed. We'll
make four scenic steps (all backed by demos and sample code) along the way. First, we'll look at the cloud at a better
host for your existing PHP apps, spinning up an EC2 server and getting a database-powered app running. Then we'll make
it a bit more sophisticated, with some automated scaling, load balancing, and a more sophisticated database solution.
From there we will look a higher-level tools like Elastic Beanstalk and CloudFormation that will add structure and
automation to your development, testing, and hosting discipline. Finally, we'll hang out with the native cloud APIs,
and look at how to create applications that make use of specific cloud services such as DynamoDB.
DESC
		],
        'battled-hardened-laravel-lessons-in-scale' => [
            'code' => 'battled-hardened-laravel-lessons-in-scale',
            'reviewId' => '14920',
            'title' => 'Battled-hardened Laravel: Lessons in Scale',
            'tags' => ['laravel', 'scaling', 'aws', 'cloud', 'framework'],
            'speaker' => 'benji-schwartz-gilbert',
            'type' => 'session',
            'description' => <<<DESC
In this talk we'll cover how Tableau is using Laravel to deliver some of it's critical online infrastructure, why we
chose the framework, and lessons we've learned deploying it at scale. We'll also cover how we develop, test, and deploy
the framework from the first feature branch to production sign off.
DESC
        ],
        'from-dev-to-dev-management' => [
            'code' => 'from-dev-to-dev-management',
            'reviewId' => '14916',
            'title' => 'From Dev to Dev Management',
            'tags' => ['leadership', 'management', 'career-growth'],
            'speaker' => 'robert-purcell',
            'type' => 'session',
            'description' => <<<DESC
One career advancement path common for a developer is into management. One thing that's not always common for a
developer, though, is managerial skills. Let's discuss what it takes to be a manager, the management of other
developers, and the unique challenges of a programmer acting as manager.
DESC
        ],
        'symfony-create-mmorpg' => [
            'code' => 'symfony-create-mmorpg',
            'reviewId' => '14930',
            'title' => 'How I Used Symfony to Create an MMORPG',
            'tags' => ['symfony', 'twig', 'doctrine', 'framework'],
            'speaker' => 'margaret-staples',
            'type' => 'session',
            'description' => <<<DESC
Ride along on a tour of my latest adventure! I will unpack my process for turning design ideas into game mechanics,
talk about the tools that were used (including Symfony and other open source goodies like Twig and Doctrine), examine
major roadblocks and how they were overcome, give a postmortem on key implementation decisions, and share the highlights
of what I learned along the way.
DESC
        ],
        'eating-elephpants' => [
            'code' => 'eating-elephpants',
            'reviewId' => '14925',
            'title' => 'Eating ElePHPants',
            'tags' => ['drupal', 'modernize', 'composer'],
            'speaker' => 'larry-garfield',
            'type' => 'keynote',
            'description' => <<<DESC
"Big ships turn slowly", the saying goes. That's true nautically and in software. Software grows over time, and the
bigger it gets the harder it is to make significant changes. When those changes are not just technical but cultural the
task becomes even harder.

But harder doesn't have to mean impossible. If Drupal can modernize itself from a PHP 4 procedural application to a PHP
5.5+ object-oriented platform, you can do the same with your project. It just requires being pragmatic.

No matter how old your code base, there is still hope! Let's see what it takes to modernize a legacy code base, and how
to build toward the system you want to have. Refactoring legacy code is just like eating an elePHPant... you do it one
bite at a time.
DESC
        ],
        'never-stop-pushing-strategies-and-tools-for-delivering-continuously' => [
            'code' => 'never-stop-pushing-strategies-and-tools-for-delivering-continuously',
            'reviewId' => '14941',
            'title' => 'Never Stop Pushing: Strategies and Tools for Delivering Continuously',
            'tags' => ['continuous-delivery', 'continuous-integration', 'testing', 'deployment'],
            'speaker' => 'benji-schwartz-gilbert',
            'type' => 'session',
            'description' => <<<DESC
Getting your features integrated, tested, and out the door for a single application can be a vicious cycle. Your testers
are complaining the feature isn't available in their environment, your MySQL box just crashed in production, and you
still have bugs to fix for your next release. Now what do you do when you find yourself maintaining <i>2 or 3 dozen</i>?
(Without losing your sanity)

<b>We've got you covered.</b>

We'll go over some of the tools and strategies for getting your PHP (and other) applications easily and automatically
continuously deployed. We'll cover how to automate testing, integrating changes, deploying, failover, and rolling back.
You'll come away from this talk with a workflow for assembling a leaner and meaner delivery cycle for reliable and
repeatable development.
DESC
        ],
        'open-source-love' => [
            'title' => 'Open Source, Love, and Social Responsibility',
            'code' => 'open-source-love',
            'reviewId' => '14910',
            'tags' => ['open-source', 'community'],
            'speaker' => 'davey-shafik',
            'type' => 'keynote',
            'description' => <<<DESC
This talk looks at the responsibility, we, the Open Source community, have to make things better. How we can use our
skills to make fundamental, meaningful change to the world around us.

We will explore the motivations around why we do what we do, and look at what the community and others have done for
us &mdash; and why it's important to do something with it.
DESC
        ],
        'project-triage' => [
            'title' => 'Project Triage: What to Do When It All Hits The Fan',
            'code' => 'project-triage',
            'reviewId' => '14918',
            'tags' => ['project-management'],
            'speaker' => 'eryn-oneil',
            'type' => 'session',
            'description' => <<<DESC
&ldquo;Hope for the best and plan for the worst.&rdquo; We spend a lot of time talking about best practices: the ways we
should run our projects and write our software so that everything turns out as well as possible. But when you add human
beings to the mix &mdash; whether they&rsquo;re coworkers, clients, or, well, you and I &mdash; something will
eventually go wrong.

Using case studies from the interactive agency world (where no two clients are ever the same), we&rsquo;ll talk about
methods for triage, what to do when you sense a project is on shaky ground, and ways to ensure everyone gets to the
other side in one piece.
DESC
        ],
        'sara-golemon-keynote' => [
            'title' => 'Stronger Than Ever: Into the Future, Together',
            'code' => 'sara-golemon-keynote',
            'reviewId' => '14933',
            'tags' => [],
            'speaker' => 'sara-golemon',
            'type' => 'keynote',
            'description' => <<<DESC
For 20 years, PHP has emerged as a quickly, and sometimes
haphazardly evolving language and runtime responding to the needs of
the nascent "world wide web" which was growing up alongside it. Other
implementations have appeared and fallen away over time, but one has
made a real lasting impact, not just on the ecosystem, but on the
language and reference implementation themselves. I'll take you on a
journey through the history of "the other PHPs", what makes
reimplementing the double-claw so hard, how competition is good, and
why the next five years are poised to be some of PHP's best.
DESC
        ],
        'async-php-with-react' => [
            'title' => 'Async PHP with ReactPHP',
            'code' => 'async-php-with-react',
            'reviewId' => '14936',
            'tags' => ['async', 'reactphp'],
            'speaker' => 'jeremy-mikola',
            'type' => 'session',
            'description' => <<<DESC
Event-driven programing is a familiar and useful tool for crafting client/server apps and asynchronous libraries. Akin to Node.js or Python's Twisted, React brings PHP up to speed with all of the necessary pieces in a well-packaged framework. This session will introduce the concept of event loops, non-blocking IO, and async programming in PHP, and explore ways it can serve in your technology stack.
DESC
        ],
        'from-procedural-to-object-oriented-php-in-drupal' => [
            'code' => 'from-procedural-to-object-oriented-php-in-drupal',
            'reviewId' => '14915',
            'title' => 'From Procedural to Object-Oriented PHP in Drupal',
            'speaker' => 'amber-matz',
            'tags' => ['drupal', 'oop'],
            'type' => 'session',
            'description' => 'One of the central changes in Drupal 8 is a shift to an object-oriented architecture. This represents a significant change in how module developers will utilize PHP in the context of Drupal. In the first part of this presentation, I will provide an overview of object-oriented PHP, why it was introduced into the Drupal 8 code base, how it differs from procedural programming, and the major object-oriented PHP concepts you\'ll find in Drupal 8 core.

Following this overview, I\'ll demonstrate two tools, one a Drupal module and the other a Symfony console application, both designed to help you get up to speed with the Drupal 8 systems and APIs.

By the end of this presentation, you\'ll be armed with tools, resources, concepts, and terminology that will enable you to boldly jump into Drupal 8 module development.

Who will benefit from this presentation?
- Developers who are familiar with Drupal 7 and are curious about the OO-PHP changes in Drupal 8
- Developers who are familiar with Drupal but are just starting to learn OO-PHP
- Developers who are not primarily Drupal developers, but are familiar with OO-PHP and are curious about the shift to an object-oriented architecture in Drupal 8',
        ],
        'building-your-api-utility-belt' => [
            'code' => 'building-your-api-utility-belt',
            'reviewId' => '14938',
            'title' => 'Building your API Utility Belt',
            'speaker' => 'keith-casey',
            'tags' => ['api', 'testing', 'debugging', 'tools'],
            'type' => 'session',
            'description' => 'No matter the situation, Batman always had the perfect tool on hand. It didn\'t matter how rare, bizarre, or unique the situation was, he was ready to save the day. Unfortunately, in software development, we don\'t have a utility belt. At best, our tools are scripts we\'ve cobbled together over the years that solve particular problems but leave us stuck more often than not. In this talk, we\'ll work to change that. I\'ll introduce you to seven tools that I find vital to my everyday API usage and development.',
        ],
        'magento-2-modernizing-an-open-source-ecommerce-powerhouse' => [
            'code' => 'magento-2-modernizing-an-open-source-ecommerce-powerhouse',
            'reviewId' => '14993',
            'title' => 'Magento 2 > 1: Modernizing an Open Source eCommerce Powerhouse',
            'speaker' => 'ben-marks',
            'tags' => ['magento', 'ecommerce', 'framework'],
            'type' => 'session',
            'description' => 'Whether you work with it daily, infrequently, or never, Magento 1 has been the ascendant PHP eCommerce platform for five years. The Magento 2 era is now upon us, featuring an updated architecture with full, configurable DI, aspect-oriented programming, and a truly decoupled, Composer-based system of modules which allows Magento components to be integrated into PHP app environments. This talk looks at some of the improvements and remaining challenges facing Magento 2.x on its way to a GA release and informs participants on how to get involved with the development and documentation on GitHub.',
        ],
        'monolith-to-microservices-lessons-from-the-trenches' => [
            'code' => 'monolith-to-microservices-lessons-from-the-trenches',
            'reviewId' => '14932',
            'title' => 'Monolith to Microservices: Lessons from the Trenches',
            'speaker' => 'luke-kysow',
            'tags' => ['microservices', 'soa', 'scaling', 'architecture'],
            'type' => 'session',
            'description' => 'Hootsuite is undergoing an architectural transformation. We\'re moving from our large monolithic PHP app to a microservices architecture. Microservices hold the promise of faster performance scaling, reduced technical debt, higher reliability, and increased speed of innovation, however the journey to get there isn\'t easy. How do you carve out parts of your app, rebuild them as services, and then switch to using those services, all while the plane is still flying--without any downtime and without your users noticing.

In this talk I\'ll define what exactly a microservices architecture looks like, discuss its pros and cons, and speak about how to best partition your app into services. We\'ll then go over lessons learned at Hootsuite as we\'ve carved up our own app into microservices; what worked and what fell flat on its face.',
        ],
        'massively-scaling-wordpress-in-the-cloud-a-case-study' => [
            'code' => 'massively-scaling-wordpress-in-the-cloud-a-case-study',
            'reviewId' => '14914',
            'title' => 'Massively Scaling WordPress in the Cloud - A Case Study',
            'speaker' => 'ben-lobaugh',
            'tags' => ['scaling', 'cloud', 'azure', 'wordpress', 'architecture'],
            'type' => 'session',
            'description' => 'With over 23% of the web utilizing WordPress as a content management platform it has become a powerhouse, but can it scale? In this session I will show you how I leveraged the Azure Cloud with WordPress to scale a real client site to 10 million hits per hour.',
        ],
        'navigating-your-git-repository' => [
            'code' => 'navigating-your-git-repository',
            'reviewId' => '14939',
            'title' => 'Navigating Your Git Repository',
            'speaker' => 'gemma-anible',
            'tags' => ['git', 'tools', 'graphs'],
            'type' => 'session',
            'description' => 'You can git pull, merge, and even force-push with the best of them, but what\'s really going on in that .git folder? What\'s a commit, and how does it know where it came from? What does checking out a tag have to do with detaching your head, and why does rebase mess things up so thoroughly?

In this talk, we’ll get inside individual commits and learn to push them around, then zoom out to the whole repository. Come find out how Git\'s glorified game of Connect-the-Dots can improve the development workflow and collaboration opportunities for your whole team!',
        ],
        'phpspec-behat-two-testing-tools-that-write-code-for-you' => [
            'code' => 'phpspec-behat-two-testing-tools-that-write-code-for-you',
            'reviewId' => '14919',
            'title' => 'PHPSpec & Behat: Two Testing Tools That Write Code For You',
            'speaker' => 'joshua-warren',
            'tags' => ['behat', 'phpspec', 'tdd', 'bdd', 'testing'],
            'type' => 'session',
            'description' => 'PHPSpec and Behat are two amazing PHP tools that empower specification-driven development and behavior-driven development. These two tools combined can help you build test coverage, but many people don\'t realize they can also write much of your code for you. In this talk, we\'ll see what PHPSpec and Behat can do, through a series of examples and use cases. In other words, I heard you like to code, so I wrote code that writes code while you code.',
        ],
        'integrating-joomla-with-the-php-community' => [
            'code' => 'integrating-joomla-with-the-php-community',
            'reviewId' => '14928',
            'title' => 'Integrating Joomla! with the PHP Community',
            'speaker' => 'michael-babker',
            'tags' => ['framework', 'joomla', 'modernize'],
            'type' => 'session',
            'description' => 'After nearly a decade of growth and development, Joomla! has proven itself as a strong and mature platform to build everything from the simplest of blogs to the most complex e-commerce solutions. However, this platform has its weaknesses, including the technical debt of a decade of development and often requiring Joomla or extension specific solutions to solve common problems. Enter the Joomla! Framework.

By extracting the API that has powered the Joomla! CMS since its birth into standalone and modular packages, we enable developers to use an API they are already familiar with to create standalone applications specific to client needs. This also enables developers to more easily consume code written for and shared with the full PHP community. Lastly, we are now able to offer the core APIs powering Joomla for use in Drupal or Laravel based projects.

We’ll take a look at how lowering the barriers to using and developing with Joomla’s own code base enables the Joomla! code base to be integrated with other PHP projects and how these integrations lay the framework for a stronger and more flexible next generation CMS.',
        ],
        'an-introduction-to-containers-and-docker-for-php-developers' => [
            'code' => 'an-introduction-to-containers-and-docker-for-php-developers',
            'reviewId' => '14931',
            'title' => 'An Introduction to Containers and Docker for PHP Developers',
            'speaker' => 'robert-mcfrazier',
            'tags' => ['docker', 'containers', 'vagrant', 'virtual-machines'],
            'type' => 'session',
            'description' => 'In this session we will discuss the basics of containers and how to use Docker, running in a Vagrant VM to allow any PHP developer to create an extremely flexible development environment and also learn more about these powerful technologies.    Using a practical example of building a development environment allows you to create something other that a basic “hello world” example while learning about containers.',
        ],
        'talmudic-maxims-to-maximize-your-growth-as-a-software-developer' => [
            'code' => 'talmudic-maxims-to-maximize-your-growth-as-a-software-developer',
            'reviewId' => '14994',
            'title' => 'Talmudic Maxims to Maximize Your Growth as a Software Developer',
            'speaker' => 'yitzchok-willroth',
            'tags' => ['career-growth', 'community', 'craftsmanship', 'leadership'],
            'type' => 'session',
            'description' => 'You’ve been programming for a while now.    You’re beginning to feel that you’ve got a handle on things but at the same time can’t escape the feeling that you’ve somehow plateaued in your growth as a software developer.    In this talk Yitzchok, a rabbinic scholar and software developer, shares the “wisdom of the sages” as practical, actionable advice – strategies and tactics – that you can use to reinvigorate your growth as a software developer.',
        ],
        'building-extraordinary-packages' => [
            'code' => 'building-extraordinary-packages',
            'reviewId' => '14935',
            'title' => 'Building Extraordinary Packages',
            'speaker' => 'phil-sturgeon',
            'tags' => ['composer', 'oop', 'packages', 'psr'],
            'type' => 'session',
            'description' => 'Back in the day, we had PEAR packages. These were often very well written, but due to PEARs lack of popularity we ended up just using mega-frameworks and writing bundles, modules, cells and sparks for that framework. Since then Composer has been a bit of a savior, but the way in which we make these packages is still new and scary.

There are a lot of talks about building good code, and writing OOP well, but how do you make a Composer package that is as high in quality as you can? Things like SemVer, avoiding NIH syndrome verses knowing WHEN to fork or make a new package, responsible deprecation and loads more.

The League of Extraordinary Packages is a group of developers who have banded together to build solid, well tested PHP packages using modern coding standards. The name might be a little silly, but the group dedicates itself to active maintenance, handing over projects when a lead has to step aside, working together and an absolute dedication to following and supporting standards.',
        ],
        'why-are-databases-so-difficult' => [
            'code' => 'why-are-databases-so-difficult',
            'reviewId' => '14913',
            'title' => 'Why are Databases so &#%-ing Difficult!?',
            'speaker' => 'dave-stokes',
            'tags' => ['sql', 'mysql', 'theory', 'database', 'rdms'],
            'type' => 'session',
            'description' => 'Databases!    Why are they such a PITA!    Well, part of it is that SQL is a procedural language and PHP is Object Oriented/Procedural Language, so they don\'t mesh well.    A SQL query can be syntax perfect, look great, and have rotten performance so visual examinations are almost useless.    Database are designed to use set theory and too many programmers generate N+1 type programming errors because they do not think in sets. . This session covers the hows and the whys of databases & SQL so that you can use them to your best advantage.    Discover why database optimizers are like bad GPS systems, why the WHERE clause is the wrong place to trim queries, which heavy lifting functions are best for a database, and how to cleanly write PHP code to efficiently use databases.',
        ],
        'foundations-of-zend-framework-2' => [
            'code' => 'foundations-of-zend-framework-2',
            'reviewId' => '14923',
            'title' => 'Foundations of Zend Framework 2',
            'speaker' => 'adam-culp',
            'tags' => ['zend-framework', 'framework'],
            'type' => 'session',
            'description' => 'Adam Culp will give a basic intro to Zend Framework 2 (ZF2) and how to use the foundational pieces.    We will get a Zend Framework 2 application up and running quickly using the Zend Framework 2 Skeleton Application, and Zend Skeleton Module to add modules. Adam will also introduce some useful resources to help attendees continue learning on their own. The talk will give attendees enough information to get a jump start into using ZF2.',
        ],
        'refactoring-101' => [
            'code' => 'refactoring-101',
            'reviewId' => '14927',
            'title' => 'Refactoring 101',
            'speaker' => 'adam-culp',
            'tags' => ['refactoring', 'code-quality'],
            'type' => 'session',
            'description' => 'We hate to refactor. (The practice of altering code to make it cleaner, simpler, and sometimes faster, while not altering functionality.) Adam Culp will talk about how to do it better, and will discuss: When to refactor. How to refactor. Why refactor. How a refactor can help us write better code in the future. A common methodology and steps to follow while refactoring, and resources to help us all on our refactor journey.',
        ],
        'smelly-tests' => [
            'code' => 'smelly-tests',
            'reviewId' => '14937',
            'title' => 'Smelly Tests',
            'speaker' => 'chris-hartjes',
            'tags' => ['testing', 'modernize'],
            'type' => 'session',
            'description' => 'You\'re now writing unit tests for your code...but you can\'t help but wonder if you are writing them the Right Way(tm). Given that learning to write good tests is no different from learning to write good code, it\'s inevitable that we make mistakes as we learn to create effective unit test suites.
In this talk testing evangelist Chris Hartjes talks about his own experiences in learning how to create good test cases by showing people examples of where things might not have gone the way the developer expected.',
        ],
        'composer-stability-and-semantic-versioning-demystified' => [
            'code' => 'composer-stability-and-semantic-versioning-demystified',
            'reviewId' => '14922',
            'title' => 'Composer: Stability and Semantic Versioning Demystified',
            'speaker' => 'beau-simensen',
            'tags' => ['semver', 'composer', 'dependency-management'],
            'type' => 'session',
            'description' => 'Understanding stability and semantic versioning makes a huge impact on daily life with Composer. Learn how to decode Composer\'s solver errors, get a better understanding of semantic versioning, how dependencies interact with each other when it comes to stability, and how to use Composer features like branch aliases to make things run more smoothly.',
        ],
        'hello-psr-7' => [
            'code' => 'hello-psr-7',
            'reviewId' => '14942',
            'title' => 'Hello, PSR-7',
            'speaker' => 'beau-simensen',
            'tags' => ['psr', 'http'],
            'type' => 'session',
            'description' => 'PSR-7 HTTP Message Interface has been kicking around in one form or another since March of 2012. Get a brief history of how PSR-7 evolved from its humble beginnings as a simple HTTP client interface to the game-changing PHP-FIG proposal we have today. Learn how to work with the HTTP Message Interfaces and how they will be used by frameworks in the not to distant future. Find out what it will mean to have a healthy ecosystem of PHP software all speak HTTP the same way. Say hello to your new best friend in PHP, PSR-7.',
        ],
        'inside-laravel-5.1' => [
            'code' => 'inside-laravel-5.1',
            'reviewId' => '14912',
            'title' => 'Inside Laravel 5.1',
            'speaker' => 'yitzchok-willroth',
            'tags' => ['framework', 'laravel'],
            'type' => 'session',
            'description' => 'One of PHP\'s most popular frameworks has undergone a major version upgrade! Join us to explore what\'s new in Laravel 5.0. We\'ll explore putting your Controllers on a crash diet with Custom Request Objects and Method Level Dependency Injection, increasing contexuality with Route & Event Annotations, managing 3rd party authentication with Socialite, understanding the new Directory Structure and Service Provider Architecture, leveraging FlySystem Integration, improving performance with Route Caching and increasing decoupling using Contracts. Special attention will be given to contributing to the framework using the exciting new contribution tool, Liferaft.',
        ],
        'demystifying-the-rest-api' => [
            'code' => 'demystifying-the-rest-api',
            'reviewId' => '14995',
            'title' => 'Demystifying the REST API',
            'speaker' => 'samantha-quinones',
            'tags' => ['rest', 'api', 'computer-science', 'architecture'],
            'type' => 'session',
            'description' => 'Are you confused by REST APIs? Can\'t tell a PUT from a POST? No idea what a non-idempotent operation is? Despite their ubiquity, the details of what makes an API RESTful are often lost even on experienced developers. We\'ll cover the basics of the HTTP protocol that drives most REST services, break down the lingo, and clear up some misconceptions about this powerful and popular methodology.',
        ],
        'drinking-from-the-firehose' => [
            'code' => 'drinking-from-the-firehose',
            'reviewId' => '14940',
            'title' => 'Drinking from the Firehose - Real-time Metrics',
            'speaker' => 'samantha-quinones',
            'tags' => ['big-data', 'metrics', 'queues', 'elasticsearch', 'hadoop', 'aws'],
            'type' => 'session',
            'description' => 'To understand an application’s performance, first you have to know what to measure. That’s the easy part. How do you take those measurements? Store them? Analyze them? Get them to the people who need them? Well, that’s where things get complicated, especially in the    high-traffic distributed systems of the modern web! Like careful scientists, we must observe our subjects without altering them, and we must report our findings quickly so that we have the data necessary to make smart choices about the health and growth of the system.

Let’s explore the lessons learned by engineers at one of the world’s top web companies in their quest to find meaning at 5 MB/s. We’ll discuss the tools and techniques that enable the collection, indexing, and analysis of billions or more datapoints each hour, and learn how these same approaches can empower your applications and your business, no matter the scale.',
        ],
        'making-the-world-a-smarter-place-through-iot' => [
            'code' => 'making-the-world-a-smarter-place-through-iot',
            'reviewId' => '14911',
            'title' => 'Making the World a Smarter Place through IoT',
            'speaker' => 'josh-holmes',
            'tags' => ['iot', 'cloud', 'azure'],
            'type' => 'session',
            'description' => <<<DESC
There's a ton of buzz and hype around the internet of things (IoT) but what is it actually? IoT is the next evolution of
distributed and connected systems at scale. It's more than just connecting your phone to your thermostat, it's about
connected systems at scale so devices and people can interact in ways that was the realm of sci-fi just a few years ago.
It gets interesting when devices are connected and able to inform and act based on their own environment and from an
outside perspective, the world is just a smarter place. In this session, we'll discuss what IoT actually means and how
it's different (or not) from the connected systems of the past and dive into some implementation details with various
devices connected to the Azure IoT platform on the backend.
DESC
        ],
        'nosql-lightning-talks' => [
            'code' => 'nosql-lightning-talks',
            'reviewId' => '14921',
            'title' => 'NoSQL Showdown - Lightning Talks Edition',
            'speaker' => ['robert-mcfrazier', 'jeremy-mikola', 'dave-stokes'],
            'tags' => ['database', 'nosql', 'mongodb', 'mysql', 'dynamodb', 'cassandra'],
            'type' => 'session',
            'description' => <<<DESC
NoSQL database systems are non-relational and are typically designed for distributed systems with scalability needs.
NoSQL databases are being increasingly used in big data and real-time web applications. However, it is hard to decide
which of the many NoSQL databases to use, so we've gathered together some experts in the area of NoSQL to help you
understand MongoDB, Cassandra, Amazon DynamoDB, and MySQL's NoSQL system.
DESC
        ],
        'git-and-github-for-php-projects' => [
            'code' => 'git-and-github-for-php-projects',
            'reviewId' => '14906',
            'title' => 'Git and GitHub for PHP Projects',
            'speaker' => 'beau-simensen',
            'tags' => ['database', 'nosql', 'mongodb', 'mysql', 'dynamodb', 'cassandra'],
            'type' => 'workshop',
            'description' => <<<DESC
Thanks largely to Composer and its tight integration with GitHub, it has never been easier for people to share and
contribute to the PHP ecosystem. These days it more or less required that contributors have a working knowledge of Git
and GitHub to be effective. Thankfully, learning how to use Git and GitHub doesn't have to be scary. Whether you're new
to Git, still using Subversion, or don't have any experience with version control systems, this workshop will get you
started using Git and GitHub so that you can start contributing back to your favorite PHP projects!
DESC
        ],
        'using-the-aws-sdk-for-php' => [
            'code' => 'using-the-aws-sdk-for-php',
            'reviewId' => '14948',
            'title' => 'Using Version 3 of the AWS SDK for PHP',
            'speaker' => 'jeremy-lindblom',
            'tags' => ['aws', 'psr', 'http', 'guzzle', 'cloud', 'api'],
            'type' => 'hackathon',
            'description' => <<<DESC
Amazon Web Services (AWS) offers a broad set of global compute, storage, database, analytics, application, and
deployment services that can help PHP developers build scalable applications in the cloud. These services provide APIs
that allow you to control all of your resources programmatically, even through your PHP code. Let's talk about how to
use Version 3 of the open source AWS SDK for PHP (built on the Guzzle library and PSR-7) to control your AWS resources
and use the AWS services from within your applications.
DESC
        ],
        'async-requests-and-promises-sdk' => [
            'code' => 'async-requests-and-promises-sdk',
            'reviewId' => '14949',
            'title' => 'Asynchronous Requests in the AWS SDK for PHP',
            'speaker' => 'michael-dowling',
            'tags' => ['aws', 'async', 'http', 'guzzle', 'cloud', 'reactphp'],
            'type' => 'hackathon',
            'description' => <<<DESC
Version 3 of the AWS SDK for PHP introduces a powerful new asynchronous programming model for PHP developers using AWS
APIs. In this session, you will learn how to perform asynchronous and concurrent requests using the AWS SDK by using
<em>promises</em>, which are baked into almost every SDK feature. You will also see how concurrency models like
ReactPHP's event loop can be integrated with the SDK to make its asynchronous capabilities even more powerful.
DESC
        ],
        'php-approach-to-infrastructure' => [
            'code' => 'php-approach-to-infrastructure',
            'reviewId' => '14947',
            'title' => 'A PHP Approach to Cloud Infrastructure',
            'speaker' => 'joseph-fontes',
            'tags' => ['aws', 'cloud', 'architecture', 'automation'],
            'type' => 'hackathon',
            'description' => <<<DESC
This session will explore the evolution of software-defined system control from varying methods of systems interaction
(networking, DNS, syslog, hypervisor controls, storage/systems/network monitoring, provisioning, etc.) to PHP
functionality of the same capabilities within AWS (VPC, Route 53, EBS, ELB, EC2, CloudWatch, etc.).
DESC
        ],
        'speaking-for-speakers' => [
            'code' => 'speaking-for-speakers',
            'reviewId' => '14929',
            'title' => 'Speaking for Speakers',
            'speaker' => 'josh-holmes',
            'tags' => ['speaking'],
            'type' => 'session',
            'description' => <<<DESC
More details coming soon.
DESC
        ],
        'clean-application-development' => [
            'code' => 'clean-application-development',
            'reviewId' => '14905',
            'title' => 'Clean Application Development',
            'speaker' => 'adam-culp',
            'tags' => ['code-quality'],
            'type' => 'workshop',
            'description' => <<<DESC
No matter what level of development we are at in our careers we all face a daily battle to write good code for ourselves
 and others, deliver finished applications fast to satisfy business, and ensure everything is properly tested to prevent
 end-user fails. In this session we will discuss what clean application development is, and how it can help us win those
 battles. The talk will provide practical and usable examples to take with you, integrate into your workflow, and
 continue to grow into good habits. (Topics: Version control, refactoring, coding standards, frameworks, architecture,
 automation, time management, and more.)
DESC
        ],
        'code-review-for-security' => [
            'code' => 'code-review-for-security',
            'reviewId' => '14908',
            'title' => 'Code Review for Security',
            'speaker' => 'anthony-ferrara',
            'tags' => ['security'],
            'type' => 'workshop',
            'description' => <<<DESC
Imagine the day where you get an email from your CEO: “Our site has
been hacked! Millions of user records have been leaked! And we’re
being sued!”… Unfortunately, that situation appears to be quite common
place in the modern world. In the past year alone LinkedIn, Sony,
Zappos, Twitter, Apple, Yahoo and LastFM (and a lot more) have
compromised, leaking over 100 million user records. How has this
become common place? Developers traditionally haven’t focused on
security (that’s someone else’s problem, right?)… Wrong! Security is
everyone’s job!

Come and learn more about how to identify and fix security issues! In
this workshop, we’ll cover the most dangerous and prevalent security
vulnerabilities in PHP applications today. We’ll look at how those
vulnerabilities work under the hood, and how to prevent them. Then,
we’ll spend time reviewing actual code with actual vulnerabilities.
Once we’ve identified a potential vulnerability, you will actually
execute an attack against it! By the end of the workshop, you should
be able to identify insecure code and fix it!

Who is the target audience of this workshop?
<ul>
<li>Any developer who has preformed code-review before</li>
<li>Any developer who wants to understand security better</li>
</ul>

How experienced do I need to be?
<ul>
<li>If you understand how to read code, you have enough experience to attend this workshop!</li>
</ul>

Tutorial requirements:
<ul>
<li>A laptop</li>
</ul>

A cursory understanding of the <a href="https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project">OWASP Top 10</a>
will be very helpful.
DESC
        ],
        'running-php-on-aws' => [
            'code' => 'running-php-on-aws',
            'reviewId' => '14950',
            'title' => 'Running PHP on AWS',
            'speaker' => 'jonathan-weiss',
            'tags' => ['aws', 'cloud', 'continuous-deployment', 'continuous-integration', 'deployment', 'docker', 'chef'],
            'type' => 'hackathon',
            'description' => <<<DESC
Amazon Web Services offers different ways to run scalable PHP application: EC2, Beanstalk, OpsWorks or with Docker on
ECS. This session will provide an overview of these and dive deep into their PHP support. We will look at how to
integrate tools like composer or tweak the PHP installation as part of the deployment. We will cover PHP Continuous
Integration and Continuous Deployment setups as well as debugging live apps on AWS.
DESC
        ],
    ],
	'sponsors' => [
		'nexcess' => [
			'name' => 'Nexcess',
			'code' => 'nexcess',
			'level' => 'platinum',
			'rank' => 1100,
			'label' => 'Platinum',
			'description' => 'Platinum-level Sponsor',
			'url' => 'https://www.nexcess.net/',
			'logo' => 'img/logos/nexcess.jpg',
			'about' => <<<DESC
Since the dawn of the millennium, Nexcess has been the leader at running LAMP-style hosting environments that benefit
from professional-grade optimization in performance and security.<br><br>As developers themselves, the Nexcess team has
launched several PHP applications over the years, which includes their data center management platform (NOCWorx), a
server management interface (InterWorx), and a leading Magento plugin that integrates Varnish caching with e-commerce
storefronts (Turpentine).<br><br>In addition to bestowing lessons learned in maintaining a cutting edge platform for
PHP applications, representatives from Nexcess will be seeking the brightest development minds in the community at
PNWPHP with the intent to grow their team of open source experts.
DESC
		],
		'tableau' => [
			'name' => 'Tableau',
			'code' => 'tableau',
			'level' => 'platinum',
			'rank' => 1097,
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
			'rank' => 1094,
			'label' => 'Hackathon',
			'description' => 'Hackathon Sponsor',
			'url' => 'http://aws.amazon.com/',
			'logo' => 'img/logos/aws.jpg',
			'about' => <<<DESC
Built upon the same world-class technology that powers Amazon.com, Amazon Web Services (AWS) provides businesses with a
secure, reliable, easy-to-scale, low-cost computing platform "in the cloud." Companies of all sizes, from all around
the globe use AWS to build applications, store data, manage business processes, and more. Learn more:
http://aws.amazon.com.
DESC
		],
        'pluralsight' => [
            'name' => 'PluralSight, Inc.',
            'code' => 'pluralsight',
            'level' => 'gold',
            'rank' => 1091,
            'label' => 'Speaker Dinner',
            'description' => 'Speaker Dinner Sponsor',
            'url' => 'http://www.pluralsight.com/',
            'logo' => 'img/logos/pluralsight.jpg',
            'about' => <<<DESC
Founded in 2004, Pluralsight is the global leader in online learning for professional software developers, IT
specialists and creative technologists. As the world's largest curated professional development platform for
professionals, the company offers instant access to over 4,000 courses authored by top experts. With customers in more
than 150 countries, Pluralsight serves as a career catalyst, delivering hands-on, practical training for the most
in-demand and understaffed jobs of today. For more information, visit Pluralsight.com.
DESC
        ],
		'mysql' => [
			'name' => 'MySQL',
			'code' => 'mysql',
			'level' => 'gold',
			'rank' => 1088,
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
			'rank' => 1085,
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
			'rank' => 1082,
			'label' => 'Party',
			'description' => 'Evening Social Sponsor',
			'url' => 'http://www.mandrill.com/',
			'logo' => 'img/logos/mandrill.jpg',
			'about' => <<<DESC
Mandrill is an affordable, scalable, and secure email infrastructure service that's easy to set up and integrate with
existing apps. It's really fast, too. With servers all over the world, we can deliver your email in milliseconds. Our
detailed delivery reports, advanced analytics, and friendly interface mean your entire team &mdash; from developers to
marketers &mdash; can easily monitor and evaluate email performance.
DESC
		],
		'ispottv' => [
			'name' => 'iSpot.tv',
			'code' => 'ispottv',
			'level' => 'silver',
			'rank' => 1079,
			'label' => 'Silver',
			'description' => 'Silver-level &amp; Scholarship Sponsor',
			'url' => 'http://www.ispot.tv/',
			'logo' => 'img/logos/ispottv.jpg',
			'about' => <<<DESC
We are the go-to platform for Brands, Agencies, Networks, Actors and Developers to track in real-time paid TV media and
related earned digital activity across social, search &amp; video.
DESC
		],
        'mercutio' => [
            'name' => 'Mercutio',
            'code' => 'mercutio',
            'level' => 'silver',
            'rank' => 1076,
            'label' => 'T-Shirt',
            'description' => 'T-Shirt Sponsor',
            'url' => 'http://getmercutio.com',
            'logo' => 'img/logos/mercutio.jpg',
            'about' => <<<DESC
Mercutio is web development firm in Seattle that specializes in strategy, design, and technology for e-Commerce companies.
DESC
        ],
        'alegion' => [
            'name' => 'ALegion',
            'code' => 'alegion',
            'level' => 'silver',
            'rank' => 1073,
            'label' => 'Silver',
            'description' => 'Silver-level Sponsor',
            'url' => 'http://alegion.com/',
            'logo' => 'img/logos/alegion.jpg',
            'about' => <<<DESC
Enterprises require speed and flexibility, and the Alegion Platform delivers both with our self-service crowdsourcing
platform. Businesses can choose from a set of templates, or create their own process using the Alegion Workflow
Designer. Within just minutes, the business can build and submit tasks to the crowd and review the results. Alegion
allows the customer to determine the per-task price as well as the volume of tasks to be submitted. Using the Task
Designer, businesses can rapidly test variations of their tasks and review the results for quality. Before Alegion,
this iterative testing process that would takes weeks or months can be reduced to hours or days.<br> Built into the
Alegion Platform are quality control measures such as gold standards and worker scoring. These and other techniques
are used to ensure high quality in the task results.
DESC
        ],
        'tune' => [
            'name' => 'TUNE',
            'code' => 'tune',
            'level' => 'silver',
            'rank' => 1070,
            'label' => 'Lunch',
            'description' => 'Lunch &amp; Meetup Sponsor',
            'url' => 'http://www.tune.com',
            'logo' => 'img/logos/tune.jpg',
            'about' => <<<DESC
The name TUNE describes what we help marketers do.
DESC
        ],
        'engineyard' => [
            'name' => 'Engine Yard',
            'code' => 'engineyard',
            'level' => 'bronze',
            'rank' => 1057,
            'label' => 'Video',
            'description' => 'Video Sponsor',
            'url' => 'http://www.engineyard.com',
            'logo' => 'img/logos/engineyard.jpg',
            'about' => <<<DESC
Engine Yard is the leading cloud application management platform empowering developers and DevOps to provision, manage,
monitor and control applications in the public and cloud.
DESC
        ],
        'gosolid' => [
            'name' => 'GoSolid',
            'code' => 'gosolid',
            'level' => 'bronze',
            'rank' => 1064,
            'label' => 'Bronze',
            'description' => 'Bronze-level &amp; Scholarship Sponsor',
            'url' => 'http://www.gosolid.net/',
            'logo' => 'img/logos/gosolid.jpg',
            'about' => <<<DESC
Nestled in the heart of Georgetown, GoSolid has been raising the bar in ecommerce since 2009. We value understanding
the unique needs of each client, continual innovation, frequent communication, and providing exceptional value.
GoSolid's hand-picked staff delivers the best custom development and design available and enjoys a flexible working
environment with great benefits.
DESC
        ],
        'creatuity' => [
            'name' => 'Creatuity',
            'code' => 'creatuity',
            'level' => 'bronze',
            'rank' => 1061,
            'label' => 'Bronze',
            'description' => 'Bronze-level &amp; Kickstarter Sponsor',
            'url' => 'http://www.creatuity.com',
            'logo' => 'img/logos/creatuity.jpg',
            'about' => <<<DESC
We're here to help with your eCommerce and Magento needs.
Call us at 214-810-5005 or email us at contact@creatuity.com
DESC
        ],
        'digitalocean' => [
            'name' => 'Digital Ocean',
            'code' => 'digitalocean',
            'level' => 'bronze',
            'rank' => 1058,
            'label' => 'Lanyard',
            'description' => 'Lanyard Sponsor',
            'url' => 'https://www.digitalocean.com/',
            'logo' => 'img/logos/digitalocean.jpg',
            'about' => <<<DESC
DigitalOcean is the world's fastest growing cloud provider built for developers. Our mission is to simplify web
infrastructure and delight our customers with a seamless experience. Users can easily deploy a blazing fast cloud
server in 55 seconds with an intuitive control panel interface and straightforward API.
DESC
        ],
        'in2it' => [
            'name' => 'In2it',
            'code' => 'in2it',
            'level' => 'bronze',
            'rank' => 1055,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor &amp; Kickstarter Sponsor',
            'url' => 'http://www.in2it.be',
            'logo' => 'img/logos/in2it.jpg',
            'about' => <<<DESC
In2it is the leading PHP consulting firm in the Benelux offering services to international enterprises, small to
mid-sized businesses, governmental institutes, educational and non-profit organisations. We’re market leader in regards
consulting for PHP and Zend Framework application architectures, quality assurance on PHP projects and we provide
training courses on-site and online.
DESC
        ],
        'roberthalf' => [
            'name' => 'Robert Half',
            'code' => 'roberthalf',
            'level' => 'bronze',
            'rank' => 1052,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.roberthalf.com/seattle-tacoma',
            'logo' => 'img/logos/roberthalf.jpg',
            'about' => <<<DESC
Backed by more than 65 years of experience in specialized staffing, Robert Half Technology connects the best technology
talent with the best IT jobs. We provide a full spectrum of IT staffing services worldwide to organizations that require
on-demand technical expertise. Innovation starts with people, and people start with us.
DESC
        ],
        'cdkglobal' => [
            'name' => 'CDK Global',
            'code' => 'cdkglobal',
            'level' => 'bronze',
            'rank' => 1049,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.cdk.com',
            'logo' => 'img/logos/cdkglobal.jpg',
            'about' => <<<DESC
Who is CDK? We're the technology that keeps the auto industry moving &emsp; from the first advertisement, to credit
checks and approvals, to maintenance and service reminders. And we're not limited to just cars &emsp; we provide
services for heavy trucks, agricultural and construction equipment, RVs, boats and motorcycles.

<strong>Stability meets agility.</strong>

At CDK Global, we have based our business on stability &emsp; the auto industry is one of the top
three economic indicators. It's a barometer for the health of the global economy and offers insight into business
cycles, market trends and consumer confidence. Our 40-year background in dealer services and data solutions gives us
stability in a fluctuating market. Though we're stable, we pride ourselves on our agility. We're fast, we're modern
and we're innovative. We're solving problems that haven't even been considered yet. We don't believe in cubes, silos
and walls. We've shifted our focus and designed our buildings to reflect innovation and foster collaboration.
DESC
        ],
        'roave' => [
            'name' => 'Roave',
            'code' => 'roave',
            'level' => 'bronze',
            'rank' => 1046,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'https://roave.com/',
            'logo' => 'img/logos/roave.jpg',
            'about' => <<<DESC
Roave is a full-service web development firm, offering services such as consulting, training, software development, and
more. Roave employs some of the most recognized and accomplished experts in the industry to ensure that organizations
have access to the talent they need, when they need it.
DESC
        ],
        'clarify' => [
            'name' => 'Clarify',
            'code' => 'clarify',
            'level' => 'bronze',
            'rank' => 1063,
            'label' => 'Bronze',
            'description' => 'Bronze-level &amp; Hackathon Pizza/Prize Sponsor',
            'url' => 'http://clarify.io/',
            'logo' => 'img/logos/clarify.jpg',
            'about' => <<<DESC
More audio and video is recorded every day than was recorded over the entire 20th century, and that rate is
accelerating.  Unfortunately, most recorded media is wasted because it is "invisible" to our current computer systems
without a lot of effort in organization and tagging. Clarify is a cloud-based, REST API that processes your audio and
video for data like words spoken, keywords, and topics. The API also allows you to assign custom or arbitrary metadata
such as title, description, tags, subject, producer, or publish date to any media. The data is then organized by a
powerful search engine and exposed through search queries, filters, and reports.  Human-powered transcription services
are available on-demand through the API, too.
DESC
        ],
        'mongodb' => [
            'name' => 'MongoDB',
            'code' => 'mongodb',
            'level' => 'bronze',
            'rank' => 1040,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://mongodb.com',
            'logo' => 'img/logos/mongodb.jpg',
            'about' => <<<DESC
MongoDB, Inc. is the company behind MongoDB. We build MongoDB and the drivers, and sell software and services to make
your life easier. We also run MongoDB University and sponsor the community, hosting MongoDB World and MongoDB Days all
over the globe. With offices across North America, Europe, and Asia, we are close to where you do business.
DESC
        ],
        'magento' => [
            'name' => 'Magento',
            'code' => 'magento',
            'level' => 'bronze',
            'rank' => 1037,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://magento.com/',
            'logo' => 'img/logos/magento.jpg',
            'about' => <<<DESC
More than 240,000 merchants worldwide put their trust in our eCommerce software. Magento's eCommerce platform gives you
the tools you need to attract more prospects, sell more products, and make more money. It's what we do.
DESC
        ],
        'coolblueweb' => [
            'name' => 'coolblueweb',
            'code' => 'coolblueweb',
            'level' => 'copper',
            'rank' => 1028,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://www.coolblueweb.com/php',
            'logo' => 'img/logos/coolblueweb.jpg',
            'about' => <<<DESC
A Seattle-based, full-service Web Development Company specializing in Magento, WordPress and Custom Web Development.
DESC
        ],
        'osmi' => [
            'name' => 'OSMI',
            'code' => 'osmi',
            'level' => 'copper',
            'rank' => 1025,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://funkatron.com/osmi',
            'logo' => 'img/logos/osmi.jpg',
            'about' => <<<DESC
Open Sourcing Mental Illness is a speaking campaign by Ed Finkler to change how we deal with mental health in the tech
community.
DESC
        ],
        'efelle-creative' => [
            'name' => 'efelle creative',
            'code' => 'efelle-creative',
            'level' => 'bronze',
            'rank' => 1047,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.seattlewebdesign.com',
            'logo' => 'img/logos/efelle-creative.jpg',
            'about' => <<<DESC
Seattle's premier Website Design & Web Development firm since 2005. A different kind of digital agency: designing
creative, results-driven websites that WORK.
DESC
        ],
        'php-architect' => [
            'name' => 'php[architect]',
            'code' => 'php-architect',
            'level' => 'bronze',
            'rank' => 1044,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.phparch.com/',
            'logo' => 'img/logos/php-architect.png',
            'about' => <<<DESC
Published continuously since 2002, php[architect] magazine is the only technical journal dedicated exclusively to the
world of PHP. We are committed to spreading knowledge of best practices in PHP. With that purpose, the brand has
expanded into producing a full line of books, hosting online and in-person web training, as well as organizing multiple
conferences per year.
DESC
        ],
        'joule' => [
            'name' => 'Joule',
            'code' => 'joule',
            'level' => 'copper',
            'rank' => 1022,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://joule.club/',
            'logo' => 'img/logos/joule.jpg',
            'about' => <<<DESC
Joule is a long term car share. More flexibility than car ownership. More freedom than ride share. Check out a Joule
vehicle and keep it as long as you like. When your needs change, pick a new one and we'll come to you with the exchange!
You'll always have the right vehicle for whatever you're doing, whether it's the daily commute, the big camping trip,
or a fancy night out. Joule takes care of all of the maintenance, and your insurance is built right in. All you have to
do is fill it up!
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
            'rank' => 45,
            'url' => 'http://wurstcon.com',
            'logo' => 'img/logos/wurstcon.jpg',
            'type' => 'sausage',
        ],
        'austinphp' => [
            'name' => 'Austin PHP',
            'code' => 'austinphp',
            'rank' => 40,
            'url' => 'http://www.meetup.com/austinphp/',
            'logo' => 'img/logos/austinphp.jpg',
            'type' => 'group',
        ],
        'northeastphp' => [
            'name' => 'Northeast PHP Conference',
            'code' => 'northeastphp',
            'rank' => 37,
            'url' => 'http://2015.northeastphp.org/',
            'logo' => 'img/logos/northeastphp.jpg',
            'type' => 'conference',
        ],
        'seagl' => [
            'name' => 'Seattle GNU/Linux Conference',
            'code' => 'seagl',
            'rank' => 34,
            'url' => 'http://seagl.org/',
            'logo' => 'img/logos/seagl.jpg',
            'type' => 'conference',
        ],
        'pnwdrupalsummit' => [
            'name' => 'Pacific Northwest Drupal Summit',
            'code' => 'pnwdrupalsummit',
            'rank' => 31,
            'url' => 'http://2015.pnwdrupalsummit.org/2015',
            'logo' => 'img/logos/pnwdrupalsummit.jpg',
            'type' => 'conference',
        ],
    ],
   'hotels' => [
        'hotel-max' =>  [
            'name' => 'Hotel Max',
            'address' => '620 Stewart St.',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '206-728-6299',
            'url' => 'http://www.hotelmaxseattle.com/',
            'twitter_url' => 'https://twitter.com/hotel_max',
            'facebook_url' => 'https://www.facebook.com/hotelmaxseattle',
            'distance' => '1.2 miles',
        ],
        'mayflower-park-hotel' =>  [
            'name' => 'Mayflower Park Hotel',
            'address' => '405 Olive Way',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '800-426-5100',
            'url' => 'http://www.mayflowerpark.com/',
            'twitter_url' => 'http://twitter.com/mayflowerpark',
            'facebook_url' => 'https://www.facebook.com/MayflowerPark',
            'distance' => '1.1 miles',
        ],
        'courtyard-marriot' =>  [
            'name' => 'Courtyard Marriot',
            'address' => '612 2nd Avenue',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98104',
            'tel' => '206-625-1111',
            'url' => 'http://www.marriott.com/hotels/travel/seaps-courtyard-seattle-downtown-pioneer-square/',
            'twitter_url' => '',
            'facebook_url' => '',
            'distance' => '0.2 mile',
        ],
        'moore-hotel' =>  [
            'name' => 'Moore Hotel',
            'address' => '1926 2nd Avenue',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '800-421-5508',
            'url' => 'http://www.moorehotel.com/',
            'twitter_url' => '',
            'facebook_url' => '',
            'distance' => '1.0 mile',
        ],
        'hilton-seattle' =>  [
            'name' => 'Hilton Seattle',
            'address' => '1301 6th Ave',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101-2304',
            'tel' => '206-624-0500',
            'url' => 'http://www3.hilton.com/en/hotels/washington/hilton-seattle-SEASHHF/index.html',
            'twitter_url' => '',
            'facebook_url' => '',
            'distance' => '0.8 mile',
        ],
        'westin-seattle' =>  [
            'name' => 'Westin Seattle',
            'address' => '1900 5th Avenue',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '206-728-1000',
            'url' => 'http://www.westinseattle.com/',
            'twitter_url' => '',
            'facebook_url' => 'http://www.facebook.com/TheWestinSeattleHotel',
            'distance' => '1.1 miles',
        ],
    ],
];
