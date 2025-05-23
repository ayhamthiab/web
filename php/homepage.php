<?php
session_start();

if (isset($_SESSION['isLoggedIn'])  && $_SESSION['isLoggedIn']==1){

}
else{
    header("location:../php/Login.php");
    exit;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../js/script.js"></script>
<!--    <script src="../js/slide.js"></script>-->


    <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="../css/homepage.css">
  <link rel="stylesheet" href="../css/unifid.css">
</head>
<body>

<header class="header">

    <span style="font-size: 40px" class="project-name">PixelSyntax</span>

  <span class="left-slider">
                <a href="homepage.php" class="sidebar-btn" style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Home</a>
                <a href="buttons.php" class="sidebar-btn">Buttons</a>
                <a href="checkboxes.php" class="sidebar-btn">Checkboxes</a>
                <a href="togleswitches.php" class="sidebar-btn">Toggle switches</a>
                <a href="cards.php" class="sidebar-btn">Cards</a>
                <a href="Loaders.php" class="sidebar-btn">Loaders</a>
                <a href="inputs.php" class="sidebar-btn">Inputs</a>
                <a href="radio.php" class="sidebar-btn">Radio buttons</a>
                <a href="creat.php" class="sidebar-btn">Creat</a>



            </span>
</header>



<div class="inside_5">
  <div class="A">
    <section class="site-description">
      <h2>Welcome to PixelSyntax</h2>
      <div class="site-description-text">
        PixelSyntax<br>
        PixelSyntax is a community  platform where developers and designers share free ,customizable UI components built with HTML and CSS <br>
        It offers a wide variety of elements like buttons, loaders, forms, and toggles, making it easy to enhance your web projects with stylish, ready-to-use designs .
      </div>
    </section>

  </div>

</div>

<div class="slider-container">
  <div class="slider" id="slider">

    <div class="slide active">
      <h1> Button's </h1>
        <div><br></div>

      <p style="font-weight: bold;font-size: 28px">Stylish Button's ready to use in your project.</p>
      <div class="preview">

<div><br></div>


          <div class="mainayham">
              <div class="up">
                  <button class="cardayham">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero" class="instagram"><g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"></path></g></g></svg>
                  </button>
                  <button class="card2ayham">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px" class="twitter"><path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path></svg>
                  </button>
              </div>
              <div class="down">
                  <button class="card3ayham">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px" class="github">    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path></svg>
                  </button>
                  <button class="card4ayham">
                      <svg height="30px" width="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="discord"><path d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z"></path></svg>
                  </button>
              </div>
          </div>




      </div>
      <div class="actions"><div style="display: flex; gap: 10px; align-items: center;">
              <form action="Next.php" method="post" style="margin: 0;">
                  <input type="hidden" name="target_table" value="buttons">
                  <input type="hidden" name="item_id" value="1">
                  <button style="font-size: 14px" id="1"> Show Code 📋 </button>
              </form>

              <button style="font-size: 14px; margin: 0;">
                  <a href="buttons.php" style="text-decoration: none;">Show more 🔍</a>
              </button>
          </div>
      </div>
    </div>


    <div class="slide">
      <h1> Checkboxes ✅</h1>
        <div><br></div>
      <p style="font-weight: bold;font-size: 28px">Modern checkboxes with attractive graphics.</p>
        <div> <br><br><br><br>
            <h2>Have you benefited from PixelSyntax ?</h2></div>
      <div class="preview">




          <div class="heart-container" title="Like">
              <input type="checkbox" class="checkboxaaa" id="Give-It-An-Id">
              <div class="svg-container">
                  <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                      </path>
                  </svg>
                  <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                      </path>
                  </svg>
                  <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                      <polygon points="10,10 20,20"></polygon>
                      <polygon points="10,50 20,50"></polygon>
                      <polygon points="20,80 30,70"></polygon>
                      <polygon points="90,10 80,20"></polygon>
                      <polygon points="90,50 80,50"></polygon>
                      <polygon points="80,80 70,70"></polygon>
                  </svg>
              </div>
          </div>

          <br>



      </div>
        <div class="actions"
        ><div style="display: flex; gap: 10px; align-items: center;">
                <form action="Next.php" method="post" style="margin: 0;">
                    <input type="hidden" name="target_table" value="checkboxes">
                    <input type="hidden" name="item_id" value="3">
                    <button style="font-size: 14px" id="3"> Show Code 📋 </button>
                </form>

                <button style="font-size: 14px; margin: 0;">
                    <a href="checkboxes.php" style="text-decoration: none;">Show more 🔍</a>
                </button>
            </div>
    </div>

</div>


    <div class="slide">
        <h1> Inputs ⌨️</h1>
        <div><br></div>
        <p style="font-weight: bold;font-size: 28px">User-friendly input fields for any form.</p>

        <div>            <br><br><br><br>
        </div>


        <div class="brutalist-container">

            <input
                    placeholder="TYPE HERE"
                    class="brutalist-input smooth-type"
                    type="text"
            />
            <label class="brutalist-label">SMOOTH BRUTALIST</label>
        </div>




        <div>            <br><br><br><br>
        </div>


        <div class="actions">
            <form action="Next.php" method="post" style="margin: 0;">
                <input type="hidden" name="target_table" value="inputs">
                <input type="hidden" name="item_id" value="3">
                <button style="font-size: 14px" id="3"> Show Code 📋 </button>
                <button style="font-size: 14px; margin: 0;">
                    <a href="inputs.php" style="text-decoration: none;">Show more 🔍</a>
                </button>
            </form>


        </div>


    </div>



      <div class="slide">

          <h1> Cards 🃏</h1>
          <div><br></div>

          <p style="font-weight: bold;font-size: 28px">Stylish Cards ready to use in your project.</p>
          <div class="preview">

              <div class="cards">
                  <div class="card red">
                      <p class="tip">Welcome to PixelSyntax </p>
                  </div>
                  <div class="card blue">
                      <p class="tip">This is an example of a card</p>
                  </div>
                  <div class="card green">
                      <p class="tip">There's more in the Cards tab</p>
                  </div>
              </div>





          </div>
          <div class="actions"><div style="display: flex; gap: 10px; align-items: center;">
                  <form action="Next.php" method="post" style="margin: 0;">
                      <input type="hidden" name="target_table" value="cards">
                      <input type="hidden" name="item_id" value="19">
                      <button style="font-size: 14px" id="19"> Show Code 📋 </button>
                  </form>

                  <button style="font-size: 14px; margin: 0;">
                      <a href="cards.php" style="text-decoration: none;">Show more 🔍</a>
                  </button>
              </div>
          </div>
      </div>






      <div class="slide">
          <h1>Toggle Switch</h1>
          <div><br><br></div>

          <p style="font-weight: bold;font-size: 28px">Switch between day ☀️ and night 🌙</p>
          <div class="preview">

        <div><br><br><br></div>


              <label class="theme-switch">
                  <input type="checkbox" class="theme-switch__checkbox">
                  <div class="theme-switch__container">
                      <div class="theme-switch__clouds"></div>
                      <div class="theme-switch__stars-container">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z" fill="currentColor"></path>
                          </svg>
                      </div>
                      <div class="theme-switch__circle-container">
                          <div class="theme-switch__sun-moon-container">
                              <div class="theme-switch__moon">
                                  <div class="theme-switch__spot"></div>
                                  <div class="theme-switch__spot"></div>
                                  <div class="theme-switch__spot"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </label>



              <div><br><br><br></div>



          </div>
          <div class="actions"><div style="display: flex; gap: 10px; align-items: center;">
                  <form action="Next.php" method="post" style="margin: 0;">
                      <input type="hidden" name="target_table" value="togleswitches">
                      <input type="hidden" name="item_id" value="4">
                      <button style="font-size: 14px" id="4"> Show Code 📋 </button>
                  </form>

                  <button style="font-size: 14px; margin: 0;">
                      <a href="togleswitches.php" style="text-decoration: none;">Show more 🔍</a>
                  </button>
              </div>
          </div>
      </div>





      <div class="slide">
          <h1> Loader's ⏳</h1>
          <div><br><br><br></div>

          <p style="font-weight: bold;font-size: 28px">"Just a moment... magic is loading ✨"</p>
          <div class="preview">
              <div><br><br><br></div>



              <div class="🤚">
                  <div class="👉"></div>
                  <div class="👉"></div>
                  <div class="👉"></div>
                  <div class="👉"></div>
                  <div class="🌴"></div>
                  <div class="👍"></div>
              </div>


              <div><br><br><br></div>


          </div>
          <div class="actions"><div style="display: flex; gap: 10px; align-items: center;">
                  <form action="Next.php" method="post" style="margin: 0;">
                      <input type="hidden" name="target_table" value="loaders">
                      <input type="hidden" name="item_id" value="2">
                      <button style="font-size: 14px" id="2"> Show Code 📋 </button>
                  </form>

                  <button style="font-size: 14px; margin: 0;">
                      <a href="Loaders.php" style="text-decoration: none;">Show more 🔍</a>
                  </button>
              </div>
          </div>
      </div>




      <div class="slide">
          <h1> Radio Button's 🔘</h1>
          <div><br></div>

          <p style="font-weight: bold;font-size: 28px">Make your pick, shape your experience 🔘✨</p>
          <div class="preview">

<div></div>

              <div class="radio-input">
                  <input value="value-1" name="value-radio" id="value-1" type="radio" />
                  <label for="value-1">
                      <div class="text">
                          <span class="circle"></span>
                          Monthly
                      </div>
                      <div class="price">
                          <span>$30/mo</span>
                          <span class="small">$30 billed every month</span>
                      </div> </label
                  ><input value="value-2" name="value-radio" id="value-2" type="radio" />
                  <label for="value-2">
                      <div class="text">
                          <span class="circle"></span>
                          Annualy
                      </div>
                      <div class="price">
                          <span>$15/mo</span>
                          <span class="small">$180 billed once a year</span>
                      </div>
                      <span class="info">save up to 50%</span>
                  </label>
              </div>




              <div></div>


          </div>
          <div class="actions"><div style="display: flex; gap: 10px; align-items: center;">
                  <form action="Next.php" method="post" style="margin: 0;">
                      <input type="hidden" name="target_table" value="radio">
                      <input type="hidden" name="item_id" value="9">
                      <button style="font-size: 14px" id="9"> Show Code 📋 </button>
                  </form>

                  <button style="font-size: 14px; margin: 0;">
                      <a href="radio.php" style="text-decoration: none;">Show more 🔍</a>
                  </button>
              </div>
          </div>
      </div>
  </div>

  <div class="slider-controls">
    <button onclick="nextSlide()">❮</button>
    <button onclick="prevSlide()">❯</button>
  </div>

  <div class="dots" id="dots">
      <span onclick="setSlide(0)" class="dot active"></span>
      <span onclick="setSlide(1)" class="dot"></span>
      <span onclick="setSlide(2)" class="dot"></span>
      <span onclick="setSlide(3)" class="dot"></span>
      <span onclick="setSlide(4)" class="dot"></span>
      <span onclick="setSlide(5)" class="dot"></span>
      <span onclick="setSlide(6)" class="dot"></span>
  </div>
</div>



<script>let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const sliderContainer = document.querySelector('.slider-container');

    let autoSlideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            dots[i].classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
                dots[i].classList.add('active');
            }
        });
        currentSlide = index;
    }

    function nextSlide() {
        let next = currentSlide + 1;
        if (next >= slides.length) next = 0;
        showSlide(next);
    }

    function prevSlide() {
        let prev = currentSlide - 1;
        if (prev < 0) prev = slides.length - 1;
        showSlide(prev);
    }

    function setSlide(index) {
        showSlide(index);
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            nextSlide();
        }, 2000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    window.addEventListener('DOMContentLoaded', () => {
        showSlide(0);
        startAutoSlide();


        sliderContainer.addEventListener('mouseenter', stopAutoSlide);


        sliderContainer.addEventListener('mouseleave', startAutoSlide);
    });
</script>


</body>
</html>