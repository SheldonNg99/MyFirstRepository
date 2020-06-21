<?php require 'includes.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Startup1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Startup</title>
  </head>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="top_header">
      <div class="Link_wrapper" id="myNavbar">
        <a href="#home" class="Logo">LOGO</a>
        <!-- Right-sided navbar links -->
        <div class="Right_Links">
          <a href="#about" class="links">ABOUT</a>
          <a href="#team" class="links"><i class="fa fa-user"></i> TEAM</a>
          <a href="#work" class="links"><i class="fa fa-th"></i> WORK</a>
          <a href="#pricing" class="links"><i class="fa fa-usd"></i> PRICING</a>
          <a href="#contact" class="links"><i class="fa fa-envelope"></i> CONTACT</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="bars" onclick="w3_open()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="Sidebar" style="display:none" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()" class="Close_btn">Close &times;</a>
      <a href="#about" onclick="w3_close()" class="item">ABOUT</a>
      <a href="#team" onclick="w3_close()" class="item">TEAM</a>
      <a href="#work" onclick="w3_close()" class="item">WORK</a>
      <a href="#pricing" onclick="w3_close()" class="item">PRICING</a>
      <a href="#contact" onclick="w3_close()" class="item">CONTACT</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="Header_image" id="home">
      <div class="Wrapper_left back_none" >
        <span class="large_text hide_large"><?= $Quote; ?></span><br>
        <span class="medium_text hide_medium"><?= $Quote; ?></span><br>
        <span class="small_text"><?= $time; ?></span>
        <p><a href="#about" class="learn_more_btn">Learn more and start today</a></p>
      </div>
      <div class="icons_wrapper">
      <a target="_blank" class="link_color" href="<?= $facebook; ?>"><i class="fa fa-facebook-official hover_opacity"></i></a>
      <a target="_blank" class="link_color" href="<?= $Instagram; ?>"><i class="fa fa-instagram hover_opacity"></i></a>
      <a target="_blank" class="link_color" href="<?= $snapchat; ?>"><i class="fa fa-snapchat hover_opacity"></i></a>
      <a target="_blank" class="link_color" href="<?= $printest; ?>"><i class="fa fa-pinterest-p hover_opacity"></i></a>
      <a target="_blank" class="link_color" href="<?= $twitter; ?>"><i class="fa fa-twitter hover_opacity"></i></a>
      <a target="_blank" class="link_color" href="<?= $linkedin; ?>"><i class="fa fa-linkedin hover_opacity"></i></a>
      </div>
    </header>

    <!-- About Section -->
    <div class="About_wrapper" style="padding:128px 16px" id="about">
      <h3 class="text_center">ABOUT THE COMPANY</h3>
      <p class="text_center description">Key features of our company</p>
      <div class="icon_wrapper text_center">
        <div data-aos="flip-up" class="small_about_wrapper">
          <i class="fa fa-desktop icon w3-center"></i>
          <p class="description">Responsive</p>
          <p><?= $About_Responsive; ?></p>
        </div>
        <div data-aos="flip-up" class="small_about_wrapper">
          <i class="fa fa-heart icon"></i>
          <p class="description">Passion</p>
          <p><?= $About_Passion; ?></p>
        </div>
        <div data-aos="flip-up" class="small_about_wrapper">
          <i class="fa fa-diamond icon"></i>
          <p class="description">Design</p>
          <p><?= $About_Design; ?></p>
        </div>
        <div data-aos="flip-up" class="small_about_wrapper">
          <i class="fa fa-cog icon"></i>
          <p class="description">Support</p>
          <p><?= $About_Support; ?></p>
        </div>
      </div>
    </div>


    <!-- Promo Section - "We know design" -->
    <div class="promo_Section" style="padding:128px 16px">
      <div class="promo_wrapper">
        <div class="promo_description_left">
          <h3>We know design.</h3>
          <p><?= $Promo_scentence;  ?></p>
          <p><a href="#work" class="View_btn"><i class="fa fa-th">&nbsp;</i> View Our Works</a></p>
        </div>
        <div data-aos="flip-up" class="promo_description_right">
          <img class="Description_image" src="images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
        </div>
      </div>
    </div>

    <!-- The Team -->
    <div class="Team_wrapper" style="padding:128px 16px">
      <h3 class="text_center">THE TEAM</h3>
      <p class="text_center small_text">The ones who runs this company</p>
      <div data-aos="flip-up" class="Team_Detail">
        <div class="Team_info_wrapper">
          <img src="images/team2.jpg" alt="John" style="width:100%">
          <div class="Info_Detail">
            <h3><?= $Team_name_1; ?></h3>
            <p class="paragraph_opacity"><?= $Team_job_1; ?></p>
            <p><?= $Team_description_1; ?></p>
            <p><button class="contact_btn"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div data-aos="flip-up" class="Team_Detail">
        <div class="Team_info_wrapper">
          <img src="images/team1.jpg" alt="Jane" style="width:100%">
          <div class="Info_Detail">
            <h3><?= $Team_name_2; ?></h3>
            <p class="paragraph_opacity"><?= $Team_job_2; ?></p>
            <p><?= $Team_description_2; ?></p>
            <p><button class="contact_btn"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div data-aos="flip-up" class="Team_Detail">
        <div class="Team_info_wrapper">
          <img src="images/team3.jpg" alt="Mike" style="width:100%">
          <div class="Info_Detail">
            <h3><?= $Team_name_3; ?></h3>
            <p class="paragraph_opacity"><?= $Team_job_3; ?></p>
            <p><?= $Team_description_3; ?></p>
            <p><button class="contact_btn"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
      <div data-aos="flip-up" class="Team_Detail">
        <div class="Team_info_wrapper">
          <img src="images/team4.jpg" alt="Jane" style="width:100%">
          <div class="Info_Detail">
            <h3><?= $Team_name_4;  ?></h3>
            <p class="paragraph_opacity"><?= $Team_job_4;  ?></p>
            <p><?= $Team_description_4  ?></p>
            <p><button class="contact_btn"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Promo Section "Statistics" -->
    <div class="promo_Section text_center statistics_wrapper">
      <div class="statistics">
        <span class="medium_text">14+</span>
        <br>Partners
      </div>
      <div class="statistics">
        <span class="medium_text">55+</span>
        <br>Projects Done
      </div>
      <div class="statistics">
        <span class="medium_text">89+</span>
        <br>Happy Clients
      </div>
      <div class="statistics">
        <span class="medium_text">150+</span>
        <br>Meetings
      </div>
    </div>

    <!-- Work Section -->
    <div class="work_section" style="padding:128px 16px" id="work">
      <h3 class="text_center">OUR WORK</h3>
      <p class="text_center small_text">What we've done for people</p>
      <div class="Images_wrapper">
        <div class="image__item_1 image">
          <img src="<?= $picture_1; ?>" onclick="onClick(this)" class="hover_opacity" alt="A microphone">
        </div>
        <div class="image__item_2 image">
          <img src="<?= $picture_2; ?>" onclick="onClick(this)" class="hover_opacity" alt="A phone">
        </div>
        <div class="image__item_3 image">
          <img src="<?= $picture_3; ?>" onclick="onClick(this)" class="hover_opacity" alt="A drone">
        </div>
        <div class="image__item_4 image">
          <img src="<?= $picture_4; ?>" onclick="onClick(this)" class="hover_opacity" alt="Soundbox">
        </div>
        <div class="image__item_5 image">
          <img src="<?= $picture_5; ?>" onclick="onClick(this)" class="hover_opacity" alt="A tablet">
        </div>
        <div class="image__item_6 image">
          <img src="<?= $picture_6; ?>" onclick="onClick(this)" class="hover_opacity" alt="A camera">
        </div>
        <div class="image__item_7 image">
          <img src="<?= $picture_7; ?>" onclick="onClick(this)" class="hover_opacity" alt="A typewriter">
        </div>
        <div class="image__item_8 image">
          <img src="<?= $picture_8; ?>" onclick="onClick(this)" class="hover_opacity" alt="A tableturner">
        </div>
      </div>
    </div>



    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
      <span class="close_btn">&times;</span>
      <div class="image_wrapper animate_zoom">
        <img id="img01" class="image">
        <p id="caption"></p>
      </div>
    </div>


    <!-- Skills Section -->
    <div class="skill_section">
      <div class="skill_wrapper">
        <div class="skill skill_half">
          <h3>Our Skills.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
          tempor incididunt ut labore et dolore.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
          tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="skill skill_half">
          <p class="w3-wide"><i class="fa fa-camera skill_icon"></i>Photography</p>
          <div class="skill_level_wrapper">
            <div class="skill_level text_center" style="width:90%">90%</div>
          </div>
          <p class="w3-wide"><i class="fa fa-desktop skill_icon"></i>Web Design</p>
          <div class="skill_level_wrapper">
            <div class="skill_level text_center" style="width:85%">85%</div>
          </div>
          <p class="w3-wide"><i class="fa fa-photo skill_icon"></i>Photoshop</p>
          <div class="skill_level_wrapper">
            <div class="skill_level text_center" style="width:75%">75%</div>
          </div>
        </div>
      </div>
    </div>

    <div class="Packages_wrapper" style="padding:128px 16px" id="pricing">
      <h3 class="text_center text_white">PRICING</h3>
      <p class="medium_text text_center text_white">Choose a pricing plan that fits your needs.</p>
      <!--Basic pakages-->
      <div data-aos="zoom-in-up" class="packages_tri small_packages">
        <ul class="packages_detail">
          <li class="packages_title">Basic</li>
          <li class="List_padding">10GB Storage</li>
          <li class="List_padding">10 Emails</li>
          <li class="List_padding">10 Domains</li>
          <li class="List_padding">Endless Support</li>
          <li class="List_padding">
            <h2>$ 10</h2>
            <span class="span_opacity">per room</span>
          </li>
          <li class="List_btn">
            <a href="#contact"><button class="sign_up_btn">Contact Us</button></a>
          </li>
        </ul>
      </div>
      <!--pro packages-->
      <div data-aos="zoom-in-up" class="packages_tri packages_pro">
        <ul class="packages_detail">
          <li class="packages_title_pro">Pro</li>
          <li class="List_padding">25GB Storage</li>
          <li class="List_padding">25 Emails</li>
          <li class="List_padding">25 Domains</li>
          <li class="List_padding">Endless Support</li>
          <li class="List_padding">
            <h2>$ 25</h2>
            <span class="span_opacity">per room</span>
          </li>
          <li class="List_btn">
            <a href="#contact"><button class="sign_up_btn_red">Contact Us</button></a>
          </li>
        </ul>
      </div>
      <!--Basic pakages-->
      <div data-aos="zoom-in-up" class="packages_tri small_packages">
        <ul class="packages_detail">
          <li class="packages_title">Premium</li>
          <li class="List_padding">50GB Storage</li>
          <li class="List_padding">50 Emails</li>
          <li class="List_padding">50 Domains</li>
          <li class="List_padding">Endless Support</li>
          <li class="List_padding">
            <h2>$ 50</h2>
            <span class="span_opacity">per room</span>
          </li>
          <li class="List_btn">
            <a href="#contact"><button class="sign_up_btn">Contact Us</button></a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="Contact_section" style="padding:128px 16px" id="contact">
      <h3 class="text_center">CONTACT</h3>
      <p class="text_center medium_text">Lets get in touch. Send us a message:</p>
      <div style="margin-top:48px">
        <p><i class="fa fa-map-marker fa-fw medium_text skill_icon"></i><?= $location; ?></p>
        <p><i class="fa fa-phone fa-fw medium_text skill_icon"></i><?= $Phone; ?></p>
        <p><i class="fa fa-envelope fa-fw medium_text skill_icon"> </i><?= $Email;  ?></p>
        <br>
        <form action="Message_Sent.php" method="POST">
          <p><input class="input" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="input" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="input" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="input" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="Send_btn" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
        <!-- Image of location/map -->
        <img src="images/map.jpg" class="location_image" style="width:100%;margin-top:48px">
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text_center">
      <a href="#home" class="back_to_top_btn"><i class="fa fa-arrow-up skill_icon"></i>To the top</a>
      <div class="Icons_wrapper">
        <a target="_blank" class="link_color" href="<?= $facebook; ?>"><i class="fa fa-facebook-official hover_opacity"></i></a>
        <a target="_blank" class="link_color" href="<?= $Instagram; ?>"><i class="fa fa-instagram hover_opacity"></i></a>
        <a target="_blank" class="link_color" href="<?= $snapchat; ?>"><i class="fa fa-snapchat hover_opacity"></i></a>
        <a target="_blank" class="link_color" href="<?= $printest; ?>"><i class="fa fa-pinterest-p hover_opacity"></i></a>
        <a target="_blank" class="link_color" href="<?= $twitter; ?>"><i class="fa fa-twitter hover_opacity"></i></a>
        <a target="_blank" class="link_color" href="<?= $linkedin; ?>"><i class="fa fa-linkedin hover_opacity"></i></a>
      </div>
      <p>Powered by <a href="#" target="_blank" class="Author">Sheldon Ng</a></p>
    </footer>
  </body>
  <script>
  AOS.init();
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }


  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");

  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }

  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }
</script>
