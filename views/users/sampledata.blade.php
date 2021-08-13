<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Sample Data 
            </div>
        </div>
    </div>
</div>

<table border="5">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Operation</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td><a href={{"delete/".$user['id']}}>Delete</a></td> 
    </tr>
    @endforeach
</table>