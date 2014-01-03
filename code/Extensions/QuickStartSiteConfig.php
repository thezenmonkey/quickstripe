<?php

class QuickStartSiteConfig extends DataExtension {
	
	
	private static $db = array(
		//Business Info
		'BusinessName' => 'Varchar',
		'StreetAddress' => 'Varchar',
		'City' => 'Varchar',
		'Province' => 'Varchar',
		'PostalCode' => 'Varchar',
		'PhoneNumber' => 'Varchar',
		'FaxNumber' => 'Varchar',
		'MainEmail' => 'Varchar',
		'SiteEmail' => 'Varchar',
		//Social Media
		'Twitter' => 'Varchar',
		'LinkedInURL' => 'Varchar',
		'FacebookURL' => 'Varchar',
		'GooglePlusURL' => 'Varchar',
		'PinterestURL' => 'Varchar',
		'YouTubeURL' => 'Varchar',
		'InstagramURL' => 'Varchar',
		'TumblrURL' => 'Varchar'
	);
	
	private static $has_one = array(
		"Logo" => "Image"
		//"DefaultThankYou" => "ThankYouPage"
	);
	
	
	
	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab("Root.Main", TextField::create("BusinessName"));
		$fields->addFieldToTab("Root.Main", TextField::create("StreetAddress"));
		$fields->addFieldToTab("Root.Main", TextField::create("City"));
		$fields->addFieldToTab("Root.Main", TextField::create("Province"));
		$fields->addFieldToTab("Root.Main", TextField::create("PostalCode"));
		$fields->addFieldToTab("Root.Main", TextField::create("PhoneNumber"));
		$fields->addFieldToTab("Root.Main", TextField::create("FaxNumber"));
		$fields->addFieldToTab("Root.Main", EmailField::create("MainEmail", 'Main Contact Email'));
		$fields->addFieldToTab("Root.Main", EmailField::create("SiteEmail", 'Email for Contact Forms'));
		$fields->addFieldToTab("Root.Main", UploadField::create("Logo"));
		
		$socialField = ToggleCompositeField::create(
	 		"SocialGroup",
	 		"Social Media",
	 		array (
	 			TextField::create("Twitter", 'Twitter User Name')->setDescription('User Name WITHOUT the at symobole (@) '),
	 			TextField::create("FacebookURL", 'Facebook URL'),
	 			TextField::create("LinkedInURL", 'LinkedIn URL'),
	 			TextField::create("GooglePlusURL", 'Google+ URL'),
	 			TextField::create("PinterestURL", 'Pinterest URL'),
	 			TextField::create("YouTubeURL", 'YouTube URL'),
	 			TextField::create("InstagramURL", 'Instagram URL'),
	 			TextField::create("TumblrURL", 'Tumblr URL')
	 		)
	 	);
	 	
	 	$fields->addFieldToTab("Root.Main", $socialField);	 	
	}
}