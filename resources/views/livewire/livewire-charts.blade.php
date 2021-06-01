<div class="container mx-auto space-y-4 p-4 sm:p-0">
    <ul class="flex flex-col sm:flex-row sm:space-x-8 sm:items-center">
        <li>
            <input type="checkbox" value="travel" wire:model="types"/>
            <span>node1</span>
        </li>
        <li>
            <input type="checkbox" value="shopping" wire:model="types"/>
            <span>node2</span>
        </li>
        <li>
            <input type="checkbox" value="food" wire:model="types"/>
            <span>node3</span>
        </li>
    </ul>

    <div class="shadow rounded p-4 border bg-white" style="height: 32rem;">
        <livewire:livewire-line-chart
            key="{{ $lineChartModel->reactiveKey() }}"
            :line-chart-model="$lineChartModel"
        />
    </div>

</div>
