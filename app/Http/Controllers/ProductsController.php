<?php
namespace App\Http\Controllers;
use  App\Product;
use  App\Category;
use  App\MoreImages;
use  App\SizeColors;
use App\Cart;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{
  public function getDetails(Request $req){
    $product = Product::where('id',$req->id)->first();

    $more_images = MoreImages::where('product_id',$req->id)->get();
    $sizes_colors = SizeColors::where('product_id',$req->id)->get();

    $sizes_colors_quan = array();

    // organize the array by cusip
    foreach($sizes_colors as $attr){
      if(!(array_key_exists($attr->size, $sizes_colors_quan))){
        $sizes_colors_quan[$attr->size] = array(); 
      }
    }

    foreach($sizes_colors as $attr){
      if(array_key_exists($attr->size, $sizes_colors_quan)){
        if (!in_array($attr->color, $sizes_colors_quan[$attr->size]) )
          $sizes_colors_quan[$attr->size][$attr->color] = $attr->quantity; 
      }
    }

    return view('product.details_product',compact('product', 'more_images','sizes_colors_quan','sizes_colors'));
  }

  public function getListAllProducts(){
    $products = Product::all();
    $categories = Category::all();
    return view('product.list_products',compact('products','categories'));
  }

  public function search(Request $request)
  {
    $keyword = $request->keyword;

    $product = Product::where('name', 'like', '%$keyword%')
    ->take(30);

    return view('product.list_products', ['product' => $searched_product, 'keyword' => $keyword]);
  }
}
?>
