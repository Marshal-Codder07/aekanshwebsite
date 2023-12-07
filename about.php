<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<img src="images/moon.png" id="icon">
    <h1>ABOUT ME AND.. WHAT I DO ?</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="images/apple.png">
                        </div>
                        <h4>App Design</h4>
                        <p>
                        App design combines the user interface (UI) and user experience (UX). While UI lends itself to the overall style of the app (including the colors, fonts, and general look and feel), UX focuses on the actual functionality and usability.
                    </div>
                    <div class="shadowOne"></div>
                    <div class="shadowTwo"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="images/android.png">
                        </div>
                        <h4>Development</h4>
                        <p>
                            Devloping in a community where giving best is the only option truly defines my place, Software development refers to a set of computer science activities dedicated to the process of creating, designing, and deploying.
                        </p>
                    </div>
                    <div class="shadowOne"></div>
                    <div class="shadowTwo"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main">
                    <div class="service">
                        <div class="service-logo">
                            <img src="images/internet.png">
                        </div>
                        <h4>Marketing</h4>
                        <p>
                        By analyzing and manipulating data on computers, we can increase the precision of marketing campaigns, personalize customer and prospect communications, and improve customer relationship management.
                        </p>
                    </div>
                    <div class="shadowOne"></div>
                    <div class="shadowTwo"></div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
<div class="ending">
  <i class="end fab fa-twitter"></i>
  <i class="end fab fa-facebook-f"></i>
  <i class="end fab fa-instagram"></i>
  <i class="end fas fa-envelope"></i>
    <p>© Copyright 2021 AM Engineering Hub</p>
  </div>
  </footer>


    <script>
    
    var icon = document.getElementById("icon");
    
    
    
    if(localStorage.getItem("theme") == null){
        localStorage.setItem("theme", "light");
    }
    
    
    
    let localData = localStorage.getItem("theme");
    
    if(localData == "light"){
        icon.src = "images/moon.png";
        document.body.classList.remove("dark-theme");
    }
    else if(localData == "dark"){
        icon.src = "images/sun.png";
        document.body.classList.add("dark-theme");
    }
    
    
    
    
    icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.src = "images/sun.png";
            localStorage.setItem("theme", "dark");
        }else{
            icon.src = "images/moon.png";
            localStorage.setItem("theme", "light");
        }
    }
    
    
</script>
      
</body>
</html>