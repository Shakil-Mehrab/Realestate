@extends('layouts.app')

@section('content')
<div class="row">
    <div class="column col-lg-12">
        <div class="my-invoices">
            <div class="title"><h3>Invoice</h3></div>
            <div class="inner-container clearfix">
                <div class="logo"><a href="#"><img src="images/logo-small.png" alt=""></a></div>
                <div class="order-num">Order # 12345</div>
                <div class="invoice-box">
                    <div class="row">
                        <div  class="column col-lg-3 col-md-6 col-sm-12">
                            <h3>Shipped To:</h3>
                            <ul class="invoice-info">
                                <li>Daniel Deve</li>
                                <li>Harvest St, North Subract 360</li>
                                <li>London. United States Of Amrica.</li>
                                <li>Springfield, ST 35436</li>
                                <li><a href="#">info@ourland.com</a></li>
                            </ul>
                        </div>
                        <div  class="column col-lg-3 col-md-6 col-sm-12">
                            <h3>Billed To:</h3>
                            <ul class="invoice-info">
                                <li>Daniel Deve</li>
                                <li>Harvest St, North Subract 360</li>
                                <li>London. United States Of Amrica.</li>
                                <li>Springfield, ST 35436</li>
                                <li><a href="#">info@ourland.com</a></li>
                            </ul>
                        </div>
                        <div  class="column col-lg-3 col-md-6 col-sm-12">
                            <h3>Payment Method</h3>
                            <ul class="invoice-info">
                                <li>Visa ending 5453</li>
                                <li><a href="#">info@ourland.com</a></li>
                            </ul>
                        </div>
                        <div  class="column col-lg-3 col-md-6 col-sm-12">
                            <h3>Order Date:</h3>
                            <ul class="invoice-info">
                                <li>August 3,2018</li>
                            </ul>
                        </div>
                    </div>

                    <div class="table-responsive ">
                        <table class="table">
                            <thead>
                            <tr>
                                <td><strong>#</strong></td>
                                <td><strong>Item</strong></td>
                                <td class="text-center"><strong>Price</strong></td>
                                <td class="text-center"><strong>Quantity</strong></td>
                                <td class="text-right"><strong>Totals</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>1</strong></td>
                                <td>BS-350</td>
                                <td class="text-center">$30.99</td>
                                <td class="text-center">2</td>
                                <td class="text-right">$30.99</td>
                            </tr>
                            <tr>
                                <td><strong>2</strong></td>
                                <td>BS-700</td>
                                <td class="text-center">$60.00</td>
                                <td class="text-center">3</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td><strong>3</strong></td>
                                <td>BS-950</td>
                                <td class="text-center">$90.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$90.00</td>
                            </tr>
                            <tr>
                                <td><strong>4</strong></td>
                                <td>BS-1200</td>
                                <td class="text-center">$120.00</td>
                                <td class="text-center">4</td>
                                <td class="text-right">$120.00</td>
                            </tr>
                            <tr>
                                <td><strong>5</strong></td>
                                <td>BS-1450</td>
                                <td class="text-center">$150.00</td>
                                <td class="text-center">5</td>
                                <td class="text-right">$150.00</td>
                            </tr>
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Total</strong></td>
                                <td class="no-line text-right">$550.99</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










