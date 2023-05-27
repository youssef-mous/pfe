@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
   
    <hr class="mt-0 mb-4">
    
    
    <!-- Payment methods card-->
    <div class="card card-header-actions mb-4">
        <div class="card-header">
            
            <button class="btn btn-outline-dark btn-sm btn-block" type="button">Add Payment Method</button>
        </div>
        <div class="card-body px-0">
            <!-- Payment method 1-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                     <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                    <div class="ms-4">
                        <div class="small">Visa ending in 1234</div>
                        <div class="text-xs text-muted">Expires 04/2024</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <div class="badge bg-light text-dark me-3">Default</div>
                    <a href="#!">Edit</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 2-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                    <div class="ms-4">
                        <div class="small">Mastercard ending in 5678</div>
                        <div class="text-xs text-muted">Expires 05/2022</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="text-muted me-3" href="#!">Make Default</a>
                    <a href="#!">Edit</a>
                </div>
            </div>
            <hr>
            <!-- Payment method 3-->
            <div class="d-flex align-items-center justify-content-between px-4">
                <div class="d-flex align-items-center">
                    <i class="fab fa-cc-amex fa-2x cc-color-amex"></i>
                    <div class="ms-4">
                        <div class="small">American Express ending in 9012</div>
                        <div class="text-xs text-muted">Expires 01/2026</div>
                    </div>
                </div>
                <div class="ms-4 small">
                    <a class="text-muted me-3" href="#!">Make Default</a>
                    <a href="#!">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Billing history card-->
    <div class="card mb-4">
        <div class="card-header">Billing History</div>
        <div class="card-body p-0">
            <!-- Billing history table-->
            <div class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="border-gray-200" scope="col">Transaction ID</th>
                            <th class="border-gray-200" scope="col">Date</th>
                            <th class="border-gray-200" scope="col">Amount</th>
                            <th class="border-gray-200" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#39201</td>
                            <td>06/15/2021</td>
                            <td>$29.99</td>
                            <td><span class="badge bg-light text-dark">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#38594</td>
                            <td>05/15/2021</td>
                            <td>$29.99</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>#38223</td>
                            <td>04/15/2021</td>
                            <td>$29.99</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>#38125</td>
                            <td>03/15/2021</td>
                            <td>$29.99</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection