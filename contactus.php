<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img src="images/moon.png" id="icon">
        <h1>Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed.<br>Feel free to get in touch with us.</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <form action="userinfo.php" method="POST">
                    
                    <div class="input-row">
                        <div class="input-group">
                            <label>Username</label>
                            <input type="text" name="user" placeholder="John Amendo" autocomplete="off" class="form-control">
                        </div>
                    </div> 
                    <div class="input-row">
                        <div class="input-group">
                            <label>Mobile</label>
                            <input type="text" name="mobile" placeholder="+1 412 520 3231" autocomplete="off" class="form-control">
                        </div>
                    </div> 
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="johnamendogm@gmail.com" autocomplete="off" class="form-control">
                        </div>
                    </div> 
                    <div class="input-row">
                        <div class="input-group">
                            <label>Comments</label>
                            <input type="text" name="comments" placeholder="Product Demo"autocomplete="off" class="form-control">
                        </div>
                    </div> 
                    <div class="input-row">
                        <div class="input-group">
                             <label>messages</label>
                             <textarea class="form-control" name="messages" placeholder="Your Message"></textarea>
                        </div>
                    </div> 
                    <button type="submit">SEND</button>
                </form>
            </div>
                     <div class="contact-right">
                          <h3>Reach Us</h3>
                
                           <table>
                            <tr>
                              <td>Email</td>
                              <td>marshal007anthony@gmail.com</td>
                            </tr>
                            <tr>
                               <td>Phone</td>
                               <td>+1 012 345 6789</td>
                            </tr>
                            <tr>
                               <td>Address</td>
                               <td>India (MP) Satna, 
                               near Sarthak Hospital, naya nagar,
                               Rewa Road
                               485001
                               </td>
                            </tr>
                            </table>
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