const getFirstWords = (text, numberOfWords = 10) => {
    let words = text.split(' ');
    let result = "";
    if (words.length <= numberOfWords) {
        result = text;
    } else {
        result = words.slice(0, numberOfWords).join(' ') + '...';
    }
    return result;
}

const getCanonical = (string) => {
    string = string.trim();
    string = string.toLowerCase();
    string = string.replace('á', 'a').replace('é', 'e').replace('í', 'i').replace('ó', 'o').replace('ú', 'u').replace('ñ', 'n');
    string = string.replace(/[^(\w\s)]*/, '');
    string = string.replace(/\s/g, '-');
    return string;
}

const getBooksHTML = (data) => {
    let html = "";
    data.forEach(element => {
        html += `
        <div class="col-md-3 col-sm-12 my-2">
            <div class="card book-card">
                <img src="${element.image}" onerror="this.src = 'https://kravmaganewcastle.com.au/wp-content/uploads/2017/04/default-image-620x600.jpg';return true;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">${element.title}</h5>
                    <p class="card-text">${getFirstWords(element.description)}</p>
                    <div class="book-btn-div">
                        <a href="${root_path + '/libro/' + getCanonical(element.title)}-${element.id}" class="btn btn-outline-primary">Ver libro</a>
                    </div>
                </div>
            </div>
        </div>
        `;
    });
    return html;
}

const loadMore = () => {
    let formData = new FormData;
    let newPage = parseInt(page.value) + 1;
    formData.append('page', newPage);
    formData.append('listSize', listSize.value);
    fetch(root_path + "/actions/loadMoreBooks.php", {
        method: "post",
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data.length > 0) {
                let html = getBooksHTML(data);
                bookList.innerHTML = bookList.innerHTML + html;
                page.value = newPage;
            } else {
                loadMoreBtn.setAttribute('disabled', true);
            }

        });
}

const searchBooks = () => {
    let formData = new FormData;
    formData.append("query", searchBook.value);
    formData.append('listSize', listSize.value);
    fetch(root_path + "/actions/searchBooks.php", {
        method: "post",
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            if (data.length > 0) {
                let html = getBooksHTML(data);
                bookList.innerHTML = html;
            } else {
                // TODO
            }
        });
}

loadMoreBtn.addEventListener('click', loadMore);
searchBook.addEventListener('keyup', searchBooks);
searchBook.addEventListener('input', searchBooks);