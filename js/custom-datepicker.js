/*!  - v1.0- 2020-07-20
* Copyright MetaSoft - webprograming */
 $(document).ready(function(){ 
var input = document.getElementById("palce_input");
var modalReserv = document.getElementById("ModalReserv");
var spanJoin = document.getElementsByClassName("close3")[0];

  $('#form_search').submit(function(event){
      event.preventDefault();
        var date1 = new Date($("#from_date").val());
        var date2 = new Date($("#to_date").val());
          var time1 = $("#pickup_timee").val();
          var time2 = $("#return_timee").val();
          //Get days difference
          var milliSecoundsInOneSecond = 1000;
          var secoundsInOneHour = 3600;
          var hoursInOneDay = 24;
          var hours1 = date1.getTime() / (milliSecoundsInOneSecond * secoundsInOneHour);
          var hours2 = date2.getTime() / (milliSecoundsInOneSecond * secoundsInOneHour);
          var hoursDiff = hours2 - hours1;
          var newhoursDiff = time2 - time1;
          var newDIFF = hoursDiff + newhoursDiff;
          var newdayDiff = newDIFF / hoursInOneDay;
          if (newdayDiff < 1) {
            daysDiff = 1;
          }else {
            daysDiff = Math.ceil(newdayDiff);
          }
        var from = $('#from_date').val();
        var to = $('#to_date').val();
        var pickup = $('#pickup_timee').val();
        var retur = $('#return_timee').val();
        var action = "search";
        var place_input = "";
        var selected=document.getElementById("select_place").value;
          if(selected==3){
              var place = $('#select_place').val();
              var place_input = $('#palce_input').val();
          }else{
              var place = $('#select_place').val();
              var place_input = "Drugo (unesi adresu)";
          }

        
            if ($('#select_place').val()== '') {
              $('#select_place').addClass( "empty" );
            }else if(from == ''){
              $('#from_date').addClass( "empty" );
            }else if(to== ''){
              $('#to_date').addClass( "empty" );
            }else{
                modalReserv.style.display = "block";
                $.ajax({
                   url:"action/serverReservModal.php",
                   method:"POST",
                   data:{action:action, select_place:place, from_date:from, to_date:to, pickup_time:pickup, return_time:retur, daysDiff:daysDiff, place_input:place_input},
                   success:function(data)
                        {
                          $('#Reserv_form').html(data);
                          fromdatepick();
                          dodatci();
                          var iznosIntervalsearch = setInterval(function(){
                          iznos();depozit();}, 500);
                          spanJoin.onclick = function() {
                            modalReserv.style.display = "none";
                            clearInterval(iznosIntervalsearch);} 
                        }
                });
            }
  });


  $('.btn_triger_ReservCar').click(function(){

    modalReserv.style.display = "block";
    var action = "reserv_car";
    var sendcarid = $(this).val();
       $.ajax({
            url:"action/serverReservModal.php",
            method:"POST",
            data:{action:action, sendcarid:sendcarid},
            success:function(data)
             {
                $('#Reserv_form').html(data);
                  fromdatepick();Buttons();
                  var iznosIntervalcar = setInterval(function(){
                    iznos();
                    depozit();
                  },500);
                  spanJoin.onclick = function() {
                    modalReserv.style.display = "none";
                    clearInterval(iznosIntervalcar);
                } 
             }
        });  
  });

      var minDate = new Date();
           $("#from_date").datepicker({
              showAnim: 'drop',
              numberOfMonth: 1,
              minDate: minDate,
              dateFormat: 'yy/mm/dd',
              onClose: function (selectedDate) {
                $('#to_date').datepicker("option", "minDate", selectedDate);
              }
           });
           $("#to_date").datepicker({
              showAnim: 'drop',
              numberOfMonth: 1,
              minDate: minDate,
              dateFormat: 'yy/mm/dd',
              onClose: function (selectedDate) {
                
              }
           });



  $('#Reserv_form').submit(function(event){
        event.preventDefault();

  });


    function iznos(){
          var date1 = new Date($("#from_date_module").val());
          var date2 = new Date($("#to_date_module").val());
          var time1 = $("#pickup_time").val();
          var time2 = $("#return_time").val();
          //Get days difference
          var milliSecoundsInOneSecond = 1000;
          var secoundsInOneHour = 3600;
          var hoursInOneDay = 24;
          var hours1 = date1.getTime() / (milliSecoundsInOneSecond * secoundsInOneHour);
          var hours2 = date2.getTime() / (milliSecoundsInOneSecond * secoundsInOneHour);
          var hoursDiff = hours2 - hours1;
          var newhoursDiff = time2 - time1;
          var newDIFF = hoursDiff + newhoursDiff;
          var newdayDiff = newDIFF / hoursInOneDay;
          if (newdayDiff < 1) {
            daysDiff = 1;
          }else {
            daysDiff = Math.ceil(newdayDiff);
          }
          var gpsVal= $("#button1").val();
          var osiguranjeVal= $("#button2").val();
          var sedisteVal= $("#button3").val();
          var kartaVal= $("#button4").val();
          var lanciVal= $("#button5").val();
          var car = $("#select_car_module").val();
          var action = "iznos";
            $.ajax({
         url:"action/serverReservModal.php",
         method:"POST",
         data:{action:action, daysDiff:daysDiff, car:car, gpsVal:gpsVal, osiguranjeVal:osiguranjeVal, sedisteVal:sedisteVal, kartaVal:kartaVal, lanciVal:lanciVal},
         success:function(data)
         {
            $('#ukupno').val(data);     
         }
        });
    }
        function depozit(){
          //Get days difference
          var osiguranjeVal= $("#button2").val();
          var car = $("#select_car_module").val();
          var action = "depozit";
            $.ajax({
         url:"action/serverReservModal.php",
         method:"POST",
         data:{action:action, car:car, osiguranjeVal:osiguranjeVal},
         success:function(data)
         {
            $('#depozzit').html(data);
         }
        });
    }

    function fromdatepick(){
              var minDate = new Date();
           $('#from_date_module').datepicker({
              showAnim: 'drop',
              numberOfMonth: 1,
              minDate: minDate,
              dateFormat: 'yy/mm/dd',
              onClose: function (selectedDate) 
              {
                $('#to_date_module').datepicker("option", "minDate", selectedDate);
              }
           });
           $('#to_date_module').datepicker({
              showAnim: 'drop',
              numberOfMonth: 1,
              minDate: minDate,
              dateFormat: 'yy/mm/dd',
              onClose: function (selectedDate) 
              {
                
              }
           }); 
              var minDateSingle = new Date();
           $('#rodjen').datepicker({
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

    }
    function Buttons(){
          $('#button1').click(function(){
              if ($(this).val() == "unchek") {
              $(this).val("chek");
              }
              else {
              $(this).val("unchek");
              }
          });
          
          $('#button2').click(function(){
              if ($(this).val() == "unchek") {
              $(this).val("chek");
              }
              else {
              $(this).val("unchek");
              }
          });
          
          $('#button3').click(function(){
              if ($(this).val() == "unchek") {
              $(this).val("chek");
              }
              else {
              $(this).val("unchek");
              }
          });
          
          $('#button4').click(function(){
              if ($(this).val() == "unchek") {
              $(this).val("chek");
              }
              else {
              $(this).val("unchek");
              }
          });
          
          $('#button5').click(function(){
              if ($(this).val() == "unchek") {
              $(this).val("chek");
              }
              else {
              $(this).val("unchek");
              }
          });

          $('#next_btn').click(function(){
              var date1 = new Date($("#from_date_module").val());
              var date2 = new Date($("#to_date_module").val());

              var timeDifference = date2.getTime() - date1.getTime();
                
              //Get days difference
              var milliSecoundsInOneSecond = 1000;
              var secoundsInOneHour = 3600;
              var hoursInOneDay = 24;
              var daysDiff = timeDifference / (milliSecoundsInOneSecond * secoundsInOneHour * hoursInOneDay) + 1;
              var gpsVal= $("#button1").val();
              var osiguranjeVal= $("#button2").val();
              var sedisteVal= $("#button3").val();
              var kartaVal= $("#button4").val();
              var lanciVal= $("#button5").val();
              var car = $("#select_car_module").val();

              var mestopPreuzimanja = $("#select_place_module").val();
              var mestopVracanja = $("#select_place_module2").val();
              var place_input1 = $("#input_place_module").val();
              var place_input2 = $("#input_place_module2").val();
              var datumPreuzimanja = $("#from_date_module").val();
              var datumVracanja = $("#to_date_module").val();
              var vremePreuzimanja = $("#pickup_time").val();
              var vremeVracanja = $("#return_time").val();

              var ime = $("#ime").val();
              var prezime = $("#prezime").val();
              var brtel = $("#brtel").val();
              var email = $("#eposta").val();
              var rodjen = $("#rodjen").val();
              var let = $("#let").val();
              var komentar = $("#komentar").val();
              var action = "dalje";


                function back_btn() {
                  $('#back_btn').click(function(){
                      var action = "reserv_car";
                      var sendcarid = car;
                      $.ajax({
                         url:"action/serverReservModal.php",
                         method:"POST",
                         data:{action:action, sendcarid:sendcarid},
                         success:function(data)
                           {
                                $('#Reserv_form').html(data);
                                fromdatepick();Buttons();back_btn_input();
                                var iznosIntervalcar = setInterval(function(){
                                  iznos();depozit();},500);
                                spanJoin.onclick = function() {
                                  modalReserv.style.display = "none";
                                  clearInterval(iznosIntervalcar);} 
                           }
                      });  
                  });
                }
                function rezervisi() {
                  $('#rezervisi').click(function(){
                      var action = "send";
                      var sendcarid = car;
                      $.ajax({
                          url:"action/serverReservModal.php",
                          method:"POST",
                          data:
                          {
                            action:action, daysDiff:daysDiff, car:car, 
                            gpsVal:gpsVal, osiguranjeVal:osiguranjeVal, 
                            sedisteVal:sedisteVal, kartaVal:kartaVal, 
                            lanciVal:lanciVal, mestopPreuzimanja:mestopPreuzimanja, 
                            mestopVracanja:mestopVracanja,
                            place_input1:place_input1, place_input2:place_input2, 
                            datumPreuzimanja:datumPreuzimanja, 
                            datumVracanja:datumVracanja, 
                            vremePreuzimanja:vremePreuzimanja, 
                            vremeVracanja:vremeVracanja, 
                            ime:ime, prezime:prezime, brtel:brtel,
                            email:email, rodjen:rodjen, let:let, komentar:komentar
                          },
                          success:function(data)
                          {
                              alert(data);
                              modalReserv.style.display = "none";
                          }
                      });
                  });
                }
               function back_btn_input() {
              $("#select_car_module").val(car);

              $("#select_place_module").val(mestopPreuzimanja);
              $("#select_place_module2").val(mestopVracanja);
              $("#from_date_module").val(datumPreuzimanja);
              $("#to_date_module").val(datumVracanja);
              $("#pickup_time").val(vremePreuzimanja);
              $("#return_time").val(vremeVracanja);

              $("#ime").val(ime);
              $("#prezime").val(prezime);
              $("#brtel").val(brtel);
              $("#eposta").val(email);
              $("#rodjen").val(rodjen);
              $("#let").val(let);
              $("#komentar").val(komentar);
               }
            if ($('#select_place_module').val()== '') {
                $('#select_place_module').addClass( "empty" );
            }else if($('#select_place_module2').val()== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#select_place_module2').addClass( "empty" );
            }else if(datumPreuzimanja == ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#from_date_module').addClass( "empty" );
            }else if(datumVracanja== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#to_date_module').addClass( "empty" );
            }else if(vremePreuzimanja== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#pickup_time').addClass( "empty" );
            }else if(vremeVracanja== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#return_time').addClass( "empty" );
            }else if(ime== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#ime').addClass( "empty" );
            }else if(prezime== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#prezime').addClass( "empty" );
            }else if(brtel== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#brtel').addClass( "empty" );
            }else if(email== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#eposta').addClass( "empty" );
            }else if(rodjen== ''){
                $('select').removeClass( "empty" );
                $('input').removeClass( "empty" );
                $('#rodjen').addClass( "empty" );
            }else{
                var numpattern = /^[^a-zA-Z][+0-9]+[^a-zA-Z~!@#$%^&*()_+][0-9]+[^a-zA-Z~!@#$%^&*()_+][0-9]+$/;
                if (brtel.match(numpattern)) {
                    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                    if (email.match(pattern)) {
                      $.ajax({
                        url:"action/serverReservModal.php",
                        method:"POST",
                        data:
                        {
                          action:action, daysDiff:daysDiff, car:car, 
                          gpsVal:gpsVal, osiguranjeVal:osiguranjeVal, 
                          sedisteVal:sedisteVal, kartaVal:kartaVal, 
                          lanciVal:lanciVal, mestopPreuzimanja:mestopPreuzimanja, 
                          mestopVracanja:mestopVracanja,
                          place_input1:place_input1, place_input2:place_input2, 
                          datumPreuzimanja:datumPreuzimanja, 
                          datumVracanja:datumVracanja, 
                          vremePreuzimanja:vremePreuzimanja, 
                          vremeVracanja:vremeVracanja, 
                          ime:ime, prezime:prezime, brtel:brtel,
                          email:email, rodjen:rodjen, let:let, komentar:komentar
                        },
                        success:function(data)
                        {
                            $('#Reserv_form').html(data);
                            back_btn();rezervisi();
                        }
                      });
                  }else{
                      $('select').removeClass( "empty" );
                      $('input').removeClass( "empty" );
                      $('#eposta').addClass( "empty" );
                  } 
                }else{
                    $('select').removeClass( "empty" );
                    $('input').removeClass( "empty" );
                    $('#brtel').addClass( "empty" );
                }
                
            }
          });
  
    }
$("#select_place").click(function(){
    var selected=document.getElementById("select_place").value;
  if(selected==3){
      input.style.display = "block";
  }else{
      input.style.display = "none";
  }
});
});  