
<html>
<head>
<title>office</title>    
     <meta charset="utf-8">
     <link href="style3.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <script>
        function validateForm(){
            var x=document.forms["myform"]["name"].value;
            if(x=""){
                alert("Name must be filled out");
                return false;
            }
            var x=document.forms["myform"]["email"].value;
            if(x=""){
                alert("Name must be filled out");
                return false;
            }
            var x=document.forms["myform"]["country"].value;
            if(x=""){
                alert("Name must be filled out");
                return false;
            }
            
        }
        
        function ValidateEmail(inputText) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (inputText.value.match(mailformat)) {
                document.myform.email.focus();
                return true;
            } else {
                alert("You have entered an invalid email address!");
                document.myform.email.focus();
                return false;
            }
        }
        
        
    </script>
    
</head>
<body>
    
    <a name="gototop"></a>
    
    
    
    
    
    
    
    
    
      <header>
        <div class="nav-bar">
            
        <img src="social-share.jpg" style="100" height="100" class="logo">
            
        <ul class="menu">
            <li><a href=Assignment.php>Home</a></li>
            <li><a href=about.php>About Us</a></li>
            <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Projects</a>
    <div class="dropdown-content">
      <a href="project.php">Completed</a>
      <a href="ongoing.php">Ongoing</a>
    </div>
  </li>
            <li><a href=contact.php>Office</a></li>
            
        </ul>
       
        </div>
    </header>
    
    
    
    
    
    
    
    
    
     <div class="pic0">
    <div class="off">
       
    <div class="content">
        <h2>CONTACT US</h2>
      <!--  <div class="phone">-->
            <ul>
                <li>Telephone: 0712345678<!--</div>--></li>
                <li>Emaill: xyz@gmail.com</li>
        </ul>
        </div>
    
    
    <div class="content">
        <h2>LOCATE US</h2>
        <ul>
       <li> No7, 7th Cross Road, Perera Road,<br>
        Colombo 7. 
            </li>
        </ul>
    </div>
    </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="opportnities">
        <img src="image1.jpg" align=left width="500" height="700" class="pic2">
        
        <h1>WORK OPPORTUNITIES</h1>
        
        <p>XYZ holds pride in their people who carry forth the values and long-standing reputation of the company. XYZ invests time and energy to recruit, train and develop the best talent in the industry. Skill-based trainings are provided to their staff to benefit their professional growth and for constantly upgrading their skills to serve clients better.  </p>   
    </div>

    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d17616.028760464676!2d79.8818184205698!3d6.8330481446211815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sno7%202nd%20Lane%2C%20Dehiwala-Mount%20Lavinia!5e0!3m2!1sen!2slk!4v1571552847674!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <h2>Contact Form</h2>

<div class="container">
  <form method="post" action="reserve.php" name="myform">
      
    <label for="lname">Full Name</label>
    <input type="text" id="lname" name="name" placeholder="Your name..." required>

    <label for="lemail">Email Address</label>
    <input type="text" id="lemail" name="email" placeholder="Your email..." required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
        <option selected hidden value="">Select Country</option>
      <option value="SriLanka">SriLanka</option>
      <option value="India">India</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px" required></textarea>

    <input type="submit" value="Submit"  onclick="ValidateEmail(document.forms.email)" />
           
  </form>
</div>
    
    
    
    
    
    
    
    <a href="#gototop" class="top"><input type="image" src="top6.jpg" width="50" height="50"></a>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="footer-main-div">
    
    <div class="footer-social-icons">
        
        <ul>
            
        <li><a href="https://www.google.com/search?rlz=1C1CHZL_enLK844LK844&sxsrf=ACYBGNT8qYUjkTq-G3cvfiCXJJPYFgiENg%3A1570991434139&ei=Sm2jXbKUCOv6z7sPwPeimA4&q=facebook&oq=face&gs_l=psy-ab.3.1.35i39j0i131i67j0i67j0i131i67j0i67l2j0i131i67j0i131j0j0i131.74708.75384..77398...0.1..0.106.414.0j4....2..0....1..gws-wiz.......0i71.YjOrEVvljWw" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
            
        <li><a href="https://www.google.com/search?rlz=1C1CHZL_enLK844LK844&sxsrf=ACYBGNTj8Mxj-XdC_wdLhFt4p9k1DXIO5A%3A1570991514191&ei=mm2jXdmbC__D3LUP7qidiAw&q=instagram&oq=ins&gs_l=psy-ab.3.2..0.0..5820...0.0..0.0.0.......0......gws-wiz.6bKI4Zmzh5k" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            
        <li><a href="https://www.google.com/search?rlz=1C1CHZL_enLK844LK844&sxsrf=ACYBGNRtNdRiEIT5kou2t1mWVW0wTEms4A%3A1570991671517&ei=N26jXZ6HH8z4vgS_gJ_IAg&q=twitter&oq=twitter&gs_l=psy-ab.3..0i71l8.0.0..5987...0.2..0.0.0.......0......gws-wiz.bkceT55SOF8&ved=0ahUKEwje_pmE8JnlAhVMvI8KHT_ABykQ4dUDCAs&uact=5" target="_blank"><i class="fa fa-twitter"></i></a></li>
            
        <li><a href="https://www.google.com/search?q=google+plus&rlz=1C1CHZL_enLK844LK844&oq=google+plu&aqs=chrome.1.69i57j0l4j69i60.7840j0j7&sourceid=chrome&ie=UTF-8" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            
        <li><a href="https://www.google.com/search?rlz=1C1CHZL_enLK844LK844&sxsrf=ACYBGNRRi1-U9GIfjc8bwGAgBcDJsFPMgA%3A1570991623257&ei=B26jXfC2D4rZvAT4hZLoAg&q=youtube&oq=you&gs_l=psy-ab.3.0.35i39l2j0i67l3j0j0i131l3j0.21574.22107..24094...0.1..0.113.328.0j3......0....1..gws-wiz.......0i71j0i131i67.Ddn3SEkyDGQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
    
    
    </ul>
        
        </div>
    
    </div>
    
    
    
    
    
    
    <div class="footer-menu-one">
    <ul>
        <li><a href="Assignment.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href=project.php>Completed Projects</a></li>
        <li><a href=ongoing.php>Ongoing Projects</a></li>
        <li><a href=contact.php>Office</a></li>
        
        
        </ul>
    
    
    
    
    </div>
    
    
    

    </body>
</html>