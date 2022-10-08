@extends('layout')
@section('title', 'Create Computers')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1> Create a new Computer </h1>
        </div>

        <div class="flex justify-center pt-8">
            <form action="{{route('computers.store')}}" method="post" >
                @csrf
                <div>
                    <label for="computer-name"> Computer Name </label>
                    <input id="computer-name" type="text" value="{{old('computer-name')}}" name="computer-name">
                    @error('computer-name')
                      <div class="form-error">
                      {{$message}}
                      </div>
                    @enderror
                </div>

                <div>
                    <label for="computer-origin"> Computer Origin </label>
                    <input id="computer-origin" type="text" value="{{old('computer-origin')}}" name="computer-origin">
                    @error('computer-origin')
                      <div class="form-error">
                      {{$message}}
                      </div>
                    @enderror
                </div>

                <div>
                    <label for="computer-price"> Computer Price </label>
                    <input id="computer-price" type="text" value="{{old('computer-price')}}" name="computer-price">
                    @error('computer-price')
                      <div class="form-error">
                      {{$message}}
                      </div>
                    @enderror
                </div>

                <div>
                    <button type="submit"> Submit </button>
                </div>

            </form>
        </div>

    </div>
@endsection
