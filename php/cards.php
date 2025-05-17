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
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="../css/unifid.css">
  <link rel="stylesheet" href="../css/buttons.css">
  <link rel="stylesheet" href="../css/cards.css">
</head>

<header class="header">

  <span style="font-size: 44px" class="project-name">PixelSyntax</span>

  <span class="left-slider">
                <a href="homepage.php" class="sidebar-btn" >Home</a>
                <a href="buttons.php" class="sidebar-btn">Buttons</a>
                <a href="checkboxes.php" class="sidebar-btn" >CheckBoxes</a>
                <a href="togleswitches.php" class="sidebar-btn" >Toggle Switches</a>
                <a href="cards.php" class="sidebar-btn" style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Cards</a>
                <a href="Loaders.php" class="sidebar-btn">Loaders</a>
                <a href="inputs.php" class="sidebar-btn">Inputs</a>
                <a href="radio.php" class="sidebar-btn">Radio Buttons</a>


            </span>
</header>



<body>
<div class="b_head">
  <h1 class="b_headtext">Card's </h1>
  <h2 class="b_b_headtext">Open-Source Card's made with HTML and CSS </h2>
</div>

<div class="body_2">
  <button class="copy_2">Back</button>
</div>
<div class="body_1">
  <div class="main">

    <div class="section" >

      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by Praashoo7 -->
          <div class="main_1">
            <!-- From Uiverse.io by Yaya12085 -->
            <div class="code-editor">
              <div class="first_header">
                <span class="first_title">CSS</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path stroke-linecap="round" stroke-width="2" stroke="#4C4F5A" d="M6 6L18 18"></path> <path stroke-linecap="round" stroke-width="2" stroke="#4C4F5A" d="M18 6L6 18"></path> </g></svg>
              </div>
              <div class="editor-content">
                <code class="code">
                  <p><span class="color-0">.code-editor </span> <span>{</span></p>

                  <p class="property">
                    <span class="color-2">max-width</span><span>:</span>
                    <span class="color-1">300px</span>;
                  </p>
                  <p class="property">
                    <span class="color-2">background-color</span><span>:</span>
                    <span class="color-preview-1"></span><span class="">#1d1e22</span>;
                  </p>
                  <p class="property">
                    <span class="color-2"> box-shadow</span><span>:</span>
                    <span class="color-1">0px 4px 30px  <span class="color-preview-2"></span><span class="color-3">rgba(</span>0, 0, 0, 0.5<span class="color-3">)</span></span>;
                  </p>
                  <p class="property">
                    <span class="color-2">border-radius</span><span>:</span>
                    <span class="color-1">8px</span>;
                  </p>
                  <span>}</span>
                </code>
              </div>
            </div>
          </div>
        </div>
        <div class="card">


          <button class="copy_1">Next</button>


        </div>
      </article>

      <article class="square">
        <div class="button_me">

          <!-- From Uiverse.io by suleymanlaarabidev -->
          <div class="second_card">
            <div class="first-content">
              <span>First</span>
            </div>
            <div class="second-content">
              <span>Second</span>
            </div>


          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>




      </article>




      <article class="square">

        <div class="button_me">
          <!-- From Uiverse.io by Spacious74 -->
          <div class="container">
            <div class="card1"></div>
            <div class="card2"></div>
            <div class="card3">
              * Card stacks are awesome and inspired by real card stack at your table.
            </div>
          </div>

        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>




      </article>
      <article class="square">
        <div class="button_me">

          <!-- From Uiverse.io by gharsh11032000 -->
          <!-- From Uiverse.io by AyuuLima -->
          <div class="forth_card">
            <p class="heading">Popular this month</p>
            <p>Powered By</p>
            <p>Uiverse</p>
          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>
      </article>
      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by G4b413l -->
          <div class="fifth_card">
            <div class="image"><span class="text">This is a chair.</span></div>
            <span class="title">Cool Chair</span>
            <span class="price">$100</span>
          </div>

        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>
      </article>
      <article class="square">
        <div class="button_me">


          <!-- From Uiverse.io by vinodjangid07 -->
          <!-- From Uiverse.io by Tiagoadag -->
          <div class="sixth_card">
            <div class="sixth_card2">
            </div>
          </div>

        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>
      </article>
      <article class="square">
        <div class="button_me">

          <!-- From Uiverse.io by janisar-hyder -->
          <p class="browser-warning">
            If this looks wonky to you it's because this browser doesn't support the CSS
            property 'aspect-ratio'.
          </p>
          <div class="stack">
            <div class="seventh_card">
              <div class="seventh_image"></div>
            </div>
          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>




      </article>
      <article class="square">

        <div class="button_me">
          <!-- From Uiverse.io by Cobp -->
          <div class="container_chat_bot">
            <div class="container-chat-options">
              <div class="chat">
                <div class="chat-bot">
        <textarea
                id="chat_bot"
                name="chat_bot"
                placeholder="Imagine Something...✦˚"
        ></textarea>
                </div>
                <div class="options">
                  <div class="btns-add">
                    <button>
                      <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                      >
                        <path
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8"
                        ></path>
                      </svg>
                    </button>
                    <button>
                      <svg
                              viewBox="0 0 24 24"
                              height="20"
                              width="20"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                                d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1zm0 10a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1zm10 0a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm0-8h6m-3-3v6"
                                stroke-width="2"
                                stroke-linejoin="round"
                                stroke-linecap="round"
                                stroke="currentColor"
                                fill="none"
                        ></path>
                      </svg>
                    </button>
                    <button>
                      <svg
                              viewBox="0 0 24 24"
                              height="20"
                              width="20"
                              xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                                d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10m-2.29-2.333A17.9 17.9 0 0 1 8.027 13H4.062a8.01 8.01 0 0 0 5.648 6.667M10.03 13c.151 2.439.848 4.73 1.97 6.752A15.9 15.9 0 0 0 13.97 13zm9.908 0h-3.965a17.9 17.9 0 0 1-1.683 6.667A8.01 8.01 0 0 0 19.938 13M4.062 11h3.965A17.9 17.9 0 0 1 9.71 4.333A8.01 8.01 0 0 0 4.062 11m5.969 0h3.938A15.9 15.9 0 0 0 12 4.248A15.9 15.9 0 0 0 10.03 11m4.259-6.667A17.9 17.9 0 0 1 15.973 11h3.965a8.01 8.01 0 0 0-5.648-6.667"
                                fill="currentColor"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <button class="btn-submit">
                    <i>
                      <svg viewBox="0 0 512 512">
                        <path
                                fill="currentColor"
                                d="M473 39.05a24 24 0 0 0-25.5-5.46L47.47 185h-.08a24 24 0 0 0 1 45.16l.41.13l137.3 58.63a16 16 0 0 0 15.54-3.59L422 80a7.07 7.07 0 0 1 10 10L226.66 310.26a16 16 0 0 0-3.59 15.54l58.65 137.38c.06.2.12.38.19.57c3.2 9.27 11.3 15.81 21.09 16.25h1a24.63 24.63 0 0 0 23-15.46L478.39 64.62A24 24 0 0 0 473 39.05"
                        ></path>
                      </svg>
                    </i>
                  </button>
                </div>
              </div>
            </div>
            <div class="tags">
              <span>Create An Image</span>
              <span>Analyse Data</span>
              <span>More</span>
            </div>
          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>

      </article>
      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by Fcodingx -->
          <div class="nineth_card">
            <div class="align">
              <span class="red"></span>
              <span class="yellow"></span>
              <span class="green"></span>
            </div>

            <h1>HOVER ME</h1>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde explicabo enim rem odio assumenda?
            </p>
          </div>

        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>







      </article>
      <article class="square">

        <div class="button_me">
          <!-- From Uiverse.io by 0xnihilism -->
          <div class="tenth_card">
            <span class="card__title">Newsletter</span>
            <p class="card__content">
              Get existential crisis delivered straight to your inbox every week.
            </p>
            <form class="card__form">
              <input required="" type="email" placeholder="Your life" />
              <button class="card__button">Click me</button>
            </form>
          </div>


        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>






      </article>
      <article class="square">


        <div class="button_me">
          <!-- From Uiverse.io by joe-watson-sbf -->
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <p class="title">FLIP CARD</p>
                <p>Hover Me</p>
              </div>
              <div class="flip-card-back">
                <p class="title">BACK</p>
                <p>Leave Me</p>
              </div>
            </div>
          </div>


        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>
      </article>
      <article class="square">




        <div class="button_me">





          <!-- From Uiverse.io by 1osm -->
          <div class="twilvth_card">
            <div class="twilvth_imge">
              <div class="Usericon"></div>
              <p class="UserName"></p>
              <p class="Id"></p>
            </div>

            <div class="Description"></div>

            <div class="social-media">
              <a href="#">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg>
              </a>
              <a href="#">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                </svg>
              </a>
              <a href="#">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                </svg>
              </a>
              <a href="#">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                </svg>
              </a>
            </div>

          </div>


        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>
      </article>
      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by vaibhavchandranv -->
          <div class="theteenth_card">
            <div class="head">Window</div>
            <div class="content">
              This is a neobrutalist-style window with a button and space for any content
              you want!
              <br />
              <button class="button">Button</button>
            </div>
          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>


      </article>
      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by Smit-Prajapati -->
          <div class="fourteenth_card">
            <div class="border"></div>
            <div class="content">
              <div class="logo">
                <div class="logo1">
                  <svg viewBox="0 0 29.667 31.69" xmlns="http://www.w3.org/2000/svg" id="logo-main">
                    <path transform="translate(0 0)" d="M12.827,1.628A1.561,1.561,0,0,1,14.31,0h2.964a1.561,1.561,0,0,1,1.483,1.628v11.9a9.252,9.252,0,0,1-2.432,6.852q-2.432,2.409-6.963,2.409T2.4,20.452Q0,18.094,0,13.669V1.628A1.561,1.561,0,0,1,1.483,0h2.98A1.561,1.561,0,0,1,5.947,1.628V13.191a5.635,5.635,0,0,0,.85,3.451,3.153,3.153,0,0,0,2.632,1.094,3.032,3.032,0,0,0,2.582-1.076,5.836,5.836,0,0,0,.816-3.486Z" data-name="Path 6" id="Path_6"></path>
                    <path transform="translate(-45.91 0)" d="M75.207,20.857a1.561,1.561,0,0,1-1.483,1.628h-2.98a1.561,1.561,0,0,1-1.483-1.628V1.628A1.561,1.561,0,0,1,70.743,0h2.98a1.561,1.561,0,0,1,1.483,1.628Z" data-name="Path 7" id="Path_7"></path>
                    <path transform="translate(0 -51.963)" d="M0,80.018A1.561,1.561,0,0,1,1.483,78.39h26.7a1.561,1.561,0,0,1,1.483,1.628v2.006a1.561,1.561,0,0,1-1.483,1.628H1.483A1.561,1.561,0,0,1,0,82.025Z" data-name="Path 8" id="Path_8"></path>
                  </svg>
                </div>
                <div class="logo2">
                  <svg viewBox="0 0 101.014 23.535" xmlns="http://www.w3.org/2000/svg" id="logo-second">
                    <g transform="translate(-1029.734 -528.273)">
                      <path transform="translate(931.023 527.979)" d="M109.133,14.214l3.248-11.706A1.8,1.8,0,0,1,114.114,1.2h2.229a1.789,1.789,0,0,1,1.7,2.358L111.884,21.71a1.8,1.8,0,0,1-1.7,1.216h-3a1.8,1.8,0,0,1-1.7-1.216L99.317,3.554a1.789,1.789,0,0,1,1.7-2.358h2.229a1.8,1.8,0,0,1,1.734,1.312l3.248,11.706a.468.468,0,0,0,.9,0Z" data-name="Path 1" id="Path_1"></path>
                      <path transform="translate(888.72 528.773)" d="M173.783,22.535a10.77,10.77,0,0,1-7.831-2.933,10.387,10.387,0,0,1-3.021-7.813v-.562A13.067,13.067,0,0,1,164.2,5.372,9.315,9.315,0,0,1,167.81,1.4,10.176,10.176,0,0,1,173.136,0,9.105,9.105,0,0,1,180.2,2.812q2.576,2.812,2.577,7.973v.583a1.793,1.793,0,0,1-1.8,1.787H169.407a.466.466,0,0,0-.457.564,5.08,5.08,0,0,0,5.217,4.136A6.594,6.594,0,0,0,178.25,16.6a1.817,1.817,0,0,1,2.448.218l.557.62a1.771,1.771,0,0,1-.1,2.488,9.261,9.261,0,0,1-2.4,1.57,11.732,11.732,0,0,1-4.972,1.034ZM173.115,4.68A3.66,3.66,0,0,0,170.3,5.85,6.04,6.04,0,0,0,168.911,9.2h8.125V8.735a4.305,4.305,0,0,0-1.051-3,3.781,3.781,0,0,0-2.87-1.059Z" data-name="Path 2" id="Path_2"></path>
                      <path transform="translate(842.947 528.771)" d="M244.851,3.928a1.852,1.852,0,0,1-1.95,1.76c-.1,0-.2,0-.3,0a7.53,7.53,0,0,0-2.234.3,3.275,3.275,0,0,0-2.348,3.1V20.347a1.844,1.844,0,0,1-1.9,1.787h-2.366a1.844,1.844,0,0,1-1.9-1.787V1.751A1.391,1.391,0,0,1,233.294.4h3.043a1.4,1.4,0,0,1,1.428,1.265l.035.533a.282.282,0,0,0,.5.138A5.617,5.617,0,0,1,242.988,0h.031a1.832,1.832,0,0,1,1.864,1.813l-.032,2.114Z" data-name="Path 3" id="Path_3"></path>
                      <path transform="translate(814.555 528.773)" d="M287.2,16.127a1.869,1.869,0,0,0-1.061-1.677,12.11,12.11,0,0,0-3.406-1.095q-7.8-1.627-7.8-6.587a5.956,5.956,0,0,1,2.415-4.83A9.781,9.781,0,0,1,283.659,0a10.536,10.536,0,0,1,6.659,1.948,6.36,6.36,0,0,1,2.029,2.586,1.791,1.791,0,0,1-1.661,2.475h-2.291a1.754,1.754,0,0,1-1.624-1.137,2.7,2.7,0,0,0-.606-.922,3.435,3.435,0,0,0-2.526-.814,3.512,3.512,0,0,0-2.284.663,2.088,2.088,0,0,0-.808,1.687,1.786,1.786,0,0,0,.92,1.557,9.485,9.485,0,0,0,3.1,1.024,25.5,25.5,0,0,1,3.678.974q4.627,1.687,4.628,5.844a5.659,5.659,0,0,1-2.567,4.81,11.125,11.125,0,0,1-6.629,1.838,11.627,11.627,0,0,1-4.881-.974,8.173,8.173,0,0,1-3.345-2.671,6.843,6.843,0,0,1-.679-1.174,1.784,1.784,0,0,1,1.653-2.492h1.9a1.786,1.786,0,0,1,1.673,1.133,2.8,2.8,0,0,0,.925,1.237,4.587,4.587,0,0,0,2.87.824,4.251,4.251,0,0,0,2.536-.632,1.965,1.965,0,0,0,.859-1.657Z" data-name="Path 4" id="Path_4"></path>
                      <path transform="translate(772.607 528.773)" d="M348.648,22.535a10.77,10.77,0,0,1-7.832-2.933,10.386,10.386,0,0,1-3.021-7.813v-.562a13.067,13.067,0,0,1,1.273-5.854A9.314,9.314,0,0,1,342.676,1.4,10.174,10.174,0,0,1,348,0a9.1,9.1,0,0,1,7.063,2.812q2.576,2.812,2.577,7.973v.583a1.793,1.793,0,0,1-1.8,1.787H344.272a.467.467,0,0,0-.457.564,5.081,5.081,0,0,0,5.217,4.136,6.594,6.594,0,0,0,4.083-1.251,1.817,1.817,0,0,1,2.448.218l.557.62a1.771,1.771,0,0,1-.1,2.488,9.26,9.26,0,0,1-2.4,1.57,11.731,11.731,0,0,1-4.972,1.034ZM347.981,4.68a3.659,3.659,0,0,0-2.819,1.17A6.035,6.035,0,0,0,343.777,9.2H351.9V8.735a4.307,4.307,0,0,0-1.051-3,3.781,3.781,0,0,0-2.87-1.059Z" data-name="Path 5" id="Path_5"></path>
                    </g>
                  </svg>
                </div>
                <span class="trail"></span>
              </div>
              <span class="logo-bottom-text">PixelSyntax</span>
            </div>
            <span class="bottom-text">PixelSyntax of ui</span>
          </div></div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>


      </article>



      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by ElSombrero2 -->
          <div class="fifteenth_card">
            <div class="content">
              <div class="back">
                <div class="back-content">
                  <svg stroke="#ffffff" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="50px" width="50px" fill="#ffffff">

                    <g stroke-width="0" id="SVGRepo_bgCarrier"></g>

                    <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>

                    <g id="SVGRepo_iconCarrier">

                      <path d="M20.84375 0.03125C20.191406 0.0703125 19.652344 0.425781 19.21875 1.53125C18.988281 2.117188 18.5 3.558594 18.03125 4.9375C17.792969 5.636719 17.570313 6.273438 17.40625 6.75C17.390625 6.796875 17.414063 6.855469 17.40625 6.90625C17.398438 6.925781 17.351563 6.949219 17.34375 6.96875L17.25 7.25C18.566406 7.65625 19.539063 8.058594 19.625 8.09375C22.597656 9.21875 28.351563 11.847656 33.28125 16.78125C38.5 22 41.183594 28.265625 42.09375 30.71875C42.113281 30.761719 42.375 31.535156 42.75 32.84375C42.757813 32.839844 42.777344 32.847656 42.78125 32.84375C43.34375 32.664063 44.953125 32.09375 46.3125 31.625C47.109375 31.351563 47.808594 31.117188 48.15625 31C49.003906 30.714844 49.542969 30.292969 49.8125 29.6875C50.074219 29.109375 50.066406 28.429688 49.75 27.6875C49.605469 27.347656 49.441406 26.917969 49.25 26.4375C47.878906 23.007813 45.007813 15.882813 39.59375 10.46875C33.613281 4.484375 25.792969 1.210938 22.125 0.21875C21.648438 0.0898438 21.234375 0.0078125 20.84375 0.03125 Z M 16.46875 9.09375L0.0625 48.625C-0.09375 48.996094 -0.00390625 49.433594 0.28125 49.71875C0.472656 49.910156 0.738281 50 1 50C1.128906 50 1.253906 49.988281 1.375 49.9375L40.90625 33.59375C40.523438 32.242188 40.222656 31.449219 40.21875 31.4375C39.351563 29.089844 36.816406 23.128906 31.875 18.1875C27.035156 13.34375 21.167969 10.804688 18.875 9.9375C18.84375 9.925781 17.8125 9.5 16.46875 9.09375 Z M 17 16C19.761719 16 22 18.238281 22 21C22 23.761719 19.761719 26 17 26C15.140625 26 13.550781 24.972656 12.6875 23.46875L15.6875 16.1875C16.101563 16.074219 16.550781 16 17 16 Z M 31 22C32.65625 22 34 23.34375 34 25C34 25.917969 33.585938 26.730469 32.9375 27.28125L32.90625 27.28125C33.570313 27.996094 34 28.949219 34 30C34 32.210938 32.210938 34 30 34C27.789063 34 26 32.210938 26 30C26 28.359375 26.996094 26.960938 28.40625 26.34375L28.3125 26.3125C28.117188 25.917969 28 25.472656 28 25C28 23.34375 29.34375 22 31 22 Z M 21 32C23.210938 32 25 33.789063 25 36C25 36.855469 24.710938 37.660156 24.25 38.3125L20.3125 39.9375C18.429688 39.609375 17 37.976563 17 36C17 33.789063 18.789063 32 21 32 Z M 9 34C10.65625 34 12 35.34375 12 37C12 38.65625 10.65625 40 9 40C7.902344 40 6.960938 39.414063 6.4375 38.53125L8.25 34.09375C8.488281 34.03125 8.742188 34 9 34Z"></path>

                    </g>

                  </svg>
                  <strong>Hover Me</strong>
                </div>
              </div>
              <div class="front">

                <div class="fifteenth_img">
                  <div class="circle">
                  </div>
                  <div class="circle" id="right">
                  </div>
                  <div class="circle" id="bottom">
                  </div>
                </div>

                <div class="front-content">
                  <small class="badge">Pasta</small>
                  <div class="description">
                    <div class="title">
                      <p class="title">
                        <strong>Spaguetti Bolognese</strong>
                      </p>
                      <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                    </div>
                    <p class="card-footer">
                      30 Mins &nbsp; | &nbsp; 1 Serving
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>

      </article>
      <article class="square">
        <div class="button_me">
          <!-- From Uiverse.io by joe-watson-sbf -->
          <div class="sixteenth_card">
            <p><span>HOVER ME</span></p>
            <p><span>HOVER ME</span></p>
            <p><span>HOVER ME</span></p>
          </div>



        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>




      </article>
      <article class="square">
        <div class="button_me">

          <!-- From Uiverse.io by gharsh11032000 -->
          <div class="sventeenth_card">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
            <div class="card__content">
              <p class="card__title">Card Title
              </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>






        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>
      </article>
      <article class="square">
        <div class="button_me">


          <!-- From Uiverse.io by eslam-hany -->
          <div class="book">
            <p>Hello</p>
            <div class="cover">
              <p>Hover Me</p>
            </div>
          </div>




        </div>
        <div class="card">
          <button class="copy_1">Next</button>
        </div>

      </article>
      <article class="square">
        <div class="button_me">

          <!-- From Uiverse.io by kamehame-ha -->
          <div class="cards">
            <div class="card red">
              <p class="tip">Hover Me</p>
              <p class="second-text">Lorem Ipsum</p>
            </div>
            <div class="card blue">
              <p class="tip">Hover Me</p>
              <p class="second-text">Lorem Ipsum</p>
            </div>
            <div class="card green">
              <p class="tip">Hover Me</p>
              <p class="second-text">Lorem Ipsum</p>
            </div>
          </div>



        </div>
        <div class="card">

          <button class="copy_1">Next</button>
        </div>
      </article>



      <article class="square">
        <div class="button_me">


          <!-- From Uiverse.io by xantha01 -->
          <div class="final_card">
            <div class="details">
              <div class="cardHeader">CSS Hover Animation</div>
              <div class="cardText">
                Welcome to this card where i have made use of the "Hover" effect to add
                some really cool interactions to it. Enjoy
              </div>
              <div class="button">Learn More</div>
            </div>
          </div>





        </div>
        <div class="card">

          <button class="copy_1">Next</button>
        </div>
      </article>



    </div>

  </div>

</div>
   </body>
</html>
