<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>{{ trans('label.verify_email_title') }}</h2>  
    <div>
        {{ trans('label.verify_email_body') }} <br/>
        <a href="{{ route('verify.email', $confirmationCode) }}">{{ trans('label.cofirm_mail') }}</a>
    </div>
</body>
</html>
