<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Item</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list as $item)
            <tr @if($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">{{ $item->description }}</td>
                <td class="border px-4 py-2" style="width: 10%">@if($item->like)Liked @else No like @endif</td>
                <td class="border px-4 py-2" style="width: 20%">
                    @if($item->like)
                        <button wire:click="markNoLike({{ $item->id }})" class="bg-gray-800 text-white px-6 rounded-full">Unlike</button>
                    @else
                        <button wire:click="markLiked({{ $item->id }})" class="bg-green-800 text-white px-6 rounded-full">Like  </button>
                    @endif

                    <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
