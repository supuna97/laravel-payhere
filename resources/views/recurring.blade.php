<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div>
        <div>
            <div>
                <h4>Processing payment ...</h4>
            </div>
            <form id="payhere-form" action="{{ $action }}" method="POST">
                @foreach($data as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach
            </form>
        </div>
    </div>

    <script type="text/javascript">

        document.getElementById('payhere-form').submit()

    </script>
</body>
</html>
