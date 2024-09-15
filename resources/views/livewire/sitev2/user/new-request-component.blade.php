@section('title'){{ __('Service') }}@endsection
@section('page_title')@include('site_tools_v2.page_title',['main_title'=>$categories->name])@endsection

<div style="height: 100vh;">

    <div class="container-fluid">
        <br>
        <div class="row text-center">
            <div class="col-lg-3">
                {{-- Card Career type --}}
                <div class="card">
                    <div class="card-header bg-primary text-light p-3">
                        <i class="fa-solid fa-check"></i> {{ __('Please select') }}
                    </div>
                    <div class="card-body">
                        {{-- <div class="row px-2 "> --}}
                        @foreach ($companiesType as $type )
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input class="btn-check" wire:model="companySelected" wire:click="$set('show', 'true')" value="{{ $type->id }}" autocomplete="off"  type="radio" name="company" id="career-{{ $type->id }}">
                                <label class="btn btn-outline-dark" for="career-{{ $type->id }}">
                                {{ $type->name }}
                                </label>
                          </div>
                        @endforeach
                        {{-- </div> --}}
                    </div>
                </div>
                {{--End Card Career type --}}
            </div>
            <div class="col-lg-9">

                @if($show)
                    <div class="card">
                        <div class="card-header text-bg-info">
                            {{ __('Details') }}
                        </div>
                        <div class="card-body">
                            <label for="" class="text-start">{{ __('Details') }}</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="{{ __('Request details') }}"></textarea>
                        </div>

                    </div>
                @endif


            </div>
            {{-- <div class="col-lg-9">
                <div class="card " >
                    <div class="card-header text-bg-warning text-light p-3">
                        {{ __('Service Providers') }}
                    </div>
                    <div class="card-body" style="overflow-y:scroll; height:70vh;">

                            <div class="row row-cols-1 row-cols-md-3 g-1" >
                                @foreach ($companies as $company)
                                            <div class="col">
                                                <input wire:model="getCompany" type="radio" class="btn-check"  name="card" id="{{ $company->id }}" value="{{ $company->id }}">
                                                <label  class="btn  text-danger" for="{{ $company->id }}">
                                                    <div class="card border border-0">
                                                        <div class="card-body rounded text-bg-light shadow-lg">
                                                            <img src="{{ asset('asset/img/for.gif') }}" class="rounded-circle w-50 h-50" alt="">
                                                            <h5 class="card-title text-end"><i class="fa-regular fa-user"> </i> {{ $company->name }}</h5>
                                                             <hr>
                                                            <p class="card-text">{{ $company->about }}</p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>

                                @endforeach
                            </div>


                    </div>
                    <div class="card-footer">
                        <div class="row p-2">
                            <div class="col-6 text-end">
                                <a href="" class="btn btn-primary rounded-pill">{{ __('t.Submit') }} <i class="fa-solid fa-paper-plane"></i></a>
                            </div>
                            <div class="col-6 text-start pagination pagination-sm" dir="ltr">
                                {{ $companies->links() }}
                            </div>

                        </div>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>


</div>
