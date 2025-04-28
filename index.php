<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>HACKED BY MR.M05T3R</title>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet" />
  <link rel="icon" href="https://i.ibb.co/svL61vQx/n.png" type="image/png"/>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Share Tech Mono', monospace;
      background: #000;
      color: #00ff00;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      overflow: hidden;
      position: relative;
    }
    .background-image {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.05;
      z-index: 0;
    }
    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: repeating-linear-gradient(
        to bottom,
        rgba(0,255,0,0.05),
        rgba(0,255,0,0.05) 2px,
        transparent 2px,
        transparent 4px
      );
      animation: scan 5s linear infinite;
      z-index: 1;
    }
    @keyframes scan {
      0% { background-position: 0 0; }
      100% { background-position: 0 200px; }
    }
    .container {
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      text-align: center;
      max-height: 100vh;
      overflow-y: auto;
    }
    .logo {
      width: 120px;
      margin-bottom: 30px;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.1); }
    }
    .glitch {
      font-size: 4rem;
      color: #00ff00;
      position: relative;
      animation: glitch-skew 1s infinite alternate;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 5px;
      margin-bottom: 20px;
    }
    .glitch::before,
    .glitch::after {
      content: attr(data-text);
      position: absolute;
      left: 0;
      width: 100%;
      opacity: 0.8;
    }
    .glitch::before {
      animation: glitch-top 1s infinite alternate;
      color: #ff00c8;
      top: -2px;
    }
    .glitch::after {
      animation: glitch-bottom 1s infinite alternate;
      color: #00ffff;
      top: 2px;
    }
    @keyframes glitch-skew {
      0% { transform: skew(0deg); }
      50% { transform: skew(1deg, -1deg); }
      100% { transform: skew(0deg); }
    }
    @keyframes glitch-top {
      0% { transform: translate(0, 0); }
      50% { transform: translate(-2px, -2px); }
      100% { transform: translate(0, 0); }
    }
    @keyframes glitch-bottom {
      0% { transform: translate(0, 0); }
      50% { transform: translate(2px, 2px); }
      100% { transform: translate(0, 0); }
    }
    .info {
      margin-top: 20px;
      font-size: 1.2rem;
    }
    .datetime {
      margin-top: 10px;
      font-size: 1rem;
      animation: datetimeBlink 1s infinite;
    }
    @keyframes datetimeBlink {
      0% { opacity: 0.5; }
      50% { opacity: 1; }
      100% { opacity: 0.5; }
    }
    .terminal-box {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid #00ff00;
      border-radius: 10px;
      box-shadow: 0 0 15px #00ff00 inset;
      padding: 20px;
      margin-top: 30px;
      text-align: left;
      font-size: 1.2rem;
      width: 100%;
      max-width: 800px;
      overflow-y: auto;
      max-height: 300px;
      margin-bottom: 20px;
      position: relative;
      white-space: pre-wrap;
    }
    .terminal-box::after {
      content: "_";
      position: absolute;
      right: 10px;
      bottom: 10px;
      animation: blinkCursor 0.7s infinite;
    }
    @keyframes blinkCursor {
      0%, 100% { opacity: 1; }
      50% { opacity: 0; }
    }
    .qr-code {
      margin-top: 30px;
    }
    .qr-code img {
      width: 150px;
      padding: 8px;
      background: #000;
      border: 1px solid #00ff00;
      border-radius: 8px;
    }
    .footer {
      margin-top: 40px;
      font-size: 1.2rem;
    }
    .footer a {
      color: #00ff00;
      text-decoration: none;
    }
    .footer a:hover {
      color: #ff00c8;
    }
    #mute-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      background: none;
      border: 1px solid #00ff00;
      color: #00ff00;
      padding: 6px 12px;
      cursor: pointer;
      border-radius: 8px;
      font-family: 'Share Tech Mono', monospace;
      font-size: 0.9rem;
      z-index: 5;
    }
    #mute-btn:hover {
      background: #00ff00;
      color: #000;
    }
    .domain-display {
      font-size: 1.5rem;
      color: #ff0000;
      font-weight: bold;
      margin-top: 20px;
      text-transform: uppercase;
      animation: flash 1s infinite;
    }
    @keyframes flash {
      0% { opacity: 1; }
      50% { opacity: 0; }
      100% { opacity: 1; }
    }
    #loading {
      background: #000;
      height: 100vh;
      width: 100vw;
      position: fixed;
      top: 0; left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }
    .spinner {
      border: 5px solid rgba(0, 255, 0, 0.3);
      border-top: 5px solid #00ff00;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    @media (max-width: 768px) {
      .logo { width: 100px; }
      .glitch { font-size: 2.5rem; }
      .terminal-box { max-width: 90%; max-height: 250px; }
      .qr-code img { width: 120px; }
    }
    @media (max-width: 480px) {
      .glitch { font-size: 1.8rem; }
      .footer { font-size: 1rem; }
      #mute-btn { font-size: 0.8rem; padding: 5px 10px; }
    }
  </style>
</head>

<body>

<div id="loading">
  <div class="spinner"></div>
</div>

<img src="https://i.ibb.co/svL61vQx/n.png" alt="Background Image" class="background-image">
<div class="overlay"></div>

<audio id="bg-audio" autoplay loop>
  <source src="https://github.com/defacemoster/audio/raw/refs/heads/main/Karera" type="audio/mpeg">
</audio>

<button id="mute-btn">Mute</button>

<div class="container" style="display:none;">
  <img src="https://i.ibb.co/svL61vQx/n.png" alt="Logo" class="logo">
  <h1 class="glitch" data-text="HACKED BY MR.M05T3R">HACKED BY MR.M05T3R</h1>

  <div class="domain-display" id="domain-name">Domain: Loading...</div>

  <div class="info">
    <p>WE ARE <strong>NEWBIE CYBER SECURITY</strong></p>
    <p>Email: offcncs@gmail.com</p>
  </div>

  <div class="datetime" id="datetime"></div>

  <div class="terminal-box" id="terminal"></div>

  <div class="qr-code">
    <p>SCAN TO FIND US:</p>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.tiktok.com/@offcncs" alt="QR Code">
  </div>

  <div class="footer">
    <p>FOUNDER MR.M05T3R | TIKTOK: <a href="https://www.tiktok.com/@offcncs">@OFFCNCS</a></p>
  </div>
</div>

<script>
  // Mute button functionality
  const muteBtn = document.getElementById('mute-btn');
  const audio = document.getElementById('bg-audio');
  muteBtn.addEventListener('click', () => {
    if (audio.muted) {
      audio.muted = false;
      muteBtn.textContent = 'Mute';
    } else {
      audio.muted = true;
      muteBtn.textContent = 'Unmute';
    }
  });

  // Display current date and time
  function updateDateTime() {
    const date = new Date();
    document.getElementById('datetime').textContent = date.toLocaleString();
  }
  setInterval(updateDateTime, 1000);

  // Load domain dynamically
  document.getElementById('domain-name').textContent = 'Domain: ' + window.location.hostname;

  // Typing effect for terminal
  const terminal = document.getElementById('terminal');
  const terminalText = [
    "newbiecybersecurity@server.com",
    "✔ LOGIN SUCCESS",
    "✔ SYSTEM BREACHED",
    "✔ SUPPORT : GHOSTCLONET77 - FAKEWORLD - DORAEMON CYBER TEAM - L0N3C1PH3R - N0B1T4 - ALL MEMBER NEWBIE CYBER SECURITY",
    "✔ OWNER BY MR.M05T3R",
  ];

  let lineIndex = 0;
  let charIndex = 0;

  function typeLine() {
    if (lineIndex < terminalText.length) {
      if (charIndex < terminalText[lineIndex].length) {
        terminal.innerHTML += terminalText[lineIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeLine, 40); // Speed ngetik (lebih cepat)
      } else {
        terminal.innerHTML += '\n'; // Line break
        lineIndex++;
        charIndex = 0;
        setTimeout(typeLine, 300);
      }
    }
  }

  window.onload = () => {
    document.getElementById('loading').style.display = 'none';
    document.querySelector('.container').style.display = 'block';
    typeLine();
  };
</script>

</body>
</html>
