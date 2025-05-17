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
    <link rel="stylesheet" href="../css/inputs.css">
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
                <a href="inputs.php" class="sidebar-btn" style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Inputs</a>
                <a href="radio.php" class="sidebar-btn">Radio Buttons</a>


            </span>
</header>



<body>
<div class="b_head">
    <h1 class="b_headtext">Input's </h1>
    <h2 class="b_b_headtext">Open-Source Input's made with HTML and CSS </h2>
</div>

<div class="body_2">
    <button class="copy_2">Back</button>
</div>
<div class="body_1">
    <div class="main">

        <div class="section" >

            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by 0xnihilism -->
                    <div class="brutalist-container">
                        <input
                                placeholder="TYPE HERE"
                                class="brutalist-input smooth-type"
                                type="text"
                        />
                        <label class="brutalist-label">SMOOTH BRUTALIST</label>
                    </div>




                </div>
                <div class="card">


                    <button class="copy_1">Next</button>


                </div>




            </article>

            <article class="square">
                <div class="button_me"><!-- From Uiverse.io by FColombati -->
                    <div class="rangeWrapper">
                        <input value="7" max="20" min="1" class="kawaii" type="range" />
                        <input
                                style="--base: #8cc8e4;"
                                value="4"
                                max="20"
                                min="1"
                                class="kawaii"
                                type="range"
                        />
                        <input
                                style="--base: #6cc484;"
                                value="12"
                                max="20"
                                min="1"
                                class="kawaii"
                                type="range"
                        />
                    </div>
                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>




            </article>




            <article class="square">

                <div class="button_me"><!-- From Uiverse.io by Lakshay-art -->
                    <div class="grid"></div>
                    <div id="poda">
                        <div class="glow"></div>
                        <div class="darkBorderBg"></div>
                        <div class="darkBorderBg"></div>
                        <div class="darkBorderBg"></div>

                        <div class="white"></div>

                        <div class="border"></div>

                        <div id="main">
                            <input placeholder="Search..." type="text" name="text" class="input" />
                            <div id="input-mask"></div>
                            <div id="pink-mask"></div>
                            <div class="filterBorder"></div>
                            <div id="filter-icon">
                                <svg
                                        preserveAspectRatio="none"
                                        height="27"
                                        width="27"
                                        viewBox="4.8 4.56 14.832 15.408"
                                        fill="none"
                                >
                                    <path
                                            d="M8.16 6.65002H15.83C16.47 6.65002 16.99 7.17002 16.99 7.81002V9.09002C16.99 9.56002 16.7 10.14 16.41 10.43L13.91 12.64C13.56 12.93 13.33 13.51 13.33 13.98V16.48C13.33 16.83 13.1 17.29 12.81 17.47L12 17.98C11.24 18.45 10.2 17.92 10.2 16.99V13.91C10.2 13.5 9.97 12.98 9.73 12.69L7.52 10.36C7.23 10.08 7 9.55002 7 9.20002V7.87002C7 7.17002 7.52 6.65002 8.16 6.65002Z"
                                            stroke="#d6d6e6"
                                            stroke-width="1"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </div>
                            <div id="search-icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke-linejoin="round"
                                        stroke-linecap="round"
                                        height="24"
                                        fill="none"
                                        class="feather feather-search"
                                >
                                    <circle stroke="url(#search)" r="8" cy="11" cx="11"></circle>
                                    <line
                                            stroke="url(#searchl)"
                                            y2="16.65"
                                            y1="22"
                                            x2="16.65"
                                            x1="22"
                                    ></line>
                                    <defs>
                                        <linearGradient gradientTransform="rotate(50)" id="search">
                                            <stop stop-color="#f8e7f8" offset="0%"></stop>
                                            <stop stop-color="#b6a9b7" offset="50%"></stop>
                                        </linearGradient>
                                        <linearGradient id="searchl">
                                            <stop stop-color="#b6a9b7" offset="0%"></stop>
                                            <stop stop-color="#837484" offset="50%"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
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


                    <!-- From Uiverse.io by OmarN6 -->
                    <form action="" class="container">
                        <div class="input-container">
                            <div class="input-content">
                                <div class="input-dist">
                                    <span id="SubscribeTXT">Subscription</span>
                                    <div class="input-type">
                                        <input placeholder="Email" required="" type="text" class="input-is">
                                        <input placeholder="Password" required="" type="password" class="input-is">
                                    </div>
                                    <button>Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>
            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by Novaxlo -->
                    <div class="futuristic-input">
                        <div class="futuristic-input-space">
                            <div class="futuristic-input-space-2"></div>
                            <div class="triangle-input-up"></div>
                            <div class="triangle-input-bar2"></div>
                            <div class="triangle-input-left"></div>
                            <div class="futuristic-input-space-2"></div>
                            <div class="triangle-input-right2"></div>
                            <div class="triangle-input-bar3"></div>
                        </div>
                        <div class="futuristic-input-space">
                            <div class="triangle-input-up"></div>
                            <div class="triangle-input-bar"></div>
                        </div>
                        <div class="futuristic-input-space">
                            <div class="triangle-input-bar"></div>
                            <input type="text" name="text" class="input2" />
                            <p class="futuristic-input-enter">ENTER</p>
                            <p class="futuristic-input-name">NAME</p>
                        </div>
                        <div class="futuristic-input-space">
                            <div class="triangle-input-bar"></div>
                        </div>
                        <div class="futuristic-input-space">
                            <div class="triangle-input-bar"></div>
                            <div class="triangle-input-down"></div>
                        </div>
                        <div class="futuristic-input-space2">
                            <div class="triangle-input-bar3"></div>
                            <div class="triangle-input-left2"></div>
                            <div class="futuristic-input-space-2"></div>
                            <div class="triangle-input-right"></div>
                            <div class="triangle-input-bar2"></div>
                            <div class="triangle-input-down"></div>
                            <div class="futuristic-input-space-2"></div>
                        </div>
                    </div>





                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>
            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by Novaxlo -->
                    <div class="input-add-friend">
                        <div class="input-add-friend-title"><p>Add a friend</p></div>
                        <div class="input-add-friend-input">
                            <input
                                    name="text"
                                    placeholder="000000"
                                    class="input"
                                    minlength="6"
                                    maxlength="6"
                                    required=""
                            />
                            <p class="input-add-friend-text">-----</p>
                            <div class="input-add-friend-input-behind"></div>
                            <input
                                    type="checkbox"
                                    id="input-add-friend-checkbox"
                                    class="input-add-friend-checkbox"
                                    hidden=""
                            />
                            <label class="button" for="input-add-friend-checkbox"
                            ><p>Check Code</p></label
                            >
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="35"
                                    height="35"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#a974ff"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                            >
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </div>
                    </div>





                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>
            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by Ma7moud344 -->
                    <div class="container7">
                        <div class="folder">
                            <div class="top"></div>
                            <div class="bottom"></div>
                        </div>
                        <label class="custom-file-upload">
                            <input class="title" type="file" />
                            Choose a file
                        </label>
                    </div>





                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>




            </article>
            <article class="square">

                <div class="button_me">



                    <!-- From Uiverse.io by 0xnihilism -->
                    <div class="input-wrapper">
                        <input class="input" name="text" placeholder="Type here..." type="text" />
                    </div>







                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>

            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by absoluteSTrange -->
                    <input class="inp" placeholder="Search The Matrix">



                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>







            </article>
            <article class="square">

                <div class="button_me">

                    <!-- From Uiverse.io by hexday -->
                    <div class="aacard">
                        <div class="terminal">
                            <div class="terminal-header">
      <span class="terminal-title">
        <svg
                class="terminal-icon"
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        >
          <path d="M4 17l6-6-6-6M12 19h8"></path>
        </svg>
        Terminal
      </span>
                            </div>
                            <div class="terminal-body">
                                <div class="command-line">
                                    <span class="prompt">password:</span>
                                    <div class="input-wrapper">
                                        <input
                                                type="password"
                                                class="input-field"
                                                placeholder="Enter password"
                                        />
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


                    <!-- From Uiverse.io by kamehame-ha -->
                    <div class="input-container11">
                        <p class="bash-text">
                            <span class="user">user</span><span class="vm">@ui-verse</span>:<span class="char">~</span>$
                        </p>
                        <input class="input" placeholder="sudo rm -rf css/" type="text">
                    </div>




                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>
            </article>
            <article class="square">




                <div class="button_me">


                    <!-- From Uiverse.io by Li-Deheng -->
                    <div class="info-panels">
                        <div class="input-color-group-one">
                            <input class="input-color" autocomplete="on" name="text" type="text" required="" placeholder="255, 255, 255, 0.5">
                            <label class="color-label">RGBA</label>
                            <button class="btn-copy">
                                <svg class="svgs" id="icon-btn-copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.98,13.96h-4.74c-.13,0-.24-.11-.24-.24V7.07c0-.13,.11-.24,.24-.24h4.74c.13,0,.24,.11,.24,.24v6.64c0,.13-.11,.24-.24,.24Zm-6.77-7.72V14.55c0,.66,.53,1.19,1.19,1.19h6.41c.66,0,1.19-.53,1.19-1.19V6.24c0-.66-.53-1.19-1.19-1.19h-6.41c-.66,0-1.19,.53-1.19,1.19Z"></path><path d="M15.68,18.95H7.19c-.66,0-1.19-.53-1.19-1.19V7.37c0-.49,.4-.89,.89-.89s.89,.4,.89,.89v9.57c0,.13,.1,.23,.23,.23h7.67c.49,0,.89,.4,.89,.89s-.4,.89-.89,.89Z"></path></svg>
                            </button>
                        </div>
                    </div>



                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>
            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by Galahhad -->
                    <div class="ui-wrapper11">
                        <input checked="" id="Palestine" name="flag" type="radio">
                        <input id="Belgium" name="flag" type="radio">
                        <input id="Bulgaria" name="flag" type="radio">
                        <input id="Croatia" name="flag" type="radio">
                        <input id="Cyprus" name="flag" type="radio">
                        <input id="Czech" name="flag" type="radio">
                        <input id="Denmark" name="flag" type="radio">
                        <input id="Estonia" name="flag" type="radio">
                        <input id="Finland" name="flag" type="radio">
                        <input id="France" name="flag" type="radio">
                        <input id="Germany" name="flag" type="radio">
                        <input id="Greece" name="flag" type="radio">
                        <input id="Hungary" name="flag" type="radio">
                        <input id="Iceland" name="flag" type="radio">
                        <input id="Ireland" name="flag" type="radio">
                        <input id="Italy" name="flag" type="radio">
                        <input id="Latvia" name="flag" type="radio">
                        <input id="Liechtenstein" name="flag" type="radio">
                        <input id="Lithuania" name="flag" type="radio">
                        <input id="Luxembourg" name="flag" type="radio">
                        <input id="Malta" name="flag" type="radio">
                        <input id="Netherlands" name="flag" type="radio">
                        <input id="Norway" name="flag" type="radio">
                        <input id="Poland" name="flag" type="radio">
                        <input id="Portugal" name="flag" type="radio">
                        <input id="Romania" name="flag" type="radio">
                        <input id="Slovakia" name="flag" type="radio">
                        <input id="Slovenia" name="flag" type="radio">
                        <input id="Spain" name="flag" type="radio">
                        <input id="Sweden" name="flag" type="radio">
                        <input class="dropdown-checkbox" name="dropdown" id="dropdown" type="checkbox">
                        <label class="dropdown-container" for="dropdown"></label>
                        <div class="input-wrapper">
                            <legend>
                                <label for="phonenumber">
                                    Phonenumber*
                                </label>
                            </legend>
                            <div class="textfield11">
                                <input pattern="\d+" maxlength="11" id="phonenumber" type="text">
                                <span class="invalid-msg">This is not a valid phone number</span>
                            </div>
                        </div>
                        <div class="select-wrapper11">
                            <ul>
                                <li class="Palestine"><label for="Palestine"><span>PS</span>Palestine (+972)</label></li>
                                <li class="Belgium"><label for="Belgium"><span>🇧🇪</span>Belgium (+32)</label></li>
                                <li class="Bulgaria"><label for="Bulgaria"><span>🇧🇬</span>Bulgaria (+359)</label></li>
                                <li class="Croatia"><label for="Croatia"><span>🇭🇷</span>Croatia (+385)</label></li>
                                <li class="Cyprus"><label for="Cyprus"><span>🇨🇾</span>Cyprus (+357)</label></li>
                                <li class="Czech"><label for="Czech"><span>🇨🇿</span>Czech Republic (+420)</label></li>
                                <li class="Denmark"><label for="Denmark"><span>🇩🇰</span>Denmark (+45)</label></li>
                                <li class="Estonia"><label for="Estonia"><span>🇪🇪</span>Estonia (+372)</label></li>
                                <li class="Finland"><label for="Finland"><span>🇫🇮</span>Finland (+358)</label></li>
                                <li class="France"><label for="France"><span>🇫🇷</span>France (+33)</label></li>
                                <li class="Germany"><label for="Germany"><span>🇩🇪</span>Germany (+49)</label></li>
                                <li class="Greece"><label for="Greece"><span>🇬🇷</span>Greece (+30)</label></li>
                                <li class="Hungary"><label for="Hungary"><span>🇭🇺</span>Hungary (+36)</label></li>
                                <li class="Iceland"><label for="Iceland"><span>🇮🇸</span>Iceland (+354)</label></li>
                                <li class="Ireland"><label for="Ireland"><span>🇮🇪</span>Republic of Ireland (+353)</label></li>
                                <li class="Italy"><label for="Italy"><span>🇮🇹</span>Italy (+39)</label></li>
                                <li class="Latvia"><label for="Latvia"><span>🇱🇻</span>Latvia (+371)</label></li>
                                <li class="Liechtenstein"><label for="Liechtenstein"><span>🇱🇮</span>Liechtenstein (+423)</label></li>
                                <li class="Lithuania"><label for="Lithuania"><span>🇱🇹</span>Lithuania (+370)</label></li>
                                <li class="Luxembourg"><label for="Luxembourg"><span>🇱🇺</span>Luxembourg (+352)</label></li>
                                <li class="Malta"><label for="Malta"><span>🇲🇹</span>Malta (+356)</label></li>
                                <li class="Netherlands"><label for="Netherlands"><span>🇳🇱</span>Netherlands (+31)</label></li>
                                <li class="Norway"><label for="Norway"><span>🇳🇴</span>Norway (+47)</label></li>
                                <li class="Poland"><label for="Poland"><span>🇵🇱</span>Poland (+48)</label></li>
                                <li class="Portugal"><label for="Portugal"><span>🇵🇹</span>Portugal (+351)</label></li>
                                <li class="Romania"><label for="Romania"><span>🇷🇴</span>Romania (+40)</label></li>
                                <li class="Slovakia"><label for="Slovakia"><span>🇸🇰</span>Slovakia (+421)</label></li>
                                <li class="Slovenia"><label for="Slovenia"><span>🇸🇮</span>Slovenia (+386)</label></li>
                                <li class="Spain"><label for="Spain"><span>🇪🇸</span>Spain (+34)</label></li>
                                <li class="Sweden"><label for="Sweden"><span>🇸🇪</span>Sweden (+46)</label></li>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>


            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by abdullah-sameh -->
                    <div class="input-container14">
                        <input id="input14" name="text" type="text">
                        <label class="label14" for="input14">Enter Your Name</label>
                        <div class="topline"></div>
                        <div class="underline"></div>
                    </div>


                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>


            </article>



            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by zymantas-katinas -->
                    <button class="button15">
                        <span class="shadow"></span>
                        <span class="edge"></span>
                        <div class="front">
                            <span>Start Session</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" class="arrow">
                                <path
                                        clip-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        fill-rule="evenodd"
                                ></path>
                            </svg>
                        </div>
                    </button>




                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>

            </article>
            <article class="square">
                <div class="button_me">

                    <!-- From Uiverse.io by Codewithvinay -->
                    <input type="text" autocomplete="off" placeholder="Type your text" name="text" class="input16">


                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>




            </article>
            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by EddyBel -->
                    <div class="input__container17">
                        <label class="input__label17">Username</label>
                        <input placeholder="Enter your username" class="input17" name="text" type="text">
                        <p class="input__description">What do you want to call yourself?</p>
                    </div>



                </div>
                <div class="card">
                    <button class="copy_1">Next</button>
                </div>
            </article>
            <article class="square">
                <div class="button_me">

                    <!-- From Uiverse.io by reglobby -->
                    <div class="input-container18">
                        <div class="input-field-container">
                            <input type="text" class="holo-input" placeholder="John" />
                            <div class="input-border"></div>
                            <div class="holo-scan-line"></div>
                            <div class="input-glow"></div>
                            <div class="input-active-indicator"></div>
                            <div class="input-label">First name</div>

                            <div class="input-data-visualization">
                                <div class="data-segment" style="--index: 1;"></div>
                                <div class="data-segment" style="--index: 2;"></div>
                                <div class="data-segment" style="--index: 3;"></div>
                                <div class="data-segment" style="--index: 4;"></div>
                                <div class="data-segment" style="--index: 5;"></div>
                                <div class="data-segment" style="--index: 6;"></div>
                                <div class="data-segment" style="--index: 7;"></div>
                                <div class="data-segment" style="--index: 8;"></div>
                                <div class="data-segment" style="--index: 9;"></div>
                                <div class="data-segment" style="--index: 10;"></div>
                                <div class="data-segment" style="--index: 11;"></div>
                                <div class="data-segment" style="--index: 12;"></div>
                                <div class="data-segment" style="--index: 13;"></div>
                                <div class="data-segment" style="--index: 14;"></div>
                                <div class="data-segment" style="--index: 15;"></div>
                                <div class="data-segment" style="--index: 16;"></div>
                                <div class="data-segment" style="--index: 17;"></div>
                                <div class="data-segment" style="--index: 18;"></div>
                                <div class="data-segment" style="--index: 19;"></div>
                                <div class="data-segment" style="--index: 20;"></div>
                            </div>

                            <div class="input-particles">
                                <div
                                        class="input-particle"
                                        style="--index: 1; top: 20%; left: 10%;"
                                ></div>
                                <div
                                        class="input-particle"
                                        style="--index: 2; top: 65%; left: 25%;"
                                ></div>
                                <div
                                        class="input-particle"
                                        style="--index: 3; top: 40%; left: 40%;"
                                ></div>
                                <div
                                        class="input-particle"
                                        style="--index: 4; top: 75%; left: 60%;"
                                ></div>
                                <div
                                        class="input-particle"
                                        style="--index: 5; top: 30%; left: 75%;"
                                ></div>
                                <div
                                        class="input-particle"
                                        style="--index: 6; top: 60%; left: 90%;"
                                ></div>
                            </div>

                            <div class="input-holo-overlay"></div>

                            <div class="interface-lines">
                                <div class="interface-line"></div>
                                <div class="interface-line"></div>
                                <div class="interface-line"></div>
                                <div class="interface-line"></div>
                            </div>

                            <div class="hex-decoration"></div>
                            <div class="input-status">Ready for input</div>
                            <div class="power-indicator"></div>

                            <div class="input-decoration">
                                <div class="decoration-dot"></div>
                                <div class="decoration-line"></div>
                                <div class="decoration-dot"></div>
                                <div class="decoration-line"></div>
                                <div class="decoration-dot"></div>
                                <div class="decoration-line"></div>
                                <div class="decoration-dot"></div>
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


                    <!-- From Uiverse.io by 0xnihilism -->
                    <div class="input-container19">
                        <input
                                class="input19"
                                name="text"
                                type="text"
                                placeholder="Search the internet..."
                        />
                    </div>




                </div>
                <div class="card">

                    <button class="copy_1">Next</button>
                </div>
            </article>



            <article class="square">
                <div class="button_me">


                    <!-- From Uiverse.io by EddyBel -->
                    <div class="input__container20">
                        <div class="shadow__input"></div>
                        <button class="input__button__shadow">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20px" width="20px">
                                <path d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z" fill-rule="evenodd" fill="#17202A"></path>
                            </svg>
                        </button>
                        <input type="text" name="text" class="input__search" placeholder="What do you want to search?">
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
