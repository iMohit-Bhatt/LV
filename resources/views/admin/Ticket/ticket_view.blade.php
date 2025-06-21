<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ticket</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/theme/default/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('/theme/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('/theme/default/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css"  href="{{ asset('/theme/default/assets/a.css') }}" />
        <style>
            *,div.col-12{
                padding: 0px;
                margin: 0px;
                box-sizing: border-box;
            }
            .height100{
                height: 100vh;
                color: black;
            }
            .first-div{
                padding-top: 10px!important;
                height: 30px;
            }
            .last-div{
                height: 30px;
            }
            .centre-div{
                height: 90vh;
                display: flex;
                align-items: center;

            }
            .head1{
                font-size: 15px;
                font-weight: bold;
            }
            .brdr{
                border-bottom: 1.5px solid black;
                padding: 6px 0px!important;
            }
            .mrgn-top{
                margin-top: 7px!important;
            }
            .mrgn-bot{
                margin-bottom: 7px!important;
            }
            .font-15{
                font-size: 15px!important;
            }
            .mrgn-bot-neg{
                margin-bottom: -9px!important;
            }
            .brdr-design{
                border-radius: 5px;
            }
            .font-19{
                font-size: 21px!important;
            }
            .bus-color{
                background-color: {{$ticket->bus_color}};
            }
            .icon-size img{
                height: 22px!important;
            }
            .box-shad{
                box-shadow: 0 6px 8px rgba(0,0,0,0.19), 0 2px 2px rgba(0,0,0,0.23);
            }
        </style>

    </head>

    <body>
        <div class="container-fluid height100 bus-color">
            <div class="row d-flex flex-column justify-content-between align-items-center px-2">
                <div class="col-md-6 col-lg-4 mx-auto first-div">
                    <div class="row">
                        <div class="col-4 text-white">
                            <i class="fa fa-xmark font-19"></i>
                        </div>
                        <div class="col-8 text-white pl-3">
                            {{-- <i class="fa-solid fa-clock-rotate-left"></i> --}}
                            <i class="icon-size mr-2"><img src="{{ asset('icons/time.png') }}"  alt="time"></i>
                            <span>All tickets</span>
                            {{-- <i class="fa-brands text-success fa-whatsapp"></i> --}}
                            <i class="icon-size ml-3 mr-2"><img src="{{ asset('icons/whatsapp.png') }}" alt="whatsapp"></i>
                            <span>issue with ticket?</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 centre-div">
                    <div class="bg-white brdr-design box-shad">
                        <div class="row p-4">
                            <div class="col-12 text-center">
                                <span class="head1">Transport Dept. of Delhi</span>
                            </div>
                            <div class="col-12 brdr">
                                <span class="float-left font-15">{{$ticket->bus_no}}</span>
                                <span class="float-right font-15">&#8377;{{number_format((($ticket->fare - (0.1 * $ticket->fare)) * $ticket->ticket),1,'.','')}}</span>
                                {{-- <hr class="hr-line"> --}}
                            </div>
                            <div class="col-12 mrgn-top">
                                <span class="float-left">Bus Route</span>
                                <span class="float-right">Fare</span>
                            </div>
                            <div class="col-12 mrgn-bot">
                                <span class="float-left font-15">{{$ticket->bus_route}}</span>
                                <span class="float-right font-weight-bold font-15">&#8377;{{$ticket->fare}}.0</span>
                            </div>
                            <div class="col-12">
                                <span class="float-left">Booking Time</span>
                                <span class="float-right">Tickets</span>
                            </div>
                            <div class="col-12 mrgn-bot">
                                <span class="float-left font-15">{{date_format(date_create($ticket->created_at),"d-m-Y H:i:s")}}</span>
                                <span class="float-right font-15">{{$ticket->ticket}}</span>
                            </div>
                            <div class="col-12 mrgn-bot">
                                <p class="m-0">Starting Stop</p>
                                <p class="m-0 font-15">{{$ticket->start}}</p>
                            </div>
                            <div class="col-12 mrgn-bot">
                                <p class="m-0">Ending Stop</p>
                                <p class="m-0 font-15">{{$ticket->end}}</p>
                            </div>
                            <div class="col-12 text-center">
                                <p class="m-0 mb-2">TXN347873223939</p>
                            </div>
                            <div class="col-12 text-center text-white mrgn-bot box-shad bus-color">
                                <p class="m-0 my-2 font-weight-bold">
                                    <i class="icon-size mr-2"><img src="{{ asset('icons/qr-code.png') }}"  alt="qr-code"></i>
                                    {{-- <i class="fa-solid fa-qrcode"></i>  --}}
                                    Show QR code</p>
                            </div>
                            <div class="col-12  mrgn-bot-neg">
                                <span class="float-left">Arrival :</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mx-auto text-center text-dark last-div">
                    <div class="row">
                        {{-- <div class="col-5 mx-auto bg-white p-1" style="border-radius:5px;"> --}}
                            <span class="mx-auto bg-white p-2" style="border-radius:5px;">GET YOUR CURRENT TICKET</span>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
