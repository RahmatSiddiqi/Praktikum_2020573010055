<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="text-align: center">
                    WELCOME TO IMGSTOQ : TEMPAT BERBAGI CERITA DENGAN SEJUTA CARA
                </div>
                <div class="p-6 bg-white border-b" style="display: flex; gap: .35rem">
                    <div
                        style="position: relative; width: 33%; border-radius:5px; display: flex;
                    justify-content: end; align-items: end">
                        <a href="/gambar/background.jpg" download
                            style="position: absolute; margin-bottom:10px; margin-right:8px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg></a><img src="{{ asset('gambar/background.jpg') }}" alt="">
                    </div>
                    <div
                        style="position: relative; width: 33%; border-radius:5px; display: flex;
                justify-content: end; align-items: end">
                        <a href="/gambar/hutan.jpg" download
                            style="position: absolute; margin-bottom:10px; margin-right:8px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg></a><img src="{{ asset('gambar/hutan.jpg') }}" alt="">
                    </div>
                    <div
                        style="position: relative; width: 33%; border-radius:5px; display: flex;
                justify-content: end; align-items: end">
                        <a href="/gambar/kotamalam.jpg" download
                            style="position: absolute; margin-bottom:10px; margin-right:8px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg></a><img src="{{ asset('gambar/kotamalam.jpg') }}" alt="">
                    </div>
                </div>
                <div class="p-6 bg-white border-b" style="display: flex; gap: .35rem">
                    <div
                        style="position: relative; width: 33%; border-radius:5px; display: flex;
                justify-content: end; align-items: end">
                        <a href="/gambar/laut.jpg" download
                            style="position: absolute; margin-bottom:10px; margin-right:8px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg></a><img src="{{ asset('gambar/laut.jpg') }}" alt="">
                    </div>
                    <div
                        style="position: relative; width: 33%; border-radius:5px; display: flex;
            justify-content: end; align-items: end">
                        <a href="/gambar/nature.jpg" download
                            style="position: absolute; margin-bottom:10px; margin-right:8px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg></a><img src="{{ asset('gambar/nature.jpg') }}" alt="">
                    </div>
                    <div
                        style="position: relative; width: 33%; border-radius:5px; display: flex;
            justify-content: end; align-items: end">
                        <a href="/gambar/town.jpg" download
                            style="position: absolute; margin-bottom:10px; margin-right:8px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg></a><img src="{{ asset('gambar/town.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
