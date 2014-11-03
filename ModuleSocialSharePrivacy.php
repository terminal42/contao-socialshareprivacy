<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * socialshareprivacy
 * Copyright (C) 2010,2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * PHP version 5
 * @copyright  InfinitySoft 2010,2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Avisota
 * @license    MIT License
 * @filesource
 */


/**
 * Class ModuleSocialSharePrivacy
 */
class ModuleSocialSharePrivacy extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_socialshareprivacy';
	
	
	/**
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### SocialSharePrivacy ###';
			return $objTemplate->parse();
		}
		
		return parent::generate();
	}
	
	
	/**
	 * Generate the content element
	 */
	public function compile()
	{
		$objSocialSharePrivacy = new SocialSharePrivacy();

		$objSocialSharePrivacy->setId($this->id);

		$arrSettings = array();
		
		// global options
		if ($this->socialshareprivacy_info_link)
		{
			$objSocialSharePrivacy->setInfoLink($this->socialshareprivacy_info_link);
		}
		if ($this->socialshareprivacy_txt_help)
		{
			$objSocialSharePrivacy->setTextHelp($this->socialshareprivacy_txt_help);
		}
		if ($this->socialshareprivacy_settings_perma)
		{
			$objSocialSharePrivacy->setSettingsPerma($this->socialshareprivacy_settings_perma);
		}
		if ($this->socialshareprivacy_cookie_path)
		{
			$objSocialSharePrivacy->setCookiePath($this->socialshareprivacy_cookie_path);
		}
		if ($this->socialshareprivacy_cookie_domain)
		{
			$objSocialSharePrivacy->setCookieDomain($this->socialshareprivacy_cookie_domain);
		}
		if ($this->socialshareprivacy_cookie_expires)
		{
			$objSocialSharePrivacy->setCookieExpires($this->socialshareprivacy_cookie_expires);
		}
		if ($this->socialshareprivacy_css_path)
		{
			$objSocialSharePrivacy->setCssPath($this->socialshareprivacy_css_path);
		}
		if ($this->socialshareprivacy_uri)
		{
			$objSocialSharePrivacy->setUri(urldecode($this->socialshareprivacy_uri));
		}
		
		// facebook options
		$objSocialSharePrivacy->setFacebookEnabled($this->socialshareprivacy_facebook_status);
		if ($this->socialshareprivacy_facebook_dummy_img)
		{
			$objSocialSharePrivacy->setFacebookDummyImage($this->socialshareprivacy_facebook_dummy_img);
		}
		if ($this->socialshareprivacy_facebook_txt_info)
		{
			$objSocialSharePrivacy->setFacebookTextInfo($this->socialshareprivacy_facebook_txt_info);
		}
		if ($this->socialshareprivacy_facebook_txt_fb_off)
		{
			$objSocialSharePrivacy->setFacebookTextOff($this->socialshareprivacy_facebook_txt_fb_off);
		}
		if ($this->socialshareprivacy_facebook_txt_fb_on)
		{
			$objSocialSharePrivacy->setFacebookTextOn($this->socialshareprivacy_facebook_txt_fb_on);
		}
		$objSocialSharePrivacy->setFacebookPermaOption($this->socialshareprivacy_facebook_perma_option);
		if ($this->socialshareprivacy_facebook_display_name)
		{
			$objSocialSharePrivacy->setFacebookDisplayName($this->socialshareprivacy_facebook_display_name);
		}
		if ($this->socialshareprivacy_facebook_referrer_track)
		{
			$objSocialSharePrivacy->setFacebookReferrerTrack($this->socialshareprivacy_facebook_referrer_track);
		}
		if ($this->socialshareprivacy_facebook_language)
		{
			$objSocialSharePrivacy->setFacebookLanguage($this->socialshareprivacy_facebook_language);
		}
		if ($this->socialshareprivacy_facebook_action)
		{
			$objSocialSharePrivacy->setFacebookAction(urldecode($this->socialshareprivacy_facebook_action));
		}

		// twitter options
		$objSocialSharePrivacy->setTwitterEnabled($this->socialshareprivacy_twitter_status);
		if ($this->socialshareprivacy_twitter_dummy_img)
		{
			$objSocialSharePrivacy->setTwitterDummyImage($this->socialshareprivacy_twitter_dummy_img);
		}
		if ($this->socialshareprivacy_twitter_txt_info)
		{
			$objSocialSharePrivacy->setTwitterTextInfo($this->socialshareprivacy_twitter_txt_info);
		}
		if ($this->socialshareprivacy_twitter_txt_twitter_off)
		{
			$objSocialSharePrivacy->setTwitterTextOff($this->socialshareprivacy_twitter_txt_twitter_off);
		}
		if ($this->socialshareprivacy_twitter_txt_twitter_on)
		{
			$objSocialSharePrivacy->setTwitterTextOn($this->socialshareprivacy_twitter_txt_twitter_on);
		}
		$objSocialSharePrivacy->setTwitterPermaOption($this->socialshareprivacy_twitter_perma_option);
		if ($this->socialshareprivacy_twitter_display_name)
		{
			$objSocialSharePrivacy->setTwitterDisplayName($this->socialshareprivacy_twitter_display_name);
		}
		if ($this->socialshareprivacy_twitter_referrer_track)
		{
			$objSocialSharePrivacy->setTwitterReferrerTrack($this->socialshareprivacy_twitter_referrer_track);
		}
		if ($this->socialshareprivacy_twitter_tweet_text)
		{
			$objSocialSharePrivacy->setTwitterTweetText($this->socialshareprivacy_twitter_tweet_text);
		}
		if ($this->socialshareprivacy_twitter_language)
		{
			$objSocialSharePrivacy->setTwitterLanguage($this->socialshareprivacy_twitter_language);
		}

		// google+ options
		$objSocialSharePrivacy->setGplusEnabled($this->socialshareprivacy_gplus_status);
		if ($this->socialshareprivacy_gplus_dummy_img)
		{
			$objSocialSharePrivacy->setGplusDummyImage($this->socialshareprivacy_gplus_dummy_img);
		}
		if ($this->socialshareprivacy_gplus_txt_info)
		{
			$objSocialSharePrivacy->setGplusTextInfo($this->socialshareprivacy_gplus_txt_info);
		}
		if ($this->socialshareprivacy_gplus_txt_gplus_off)
		{
			$objSocialSharePrivacy->setGplusTextOff($this->socialshareprivacy_gplus_txt_gplus_off);
		}
		if ($this->socialshareprivacy_gplus_txt_gplus_on)
		{
			$objSocialSharePrivacy->setGplusTextOn($this->socialshareprivacy_gplus_txt_gplus_on);
		}
		$objSocialSharePrivacy->setGplusPermaOption($this->socialshareprivacy_gplus_perma_option);
		if ($this->socialshareprivacy_gplus_display_name)
		{
			$objSocialSharePrivacy->setGplusDisplayName($this->socialshareprivacy_gplus_display_name);
		}
		if ($this->socialshareprivacy_gplus_referrer_track)
		{
			$objSocialSharePrivacy->setGplusReferrerTrack($this->socialshareprivacy_gplus_referrer_track);
		}
		if ($this->socialshareprivacy_gplus_language)
		{
			$objSocialSharePrivacy->setGplusLanguage($this->socialshareprivacy_gplus_language);
		}

		$objSocialSharePrivacy->setIncludeJQuery(!$this->nojquery);

		$this->Template->socialshareprivacy = $objSocialSharePrivacy->generate();
	}
	
	public static function encodeSettings($arrSettings)
	{
		$strJson = json_encode($arrSettings);
		$strJson = preg_replace_callback('#"script:(.*)"#U', array('ModuleSocialSharePrivacy', 'encodeSettingsCallback'), $strJson);
		return $strJson;
	}
	
	public static function encodeSettingsCallback($m)
	{
		return html_entity_decode($m[1]);
	}
}
