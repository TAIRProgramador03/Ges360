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

    main{
        align-content: center;
        justify-items: center;
    }

    body.loaded .sidebar,
    body.loaded .home-section {
        display: block;
    }

    body:not(.loaded) .sidebar,
    body:not(.loaded) .home-section {
        display: none;
    }

    body {
        background: #f5f5f5;
        color: #b2b2bb;
    }

    .contenedor{
        width: 100%;
        background: #fff;
    }

    .regis-form-leasing{
        border-radius: 10px;
        --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .form-cuerpo{
        padding: 10px 0px;
    }

    .form-seven{
        display: grid;
    }

    .leasing-tittle{
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background: #007272;
        color: #fff;
        padding: 20px 20px;
        text-align: center;
        font-size: 16px;
    }

    .leasing-adenda{
        display: flex;
        flex-wrap: wrap;
        align-content: flex-end;
        justify-content: flex-start;
        color: #000;
        flex-direction: row;
        align-items: center;
        padding: 10px 20px;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 13px;
        font-weight: <weight>;
        font-style: normal;
        gap: 10px;
    }

    .leasing-adenda label{
        width: 18%;
    }

    .leasing-adenda input{
        width: 32%;
        height: 30px;
        text-align: center;
        border-radius: 8px;
        border: 1px solid;
    }

    .btn-busca, .btn-vehi{
        text-decoration: none;
        text-align: center;
        border: none;
        background: #fff;
        cursor: pointer;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
    }

    .btn-busca{
        width: 10%;
    }

    .btn-vehi{
        width: 15%;
    }

    .tabla-form, .tabla-form-cli, .tabla-form-vehi{
        width: 100%;
    }

    .tabla-form{
        overflow: auto;
        max-height: 300px; /* Altura máxima del contenedor */
    }

    .tabla-form-cli, .tabla-form-vehi{
        max-height: 422px; /* Altura máxima del contenedor */
        overflow-y: auto;
    }

    .area-campo{
        resize: none; 
        width: 77.5%;
        padding: 10px 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%; 
        display: block; 
        white-space: nowrap;
        color: #000; 
        max-height: 422px;
        border-collapse: collapse;
        overflow-y: auto;
        padding: 10px 22px;
        min-width: 800px;
    }

    th, td {
        border: 1px solid #8d8d8d;
        padding: 8px 12px; 
        text-align: center; 
    }

    th {
        /*background-color: #0e2e67;*/
        color: white;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
    }

    .tabla-form th{
        background-color: #007272;
    }

    .tabla-form-cli th{
        background-color: #4caf50;
    }

    .tabla-form-vehi th{
        background-color:rgb(216, 67, 87);
    }

    td {
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
    }

    .tdh{
        padding: 5px 0;
        font-size: 12px;
    }

    th:nth-child(1), td:nth-child(1) { width: 4%; } 
    th:nth-child(2), td:nth-child(2) { width: 8%; } 
    th:nth-child(3), td:nth-child(3) { width: 40%; } 
    th:nth-child(4), td:nth-child(4) { width: 20%; } 
    th:nth-child(5), td:nth-child(5) { width: 14%; } 
    th:nth-child(6), td:nth-child(6) { width: 14%; } 
    th:nth-child(7), td:nth-child(7) { width: 6%; display: none; } 

    /*tr:hover {
        background-color: #e7edf7;
        color: #fff;
        cursor: pointer;
    }*/

    .tabla-form tr:hover{
        background-color: #f4ffff;
    }

    

    .tabla-form-cli tr:hover{
        background-color: rgb(240 255 240);
        color: #000000;
    }

    .tabla-form-vehi tr:hover{
        background-color: rgb(245 239 240);
        color: #000000;
    }

    .form-modal{
        width: 46%;
        height: 85px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        align-items: center;
        align-content: center;
    }

    .modal {
        display: none; /* Ocultar la ventana modal por defecto */
        position: fixed; /* Posición fija */
        z-index: 3; /* Colocar sobre otros elementos */
        left: 0;
        top: 0;
        width: 100%; /* Ancho completo */
        height: 100%; /* Altura completa */
        /*background-color: rgb(0,0,0);  Color de fondo */
        background-color: rgba(0,0,0,0.4); /* Negro con opacidad */
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
        transition: 300ms ease-in-out;
    }

    .modal .main {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 0px;
        /*border: 1px solid #888;*/
        width: 90%;
        max-width: 1100px;
        border-radius: 10px;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 15px 15px;
        /*background: #000000;*/
        color: #fff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .header-cliente{
        background: #1f791e;
    }

    .header-vehiculo{
        background: rgb(167, 38, 56);
    }

    .modal-body {
        padding: 20px 15px;
    }

    .modal-footer {
        border-top: 1px solid #ddd;
        padding: 15px 15px;
        text-align: right;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .btn-acepta, .btn-cancelar{
        height: 30px;
        width: 15%;
        border: none;
        background: #000;
        color: #fff;
        border-radius: 8px;
        cursor: pointer;
    }

    .btn-acepta:hover, .btn-cancelar:hover{
        background: #514d4d;
        color: #fff;
    }

    /* Estilos para el botón de cerrar */
    .modal-header .close, .modal-header .closeCli {
        color: #ffffff;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover, .closeCli:hover,
    .close:focus, .closeCli:focus {
        color: rgb(0 0 0);
        text-decoration: none;
        cursor: pointer;
    }

    #buscadorTabla, #buscadorTablaVehi {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    input{
        outline: none;
    }

    .tabla-form-vehi table::-webkit-scrollbar{
        width: 15px;
    }

    .tabla-form-vehi table::-webkit-scrollbar-track{
        background:rgb(123, 152, 196);
        border-radius: 50px;
    }

    .tabla-form-vehi table::-webkit-scrollbar-thumb{
        background:rgb(185, 185, 185);
        border-radius: 50px;
    }

    .tabla-form-cli table::-webkit-scrollbar{
        width: 15px;
    }

    .tabla-form-cli table::-webkit-scrollbar-track{
        background:rgb(123, 152, 196);
        border-radius: 50px;
    }

    .tabla-form-cli table::-webkit-scrollbar-thumb{
        background:rgb(185, 185, 185);
        border-radius: 50px;
    }

    /* Personaliza el scrollbar en Chrome, Edge y Safari */
    .tabla-form table::-webkit-scrollbar{
        width: 15px;
    }

    .tabla-form table::-webkit-scrollbar-track{
        background:rgb(123, 152, 196);
        border-radius: 50px;
    }

    .tabla-form table::-webkit-scrollbar-thumb{
        background:rgb(185, 185, 185);
        border-radius: 50px;
    }


    input:focus {
        border: 1px solid #007bff; /* Cambia el color del borde cuando se enfoca */
    }

    .icono-seleccion i {
        font-size: 1.5rem;
        cursor: pointer;
        transition: color 0.3s;
    }

    .fa-check-circle {
        color: green;
    }

    .fa-times-circle {
        color: red;
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

    .input-container {
        position: relative;
        display: flex;
        align-items: center;
        width: 32%; /* Ajusta según el diseño */
    }

    .input-container input {
        width: 100%;
        padding-left: 40px; /* Espacio para el ícono */
        height: 30px;
        border: 1px solid;
        border-radius: 8px;
    }

    .input-container button {
        position: absolute;
        left: 10px; /* Ajusta para alinear bien */
        background: none;
        border: none;
        cursor: pointer;
        font-size: 18px;
        color: #555;
    }

    .input-container button i {
        font-size: 18px;
    }

    .pdf-car{
        display: flex;
        flex-wrap: wrap;
        align-content: flex-end;
        justify-content: flex-start;
        color: #000;
        flex-direction: row;
        align-items: center;
        padding: 10px 20px;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 13px;
        font-weight: <weight>;
        font-style: normal;
        gap: 10px;
    }

    .form-cliente{
        width: 51%;
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .form-cliente label {
        width: 38%;
    }

    .file-adjunta{
        width: 68%;
        height: 92px;
        display: flex;
    }
    .file-adjunta label{
        display: flex;
        width: 100%;
        height: 48px;
        justify-content: center;
        align-items: center;
    }

    .file-upload {
      background-color: #f3f4f6;
      padding: 20px;
      border: 2px dashed #d1d5db;
      border-radius: 12px;
      text-align: center;
      position: relative;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .file-upload.dragover {
      background-color: #e5e7eb;
      border-color: #2563eb;
    }

    input[type="file"] {
      display: none;
    }

    .file-info {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
        gap: 5px;
        left: 0px;
        position: relative;
    }

    .file-info img {
      width: 32px;
    }

    .file-info span {
      font-size: 12px;
      color: #374151;
    }

    .remove-file {
      background-color: #ef4444;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      cursor: pointer;
    }

    .remove-file:hover {
      background-color: #dc2626;
    }

    .add-action {
        --color: #fff;
        --background: #166581;
        --background-hover: #16799d;
        --background-left: #2B3044;
        --trash: #F3E9CB;
        --trash-inner: #BEB393;
        --paper: #FFFFFF;
        --paper-lines: #BBC1E1;
        --paper-behind: #E1E6F9;
        --broom-handle: #A67855;
        --broom-bristles: #FFC107;
        --shadow: rgba(13, 15, 25, .2);
        width: 300px;
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 500;
        line-height: 19px;
        -webkit-appearance: none;
        -webkit-tap-highlight-color: transparent;
        padding: 17px 29px 17px 69px;
        transition: background .3s;
        color: var(--color);
        background: var(--bg, var(--background));
    }

    .add-action > div {
        top: 0;
        left: 0;
        bottom: 0;
        width: 53px;
        position: absolute;
        overflow: hidden;
        border-radius: 10px 0 0 10px;
        background: #0b3747;
    }

    .add-action .trash {
        width: 23px;
        height: 27px;
        position: absolute;
        left: 15px;
        top: 13px;
    }

    .add-action .trash-top {
        left: 0;
        top: 0;
        z-index: 2;
        position: absolute;
        transform: translateX(var(--fx, 0));
        transition: transform .4s ease var(--fd, .3s);
    }

    .add-action .trash-top svg {
        width: 24px;
        height: 27px;
        display: block;
        fill: var(--trash);
        transform-origin: 0 50%;
        transition: transform .3s ease var(--fds, .45s);
        transform: perspective(120px) rotateY(var(--fr, 0deg));
    }

    .add-action .broom {
        height: 5px;
        width: 50px;
        position: absolute;
        top: 8px;
        left: 112%;
        z-index: 3;
        background: var(--broom-handle);
        transform-origin: 50% 50%;
        transform: translateX(var(--broom-x, 0)) rotate(-30deg);
        transition: transform .4s ease var(--fd, 0s);
    }

    .add-action .broom:before {
        content: '';
        position: absolute;
        top: 1px;
        left: -10px;
        width: 15px;
        height: 5px;
        background: var(--broom-bristles);
        transform: rotate(45deg);
        border-radius: 2px;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
    }

    .add-action .paper-clear {
        --l: 1px;
        --t: 1px;
        --w: 21px;
        --h: 25px;
        --b: var(--paper-behind);
        content: '';
        position: absolute;
        left: var(--l, 0);
        top: var(--t, 0);
        width: var(--w, 100%);
        height: var(--h, 100%);
        border-radius: 1px;
        background: var(--b);
        z-index: 1;
        transition: transform .4s ease var(--fd, .15s);
        transform: translate(var(--paper-x, 0), var(--paper-y, 0));
    }

    .add-action:hover {
        --bg: var(--background-hover);
        --fx: -40px;
        --fr: -60deg;
        --fd: .15s;
        --fds: 0s;
        --broom-x: -25px;
        --paper-x: 3px;
        --paper-y: -3px;
    }

    .continue-application {
        --color: #fff;
        --background: #477023;
        --background-hover: #6E8649;
        --background-left: #2B3044;
        --folder: #F3E9CB;
        --folder-inner: #BEB393;
        --paper: #FFFFFF;
        --paper-lines: #BBC1E1;
        --paper-behind: #E1E6F9;
        --pencil-cap: #fff;
        --pencil-top: #275EFE;
        --pencil-middle: #fff;
        --pencil-bottom: #5C86FF;
        --shadow: rgba(13, 15, 25, .2);
        width: 300px;
        border: none;
        outline: none;
        cursor: pointer;
        position: relative;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 500;
        line-height: 19px;
        -webkit-appearance: none;
        -webkit-tap-highlight-color: transparent;
        padding: 17px 29px 17px 69px;
        transition: background .3s;
        color: var(--color);
        background: var(--bg, var(--background));
        & > div {
            top: 0;
            left: 0;
            bottom: 0;
            width: 53px;
            position: absolute;
            overflow: hidden;
            border-radius: 10px 0 0 10px;
            background: #2a4710; /*var(--background-left);*/
            .folder {
                width: 23px;
                height: 27px;
                position: absolute;
                left: 15px;
                top: 13px;
                .top {
                    left: 0;
                    top: 0;
                    z-index: 2;
                    position: absolute;
                    transform: translateX(var(--fx, 0));
                    transition: transform .4s ease var(--fd, .3s);
                    svg {
                        width: 24px;
                        height: 27px;
                        display: block;
                        fill: var(--folder);
                        transform-origin: 0 50%;
                        transition: transform .3s ease var(--fds, .45s);
                        transform: perspective(120px) rotateY(var(--fr, 0deg));
                    }
                }
                &:before,
                &:after,
                .paper {
                    content: '';
                    position: absolute;
                    left: var(--l, 0);
                    top: var(--t, 0);
                    width: var(--w, 100%);
                    height: var(--h, 100%);
                    border-radius: 1px;
                    background: var(--b, var(--folder-inner));
                }
                &:before {
                    box-shadow: 0 1.5px 3px var(--shadow), 0 2.5px 5px var(--shadow), 0 3.5px 7px var(--shadow);
                    transform: translateX(var(--fx, 0));
                    transition: transform .4s ease var(--fd, .3s);
                }
                &:after,
                .paper {
                    --l: 1px;
                    --t: 1px;
                    --w: 21px;
                    --h: 25px;
                    --b: var(--paper-behind);
                }
                &:after {
                    transform: translate(var(--pbx, 0), var(--pby, 0));
                    transition: transform .4s ease var(--pbd, 0s);
                }
                .paper {
                    z-index: 1;
                    --b: var(--paper);
                    &:before,
                    &:after {
                        content: '';
                        width: var(--wp, 14px);
                        height: 2px;
                        border-radius: 1px;
                        transform: scaleY(.5);
                        left: 3px;
                        top: var(--tp, 3px);
                        position: absolute;
                        background: var(--paper-lines);
                        box-shadow: 0 12px 0 0 var(--paper-lines), 0 24px 0 0 var(--paper-lines);
                    }
                    &:after {
                        --tp: 6px;
                        --wp: 10px;
                    }
                }
            }
            .pencil {
                height: 2px;
                width: 3px;
                border-radius: 1px 1px 0 0;
                top: 8px;
                left: 105%;
                position: absolute;
                z-index: 3;
                transform-origin: 50% 19px;
                background: var(--pencil-cap);
                transform: translateX(var(--pex, 0)) rotate(35deg);
                transition: transform .4s ease var(--pbd, 0s);
                &:before,
                &:after {
                    content: '';
                    position: absolute;
                    display: block;
                    background: var(--b, linear-gradient(var(--pencil-top) 55%, var(--pencil-middle) 55.1%, var(--pencil-middle) 60%, var(--pencil-bottom) 60.1%));
                    width: var(--w, 5px);
                    height: var(--h, 20px);
                    border-radius: var(--br, 2px 2px 0 0);
                    top: var(--t, 2px);
                    left: var(--l, -1px);
                }
                &:before {
                    clip-path: polygon(0 5%, 5px 5%, 5px 17px, 50% 20px, 0 17px);
                }
                &:after {
                    --b: none;
                    --w: 3px;
                    --h: 6px;
                    --br: 0 2px 1px 0;
                    --t: 3px;
                    --l: 3px;
                    border-top: 1px solid var(--pencil-top);
                    border-right: 1px solid var(--pencil-top);
                }
            }
        }
        &:before,
        &:after {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            border-radius: 1px;
            background: var(--color);
            transform-origin: 9px 1px;
            transform: translateX(var(--cx, 0)) scale(.5) rotate(var(--r, -45deg));
            top: 26px;
            right: 16px;
            transition: transform .3s;
        }
        &:after {
            --r: 45deg;
        }
        &:hover {
            --cx: 2px;
            --bg: var(--background-hover);
            --fx: -40px;
            --fr: -60deg;
            --fd: .15s;
            --fds: 0s;
            --pbx: 3px;
            --pby: -3px;
            --pbd: .15s;
            --pex: -24px;
        }
    }

    
    .butto-form{
        padding: 10px 20px;
        display: flex;
        gap: 10px;
        flex-direction: row;
    }

    tbody th:nth-child(1) input, tbody td:nth-child(1) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }

    tbody th:nth-child(2) input, tbody td:nth-child(2) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }

    tbody th:nth-child(3) input, tbody td:nth-child(3) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }

    tbody th:nth-child(4) input, tbody td:nth-child(4) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }

    tbody th:nth-child(5) input, tbody td:nth-child(5) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }
    tbody th:nth-child(6) input, tbody td:nth-child(6) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }

    tbody th:nth-child(7) input, tbody td:nth-child(7) input{
        width: 100%;
        height: 25px;
        text-align: center;
    }
     
/*aquiiii
    #c {
  display: none;
}

#upload_app {
  display: block;
  top: 50%;
  right: 0;
  left: 0;
  margin: 0 auto;
  width: 120px;
  height: 42px;
  transform: translateY(-50%);
  transition: 0.3s ease width;
  cursor: pointer;
}

#app {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: #fff;
  border: 2px solid #143240;
  overflow: hidden;
  z-index: 2;
}

#app:before {
  content: "Agregar";
  position: absolute;
  top: 0;
  right: 0;
  padding: 12px;
  left: 0;
  color: #143240;
  font-size: 14px;
  line-height: 14px;
  font-weight: bold;
  z-index: 1;
}

#arrow {
  position: absolute;
  top: 0;
  right: 0;
  width: 38px;
  height: 38px;
  background-color: #fff;
  z-index: 2;
}

#arrow:before,
#arrow:after {
  content: "";
  position: absolute;
  top: 18px;
  width: 10px;
  height: 2px;
  background-color: #143240;
}

#arrow:before {
  right: 17px;
  transform: rotateZ(-45deg);
}

#arrow:after {
  right: 11px;
  transform: rotateZ(45deg);
}

#success {
  position: absolute;
  top: 0;
  right: 0;
  width: 54px;
  height: 54px;
  margin: -8px;
  background-color: #143240;
  transform: scale(0);
  border-radius: 50%;
  z-index: 3;
}

#success i {
  font-size: 20px;
  color: #fff;
  display: block;
  width: 20px;
  height: 20px;
  margin: 17px auto;
  transform: scale(0);
}

#c:checked + #upload_app {
  width: 42px;
}

#c:checked + #upload_app #arrow:before {
  animation: _a 0.4s ease 0.4s forwards, _incHeight 4s ease 1s forwards;
}

#c:checked + #upload_app #arrow:after {
  animation: _b 0.4s ease 0.4s forwards, _incHeight 4s ease 1s forwards;
}

#c:checked + #upload_app #success {
  animation: _success 0.4s cubic-bezier(0, 0.74, 0.32, 1.21) 5s forwards;
}

#c:checked + #upload_app #success i {
  animation: _success 0.3s cubic-bezier(0, 0.74, 0.32, 1.21) 5.2s forwards;
}

@keyframes _a {
  0% {
    top: 18px;
    right: 17px;
    width: 10px;
    transform: rotateZ(-45deg);
    background-color: #143240;
  }
  100% {
    top: 36px;
    right: 19px;
    width: 19px;
    transform: rotateZ(0deg);
    background-color: #ffc107;
  }
}

@keyframes _b {
  0% {
    top: 18px;
    right: 11px;
    width: 10px;
    transform: rotateZ(45deg);
    background-color: #143240;
  }
  100% {
    top: 36px;
    right: 0;
    width: 19px;
    transform: rotateZ(0deg);
    background-color: #ffc107;
  }
}

@keyframes _incHeight {
  0% {
    top: 36px;
    height: 2px;
  }
  25% {
    top: 31px;
    height: 8px;
  }
  50% {
    top: 21px;
    height: 18px;
  }
  80% {
    top: 11px;
    height: 28px;
  }
  100% {
    top: 0;
    height: 39px;
  }
}

@keyframes _success {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}

/*aquiiii*/

    .cbo-form-cliente{
        height: 30px;
        border-radius: 5px;
        width: 32%;
        position: relative;
        
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 13px;
        font-weight: <weight>;
        font-style: normal;
    }

    @media screen and (max-height: 950px){
        .modal .main {
            margin: 5% auto;
        }
    }


    @media screen and (max-width: 1669px){
        .contenedor{
            width: 100%;
        }    
        .btn-vehi {
            width: 14%;
        }   
        td:nth-child(2) {
            width: 15%;
        }
    }

    @media screen and (max-width: 1250px){
        .form-cliente {
            width: 51%;
        }
    }

    @media screen and (max-width: 1212px){
        button {
            width: 33% !important;
        }
    }

    @media screen and (max-width: 1000px){
        .leasing-adenda input {
            width: 67%;
        }   
        
        .form-modal {
            width: 10%;
        }
        
        .btn-vehi {
            width: 100%;
        }

        .input-container{
            width: 67%;
        }

        .input-container input{
            width: 100%;
        }

        .form-cliente label {
            width: 20%;
        }

        .file-adjunta {
            width: 76%;
        }

        .form-cliente {
            width: 87%;
        }

        .file-adjunta label{
            width: 89%;
        }

        .cbo-form-cliente{
            width: 67%;
        }

        .add-action, .continue-application{
            width: 200px;
        }
    }

    @media screen and (max-width: 860px){
        .leasing-adenda {
            display: flex;
            justify-content: flex-start;
            color: #000;
            flex-direction: column;
            padding: 10px 20px;
            font-family: "Montserrat", serif;
            font-optical-sizing: auto;
            font-size: 13px;
            font-weight: <weight>;
            font-style: normal;
            gap: 10px;
        }

        .leasing-adenda input {
            width: 100%;
        }

        .leasing-adenda label {
            width: 100%;
        }

        .form-modal {
            width: 24%;
            padding-top: 10px;
        }

        .input-container{
            width: 100%;
        }

        .adjunto-pdf {
            width: 70%;
            display: flex;
            flex-direction: column;
            align-content: flex-start;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .form-cliente label {
            width: 90%;
        }

        .file-adjunta {
            width: 100%;
        }

        .file-adjunta label {
            width: 80%;
        }

        .contenedor{
            width: 100%;
        }

        .cbo-form-cliente{
            width: 100%;
        }
    }
    
    @media screen and (max-width: 800px){
        #preloader{
            left: 0;
            width: 100%;
            height: calc(100% - 60px);
        }

        .add-action, .continue-application{
            width: 100% !important;
        }

        .butto-form{
            display: flex;
            gap: 10px;
            flex-direction: column;
        }
    }

    .modal-pdf {
  display: none;
  position: fixed;
  z-index: 9999;
  padding-top: 60px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.7);
}

.modal-content-pdf {
  margin: auto;
  background: #fff;
  padding: 20px;
  width: 80%;
  max-width: 800px;
  border-radius: 8px;
  position: relative;
}

.close-modal-pdf {
  color: #aaa;
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close-modal-pdf:hover {
  color: #000;
}

.view-file {
  margin-right: 8px;
  cursor: pointer;
  background: none;
  border: none;
  font-size: 27px;
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
<div id="notification" class="hidden"></div>
<main>
    <div class="contenedor">
        <div class="regis-form-leasing">
            <div class="leasing-tittle">
                <div class="tittle-h3">
                    <h3>Registrar Leasing</h3>
                </div>
            </div>
            <div class="form-cuerpo">
                <div class="leasing-adenda">
                    <label>Cliente</label>
                    <div class="input-container">
                        <input type="text" id="inputClienteSeleccionado" placeholder="Selecciona el cliente" readonly>
                        <button id="openModalCli" class="btn-busca tooltip-input" data-tooltip="Selecciona el cliente">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
                <div class="leasing-adenda">
                    <label>N° de leasing</label>
                    <input type="text" placeholder="" id="NroLeasing" class="tooltip-input" data-tooltip="Numero del leasing">
                </div>
                <div class="leasing-adenda">
                    <label for="combo-box">Contratos</label>
                    <select id="combo-box-asig" name="opciones" class="cbo-form-cliente tooltip-input" data-tooltip="Selecciona el contrato" style="text-align: center;">
                        <option value="">Seleccione un contrato</option>
                    </select>
                    <!--<label>Contratos</label>
                    <select id="banco" name="opciones" class="cbo-form-cliente tooltip-input" data-tooltip="Selecciona un contrato" style="text-align: center;">
                        <option value="">Seleccione un contrato</option>
                    </select>-->
                </div>
                <div class="leasing-adenda">
                    <label>Banco</label>
                    <select id="banco" name="opciones" class="cbo-form-cliente tooltip-input" data-tooltip="Selecciona el banco" style="text-align: center;">
                        <option value="">Seleccione un banco</option>
                        <option value="1">BANBIF</option>
                        <option value="2">BBVA</option>
                        <option value="3">BCP</option>
                        <option value="4">HSBC</option>
                        <option value="5">INTERBANK</option>
                        <option value="6">SCOTIABANK</option>
                        <option value="7">TAIR</option>
                        <option value="8">SANTANDER</option>
                    </select>
                </div>
                <div class="leasing-adenda">
                    <label>Cant. Vehiculos</label>
                    <input type="text" placeholder="" id="cantVehi" class="tooltip-input" data-tooltip="Cantidad de unidades adquiridas">
                </div>
                <div class="leasing-adenda">
                    <label>Fecha Inicio</label>
                    <input type="date" placeholder="" id="fechaIni" class="tooltip-input" data-tooltip="Fecha inicio del leasing">
                </div>
                <div class="leasing-adenda">
                    <label>Fecha Fin</label>
                    <input type="date" placeholder="" id="fechaFin" class="tooltip-input" data-tooltip="Fecha fin del leasing">
                </div>
                <div class="leasing-adenda">
                    <label>Periodo de Gracia</label>
                    <input type="text" placeholder="" id="periGracia" class="tooltip-input" data-tooltip="Periodo de gracia en meses">
                </div>
                <div class="pdf-car">
                    <div class="form-cliente adjunto-pdf">
                        <label for="combo-box">Adjuntar PDF:</label>
                        <div class="file-adjunta">
                            <label class="file-upload tooltip-input" id="dropZone" data-tooltip="Arrastra o pega aqui tu excel">
                                <span id="uploadMessage">Haz clic o arrastra un archivo aquí</span>
                                <input type="file" id="fileInput" accept=".pdf">
                                <div class="file-info" id="fileInfo"><i class="fa fa-money"></i>
                                    <img src="https://img.icons8.com/color/48/000000/pdf.png" alt="PDF Icon">
                                    <span id="fileName"></span>
                                    <button class="view-file" id="viewFile">👁️</button>
                                    <button class="remove-file" id="removeFile">X</button>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="form-modal cart-dos">
                        <button id="openModal" class="btn-vehi cart-dos tooltip-input" data-tooltip="Selecciona las unidades adquiridas"> <strong><i class="fa-solid fa-plus"></i> Vehiculos </strong><img src="../img/car-wash.png" alt="Freepik" width="30" height="30" style="position: relative; top: 01px;"></button>
                    </div>
                </div>
                <div class="form-seven">
                    <div class="tabla-form">
                        <table id="tablaSeleccionados">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>ID</th>
                                    <th>Modelo</th>
                                    <th>Tipo terreno</th>
                                    <th>Placa</th>
                                    <th>Codini</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>

                            <!--<tbody>
                            </tbody>-->
                            <tbody id="contratos-tbody" class="table-detalle">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="butto-form">
                    <!--<input type="checkbox" id="c">
                    <label for="c" id="upload_app">
                        <div id="app">
                            <div id="arrow"></div>
                            <div id="success">
                            <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                    </label>-->
                    <button class="add-action" onclick="limpiarCampos()">
                        <div>
                            <div class="broom"></div>
                            <div class="trash">
                                <div class="trash-top">
                                    <svg viewBox="0 0 24 27">
                                        <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                                    </svg>
                                </div>
                                <div class="paper-clear"></div>
                            </div>
                        </div>
                        Limpiar
                    </button>
                    <button class="continue-application" onclick="guardaLeasing()">
                        <div>
                            <div class="pencil"></div>
                            <div class="folder">
                                <div class="top">
                                    <svg viewBox="0 0 24 27">
                                        <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                                    </svg>
                                </div>
                                <div class="paper"></div>
                            </div>
                        </div>
                        Grabar
                    </button>
                    <button class="add-action" onclick="asignacionVehicular()">
                        <div>
                            <div class="broom"></div>
                            <div class="trash">
                                <div class="trash-top">
                                    <svg viewBox="0 0 24 27">
                                        <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                                    </svg>
                                </div>
                                <div class="paper-clear"></div>
                            </div>
                        </div>
                        Asignacion
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="myModalCli" class="modal">
        <div class="main">
            <!-- Header del modal -->
            <div class="modal-header header-cliente">
                <h3>Listado de clientes</h3>
                <span class="closeCli">&times;</span> <!-- Botón de cerrar -->
            </div>

            <!-- Body del modal -->
            <div class="modal-body">
                <div class="buscador" style="padding: 10px 25px; color: #000000;">
                    <label for="buscadorTabla">Buscar Cliente:</label>
                    <input type="text" id="buscadorTabla" placeholder="Ingrese un término...">
                </div>
                <div class="form-seven">
                    <div class="tabla-form-cli">
                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>RUC</th>
                                    <th>Cliente</th>
                                    <th>Direccion</th>
                                    <th>ID</th>
                                    <th>Abrev.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6">Seleccione un cliente para ver los contratos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer del modal -->
            <div class="modal-footer">
                <!--<button class="btn-acepta" id="btnAceptar">Aceptar</button>
                <button class="btn-cancelar" id="btnCancelar">Cancelar</button>-->
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <!-- Contenido de la ventana modal -->
        <div class="main">
            <!-- Header del modal -->
            <div class="modal-header header-vehiculo">
                <h3>Listado de Vehiculos</h3>
                <span class="close">&times;</span> <!-- Botón de cerrar -->
            </div>

            <!-- Body del modal -->
            <div class="modal-body">
                <div class="buscador" style="padding: 10px 25px; color: #000;">
                    <label for="buscadorTabla">Buscar Vehiculo:</label>
                    <input type="text" id="buscadorTablaVehi" placeholder="Ingrese un término...">
                </div>
                <div class="form-seven">
                    <div class="tabla-form-vehi">
                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Codini</th>
                                    <th>Placa</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Generico</th>
                                    <th>Tipo Terreno</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7">Seleccione un vehiculo para ver los contratos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer del modal -->
            <div class="modal-footer">
                <!--<button class="btn-acepta" id="btnVehiculo">Aceptar</button>
                <button class="btn-cancelar">Cancelar</button>-->
            </div>
        </div>
    </div>
    <div id="pdfModal" class="modal-pdf">
        <div class="modal-content-pdf">
            <span class="close-modal-pdf" id="closeModal">&times;</span>
            <iframe id="modalPdfViewer" width="100%" height="500px"></iframe>
        </div>
    </div>
</main>

    <script>
        function asignacionVehicular() {
            window.location = 'adicionar_vehiculos.php';
        };
    </script>
    <script type="module">
        
        const inputs = document.querySelectorAll(".tooltip-input");
        const tooltip = document.createElement("div");

        tooltip.style.position = "fixed";  // Se mueve con el cursor
        tooltip.style.background = "black";
        tooltip.style.color = "white";
        tooltip.style.padding = "5px 10px";
        tooltip.style.borderRadius = "5px";
        tooltip.style.fontSize = "12px";
        tooltip.style.display = "none";
        tooltip.style.opacity = "0";
        tooltip.style.transition = "opacity 0.2s ease-in-out";
        tooltip.style.zIndex = "1000";
        tooltip.style.whiteSpace = "nowrap";
        document.body.appendChild(tooltip);

        inputs.forEach(input => {
            input.addEventListener("mouseenter", function (event) {
                const tooltipText = input.getAttribute("data-tooltip");
                if (!tooltipText) return;

                tooltip.textContent = tooltipText;
                tooltip.style.display = "block";
                tooltip.style.opacity = "1";
            });

            input.addEventListener("mousemove", function (event) {
                let x = event.clientX + 10; // 10px de margen a la derecha del cursor
                let y = event.clientY + 10; // 10px abajo del cursor

                // Evitar que el tooltip se salga de la pantalla
                if (x + tooltip.offsetWidth > window.innerWidth) {
                x = event.clientX - tooltip.offsetWidth - 10; // Lo mueve a la izquierda si no cabe
                }
                if (y + tooltip.offsetHeight > window.innerHeight) {
                y = event.clientY - tooltip.offsetHeight - 10; // Lo sube si no cabe abajo
                }

                tooltip.style.left = `${x}px`;
                tooltip.style.top = `${y}px`;
            });

            input.addEventListener("mouseleave", function () {
                tooltip.style.opacity = "0";
                setTimeout(() => {
                tooltip.style.display = "none";
                }, 200);
            });
        });

        /* window.onload = function() {
            setTimeout(() => {
                document.body.classList.add('loaded');
                document.getElementById('preloader').style.display = 'none';
            }, 2000); 
        };*/

        const modal = document.getElementById("myModal");
        const btn = document.getElementById("openModal");
        const span = document.getElementsByClassName("close")[0];

        // Abrir la ventana modal al hacer clic en el botón
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Cerrar la ventana modal al hacer clic en la "x"
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Cerrar la ventana modal al hacer clic fuera de ella
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        const modalCli = document.getElementById("myModalCli");
        const btnCli = document.getElementById("openModalCli");
        const spanCli = document.getElementsByClassName("closeCli")[0];

        // Abrir la ventana modal al hacer clic en el botón
        btnCli.onclick = function() {
            modalCli.style.display = "block";
        }

        // Cerrar la ventana modal al hacer clic en la "x"
        spanCli.onclick = function() {
            modalCli.style.display = "none";
        }

        // Cerrar la ventana modal al hacer clic fuera de ella
        window.onclick = function(event) {
            if (event.target == modalCli) {
                modalCli.style.display = "none";
            }
        }

        const fileInput = document.getElementById('fileInput');
        const dropZone = document.getElementById('dropZone');
        const fileInfo = document.getElementById('fileInfo');
        const fileNameDisplay = document.getElementById('fileName');
        const uploadMessage = document.getElementById('uploadMessage');
        const removeFileButton = document.getElementById('removeFile');

        window.onload = function () {
            setTimeout(() => {
                document.body.classList.add('loaded');
                document.getElementById('preloader').style.display = 'none';
            }, 2000);
            fileInfo.style.display = 'none'; // Asegúrate de que la información del archivo no aparezca.
            uploadMessage.style.display = 'block'; // Muestra el mensaje inicial.
            fileInput.value = ''; // Limpia el campo de archivo si existe algo previamente.
        };
        // Mostrar nombre del archivo al seleccionar
        fileInput.addEventListener('change', handleFile);

        // Eventos para drag and drop
        dropZone.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', (event) => {
            event.preventDefault();
            dropZone.classList.remove('dragover');

            const file = event.dataTransfer.files[0];
            if (file) {
                fileInput.files = event.dataTransfer.files; // Asignar archivo al input
                handleFile();
            }
        });

        // Mostrar archivo y cambiar el contenido visual
        function handleFile() {
            const file = fileInput.files[0];
            if (file) {
                uploadMessage.style.display = 'none'; // Ocultar mensaje de carga
                fileInfo.style.display = 'flex'; // Mostrar el área con el archivo
                fileNameDisplay.textContent = truncateFileName(file.name); // Mostrar el nombre truncado del archivo
            }
        }


        const viewFileButton = document.getElementById('viewFile');
        const pdfModal = document.getElementById('pdfModal');
        const modalPdfViewer = document.getElementById('modalPdfViewer');
        const closeModal = document.getElementById('closeModal');

        // Evento para abrir el modal con vista previa
        viewFileButton.addEventListener('click', () => {
            const file = fileInput.files[0];
            if (file && file.type === 'application/pdf') {
                const fileURL = URL.createObjectURL(file);
                modalPdfViewer.src = fileURL;
                pdfModal.style.display = 'block';
            }
        });

        // Cerrar modal
        closeModal.addEventListener('click', () => {
            pdfModal.style.display = 'none';
            modalPdfViewer.src = '';
        });

        // Cerrar modal al hacer clic fuera del contenido
        window.addEventListener('click', (event) => {
            if (event.target === pdfModal) {
                pdfModal.style.display = 'none';
                modalPdfViewer.src = '';
            }
        });


        // Función para truncar el nombre del archivo
        function truncateFileName(name) {
            const maxLength = 25;
            if (name.length <= maxLength) return name;

            const fileExtension = name.slice(name.lastIndexOf('.'));
            const truncatedName = name.slice(0, maxLength - fileExtension.length - 3);
            return truncatedName + '...' + fileExtension;
        }

        // Eliminar archivo seleccionado
        removeFileButton.addEventListener('click', () => {
            fileInput.value = ''; // Limpiar input
            fileInfo.style.display = 'none'; // Ocultar el área del archivo
            uploadMessage.style.display = 'block'; // Mostrar mensaje de carga
        });

        
    </script>
    <script src="../js/registrar_leasing.js"></script>
<?php
    require './templates/footer.html';
?>