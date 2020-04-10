@extends('111865.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Student Fee Details</h1>
                </div><br>
                <div class="col-md-8">
                    <form ation="{{URL::to('/search')}}" method="get" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search Student">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                                      </svg>
                                </button>
                            </div>
                    </form>
                    @if(isset($details))
                    <p> The Search results  for your query <b> {{ $query }} </b> are :</p>
                    <h1>Student Details: </h1>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th> Student Name</th>
                            </tr>
                        </thead>
                        @foreach($details as $student)
                        <tr>
                            <td> {{ $student->student_number}} </td>
                            <td> {{ $student->full_name}} </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                    @endif
                </div>
                <div class="card-body m-auto">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <table class="table table-responsive table-center">
                                <thead>
                                    <tr>
                                        <th>Student Number</th>
                                        <th> Student Name</th>
                                        <th>Date of Payment</th>
                                        <th>Amount Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @php
                                        $total = 0;
                                    @endphp
                                   
                                    @foreach ($fees as $fee)
                                    <tr>
                                        <td> {{ $fee->student_number }} </td>
                                        <td> {{ $fee->students->full_name }} </td>
                                        <td> {{ $fee->date_of_payment }} </td>
                                        <td> {{ $fee->amount }} </td>
                                    </tr>
                                    @php
                                        $total += $fee->amount;
                                    @endphp
                                    
                                    @endforeach
                                   
                                </tbody>
                                
                            </table>
                            <h2>Total Fees Paid:</h2> <h3>{{ $total }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
