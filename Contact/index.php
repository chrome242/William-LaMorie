<?php

// get the config file, set the section.
require_once("../inc/config.php");
$section = CONTACT;

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/nav.php");

// body content
// this is a straigh pull from the content section as there isn't much to be
// done with it, for the time being. However, eventually this might have a
// blog like element later.
include(ROOT_PATH."Content/contact.php");

// closing footer
include(ROOT_PATH."inc/footer.php");
