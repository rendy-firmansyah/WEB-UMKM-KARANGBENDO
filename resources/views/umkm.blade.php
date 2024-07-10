<x-layout>

    <x-slot name="title">UMKM Unggulan Desa Karangbendo</x-slot>
    <section class="p-12 w-full bg-gray-800 text-gray-100 min-h-screen flex flex-col justify-center items-center"
        id="hero"
        style="background-image: url({{ asset('images/batik-biru.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="flex justify-center items-center flex-col pt-32 text-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 leading-snug">
                Selamat datang di
                <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-teal-500">UMKM
                    Unggulan</span> Desa
                <span class="text-blue-500">Karangbendo</span>
            </h1>
            <p class="text-sm sm:text-base md:text-md lg:text-lg mb-4 mx-auto py-4">
                Potensi dan keunggulan UMKM unggulan apa saja yang ada di Desa Karangbendo
            </p>
            <a href="#products">
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-800 rounded-full transition-all">
                    Selengkapnya
                </button>
            </a>
        </div>
    </section>




    <section class="flex flex-col bg-gray-100 text-gray-800 p-12 " id="products"
        style="background-image: url({{ asset('images/bg-batikGajahOling.png') }}); background-repeat: no-repeat; background-size: cover;">
        <h3 class="text-md md:text-2xl lg:text-3xl font-bold mb-3 leading-8 text-start">Daftar
            <span class="text-blue-500">UMKM </span> Unggulan
        </h3>
        <hr class="border-gray-700 w-full border-2 rounded-full opacity-20">
        <section>
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h2 class="text-lg md:text-2xl lg:text-3xl font-bold mb-3 leading-8 text-start pt-4">1. Batik <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-purple-500 via-purple-800 to-[#755553]">Pandawa</span>
                    </h2>
                </div>
                <div class="flex flex-col md:flex-row justify-end space-y-4 md:space-y-0 md:space-x-4 w-full md:w-auto">
                    <div class="relative w-full max-w-xs md:max-w-sm">
                        <svg class="absolute top-1/2 transform -translate-y-1/2 left-4 z-50 text-slate-100"
                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.5555 3.33203H3.44463C2.46273 3.33203 1.66675 4.12802 1.66675 5.10991C1.66675 5.56785 1.84345 6.00813 2.16004 6.33901L6.83697 11.2271C6.97021 11.3664 7.03684 11.436 7.0974 11.5068C7.57207 12.062 7.85127 12.7576 7.89207 13.4869C7.89728 13.5799 7.89728 13.6763 7.89728 13.869V16.251C7.89728 17.6854 9.30176 18.6988 10.663 18.2466C11.5227 17.961 12.1029 17.157 12.1029 16.251V14.2772C12.1029 13.6825 12.1029 13.3852 12.1523 13.1015C12.2323 12.6415 12.4081 12.2035 12.6683 11.8158C12.8287 11.5767 13.0342 11.3619 13.4454 10.9322L17.8401 6.33901C18.1567 6.00813 18.3334 5.56785 18.3334 5.10991C18.3334 4.12802 17.5374 3.33203 16.5555 3.33203Z"
                                stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                        <select id="Offer1"
                            class="h-12 border border-gray-300 text-slate-100 pl-11 text-base font-normal rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-blue-500 transition-all duration-500 hover:bg-blue-600 focus:bg-blue-600">
                            <option selected disabled class="bg-slate-100">Short by UMKM</option>
                            <option value="gajah-oling" class="bg-slate-100 text-slate-900">Kerupuk Rahayu</option>
                            <option value="kangkung-stingkes" class="bg-slate-100 text-slate-900">Batik Pandawa</option>
                            <option value="batik-larasati" class="bg-slate-100 text-slate-900">Batik Srikandi</option>
                            <option value="option-4" class="bg-slate-100 text-slate-900">Batik Larasati</option>
                        </select>
                        <svg class="absolute top-1/2 transform -translate-y-1/2 right-4 z-50 text-slate-100"
                            width="12" height="12" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div class="relative w-full max-w-xs md:max-w-sm">
                        <svg class="absolute top-1/2 transform -translate-y-1/2 left-4 z-50 text-slate-100"
                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.5555 3.33203H3.44463C2.46273 3.33203 1.66675 4.12802 1.66675 5.10991C1.66675 5.56785 1.84345 6.00813 2.16004 6.33901L6.83697 11.2271C6.97021 11.3664 7.03684 11.436 7.0974 11.5068C7.57207 12.062 7.85127 12.7576 7.89207 13.4869C7.89728 13.5799 7.89728 13.6763 7.89728 13.869V16.251C7.89728 17.6854 9.30176 18.6988 10.663 18.2466C11.5227 17.961 12.1029 17.157 12.1029 16.251V14.2772C12.1029 13.6825 12.1029 13.3852 12.1523 13.1015C12.2323 12.6415 12.4081 12.2035 12.6683 11.8158C12.8287 11.5767 13.0342 11.3619 13.4454 10.9322L17.8401 6.33901C18.1567 6.00813 18.3334 5.56785 18.3334 5.10991C18.3334 4.12802 17.5374 3.33203 16.5555 3.33203Z"
                                stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                        <select id="Offer2"
                            class="h-12 border border-gray-300 text-slate-100 pl-11 text-base font-normal rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-blue-500 transition-all duration-500 hover:bg-blue-600 focus:bg-blue-600">
                            <option selected disabled class="bg-slate-100">Short By Produk</option>
                            <option value="gajah-oling" class="bg-slate-100 text-slate-900">Gajah Oling</option>
                            <option value="kangkung-stingkes" class="bg-slate-100 text-slate-900">Kangkung Stingkes
                            </option>
                            <option value="batik-larasati" class="bg-slate-100 text-slate-900">Batik Alas Kobong
                            </option>
                            <option value="option-4" class="bg-slate-100 text-slate-900">Batik Kangkung Setingkes
                            </option>
                        </select>
                        <svg class="absolute top-1/2 transform -translate-y-1/2 right-4 z-50 text-slate-100"
                            width="12" height="12" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 py-4">
                <div
                    class="w-full transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-48 w-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium capitalize text-gray-900">Batik Gajah Oling</h2>
                        <p class="mb-2 text-base text-gray-700">Lorem ipsum dolor sit amet.</p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg font-semibold text-gray-900">Rp.20.000</p>
                            <p class="text-base font-medium text-gray-500 line-through"></p>
                            <p class="ml-auto text-base font-medium text-green-500">Tersedia</p>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('order-detail') }}">
                            <button type="button"
                                class="m-4 bg-blue-500 hover:bg-blue-700 text-gray-100 text-sm md:text-md lg:text-lg font-medium py-2 px-8 transition-all rounded-lg">Beli
                            </button>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-48 w-full object-cover object-center"
                        src="https://d220hvstrn183r.cloudfront.net/attachment/18577248412538719799.large"
                        alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium capitalize text-gray-900">Batik Gajah Oling
                        </h2>
                        <p class="mb-2 text-base text-gray-700">Lorem ipsum dolor sit amet.</p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg font-semibold text-gray-900">Rp.20.000</p>
                            <p class="text-base font-medium text-gray-500 line-through"></p>
                            <p class="ml-auto text-base font-medium text-green-500">Tersedia</p>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('order-detail') }}">
                            <button type="button"
                                class="m-4  bg-blue-500 hover:bg-blue-700 text-gray-100 text-sm md:text-md lg:text-lg font-medium py-2 px-8 transition-all rounded-lg">Beli
                            </button>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-48 w-full object-cover object-center"
                        src="https://d220hvstrn183r.cloudfront.net/attachment/18577248412538719799.large"
                        alt="Product Image" />
                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-medium capitalize text-gray-900">Batik Gajah Oling
                        </h2>
                        <p class="mb-2 text-base text-gray-700">Lorem ipsum dolor sit amet.</p>
                        <div class="flex items-center">
                            <p class="mr-2 text-lg font-semibold text-gray-900">Rp.20.000</p>
                            <p class="text-base font-medium text-gray-500 line-through"></p>
                            <p class="ml-auto text-base font-medium text-green-500">Tersedia</p>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('order-detail') }}">
                            <button type="button"
                                class="m-4  bg-blue-500 hover:bg-blue-700 text-gray-100 text-sm md:text-md lg:text-lg font-medium py-2 px-8 transition-all rounded-lg">Beli
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>




</x-layout>
