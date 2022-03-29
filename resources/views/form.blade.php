<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <br/>
                     <!-- form validasi -->
                     <form action="/proses" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                    @error('nama')
                                               <div class="alert alert-danger">{{ $message }}</div>
                                       @enderror
                                
                                    <img id="output"/>
                                    <script>
                                      var loadFile = function(event) {
                                        var output = document.getElementById('output');
                                        output.src = URL.createObjectURL(event.target.files[0]);
                                        output.onload = function() {
                                          URL.revokeObjectURL(output.src) // free memory
                                        }
                                      };
                                    </script>
                                </div>

                                <div class="form-group">
                                       <input class="btn btn-primary" type="submit" value="Submit">
                                 </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
