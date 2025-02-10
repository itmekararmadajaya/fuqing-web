<x-filament-panels::page>
        {{$this->form}}
        <div>
            <x-filament::button type="submit" color="primary" wire:click="update">
                Update
            </x-filament::button>
        </div>
</x-filament-panels::page>
