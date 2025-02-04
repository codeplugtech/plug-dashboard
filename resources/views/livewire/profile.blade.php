<div
    class="bg-white  border-0 lg:p-8 rounded-lg relative lg:border h-auto  flex flex-col w-full max-w-4xl mx-auto lg:my-10">
    <div
        class="flex flex-wrap items-center justify-between pb-3 mt-5 border-b lg:mt-0 sm:mt-8 border-zinc-200 dark:border-zinc-800 sm:flex-no-wrap">
        <div class="relative p-2">
            <div class="space-y-0.5">
                <h2 class="text-xl font-semibold tracking-tight dark:text-zinc-100">Profile</h2>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Manage your name, email , change password and
                    more.</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col pt-5 lg:flex-row lg:space-x-8 border-b border-zinc-200">
        <aside class="flex-shrink-0 pb-8 lg:pt-4 lg:pb-0 lg:w-48 p-2">
            <h3 class="text-sm">Update Your Profile</h3>
        </aside>
        <form class="py-3 lg:px-6 lg:w-full" wire:submit="updateProfile">
            {{$this->editProfileForm}}
            <x-plug-dashboard::button  tooltip="Update Profile" type="submit">Save</x-plug-dashboard::button>
        </form>
    </div>
    <div class="flex flex-col pt-5 lg:flex-row lg:space-x-8">
        <aside class="flex-shrink-0 pb-8 lg:pt-4 lg:pb-0 lg:w-48 p-2">
            <h3 class="text-sm">Update your password</h3>
        </aside>
        <form class="py-3 lg:px-6 lg:w-full" wire:submit="updatePassword">
            {{$this->editPasswordForm}}
            <x-plug-dashboard::button   tooltip="Update Password" type="submit">Save</x-plug-dashboard::button>
        </form>
    </div>
</div>
