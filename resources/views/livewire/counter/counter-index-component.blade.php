<div class="h-full flex justify-center items-center gap-5 text-3xl">
    <button class="rounded-md border border-gray-500 p-2 " wire:click="decrement">
        -
    </button>
    <div>
        {{ $counter }}
    </div>
    <button class="rounded-md border border-gray-500 p-2 " wire:click="increment">
        +
    </button>
</div>
