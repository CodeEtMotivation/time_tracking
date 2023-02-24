<x-app-layout>
    <div class="container">
        
            <div class="p-6 mt-10 bg-white text-black rounded-lg">
                <div class="flex justify-between items-center pb-4">
                    <h2 class="text-xl font-semibold leading-loose text-black ">Listes des utilisateurs</h2>
                    <button class="flex py-3 px-4 border-gray-700 gap-x-2.5">
                        <span class="btn btn-primary">enregistrer</span>
                    </button>
                </div>
                <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold text-black ">
                    <td class="py-4 border-b border-gray-700">profile</td>
                    <td class="py-4 border-b border-gray-700">email</td>
                    <td class="py-4 border-b border-gray-700 text-right">Status</td>
                    <td class="py-4 border-b border-gray-700 text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($users))
                        @foreach ($users as $user)
                            <tr class="text-sm text-gray-500">
                                <td class="py-4">
                                    <div class="flex gap-4 items-center">
                                    <img width="32" src="{{Storage::url($user->photo)}}" alt="dssd" />
                                    <span>{{$user->name}}</span>
                                    </div>
                                </td>
                            <td class="py-4">{{$user->email}}</td>
                                <td class="py-4 tabular-nums text-right">
                                    @if ($user->admin == 1)
                                        Admin
                                    @else
                                        Simple User
                                    @endif
                                </td>
                                <td class="py-4 flex justify-center">
                                    <a href="" class="btn btn-primary">upd</a>
                                    <a href="" class="btn btn-danger">del</a>
                                </td>
                            </tr>
                        @endforeach
                    @else 
                            pas d'enregistrement !
                    @endif
                        
                  
                </tbody>
                </table>
           </div>
          
    </div>    
    
</x-app-layout>    
