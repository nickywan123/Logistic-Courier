@extends('layouts.dashboard.app')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="p-lg-30 p-md-30 p-sm-30 p-10">
                <h2 class="title-section">Regular Order</h2>
                <p class="subtitle-section">Enter pick-up location & delivery location</p>
                <form action="{{ route('order.store') }}" method="POST" id="order-form-credit" class="row">
                    @csrf
                    <div class="col-md-6">
                        <h3 class="title-section">Pick-up Location</h3>

                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('schedule_type') is-invalid @enderror" id="scheduleType" name="schedule_type" value="Dropoff" readonly>
                            @error('schedule_type')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select class="form-select rounded-pill px-20 @error('hub') is-invalid @enderror" name="hub" id="hub" >
                                <option disabled selected>Select a hub to dropoff</option>
                                @foreach($hubs as $hub)

                                <option value="{{$hub->id}}">{{$hub->hub_name}}</option>

                                @endforeach
                            </select>
                            @error('hub')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('content') is-invalid @enderror" id="content" name="content" value="{{ old('content') }}" placeholder="Content(e.g:book)">
                            @error('content')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('value_content') is-invalid @enderror" id="value_content" name="value_content" value="{{ old('value_content') }}" placeholder="Value of Content(e.g-10)">
                            @error('value_content')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control rounded-pill px-20 @error('pick_up_date') is-invalid @enderror" id="pickupDate" name="pick_up_date" value="{{ old('pick_up_date') }}" autocomplete="off" placeholder="Pick-up date">
                                @error('pick_up_date')
                                <div class="ps-25 invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control rounded-pill px-20 @error('pick_up_time') is-invalid @enderror" id="pickupTime" name="pick_up_time" value="{{ old('pick_up_time') }}" autocomplete="off" placeholder="Pick-up time">
                                @error('pick_up_time')
                                <div class="ps-25 invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" value="{{ $rate->id }}" name="rate">
                            <input type="text" class="form-control rounded-pill px-20 @error('weight') is-invalid @enderror" value="{{$parcel_weight}}" name="weight" id="weight" readonly>
                            @error('weight')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('sender_contact_num') is-invalid @enderror"  name="sender_contact_num" id="senderContactNumber" placeholder="Sender's Contact Number">
                            @error('sender_contact_num')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control rounded-3 px-20" name="delivery_note" id="" placeholder="Delivery Note (optional)"></textarea>
                            @error('delivery_note')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="title-section">Delivery Location</h3>

                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('recipient_address') is-invalid @enderror" id="recipientAddress" name="recipient_address" value="{{ old('recipient_address') }}" placeholder="Recipient Address">
                            @error('recipient_address')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('city') is-invalid @enderror" id="city" name="city" value="{{ $city }}" placeholder="City" readonly>
                            @error('city')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('state') is-invalid @enderror" id="state" name="state" value="{{ $state->name }}" placeholder="State" readonly>
                            @error('state')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('postcode') is-invalid @enderror" id="postcode" name="postcode" value="{{$postcode_delivery}}" placeholder="Postcode" readonly>
                            @error('postcode')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('delivery_date') is-invalid @enderror" id="deliveryDate" name="delivery_date" value="{{ old('delivery_date') }}" autocomplete="off" placeholder="Delivery Date">
                            @error('delivery_date')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select class="form-select rounded-pill px-20 @error('delivery_time') is-invalid @enderror" id="deliveryTime" name="delivery_time" autocomplete="off" >
                                <option disabled selected>Delivery time</option>
                                <option value="9.00AM - 11.00AM">9.00AM - 11.00AM</option>
                                <option value="11.00AM - 1.00PM">11.00AM - 1.00PM</option>
                                <option value="1.00PM - 3.00PM">1.00PM - 3.00PM</option>
                                <option value="3.00PM - 5.00PM">3.00PM - 5.00PM</option>
                            </select>
                            @error('delivery_time')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text"class="form-control rounded-pill px-20 @error('recipient_name') is-invalid @enderror" id="recipientName" name="recipient_name" value="{{ old('recipient_name') }}" placeholder="Recipient Name">
                            @error('recipient_name')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-pill px-20 @error('recipient_contact_number') is-invalid @enderror" id="recipientContactNumber" name="recipient_contact_number" value="{{ old('recipient_contact_number') }}" placeholder="Recipient Contact Number (e.g 0135672839)">
                            @error('recipient_contact_number')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control rounded-pill px-20 @error('recipient_email') is-invalid @enderror" id="recipientEmail" name="recipient_email" value="{{ old('recipient_email') }}" placeholder="Recipient Email">
                            @error('recipient_email')
                            <div class="ps-25 invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="order-btn" class="btn btn-yellow-hub rounded-pill px-30">Proceed</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


 <!-- Modal -->
 <div class="modal fade" id="confirmOrder" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-height">
        <div class="modal-header"   >
          <h5 class="modal-title">Order Confirmation</h5>
        </div>
        <div class="modal-body">
          <p>Your credit balance will be charge RM{{$rate->cost}} for the invoice. Proceed this order?</p>
          <div class="text-center">
            <button type="submit" class="btn btn-primary confirm-pay-now" id="payNowBtn">Pay Now</button>
            <button type="button" id="closeModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Loading bar page -->
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-height">
        <div class="modal-header" style="background-color: #D0D0D0">
          <h5 class="modal-title">Processing Order</h5>
        </div>
        <div class="modal-body">
          <div><img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif"></div>
          <div class="text-center">
           <p>Please wait while your order is processing. Do not refresh or close your browser...</p>
          </div>
        </div>
      </div>
    </div>
</div>



    @push('onpagescript')
        <!--dashboard/orders/booking--->
    <script>
        $(document).ready(function() {
            //hide loading modal before submitting form
            var loading = $('#loadingModal').hide();
            // Validate form
            $("#order-form-credit").validate({
                rules: {
                    schedule_type: {
                        required: true
                    },
                    hub: {
                        required: true
                    },
                    content: {
                        required: true
                    },
                    value_content: {
                        required:true
                    },
                    pick_up_date: {
                        required: true
                    },
                    pick_up_time: {
                        required: true
                    },
                    weight: {
                        required: true
                    },
                    sender_contact_num :{
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 15
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
                        required: true
                    },
                    delivery_time: {
                        required: true
                    },
                    recipient_name: {
                        required: true
                    },
                    recipient_contact_number: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    recipient_email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    schedule_type: {
                        required: "Please select a schedule type"
                    },
                    hub: {
                        required: "Please choose a hub"
                    },
                    content: {
                        required: "Please enter name of content"
                    },
                    value_content: {
                        required: "Please enter value of content",
                        digits: "Content value should be in number",
                    },
                    pick_up_date: {
                        required: "Please select a pick up date"
                    },
                    pick_up_time: {
                        required: "Please select a pick up time"
                    },
                    weight: {
                        required: "Please enter the weight"
                    },
                    sender_contact_num: {
                        required: "Please enter your contact number",
                        digits: "Contact number should be in digits",
                        minlength: "Contact number length must be greater than 10",
                        maxlength: "Contact number length must be smaller than 15"
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
                        required: "Please select your delivery time range"
                    },
                    recipient_name: {
                        required: "Please provide recipient name"
                    },
                    recipient_contact_number: {
                        required: "Please provide recipient contact number",
                        digits: "Contact number should be in digits",
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
            $('#order-btn').click(function () {
                if ($("#order-form-credit").validate().element('#scheduleType') &&
                    $("#order-form-credit").validate().element('#hub') &&
                    $("#order-form-credit").validate().element('#content') &&
                    $("#order-form-credit").validate().element('#value_content') &&
                    $("#order-form-credit").validate().element('#pickupDate') &&
                    $("#order-form-credit").validate().element('#pickupTime') &&
                    $("#order-form-credit").validate().element('#weight') &&
                    $("#order-form-credit").validate().element('#senderContactNumber') &&
                    $("#order-form-credit").validate().element('#recipientAddress') &&
                    $("#order-form-credit").validate().element('#city') &&
                    // $("#order-form-credit").validate().element('#state') &&
                    // $("#order-form-credit").validate().element('#postcode') &&
                    $("#order-form-credit").validate().element('#deliveryDate') &&
                    $("#order-form-credit").validate().element('#deliveryTime') &&
                    $("#order-form-credit").validate().element('#recipientName') &&
                    $("#order-form-credit").validate().element('#recipientContactNumber') &&
                    $("#order-form-credit").validate().element('#recipientEmail')
                ) {
                    //show modal if validation passes
                     $('#confirmOrder').modal('toggle');
                    //confirm('a you sure');
                    // return true;
                } else {
                    return false;
                }
            });

            $('#closeModalBtn').click(function () {
                $('#confirmOrder').modal('hide');
            });

            //Show loading progress when submit pay now
            $('#payNowBtn').click(function () {
                $('#confirmOrder').modal('hide');
                $('#loadingModal').modal('toggle');
            });

            // $('.confirm-pay-now').click(function(){
            //   $("#order-form").submit();
            // });
        });

    </script>

    @endpush


@endsection

