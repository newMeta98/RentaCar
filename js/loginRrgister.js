/*!  - v1.0- 2020-07-20
* Copyright MetaSoft - webprograming */
$(document).ready(function(){

var modalReserv = document.getElementById("ModalReserv");
var modalReg = document.getElementById("ModalReg");
var modalLogin = document.getElementById("ModalLogin");
window.onclick = function(event) {
  if (event.target == modalReg) {
    modalReg.style.display = "none"; 
  }
  if (event.target == modalLogin) {
    modalLogin.style.display = "none";
  }

}
var spanJon = document.getElementsByClassName("close1")[0];
spanJon.onclick = function() {
  modalReg.style.display = "none";
}

var spanLogin = document.getElementsByClassName("close2")[0];
spanLogin.onclick = function() {
  modalLogin.style.display = "none";
}
$('#JoinBtn').click(function(){
  modalReg.style.display = "block";



          var minDateSingle = new Date();
          $('#bday').datepicker({
              showAnim: 'drop',
              numberOfMonth: 1,
              changeYear: true,
              changeMonth: true,
              dateFormat: 'dd/mm/yy',
              yearRange: "-100:-16",
              onClose: function (selectedDate) 
              {

              }
          });


  $('#Join_form')[0].reset();
  $('.modal-title').text("Join");
 });
$('#LoginBtn').click(function(){
  modalLogin.style.display = "block";
  $('#Login_form')[0].reset();
  $('.modal-title').text("Log in");
 });
$('#Join_form').submit(function(event){
  event.preventDefault();

  var email = $('#email').val();
  var fname = $('#fname').val();
  var lname = $('#lname').val();
  var pnum = $('#pnum').val();
  var bday = $('#bday').val();
  var password_1 = $('#password_1').val();
  var password_2 = $('#password_2').val();
  var agree = $('#agree').val();
  var action = "reg_user";
    $.ajax({
     url:"action/serverCreate.php",
     method:"POST",
     data:{reg_user:action, email:email, fname:fname, lname:lname, pnum:pnum, bday:bday, password_1:password_1, password_2:password_2, agree:agree},
     success:function(data)
     {
       alert(data);
       location.reload();
     }
    });
 });
$('#Login_form').submit(function(event){
  event.preventDefault();

  var email = $('#email_Login').val();
  var password = $('#password_Login').val();
  var action = "log_user";
    $.ajax({
     url:"action/login.php",
     method:"POST",
     data:{log_user:action, email:email, password:password},
     success:function(data)
     {
      alert(data);
      location.reload();
        
     }
    });
 });

});