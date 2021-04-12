<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
      *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'Roboto', sans-serif;
        }
        .container{
            max-width: 800px;
            margin:40px auto;
            padding:40px;
            box-shadow: 0px 2px 9px #0000003d;
        }
        form label{
            width: 30%;
            display: block;
            text-align: right;
            font-size: .87em;
        }
        form input, form select{
            width: 50%;
            padding: 5px;
        }
        .btn{
            width: auto;
        }
        .form-group{
            margin-top:10px;
        }
        .form-group > *{
            display: inline-block;
        }
        .btn{
            border: none;
            padding:5px 15px;
            background: #78dbf9;
            font-size: .9em;
            cursor: pointer;
        }

        .form-group > textarea{
            vertical-align: middle;
        }

        .error{
            background: #fd6666;
            width: 50%;
            padding:7px 12px;
            color: #861717;
            font-size: .8em;
            margin: 10px 0px 0px 31%;
        }

        .container h1{
            text-align:center;
            margin-bottom:30px;
        }
        span{
            color:red;
        }

        .success{
            background: #66d166;
            width: 50%;
            padding:7px 12px;
            color: #238810;
            font-size: .8em;
            margin: 10px 0px 0px 31%; 
        }
    </style>
</head>
<body>
