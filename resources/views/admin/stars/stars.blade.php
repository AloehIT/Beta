@if($data->ranting == "5")
<div class="mb-3 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
</div>
@elseif($data->ranting == "4")
<div class="mb-3 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
</div>
@elseif($data->ranting == "3")
<div class="mb-3 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
</div>
@elseif($data->ranting == "2")
<div class="mb-3 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
</div>
@elseif($data->ranting == "1")
<div class="mb-3 d-flex">
    <i class="fa-solid fa-star text-warning text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
</div>
@elseif($data->ranting == "0")
<div class="mb-3 d-flex">
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
    <i class="fa-solid fa-star text-sm"></i>
</div>
@endif