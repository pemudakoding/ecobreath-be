<x-filament-panels::page>
    {{ $this->termConditionsInfoList  }}

    <form wire:submit="join">
        {{ $this->form }}

        <div class="mb-5"></div>
        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </form>
</x-filament-panels::page>
