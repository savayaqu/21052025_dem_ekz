<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Models\MaterialType;
use App\Models\Partner;
use App\Models\PartnerProduct;
use App\Models\PartnerType;
use App\Models\ProductType;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        foreach ($partners as $partner) {
            $countSum = PartnerProduct::query()->where('partner_id', $partner->id)->sum('count');
            if($countSum < 10000){
                $partner->discount = 0;
            }
            else if($countSum < 50000){
                $partner->discount = 5;
            }
            else if ($countSum < 300000){
                $partner->discount = 10;
            }
            else {
                $partner->discount = 15;
            }
        }
        return view('partner.index', compact('partners'));
    }
    public function create()
    {
        $types = PartnerType::all();
        return view('partner.create', compact('types'));
    }
    public function store(PartnerRequest $request)
    {
        Partner::query()->create($request->validated());
        return redirect()->route('partner.index');
    }
    public function update(Partner $partner)
    {
        $types = PartnerType::all();
        return view('partner.update', compact('partner', 'types'));
    }
    public function edit(Partner $partner, PartnerRequest $request)
    {
        $partner->update($request->validated());
        return redirect()->route('partner.index');
    }
    public function history(Partner $partner)
    {
        $partner_products = $partner->partnerProducts()->get();
        return view('partner.history', compact('partner', 'partner_products'));
    }
    // Четвертый метод
    public function methodFour(ProductType $productType, MaterialType $materialType, int $quantity, float $p1, float $p2)
    {
        try {
            $need_quantity = round($p1 * $p2 * $productType->coefficient * (1 + $materialType->defect_rate));
            return $need_quantity;
        }
        catch (\Exception $e) {
            return -1;
        }

    }
}
