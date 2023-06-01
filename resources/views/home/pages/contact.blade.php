@extends("layouts.home")
@section("content")
                <div class="sign section--bg" data-bg="{{asset('home')}}/img/section/section.jpg">
                    <div class="container p-5">
                        <div class="row p-5">
                            <div class="col-6">
                                <iframe style="width:100%;height: 70%; margin-top: 150px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.7289783347624!2d34.58004881528924!3d36.77706867995341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15278b4ccf4f2d5b%3A0x627826335dee00a3!2sG%C3%B6ksel%20Tantuni%20Pozcu%20Sahil!5e0!3m2!1sen!2str!4v1685622527216!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="col-6">
                                <div class="sign__content">
                                    <!-- registration form -->
                                    <form action="{{route('home.contact_message')}}" class="sign__form" method="post">
                                        @csrf
                                        <a href="{{route('home.index')}}" class="sign__logo">
                                            <img src="{{asset('home')}}/img/logo.svg" alt="">
                                            <small class="text-white">İletişime Geçin</small>
                                        </a>
                                        <div class="sign__group">
                                            <input type="text" class="sign__input" name="phone" placeholder="Phone">
                                        </div>

                                        <div class="sign__group">
                                            <input type="text" class="sign__input"  name="email" placeholder="Email">
                                        </div>
                                        <div class="sign__group">
                                            <input type="text" class="sign__input" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="sign__group">
                                            <textarea type="message" name="message" class="sign__input" placeholder="Message" style="resize: none;height: 200px;" rows="4" cols="50" ></textarea>
                                        </div>

                                        <button type="submit" class="sign__btn" >Send</button>

                                    </form>
                                    <!-- registration form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection
