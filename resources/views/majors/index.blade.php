<x-default-layout title="Majors" section_title="Majors List">
    <div class="flex flex-col gap-4">
        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">All Majors</h2>
            <a href="{{ route('majors.create') }}" class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                <i class="ph ph-plus block text-blue-500"></i>
                <span>Add New Major</span>
            </a>
        </div>

        <div class="bg-white border border-zinc-100 shadow overflow-hidden">
            <table class="min-w-full divide-y divide-zinc-200">
                <thead class="bg-zinc-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Code</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Total Students</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-zinc-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-zinc-200">
                    @forelse ($majors as $major)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $major->code }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $major->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $major->total_students }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex gap-2">
                                    <a href="{{ route('majors.detail', $major->id) }}" class="text-blue-600 hover:text-blue-900">
                                        <i class="ph ph-eye"></i>
                                    </a>
                                    <a href="{{ route('majors.edit', $major->id) }}" class="text-yellow-600 hover:text-yellow-900">
                                        <i class="ph ph-pencil"></i>
                                    </a>
                                    <form action="{{ route('majors.destroy', $major->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this major?')">
                                            <i class="ph ph-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-zinc-500">No majors found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>