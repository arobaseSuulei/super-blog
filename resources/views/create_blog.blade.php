<x-navbar title="New ideas">




    <form method="POST" action="/posts">
        @csrf

        <div>
            <label>Title</label>
            <input type="text" name="title">
        </div>

        <div>
            <label>Cover URL</label>
            <input type="text" name="cover">
        </div>

        <div>
            <label>Content</label>
            <textarea name="content"></textarea>
        </div>

        <div>
            <label>Image URL</label>
            <input type="text" name="image">
        </div>

        <button type="submit">Create</button>
    </form>









</x-navbar>
