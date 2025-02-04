<?php

namespace Codeplugtech\PlugDashboard\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component implements HasForms
{
    use InteractsWithForms;


    #[Layout('plug-dashboard::layout')]
    public function render(): View
    {
        return view('plug-dashboard::livewire.dashboard');
    }
}
