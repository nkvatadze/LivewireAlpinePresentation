<div class="flex justify-center items-center gap-5">
    <button wire:click="decrement">
        -
    </button>
    <div>
        {{ $counter }}
    </div>
    <button wire:click="increment">
        +
    </button>
</div>
