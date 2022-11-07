@component('mail::message')
# Sejam bem-vindos a nosso blog
<h1>Olá, {{$email}}</h1>
Estamos ansiosos para nos comunicar mais com você. Para mais informações acesse nosso blog.
@component('mail::button', ['url' => 'https://essencialjus.com/blog'])
Blog
@endcomponent
Obrigado,<br>
{{ config('app.name') }}
@endcomponent
