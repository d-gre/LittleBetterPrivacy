# Little Better Privacy

<hr>

### Description
This little plugin excludes robots and adds no referrer policy by changing the head-tags of your Mantis installation.

```
<meta name="robots" content="noindex, nofollow" />
<meta name="referrer" content="no-referrer">
```

Note that note that the "robots"-tag is just a friendly advice to webcrawlers and the
"referrer"-tag is only supported by modern browsers.
so if you want to be sure, add a htaccess protection to your Mantis installation
<hr>

### Installation

* Clone this repo into the <code>/pugins</code> folder of your Mantis installation
* In Mantis go to <code>/manage_plugin_page.php</code> and the Available Plugins section and press the "Installation" button.
* Done.
<hr>

### Note

This plugin overrides the <code>$g_robots_meta</code> that you might have changed in your <code>config.inc.php</code> 