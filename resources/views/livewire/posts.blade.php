<div class="container">
    <h1>
        {{ $user->fullName }}
    </h1>
    <br />
    <form class="form-inline">
        <div class="col-lg-4">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" wire:model="user.firstName" />
                </div>
                <div class="col">
                    <input type="text" class="form-control" wire:model="user.lastName" />
                </div>
            </div>
    </div>
        <br />
        <input type="radio" wire:model="user.isAdult" name="a" value="Yes"/>YES
        <br />
        <input type="radio" wire:model="user.isAdult" name="a" value="No"/>NO
    </form>
    <br />

    {{-- @livewire('nestedComp') --}}
    {{-- @livewire('nestedComp') --}}

    <button type="button" wire:click.live="updateFullName">update Full name</button>
</div>
