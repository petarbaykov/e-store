@extends('layout.app')
@section('content')
  <div class="payment-method ">
  <h1>Choose payment method</h1>
  <button type="button" class="btn btn-primary btn-lg btn-block">Epay</button>
  <button type="button" class="btn btn-secondary btn-lg btn-block">EasyPay</button>
  <button type="button" class="btn btn-secondary btn-lg btn-block">Bank</button>

  </div>
  <div class="user-data inactive">

      <h1>Enter your details</h1>

      <form id="userData">
        {{ csrf_field() }}
          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" >
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input name="phone" type="text" class="form-control" >
          </div>
          <div class="form-group">
            <label>Address</label>
            <input name="address" type="text" class="form-control" >
          </div>
      </form>
  </div>
  <button type="button"id="btnStepPayment" class="btn btn-success pull-right" onclick="shop.nextStepPayment('data')">Next step</button>
  
@endsection
