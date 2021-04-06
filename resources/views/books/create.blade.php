<x-template>
    <div class="container">
        <h1>
            Create New Book
        </h1>
        <form action="{{ route('books.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 0.4em;">
            <input type="text" placeholder="book name" name="name">
            <input type="text" placeholder="book author" name="author">
            <button>Submit</button>
        </form>
    </div>
</x-template>

<style>
    .container{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background:rgb(196, 196, 196);
    }
    input{
        padding: 0.4em;
        border: 2px solid transparent;
        border-radius: 0.2em;
    }
    input:focus{
        border: 2px solid rgb(74, 176, 223);
    }

    li{
        list-style-type: none;
    }
</style>