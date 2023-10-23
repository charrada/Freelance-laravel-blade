@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Payment</div>
        <div class="card-body">
            <form action="{{ route('payment.update', ['id' => $payment->id]) }}" method="POST">
                @csrf
                @method('PUT') <!-- Use PATCH or PUT method for updating -->

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" id="amount" class="form-control" value="{{ $payment->amount }}">
                </div>

                <!-- Add fields for other payment details that you want to edit -->

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
