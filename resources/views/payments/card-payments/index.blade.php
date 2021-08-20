@extends('layouts.dashboard.app')

@section('content')
  <h1>Checkout Payment</h1>

  <form id="payment-form" method="POST" action="{{route('orders.payment.gateway-request')}}" data-secret="{{ $intent }}" class="pt-40">
    @csrf
    <input type="hidden" name="rate" value="{{session('rate')}}">
    <input type="hidden" name="hub" value="{{session('hub')}}">
    <input type="hidden" name="content" value="{{session('content')}}">
    <input type="hidden" name="value_content" value="{{session('value_content')}}">
    <input type="hidden" name="pick_up_date" value="{{session('pick_up_date')}}">
    <input type="hidden" name="pick_up_time" value="{{session('pick_up_time')}}">
    <input type="hidden" name="weight" value="{{session('weight')}}">
    <input type="hidden" name="delivery_note" value="{{session('delivery_note')}}">
    <input type="hidden" name="sender_contact_num" value="{{session('sender_contact_num')}}">
    <input type="hidden" name="recipient_address" value="{{session('recipient_address')}}">
    <input type="hidden" name="city" value="{{session('city')}}">
    <input type="hidden" name="state" value="{{session('state')}}">
    <input type="hidden" name="postcode" value="{{session('postcode')}}">
    <input type="hidden" name="delivery_date" value="{{session('delivery_date')}}">
    <input type="hidden" name="delivery_time" value="{{session('delivery_time')}}">
    <input type="hidden" name="recipient_name" value="{{session('recipient_name')}}">
    <input type="hidden" name="recipient_contact_number" value="{{session('recipient_contact_number')}}">
    <input type="hidden" name="recipient_email" value="{{session('recipient_email')}}">

    <div class="row">
        <div class="col-md-12">
            <h4>Enter your card details<small>(card information is not stored in our server.)</small></h4>
        </div>
    </div>
      <div class="card row">
       <div class="card-body col-md-6">
            Card Holder Name: <input type="text" required placeholder="Card Holder Name" name="cardHolderName" class="block mt-1 w-full mb-4"
            id="card-holder-name"
            autofocus
            autocomplete="name"/> 
        <div id="card-element">
        <!-- Elements will create input elements here -->
        </div>

        <!-- We'll put the error messages in this element -->
        <div id="card-errors" role="alert" class="text-danger"></div>

      </div>
    </div>
   
    <button class="btn btn-success mt-5"  name="payment"  value="paymentbycard" type="submit">Pay RM{{$amount}}</button>
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


<script>
    var stripe = Stripe('{{ env('STRIPE_PUB_KEY') }}');
    var elements = stripe.elements();

    // Set up Stripe.js and Elements to use in checkout form
    var elements = stripe.elements();
    var style = {
        base: {
            color: "#32325d",
        }
    };

    var card = elements.create("card", 
    {
      style: style ,
      hidePostalCode:true
    
    });

    card.mount("#card-element");
    const cardHolderName = document.getElementById('card-holder-name');

    card.on('change', ({error}) => {
            let displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        //var payButton = document.getElementById('payStripe');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            // If the client secret was rendered server-side as a data-secret attribute
            // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
            stripe.confirmCardPayment(form.dataset.secret, {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            }).then(function(result) {
                if (result.error) {
                    // Show error to your customer (e.g., insufficient funds)
                    let displayError = document.getElementById('card-errors');
                    displayError.textContent = result.error.message;
                    console.log(result.error.message);

                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {

                        form.submit();
                        $('#loadingModal').modal('toggle');
                        
                        // Show a success message to your customer
                        // There's a risk of the customer closing the window before callback
                        // execution. Set up a webhook or plugin to listen for the
                        // payment_intent.succeeded event that handles any business critical
                        // post-payment actions.
                    }
                }
            });
        });


 </script>




@endsection

