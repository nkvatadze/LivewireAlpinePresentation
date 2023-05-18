<div style="display: flex; font-size: 50px; justify-content: center; align-items: center; gap: 20px">
    <button wire:click="decrement">
        -
    </button>
    <div>
        {{ $counter }}
    </div>
    <button wire:click="increment">
        +
    </button>


    {{--    Polling --}}
    {{--    <div wire:poll.1000ms>--}}
    {{--        Current time: {{ now() }}--}}
    {{--    </div>--}}
</div>
