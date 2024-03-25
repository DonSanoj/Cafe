// Progress section auto increment
var reached = false;
window.addEventListener('scroll', function () {
    var element = document.getElementById('progress');
    var position = element.getBoundingClientRect();

    if (position.top < window.innerHeight && !reached) {
        reached = true;
        var counts = document.querySelectorAll('.count');
        counts.forEach(function (counter) {
            var max = parseInt(counter.getAttribute('max-data'));
            var currentValue = 0;
            var increment = max / 15;
            var interval = 2300 / max;
            var timer = setInterval(function () {
                currentValue += increment;
                if (currentValue >= max) {
                    clearInterval(timer);
                    currentValue = max;
                }
                counter.innerText = Math.round(currentValue);
            }, interval);
        });
    }
});

// Animation 
const sr = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 1000,
    reset: true
});

sr.reveal(`.animation, .heading`, {
    interval: 100
})