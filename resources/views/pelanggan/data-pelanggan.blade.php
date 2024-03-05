@extends('index')
@section('content')
    <div
        class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
        <div class="mt-16 px-5">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12">
                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium group-[.mode--light]:text-white">
                                Pelanggan
                            </div>
                            <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                                <a><button data-tw-merge="" data-tw-toggle="modal" data-tw-target="#header-footer-modal-add"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
                                            data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                        Add New Pelanggan</button></a>
                            </div>
                        </div>
                        <!-- BEGIN: Modal Content -->
                        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="header-footer-modal-add"
                            class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                            <div data-tw-merge
                                class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                <div
                                    class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="mr-auto text-base font-medium">
                                        Pelanggan
                                    </h2>
                                    <div data-tw-merge data-tw-placement="bottom-end" class="dropdown relative sm:hidden">
                                        <button data-tw-toggle="dropdown" aria-expanded="false"
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
                                <form action="/create/pelanggan" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="modal-form-1"
                                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Nama
                                            </label>
                                            <input placeholder="Masukan Nama" value="" name="nama_pelanggan" data-tw-merge id="modal-form-1"
                                                type="text"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        </div>
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="modal-form-6"
                                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Username
                                            </label>
                                            {{-- <select name="user_id" data-tw-merge id="modal-form-6"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                                @foreach ($user as $item)
                                                    <option value="{{ $item->id }}">{{ $item->username }}
                                                    </option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="modal-form-1"
                                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                No Telpon
                                            </label>
                                            <input  placeholder="Masukan No Telpon" name="no_telpon" data-tw-merge id="modal-form-1"
                                                type="text"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        </div>
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="modal-form-1"
                                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Alamat
                                            </label>
                                            <input placeholder="Masukan Alamat" value="" name="alamat" data-tw-merge id="modal-form-1"
                                                type="text"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        </div>
                                    </div>
                                    <div class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400">
                                        <button data-tw-merge data-tw-dismiss="modal" type="button"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20">Cancel</button>
                                        <button data-tw-merge type="submit"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                        <div class="mt-3.5 flex flex-col gap-8">
                            <div class="box box--stacked flex flex-col">
                                <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                    <div>
                                        <div class="relative">
                                            <i data-tw-merge="" data-lucide="search"
                                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                            <input data-tw-merge="" type="text" placeholder="Search users..."
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative">
                                            <button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><i
                                                    data-tw-merge="" data-lucide="download"
                                                    class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                Export
                                                <i data-tw-merge="" data-lucide="chevron-down"
                                                    class="ml-2 h-4 w-4 stroke-[1.3]"></i></button>
                                            <div data-transition="" data-selector=".show"
                                                data-enter="transition-all ease-linear duration-150"
                                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                data-leave="transition-all ease-linear duration-150"
                                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge=""
                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a
                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-bar-chart"
                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        PDF</a>
                                                    <a
                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                            data-tw-merge="" data-lucide="file-bar-chart"
                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        CSV</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto xl:overflow-visible">
                                    <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60">
                                        <thead data-tw-merge="" class="">
                                            <tr data-tw-merge="" class="">
                                                <td data-tw-merge=""
                                                    class="px-5 border-b dark:border-darkmode-300 w-5 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    No
                                                </td>
                                                <td data-tw-merge=""
                                                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    Nama
                                                </td>
                                                <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 w-52 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                No Telpon
                                            </td>
                                                <td data-tw-merge=""
                                                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    Alamat
                                                </td>

                                                {{-- <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                    Status
                                                </td> --}}
                                                <td data-tw-merge=""
                                                    class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                    Action
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pelanggan as $key => $item)
                                                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                    <td data-tw-merge=""
                                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td data-tw-merge=""
                                                        class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                                        <div class="flex items-center">
                                                            {{-- <div class="image-fit zoom-in h-9 w-9">
                                                            <img data-placement="top" title="Leonardo DiCaprio" src="dist/images/users/user3-50x50.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                        </div> --}}
                                                            <div class="ml-3.1">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    {{ $item->nama_pelanggan }}
                                                                </a>
                                                                <div
                                                                    class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                                    {{-- {{ $item->email }} --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-tw-merge=""
                                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        <a class="whitespace-nowrap font-medium" href="#">
                                                            {{ $item->no_telpon }}
                                                        </a>
                                                        {{-- <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        Support Team
                                                        </div> --}}
                                                    </td>
                                                    <td data-tw-merge=""
                                                        class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                        {{ $item->alamat }}
                                                    </td>
                                                    {{-- <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        May 5, 2018
                                                    </div>
                                                </td> --}}
                                                    <td data-tw-merge=""
                                                        class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                        <div class="flex items-center justify-center">
                                                            <div data-tw-merge="" data-tw-placement="bottom-end"
                                                                class="dropdown relative h-5"><button
                                                                    data-tw-toggle="dropdown" aria-expanded="false"
                                                                    class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                        data-tw-merge="" data-lucide="more-vertical"
                                                                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                </button>
                                                                <div data-transition="" data-selector=".show"
                                                                    data-enter="transition-all ease-linear duration-150"
                                                                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                    data-leave="transition-all ease-linear duration-150"
                                                                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                    class="dropdown-menu absolute z-[9999] hidden">
                                                                    <div data-tw-merge=""
                                                                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                        <a data-tw-merge data-tw-toggle="modal"
                                                                            data-tw-target="#header-footer-modal-preview{{ $item->id }}"
                                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="check-square"
                                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                            Edit</a>
                                                                        <a href="/delete/pelanggan/{{ $item->id }}"
                                                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                                                data-tw-merge="" data-lucide="trash2"
                                                                                class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                            Delete</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- BEGIN: Modal Content -->
                                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                                    id="header-footer-modal-preview{{ $item->id }}"
                                                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                                    <div data-tw-merge
                                                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                                        <div
                                                            class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                                            <h2 class="mr-auto text-base font-medium">
                                                                EDIT PELANGGAN
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
                                                        <form action="/update/pelanggan/{{ $item->id }}"
                                                            method="post">
                                                            @csrf
                                                            <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                                                <div class="col-span-12 sm:col-span-12">
                                                                    <label data-tw-merge for="modal-form-1"
                                                                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                        Nama
                                                                    </label>
                                                                    <input name="nama_pelanggan" data-tw-merge
                                                                        id="modal-form-1" type="text"
                                                                        value="{{ $item->nama_pelanggan }}"
                                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                                                </div>
                                                                <div class="col-span-12 sm:col-span-12">
                                                                    <label data-tw-merge for="modal-form-2"
                                                                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                        No Telpon
                                                                    </label>
                                                                    <input name="no_telpon" data-tw-merge
                                                                        id="modal-form-2" type="number"
                                                                        value="{{ $item->no_telpon }}"
                                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                                                </div>
                                                                <div class="col-span-12 sm:col-span-12">
                                                                    <label data-tw-merge for="modal-form-3"
                                                                        class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                        Alamat
                                                                    </label>
                                                                    <input name="alamat" data-tw-merge id="modal-form-3"
                                                                        type="text" value="{{ $item->alamat }}"
                                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                                    <nav class="mr-auto w-full flex-1 sm:w-auto">
                                        <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-left" class="stroke-[1] h-4 w-4"></i></a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-[1] h-4 w-4"></i></a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-[1] h-4 w-4"></i></a>
                                            </li>
                                            <li class="flex-1 sm:flex-initial">
                                                <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-right" class="stroke-[1] h-4 w-4"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
