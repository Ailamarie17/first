<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMC</title>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/team.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
            <div class="top">
                <div class="top-nav">

                    <div class="social">
                        <span> Stay connected</span>
                            <i class='bx bxl-facebook'></i> 
                            <i class='bx bxl-youtube'> </i>
                    </div>
                    <div class="contact">
                        <i class='bx bxs-envelope' ></i>
                       <span> <a href="#">hrad@philipians.ph</a>    </span>
                        <i class='bx bx-phone'></i>
                        <span> 0936 153 2669 </span>
                    </div>
                </div>

            </div>
        
    </header>
    <nav>
        <div class="navbar"> 
            <div class="head">
                <a href="#"><img src="assets/img/pmc3.png"></a>
            </div>
            <div class="action">
                <a href="{{ url('/') }}" class="active"> Home </a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/team') }}">Team</a>
                <a href="{{ url('/news') }}">News and Announcement</a>
                <a href="{{ url('/career') }}">Career</a>
                <a href="">Contact</a>
            </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="team-title" style="color: red; margin-top: 50px; font-weight: 200; font-size: 20px">
            <h1> The Team </h1>
            <h1> The Managemenent</h1>
        </div>
    <div class="card-container"> 
        <div class="card">
            <img src="assets/img/JVSb.png" alt="Image 1">
                <h3>SIR JVS</h3>
                <p>Chief Finance Officer</p>
        </div>
        <div class="card">
            <img src="assets/img/JSSb.png" alt="Image 2">
            <h3>SIR PTS</h3>
            <p>Chief Executive Officer</p>
        </div>
        <!-- Repeat the above card divs for the remaining cards -->
        <div class="card">
            <img src="assets/img/PTSb.png" alt="Image 2">
            <h3>TMAAM JJS</h3>
            <p>Chief  Operation Officer </p>
        </div>
        </div>
    
        <div class="team-title">
            <h1> The Key Officer</h1>
    </div>
    <div class="card-container">
        <div class="card">
            <img src="assets/img/HRH.png" alt="Image 1">
            <h3>MAAM HRH</h3>
            <p>Apple M. Eugenio</p>
            <p>Human Resources Head</p>
        </div>
        <div class="card">
            <img src="assets/img/SHJE NEW.png" alt="Image 2">
            <h3>SIR HRH</h3>
            <p>MR. Joseph Edward Villareal </p>
            <p>SALES HEAD </p>
        </div>
        <!-- Repeat the above card divs for the remaining cards -->
        <div class="card">
            <img src="assets/img/SHA.png" alt="Image 2">
            <h3>SIR HRH</h3>
            <p>MR. Alvin Feliciano </p>
            <p>SALES HEAD </p>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
          <img src="assets/img/SM.png" alt="Image 1">
            <h3>SIR SM</h3>
            <p>Mr. Anjolito Cruz</p>
            <p>Sales Manager</p>
        </div>
        <div class="card">
            <img src="assets/img/SSM.png" alt="Image 2">
            <h3> SIR SSM </h3>
            <p>Mr. Obeth John Ocampo </p>
            <p>Sales Support Manager </p>
        </div>
        <div class="card">
            <img src="assets/img/PM.png" alt="Image 2">
            <h3>SIR ITH</h3>
            <p>Mr. Mike Arnold Solano </p>
            <p>Project Manager </p>
        </div>
    </div>
    <div class="card-container">
          <div class="card">
                <img src="assets/img/OFM NEW.png" alt="Image 1">
                <h3>SIR OFM </h3>
                <p>Mr. Jay Emmanuel Goyal </p>
                <p>Order Fullfillment Manager </p>
          </div>
          <div class="card">
                <img src="assets/img/HS.png" alt="Image 2">
                <h3>MAAM HS</h3>
                <p>Ms. Lyca Jean Lastimado </p>
                <p> Human Resources Supervisor </p>
          </div>
        <!-- Repeat the above card divs for the remaining cards -->
          <div class="card">
            <img src="assets/img/MS.png" alt="Image 2">
            <h3>SIR MS</h3>
            <p>Mr. Justine Cristopher Eugenio</p>
            <p>Marketing Supervisor </p>
        </div>
    </div>
      <div class="card-container">
        <div class="card">
            <img src="assets/img/TL ELMER.png" alt="Image 2">
            <h3>TL ELMER </h3>
            <p>Mr. Elmer Roi Salapare</p>
            <p>OFD Team Leader </p>
        </div>
      <!-- Repeat the above card divs for the remaining cards -->
      <div class="card">
            <img src="assets/img/TL MAE.png" alt="Image 2">
            <h3>TL MAE</h3>
            <p>Ms. Laurence Mae Bathan </p>
            <p>Sales Manager Team Leader  </p>
        </div>
      <div class="card">
            <img src="assets/img/TL ERIKA.png" alt="Image 1">
            <h3>Team Erika</h3>
            <p>Sales Team Leader</p>
      </div>
    </section>
    <footer>
        <div class="bg-footer">
            <img src="assets/img/footbgbg.png" alt="">
        </div>
        <div class="subscribe">
                <span class="place-content-center text-4xl - font-black text-transparent bg-clip-text bg-gradient-to-r from-red-950 to-red-700"> Get Notified </span>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing </p>
            <div class="form_action">
                <input type="text" id="fname" name="fname" placeholder="Enter your email"> 
                <button class="sub "> Subscribe </button>
            </div> 
        </div>
    </div>
    <div class="second_bg">
        <img src="assets/img/bgbgfooter.png" alt="">
    </div>
    <div class="copyright">
        <div class="foot_action">
            <div class="action_">
                 <p> Home </p>   
                <p> Terms and condition </p>
                <p> Privacy </p>
            </div>
        </div>
        <div class="copy">
            <p>Copyright @ 2021, philipians Marketing Corporation. All right reserved.</p>
        </div>
        </div>
    </footer>       


</body>
</html>
