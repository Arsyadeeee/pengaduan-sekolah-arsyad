<x-app-layout>

    <!-- HEADER -->
    <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-800">
            Data Aspirasi
        </h2>
        <p class="text-sm text-gray-500">
            Kelola semua aspirasi siswa
        </p>
    </div>

    <!-- FILTER -->
    <div class="bg-white p-5 rounded-xl shadow mb-6">
        <form action="{{ route('dashboard') }}" method="GET"
            class="grid grid-cols-1 md:grid-cols-5 gap-4">

            <input type="text" name="search" value="{{ request('search') }}"
                placeholder="Cari nama / lokasi..."
                class="rounded-lg border-gray-300 text-sm focus:ring-2 focus:ring-indigo-500">

            <select name="category_id"
                class="rounded-lg border-gray-300 text-sm focus:ring-2 focus:ring-indigo-500">
                <option value="">Semua Kategori</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->category_name }}
                    </option>
                @endforeach
            </select>

            <select name="status"
                class="rounded-lg border-gray-300 text-sm focus:ring-2 focus:ring-indigo-500">
                <option value="">Semua Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>⏳ Pending</option>
                <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>⚙️ Processing</option>
                <option value="done" {{ request('status') == 'done' ? 'selected' : '' }}>✅ Done</option>
            </select>

            <div></div>

            <!-- BUTTON FILTER MODERN -->
            <button type="submit"
    class="w-full flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold py-2 rounded-lg shadow-md transition duration-200">
    🔍 Filter Data
</button>

        </form>
    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <div class="px-6 py-4 border-b">
            <h3 class="font-semibold text-gray-700">Daftar Aspirasi</h3>
        </div>

        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-xs uppercase text-gray-600">
                <tr>
                    <th class="px-6 py-3 text-left">Pelapor</th>
                    <th class="px-6 py-3 text-left">Kategori</th>
                    <th class="px-6 py-3 text-left">Aspirasi</th>
                    <th class="px-6 py-3 text-center">Tindakan</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @foreach ($aspirasis as $row)
                    <tr class="hover:bg-gray-50">

                        <!-- USER -->
                        <td class="px-6 py-4">
                            <div class="font-semibold">{{ $row->user->name }}</div>
                            <div class="text-xs text-gray-500">{{ $row->user->username }}</div>
                        </td>

                        <!-- KATEGORI -->
                        <td class="px-6 py-4">
                            <div class="text-indigo-600 font-medium">
                                {{ $row->category->category_name }}
                            </div>
                            <div class="text-xs text-gray-400">
                                {{ $row->location }}
                            </div>
                        </td>

                        <!-- DESKRIPSI -->
                        <td class="px-6 py-4 text-gray-600">
                            {{ $row->description }}
                        </td>

                        <!-- AKSI -->
                        <td class="px-6 py-4">
                            <form action="{{ route('aspirasi.update', $row->id) }}" method="POST"
                                class="space-y-3">
                                @csrf

                                <!-- STATUS -->
                                <select name="status"
                                    class="w-full text-xs rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500">
                                    <option value="pending" {{ $row->status == 'pending' ? 'selected' : '' }}>⏳ Pending</option>
                                    <option value="processing" {{ $row->status == 'processing' ? 'selected' : '' }}>⚙️ Processing</option>
                                    <option value="done" {{ $row->status == 'done' ? 'selected' : '' }}>✅ Done</option>
                                </select>

                                <!-- FEEDBACK -->
                                <textarea name="feedback" rows="2"
                                    class="w-full text-xs rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500"
                                    placeholder="Tulis tanggapan..."
                                    required>{{ $row->feedback->content ?? '' }}</textarea>

                                <!-- BUTTON SIMPAN MODERN -->
                                <button type="submit"
                                    class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-indigo-600 to-blue-600 text-white text-xs font-semibold py-2 rounded-lg shadow-md hover:from-indigo-700 hover:to-blue-700 hover:shadow-lg transition duration-200">
                                    💾 Simpan
                                </button>

                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-app-layout>