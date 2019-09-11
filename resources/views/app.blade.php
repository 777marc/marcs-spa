<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container px-8">

                <header class="py-6">
                    <h1>Marcs</h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5 pt-10">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">Main</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link to="/" exact>Home</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/posts">Posts</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/projects">Projects</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/contact">Contact</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/about">About</router-link></li>
                            </ul>
                        </section>
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">Admin</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link to="/login">Login</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>

            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
