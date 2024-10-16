// NAV BAR ANIMATION //

const nav = document.querySelector(".Nav_Bar");
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () =>{

    if (lastScrollY < window.scrollY)
    {
        nav.classList.add("Hidden");
    }

    else
    {
        nav.classList.remove("Hidden");
    }

    lastScrollY = window.scrollY;
});

// BODY ANIMATION //

const observer = new IntersectionObserver((entries) =>
{
    entries.forEach((entry) =>
    {
        console.log(entry)
        {
            if (entry.isIntersecting)
            {
                entry.target.classList.add('show');
            }

            else
            {
                entry.target.classList.remove('show');
            }
        }
    });
});

const hiddenElements = document.querySelectorAll('.Animated');
hiddenElements.forEach((el) => observer.observe(el));