<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&family=Poppins:ital,wght@0,300;0,400;1,300;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Form</title>
    <style>

        body {
            display: flex;
            background-size: cover;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: auto;
            background-color: #D9AFD9;
            background-color: #FBAB7E;
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
            color: #111

        }

        .wrapper {
            width: 420px;
            background: transparent;
            border-radius: 2px;
            padding: 40px;
            border-radius: 10px;
            margin: 200px;
            background: rgba(255, 255, 255, 0.178);
            backdrop-filter: blur(20px);

        }

        .wrapper h1 {
            font-size: 35px;
            text-align: center;
        }

        
             .login-button {
            width: auto;
            padding: 10px;
            background: #DAA520;
            color: #fff;
            border: none;
            border-radius: 2px;
            cursor: pointer;
            text-align: center;
            
        }   

        .login-button:hover {
            background-color: #2980b9;
            text-align: center;
        }

        

    </style>
    
</head>
<body>
<form action="{{ url ('welcome') }}" method="get"> First Name: <input type="text" name="nama" /> <br> <br> LastName: <input type="text" name="nama1" /> <br> <br>
  
<label for="gender">Your Gender</label><br>
<input type="radio" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" name="gender"value="female">
<label for="female">Female</label><br>
<br>

<label for="nationality">nationality</label><br>
<select id="nationality" name="nationality">
<option value="Indonesia">Indonesia<option>
<option value="Malayasia">Malayasia<option>
<option value="Bekasi">Bekasi<select>  
    </select> <br> <br>
    <p>Language Spoken</p>
        <input type="checkbox" id="language1" value="Indonesia" name="language[]">
        <label for="language1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" value="English" name="language[]">
        <label for="language2"> English</label><br>
        <input type="checkbox" id="language3" value="Palestina" name="language[]">
        <label for="language3"> Palestine</label><br>
        <input type="checkbox" id="language4" value="Sunda" name="language[]">
        <label for="language4"> Sunda</label><br>

<label for="message">Your Message</label><br>
<textarea name="bio" rows="20" cols="25"></textarea>
<br>
<input type="submit" />
</form>
</body>
</html>
