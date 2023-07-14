// Ottieni la data corrente
var currentDate = new Date();

// Imposta la data di fine del countdown (2 giugno 2023 alle ore 16:30)
var countDownDate = new Date("06/06/2023 16:30:00").getTime();

// Aggiorna il countdown ogni secondo
var countdown = setInterval(function() {
  // Ottieni la data corrente
  var now = new Date().getTime();

  // Calcola la differenza tra la data di fine e la data corrente
  var distance = countDownDate - now;

  // Calcola i giorni, le ore, i minuti e i secondi rimanenti
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Visualizza il countdown nel tuo elemento HTML
  document.getElementById("countdown").innerHTML = days + " giorni, " + hours + " ore, "
    + minutes + " minuti, " + seconds + " secondi";

  // Se il countdown è terminato, visualizza un messaggio
  if (distance < 0) {
    clearInterval(countdown);
    document.getElementById("countdown").innerHTML = "Il countdown è terminato!";
  }


//tempo
function updateCountdown() {
    var now = new Date();
    var targetDate = new Date(now.getFullYear(), now.getMonth(), 2, 16, 30, 0); // 2 giugno 2023 ore 16:30
    var timeRemaining = targetDate - now;
  
    var hours = Math.floor(timeRemaining / (1000 * 60 * 60));
    var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
  
    document.querySelector('.hours .time').textContent = hours;
    document.querySelector('.minutes .time').textContent = minutes;
    document.querySelector('.seconds .time').textContent = seconds;
  }
  
  setInterval(updateCountdown, 1000);
}, 1000);
  