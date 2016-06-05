<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use Exception;

class TVShowsController extends Controller
{
  public function getTVShowByID($id) {
    $client = new Client();
    $request = $client->request('GET', 'http://api.tvmaze.com/shows/' . $id)->getBody();
    $tvshow = json_decode($request);

    $tvshow = $this->getFanart($tvshow);

    // Get the whole JSON
    // return json_decode($request, true);

    return view('welcome', compact('tvshow'));
  }

  public function searchTVShow(Request $request) {
    $query = $request->search;
    
    $client = new Client();
    $tvShowRequest = $client->request('GET', 'http://api.tvmaze.com/singlesearch/shows?q=' . $query)->getBody();
    $tvshow = json_decode($tvShowRequest);

    $tvshow = $this->getFanart($tvshow);

    return view('welcome', compact('tvshow'));
  }

  /**
   * Get the fanart for the specified tv show.
   */
  private function getFanart($tvshow) {
    $client = new Client();

    try {
      $fanart_request = $client->request('GET', 'http://webservice.fanart.tv/v3/tv/' . $tvshow->externals->thetvdb . '?api_key=' . ENV('FANARTTV_API_KEY'))->getBody();

      if (isset(json_decode($fanart_request)->showbackground)) {
        $random = rand(0, (count(json_decode($fanart_request)->showbackground))-1);
        $tvshow->fanart = json_decode($fanart_request)->showbackground[$random]->url;
      } else {
        $tvshow->fanart = null;
      }
    } catch (Exception $e) {
      $tvshow->fanart = null;
    }

    // Get the whole JSON
    // return json_decode($fanart_request, true);

    return $tvshow;
  }
}
