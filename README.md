# Socialshareprivacy script 4 Contao

This extension provide the [socialshareprivacy script](http://www.heise.de/extras/socialshareprivacy) from Heise as a Contao module.

Since version 1.4 you can use the class SocialSharePrivacy to add the bar wherever you want.

```php
$objSocialSharePrivacy = new SocialSharePrivacy();

// enable facebook
$objSocialSharePrivacy->setFacebookEnabled(true);
// enable twitter
$objSocialSharePrivacy->setTwitterEnabled(true);
// enable google+
$objSocialSharePrivacy->setGplusEnabled(true);

// disable jquery if you allready add it by yourself
$objSocialSharePrivacy->setIncludeJQuery(false);

// set the uri to ever url you like, for example an event
$objSocialSharePrivacy->setUri($this->replaceInsertTags('{{event_url::1}}'));
// please remind, using insert tags like this is not a good idea!

// generate the social bar
echo $objSocialSharePrivacy->generate();
```