<?php
// require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Welcome MicroTrain2009 For Web Development";
$meta['keywords'] = "MicroTrain2009, contact, web, development";

$content = <<<EOT
        <main>
          <h1>Microtrain 2009</h1>
          <img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="MicroTrain2009 Avatar">
          <p>Welcome to class. We are here to develop web and mobile hybrid applications...</p>
          <h2>Agile Full Stack Web and Hybrid Mobile Application Development</h2>
          <p>Full stack web and hybrid mobile applications developer specializing in full stack JavaScript application
            and architectures. Experienced in all stages of the development life cycle, well versed in numerous
            programming languages.</p>
          <h3>HTML, CSS, JavaScript</h3>
          <p>Learn front-end and client-side development starting with HTML, CSS and JavaScript. 
            Work with libraries and frameworks such as jQuery, Bootstrap and Angular. 
            Apply and use web technology to build hybrid mobile applications using Apache’s Cordova.
          </p>
          <p>Learn how to work with third party APIs from vendors such as Google, Nasa, Twilio and LinkedIn. 
            Learn the server side by working with LAMP (Linux, Apache, MySQL, PHP) and MEAN (MongoDB, Express, Angular, Node,js) stacks. 
            Apply newly acquired backend knowledge to build your own cloud-based server in AWS.
          </p>
          <ul>
              <li>Lecture</li>
              <li>Labs</li>
              <li>Coding Assignments</li>
          </ul>
          <h2>Summary</h2>
          <p>Additionally, security best practices and mobile first design concepts as well as extreme programming, 
            agile and scrum methodologies. You will apply these skills throughout the course building an array of applications to add to your project portfolio. 
          </p>
        </main>
EOT;
    
require '../core/layout.php';
