@extends('index')
@section('content')
<div class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 lg:h-10 lg:flex-row lg:items-center">
                        <div class="flex items-center text-lg font-medium group-[.mode--light]:text-white">
                            Orders
                            <i data-tw-merge="" data-lucide="arrow-right" class="mx-1 h-3.5 w-3.5 stroke-[1.3] sm:mx-2 sm:h-5 sm:w-5"></i>
                            <div class="text-sm sm:text-lg">
                                #IVR/20240208/VIII/IV/727826231
                            </div>
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row lg:ml-auto">
                            <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i data-tw-merge="" data-lucide="arrow-left" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                                Prev Order</button>
                            <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i data-tw-merge="" data-lucide="arrow-right" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                                Next Order</button>
                            <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i data-tw-merge="" data-lucide="printer" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                                Print Order</button>
                        </div>
                    </div>
                    <div class="mt-3.5 grid grid-cols-10 gap-5">
                        <div class="col-span-12 xl:col-span-3">
                            <div class="box box--stacked flex flex-col p-5">
                                <div class="flex flex-col gap-5">
                                    <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                        <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                            <div class="-mt-px">Transaction Details</div>
                                        </div>
                                        <div class="mt-2.5 flex flex-col gap-5 p-5">
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clipboard" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Purchase Date:</div>
                                                    Wed Feb 2022
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clock" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">
                                                        Transaction Status:
                                                    </div>
                                                    <div class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success sm:mr-0">
                                                        <span class="-mt-px">
                                                            Returned
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clipboard" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Payment Method:</div>
                                                    Direct bank transfer
                                                </div>
                                            </div>
                                            <div class="mt-1.5">
                                                <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed w-full border-primary/20 text-primary/80 hover:bg-slate-50"><i data-tw-merge="" data-lucide="pen-square" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                    Change Status</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                        <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                            <div class="-mt-px">Shipping Details</div>
                                        </div>
                                        <div class="mt-2.5 flex flex-col gap-5 p-5">
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="calendar" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">
                                                        Total Price (11 items):
                                                    </div>
                                                    $1.392
                                                </div>
                                            </div>
                                            <div class="flex items-center">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                        <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                            <div class="-mt-px">Buyer Details</div>
                                        </div>
                                        <div class="mt-2.5 flex flex-col gap-5 p-5">
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clipboard" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Name:</div>
                                                    <a class="underline decoration-primary/30 decoration-dotted underline-offset-[3px]" href="#">
                                                        Angelina Jolie
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="calendar" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Phone Number:</div>
                                                    +1 (456) 789-0123
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clock" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Address:</div>
                                                    <a class="flex items-center underline decoration-primary/30 decoration-dotted underline-offset-[3px]" href="#">
                                                        <i data-tw-merge="" data-lucide="map-pin" class="stroke-[1] mr-1.5 h-3.5 w-3.5"></i>
                                                        View Address
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                        <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                            <div class="-mt-px">Shipping Information</div>
                                        </div>
                                        <div class="mt-2.5 flex flex-col gap-5 p-5">
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clipboard" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Courier:</div>
                                                    Left4code Express
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="calendar" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Tracking Number:</div>
                                                    1582837
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <i data-tw-merge="" data-lucide="clock" class="mr-2.5 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <div class="flex w-full flex-col flex-wrap gap-y-1 sm:flex-row sm:items-center">
                                                    <div class="w-54 sm:mr-auto">Address:</div>
                                                    <a class="flex items-center underline decoration-primary/30 decoration-dotted underline-offset-[3px]" href="#">
                                                        <i data-tw-merge="" data-lucide="map-pin" class="stroke-[1] mr-1.5 h-3.5 w-3.5"></i>
                                                        View Address
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 flex flex-col gap-7 xl:col-span-7">
                            <div class="box box--stacked flex flex-col p-5">
                                <div class="relative mt-3 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <div class="absolute left-0 -mt-2 ml-4 bg-white px-3 text-xs uppercase text-slate-500">
                                        <div class="-mt-px">Product Details</div>
                                    </div>
                                    <div class="mt-2.5 flex flex-col gap-5 p-5">
                                        <div class="overflow-auto xl:overflow-visible">
                                            <table data-tw-merge="" class="w-full text-left border-b border-dashed border-slate-200/80">
                                                <thead data-tw-merge="" class="">
                                                    <tr data-tw-merge="" class="">
                                                        <td data-tw-merge="" class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                            <div class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 font-medium text-slate-500">
                                                                Item
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                            <div class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                                Quantity
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                            <div class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                                Rate
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="dark:border-darkmode-300 border-b-0 px-0 py-0 [&_div]:first:rounded-l-md [&_div]:first:border-l [&_div]:last:rounded-r-md [&_div]:last:border-r">
                                                            <div class="border-y border-slate-200/80 bg-slate-50 px-5 py-4 text-right font-medium text-slate-500">
                                                                Amount
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-tw-merge="" class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-3.5 dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="image-fit zoom-in h-11 w-11">
                                                                    <img data-placement="top" title="Tue Mar 2021" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                                </div>
                                                                <div class="ml-5">
                                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                                        Professional DSLR Camera
                                                                    </a>
                                                                    <div class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                        Gender
                                                                        : XL
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                2
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                $1.599
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap font-medium">
                                                                $2.399
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-3.5 dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="image-fit zoom-in h-11 w-11">
                                                                    <img data-placement="top" title="Thu Jun 2022" src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                                </div>
                                                                <div class="ml-5">
                                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                                        Smart Home Security Camera
                                                                    </a>
                                                                    <div class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                        Size
                                                                        : XL
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                5
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                $259
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap font-medium">
                                                                $389
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-3.5 dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="image-fit zoom-in h-11 w-11">
                                                                    <img data-placement="top" title="Sun Jul 2021" src="dist/images/products/product10-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                                </div>
                                                                <div class="ml-5">
                                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                                        Smartphone Charging Dock
                                                                    </a>
                                                                    <div class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                        Gender
                                                                        : XL
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                3
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                $39
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap font-medium">
                                                                $59
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-3.5 dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="image-fit zoom-in h-11 w-11">
                                                                    <img data-placement="top" title="Fri Jul 2020" src="dist/images/products/product3-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                                </div>
                                                                <div class="ml-5">
                                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                                        Professional DSLR Camera
                                                                    </a>
                                                                    <div class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                        Gender
                                                                        : Red
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                4
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                $1.599
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap font-medium">
                                                                $2.399
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:first:pt-5 [&_td]:last:border-b-0 [&_td]:last:pb-5">
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-3.5 dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="image-fit zoom-in h-11 w-11">
                                                                    <img data-placement="top" title="Sat Aug 2020" src="dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                                </div>
                                                                <div class="ml-5">
                                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                                        8-Cup Coffee Maker
                                                                    </a>
                                                                    <div class="mt-1 flex flex-col gap-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                        Size
                                                                        : Red
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                5
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap">
                                                                $79
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                            <div class="whitespace-nowrap font-medium">
                                                                $119
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mb-5 ml-auto mt-3 flex flex-col gap-3.5 pr-5 text-right">
                                            <div class="flex items-center justify-end">
                                                <div class="text-slate-500">Subtotal:</div>
                                                <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                    $1.392
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end">
                                                <div class="text-slate-500">Total:</div>
                                                <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                    $1.392
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end">
                                                <div class="text-slate-500">Tax:</div>
                                                <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                    $57
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end">
                                                <div class="text-slate-500">Amount paid:</div>
                                                <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                    $1.392
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end">
                                                <div class="text-slate-500">Due balance:</div>
                                                <div class="w-20 font-medium text-slate-600 sm:w-48">
                                                    $47
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box box--stacked flex flex-col p-5">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
