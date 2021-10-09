@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Test Header
        @endcomponent
    @endslot

    {{-- Body --}}
    <h2>Hello ,</h2>
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa earum necessitatibus, ut excepturi doloribus suscipit consequuntur dolore vitae voluptatibus accusantium adipisci at aperiam natus officia illum dolorum quos ducimus! Earum.
    </p>

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            Test subcopy
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           Test Footer
        @endcomponent
    @endslot
@endcomponent