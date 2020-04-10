@extends('111865.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add Fee For Student</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action=" {{ route('storePayment') }} ">
                        @csrf
                        <div class="form-group">
                          <label for="student_number">Student</label>
                          <select name="student_number" class="form-control">
                              <option selected disabled>Select Your Student</option>
                              @foreach ($students as $student)
                              <option value=" {{ $student->student_number }} ">{{ $student->full_name }} <small>( {{ $student->student_number }} )</small></option>
                              @endforeach
                          </select>
                          <small class="form-text text-muted">Please select your student</small>
                        </div>
                        <div class="form-group">
                          <label for="date_of_payment">Date of Payment</label>
                          <input type="date" class="form-control"  name="date_of_payment">
                          <small class="form-text text-muted">Please enter your Date of Payment</small>
                        </div>
                        <div class="form-group">
                          <label for="amount">Amount Paid</label>
                          <input type="number" name="amount" class="form-control">
                          <small class="form-text text-muted">Please enter Amount Paid</small>
                        </div>


                        <button type="submit" class="btn btn-primary">Add new Fee Payment</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
