<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ducks Arse</title>

    <meta name="x-hostname" content="<?= gethostname() ?>">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat">
    <style>
        body {
            margin: 0;
            position: absolute;
            display: table;
            width: 100%;
            height: 100%;
            background-color: #E64A19;
            cursor: pointer;
        }
        h1 {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 3em;
            line-height: 1.3em;
            padding-left: .5em;
            padding-right: .5em;
            font-weight: normal;
            color: #fff;
            opacity: 0;
            transition: opacity .6s ease-in-out;
            will-change: opacity;
        }
        h1.show {
            opacity: 1;
        }
    </style>
</head>
<body>
    <h1>That's what they call me.</h1>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                document.querySelector('h1').classList.add('show');
            }, 1);

            document.body.addEventListener('click', function () {
                location.href = 'http://twitter.com/heyimjacooob';
            }, false);
        }, false);
    </script>
</body>
</html>
