<?php

// get the config file, set the section.
require_once("inc/config.php");
$section = HOME;

// set the content.
include(ROOT_PATH."Content/home.php");

// header
include(ROOT_PATH."inc/head.php");
include(ROOT_PATH."inc/nav.php");

// body content
include(ROOT_PATH."Home/body.php");

// closing footer
include(ROOT_PATH."inc/footer.php");
