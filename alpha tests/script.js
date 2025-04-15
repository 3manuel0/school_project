const video = document.getElementById("video");
const play_btn = document.getElementById("play-btn");
const bar = document.getElementById("bar");
const time_bar = document.querySelector(".current-bar");
const playerElements = document.querySelector(".playerElem");
const time = document.querySelector("#curr_time");
const duration = document.querySelector("#dure");
const play = document.getElementById("play");
const pause = document.getElementById("pause");
const expand = document.getElementById("expand");
const shrink = document.getElementById("shrink");
const screenEx = document.getElementById("screenEx");
let is_playing = false;

play_btn.onclick = () => {
  if (is_playing) {
    is_playing = false;
    video.pause();
    pause.classList.add("hidden");
    play.classList.remove("hidden");
  } else {
    is_playing = true;
    video.play();
    play.classList.add("hidden");
    pause.classList.remove("hidden");
  }
};

screenEx.onclick = () => {
  fullscreen();
};

let timepassed = 0;
video.addEventListener("timeupdate", () => {
  console.log("Current time:", video.currentTime);
  let bar_time = (bar.clientWidth - 16 * 2) / video.duration;
  time_bar.style.width = `${video.currentTime * bar_time}px`;
  if (timepassed >= 7) {
    playerElements.style.visibility = "hidden";
  }
  timepassed++;
  console.log(timepassed);
  console.log(bar.clientWidth, video.currentTime * bar_time, bar.clientWidth);
});
video.addEventListener("ended", () => (is_playing = false));

function formatTime(seconds) {
  const h = Math.floor(seconds / 3600);
  const m = Math.floor((seconds % 3600) / 60);
  const s = Math.floor(seconds % 60);

  return [h, m, s]
    .map((unit) => String(unit).padStart(2, "0")) // Ensure two-digit format
    .join(":");
}

window.onmousemove = () => {
  timepassed = 0;
  playerElements.style.visibility = "visible";
};
window.onload = () => {
  duration.innerHTML = `${formatTime(video.duration)}`;
};

window.onkeydown = (e) => {
  if (e.keyCode == 27) {
    if (document.exitFullscreen) {
      document.exitFullscreen();
      expand.classList.remove("hidden");
      shrink.classList.add("hidden");
    }
  }
  console.log(e.keyCode);
};
// window.addEventListener('mousedown', ()=>element.requestFullscreen(), {once:true});
const fullscreen = () => {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
    expand.classList.add("hidden");
    shrink.classList.remove("hidden");
  } else if (document.exitFullscreen) {
    document.exitFullscreen();
    expand.classList.remove("hidden");
    shrink.classList.add("hidden");
  }
};
