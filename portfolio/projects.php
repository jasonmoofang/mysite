<?php

define(NO_IMAGE, "http://i302.photobucket.com/albums/nn91/yuenhoe/nopic.jpg");

$category[] = array(
	'name' => 'Non-curricular Software Projects',
	'projects' => array(
		0 => array(
			'id' => 'moz',
			'title' => "Mozilla Thunderbird Bugfixing",
			'short_descry' => '
			<p>Link : <a href="http://yuenhoe.co.cc/blog/category/tech/mozilla-dev/" target="_blank">
			Documentation on my blog</a></p>
			<p>This is an \'independant work\' project that I\'m working on now. It basically involves me submitting
			patches and bugfixes to the Mozilla Thunderbird codebase while interacting with the Mozilla developer
			community. At the time of this writing I have contributed fixes to bugs 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=471368" target="_blank">471368</a> and
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=449560" target="_blank">449560</a> - both
			review+\'d and committed into the tree - and am presently working on bug 
			<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=227305" target="_blank">227305</a>.
			</p>',
			'moar_descry' => "
			<p>Bug 471368 is a front-end bug involving some badly named entities in the code - a very trivial
			bug that is undertaken mostly to get myself up to speed with the process of contributing a bugfix.</p>
			<p>Bug 449560 is a more interesting bug involving an accessibility issue - email address headers
			in mail messages opened in Thunderbird were not exposing appropriate (or in fact any) information to assistive
			technologies. I submitted a patch which plugged some code into the javascript responsible for constructing
			the email address headers. The new code gathers the necessary information and adds it to the email
			address header node in the form of an ARIA label.</p>
			<p>Bug 227305 is a long standing feature request for allowing dragging and dropping multiple emails
			from Thunderbird to the desktop or to a file manager window. This one
			is turning out to be a difficult one due to backend complications and
			lack of documentation and existing code relating to the necessary
			functionalities.</p>
			",
			'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/thunderbirddev.jpg"
			),

		1 => array(
			'id' => 'pertapis',
			'title' => "CVWO Pertapis Project",
			'short_descry' => '
			<p>Link : <a href="http://www.comp.nus.edu.sg/~vwo/pertapis.html" target="_blank">
			Project page at CVWO website</a></p>
			<p>The Pertapis Project is a full-fledged, industrial-scale IT solution developed as a volunteer effort
			for <a href="http://www.pertapis.org.sg/" target="_blank">Pertapis</a>
			(the Islamic Theological Association of Singapore). The project is primarily a client case management
			system, and in the way of salient features includes intuitive form based interfaces, flexible search and retrieve capabilities,
			automated report generation, and a bar-code scanning mechanism for visitor tracking.</p>
			<p>I served as the main System Architect and the overall Project Lead in this effort.
			This is the second major project I undertook under CVWO, a voluntary student organisation aimed at
			developing IT solutions for charity organisations.</p>
			',
			'moar_descry' => '<p>
			We had a press conference at the end of the project where we presented and demo\'d our work to our
			corporate sponsors, including SCS and McKinsey and Company. The Malay Media was present and the project
			was later featured in the malay news on television. The following is a video of the broadcast:</p>
			<object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/HaF33O4x0h4&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/HaF33O4x0h4&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
			',
			'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/thgroupdiscussion.jpg"
			),

		2 => array(
			'id' => 'geha',
			'title' => "CVWO Geha Project",
			'short_descry' => '
			<p>Link : <a href="http://www.comp.nus.edu.sg/~vwo/geha.html" target="_blank">
			Project page at CVWO website</a></p>
			The Geha Project is a full-fledged, industrial-scale IT solution developed as a volunteer effort
			for <a href="http://www.geha.org.sg/" target="_blank">GEHA</a>
			(Geylang Easy Home for the Aged). The project is a data management system with the primary goal of
			automatically generating the PES report - a data and computation intensive report prepared and
			regularly submitted by the organisation to the authorities. To this end the system tracks
			various kinds of data necessary for report generation, including volunteer information, facility usage
			data, activity attendance and home visits records. The system also sports a touchscreen-based interface
			for quick and easy facility usage and activity participation recording.</p>
			<p>The Geha project is one of
			the two maiden projects undertaken by the CVWO founding team, of which I was a member.
			This is my first major non-curricular IT project, and I was able to play a key role as a core
			developer in the effort.</p>
			',
			'moar_descry' => "",
			'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/19after.jpg"
			)
		)
	);

$category[] = array(
	'name' => 'School Software Projects',
	'projects' => array(
		0 => array(
			'id' => 'softeng',
			'title' => "Software Engineering Project (CS3215)",
			'short_descry' => '
			<p>Done as part of a requirement of my computer science degree, the software engineering project is
			a reasonably large scale project where students in teams of 6 work together to design, build and test
			a piece of software. Our project was done on the .Net(or Mono) platform and developed entirely in C#.
			What we built was essentially a piece of software that performs static analysis on source code, and thus
			involved developing a source code parser, data structure designs to hold static program information
			as well as an interpreter for a query language.</p>',
			'moar_descry' => "",
			'picture' => NO_IMAGE
			),
		1 => array(
			'id' => 'urop',
			'title' => "Research Project on End User Computer Tools",
			'short_descry' => '
			<p>This was done as a UROP (Undergraduate Research Opportunity Programme) Project, and involves
			exploring, creating and analysing a variety of end-user computer tools. Some of the tools I was
			involved in designing and building include 
			<ul><li>An artificial-world based musical composition tool, where
			sounds are emitted based on the behavioural rules of \'creatures\' in a \'world\'
			</li><li>Mondrian Painting
			creation tool, where a rule-based graphic (see left!) can be produced by performing simple steps within 
			program-enforced
			rules, or by interacting with an AI
			</li><li>And a functional, end-user language for creating animated graphics,
			where a simple, functional language is created that allows users to easily and intuitively specify
			and describe simple animated graphics.
			</li></ul>
			</p>',
			'moar_descry' => "",
			'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/mondrian.jpg"
			),
		2 => array(
			'id' => 'cs2102',
			'title' => "Database Class Web-based Project",
			'short_descry' => '
			<p>Link : <a href="http://cs2102s.awardspace.com/" target="_blank">a (slightly outdated) online copy of the system</a></p>
			<p>This is an \'online catalog\' style web page developed for a database module (CS2102) in university.
			We essentially built a web-based catalog of music tracks, albums and artists, and correlated the three
			in a natural way. The catalog system includes simple and advanced search functionality, simple browsing,
			and a simple log-in mechanism which in turn grants access to an admin interface that enables the
			addition, editting and deletion of track, album and artist records.
			</p>
			',
			'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/cs2102.jpg"
			),
		3 => array(
			'id' => 'cs2106',
			'title' => "Simple FAT file system simulation",
			'short_descry' => '
			<p>Link : <a href="http://www.comp.nus.edu.sg/yuenhoe/cs2106" target="_blank">The Simulation</a></p>
			<p>This is a simple simulation of the FAT file system meant to illustrate the
			principles behind the FAT file system. This was done as part of a requirement for
			operating systems class, and was developed entirely in HTML/CSS and Javascript.
			The simulation illustrates ideas like fragmentation and space wastage due to
			cluster size by means of graphical representations of the disk and the FAT table.
			</p>
			',
			'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/os.jpg"
			),
		),
	);

$category[] = array(
        'name' => 'Design-related work',
        'projects' => array(
               0 => array(
                        'id' => 'nuseg',
                        'title' => "Publicity material for E-gaming competition",
                        'short_descry' => '
                        <p>I designed some publicity material for a bazaar-cum-gaming tournament
                        during my term as Vice Chairperson of NUS E-Gaming.
                        </p><p>Tournament publicity poster : <a href="http://i302.photobucket.com/albums/nn91/yuenhoe/DotaPoster.png" target="_blank">here</a><br />
                        Bazaar publicity poster : <a href="http://i302.photobucket.com/albums/nn91/yuenhoe/BazaarPoster.png" target="_blank">here</a><br />
                        Event web banner : <a href="http://i302.photobucket.com/albums/nn91/yuenhoe/dotabanner.gif" target="_blank">here</a>
                        </p>',
                        'moar_descry' => "",
                        'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/nusegthumb.jpg"
                        ),
                1 => array(
                        'id' => 'cmad',
                        'title' => "Publicity material for CMAD",
                        'short_descry' => '
                        <p>I was put in charge of publicity as part of the 2008 CMAD (Combined Martial Arts
                        Display) committee. I designed the programme booklet as well as the background and
                        layout of the publicity posters.
                        </p><p>One of twin publicity posters : <a href="http://i302.photobucket.com/albums/nn91/yuenhoe/CMADposterblack.jpg" target="_blank">here</a><br />
                        Programme booklet cover page : <a href="http://i302.photobucket.com/albums/nn91/yuenhoe/CMADcover.jpg" target="_blank">here</a><br />
                        Full programme booklet (zipped) : <a href="http://www.mediafire.com/?3lxzkd2u9do" target="_blank">here</a>
                        </p>',
                        'moar_descry' => "<p><---- I played a grumpy old martial arts master in the production too!!</p>",
                        'picture' => "http://i302.photobucket.com/albums/nn91/yuenhoe/cmadthumb.jpg"
                        ),
                2 => array(
                        'id' => 'nuswushu',
                        'title' => "NUSWUSHU Website",
                        'short_descry' => '
                        <p>Link : <a href="http://nuswushu.org/" target="_blank">NUSWUSHU website</a></p>
                        <p>I designed a website for NUSWUSHU during my term as Vice Chairperson of the club.</p>
                        <p>Screenshot : <a href="http://i302.photobucket.com/albums/nn91/yuenhoe/wushusnapshot.jpg" target="_blank">here</a>',
                        'moar_descry' => "",
                        'picture' => 'http://i302.photobucket.com/albums/nn91/yuenhoe/wu.jpg'
                        ),
                ),
        );

