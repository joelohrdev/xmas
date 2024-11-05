<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $kid->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-5 gap-3">
                        <flux:navlist>
                            <flux:navlist.group>
                                <flux:navlist.item href="#">Items</flux:navlist.item>
                                <flux:navlist.item href="#">Purchased</flux:navlist.item>
                                <flux:navlist.item href="#">Add Item</flux:navlist.item>
                            </flux:navlist.group>
                        </flux:navlist>
                        <div class="col-span-4">test</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
