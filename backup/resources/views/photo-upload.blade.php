<html>
<head>
    
</head>

<style>
    
section.photo-upload-section {
    padding: 5rem 0;
}

.photo-upload-description {
    padding: 1rem 0;
}

.photo-upload-description p {
    font-size: 1.3rem;
    color: #696666;
    font-weight: 500;
}

    /*Upload form desing*/
    
.file-upload-form {
  width: fit-content;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.file-upload-label input {
  display: none;
}

.file-upload-label svg {
  height: 50px;
  fill: #399CE3;
  margin-bottom: 20px;
}

.file-upload-label {
  cursor: pointer;
  padding: 30px 80px 50px 80px;
  border-radius: 40px;
  border: 2px dashed #399CE3;
}

.file-upload-design {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
}

.file-upload-design img {
    width: 300px;
    height: 300px;
    padding: 36px;
}

.file-upload-design .clear-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    border: none;
    background: linear-gradient(180deg, rgba(8, 167, 86, 1) 0%, rgba(77, 154, 58, 1) 100%);
    padding: 10px;
    border-radius: 50%;
}

.file-upload-form .upload-btn {
    position: absolute;
    bottom: 40px;
    border: none;
    text-decoration: none;
    color: #fff !important;
    letter-spacing: 1px;
    border-bottom-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 8px 24px;
    background: linear-gradient(to right, #03a350, #278152);
}

.file-upload-design .clear-btn i {
    color: #fff;
    width: 14px;
}

.browse-button {
  background-color: #399CE3;
  padding: 5px 15px;
  border-radius: 10px;
  color: white;
  transition: all 0.3s;
  display: flex;
  gap: 15px;
  align-items: center;
}

.browse-button:hover {
  background-color: rgb(14, 14, 14);
}

.photo-upload-box {
    border: 2px solid #00A859;
    padding: 1rem 3rem;
    border-radius: 10px;
}

.photo-upload-box p {
    font-size: 1.5rem;
    font-weight: 500;
}

.photo-upload-box a {
    font-size: 1.5rem;
    font-weight: 500;
    text-decoration: none;
    margin-bottom: 1rem;
}

.photo-upload-step p {
    font-size: 1.5rem;
    color: #818181;
    text-align: center;
    font-weight: 500;
    width: 70%;
}

.photo-upload-step img {
    width: 50%;
    transition: .3s;
}

.photo-upload-step {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.drag-drop {
    font-size: 1.7rem;
    font-weight: 600;
    letter-spacing: 1px;
}

p.upload-btn-text {
    position: absolute;
    bottom: 0px;
    color: #818181;
}

.photo-upload-step img:hover {
    transform: translateY(-8px);
}

@media screen and (max-width: 767px) {
    
    .file-upload-label {
        padding: 30px 50px 50px 50px !important;
    }
    
    .photo-upload-box p {
        font-size: 1rem;
    }
    
    .photo-upload-box a {
        font-size: 1rem;
    }
    
    .file-upload-design p:nth-child(1) {
        font-size: 1.3rem !important;
    }
    
    .file-upload-design img {
        width: 200px;
        height: 200px;
        padding: 25px;
    }
    
    .file-upload-form .upload-btn {
        bottom: 30px;
    }
    
    .drag-drop {
        font-size: 1.4rem !important;
    }
    
    p.upload-btn-text {
        bottom: 5px !important;
        margin: 0 !important;
    }
    
}
    
    
</style>


<body>
    

    <!--start header-->
    
    @include('include.header2')
    
    <!--end header-->
    
<section class="photo-upload-section">
    

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-12">
                <div class="web-title">
                    <h3>Photo Upload</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="photo-upload-description">
                    <p>1. Why should we necessarily attach a photo of Bride/Groom in Kettimelam Matrimony Website?</p>
                    <p>2. As the saying goes 'A Photograph speaks Thousand words. And truly, a photo of him/her alongside the Biodata adds life to the details.</p>
                    <p>3. Did you know that profiles with photos get 75 times more response?</p>
                    <p>4. Add Passport and full view postcard size each one photos and see the difference.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <form class="file-upload-form">
                  <label for="file" class="file-upload-label">
                    <div class="file-upload-design">
                      <svg viewBox="0 0 640 512" height="1em">
                        <path
                          d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                        ></path>
                      </svg>
                      <p style="font-size: 1.7rem;font-weight: 600;letter-spacing: 1px;" class="drag-drop">Drag and Drop</p>
                      <p style="font-size: 1.3rem;font-weight: 400;color: #818181;">or</p>
                      <span class="browse-button"> <i class="fal fa-upload"></i> Upload Files</span>
                      <p style="font-size: 1rem;font-weight: 400;color: #818181;margin-top: 10px;">From Device</p>
                    </div>
                    <input id="file" type="file" onchange="previewFile()" />
                  </label>
                </form>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-12">
                <div class="photo-upload-description">
                    <p style="color:#000;"><b>Notes :</b></p>
                    <p>1. If your photo is not in GIF/JPEG format or if the image size is more than 2MB,Email your photos to us and we will upload it absolutely FREE!</p>
                    <p>2. Email or Whatsapp send your photos,kindly mention your Kettimelam Matrimony ID compulsory.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-lg-12">
                <div class="web-title">
                    <h3>Other Way To Upload Photo</h3>
                </div>
            </div>
            <div class="col-lg-6 my-2">
                <div class="photo-upload-box">
                    <p>Email your photos to</p>
                    <a href="mailto:kettimelamphoto@gmail.com" style="color:#00A859;">kettimelamphoto@gmail.com</a>
                    <p>and we will upload it for you FREE</p>
                </div>
            </div>
            <div class="col-lg-6 my-2">
                <div class="photo-upload-box">
                    <p>Whatsapp your photos to</p>
                    <a href="tel:+917358768433" style="color:#00A859;">+91 7358768433</a>
                    <p>and we will upload them instanly.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-lg-12">
                <div class="photo-upload-description text-center">
                    <p style="color:#6A6A6A;font-size:2rem;"><b>Whatsapp your photo to us!</b</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="photo-upload-step">
                    <p>Step 1</p>
                    <img src="images/step-1.webp" alt="step-1">
                    <p>Take Photo Of Yourself</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="photo-upload-step">
                    <p>Step 2</p>
                    <img src="images/step-2.webp" alt="step-1">
                    <p>Add <span style="color:#00A859;">+91 7358768433</span> to your contact list</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="photo-upload-step">
                    <p>Step 3</p>
                    <img src="images/step-3.webp" alt="step-1">
                    <p>Send your photo along with your matrimony ID via whatsapp</p>
                </div>
            </div>
        </div>
    </div>    

    
</section>    

    <!--start footer-->
    
    @include('include.footer')
    
    <!--end footer-->
    

<script>
    let previousContent = '';

    function previewFile() {
        const preview = document.querySelector('.file-upload-design');
        const fileInput = document.querySelector('input[type=file]').files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            const img = document.createElement('img');
            img.src = reader.result;
            img.classList.add('uploaded-image');

            // Store previous content
            previousContent = preview.innerHTML;

            // Clear previous content
            preview.innerHTML = '';
            
            // Append the uploaded image
            preview.appendChild(img);

            // Add clear button
            const clearButton = document.createElement('button');
            clearButton.innerHTML = '<i class="fal fa-times"></i>';
            clearButton.classList.add('clear-btn');
            clearButton.addEventListener('click', clearFile);
            preview.appendChild(clearButton);

            // Find the file upload label element
            const fileUploadLabel = document.querySelector('.file-upload-label');
            
            // Create an input element
            const uploadButton = document.createElement('input');
            uploadButton.type = 'submit';
            uploadButton.value = 'Upload';
            uploadButton.id = 'upload-btn';
            uploadButton.classList.add('upload-btn');
            
            // Insert the input element after the file upload label
            fileUploadLabel.insertAdjacentElement('afterend', uploadButton);
            
            // Create and append the upload button text
            const uploadButtonText = document.createElement('p');
            uploadButtonText.classList.add('upload-btn-text');
            uploadButtonText.textContent = '*Within 2MB of size. jpg, png, JPEG';
            uploadButton.insertAdjacentElement('afterend', uploadButtonText);

        }

        if (fileInput) {
            reader.readAsDataURL(fileInput);
        }
    }

    function clearFile() {
        event.preventDefault(); // Prevent default button click behavior
        
        const preview = document.querySelector('.file-upload-design');
        
        // Restore previous content
        preview.innerHTML = previousContent;
        
        // Reset the file input (optional)
        document.querySelector('input[type=file]').value = '';
        
        // Remove the upload button
        const uploadButton = document.querySelector('.upload-btn');
        if (uploadButton) {
            uploadButton.remove();
        }
        
        // Remove the upload button text
        const uploadButtonText = document.querySelector('.upload-btn-text');
        if (uploadButtonText) {
            uploadButtonText.remove();
        }
    }
</script>
    
    
</body>    
</html>