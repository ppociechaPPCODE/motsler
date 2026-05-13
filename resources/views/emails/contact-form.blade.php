<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: system-ui, sans-serif; line-height: 1.5; color: #0b1f3a;">
    <p><strong>{{ __('contact.mail_field_form') }}</strong> {{ __('contact.mail_form_source_'.$formContext) }}</p>
    <p><strong>{{ __('contact.mail_field_name') }}</strong> {{ $name !== '' ? $name : '—' }}</p>
    <p><strong>{{ __('contact.mail_field_email') }}</strong> {{ $replyEmail !== '' ? $replyEmail : '—' }}</p>
    @if ($phone)
        <p><strong>{{ __('contact.mail_field_phone') }}</strong> {{ $phone }}</p>
    @endif
    <p><strong>{{ __('contact.mail_field_message') }}</strong></p>
    <p style="white-space: pre-wrap;">{{ $messageBody !== '' ? $messageBody : '—' }}</p>
</body>
</html>
