@section('title', 'How this works |')
<x-guest-layout>
    <div class="container-fluid magnet-green d-flex align-items-center">
        <div class="magnet-green__title">
            <h1 class="text-center">How this works</h1>
        </div>
    </div>
    <div class="container-fluid magnet-white d-flex align-items-center">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-6 offset-md-2 offset-xl-3">
                <h2 class="my-2 text-center">First and foremost, you can cook any recipes you find on this website. Inspire yourself, 
                    take notes and get better at cooking.<span class="red"> And if you don't want to, hire one of ours cooks.</span></h2>
            </div>
        </div>
    </div>
    <div class="container padding-section">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h3 class="red">How to hire a Cook:</h3>
                <h6>Just 3 steps. It is as easy as preparing a cup of tea.</h6>
                <ul>
                    <li>
                        <h5>1. Find one</h5>
                        <p>The best way is searching by recipe you wish someone prepare for you.</p>
                    </li>
                    <li>
                        <h5>2. Create an account and make them an offer</h5>
                        <p>Just fill in a form at their page. No advanced payment is required.</p>
                    </li>
                    <li>
                        <h5>3. Stay in touch</h5>
                        <p>If availlable, just discuss the details.</p>
                    </li>
                </ul>
            </div>
            <div class="col-6 d-none d-md-block">
                <img src="{{ asset('assets/img/cooks/cook2.jpg') }}" alt="A chef behind a table full of food" class="img-fluid">
            </div>
            <div class="col-12 mt-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentesque sit amet nulla ut efficitur. 
                    Fusce pulvinar aliquam elit vitae placerat. Quisque ac nulla eget nisl molestie bibendum. 
                    Duis ut massa eget eros varius mollis. Sed eleifend ornare lectus quis vulputate. Cras semper id ligula 
                    et interdum. Sed volutpat felis ipsum, eu dapibus massa bibendum in. Phasellus ut dapibus eros, 
                    sed vestibulum odio. Cras semper tortor justo, id sodales ex efficitur quis.</p>
            </div>
        </div>
    </div>
</x-guest-layout>
