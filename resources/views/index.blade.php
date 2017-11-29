<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitcoin Tools</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Bitcoin Tools</h1>
        <form>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm" id="connectButton">Connect</button>
                <label id="connectStatusLabel"></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default btn-sm" id="newAddrButton">New Address</button>
                <label id="newAddrLabel"></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default btn-sm" id="getLastBlock">Last Block Info</button>

            </div>
            <div class="form-group" id="lastBlockInfoWraper">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Parameter</th>
                        <th scope="col">Value</th>
                    </tr>
                    </thead>
                    <tbody id="lastBlockInfo">

                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<script src="/js/app.js" type="text/javascript"></script>
<script src="/js/main.js" type="text/javascript"></script>
</body>
</html>
