<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        {{ $articles->onEachSide(1)->links() }}
    </ul>
</nav>