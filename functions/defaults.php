<?php

/* 
 * Data Defaults for FAU
 */


/*
 * Social Media 
 */
$default_socialmedia_liste = array(
    'delicious' => array(
	'name' => 'Delicious',
	'content'  => '',
	'active' => 0,
    ),
    'diaspora' => array(
	'name' => 'Diaspora',
	'content'  => '',
	'active' => 0,
    ),
    'facebook' => array(
	'name' => 'Facebook',
	'content'  => 'https://de-de.facebook.com/Uni.Erlangen.Nuernberg',
	'active' => 1,
    ),
    'twitter' => array(
	'name' => 'Twitter',
	'content'  => 'https://twitter.com/UniFAU',
	'active' => 1,
    ),
    
    'flickr' => array(
	'name' => 'Flickr',
	'content'  => '',
	'active' => 0,
    ),
  
    'itunes' => array(
	'name' => 'iTunes',
	'content'  => '',
	'active' => 0,
    ),
    'skype' => array(
	'name' => 'Skype',
	'content'  => '',
	'active' => 0,
    ),
    
    'youtube' => array(
	'name' => 'YouTube',
	'content'  => '',
	'active' => 0,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content'  => 'https://www.xing.com/net/alumnifau',
	'active' => 1,
    ),
    'tumblr' => array(
	'name' => 'Tumblr',
	'content'  => '',
	'active' => 0,
    ),
    'github' => array(
	'name' => 'GitHub',
	'content'  => '',
	'active' => 0,
    ),
   
    'feed' => array(
	'name' => 'RSS Feed',
	'content'  => get_bloginfo( 'rss2_url' ),
	'active' => 1,
    ),
   
    'pinterest' => array(
	'name' => 'Pinterest',
	'content'  => 'http://www.pinterest.com/unifau/',
	'active' => 0,
    ),
    'instagram' => array(
	'name' => 'Instagram',
	'content'  => 'https://instagram.com/uni_fau/',
	'active' => 0,
    ),
     'wikipedia' => array(
	'name' => 'Wikipedia',
	'content'  => 'https://de.wikipedia.org/wiki/Friedrich-Alexander-Universit%C3%A4t_Erlangen-N%C3%BCrnberg',
	'active' => 0,
    ),
); 


/* 
 * Default Link List for Submenus , can be overwritten bei Menu  
 */
$default_link_liste = array( 
	'faculty' => array(    
	    '_title'	=> __('Fakultäten','fau'),
	    'link1'  => array(
		'name'	    => __('Philosophische Fakultät und Fachbereich Theologie', 'fau' ),
		'content'  => 'https://www.phil.fau.de/',
		'class'	    => 'phil',
	    ),
	    'link2'  => array(
		'name'	    => __('Rechts- und Wirtschaftswissenschaftliche Fakultät', 'fau' ),
		'content'  => 'https://www.rw.fau.de/',
		'class'	    => 'rw',
	    ),
	    'link3'  => array(
		'name'	    => __('Medizinische Fakultät', 'fau' ),
		'content'  => 'https://www.med.fau.de/',
		'class'	    => 'med',
	    ),
	    'link4'  => array(
		'name'	    => __('Naturwissenschaftliche Fakultät', 'fau' ),
		'content'  => 'https://www.nat.fau.de/',
		'class'	    => 'nat',
	    ),
	    'link5'  => array(
		'name'	    => __('Technische Fakultät', 'fau' ),
		'content'  => 'https://www.tf.fau.de/',
		'class'	    => 'tf',
	    ),
	),
	'diefau' => array(    
	    '_title'	=> __('Die FAU','fau'),
	    'link1'  => array(
		'name'	    => __('Alle Studiengänge', 'fau' ),
		'content'  => 'https://www.fau.de.de/studium/vor-dem-studium/studiengaenge/alle-studiengaenge/',
	    ),
	    'link2'  => array(
		'name'	    => __('Studium A-Z', 'fau' ),
		'content'  => 'https://www.fau.de/studium/im-studium/studium-a-z/',
	    ),
	    'link3'  => array(
		'name'	    => __('Zahlen, Daten, Fakten', 'fau' ),
		'content'  => 'https://www.fau.de/universitaet/kennzahlen-und-rankings/',
	    ),	
	    'link4'  => array(
		'name'	    => __('Wissenschaftsschwerpunkte', 'fau' ),
		'content'  => 'https://www.fau.de/forschung/forschungsprofil/forschungsprofil-und-wissenschaftsschwerpunkte-der-fau/',
	    ),	
	    'link5'  => array(
		'name'	    => __('Stiften und Fördern', 'fau' ),
		'content'  => 'https://www.fau.de/universitaet/stiften-und-foerdern/',
	    ),	
	),
	'centers' => array(    
	    '_title'	=> __('Einrichtungen','fau'),
	    'link1'  => array(
		'name'	    => __('Universitätsbibliothek', 'fau' ),
		'content'  => 'https://www.ub.fau.de/',
	    ),
	    'link2'  => array(
		'name'	    => __('Rechenzentrum', 'fau' ),
		'content'  => 'https://www.rrze.fau.de/',
	    ),
	    'link3'  => array(
		'name'	    => __('Sprachenzentrum', 'fau' ),
		'content'  => 'http://www.sz.uni-erlangen.de/',
	    ),
	    'link4'  => array(
		'name'	    => __('Graduiertenschule', 'fau' ),
		'content'  => 'http://www.promotion.fau.de/',
	    ),
	  
	),
	
	'infos' => array(    
	    '_title'	=> __('Informationen für','fau'),
	  
	    'link1'  => array(
		'name'	    => __('Studierende', 'fau' ),
		'content'  => 'https://www.fau.de/studium/',
	    ),
	    'link3'  => array(
		'name'	    => __('Alumni', 'fau' ),
		'content'  => 'https://www.fau.de/alumni/',
	    ),	
	    'link4'  => array(
		'name'	    => __('Unternehmen', 'fau' ),
		'content'  => 'https://www.fau.de/patente-gruendung-wissenstransfer/service-fuer-unternehmen/',
	    ),	

	    	
	 
	),
	'meta' => array(
	    'link1'  => array(
		'name'	    => __('Mein Campus', 'fau' ),
		'content'  => 'https://campus.fau.de/',
	    ),
	    'link2'  => array(
		'name'	    => __('UnivIS', 'fau' ),
		'content'  => 'https://univis.fau.de/',
	    ),
	    'link3'  => array(
		'name'	    => __('Stellenangebote', 'fau' ),
		'content'  => 'https://jobs.fau.de/',
	    ),
	    'link4'  => array(
		'name'	    => __('Lageplan', 'fau' ),
		'content'  => 'https://karte.fau.de/',
	    ),
	   
	),
	'techmenu' => array(    
	    'link1'  => array(
		'name'	    => __('Stellenangebote', 'fau' ),
		'content'  => 'https://www.jobs.fau.de/',
	    ),
	    'link2'  => array(
		'name'	    => __('Presse', 'fau' ),
		'content'  => 'https://www.fau.de/presseportal-der-fau/',
	    ),
	    'link3'  => array(
		'name'	    => __('Intranet', 'fau' ),
		'content'  => 'https://www.fau.de/intranet/',
	    ),	
	    'link4'  => array(
		'name'	    => __('Impressum', 'fau' ),
		'content'  => 'https://www.fau.de/impressum/',
	    ),	
	),
);


$default_fau_orga_data = array(
   'fau' => array(
	    'title'		=> __('Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)', 'fau'),
	    'shorttitle'	=> __('FAU', 'fau'),
	    'homeurl'		=> 'https://www.fau.de',
	    'homeurl_en'	=> 'https://www.fau.eu',
	    'url'		=> '%s/img/logos/fau-logo-240x65.svg',
	    'home_imgsrc'	=> get_fau_template_uri().'/img/logos/fau-37x16.gif',
	    'data-imgmobile'	=> get_fau_template_uri().'/img/logos/fau-220x100.gif',
	    'thumbnail'		=> '%s/img/logos/fau-logo-240x65.svg',
    ),
  
    '_faculty'	=> array(
	'med' => array(
		'title'	    => __('Medizinische Fakultät', 'fau'),
		'shorttitle'    => __('Med', 'fau'),
		'homeurl'	    => 'https://med.fau.de',
		'homeurl_en'	    => 'https://med.fau.eu',
		'url'           => '%s/img/logos/logo-med.svg',
		'thumbnail'	=> '%s/img/logos/logo-med.svg',
	),
	'nat' => array(
		'title'	    => __('Naturwissenschaftliche Fakultät', 'fau'),
		'shorttitle'    => __('Nat', 'fau'),
		'homeurl'	    => 'https://nat.fau.de',
		'homeurl_en'	    => 'https://nat.fau.eu',
		'url'           => '%s/img/logos/logo-nat.svg',
		'thumbnail'	=> '%s/img/logos/logo-nat.svg',
	),
	'phil' => array(
		'title'	    => __('Philosophische Fakultät', 'fau'),
		'shorttitle'    => __('Phil', 'fau'),
		'homeurl'	    => 'https://phil.fau.de',
		'homeurl_en'	    => 'https://phil.fau.eu',
		'url'           => '%s/img/logos/logo-phil.svg',
		'thumbnail'	=> '%s/img/logos/logo-phil.svg',
	),
	'rw' => array(
		'title'	    => __('Rechts- und Wirtschaftswissenschaftliche Fakultät', 'fau'),
		'shorttitle'    => __('RW', 'fau'),
		'homeurl'	    => 'https://rw.fau.de',
		'homeurl_en'	    => 'https://rw.fau.eu',
		'url'           => '%s/img/logos/logo-rw.svg',
		 'thumbnail'	=> '%s/img/logos/logo-rw.svg',
	),
	'tf' => array(
		'title'	    => __('Technische Fakultät', 'fau'),
		'shorttitle'    => __('TF', 'fau'),
		'homeurl'	    => 'https://tf.fau.de',
		'homeurl_en'	    => 'http://tf.fau.eu',
		'url'           => '%s/img/logos/logo-tf.svg',
		'thumbnail'	=> '%s/img/logos/logo-tf.svg',
	)
    ),
    
    'fb-wiso' => array(
	    'title'	    => __('Fachbereich Wirtschaftswissenschaften', 'fau'),
	    'shorttitle'    => __('FB WiSo', 'fau'),
	    'homeurl'	    => 'https://wiso.rw.fau.de',
	    'homeurl_en'    => 'https://wiso.rw.fau.eu',
	    'url'           => '%s/img/logos/logo-rw-wiso.svg',
	    'thumbnail'	    => '%s/img/logos/logo-rw-wiso.svg',
    ),
    'fb-jura' => array(
	    'title'	    => __('Fachbereich Rechtswissenschaften', 'fau'),
	    'shorttitle'    => __('FB WiSo', 'fau'),
	    'homeurl'	    => 'https://jura.rw.fau.de',
	    'url'           => '%s/img/logos/logo-rw-jura.svg',
	    'thumbnail'	    => '%s/img/logos/logo-rw-jura.svg',
    ),
    
   
    
);


$default_fau_orga_faculty = array(
    'med', 'nat', 'phil', 'rw', 'tf'
);


$pagebreakargs = array(
    
    'before'   => '<nav class="pagination pagebreaks" aria-label="'.__( 'Seitenüberblick', 'fau' ).'"><p>' . __( 'Seite:', 'fau' ).' <span class="subpages">',
		'after'            => '</span></p></nav>',
		'link_before'      => '<span class="number">',
		'link_after'       => '</span>',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Nächste Seite', 'fau' ),
		'previouspagelink' => __( 'Vorherige Seite', 'fau' ),
		'pagelink'         => '%',
    'echo' => 0);


$default_fau_page_langcodes = array(
	"de" => __('Deutsch','fau'),
	"en" => __('Englisch','fau'),
	"es" => __('Spanisch','fau'),
	"fr" => __('Französisch','fau'),
	"zh" => __('Chinesisch','fau'),
	"ru" => __('Russisch','fau'),
    );

$default_fau_page_menuuebenen = array(
    "1"	=> __('Eine Ebene','fau'),
    "2"	=> __('Zwei Ebenen','fau'),
    "3"	=> __('Drei Ebenen','fau'),
);