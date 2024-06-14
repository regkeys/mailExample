<x-mail::message>
# Hello this is a NEW Message!

<h3>Name: {{ $data['name'] }}</h3>
<h3>Address: {{ $data['address'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Phone #: {{ $data['phone'] }}</h3>


The body of your message. - TEMPLATE

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
