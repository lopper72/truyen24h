<form wire:submit='storeTransferWarehouse'>
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <div class="grid gap-x-6 gap-y-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-8">
                <div class="col-span-1 sm:col-span-2 md:col-span-1">
                    <label for="transfer_warehouse_code" class="block text-sm font-medium leading-6 text-gray-900">Mã chuyển kho <span class="text-red-700">*</span></label>
                    <div class="mt-2">
                        <input wire:model="transfer_warehouse_code" type="text" name="transfer_warehouse_code" id="transfer_warehouse_code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('transfer_warehouse_code')
                        <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-1 sm:col-span-2 md:col-span-3">
                    <label for="transfer_warehouse_name" class="block text-sm font-medium leading-6 text-gray-900">Tiêu đề <span class="text-red-700">*</span></label>
                    <div class="mt-2">
                        <input wire:model="transfer_warehouse_name" type="text" name="transfer_warehouse_name" id="transfer_warehouse_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('transfer_warehouse_name')
                        <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-1 sm:col-span-2 md:col-span-4"></div>
                <div class="col-span-1 sm:col-span-2 md:col-span-2">
                    <label for="from_warehouse_id" class="block text-sm font-medium leading-6 text-gray-900">Kho hàng đi<span class="text-red-700">*</span></label>
                    <div class="mt-2">
                        <select wire:model="from_warehouse_id" id="from_warehouse_id" name="from_warehouse_id" autocomplete="from_warehouse_id" class="convert-to-dropdown block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">-</option>
                            @foreach ($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('from_warehouse_id')
                        <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-1 sm:col-span-2 md:col-span-2">
                    <label for="to_warehouse_id" class="block text-sm font-medium leading-6 text-gray-900">Kho hàng đến<span class="text-red-700">*</span></label>
                    <div class="mt-2">
                        <select wire:model="to_warehouse_id" id="to_warehouse_id" name="to_warehouse_id" autocomplete="to_warehouse_id" class="convert-to-dropdown block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">-</option>
                            @foreach ($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('to_warehouse_id')
                        <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-1 sm:col-span-2 md:col-span-4"></div>
                <div class="col-span-1 sm:col-span-2 md:col-span-8">
                    <div class="flex justify-between items-center bg-slate-800">
                        <h3 class="font-bold text-gray-300 px-3 py-3">THÊM Truyện</h3>
                        <div class="flex flex-col sm:flex-row items-center justify-end gap-x-6 px-3">
                            <button type="button" wire:click="addTransferWarehouseDetail" class="inline-flex items-center px-2 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="10" height="10" viewBox="0 0 45.402 45.402" xml:space="preserve">
                                    <g>
                                        <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141   c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27   c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435   c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @if ($transfer_warehouse_detail_count > 0)
                    <div class="col-span-1 sm:col-span-2 md:col-span-8">
                        <div class="">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider w-20 text-left">STT</th>
                                        <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider text-left">Truyện</th>
                                        <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider w-80 text-left">Mẫu Truyện</th>
                                        <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider w-64 text-left">Size</th>
                                        <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider w-64 text-left">Số lượng</th>
                                        <th scope="col" class="px-6 py-4 text-xs font-medium text-gray-500 uppercase tracking-wider w-20 text-left"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 text-sm">
                                    @for ($index = 0; $index < $transfer_warehouse_detail_count; $index++)
                                        <tr>
                                            <td class="px-6 py-2 whitespace-nowrap text-left" valign="top">{{{$index+1}}}</td>
                                            <td class="px-6 py-2 whitespace-nowrap text-left" valign="top">
                                                <div>
                                                    @php
                                                        if (array_key_exists($index,$disabled_select_yn) && $disabled_select_yn[$index] == "y") {
                                                            $convert = "";
                                                            $show_button_copy_yn = "n";
                                                        }else {
                                                            $convert = "convert-to-dropdown";
                                                            $show_button_copy_yn = "y";
                                                        }
                                                    @endphp
                                                    <select  @if (array_key_exists($index,$disabled_select_yn) && $disabled_select_yn[$index] == "y") disabled @endif wire:model="product_id.{{$index}}" wire:change="pullDropdown({{$index}})" id="product_id{{$index}}" name="product_id{{$index}}" autocomplete="product_id{{$index}}" class="{{$convert}} block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                        <option value="">-</option>
                                                        @foreach ($products as $product)
                                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('product_id.' .$index)
                                                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap text-left" valign="top">
                                                <div>
                                                    <select wire:model="product_detail_id.{{$index}}" id="product_detail_id{{$index}}" name="product_detail_id{{$index}}" autocomplete="product_detail_id{{$index}}" class="convert-to-dropdown block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                        <option value="">-</option>
                                                        @if ($product_detail_list && array_key_exists($index,$product_detail_list))
                                                            @foreach($product_detail_list[$index] as $product_detail)
                                                                <option value="{{$product_detail->id}}">{{$product_detail->title}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('product_detail_id.' .$index)
                                                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap text-left" valign="top">
                                                <div>
                                                    <select wire:model="size_id.{{$index}}" id="size_id{{$index}}" name="size_id{{$index}}" autocomplete="size_id{{$index}}" class="convert-to-dropdown block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                        <option value="">-</option>
                                                        @if ($product_size_list && array_key_exists($index,$product_size_list))
                                                            @foreach($product_size_list[$index] as $product_size)
                                                                <option value="{{$product_size->id}}">{{$product_size->size}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('size_id.' .$index)
                                                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap text-left" valign="top">
                                                <input wire:model="transfer_warehouse_detail_qnty.{{$index}}" type="number" name="transfer_warehouse_detail_qnty{{$index}}" id="transfer_warehouse_detail_qnty{{$index}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                @error('transfer_warehouse_detail_qnty.' .$index)
                                                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap text-center" valign="top">
                                                @if ($show_button_copy_yn == "y")
                                                    <button type="button" wire:click="copyTransferWarehouseDetail({{$index}})" class="inline-flex items-center px-2 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="10" height="10" viewBox="0 0 45.402 45.402" xml:space="preserve">
                                                            <g>
                                                                <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141   c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27   c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435   c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"></path>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
    </div>
    <div class="mt-6 flex flex-col sm:flex-row items-center justify-end gap-x-6">
        <a href="{{route('admin.transfer-warehouse')}}" class="text-sm font-semibold leading-6 text-gray-900">Hủy</a>
        <button class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">Lưu</button>
    </div>
    <button id="modal_success" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hidden block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    </button>
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-4 md:p-5 text-center">
                    <div id="svg-icon" class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"><span id="title-message"></span></h3>
                    <p id="message" class="mb-5 text-sm text-gray-500 dark:text-gray-400"></p>
                </div>
            </div>
        </div>
    </div>
</form>

@script
    <script>
        Livewire.hook('element.init', ({ component, el }) => {
            setTimeout(() => {
                convertSelectsToDropdowns()
            }, 100);
        })
        window.addEventListener('successTransferProduct', event => {
            const btn = document.getElementById('modal_success');
            const title = document.getElementById('title-message');
            const message = document.getElementById('message');
            const svgIcon = document.getElementById('svg-icon');
            setTimeout(() => {
                message.innerHTML = event.detail[0].message;
                title.innerHTML = event.detail[0].title;
                if(event.detail[0].type == 'success'){
                    svgIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>';
                }else{
                    svgIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>';
                }
                btn.click(); 
            }, 500);
            if(event.detail[0].type == 'error'){
                setTimeout(() => {
                    window.location.href = "{{route('admin.transfer-warehouse.add')}}";
                }, 2000);
            }
        })
    </script>
@endscript
