@extends('index')
@section('content')
    <div
        class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
        <div class="mt-16 px-5">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="flex flex-col mt-4 gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium group-[.mode--light]:text-white">
                                Add Product
                            </div>
                        </div>

                        <form action="/create/produk" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-12">
                                    <div class="flex flex-col p-5 box box--stacked">
                                        <div
                                            class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                                            <div
                                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                                <i data-tw-merge="" data-lucide="chevron-down"
                                                    class="w-5 h-5 mr-2 stroke-[1.3]"></i>
                                                Product Information
                                            </div>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="mt-5">
                                                @if ($errors->any())
                                                @foreach ($errors->all() as $item)
                                                <li class="alert alert-danger">{{ $item }}</li>
                                                @endforeach
                                                @endif
                                                <div
                                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                                    <div
                                                        class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                        <div class="text-left">
                                                            <div class="flex items-center">
                                                                <div class="font-medium">Product Name</div>
                                                                <div
                                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                                    Required
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                                Enter the unique name of your product. Make it
                                                                descriptive and easy to remember for customers.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                                        <input readonly value="{{ $produk->nama_produk }}" name="nama_produk" data-tw-merge="" type="text"
                                                            placeholder="Product name"
                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                                    <div
                                                        class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                        <div class="text-left">
                                                            <div class="flex items-center">
                                                                <div class="font-medium">Variant Information</div>
                                                                <div
                                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                                    Required
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                                Use this section to specify the various options,
                                                                configurations, or variants available for your
                                                                product.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                                        <div class="grid-cols-4 gap-2 sm:grid">
                                                            <div data-tw-merge="" class="flex group input-group">
                                                                <div data-tw-merge=""
                                                                    class="py-2 px-3 bg-slate-100 border shadow-sm border-slate-200 text-slate-600 dark:bg-darkmode-900/20 dark:border-darkmode-900/20 dark:text-slate-400 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r">
                                                                    $
                                                                </div>
                                                                <input readonly value="{{ $produk->harga }}" name="harga" data-tw-merge="" type="number"
                                                                    placeholder="Price"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                                            </div>
                                                            <div class="flex-1 w-full mt-3 xl:mt-0">
                                                                <select name="diskon_produk_id" data-tw-merge=""
                                                                    id="category"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                                                    {{-- <optgroup> --}}
                                                                        @foreach ($diskon as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->nama_diskon }}</option>
                                                                        @endforeach
                                                                    {{-- </optgroup> --}}
                                                                </select>
                                                            </div>
                                                            <div data-tw-merge="" class="flex group input-group">
                                                                <input readonly value="{{ $produk->stok }}" name="stok" data-tw-merge="" type="number"
                                                                    placeholder="Stok"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                                            </div>
                                                            <div class="relative mx-auto">
                                                                <div
                                                                    class="absolute flex h-full w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-500 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                                                    <i data-tw-merge data-lucide="calendar"
                                                                        class="stroke-[1] w-5 h-5 h-4 w-4 h-4 w-4"></i>
                                                                </div>
                                                                <input value="{{ $produk->tanggal_kadaluarsa }}" name="tanggal_kadaluarsa" data-tw-merge
                                                                    type="text" data-single-mode="true"
                                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker pl-12 pl-12 datepicker pl-12 pl-12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                                    <div
                                                        class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                        <div class="text-left">
                                                            <div class="flex items-center">
                                                                <div class="font-medium">Category</div>
                                                                <div
                                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                                    Required
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                                Select the primary category that best represents your
                                                                product. This helps customers find your product more
                                                                easily.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                                        <select readonly name="kategori_produk_id" data-tw-merge="" id="category"
                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                                            @foreach ($kategori_produk as $item)
                                                                <option readonly value="{{ $item->id }}">
                                                                    {{ $item->nama_kategori }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <div
                                                        class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                                        <div
                                                            class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                            <div class="text-left">
                                                                <div class="flex items-center">
                                                                    <div class="font-medium">Product Photos</div>
                                                                    <div
                                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                                        Required
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                                    High-quality images can significantly impact your
                                                                    product's appeal. Upload clear, well-lit photos that
                                                                    showcase your item from different angles and
                                                                    perspectives.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 w-full mt-3 xl:mt-0">
                                                            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                                                                <div class="flex flex-col col-span-12 gap-x-6 gap-y-10 md:col-span-12 xl:col-span-12">
                                                                    <div class="p-5 box box--stacked">
                                                                        @if (file_exists('storage/' . $produk->gambar_produk))
                                            <img class="rounded-md" src="/storage/{{ $produk->gambar_produk }}" alt="Tailwise - Admin Dashboard Template">
                                                                        <div class="h-48 overflow-hidden rounded-lg image-fit before:absolute before:left-0 before:top-0 before:z-10 before:block before:h-full before:w-full before:bg-gradient-to-t before:from-theme-1/60 before:to-theme-2/5">
                                                                        @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-end gap-3 mt-1 md:flex-row">
                                        <button data-tw-merge=""
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full rounded-[0.5rem] border-slate-300/80 bg-white/80 py-2.5 md:w-56"><i
                                                data-tw-merge="" data-lucide="pen-line"
                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Cancel</button>
                                        <button type="submit" data-tw-merge=""
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-full rounded-[0.5rem] py-2.5 md:w-56"><i
                                                data-tw-merge="" data-lucide="pen-line"
                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
