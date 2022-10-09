<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Note
        </h2>
    </x-slot>

    <div class="py-12 px-20">

        <form method="post" action="{{route('note.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">

                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                Note Body
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <textarea name="body"
                                    class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 @error('body') border-red-500 @enderror">{{old('body')}}</textarea>
                            </div>
                            @error('content')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2 togglebutton">
                        <label class="block text-sm font-medium text-gray-700">
                            is Public ?
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="checkbox" name="is_public" {{ old('is_public') ? 'checked' : '' }}>

                        </div>
                        @error('content')
                        <div class="text-red-600">{{$message}}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 flex justify-self-end">
                    Create Note
                </button>
            </div>
    </div>

    </form>

    </div>
</x-app-layout>