<?php
// require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Welcome MicroTrain2009 For Web Development";
$meta['keywords'] = "MicroTrain2009, contact, web, development";

$content = <<<EOT
    <main class="thanks">
      <p>Thank you for contacting MicroTrain 2009, We will return your message shortly.</p>
    </main>
EOT;

include '../core/layout.php';
