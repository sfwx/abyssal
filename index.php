<!doctype html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <link rel="preload" as="image" href="https://sfwx.github.io/copyright/index.png">
    <link rel="icon" type="image/png" sizes="350x350" href="https://sfwx.github.io/copyright/index.png">
    <title>
      FwX · AbyssalLife
    </title>
    <meta name="author" content="FlowniX · Murilo de Moura S.">
    <meta name="developer" content="FlowniX · Murilo de Moura S.">
    <meta name="copyright" content="https://sfwx.github.io/copyright">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="https://sfwx.github.io/abyssal">
    <meta name="theme-color" content="#4525b8">
    <meta property="og:title" content="FwX · AbyssalLife">
    <meta property="og:description" content="✨ AbyssalLife · Navegador no fundo do mar.">
    <meta property="og:image" content="https://sfwx.github.io/copyright/index.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="preload" as="image" href="https://icon.fwxr.repl.co/default.png">
    <link rel="preload" as="style" href="https://api.fwxr.repl.co/css/br.css">
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://api.fwxr.repl.co/css/br.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
      @font-face {
        font-family: "Minecraft";
        src: url("./Minecraft.otf") format("opentype");
      }
      @font-face {
        font-family: "Minecraft";
        font-weight: bold;
        src: url("./MinecraftBold.otf") format("opentype");
      }
      /* CSS aplicado a todos os elementos */
      * {
        font-family: Minecraft;
        user-select: none;
        overflow: hidden;
        overflow-x: none;
        overflow-y: none;
        outline: none;
        cursor: none;
      }
      /* CSS do body como um total */
      body {
        font-family: "Raleway", sans-serif;
        background-color: #00001c;
      }
      /* CSS do cursor da pagina */
      span#fwxMouse {
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 0 0 10px #4525b8;
        pointer-events: none;
        position: absolute;
        text-align: center;
        border-radius: 50%;
        z-index: 9999;
        color: white;
        height: 15px;
        width: 15px;
        left: -64px;
        top: -64px;
      }
      /* CSS do pet da pagina */
      i#fwxPet {
        transition: top 0.5s ease, left 0.5s ease, transform 0.5s ease;
        filter: drop-shadow(0 0 5px #4525b8);
        transform: rotate(-45deg);
        pointer-events: none;
        text-align: center;
        position: absolute;
        font-size: 25px;
        color: #4525b8;
        left: 1277.5px;
        z-index: 9999;
        top: 150px;
      }
      /* CSS de background da pagina */
      div.fwxBackground {
        pointer-events: none;
        position: fixed;
        display: block;
        height: 100%;
        width: 100%;
        z-index: -1;
        bottom: 0;
        right: 0;
        left: 0;
        top: 0;
      }
      div.fwxBackground img {
        animation: 5s infinite alternate;
        transform-origin: center bottom;
        position: absolute;
        top: 84.25%;
      }
      @keyframes coralAnimate1 {
        0% {
          transform: rotate(-6deg);
        }
        100% {
          transform: rotate(12deg);
        }
      }
      @keyframes coralAnimate1I {
        0% {
          transform: rotate(-6deg) scaleX(-1);
        }
        100% {
          transform: rotate(12deg) scaleX(-1);
        }
      }
      @keyframes coralAnimate2 {
        0% {
          transform: rotate(12deg);
        }
        100% {
          transform: rotate(-12deg);
        }
      }
      @keyframes coralAnimate2I {
        0% {
          transform: rotate(12deg) scaleX(-1);
        }
        100% {
          transform: rotate(-12deg) scaleX(-1);
        }
      }
      div.fwxBubble {
        box-shadow: 0 0 15px rgba(69, 37, 184, 0.75);
        animation: bubbleAnimate linear infinite;
        border-radius: 50%;
        position: absolute;
        height: 25px;
        width: 25px;
      }
      @keyframes bubbleAnimate {
        0% {
          transform: translateY(500%);
          opacity: 0;
        }
        50% {
          opacity: 1;
        }
        100% {
          transform: translateY(-200px);
          opacity: 0;
        }
      }
      /* CSS da barra de pesquisa */
      form.fwxSearchBar input {
        box-shadow: 0 0 15px #4525b8;
        margin: 20px auto 15px 15px;
        background-color: black;
        justify-content: center;
        padding: 0 20px 0 20px;
        align-items: center;
        border-radius: 10px;
        overflow: hidden;
        font-size: 20px;
        color: darkgray;
        position: fixed;
        display: flex;
        height: 75px;
        width: 500px;
        border: none;
        right: 35px;
        z-index: 1;
        top: 30px;
      }
      form.fwxSearchBar button {
        filter: drop-shadow(0 0 5px darkgray);
        background-color: transparent;
        font-size: 25px;
        position: fixed;
        color: darkgray;
        border: none;
        width: 35px;
        right: 55px;
        top: 72.5px;
        z-index: 2;
      }
      form.fwxSearchBar span.fwxLife {
        filter: drop-shadow(0 0 5px #4525b8);
        position: fixed;
        font-size: 25px;
        color: #4525b8;
        right: 375px;
        top: 150px;
        z-index: 1;
      }
      form.fwxSearchBar span.fwxClock i {
        filter: drop-shadow(0 0 5px #4525b8);
        position: fixed;
        font-size: 25px;
        color: #4525b8;
        right: 335px;
        top: 150px;
        z-index: 1;
      }
      form.fwxSearchBar span.fwxClock span {
        filter: drop-shadow(0 0 5px #4525b8);
        position: fixed;
        font-size: 25px;
        color: #4525b8;
        right: 265px;
        top: 150px;
        z-index: 1;
      }
      /* CSS para as barras laterais de apps */
      div#fwxSidebar.fwxClose {
        transition: left 0.35s ease-in-out;
        display: inline-flex;
        position: absolute;
        left: -410px;
        top: 30px;
      }
      div#fwxSidebar.fwxOpen {
        transition: left 0.35s ease-in-out;
        display: inline-flex;
        position: absolute;
        left: 25px;
        top: 30px;
      }
      div.fwxGridApps {
        display: inline-block;
        vertical-align: top;
        width: 105px;
      }
      div.fwxGridSidebar {
        display: inline-block;
        vertical-align: top;
        width: auto;
      }
      /* CSS dos apps na barra lateral */
      span.fwxApp {
        transition: width 0.3s ease-in-out;
        box-shadow: 0 0 15px #4525b8;
        margin: 20px auto 15px 15px;
        background-color: black;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        font-size: 40px;
        color: darkgray;
        display: flex;
        height: 75px;
        width: 75px;
      }
      span.fwxApp:hover i {
        filter: drop-shadow(0 0 5px darkgray);
      }
      span.fwxApp:hover {
        color: white;
      }
      div.fwxGridSidebar span.fwxApp {
        margin-right: 15px;
      }
      /* CSS do botão da grade de apps */
      span#fwxSidebarButton.fwxClose {
        position: absolute;
        top: 605px;
        left: 25px;
      }
      span#fwxSidebarButton.fwxOpen {
        position: absolute;
        width: 185px;
        top: 605px;
        left: 25px;
      }
      span#fwxSidebarButton.fwxClose i.fa-angle-left {
        display: none;
      }
      span#fwxSidebarButton.fwxOpen i.fa-angle-right {
        display: none;
      }
      /* CSS bloco de notificação */
      div.fwxNotify {
        box-shadow: 0 0 15px #4525b8;
        margin: 20px auto 15px 15px;
        background-color: black;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        overflow: hidden;
        position: fixed;
        font-size: 20px;
        color: #444444;
        display: flex;
        height: 175px;
        bottom: 25px;
        width: 300px;
        right: 35px;
      }
      div.fwxNotify span {
        display: block;
      }
      a.fwxCopyright {
        text-decoration: none;
        position: fixed;
        color: #551a8b;
        bottom: 15px;
        right: 35px;
      }
    </style>
    <script>
      function fwxSidebarButton() {
        if (document.getElementById("fwxSidebarGrid").style.opacity === "1") {
          document.getElementById("fwxSidebarGrid").style.opacity = "0";
        }
        else {
          document.getElementById("fwxSidebarGrid").style.opacity = "1";
        }
        document.getElementById("fwxSidebar").classList.toggle("fwxClose");
        document.getElementById("fwxSidebar").classList.toggle("fwxOpen");
        document.getElementById("fwxSidebarButton").classList.toggle("fwxClose");
        document.getElementById("fwxSidebarButton").classList.toggle("fwxOpen");
      }
      function fwxClock() {
        const date = new Date();
        const hours = String(date.getHours()).padStart(2, "0");
        const minutes = String(date.getMinutes()).padStart(2, "0");
        document.getElementById("fwxClock").textContent = hours + ':' + minutes;
      }
      function fwxBubble() {
        const bubble = document.createElement("div");
        bubble.className = "fwxBubble";
        bubble.style.animationDuration = (Math.random() * 8.5 + 7.5) + 's';
        bubble.style.top = (Math.random() * 100) + '%';
        bubble.style.left = (Math.random() * 100) + '%';
        const background = document.querySelector("div.fwxBackground");
        background.insertBefore(bubble, background.firstChild);
      }
      function fwxCoralFilter(filter) {
        document.querySelectorAll("div.fwxBackground img").forEach(function(coral) {
          coral.style.filter = filter;
        });
      }
      document.addEventListener("DOMContentLoaded", function() {
        var cursor = document.getElementById("fwxMouse");
        var pet = document.getElementById("fwxPet");
        document.addEventListener("mouseenter", function() {
          cursor.style.display = "block";
        });
        document.addEventListener("mouseleave", function() {
          cursor.style.display = "none";
          pet.removeAttribute("style");
        });
        document.addEventListener("mousemove", function(event) {
          cursor.style.left = (event.pageX - 7.5) + 'px';
          cursor.style.top = (event.pageY - 7.5) + 'px';
          pet.style.transform = 'rotate(' + (event.pageX + Math.floor(Math.random() * 360)) + 'deg)';
          pet.style.left = (event.pageX + Math.floor(Math.random() * (-50 - 50 + 1)) + 15) + 'px';
          pet.style.top = (event.pageY + Math.floor(Math.random() * (-50 - 50 + 1)) + 15) + 'px';
        });
        setInterval(fwxClock, 1000);
        for (let i = 0; i < 20; i++) {
          fwxBubble();
        }
        fwxSidebarButton();
      });
    </script>
  </head>
  <body>
    <span id="fwxMouse"></span>
    <i id="fwxPet" class="fa fa-fish"></i>
    <div class="fwxBackground">
      <img src="./background/coral5.png" style="filter: drop-shadow(0 0 5px #c100b1); transform-origin: center 90%; left: 43%; top: 92.5%;" height="75px" width="75px">
      <img src="./background/coral4.png" style="filter: drop-shadow(0 0 5px #8684b6) saturate(500%); transform-origin: 60% 90%; animation-name: coralAnimate2; left: 46.5%; top: 88.5%;" height="100px" width="100px">
      <img src="./background/coral1.png" style="filter: drop-shadow(0 0 5px #ed6262) saturate(70%) opacity(75%); animation-name: coralAnimate1I; left: 52.5%;" height="125px" width="125px">
      <img src="./background/coral0.png" style="filter: drop-shadow(0 0 5px #f26158); transform-origin: 87.5% bottom; animation-name: coralAnimate1; left: 48.5%;" height="125px" width="125px">
      <img src="./background/coral0.png" style="filter: drop-shadow(0 0 5px #f26158) saturate(50%) opacity(75%); transform-origin: 87.5% 80%; animation-name: coralAnimate2I; left: 57.5%; top: 86%;" height="125px" width="125px">
      <img src="./background/coral3.png" style="filter: drop-shadow(0 0 5px #9e4c9a); animation-name: coralAnimate2I; left: 72%; top: 79%;" height="175px" width="75px">
      <img src="./background/coral2.png" style="filter: drop-shadow(0 0 5px #7bdba2) invert(1); animation-name: coralAnimate2; left: 57.5%;" height="125px" width="125px">
      <img src="./background/coral1.png" style="filter: drop-shadow(0 0 5px #ed6262) saturate(150%); animation-name: coralAnimate2; left: 66%;" height="125px" width="125px">
    </div>
    <form class="fwxSearchBar" action="https://google.com/search" autocomplete="off">
      <input type="text" id="fwxSearch" name="q" placeholder=" Pesquisar " autofocus>
      <button>
        <i class="fa fa-search"></i>
      </button>
      <span class="fwxLife" onclick="fwxCoralFilter('brightness(0) drop-shadow(0 0 5px #4525b8)');">
        <i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="far fa-heart"></i> <i class="far fa-heart"></i> <i class="far fa-heart"></i> <i class="far fa-heart"></i>
      </span>
      <span class="fwxClock">
        <i class="far fa-clock"></i>
        <span id="fwxClock">––:––</span>
      </span>
    </form>
    <div id="fwxSidebar" class="fwxClose">
      <span id="fwxSidebarGrid" style="transition: opacity 0.3s ease-in-out; opacity: 0;">
      <div class="fwxGridApps">
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-terminal"></i>
        </span>
      </div>
      <div class="fwxGridApps">
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
      </div>
      <div class="fwxGridApps">
        <span class="fwxApp">
          <i class="fa fa-cube"></i>
        </span>
        <span class="fwxApp">
          <i class="far fa-square"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-twitter"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-facebook"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-tiktok"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-"></i>
        </span>
      </div>
      <div class="fwxGridApps">
        <span class="fwxApp">
          <i class="far fa-credit-card"></i>
        </span>
        <span class="fwxApp">
          <i class="far fa-comment-dots"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-code"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-random"></i>
        </span>
        <span class="fwxApp">
          <i class="fa fa-dice-d20"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-font-awesome"></i>
        </span>
      </div>
      </span>
      <div class="fwxGridSidebar">
        <span class="fwxApp">
          <i class="fab fa-google"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-whatsapp"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-discord"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-youtube"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-instagram"></i>
        </span>
        <span class="fwxApp">
          <i class="fab fa-twitch"></i>
        </span>
      </div>
      <div class="fwxGrisApps" style="display: block;">
        <iframe src="https://efdd3ad9-41b7-440b-ada9-a043d696aa62-00-os5fmi9bww6i.picard.replit.dev/futures/icon.html" style="width: 232px; height: 300px; border: none; box-shadow: 0 0 15px #4525b8; margin: 20px;"></iframe>
      </div>
    </div>
    <span id="fwxSidebarButton" class="fwxApp fwxClose" onclick="fwxSidebarButton()">
      <i class="fa fa-angle-right"></i>
      <i class="fa fa-angle-left"></i>
    </span>
    <div class="fwxNotify">
      Área de notificações<br>
      ....................................................
    </div>
    <a class="fwxCopyright" href="https://sfwx.github.io/copyright/normal" target="_blank">
      © Copyright · Murilo de Moura Santos
    </a>
</html>