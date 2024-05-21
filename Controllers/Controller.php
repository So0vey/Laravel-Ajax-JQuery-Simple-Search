<?php

namespace Controllers;

class Controller
{
    public function index()
    {
        return view('Page', [yourDB::get()]) ;
    }

    public function news_action(Request $req)
    {
        switch ($req->action) {
            case 'search':
                return view('data-module', ['news' => $this->Serivce->news_search_filter($req)]);
                break;
            case 'get_searched':
                return view('data-module', ['news' => $news = $this->Serivce->get_searched_news($req)]);
                break;
            case 'search-proporse':
                return view('news-proporse', ['news_propose' => $this->Serivce->news_search_filter($req)]);
                break;
        }

    }
}