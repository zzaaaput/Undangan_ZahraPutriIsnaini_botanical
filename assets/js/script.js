/*cover*/
AOS.init();
function openInvitation(){
    const cover = document.querySelector("cover");
    const appearance = document.querySelector("appearance");

cover.style.opacity = "0";
setTimeout(()=> {
    cover.style.display = "none";
    appearance.style.display = 'block';
        setTimeout(() => {
            appearance.style.opacity = '1';
        }, 50);
    appearance.classList.add("active");
}, 1500)
}

/*jadwal*/
function addToGoogleCalendar(title, startDate, endDate, location) {
  const googleCalendarUrl = `https://www.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(title)}&dates=${formatDateForGoogle(startDate)}/${formatDateForGoogle(endDate)}&location=${encodeURIComponent(location)}&sf=true&output=xml`;
  
  window.open(googleCalendarUrl, '_blank');
}
function formatDateForGoogle(dateString) {
  const date = new Date(dateString);
  return date.toISOString().replace(/-|:|\.\d+/g, '');
}

/*jam*/
    const countdown = () => {
    const countDate = new Date("November 7, 2026 09:00:00").getTime();
    const now = new Date().getTime();
    const gap = countDate - now;

    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    const days = Math.floor(gap / day);
    const hours = Math.floor((gap % day) / hour);
    const minutes = Math.floor((gap % hour) / minute);
    const seconds = Math.floor((gap % minute) / second);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;
};
setInterval(countdown, 1000);

/*moment berharga*/
    const slides = document.querySelector('.slides');
    let currentIndex = 0;
    const slideCount = document.querySelectorAll('.slide').length;
    const slideDuration = 1000; // 1 seconds
function moveToNextSlide() {
    currentIndex++;
    if (currentIndex >= slideCount) {
        currentIndex = 0;
    }
    updateSlidePosition();
}
function moveToPreviousSlide() {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = slideCount -1;
    }
    updateSlidePosition();
}
function updateSlidePosition() {
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}
setInterval(moveToNextSlide, slideDuration);
slides.addEventListener('mouseover', () => {
    clearInterval(slideInterval);
});
slides.addEventListener('mouseleave', () => {
    slideInterval = setInterval(moveToNextSlide, slideDuration);
});
let slideInterval = setInterval(moveToNextSlide, slideDuration);

/*audio*/
const music = document.getElementById('audioPlayer');

function openInvitation() {
    // Sembunyikan halaman pertama dan tampilkan halaman kedua
    document.querySelector('.cover').style.display = 'none';
    document.querySelector('.appearance').style.display = 'block';
    
    // Mulai memutar musik
    music.play();
}

        // Function to toggle music
        function iconImage() {
            if (music.paused) {
                music.play();
            } else {
                music.pause();
            }
        }

/*kehadiran*/
const form = document.getElementById('rsvpForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        alert('RSVP Anda telah terkirim! Terima kasih.');
        form.reset(); 
    });

/*hadiah*/
function copyToClipboard(elementId) {
    var text = document.getElementById(elementId).innerText;
    navigator.clipboard.writeText(text).then(function() {
        alert('Nomor rekening berhasil disalin: ' + text);
    }, function() {
        alert('Gagal menyalin teks');
    });
}

/*message*/
document.getElementById('psnForm').addEventListener('submit', function (event) {
    event.preventDefault(); 
    const name = document.getElementById('nama').value;
    const message = document.getElementById('pesan').value;

    const messageElement = document.createElement('div');
    messageElement.classList.add('pesan');
    messageElement.innerHTML = `<strong>${name}:</strong> <p>${message}</p>`;

    const messageOutput = document.getElementById('pesanMutiara');
    messageOutput.appendChild(messageElement);

    messageOutput.scrollTop = messageOutput.scrollHeight;

    document.getElementById('psnForm').reset();
});