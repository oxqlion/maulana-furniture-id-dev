<!-- resources/views/components/search-form.blade.php -->

@props(['routeName'])

<div>
    <form action="{{ route($routeName) }}" method="GET">
        <input
            type="text"
            name="search"
            placeholder="Search"
            class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border"
        />
        <input type="submit" style="display:none;" />
    </form>
</div>
