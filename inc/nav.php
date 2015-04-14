  <body>
    <header>
      <a href="index.html" id="logo">
        <h1>William LaMorie</h1>
        <h2>Web &amp; Application Development</h2>
      </a>
      <nav>
        <ul>
          <li><a href="<?php echo BASE_URL.HOME; ?>" <?php if($section == HOME) echo 'class="selected"';?>>Portfolio</a></li>
          <li><a href="<?php echo BASE_URL.ABOUT; ?>" <?php if($section == ABOUT) echo 'class="selected"';?>>About</a></li>
          <li><a href="<?php echo BASE_URL.CONTACT; ?>" <?php if($section == CONTACT) echo 'class="selected"';?>>Contact</a></li>
        </ul>
      </nav>
    </header>