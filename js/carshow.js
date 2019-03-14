$(document).ready(function(){
  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  $( "#carshowform" ).validate({
    rules:{
      'firstName':{
        required:true
      },
      'lastName':{
        required:true
      },
      email:{
        required:true,
        email:true
      },
      'phone':{
        required:true,
        digits: true,
        minlength:10
      },
      'carYear':{
        required:true
      },
      'carMake':{
        required:true
      },
      'carModel':{
        required:true
      },
      'vclass':{
        required:true
      }
    }, //end rules
    messages:{
      'firstName':{
        required:''
      },
      'lastName':{
        required:''
      },
      email:{
        required:'',
        email:''
      },
      'phone':{
        required:'',
        digits:'',
        minlength:''
      },
      'carYear':{
        required:''
      },
      'carMake':{
        required:''
      },
      'carModel':{
        required:''
      },
      'vclass':{
        required:''
      }
    }
  });
});
