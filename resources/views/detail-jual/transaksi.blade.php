@extends('index')
@section('content')
    <div
        class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
        <div class="mt-16 px-5">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="flex flex-col gap-y-3 lg:h-10 lg:flex-row lg:items-center">
                            <div class="flex items-center text-lg font-medium group-[.mode--light]:text-white">
                                Orders
                                <i data-tw-merge="" data-lucide="arrow-right"
                                    class="mx-1 h-3.5 w-3.5 stroke-[1.3] sm:mx-2 sm:h-5 sm:w-5"></i>
                                <div class="text-sm sm:text-lg">
                                    #{{ $penjualan->kode_penjualan }}
                                </div>
                            </div>
                            <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row lg:ml-auto">
                                <button data-tw-merge=""
                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
                                        data-tw-merge="" data-lucide="arrow-left" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                                    Prev Order</button>
                                <button data-tw-merge=""
                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
                                        data-tw-merge="" data-lucide="arrow-right" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                                    Next Order</button>
                                <button data-tw-merge=""
                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
                                        data-tw-merge="" data-lucide="printer" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                                    Print Order</button>
                            </div>
                        </div>
                        <div class="mt-3.5 grid grid-cols-10 gap-5">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box box--stacked flex flex-col p-5">
                                    <div class="flex flex-col gap-5">
                                        <div
                                            class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                            <div
                                                class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                                <div class="-mt-px">Transaction Details</div>
                                            </div>
                                            <div class="mt-2.5 flex flex-col gap-5 p-5">
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="clipboard"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Tanggal Jual:</div>
                                                        {{ $penjualan->tanggal_jual }}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="truck"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Tanggal Pengiriman:</div>
                                                        {{ $pengiriman->tanggal_pengiriman }}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="clock"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">
                                                            Transaction Status:
                                                        </div>
                                                        <div
                                                            class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success sm:mr-0">
                                                            <span class="-mt-px">
                                                                {{ $pengiriman->status_pengiriman }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="clipboard"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Payment Method:</div>
                                                        {{ $penjualan->metode_pembayaran }}
                                                    </div>
                                                </div>
                                                <div class="mt-1.5">
                                                    <button data-tw-toggle="modal"
                                                        {{-- data-tw-target="#header-footer-modal-edit{{ $pengiriman->id }}" --}}
                                                        data-tw-merge=""
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed w-full border-primary/20 text-primary/80 hover:bg-slate-50"><i
                                                            data-tw-merge="" data-lucide="pen-square"
                                                            class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                        Change Status</button>
                                                </div>
                                                <!-- BEGIN: Modal Content -->
                                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                                    {{-- id="header-footer-modal-edit{{ $pengiriman->id }}" --}}
                                                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                                    <div data-tw-merge
                                                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                                        <div
                                                            class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                Change Status
                                                            </h2>
                                                            <div data-tw-merge data-tw-placement="bottom-end"
                                                                class="dropdown relative sm:hidden"><button
                                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                                    class="cursor-pointer block h-5 w-5"><i data-tw-merge
                                                                        data-lucide="more-horizontal"
                                                                        class="stroke-[1] w-5 h-5 h-5 w-5 text-slate-500 h-5 w-5 text-slate-500"></i>
                                                                </button>
                                                                <div data-transition data-selector=".show"
                                                                    data-enter="transition-all ease-linear duration-150"
                                                                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                    data-leave="transition-all ease-linear duration-150"
                                                                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                    class="dropdown-menu absolute z-[9999] hidden">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <form action="/pengiriman/change/{{ $pengiriman->id }}" --}}
                                                            method="post">
                                                            @csrf
                                                            <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                                                <div class="col-span-12 sm:col-span-12">
                                                                    <label data-tw-merge for="modal-form-6"
                                                                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                        Status Pengiriman
                                                                    </label>
                                                                    <select name="status_pengiriman" data-tw-merge
                                                                        id="modal-form-6"
                                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                                                        {{-- @if ($pengiriman->status_pengiriman == 'proses')
                                                                            <option value="proses" selected>proses</option>
                                                                            <option value="dikirim">dikirim</option>
                                                                            <option value="selesai">selesai</option>
                                                                            <option value="refund">refund</option>
                                                                        @elseif($pengiriman->status_pengiriman == 'dikirim')
                                                                            <option value="proses">proses</option>
                                                                            <option value="dikirim" selected>dikirim
                                                                            </option>
                                                                            <option value="selesai">selesai</option>
                                                                            <option value="refund">refund</option>
                                                                        @elseif ($pengiriman->status_pengiriman == 'selesai')
                                                                            <option value="proses">proses</option>
                                                                            <option value="dikirim">dikirim</option>
                                                                            <option value="selesai" selected>selesai
                                                                            </option>
                                                                            <option value="refund">refund</option>
                                                                        @elseif ($pengiriman->status_pengiriman == 'refund')
                                                                            <option value="proses">proses</option>
                                                                            <option value="dikirim">dikirim</option>
                                                                            <option value="selesai">selesai</option>
                                                                            <option value="refund" selected>refund</option>
                                                                        @endif --}}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400">
                                                                <button data-tw-merge data-tw-dismiss="modal"
                                                                    type="button"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                                                                <button data-tw-merge type="submit"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- END: Modal Content -->
                                            </div>
                                        </div>
                                        <div
                                            class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                            <div
                                                class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                                <div class="-mt-px">Shipping Details</div>
                                            </div>
                                            <div class="mt-2.5 flex flex-col gap-5 p-5">
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="calendar"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">
                                                            {{-- Total Price (11 items): --}}
                                                            Biaya Pengiriman :
                                                        </div>
                                                        {{ number_format($pengiriman->biaya_pengiriman) }}
                                                    </div>
                                                </div>
                                                {{-- <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clock" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">
                                                        Total Shipping Cost:
                                                    </div>
                                                    $77
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="map" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">
                                                        Shipping Insurance:
                                                    </div>
                                                    $252
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="banknote" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Grand Total:</div>$
                                                    1.392
                                                </div>
                                            </div> --}}
                                            </div>
                                        </div>
                                        <div
                                            class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                            <div
                                                class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                                <div class="-mt-px">Buyer Details</div>
                                            </div>
                                            <div class="mt-2.5 flex flex-col gap-5 p-5">
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="clipboard"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Name:</div>
                                                        <a class="underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href="#">
                                                            {{ $penjualan->pelanggan->nama_pelanggan }}
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="calendar"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Phone Number:</div>
                                                        {{ $penjualan->pelanggan->no_telpon }}
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="clock"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Address:</div>
                                                        <a class="flex items-center underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href="#">
                                                            <i data-tw-merge="" data-lucide="map-pin"
                                                                class="stroke-[1] mr-1.5 h-3.5 w-3.5"></i>
                                                            {{ $penjualan->pelanggan->alamat }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                            <div
                                                class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                                <div class="-mt-px">Shipping Information</div>
                                            </div>
                                            <div class="mt-2.5 flex flex-col gap-5 p-5">
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="clipboard"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Courier:</div>
                                                        Left4code Express
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <i data-tw-merge="" data-lucide="calendar"
                                                        class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                    <div
                                                        class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                        <div class="w-54 sm:mr-auto">Tracking :</div>
                                                        {{ $pengiriman->kode_pengiriman }}
                                                    </div>
                                                </div>
                                                {{-- <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clock" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Address:</div>
                                                    <a class="flex items-center underline decoration-primary/30 decoration-dotted underline-offset-[3px]" href="#">
                                                        <i data-tw-merge="" data-lucide="map-pin" class="stroke-[1] mr-1.5 h-3.5 w-3.5"></i>
                                                        View Address
                                                    </a>
                                                </div>
                                            </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 flex flex-col gap-7 xl:col-span-7">
                                <div class="box box--stacked flex flex-col p-5">
                                    <div
                                        class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                        <div
                                            class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                            <div class="-mt-px">Product Details</div>
                                        </div>
                                        <div class="mt-2.5 flex flex-col gap-5 p-5">
                                            <div class="overflow-auto xl:overflow-visible">
                                                <table data-tw-merge=""
                                                    class="w-full text-left border-b border-dashed border-slate-200/80">
                                                    <thead data-tw-merge="" class="">
                                                        <tr data-tw-merge="" class="">
                                                            <td data-tw-merge=""
                                                                class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                                <div
                                                                    class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 font-medium text-slate-500">
                                                                    Item
                                                                </div>
                                                            </td>
                                                            <td data-tw-merge=""
                                                                class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                                <div
                                                                    class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                                    Amount
                                                                </div>
                                                            </td>
                                                            <td data-tw-merge=""
                                                                class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                                <div
                                                                    class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                                    Discount
                                                                </div>
                                                            </td>
                                                            <td data-tw-merge=""
                                                                class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                                <div
                                                                    class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                                    Price
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-tw-merge=""
                                                            class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5">
                                                            <td data-tw-merge=""
                                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-3.5 dark:bg-darkmode-600">
                                                                <div class="flex items-center">
                                                                    <div class="image-fit zoom-in h-11 w-11">
                                                                        <img data-placement="top" title="Tue Mar 2021"
                                                                            {{-- src="/storage/{{ $detail_jual-produk->gambar_produk }}" --}}
                                                                            alt="Tailwise - Admin Dashboard Template"
                                                                            class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                                    </div>
                                                                    <div class="ml-5">
                                                                        <a class="whitespace-nowrap font-medium"
                                                                            href="#">
                                                                            {{ $produk->nama_produk }}
                                                                        </a>
                                                                        <div
                                                                            class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                            Category
                                                                            :
                                                                            {{-- {{ $detail_jual->produk->kategori_produk->nama_kategori }} --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-tw-merge=""
                                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                                <div class="whitespace-nowrap">
                                                                    {{-- {{ $detail_jual->jumlah_produk }} --}}
                                                                </div>
                                                            </td>
                                                            <td data-tw-merge=""
                                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                                <div class="whitespace-nowrap">
                                                                    {{-- @if ($detail_jual->produk->diskon_produk->jenis_diskon == 'persentase')
                                                                        {{ $detail_jual->produk->diskon_produk->nilai_diskon }}%
                                                                    @elseif($detail_jual->produk->diskon_produk->jenis_diskon == 'nominal')
                                                                        -{{ $detail_jual->produk->diskon_produk->nilai_diskon }}
                                                                    @endif --}}
                                                                </div>
                                                            </td>
                                                            <td data-tw-merge=""
                                                                class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                                <div class="whitespace-nowrap font-medium">
                                                                    {{-- {{ number_format($detail_jual->harga_jual) }} --}}
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- Mengitung --}}
                                            {{-- @php
                                                $subtotal = $detail_jual->harga_jual * $detail_jual->jumlah_produk;
                                                $diskon = ($detail_jual->produk->diskon_produk->nilai_diskon / 100) * $detail_jual->harga_jual;
                                                $biaya_pengiriman = $pengiriman->biaya_pengiriman;
                                                $total = $subtotal + $biaya_pengiriman - $diskon;
                                            @endphp --}}
                                            {{-- Mengitung --}}

                                            {{-- <div class="mb-5 ml-auto mt-3 flex flex-col gap-3.5 pr-5 text-right">
                                                <div class="flex items-center justify-end">
                                                    <div class="text-slate-500">Subtotal :</div>
                                                    <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                        {{ number_format($subtotal) }}
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-end">
                                                    <div class="text-slate-500">Biaya Pengiriman :</div>
                                                    <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                        + {{ number_format($biaya_pengiriman) }}
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-end">
                                                    <div class="text-slate-500">Discount :</div>
                                                    <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                        - {{ number_format($diskon) }}
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-end">
                                                    <div class="text-slate-500">Total :</div>
                                                    <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                        {{ number_format($total) }}
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="box box--stacked flex flex-col p-5">
                                <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Tracking Info</div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <div class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                            <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                    <a class="font-medium text-primary" href="#">
                                                        Transaction Completed.
                                                    </a>
                                                    <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                        Funds will be forwarded to the seller.
                                                    </div>
                                                    <div class="my-3.5 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-1/2">
                                                        <div class="grid grid-cols-1 overflow-hidden rounded-[0.6rem] md:grid-cols-3">
                                                            <div class="image-fit h-20 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                <img data-action="zoom" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="image-fit h-20 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                <img data-action="zoom" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="image-fit h-20 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100">
                                                                <img data-action="zoom" src="dist/images/products/product3-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-1.5 text-xs text-slate-500">
                                                        25 Mar 2046, 10:28 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                    <a class="font-medium text-primary" href="#">
                                                        The order has arrived.
                                                    </a>
                                                    <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                        Received by Calvin.
                                                    </div>
                                                    <div class="mt-1.5 text-xs text-slate-500">
                                                        23 Mar 2023, 08:28 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                    <a class="font-medium text-primary" href="#">
                                                        The order has been sent.
                                                    </a>
                                                    <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                        The order is being shipped by courier.
                                                    </div>
                                                    <div class="mt-1.5 text-xs text-slate-500">
                                                        23 Mar 2023, 12:21 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                <div class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                    <a class="font-medium text-primary" href="#">
                                                        Payment Verified.
                                                    </a>
                                                    <div class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                        Payment has been received.
                                                    </div>
                                                    <div class="mt-1.5 text-xs text-slate-500">
                                                        23 Mar 2023, 12:21 AM
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
