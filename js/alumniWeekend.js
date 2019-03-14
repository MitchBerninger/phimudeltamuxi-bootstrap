$(document).ready(function(){
  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  $( "#alumniWeekendForm" ).validate({
    rules:{
      'firstName':{
        required:true
      },
      'lastName':{
        required:true
      },
      email:{
        required:false,
        email:true
      },
      'pledgeClass':{
        required:true
      },
      'guests':{
        required:false,
        digits:true
      },
      'days':{
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
      'pledgeClass':{
        required:''
      },
      'guests':{
        required:'',
        digits:''
      },
      'days':{
        required:''
      }
    }
  });
});
