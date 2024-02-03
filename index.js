
let currentIndex = 0;
var imgArray = JSON.parse('<?php echo json_encode($imgArray); ?>');

let timer;

function changeImg(index) {
    if (index !== undefined) {
        currentIndex = index;
    } else {
        currentIndex = (currentIndex + 1) % imgArray.length;
    }

    document.getElementById('slideshow').src = imgArray[currentIndex];
    updateDots();
    resetTimer();
    setTimeout("changeImg()", 2600);
}

function updateDots() {
    const dotsContainer = document.getElementById('dotsContainer');
    dotsContainer.innerHTML = '';

    for (let i = 0; i < imgArray.length; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (i === currentIndex) {
            dot.classList.add('active');
        }
        dot.setAttribute('onclick', `changeImg(${i})`);
        dotsContainer.appendChild(dot);
    }
}

function resetTimer() {
    clearTimeout(timer);
    timer = setTimeout(changeImg, 3000); 
}


document.addEventListener('DOMContentLoaded', function () {
    changeImg(0); 
});

