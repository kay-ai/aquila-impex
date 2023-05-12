@component('mail::message')
{{$mailData['greeting']}}

<br/>
<p>{{$mailData['body']}}</p>

<b>Name: </b> {{$mailData['name']}}, <br/>
<b>Email: </b> {{$mailData['email']}},<br/>
<b>Product: </b> {{$mailData['product']}}<br/>
<br/>
<br/>

{{$mailData['salutation']}},<br>
The Aquilla Allied Impex Team
@endcomponent
