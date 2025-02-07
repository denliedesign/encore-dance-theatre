@extends('layouts.app')

@section('title', 'Encore Dance Theatre | Contact Us')

@section('content')

    <h1 class="head-white py-4">Contact Us</h1>
    <div class="row" style="width: 100%;">
        <div class="col-md px-0">
            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=3461%20Hiatus%20Rd%2C%20Sunrise%2C%20FL%2033351+(Encore%20Dance%20Theatre)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="100%" width="100%"></iframe>
        </div>
        <div class="col-md py-4">
            <div>
                <iframe
                    src="https://link.enrollio.ai/widget/form/lXEiBM8aAbJkEswAKDAW"
                    style="width:100%;height:100%;border:none;border-radius:4px"
                    id="inline-lXEiBM8aAbJkEswAKDAW"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Website Contact Form"
                    data-height="752"
                    data-layout-iframe-id="inline-lXEiBM8aAbJkEswAKDAW"
                    data-form-id="lXEiBM8aAbJkEswAKDAW"
                    title="Website Contact Form"
                >
                </iframe>
                <script src="https://link.enrollio.ai/js/form_embed.js"></script>
            </div>
{{--            @include('contact.form')--}}
        </div>
        <div class="col-md business-outer-box d-flex align-items-center px-0">
            <div class="business-inner-box">
                <p><strong>Address:</strong> 3461 N. Hiatus Rd. Sunrise, FL 33351</p>
                <p><strong>Phone:</strong> (954) 746-0822</p>
                <p><strong>Business Hours:</strong></p>
                <ul>
                    <li>Monday 4:00-9:00</li>
                    <li>Tuesday 4:00-9:00</li>
                    <li>Wednesday 3:15-9:00</li>
                    <li>Thursday 4:00-9:00</li>
                    <li>Friday 4:00-8:00</li>
                    <li>Saturday 9:00-1:00</li>
                </ul>
            </div>
        </div>
    </div>


@endsection
