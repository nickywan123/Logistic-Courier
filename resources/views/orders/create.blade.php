@extends('layouts.dashboard.app')

@section('content')

<form method="POST" action="{{route('order.store')}}" id="order-form">
<div class="row">
    <div class="offset-1 col-5">
        {{-- <div class="row">
            <h4 style="font-weight: 700">Regular Order : xxxx</h4>
        </div> --}}
        <h4 style="font-weight: 700;margin-top:3rem;">Pick-up Location</h4> 

          @csrf
          <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text" class="form-control @error('schedule_type') is-invalid @enderror" value="Dropoff" style="border-radius:20px;" id="scheduleType" name="schedule_type" readonly >
                @error('schedule_type')
                 <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
              <select class="form-control custom-select @error('hub') is-invalid @enderror" name="hub" style="border-radius:20px;" id="hub" >
                <option disabled selected>Choose a hub</option>
               
                <option value="xxx">FUIYOH HUB KAJANG</option>
                <option value="xxx">FUIYOH HUB SG BULOH</option>
                <option value="xxx">FUIYOH HUB KAJANG</option>

              </select>
              @error('hub')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text"  placeholder="Content(e.g:book)" value="{{ old('content') }}" class="form-control @error('content') is-invalid @enderror" style="border-radius:20px;" name="content" id="content" >
              @error('content')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text"  placeholder="Value of Content(e.g-10)" value="{{ old('value_content') }}" class="form-control @error('value_content') is-invalid @enderror" style="border-radius:20px;" name="value_content" id="value_content" >
              @error('value_content')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text"  placeholder="Pick-up date" value="{{ old('pick_up_date') }}" class="form-control @error('pick_up_date') is-invalid @enderror" style="border-radius:20px;" name="pick_up_date" id="pickupDate" autocomplete="off" >
              @error('pick_up_date')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
                <input type="text"  placeholder="Pick-up time" value="{{ old('pick_up_time') }}" class="form-control @error('pick_up_time') is-invalid @enderror" style="border-radius:20px;" name="pick_up_time" id="pickupTime" autocomplete="off" >
              @error('pick_up_time')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
                <input type="hidden" value="{{$rate->id}}" name="rate">
                <input type="text" value="{{$rate->weight}}" class="form-control" style="border-radius:20px;" name="weight" id="weight" readonly>
              @error('weight')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
                <textarea class="form-control"  id="" cols="30" rows="4" style="border-radius: 20px;" name="delivery_note" placeholder="Delivery Note(optional)"></textarea>
              @error('delivery_note')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
    </div>
    <div class="col-6">   
        <h4 style="font-weight: 700;margin-top:3rem;">Delivery Location</h4>
          <div class="form-row">
            <div class="form-group col-md-8">
                <input type="text"  placeholder="Recipient Address" value="{{ old('recipient_address') }}" class="form-control @error('recipient_address') is-invalid @enderror" style="border-radius:20px;" name="recipient_address" id="recipientAddress" >
                @error('recipient_address')
                 <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                <input type="text" placeholder="City" value="{{$city}}" class="form-control @error('city') is-invalid @enderror" style="border-radius:20px;" name="city" id="city" readonly >
              @error('city')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text"  value="{{$state->name}}" class="form-control @error('state') is-invalid @enderror" style="border-radius:20px;" name="state" id="state" readonly>
              @error('state')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="form-group col-md-4">
                <input type="text"  value="{{$postcode_delivery}}" class="form-control @error('postcode') is-invalid @enderror" style="border-radius:20px;" name="postcode" id="postcode" readonly >
              @error('postcode')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                <input type="text"  placeholder="Delivery Date" value="{{ old('delivery_date') }}" class="form-control @error('delivery_date') is-invalid @enderror" style="border-radius:20px;" name="delivery_date" id="deliveryDate" autocomplete="off" >
              @error('delivery_date')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                <select class="form-control custom-select @error('delivery_time') is-invalid @enderror" name="delivery_time" id="deliveryTime" style="border-radius:20px;" autocomplete="off" >
                    <option disabled selected>Delivery time</option>
                   
                    <option value="xxx">9.00AM-11.00AM</option>
                    <option value="xxx">11.00AM-1.00PM</option>
                    <option value="xxx">1.00PM-3.00PM</option>
                    <option value="xxx">3.00PM-5.00PM</option>
    
                  </select>
                  @error('delivery_time')
                  <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                <input type="text"  placeholder="Recipient Name" value="{{ old('recipient_name') }}" class="form-control @error('recipient_name') is-invalid @enderror" style="border-radius:20px;" name="recipient_name" id="recipientName"  >
              @error('recipient_name')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                <input type="text"  placeholder="Recipient Contact Number (e.g 0135672839)" value="{{ old('recipient_contact_number') }}" class="form-control @error('recipient_contact_number') is-invalid @enderror" style="border-radius:20px;" name="recipient_contact_number" id="recipientContactNumber"  >
              @error('recipient_contact_number')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                <input type="email"  placeholder="Recipient Email" value="{{ old('recipient_email') }}" class="form-control @error('recipient_email') is-invalid @enderror" style="border-radius:20px;" name="recipient_email" id="recipientEmail"  >
              @error('recipient_email')
              <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
       
          <div class="form-row">
            <div class="form-group offset-md-3">
                <button type="button" id="order-btn"  class="btn proceed-button" style="min-width: 200px;">Proceed</button>  
            </div>   
          </div>
          
    </div>  
</div>


 <!-- Modal -->
 <div class="modal fade" id="confirmOrder" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-content-height">
      <div class="modal-header" style="background-color: #D0D0D0">
        <h5 class="modal-title">Order Confirmation</h5>
      </div>
      <div class="modal-body">
        <p>Your credit balance will be charge RM{{$rate->cost}} for the invoice. Proceed this order?</p>
        <div class="text-center">
          <button type="submit" class="btn btn-primary confirm-pay-now ">Pay Now</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form> 

<style>
label.error{
  color: red;
  font-size: 13px;
}
</style>
<script>
 
 // Validate form
$("#order-form").validate({
  
  rules: {
      schedule_type:{
           required:true
      },
      hub:{
           required:true
      },
      pick_up_date:{
           required:true
      },
      pick_up_time:{
            required:true
      },
      weight:{
            required:true
      },
      recipient_address: {
          required: true,
          minlength: 3
      },
      city: {
          required: true
      },
      // state: {
      //     required: true
      // },
    
      // postcode: {
      //     required: true,
      //     postcode: true
      // },
      delivery_date: {
          required:true
      },
      delivery_time: {
          required:true
      },
      recipient_name:{
          required:true
      },
      recipient_contact_number:{
         required: true,
         digits:true,
         minlength: 10,
        maxlength: 15
      },
      recipient_email: {
          required: true,
          email: true
      }
   
},
  messages: {
    schedule_type:{
           required:"Please select a schedule type"
      },
      hub:{
           required:"Please choose a hub"
      },
      content: {
         required: "Please enter name of content"
      },
      value_content : {
         required:"Please enter value of content",
         digits:"Content value should be in number",
      },
      pick_up_date:{
           required:"Please select a pick up date"
      },
      pick_up_time:{
            required:"Please select a pick up time"
      },
      weight:{
            required:"Please enter the weight"
      },
      recipient_address: {
          required: "Recipient Address is required",
          minlength: "Address must be more than 3 characters"
      },
      city: {
          required: "Please enter the recipient city"
      },
      // state: {
      //     required: "Please select a state"
      // },
    
      // postcode: {
      //     required: "Please select a postcode",
      //     postcode: "Invalid postcode"
      // },
      delivery_date: {
          required: "Please select a delivery date"
      },
      delivery_time: {
          required:"Please select your delivery time range"
      },
      recipient_name:{
          required:"Please provide recipient name"
      },
      recipient_contact_number:{
         required: "Please provide recipient contact number",
         digits:"Contact number should be in digits",
         minlength: "Contact number length must be greater than 10",
         maxlength: "Contact number length must be smaller than 15"
      },
      recipient_email: {
          required: "Please enter recipient's email",
          email: "Email is not valid"
      }
  }
});

// validate all the fields before showing modal
$('#order-btn').click(function() {
if (
    $("#order-form").validate().element('#scheduleType') &&
    $("#order-form").validate().element('#hub') &&
    $("#order-form").validate().element('#content') &&
    $("#order-form").validate().element('#value_content') &&
    $("#order-form").validate().element('#pickupDate') &&
    $("#order-form").validate().element('#pickupTime') &&
    $("#order-form").validate().element('#weight') &&
    $("#order-form").validate().element('#recipientAddress') &&
    $("#order-form").validate().element('#city') &&
    // $("#order-form").validate().element('#state') &&
    // $("#order-form").validate().element('#postcode') &&
    $("#order-form").validate().element('#deliveryDate') &&
    $("#order-form").validate().element('#deliveryTime') &&
    $("#order-form").validate().element('#recipientName') &&
    $("#order-form").validate().element('#recipientContactNumber') &&
    $("#order-form").validate().element('#recipientEmail') 
   
) {
    //show modal if validation passes
     $('#confirmOrder').modal('toggle');  
    // return true;
} else {
     return false;
  }
});

// $('.confirm-pay-now').click(function(){
//   $("#order-form").submit();
// });

</script>




@endsection

