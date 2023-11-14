@extends('layouts.kingsbridge')
@section('content')

<section class="section-sm">
    <div class="container">
        <form action="{{ route('user.sparepartsstore')}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">
            @csrf
            <!-- Post Spare Parts ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;">Post Spare Parts Ad</h1>
                    </div>
                </div>
            </fieldset>

            <!-- Spare Parts Details -->
            <fieldset class="border border-gary p-4 mb-5">
            <h4 style="text-align: center;">Merge Your Make and Model (e.g Toyota Mark X 2019).</h4>

                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Make:</h6>
                        <input type="text" value="{{ old('make')}}" name="make" class="border w-100 p-2 bg-white text-capitalize @error('make') is-invalid @enderror" placeholder="Spare Parts Make">
                        @error('make')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Item Name:</h6>
                        <input type="text" value="{{ old('item_name')}}" name="item_name" class="border w-100 p-2 bg-white text-capitalize @error('item_name') is-invalid @enderror" placeholder="Spare Parts Item Name">
                        @error('item_name')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Item Description:</h6>
                        <textarea name="item_description" class="description ckeditor form-control" name="wysiwyg-editor">{{ old('item_description')}}</textarea>
                        @error('item_description')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Condition:</h6>
                        <select name="condition" class="border w-100 p-2 bg-white text-capitalize @error('condition') is-invalid @enderror">
                            <option value="Used" {{ old('condition') == 'used' ? 'selected' : '' }}>Used</option>
                            <option value="New" {{ old('condition') == 'new' ? 'selected' : '' }}>New</option>
                        </select>
                        @error('condition')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Price (in Ksh):</h6>
                        <input name="price" value="{{ old('price')}}" type="text" class="border w-100 p-2 bg-white text-capitalize">
                        @error('price')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Location:</h6>
                        <input type="text" value="{{ old('location')}}" name="location" class="border w-100 p-2 bg-white text-capitalize @error('location') is-invalid @enderror">
                        @error('location')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <fieldset class="border border-gary p-4 mb-5">
    <h4 style="text-align: center;">Upload Photos to showcase your spare part.</h4>
    <h6 class="font-weight-bold pt-4 pb-1">Images can come in any order.</h6>
    <div class="row">
        <div class="space column">
            <div class="card">
                <h3>First-image</h3>
                <input type="file" id="front_img" name="front_img"/>
            </div>
            @error('front_img')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="space column">
            <div class="card">
                <h3>Second-image</h3>
                <input type="file" id="back_img" name="back_img" />
            </div>
            @error('back_img')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="space column">
            <div class="card">
                <h3>Third-image</h3>
                <input type="file" id="right_img" name="right_img"/>
            </div>
            @error('right_img')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- Add more photo upload fields for optional photos if needed -->
    </div>
</fieldset>


            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}" >

            <button type="submit" class="btn btn-primary d-block mt-2">Post Spare Parts Ad</button>
        </form>
    </div>
</section>

<!-- Add the necessary JavaScript scripts here (ckeditor, file preview, etc.) -->
<!-- ... Your JavaScript scripts ... -->

@endsection
