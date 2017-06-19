<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Login</title>
    <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
    <style>
        body {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class='container-fluid'>
    <div class='row'>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    @if ($errors->has())
                        @foreach ($errors->all() as $error)
                            <div class='alert-danger alert'>{{ $error }}</div>
                        @endforeach
                    @endif

                    <form method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="name" placeholder="Password">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>