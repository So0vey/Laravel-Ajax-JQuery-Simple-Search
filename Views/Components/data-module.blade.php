<div class="blog classic-view">
    @foreach($datas as $data)
        <div>
            {{$data->name}}
            {{$data->text}}
        </div>
    @endforeach
</div>
<div>
    {{$datas->links()}}
</div>