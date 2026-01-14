<?php
require_once 'db.php';
$id = $_GET['id'];
$sql = mysqli_query($db, "SELECT * FROM guests WHERE id = $id");
$result = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="./css/output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>

<body class="thankyou">
    <div id="floating-balloons"></div>

    <img class="h-52 w-40 absolute object-cover top-0 left-2" src="/assets/doreamon.png" alt="">
    
    <h2>Thank you for giving your</h2>
    <h1>valuable RSVP</h1>
    
    <img class="h-80 w-40 absolute bottom-0 right-2 object-cover" src="/assets/shinchan.png" alt="">

    <script src="./script.js"></script>

    <!-- 5 second redirect -->
    <script>
        const guestId = "<?= $id ?>";

        setTimeout(() => {
            window.location.href = "index.php?id=" + guestId;
        }, 5000);
    </script>

</body>
</html>
