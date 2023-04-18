@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Add Your Slider Ad') }}</h1>
            </div>
        </div>
    </div>
    @include('message.message')
    <form class="" action="{{ route('approved_ad_banner.update', $slider->id) }}" method="POST"
        enctype="multipart/form-data" id="choice_form">
        @method('PUT')
        <div class="row gutters-5">
            <div class="col-lg-8">
                @csrf
                <input type="hidden" name="added_by" value="seller">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Slider Information') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Slider Title') }}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title"
                                    placeholder="{{ translate('Slider Title') }}" value="{{ $slider->title }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Button Text') }}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="button_text"
                                    placeholder="{{ translate('Slider Title') }}" value="{{ $slider->button_text }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Button Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="button_link"
                                    placeholder="{{ translate('Slider Link') }}" value="{{ $slider->button_link }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Free Or Paid') }}</label>
                            <div class="col-md-8">
                                <select name="is_paid" id="is_paid" class="form-control" required>
                                    <option value="">Select Aany Option</option>
                                    <option value="1" {{ $slider->is_paid == 1 ? 'selected' : '' }}>Paid</option>
                                    <option value="0" {{ $slider->is_paid == 0 ? 'selected' : '' }}>Free</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Package Name') }}</label>
                            <div class="col-md-8">
                                <select name="package_name" id="package_name" class="form-control" required>
                                    <option value="">Select Package</option>
                                    <option value="platinum" {{ $slider->package_name == 'platinum' ? 'selected' : '' }}>
                                        Platinum</option>
                                    <option value="gold" {{ $slider->package_name == 'gold' ? 'selected' : '' }}>Gold
                                    </option>
                                    <option value="silver" {{ $slider->package_name == 'silver' ? 'selected' : '' }}>Silver
                                    </option>
                                    <option value="bronze" {{ $slider->package_name == 'bronze' ? 'selected' : '' }}>Bronze
                                    </option>
                                    <option value="regular" {{ $slider->package_name == 'regular' ? 'selected' : '' }}>
                                        Regular</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Duration Time') }}</label>
                            <div class="col-md-8">
                                <input type="date" name="end_package_date" class="date form-control"
                                    placeholder="Input Date" value="{{ $slider->end_package_date }}" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Slider Images') }}</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ uploaded_asset($slider->image) }}" alt="{{ $slider->title }}" width="82px">
                        <br>
                        <div class="form-group row">

                            <label class="col-md-3 col-form-label"
                                for="signinSrEmail">{{ translate('Slider Images') }}</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="image" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-12">
                <div class="mar-all text-left">
                    <button type="submit" name="button" value="publish"
                        class="btn btn-primary">{{ translate('Update Slider') }}</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@section('script')
@endsection
