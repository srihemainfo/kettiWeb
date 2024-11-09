<head>
    
 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>    
    
</head>

 @include('include.header2')
 
 
<section class="document-upload-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center">
                <h1>Document Upload</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Select The <strong>Govt. ID*</strong></label>
                    <select class="form-control mb-3">
                        <option selected>Select</option>
                        <option>Option</option>
                        <option>Option</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreviewFront">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">FRONT</label>
                <input type="file" id="fileInputFront" style="display: none;" accept="image/*">
                <div class="upload-preview mb-3" id="filePreviewBack">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">BACK</label>
                <input type="file" id="fileInputBack" style="display: none;" accept="image/*">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Medical Certificate</label>
                    <select class="form-control mb-3">
                        <option selected>Select</option>
                        <option>Option</option>
                        <option>Option</option>
                    </select>
                    <input type="file" hidden class="fileID" id="fileID1" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay1"></label>
                    <button class="upload-document-btn" data-file-id="fileID1" data-preview-id="filePreview1" data-filename-id="fileNameDisplay1">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview1">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <!-- Repeat the above block for each file input, changing the IDs incrementally -->
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Bio Data</label> <br>
                    <input type="file" hidden class="fileID" id="fileID2" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay2"></label>
                    <button class="upload-document-btn" data-file-id="fileID2" data-preview-id="filePreview2" data-filename-id="fileNameDisplay2">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview2">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Education Details</label> <br>
                    <input type="file" hidden class="fileID" id="fileID3" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay3"></label>
                    <button class="upload-document-btn" data-file-id="fileID3" data-preview-id="filePreview3" data-filename-id="fileNameDisplay3">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview3">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Income Certificate</label> <br>
                    <input type="file" hidden class="fileID" id="fileID4" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay4"></label>
                    <button class="upload-document-btn" data-file-id="fileID4" data-preview-id="filePreview4" data-filename-id="fileNameDisplay4">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview4">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Horoscope</label> <br>
                    <input type="file" hidden class="fileID" id="fileID5" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay5"></label>
                    <button class="upload-document-btn" data-file-id="fileID5" data-preview-id="filePreview5" data-filename-id="fileNameDisplay5">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview5">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Employment Details</label> <br>
                    <input type="file" hidden class="fileID" id="fileID6" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay6"></label>
                    <button class="upload-document-btn" data-file-id="fileID6" data-preview-id="filePreview6" data-filename-id="fileNameDisplay6">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview6">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Divorce Certificate</label> <br>
                    <input type="file" hidden class="fileID" id="fileID7" style="display:none;" accept="image/*">
                    <label class="form-label fileNameDisplay" id="fileNameDisplay7"></label>
                    <button class="upload-document-btn" data-file-id="fileID7" data-preview-id="filePreview7" data-filename-id="fileNameDisplay7">
                        <i class="fal fa-upload"></i> Choose File
                    </button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 d-flex align-items-center flex-column">
                <div class="upload-preview mb-3" id="filePreview7">
                    <i class="fad fa-camera fa-5x"></i>
                </div>
                <label class="form-label">PREVIEW</label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label class="form-label" style="font-size:20px;">Others</label>
                    <select class="form-control mb-3">
                        <option selected>Select</option>
                        <option>Option</option>
                        <option>Option</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="next-btn text-center m-4">
                    <buttton class="theme-btn">Submit</buttton>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

// Front Back Upload preview

document.addEventListener('DOMContentLoaded', function () {
    const fileInputFront = document.getElementById('fileInputFront');
    const fileInputBack = document.getElementById('fileInputBack');
    const filePreviewFront = document.getElementById('filePreviewFront');
    const filePreviewBack = document.getElementById('filePreviewBack');

    filePreviewFront.addEventListener('click', function () {
        fileInputFront.click();
    });

    filePreviewBack.addEventListener('click', function () {
        fileInputBack.click();
    });

    fileInputFront.addEventListener('change', function () {
        previewFile(fileInputFront, filePreviewFront);
    });

    fileInputBack.addEventListener('change', function () {
        previewFile(fileInputBack, filePreviewBack);
    });

    function previewFile(input, previewElement) {
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            previewElement.innerHTML = `<img src="${reader.result}" alt="Preview" style="max-width: fit-content; max-height: 100%;">`;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            previewElement.innerHTML = '<i class="fad fa-camera fa-5x"></i>';
        }
    }
});



// Working for all the uploadButton

document.querySelectorAll('.upload-document-btn').forEach(button => {
    button.addEventListener('click', function() {
        let fileID = this.getAttribute('data-file-id');
        document.getElementById(fileID).click();
    });
});

document.querySelectorAll('.fileID').forEach(input => {
    input.addEventListener('change', function() {
        let fileID = this.id;
        let previewID = document.querySelector(`button[data-file-id="${fileID}"]`).getAttribute('data-preview-id');
        let fileNameDisplayID = document.querySelector(`button[data-file-id="${fileID}"]`).getAttribute('data-filename-id');

        let filePreview = document.getElementById(previewID);
        let fileNameDisplay = document.getElementById(fileNameDisplayID);
        filePreview.innerHTML = ''; // Clear any previous content

        if (this.files.length > 0) {
            let file = this.files[0];
            let fileName = file.name;
            let fileType = file.type;
            fileNameDisplay.textContent = 'Selected file: ' + fileName;

            if (fileType.startsWith('image/')) {
                // Create an image element and set its source to the uploaded file
                let img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.maxWidth = 'fit-content';
                img.style.maxHeight = '100%';
                filePreview.appendChild(img);
            } else {
                // Display the file name for non-image files
                let fileNameElement = document.createElement('p');
                fileNameElement.textContent = 'Selected file: ' + fileName;
                filePreview.appendChild(fileNameElement);
            }
        } else {
            filePreview.textContent = 'No file chosen';
        }
    });
});

    
</script>


 @include('include.footer')
