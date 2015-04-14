<?php
  // the root url of the site relative to the server root. Will be / on the local server
  define("BASE_URL", "/"); // for dev launch
  
  // the root path .. base_url should usally equal the concat to the end of the DOCROOT
  define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");

  // the sections of the Site
  define("HOME", "");
  define("ABOUT", "About/");
  define("CONTACT", "Contact/");
  
  // image directories
  define("GENERAL", "img/general/");
  define("IMG", "img/");
  define("PROJECTS", "img/projects/");
  
  // TODO:
  // add subdomains for all projects to www.williamlamorie.com
    // xx shirts for mike
    // xx naomi noir(e)
    // xx fingerlakes on tap (e)
    // ++ flag (e)(n)
    // -- dating app
    // -- shoutbox
    // -- php quizer
    // ++ forms (n)
    
  // xx Move all existing files to PHP
  // xx make everything work in PHP
  // xx replace current pics with the new pics for the sections
  
  // add blurbs about projects
  
  // restyle the index
    // -- shrink buttons
    // -- add a text description of the project
    // -- add hidden images for buttons for jQuerry to work on.
    // -- widen the wrapper
    // -- add a background to the top?
    // -- add a new size of responsiveness
    
  // add jQuerry
    // -- botton tops to button bottoms
    // -- fades in and out for above
  
  // spell check
  