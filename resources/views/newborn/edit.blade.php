@extends('layouts.app')

@section('styles')
<style>
    .error-message {
      color: red;
      font-size: 0, 8rem;
    }
  </style>
  @endsection

@section('title', 'Edit Newborn Database Application')

@section('content')
<form method="POST" action="{{ route('newborn.update', ['id' => $newborn->id]) }}">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="mb-3">
            <label for="mothers_name" class="form-label">Mothers Name</label>
            @error('mothers_name')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input value="{{ $newborn->mothers_name }}" type="text" class="form-control" name="mothers_name" id="mothers_name" placeholder="Full Name">
        </div>
        <div class="mb-3">
            <label for="mothers_age" class="form-label">Mothers Age</label>
            @error('mothers_age')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input type="number" class="form-control" id="mothers_age" name="mothers_age" placeholder="">
        </div>
        <label value="{{ $newborn->mothers_age }}" for="infant_gender" class="form-label">Infant Gender</label>
            @error('infant_gender')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input value="{{ $newborn->infant_gender }}" class="form-control" list="infant_gender" name="infant_gender" placeholder="Type to search...">
            <datalist id="infant_gender">
            <option value="Man">
            <option value="Girls">
        </datalist>
        <div class="mb-3">
            <label for="infant_birtdate" class="form-label">Infant Birtdate</label>
            @error('infant_birtdate')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input value="{{ $newborn->infant_birtdate }}" type="text" class="form-control" id="infant_birtdate" name="infant_birtdate" placeholder="day mounth years">
        </div>
        <div class="mb-3">
            <label for="gestational_age" class="form-label">Gestational Age</label>
            @error('gestational_age')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input value="{{ $newborn->gestational_age }}" type="number" class="form-control" id="gestational_age" name="gestational_age" placeholder="">
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            @error('height')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input value="{{ $newborn->height }}" type="number" name="height" class="form-control" id="height" placeholder="">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            @error('weight')
            <p class="error-message">{{ $message }}</p>
            @enderror
            <input value="{{ $newborn->weight }}" type="number" class="form-control" id="weight" name="weight" placeholder="">
        </div>
        <div class="mb-3">
            <label for="short_description" class="form-label">Short Description</label>
            @error('short_description')
            <p class="short_description text-danger">{{ $message }}</p>
            @enderror
            <textarea value="{{ $newborn->short_description }}" class="form-control" id="short_description" name="short_description" rows="3"></textarea>
        </div>
        <button class="btn btn-success mt-3" type="submit">Edit Data</button>
    </div>
</form>
  @endsection