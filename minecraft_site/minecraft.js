const btn = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

btn.addEventListener("click", () => {
  menu.classList.toggle("opacity-0");
  menu.classList.toggle("scale-95");
  menu.classList.toggle("-translate-y-5");
  menu.classList.toggle("pointer-events-none");
});

document.querySelectorAll(`.content`).forEach((item) => {
  item.addEventListener("click", () => {
    alert(
      `You clicked on (${item.querySelector("h4").textContent}) you will be redirected to our contact page.   `,
    );
  });
});

const slider = document.getElementById("slider");

      const nextBtn = document.getElementById("nextBtn");

      const prevBtn = document.getElementById("prevBtn");

      let currentSlide = 0;

      const slideWidth = 350;

      nextBtn.addEventListener("click", () => {

        currentSlide++;

        if (currentSlide > 2) {
          currentSlide = 0;
        }

        slider.style.transform =
          `translateX(-${currentSlide * slideWidth}px)`;
      });

      prevBtn.addEventListener("click", () => {

        currentSlide--;

        if (currentSlide < 0) {
          currentSlide = 2;
        }

        slider.style.transform =
          `translateX(-${currentSlide * slideWidth}px)`;
      });

