<div class="formSearch" x-data="{ isOpenSearch: false }">
    <input class="fmiSearch" wire:model='input_search' wire:keydown='search' type="text" name="input_search" placeholder="Tìm kiếm Truyện" autocomplete="">
    <button class="btnSearch">Tìm kiếm</button>
    @if ($product_search != "")
        <div class="searchResult">
            @if (count($product_search) == 0)
                <span>Truyện không tồn tại</span>
            @endif
            @foreach ($product_search as $item)
                <a href="{{route('product-detail', ['id' => $item->id, 'slug' => $item->slug])}}">abv</a>
            @endforeach
        </div>
    @endif
</div>