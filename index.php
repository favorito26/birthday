<?php
include 'db.php';

$id = $_GET['id'];
$q = $db->query("SELECT * FROM guests WHERE id=$id");
$guest = $q->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/output.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <title>wedding card</title>
</head>

<body>
  <div class="fade-container">
    <img src="./assets/space.jpg" class="tomb" alt="" />
  </div>

  <div>
    <img src="./assets/balloons.png" class="balloon-base balloon" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon2" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon3" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon4" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon5" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon6" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon7" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon8" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon9" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon10" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon11" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon12" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon13" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon14" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon15" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon16" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon17" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon18" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon19" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon20" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon21" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon22" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon23" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon24" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon25" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon26" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon27" alt="" />
    <img src="./assets/balloons.png" class="balloon-base balloon28" alt="" />
  </div>

  <!-- floating balloons from bottom -->
  <div id="floating-balloons"></div>

  <section class="writings">
    <p class="details-text"> </p>
    <p class="invite-text">

    </p>
    <article>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round">
        <!-- outer calendar -->
        <rect x="3" y="4" width="18" height="17" rx="2" ry="2" />
        <!-- top bar -->
        <line x1="3" y1="9" x2="21" y2="9" />
        <!-- rings -->
        <line x1="8" y1="2" x2="8" y2="6" />
        <line x1="16" y1="2" x2="16" y2="6" />
        <!-- a few date squares -->
        <rect x="6" y="11" width="3" height="3" />
        <rect x="11" y="11" width="3" height="3" />
        <rect x="16" y="11" width="3" height="3" />
        <rect x="6" y="16" width="3" height="3" />
        <rect x="11" y="16" width="3" height="3" />
        <rect x="16" y="16" width="3" height="3" />
      </svg>
      <p>24th July 2025</p>
    </article>
    <article>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round">
        <!-- outer circle -->
        <circle cx="12" cy="12" r="9"></circle>
        <!-- hour hand -->
        <line x1="12" y1="12" x2="12" y2="7"></line>
        <!-- minute hand -->
        <line x1="12" y1="12" x2="15" y2="12"></line>
      </svg>
      <p>7:30 pm</p>
    </article>
    <article>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="28"
        height="28"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round">
        <!-- outer pin -->
        <path d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11z" />
        <!-- center circle -->
        <circle cx="12" cy="10" r="3" />
      </svg>
      <p>Hatemi Masjid, Mazgaon</p>
    </article>

    <div class="arrow-container">
      <svg
        class="arrow"
        width="60"
        height="80"
        viewBox="0 0 60 160"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round">
        <!-- long tail -->
        <line x1="30" y1="10" x2="30" y2="120" />

        <!-- arrow head -->
        <polyline points="22,110 30,130 38,110" />
      </svg>
      <p class="arrow-text">Scroll</p>
    </div>
  </section>
  <form
    class="w-full h-full flex flex-col justify-center items-center text-center "
    action="rsvp.php"
    method="post"
    id="rsvpForm">
    <!-- IMPORTANT -->
    <input type="hidden" name="id" value="<?= $guest['id']; ?>">

    <p class="invite-text"><?= htmlspecialchars($guest['name']); ?></p>
    <p class="invite-text"><?= htmlspecialchars($guest['invitees']); ?></p>

    <main>Please give us your valuable RSVP</main>

    <button
      type="submit"
      name="status"
      value="Accepted"
      class="bg-amber-900 text-white p-5 mt-3">
      Inshaallah I will attend
    </button>

    <button
      type="submit"
      name="status"
      value="Declined"
      class="bg-amber-900 text-white p-5 mt-3">
      We are there by our heart, Mubarak mohannah
    </button>
  </form>


  <script src="script.js">

  </script>
</body>

</html>