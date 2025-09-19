@extends('layouts.ab')
@section('title', 'Vehicle Details')
@section('content')
@php
    $permissions = userPermissions();
    $route = 'vehicles';
@endphp


{{-- tyreService --}}
@if(@$alertVehicleRecords['tyreService'])
    <div class="alert callout callout-danger">
        <strong>{{ $alertVehicleRecords['tyreService'] }}</strong> Tyre Service Expire Soon.
    </div>
@endif

@foreach(vehicleRecordType() as $i => $type)
@if(isset($alertVehicleRecords[$i]))
    @php $typeData = $alertVehicleRecords[$i]; @endphp
    @if(newDate() >= $typeData->expire_date)
        <div class="alert callout callout-danger">
            {{ $type }} Expire Soon.
        </div>
    @endif
@endif
@endforeach




<div class="col-8">
    <div class="input-group">
        <input type="date" name="from_date" class="form-control form-control-sm mr" value="{{ request()->from_date }}">

        <input type="date" name="to_date" class="form-control form-control-sm mr" value="{{ request()->to_date }}">

        <button type="button" data-type="tyre" class="invoiceButton btn btn-info btn-sm mr">Tyre Invoice</button>
                
        <button type="button" data-type="maintenance" class="invoiceButton btn btn-info btn-sm mr">Maintenance Invoice</button>
        
        <button type="button" data-type="vehicle_records" class="invoiceButton btn btn-info btn-sm mr">Vehicle Records Invoice</button>
    
    </div>
</div>




<div class="col-12">
    <div class="card card-primary card-outline mb-4">

        <div class="card-header">
            <div class="card-title">Vehicle Details</div>
            <div class="float-end">
                  
                @include('components.buttons.edit', ['route'=>$route, 'id'=>$vehicle->id, 'permission'=>$permissions])
                                
                @include('components.buttons.delete', ['route'=>$route, 'id'=>$vehicle->id, 'permission'=>$permissions])

                <a href="{{ route('ab.vehicles') }}" class="btn btn-warning btn-sm"><i
                    class="nav-icon bi bi-arrow-left"></i></a>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="px-2">
                <div class="d-flex border-top py-2 px-1">
                    <div class="col-12">
                        <div class="text-truncate"><b>Vehicle Number:</b> {{ $vehicle->vehicle_number }}</div>
                        <div class="text-truncate"><b>Vehicle Type:</b> {{ $vehicle->vehicleTypes->vehicle_type }}</div>
                        <div class="text-truncate"><b>Purchased On:</b> {{ $vehicle->purchased_on }}</div>
                        <div class="text-truncate"><b>Chasis Number:</b> {{ $vehicle->chasis_number }}</div>
                        <div class="text-truncate"><b>Engine Number:</b> {{ $vehicle->engine_number }}</div>
                        <div class="text-truncate"><b>Loading Capacity:</b> {{ $vehicle->loading_capacity }}</div>
                        <div class="text-truncate"><b>Vendor:</b> <a href="{{ route('ab.clients.show', $vehicle->clients->id) }}" target="_blank">{{ $vehicle->clients->name }}</a></div>
                        <div class="text-truncate"><b>Status:</b> {{ statusValue($vehicle->status) }}</div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>


<h3 class="mb-0">Drivers</h3>
<div class="col-12 vehicles">
    <div class="card card-primary card-outline mb-4">

        @livewire('vehicles-driver', ['vehicleId'=>$vehicle->id])

    </div>
</div>




<h3 class="mb-0">Maintenance Records</h3>
<div class="col-12 vehicles">
    <div class="card card-primary card-outline mb-4">

        @include('ab.maintenance_records.table', ['maintenanceData'=>$vehicle->maintenanceRecords, 'firstItem'=>1])

    </div>
</div>


<h3 class="mb-0">Vehicle Records</h3>
<div class="col-12 vehicles">
    <div class="card card-primary card-outline mb-4">

        @include('ab.vehicle_records.table', ['vehicleData'=>$vehicle->vehicleRecords, 'firstItem'=>1])

    </div>
</div>

<h3 class="mb-0">Tyre Records</h3>
<div class="col-12 vehicles">
    <div class="card card-primary card-outline mb-4">

        @include('ab.tyre_records.table', ['tyreData'=>$vehicle->tyreRecords, 'firstItem'=>1])

    </div>
</div>

<h3 class="mb-0">Trip Records</h3>
<div class="col-12 vehicles">
    <div class="card card-primary card-outline mb-4">

        @include('ab.trip_records.table', ['tripData'=>$vehicle->tripRecords, 'firstItem'=>1])

    </div>
</div>


@endsection

@section('style')
<link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" />
<style>
    .vehicles .card-body {
        padding: 15px !important;
    }
</style>
@endsection
@section('script')
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<script>
let table = new DataTable('.vehicles .table', {
    responsive: true,
    info: false,
    ordering: false,
    search: false,
});

//...
const invoiceUrl = "{{ route('ab.vehicles.invoice', $vehicle->id) }}";

$('.invoiceButton').on('click', function(){
    let type = $(this).data('type');
    let from_date = $('input[name=from_date]').val();
    let to_date = $('input[name=to_date]').val();

    let url = `${invoiceUrl}?type=${type}&from_date=${from_date}&to_date=${to_date}`;
    //console.log('url', url)

    printPDF(url);
});

</script>
@endsection