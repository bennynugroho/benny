@component('mail::message')
Halo {{ $data['nama'] }}

Terimkasih telah menghubungi Helpdesk Politeknik Hasnur.

{{ $data['pesan'] }}

Salam hangat,<br>
Tim PMB Politeknik Hasnur
@endcomponent