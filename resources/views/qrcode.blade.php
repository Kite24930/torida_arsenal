<x-template title="QRコード" css="qrcode.css">
    <x-header></x-header>
    <main class="min-h-[calc(100dvh-60px)] flex justify-start items-center">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <div class="w-full max-w-md p-6 gap-10">
                <h2 class="en-text text-2xl">QR Code Reader</h2>
                <button id="qr-reader" type="button" class="en-text text-xl px-4 py-2 bg-white border border-gray-600 rounded hover:bg-gray-500 hover:text-white hover:border-white">Reading Start</button>
                <div class="w-full">
                    <div id="msg">Unable to access video stream.</div>
                    <canvas id="canvas" class="w-full h-full bg-gray-500"></canvas>
                </div>
            </div>
            <div class="w-full max-w-md p-6">
                <h2 class="en-text text-2xl">QR Code Creator</h2>
                <div>English only, no Japanese allowed</div>
                <div class="w-full">
                    <div id="qr-code"></div>
                    <input id="qr-text" type="text">
                    <button id="qr-creator" type="button" class="en-text text-xl px-4 py-2 bg-white border border-gray-600 rounded hover:bg-gray-500 hover:text-white hover:border-white">Create</button>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
    @vite(['resources/js/qrcode.js'])
</x-template>
