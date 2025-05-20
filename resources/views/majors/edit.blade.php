<x-default-layout title="Edit Major" section_title="Edit Major">
    <div class="grid grid-cols-7">
        <form action="{{ route('majors.update', $major->id) }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-100 shadow col-span-3 md:col-span-2">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flex flex-col gap-2">
                <label for="name">Major Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $major->name) }}"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="e.g., Teknik Informatika">
            </div>

            <div class="flex flex-col gap-2">
                <label for="code">Major Code</label>
                <input type="text" id="code" name="code" value="{{ old('code', $major->code) }}"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="e.g., TIF">
            </div>

            <div class="flex flex-col gap-2">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    placeholder="Describe the major...">{{ old('description', $major->description) }}</textarea>
            </div>

            <div class="flex flex-col gap-2">
                <label for="total_students">Total Students</label>
                <input type="number" id="total_students" name="total_students" value="{{ old('total_students', $major->total_students) }}"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50" placeholder="e.g., 120">
            </div>

            <div class="self-end flex gap-2">
                <a href="{{ route('majors.index') }}" class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Save Changes</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>