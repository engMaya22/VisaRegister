<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Users Info:
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="shrink-0 flex items-center">
                        <table class="table align-middle">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Date of Arrival</th>
                                <th scope="col">Proffession</th>
                                <th scope="col">Personal Image</th>
                                <th scope="col">Passport Image</th>
                                <th scope="col">Room Type</th>
                                <th scope="col">Date of Arrival</th>
                                <th scope="col">Date of Departure</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->visa->date_of_birth}}</td>
                                    <td>{{$user->visa->arrival_date}}</td>
                                    <td>{{$user->visa->proffession}}</td>
                                    <td class="align-middle"> <img  align="center" width="100" height="100" src="{{ asset($user->visa->personal_image)}}"  width="100" height="100"   alt="picture"/></td>
                                    <td class="align-middle"><img  align="center" width="100" height="100" src="{{ asset($user->visa->passport_image)}}"  width="100" height="100"   alt="picture"/></td>
                                    <td>{{$user->residencePrefernces->type}}</td>
                                    <td>{{$user->residencePrefernces->arrival_date}}</td>
                                    <td>{{$user->residencePrefernces->departure_date}}</td>
                                  </tr>
                              
                                @endforeach
                             </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
