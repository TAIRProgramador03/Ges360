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

    body.loaded .sidebar,
    body.loaded .home-section {
        display: block;
    }

    body:not(.loaded) .sidebar,
    body:not(.loaded) .home-section {
        display: none;
    }
</style>
<style>

    body{
        background: #f5f5f5;
        color: #b2b2bb;
    }

    main{
        align-content: center;
    }

    .contenedor{
        width: 100%;
        max-width: 1234px;
        margin: auto;
        padding: 40px 0;

        display: grid;
        grid-template-columns: 1fr auto;
        gap: 20px;
    }

    .form-col-1, .form-col-2{
        border-radius: 20px;
        --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        background: white;
    }

    .text{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .tittle-form-col{
        padding: 19px 2px;
        text-align: center;
        color: #fff;
        background: #0e2e67;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        align-content: center;
    }

    .cbo-form-col{
        padding: 10px 40px 0px 0px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        color: #000;
        align-items: center;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 14px;
        font-weight: <weight>;
        font-style: normal;
    }

    .cbo-form-cliente{
        width: 70%;
        height: 30px;
        border-radius: 8px;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 13px;
        font-weight: <weight>;
        font-style: normal;
    }


    .contenedor-col-1{
        display: grid;
        gap: 20px;
    }

    .text-form-col{
        padding: 20px 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        color: #000;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 14px;
        font-weight: <weight>;
        font-style: normal;
    }

    .text-form-col label{
        padding: 0 20px;
        width: 120px;
    }

    .resumen-form-contrato{
        height: 30px;
        padding-left: 10px;
        width: 220px;
        border-radius: 8px;
    }

    .contenedor-col-2{
        display: flex;
        flex-direction: column;
    }

    table {
        border-collapse: collapse;
        width: 100%; 
        display: block; 
        overflow-x: auto; 
        white-space: nowrap;
        color: #000; 
        padding: 10px 22px;
    }

    th, td {
        border: 1px solid #8d8d8d;
        padding: 8px 12px; 
        text-align: center; 
    }

    th {
        background-color: #0e2e67;
        color: white;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
    }

    td {
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 12px;
        font-weight: <weight>;
        font-style: normal;
    }

    .terreno-form{
        text-align: center;
        border: 1px solid;
        border-radius: 7px;
    }

    .cuadradro{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        width: 220px;
        gap: 10px;
    }

    .tdh{
        padding: 5px 0;
        font-size: 12px;
    }

    .cuadradro-form{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        width: 100%;
        color: #000;
    }

    .doc-form i{
        padding: 10px 0;
        font-size: 32px;
    }

    .tda{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tti-form{
        height: 50px;
        font-size: 12px;
    }

    .can-form{
        height: 100px;
        flex-direction: column;
    }

    th:nth-child(1), td:nth-child(1) { width: 10%; } 
    th:nth-child(2), td:nth-child(2) { width: 45%; } 
    th:nth-child(3), td:nth-child(3) { width: 19%; } 
    th:nth-child(4), td:nth-child(4) { width: 15%; } 
    th:nth-child(5), td:nth-child(5) { width: 15%; } 

    tr:hover {
        background-color: #e7edf7;
        color: #fff;
        cursor: pointer;
    }

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

    .area-text,
    textarea {
        font-size: 0.8rem;
        letter-spacing: 1px;
    }

    textarea {
        padding: 10px;
        max-width: 100%;
        line-height: 1.5;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-shadow: 1px 1px 1px #999;
    }

    .area-text {
        display: block;
        margin-bottom: 10px;
    }

    .nom-tp{
        background: #0e2e67;
        color: white;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
    }

    .salio-form{
        padding: 20px 20px;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        color: #000;
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 14px;
        font-weight: <weight>;
        font-style: normal;
        gap: 10px;
    }

    h3{
        font-family: "Montserrat", serif;
        font-optical-sizing: auto;
        font-size: 18px;
        font-weight: <weight>;
        font-style: normal;
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
        width: 100%;
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

    .clear-action {
        --color: #fff;
        --background: #BB8D3F;
        --background-hover: #d5a24b;
        --background-left: #2B3044;
        --trash: #F3E9CB;
        --trash-inner: #BEB393;
        --paper: #FFFFFF;
        --paper-lines: #BBC1E1;
        --paper-behind: #E1E6F9;
        --broom-handle: #A67855;
        --broom-bristles: #FFC107;
        --shadow: rgba(13, 15, 25, .2);
        width: 100%;
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

    .clear-action > div {
        top: 0;
        left: 0;
        bottom: 0;
        width: 53px;
        position: absolute;
        overflow: hidden;
        border-radius: 10px 0 0 10px;
        background: #9b7330;
    }

    .clear-action .trash {
        width: 23px;
        height: 27px;
        position: absolute;
        left: 15px;
        top: 13px;
    }

    .clear-action .trash-top {
        left: 0;
        top: 0;
        z-index: 2;
        position: absolute;
        transform: translateX(var(--fx, 0));
        transition: transform .4s ease var(--fd, .3s);
    }

    .clear-action .trash-top svg {
        width: 24px;
        height: 27px;
        display: block;
        fill: var(--trash);
        transform-origin: 0 50%;
        transition: transform .3s ease var(--fds, .45s);
        transform: perspective(120px) rotateY(var(--fr, 0deg));
    }

    .clear-action .broom {
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

    .clear-action .broom:before {
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

    .clear-action .paper-clear {
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

    .clear-action:hover {
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
        width: 100%;
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

    .continue-pen {
        --color: #fff;
        --background: #4a256b;
        --background-hover: #633090;
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
        width: 65%;
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
            background: #372647; /*var(--background-left);*/
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

    @media screen and (max-width: 1650px){
        .contenedor-col-2{
            width: 90%;
        }
        .cuadradro{
            width: 100%;
        }
        .resumen-form-contrato {
            width: 100%;
        }

        .text-form-col label {
            width: 50%;
        }
    }

    @media screen and (max-width: 1600px){
        .contenedor-col-1, .contenedor-col-2{
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .cbo-fomr-col{
            padding: 10px 0px 10px 0px;
        }
    
        ..tittle-form-col, .cbo-form-col{
            width: 100%;
        }

    }

    @media screen and (max-width: 1470px){
        .contenedor-col-1{
            width: 100%; /* Asegura que el contenedor ocupe todo el ancho disponible */
            overflow-x: hidden;
        }

        .tabla-form{
            width: 100%;
        }

        table {
            border-collapse: collapse;
            width: 100%; /* Hace que la tabla ocupe todo el ancho del contenedor */
            color: #000;
            padding: 10px 10px;
            overflow-x: auto; /* Asegura que el contenido se ajuste */
            white-space: nowrap; /* Evita que las celdas se envuelvan */
        }

        .cbo-form-cliente{
            width: 60%;
        }

        .cbo-form-col{
            padding: 10px 0px 10px 0px;
        }

        textarea {
            width: 60%; 
        }
    }

    @media screen and (max-width: 1280px){

        .continue-pen{
            width: 100%;
        }

        .cbo-form-cliente {
            width: 95%;
        }

        textarea {
            width: 90%;
        }

        .cbo-form-col {
            display: flex;
            flex-direction: column;
            padding: 10px 0px 0px 0px;
            width: 100%;
            align-content: space-around;
            flex-wrap: wrap;
            align-items: baseline;
        }

        .text-form-col {
            padding: 20px 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .text-form-col label {
            padding: 0 0px;
        }

        .resumen-form-contrato {
            width: 100%;
            padding-left: 0px;
        }

        .cuadradro {
            width: 100%;
        }

        .cuadradro-form{
            justify-items: stretch;
        }

        th:nth-child(2), td:nth-child(2) {
            width: 45%;
        }

        .btn-pend{
            width: 100%;
        }
    }

    @media screen and (max-width: 1230px){
        .cuadradro-form{
            display: flex;
            flex-direction: column;
        }

        .salio-form{
            width: 94%;
        }

        .tabla-form{
            width: 100%;
        }

        .tittle-form-col {
            padding-top: 30px;
            width: 100%;
        }

        .contenedor-col-1 {
            display: flex;
            gap: 0px;
            align-items: flex-start;
            justify-items: stretch;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .text-form-col {
            padding: 10px 20px;
        }

        .can-form {
            height: 70px;
            flex-direction: column;
        }

        .tti-form {
            height: 45px;
            font-size: 12px;
        }
    }

    @media screen and (max-width: 1100px){
        .contenedor{
            grid-template-columns: 1fr;
        }

        .cuadradro-form {
            display: grid;
        }

        .contenedor-col-2{
            width: 100%;
        }

        .btn-pend{
            width: 100%;
        }
    }

    @media screen and (max-width: 894px){
        .salio-form{
            padding: 20px 10px;
            flex-direction: column;
        }
    }

    @media screen and (max-width: 865px){
        .contenedor{
            width: 100%;
        }

        .cbo-form-col {
            width: 100%;
        }

        .contenedor-col-1, .contenedor-col-2{
            width: 95%;
        }

        table{
            align-content: center;
        }

        .tabla-form {
            width: 100%;
            /*left: 5px;
            position: relative;*/
        }
    }

    @media screen and (max-width: 800px){
        .contenedor-col-1, .contenedor-col-2{
            width: 100%;
        }

        #preloader{
            left: 0;
            width: 100%;
            height: calc(100% - 60px);
        }

        .salio-form{
            padding: 20px 6px;
            width: 97%;
        }
    }

    button:disabled{
        --background-hover: #4a256b;
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
    <div class="contenedor">
        <div class="form-col-1 contenedor-col-1">
            <div class="tittle-form-col">
                <h3>Administracion de Contratos</h3>
            </div>
            <div class="cbo-form-col">
                <label for="combo-box">Seleccione el Cliente:</label>
                <select id="combo-box" name="opciones" class="cbo-form-cliente"></select>
            </div>
            <div class="cbo-form-col">
                <label for="combo-box">Seleccione el Contrato:</label>
                <select id="combo-contrato" name="opciones" class="cbo-form-cliente"></select>
            </div>
            <div class="tabla-form">
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>N° contrato</th>
                            <th>Fecha Firma</th>
                            <th>Periodo</th>
                            <th>Cant total</th>
                        </tr>
                    </thead>
                    <tbody id="contratos-tbody">
                        <tr>
                            <td colspan="5">Seleccione un cliente para ver los contratos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cbo-form-col">
                <label for="combo-box area-text">Descripcion:</label>
                <textarea id="story" name="story" rows="2" cols="70" style="resize: none;" placeholder="" disabled ></textarea>
            </div>
            <div class="salio-form"> <!--text-form-col-->
                <button class="add-action" onclick="registrarContrato()">
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
                    Nuevo Doc.
                </button>
                <button class="continue-application" onclick="registrarDocumento()">
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
                    Doc. Asoc.
                </button>
                <button class="clear-action"  onclick="limpiarCampos()">
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
            </div>
        </div>
        <div class="form-col-2 contenedor-col-2">
            <div class="tittle-form-col">
                <h3>Resumen de Contrato</h3>
            </div>
            <div class="text-form-col">
                <label for="combo-box">Estado:</label>
                <input id="text-estado" name="estado" type="text" class="resumen-form-contrato" disabled >
            </div>
            <div class="text-form-col">
                <label for="combo-box">Fecha Ini:</label>
                <input id="text-inicio" name="inicio" type="text" class="resumen-form-contrato" disabled >
            </div>
            <div class="text-form-col">
                <label for="combo-box">Fecha Fin:</label>
                <input id="text-fin" name="fin" type="text" class="resumen-form-contrato" disabled >
            </div>
            <div class="text-form-col">
                <label for="combo-box tp-form">Tipo Terreno:</label>
                <div class="cuadradro">
                    <div class="card terreno-form">
                        <div class="tdh nom-tp">Sev.</div>
                        <hr>
                        <div class="tdh" id="txt-sev">0</div>
                    </div>
                    <div class="card terreno-form">
                        <div class="tdh nom-tp">Soc.</div>
                        <hr>
                        <div class="tdh" id="txt-soc">0</div>
                    </div>
                    <div class="card terreno-form">
                        <div class="tdh nom-tp">Sup.</div>
                        <hr>
                        <div class="tdh" id="txt-sup">0</div>
                    </div>
                    <div class="card terreno-form">
                        <div class="tdh nom-tp">Ciu.</div>
                        <hr>
                        <div class="tdh" id="txt-ciu">0</div>
                    </div>
                </div>
            </div>
            <div class="text-form-col">
                <div class="cuadradro-form">
                    <div class="card terreno-form doc-form">
                        <div class="tda tti-form nom-tp">N° Documentos</div>
                        <hr>
                        <div class="tda can-form"><i class="fa fa fa-sheet-plastic" style="color: #0e2e67;"></i><span id="txt-aso">0</span></div>
                    </div>
                    <div class="card terreno-form doc-form">
                        <div class="tda tti-form nom-tp">N° leasing</div>
                        <hr>
                        <div class="tda can-form"><i class="fa fa fa-book" style="color: #0e2e67;"></i><span id="txt-leas">0</span></div>
                    </div>
                    <div class="card terreno-form doc-form">
                        <div class="tda tti-form nom-tp">N° Vehiculos</div>
                        <hr>
                        <div class="tda can-form"><i class="fa fa-cars" style="color: #0e2e67;"></i><span id="txt-vehic">0</span></div>
                    </div>
                </div>
            </div>
            <div class="text-form-col">
                <button class="continue-pen" disabled>
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
                    Pendientes
                </button>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    window.onload = function() {
        setTimeout(() => {
            document.body.classList.add('loaded');
            document.getElementById('preloader').style.display = 'none';
        }, 2000); 
    };


    function registrarContrato() {
        window.location = 'registrar_contratos.php';
    };

    function registrarDocumento() {
        window.location = 'registrar_documentos.php';
    };
    /*document.getElementById('contratos-tbody').addEventListener('click', function (e) {
        // Verificar si se hace clic en una fila <tr>
        if (e.target.tagName.toLowerCase() === 'td') {
            const fila = e.target.closest('tr'); // Obtener la fila
            const estado = fila.querySelectorAll('td')[1].textContent.trim(); // Obtener el N° contrato
            document.getElementById('text-estado').value = estado; // Asignar valor al input
            const inicio = fila.querySelectorAll('td')[2].textContent.trim(); // Obtener el N° contrato
            document.getElementById('text-inicio').value = inicio; // Asignar valor al input
            const fin = fila.querySelectorAll('td')[3].textContent.trim(); // Obtener el N° contrato
            document.getElementById('text-fin').value = fin; // Asignar valor al input
            const comenta = fila.querySelectorAll('td')[1].textContent.trim(); // Obtener el N° contrato
            document.getElementById('story').value = comenta; // Asignar valor al input

            document.getElementById('txt-sev').textContent = "10"; // Asignar texto al div
            document.getElementById('txt-soc').textContent = "10"; // Asignar texto al div
            document.getElementById('txt-sup').textContent = "10"; // Asignar texto al div
            document.getElementById('txt-ciu').textContent = "10";
            document.getElementById('txt-aso').textContent = "10"; // Asignar texto al div
            document.getElementById('txt-leas').textContent = "10"; // Asignar texto al div
            document.getElementById('txt-vehic').textContent = "10";
        }
    });*/
</script>
<script src="../js/consulta_contratos.js"></script>
<?php
    require './templates/footer.html';
?>
