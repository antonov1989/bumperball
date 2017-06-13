<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>@yield('title')</title>
        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen" />
        
        <style>
            body {
                margin-top: 10px;
            }

            html, body, .container-fluid {
                height: 100%;
            }
            
            .container-fluid {
                display: table;
            }
            
            .vertical-center-row {
                display: table-cell;
                vertical-align: middle;
            }
        </style>
    </head>
    
    <body>
        <div class="container container-fluid">
            <div class="row vertical-center-row">
                <div class="col-md-4 col-md-offset-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>