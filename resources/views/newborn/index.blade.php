@extends('layouts.app')

@section('title', 'Newborn Database Application')

@section('content')
<div class="container-fluid mt-5">
<a href="{{ route('newborn.create') }}" class="btn btn-success mb-3">Create New Data</a>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Mothers Name</th>
      <th scope="col">Mothers Age</th>
      <th scope="col">Infant Gender</th>
      <th scope="col">Infant Birtdate</th>
      <th scope="col">Gestational Age</th>
      <th scope="col">Height</th>
      <th scope="col">Weight</th>
      <th scope="col">Short Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($newborn as $born)
    <tr>
      <td>{{ $born->mothers_name }}</td>
      <td>{{ $born->mothers_age }}</td>
      <td>{{ $born->infant_gender }}</td>
      <td>{{ $born->infant_birtdate }}</td>
      <td>{{ $born->gestational_age }}</td>
      <td>{{ $born->height }}</td>
      <td>{{ $born->weight }}</td>
      <td>{{ $born->short_description }}</td>
      <td>
        <a href="{{ route('newborn.delete') }}" class="btn btn-danger">delete</a>
        <a href="{{ route('newborn.destroy') }}" class="btn btn-warning">Edit</a>
      </td>
    </tr>
  </tbody>
  @empty
  <div>There are no newborn data!</div>
  @endforelse
</table>
</div>
@endsection