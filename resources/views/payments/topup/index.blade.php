@extends('layouts.dashboard.app')




@section('content')

<div class="row">
    <div class="offset-1 col-8" style="border-bottom: 1px solid black;">
        <h4 style="font-weight: 700">Top Up Credit</h4>      
    </div>
    <div class="offset-1 col-8 mt-3">
        <div class="card" style="background-color: #efcc37">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: 700">1. Select top up package</h5>
            <div class="row text-center">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">        
                      <p class="card-text">F20</p>   
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-text">F50</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-text">F100</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-text">F300</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row text-center mt-2">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">        
                      <p class="card-text">F500</p>   
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-text">F1000</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-text">F2000</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-text">F5000</p>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row text-center mt-2">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">        
                      <p class="card-text">F10000</p>   
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-text">F20000</p>
                    </div>
                  </div>
                </div>
            </div>      
          </div>
        </div>
        <div class="card mt-3" style="background-color: #efcc37">
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700">2. Top Up Amount</h5>
              <form action="{{route('toyyibpay-create')}}" method="GET">
                  @csrf
              RM <input type="text" name="amount" id="" placeholder="Enter an amount" required>
              <button type="submit" class="btn btn-primary btn-sm">Top Up</button>
              </form>             
            </div>
        </div> 
        <div class="card mt-3" style="background-color: #efcc37">
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700">3. Top Up Using</h5>
              <input type="text" name="amount" id="" placeholder="Add new card" required>             
            </div>
        </div>
        <div class="card mt-3" style="background-color: #efcc37">
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700">Terms & Condition</h5>
              <p>1.You will be notified via email/notification once the autopay top up has been triggered.</p>   
              <p>2.For more information,please contact support@fuiyoh.my</p>          
            </div>
        </div>        
    </div>
</div>


<style>

.currencyinput {
    border: 1px inset white;
    background-color: white;
}
.currencyinput input {
   border: 0;
}
</style>

@endsection