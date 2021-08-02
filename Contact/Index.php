<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    div {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form input,
    textarea,
    button {
        width: 50%;
        margin: 5px;
    }
</style>

<body>
    <div>
        <h1>Get In Touch</h1>
        <p>Please Fill in the Fields</p>
        <form action="Contact.php" method="POST">
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Enter Message"></textarea>
            <button type="submit" name="Submit">Send Email</button>
        </form>
    </div>
</body>

</html>