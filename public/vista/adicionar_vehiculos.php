<?php
    require './templates/header.html';
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    #preloader {
        position: fixed;
        top: 0;
        left: 250px;
        width: calc(100% - 250px);;
        height: 100%;
        background-color: #fff; 
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        z-index: 1000; 
    }

    .gif-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px; 
    }

    .gif-container img {
        width: 60px; 
        animation: fadein 1.5s ease-in-out infinite;
    }

    .welcome-message {
        font-size: 20px;
        margin-top: 20px;
        font-weight: bold;
        color: #019fff;
    }

    @keyframes fadein {
        0%, 100% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }

    #notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #d4edda;
        color: #fff;
        padding: 15px 20px;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        opacity: 0;
        transform: translateY(-20px);
        visibility: hidden; /* Aseguramos que esté oculto inicialmente */
        transition: opacity 0.5s ease, transform 0.5s ease, visibility 0s 0.5s;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-style: normal;
    }

    #notification.show {
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.5s ease, transform 0.5s ease, visibility 0s 0s;
    }

    main{
        align-content: center;
        justify-items: center;
        color: #000;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 13px;
        font-weight: <weight>;
        font-style: normal;
    }

    .contenedor {
        width: 100%;
    }

    body{
        background:rgb(228, 228, 228);
    }

    .form-adicionar{
        width: 100%;
        background: #fff;
        border-radius: 10px;
        --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .tittle-adiciona{
        text-align: center;
    }

    .tittle-form-adi{
        background: #c59315; 
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        color: #fff;
        padding: 20px 10px;
    }

    .tabla-form-adi{
        width: 100%;
        overflow: auto;
        max-height: 580px; /* Altura máxima del contenedor */
        overflow-y: auto;
        overflow-x: auto;
    }

    /* Contenedor de la tabla 
    .table-container {
        width: 100%;  
        overflow-x: auto; 
    }*/

    /* Estilo para la tabla */
    table {
        border-collapse: collapse;
        width: 100%; /* La tabla debe ocupar todo el ancho disponible */
        table-layout: fixed;  /* Permite que la tabla tenga un diseño fijo y se adapte mejor al tamaño */
        color: #000;
        font-family: "Montserrat", serif;
        font-size: 13px;
    }

    th, td {
        border: 1px solid #8d8d8d;
        padding: 8px 12px; 
        text-align: center; 
    }

    th {
        color: white;
        background-color: #0e2e67;
        font-family: "Montserrat", serif;
        font-size: 12px;
    }

    td {
        font-family: "Montserrat", serif;
        font-size: 12px;
    }

    /* Ajustar el color de fondo de los encabezados */
    .tabla-form-adi th {
        background-color: #c59315;
    }

    /* Evitar que las celdas se colapsen demasiado */
    th, td {
        width: auto;  /* Asegura que las celdas se adapten al contenido */
        min-width: 80px; /* Añadir un valor mínimo para las celdas */
    }

    /* Añadir un ancho mínimo a las celdas de la tabla */
    th:nth-child(1), td:nth-child(1) { width: 7%; min-width: 80px; }
    th:nth-child(2), td:nth-child(2) { width: 5%; min-width: 80px; display: none; }
    th:nth-child(3), td:nth-child(3) { width: 6%; min-width: 80px; }
    th:nth-child(4), td:nth-child(4) { width: 8%; min-width: 100px; }
    th:nth-child(5), td:nth-child(5) { width: 12%; min-width: 100px; }
    th:nth-child(6), td:nth-child(6) { width: 8%; min-width: 100px; }
    th:nth-child(7), td:nth-child(7) { width: 5%; min-width: 80px; }
    th:nth-child(8), td:nth-child(8) { width: 8%; min-width: 80px; }
    th:nth-child(9), td:nth-child(9) { width: 8%; min-width: 100px; }
    th:nth-child(10), td:nth-child(10) { width: 8%; min-width: 100px; }
    th:nth-child(11), td:nth-child(11) { width: 8%; min-width: 100px; }
    th:nth-child(12), td:nth-child(12) { width: 8%; min-width: 80px; }

    /* Estilo para la fila al pasar el mouse */
    tr:hover {
        color: #fff;
        cursor: pointer;
    }

    table th:nth-child(1) input, table td:nth-child(1) input {
        width: 22px;
        height: 22px;
        text-align: center;
        top: 4px;
        position: relative;
    }

    table th:nth-child(2) input, table td:nth-child(2) input, 
    table th:nth-child(3) input, table td:nth-child(3) input,
    table th:nth-child(4) input, table td:nth-child(4) input, 
    table th:nth-child(5) input, table td:nth-child(5) input,
    table th:nth-child(6) input, table td:nth-child(6) input, 
    table th:nth-child(7) input, table td:nth-child(7) input,
    table th:nth-child(8) input, table td:nth-child(8) input, 
    table th:nth-child(9) select, table td:nth-child(9) input,
    table th:nth-child(10) select, table td:nth-child(10) select, 
    table th:nth-child(11) input, table td:nth-child(11) select, 
    table th:nth-child(12) select, table td:nth-child(12) select  {
        width: 100%;
        height: 30px;
        text-align: center;
    }
    
    table th:nth-child(2) input, table td:nth-child(2) input{
        display: none;
    }
    

    
    input[type="checkbox"] {
        appearance: none; /* Elimina el diseño predeterminado */
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 20px;
        height: 20px;
        border: 2px solid #007bff; /* Borde azul */
        border-radius: 25px; /* Bordes redondeados */
        background-color: white;
        cursor: pointer;
        display: inline-block;
    }

    /* Estilo cuando está marcado */
    input[type="checkbox"]:checked {
        background-color: #007bff;
        border-color: #0056b3;
    }

    /* Agregar un ícono de check */
    input[type="checkbox"]:checked::after {
        content: "✔";
        color: white;
        font-size: 17px;
        display: block;
        text-align: center;
        line-height: 25px;
        position: relative;
        top: -2px;
    }
    

    td td:nth-child(1) input{
        font-size: 25px;
    }

    .table-container tr:hover{
        background-color: #fffaed;
        color: black;
    }

    .tabla-form-adi::-webkit-scrollbar{
        width: 15px;
    }

    .tabla-form-adi::-webkit-scrollbar-track{
        background:rgb(123, 152, 196);
        border-radius: 50px;
    }

    .tabla-form-adi::-webkit-scrollbar-thumb{
        background:rgb(185, 185, 185);
        border-radius: 50px;
    }

    .cbo-form-dig{
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: flex-start;
    }

    .cbo-form-adiciona{
        padding: 10px 10px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
    }

    .cbo-form-adiciona-header{
        padding: 10px 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 45%;
    }

    .cbo-form-adiciona label{
        width: 13%;
        align-content: center;
    }

    .cbo-clau-te{
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .cbo-clau-te label {
        width: 30%;
        align-content: center;
    }

    .cbo-form-adiciona select{
        width: 27%;
        height: 35px;
        border-radius: 8px;
    }

    .cbo-clau-te select{
        width: 60%;
        height: 35px;
        border-radius: 8px;
    }

    .btn-flota-adi, .btn-cancelar-adi, .btn-acepta-adi{
        border: none;
        cursor: pointer;
        border-radius: 8px;
        background: #cf9101;
        color: #fff;
        height: 35px;
        width: 100px;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
    }
    
    .btn-flota-adi:hover, .btn-cancelar-adi:hover, .btn-acepta-adi:hover{
        background: rgb(233, 185, 0);
        font-size: 13px;
    }

    .btn-footer-adi{
        width: 58%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        gap: 10px;
    }

    @media screen and (max-width: 1600px){
        table{
            width: 120%;
        }
    }

    @media screen and (max-width: 1200px){
        table{
            width: 150%;
        }

        
    }

    @media screen and (max-width: 1000px){
        table{
            width: 200%;
        }
    }

    @media screen and (max-width: 800px){
        #preloader{
            left: 0;
            width: 100%;
            height: calc(100% - 60px);
        }  
        
        table{
            width: 300%;
        }

        .contenedor{
            width: 100%;
            top: -12px;
            position: relative;
        }

        .cbo-form-adiciona-header{
            width: 95%;
        }

        .cbo-form-dig{
            display: flex;
            flex-direction: column;
        }

        .cbo-clau-te {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .cbo-clau-te label {
            width: 100%;
        }

        .cbo-clau-te select {
            width: 100%;
        }

        .modal-footer .cbo-form-adiciona{
            display: flex;
            flex-direction: column;
        }

        .modal-footer .cbo-form-adiciona label, .modal-footer .cbo-form-adiciona select{
            width: 100%;
        }

        .btn-footer-adi {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .tabla-form-adi {
            max-height: 422px;
        }

        #notification.show {
            right: 20px;
        }

        .hidden{
            left: 20px;
        }
    }

    input.check-xtodo[type="checkbox"]{
        border: 2px solid #5eb300;
    }

    input.check-xtodo[type="checkbox"]:checked {
        background-color: #3fff00;
        border-color: #5eb300;
    }
</style>
<div id="preloader">
    <div class="gif-container">
        <img src="../img/carpeta.gif" alt="Cargando...">
    </div>
    <div class="welcome-message">
        <p>¡Cargando!.....</p>
    </div>
</div>
<main>
    <div id="notification" class="hidden"></div>

    <div class="contenedor">
        <div class="form-adicionar">
            <div class="tittle-adiciona">
                <div class="tittle-form-adi">
                    <h3>ASIGNAR UNIDADES</h3>
                </div>
            </div>
            <div class="body-adiciona">
                <div class="cbo-form-dig">
                    <div class="cbo-form-adiciona-header">
                        <div class="cbo-clau-te">
                            <label for="combo-box-cliente">Cliente:</label>
                            <select id="combo-box" name="opciones" class="cbo-form-cliente select-form-clientes"></select>
                        </div>
                        <div class="cbo-clau-te">
                            <label for="combo-box-leasing">N° De Leasing:</label>
                            <select id="combo-box-leasing" disabled name="opciones" class="cbo-form-leasing">
                                <option value="" disabled selected>Seleccione un Leasing</option>
                            </select>
                        </div> 
                    </div>
                    <div class="cbo-form-adiciona">
                        <!-- onclick="listaVehiculosAsignables()" -->
                        <!-- <button id="btn-flota-total" class="btn-flota-adi" >Flota Total</button> -->
                    </div>
                </div>
                <div class="tabla-form-adi">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th><input class="check-xtodo" type="checkbox" id="checkAll" disabled> Select</th>
                                    <th>ID</th>
                                    <th>Placa</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Leasing</th>
                                    <th>Tarifa</th>
                                    <th>Fecha de Entrega</th>
                                    <th>Fecha Devolucion</th>
                                    <th>Operacion</th>
                                    <th>Contrato</th>
                                    <th>Terreno</th>
                                </tr>   
                            </thead>
                            <tbody id="asignacion-tbody">
                                <tr>
                                    <td colspan="12">Seleccione un cliente para ver los vehiculos por asignar</td>
                                </tr>
                            </tbody>
                            <!--<tbody id="contratos-tbody" class="table-detalle">
                            </tbody>-->
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="cbo-form-adiciona">
                        <label for="combo-box-asig">Asignar Cliente:</label>
                        <select id="combo-box-asig" name="opciones" class="cbo-form-leasing" disabled></select>
                        <div class="btn-footer-adi">
                            <input class="check-xtodo" type="checkbox" id="repeticion" disabled> Repetir
                            <button class="btn-acepta-adi" onclick="guardaAsignacion()">Grabar</button>
                            <button class="btn-cancelar-adi" onclick="deshabilitarSelect()">Limpiar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="module">
    window.onload = function() {
        setTimeout(() => {
            document.body.classList.add('loaded');
            document.getElementById('preloader').style.display = 'none';
        }, 2000); 
    };
</script>
<script src="../js/adiciona_vehiculo.js"></script>
<?php
    require './templates/footer.html';
?>