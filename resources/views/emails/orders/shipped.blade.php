
    <img src="{{ \Illuminate\Support\Facades\URL::asset('assets/Teomoda_t.pnp') }}" class="w-100" alt="logo">
    <p>Hi, This is {{ $name }}</p>
    <p>I have some query like {{ $email }}.</p>
    <p>It would be appriciative, if you gone through this feedback {{ $comment }}.</p>
@component('mail.html.message')
    Whats up


    <p>Website Name</p>
@endcomponent
