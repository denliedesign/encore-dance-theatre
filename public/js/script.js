function animation() {
    gsap.set(".master-faculty-col", {y: 40});
    ScrollTrigger.batch(".master-faculty-col", {
        interval: 0.1, // time window (in seconds) for batching to occur.
        batchMax: 3,   // maximum batch size (targets). Can be function-based for dynamic values
        onEnter: batch => gsap.to(batch, {opacity: 1, y: 0, stagger: {each: 0.15, grid: [1, 3]}, overwrite: true}),
        // onLeave: batch => gsap.set(batch, {opacity: 0, y: -40, overwrite: true}),
        // onEnterBack: batch => gsap.to(batch, {opacity: 1, y: 0, stagger: 0.15, overwrite: true}),
        // onLeaveBack: batch => gsap.set(batch, {opacity: 0, y: 40, overwrite: true}),
        // you can also define most normal ScrollTrigger values like start, end, etc.
        start: "bottom bottom",
        end: "top 40px"
    });
    ScrollTrigger.addEventListener("refreshInit", () => gsap.set(".master-faculty-col", {y: 0}));
    gsap.set(".animate-class", {y: 40});
    ScrollTrigger.batch(".animate-class", {
        interval: 0.1, // time window (in seconds) for batching to occur.
        batchMax: 4,   // maximum batch size (targets). Can be function-based for dynamic values
        onEnter: batch => gsap.to(batch, {opacity: 1, y: 0, stagger: {each: 0.2, grid: [1, 4]}, overwrite: true}),
        // onLeave: batch => gsap.set(batch, {opacity: 0, y: -40, overwrite: true}),
        // onEnterBack: batch => gsap.to(batch, {opacity: 1, y: 0, stagger: 0.2, overwrite: true}),
        // onLeaveBack: batch => gsap.set(batch, {opacity: 0, y: 40, overwrite: true}),
        // you can also define most normal ScrollTrigger values like start, end, etc.
        start: "bottom bottom",
        end: "top top-=150"
    });
    ScrollTrigger.addEventListener("refreshInit", () => gsap.set(".animate-class", {y: 0}));

    gsap.set('#summer-1', {scrollTrigger: {
            trigger: '#summer-1',
            start: 'top center',
            end: 'bottom center',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-2', {scrollTrigger: {
            trigger: '#summer-2',
            start: 'top center+=100',
            end: 'bottom center',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-3', {scrollTrigger: {
            trigger: '#summer-3',
            start: 'top center',
            end: 'bottom center',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-4', {scrollTrigger: {
            trigger: '#summer-4',
            start: 'top center',
            end: 'bottom center',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-5', {scrollTrigger: {
            trigger: '#summer-5',
            start: 'top center+=150',
            end: 'bottom center+=100',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-6', {scrollTrigger: {
            trigger: '#summer-6',
            start: 'top center',
            end: 'bottom center',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-7', {scrollTrigger: {
            trigger: '#summer-7',
            start: 'top center+=150',
            end: 'bottom center+=100',
            toggleClass: 'activation'
        }});
    gsap.set('#summer-8', {scrollTrigger: {
            trigger: '#summer-8',
            start: 'top center',
            end: 'bottom center',
            toggleClass: 'activation'
        }});
    gsap.to('#animate-news-1', {x:0, opacity: 1, duration: 1, delay: 0.4});
    gsap.to('#animate-news-2', {y:0, opacity: 1, duration: 1, delay: 1, scrollTrigger: {
        trigger: '#animate-news-2',
            start: 'top center'
        }});
}

window.addEventListener('load', function(){
    animation();
})
