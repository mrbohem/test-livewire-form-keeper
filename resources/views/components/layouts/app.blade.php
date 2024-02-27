<html>
<head>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/" wire:navigate>Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts" wire:navigate>Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users" wire:navigate>Users</a>
            </li>
          </ul>
        </div>
      </nav>
    {{ $slot }}
    @livewireScripts
    <x-livewire-form-keeper::script />
    </script>
</body>
</html>

{{-- component.snapshot.data --}}
{{-- component.name --}}
{{-- component.$wire.set('paginate',6,live=false) --}}