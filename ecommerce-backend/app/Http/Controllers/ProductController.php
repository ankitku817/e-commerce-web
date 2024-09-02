// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('query');

        if (strlen($searchTerm) < 3) {
            return response()->json([]);
        }

        $products = Product::where('name', 'like', "%{$searchTerm}%")
            ->orWhere('description', 'like', "%{$searchTerm}%")
            ->get();

        return response()->json($products);
    }
}
