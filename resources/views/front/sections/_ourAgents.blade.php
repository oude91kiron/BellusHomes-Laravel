<div class="agent content-area">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
            <p>All our agents has long experience in the real estate field.</p>
        </div>
        <div class="row">      
            @isset($users)
            @foreach($users as $user)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="agent-2">
                    <div class="agent-photo">
                        {{-- ???????? recomanded photo size 255x285 ?????????  --}}
                        <img src="{{asset('assets/admin/images/users/'. $user->photo )}}" alt="agent-grid-2" class="img-fluid">
                        <ul class="social-list clearfix">
                            <li><a href="http://{{$user -> facebook}}" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://{{$user -> twitter}}" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://{{$user -> instagram}}" target="_blank" class="instagram-bg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="mailto:{{$user -> email}}" target="_blank" class="google-bg"><i class="fa fa-google"></i></a></li>
                            <li><a href="http://wa.me/{{$user -> whatsapp}}" target="_blank" class="whatsapp-bg"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.html"></a>{{$user -> name}}</h5>
                        <p>{{$user -> position}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</div >