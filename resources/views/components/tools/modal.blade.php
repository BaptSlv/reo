<div class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md">
    <div class="flex flex-col w-full h-auto ">
        <div class="flex w-full h-auto justify-center items-center">
            {{ $header }}
        </div>
        <!-- Modal Content-->
        <div class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
            {{ $slot }}
        </div>
        <!-- End of Modal Content-->
    </div>
</div>