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

    $stmt = $conn->prepare("SELECT HTML, CSS FROM radio WHERE id = ?");
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
    <title>Radio Buttons</title>
    <link rel="stylesheet" href="../css/unifid.css">
    <link rel="stylesheet" href="../css/buttons.css">
    <link rel="stylesheet" href="../css/radio.css">
</head>

<header class="header">

    <span style="font-size: 44px" class="project-name">PixelSyntax</span>

    <span class="left-slider">
                <a href="homepage.php" class="sidebar-btn" >Home</a>
                <a href="buttons.php" class="sidebar-btn">Buttons</a>
                <a href="checkboxes.php" class="sidebar-btn" >CheckBoxes</a>
                <a href="togleswitches.php" class="sidebar-btn" >Toggle Switches</a>
                <a href="cards.php" class="sidebar-btn" >Cards</a>
                <a href="Loaders.php" class="sidebar-btn">Loaders</a>
                <a href="inputs.php" class="sidebar-btn" >Inputs</a>
                <a href="radio.php" class="sidebar-btn" style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Radio Buttons</a>


            </span>
</header>



<body>
<div class="b_head">
    <h1 class="b_headtext">Radio Button's </h1>
    <h2 class="b_b_headtext">Open-Source Radio Button's made with HTML and CSS </h2>
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


                    <div class="container">
                        <div class="pane">
                            <label class="label">
                                <span>Yes</span>
                                <input id="left" class="input" name="radio" type="radio">
                            </label>
                            <label class="label">
                                <span>No</span>
                                <input id="middle" class="input" checked="checked" name="radio" type="radio">
                            </label>
                            <label class="label">
                                <span>Idk</span>
                                <input id="right" class="input" name="radio" type="radio">
                            </label>
                            <span class="selection"></span>
                        </div>
                    </div>




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


                    <div class="radio-input">
                        <label class="second_label">
                            <input value="value-1" name="value-radio" class="value-1" type="radio" />
                            <span class="text">Play</span>
                        </label>
                        <label class="second_label">
                            <input value="value-1" name="value-radio" class="value-1" type="radio" />
                            <span class="text">Stop</span>
                        </label>
                        <label class="second_label">
                            <input value="value-1" name="value-radio" class="value-1" type="radio" />
                            <span class="text">Reset</span>
                        </label>
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


                    <div class="menu">
                        <a href="#" class="link">
    <span class="link-icon">
      <svg
              xmlns="http://www.w3.org/2000/svg"
              width="192"
              height="192"
              fill="currentColor"
              viewBox="0 0 256 256"
      >
        <rect width="256" height="256" fill="none"></rect>
        <path
                d="M213.3815,109.61945,133.376,36.88436a8,8,0,0,0-10.76339.00036l-79.9945,72.73477A8,8,0,0,0,40,115.53855V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V115.53887A8,8,0,0,0,213.3815,109.61945Z"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></path>
      </svg>
    </span>
                            <span class="link-title">Home</span>
                        </a>
                        <a href="#" class="link">
    <span class="link-icon">
      <svg
              xmlns="http://www.w3.org/2000/svg"
              width="192"
              height="192"
              fill="currentColor"
              viewBox="0 0 256 256"
      >
        <rect width="256" height="256" fill="none"></rect>
        <polyline
                points="76.201 132.201 152.201 40.201 216 40 215.799 103.799 123.799 179.799"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></polyline>
        <line
                x1="100"
                y1="156"
                x2="160"
                y2="96"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></line>
        <path
                d="M82.14214,197.45584,52.201,227.397a8,8,0,0,1-11.31371,0L28.603,215.11268a8,8,0,0,1,0-11.31371l29.94113-29.94112a8,8,0,0,0,0-11.31371L37.65685,141.65685a8,8,0,0,1,0-11.3137l12.6863-12.6863a8,8,0,0,1,11.3137,0l76.6863,76.6863a8,8,0,0,1,0,11.3137l-12.6863,12.6863a8,8,0,0,1-11.3137,0L93.45584,197.45584A8,8,0,0,0,82.14214,197.45584Z"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></path>
      </svg>
    </span>
                            <span class="link-title">Games</span>
                        </a>
                        <a href="#" class="link">
    <span class="link-icon">
      <svg
              xmlns="http://www.w3.org/2000/svg"
              width="192"
              height="192"
              fill="currentColor"
              viewBox="0 0 256 256"
      >
        <rect width="256" height="256" fill="none"></rect>
        <path
                d="M45.42853,176.99811A95.95978,95.95978,0,1,1,79.00228,210.5717l.00023-.001L45.84594,220.044a8,8,0,0,1-9.89-9.89l9.47331-33.15657Z"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></path>
        <line
                x1="96"
                y1="112"
                x2="160"
                y2="112"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></line>
        <line
                x1="96"
                y1="144"
                x2="160"
                y2="144"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></line>
      </svg>
    </span>
                            <span class="link-title">Chat</span>
                        </a>

                        <a href="#" class="link">
    <span class="link-icon">
      <svg
              xmlns="http://www.w3.org/2000/svg"
              width="192"
              height="192"
              fill="currentColor"
              viewBox="0 0 256 256"
      >
        <rect width="256" height="256" fill="none"></rect>
        <circle
                cx="116"
                cy="116"
                r="84"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></circle>
        <line
                x1="175.39356"
                y1="175.40039"
                x2="223.99414"
                y2="224.00098"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></line>
      </svg>
    </span>
                            <span class="link-title">Search</span>
                        </a>
                        <a href="#" class="link">
    <span class="link-icon">
      <svg
              xmlns="http://www.w3.org/2000/svg"
              width="192"
              height="192"
              fill="currentColor"
              viewBox="0 0 256 256"
      >
        <rect width="256" height="256" fill="none"></rect>
        <circle
                cx="128"
                cy="96"
                r="64"
                fill="none"
                stroke="currentColor"
                stroke-miterlimit="10"
                stroke-width="16"
        ></circle>
        <path
                d="M30.989,215.99064a112.03731,112.03731,0,0,1,194.02311.002"
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="16"
        ></path>
      </svg>
    </span>
                            <span class="link-title">Profile</span>
                        </a>
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



                    <div class="forth_radio-input">
                        <div class="switch-panel">
                            <div class="track-groove"></div>
                        </div>
                        <div class="forth_selector">
                            <div class="choice">
                                <div class="input-container">
                                    <input
                                            class="choice-switch"
                                            checked="true"
                                            value="power"
                                            name="mech-selector"
                                            id="power"
                                            type="radio"
                                    />
                                    <div class="lever"></div>
                                </div>
                                <label for="power" class="choice-plate">Power</label>
                            </div>
                            <div class="choice">
                                <div class="input-container">
                                    <input
                                            class="choice-switch"
                                            value="boost"
                                            name="mech-selector"
                                            id="boost"
                                            type="radio"
                                    />
                                    <div class="lever"></div>
                                </div>
                                <label for="boost" class="choice-plate">Boost</label>
                            </div>
                            <div class="choice">
                                <div class="input-container">
                                    <input
                                            class="choice-switch"
                                            value="ignite"
                                            name="mech-selector"
                                            id="ignite"
                                            type="radio"
                                    />
                                    <div class="lever"></div>
                                </div>
                                <label for="ignite" class="choice-plate">Ignite</label>
                            </div>
                        </div>
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


                    <div class="fifth_radio-inputs">
                        <label>
                            <input class="fifth_radio-input" type="radio" name="engine" />
                            <span class="fifth_radio-tile">
      <span class="fifth_radio-icon">
        <svg
                stroke="currentColor"
                xml:space="preserve"
                viewBox="0 0 493.407 493.407"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns="http://www.w3.org/2000/svg"
                id="Capa_1"
                version="1.1"
                width="200px"
                height="200px"
                fill="none"
        >
          <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
          <g
                  stroke-linejoin="round"
                  stroke-linecap="round"
                  id="SVGRepo_tracerCarrier"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <path
                    d="M488.474,270.899c-12.647-37.192-47.527-62.182-86.791-62.182c-5.892,0-11.728,0.749-17.499,1.879l-34.324-100.94 c-1.71-5.014-6.417-8.392-11.721-8.392H315.02c-6.836,0-12.382,5.547-12.382,12.382c0,6.836,5.545,12.381,12.382,12.381h14.252 l12.462,36.645H206.069v-21.998l21.732-2.821c3.353-0.434,6.135-3.079,6.585-6.585c0.54-4.183-2.402-8.013-6.585-8.553l-68.929-8.94 c-1.362-0.168-2.853-0.185-4.281,0c-9.116,1.186-15.55,9.537-14.373,18.653c1.185,9.118,9.537,15.55,18.653,14.364l22.434-2.909 v26.004l-41.255,52.798c-14.059-8.771-30.592-13.93-48.349-13.93C41.135,208.757,0,249.885,0,300.443 c0,50.565,41.135,91.7,91.701,91.7c44.882,0,82.261-32.437,90.113-75.095h33.605v12.647h-5.909c-4.563,0-8.254,3.693-8.254,8.254 c0,4.563,3.691,8.254,8.254,8.254h36.58c4.563,0,8.254-3.691,8.254-8.254c0-4.561-3.691-8.254-8.254-8.254h-5.908v-12.647h5.545 c3.814,0,7.409-1.756,9.755-4.756l95.546-122.267l9.776,28.729c-17.854,8.892-32.444,22.965-41.409,41.168 c-10.825,21.973-12.438,46.842-4.553,70.034c12.662,37.201,47.55,62.189,86.815,62.189c10.021,0,19.951-1.645,29.519-4.9 c23.191-7.885,41.926-24.329,52.744-46.302C494.746,318.966,496.367,294.09,488.474,270.899z M143.46,258.542 c7.698,9.488,12.776,21.014,14.349,33.742h-40.717L143.46,258.542z M91.701,367.379c-36.912,0-66.938-30.026-66.938-66.936 c0-36.904,30.026-66.923,66.938-66.923c12.002,0,23.11,3.427,32.864,8.981l-42.619,54.54c-2.917,3.732-3.448,8.794-1.378,13.05 c2.08,4.256,6.4,6.957,11.134,6.957h64.592C148.861,345.906,122.84,367.379,91.701,367.379z M239.69,292.284h-56.707 c-1.839-20.667-10.586-39.329-23.868-53.782l22.191-28.398v32.47c0,6.836,5.545,12.381,12.381,12.381 c6.836,0,12.382-5.545,12.382-12.381v-55.138h115.553L239.69,292.284z M383.546,285.618l6.384,18.79 c1.75,5.151,6.562,8.392,11.721,8.392c1.321,0,2.667-0.21,3.99-0.661c6.471-2.201,9.93-9.23,7.729-15.711l-6.336-18.637 c7.731,1.838,14.221,7.312,16.855,15.083c2.024,5.94,1.613,12.309-1.161,17.935c-2.773,5.626-7.569,9.835-13.509,11.858 c-12.068,4.078-25.716-2.717-29.785-14.671C376.735,300.055,378.597,291.689,383.546,285.618z M461.712,329.994 c-7.908,16.042-21.579,28.044-38.507,33.808c-6.997,2.378-14.244,3.578-21.547,3.578c-28.664,0-54.129-18.249-63.374-45.399 c-5.757-16.926-4.571-35.081,3.328-51.112c6.047-12.27,15.494-22.112,27.165-28.666l8.981,26.416 c-13.414,10.108-19.644,27.931-13.954,44.691c5.522,16.227,20.732,27.124,37.853,27.124c4.378,0,8.707-0.725,12.882-2.145 c10.108-3.434,18.282-10.607,22.999-20.184c4.723-9.585,5.425-20.435,1.982-30.551c-5.545-16.299-21.57-26.787-38.289-26.818 l-8.997-26.472c3.128-0.453,6.28-0.783,9.448-0.783c28.658,0,54.112,18.242,63.351,45.399 C470.788,295.799,469.613,313.96,461.712,329.994z"
            ></path>
          </g>
        </svg>
      </span>
      <span class="fifth_radio-label">Bicycle</span>
    </span>
                        </label>
                        <label>
                            <input checked="" class="fifth_radio-input" type="radio" name="engine" />
                            <span class="fifth_radio-tile">
      <span class="fifth_radio-icon">
        <svg
                stroke="currentColor"
                xml:space="preserve"
                viewBox="0 0 467.168 467.168"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns="http://www.w3.org/2000/svg"
                id="Capa_1"
                version="1.1"
                fill="none"
        >
          <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
          <g
                  stroke-linejoin="round"
                  stroke-linecap="round"
                  id="SVGRepo_tracerCarrier"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <g>
                <path
                        d="M76.849,210.531C34.406,210.531,0,244.937,0,287.388c0,42.438,34.406,76.847,76.849,76.847 c30.989,0,57.635-18.387,69.789-44.819l18.258,14.078c0,0,134.168,0.958,141.538-3.206c0,0-16.65-45.469,4.484-64.688 c2.225-2.024,5.021-4.332,8.096-6.777c-3.543,8.829-5.534,18.45-5.534,28.558c0,42.446,34.403,76.846,76.846,76.846 c42.443,0,76.843-34.415,76.843-76.846c0-42.451-34.408-76.849-76.843-76.849c-0.697,0-1.362,0.088-2.056,0.102 c5.551-3.603,9.093-5.865,9.093-5.865l-5.763-5.127c0,0,16.651-3.837,12.816-12.167c-3.848-8.33-44.19-58.28-44.19-58.28 s7.146-15.373-7.634-26.261l-7.098,15.371c0,0-18.093-12.489-25.295-10.084c-7.205,2.398-18.005,3.603-21.379,8.884l-3.358,3.124 c0,0-0.95,5.528,4.561,13.693c0,0,55.482,17.05,58.119,29.537c0,0,3.848,7.933-12.728,9.844l-3.354,4.328l-8.896,0.479 l-16.082-36.748c0,0-15.381,4.082-23.299,10.323l1.201,6.24c0,0-64.599-43.943-125.362,21.137c0,0-44.909,12.966-76.37-26.897 c0,0-0.479-12.968-76.367-10.565l5.286,5.524c0,0-5.286,0.479-7.444,3.841c-2.158,3.358,1.2,6.961,18.494,6.961 c0,0,39.153,44.668,69.17,42.032l42.743,20.656l18.975,32.42c0,0,0.034,2.785,0.23,7.045c-4.404,0.938-9.341,1.979-14.579,3.09 C139.605,232.602,110.832,210.531,76.849,210.531z M390.325,234.081c29.395,0,53.299,23.912,53.299,53.299 c0,29.39-23.912,53.294-53.299,53.294c-29.394,0-53.294-23.912-53.294-53.294C337.031,257.993,360.932,234.081,390.325,234.081z M76.849,340.683c-29.387,0-53.299-23.913-53.299-53.295c0-29.395,23.912-53.299,53.299-53.299 c22.592,0,41.896,14.154,49.636,34.039c-28.26,6.011-56.31,11.99-56.31,11.99l3.619,19.933l55.339-2.444 C124.365,322.116,102.745,340.683,76.849,340.683z M169.152,295.835c1.571,5.334,3.619,9.574,6.312,11.394l-24.696,0.966 c1.058-3.783,1.857-7.666,2.338-11.662L169.152,295.835z"
                ></path>
              </g>
            </g>
          </g>
        </svg>
      </span>
      <span class="fifth_radio-label">Motorbike</span>
    </span>
                        </label>
                        <label>
                            <input class="fifth_radio-input" type="radio" name="engine" />
                            <span class="fifth_radio-tile">
      <span class="fifth_radio-icon">
        <svg
                stroke="currentColor"
                xml:space="preserve"
                viewBox="0 0 324.018 324.017"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns="http://www.w3.org/2000/svg"
                id="Capa_1"
                version="1.1"
                fill="none"
        >
          <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
          <g
                  stroke-linejoin="round"
                  stroke-linecap="round"
                  id="SVGRepo_tracerCarrier"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <g>
                <path
                        d="M317.833,197.111c3.346-11.148,2.455-20.541-2.65-27.945c-9.715-14.064-31.308-15.864-35.43-16.076l-8.077-4.352 l-0.528-0.217c-8.969-2.561-42.745-3.591-47.805-3.733c-7.979-3.936-14.607-7.62-20.475-10.879 c-20.536-11.413-34.107-18.958-72.959-18.958c-47.049,0-85.447,20.395-90.597,23.25c-2.812,0.212-5.297,0.404-7.646,0.59 l-6.455-8.733l7.34,0.774c2.91,0.306,4.267-1.243,3.031-3.459c-1.24-2.216-4.603-4.262-7.519-4.57l-23.951-2.524 c-2.91-0.305-4.267,1.243-3.026,3.459c1.24,2.216,4.603,4.262,7.519,4.57l3.679,0.386l8.166,11.05 c-13.823,1.315-13.823,2.139-13.823,4.371c0,18.331-2.343,22.556-2.832,23.369L0,164.443v19.019l2.248,2.89 c-0.088,2.775,0.823,5.323,2.674,7.431c5.981,6.804,19.713,7.001,21.256,7.001c4.634,0,14.211-2.366,20.78-4.153 c-0.456-0.781-0.927-1.553-1.3-2.392c-0.36-0.809-0.603-1.668-0.885-2.517c-0.811-2.485-1.362-5.096-1.362-7.845 c0-14.074,11.449-25.516,25.515-25.516s25.52,11.446,25.52,25.521c0,6.068-2.221,11.578-5.773,15.964 c-0.753,0.927-1.527,1.828-2.397,2.641c-1.022,0.958-2.089,1.859-3.254,2.641c29.332,0.109,112.164,0.514,168.708,1.771 c-0.828-0.823-1.533-1.771-2.237-2.703c-0.652-0.854-1.222-1.75-1.761-2.688c-2.164-3.744-3.5-8.025-3.5-12.655 c0-14.069,11.454-25.513,25.518-25.513c14.064,0,25.518,11.449,25.518,25.513c0,5.126-1.553,9.875-4.152,13.878 c-0.605,0.922-1.326,1.755-2.04,2.594c-0.782,0.922-1.616,1.781-2.527,2.584c5.209,0.155,9.699,0.232,13.546,0.232 c19.563,0,23.385-1.688,23.861-5.018C324.114,202.108,324.472,199.602,317.833,197.111z"
                ></path>
                <path
                        d="M52.17,195.175c3.638,5.379,9.794,8.922,16.756,8.922c0.228,0,0.44-0.062,0.663-0.073c2.576-0.083,5.043-0.61,7.291-1.574 c1.574-0.678,2.996-1.6,4.332-2.636c4.782-3.702,7.927-9.429,7.927-15.933c0-11.144-9.066-20.216-20.212-20.216 s-20.213,9.072-20.213,20.216c0,2.263,0.461,4.411,1.149,6.446c0.288,0.85,0.616,1.673,1.015,2.471 C51.279,193.606,51.667,194.434,52.17,195.175z"
                ></path>
                <path
                        d="M269.755,209.068c2.656,0,5.173-0.549,7.503-1.481c1.589-0.642,3.06-1.491,4.422-2.495 c1.035-0.767,1.988-1.616,2.863-2.559c3.34-3.604,5.432-8.389,5.432-13.681c0-11.144-9.071-20.21-20.215-20.21 s-20.216,9.066-20.216,20.21c0,4.878,1.812,9.3,4.702,12.801c0.818,0.989,1.719,1.89,2.708,2.713 c1.311,1.088,2.729,2.024,4.293,2.755C263.836,208.333,266.704,209.068,269.755,209.068z"
                ></path>
              </g>
            </g>
          </g>
        </svg>
      </span>
      <span class="fifth_radio-label">Car</span>
    </span>
                        </label>
                    </div>





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


                    <div class="sixth_input">
                        <button class="sixth_value">
                            <svg
                                    data-name="Layer 2"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                            >
                                <path
                                        d="m1.5 13v1a.5.5 0 0 0 .3379.4731 18.9718 18.9718 0 0 0 6.1621 1.0269 18.9629 18.9629 0 0 0 6.1621-1.0269.5.5 0 0 0 .3379-.4731v-1a6.5083 6.5083 0 0 0 -4.461-6.1676 3.5 3.5 0 1 0 -4.078 0 6.5083 6.5083 0 0 0 -4.461 6.1676zm4-9a2.5 2.5 0 1 1 2.5 2.5 2.5026 2.5026 0 0 1 -2.5-2.5zm2.5 3.5a5.5066 5.5066 0 0 1 5.5 5.5v.6392a18.08 18.08 0 0 1 -11 0v-.6392a5.5066 5.5066 0 0 1 5.5-5.5z"
                                        fill="#7D8590"
                                ></path>
                            </svg>
                            Public profile
                        </button>
                        <button class="sixth_value">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Line">
                                <path
                                        d="m17.074 30h-2.148c-1.038 0-1.914-.811-1.994-1.846l-.125-1.635c-.687-.208-1.351-.484-1.985-.824l-1.246 1.067c-.788.677-1.98.631-2.715-.104l-1.52-1.52c-.734-.734-.78-1.927-.104-2.715l1.067-1.246c-.34-.635-.616-1.299-.824-1.985l-1.634-.125c-1.035-.079-1.846-.955-1.846-1.993v-2.148c0-1.038.811-1.914 1.846-1.994l1.635-.125c.208-.687.484-1.351.824-1.985l-1.068-1.247c-.676-.788-.631-1.98.104-2.715l1.52-1.52c.734-.734 1.927-.779 2.715-.104l1.246 1.067c.635-.34 1.299-.616 1.985-.824l.125-1.634c.08-1.034.956-1.845 1.994-1.845h2.148c1.038 0 1.914.811 1.994 1.846l.125 1.635c.687.208 1.351.484 1.985.824l1.246-1.067c.787-.676 1.98-.631 2.715.104l1.52 1.52c.734.734.78 1.927.104 2.715l-1.067 1.246c.34.635.616 1.299.824 1.985l1.634.125c1.035.079 1.846.955 1.846 1.993v2.148c0 1.038-.811 1.914-1.846 1.994l-1.635.125c-.208.687-.484 1.351-.824 1.985l1.067 1.246c.677.788.631 1.98-.104 2.715l-1.52 1.52c-.734.734-1.928.78-2.715.104l-1.246-1.067c-.635.34-1.299.616-1.985.824l-.125 1.634c-.079 1.035-.955 1.846-1.993 1.846zm-5.835-6.373c.848.53 1.768.912 2.734 1.135.426.099.739.462.772.898l.18 2.341 2.149-.001.18-2.34c.033-.437.347-.8.772-.898.967-.223 1.887-.604 2.734-1.135.371-.232.849-.197 1.181.089l1.784 1.529 1.52-1.52-1.529-1.784c-.285-.332-.321-.811-.089-1.181.53-.848.912-1.768 1.135-2.734.099-.426.462-.739.898-.772l2.341-.18h-.001v-2.148l-2.34-.18c-.437-.033-.8-.347-.898-.772-.223-.967-.604-1.887-1.135-2.734-.232-.37-.196-.849.089-1.181l1.529-1.784-1.52-1.52-1.784 1.529c-.332.286-.81.321-1.181.089-.848-.53-1.768-.912-2.734-1.135-.426-.099-.739-.462-.772-.898l-.18-2.341-2.148.001-.18 2.34c-.033.437-.347.8-.772.898-.967.223-1.887.604-2.734 1.135-.37.232-.849.197-1.181-.089l-1.785-1.529-1.52 1.52 1.529 1.784c.285.332.321.811.089 1.181-.53.848-.912 1.768-1.135 2.734-.099.426-.462.739-.898.772l-2.341.18.002 2.148 2.34.18c.437.033.8.347.898.772.223.967.604 1.887 1.135 2.734.232.37.196.849-.089 1.181l-1.529 1.784 1.52 1.52 1.784-1.529c.332-.287.813-.32 1.18-.089z"
                                        id="XMLID_1646_"
                                        fill="#7D8590"
                                ></path>
                                <path
                                        d="m16 23c-3.859 0-7-3.141-7-7s3.141-7 7-7 7 3.141 7 7-3.141 7-7 7zm0-12c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"
                                        fill="#7D8590"
                                        id="XMLID_1645_"
                                ></path>
                            </svg>
                            Account
                        </button>
                        <button class="sixth_value">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                <path
                                        d="m109.9 20.63a6.232 6.232 0 0 0 -8.588-.22l-57.463 51.843c-.012.011-.02.024-.031.035s-.023.017-.034.027l-4.721 4.722a1.749 1.749 0 0 0 0 2.475l.341.342-3.16 3.16a8 8 0 0 0 -1.424 1.967 11.382 11.382 0 0 0 -12.055 10.609c-.006.036-.011.074-.015.111a5.763 5.763 0 0 1 -4.928 5.41 1.75 1.75 0 0 0 -.844 3.14c4.844 3.619 9.4 4.915 13.338 4.915a17.14 17.14 0 0 0 11.738-4.545l.182-.167a11.354 11.354 0 0 0 3.348-8.081c0-.225-.02-.445-.032-.667a8.041 8.041 0 0 0 1.962-1.421l3.16-3.161.342.342a1.749 1.749 0 0 0 2.475 0l4.722-4.722c.011-.011.018-.025.029-.036s.023-.018.033-.029l51.844-57.46a6.236 6.236 0 0 0 -.219-8.589zm-70.1 81.311-.122.111c-.808.787-7.667 6.974-17.826 1.221a9.166 9.166 0 0 0 4.36-7.036 1.758 1.758 0 0 0 .036-.273 7.892 7.892 0 0 1 9.122-7.414c.017.005.031.014.048.019a1.717 1.717 0 0 0 .379.055 7.918 7.918 0 0 1 4 13.317zm5.239-10.131c-.093.093-.194.176-.293.26a11.459 11.459 0 0 0 -6.289-6.286c.084-.1.167-.2.261-.3l3.161-3.161 6.321 6.326zm7.214-4.057-9.479-9.479 2.247-2.247 9.479 9.479zm55.267-60.879-50.61 56.092-9.348-9.348 56.092-50.61a2.737 2.737 0 0 1 3.866 3.866z"
                                        fill="#7D8590"
                                ></path>
                            </svg>
                            Appearance
                        </button>
                        <button class="sixth_value">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="svg8">
                                <g transform="translate(-33.022 -30.617)" id="layer1">
                                    <path
                                            d="m49.021 31.617c-2.673 0-4.861 2.188-4.861 4.861 0 1.606.798 3.081 1.873 3.834h-7.896c-1.7 0-3.098 1.401-3.098 3.1s1.399 3.098 3.098 3.098h4.377l.223 2.641s-1.764 8.565-1.764 8.566c-.438 1.642.55 3.355 2.191 3.795s3.327-.494 3.799-2.191l2.059-5.189 2.059 5.189c.44 1.643 2.157 2.631 3.799 2.191s2.63-2.153 2.191-3.795l-1.764-8.566.223-2.641h4.377c1.699 0 3.098-1.399 3.098-3.098s-1.397-3.1-3.098-3.1h-7.928c1.102-.771 1.904-2.228 1.904-3.834 0-2.672-2.189-4.861-4.862-4.861zm0 2c1.592 0 2.861 1.27 2.861 2.861 0 1.169-.705 2.214-1.789 2.652-.501.203-.75.767-.563 1.273l.463 1.254c.145.393.519.654.938.654h8.975c.626 0 1.098.473 1.098 1.1s-.471 1.098-1.098 1.098h-5.297c-.52 0-.952.398-.996.916l-.311 3.701c-.008.096-.002.191.018.285 0 0 1.813 8.802 1.816 8.82.162.604-.173 1.186-.777 1.348s-1.184-.173-1.346-.777c-.01-.037-3.063-7.76-3.063-7.76-.334-.842-1.525-.842-1.859 0 0 0-3.052 7.723-3.063 7.76-.162.604-.741.939-1.346.777s-.939-.743-.777-1.348c.004-.019 1.816-8.82 1.816-8.82.02-.094.025-.189.018-.285l-.311-3.701c-.044-.518-.477-.916-.996-.916h-5.297c-.627 0-1.098-.471-1.098-1.098s.472-1.1 1.098-1.1h8.975c.419 0 .793-.262.938-.654l.463-1.254c.188-.507-.062-1.07-.563-1.273-1.084-.438-1.789-1.483-1.789-2.652.001-1.591 1.271-2.861 2.862-2.861z"
                                            id="path26276"
                                            fill="#7D8590"
                                    ></path>
                                </g>
                            </svg>
                            Accessibility
                        </button>
                        <button class="sixth_value">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" fill="none">
                                <path
                                        fill-rule="evenodd"
                                        fill="#7D8590"
                                        d="m11.9572 4.31201c-3.35401 0-6.00906 2.59741-6.00906 5.67742v3.29037c0 .1986-.05916.3927-.16992.5576l-1.62529 2.4193-.01077.0157c-.18701.2673-.16653.5113-.07001.6868.10031.1825.31959.3528.67282.3528h14.52603c.2546 0 .5013-.1515.6391-.3968.1315-.2343.1117-.4475-.0118-.6093-.0065-.0085-.0129-.0171-.0191-.0258l-1.7269-2.4194c-.121-.1695-.186-.3726-.186-.5809v-3.29037c0-1.54561-.6851-3.023-1.7072-4.00431-1.1617-1.01594-2.6545-1.67311-4.3019-1.67311zm-8.00906 5.67742c0-4.27483 3.64294-7.67742 8.00906-7.67742 2.2055 0 4.1606.88547 5.6378 2.18455.01.00877.0198.01774.0294.02691 1.408 1.34136 2.3419 3.34131 2.3419 5.46596v2.97007l1.5325 2.1471c.6775.8999.6054 1.9859.1552 2.7877-.4464.795-1.3171 1.4177-2.383 1.4177h-14.52603c-2.16218 0-3.55087-2.302-2.24739-4.1777l1.45056-2.1593zm4.05187 11.32257c0-.5523.44772-1 1-1h5.99999c.5523 0 1 .4477 1 1s-.4477 1-1 1h-5.99999c-.55228 0-1-.4477-1-1z"
                                        clip-rule="evenodd"
                                ></path>
                            </svg>
                            Notifications
                        </button>
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



                    <div class="seventh_radio-container">
                        <input checked="" id="radio-free" name="radio" type="radio" />
                        <label for="radio-free">Free</label>
                        <input id="radio-basic" name="radio" type="radio" />
                        <label for="radio-basic">Basic</label>
                        <input id="radio-premium" name="radio" type="radio" />
                        <label for="radio-premium">Premium</label>

                        <div class="glider-container">
                            <div class="glider"></div>
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



                    <section>
                        <label title="home" for="home" class="label">
                            <input id="home" name="page" type="radio" checked="" />
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 21 20"
                                    height="20"
                                    width="21"
                                    class="icon home"
                            >
                                <path
                                        fill="inherit"
                                        d="M18.9999 6.01002L12.4499 0.770018C11.1699 -0.249982 9.16988 -0.259982 7.89988 0.760018L1.34988 6.01002C0.409885 6.76002 -0.160115 8.26002 0.0398848 9.44002L1.29988 16.98C1.58988 18.67 3.15988 20 4.86988 20H15.4699C17.1599 20 18.7599 18.64 19.0499 16.97L20.3099 9.43002C20.4899 8.26002 19.9199 6.76002 18.9999 6.01002ZM10.9199 16C10.9199 16.41 10.5799 16.75 10.1699 16.75C9.75988 16.75 9.41988 16.41 9.41988 16V13C9.41988 12.59 9.75988 12.25 10.1699 12.25C10.5799 12.25 10.9199 12.59 10.9199 13V16Z"
                                ></path>
                            </svg>
                        </label>
                        <label title="cart" for="cart" class="label">
                            <input id="cart" name="page" type="radio" />
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="inherit"
                                    viewBox="0 0 18 20"
                                    height="20"
                                    width="18"
                                    class="icon cart"
                            >
                                <path
                                        fill="inherit"
                                        d="M16.8035 6.96427C16.1335 6.22427 15.1235 5.79427 13.7235 5.64427V4.88427C13.7235 3.51427 13.1435 2.19427 12.1235 1.27427C11.6202 0.812823 11.025 0.462927 10.3771 0.247511C9.72909 0.032095 9.04292 -0.0439787 8.3635 0.0242742C5.9735 0.254274 3.9635 2.56427 3.9635 5.06427V5.64427C2.5635 5.79427 1.5535 6.22427 0.883496 6.96427C-0.0865043 8.04427 -0.0565042 9.48427 0.0534958 10.4843L0.753496 16.0543C0.963496 18.0043 1.7535 20.0043 6.0535 20.0043H11.6335C15.9335 20.0043 16.7235 18.0043 16.9335 16.0643L17.6335 10.4743C17.7435 9.48427 17.7635 8.04427 16.8035 6.96427ZM8.5035 1.41427C8.98813 1.36559 9.47758 1.41913 9.94023 1.57143C10.4029 1.72372 10.8284 1.97138 11.1894 2.29841C11.5503 2.62544 11.8387 3.02456 12.0357 3.46998C12.2328 3.91539 12.3343 4.39721 12.3335 4.88427V5.58427H5.3535V5.06427C5.3535 3.28427 6.8235 1.57427 8.5035 1.41427ZM5.2635 11.1543H5.2535C4.7035 11.1543 4.2535 10.7043 4.2535 10.1543C4.2535 9.60427 4.7035 9.15427 5.2535 9.15427C5.8135 9.15427 6.2635 9.60427 6.2635 10.1543C6.2635 10.7043 5.8135 11.1543 5.2635 11.1543ZM12.2635 11.1543H12.2535C11.7035 11.1543 11.2535 10.7043 11.2535 10.1543C11.2535 9.60427 11.7035 9.15427 12.2535 9.15427C12.8135 9.15427 13.2635 9.60427 13.2635 10.1543C13.2635 10.7043 12.8135 11.1543 12.2635 11.1543Z"
                                ></path>
                            </svg>
                        </label>
                        <label title="favorite" for="favorite" class="label">
                            <input id="favorite" name="page" type="radio" />
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="inherit"
                                    viewBox="0 0 20 18"
                                    height="18"
                                    width="20"
                                    class="icon favorite"
                            >
                                <path
                                        fill="inherit"
                                        d="M14.44 0C12.63 0 11.01 0.88 10 2.23C9.48413 1.53881 8.81426 0.977391 8.04353 0.590295C7.27281 0.203198 6.42247 0.00108555 5.56 0C2.49 0 0 2.5 0 5.59C0 6.78 0.19 7.88 0.52 8.9C2.1 13.9 6.97 16.89 9.38 17.71C9.72 17.83 10.28 17.83 10.62 17.71C13.03 16.89 17.9 13.9 19.48 8.9C19.81 7.88 20 6.78 20 5.59C20 2.5 17.51 0 14.44 0Z"
                                ></path>
                            </svg>
                        </label>
                        <label title="notifications" for="notifications" class="label">
                            <input id="notifications" name="page" type="radio" />
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="inherit"
                                    viewBox="0 0 16 20"
                                    height="20"
                                    width="16"
                                    class="icon history"
                            >
                                <path
                                        fill="inherit"
                                        d="M15.0294 12.4902L14.0294 10.8302C13.8194 10.4602 13.6294 9.76016 13.6294 9.35016V6.82016C13.6282 5.70419 13.3111 4.61137 12.7147 3.66813C12.1183 2.72489 11.267 1.96978 10.2594 1.49016C10.0022 1.0335 9.62709 0.654303 9.17324 0.392195C8.71939 0.130087 8.20347 -0.00530784 7.6794 0.000159243C6.5894 0.000159243 5.6094 0.590159 5.0894 1.52016C3.1394 2.49016 1.7894 4.50016 1.7894 6.82016V9.35016C1.7894 9.76016 1.5994 10.4602 1.3894 10.8202L0.379396 12.4902C-0.0206039 13.1602 -0.110604 13.9002 0.139396 14.5802C0.379396 15.2502 0.949396 15.7702 1.6894 16.0202C3.6294 16.6802 5.6694 17.0002 7.7094 17.0002C9.7494 17.0002 11.7894 16.6802 13.7294 16.0302C14.4294 15.8002 14.9694 15.2702 15.2294 14.5802C15.4894 13.8902 15.4194 13.1302 15.0294 12.4902ZM10.5194 18.0102C10.3091 18.5923 9.92467 19.0956 9.41835 19.4516C8.91203 19.8077 8.30837 19.9992 7.6894 20.0002C6.8994 20.0002 6.1194 19.6802 5.5694 19.1102C5.2494 18.8102 5.0094 18.4102 4.8694 18.0002C4.9994 18.0202 5.1294 18.0302 5.2694 18.0502C5.4994 18.0802 5.7394 18.1102 5.9794 18.1302C6.5494 18.1802 7.1294 18.2102 7.7094 18.2102C8.2794 18.2102 8.8494 18.1802 9.4094 18.1302C9.6194 18.1102 9.8294 18.1002 10.0294 18.0702L10.5194 18.0102Z"
                                ></path>
                            </svg>
                        </label>
                    </section>





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



                    <div class="ninth_radio-input">
                        <input value="value-1" name="value-radio" id="value-1" type="radio" />
                        <label for="value-1">
                            <div class="ninth_text">
                                <span class="circle"></span>
                                Monthly
                            </div>
                            <div class="price">
                                <span>$30/mo</span>
                                <span class="small">$30 billed every month</span>
                            </div> </label
                        ><input value="value-2" name="value-radio" id="value-2" type="radio" />
                        <label for="value-2">
                            <div class="ninth_text">
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


                    <div class="accordion">
                        <div class="accordion-item">
                            <input type="radio" id="section1" name="accordion" />
                            <label for="section1" class="accordion-header">
                                <label class="accordion-title">Section 1</label>
                                <div class="accordion-icon">
                                    <svg
                                            viewBox="0 0 16 16"
                                            fill="none"
                                            height="16"
                                            width="16"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M4.293 5.293a1 1 0 0 1 1.414 0L8 7.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z"
                                                fill="currentColor"
                                        ></path>
                                    </svg>
                                </div>
                            </label>
                            <div class="content">
                                <p>This is the content for Section 1.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <input checked="" type="radio" id="section2" name="accordion" />
                            <label for="section2" class="accordion-header">
                                <label class="accordion-title">Section 2</label>
                                <div class="accordion-icon">
                                    <svg
                                            viewBox="0 0 16 16"
                                            fill="none"
                                            height="16"
                                            width="16"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M4.293 5.293a1 1 0 0 1 1.414 0L8 7.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z"
                                                fill="currentColor"
                                        ></path>
                                    </svg>
                                </div>
                            </label>
                            <div class="content">
                                <p>This is the content for Section 2.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <input type="radio" id="section3" name="accordion" />
                            <label for="section3" class="accordion-header">
                                <label class="accordion-title">Section 3</label>
                                <div class="accordion-icon">
                                    <svg
                                            viewBox="0 0 16 16"
                                            fill="none"
                                            height="16"
                                            width="16"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M4.293 5.293a1 1 0 0 1 1.414 0L8 7.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z"
                                                fill="currentColor"
                                        ></path>
                                    </svg>
                                </div>
                            </label>
                            <div class="content">
                                <p>This is the content for Section 3.</p>
                            </div>
                        </div>
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


                    <div class="radio-input11">
                        <div class="info11">
                            <span class="question">What does CSS stand for?</span>
                            <span class="steps">3/10</span>
                        </div>
                        <input type="radio" id="value-11" name="value-radio" value="value-1">
                        <label for="value-11">Computer Style Sheets</label>
                        <input type="radio" id="value-21" name="value-radio" value="value-2">
                        <label for="value-21">Cascading Style Sheets</label>
                        <input type="radio" id="value-31" name="value-radio" value="value-3">
                        <label for="value-31">Creative Style Sheets</label>
                        <span class="result success">Congratulations!</span>
                        <span class="result error">Bad answer</span>
                    </div>





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


                    <div class="article-feedback-container">
                        <div class="article-feedback-heading">PixelSyntax is helpful?</div>
                        <div class="article-feedback-heading" style="font-size: 10px">Hint : The answer is always yes</div>
                        <div class="article-feedback-wrapper">
                            <input class="input" id="yes" value="yes" name="article" type="radio" />
                            <label class="article-feedback" for="yes"> Yes </label>
                            <input class="input" id="no" value="no" name="article" type="radio" />
                            <label class="article-feedback" for="no"> No </label>
                        </div>
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


                    <div class="radio-inputs13">
                        <label class="radio13">
                            <input type="radio" name="radio" checked="" />
                            <span class="name13">
      <span class="pre-name"></span>
      <span class="pos-name"></span>
      <span> Tabs </span>
    </span>
                            <div class="content13">
                                <div>
                                    <div>Content</div>
                                </div>
                            </div>
                        </label>
                        <label class="radio13">
                            <input type="radio" name="radio" />
                            <span class="name13">
      <span class="pre-name"></span>
      <span class="pos-name"></span>
      <span> And </span>
    </span>
                            <div class="content13">
                                <div>
                                    <div>And content</div>
                                </div>
                            </div>
                        </label>

                        <label class="radio13">
                            <input type="radio" name="radio" />
                            <span class="name13">
      <span class="pre-name"></span>
      <span class="pos-name"></span>
      <span> More </span>
    </span>
                            <div class="content13">
                                <div>
                                    <div>More content</div>
                                </div>
                            </div>
                        </label>

                        <label class="radio13">
                            <input type="radio" name="radio" />
                            <span class="name13">
      <span class="pre-name"></span>
      <span class="pos-name"></span>
      <span> Tabs </span>
    </span>
                            <div class="content13">
                                <div>
                                    <div>And Even More content</div>
                                </div>
                            </div>
                        </label>
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


                    <div class="feedback">
                        <label class="angry">
                            <input name="feedback" value="1" type="radio" />
                            <div>
                                <svg class="eye left"></svg>
                                <svg class="eye right"></svg>
                                <svg class="mouth"></svg>
                            </div>
                        </label>
                        <label class="sad">
                            <input name="feedback" value="2" type="radio" />
                            <div>
                                <svg class="eye left"></svg>
                                <svg class="eye right"></svg>
                                <svg class="mouth"></svg>
                            </div>
                        </label>
                        <label class="ok">
                            <input name="feedback" value="3" type="radio" />
                            <div></div>
                        </label>
                        <label class="good">
                            <input checked="" name="feedback" value="4" type="radio" />
                            <div>
                                <svg class="eye left"></svg>
                                <svg class="eye right"></svg>
                                <svg class="mouth"></svg>
                            </div>
                        </label>
                        <label class="happy">
                            <input name="feedback" value="5" type="radio" />
                            <div>
                                <svg class="eye left"></svg>
                                <svg class="eye right"></svg>
                            </div>
                        </label>
                    </div>

                    <svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
                        <symbol id="eye" viewBox="0 0 7 4" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1"
                            ></path>
                        </symbol>
                        <symbol id="mouth" viewBox="0 0 18 7" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"
                            ></path>
                        </symbol>
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



                    <div class="fan-speed-knob">
                        <div class="wrapper">
                            <div class="knob-outer">
                                <div class="knob-base">
                                    <hr class="divider" />
                                    <hr class="divider" />
                                    <hr class="divider" />
                                    <div class="control">
                                        <label for="fan_off"><span class="off">OFF</span></label>
                                        <label for="fan_1"><span>1</span></label>
                                        <label for="fan_2"><span>2</span></label>
                                        <label for="fan_3"><span>3</span></label>
                                        <label for="fan_4"><span>4</span></label>
                                        <label for="fan_5"><span>5</span></label>
                                        <input id="fan_off" name="fan" checked="" type="radio" />
                                        <input id="fan_1" name="fan" type="radio" />
                                        <input id="fan_2" name="fan" type="radio" />
                                        <input id="fan_3" name="fan" type="radio" />
                                        <input id="fan_4" name="fan" type="radio" />
                                        <input id="fan_5" name="fan" type="radio" />
                                        <div class="pointer"><span></span></div>
                                        <div class="marker"><span></span></div>
                                        <div class="knob-middle">
                                            <div class="knob-inner">
                                                <div class="knob-core">
                                                    <div class="status">
                                                        <div class="off-light"></div>
                                                        <div class="speed-lights">
                                                            <span class="speed-light"></span>
                                                            <span class="speed-light"></span>
                                                            <span class="speed-light"></span>
                                                            <span class="speed-light"></span>
                                                            <span class="speed-light"></span>
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



                    <div class="radio-input16">
                        <div class="center"></div>
                        <label class="label16 spring">
                            <input type="radio" id="value-111" name="value-radio" value="value-1" />
                            <span class="text spring">Spring</span>
                        </label>
                        <label class="label16 summer">
                            <input type="radio" id="value-222" name="value-radio" value="value-2" />
                            <span class="text summer">Summer</span>
                        </label>
                        <label class="label16 autumn">
                            <input type="radio" id="value-333" name="value-radio" value="value-3" />
                            <span class="text autumn">Autumn</span>
                        </label>
                        <label class="label16 winter">
                            <input type="radio" id="value-444" name="value-radio" value="value-4" />
                            <span class="text winter">Winter</span>
                        </label>
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



                    <div class="radio17">
                        <input
                                label="Yes"
                                type="radio"
                                id="male"
                                name="gender"
                                value="male"
                                checked=""
                        />
                        <input label="No" type="radio" id="female" name="gender" value="female" />
                        <input
                                label="I hate making decisions 🤷🏻‍♂️"
                                type="radio"
                                id="other"
                                name="gender"
                                value="other"
                        />
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



                    <div class="container17">
                        <div class="radio-wrapper">
                            <input type="radio" id="value-1111" name="btn" class="input17">
                            <div class="btn">
                                <span aria-hidden="">_</span>Cyber
                                <span aria-hidden="" class="btn__glitch">_Cyber🦾</span>
                                <label class="number">r1</label>
                            </div>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" checked="true" id="value-2222" name="btn" class="input17">
                            <div class="btn">
                                _Radio<span aria-hidden="">_</span>
                                <span aria-hidden="" class="btn__glitch">_R_a_d_i_o_</span>
                                <label class="number">r2</label>
                            </div>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" id="value-3" name="btn" class="input17">
                            <div class="btn">
                                Buttons<span aria-hidden=""></span>
                                <span aria-hidden="" class="btn__glitch">Buttons_</span>
                                <label class="number">r3</label>
                            </div>
                        </div>
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



                    <label id="topleft" class="container19">
                        <input name="my-radio-button" type="radio">
                        <label id="tl" style="font-size: 15px ; font-weight: bold " >Ayham</label>
                        <div class="selected"></div>
                    </label>
                    &nbsp;
                    <label id="topright" class="container19">
                        <input name="my-radio-button" type="radio">
                        <label id="tr" style="font-size: 15px ; font-weight: bold ">Baarah</label>
                        <div class="selected"></div>
                    </label>
                    <br>
                    <br>
                    <label id="bottomleft" class="container19">
                        <input name="my-radio-button" type="radio">
                        <label id="bl" style="font-size: 15px ; font-weight: bold ">Ayham</label>
                        <div class="selected"></div>
                    </label>
                    &nbsp;
                    <label id="bottomright" class="container19">
                        <input name="my-radio-button" type="radio">
                        <label id="br" style="font-size: 15px ; font-weight: bold ">Thiab</label>
                        <div class="selected"></div>
                    </label>






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


                    <div class="radio-input20">
                        <input checked="" value="color-1" name="color" id="color-1" type="radio">
                        <label for="color-1">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M6 12L10.2426 16.2426L18.727 7.75732" id="Vector"></path> </g> </g></svg>
      </span>
                        </label>

                        <input value="color-2" name="color" id="color-2" type="radio">
                        <label for="color-2">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M6 12L10.2426 16.2426L18.727 7.75732" id="Vector"></path> </g> </g></svg>
      </span>
                        </label>

                        <input value="color-3" name="color" id="color-3" type="radio">
                        <label for="color-3">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Check"> <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M6 12L10.2426 16.2426L18.727 7.75732" id="Vector"></path> </g> </g></svg>
      </span>
                        </label>

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
