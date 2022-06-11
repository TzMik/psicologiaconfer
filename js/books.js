const loadMore = () => {
    let formData = new FormData;
    let newPage =  parseInt(page.value) + 1;
    formData.append('page', newPage);
    formData.append('listSize', listSize.value);
    fetch(root_path + "/actions/loadMoreBooks.php", {
        method: "post",
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            let html = "";
            data.forEach(element => {
                // TODO imprimir los libros conseguidos
            });
        });
}

loadMoreBtn.addEventListener('click', loadMore);