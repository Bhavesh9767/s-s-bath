<html>
<head>
    <title>Retrieve data</title>
    <link rel="shortcut icon" href="image/title_logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/retrive.css">
</head>
<body>
  <?php include('menu.php');?><!--menu bar header -->
  <br>
  <center>
  <div id="livedata">
  <h1 align="center" style="color: white;"><b>S.S.BATH LIVE DATA </b></h1><br>
  
        <p style="color: white; font-size: 40px;">Humidity</p> <strong style="color: white; font-size: 30px;" id="hd"></strong>
    
      <p style="color: white; font-size: 40px;">Temperature</p> <strong style="color: white; font-size: 30px;" id="tmp"></strong>
  </div>  
  </center>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDQ6SOl66juYtCHykwvOlkfBw5ovPydrqo",
    authDomain: "ssbath-c2194.firebaseapp.com",
    databaseURL: "https://ssbath-c2194.firebaseio.com",
    projectId: "ssbath-c2194",
    storageBucket: "ssbath-c2194.appspot.com",
    messagingSenderId: "779516921536",
    appId: "1:779516921536:web:4204bebb57f7a63cae0f25",
    measurementId: "G-5PSQ8VF6X4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  //firebase.analytics();
</script>

<script>

 // Get a reference to the database service
var database = firebase.database();

// This is reference to tha database, to fetch data from database use below code:

var starCountRef = firebase.database().ref('dht');
// Add ref of child if any
starCountRef.on('value', function(snapshot) {
    console.log(snapshot.val());
     var name=snapshot.val().Humidity;
        var gender=snapshot.val().temp;
     document.getElementById("hd").innerHTML=name;
        document.getElementById("tmp").innerHTML=gender;
});
  
</script>
<script type="text/javascript" src="js/Read.js"></script>
</body>
</html>