@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('All Banner Slider') }}</h1>
            </div>
        </div>
    </div>

@include('message.message')
       <div class="col-md-4 mx-auto mb-3">
            <a href="{{ route('approved_ad_banner.create') }}">
                <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                    <span
                        class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                        <i class="las la-plus la-3x text-white"></i>
                    </span>
                    <div class="fs-18 text-primary">{{ translate('Add New Slider Banner') }}</div>
                </div>
            </a>
        </div>
    <div class="card">

        <div class="card-body">
            <table class="table aiz-table mb-0" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="md">{{ translate('Seller Name') }}</th>
                        <th data-breakpoints="md">{{ translate('Title') }}</th>
                        <th data-breakpoints="md">{{ translate('image') }}</th>
                        <th data-breakpoints="md">{{ translate('Button Text') }}</th>
                        <th data-breakpoints="md">{{ translate('Button Link') }}</th>
                        <th data-breakpoints="md">{{ translate('Paid Or Add Store') }}</th>
                        <th data-breakpoints="md">{{ translate('Offer') }}</th>
                        <th data-breakpoints="md">{{ translate('Priority') }}</th>
                        <th data-breakpoints="md">{{ translate('Approved By Admin') }}</th>
                        <th data-breakpoints="md">{{ translate('Options') }}</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($sliders as $key => $slider)
                        <tr>

                            <td>{{ $key + 1 + ($sliders->currentPage() - 1) * $sliders->perPage() }}</td>
                            <td>{{ $slider->user->name ?? '' }}</td>
                            <td>{{ Str::limit($slider->title,30) }}</td>
                            <td class="text-center">
                                <img src="{{ uploaded_asset($slider->image) }}"
                                    alt="{{ $slider->title }}" width="82px">
                            </td>
                            <td>{{ $slider->button_text }}</td>
                            <td>
                                 <a href="{{ ($slider->button_link) }}" target="_blunk">{{ Str::limit($slider->button_link,30) }}</a>
                            </td>
                            <td>
                                @if($slider->is_paid == 1)
                                   <span>Paid</span>
                                @else
                                 <span>Add Store</span>
                                @endif
                            </td>
                            <td>
                                @if($slider->is_offer == 1)
                                   <span >Offer</span>
                                @else
                                 <span>Paid Banner</span>
                                @endif
                            </td>
                            <td>
                                <input type="number" onchange="update_priority(this)"  name="priority" id="priority"
                                    class="form-control col-4" value="{{ $slider->priority ?? 0 }}">

                                <input type="hidden" id="id" name="id" value="{{ $slider->id }}"
                                    class="col-3">

                            </td>
                            <td>
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input onchange="update_approved(this)" value="{{ $slider->id }}" type="checkbox"
                                        <?php if ($slider->approved_by_admin == 1) {
                                            echo 'checked';
                                        } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td class="">
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm"
                                    href="{{ route('approved_ad_banner.edit', $slider->id) }}"
                                    title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                    data-href="{{ route('admin_slider.destroy', $slider->id) }}"
                                    title="{{ translate('Delete') }}">

                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
    <script type="text/javascript">
        function update_approved(el) {
            if (el.checked) {
                var approved = 1;
            } else {
                var approved = 0;
            }
            $.post('{{ route('approved_by_admin') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                approved: approved
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', '{{ translate('Product approval update successfully') }}');
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }

        function update_priority(el) {
            var id = $(el).next("#id").val();
            $.post('{{ route('update_priority') }}', {
                _token: '{{ csrf_token() }}',
                id: id,
                priority: el.value
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', '{{ translate('Product approval update successfully') }}');
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
    </script>
@endsection
