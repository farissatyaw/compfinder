@component('mail::message')
# Thank you for registering

Thank you {{$user->name}} for registering to {{$competition->name}}. Hope you have a great day

@component('mail::button', ['url' => '/'])
To our Main page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
