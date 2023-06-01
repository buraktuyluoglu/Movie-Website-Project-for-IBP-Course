@extends("layouts.home")
@section("content")
    <div class="container p-5">
        <!-- faq -->
        <section class="section">
            <div class="container">
                <div class="row mb-5">
                    <h1 style="color:#fff;">Duyurular</h1>
                    <small style="color:#fff;">Vizyona girenler, telif hakkı sebebiyle kaldırılan filmler, yenilikler ve daha fazlası için takipte kalın</small>
                </div>
                <div class="row">
                    @foreach($announcements as $announcement)
                    <div class="col-12 col-md-6">
                            <div class="faq">
                                <h3 class="faq__title">{{$announcement->title}}</h3>
                                <p class="faq__text">{{$announcement->body}}</p>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end faq -->
    </div>

@endsection
