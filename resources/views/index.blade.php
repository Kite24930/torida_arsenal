<x-template title="KT Arsenals" css="index.css">
    <x-header></x-header>
    <main class="min-h-[calc(100dvh-60px)] flex justify-start items-center">
        <div class="w-1/2 flex flex-col items-center justify-center gap-6">
            <a href="{{ route('qrcode') }}" class="en-text text-3xl underline">〜 QR TEST 〜</a>
            <a href="{{ route('home').'/inertia' }}" class="en-text text-3xl underline">〜 inertia TEST 〜</a>
        </div>
    </main>
    <x-footer></x-footer>
</x-template>
