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
  
  // todo:
  // -- Move all existing files to PHP
  // -- make everything work in PHP
  // -- replace current pics with the new pics for the sections
  // -- make links for projects
  //  -- Mike the frog
  //  -- dating app
  //  -- monster draw
  //  xx naomi noir (e)
  //  xx fingerlakes on tap (e)
  //  -- shout it box
  //  -- php quizzer
  //  -- flag (e)
  // -- make subdomians for all the new sections
  //  -- Mike the frog
  //  -- dating app
  //  -- monster draw
  //  xx naomi noir (e)
  //  xx fingerlakes on tap (e)
  //  -- shout it box
  //  -- php quizzer
  //  -- flag (e)
  // -- add new styling elements
  