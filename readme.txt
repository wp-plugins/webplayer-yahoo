=== WebPlayer Yahoo! ===
Contributors: pivari
Donate link: http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/
Tags: webplayer, yahoo
Requires at least: 2.7
Tested up to: 3.4.1
Stable tag: 2.1.0

Enables Yahoo! WebPlayer on all pages.

== Description ==

This plugin adds the required javascript for WebPlayer Yahoo! and allows to set  the parameters with a simply interface.

Using this plugin you can change your theme or upgrade it without set everytime Yahoo! WebPlayer code.

For more information about Yahoo! WebPlayer visit:
[webplayer.yahoo.com](http://webplayer.yahoo.com/)

Try [Play your PlayList webapp](http://www.pivari.com/webapps/play-your-playlist/)

With songs you will see my face. If you prefer to use your face a donation is a good idea.
[Donate to Fabrizio Pivari](http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/)

== Installation ==

1. Upload `webplayer-yahoo` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Customize the plugin in the settings page (Admin > Settings > WebPlayer Yahoo!)

== Frequently Asked Questions ==

= Yahoo! WebPlayer does not play in few browsers =

Minimum requirements
o The Yahoo! WebPlayer relies on JavaScript to work. If your website doesn't allow JavaScript, or if JavaScript is disabled in a user's browser, the Yahoo! WebPlayer will not appear.
o The Yahoo! WebPlayer currently uses some Flash, and therefore the user must have Flash installed for the player to work. We are working to remove this limitation sometime soon.

To find a solution to every your possible problem about Yahoo! WebPlayer 
use the official forum
http://tech.groups.yahoo.com/group/yhoomediaplayer/

== Screenshots ==

1. WebPlayer Yahoo! settings page.
2. WebPlayer Yahoo! with Fabrizio Pivari face. If you prefer to use your face a donation is a good idea. [Donate to Fabrizio Pivari](http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/)
3. Plugins / Installed Plugin / WebPlayer Yahoo!
4. Parametri di WebPlayer Yahoo! (italian translation)

== Changelog ==

= 2.1.0 =
Corrected volume bug

= 2.0.0 =
Languages support with Italian translation.
At the moment we have decided to not translate WebPlayer Yahoo! parameters.

= 1.8.0 =
Tested on WP 3.4-beta1
You can use wmodeoverride
To prevent itself from appearing behind embedded YouTube videos, the Yahoo! WebPlayer changes the wmode setting of these embedded videos. The wmodeoverride parameter allows you to turn this feature on or off. Set wmodeoverride to 'true' to turn this feature on and set the parameter to 'false' to turn it off. The default setting is 'true'.

= 1.7 =
You can use displaystate
The displaystate parameter controls the state in which the player will appear on the page on page load. Setting the displaystate to 0 will load the Yahoo! WebPlayer in its minimized state, which is the small rectangular tab at the bottom left of the page. Setting the displaystate to 1 will load the Yahoo! WebPlayer in maximized state, which will reveal the entire player on page load. The default value is 0.

= 1.6.1 =
Volume setting works.
We have found the bug in WebPlayer documentation. This is the correct describtion:
The volume parameter sets the default volume of the Yahoo! WebPlayer on page load. The player expects a floating number between 0.00 and 1.00. The default value is 0.50.

= 1.6 =
You can use playlink
The playlink parameter controls whether or not clicking the link text to the right of the play button plays the item in the player, or simply lets the browser open the link as it would if the Yahoo! WebPlayer wasn't on the page.
Setting playlink to false will mean that clicking on a media link will NOT play it in the Yahoo! WebPlayer. Only the play button will launch the player when playlink is set to false and the browser will decide what happens when the link itself is clicked.
Setting playlink to true will cause the player to launch whenever the link itself is clicked. Both the play button and the link launch the player when playlink is set to true.
The default value for playlink is "media-only", which means the player will launch when a user clicks on links to audio or video, but not for links to "object" pages (e.g. Movie page on Yahoo! Movies). Links to mp3, wma, YouTube videos, etc... will cause the player to launch while a link to a Yahoo! Movie page will open that URL in your browser rather than playing the trailer. 

= 1.5.3 =
Corrected a bug in volume setting

= 1.5.1 =
Changed the js from http://webplayer.yahooapis.com/player-beta.js to
http://webplayer.yahooapis.com/player.js

= 1.5 =
You can set volume
It doesn't seem to work and I've put it in a different Postbox
The volume parameter sets the default volume of the Yahoo! WebPlayer on page load. The player expects a floating number between 0.0 and 1.0. The default value is 0.5, or 50%.

= 1.4 =
You can set linkConfig
linkconfig is brand new. We have not even had a chance to add it to the documentation.
Right now, it's only used to prevent play buttons from appearing next to youtube video page links

= 1.3 =
Postbox for a nicer configuration page

= 1.2 =
Settings and Support in Plugins / Installed Plugin / WebPlayer Yahoo!
in the Description column

= 1.1 =
You can use Settings in Plugins / Installed Plugin / WebPlayer Yahoo!
in the Plugin column

= 1.0 =
You can set defaultalbumart
The defaultalbumart parameter allows you to set your own image inside the Yahoo! WebPlayer that appears while audio is playing. This image appears to the right of the volume control, next to the item's title for all items in your playlist. A placeholder image will appear by default and no image will appear while video is playing.
We recommend 205px x 205px for best appearance. 
The default image in WebPlayer Yahoo! wordpress plugin is http://www.pivari.com/fabrizio-pivari-205x205.jpg
If you prefer to use your face a donation is a good idea. [Donate to Fabrizio Pivari](http://www.pivari.com/wordpress-plugins/webplayer-yahoo-wp-plugin/)

= 0.9 =
* Minor changes in code and documentation

= 0.8 =
* You can set autoadvance true or false.
The autoadvance parameter controls whether or not the player automatically plays the next item in the playlist after the previous item is done playing. Setting autoadvance to "false" will tell the Yahoo! WebPlayer to NOT advance to the next track automatically once the current track finishes playing. The default value is true. 

= 0.7 =
* You can set autoplay true or false.
The autoplay parameter lets you start playing music as soon as your site's visitor lands on your page. Setting autoplay to "true" will start the first song automatically after the player loads. The default value is "false".

= 0.6 =
* You can set termDetection on or off.
Yahoo! WebPlayer looks for terms it recognizes in the text of a page and adds play buttons next to them. Then you can click "play" to watch related videos right there on the page. The default value is "off".

= 0.4 =
* First public release

== Upgrade Notice ==

= 2.1.0 =
Corrected volume bug. Tested on 3.4.1

= 2.0.0 =
Languages support with Italian translation. Tested on WP 3.4-RC1

= 1.8.0 =
Tested on WP 3.4-beta1. You can use wmodeoverride

= 1.7 =
You can use displaystate. It doesn't seem to work.

= 1.6.1 =
Volume setting works.
We have found the bug in WebPlayer documentation.

= 1.6 =
You can use playlink. It doesn't seem to work.
Better documentation.

= 1.5.3 =
Corrected a bug in volume setting

= 1.5.1 =
Changed the js from http://webplayer.yahooapis.com/player-beta.js to
http://webplayer.yahooapis.com/player.js

= 1.5 =
You can set volume. It doesn't seem to work.

= 1.4 =
You can set linkConfig

= 1.3 =
Postbox for a nicer configuration page

= 1.2 =
Settings and Support in Plugins / Installed Plugin / WebPlayer Yahoo!
in the Description column

= 1.1 =
Settings in Plugins / Installed Plugin / WebPlayer Yahoo!

= 1.0 =
Optimize the code and the new set defaultalbumart

= 0.9 =
* Minor changes in code and documentation

= 0.8 =
* Optimize the code and the new set autoadvance

= 0.7 =
* Optimize the code and the new set autoplay

= 0.6 =
* Optimize the code and the new set termDetection

= 0.4 =
* First public release


