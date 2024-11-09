<!doctype html>
<html lang="en">

<body>

    <!--start header-->

    @include('include.header')
    <!--end header-->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img1.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2>
                                    <h2 class="welsub-head">Physical Attributes</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Blood Group<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>O</option>
                                                            <option>B+</option>
                                                            <option>B-</option>
                                                            <option>A+</option>
                                                            <option>A-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Height<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>169</option>
                                                            <option>170</option>
                                                            <option>171</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Body Type<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Complexion<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Eating Habits<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Family Details</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Family Status<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Family God<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Father's Work /
                                                            Occupation<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Father's Work /
                                                            Occupation<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Native Place<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img3.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Family Details</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Family Details<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Elder Brothers<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Elder Sisters<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Younger
                                                            Brothers<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-5">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Younger
                                                            Sisters<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 4 -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Communication Address And Details</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Country Living
                                                            In<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">State Living
                                                            In<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">District
                                                            Living<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Taluk Living
                                                            In<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">City / Village<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Area /
                                                            Location<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal5">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 5 -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Door No &
                                                            Street<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Pin Code<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="welsub-head mb-3">Others</h2>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Photo Upload<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Proof Of Identify
                                                            Upload<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Horoscope
                                                            Upload<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal6">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 6 -->
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Horoscope Basic Info</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Do You Have
                                                            Horoscope?<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2"
                                                            value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Date Of Birth<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="date" class="form-control"
                                                            placeholder="Pick a Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Birth Day<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Time of Birth<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="time" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Place of Birth<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Gothram<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal7">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 7 -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <!-- <h2 class="welsub-head">Horoscope Basic Info</h2> -->
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Star<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Rasi<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Laknam<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Dosham<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-5">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Padham<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal8">Next <i
                                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 8 -->
    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <!-- <h2 class="welsub-head">Horoscope Basic Info</h2> -->
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Property
                                                            Details<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Do You Have Own
                                                            Flat / House?<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Caste No Bar<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio1"
                                                                value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="inlineRadio2"
                                                                value="option2">
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Proof Of
                                                            Identify<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Expectations<span
                                                                class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#">Next <i class="fas fa-chevron-right"></i><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--slider-->
    <section class="slider-wrapper"
        style="background: url(images/slider.webp) no-repeat center center; background-size: cover;">


        <div class="slider">

            <h1 class="wow fadeInUp" data-wow-duration="2s"> Find here your Perfect Better Half</h1>

            <div class="form-container">

                <div class="form-box wow fadeInUp" data-wow-duration="2s">
                    <label class="form-label">I'm looking for a</label>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="gender"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="gender">
                            <li><a class="dropdown-item" href="#">Groom</a></li>
                            <li><a class="dropdown-item" href="#">Bride</a></li>

                        </ul>
                    </div>


                </div>


                <div class="form-box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                    <label class="form-label">Aged</label>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="age"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            From
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="age">
                            <li><a class="dropdown-item" href="#">18-25</a></li>
                            <li><a class="dropdown-item" href="#">26-30</a></li>

                        </ul>
                    </div>

                </div>

                <div class="form-box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                    <label class="form-label">Religion</label>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="age"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Religion
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="age">
                            <li><a class="dropdown-item" href="#">Hindu</a></li>
                            <li><a class="dropdown-item" href="#">Christian</a></li>
                            <li><a class="dropdown-item" href="#">Muslim</a></li>
                        </ul>
                    </div>

                </div>

                <div class="form-box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".9s">
                    <label class="form-label">Mother Tongue</label>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="age"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Language
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="age">
                            <li><a class="dropdown-item" href="#">Tamil</a></li>
                            <li><a class="dropdown-item" href="#">Telugu</a></li>
                            <li><a class="dropdown-item" href="#">Kannada</a></li>
                        </ul>
                    </div>

                </div>

                <div class="form-box wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">
                    <button class="btn-web-green">Search</button>
                </div>

            </div>

        </div>




    </section>
    <!--slider-->
    <!--content area-->
    <section class="wrapper padding-1 bg-light-yellow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="web-title">
                        <h3>KettimelamMatrimony.com</h3>
                        <p>For Better Choice</p>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">

                    <div class="default-content-flex">
                        <div class="icon-flex">
                            <div class="digit">
                                <h6>1</h6>
                            </div>
                            <img src="images/register.webp" alt="">
                        </div>
                        <div class="default-flex-content">
                            <h4>Register</h4>
                            <p>Register for free & put up your Profile </p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">

                    <div class="default-content-flex">
                        <div class="icon-flex">
                            <div class="digit">
                                <h6>2</h6>
                            </div>
                            <img src="images/heart1.webp" alt="">
                        </div>
                        <div class="default-flex-content">
                            <h4>Connect</h4>
                            <p>Select & Connect with Matches you like</p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">

                    <div class="default-content-flex">
                        <div class="icon-flex">
                            <div class="digit">
                                <h6>3</h6>
                            </div>
                            <img src="images/symbol_1.webp" alt="">
                        </div>
                        <div class="default-flex-content">
                            <h4>Interact</h4>
                            <p>Become a Premium Member & Start a Conversation </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!--content area-->

    <!--content area-->
    <section class="wrapper padding-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="web-title wow fadeInUp" data-wow-duration="1s">
                        <h3>Latest Profile</h3>
                        <p>Find your Special Someone</p>
                    </div>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                </div>

                <div class="col-lg-11">
                    <div class="doggle-div mb-3">
                        <ul class="nav nav-tabs select-gender-tab" id="myTab" role="tablist">
                            <li class="nav-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"
                                role="presentation">
                                <button class="nav-link active" id="groom-tab" data-bs-toggle="tab"
                                    data-bs-target="#groom" type="button" role="tab" aria-controls="groom"
                                    aria-selected="true">Grooms List
                                </button>
                            </li>
                            <li class="nav-item wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"
                                role="presentation">
                                <button class="nav-link" id="bride-tab" data-bs-toggle="tab" data-bs-target="#bride"
                                    type="button" role="tab" aria-controls="bride" aria-selected="false">Brides
                                    List
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content bg-white" id="myTabContent">

                        <!--start groom-->
                        <div class="tab-pane fade show active" id="groom" role="tabpanel"
                            aria-labelledby="groom-tab">
                            <div class="profile-theme">

                                <div class="row" id="bf_login_male">

                                    <!--{{-- <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div> --}}-->
                                    <!--{{-- -->
                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/man.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>T.NAGARAJAN</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div> --}}-->

                                    <div class="col-lg-12 mt-4 text-center wow fadeInUp" data-wow-duration="2s">
                                        <a href="#" class="btn-web-green-big">View All</a>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <!--end groom-->

                        <!--start bride-->
                        <div class="tab-pane fade" id="bride" role="tabpanel" aria-labelledby="bridetab">
                            <div class="profile-theme">

                                <div class="row" id="bf_login_female">

                                    <!--{{-- <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s"-->
                                    <!--    data-wow-delay=".4s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s"-->
                                    <!--    data-wow-delay=".8s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s"-->
                                    <!--    data-wow-delay="1.2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s"-->
                                    <!--    data-wow-delay=".4s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s"-->
                                    <!--    data-wow-delay=".8s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s"-->
                                    <!--    data-wow-delay="1.2s">-->
                                    <!--    <div class="profile-box">-->
                                    <!--        <div class="profile-img">-->
                                    <!--            <img src="images/women.webp">-->
                                    <!--        </div>-->
                                    <!--        <div class="profile-details">-->
                                    <!--            <h4>S.DIVYA</h4>-->
                                    <!--            <ul>-->
                                    <!--                <li>Chennai</li>-->
                                    <!--                <li>Age : 30</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul>-->
                                    <!--                <li>MBC</li>-->
                                    <!--                <li>B,Sc.Phy</li>-->
                                    <!--            </ul>-->
                                    <!--            <ul class="groo-ul m-0 ">-->
                                    <!--                <li class="groom-li"><a href="#" class="view-pp">ID-->
                                    <!--                        KM1064</a>-->
                                    <!--                </li>-->
                                    <!--                <li class="groom-li"> <a href="#" class="profile-btn">View-->
                                    <!--                        Profile</a></li>-->
                                    <!--            </ul>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div> --}}-->

                                    <div class="col-lg-12 mt-4 text-center wow fadeInUp" data-wow-duration="2s">
                                        <a href="#" class="btn-web-green-big">View All</a>
                                    </div>

                                </div>
                            </div>
                            <!--end bride-->


                        </div>
                    </div>


                </div>
            </div>
    </section>
    <!--content area-->

    <!--content area-->
    <section class="wrapper padding-1 bg-pattern-1">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <div class="web-title wow fadeInUp" data-wow-duration="2s">

                        <h3 class="mb-3">Kettimelam Matrimony site with Over 5 Lakh Happy Stories
                        </h3>


                    </div>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" id="testimonials">
                        <div class="item wow fadeInLeft" data-wow-duration="2s">
                            <div class="default-content text-center">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>

                        <div class="item wow fadeInUp" data-wow-duration="2s">
                            <div class="default-content text-center">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>

                        <div class="item wow fadeInRight" data-wow-duration="2s">
                            <div class="default-content text-center">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>

                        <div class="item">
                            <div class="default-content">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp">
                    <div class="default-content text-center mt-4">
                        <a href="#" class="btn-web-green-big">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--content area-->


    <!--content area-->
    <section class="menu-wrapper overflow mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-md-6 p-0 wow fadeInLeft" data-wow-duration="2s">
                    <div class="doll-sec">
                        <div class="default-content text-center bg-box ">
                            <div class="con-img">
                                <img src="images/doll-2.webp" alt="" style="width:100px;height: 100px;">
                            </div>
                            <h3>Customer care</h3>
                            <p>For any assistance call</p>
                            <ul class="font-big">
                                <li><i class="far fa-clock"></i> 10 AM to 7.30 PM</li>
                                <li><i class="fas fa-phone-alt"></i> 735 876 8433, 044 - 4856 0155</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 p-0 wow fadeInRight" data-wow-duration="2s">
                    <div class="note-sec">
                        <div class="default-content text-center bg-box ">
                            <div class="con-img">
                                <img src="images/notes.webp" alt="" style="width:100px;height: 100px;">
                            </div>
                            <h3>Easy Registration</h3>
                            <p>Please send photos,Horoscope. Bio - Data Through</p>
                            <ul class="font-big">
                                <li><i class="far fa-clock"></i> 10 AM to 7.30 PM</li>
                                <li><i class="fas fa-phone-alt"></i> 733 887 4957</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--content area-->


    <!-- Carousel for Video -->


    <!-- Carousel for Video -->


    <!--content area-->
    <section class="wrapper padding-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="web-title">
                        <h3 class="wow fadeInUp" data-wow-duration="2s">Through our website all your<br>"Dreams Come
                            True". </h3>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">Aims or Goals can be
                            missed; But Trying should not be stopped.</p>
                    </div>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 p-4 wow fadeInLeft" data-wow-duration="2s">
                    <div class="default-content mb-4" style="position: relative;">
                        <img src="images/mrg1.webp" class="img-click">
                        <img src="images/youtube-player.webp" alt="youtube-player" class="youtube-player"
                            data-bs-toggle="modal" data-bs-target="#video-1">
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="video-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                        <div class="modal-content bg-transparant">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fas fa-times"></i></button>

                                <div class="default-content">
                                    <iframe src="https://www.youtube.com/embed/9j89dmRTGx8"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="col-lg-4 p-4 wow fadeInUp" data-wow-duration="2s">
                    <div class="default-content mb-4" style="position: relative;">
                        <img src="images/mrg2.webp" class="img-click">
                        <img src="images/youtube-player.webp" alt="youtube-player" class="youtube-player"
                            data-bs-toggle="modal" data-bs-target="#video-2">
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="video-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                        <div class="modal-content bg-transparant">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fas fa-times"></i></button>

                                <div class="default-content">
                                    <iframe src="https://www.youtube.com/embed/MM6EygDy-dI"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="col-lg-4 p-4 wow fadeInRight" data-wow-duration="2s">
                    <div class="default-content mb-4" style="position: relative;">
                        <img src="images/mrg3.webp" class="img-click">
                        <img src="images/youtube-player.webp" alt="youtube-player" class="youtube-player"
                            data-bs-toggle="modal" data-bs-target="#video-3">
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="video-3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                        <div class="modal-content bg-transparant">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fas fa-times"></i></button>

                                <div class="default-content">
                                    <iframe src="https://www.youtube.com/embed/MM6EygDy-dI"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s">

                    <div class="default-content text-center m-3">

                        <a href="#" class="btn-web-green-big">Register Now</a>

                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--content area-->

    <!-- green bar -->

    <section class="wrapper green-bar">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-duration="2s">
                    <div class="green-content">
                        <p>Love Is Waiting For You</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center wow fadeInUp" data-wow-duration="2s"
                    data-wow-delay=".5s">
                    <div class="green-btn">
                        <a class="grn-btn">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- green bar -->

    <!--content area-->
    <section class="wrapper padding-1 bg-light-green">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="web-title">
                        <h3>Search by Popular Matchmaking Sites
                        </h3>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="0.2s">
                            </div>
                            <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="0.2s"></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 wow fadeInLeft" data-wow-duration="2s">
                    <div class="search-links note-sec1 mb-4">
                        <h5>by Mother Tongue</h5>
                        <ul>
                            <li><a href=""> Tamil</a></li>

                            <li><a href="">Bengali</a></li>

                            <li><a href=""> Gujarati</a></li>

                            <li><a href=""> Hindi</a></li>

                            <li> <a href="">Kannada</a></li>

                            <li> <a href="">Malayalam</a></li>

                            <li> <a href="">Marathi</a></li>

                            <li> <a href="">Odia</a></li>


                            <li> <a href="">Punjabi</a></li>

                            <li> <a href="">Sindhi</a></li>

                            <li> <a href="">Telugu</a></li>

                            <li> <a href="">Odia</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="2s">
                    <div class="search-links note-sec1 mb-4">
                        <h5>by Religion</h5>
                        <ul>

                            <li><a href="">Hindu</a></li>
                            <li> <a href="">Buddhist</a></li>
                            <li> <a href="">Christian</a></li>
                            <li> <a href="">Jain</a></li>
                            <li> <a href="">Muslim</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-duration="2s">
                    <div class="search-links note-sec1 mb-4">
                        <h5>by Community</h5>
                        <ul>
                            <li><a href="">Adi Dravida</a></li>
                            <li> <a href="">Arya Vysya</a></li>
                            <li> <a href="">Brahmin</a></li>
                            <li> <a href="">Ezhava</a></li>
                            <li> <a href="">Iyer</a></li>
                            <li> <a href="">Kamma</a></li>
                            <li> <a href="">Maratha</a></li>
                            <li> <a href="">Nadar</a></li>
                            <li> <a href="">Nair</a></li>
                            <li> <a href="">Reddy</a></li>
                            <li> <a href="">Vokkaliga</a></li>
                            <li> <a href="">Yadav</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--content area-->

    @include('include.footer')

    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>



    <script>
        // $('#testimonials').owlCarousel({
        //     loop: true,
        //     margin: 30,
        //     nav: false,
        //     dots: true,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 1
        //         },
        //         1000: {
        //             items: 3
        //         }
        //     }
        // });
    </script>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
        $(document).ready(function() {
            ShowContents(); // Call the ShowContents function when the document is ready
        });

        function ShowContents() {
            $.ajax({
                type: 'post',
                url: "https://api.kettimelammatrimony.com/api/bf_login_latest_profile",
                success: function(response) {
                    if (response.code == 200) {
                        var maleHtml = ``;
                        var femaleHtml = ``;
                        for (var i = 0; i < response.data.male.length; i++) {
                            var profile = response.data.male[i];
                            maleHtml += `<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                    <div class="profile-box">
                                        <div class="profile-img">
                                            <img src="https://www.kettimelammatrimony.com/user-photo/${profile.image}">
                                        </div>
                                        <div class="profile-details">
                                            <h4>${profile.name}</h4>
                                            <ul>
                                                <li>${profile.city}</li>
                                                <li>Age : ${profile.age}</li>
                                            </ul>
                                            <ul>
                                                <li>${profile.caste}</li>
                                                <li>${profile.Sub_education}</li>
                                            </ul>
                                            <ul class="groo-ul m-0 ">
                                                <li class="groom-li"><a href="#" class="view-pp" data-bs-toggle="modal" data-bs-target="#login1">ID  <span>KM${profile.id}</span></a></li>
                                                <li class="groom-li"><a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View Profile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>`;
                        }

                        for (var i = 0; i < response.data.female.length; i++) {
                            var profile = response.data.female[i];
                            femaleHtml += `<div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                    <div class="profile-box">
                                        <div class="profile-img">
                                            <img src="https://www.kettimelammatrimony.com/user-photo/${profile.image}">
                                        </div>
                                        <div class="profile-details">
                                            <h4>${profile.name}</h4>
                                            <ul>
                                                <li>${profile.city}</li>
                                                <li>Age : ${profile.age}</li>
                                            </ul>
                                            <ul>
                                                <li>${profile.caste}</li>
                                                <li>${profile.Sub_education}</li>
                                            </ul>
                                            <ul class="groo-ul m-0 ">
                                                <li class="groom-li"><a href="#" class="view-pp" data-bs-toggle="modal" data-bs-target="#login1">ID  <span>KM${profile.id}</span></a></li>
                                                <li class="groom-li"><a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View Profile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>`;
                        }

                        $('#bf_login_male').html(maleHtml);
                        $('#bf_login_female').html(femaleHtml);
                    } else if (response.status == 400) {
                        // Handle status 400
                    } else if (response.status == 501) {
                        sessionStorage.clear();
                        deleteCookie('typeofuser');
                        deleteCookie('token');
                        deleteCookie('marital_acc');
                        window.location.href = '/user-login';
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error:', status, error);
                }
            });
        }
    </script>

    <script src="js/wow.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

</body>

</html>
