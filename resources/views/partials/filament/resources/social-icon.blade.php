<div class="inline-flex items-center space-x-2 rtl:space-x-reverse px-4">
    <div class="w-full flex items-center gap-2">
        @forelse ($getState() ?? [] as $social)
            @switch($social->provider)
                @case('google')
                    <x-icon name="fab-google" class="social-icon google" />
                @break

                @case('facebook')
                    <x-icon name="fab-facebook" class="social-icon facebook" />F
                @break

                @case('github')
                    <img src="{{ asset('svg/github.svg') }}" alt="Github Icon" class="w-6 h-6">
                @break

                @case('twitter')
                    <x-icon name="fab-twitter" class="social-icon twitter" />
                @break
            @endswitch
            @empty
                <span>-</span>
            @endforelse
        </div>
    </div>
