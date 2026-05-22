      const btn = document.getElementById("menu-btn");
      const menu = document.getElementById("menu");
      const icon = btn.querySelector("i");
      const serRed = document.getElementById("serRed");
      const Por = document.getElementById("Por");

      btn.addEventListener("click", () => {
        menu.classList.toggle("opacity-0");
        menu.classList.toggle("scale-95");
        menu.classList.toggle("-translate-y-5");
        menu.classList.toggle("pointer-events-none");

        if (icon.classList.contains("fa-ellipsis")) {
          icon.classList.remove("fa-ellipsis");
          icon.classList.add("fa-xmark");
        } else {
          icon.classList.remove("fa-xmark");
          icon.classList.add("fa-ellipsis");
        }
      });
      
  info = document.getElementById("info");

  info.addEventListener("click", () => {
    window.alert(`Would you like to view the proprietress wlecome message?`)
      window.location.href = "#portfolioPage";
   info.scrollIntoView({behavior: "smooth"}) 
  });
document.addEventListener("DOMContentLoaded", () => {
            const text = "Welcome to Eden Bulb International School ~ Official Website";
            const speed = 100; 
            let i = 0;
            const target = document.getElementById("typewritter");

            // Safety check: make sure JavaScript actually found the element
            if (!target) {
                console.error("Could not find the element with ID 'typewritter'");
                return;
            }

            function typeWritter() {
                if (i < text.length) {
                    target.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWritter, speed);
                }
            }

            // Fire the function
            typeWritter();
        });