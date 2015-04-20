
    <div id="wrapper">
      <section>
        <div id="gallery">
          <ul class="left-row">
<?php
  
  $row_width = 3; // determines how many items to a given row
  
  // loops though a 1-indexed array of content
  foreach($content as $number => $content){
    
    // handle div control where needed.
    if(($number -1) % $row_width == 0  && $number -1 != 0){
      // every other row should have the right-row class.
      
      if (($number -1) % (2*$row_width) != 0){ // if an indented row
        echo <<< EOT
          </ul>
          <ul class="right-row">
  
EOT;
      } else {  // if an un-indented row
        echo <<< EOT
          </ul>
          <ul class="left-row">
  
EOT;
      }
    }
  
  // make each individual image
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
        </div>
      </section>