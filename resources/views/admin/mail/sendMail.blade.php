@component('mail::message')
Halo {{ $data['nama'] }}

Terimkasih telah menghubungi Helpdesk Politeknik Hasnur.

{{ $data['pesan'] }}

Salam hangat,<br>
Tim {{ config('app.name') }}
@endcomponent