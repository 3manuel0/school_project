<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<style>
  body {
    margin: 0;
    width: 100dvw;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100dvh;
    color: white;
    background-color: #131313;
  }

  #videoPlayer {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  #videoPlayer>video {
    height: 90%;
  }

  .playerElem {
    display: flex;
    width: 100%;
    height: 10%;
    position: absolute;
    bottom: 1%;
    background-color: #13131355;
    align-items: center;
  }

  #play-btn {
    width: 50px;
  }

  #bar {
    width: 95%;
    /* border: 2px solid white; */
    align-items: center;
    padding: 0 1rem;
  }

  #info {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    width: 100%;
  }

  .current-bar {
    background-color: #cdd6f4;
    height: 5px;
    width: 0;
  }

  .current-bar:hover {
    cursor: pointer;
    height: 10px;
  }

  .hidden {
    display: none;
  }
</style>

<body>
  <div id="videoPlayer">
    <video id="video">
      <source src="test.mp4" type="video/mp4" />
    </video>
    <div class="playerElem">
      <div id="play-btn">
        <img src="assets/play.png" alt="Play" width="60" height="60" id="play">
        <img src="assets/pause.png" alt="Play" width="60" height="60" id="pause" class="hidden">
      </div>
      <div id="info">
        <div id="bar">
          <div class="current-bar"></div>
        </div>
        <span id="dure">00:00:00</span>
        <div id="screenEx">
          <img src="assets/expand.png" alt="fullscreen" width="60" height="60" id="expand">
          <img src="assets/shrink.png" alt="shrink" width="60" height="60" id="shrink" class="hidden">
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>