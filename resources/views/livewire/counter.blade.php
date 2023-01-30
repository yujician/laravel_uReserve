<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <div class="mb-8"></div>
    {{-- <input type="text" wire:model="name"><br>
    <input type="text" wire:model.debounce.2000ms="name"><br>
    <input type="text" wire:model.defer="name"><br> --}}
    <input type="text" wire:model.lazy="name"><br>
    こんにちは、{{$name}}さん

</div>