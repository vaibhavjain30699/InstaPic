function login(){

  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;

  firebase.auth().signInWithEmailAndPassword(email, pass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    window.alert(errorCode + " " + errorMessage);
  });
}

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    var result = link("user.html");
    // User is signed in.
  } else {
    // No user is signed in.
    window.alert("Logged Out");
  }
});
