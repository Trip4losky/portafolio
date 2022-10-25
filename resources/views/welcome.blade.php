<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

        .fondoNav {
            background-color: coral
        }

        .ultimosProyectos {
            margin-top: 60px;
            text-align: center
        }

        .contenedor {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .elemento {
            width: 21%;
            margin: auto;
            margin-top: 50px;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div id="app">
        <nav class="navbar navbar-expand-lg fondoNav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Agustín Déniz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="justify-content-end navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgLjAyYy02LjYyNyAwLTEyIDUuMzczLTEyIDEyczUuMzczIDEyIDEyIDEyIDEyLTUuMzczIDEyLTEyLTUuMzczLTEyLTEyLTEyem02Ljk5IDYuOThsLTYuOTkgNS42NjYtNi45OTEtNS42NjZoMTMuOTgxem0uMDEgMTBoLTE0di04LjUwNWw3IDUuNjczIDctNS42NzJ2OC41MDR6Ii8+PC9zdmc+">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/agusdq/" target="_blank">
                            <img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTQuODI5IDYuMzAyYy0uNzM4LS4wMzQtLjk2LS4wNC0yLjgyOS0uMDRzLTIuMDkuMDA3LTIuODI4LjA0Yy0xLjg5OS4wODctMi43ODMuOTg2LTIuODcgMi44Ny0uMDMzLjczOC0uMDQxLjk1OS0uMDQxIDIuODI4cy4wMDggMi4wOS4wNDEgMi44MjljLjA4NyAxLjg3OS45NjcgMi43ODMgMi44NyAyLjg3LjczNy4wMzMuOTU5LjA0MSAyLjgyOC4wNDEgMS44NyAwIDIuMDkxLS4wMDcgMi44MjktLjA0MSAxLjg5OS0uMDg2IDIuNzgyLS45ODggMi44Ny0yLjg3LjAzMy0uNzM4LjA0LS45Ni4wNC0yLjgyOXMtLjAwNy0yLjA5LS4wNC0yLjgyOGMtLjA4OC0xLjg4My0uOTczLTIuNzgzLTIuODctMi44N3ptLTIuODI5IDkuMjkzYy0xLjk4NSAwLTMuNTk1LTEuNjA5LTMuNTk1LTMuNTk1IDAtMS45ODUgMS42MS0zLjU5NCAzLjU5NS0zLjU5NHMzLjU5NSAxLjYwOSAzLjU5NSAzLjU5NGMwIDEuOTg1LTEuNjEgMy41OTUtMy41OTUgMy41OTV6bTMuNzM3LTYuNDkxYy0uNDY0IDAtLjg0LS4zNzYtLjg0LS44NCAwLS40NjQuMzc2LS44NC44NC0uODQuNDY0IDAgLjg0LjM3Ni44NC44NCAwIC40NjMtLjM3Ni44NC0uODQuODR6bS0xLjQwNCAyLjg5NmMwIDEuMjg5LTEuMDQ1IDIuMzMzLTIuMzMzIDIuMzMzcy0yLjMzMy0xLjA0NC0yLjMzMy0yLjMzM2MwLTEuMjg5IDEuMDQ1LTIuMzMzIDIuMzMzLTIuMzMzczIuMzMzIDEuMDQ0IDIuMzMzIDIuMzMzem0tMi4zMzMtMTJjLTYuNjI3IDAtMTIgNS4zNzMtMTIgMTJzNS4zNzMgMTIgMTIgMTIgMTItNS4zNzMgMTItMTItNS4zNzMtMTItMTItMTJ6bTYuOTU4IDE0Ljg4NmMtLjExNSAyLjU0NS0xLjUzMiAzLjk1NS00LjA3MSA0LjA3Mi0uNzQ3LjAzNC0uOTg2LjA0Mi0yLjg4Ny4wNDJzLTIuMTM5LS4wMDgtMi44ODYtLjA0MmMtMi41NDQtLjExNy0zLjk1NS0xLjUyOS00LjA3Mi00LjA3Mi0uMDM0LS43NDYtLjA0Mi0uOTg1LS4wNDItMi44ODYgMC0xLjkwMS4wMDgtMi4xMzkuMDQyLTIuODg2LjExNy0yLjU0NCAxLjUyOS0zLjk1NSA0LjA3Mi00LjA3MS43NDctLjAzNS45ODUtLjA0MyAyLjg4Ni0uMDQzczIuMTQuMDA4IDIuODg3LjA0M2MyLjU0NS4xMTcgMy45NTcgMS41MzIgNC4wNzEgNC4wNzEuMDM0Ljc0Ny4wNDIuOTg1LjA0MiAyLjg4NiAwIDEuOTAxLS4wMDggMi4xNC0uMDQyIDIuODg2eiIvPjwvc3ZnPg==">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/agusddq" target="_blank">
                            <img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgMGgtMTRjLTIuNzYxIDAtNSAyLjIzOS01IDV2MTRjMCAyLjc2MSAyLjIzOSA1IDUgNWgxNGMyLjc2MiAwIDUtMi4yMzkgNS01di0xNGMwLTIuNzYxLTIuMjM4LTUtNS01em0tLjEzOSA5LjIzN2MuMjA5IDQuNjE3LTMuMjM0IDkuNzY1LTkuMzMgOS43NjUtMS44NTQgMC0zLjU3OS0uNTQzLTUuMDMyLTEuNDc1IDEuNzQyLjIwNSAzLjQ4LS4yNzggNC44Ni0xLjM1OS0xLjQzNy0uMDI3LTIuNjQ5LS45NzYtMy4wNjYtMi4yOC41MTUuMDk4IDEuMDIxLjA2OSAxLjQ4Mi0uMDU2LTEuNTc5LS4zMTctMi42NjgtMS43MzktMi42MzMtMy4yNi40NDIuMjQ2Ljk0OS4zOTQgMS40ODYuNDExLTEuNDYxLS45NzctMS44NzUtMi45MDctMS4wMTYtNC4zODMgMS42MTkgMS45ODYgNC4wMzggMy4yOTMgNi43NjYgMy40My0uNDc5LTIuMDUzIDEuMDgtNC4wMyAzLjE5OS00LjAzLjk0MyAwIDEuNzk3LjM5OCAyLjM5NSAxLjAzNy43NDgtLjE0NyAxLjQ1MS0uNDIgMi4wODYtLjc5Ni0uMjQ2Ljc2Ny0uNzY2IDEuNDEtMS40NDMgMS44MTYuNjY0LS4wOCAxLjI5Ny0uMjU2IDEuODg1LS41MTctLjQzOS42NTYtLjk5NiAxLjIzNC0xLjYzOSAxLjY5N3oiLz48L3N2Zz4=">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/agust%C3%ADn-d%C3%A9niz-quintana-7a76a81a0" target="_blank">
                            <img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMGMtNi42MjcgMC0xMiA1LjM3My0xMiAxMnM1LjM3MyAxMiAxMiAxMiAxMi01LjM3MyAxMi0xMi01LjM3My0xMi0xMi0xMnptLTIgMTZoLTJ2LTZoMnY2em0tMS02Ljg5MWMtLjYwNyAwLTEuMS0uNDk2LTEuMS0xLjEwOSAwLS42MTIuNDkyLTEuMTA5IDEuMS0xLjEwOXMxLjEuNDk3IDEuMSAxLjEwOWMwIC42MTMtLjQ5MyAxLjEwOS0xLjEgMS4xMDl6bTggNi44OTFoLTEuOTk4di0yLjg2MWMwLTEuODgxLTIuMDAyLTEuNzIyLTIuMDAyIDB2Mi44NjFoLTJ2LTZoMnYxLjA5M2MuODcyLTEuNjE2IDQtMS43MzYgNCAxLjU0OHYzLjM1OXoiLz48L3N2Zz4=">
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div>
        <h1 class="ultimosProyectos">Últimos proyectos</h1>
        <div class="contenedor">
                <div class="card elemento">
                    <a class="nav-link" href="https://rent-car.tripalosky.com/public/" target="_blank">
                    <img src="image\rent-car.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Rent Car</h5>
                      <p class="card-text">Rent Car es una página web sencilla de alquileres de coches, que está desarrollada con Laravel 8 y Bootstrap como tecnologías principales.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </a>
                </div>

            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card elemento">
                <img src="image\code-gd6ac7ba1d_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
