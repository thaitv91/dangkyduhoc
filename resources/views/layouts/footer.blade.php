<div class="container">
    <div class="contact-home" id="ask-us-a-question">
        <div class="row">
            <div class="col-md-3 col-sm-6 col">
                <div class="university-guide">
                    <h3 class="title">UNIVERSITY GUIDE</h3>
                    <?php
                    $guides = App\Models\Guide::all();
                    ?>
                    <ul>
                        @foreach($guides as $guide)
                            @if($guide->slug != 'about-therightu' && $guide->slug !='online-consultation')
                                <li>{{ $guide->name }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div><!-- /.university-guide -->
            </div>

            <div class="col-md-4 col-sm-6 col">
                <div class="form-contact">
                    <h3 class="title">HAVE US CONTACT YOU</h3>
                    <form action="{{ route('postContact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="whatsapp" type="text" placeholder="WhatsApp">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="question" placeholder="Your questions for our education consultans"></textarea>
                        </div>
                        <div class="bottom"><button class="btn btn-green btn-block">Contact me</button></div>

                        @if(Session::has('message-contact'))
                            <div class="alert alert-info">{{ Session::get('message-contact') }}</div>
                        @endif
                    </form>
                </div><!-- /.form-contact -->
            </div>

            <!-- Map and working hour -->
            <div class="col-md-5 col-sm-12 col">
                <div class="maps">
                    <h3 class="title">MEET US</h3>
                    <div class="img">
                        <div id="map" style="width: 478;height: 173px;"></div>
                    </div>
                    <div class="info">
                        <!-- <p>Monday to Friday: <strong>10am - 8pm</strong></p>
                        <p>Saturday: <strong>10am - 1pm</strong></p> -->

                        <?php echo App\Models\CustomField::where('slug','working-hour')->first()->content ?>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- /.contact-home -->
</div>
<footer>
    <div class="container text-center footer-top">

        <!-- Address -->
        <p>
            <!-- <strong>VIETNAM:</strong> Floor 15, TNR Tower, 115 Tran Hung Dao, Hoan Kiem, Ha Noi<br/>
            <strong>AUSTRALIA：</strong> Shop 8, Esplanade Busport, Perth 6000<br/>
            <strong>SINGAPORE：</strong> #12-05/06 Park Mall, 9 Penang Road, Singapore 238459<br/>
            <strong>JAKARTA：</strong> Ruko Financial Center BA2 No 54 Gading Serpong, Tangerang 15810 -->
            <?php echo App\Models\CustomField::where('slug','address')->first()->content ?>
        </p>

        <!-- Socialite -->
        <div class="social">
            <a href="{{ App\Models\CustomField::where('slug','facebook')->first()->content }}"><i class="sprite-facebook"></i></a>
            <a href="{{ App\Models\CustomField::where('slug','google-plus')->first()->content }}"><i class="sprite-google-plus"></i></a>
            <a href="{{ App\Models\CustomField::where('slug','twitter')->first()->content }}"><i class="sprite-twitter"></i></a>
            <a href="{{ App\Models\CustomField::where('slug','youtube')->first()->content }}"><i class="sprite-youtube"></i></a>
        </div><!-- /.social -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom text-center">
        <div class="container">
            
        </div>
    </div><!-- /.footer-bottom -->
</footer>