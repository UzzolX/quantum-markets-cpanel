@component('mail::message')
<strong>Name</strong>{{$data['name']}}
<br><strong>Email</strong>{{$data['email']}}
<br><strong>Subject</strong>{{$data['subject']}}
<strong>Message</strong>{{$data['message']}}

@component('mail::button', ['url' => 'mailto:' .$data['email'] ])
Reply to this
@endcomponent


@endcomponent
