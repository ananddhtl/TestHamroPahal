<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .invoice {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #fff;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .invoice-header-logo img {
            max-width: 100%;
            height: auto;
        }

        .invoice-title {
            color: #333;
            margin-top: 0;
        }

        .invoice-body {
            margin-bottom: 20px;
        }

        .invoice-footer {
            margin-top: 20px;
        }

        .event-order-dt {
            display: flex;
            align-items: center;
        }

        .event-thumbnail-img img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-right: 15px;
        }

        .event-order-dt-content h5 {
            color: #333;
            margin-bottom: 5px;
        }

        .event-order-dt-content p {
            color: #666;
            margin-bottom: 10px;
        }

        .event-order-dt-content span {
            color: #888;
            display: block;
            margin-bottom: 10px;
        }

        .booking-total-tickets {
            display: flex;
            align-items: center;
            color: #333;
            margin-bottom: 5px;
        }

        .booking-total-tickets i {
            /* You may need to replace this with the actual FontAwesome class */
            font-family: 'FontAwesome';
            margin-right: 5px;
        }

        .booking-total-grand span {
            font-weight: bold;
            color: #333;
        }

        .main-table {
            margin-bottom: 40px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .thead-dark th {
            background-color: #333;
            color: #fff;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table td {
            color: #333;
        }
    </style>
</head>

<div class="invoice clearfix">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8 col-md-10">
                    <div class="invoice-header justify-content-between">
                        

                    </div>
                    <div class="invoice-body">
                        <div class="invoice_dts">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="invoice_title">Successfully registered the event</h2>
                                </div>

                            </div>
                        </div>
                        <div class="invoice_footer">
                            <h4>This is the event that you have registered</h4>
                            <div class="main-card">
                                <div class="row g-0">
                                    <div class="col-lg-7">
                                        <div class="event-order-dt p-4">
                                            <div class="event-thumbnail-img">
                                                <img src="images/event-imgs/img-7.jpg" alt="">
                                            </div>
                                            <div class="event-order-dt-content">
                                                <h5>{{ $eventData['eventName'] }}</h5>
                                                <p>{!! $eventData['eventdescription'] !!}</p>
                                                <span>{{ $eventData['datetime'] }}</span>
                                                <div class="buyer-name">{{ $eventData['organizedby'] }}</div>
                                                <div class="booking-total-tickets">
                                                    <i class="fa-solid fa-ticket rotate-icon"></i>
                                                    <span class="booking-count-tickets mx-2">1</span>x Ticket
                                                </div>
                                                <div class="booking-total-grand">
                                                    Total : <span>{{ $eventData['ticketfee'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="main-table bt_40">
                            <div class="table-responsive">
                                <h4>List of the reference users</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($eventData['referenceUsers'] as $index => $referenceUser)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $referenceUser['name'] }}</td>
                                            <td>{{ $referenceUser['email'] }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3">No reference users</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
