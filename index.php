<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script>
    $(function(){
      $("#navbar").load("navbar.html");
    });
  </script>
  <head>
  </head>
  <body>
    <div class="bar" id="nav-bar">
      <div>
        <a href="index.php"><img src="images/home.png" class="home-svg"></a>
      </div>
      <div class="bar-links">
        <a class="nav-element" href="college.html">College</a>
        <a class="nav-element" href="extra.html">About Me</a>
        <a href="message.php" class="nav-element">Message</a>
      </div>
    </div>
  

  
    <div class="body-large">
      <!--<img class="headshot" src="images/headshot.jpg"> -->
      <div class="intro">
        <div>
          <div>
        <p class="intro-head">Hi! I'm Lorelei Trimberger.</p>
        <p class="intro-body">I am a senior computer student at the University of Nebraska-Lincoln. I will be joining the Federal Reserve
          Bank of Kansas City full time to be a software engineer in July.</p>
        </div>
        <div class="time" id="timeContainer"></div>
        </div>
          <br>
          <br>
          <div>
            <div class="large-professionexperience">
              <div class="basic-info">
                <img class="logos" src="images/fedLogo.jpeg" alt="federal reserve bank" id="fed">
                <div id="align-titles">
                  <div>Software Engineer Intern</div>
                  <div>Federal Reserve Bank of Kansas City</div>
                  <div>May 2023 - August 2023;
                    <br>
                    July 2024</div>
                </div>
              </div>
              <div class="hide-fed-details" id="fed-description">
                Over the summer of 2023, I interned at the Federal Reserve Bank of Kansas City. While I was here, I worked on 
                a project for the human resources center from start to finish using a technology no one else at the Fed had experience 
                with. This project was a low-code no-code solution due to the time restriction of getting past the security restrictions.
                I worked closely with another intern on this project and together we followed Agile methodology, learned lots about 
                the design process and UI/UX design. We worked closely with our stakeholders and created a user guide for future maintence.
              </div>
            </div>
            <div class="large-professionexperience">
              <div class="basic-info">
                <img class="logos" src="images/molex.png" alt="molex" id="molex">
                <div id="align-titles">
                  <div>Software Engineer Intern</div>
                  <div>Molex</div>
                  <div>August 2022 - May 2023;
                    <br>
                    August 2023 - May 2024</div>
                  </div>
              </div>
              <div class="hide-molex-details" id="molex-description">
                I am currently an intern at Molex and have been so for the entirity of my junior and senior year of college. At Molex,
                update software using MVC, C# .NET, Javascript, SQL, HTML, CSS, jQuery, and Bootstrap to maintain and update legacy code. 
                Recently, I've been working on a lot of new development where I've been creating dashboards to help the warehouse workers
                know what machines and tools need to worked on. I collaborate with other developers and stakeholders in the projects to 
                debug code and problem solve.
              </div>
            </div>
            <div class="large-professionexperience">
              <div class="basic-info">
                <img class="logos" src="images/rentvisionLogo.jpeg" alt="rentvision" id="rv">
                <div id="align-titles">
                  <div>Software Engineer Intern</div>
                  <div>RentVision</div>
                  <div>May 2022 - August 2022</div>
                </div>
              </div>
              <div class="hide-rv-details" id="rv-description">
                While I interned at RentVision, I worked on software updates and addressed bus using Java, React, HTML, CSS, Javascript, 
                SQL, and AWS. I worked in partnerships across multiple teams to maxmize productivity and followed Agile and Scrum methodology.
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="intro-body">Contact Information</div>
          <div class="intro-body contact-body">
            <div>loreleirtrimberger@gmail.com</div>
            <div>224-545-1962</div>
            <div><a src="https://www.linkedin.com/in/lorelei-trimberger-33515a1b5/">https://www.linkedin.com/in/lorelei-trimberger-33515a1b5/</a></div>
            <div><a src="https://github.com/loreleitrim">https://github.com/loreleitrim</a></div>
          </div>
          </p>
      </div>
    </div>

    <div class="body-small">
      <div id="dropdown-nav-bar">
        <div class="dropdown">
          <button class="btn nav-carat dropdown-toggle" type="button" data-toggle="dropdown">
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="college.html">College</a></li>
            <li><a href="extra.html">About Me</a></li>
            <li><a href="message.php">Message</a></li>
          </ul>
        </div>
      </div>
      <div class="body-small-header">
        <p class="intro-head">Hi I'm Lorelei Trimberger!</p>
      </div>
      <p class="intro-body">I am a senior computer student at the University of Nebraska-Lincoln and I am graduating in May 2024. 
        After graudation, I am moving to Kansas City to work at the Federal Reserve Bank of Kansas City as a software engineer.
        <br>
        <br>
        
        <div>
          <div class="large-professionexperience">
            <div class="basic-info">
              <img class="logos" src="images/fedLogo.jpeg" alt="federal reserve bank" id="fed">
              <div id="align-titles">
                <div>Software Engineer Intern</div>
                <div>Federal Reserve Bank of Kansas City</div>
                <div>May 2023 - August 2023;
                  <br>
                  July 2024</div>
              </div>
            </div>
            <div class="hide-fed-details" id="fed-description">
              Over the summer of 2023, I interned at the Federal Reserve Bank of Kansas City. While I was here, I worked on 
              a project for the human resources center from start to finish using a technology no one else at the Fed had experience 
              with. This project was a low-code no-code solution due to the time restriction of getting past the security restrictions.
              I worked closely with another intern on this project and together we followed Agile methodology, learned lots about 
              the design process and UI/UX design. We worked closely with our stakeholders and created a user guide for future maintence.
            </div>
          </div>
          <div class="large-professionexperience">
            <div class="basic-info">
              <img class="logos" src="images/molex.png" alt="molex" id="molex">
              <div id="align-titles">
                <div>Software Engineer Intern</div>
                <div>Molex</div>
                <div>August 2022 - May 2023;
                  <br>
                  August 2023 - May 2024</div>
                </div>
            </div>
            <div class="hide-molex-details" id="molex-description">
              I am currently an intern at Molex and have been so for the entirity of my junior and senior year of college. At Molex,
              update software using MVC, C# .NET, Javascript, SQL, HTML, CSS, jQuery, and Bootstrap to maintain and update legacy code. 
              Recently, I've been working on a lot of new development where I've been creating dashboards to help the warehouse workers
              know what machines and tools need to worked on. I collaborate with other developers and stakeholders in the projects to 
              debug code and problem solve.
            </div>
          </div>
          <div class="large-professionexperience">
            <div class="basic-info">
              <img class="logos" src="images/rentvisionLogo.jpeg" alt="rentvision" id="rv">
              <div id="align-titles">
                <div>Software Engineer Intern</div>
                <div>RentVision</div>
                <div>May 2022 - August 2022</div>
              </div>
            </div>
            <div class="hide-rv-details" id="rv-description">
              While I interned at RentVision, I worked on software updates and addressed bus using Java, React, HTML, CSS, Javascript, 
              SQL, and AWS. I worked in partnerships across multiple teams to maxmize productivity and followed Agile and Scrum methodology.
            </div>
          </div>
        </div>
        <br>
        <br>

        <div class="contact-info intro-body">Contact Information</div>
          <div class="intro-body">
            <div>loreleirtrimberger@gmail.com</div>
            <div>224-545-1962</div>
            <div><a src="https://www.linkedin.com/in/lorelei-trimberger-33515a1b5/">https://www.linkedin.com/in/lorelei-trimberger-33515a1b5/</a></div>
            <div><a src="https://github.com/loreleitrim">https://github.com/loreleitrim</a></div>
          </div>
      </p>
      
    </div>
    
  </body>
</html>
<script src="js/professional.js"></script>
<script>
function updateTime() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("timeContainer").innerHTML = this.responseText;
    }
  };
  xhr.open("GET", "timeContainer.php", true);
  xhr.send();
}

setInterval(updateTime, 1000); // Update every 30 seconds
updateTime(); // Initial update
</script>
