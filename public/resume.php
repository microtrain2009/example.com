<?php
// require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "MicroTrain2009 Resume For Web Development";
$meta['keywords'] = "MicroTrain2009, resume, web, development";

$content = <<<EOT

        <main>
          <section class="intro">
            <h1>Microtrain2009</h1>
          <div>
            <a href="https://microtrain2009.github.io" target="_blank" rel="noopener">GitHub</a>
            &#x25CF;
            <a href="https://www.linkedin.com/company/microtrain-technologies/" target="_blank" rel="noopener">LinkedIn</a>
            &#x25CF;
            Chicago, IL
            &#x25CF;
            bootcamp@microtrain.net
          </div>
          </section>

          <section>
          <h2 class="text-initial">Full Stack Web and Mobile Developer</h2>
          <p>
            Full stack web and hybrid mobile applications developer specializing in full stack JavaScript application
            and architectures. Experienced in all stages of the development life cycle, well versed in numerous
            programming languages.
        </p>

        <ul>
            <li>Hands-on experience leading all stages of system development efforts, including requirements in
                    definition design, architecture, testing and support.</li>
            <li>Outstanding leadership abilities; able to coordinate and direct all phases of project-based efforts.</li>
        </ul>
      </section>

      <section class="clearfix">
        <h3 class="text-initial">Core Competencies</h3>

        <ul class="cc-left">
          <li>Full Stack Development</li>
            <li>Front End Development</li>

        </ul>

        <ul class="cc-right">
          <li>Hybrid Mobile Development</li>
            <li>Server Side Development</li>
        </ul>
      </section>

      <section class="certs">
        <h2>Certifications and Technical Proficiencies</h2>

        <table>
          <tbody>
            <tr>
              <th>Certifications:</th>
              <td>Agile Certified Scrum Master</td>
            </tr>
            <tr>
              <th>Platforms:</th>
              <td>Linux, LAMP, MEAN, NodeJS</td>
            </tr>
            <tr>
              <th>Databases:</th>
              <td>MySQL, MongoDB</td>
            </tr>
            <tr>
              <th>Tools:</th>
              <td>VS Code, SSH, Gulp, Git</td>
            </tr>
            <tr>
              <th>Languages:</th>
              <td>HTML, CSS, SASS, JavaScript, ES6, PHP, BASH, SQL, TypeScript</td>
            </tr>
          </tbody>
        </table>
  
      </section>

      <section class="emp">
        <h2>Professional Experience</h2>
        <h3 class="clearfix">
          <span class="float-left">MicroTrain Websites - Chicago, IL</span>
          <span class="float-right">2019 - Present</span>
        </h3>
        <p>MicroTrain Websites builds custom web applications for clients across a large number of industries.</p>

        <h4>Web Developer</h4>
        <ul>
            <li>Work with ES6, NodeJS, HTML, JavaScript, CSS, MySQL and MongoDB to build customized web applications for a diverse set of customers.</li>
            <li>Designed the application to meet the users’ requirements document.</li>
            <li>Ensured corporate and department objectives were accomplished in accordance with outlined objectives and mission statements.</li>
        </ul>

        <h3 class="clearfix">
          <span class="float-left">MicroTrain Technologies - Lombard, IL</span>
          <span class="float-right">2017 - 2019</span>
        </h3>
        <p>MicroTrain Technologies creates programs for clients across a large number of industries.</p>

        <h4>Content Designer</h4>
        <ul>
            <li>Provide daily content to meet the users’ requirements document.</li>
            <li>Designed and edited images to meet the users’ requirements document.</li>
            <li>Ensured corporate standards were followed in accordance with outlined objectives and mission statements.</li>
        </ul>
        </ul>

        <h5>Key Contributions</h5>
        <ul>
            <li>Full stack LAMP development(Linux, Apache, MySQL, PHP, Bash, Ajax).</li>
            <li>Recognized for the development of excellent business relationships, providing exemplary customer service.</li>
        </ul>
      </section>

      <section class="edu">
        <h2>Education</h2>

        <h3 class="clearfix">
          MicroTrain Technologies - Chicago, IL
        <span class="float-right">Summer 2020</span>
        </h3>
        <h4>Agile Full Stack Web and Hybrid Mobile Application Development</h4>
        <p>Front-end and client-side development with HTML, CSS and JavaScript. Work with libraries and frameworks such as jQuery, Bootstrap and Angular. Build tools such as Yarn and Gulp. Use web technology to build hybrid mobile applications using Apache’s Cordova.</p>
        <p>Work with third party APIs from vendors such as Google, NASA, Twilio and so on. Server side integration with LAMP (Linux, Apache, MySQL, PHP) and MEAN (MongoDB, Express, Angular, Node,js) stacks. Build, set-up, maintain own cloud based server.</p>
        
        <h3 class="clearfix">
          MicroTrain Technologies - Chicago, IL
        <span class="float-right">Fall 2020</span>
        </h3>
        <h4>Agile Scrum Master</h4>
        <p>Covering the principles of Agile and Scrum methodology through a combination of robust simulations, hands-on experimentation and high-quality instruction. Currently learning the fundamentals of Scrum and how to facilitate, coach and lead an Agile project.</p>
      </section>

      </main>
EOT;
include '../core/layout.php';