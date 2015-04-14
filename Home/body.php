
    <div id="wrapper">
      <section>
        <ul id="gallery">
<?php
  foreach($content as $number => $content)
  {

  $image = PROJECTS.$content[0];
  $desc = $content[1];
  $url = $content[2];
  echo <<< EOT
          <li>
            <a target="_blank" href="$url">
              <img class="button" src="$image" alt="$desc">
              <p>$desc</p>
            </a>
          </li>

EOT;
  }
  ?>
        </ul>
      </section>