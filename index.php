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
      <img src="./assets/tomb.jpg" class="tomb" alt="" />
    </div>
    <img src="./assets/balloons.png" class="lantern" alt="" />
    <img src="./assets/balloons.png" class="lantern2" alt="" />
    <img src="./assets/balloons.png" class="lantern3" alt="" />
    <section class="writings">
      <h1 class="invite-text">786</h1>
      <p class="details-text">
        الحمد لله والشكر لوليه ولداعيه الداعي الأجل الفاطمي
      </p>
      <p class="invite-text">
        سيدنا ومولانا ابو جعفر الصادق عالي قدر مفضل سيف الدين
      </p>
      <p class="details-text">اطال الله بقائه الشريف الى يوم الدين</p>
      <p class="details-text">
        اْثث ط ع ني لاقيمتي دعاء مبارك سي انسس اْثثني نظرات نا سايا ما همارا
        فرزندو
      </p>
      <img src="./assets/dulhan.png" class="dulhan" alt="" />
      <img src="./assets/dulha.png" class="dulha" alt="" />
      <p class="mt-8">مع</p>
      <p class="absolute right-12 top-40">ملا</p>
      <p class="details-text mt-12">
        (نكاح نو شرف حضور اعلىْ طع نا دست مبارك ثثر نصيب تهيو ؛)
      </p>
      <p class="invite-text">ني شادي ني خوشي نصيب تهئي ؛</p>
      <p class="invite-text">
        مسرات نا اْ موقع ثثر اْثثنسس بخالص الحب مع الاكرام اذن ثثيش كرئيسس ؛
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
          stroke-linejoin="round"
        >
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
          stroke-linejoin="round"
        >
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
          stroke-linejoin="round"
        >
          <!-- outer pin -->
          <path d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11z" />
          <!-- center circle -->
          <circle cx="12" cy="10" r="3" />
        </svg>
        <p>Hatemi Masjid, Mazgaon</p>
      </article>

      <main>
        <p>فاطمة بائي مصطفى بهائي</p>
        <p>مصطفى بهائي اكبر بهائي</p>
      </main>
      <main>
        <p>فاطمة بائي مصطفى بهائي</p>
        <p>مصطفى بهائي اكبر بهائي</p>
      </main>
      <main>
        <p>فاطمة بائي مصطفى بهائي</p>
        <p>مصطفى بهائي اكبر بهائي</p>
      </main>
      <div class="arrow-container">
      <svg
        class="arrow"
        width="60"
        height="80"
        viewBox="0 0 60 160"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
      >
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
  id="rsvpForm"
>
  <!-- IMPORTANT -->
  <input type="hidden" name="id" value="<?= $guest['id']; ?>">

  <p class="invite-text"><?= htmlspecialchars($guest['name']); ?></p>
  <p class="invite-text"><?= htmlspecialchars($guest['invitees']); ?></p>

  <main>Please give us your valuable RSVP</main>

  <button
    type="submit"
    name="status"
    value="Accepted"
    class="bg-amber-900 text-white p-5 mt-3"
  >
    Inshaallah I will attend
  </button>

  <button
    type="submit"
    name="status"
    value="Declined"
    class="bg-amber-900 text-white p-5 mt-3"
  >
    We are there by our heart, Mubarak mohannah
  </button>
</form>


    <script>
      gsap.registerPlugin(ScrollTrigger);

      let textHidden = false;

      function hideText() {
        if (textHidden) return;
        textHidden = true;

        gsap.to(".writings", {
          opacity: 0,
          y: -40,
          duration: 1,
          ease: "power2.out",
        });

        gsap.fromTo(
          "#rsvpForm",
          { opacity: 0, y: 40 },
          { opacity: 1, y: 0, duration: 1, ease: "power2.out", delay: 0.2 }
        );
      }

      function showText() {
        if (!textHidden) return;
        textHidden = false;

        gsap.to(".writings", {
          opacity: 1,
          y: 0,
          duration: 1,
          ease: "power2.out",
        });

        gsap.to("#rsvpForm", {
          opacity: 0,
          y: 40,
          duration: 1,
          ease: "power2.out",
        });
      }

      window.addEventListener("wheel", (e) => {
        if (e.deltaY > 0) {
          hideText(); // scroll down
        } else {
          showText(); // scroll up
        }
      });

      window.addEventListener("touchmove", (e) => {
        let touch = e.touches[0];
        if (!this.lastTouch) this.lastTouch = touch.clientY;

        if (touch.clientY < this.lastTouch) {
          hideText(); // swipe up (scroll down)
        } else {
          showText(); // swipe down
        }
        this.lastTouch = touch.clientY;
      });
    </script>
  </body>
</html>
