<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courier Rates</title>
</head>

<body>

    <div class="container">
        <span> 
            <img src="{{ asset('images/footer/icons/fuiyoh_logo.png') }}" style="width:25%;" alt="No Logo">
            <img src="{{ asset('images/footer/icons/mascot_fuiyoh.png') }}" style="width:15%; margin-left:10px;" alt="No Logo">
        </span>
    </div> <br> <br>
    <div>
  
        <div style="font-size:15px; margin-top:10px; height:600px;  width:100%; ">
            <table style=" width: 100%;" border="1">
                <tr>
                    <th style="width:30%;"> Courier</th>
                    <th style="width:30%;"> Weight(kg)</th>
                    <th style="width:30%;"> Cost(RM)</th>
                    <th style="width:30%;"> Hub Rate(RM)</th>
                    <th style="width:40%;"> Location</th>
                </tr>
                @foreach($rates as $rate)
                <tr>
                    <td>{{$rate->courier->name}}</td>
                    <td>{{$rate->weight}}</td>
                    @if($rate->cost != 0)
                    <td align="center">{{$rate->cost}}</td>
                    <td align="center">{{$rate->hub_cost}}</td>
                    @else
                    <td align="center">N/A</td>
                    <td align="center">N/A</td>
                    @endif
                    <td align="center">{{$rate->location->name}}</td>
                </tr>
                @endforeach

            </table>

        </div>

    </div>
            


    <div style="font-size:10px;">
        <h4>Terms & Condition</h4>
        <p>All prices are subject to change without notice and are not guaranteed</p>

    </div>
    <hr style="border-bottom:1px solid black;">
    <div style="font-size:10px; position:absolute;">
        <h3 style="font-weight:bold;">MYKOPENAS SDN BHD (128786-A)</h3>
    </div><br>

    <div style="font-size:10px; position:absolute;">
        <p>NO. 9-1 & 9-2B UKAY BOULEVARD JALAN LINGKARAN TENGAH 2, JALAN ULU KELANG, 68000 AMPANG JAYA, SELANGOR.</p>
    </div>


</body>

</html>

<style>
   .font-weight-style{
    font-weight:bold;
   }
</style>