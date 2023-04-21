<?php

declare(strict_types=1);

namespace PreemStudio\LivewireCalendar\Http\Livewire\Concerns;

trait ManagesView
{
    public string $selectedView = 'month';

    public function selectView(string $view): void
    {
        $this->selectedView = $view;
    }
}
