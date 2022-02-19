<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.5/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.5/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyATWvnkj40P31PLrvrT-2QZND-LdSoeiyk",
      authDomain: "chat-870df.firebaseapp.com",
      projectId: "chat-870df",
      storageBucket: "chat-870df.appspot.com",
      messagingSenderId: "1063810348617",
      appId: "1:1063810348617:web:3f9e312dacd03a24cf3198",
      measurementId: "G-R35PNEXPPL"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
  </script>