<?php
namespace Codeplugtech\PlugDashboard\Livewire;


use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Filament\Forms;

class Profile extends Component implements HasForms
{
    use InteractsWithForms;
    use WithRateLimiting;

    public ?string $name;
    public ?string $email;
    public ?array $data = [];

    public function mount(): void
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    protected function getForms(): array
    {
        return [
            'editProfileForm',
            'editPasswordForm'
        ];
    }


    protected function fillForms(): void
    {
        $this->editProfileForm->fill();
        $this->editPasswordForm->fill();
    }

    public function editPasswordForm(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('current_password')
                    ->placeholder('Enter your current password')
                    ->password()
                    ->extraInputAttributes(['autocomplete' => 'on'])
                    ->rules([
                        function () {
                            return function (string $attribute, $value, \Closure $fail) {
                                if (!Hash::check($value, auth()->user()->getAuthPassword())) {
                                    $fail('The current password does not match the entered password');
                                }
                            };
                        }])
                    ->required(),
                Forms\Components\TextInput::make('password')->label('New password')
                    ->placeholder('Enter your new password')
                     ->extraInputAttributes(['autocomplete' => 'on'])
                    ->password()->minLength(8)
                    ->confirmed()
                    ->requiredWith('password_confirmation')
                    ->same('password_confirmation')
                    ->different('current_password')
                    ->required(),
                Forms\Components\TextInput::make('password_confirmation')->label('Re-type new password')
                    ->placeholder('Re-type your new password')
                    ->extraInputAttributes(['autocomplete' => 'on'])
                    ->password()->minLength(8)
                    ->required(),
            ])
            ->statePath('data');
    }


    public function updatePassword(): void
    {
        try {
            $this->rateLimit(2);
        } catch (TooManyRequestsException $exception) {
            throw ValidationException::withMessages([
                'password' => __('Too many Password Update attempts. Please try again in :seconds seconds.', [
                    'seconds' => $exception->secondsUntilAvailable,
                ]),
            ]);
        }

        $data = $this->editPasswordForm->getState();
        $user = auth()->user();
        $user->password = Hash::make($data['password']);
        $user->save();
        Notification::make()
            ->title('Saved successfully')
            ->color('success')
            ->body('New password have been saved.')
            ->send();
    }

    public function updateProfile(): void
    {
        $user = auth()->user();
        $user->name = $this->name;
        $user->save();
        Notification::make()
            ->title('Saved successfully')
            ->color('success')
            ->body('Changes to the profile have been saved.')
            ->send();

    }


    public function editProfileForm(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->placeholder('your name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->readOnly()
                    ->required(),
            ]);
    }

    #[Layout('plug-dashboard::layout')]
    public function render(): View
    {
        return view('plug-dashboard::livewire.profile');
    }
}
