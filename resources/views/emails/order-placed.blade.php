@component('mail::message')
{{$mailData['greeting']}},

<br>
{{$mailData['body']}}

<br>
<b>Name: </b> {{$mailData['name']}}
<b>Email: </b> {{$mailData['email']}}
<b>Product: </b> {{$mailData['product']}}
<br>
<br>

{{$mailData['salutation']}},<br>
The Aquilla Allied Impex Team
@endcomponent
