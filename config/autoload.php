<?php

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
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'SocialSharePrivacy'       => 'system/modules/socialshareprivacy/classes/SocialSharePrivacy.php',
    'ModuleSocialSharePrivacy' => 'system/modules/socialshareprivacy/modules/ModuleSocialSharePrivacy.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_socialshareprivacy'     => 'system/modules/socialshareprivacy/templates/modules',
    'socialshareprivacy_default' => 'system/modules/socialshareprivacy/templates/socialshareprivacy',
));
