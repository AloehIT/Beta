@if($prd->ranting == "5")
<div class="mb-3 mt-1 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <span class="badge bg-warning mx-2" style="font-size: 10px;">{{ __('label.terbaik') }}</span>
</div>
@elseif($prd->ranting == "4")
<div class="mb-3 mt-1 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <span class="badge bg-warning mx-2" style="font-size: 10px;">{{ __('label.terbaik') }}</span>
</div>
@elseif($prd->ranting == "3")
<div class="mb-3 mt-1 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <span class="badge bg-success mx-2" style="font-size: 10px;">{{ __('label.standar') }}</span>
</div>
@elseif($prd->ranting == "2")
<div class="mb-3 mt-1 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <span class="badge bg-primary mx-2" style="font-size: 10px;">{{ __('label.biasa') }}</span>
</div>
@elseif($prd->ranting == "1")
<div class="mb-3 mt-1 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <span class="badge bg-danger mx-2" style="font-size: 10px;">{{ __('label.buruk') }}</span>
</div>
@elseif($prd->ranting == "0")
<div class="mb-3 mt-1 d-flex">
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <span class="badge bg-secondary mx-2" style="font-size: 10px;">{{ __('label.belum') }}</span>
</div>
@endif