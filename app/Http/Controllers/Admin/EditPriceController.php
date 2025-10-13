<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\WheelService;
use Illuminate\Http\Request;

class EditPriceController extends Controller
{
    public function getPrices () {
        $categories = Category::all();
        $wheelServices = WheelService::all();
        $orderedCategories = Category::with('wheelsService')->get();
        return view('pricesedit', compact('categories', 'wheelServices', 'orderedCategories'));
    }

    public function editCategory (Request $request) {
        try {
            foreach ($request->categories as $categoryData) {
                $category = Category::find($categoryData['id']);
                $category->update([
                    'name' => $categoryData['name'],
                ]);
            }
            return back()->with('successCategoryEdit', 'Sikeres kategória módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorCategoryEdit' => 'Hiba történt a kategóriák szerkesztése közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    public function destroySelected (Request $request) {
        $ids = $request->input('deleted_ids', []);
        try {
            Category::destroy($ids);
            return back()->with('successCategoryDelete', 'Sikeres kategória törlés!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorCategoryDelete' => 'Hiba a kategória törlése közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    public function storeCategory (Request $request) {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        try {
            $category = new Category();
            $category->name =$validated["name"];
            $category->save();
            return back()->with('successStoreCat', 'Sikeres feltöltés!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorStoreCat' => 'Hiba a kategória feltöltése közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    public function storeService (Request $request) {
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'unit' => 'required',
        ]);

        try {
            $service = new WheelService();
            $service->category_id = $validated["category_id"];
            $service->name = $validated["name"];
            $service->price = $validated["price"];
            $service->unit = $validated["unit"];
            $service->save();
            return back()->with('successServiceUpload', 'Sikeres szervíz feltöltés.');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorService' => 'Hiba történt a nyitvatartási adatok frissítése közben: ', $e->getMessage(),
            ])->withInput();
        }
    }

    public function editService (Request $request) {
        try {
            foreach ($request->wheelservice as $wheelservice) {
                $service = WheelService::find($wheelservice['id']);
                $service->update([
                    'price' => $wheelservice['price'],
                ]);
            }
            return back()->with('successServiceEdit', 'Sikeres ár módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorServiceEdit' => 'Hiba történt az ár frissítése közben: ', $e->getMessage(),
            ])->withInput();
        }
    }

    public function deleteService (Request $request) {
        $ids = $request->input('deleteService', []);

        try {
            WheelService::destroy($ids);
            return back()->with('successServiceDelete', 'Sikeres szervíz törlés!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorServiceDelete' => 'Hiba a szerviz törlése közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    public function reorder(Request $request) {
        try {
            foreach ($request->serviceOrders as $serviceOrder) {
                $service = WheelService::find($serviceOrder['id']);
                $service->update([
                    'order' => $serviceOrder['order'],
                ]);
            }
            return back()->with('successReorder', 'Sikeres sorrend módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorServiceReorder' => 'Hiba a sorrend módosítása közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }
}
