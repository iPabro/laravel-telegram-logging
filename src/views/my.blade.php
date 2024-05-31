<b>{{ $appName }}</b> ({{ $level_name }})
Env: {{ $appEnv }}
[{{ $datetime->format('Y-m-d H:i:s') }}] {{ $appEnv }}.{{ $level_name }} {{ $formatted }}
{{--
@dd($record->context['exception']->message)
--}}
<code>{{ $record->context['exception']->getMessage() }}</code>

<code>trace: {{json_encode($record->context['exception'])}}</code>
<code>trace: {{substr(json_encode($record->context['exception']->getTrace(), JSON_PRETTY_PRINT), 0, 1500)}}</code>

{{--{{json_encode($record, JSON_UNESCAPED_UNICODE)}}--}}
