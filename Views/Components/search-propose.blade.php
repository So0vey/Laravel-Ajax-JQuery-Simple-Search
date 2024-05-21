@if($datas_proporse ?? '' != '')
    <div id="proporse-container" class="container" style="position: absolute;z-index: 100;">
        <div class="card">
            @foreach($datas_proporse as $data_proporse)
                <div class="row" type="button"
                     onclick="getNews(id = '{{$data_proporse->id}}', route = '{{route('main.news.action')}}', token = '{{ csrf_token() }}', action = 'get_searched')"
                >
                    <div class="col">
                        <div class="row"><h2  class="post-title mt-1 mb-0">{{$data_proporse->name}}</h2></div>
                        <div class="row"><h4  class="post-title mt-1 mb-0">{{$data_proporse->text}}</h2></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
@endif