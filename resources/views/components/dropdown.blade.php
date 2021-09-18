<div x-data="{ show: false}" @click.away="show = false">
    {{--Trigger--}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{--Links--}}
    <div x-show="show" style="display: none" class="absolute bg-gray-100 py-2 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>
