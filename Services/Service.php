<?php

namespace Services;
class Service
{
    public function news_search_filter(Request $req)
    {
        if ($req->data == '') {
            return '';
        } else {
            return yourDB::orderBy('created_at', 'desc')
                ->where('name', 'like', "%{$req->data}%")
                ->orWhere('text', 'like', "%{$req->data}%")
                ->paginate(5);
        }
    }

    public function get_searched_news(Request $req)
    {
        return yourDB::where('id', $req->id)->paginate(1);
    }
}
