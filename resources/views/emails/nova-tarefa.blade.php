@component('mail::message')
# {{ $tarefa }}

Data Limite de conclusão: {{ $data_limite_conclusao}}
The body of your message.

@component('mail::button', ['url' => $url ])
Clique aqui para ver a tarefa
@endcomponent

Atenciosamente, <br>
{{ config('app.name') }}
@endcomponent
