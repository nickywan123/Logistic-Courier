@extends('layouts.dashboard.app')




@section('content')

    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active text-dark" style="font-weight:700;" aria-current="page">Statement</li>
            </ol>
        </nav>
        </div> 
    </div>
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header bg-dark"> 
                    <ul class="nav nav-tabs card-header-tabs justify-content-center text-white"  id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active tab-active-color" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Credit History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Top Up Invoice</a>
                        </li>
                    </ul>
                </div>
            
                <div class="card-body" style="background-color: #efcc37">
                    <div class="tab-content" id="myTabContent">
                        <!---Credit History---->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="offset-md-7 col-md-5">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" style="border-radius:25px 0 0 25px;" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <button class="btn btn-outline-secondary" type="button" style=" border-radius: 0 25px 25px 0;"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p style="display: inline-block;">Filter By:</p>
                                    <div class="dropdown" style="display: inline-block;">
                                        <button class="btn btn-secondary dropdown-toggle border-radius-size bg-dark btn-sm"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Statements
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>                                                                
                                </div>
                                <div class="offset-md-4 col-md-4">    
                                    <div class="dropdown pull-right" >
                                        <button class="btn btn-secondary dropdown-toggle border-radius-size bg-dark btn-sm"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            June 14,2021 - July 13,2021
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>                                                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered" style="background-color: white;">
                                        <thead>
                                          <tr>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Debits</th>
                                            <th scope="col">Credits</th>
                                            <th scope="col">Balance(RM)</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">2021-07-07 <br> 12:52:03</th>
                            
                                            <td>EI-4JJD</td>
                                            <td>Order - EI-4JJD</td>
                                            <td>-5.00</td>
                                            <td>32</td>
                                            <td>50 403.00</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2021-07-03 <br> 14:52:03</th>
                                            <td>-</td>
                                            <td>Topup Bonus- Topup Bonus(RM500)</td>
                                            <td>-0.00</td>
                                            <td>500.00</td>
                                            <td>50 000.00</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                        <!----Invoice------>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle border-radius-size bg-dark btn-sm"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Downloads
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>                                                                
                                </div>
                                <div class="offset-md-3 col-md-5">
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" style="border-radius:25px 0 0 25px;" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <button class="btn btn-outline-secondary" type="button" style=" border-radius: 0 25px 25px 0;"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="checkbox" id="selectAll" name="select_all">
                                    <label for="select-all">Select all</label>                                                               
                                </div>
                                <div class="offset-md-4 col-md-4">    
                                    <div class="dropdown pull-right" >
                                        <button class="btn btn-secondary dropdown-toggle border-radius-size bg-dark btn-sm"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            June 14,2021 - July 13,2021
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>                                                                
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered" style="background-color: white;">
                                        <thead>
                                          <tr>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">
                                                <input type="checkbox" id="selectAll" name="select_all">  
                                                2021-07-07 <br><span class="ml-3"> 12:52:03</span>
                                            </th>                   
                                            <td>EI-4JJD</td>
                                            <td><b>Order Payment</b> 
                                                <p>Shipment from Selangor to Johor by Pos Laju - ERB10234274MY</p>
                                            </td>
                                            <td>RM5.70</td>
                                            <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                            
                                          </tr>
                                          <tr>
                                            <th scope="row">
                                                <input type="checkbox" id="selectAll" name="select_all">   
                                                2021-07-03 <br> <span class="ml-3">14:52:03</span>
                                            </th>
                                            <td>EI-4HAIT</td>
                                            <td><b>Order Payment</b>
                                                <p>Shipment from Selangor to Selangor by Aramex - 4623746135</p>
                                            </td>
                                            <td>RM6.20</td>
                                            <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>          
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                        <!---TOP UP INVOICE----->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="offset-md-8 col-md-4">    
                                    <div class="dropdown pull-right" >
                                        <button class="btn btn-secondary dropdown-toggle border-radius-size bg-dark btn-sm"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            June 14,2021 - July 13,2021
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>                                                                
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <table class="table table-striped table-bordered" style="background-color: white;">
                                        <thead>
                                          <tr>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Transaction No.</th>
                                            <th scope="col">Package</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">
                                                2021-07-07 <br>12:52:03
                                            </th>                   
                                            <td>45728203953</td>
                                            <td><b>F50000</b></td>
                                            <td>RM50000</td>
                                            <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>                                        
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p >Showing 1-1 of 1</p>                                                                
                                </div>
                                <div class="offset-md-2 col-md-6">    
                                    <div class="dropdown pull-right" >
                                        <p style="display: inline-block;">Listing per page:</p>
                                        <button class="btn btn-secondary dropdown-toggle border-radius-size bg-dark btn-sm" style="display: inline-block;"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            1
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">1</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>                                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<style>
    /* .tab-active-color.active {
        background-color: transparent !important;
        border: none !important;
        color: #efcc37 !important;
    } */
</style>
@endsection