<?php

/**
 * this Mantis Plugin will add the noindex, nofollow meta tag to the <head>
 * as well it forbids modern browsers to send link referrer information to targeted websites
 */

class LittleBetterPrivacyPlugin extends MantisPlugin {

    function register() {
        # this sets the noindex and nofollow tags in the header
        # note that this is just a friendly advice to webcrawlers
        # so if you want to be sure, add a htaccess protection to your Mantis installation
        global $g_robots_meta;
        $g_robots_meta = "noindex, nofollow";

        $this->name        = 'LittleBetterPrivacy';
        $this->description = 'Excludes robots and adds no referrer policy to the site meta head-tags.';
        $this->page        = '';

        $this->version  = '1.0.0';
        $this->requires = array(
            "MantisCore" => "2.0.0",
        );

        $this->author  = 'D. Gre';
        $this->contact = '';
        $this->url     = 'https://www.d-gre.net';

    }

    # Here we add the '<meta>' tag to the head, hiding the link referrer information.
    # Unfortunately there isn't (yet) a hook for the meta section of the <head> in Mantis
    # So we have to abuse the EVENT_LAYOUT_RESOURCES for this.
    function hooks() {
        $hooks                             = parent::hooks();
        $hooks[ 'EVENT_LAYOUT_RESOURCES' ] = 'custom_meta';

        return $hooks;
    }

    # This method will the meta tag in the header
    function custom_meta() {
        return "\t<meta name=\"referrer\" content=\"no-referrer\" />\n";
    }
}

