document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       SETUP
    ====================================================== */

    if (typeof gsap === "undefined") {
        console.warn("GSAP is not loaded.");
        return;
    }

    const section = document.querySelector("#gritFeaturedProjects");

    if (!section) return;


    const projects = Array.from(
        section.querySelectorAll(".grit-fp-project")
    );

    const navItems = Array.from(
        section.querySelectorAll(".grit-fp-side-item")
    );

    const topFill =
        section.querySelector(".grit-fp-top-fill");

    const sideFill =
        section.querySelector(".grit-fp-side-fill");

    const sideDot =
        section.querySelector(".grit-fp-side-dot");

    const currentCounter =
        section.querySelector(".grit-fp-current");


    const total = projects.length;


    let currentIndex = 0;

    let isAnimating = false;

    let wheelLocked = false;


    /* =====================================================
       INITIAL STATE
    ====================================================== */

    projects.forEach(function (project, index) {

        const image =
            project.querySelector(".grit-fp-image img");

        const content =
            project.querySelector(".grit-fp-content");


        gsap.set(project, {
            autoAlpha: index === 0 ? 1 : 0,
            zIndex: index === 0 ? 3 : 1
        });


        gsap.set(image, {
            scale: index === 0 ? 1.04 : 1.10
        });


        gsap.set(content, {
            y: index === 0 ? "-43%" : "-37%",
            opacity: index === 0 ? 1 : 0
        });

    });


    /* =====================================================
       UPDATE UI
    ====================================================== */

    function updateUI(index) {

        const percent =
            ((index + 1) / total) * 100;


        /* top */

        gsap.to(topFill, {
            width: percent + "%",
            duration: .65,
            ease: "power3.out"
        });


        currentCounter.textContent =
            String(index + 1).padStart(2, "0");


        /* left */

        const sidePercent =
            (index / (total - 1)) * 100;


        gsap.to(sideFill, {
            height: sidePercent + "%",
            duration: .65,
            ease: "power3.out"
        });


        /* nav */

        navItems.forEach(function (item, i) {

            item.classList.toggle(
                "active",
                i === index
            );

        });


        /* moving dot */

        const activeItem = navItems[index];

        if (activeItem) {

            gsap.to(sideDot, {
                y: activeItem.offsetTop,
                duration: .65,
                ease: "power3.out"
            });

        }

    }


    /* =====================================================
       PROJECT TRANSITION
    ====================================================== */

    function goToProject(index, direction) {

        if (index < 0 || index >= total) {
            return;
        }

        if (index === currentIndex) {
            return;
        }

        if (isAnimating) {
            return;
        }


        isAnimating = true;


        const oldProject =
            projects[currentIndex];

        const newProject =
            projects[index];


        const oldImage =
            oldProject.querySelector(".grit-fp-image img");

        const newImage =
            newProject.querySelector(".grit-fp-image img");


        const oldContent =
            oldProject.querySelector(".grit-fp-content");

        const newContent =
            newProject.querySelector(".grit-fp-content");


        /* =================================================
           PREPARE NEW PROJECT
        ================================================== */

        gsap.set(newProject, {
            autoAlpha: 1,
            zIndex: 4
        });


        gsap.set(newImage, {
            scale: 1.10,

            x:
                direction > 0
                    ? 35
                    : -35
        });


        gsap.set(newContent, {
            opacity: 0,

            x:
                direction > 0
                    ? 45
                    : -45,

            y: "-43%"
        });


        /* =================================================
           OLD PROJECT OUT
        ================================================== */

        gsap.to(oldProject, {
            autoAlpha: 0,

            duration: .65,

            ease: "power2.inOut"
        });


        gsap.to(oldImage, {
            scale: 1.08,

            x:
                direction > 0
                    ? -25
                    : 25,

            duration: .85,

            ease: "power3.inOut"
        });


        gsap.to(oldContent, {
            opacity: 0,

            x:
                direction > 0
                    ? -30
                    : 30,

            duration: .4,

            ease: "power2.in"
        });


        /* =================================================
           NEW PROJECT IN
        ================================================== */

        gsap.to(newImage, {
            scale: 1.04,
            x: 0,

            duration: 1.05,

            ease: "power3.out"
        });


        gsap.to(newContent, {
            opacity: 1,
            x: 0,

            duration: .75,

            delay: .08,

            ease: "power3.out"
        });


        /* =================================================
           UPDATE
        ================================================== */

        updateUI(index);


        currentIndex = index;


        /* =================================================
           FINISH
        ================================================== */

        setTimeout(function () {

            projects.forEach(function (project, i) {

                if (i !== currentIndex) {

                    gsap.set(project, {
                        zIndex: 1
                    });

                }

            });


            isAnimating = false;

        }, 850);

    }


    /* =====================================================
       WHEEL CONTROL
       
       ONE wheel gesture = ONE PROJECT
    ====================================================== */

    function handleWheel(event) {

        /*
         * Don't hijack tiny trackpad movements.
         * But normal mouse-wheel movement will trigger
         * immediately.
         */

        const delta = event.deltaY;


        if (Math.abs(delta) < 8) {
            return;
        }


        /* If outside section, do nothing */

        const rect =
            section.getBoundingClientRect();


        const insideViewport =
            rect.top <= 0 &&
            rect.bottom >= window.innerHeight;


        if (!insideViewport) {
            return;
        }


        /*
         * Prevent normal page scrolling while
         * project section is active.
         */

        event.preventDefault();


        if (wheelLocked || isAnimating) {
            return;
        }


        wheelLocked = true;


        const direction =
            delta > 0 ? 1 : -1;


        const nextIndex =
            currentIndex + direction;


        /* -----------------------------------------------
           NEXT PROJECT
        ------------------------------------------------ */

        if (nextIndex >= 0 && nextIndex < total) {

            goToProject(
                nextIndex,
                direction
            );

        }


        /*
         * Small debounce so one physical wheel
         * movement doesn't jump 2-3 projects.
         */

        setTimeout(function () {

            wheelLocked = false;

        }, 650);

    }


    /* =====================================================
       MOUSE WHEEL
    ====================================================== */

    window.addEventListener(
        "wheel",
        handleWheel,
        {
            passive: false
        }
    );


    /* =====================================================
       SIDE NAVIGATION
    ====================================================== */

    navItems.forEach(function (item, index) {

        item.addEventListener(
            "click",
            function () {

                if (isAnimating) {
                    return;
                }


                const direction =
                    index > currentIndex
                        ? 1
                        : -1;


                goToProject(
                    index,
                    direction
                );

            }
        );

    });


    /* =====================================================
       KEYBOARD
    ====================================================== */

    window.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "ArrowDown") {

                event.preventDefault();

                goToProject(
                    currentIndex + 1,
                    1
                );

            }


            if (event.key === "ArrowUp") {

                event.preventDefault();

                goToProject(
                    currentIndex - 1,
                    -1
                );

            }

        }
    );


    /* =====================================================
       TOUCH / MOBILE
    ====================================================== */

    let touchStartY = 0;

    let touchEndY = 0;


    section.addEventListener(
        "touchstart",
        function (event) {

            touchStartY =
                event.touches[0].clientY;

        },
        {
            passive: true
        }
    );


    section.addEventListener(
        "touchend",
        function (event) {

            touchEndY =
                event.changedTouches[0].clientY;


            const difference =
                touchStartY - touchEndY;


            if (Math.abs(difference) < 40) {
                return;
            }


            const direction =
                difference > 0 ? 1 : -1;


            goToProject(
                currentIndex + direction,
                direction
            );

        },
        {
            passive: true
        }
    );


    /* =====================================================
       INITIAL UI
    ====================================================== */

    updateUI(0);


    /* =====================================================
       MOUSE PARALLAX
    ====================================================== */

    if (window.innerWidth > 900) {

        section.addEventListener(
            "mousemove",
            function (event) {

                const x =
                    (event.clientX /
                        window.innerWidth -
                        .5);

                const y =
                    (event.clientY /
                        window.innerHeight -
                        .5);


                const activeImage =
                    projects[currentIndex]
                        .querySelector(
                            ".grit-fp-image img"
                        );


                gsap.to(activeImage, {

                    x: x * 6,

                    y: y * 4,

                    duration: 1.2,

                    ease: "power3.out",

                    overwrite: "auto"

                });

            }
        );

    }

});