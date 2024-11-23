<form id="createBinForm" action="{{ route('bins.store') }}" method="POST">
    @csrf
    <input type="hidden" id="latitude"name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <label for="name">Name:</label> <input type="text" id="name" name="name" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <button type="submit"class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"> Submit
    </button>
</form>
