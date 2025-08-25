<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Diary') }}</h2>
    </x-slot>

    <div class="p-12">
        <button @click="$store.addItemModal.show = true" class="btn btn-success">
            Add Calendar Entry
        </button>

        {{-- Include modal with matching Alpine store name --}}
        <x-modal id="addItemModal" title="Add Calendar Entry">
            <input type="text" class="form-control" placeholder="Event title">
            @slot('footer')
                <button @click="$store.addItemModal.show = false" class="btn btn-secondary">Close</button>
                <button class="btn btn-primary">Save</button>
            @endslot
        </x-modal>


        <div id="calendar"></div>

        <x-modal id="addItemModal" title="Add Calendar Entry">
            <input
                type="text"
                id="itemTitle"
                placeholder="Enter title"
                class="form-control mb-3"
            />

            <button id="saveItemBtn" class="btn btn-primary">Save</button>
        </x-modal>
    </div>

    <div id="calendar"></div>
</div>
@endsection


    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js"></script>
    @endpush
</x-app-layout>
