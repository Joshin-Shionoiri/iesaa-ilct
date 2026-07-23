// firebase.js
import { initializeApp } from "https://www.gstatic.com/firebasejs/12.16.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/12.16.0/firebase-auth.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/12.16.0/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyB63jX8yc_a8qKAdUEV4kRZO7UpYvcG1dU",
  authDomain: "ilct-portal.firebaseapp.com",
  projectId: "ilct-portal",
  storageBucket: "ilct-portal.firebasestorage.app",
  messagingSenderId: "454531292009",
  appId: "1:454531292009:web:709dbcb0f409872002bbf8",
  measurementId: "G-YDDMBNLM7P"
};

export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);
export const db = getFirestore(app);
