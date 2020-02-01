<!DOCTYPE html>
<html>
<title>YourExchange</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif;
  }

  body,
  html {
    height: 100%;
    color: rgb(7, 7, 7);
    line-height: 1.8;
  }

  .glow {
    color: #fff;
    -webkit-animation: glow 1s ease-in-out infinite alternate;
    -moz-animation: glow 1s ease-in-out infinite alternate;
    animation: glow 1s ease-in-out infinite alternate;
  }

  /* Create a Parallax Effect */
  .bgimg-2,
  .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }


  /* Second image (Portfolio) */
  .bgimg-2 {
    background-image: url("img/p3.jpg");
    min-height: 400px;
  }

  /* Third image (Contact) */
  .bgimg-3 {
    background-image: url("img/c2.jpg");
    min-height: 400px;
  }

  .w3-wide {
    letter-spacing: 10px;
  }

  .w3-hover-opacity {
    cursor: pointer;
  }
.block{
  margin: 10px;
  background-color: #3DAED8;
  text-decoration: none;
  padding: 10px;
}
  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1600px) {

    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
      background-attachment: scroll;
      min-height: 400px;
    }
  }

  @-webkit-keyframes glow {
    from {
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
    }

    to {
      text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
    }
  }
</style>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button"><b></b>HOME</b></a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i><b>ABOUT</b> </a>
      <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i><b>PORTFOLIO</b> </a>
      <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i><b>CONTACT</b> </a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
        <i class="fa fa-search"></i>
      </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
      <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
      <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="img/YourExchange.png" alt="Architecture" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
    </div>
  </header>


  <!-- Container (Portfolio Section) -->
  <div class="w3-content w3-container w3-padding-10 w3-text-white" id="portfolio">
    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <br><br>
    <h1 class="w3-center glow" style="color: #66ff33; font-family: cursive;">Movies</h1>



    <div class="w3-row-padding w3-center">
      <div id="listingTable"></div>
    </div>

    <div style="color: #fff;float:right;margin:10px">
      <a href="javascript:prevPage()" id="btn_prev" class="block">Prev</a>
      <a href="javascript:nextPage()" id="btn_next" class="block">Next</a>
      page: <span id="page"></span>
    </div>
  </div>


  <div class="data-container"></div>
  <div id="demo"></div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div class="w3-content w3-container w3-padding-64 w3-text-white" id="contact">
    <h3 class="w3-center">CONTACT US</h3>
    <p class="w3-center"><em>We'd love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m4 w3-container">
        <img src="img/map.jpeg" class="w3-image w3-round" style="width:100%">
      </div>
      <div class="w3-col m8 w3-panel">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Colombo, Sri Lanka<br>
          <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +94 11 2 987 987<br>
          <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: yourexchange00@gmail.com<br>
        </div>
        <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave us a note:</p>

        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>

          <p>Feel free to suggest new softwares & movies to provide</p>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Suggestion" required name="Suggestion">
          </div>
          <br><br>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-right w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>
  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

  <!--  =============================================== -->
  <script>
    var current_page = 1;
    var records_per_page = 4;

    function httpGet(theUrl) {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open("GET", theUrl, false); // false for synchronous request
      xmlHttp.send(null);
      return xmlHttp.responseText;
    }


    var obj = httpGet("http://localhost/yourexchange/getList.php?category=movie");
    objJson = JSON.parse(obj);
    console.log(objJson);


    function prevPage() {
      if (current_page > 1) {
        current_page--;
        changePage(current_page);
      }
    }

    function nextPage() {
      if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
      }
    }

    function changePage(page) {
      var btn_next = document.getElementById("btn_next");
      var btn_prev = document.getElementById("btn_prev");
      var listing_table = document.getElementById("listingTable");
      var page_span = document.getElementById("page");

      // Validate page
      if (page < 1) page = 1;
      if (page > numPages()) page = numPages();

      listing_table.innerHTML = "";


      // for (var i = (page - 1) * records_per_page; i < (page * records_per_page); i++) {

      //   listing_table.innerHTML += 't'+objJson[i].id;
      // }

      var x = 0;
      for (var i = (page - 1) * records_per_page; i < objJson.length; i++) {
        x++;
        listing_table.innerHTML += '<div class="w3-col m3"><img src="img/'+objJson[i].img+'" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="'+objJson[i].title+'"></div>';
        if (x == records_per_page) {
          break;
        }
      }
      page_span.innerHTML = page;

      if (page == 1) {
        btn_prev.style.visibility = "hidden";
      } else {
        btn_prev.style.visibility = "visible";
      }

      if (page == numPages()) {
        btn_next.style.visibility = "hidden";
      } else {
        btn_next.style.visibility = "visible";
      }
    }

    function numPages() {

      var result = Math.ceil(objJson.length / records_per_page);
      return Math.ceil(objJson.length / records_per_page);
    }

    window.onload = function() {
      changePage(1);
    };
  </script>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {
      myFunction()
    };

    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

</body>

</html>