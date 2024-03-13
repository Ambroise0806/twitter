
    const imageInput = document.querySelector('#newImage_button');
    let uploadedImage = "";

    imageInput.addEventListener('change', function() {
        const reader = new FileReader();
        reader.addEventListener('load', () => {
            uploadedImage = reader.result;
            document.querySelector('#newPost_container').style.backgroundImage = `url(${uploadedImage})`;
        });
        reader.readAsDataURL(this.files[0]);
    })