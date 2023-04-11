<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
        // Handler for Moroccan cities API
        public function getMoroccanCities(){
          $cities = [
              'Casablanca', 'Rabat', 'Fes', 'Marrakech', 'Tangier', 'Agadir', 'Mohammedia', 'Oujda', 'Kenitra', 'Tetouan',
              'Safi', 'Temara', 'El Jadida', 'Nador', 'Khouribga', 'Beni Mellal', 'Ait Melloul', 'Errachidia', 'Meknes', 'Taroudant',
              'Taza', 'Settat', 'Larache', 'Guelmim', 'Khemisset', 'Berkane', 'Ksar El Kebir', 'Chefchaouen', 'Dakhla', 'Midelt',
              'Ouarzazate', 'Taourirt', 'Lahraouyine', 'Khenifra', 'Mohammed VI City', 'Benslimane', 'Martil', 'Al Hoceima', 'Azrou', 'Youssoufia',
              'Skhirat', 'Tifelt', 'Sidi Kacem', 'Tan-Tan', 'Sidi Slimane', 'Souk El Arbaa', 'Tiznit', 'Zagora', 'Taounate', 'Sefrou',
          ];
      
          return response()->json($cities);
        }
      
}
