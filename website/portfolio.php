<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/e8b8ffaaa7.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="images/STIKER MF.png" class="logo">
            <ul id="sidemenu">
                <li><a href="#header">Home</a></li>    
                <li><a href="#about">About Me</a></li>    
                <li><a href="#services">Services</a></li>    
                <li><a href="#portfolio">Portfolio</a></li>    
                <li><a href="#contact">Contact</a></li>
                <li><a href="bukutamu/index.php">BukuTamu</a><li>    
                <li><a href="admin/experience/index.php">Experience</a><li>    
                <li><a href="logout.php">Logout</a><li>    
                 <i class="fa-solid fa-xmark" onclick="closemenu()"></i> 
            </ul>
            <i class="fa-solid fa-bars" onclick="openmenu()"></i> 
        </nav>
        <div class="header-text">
            <p>UI/UX Designer</p>
            <h1>Hi, I'm <span>Fahri</span><br> From Thailand</h1>
        </div>
    </div>
</div>
<!------about---->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/guwa.jpg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>I'm a UX/UI Designer with a background in Psychology,
                    which gives me a unique edge in empathizing with users and improving
                    their experience through design. My research experience has refined
                    my problem-solving skills and user insights. I'm constantly seeking 
                    new ways to learn and grow through real-world experiences.</p>

                    <div class="tab-title">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI/UX</span><br>Designing Web/App interface</li>
                            <li><span>Designer</span><br>Logo</li>
                            <li><span>Designer</span><br>Poster</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2023-Current</span><br>UI/UX Design web at Koetai Mahkota Soundline</li>
                            <li><span>2021-2021</span><br>Design Logo</li>
                            <li><span>2021-Current</span><br>Design Poster</li>
                        </ul>
                    </div>
                    <div class="tab-contents"id="education">
                        <ul>
                            <li><span>2019-2022</span><br>SMK TI LABBAIKA</li>
                            <li><span>2022-Current</span><br>Politani Samarinda</li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- service -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web Design</h2>
                <p>saya adalah fahri dari thailand Design Grafis</p>
                <a href="#">Learn more</a>
            </div>         
            <div>
                <i class="fa-solid fa-crop"></i>
                <h2>UI/UX Design</h2>
                <p>saya adalah fahri dari thailand designer UI/UX ,Design Grafis</p>
                <a href="#">Learn more</a>
            </div>         
            <div>
                <i class="fa-solid fa-pen-nib"></i>
                <h2>Design Logo</h2>
                <p>saya adalah fahri dari thailand desinger logo</p>
                <a href="#">Learn more</a>
            </div>         
        </div>
    </div>
</div>
<!-- ----------portfolio -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/web (1).jpg">
                <div class="layer">
                    <h3>japan Web UI/UX</h3>
                    <p>saya adalah fahri dari thailand designer UI/UX ,Design Grafis</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/ui ux.png">
                <div class="layer">
                <h3>Travel App</h3>
                    <p>saya adalah fahri dari thailand designer UI/UX ,Design Grafis</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/logo.jpg">
                <div class="layer">
                <h3>Store Logo </h3>
                    <p>saya adalah fahri dari thailand designer UI/UX ,Design Grafis</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">See more</a>
    </div>
</div>
<!-- ---------------contact--------- -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>akbarfahri047@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>085389309842</p>
                <div class="social-icons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href=""class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
            <form action="datatamu.php" method="post">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright <i class="fa-sharp fa-regular fa-copyright"></i> Fahri. Made with <i class="fa-solid fa-heart"></i> by MFA Team</p>
    </div>
</div>





<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab"); 
    } 
</script>

<script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }
</script>
</body>
</html>

<?php
}else{
    header("location: index.php");
    exit();
}