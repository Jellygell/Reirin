@extends('layouts.layout1')
@section('container')

<!-- <h1>Pick your a date for your !</h1> -->

@if($selectedService)
<div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
                <h1 class="judul display-1 mb-5">{{ $selectedService->service_name }}</h1>
                <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
                <div class="d-flex flex-row-reverse">
                    <h4 class="text-danger">Rp. {{ $selectedService->service_price }}</h4>
                </div>
                <div class="d-flex flex-row">
                    <h4 class="mb-5">{{ $selectedService->service_desc }}</h4>
                </div>
        </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_1.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_2.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_3.png"
            class="w-100" />
        </div>
      </div>
</div>

<!-- <div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $selectedService->service_name }}</h5>
        <p class="card-text">{{ $selectedService->service_desc }}</p>
    </div>
    <div class="card-footer">
        <small class="text-body-secondary">{{ $selectedService->service_price }}</small>
    </div>
</div> -->
@else
<p>No service selected.</p>
@endif
<h3 class="judul display-4 mt-5">Pick your a date for your appointment!</h3>
<h3>List of Employee Shifts:</h3>
<div class="d-flex justify-content">
    <h4 class="me-5"><mark class="bg-info">09.30</h4>
    <h4 class="me-5"><mark class="bg-info">10.30</h4>
    <h4 class="me-5"><mark class="bg-info">11.30</h4>
    <h4 class="me-5"><mark class="bg-info">13.30</h4>
    <h4 class="me-5"><mark class="bg-info">15.30</h4>
</div>
<!-- <li>
    <ul>9.30</ul>
    <ul>11.30 </ul>
    <ul>13.30 </ul>
    <ul>15.30</ul>
</li> -->
<div>
    <h3>Choose Date</h3>
    <form action="{{route('checkEmployee')}}" method="post">
        @csrf
        <div class='input-group date' id='picker'>
            <input type='text' class="form-control" name="chosenDate" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <!-- <input type="submit" value="Submit" /> -->
        <button type="submit" class="btn btn-primary btn-lg my-4">Submit</button>
    </form>
    <script type="text/javascript">
        $(function() {
            $('#picker').datetimepicker({

                defaultDate: moment(),
                minDate: moment().subtract(1, 'days'),
                stepping: 30,
                daysOfWeekDisabled: [0],
                defaultDate: moment().set({
                    hour: 9,
                    minute: 30
                }),
                inline: true,
                sideBySide: true,
            }).on('dp.change', function(e) {
                // Handle change event
                var selectedHour = e.date.hour();
                if (selectedHour < 9 || selectedHour > 15) {
                    // If the selected hour is outside the range 9-15, reset to the nearest valid hour
                    var nearestHour = (selectedHour < 9) ? 9 : 15;
                    $(this).data('DateTimePicker').date(e.date.set('hour', nearestHour).set('minute', 0));
                }
            });
        });
    </script>
</div>

@if($employee)
<h3>Available Employees</h3>
<ul>
    @foreach($employee as $emp)
    <li>
        <form action="{{ route('paymentStep') }}" method="post">
            @csrf
            <input type="hidden" name="employeeService" value="{{ $emp->employee_service_id }}">
            <div class="d-flex justify-content">
                <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                    <h4>{{ $emp->employee->employee_name }}</h4>
                </button>
                    <h4>{{ $emp->time_available }}</h4>
            </div>
        </form>
    </li>
    @endforeach
</ul>
@else
<h4>No available employees for the selected date.</h4>
@endif




@endsection