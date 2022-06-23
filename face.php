<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Camera Test</title>
    <script src="face-api.min.js"></script>
    <!-- <script src="./main.js"></script> -->
    <script defer src="script.js"></script>

    <style>
    canvas, video{
      border: 1px solid gray;
    }
    </style>
  </head>
  <body>

    <h1>HTML5カメラ</h1>

    <video id="camera" width="300" height="200"></video>
    <canvas id="picture" width="300" height="200"></canvas>
    <form>
      <button type="button" id="shutter">シャッター</button>
    </form>

    <audio id="se" preload="auto">
      <source src="camera-shutter1.mp3" type="audio/mp3">
    </audio>
    
    <script type="module">
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";
      // TODO: Add SDKs for Firebase products that you want to use
      // https://firebase.google.com/docs/web/setup#available-libraries

      // Your web app's Firebase configuration
      const firebaseConfig = {
        apiKey: "AIzaSyBkKGNZL0eFKqWGg8ZBI_UgNh5wjcTvqs0",
        authDomain: "face-test-16ffe.firebaseapp.com",
        projectId: "face-test-16ffe",
        storageBucket: "face-test-16ffe.appspot.com",
        messagingSenderId: "698079185090",
        appId: "1:698079185090:web:b3e7f33d58a005b323d35b"
      };

      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      </script>

  </body>
</html>