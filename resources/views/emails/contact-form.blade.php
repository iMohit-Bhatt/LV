@component('mail::message')
# New Contact Form Submission

**From:** {{ $name }}  
**Email:** {{ $email }}  
**Phone:** {{ $phone }}  
**Subject:** {{ $subject }}

## Message:
{{ $message }}

---

*This message was sent from the contact form on your real estate website.*

Thanks,<br>
{{ config('app.name') }}
@endcomponent 