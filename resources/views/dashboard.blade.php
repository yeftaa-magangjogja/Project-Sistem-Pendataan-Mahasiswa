{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

{{-- 
@extends('components.kaprodi')

@section('content')
  <div class="p-6">
      <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">Selamat Datang, <span id="adminName"></span>!</h1>
      <p class="text-gray-600 dark:text-gray-300">Ini adalah halaman dashboard Kaprodi. Silakan pilih menu di samping untuk mengelola data.</p>
  </div>

  <script>
      const adminName = "Maria Ine"; // Replace with actual admin name from login process
      document.getElementById('adminName').textContent = adminName;
  </script>
@endsection --}}



@extends('components.kaprodi')

@section('content')
    <div class="p-6">
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6 rounded-lg shadow-lg mb-6 text-white">
            <div class="flex items-center space-x-4">
                <img src="../../../img/icon.jpg" class="w-12 h-12 rounded-full object-cover" alt="">
                <div>
                    <h1 class="text-3xl font-bold">Selamat Datang, {{ Auth::user()->username }}</h1>
                </div>
            </div>
        </div>

        {{-- @if (Auth::user()->role === 'kaprodi')
            <p class="text-gray-600 dark:text-gray-300">Ini adalah halaman dashboard Kaprodi. Silakan pilih menu di samping
                untuk mengelola data.</p>
            <div class="mt 3">
                <div class="ml-auto flex items-center mt-4">
                    <form action="{{ route('kaprodi.update', Auth::user()->kaprodi->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ Auth::user()->kaprodi->id }}">
                        <button id="editKaprodiButton" data-modal-target="editKaprodiModal{{ Auth::user()->kaprodi->id }}"
                            data-modal-toggle="editKaprodiModal{{ Auth::user()->kaprodi->id }}" 
                            class="flex items-center text-blue-500 hover:text-white border border-blue-500 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-blue-300 dark:text-blue-300 dark:hover:text-white dark:hover:bg-blue-300 dark:focus:ring-blue-500"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Edit Data Kaprodi
                        </button>

                    </form>
                    <!-- Update Product Modal -->
                    @include('components.partials.editkaprodi-modal')
                </div>
            </div> --}}

        @if (Auth::user()->role === 'kaprodi')
            <div class="mt-3">
                <div class="mt-3 w-full max-w-7xl mx-auto">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Data Kaprodi</h3>
                    <div class="overflow-x-auto">
                        <table
                            class="w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-md rounded-lg">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-300">Data</th>
                                    <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-300">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 text-gray-600 dark:text-gray-300">Nama</td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ Auth::user()->kaprodi->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 text-gray-600 dark:text-gray-300">NIP</td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ Auth::user()->kaprodi->nip }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 text-gray-600 dark:text-gray-300">Kode Dosen</td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">
                                        {{ Auth::user()->kaprodi->kode_dosen }}</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 text-gray-600 dark:text-gray-300">Email</td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ Auth::user()->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- <div class="mt-3 w-full max-w-7xl mx-auto">
                    <div class="overflow-x-auto">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Data Kaprodi</h3>
                        <table
                            class="w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-md rounded-lg">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-300">Nama</th>
                                    <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-300">NIP</th>
                                    <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-300">Kode Dosen</th>
                                    <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-300">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ Auth::user()->kaprodi->name }}
                                    </td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ Auth::user()->kaprodi->nip }}
                                    </td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">
                                        {{ Auth::user()->kaprodi->kode_dosen }}</td>
                                    <td class="py-2 px-4 text-gray-800 dark:text-gray-200">{{ Auth::user()->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}


                <div class="mt-4 flex items-center">
                    <form action="{{ route('kaprodi.update', Auth::user()->kaprodi->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ Auth::user()->kaprodi->id }}">
                        <button id="editKaprodiButton" data-modal-target="editKaprodiModal{{ Auth::user()->kaprodi->id }}"
                            data-modal-toggle="editKaprodiModal{{ Auth::user()->kaprodi->id }}"
                            class="flex items-center text-blue-500 hover:text-white border border-blue-500 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-blue-300 dark:text-blue-300 dark:hover:text-white dark:hover:bg-blue-300 dark:focus:ring-blue-500"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Edit Data Kaprodi
                        </button>
                    </form>
                    <!-- Update Product Modal -->
                    @include('components.partials.editkaprodi-modal')
                </div>
            </div>
        @elseif (Auth::user()->role === 'mahasiswa')
            <p class="text-gray-600 dark:text-gray-300">Ini adalah halaman dashboard Mahasiswa. Silakan pilih menu di
                samping
                untuk mengakses informasi perkuliahan Anda.</p>
        @elseif (Auth::user()->role === 'dosen')
            <p class="text-gray-600 dark:text-gray-300">Ini adalah halaman dashboard Dosen. Silakan pilih menu di samping
                untuk mengelola kelas dan mahasiswa.</p>
        @endif
    </div>
@endsection
