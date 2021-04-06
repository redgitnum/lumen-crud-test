<x-template>
    <div class="container">
        <h1>
            This is a list of books
        </h1>
        <table>
            <thead>
                <tr>
                    <th class="list-block">Id</th>
                    <th class="list-block">Name</th>
                    <th class="list-block">Author</th>
                    <th class="list-block">Action</th>
                </tr>
            </thead>
            @foreach ($books as $book)
            <tbody>
                <tr>
                    <td class="list-block">{{ $book->id }}</td>
                    <td class="list-block">{{ $book->name }}</td>
                    <td class="list-block">{{ $book->author }}</td>
                    <td class="list-block" style="display: flex; gap:0.4em; align-items:center;">
                        <form action="{{ route('books.delete', ['id' => $book->id]) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <button style="background: rgb(243, 122, 122)">DELETE</button>
                        </form>
                        <form action="{{ route('books.edit', ['id' => $book->id]) }}" method="GET">
                            <button style="background: rgb(110, 223, 110)">UPDATE</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</x-template>

<style scoped>
    .container{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background:rgb(196, 196, 196);
    }
    .list-block:nth-child(2){
        background: rgba(255, 255, 255, 0.336);
    }
    table, td, th {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td, th {
        padding: 0.2em 0.4em;
    }

</style>