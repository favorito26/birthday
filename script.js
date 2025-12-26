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
        "#rsvpForm", {
          opacity: 0,
          y: 40
        }, {
          opacity: 1,
          y: 0,
          duration: 1,
          ease: "power2.out",
          delay: 0.2
        }
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

let startY = 0;
let isHidden = false;
const SWIPE_THRESHOLD = 70; // 👈 adjust for feel

window.addEventListener("touchstart", (e) => {
  startY = e.touches[0].clientY;
});

window.addEventListener("touchmove", (e) => {
  if (!startY) return;

  const currentY = e.touches[0].clientY;
  const diff = startY - currentY;

  // Ignore tiny movements
  if (Math.abs(diff) < SWIPE_THRESHOLD) return;

  if (diff > 0 && !isHidden) {
    hideText();        // swipe UP → go next
    isHidden = true;
  } 
  else if (diff < 0 && isHidden) {
    showText();        // swipe DOWN → go back
    isHidden = false;
  }

  // Lock until touch ends
  startY = null;
});

window.addEventListener("touchend", () => {
  startY = 0;
});



    const floatingContainer = document.getElementById("floating-balloons");
const BALLOON_SRC = "./assets/balloons.png";

function createFloatingBalloon() {
  const el = document.createElement("img");
  el.src = BALLOON_SRC;
  el.className = "float-balloon";

  const x = gsap.utils.random(0, window.outerWidth);
  const scale = gsap.utils.random(1.25, 1.5);
  const duration = gsap.utils.random(8, 14);
  const drift = gsap.utils.random(-40, 40);

  el.style.left = `${x}px`;
  el.style.transform = `scale(${scale})`;

  floatingContainer.appendChild(el);

  gsap.to(el, {
    y: -window.innerHeight - 120,
    x: drift,
    opacity: 0,
    duration,
    ease: "power1.out",
    onComplete: () => el.remove(),
  });
}

// keep spawning slowly
setInterval(createFloatingBalloon, 900);