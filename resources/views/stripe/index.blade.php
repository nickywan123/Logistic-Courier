@extends('layouts.dashboard.app')

@section('content')
  <h1>Stripe Testing</h1>

  <form id="payment-form" method="POST" action="{{route('payment.success')}}" data-secret="{{ $intent }}" class="pt-40">
    @csrf
    <input type="text" required placeholder="card holder name" name="cardHolderName" class="block mt-1 w-full mb-4"
                 id="card-holder-name"
                 autofocus
                 autocomplete="name"/>
                 
    <div id="card-element">
        <!-- Elements will create input elements here -->
    </div>

    <!-- We'll put the error messages in this element -->
    <div id="card-errors" role="alert" class="text-danger"></div>

    <button  name="payment" value="paymentbycredit" type="submit">Pay by Credit</button>
    <button  name="payment" value="paymentbycard" type="submit">Pay by Card</button>
</form>

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

    var card = elements.create("card", { style: style });
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
                    console.log(result.error.message);
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {

                        form.submit();
                        
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

