@section('footer')

    @if (Auth::check()) 
    <div id="footer" role="contentinfo">
        <div class="copyright">
            <div class="row">
                <div class="container">
                <div class="row">
                    <div class= "col-xs-12 col-sm-8 col-md-8 title_plus" style=" margin-top: 5px;">© EMPLOYEES </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <span class="powerby">
                        Powered by: 
                            <span>
                                <a href="http://www.eightbitsco.com" target="_blank">
                                    <img src="{{asset('img/logoWeb-EightBits.png')}}" style="width:55px; margin-left:10px">
                                </a>
                            </span>
                        </span>
                    </div>                
                </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@show