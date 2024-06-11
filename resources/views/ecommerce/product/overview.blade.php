@extends('layouts.master')

@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Overview</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Products</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Overview
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                <div class="xl:col-span-4">
                    <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-12">
                                    <div class="rounded-md md:col-span-8 md:row-span-2 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::to('assets/images/overview-01.png') }}" alt="">
                                    </div>
                                    <div class="rounded-md md:col-span-4 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::to('assets/images/overview-02.png') }}" alt="">
                                    </div>
                                    <div class="p-4 rounded-md md:col-span-4 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::to('assets/images/img-012.png') }}" alt="">
                                    </div>
                                    <div class="p-4 rounded-md md:col-span-4 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::to('assets/images/img-09.png') }}" alt="">
                                    </div>
                                    <div class="p-4 rounded-md md:col-span-4 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::to('assets/images/img-12.png') }}" alt="">
                                    </div>
                                    <div class="p-4 rounded-md md:col-span-4 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::to('assets/images/img-13.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="flex gap-2 mt-4 shrink-0">
                                <a id="addToCartButton" href="{{ route('shopping/cart/page') }}" onclick="addToCart()" class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
    <i data-lucide="shopping-cart" class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i>
    <span class="align-middle">Add to Cart</span>
</a>
                                    <a href="{{ route('ecommerce/checkout/page') }}">
                                    <button type="button" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20">Buy Now</button></a>
                                </div>

                            </div>
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="border-b card-body border-slate-200 dark:border-zink-500">
                                <div class="flex">
                                    <h6 class="grow text-15"><i data-lucide="store" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">StarCode Kh</span></h6>
                                    <div class="shrink-0">
                                        <i data-lucide="star" class="inline-block text-yellow-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">(4.8)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="flex">
                                    <h6 class="grow text-15"><i data-lucide="map-pin" class="inline-block text-orange-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">California, USA</span></h6>
                                    <div class="shrink-0">
                                        <button type="button" class="px-2.5 py-2 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">View Store</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                </div>
                <!--end col-->
                <div class="xl:col-span-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="relative ltr:float-right rtl:float-left dropdown">
                                <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="categoryNotes1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="categoryNotes1">
                                    <li>
                                        <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                    </li>
                                </ul>
                            </div>
                            <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-100 text-sky-500 dark:bg-sky-400/20 dark:border-transparent"> New Arrivals</span>
                            <h5 class="mt-3 mb-1">Printed Women Round Cardigan</h5>
                            <ul class="flex flex-wrap items-center gap-4 mb-5 text-slate-500 dark:text-zink-200">
                                <li><a href="#!" class="font-medium underline text-custom-500">Rossie Fadel</a></li>
                                <li>Seller: <a href="#!" class="font-medium">StarCode Kh</a></li>
                                <li>Published: <span class="font-medium">20 Oct, 2023</span></li>
                            </ul>

                            <div class="flex flex-wrap items-center gap-3 mb-4">
                                <div class="flex items-center gap-2 text-yellow-500">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <div class="text-slate-800 dark:text-zink-50 shrink-0">
                                        <h6>(4.8)</h6>
                                    </div>
                                </div>
                                <div class="shrink-0">
                                    <h6>973 Reviews</h6>
                                </div>
                                <div class="shrink-0">
                                    <h6>1,231 Sold</h6>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-1 text-green-500">Special Price</p>
                                <h4>$149.99 <small class="font-normal line-through align-middle text-slate-500 dark:text-zink-200">$299.99</small> <small class="text-green-500 align-middle">20% Off</small></h4>
                            </div>

                            <h6 class="mb-3 text-15">Select Color</h6>
                            <div class="flex flex-wrap items-center gap-2">
                                <input id="color1" class="border rounded-sm appearance-none cursor-pointer size-5 border-custom-500 bg-custom-500 checked:bg-custom-500 checked:border-custom-500 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="" disabled="">
                                <input id="color2" class="bg-red-300 border border-red-300 rounded-sm appearance-none cursor-pointer size-5 checked:bg-red-300 checked:border-red-300 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color3" class="bg-green-300 border border-green-300 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-300 checked:border-green-300 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color4" class="border rounded-sm appearance-none cursor-pointer size-5 border-slate-500 bg-slate-500 checked:bg-slate-500 checked:border-slate-500 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color5" class="bg-purple-500 border border-purple-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color6" class="border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color7" class="bg-yellow-500 border border-yellow-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-yellow-500 checked:border-yellow-500 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color7" class="bg-green-500 border border-green-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color8" class="border rounded-sm appearance-none cursor-pointer size-5 bg-slate-800 border-slate-800 checked:bg-slate-800 checked:border-slate-800 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color9" class="border rounded-sm appearance-none cursor-pointer size-5 bg-slate-200 border-slate-200 checked:bg-slate-200 checked:border-slate-200 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                                <input id="color10" class="border rounded-sm appearance-none cursor-pointer size-5 bg-emerald-300 border-embg-emerald-300 checked:bg-emerald-300 checked:border-embg-emerald-300 disabled:opacity-75 disabled:cursor-default" type="radio" name="SelectColor" value="">
                            </div>

                            <h6 class="mt-5 mb-3 text-15">Select Size</h6>
                            <div class="flex flex-wrap items-center gap-2">
                                <div>
                                    <input id="selectSizeXS" class="hidden peer" type="radio" value="XS" name="selectSize">
                                    <label for="selectSizeXS" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XS</label>
                                </div>
                                <div>
                                    <input id="selectSizeS" class="hidden peer" type="radio" value="S" name="selectSize" checked="">
                                    <label for="selectSizeS" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">S</label>
                                </div>
                                <div>
                                    <input id="selectSizeM" class="hidden peer" type="radio" value="M" name="selectSize" disabled="">
                                    <label for="selectSizeM" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">M</label>
                                </div>
                                <div>
                                    <input id="selectSizeL" class="hidden peer" type="radio" value="L" name="selectSize">
                                    <label for="selectSizeL" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">L</label>
                                </div>
                                <div>
                                    <input id="selectSizeXL" class="hidden peer" type="radio" value="XL" name="selectSize">
                                    <label for="selectSizeXL" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XL</label>
                                </div>
                                <div>
                                    <input id="selectSize2XL" class="hidden peer" type="radio" value="2XL" name="selectSize">
                                    <label for="selectSize2XL" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">2XL</label>
                                </div>
                            </div>

                            <h6 class="mt-5 mb-3 text-15">Available Offers (4)</h6>
                            <ul class="flex flex-col gap-2">
                                <li><i data-lucide="tag" class="inline-block text-green-500 size-4 ltr:mr-1 rtl:ml-1 fill-green-200 dark:fill-green-500/20"></i> <span class="font-semibold">Bank Offer</span> 10% Instant Discount on Paypal, up to $1250 on orders of $5,000 and above <a href="#!" class="underline text-custom-500">T&C</a></li>
                                <li><i data-lucide="tag" class="inline-block text-green-500 size-4 ltr:mr-1 rtl:ml-1 fill-green-200 dark:fill-green-500/20"></i> <span class="font-semibold">Special Price</span> Get at flat $199 <a href="#!" class="underline text-custom-500">T&C</a></li>
                                <li><i data-lucide="tag" class="inline-block text-green-500 size-4 ltr:mr-1 rtl:ml-1 fill-green-200 dark:fill-green-500/20"></i> <span class="font-semibold">Partner Offer</span> Purchase now & get 1 surprise cashback coupon in Future <a href="#!" class="underline text-custom-500">Know More</a></li>
                                <li><i data-lucide="tag" class="inline-block text-green-500 size-4 ltr:mr-1 rtl:ml-1 fill-green-200 dark:fill-green-500/20"></i> <span class="font-semibold">Bank Offer</span> UPI Offer Men's Clothing <a href="#!" class="underline text-custom-500">T&C</a></li>
                            </ul>

                            <div class="grid grid-cols-1 gap-5 my-5 xl:grid-cols-3">
                                <div class="flex items-center gap-5 p-4 border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center justify-center">
                                        <i data-lucide="truck" class="w-6 h-6 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Estimated Delivery</h6>
                                        <p class="text-slate-500 dark:text-zink-200">01 - 07 Dec, 2023</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-5 p-4 border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center justify-center">
                                        <i data-lucide="container" class="w-6 h-6 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Free Shipping & Returns</h6>
                                        <p class="text-slate-500 dark:text-zink-200">On all orders over $200.00</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h6 class="mb-3 text-15">Product Description:</h6>
                                <p class="mb-2 text-slate-500 dark:text-zink-200">Latest <b>Trends</b> in Fashion Clothing. Currently, the latest clothing trends for women on FabAlley include playful check print, breezy floral motif, bold red hue, cool denim fabric, quirky polka dot and romantic ruffles.</p>
                                <p class="text-slate-500 dark:text-zink-200"><b>Avoid shapeless and baggy clothing</b>. Stay away from pieces with extra fabric at the hips or bust to keep your look proportionate. Avoid wearing ruffles or pleats around your waist or hips. Be sure to wear supportive undergarments that fit you well!</p>
                            </div>

                            <div class="mt-5">
                                <h6 class="mb-3 text-15">Features:</h6>
                                <div class="overflow-x-auto">
                                    <table class="w-full">
                                        <tbody>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Type</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">Round Neck</td>
                                            </tr>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Sleeve</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">Half Sleeve</td>
                                            </tr>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Fit</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">Regular</td>
                                            </tr>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Fabric</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">Cotton Blend</td>
                                            </tr>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Pack of</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">1</td>
                                            </tr>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Product Code</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">TWT1542</td>
                                            </tr>
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">Ideal for</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">Women</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <h6 class="mt-5 mb-3 text-15">Ratings & Reviews</h6>
                            <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                <div class="xl:col-span-4">
                                    <div class="border border-dashed rounded-md border-slate-200 dark:border-zink-500">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h5 class="mb-2 text-16">Customer Ratings</h5>
                                                <span class="px-3.5 py-1.5 inline-flex gap-3 text-xs font-medium rounded-full border bg-slate-100 border-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-600">
                                                    <span class="flex items-center gap-2 text-yellow-500">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-line"></i>
                                                    </span>
                                                    (4.8 out of 5)
                                                </span>
                                                <p class="mt-2 text-sm text-slate-500 dark:text-zink-200">4,213 total ratings</p>
                                            </div>
                                            <div class="flex flex-col gap-3 mt-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="text-sm shrink-0">
                                                        5 <i class="ml-1 text-yellow-500 align-middle ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-full h-1.5 rounded-full bg-slate-200 dark:bg-zink-600">
                                                        <div class="h-1.5 rounded-full bg-green-500" style="width: 79%"></div>
                                                    </div>
                                                    <div class="text-sm text-right w-9 shrink-0">
                                                        1,210
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <div class="text-sm shrink-0">
                                                        4 <i class="ml-1 text-yellow-500 align-middle ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-full h-1.5 rounded-full bg-slate-200 dark:bg-zink-600">
                                                        <div class="h-1.5 rounded-full bg-sky-500" style="width: 66%"></div>
                                                    </div>
                                                    <div class="text-sm text-right w-9 shrink-0">
                                                        1,174
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <div class="text-sm shrink-0">
                                                        3 <i class="ml-1 text-yellow-500 align-middle ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-full h-1.5 rounded-full bg-slate-200 dark:bg-zink-600">
                                                        <div class="h-1.5 rounded-full bg-purple-500" style="width: 45%"></div>
                                                    </div>
                                                    <div class="text-sm text-right w-9 shrink-0">
                                                        762
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <div class="text-sm shrink-0">
                                                        2 <i class="ml-1 text-yellow-500 align-middle ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-full h-1.5 rounded-full bg-slate-200 dark:bg-zink-600">
                                                        <div class="h-1.5 rounded-full bg-yellow-500" style="width: 22%"></div>
                                                    </div>
                                                    <div class="text-sm text-right w-9 shrink-0">
                                                        274
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <div class="text-sm shrink-0">
                                                        1 <i class="ml-1 text-yellow-500 align-middle ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-full h-1.5 rounded-full bg-slate-200 dark:bg-zink-600">
                                                        <div class="h-1.5 rounded-full bg-red-500" style="width: 5%"></div>
                                                    </div>
                                                    <div class="text-sm text-right w-9 shrink-0">
                                                        32
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="xl:col-span-8">
                                    <div class="flex items-center gap-3 mb-4">
                                        <h5 class="text-16 grow">Reviews</h5>
                                        <button type="button" data-modal-target="addReviewsModal" class="px-2 shrink-0 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Review</button>
                                    </div>
                                    <div class="mt-3">
                                        <div class="relative ltr:float-right rtl:float-left dropdown">
                                            <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="reviews1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="reviews1">
                                                <li>
                                                    <a data-modal-target="addReviewsModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full shrink-0 bg-sky-100 dark:bg-sky-500/20">
                                                <img src="{{ URL::to('assets/images/profile.png') }}" alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="text-15"><a href="#!">Aubrey Beer</a></h6>
                                                <p class="text-sm text-slate-500 dark:text-zink-200">on 14 Jan, 2024</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 mt-4 mb-2 text-yellow-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <p class="text-slate-500 dark:text-zink-200">"Nice product good quality and looking"</p>
                                        <div class="flex items-center gap-3 mt-3">
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-green-500 active"><i data-lucide="thumbs-up" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">15</span></a>
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-red-500 active"><i data-lucide="thumbs-down" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">3</span></a>
                                        </div>
                                    </div>
                                    <div class="pt-3 mt-3 border-t border-slate-200 dark:border-zink-500">
                                        <div class="relative ltr:float-right rtl:float-left dropdown">
                                            <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="reviews2" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="reviews2">
                                                <li>
                                                    <a data-modal-target="addReviewsModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full shrink-0 bg-sky-100 dark:bg-sky-500/20">
                                                <img src="{{ URL::to('assets/images/profile.png') }}" alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="text-15"><a href="#!">Theodora Jones</a></h6>
                                                <p class="text-sm text-slate-500 dark:text-zink-200">on 20 July, 2023</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 mt-4 mb-2 text-yellow-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                        </div>
                                        <p class="text-slate-500 dark:text-zink-200">"Amazing! Fast, to the point, professional and really amazing to work with them!!!"</p>
                                        <div class="flex items-center gap-3 mt-3">
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-green-500 active"><i data-lucide="thumbs-up" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">77</span></a>
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-red-500 active"><i data-lucide="thumbs-down" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">26</span></a>
                                        </div>
                                    </div>
                                    <div class="pt-3 mt-3 border-t border-slate-200 dark:border-zink-500">
                                        <div class="relative ltr:float-right rtl:float-left dropdown">
                                            <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="reviews3" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="reviews3">
                                                <li>
                                                    <a data-modal-target="addReviewsModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-yellow-100 rounded-full shrink-0 dark:bg-yellow-500/20">
                                                <img src="{{ URL::to('assets/images/profile.png') }}" alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="text-15"><a href="#!">Jordane Dare</a></h6>
                                                <p class="text-sm text-slate-500 dark:text-zink-200">on 07 Dec, 2023</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 mt-4 mb-2 text-yellow-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <p class="text-slate-500 dark:text-zink-200">"Very nice design. Clean Code and easy customizable"</p>
                                        <div class="flex items-center gap-3 mt-3">
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-green-500 active"><i data-lucide="thumbs-up" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">31</span></a>
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-red-500 active"><i data-lucide="thumbs-down" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">09</span></a>
                                        </div>
                                    </div>
                                    <div class="pt-3 mt-3 border-t border-slate-200 dark:border-zink-500">
                                        <div class="relative ltr:float-right rtl:float-left dropdown">
                                            <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="reviews4" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="reviews4">
                                                <li>
                                                    <a data-modal-target="addReviewsModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-green-100 rounded-full shrink-0 dark:bg-green-500/20">
                                                <img src="{{ URL::to('assets/images/profile.png') }}" alt="" class="h-10 rounded-full">
                                            </div>
                                            <div class="grow">
                                                <h6 class="text-15"><a href="#!">avern Ratke</a></h6>
                                                <p class="text-sm text-slate-500 dark:text-zink-200">on 10 Aug, 2023</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 mt-4 mb-2 text-yellow-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <p class="text-slate-500 dark:text-zink-200">"The best templates which is supported multiple programming languages with beautiful templates. thank you for the valuable template."</p>
                                        <div class="flex items-center gap-3 mt-3">
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-green-500 active"><i data-lucide="thumbs-up" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">49</span></a>
                                            <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-red-500 active"><i data-lucide="thumbs-down" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">17</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    @section('script')
        <!-- product overview init js-->
        <script>
    function addToCart() {
        // Simulate adding to cart with an AJAX request
        // For demonstration, we'll just use setTimeout to simulate an async operation

        // Disable the button to prevent multiple clicks
        document.getElementById('addToCartButton').classList.add('disabled');
        
        setTimeout(() => {
            // Simulate a successful "Add to Cart" operation
            showNotification('Item added to cart!');
            
            // Re-enable the button
            document.getElementById('addToCartButton').classList.remove('disabled');
        }, 1000); // Simulate a delay

        // Prevent the default link action
        return false;
    }

    function showNotification(message) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.innerText = message;

        // Style the notification
        notification.style.position = 'fixed';
        notification.style.bottom = '20px';
        notification.style.right = '20px';
        notification.style.backgroundColor = '#28a745';
        notification.style.color = 'white';
        notification.style.padding = '10px 20px';
        notification.style.borderRadius = '5px';
        notification.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        notification.style.zIndex = 1000;
        notification.style.opacity = 1;
        notification.style.transition = 'opacity 0.5s';

        // Append notification to body
        document.body.appendChild(notification);

        // Remove notification after 3 seconds
        setTimeout(() => {
            notification.style.opacity = 0;
            setTimeout(() => notification.remove(), 500);
        }, 3000);
    }
</script>

        <script src="{{ URL::to('assets/js/pages/apps-ecommerce-product-overview.init.js') }}"></script>
    @endsection
@endsection
