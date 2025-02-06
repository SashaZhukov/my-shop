const searchInput = document.getElementById('search')
const suggestionsBox = document.getElementById('suggestions')

function updateSuggestionBox (suggestions) {
    suggestionsBox.innerHTML = ''

    if (suggestions.length > 0) {
        suggestions.forEach(suggestion => {
            const suggestionItem = document.createElement('div')
            suggestionItem.classList.add('py-2', 'px-4', 'hover:bg-blueviolet', 'cursor-pointer', 'hover:text-white', 'rounded-[8px]')
            suggestionItem.textContent = suggestion
            suggestionsBox.append(suggestionItem)

            suggestionItem.addEventListener('click', function () {
                window.location.href = `/admin/users/search?query=${encodeURIComponent(suggestionItem.textContent)}`
            })
        })

        suggestionsBox.classList.remove('hidden')
    } else {
        suggestionsBox.classList.add('hidden');
    }

}

searchInput.addEventListener('input', function () {
    const query = searchInput.value.trim();

    if (query === '') {
        suggestionsBox.classList.add('hidden');
    } else {
        fetch(`/admin/users/search-suggestions?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                updateSuggestionBox(data.suggestions)
            })
            .catch(error => console.error('Ошибка:', error))
    }
});

searchInput.addEventListener('keydown', function () {
    if(event.key === 'Enter') {
        window.location.href = `/admin/users/search?query=${encodeURIComponent(searchInput.value)}`
    }
})

searchInput.addEventListener('blur', function () {
    setTimeout(() => suggestionsBox.classList.add('hidden'), 100)
})
