<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
        background: #f7f7f7;
        }

        .form-box {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            background: #ffffff;
            border: 10px solid #f2f2f2;
        }

        h1, p {
        text-align: center;
        }

        input[type="email"], input[type="text"] {
            width: 100%;
            display: block;
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #D1D1D1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            display: block;
            margin-bottom: 10px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #D1D1D1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: .5rem;
            font-weight: 600;
        }

        .customButton {
            width: 200px;
            height: 45px;
            font-family: 'Varela Round', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 500;
            color: #fff;
            background-color: #4083c4;
            border: none;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
            }
        .customButton:hover {
            background-color: #2EE59D;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
            transform: translateY(-7px);
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h1>Simple Contact Form</h1>
        <form action="{{ route('contact') }}" method="post">
        @csrf
            <label for="name">Name</label>
            <input id="name" type="text" name="name">

            <label for="email">Email</label>
            <input id="email" type="email" name="email">

            <label for="phone">Phone</label>
            <input id="phone" type="text" name="phone">

            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
            <button class="customButton" type="submit">Submit</button>
        </form>
        <p>Developed by mdsharafat @ <a href="https://cybersoftbd.net/">Cybersoft</a></p>
    </div>
</body>
</html>