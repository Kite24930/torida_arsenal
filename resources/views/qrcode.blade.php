<x-template title="QRコード" css="qrcode.css">
    <x-header></x-header>
    <main class="min-h-[calc(100dvh-60px)] flex justify-start items-center">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <div class="w-full max-w-md p-6">
                <h2 class="en-text text-2xl">QR Code Reader</h2>
                <div id="wrapper" class="w-full">
                    <div id="msg">Unable to access video stream.</div>
                    <canvas id="canvas" class="w-full h-full bg-gray-500"></canvas>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
    @vite(['resources/js/qrcode.js'])
</x-template>
