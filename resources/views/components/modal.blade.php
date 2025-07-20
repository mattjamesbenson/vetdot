@props(['id', 'title'])

<div 
    x-data="{ show: false }" 
    x-show="show" 
    x-on:keydown.escape.window="show = false" 
    id="{{ $id }}" 
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
>
    <div 
        class="bg-white rounded-lg shadow-lg w-full max-w-2xl"
        @click.away="show = false"
        x-transition
    >
        <div class="modal-header flex justify-between items-center p-4 border-b">
            <h5 class="text-lg font-semibold" id="{{ $id }}Label">{{ $title }}</h5>
            <button @click="show = false" class="text-gray-400 hover:text-gray-600">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body p-4">
            {{ $slot }}
        </div>

        <div class="modal-footer p-4 border-t flex justify-end space-x-2">
            {{ $footer ?? '' }}
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('{{ $id }}Modal', {
            show: false
        });
    });
</script>
