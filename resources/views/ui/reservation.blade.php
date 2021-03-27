@extends('layouts.ui')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title pt-2"> Reserved Room | {{ $room->name }} </h3>
    <div class="card-tools">
      <a href="{{ route('/') }}" type="button" class="btn btn-primary">
        <i class="fa fa-backspace"></i> Back
      </a>
    </div>
  </div>

  <div class="card-body">
    <div class="card-body table-responsive pt-0">
      <img src="{{ asset('uploads/images/rooms/default.jpg') }}" alt={{ $room->name }} class="mx-auto d-block img-fluid">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
          <div class="pt-3">
            <p> Name : {{ $room->name }} </p>
            <p> Number : {{ $room->number }} </p>
            <p> Size : {{ $room->size }} Meter </p>
            <p> Price : {{ $room->price }},00$ </p>
            <p> Floor : {{ $room->floor }} </p>
          </div>
        </div>

        <div class="col-md-4">
          <form action="{{ route('checkout', $room->id ) }}" method="get">
            @csrf
            <div class="col-6 mt-5">
              From : <input type="date" name="from" required />
            </div>
            <div class="col-6 mt-2">
              To : <input type="date" name="to" required />
            </div>
            <div class="col-6 mt-2">
            Accompany Number : <input type="number" name="accompany_number" required min="2" max="10" />
            </div>
            <div class="pt-5 mt-2">
              <button id="checkout-button" class="btn btn-primary" type="submit"> CheckOut </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script type="text/javascript">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_TYooMQauvdEDq54NiTphI7jx");
    var checkoutButton = document.getElementById("checkout-button");

    checkoutButton.addEventListener("click", function () {
      fetch("/checkout", {
        method: "POST",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });
  </script> -->
@endsection