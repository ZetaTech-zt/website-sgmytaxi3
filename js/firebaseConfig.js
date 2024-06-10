import { initializeApp } from 'firebase/app'
import { getFirestore } from 'firebase/firestore'

const firebaseConfig = {
  apiKey: "AIzaSyCLG4QcQTS3wMnaWsVOPP7R_UKhTWtoy8Y",
  authDomain: "sgmy-taxi3.firebaseapp.com",
  projectId: "sgmy-taxi3",
  storageBucket: "sgmy-taxi3.appspot.com",
  messagingSenderId: "298121693848",
  appId: "1:298121693848:web:f7e3afcea9b9ac84fd9eed",
  measurementId: "G-460HP7RMVG"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig)

// Initialize Cloud Firestore and get a reference to the service
const db = getFirestore(app)

export { db, app };