<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <input type="button" name="" id="btnajax" class="btn btn-primary" role="button" onclick="change_message()" value="click me">
    </div>
    <script>
        function change_message(){
            console.log('clicked');
            fetch('/test')
            .then(function (response) {
                // handle success
                console.log(response.json());
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    </script>
</x-app-layout>
