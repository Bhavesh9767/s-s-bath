<html>
<head>
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<form   enctype="multipart/form-data" method="post">
      <div class="form-group">
        <label>Email:</label>
        <div class="col-sm-10">
        <input type="text"  class="form-control" id="name" required="required">
    </div>
   </div>
      <div class="form-group">
        <label>Gender:</label>
        <div class="col-sm-10">
        <input type="text"  class="form-control" id="gender" required="required">
    </div>
    </div>
      <div class="form-group">
        <label>state</label>
        <div class="col-sm-10">
       <input type="text" id="state"  class="form-control" required="required"></div>
    </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
         <button type="button"  class="btn btn-default" onclick="insert();">Upload</button>
    </div>
    </div>
   <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
         <a href="RetriveData.php">retrive</a>
    </div>
    </div></form>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="js/firebase.js" type="text/javascript"></script>

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

<script src="js/upload.js" type="text/javascript"></script>

<!-- add your javascript file  add it very bottom of body  -->
</body>
</html>