<x-default-layout title="Major Detail" section_title="Major Detail">
    <div class="grid grid-cols-7">
        <div class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-100 shadow col-span-3 md:col-span-2">
            <div class="flex flex-col gap-2">
                <label class="text-zinc-500">Major Code</label>
                <p class="text-lg">{{ $major->code }}</p>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-zinc-500">Major Name</label>
                <p class="text-lg">{{ $major->name }}</p>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-zinc-500">Description</label>
                <p class="text-lg">{{ $major->description }}</p>
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-zinc-500">Total Students</label>
                <p class="text-lg">{{ $major->total_students }}</p>
            </div>

            <div class="self-end flex gap-2">
                <a href="{{ route('majors.index') }}" class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    Back
                </a>
                <a href="{{ route('majors.edit', $major->id) }}" class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-pencil block text-blue-500"></i>
                    <span>Edit</span>
                </a>
            </div>
        </div>
    </div>
</x-default-layout>