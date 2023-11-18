<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signature</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.signature.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.signature.css') }}">
    <style>
        .main{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #sign{
            width: 500px;
            height: 200px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<div class="main">
    <form action="{{ route('upload.signature') }}" method="POST">
        @csrf
        <div id="sign"></div>
        <br>
        <textarea style="display: none;" name="signed" id="signature"></textarea>
        <button id="clear">Create Signature</button>
        <button type="submit">Save</button>
    </form>
</div>
<script>
    $(document).ready(function(){
        $('#sign').signature( {syncField: '#signature'}, {syncFormat: 'PNG'} );
        $('#clear').click(function(e){
            e.preventDefault();
            $('#sign').signature('clear');
            $('#signature').val('');
        });
    });
</script>
</body>
</html>
