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


const container = document.getElementById("floating-balloons")

function spawnBalloon() {
  const img = document.createElement("img")
  img.src = "/assets/balloons.png"
  img.className = "float-balloon"

  // random X
  img.style.left = Math.random() * window.innerWidth + "px"

  // random size
  const size = gsap.utils.random(10, 30)
  img.style.width = size + "px"
  img.style.height = "auto"

  container.appendChild(img)

  // GSAP animation
  gsap.fromTo(img,
    {
      y: 100,
      x: gsap.utils.random(-40, 40),
      opacity: 0
    },
    {
      y: -window.innerHeight - 120,
      x: `+=${gsap.utils.random(-80, 80)}`,
      opacity: 1,
      duration: gsap.utils.random(7, 12),
      ease: "none",
      onComplete: () => img.remove()
    }
  )
}

// spawn balloons continuously
setInterval(spawnBalloon, 500)
