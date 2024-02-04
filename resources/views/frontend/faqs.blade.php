@extends('welcome')
@section('content')
<div class="wrapper">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="barren-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Frequently asked questions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title checkout-title text-center">
                        <h3>Frequently asked questions</h3>
                        <p class="mb-0">Find answer for the commonly asked questions.</p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="faq-scrollspy">
                        <div class="faq-accordion pt-0 p-2 mt-5" id="FAQforOrganisers">
                            <div class="faq-accordion-title">
                                <h4>FAQ for </h4>
                            </div>
                            <div class="accordion" id="accordionFAQforOrganisers">
                                @foreach($faqs as $index => $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsOrgnaisersOpen-heading{{ $index + 1 }}">
                                        <button class="accordion-btn pe-0 ps-0" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsOrgnaisersOpen-collapse{{ $index + 1 }}"
                                            aria-expanded="true"
                                            aria-controls="panelsOrgnaisersOpen-collapse{{ $index + 1 }}">
                                            {{ $item['title'] }}
                                           
                                        </button>
                                    </h2>
                                    <div id="panelsOrgnaisersOpen-collapse{{ $index + 1 }}"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="panelsOrgnaisersOpen-heading{{ $index + 1 }}"
                                        data-bs-parent="#accordionFAQforOrganisers">
                                        <div class="accordion-body pt-0 pe-0 ps-0">
                                            <p>{{ $item['description'] }}</p>
                                          
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection