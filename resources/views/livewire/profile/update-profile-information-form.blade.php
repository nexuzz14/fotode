<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use App\Models\User;

new class extends Component
{
    use WithFileUploads;

    public string $name = '';
    public string $email = '';
    public $file_path; // File property for uploads

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->file_path = $user->file_path; // Load current profile picture
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'file_path' => ['nullable', 'image', 'max:1024'], // Validate image upload
        ]);

        if ($this->file_path) {
            $validated['file_path'] = $this->file_path->store('profile-pictures', 'public'); // Store the image
        }

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->emit('profile-updated', ['name' => $user->name]); // Emit event instead of dispatch
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            return $this->redirectRoute('dashboard'); // Redirect to dashboard
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
};
