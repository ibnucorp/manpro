
    <x-includes.head>
    {{ $title }}
    </x-includes.head>

<body>

    <x-includes.navbar>
    </x-includes.navbar>


    <div class="content">
    <x-includes.header>
    </x-includes.header>
        @yield('content')
    </div>

    <x-includes.script></x-includes.script>
</body>
</html>