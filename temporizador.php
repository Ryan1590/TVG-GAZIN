<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporizador</title>
</head>

<body>

    <script>
        let inactivityTimer;

        function resetTimer() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(logout, 10 * 60 * 1000);
        }

        function logout() {
            alert(" Sua sessão expirou, faça login novamente! :P");
            window.location.href = 'logout.php';
        }
        document.addEventListener('mousemove', resetTimer);
        document.addEventListener('keydown', resetTimer);
        document.addEventListener('DOMContentLoaded', resetTimer);
    </script>

</body>
<<<<<<< HEAD
=======
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporizador</title>
</head>

<body>

    <script>
        let inactivityTimer;

        function resetTimer() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(logout, 10 * 60 * 1000);
        }

        function logout() {
            alert(" Sua sessão expirou, faça login novamente! :P");
            window.location.href = 'logout.php';
        }
        document.addEventListener('mousemove', resetTimer);
        document.addEventListener('keydown', resetTimer);
        document.addEventListener('DOMContentLoaded', resetTimer);
    </script>

</body>
>>>>>>> cbbb44288ce4d439adea362c20d4644d99cf3e4e
>>>>>>> cc1f660dd7b129a69fed767fff52df56040786f2
</html>