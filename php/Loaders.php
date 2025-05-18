<?php
session_start();

$html_code = "";
$css_code = "";
if (isset($_SESSION['isLoggedIn'])  && $_SESSION['isLoggedIn']==1){

}
else{
    header("location:../php/Login.php");
    exit;

}

$host = "localhost";
$user = "root";
$pass = "";
$db = "projectweb";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_id'])) {
    $id = $_POST['item_id'];

    $stmt = $conn->prepare("SELECT HTML, CSS FROM loaders WHERE id = ?");
    $stmt->bind_param("i", $id); // assuming id is integer
    $stmt->execute();
    $stmt->bind_result($html_code, $css_code);
    $stmt->fetch();
    $stmt->close();
}

$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <script src="../js/script.js"></script>
  <meta charset="UTF-8">
  <title>Loaders</title>
  <link rel="stylesheet" href="../css/unifid.css">
  <link rel="stylesheet" href="../css/buttons.css">
  <link rel="stylesheet" href="../css/loaders.css">
</head>

<header class="header">

  <span style="font-size: 44px" class="project-name">PixelSyntax</span>

  <span class="left-slider">
                <a href="homepage.php" class="sidebar-btn" >Home</a>
                <a href="buttons.php" class="sidebar-btn">Buttons</a>
                <a href="checkboxes.php" class="sidebar-btn" >CheckBoxes</a>
                <a href="togleswitches.php" class="sidebar-btn" >Toggle Switches</a>
                <a href="cards.php" class="sidebar-btn" >Cards</a>
                <a href="Loaders.php" class="sidebar-btn " style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Loaders</a>
                <a href="inputs.php" class="sidebar-btn">Inputs</a>
                <a href="radio.php" class="sidebar-btn">Radio Buttons</a>


            </span>
</header>



<body>
<div class="b_head">
  <h1 class="b_headtext">Loader's </h1>
  <h2 class="b_b_headtext">Open-Source Loader's made with HTML and CSS </h2>
</div>

<div class="body_2">
    <div class="code">
        <table>
            <tr>
                <td>
                    <h1 style="color: #ffffff ; text-align: center">HTML</h1>
                    <textarea class="html_code" name="html_code" id="html_code" cols="500" readonly><?php echo htmlspecialchars($html_code); ?></textarea>
                </td>
                <td>
                    <h1 style="color: #ffffff ; text-align: center">CSS</h1>
                    <textarea class="css_code" name="css_code" id="css_code" cols="500" readonly><?php echo htmlspecialchars($css_code); ?></textarea>
                </td>
            </tr>
        </table>
    </div>
    <button class="copy_2">Back</button>
</div>
<div class="body_1">
  <div class="main">

    <div class="section" >

      <article class="square">
        <div class="button_me">

          <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
          </svg>



        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="1">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>




      </article>

      <article class="square">
        <div class="button_me">


          <div class="🤚">
            <div class="👉"></div>
            <div class="👉"></div>
            <div class="👉"></div>
            <div class="👉"></div>
            <div class="🌴"></div>
            <div class="👍"></div>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="2">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>




      </article>




      <article class="square">

        <div class="button_me">

          <div class="third_load">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>



        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="3">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>




      </article>
      <article class="square">
        <div class="button_me">


          <div class="lava-lamp">
            <div class="bubble"></div>
            <div class="bubble1"></div>
            <div class="bubble2"></div>
            <div class="bubble3"></div>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="4">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>
      <article class="square">
        <div class="button_me">

          <svg class="pl_5" viewBox="0 0 160 160" width="160px" height="160px" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="grad" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#000"></stop>
                <stop offset="100%" stop-color="#fff"></stop>
              </linearGradient>
              <mask id="mask1">
                <rect x="0" y="0" width="160" height="160" fill="url(#grad)"></rect>
              </mask>
              <mask id="mask2">
                <rect x="28" y="28" width="104" height="104" fill="url(#grad)"></rect>
              </mask>
            </defs>

            <g>
              <g class="pl__ring-rotate">
                <circle class="pl__ring-stroke" cx="80" cy="80" r="72" fill="none" stroke="hsl(223,90%,55%)" stroke-width="16" stroke-dasharray="452.39 452.39" stroke-dashoffset="452" stroke-linecap="round" transform="rotate(-45,80,80)"></circle>
              </g>
            </g>
            <g mask="url(#mask1)">
              <g class="pl__ring-rotate">
                <circle class="pl__ring-stroke" cx="80" cy="80" r="72" fill="none" stroke="hsl(193,90%,55%)" stroke-width="16" stroke-dasharray="452.39 452.39" stroke-dashoffset="452" stroke-linecap="round" transform="rotate(-45,80,80)"></circle>
              </g>
            </g>

            <g>
              <g stroke-width="4" stroke-dasharray="12 12" stroke-dashoffset="12" stroke-linecap="round" transform="translate(80,80)">
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(-135,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(-90,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(-45,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(0,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(45,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(90,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(135,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,10%,90%)" points="0,2 0,14" transform="rotate(180,0,0) translate(0,40)"></polyline>
              </g>
            </g>
            <g mask="url(#mask1)">
              <g stroke-width="4" stroke-dasharray="12 12" stroke-dashoffset="12" stroke-linecap="round" transform="translate(80,80)">
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(-135,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(-90,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(-45,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(0,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(45,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(90,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(135,0,0) translate(0,40)"></polyline>
                <polyline class="pl__tick" stroke="hsl(223,90%,80%)" points="0,2 0,14" transform="rotate(180,0,0) translate(0,40)"></polyline>
              </g>
            </g>

            <g>
              <g transform="translate(64,28)">
                <g class="pl__arrows" transform="rotate(45,16,52)">
                  <path fill="hsl(3,90%,55%)" d="M17.998,1.506l13.892,43.594c.455,1.426-.56,2.899-1.998,2.899H2.108c-1.437,0-2.452-1.473-1.998-2.899L14.002,1.506c.64-2.008,3.356-2.008,3.996,0Z"></path>
                  <path fill="hsl(223,10%,90%)" d="M14.009,102.499L.109,58.889c-.453-1.421,.559-2.889,1.991-2.889H29.899c1.433,0,2.444,1.468,1.991,2.889l-13.899,43.61c-.638,2.001-3.345,2.001-3.983,0Z"></path>
                </g>
              </g>
            </g>
            <g mask="url(#mask2)">
              <g transform="translate(64,28)">
                <g class="pl__arrows" transform="rotate(45,16,52)">
                  <path fill="hsl(333,90%,55%)" d="M17.998,1.506l13.892,43.594c.455,1.426-.56,2.899-1.998,2.899H2.108c-1.437,0-2.452-1.473-1.998-2.899L14.002,1.506c.64-2.008,3.356-2.008,3.996,0Z"></path>
                  <path fill="hsl(223,90%,80%)" d="M14.009,102.499L.109,58.889c-.453-1.421,.559-2.889,1.991-2.889H29.899c1.433,0,2.444,1.468,1.991,2.889l-13.899,43.61c-.638,2.001-3.345,2.001-3.983,0Z"></path>
                </g>
              </g>
            </g>
          </svg>



        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="5">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>
      <article class="square">
        <div class="button_me">


          <div class="loader6">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
          </div>






        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="6">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>
      <article class="square">
        <div class="button_me">


          <div class="loader7">
            <div class="loader__inner"></div>
            <div class="loader__orbit">
              <div class="loader__dot"></div>
              <div class="loader__dot"></div>
              <div class="loader__dot"></div>
              <div class="loader__dot"></div>
            </div>
          </div>





        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="7">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>




      </article>
      <article class="square">

        <div class="button_me">


          <div class="loader8">
            <svg viewBox="0 0 80 80">
              <circle r="32" cy="40" cx="40" id="test"></circle>
            </svg>
          </div>

          <div class="loader8">
            <svg viewBox="0 0 86 80">
              <polygon points="43 8 79 72 7 72"></polygon>
            </svg>
          </div>

          <div class="loader8">
            <svg viewBox="0 0 80 80">
              <rect height="64" width="64" y="8" x="8"></rect>
            </svg>
          </div>





        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="8">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>

      </article>
      <article class="square">
        <div class="button_me">


          <div class="loader9">
            <svg height="0" width="0" viewBox="0 0 64 64" class="absolute">
              <defs class="s-xJBuHA073rTt" xmlns="http://www.w3.org/2000/svg">
                <linearGradient class="s-xJBuHA073rTt" gradientUnits="userSpaceOnUse" y2="2" x2="0" y1="62" x1="0" id="b">
                  <stop class="s-xJBuHA073rTt" stop-color="#973BED"></stop>
                  <stop class="s-xJBuHA073rTt" stop-color="#007CFF" offset="1"></stop>
                </linearGradient>
                <linearGradient class="s-xJBuHA073rTt" gradientUnits="userSpaceOnUse" y2="0" x2="0" y1="64" x1="0" id="c">
                  <stop class="s-xJBuHA073rTt" stop-color="#FFC800"></stop>
                  <stop class="s-xJBuHA073rTt" stop-color="#F0F" offset="1"></stop>
                  <animateTransform repeatCount="indefinite" keySplines=".42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1" keyTimes="0; 0.125; 0.25; 0.375; 0.5; 0.625; 0.75; 0.875; 1" dur="8s" values="0 32 32;-270 32 32;-270 32 32;-540 32 32;-540 32 32;-810 32 32;-810 32 32;-1080 32 32;-1080 32 32" type="rotate" attributeName="gradientTransform"></animateTransform>
                </linearGradient>
                <linearGradient class="s-xJBuHA073rTt" gradientUnits="userSpaceOnUse" y2="2" x2="0" y1="62" x1="0" id="d">
                  <stop class="s-xJBuHA073rTt" stop-color="#00E0ED"></stop>
                  <stop class="s-xJBuHA073rTt" stop-color="#00DA72" offset="1"></stop>
                </linearGradient>
              </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64" height="64" width="64" class="inline-block">
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="8" stroke="url(#b)" d="M 54.722656,3.9726563 A 2.0002,2.0002 0 0 0 54.941406,4 h 5.007813 C 58.955121,17.046124 49.099667,27.677057 36.121094,29.580078 a 2.0002,2.0002 0 0 0 -1.708985,1.978516 V 60 H 29.587891 V 31.558594 A 2.0002,2.0002 0 0 0 27.878906,29.580078 C 14.900333,27.677057 5.0448787,17.046124 4.0507812,4 H 9.28125 c 1.231666,11.63657 10.984383,20.554048 22.6875,20.734375 a 2.0002,2.0002 0 0 0 0.02344,0 c 11.806958,0.04283 21.70649,-9.003371 22.730469,-20.7617187 z" class="dash" id="y" pathLength="360"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="--rotation-duration:0ms; --rotation-direction:normal;" viewBox="0 0 64 64" height="64" width="64" class="inline-block">
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="10" stroke="url(#c)" d="M 32 32
        m 0 -27
        a 27 27 0 1 1 0 54
        a 27 27 0 1 1 0 -54" class="spin" id="o" pathLength="360"></path>
            </svg>
            <div class="w-2"></div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="--rotation-duration:0ms; --rotation-direction:normal;" viewBox="0 0 64 64" height="64" width="64" class="inline-block">
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="8" stroke="url(#d)" d="M 4,4 h 4.6230469 v 25.919922 c -0.00276,11.916203 9.8364941,21.550422 21.7500001,21.296875 11.616666,-0.240651 21.014356,-9.63894 21.253906,-21.25586 a 2.0002,2.0002 0 0 0 0,-0.04102 V 4 H 56.25 v 25.919922 c 0,14.33873 -11.581192,25.919922 -25.919922,25.919922 a 2.0002,2.0002 0 0 0 -0.0293,0 C 15.812309,56.052941 3.998433,44.409961 4,29.919922 Z" class="dash" id="u" pathLength="360"></path>
            </svg>
          </div>





        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="9">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>







      </article>
      <article class="square">

        <div class="button_me">



          <div class="pl10">
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__dot"></div>
            <div class="pl__text">Loading…</div>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="10">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>






      </article>
      <article class="square">


        <div class="button_me">


          <svg
                  class="pencil"
                  viewBox="0 0 200 200"
                  width="200px"
                  height="200px"
                  xmlns="http://www.w3.org/2000/svg"
          >
            <defs>
              <clipPath id="pencil-eraser">
                <rect rx="5" ry="5" width="30" height="30"></rect>
              </clipPath>
            </defs>
            <circle
                    class="pencil__stroke"
                    r="70"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-dasharray="439.82 439.82"
                    stroke-dashoffset="439.82"
                    stroke-linecap="round"
                    transform="rotate(-113,100,100)"
            ></circle>
            <g class="pencil__rotate" transform="translate(100,100)">
              <g fill="none">
                <circle
                        class="pencil__body1"
                        r="64"
                        stroke="hsl(30, 30%, 50%)"
                        stroke-width="30"
                        stroke-dasharray="402.12 402.12"
                        stroke-dashoffset="402"
                        transform="rotate(-90)"
                ></circle>
                <circle
                        class="pencil__body2"
                        r="74"
                        stroke="hsl(30, 30%, 60%)"
                        stroke-width="10"
                        stroke-dasharray="464.96 464.96"
                        stroke-dashoffset="465"
                        transform="rotate(-90)"
                ></circle>
                <circle
                        class="pencil__body3"
                        r="54"
                        stroke="hsl(30, 30%, 40%)"
                        stroke-width="10"
                        stroke-dasharray="339.29 339.29"
                        stroke-dashoffset="339"
                        transform="rotate(-90)"
                ></circle>
              </g>
              <g class="pencil__eraser" transform="rotate(-90) translate(49,0)">
                <g class="pencil__eraser-skew">
                  <rect
                          fill="hsl(30, 20%, 90%)"
                          rx="5"
                          ry="5"
                          width="30"
                          height="30"
                  ></rect>
                  <rect
                          fill="hsl(30, 20%, 85%)"
                          width="5"
                          height="30"
                          clip-path="url(#pencil-eraser)"
                  ></rect>
                  <rect fill="hsl(30, 20%, 80%)" width="30" height="20"></rect>
                  <rect fill="hsl(30, 20%, 75%)" width="15" height="20"></rect>
                  <rect fill="hsl(30, 20%, 85%)" width="5" height="20"></rect>
                  <rect fill="hsla(30, 20%, 75%, 0.2)" y="6" width="30" height="2"></rect>
                  <rect
                          fill="hsla(30, 20%, 75%, 0.2)"
                          y="13"
                          width="30"
                          height="2"
                  ></rect>
                </g>
              </g>
              <g class="pencil__point" transform="rotate(-90) translate(49,-30)">
                <polygon fill="hsl(33,90%,70%)" points="15 0,30 30,0 30"></polygon>
                <polygon fill="hsl(33,90%,50%)" points="15 0,6 30,0 30"></polygon>
                <polygon fill="hsl(223,10%,10%)" points="15 0,20 10,10 10"></polygon>
              </g>
            </g>
          </svg>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="11">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>
      <article class="square">




        <div class="button_me">


          <div class="loader12">
            <svg
                    preserveAspectRatio="xMidYMid meet"
                    width="40"
                    height="40"
                    viewBox="0 0 40 40"
                    y="0px"
                    x="0px"
                    class="container12"
            >
              <path
                      d="M29.760000000000005 18.72 c0 7.28 -3.9200000000000004 13.600000000000001 -9.840000000000002 16.96 c -2.8800000000000003 1.6800000000000002 -6.24 2.64 -9.840000000000002 2.64 c -3.6 0 -6.88 -0.96 -9.76 -2.64 c0 -7.28 3.9200000000000004 -13.52 9.840000000000002 -16.96 c2.8800000000000003 -1.6800000000000002 6.24 -2.64 9.76 -2.64 S26.880000000000003 17.040000000000003 29.760000000000005 18.72 c5.84 3.3600000000000003 9.76 9.68 9.840000000000002 16.96 c -2.8800000000000003 1.6800000000000002 -6.24 2.64 -9.76 2.64 c -3.6 0 -6.88 -0.96 -9.840000000000002 -2.64 c -5.84 -3.3600000000000003 -9.76 -9.68 -9.76 -16.96 c0 -7.28 3.9200000000000004 -13.600000000000001 9.76 -16.96 C25.84 5.120000000000001 29.760000000000005 11.440000000000001 29.760000000000005 18.72z"
                      pathLength="100"
                      stroke-width="4"
                      fill="none"
                      class="track"
              ></path>
              <path
                      d="M29.760000000000005 18.72 c0 7.28 -3.9200000000000004 13.600000000000001 -9.840000000000002 16.96 c -2.8800000000000003 1.6800000000000002 -6.24 2.64 -9.840000000000002 2.64 c -3.6 0 -6.88 -0.96 -9.76 -2.64 c0 -7.28 3.9200000000000004 -13.52 9.840000000000002 -16.96 c2.8800000000000003 -1.6800000000000002 6.24 -2.64 9.76 -2.64 S26.880000000000003 17.040000000000003 29.760000000000005 18.72 c5.84 3.3600000000000003 9.76 9.68 9.840000000000002 16.96 c -2.8800000000000003 1.6800000000000002 -6.24 2.64 -9.76 2.64 c -3.6 0 -6.88 -0.96 -9.840000000000002 -2.64 c -5.84 -3.3600000000000003 -9.76 -9.68 -9.76 -16.96 c0 -7.28 3.9200000000000004 -13.600000000000001 9.76 -16.96 C25.84 5.120000000000001 29.760000000000005 11.440000000000001 29.760000000000005 18.72z"
                      pathLength="100"
                      stroke-width="4"
                      fill="none"
                      class="car"
              ></path>
            </svg>
          </div>





        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="12">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>
      <article class="square">
        <div class="button_me">


          <div class="semicircle">
            <div>
              <div>
                <div>
                  <div>
                    <div>
                      <div>
                        <div>
                          <div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="13">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>


      </article>
      <article class="square">
        <div class="button_me">


          <svg class="gegga">
            <defs>
              <filter id="gegga">
                <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur"></feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10" result="inreGegga"></feColorMatrix>
                <feComposite in="SourceGraphic" in2="inreGegga" operator="atop"></feComposite>
              </filter>
            </defs>
          </svg>
          <svg class="snurra" width="200" height="200" viewBox="0 0 200 200">
            <defs>
              <linearGradient id="linjärGradient">
                <stop class="stopp1" offset="0"></stop>
                <stop class="stopp2" offset="1"></stop>
              </linearGradient>
              <linearGradient y2="160" x2="160" y1="40" x1="40" gradientUnits="userSpaceOnUse" id="gradient" xlink:href="#linjärGradient"></linearGradient>
            </defs>
            <path class="halvan" d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"></path>
            <circle class="strecken" cx="100" cy="100" r="64"></circle>
          </svg>
          <svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
            <path class="halvan" d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"></path>
            <circle class="strecken" cx="100" cy="100" r="64"></circle>
          </svg>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="14">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>


      </article>



      <article class="square">
        <div class="button_me">


          <div class="loader15"></div>





        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="15">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>

      </article>
      <article class="square">
        <div class="button_me">


          <div class="page">
            <div class="container16">
              <div class="ring"></div>
              <div class="ring"></div>
              <div class="ring"></div>
              <div class="ring"></div>
              <div id="h3">loading</div>
            </div>
          </div>



        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="16">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>




      </article>
      <article class="square">
        <div class="button_me">


          <div id="container17">
            <label class="loading-title">Loading ...</label>
            <span class="loading-circle sp1">
    <span class="loading-circle sp2">
      <span class="loading-circle sp3"></span>
    </span>
  </span>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="17">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>
      <article class="square">
        <div class="button_me">


          <div class="container18">
            <div class="loader18"><span></span></div>
            <div class="loader18"><span></span></div>
            <div class="loader18"><i></i></div>
            <div class="loader18"><i></i></div>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="18">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>

      </article>
      <article class="square">
        <div class="button_me">


          <div class="solar-system">
            <div class="sun">
              <div class="corona"></div>
            </div>

            <div class="orbit mercury-orbit">
              <div class="planet mercury"></div>
            </div>

            <div class="orbit venus-orbit">
              <div class="planet venus"></div>
            </div>

            <div class="orbit earth-orbit">
              <div class="planet earth">
                <div class="moon"></div>
              </div>

              <div class="iss">
                <div class="iss-panels"></div>
              </div>
            </div>

            <div class="orbit mars-orbit">
              <div class="planet mars"></div>
            </div>

            <div class="stars">
              <div class="star star-1"></div>
              <div class="star star-2"></div>
              <div class="star star-3"></div>
              <div class="star star-4"></div>
              <div class="star star-5"></div>
            </div>
          </div>





        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="19">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>



      <article class="square">
        <div class="button_me">


          <div class="cssloader">
            <div class="triangle1"></div>
            <div class="triangle2"></div>
            <p class="text">Please Wait</p>
          </div>




        </div>
        <div class="card">

            <form action="Next.php" method="post">

                <input type="hidden" name="item_id" value="20">
                <button class="copy_1" type="submit">Next</button>

            </form>

        </div>
      </article>



    </div>

  </div>

</div>
</body>
</html>
