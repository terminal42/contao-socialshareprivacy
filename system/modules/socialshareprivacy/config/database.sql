-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `socialshareprivacy_nojquery` char(1) NOT NULL default '',
  `socialshareprivacy_info_link` varchar(255) NOT NULL default '',
  `socialshareprivacy_txt_help` varchar(255) NOT NULL default '',
  `socialshareprivacy_settings_perma` varchar(255) NOT NULL default '',
  `socialshareprivacy_cookie_path` varchar(255) NOT NULL default '',
  `socialshareprivacy_cookie_domain` varchar(255) NOT NULL default '',
  `socialshareprivacy_cookie_expires` varchar(255) NOT NULL default '',
  `socialshareprivacy_css_path` varchar(255) NOT NULL default '',
  `socialshareprivacy_template` varchar(32) NOT NULL default '',
  `socialshareprivacy_facebook_status` char(1) NOT NULL default '',
  `socialshareprivacy_facebook_app_id` varchar(255) NOT NULL default '',
  `socialshareprivacy_facebook_dummy_img` blob NULL,
  `socialshareprivacy_facebook_txt_info` varchar(255) NOT NULL default '',
  `socialshareprivacy_facebook_txt_fb_off` varchar(255) NOT NULL default '',
  `socialshareprivacy_facebook_txt_fb_on` varchar(255) NOT NULL default '',
  `socialshareprivacy_facebook_perma_option` char(1) NOT NULL default '',
  `socialshareprivacy_facebook_display_name` varchar(255) NOT NULL default '',
  `socialshareprivacy_facebook_referrer_track` varchar(255) NOT NULL default '',
  `socialshareprivacy_facebook_language` char(5) NOT NULL default '',
  `socialshareprivacy_twitter_status` char(1) NOT NULL default '',
  `socialshareprivacy_twitter_dummy_img` blob NULL,
  `socialshareprivacy_twitter_txt_info` varchar(255) NOT NULL default '',
  `socialshareprivacy_twitter_txt_twitter_off` varchar(255) NOT NULL default '',
  `socialshareprivacy_twitter_txt_twitter_on` varchar(255) NOT NULL default '',
  `socialshareprivacy_twitter_perma_option` char(1) NOT NULL default '',
  `socialshareprivacy_twitter_display_name` varchar(255) NOT NULL default '',
  `socialshareprivacy_twitter_referrer_track` varchar(255) NOT NULL default '',
  `socialshareprivacy_twitter_tweet_text` varchar(120) NOT NULL default '',
  `socialshareprivacy_gplus_status` char(1) NOT NULL default '',
  `socialshareprivacy_gplus_dummy_img` blob NULL,
  `socialshareprivacy_gplus_txt_info` varchar(255) NOT NULL default '',
  `socialshareprivacy_gplus_txt_gplus_off` varchar(255) NOT NULL default '',
  `socialshareprivacy_gplus_txt_gplus_on` varchar(255) NOT NULL default '',
  `socialshareprivacy_gplus_perma_option` char(1) NOT NULL default '',
  `socialshareprivacy_gplus_display_name` varchar(255) NOT NULL default '',
  `socialshareprivacy_gplus_referrer_track` varchar(255) NOT NULL default '',
  `socialshareprivacy_gplus_language` char(2) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
