<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A05 Inside Out</title>
    <link rel="icon" href="img/logo.png"
        type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #home {
            background-image: url('img/bg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }

        @media (max-width: 1000px) {
            #home {
                background-image: none;
            }
        }

        @media (max-width: 480px) {
            #home {
                background-image: none;
            }
        }

        .rammetto-one-regular {
            font-family: "Rammetto One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .raleway {
            font-family: "Raleway", serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .font-20 {
            font-size: 20px;
        }

        .font-30 {
            font-size: 30px;
        }


        .leftContent {
            color: #6c757d;
        }

        .rightContent {
            display: flex;
            justify-content: flex-end;
            text-align: right;
            color: #366ABD;
        }

        .island-section {
            height: 100vh;
        }


        /* Responsive adjustments for background size
        @media (max-width: 768px) {
            .island-section {
                background-size: contain;
                background-position: center;
            }
        }
 */

        .floating {
            width: auto;
            height: auto;
            border-radius: 10px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0);
            }
        }



        .buttonContainer {
            margin-top: 3rem;
        }

        .homeButton {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid #366ABD;
            border-radius: 30px;
            background-color: white;
            color: #366ABD;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .homeButton:hover {
            background-color: #366ABD;
            color: white;
        }


        .arrow-icon {
            margin-left: 10px;
            font-size: 25px;
        }

        .homeButton:hover {
            background-color: #366ABD;
            color: white;
        }

        .homeButton:hover .arrow-icon {
            transform: translateX(5px);
            transition: transform 0.3s ease;
        }


        @media (max-width: 1000px) {
            .buttonContainer {
                margin-top: 0 !important;
                text-align: center;
            }

            .homeButton {
                margin: 5px auto !important;
            }
        }






        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #366ABD;
            border-radius: 6px;
            border: 3px solid white;
        }

        ::-webkit-scrollbar-track {
            background-color: #f0f0f0;
            border-radius: 6px;
        }





        .gallery {
      --s: 130px; /* control the size of the images*/
      display: grid;
      grid-template-columns: repeat(3, auto);
      gap: 5px;
      position: relative;
    }
    .gallery input {
      position: absolute;
      border: 2px solid #000;
      border-radius: 50%;
      inset: calc(50% - var(--s)/3);
      cursor: pointer;
      --g: linear-gradient(#000 0 0) no-repeat;
      background: var(--g) 50%/var(--b, 0%) 3px, var(--g) 50%/3px var(--b, 0%);
      transition: 1.5s;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }
    .gallery > img {
      width: var(--s);
      aspect-ratio: 1;
      object-fit: cover;
      transform: scale(.1);
      filter: brightness(0);
      pointer-events: none;
      transform-origin: var(--x) var(--y);
      transition: 1s calc((var(--i) - 1)*.1s);
    }
    .gallery > img:nth-of-type(1) {--i:1;--x: 150%;--y:150%;}
    .gallery > img:nth-of-type(2) {--i:2;--x:  50%;--y:150%;}
    .gallery > img:nth-of-type(3) {--i:3;--x: -50%;--y:150%;}
    .gallery > img:nth-of-type(4) {--i:4;--x: 150%;--y:50%; }
    .gallery > img:nth-of-type(5) {--i:5 }
    .gallery > img:nth-of-type(6) {--i:6;--x: -50%;--y:50%; }
    .gallery > img:nth-of-type(7) {--i:7;--x: 150%;--y:-50%;}
    .gallery > img:nth-of-type(8) {--i:8;--x:  50%;--y:-50%;}
    .gallery > img:nth-of-type(9) {--i:9;--x: -50%;--y:-50%;}

    .gallery > input:checked ~ img {
      transform: scale(1);
      filter: brightness(1);
      pointer-events: initial;
    }
    .gallery > input:checked {
      transform: translateY(calc(1.75*var(--s))) scale(.5) rotate(45deg);
      --b: 70%;
    }
    .photoBox {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-content: center;
    }
    </style>
</head>