<?php
  require './templates/header.html';
?>


<style>
/* Estilos para la pantalla de presentación 
  #preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    opacity: 1;
    transition: opacity 0.5s ease;
  }*/

@import url('https://fonts.cdnfonts.com/css/ica-rubrik-black');
@import url('https://fonts.cdnfonts.com/css/poppins');

.banner{
    background-image: repeating-linear-gradient(to right, transparent 0 100px, #25283b22 100px 101px), repeating-linear-gradient(to bottom, transparent 0 100px, #25283b22 100px 101px);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    background-color: #ffffff;
    align-items: center;
    z-index: 1000;
    /*overflow: hidden;*/
    opacity: 1;
    transition: opacity 0.5s ease;
}

/*.banner .slider{
    position: absolute;
    width: 200px;
    height: 250px;
    top: 10%;
    left: calc(50% - 100px);
    transform-style: preserve-3d;
    transform: perspective(1000px);
    animation: autoRun 20s linear infinite;
    z-index: 2;
}*/

@keyframes autoRun{
    from{
        transform: perspective(1000px) rotateX(-16deg) rotateY(0deg);
    }to{
        transform: perspective(1000px) rotateX(-16deg) rotateY(360deg);
    }
}

/*.banner .slider .item{
    position: absolute;
    inset: 0 0 0 0;
    transform: 
        rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
        translateZ(530px);
}
.banner .slider .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}*/

#preloader {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    opacity: 1;
    transition: opacity 0.5s ease;
  }

/* Contenedor de logo y rueda */
  .presentation {
    position: relative;
    width: 300px;
    height: 170px;
  }

/* Fondo blanco pequeño debajo del logo, por encima de la rueda */
  .small-white-bg {
    position: absolute;
    width: 216px;
    height: 216px;
    background-color: rgba(255, 255, 255);
    border-radius: 100%;
    top: -105px;
    left: -10px;
    z-index: 1;
    /*box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/
  }

/* Logo en el frente */
  .logo-ta {
    position: absolute;
    width: 460px;
    height: 350px;
    top: -205px;
    left: -122px;
    background: url('../img/tar.png') no-repeat center;
    background-size: contain;
    z-index: 2;
  }

/* Rueda giratoria detrás */
  .rotating-wheel {
    position: absolute;
    width: 282px;
    height: 270px;
    top: -129px;
    left: 132px;
    background: url('../img/rueda.png') no-repeat center;
    background-size: contain;
    animation: spin 10s linear infinite;
    z-index: 0;
  }

/* Animación para la rueda */
  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
    .box {
      width: 120px; /* Ajusta el tamaño según necesites */
      height: 100px;
    }
    



@keyframes fadeInRightToLeft {
  from {
    opacity: 0;
    transform: translateX(50px); /* Comienza desde la derecha */
  }
  to {
    opacity: 1;
    transform: translateX(0); /* Se posiciona correctamente */
  }
}


.banner .content{
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    /*width: min(1400px, 100vw);*/
    width: 90%;
    height: max-content;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    z-index: 1;
}

/*h2{
    font-family: 'ICA Rubrik';
    font-size: 3em;
    line-height: 1em;
    color: #25283B;
    position: relative;
    width: 80%;
    font-family: monospace;
    text-wrap: nowrap;
    overflow: hidden;
    animation: typing 2s steps(20) infinite alternate-reverse;
}

h2::after{
    position: absolute;
    inset: 0 0 0 0;
    content: attr(data-content);
    z-index: 2;
    -webkit-text-stroke: 1px #d2d2d2;
    color: #081121;
}*/

h3{
    color: #081121;
    font-size: 22px;
    font-weight: 800;
}

b{
    font-size: 15px;
}

.author{
    color: #002347;
    bottom: 40px;
    position: relative;
}
/*
.banner .content .author{
    font-family: Poppins;
    text-align: right;
    max-width: 200px;
}
.banner .content h2{
    font-size: 3em;
}
*/
.carousel-container {
    width: 45%;
    overflow: hidden;
    position: relative;
    top: 220px;
}

.carousel {
    display: flex;
    width: 100%; /* Ajuste para efecto infinito */
    animation: scroll 10s linear infinite;
    gap: 20px;
}

.carousel img {
    width: 16.66%; /* 100% dividido entre 6 imágenes */
    flex-shrink: 0;
}
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}

    /*background-image: url(../images/model.png);*/

@media screen and (max-width: 1023px) {
    /*.banner .slider{
        width: 160px;
        height: 200px;
        left: calc(50% - 80px);
    }
    .banner .slider .item{
        transform: 
            rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
            translateZ(300px);
    }*/

    h2{
        text-align: center;
        width: 73%;
        text-shadow: 0 10px 20px #000;
        font-size: 30px;
    }

    /*.banner .content .author{
        color: #fff;
        padding: 20px;
        text-shadow: 0 10px 20px #000;
        z-index: 2;
        max-width: unset;
        width: 100%;
        text-align: center;
        padding: 0 30px;
    }*/
}

@media screen and (max-height: 878px) {

    /*.banner .slider .item {
        position: absolute;
        inset: 0 0 0 0;
        transform: rotateY(calc((var(--position) - 1)*(360 / var(--quantity))* 1deg)) translateZ(500px);
    }*/

    .banner .content {
        padding-bottom: 60px;
    }

    .author{
        left: -65px;
    }

    .rotating-wheel {
        width: 253px;
        height: 253px;
        top: -132px;
        left: 100px;
    }

    .small-white-bg {
        width: 185px;
        height: 185px;
        top: -100px;
        left: 0px;
    }

    .logo-ta{
        width: 380px;
        height: 335px;
        top: -205px;
        left: -88px;
    }

    .carousel-container {
        top: 160px;
    }
}

@media screen and (max-height: 700px) {
    .banner .content .model {
        bottom: 107px;
        height: 45vh;
    }

    /*.banner .slider .item {
        position: absolute;
        inset: 0 0 0 0;
        transform: rotateY(calc((var(--position) - 1)*(360 / var(--quantity))* 1deg)) translateZ(450px);
    }*/

    .banner .content {
        padding-bottom: 38px;
    }
}
@media screen and (max-width: 767px) {
    /*.banner .slider{
        width: 100px;
        height: 150px;
        left: calc(50% - 50px);
    }
    .banner .slider .item{
        transform: 
            rotateY(calc( (var(--position) - 1) * (360 / var(--quantity)) * 1deg))
            translateZ(180px);
    }*/
    
    h2{
        width: 100%;
        font-size: 17px;
        text-shadow: 0 0 0;
    }

    h2::after {
        -webkit-text-stroke: 1px #414141;
        color:rgb(245, 245, 245);
    }

    .banner .content {
        flex-direction: column;
        width: 100%;
    }

    .author{
        bottom: 0px;
        padding: 20px 20px;
        left: 0px;
    }

    .carousel-container {
        width: 95%;
        overflow: hidden;
        position: relative;
        top: 126px;
    }
    /* background-image: url(../images/model.png); */
}

@keyframes typing {
    from{
        width: 0ch;
    }
}




        body {
            font-family: sans-serif;
            background-color: #1e293b; 
            color: #cbd5e1; 
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        } 
        
        body::before{
            position: absolute;
            width: min(1400px, 90vw);
            top: 10%;
            left: 50%;
            height: 90%;
            transform: translateX(-50%);
            content: '';
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: top center;
            pointer-events: none;
        }

.dashboard-container {
    
    width: calc(100% - 40px);
    margin: 20px;
    background-color: #334155; /* Darker panel background */
    border-radius: 10px;
    overflow: hidden;
}

.dashboard-header {
    background-color: #475569;
    color: #fff;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.search-bar {
    display: flex;
}

.search-bar input {
    padding: 8px;
    border: none;
    border-radius: 5px 0 0 5px;
    background-color: #64748b;
    color: #fff;
}

.search-bar button {
    padding: 8px 12px;
    border: none;
    border-radius: 0 5px 5px 0;
    background-color: #8ea2c2;
    color: #fff;
    cursor: pointer;
}

.header-icons span {
    margin-left: 10px;
}

.dashboard-main {
    padding: 20px;
}

.dashboard-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.dashboard-item {
    background-color: #475569;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    box-sizing: border-box; /* Ensures padding doesn't affect overall size */
}

.dashboard-item h3 {
    margin-top: 0;
    color: #fff;
}

.data-value {
    font-size: 1.5em;
    font-weight: bold;
    color: #a5b4fc;
}

.data-change {
    color: #6ee7b7;
    font-size: 0.9em;
}

.item-small {
    text-align: center;
}

.item-large {
    grid-column: span 2;
}

.item-medium {
    grid-column: span 1;
}

/* Basic table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    color: #cbd5e1;
    max-height: 200px; /* Ajusta según sea necesario */
    overflow-y: auto;
    display: block;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #64748b;
}

th {
    background-color: #64748b;
    color: #fff;
}

tbody tr:hover {
    background-color: #64748b;
}

th:nth-child(1), td:nth-child(1) { width: 7%; } 
th:nth-child(2), td:nth-child(2) { width: 30%; } 
th:nth-child(3), td:nth-child(3) { width: 15%; } 
.tabla-formu table::-webkit-scrollbar{
    width: 15px;
}

th:nth-child(1), td:nth-child(1) {
  text-align: center;
}


.tabla-formu table::-webkit-scrollbar-track{
    background:rgb(123, 152, 196);
    border-radius: 50px;
}

.tabla-formu table::-webkit-scrollbar-thumb{
    background:rgb(76, 93, 117);
    border-radius: 50px;
}


/* Placeholder for world map */
.world-map {
    width: 100%;
    height: 200px;
    background-color: #64748b;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.world-map img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

#salesChart {
    width: 100%; /* Make the canvas responsive */
}

i{
  font-size: 18px;
}

.can-barra{
  width: 100%; 
  position: relative; 
  top: 20px; 
  height: 100%; 
  max-height: 180px;
}

@media screen and (max-width: 1200px){
    .carousel-container {
        width: 70%;
    }
}

@media (max-width: 800px) {
    .dashboard-container {
      width: calc(100% - 40px);
      padding-bottom: 60px;
    }

    .dashboard-main {
      padding: 5px;
    }

    .dashboard-section {
      grid-template-columns: 1fr; /* Single column layout */
      top: 15px;
      position: relative;
    }

    .item-large {
      grid-column: span 1; /* Make large items take up the full width */
    }

    .item-medium {
      grid-column: span 1; /* Make medium items take up the full width */
    }

    .revenueChart{
      width: 100%;
    }

    .can-barra{
      top: 10px; 
    }

    .image{
      display: none;
    }

    .carousel-container {
        width: 90%;
    }

    .rotating-wheel {
        width: 200px;
        height: 200px;
        top: -123px;
        left: 123px;
    }

    .small-white-bg {
        width: 148px;
        height: 148px;
        top: -92px;
        left: 35px;
    }

    .logo-ta {
        width: 308px;
        height: 326px;
        top: -205px;
        left: -36px;
    }
}

</style>
    
    <div class="banner" id="banner">
        <!--<div class="slider" style="--quantity: 7">
            <div class="item" style="--position: 1"><img src="../img/GES_COMBUSTIBLE.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="../img/GES_CONTRATOS.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="../img/GES_LOGISTICA.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="../img/GES_MANTENIMIENTO.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="../img/GES_NEUMATICOS.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="../img/GES_OPERACIONES.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="../img/GES_RRHH.png" alt=""></div>
        </div>-->
        
        <div id="preloader" >
            <div class="presentation">
                <div class="rotating-wheel"></div>
                <div class="small-white-bg"></div>
                <div class="logo-ta"></div>
            </div>
        </div>
        <div class="carousel-container">
            <div class="carousel">
                <img src="../img/COMBUSTIBLE.png" alt="Imagen 1">
                <img src="../img/CONTRATOS.png" alt="Imagen 2">
                <img src="../img/MANTENIMIENTO.png" alt="Imagen 3">
                <img src="../img/NEUMATICOS.png" alt="Imagen 4">
                <img src="../img/OPERACIONES.png" alt="Imagen 5">
                <img src="../img/LOGISTICA.png" alt="Imagen 6">
                <!-- Duplicamos las imágenes para el efecto infinito -->
                <img src="../img/COMBUSTIBLE.png" alt="Imagen 1">
                <img src="../img/CONTRATOS.png" alt="Imagen 2">
                <img src="../img/MANTENIMIENTO.png" alt="Imagen 3">
                <img src="../img/NEUMATICOS.png" alt="Imagen 4">
                <img src="../img/OPERACIONES.png" alt="Imagen 5">
                <img src="../img/LOGISTICA.png" alt="Imagen 6">
            </div>
        </div>
        <div class="content">
            <!--<h2 data-content="TECNOLOGIA DE INFORMACION DEL GRUPO IBARCENA">
                TECNOLOGIA DE INFORMACION DEL GRUPO IBARCENA
            </h2>
            <h1 data-content="WEB SYS">
                WEB SYS
            </h1>
            <div class="author">
                <h2>GES 360</h2>
                <p><b>Web System</b></p>
                <p>
                  Developed by the IT area, by Fili
                </p>
            </div>-->
            <div class="author">
                <h3><em>GES 360 - Transformación Digital</em></h3>
                <p><b>TECNOLOGIA DE INFORMACION - GRUPO IBARCENA</b></p>
                <!--<p>
                  Developed by the IT area, by Fili and Erix
                </p>-->
            </div>
        </div>
            
    </div>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>Q</button>
            </div>
            <div class="header-icons">
                <span>...</span>
            </div>
        </header>
        <main class="dashboard-main">
            <section class="dashboard-section">
                <div class="dashboard-item item-small">
                    <h3>Contratos <i class="fa-solid fa-file-contract"></i></h3>
                    <div class="data-value" id="con-Contra">0</div>
                    <div class="data-change" id="por-Contra"></div>
                </div>
                <div class="dashboard-item item-small">
                    <h3>Adendas <i class="fa-solid fa-file-invoice"></i></h3>
                    <div class="data-value" id="con-Adenda">0</div>
                    <div class="data-change" id="por-Adenda"></div>
                </div>
                <div class="dashboard-item item-small">
                    <h3>Cartas <i class="fa-solid fa-file-signature"></i></h3>
                    <div class="data-value" id="con-Carta">0</div>
                    <div class="data-change" id="por-Carta"></div>
                </div>
                <div class="dashboard-item item-small">
                    <h3>Orden de compras <i class="fa-solid fa-file-lines"></i></h3>
                    <div class="data-value" id="con-OC">0</div>
                    <div class="data-change" id="por-OC"></div>
                </div>

                <div class="dashboard-item item-large">
                    <h3>Resumen mensual</h3>
                    <div class="data-value">$59,342.32</div>
                    <canvas id="revenueChart" class="revenueChart"></canvas>
                </div>

                <div class="dashboard-item item-medium">
                    <h3>Flota vehicular</h3>
                    <div class="data-value">$48,352 revenue generated</div>
                    <canvas id="campaignDonut" class="can-barra"></canvas>
                </div>

                <div class="dashboard-item item-medium" style="overflow: hidden;">
                    <h3>Top 3 Cliente</h3>
                    <canvas id="salesChart" style="max-height: 300px;"></canvas>
                </div>

                <div class="dashboard-item item-large tabla-formu">
                    <h3>Leasing Vehicular</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Modelo</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody id="vehiculos-tbody">
                            <tr>
                                <td colspan="3">No hay Vehiculos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-item item-large">
                    <h3>Geography Based Traffic</h3>
                    <div class="world-map">
                        <!-- Placeholder for a world map SVG or image -->
                        <img src="world-map-placeholder.png" alt="World Map">
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

    window.onload = function () {
        setTimeout(() => {
        document.getElementById('banner').style.opacity = '0';
        setTimeout(() => {
            document.getElementById('banner').style.display = 'none';
        }, 1000); // Espera 1 segundo después de ocultar
        }, 4000); // Ocultar todo después de 2 segundos
    };


    // script.js
    document.addEventListener('DOMContentLoaded', () => {
    // Placeholder data for Revenue Chart
        const revenueData = {
            labels: ['Plane', 'Helicopter', 'Boat', 'Train', 'Subway', 'Bus', 'Car', 'Moto', 'Bicycle', 'Skateboard', 'Others'],
            data: [250, 300, 280, 400, 350, 520, 480, 300, 250, 400, 350]
        };

        // Placeholder data for Campaign Donut Chart
        const campaignData = {
            labels: ['Revenue', 'Expenditures'],
            data: [70, 30] // Example: 70% revenue, 30% expenditures
        };

        
        // Function to create a basic line chart (placeholder)
        function createBasicLineChart(canvasId, data) {
            const canvas = document.getElementById(canvasId);
            const ctx = canvas.getContext('2d');

            // Simplified line chart drawing (replace with actual chart implementation)
            ctx.fillStyle = '#64748b';
            ctx.fillRect(0, 2, canvas.width, canvas.height);
            ctx.fillStyle = '#fff';
            ctx.font = '16px sans-serif';
            ctx.textAlign = 'center';
            ctx.fillText('Line Chart Placeholder', canvas.width / 2, canvas.height / 2);
        }

        function createBasicDonutChart(canvasId, data) {
            const canvas = document.getElementById(canvasId);
            const ctx = canvas.getContext('2d');

            // Calculate total value
            const totalValue = data.data.reduce((acc, val) => acc + val, 0);

            let startAngle = -0.5 * Math.PI; // Start from the top
            const centerX = canvas.width / 2;
            const centerY = canvas.height / 2;
            const radius = Math.min(centerX, centerY) * 0.8; // Adjust radius for better fit

            const colors = ['#a5b4fc', '#00f1ed']; // Example colors

            data.data.forEach((value, index) => {
                const fraction = value / totalValue;
                const angle = 2 * Math.PI * fraction;

                // Draw the arc/slice
                ctx.beginPath();
                ctx.arc(centerX, centerY, radius, startAngle, startAngle + angle, false);
                ctx.lineTo(centerX, centerY); // Close the path
                ctx.closePath();

                // Set fill color
                ctx.fillStyle = colors[index % colors.length];
                ctx.fill();

                startAngle += angle;
            });

            // Add a hole in the middle to make it a donut chart
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius * 0.5, 0, 2 * Math.PI, false);
            ctx.fillStyle = '#475569'; // Background color
            ctx.fill();
        }

        // Initialize charts with placeholder data
        createBasicLineChart('revenueChart', revenueData);
        createBasicDonutChart('campaignDonut', campaignData);
        /*createBasicBarChart('salesChart', salesData);*/
    });

    </script>
    <script type="module" src="../js/dashboard.js"></script>
<?php
    require './templates/footer.html';
?>