<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<section class="wrapper bg-light wrapper-border" onfocusin="showProporse()" onfocusout="hideProporse()">
    <div class="container inner py-8">
        <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0" >
            <aside class="sidebar">
                <div class="search-form">
                    <div class="form-floating mb-0">
                        <input id="search-news"
                               onchange="actionNews(id = 'search-news', route = '{{route('yourURL')}}', token = '{{ csrf_token() }}', action = 'search')"
                               oninput="proporseNews(id = 'search-news', route = '{{route('yourURL')}}', token = '{{ csrf_token() }}', action = 'search-proporse')"
                               type="text" class="form-control" placeholder="Search">
                        <label for="search-news">Search...</label>
                    </div>
                    <div id="searched-news">
                        @include('news-proporse')
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <div id="news-module-list">
                    @include('data-module')
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="../Scripts/Scripts.js"></script>
