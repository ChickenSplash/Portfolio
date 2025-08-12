function fetchImage() {
    fetch(`https://picsum.photos/${width}/${height}`)
        .then(response => {
            if (!response.ok || !width || !height) { // is the respons not ok or no width value or no height value?
                throw new Error('HTTP error: ' + response.status);
            }
            return response.blob();
        })
        .then(data => { // loads the url to the loaded image
            const imageURL = URL.createObjectURL(data);
            imgElement.src = imageURL;
        })
        .catch(error => {
            console.warn("Failed to fetch image:", error);
            showPopUp("Failed to load image");
        })
        .finally(() => {
            loader.classList.remove("active");
            imgElement.classList.remove("loading-blur");
        });
}