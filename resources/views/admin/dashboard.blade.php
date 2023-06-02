@extends("layouts.admin")
@section("content")
    <div class="row">
         <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="small-box bg-gradient-info">
                        <div class="inner">
                            <h3 class="p-2"> <i class="fas fa-video "><span class="px-2">{{$movies}}</span></i></h3>

                            <p>Movies</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <a href="{{route('admin.movie.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="small-box bg-gradient-danger">
                        <div class="inner">
                            <h3>{{$comments}}</h3>

                            <p>Total Comments</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment"></i>

                        </div>
                        <a href="{{route('admin.user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{$users}}</h3>

                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>

                        </div>
                        <a href="{{route('admin.user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$messages}}</h3>

                            <p>Contact Messages</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="{{route('admin.contact.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>
    <div class="row">
        <!-- DONUT CHART -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>
            </div>
            <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endsection
@section('bottom-scripts')
    <script>

        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: [
                @foreach($categories as $category)
                '{{$category->title}}',
                @endforeach
            ],
            datasets: [
                {
                    data: [
                        @foreach($categories as $category)
                        {{count($category->movies)}},
                       @endforeach
                    ],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    </script>
@endsection
