

  $(document).ready(function(){



    $('.delete-link').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
            title: '',
            text: 'Anda yakin ingin menghapusnya?',
            html: true,
            confirmButtonColor: '#d9534f',
            showCancelButton: true,
            },function(){
            window.location.href = getLink
        });
      return false;
    });

    // $('.confirm').on('click',function(){
    //   var getling = "?nav=home_admin";
    //   swal({
    //           title: '',
    //           text: 'Anda sudah yakin dengan pembaruan',
    //           html: true,
    //           confirmButtonColor: '#d9534f',
    //           showCancelButton: true,
    //           },function(){
    //           window.location.href = getling
    //       });
    //     return false;
    // });


// date register //
    $(function() {
      $( "#datepicker" ).datepicker( {
        dateFormat: "yy-mm-dd",
        showAnim: "slideDown",
        changeMonth: true,
        changeYear: true,
        yearRange: "1980:2002"

      } );
    });



    function validasiemail(t_email){
      var re = /[a-zA-Z0-9_]+@[a-zA-Z]+\.(com|co.id|net)$/;
      return re.test(t_email);
    }


      $("#register").click(function(){


        var t_nama = $("#txtname").val();
        var t_date = $("#datepicker").val();
        var t_email = $("#email").val();
        var t_op = $("#option").val();
        var t_op1 = $("#option1").val();
        var t_op2 = $("#option2").val();
        var t_phone = $("#phone").val();
        var t_address = $("#addres").val();
        var t_type = $("#option3").val();
        var t_pass = $("#pass").val();



        if (t_nama == "") {
          $("#txtname").css("border-left","6px solid #ee4b22").attr("placeholder","ISI NAMA LENGKAP ANDA !");
        }
        if (t_date == "") {
          $("#datepicker").css("border-left","6px solid #ee4b22").attr("placeholder","ISI TANGGAL LAHIR !");
        }
        if (t_email == "") {
          $("#email").css("border-left","6px solid #ee4b22").attr("placeholder","ISI Email DENGAN BEBAR !");
        }
        if (validasiemail(t_email) ) {

        }else {
          $("#email").css("border-left","6px solid #ee4b22");
          return false;
        }
        if (t_op == "") {
          $("#option").css("border-left","6px solid #ee4b22");
        }
        if (t_op1 == "") {
          $("#option1").css("border-left","6px solid #ee4b22");
        }
        if (t_op2 == "") {
          $("#option2").css("border-left","6px solid #ee4b22");
        }
        if (t_phone == "") {
          $("#phone").css("border-left","6px solid #ee4b22").attr("placeholder","NO HP ANDA !");
        }
        if (t_address == "") {
          $("#addres").css("border-left","6px solid #ee4b22").attr("placeholder","ALAMAT ANDA !");
        }
        if (t_type == "") {
          $("#option3").css("border-left","6px solid #ee4b22");
        }
        if (t_pass == "") {
          $("#pass").css("border-left","6px solid #ee4b22").attr("placeholder","ISI NAMA LENGKAP ANDA !");
        }
        if (t_nama == "" || t_date == "" || t_email == "" || t_op == "" || t_op1 == "" || t_op2 == "" || t_phone == "" || t_address == "" || t_type == "") {
            return false;
        }else{

        }
      });

      $("#button").click(function(){
        window.location.href = "http://localhost/myApp/?nav=login";
      });

      $(function(){
      	$('.contain_slider img:first').addClass('top');
          var change = function (){
           		var curr = $('.contain_slider img.top');
      			var next = curr.next();
      			if(!next.length){
      				next = $('.contain_slider  img:first');
      				next.addClass('top');
      		        curr.animate({opacity: 0.0},2000, function() {
      		            curr.removeClass('top');
      		            curr.css({opacity: 1.0});
      		        });
      			}else{
      				next.css({opacity: 0.0})
      		        .addClass('top')
      		        .animate({opacity: 1.0}, 2000, function() {
      		            curr.removeClass('top');
      		        });
      		    }
           }

          setInterval(change, 5000 );
      });



    $(function(){
        $(this).removeAttr("#slid_menu");
    });

    $("#op_src").on('click',function(){
      var op_cari =  $("#op_src").val();
      if (op_cari == 1) {
        $("#txt").attr("placeholder","Enter your Full name !");
      }
      if (op_cari == 2) {
        $("#txt").attr("placeholder","Enter your Email !");
      }
      if (op_cari == 3) {
        $("#txt").attr("placeholder","Enter your Phone !");
      }
      if (op_cari == 4) {
        $("#txt").attr("placeholder","Enter your Addres!");
      }
    });

    $("#reset").click(function(){
            $("#txtname").val("");
            $("#datepicker").val("");
            $("#email").val("");
            $("#option").val("");
            $("#option1").val("");
            $("#option2").val("");
            $("#phone").val("");
            $("#addres").val("");
            $("#option3").val("");
            $("#pass").val("");

        return false;
    });

    // ========control aadmin==========//
      $(function(){
      });
      $("#tp_home").on('click',function(){
        var getlink = $(this).attr('href');
        window.location.href = getLink

      });
      $("#tp_member").on('click', function(){

      });


    // ===================//
    // ===========animation========//
      $(function(){

      });

      $(function(){
        $(".main_menu").animate({
          height: '500px'
        },2000);
      });

    // =============================//
    //========= evex scrol==========//
    $(function(){
      $(window).scroll(function() {

          var scroll = $(window).scrollTop();

          if (scroll >= 500) {
              $(".menu_scroll").css("display","");
          } else {
            $(".menu_scroll").css("display","none");
          }
          if (scroll >= 500) {
            $(".moto_img img").animate({
              width: '100px',
              height: '90px'
            },2000);
          }else {
        
          }
      });
    });
    // =============================//

  });
