document.addEventListener('DOMContentLoaded', function() {
    // Function to check if an element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll event for recommended books
    function handleRecommendedBooksScroll() {
        const books = document.querySelectorAll('.recommended-books .book');
        books.forEach(book => {
            if (isInViewport(book)) {
                book.style.opacity = 1;
                book.classList.add('animate-book');
            }
        });
    }

    // Function to handle scroll event for non-fiction books
    function handleNonFictionBooksScroll() {
        const categories = document.querySelectorAll('.non-fiction-books .category');
        categories.forEach(category => {
            if (isInViewport(category)) {
                category.style.opacity = 1;
                category.classList.add('animate-category');
            }
        });
    }

    // Add scroll event listener for recommended books
    window.addEventListener('scroll', handleRecommendedBooksScroll);

    // Add scroll event listener for non-fiction books
    window.addEventListener('scroll', handleNonFictionBooksScroll);

    // Trigger scroll event handlers initially in case elements are already in viewport on page load
    handleRecommendedBooksScroll();
    handleNonFictionBooksScroll();
});
