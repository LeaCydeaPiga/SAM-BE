<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    </style>
</head>