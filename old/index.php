<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pcific Esports</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
			font-family: 'Poppins';
            background-color: #f0f0f0;
            background-image: url('assets/bg_4.jpg');
        }
        svg {
            cursor: pointer;
        }
        #info {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            text-align: center;
        }
    </style>
	
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="width:600px" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 779.76 529.32" id="mySVG">
    <defs>
        <style>
            .cls-1 {
                fill: #41C1DD;
            }
            .cls-2 {
                fill: url(#Adsız_degrade_2);
            }
            .cls-1:hover {
                fill: #ffffff;
                transition: 0.1s ease-in;
            }
        </style>
        <linearGradient id="Adsız_degrade_2" x1="-205.39" y1="796.29" x2="-204.39" y2="796.29" gradientTransform="matrix(0, 537.59, 537.59, 0, -427806.31, 110412.38)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#3ec3dd" />
            <stop offset="0.39" stop-color="#1fa4be" />
            <stop offset="0.77" stop-color="#088da7" />
            <stop offset="1" stop-color="#00849e" />
        </linearGradient>
    </defs>
    <title>Varlık 2</title>
    <g id="katman_2" style="width:500px" data-name="katman 2">
        <g id="katman_1-2" data-name="katman 1">
            <path class="cls-1" id="sol" data-title="PCIFIC Anasayfa'sına Git" d="M231.86,529.32l.06,0-.08,0ZM81.24.19A81.23,81.23,0,0,0,5,109.54L130.53,449.81a140.56,140.56,0,0,0,101.31,79.46L68.52,86.12A13.56,13.56,0,0,1,81.24,67.87l121-.19a97.93,97.93,0,0,1,68.86,167.55l55.59,39.46A165.62,165.62,0,0,0,202.19,0Z"/>
            <path class="cls-1" id="orta" data-title="PCIFIC Shop'a Git" d="M257.36,249a164.09,164.09,0,0,0,.41,232.46c64.35,63.9,168.78,62.46,232.9-1.67l41.68-41.68-55.92-39.62-34.74,34.84a96.59,96.59,0,0,1-136.6-136.61l11.52-11.41L260.49,245.7Z" />
            <path class="cls-1" id="sag" data-title="Instagram" d="M426.93,97.2a165.73,165.73,0,0,0,26.19,177.49l55.6-39.46A97.92,97.92,0,0,1,577.57,67.68l120.95.19a13.55,13.55,0,0,1,12.72,18.25l-.11-.05L669.42,199.35a47.5,47.5,0,0,1-10.95,17.12L486.85,388.27l55.93,39.62,62.2-62.2a1.58,1.58,0,0,1,2.6,1.67l-59.87,162,.14,0a140.57,140.57,0,0,0,101.38-79.48L774.74,109.54A81.23,81.23,0,0,0,698.52.19L577.57,0A165.39,165.39,0,0,0,426.93,97.2"/>
        </g>
    </g>
</svg>

<div id="info" style="margin-top:40px; color:white; position:absolute;bottom: 20%"></div>

<script>
    const infoText = document.getElementById('info');

    const elements = document.querySelectorAll('path');

    elements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            infoText.textContent = this.getAttribute('data-title');
        });
        element.addEventListener('mouseleave', function() {
            infoText.textContent = '';
        });
        element.addEventListener('click', function() {
            const url = this.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        });
    });

    // Setting URLs for the elements
    document.getElementById('sol').setAttribute('data-url', 'https://www.pcific.webisse.com/anasayfa');
    document.getElementById('orta').setAttribute('data-url', 'https://www.pcific.shop');
    document.getElementById('sag').setAttribute('data-url', 'https://www.google.com/search?q=pcific+esports');
</script>

</body>
</html>
