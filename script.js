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
    pointerEvents: "none",   // ✅ IMPORTANT
  });

  gsap.fromTo(
    "#rsvpForm",
    { opacity: 0, y: 40 },
    {
      opacity: 1,
      y: 0,
      duration: 1,
      ease: "power2.out",
      delay: 0.2,
      pointerEvents: "auto", // ✅ allow clicks
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