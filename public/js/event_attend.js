
function user_details_validate()
{

  var i = 0;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if($('#firstname').val() == '')
  {
    $('#rfname').text('*Please enter your name');
    i++;
  }
  else
  {
    $('#rfname').text('');
  }
  if($('#email').val().match(mailformat))
  {
    $('#remail').text('');
  }
  else
  {
    $('#remail').text('*Please enter a valid email');
    i++;  
  }
  if($('#email').val() == '')
  {
    $('#remail').text('*Please enter your email address');
    i++; 
  }
  else
  {
    $('#remail').text('');
     
  }
  if($('#adr').val() == '')
  {
    $('#radr').text('*Please enter the you residential address');
    i++;
  }
  else
  {
    $('#radr').text('');
  }
   if($('#city').val() == '')
  {
    $('#rcity').text('*Please enter the your city');
    i++;
  }
  else
  {
    $('#rcity').text('');
  }
  if($('#zip').val() == '')
  {
    $('#rzip').text('*Please enter the pincode');
    i++;
  }
  else
  {
    $('#rzip').text('');
  }
  if($('#phone').val() == '')
  {
    $('#rphone').text('*Please enter the phone number');
    i++;
  }
  else
  {
    $('#rphone').text('');
  }
  if($('#fincome').val() == '')
  {
    $('#rfincome').text('*Please specify the family income');
    i++;
  }
  else
  {
    $('#rfincome').text('');
  }
  if(i == 0)
  {
    return true;
  }else
  {
    return false;
  }
}

function create_data()  
{

  // if(user_details_validate() == true)
  //    {
     
     // loading.style.display = "block";
     var ApplyEvent = '';
     //var opdata = JSON.stringify([{"applicant_id":"{{$userdata->userid}}","event_id":"{{$data['item_data'][0]->id}}","fee_amount":"{{$data['item_data'][0]->fee + ($data['item_data'][0]->fee * 0.18)}}","organiser_id":"{{$data['item_data'][0]->userid}}"}]);
     var userdata = {"email":$('#email').val(),"name":$('#firstname').val(),"phone":$('#phone').val(),"amount":$('#amount').val()};
      //console.log(userdata);
        var transact_data = JSON.stringify({"apply_event":ApplyEvent,"userdata":userdata});
        localStorage.setItem('apply_data',transact_data);
        var route_url = '<?php echo url('/'); ?>';
        var key = $('#key').val();
        data = {
        "key": $('#key').val(),
        "amount": $('#amount').val(),
        "user_id": $('#user_id').val(),
        "item_id": $('#item_id').val(),
        "firstname":$('#firstname').val(),
        "email":$('#email').val(),
        "phone":$('#phone').val(),
        "productinfo":$('#productinfo').val() ,
        "surl":$('#surl').val(),
        "furl":$('#furl').val(),
        "service_provider":$('#service_provider').val(),        
        };
        
        //console.log(data);
        make_payment();
//     }
// else
//     {  
//         alert_msg("please fill all details");
//         return;
//     }
   }


// $(document).ready(function(){
//  });
function make_payment()
{ 
  var route_url ='http://localhost/ecommerce/public';
  
	$.ajax({
        url:route_url+'/create_hash',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        method:'POST',
        data:JSON.stringify(data),
        type:"text",
        processData: false,
        //async:false,
        success:function(result){
          //console.log(result);
          //var result = JSON.parse(result);
          var txnid = result.txnid
          var hash = result.hash;
          var hash_string = result.hash_string;
          $('#hash').val(hash);
          $('#txnid').val(txnid);
          $('#hash_string').val(hash_string);
          return_value = '1'; 
          var payuForm = document.forms.payuForm;
          payuForm.submit(); 
          
        }
	});
}